<aside class="fixed inset-y-0 left-0 z-40 w-64 bg-slate-900 text-white flex flex-col h-screen">
    <div class="flex h-20 items-center border-b border-slate-700 px-6">
        <h1 class="text-xl font-bold">Diskominfo SP</h1>
    </div>

    <div class="px-4 pt-5 pb-2">
        <div class="flex items-center gap-3 rounded-lg bg-slate-800 px-3 py-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-blue-600 text-sm font-semibold text-white">
                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
            </div>
            <div>
                <p class="text-sm font-medium text-white">{{ auth()->user()->name }}</p>
                <p class="text-xs text-slate-400">{{ auth()->user()->role->name ?? 'Admin' }}</p>
            </div>
        </div>
    </div>

    <nav class="flex-1 overflow-y-auto p-4">
        <p class="mb-3 px-3 text-xs font-semibold uppercase tracking-wider text-slate-400">Main</p>

        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 rounded-lg px-4 py-3 font-medium {{ request()->routeIs('admin.dashboard') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
            <span>&#128202;</span>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('admin.log-activity') }}" class="flex items-center gap-3 rounded-lg px-4 py-3 font-medium {{ request()->routeIs('admin.log-activity') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
            <span>&#128203;</span>
            <span>Log Activity</span>
        </a>

        <a href="{{ route('admin.theme-settings') }}" class="flex items-center gap-3 rounded-lg px-4 py-3 font-medium {{ request()->routeIs('admin.theme-settings') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
            <span>&#127912;</span>
            <span>Theme Settings</span>
        </a>

        <a href="{{ route('admin.berita') }}" class="flex items-center gap-3 rounded-lg px-4 py-3 font-medium {{ request()->routeIs('admin.berita') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
            <span>&#128240;</span>
            <span>Kelola Berita</span>
        </a>

        @if (auth()->user()->role->name === 'Super Admin')
            <a href="{{ route('admin.users') }}" class="flex items-center gap-3 rounded-lg px-4 py-3 font-medium {{ request()->routeIs('admin.users') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
                <span>&#128100;</span>
                <span>Kelola Akun</span>
            </a>
        @endif
    </nav>

    <div class="border-t border-slate-700 p-4">
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="flex w-full items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium text-slate-300 hover:bg-slate-800 hover:text-white">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                </svg>
                Logout
            </button>
        </form>
    </div>
</aside>