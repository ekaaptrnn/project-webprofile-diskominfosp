<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Article; // 👈 Import Model Article

class Articles extends Component
{
    public $isModalOpen = false;

    // Field Form
    public $title;
    public $published_at;
    public $author;
    public $category = 'Berita Utama';
    public $content;

    public function openModal()
    {
        $this->reset(['title', 'author', 'content']);
        $this->published_at = date('Y-m-d');
        $this->category = 'Berita Utama';
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    public function save()
    {
        $this->validate([
            'title'        => 'required|min:3',
            'published_at' => 'required|date',
            'author'       => 'required|min:3',
            'category'     => 'required',
            'content'      => 'required|min:10',
        ]);

        // 1. Simpan Data ke Database
        Article::create([
            'title'        => $this->title,
            'published_at' => $this->published_at,
            'author'       => $this->author,
            'category'     => $this->category,
            'content'      => $this->content,
        ]);

        $this->closeModal();
        session()->flash('message', 'Artikel berhasil ditambahkan!');
    }

    public function render()
    {
        // 2. Ambil semua data artikel terbaru dari database
        return view('livewire.admin.articles', [
            'articles' => Article::latest()->get()
        ])->layout('layouts.admin', ['title' => 'Kelola Artikel']);
    }
}
