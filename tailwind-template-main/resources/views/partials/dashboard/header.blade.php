<header class="sticky top-0 z-30 bg-white border-b border-gray-200 px-6 py-4">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-semibold text-gray-900">
                Panel {{ auth()->user()->role->name ?? 'Admin' }} — Diskominfo SP
            </h2>
        </div>

        <div class="flex items-center gap-4">
            <div class="text-right">
                <p class="text-sm font-medium text-gray-900">{{ auth()->user()->name }}</p>
                <p class="text-xs text-gray-500">{{ auth()->user()->role->name ?? 'Admin' }}</p>
            </div>

            <div class="flex h-9 w-9 items-center justify-center rounded-full bg-blue-600 text-sm font-semibold text-white">
                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
            </div>

            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="text-sm text-gray-500 hover:text-red-600">
                    Logout
                </button>
            </form>
        </div>
    </div>
</header>