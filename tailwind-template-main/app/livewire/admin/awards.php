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
        $this->reset(['editingId', 'title', 'description', 'image', 'year', 'existingImage']);
    }

    public function save()
    {
        $rules = [
            'title'       => 'required|min:3',
            'description' => 'required|min:5',
            'year'        => 'required|digits:4|integer|min:2000|max:' . (date('Y') + 1),
        ];

        // Gambar wajib diisi saat tambah baru, opsional saat edit
        $rules['image'] = $this->editingId ? 'nullable|image|max:2048' : 'required|image|max:2048';

        $this->validate($rules);

        $data = [
            'title'       => $this->title,
            'description' => $this->description,
            'year'        => $this->year,
        ];

        if ($this->image) {
            // Simpan gambar baru ke folder storage/app/public/awards
            $data['image'] = $this->image->store('awards', 'public');

            // Hapus gambar lama kalau sedang edit dan ada gambar baru
            if ($this->editingId && $this->existingImage) {
                Storage::disk('public')->delete($this->existingImage);
            }
        }

        $isUpdate = (bool) $this->editingId;

        if ($this->editingId) {
            Award::findOrFail($this->editingId)->update($data);
        } else {
            Award::create($data);
        }

        $this->logActivity(
            $isUpdate ? 'UPDATE' : 'CREATE',
            'Penghargaan: ' . $this->title
        );

        $this->closeModal();
        session()->flash('message', $isUpdate ? 'Penghargaan berhasil diperbarui!' : 'Penghargaan berhasil ditambahkan!');
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