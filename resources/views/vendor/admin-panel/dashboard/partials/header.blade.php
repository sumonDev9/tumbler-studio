<header class="glass-panel border-b-0 border-gray-200 dark:border-white/5 flex items-center justify-between px-6 py-3 lg:px-8 z-30 m-4 rounded-xl mb-0 sticky top-4 transition-all duration-300">
    
    <div class="flex items-center gap-4">
        <button id="menuBtn" onclick="toggleSidebar()" class="lg:hidden text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <h2 class="text-lg font-bold text-gray-800 dark:text-white hidden sm:block">
            @yield('page-title', 'Your Dashboard')
        </h2>
    </div>

    <div class="flex items-center gap-4 ml-auto">
        
        <button onclick="toggleTheme()" id="darkModeBtn" class="w-9 h-9 rounded-full bg-gray-100 dark:bg-white/5 flex items-center justify-center hover:bg-gray-200 dark:hover:bg-white/10 transition text-gray-600 dark:text-gray-300">
            <i id="moonIcon" class="fa-regular fa-moon"></i>
            <i id="sunIcon" class="fa-regular fa-sun hidden"></i>
        </button>

        <button class="w-9 h-9 rounded-full bg-gray-100 dark:bg-white/5 flex items-center justify-center hover:bg-gray-200 dark:hover:bg-white/10 transition text-gray-600 dark:text-gray-300 relative">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
            <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
        </button>

        <div class="hidden sm:flex items-center gap-3 p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-white/10 transition cursor-pointer">
            <div class="relative">
                @if(auth()->check())
                    <img src="{{ auth()->user()->profile_image ? asset('storage/' . auth()->user()->profile_image) : asset('images/default-avatar.jpeg') }}" 
                        alt="Profile"
                        class="w-10 h-10 rounded-full object-cover border-2 border-emerald-500/50 transition">
                @else
                    <img src="{{ asset('images/default-avatar.jpeg') }}" 
                        alt="Default Profile"
                        class="w-10 h-10 rounded-full object-cover border-2 border-emerald-500/50 transition">
                @endif
                <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white dark:border-gray-900 rounded-full"></span>
            </div>
            
            <div class="flex-1 min-w-0 text-left">
                @if (auth()->check())
                    <p class="text-sm font-semibold text-gray-800 dark:text-white leading-tight">{{ auth()->user()->name }}</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">
                        {{ auth()->user()->status == "Admin" ? 'Admin' : 'User' }}
                    </p>
                @else
                    <p class="text-sm font-semibold text-gray-800 dark:text-white leading-tight">Guest User</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Visitor</p>
                @endif
            </div>
        </div>

        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="w-9 h-9 rounded-full bg-red-50 dark:bg-red-500/10 flex items-center justify-center hover:bg-red-100 dark:hover:bg-red-500 hover:text-white transition text-red-500 dark:text-red-400 border border-transparent dark:border-red-500/20" title="Logout">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </button>
        </form>

    </div>
</header>