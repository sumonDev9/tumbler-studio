@extends('admin-panel::dashboard.layouts.app')

@section('title', 'Dashboard - Tumbler Studios')
@section('page-title', 'Dashboard')

@section('content')
<div class="fade-in p-6">
    {{-- Header Section --}}
    <div class="mb-8 group">
        <h2 class="text-3xl font-bold dark:text-white text-slate-800 transition-all duration-300 group-hover:translate-x-2">
            Welcome Back, <span class="text-primary">{{ auth()->user()->name }}!</span>
        </h2>
        <p class="text-slate-500 dark:text-gray-400 mt-1">Here is what's happening with your website today.</p>
    </div>

    {{-- Stats Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        {{-- Total Messages --}}
        <div class="glass-card group p-6 rounded-3xl border border-white/10 shadow-lg relative overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-blue-500/20 hover:border-blue-500/50">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="flex items-center justify-between relative z-10">
                <div>
                    <p class="text-sm font-medium text-slate-500 dark:text-gray-400">Total Messages</p>
                    <h3 class="text-3xl font-bold dark:text-white mt-1 group-hover:scale-110 transition-transform duration-300 origin-left">{{ $total_messages }}</h3>
                </div>
                <div class="bg-blue-500/20 p-4 rounded-2xl text-blue-500 group-hover:bg-blue-500 group-hover:text-white transition-all duration-500 rotate-0 group-hover:rotate-12">
                    <i class="fas fa-envelope text-xl"></i>
                </div>
            </div>
            @if($unread_messages > 0)
                <span class="absolute top-0 right-0 bg-red-500 text-white text-[10px] px-3 py-1 rounded-bl-xl font-bold animate-pulse">
                    {{ $unread_messages }} NEW
                </span>
            @endif
        </div>

        {{-- Team Members --}}
        <div class="glass-card group p-6 rounded-3xl border border-white/10 shadow-lg relative overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-primary/20 hover:border-primary/50">
            <div class="absolute inset-0 bg-gradient-to-br from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="flex items-center justify-between relative z-10">
                <div>
                    <p class="text-sm font-medium text-slate-500 dark:text-gray-400">Team Members</p>
                    <h3 class="text-3xl font-bold dark:text-white mt-1 group-hover:scale-110 transition-transform duration-300 origin-left">{{ $total_teams }}</h3>
                </div>
                <div class="bg-primary/20 p-4 rounded-2xl text-primary group-hover:bg-primary group-hover:text-white transition-all duration-500 rotate-0 group-hover:rotate-12">
                    <i class="fas fa-users text-xl"></i>
                </div>
            </div>
        </div>

        {{-- Testimonials --}}
        <div class="glass-card group p-6 rounded-3xl border border-white/10 shadow-lg relative overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-yellow-500/20 hover:border-yellow-500/50">
            <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="flex items-center justify-between relative z-10">
                <div>
                    <p class="text-sm font-medium text-slate-500 dark:text-gray-400">Testimonials</p>
                    <h3 class="text-3xl font-bold dark:text-white mt-1 group-hover:scale-110 transition-transform duration-300 origin-left">{{ $total_testimonials }}</h3>
                </div>
                <div class="bg-yellow-500/20 p-4 rounded-2xl text-yellow-500 group-hover:bg-yellow-500 group-hover:text-white transition-all duration-500 rotate-0 group-hover:rotate-12">
                    <i class="fas fa-star text-xl"></i>
                </div>
            </div>
        </div>

        {{-- Trusted Brands --}}
        <div class="glass-card group p-6 rounded-3xl border border-white/10 shadow-lg relative overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-purple-500/20 hover:border-purple-500/50">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="flex items-center justify-between relative z-10">
                <div>
                    <p class="text-sm font-medium text-slate-500 dark:text-gray-400">Trusted Brands</p>
                    <h3 class="text-3xl font-bold dark:text-white mt-1 group-hover:scale-110 transition-transform duration-300 origin-left">{{ $total_brands }}</h3>
                </div>
                <div class="bg-purple-500/20 p-4 rounded-2xl text-purple-500 group-hover:bg-purple-500 group-hover:text-white transition-all duration-500 rotate-0 group-hover:rotate-12">
                    <i class="fas fa-award text-xl"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        {{-- Recent Messages Table --}}
        <div class="lg:col-span-2 glass-panel rounded-3xl border border-white/10 shadow-xl overflow-hidden transition-all duration-300 hover:shadow-2xl">
            <div class="p-6 border-b border-white/5 flex justify-between items-center bg-white/5">
                <h3 class="font-bold dark:text-white flex items-center gap-2">
                    <i class="fas fa-clock text-primary"></i> Recent Messages
                </h3>
                <a href="{{ route('admin.contacts.index') }}" class="group text-xs text-primary font-bold hover:underline flex items-center gap-1">
                    View All <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                </a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <tbody class="divide-y divide-white/5">
                        @forelse($recent_messages as $msg)
                        <tr class="hover:bg-primary/5 transition-all duration-300 group">
                            <td class="p-4">
                                <p class="font-bold text-sm dark:text-gray-200 group-hover:text-primary transition-colors">{{ $msg->name }}</p>
                                <p class="text-xs text-slate-500">{{ $msg->email }}</p>
                            </td>
                            <td class="p-4 text-xs dark:text-gray-400 italic">
                                "{{ Str::limit($msg->message, 50) }}"
                            </td>
                            <td class="p-4 text-xs text-slate-500 text-right font-medium">
                                {{ $msg->created_at->diffForHumans() }}
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="p-10 text-center text-slate-500">
                                <i class="fas fa-inbox text-4xl mb-2 opacity-20"></i>
                                <p>No recent messages.</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Quick Actions --}}
        <div class="glass-panel rounded-3xl border border-white/10 shadow-xl p-6 transition-all duration-300 hover:shadow-2xl">
            <h3 class="font-bold dark:text-white mb-6 flex items-center gap-2">
                <i class="fas fa-bolt text-yellow-500"></i> Quick Actions
            </h3>
            <div class="grid grid-cols-2 gap-4">
                <a href="{{ route('team.index') }}" class="flex flex-col items-center p-4 bg-white/5 border border-transparent rounded-2xl hover:border-primary/30 hover:bg-primary/10 transition-all duration-300 group">
                    <div class="w-12 h-12 flex items-center justify-center bg-primary/10 rounded-xl mb-2 group-hover:scale-110 group-hover:bg-primary group-hover:text-white transition-all duration-300 text-primary">
                        <i class="fas fa-user-plus text-lg"></i>
                    </div>
                    <span class="text-xs font-semibold dark:text-gray-300">Add Team</span>
                </a>
                <a href="{{ route('vision.index') }}" class="flex flex-col items-center p-4 bg-white/5 border border-transparent rounded-2xl hover:border-blue-500/30 hover:bg-blue-500/10 transition-all duration-300 group">
                    <div class="w-12 h-12 flex items-center justify-center bg-blue-500/10 rounded-xl mb-2 group-hover:scale-110 group-hover:bg-blue-500 group-hover:text-white transition-all duration-300 text-blue-500">
                        <i class="fas fa-image text-lg"></i>
                    </div>
                    <span class="text-xs font-semibold dark:text-gray-300">Gallery</span>
                </a>
                <a href="{{ route('testimonial.index') }}" class="flex flex-col items-center p-4 bg-white/5 border border-transparent rounded-2xl hover:border-yellow-500/30 hover:bg-yellow-500/10 transition-all duration-300 group">
                    <div class="w-12 h-12 flex items-center justify-center bg-yellow-500/10 rounded-xl mb-2 group-hover:scale-110 group-hover:bg-yellow-500 group-hover:text-white transition-all duration-300 text-yellow-500">
                        <i class="fas fa-comment-dots text-lg"></i>
                    </div>
                    <span class="text-xs font-semibold dark:text-gray-300">Review</span>
                </a>
                <a href="{{ route('settings.index') }}" class="flex flex-col items-center p-4 bg-white/5 border border-transparent rounded-2xl hover:border-purple-500/30 hover:bg-purple-500/10 transition-all duration-300 group">
                    <div class="w-12 h-12 flex items-center justify-center bg-purple-500/10 rounded-xl mb-2 group-hover:scale-110 group-hover:bg-purple-500 group-hover:text-white transition-all duration-300 text-purple-500">
                        <i class="fas fa-cog text-lg"></i>
                    </div>
                    <span class="text-xs font-semibold dark:text-gray-300">Settings</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection