<header class="sticky top-0 z-30 bg-white border-b border-gray-200 px-6 py-4">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="font-serif text-lg text-gray-900">
                Panel {{ auth()->user()->role->name ?? 'Admin' }} — Diskominfo SP
            </h2>
        </div>
    </div>
</header>