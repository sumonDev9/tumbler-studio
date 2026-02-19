@extends('admin-panel::dashboard.layouts.app')

@section('title', 'Dashboard - sndp-bag')
@section('page-title', 'Dashboard')

@section('content')

<div class="mb-6 flex items-center text-sm text-gray-500 dark:text-gray-400">
    <a href="{{ route('dashboard') }}" class="hover:text-emerald-500 transition">Home</a>
    <i class="fa-solid fa-chevron-right text-xs mx-2"></i>
    <span class="text-gray-800 dark:text-white font-medium">Dashboard</span>
</div>

<div id="skeletonLoader" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    @for($i = 0; $i < 4; $i++)
    <div class="glass-card rounded-2xl p-6 h-[160px] relative overflow-hidden skeleton border border-gray-200 dark:border-white/5">
        <div class="w-12 h-12 rounded-xl bg-gray-200 dark:bg-white/10 mb-4"></div>
        <div class="h-6 w-24 bg-gray-200 dark:bg-white/10 rounded mb-2"></div>
        <div class="h-4 w-full bg-gray-200 dark:bg-white/10 rounded"></div>
    </div>
    @endfor
</div>

<div id="actualContent" class="hidden">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        
        <div class="glass-card rounded-2xl p-6 shadow-xl dark:shadow-none hover:-translate-y-1 transition-transform duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-emerald-100 dark:bg-emerald-500/20 flex items-center justify-center text-emerald-600 dark:text-emerald-400 text-xl">
                    <i class="fa-solid fa-users"></i>
                </div>
                <span class="text-xs font-bold px-2 py-1 rounded-full bg-emerald-100 dark:bg-emerald-500/20 text-emerald-600 dark:text-emerald-400">
                    +{{ $stats['users_growth'] }}%
                </span>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-1">{{ number_format($stats['total_users']) }}</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400">Total Users</p>
            <div class="mt-4 h-1.5 bg-gray-100 dark:bg-white/10 rounded-full overflow-hidden">
                <div class="h-full rounded-full bg-emerald-500" style="width: 75%;"></div>
            </div>
        </div>
        
        <div class="glass-card rounded-2xl p-6 shadow-xl dark:shadow-none hover:-translate-y-1 transition-transform duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-500/20 flex items-center justify-center text-blue-600 dark:text-blue-400 text-xl">
                    <i class="fa-solid fa-eye"></i>
                </div>
                <span class="text-xs font-bold px-2 py-1 rounded-full bg-blue-100 dark:bg-blue-500/20 text-blue-600 dark:text-blue-400">
                    +{{ $stats['views_growth'] }}%
                </span>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-1">{{ number_format($stats['total_views']) }}</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400">Total Views</p>
            <div class="mt-4 h-1.5 bg-gray-100 dark:bg-white/10 rounded-full overflow-hidden">
                <div class="h-full rounded-full bg-blue-500" style="width: 60%;"></div>
            </div>
        </div>
        
        <div class="glass-card rounded-2xl p-6 shadow-xl dark:shadow-none hover:-translate-y-1 transition-transform duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-orange-100 dark:bg-orange-500/20 flex items-center justify-center text-orange-600 dark:text-orange-400 text-xl">
                    <i class="fa-solid fa-coins"></i>
                </div>
                <span class="text-xs font-bold px-2 py-1 rounded-full bg-orange-100 dark:bg-orange-500/20 text-orange-600 dark:text-orange-400">
                    +{{ $stats['revenue_growth'] }}%
                </span>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-1">Rs.{{ number_format($stats['total_revenue']) }}</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400">Total Revenue</p>
            <div class="mt-4 h-1.5 bg-gray-100 dark:bg-white/10 rounded-full overflow-hidden">
                <div class="h-full rounded-full bg-orange-500" style="width: 85%;"></div>
            </div>
        </div>
        
        <div class="glass-card rounded-2xl p-6 shadow-xl dark:shadow-none hover:-translate-y-1 transition-transform duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-purple-100 dark:bg-purple-500/20 flex items-center justify-center text-purple-600 dark:text-purple-400 text-xl">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <span class="text-xs font-bold px-2 py-1 rounded-full bg-purple-100 dark:bg-purple-500/20 text-purple-600 dark:text-purple-400">
                    +{{ $stats['orders_growth'] }}%
                </span>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-1">{{ number_format($stats['total_orders']) }}</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400">Total Orders</p>
            <div class="mt-4 h-1.5 bg-gray-100 dark:bg-white/10 rounded-full overflow-hidden">
                <div class="h-full rounded-full bg-purple-500" style="width: 70%;"></div>
            </div>
        </div>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="glass-card rounded-2xl p-6 border border-gray-200 dark:border-white/5">
            <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-6">Recent Activity</h3>
            <div class="space-y-4">
                @foreach($recentActivities as $index => $activity)
                <div class="flex items-center gap-4 p-4 rounded-xl hover:bg-gray-50 dark:hover:bg-white/5 transition cursor-pointer border border-transparent hover:border-gray-200 dark:hover:border-white/5">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center text-white text-sm shadow-md" style="background: {{ $activity['bg_color'] }};">
                        {!! $activity['icon'] ?? '<i class="fa-solid fa-bolt"></i>' !!}
                    </div>
                    <div class="flex-1">
                        <p class="font-semibold text-gray-800 dark:text-white text-sm">{{ $activity['title'] }}</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">{{ $activity['description'] }}</p>
                    </div>
                    <span class="text-xs text-gray-400">{{ $activity['time'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
        
        <div class="glass-card rounded-2xl p-6 border border-gray-200 dark:border-white/5">
            <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-6">Quick Actions</h3>
            <div class="grid grid-cols-2 gap-4">
                <a href="{{ route('users.create') }}" class="p-6 rounded-xl text-center border border-gray-200 dark:border-white/10 bg-gray-50 dark:bg-white/5 hover:bg-emerald-50 dark:hover:bg-emerald-500/10 hover:border-emerald-200 dark:hover:border-emerald-500/30 transition group">
                    <div class="text-3xl mb-3 text-emerald-500 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-user-plus"></i>
                    </div>
                    <p class="font-semibold text-gray-700 dark:text-gray-300 group-hover:text-emerald-600 dark:group-hover:text-emerald-400 text-sm">New User</p>
                </a>
                
                <button class="p-6 rounded-xl text-center border border-gray-200 dark:border-white/10 bg-gray-50 dark:bg-white/5 hover:bg-blue-50 dark:hover:bg-blue-500/10 hover:border-blue-200 dark:hover:border-blue-500/30 transition group">
                    <div class="text-3xl mb-3 text-blue-500 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>
                    <p class="font-semibold text-gray-700 dark:text-gray-300 group-hover:text-blue-600 dark:group-hover:text-blue-400 text-sm">New Post</p>
                </button>
                
                <button class="p-6 rounded-xl text-center border border-gray-200 dark:border-white/10 bg-gray-50 dark:bg-white/5 hover:bg-orange-50 dark:hover:bg-orange-500/10 hover:border-orange-200 dark:hover:border-orange-500/30 transition group">
                    <div class="text-3xl mb-3 text-orange-500 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <p class="font-semibold text-gray-700 dark:text-gray-300 group-hover:text-orange-600 dark:group-hover:text-orange-400 text-sm">View Reports</p>
                </button>
                
                <a href="{{ route('settings.index') }}" class="p-6 rounded-xl text-center border border-gray-200 dark:border-white/10 bg-gray-50 dark:bg-white/5 hover:bg-purple-50 dark:hover:bg-purple-500/10 hover:border-purple-200 dark:hover:border-purple-500/30 transition group">
                    <div class="text-3xl mb-3 text-purple-500 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-gear"></i>
                    </div>
                    <p class="font-semibold text-gray-700 dark:text-gray-300 group-hover:text-purple-600 dark:group-hover:text-purple-400 text-sm">Settings</p>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection