<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Layanan as LayananModel;

class Layanan extends Component
{
    public $isModalOpen = false;
    public $service_id;
    public $nama_layanan, $kategori = 'Umum', $deskripsi, $is_active = 1;
    public $search = '';

    protected $rules = [
        'nama_layanan' => 'required|min:3',
        'kategori'     => 'required',
        'deskripsi'    => 'required|min:5',
    ];

    protected $messages = [
        'nama_layanan.required' => 'Nama layanan wajib diisi.',
        'nama_layanan.min'      => 'Nama layanan minimal 3 karakter.',
        'kategori.required'     => 'Kategori wajib diisi.',
        'deskripsi.required'    => 'Deskripsi layanan wajib diisi.',
        'deskripsi.min'         => 'Deskripsi minimal 5 karakter.',
    ];

    public function openModal()
    {
        $this->resetInputFields();
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
        $this->resetInputFields();
    }

    private function resetInputFields()
    {
        $this->service_id = null;
        $this->nama_layanan = '';
        $this->kategori = 'Umum';
        $this->deskripsi = '';
        $this->is_active = 1;
        $this->resetErrorBag();
    }

    public function save()
    {
        $this->validate();

        LayananModel::updateOrCreate(
            ['id' => $this->service_id],
            [
                'nama_layanan' => $this->nama_layanan,
                'kategori'     => $this->kategori,
                'deskripsi'    => $this->deskripsi,
                'is_active'    => $this->is_active,
            ]
        );

        session()->flash('message', $this->service_id ? 'Layanan berhasil diperbarui!' : 'Layanan baru berhasil ditambahkan!');

        $this->closeModal();
    }

    public function edit($id)
    {
        $layanan = LayananModel::findOrFail($id);
        $this->service_id = $layanan->id;
        $this->nama_layanan = $layanan->nama_layanan;
        $this->kategori = $layanan->kategori ?? 'Umum';
        $this->deskripsi = $layanan->deskripsi;
        $this->is_active = $layanan->is_active ?? 1;

        $this->isModalOpen = true;
    }

    public function delete($id)
    {
        LayananModel::destroy($id);
        session()->flash('message', 'Layanan berhasil dihapus!');
    }

    public function render()
    {
        $services = LayananModel::where('nama_layanan', 'like', '%' . $this->search . '%')
            ->latest()
            ->get();

        return view('livewire.admin.layanan', [
            'services' => $services
        ])->layout('components.layouts.admin', ['title' => 'Kelola Layanan']);
    }
}
