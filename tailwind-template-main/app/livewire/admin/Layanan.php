<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Layanan extends Component
{
    public function render()
    {
        return view('livewire.admin.layanan')
            ->layout('layouts.app'); // 👈 Ubah jadi 'layouts.app'
    }
}
