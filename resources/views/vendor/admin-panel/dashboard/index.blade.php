@extends('admin-panel::dashboard.layouts.app')

@section('title', 'Dashboard - sndp-bag')
@section('page-title', 'Dashboard')

@section('content')

<div class="fade-in p-6">
    <div class="mb-8">
        <h2 class="text-3xl font-bold dark:text-white text-slate-800">Welcome Back, {{ auth()->user()->name }}!</h2>
        <p class="text-slate-500 dark:text-gray-400">Here is what's happening with your website today.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="glass-card p-6 rounded-3xl border border-white/10 shadow-lg relative overflow-hidden">
            <div class="flex items-center justify-between relative z-10">
                <div>
                    <p class="text-sm font-medium text-slate-500 dark:text-gray-400">Total Messages</p>
                    <h3 class="text-2xl font-bold dark:text-white mt-1">{{ $total_messages }}</h3>
                </div>
                <div class="bg-blue-500/20 p-3 rounded-2xl text-blue-500">
                    <i class="fas fa-envelope text-xl"></i>
                </div>
            </div>
            @if($unread_messages > 0)
                <span class="absolute top-0 right-0 bg-red-500 text-white text-[10px] px-2 py-1 rounded-bl-xl font-bold">
                    {{ $unread_messages }} NEW
                </span>
            @endif
        </div>

        <div class="glass-card p-6 rounded-3xl border border-white/10 shadow-lg">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500 dark:text-gray-400">Team Members</p>
                    <h3 class="text-2xl font-bold dark:text-white mt-1">{{ $total_teams }}</h3>
                </div>
                <div class="bg-primary/20 p-3 rounded-2xl text-primary">
                    <i class="fas fa-users text-xl"></i>
                </div>
            </div>
        </div>

        <div class="glass-card p-6 rounded-3xl border border-white/10 shadow-lg">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500 dark:text-gray-400">Testimonials</p>
                    <h3 class="text-2xl font-bold dark:text-white mt-1">{{ $total_testimonials }}</h3>
                </div>
                <div class="bg-yellow-500/20 p-3 rounded-2xl text-yellow-500">
                    <i class="fas fa-star text-xl"></i>
                </div>
            </div>
        </div>

        <div class="glass-card p-6 rounded-3xl border border-white/10 shadow-lg">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500 dark:text-gray-400">Trusted Brands</p>
                    <h3 class="text-2xl font-bold dark:text-white mt-1">{{ $total_brands }}</h3>
                </div>
                <div class="bg-purple-500/20 p-3 rounded-2xl text-purple-500">
                    <i class="fas fa-award text-xl"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2 glass-panel rounded-3xl border border-white/10 shadow-xl overflow-hidden">
            <div class="p-6 border-b border-white/5 flex justify-between items-center">
                <h3 class="font-bold dark:text-white">Recent Messages</h3>
                <a href="{{ route('admin.contacts.index') }}" class="text-xs text-primary font-bold hover:underline">View All</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <tbody class="divide-y divide-white/5">
                        @forelse($recent_messages as $msg)
                        <tr class="hover:bg-white/5 transition">
                            <td class="p-4">
                                <p class="font-bold text-sm dark:text-gray-200">{{ $msg->name }}</p>
                                <p class="text-xs text-slate-500">{{ $msg->email }}</p>
                            </td>
                            <td class="p-4 text-xs dark:text-gray-400">
                                {{ Str::limit($msg->message, 50) }}
                            </td>
                            <td class="p-4 text-xs text-slate-500 text-right">
                                {{ $msg->created_at->diffForHumans() }}
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="p-10 text-center text-slate-500">No recent messages.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="glass-panel rounded-3xl border border-white/10 shadow-xl p-6">
            <h3 class="font-bold dark:text-white mb-6">Quick Actions</h3>
            <div class="grid grid-cols-2 gap-4">
                <a href="{{ route('team.index') }}" class="flex flex-col items-center p-4 bg-white/5 rounded-2xl hover:bg-primary/10 transition group">
                    <i class="fas fa-user-plus text-primary mb-2 group-hover:scale-110 transition"></i>
                    <span class="text-xs dark:text-gray-300">Add Team</span>
                </a>
                <a href="{{ route('vision.index') }}" class="flex flex-col items-center p-4 bg-white/5 rounded-2xl hover:bg-primary/10 transition group">
                    <i class="fas fa-image text-primary mb-2 group-hover:scale-110 transition"></i>
                    <span class="text-xs dark:text-gray-300">Gallery</span>
                </a>
                <a href="{{ route('testimonial.index') }}" class="flex flex-col items-center p-4 bg-white/5 rounded-2xl hover:bg-primary/10 transition group">
                    <i class="fas fa-comment-dots text-primary mb-2 group-hover:scale-110 transition"></i>
                    <span class="text-xs dark:text-gray-300">Review</span>
                </a>
                <a href="{{ route('settings.index') }}" class="flex flex-col items-center p-4 bg-white/5 rounded-2xl hover:bg-primary/10 transition group">
                    <i class="fas fa-cog text-primary mb-2 group-hover:scale-110 transition"></i>
                    <span class="text-xs dark:text-gray-300">Settings</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection