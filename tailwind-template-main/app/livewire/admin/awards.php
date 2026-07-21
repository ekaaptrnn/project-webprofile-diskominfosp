<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Award; // 👈 Import model Award

class Awards extends Component
{
    use WithFileUploads;

    public $isModalOpen = false;
    public $title;
    public $description;
    public $image;

    public function openModal()
    {
        $this->reset(['title', 'description', 'image']);
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    public function save()
    {
        $this->validate([
            'title'       => 'required|min:3',
            'description' => 'required|min:5',
            'image'       => 'required|image|max:2048',
        ]);

        // 1. Simpan gambar ke folder storage/app/public/awards
        $imagePath = $this->image->store('awards', 'public');

        // 2. Simpan data ke Database
        Award::create([
            'title'       => $this->title,
            'description' => $this->description,
            'image'       => $imagePath,
        ]);

        $this->closeModal();
        session()->flash('message', 'Penghargaan berhasil ditambahkan!');
    }

    public function render()
    {
        // 👈 Ambil seluruh data penghargaan dari database (paling baru di atas)
        return view('livewire.admin.awards', [
            'awards' => Award::latest()->get()
        ])->layout('layouts.admin', ['title' => 'Kelola Penghargaan']);
    }
}
