<div id="mobile-overlay" class="fixed inset-0 bg-black/80 z-40 hidden lg:hidden backdrop-blur-sm transition-opacity" onclick="toggleSidebar()"></div>

<aside id="sidebar"
    class="fixed lg:static inset-y-0 left-0 w-72 glass-panel z-50 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 flex flex-col h-full rounded-r-2xl lg:rounded-none border-r border-gray-200 dark:border-white/5">

    <div class="p-6 flex items-center gap-3">
        <div class="w-10 h-10">
            <img src="{{ asset('assets/image/home/logo.png') }}" alt="">
        </div>
        <div>
            <h1 class="text-xl font-bold text-gray-800 dark:text-white tracking-wide">Tumbler Studios</h1>
            <p class="text-xs text-gray-500 dark:text-white">Admin Panel</p>
        </div>
        <button onclick="toggleSidebar()" class="lg:hidden ml-auto text-gray-500 hover:text-red-500">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>
    </div>

    <nav class="flex-1 px-4 py-4 space-y-2 overflow-y-auto">
        <p class="px-4 text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider mb-2">Menu</p>

        @foreach (config('admin-panel.sidebar', []) as $item)
            <a href="{{ route($item['route']) }}"
               class="nav-item {{ request()->routeIs($item['active_on']) ? 'active' : '' }} flex items-center gap-4 px-4 py-3 text-gray-600 dark:text-gray-400 hover:text-emerald-600 dark:hover:text-white hover:bg-emerald-50 dark:hover:bg-white/5 rounded-r-full transition-all duration-300 group rounded-lg">
                <span class="w-5 group-hover:text-emerald-500 dark:group-hover:text-emerald-400 transition-colors">
                    {!! $item['icon'] !!}
                </span>
                <span class="font-medium">{{ $item['title'] }}</span>
            </a>
        @endforeach
    </nav>

    <div class="p-4 border-t border-gray-200 dark:border-white/5 m-4 rounded-2xl bg-white/50 dark:bg-white/5 backdrop-blur-md">
        <div class="flex items-center gap-3">
            @if (auth()->check())
                <img src="{{ auth()->user()->profile_image
                    ? asset('storage/' . auth()->user()->profile_image)
                    : asset('images/default-avatar.jpeg') }}"
                    alt="Profile"
                    class="w-10 h-10 rounded-full border-2 border-emerald-500/50">
            @else
                <img src="{{ asset('images/default-avatar.jpeg') }}" alt="Default"
                    class="w-10 h-10 rounded-full border-2 border-emerald-500/50">
            @endif
            
            <div class="flex-1 min-w-0">
                <p class="text-sm font-semibold text-gray-800 dark:text-white truncate">
                    {{ auth()->check() ? auth()->user()->name : 'Guest' }}
                </p>
                <p class="text-xs text-gray-500 truncate">
                    {{ auth()->check() ? auth()->user()->email : 'Login required' }}
                </p>
            </div>
        </div>
    </div>
</aside>