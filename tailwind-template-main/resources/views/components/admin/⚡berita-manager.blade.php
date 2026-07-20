<?php

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

new class extends Component
{
    use WithFileUploads, WithPagination;

    public string $search = '';
    public bool $showModal = false;
    public ?int $editingId = null;

    public string $judul = '';
    public string $konten = '';
    public $kategori_id = null;
    public bool $status_publish = false;
    public $thumbnail = null; // file upload baru
    public ?string $existingThumbnail = null; // thumbnail lama saat edit

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function with(): array
    {
        return [
            'beritas' => Berita::with(['kategori', 'author'])
                ->when($this->search, fn ($q) => $q->where('judul', 'like', '%' . $this->search . '%'))
                ->latest()
                ->paginate(10),
            'kategoris' => Kategori::where('is_publish', true)->get(),
        ];
    }

    public function openCreate(): void
    {
        $this->resetForm();
        $this->showModal = true;
    }

    public function openEdit(int $id): void
    {
        $berita = Berita::findOrFail($id);
        $this->editingId = $berita->id;
        $this->judul = $berita->judul;
        $this->konten = $berita->konten;
        $this->kategori_id = $berita->kategori_id;
        $this->status_publish = (bool) $berita->status_publish;
        $this->existingThumbnail = $berita->thumbnail;
        $this->thumbnail = null;
        $this->showModal = true;
    }

    public function save(): void
    {
        $this->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'kategori_id' => 'nullable|exists:kategoris,id',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        $data = [
            'judul' => $this->judul,
            'konten' => $this->konten,
            'kategori_id' => $this->kategori_id,
            'status_publish' => $this->status_publish,
            'author_id' => auth()->id(),
        ];

        if ($this->thumbnail) {
            $data['thumbnail'] = $this->thumbnail->store('berita-thumbnails', 'public');
        }

        if ($this->editingId) {
            Berita::findOrFail($this->editingId)->update($data);
        } else {
            Berita::create($data);
        }

        $this->closeModal();
    }

    public function togglePublish(int $id): void
    {
        $berita = Berita::findOrFail($id);
        $berita->update(['status_publish' => ! $berita->status_publish]);
    }

    public function delete(int $id): void
    {
        $berita = Berita::findOrFail($id);
        if ($berita->thumbnail) {
            Storage::disk('public')->delete($berita->thumbnail);
        }
        $berita->delete();
    }

    public function closeModal(): void
    {
        $this->showModal = false;
        $this->resetForm();
    }

    private function resetForm(): void
    {
        $this->editingId = null;
        $this->judul = '';
        $this->konten = '';
        $this->kategori_id = null;
        $this->status_publish = false;
        $this->thumbnail = null;
        $this->existingThumbnail = null;
        $this->resetErrorBag();
    }
}; ?>

<div class="trezo-card bg-white dark:bg-[#0c1427] rounded-md">
    <div class="p-[25px] flex flex-col md:flex-row md:items-center md:justify-between gap-[15px] border-b border-gray-100 dark:border-[#172036]">
        <input
            type="text"
            wire:model.live.debounce.300ms="search"
            placeholder="Cari judul berita..."
            class="w-full md:w-[300px] rounded-md border border-gray-200 dark:border-[#172036] bg-transparent px-3 py-2 text-sm text-black dark:text-white"
        />

        <button wire:click="openCreate" class="px-5 py-2.5 rounded-md bg-blue-600 text-white text-sm font-medium hover:bg-blue-700">
            + Tambah Berita
        </button>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm">
            <thead>
                <tr class="border-b border-gray-100 dark:border-[#172036] text-gray-500 dark:text-gray-400">
                    <th class="p-[15px]">Judul</th>
                    <th class="p-[15px]">Kategori</th>
                    <th class="p-[15px]">Penulis</th>
                    <th class="p-[15px]">Status</th>
                    <th class="p-[15px]">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($beritas as $berita)
                    <tr class="border-b border-gray-100 dark:border-[#172036] text-black dark:text-white">
                        <td class="p-[15px] max-w-xs truncate">{{ $berita->judul }}</td>
                        <td class="p-[15px]">{{ $berita->kategori->nama_kategori ?? '-' }}</td>
                        <td class="p-[15px]">{{ $berita->author->name ?? '-' }}</td>
                        <td class="p-[15px]">
                            <button wire:click="togglePublish({{ $berita->id }})" class="px-3 py-1 rounded-full text-xs font-medium {{ $berita->status_publish ? 'bg-green-100 text-green-700' : 'bg-gray-200 text-gray-600' }}">
                                {{ $berita->status_publish ? 'Published' : 'Draft' }}
                            </button>
                        </td>
                        <td class="p-[15px] space-x-3">
                            <button wire:click="openEdit({{ $berita->id }})" class="text-blue-600 hover:underline">Edit</button>
                            <button wire:click="delete({{ $berita->id }})" wire:confirm="Yakin ingin menghapus berita ini?" class="text-red-600 hover:underline">Hapus</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-[25px] text-center text-gray-500 dark:text-gray-400">
                            Belum ada berita.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="p-[25px]">
        {{ $beritas->links() }}
    </div>

    {{-- Modal Tambah/Edit --}}
    @if ($showModal)
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4">
            <div class="w-full max-w-2xl max-h-[90vh] overflow-y-auto bg-white dark:bg-[#0c1427] rounded-md p-[25px]">
                <h2 class="mb-[20px] text-xl font-bold text-black dark:text-white">
                    {{ $editingId ? 'Edit Berita' : 'Tambah Berita' }}
                </h2>

                <div class="space-y-4">
                    <div>
                        <label class="block mb-1 text-sm font-medium text-black dark:text-white">Judul</label>
                        <input type="text" wire:model="judul" class="w-full rounded-md border border-gray-200 dark:border-[#172036] bg-transparent px-3 py-2 text-sm text-black dark:text-white">
                        @error('judul') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block mb-1 text-sm font-medium text-black dark:text-white">Konten</label>
                        <textarea wire:model="konten" rows="6" class="w-full rounded-md border border-gray-200 dark:border-[#172036] bg-transparent px-3 py-2 text-sm text-black dark:text-white"></textarea>
                        @error('konten') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block mb-1 text-sm font-medium text-black dark:text-white">Kategori</label>
                        <select wire:model="kategori_id" class="w-full rounded-md border border-gray-200 dark:border-[#172036] bg-transparent px-3 py-2 text-sm text-black dark:text-white">
                            <option value="">Tanpa kategori</option>
                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block mb-1 text-sm font-medium text-black dark:text-white">Thumbnail</label>
                        @if ($existingThumbnail && ! $thumbnail)
                            <img src="{{ Storage::url($existingThumbnail) }}" class="mb-2 h-24 w-auto rounded-md object-cover">
                        @endif
                        <input type="file" wire:model="thumbnail" accept="image/*" class="w-full text-sm text-black dark:text-white">
                        <div wire:loading wire:target="thumbnail" class="mt-1 text-xs text-gray-500">Mengunggah...</div>
                        @error('thumbnail') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <label class="flex items-center gap-2 text-sm text-black dark:text-white">
                        <input type="checkbox" wire:model="status_publish">
                        <span>Publikasikan sekarang</span>
                    </label>
                </div>

                <div class="mt-[25px] flex justify-end gap-3">
                    <button wire:click="closeModal" class="px-5 py-2.5 rounded-md border border-gray-300 dark:border-[#172036] text-sm text-black dark:text-white">
                        Batal
                    </button>
                    <button wire:click="save" class="px-5 py-2.5 rounded-md bg-blue-600 text-white text-sm font-medium hover:bg-blue-700">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>