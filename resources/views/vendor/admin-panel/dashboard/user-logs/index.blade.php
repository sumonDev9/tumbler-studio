@extends('admin-panel::dashboard.layouts.app')

@section('title', 'User Activity Logs - sndp-bag')
@section('page-title', 'User Activity Logs')

@section('content')
    <nav class="flex items-center gap-2 mb-6 text-sm breadcrumb-nav">
        <a href="{{ route('dashboard') }}" class="hover:opacity-80 transition-opacity duration-200 font-medium">
            Home
        </a>
        <span class="text-gray-400 dark:text-gray-600">/</span>
        <span class="text-gray-900 dark:text-gray-100 font-semibold text-primary">User Activity Logs</span>
    </nav>

    <div class="glass-card rounded-3xl overflow-hidden fade-in border border-white/20 dark:border-white/5 shadow-2xl">
        
        <div class="p-6 lg:p-8 border-b border-gray-100 dark:border-white/5">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div class="flex items-center gap-4">
                    <div class="stat-icon shadow-lg text-white" style="background: var(--primary);">
                        <i class="fa-solid fa-clock-rotate-left text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 dark:text-white">Login History</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Detailed login activity from all users</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-6 lg:p-8 border-b border-gray-100 dark:border-white/5">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6">
                <div class="glass-panel p-5 rounded-2xl border border-gray-200 dark:border-white/5 hover:border-[var(--primary)] transition-all duration-300 group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-emerald-100 dark:bg-emerald-500/10 flex items-center justify-center text-emerald-600 dark:text-emerald-400 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-circle-check text-xl"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 dark:text-gray-400 font-medium uppercase tracking-wider">Successful Logins</p>
                            <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $logs->where('success', true)->count() }}</p>
                        </div>
                    </div>
                </div>

                <div class="glass-panel p-5 rounded-2xl border border-gray-200 dark:border-white/5 hover:border-red-400 transition-all duration-300 group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-red-100 dark:bg-red-500/10 flex items-center justify-center text-red-600 dark:text-red-400 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-circle-xmark text-xl"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 dark:text-gray-400 font-medium uppercase tracking-wider">Failed Attempts</p>
                            <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $logs->where('success', false)->count() }}</p>
                        </div>
                    </div>
                </div>

                <div class="glass-panel p-5 rounded-2xl border border-gray-200 dark:border-white/5 hover:border-blue-400 transition-all duration-300 group sm:col-span-2 lg:col-span-1">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 dark:text-blue-400 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-list-check text-xl"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 dark:text-gray-400 font-medium uppercase tracking-wider">Total Activities</p>
                            <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $logs->total() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="overflow-x-auto scrollbar-thin">
                <table class="w-full min-w-[800px] border-collapse">
                    <thead>
                        <tr class="bg-gray-50/50 dark:bg-white/5 border-b border-gray-100 dark:border-white/10">
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-widest">User Details</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-widest">Location & IP</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-widest">Device Info</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-widest">Status</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-widest">Timestamp</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 dark:divide-white/5">
                        @forelse($logs as $log)
                            <tr class="hover:bg-gray-500/5 transition-colors duration-200 group">
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <div class="flex items-center gap-3">
                                        <div class="relative hidden lg:block">
                                            <img src="{{ $log->user && $log->user->profile_image
                                                ? asset('storage/' . $log->user->profile_image)
                                                : 'https://ui-avatars.com/api/?name=' . urlencode($log->user ? $log->user->name : $log->email) . '&background=random&bold=true' }}"
                                                class="w-10 h-10 rounded-xl object-cover border-2 border-white dark:border-gray-800 shadow-sm" />
                                            <div class="absolute -bottom-1 -right-1 w-3.5 h-3.5 rounded-full border-2 border-white dark:border-black {{ $log->success ? 'bg-emerald-500' : 'bg-rose-500' }}"></div>
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-800 dark:text-gray-200 text-sm">{{ $log->user->name ?? $log->email }}</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">{{ $log->user->email ?? 'Guest User' }}</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-5 whitespace-nowrap">
                                    <div class="flex flex-col gap-1">
                                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-300 flex items-center gap-1.5">
                                            <i class="fa-solid fa-location-dot text-[var(--primary)] opacity-70"></i>
                                            {{ $log->city ?? 'Unknown' }}, {{ $log->country ?? 'Unknown' }}
                                        </span>
                                        <span class="text-xs font-mono text-gray-500 dark:text-gray-500">
                                            {{ $log->ip_address }}
                                        </span>
                                    </div>
                                </td>

                                <td class="px-6 py-5 whitespace-nowrap">
                                    <div class="space-y-1">
                                        <p class="text-sm text-gray-700 dark:text-gray-300 flex items-center gap-2">
                                            <i class="fa-solid fa-mobile-screen-button text-gray-400"></i>
                                            <span class="font-medium">{{ $log->device }}</span>
                                        </p>
                                        <p class="text-[10px] text-gray-400 dark:text-gray-500 uppercase tracking-tighter">
                                            {{ $log->platform }} • {{ $log->browser }}
                                        </p>
                                    </div>
                                </td>

                                <td class="px-6 py-5 whitespace-nowrap">
                                    @if ($log->success)
                                        <span class="px-3 py-1 text-[10px] font-bold uppercase tracking-wider rounded-full bg-emerald-100 text-emerald-700 dark:bg-emerald-500/10 dark:text-emerald-400 border border-emerald-200 dark:border-emerald-500/20">
                                            Success
                                        </span>
                                    @else
                                        <span class="px-3 py-1 text-[10px] font-bold uppercase tracking-wider rounded-full bg-rose-100 text-rose-700 dark:bg-rose-500/10 dark:text-rose-400 border border-rose-200 dark:border-rose-500/20">
                                            Failed
                                        </span>
                                    @endif
                                </td>

                                <td class="px-6 py-5 whitespace-nowrap text-right md:text-left">
                                    <div class="flex flex-col">
                                        <span class="text-sm font-bold text-gray-800 dark:text-gray-200">
                                            {{ $log->login_at->format('d M, Y') }}
                                        </span>
                                        <span class="text-xs text-gray-500 dark:text-gray-400">
                                            {{ $log->login_at->format('h:i A') }} ({{ $log->login_at->diffForHumans() }})
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-20 text-center">
                                    <div class="flex flex-col items-center justify-center opacity-50">
                                        <i class="fa-solid fa-folder-open text-6xl mb-4 text-gray-300"></i>
                                        <p class="text-xl font-bold text-gray-400">No activity recorded yet</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        @if ($logs->hasPages())
            <div class="p-6 border-t border-gray-100 dark:border-white/5 bg-gray-50/50 dark:bg-black/20">
                <div class="dark:pagination-dark">
                    {{ $logs->links() }}
                </div>
            </div>
        @endif
    </div>
@endsection