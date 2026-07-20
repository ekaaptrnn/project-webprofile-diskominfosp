<aside class="fixed inset-y-0 left-0 z-40 w-64 bg-slate-900 text-white">
    <div class="flex h-20 items-center border-b border-slate-700 px-6">
        <h1 class="text-xl font-bold">Diskominfo SP</h1>
    </div>

    <nav class="p-4">
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
</aside>