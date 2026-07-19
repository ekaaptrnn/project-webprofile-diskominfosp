<?php

use App\Helpers\ActivityLogger;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

new class extends Component
{
    public string $email = '';
    public string $password = '';
    public bool $remember = false;

    public function login(): void
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (! Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            ActivityLogger::log(
                'Percobaan login dashboard gagal: ' . $this->email,
                'LOGIN',
                'failed',
                null,
                'Email atau password salah (session login)'
            );

            $this->addError('email', 'Email atau password salah.');
            return;
        }

        request()->session()->regenerate();

        ActivityLogger::log(
            'User Login Dashboard: ' . Auth::user()->email,
            'LOGIN',
            'success',
            Auth::id()
        );

        $this->redirect(route('admin.dashboard'));
    }
}; ?>

<div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
    <div class="mb-6 text-center">
        <h1 class="text-2xl font-bold text-black">Diskominfo SP</h1>
        <p class="mt-1 text-sm text-gray-500">Masuk ke Panel Admin</p>
    </div>

    <form wire:submit="login" class="space-y-4">
        <div>
            <label class="block mb-1 text-sm font-medium text-black">Email</label>
            <input type="email" wire:model="email" class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm" placeholder="admin@test.com">
            @error('email') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block mb-1 text-sm font-medium text-black">Password</label>
            <input type="password" wire:model="password" class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm">
            @error('password') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
        </div>

        <label class="flex items-center gap-2 text-sm text-gray-600">
            <input type="checkbox" wire:model="remember">
            <span>Ingat saya</span>
        </label>

        <button type="submit" class="w-full rounded-md bg-blue-600 py-2.5 text-sm font-medium text-white hover:bg-blue-700">
            Masuk
        </button>
    </form>
</div>