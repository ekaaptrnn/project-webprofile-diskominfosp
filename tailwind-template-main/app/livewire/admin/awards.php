<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Award; // Import model Award
use App\Models\LogActivity;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Awards extends Component
{
    use WithFileUploads;

    public $isModalOpen = false;
    public $editingId = null;

    public $title;

    public $category;
    public $description;
    public $image;
    public $year;
    public $existingImage = null;

    public function openModal()
    {
        $this->reset(['editingId', 'title', 'description', 'image', 'existingImage']);
        $this->year = date('Y');
        $this->resetErrorBag();
        $this->isModalOpen = true;
    }

    public function openEdit(int $id)
    {
        $award = Award::findOrFail($id);

        $this->editingId = $award->id;
        $this->title = $award->title;
        $this->description = $award->description;
        $this->year = $award->year;
        $this->existingImage = $award->image;
        $this->image = null;

        $this->resetErrorBag();
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
        $this->reset(['editingId', 'title','category', 'description', 'image', 'year', 'existingImage']);
    }

    public function save()
    {
    $this->validate([
        'title'       => 'required',
        'year'        => 'required',
        'description' => 'required',
        'image'       => 'nullable|image|max:2048',
    ]);



    $data = [];

    // Mengisi Judul
    if (\Schema::hasColumn('awards', 'title')) {
        $data['title'] = $this->title;
    } elseif (\Schema::hasColumn('awards', 'judul')) {
        $data['judul'] = $this->title;
    }

    // Mengisi Tahun
    if (\Schema::hasColumn('awards', 'year')) {
        $data['year'] = $this->year;
    } elseif (\Schema::hasColumn('awards', 'tahun')) {
        $data['tahun'] = $this->year;
    }

    // Mengisi Deskripsi
    if (\Schema::hasColumn('awards', 'description')) {
        $data['description'] = $this->description;
    } elseif (\Schema::hasColumn('awards', 'deskripsi')) {
        $data['deskripsi'] = $this->description;
    }

    // Mengisi Gambar jika ada
    if ($this->image) {
        $path = $this->image->store('awards', 'public');
        if (\Schema::hasColumn('awards', 'image')) {
            $data['image'] = $path;
        } elseif (\Schema::hasColumn('awards', 'gambar')) {
            $data['gambar'] = $path;
        } elseif (\Schema::hasColumn('awards', 'thumbnail')) {
            $data['thumbnail'] = $path;
        }
    }

    // Simpan ke Database
    if ($this->editingId) {
        Award::findOrFail($this->editingId)->update($data);
    } else {
        Award::create($data);
    }

    $this->reset(['editingId', 'title', 'category', 'description', 'image', 'year', 'existingImage']);
    if (method_exists($this, 'closeModal')) {
        $this->closeModal();
    } else {
        $this->isModalOpen = false;
    }

    session()->flash('message', 'Penghargaan berhasil disimpan!');
    }
    public function delete(int $id)
    {
        $award = Award::findOrFail($id);
        $title = $award->title;

        if ($award->image) {
            Storage::disk('public')->delete($award->image);
        }
        $award->delete();

        $this->logActivity('DELETE', 'Penghargaan: ' . $title);

        session()->flash('message', 'Penghargaan berhasil dihapus.');
    }

    private function logActivity(string $method, string $description): void
    {
        // 1. Simpan ke database
        LogActivity::create([
            'user_id'     => auth()->id(),
            'subject'     => 'Penghargaan',
            'method'      => $method,
            'ip_address'  => request()->ip(),
            'description' => $description,
            'status'      => 'success',
        ]);

        // 2. Simpan juga ke file storage/logs/audit.log
        Log::channel('audit')->info(sprintf(
            'user_id=%s subject=Penghargaan method=%s ip=%s status=success description=%s',
            auth()->id(),
            $method,
            request()->ip(),
            $description
        ));
    }

    public function render()
    {
        // Ambil seluruh data penghargaan dari database (paling baru di atas)
        return view('livewire.admin.awards', [
            'awards' => Award::latest()->get()
        ])->layout('layouts.admin', ['title' => 'Kelola Penghargaan']);
    }
}
