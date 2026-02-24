@extends('admin-panel::dashboard.layouts.app')
@section('title', 'View Message Details')

@section('content')
<div class="container mx-auto px-4 py-6 max-w-5xl fade-in">
    
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
        <h1 class="text-2xl font-bold text-slate-800 dark:text-white">Message Details</h1>
        <a href="{{ route('admin.contacts.index') }}" class="px-4 py-2 bg-slate-200/80 dark:bg-white/10 text-slate-800 dark:text-white font-medium rounded-lg hover:bg-slate-300 dark:hover:bg-white/20 transition flex items-center shadow-sm">
            <i class="fa-solid fa-arrow-left mr-2"></i> Back to List
        </a>
    </div>

    {{-- Layout-er glass-panel class bebohar kora hoyeche --}}
    <div class="glass-panel rounded-3xl shadow-xl overflow-hidden p-6 md:p-10 relative border border-white/20">
        
        <div class="absolute top-6 right-6">
            <span class="px-4 py-1.5 text-[10px] font-semibold tracking-widest text-primary bg-primary/10 rounded-full dark:bg-primary/20 border border-primary/20 shadow-sm uppercase">
                <i class="fa-solid fa-check-circle mr-1"></i> READ
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8 mt-4 border-b border-slate-100 dark:border-white/5 pb-8">
            <div class="group">
                <p class="text-xs font-semibold uppercase tracking-wider text-slate-400 dark:text-gray-500 mb-1 flex items-center">
                    <i class="fa-regular fa-user mr-2 text-primary"></i> Sender Name
                </p>
                <p class="text-lg font-bold text-slate-800 dark:text-gray-100 pl-6">{{ $contact->name }}</p>
            </div>
            
            <div class="group">
                <p class="text-xs font-semibold uppercase tracking-wider text-slate-400 dark:text-gray-500 mb-1 flex items-center">
                    <i class="fa-regular fa-envelope mr-2 text-blue-500"></i> Email Address
                </p>
                <p class="text-lg font-bold text-slate-800 dark:text-gray-100 pl-6">
                    <a href="mailto:{{ $contact->email }}" class="hover:text-primary transition">{{ $contact->email }}</a>
                </p>
            </div>
            
            <div class="group">
                <p class="text-xs font-semibold uppercase tracking-wider text-slate-400 dark:text-gray-500 mb-1 flex items-center">
                    <i class="fa-solid fa-phone mr-2 text-orange-500"></i> Phone Number
                </p>
                <p class="text-lg font-bold text-slate-800 dark:text-gray-100 pl-6">
                    <a href="tel:{{ $contact->phone }}" class="hover:text-orange-500 transition">{{ $contact->phone }}</a>
                </p>
            </div>
            
            <div class="group">
                <p class="text-xs font-semibold uppercase tracking-wider text-slate-400 dark:text-gray-500 mb-1 flex items-center">
                    <i class="fa-regular fa-clock mr-2 text-purple-500"></i> Submitted Time
                </p>
                <p class="text-lg font-bold text-slate-800 dark:text-gray-100 pl-6">
                    {{ $contact->created_at->format('d F Y, h:i A') }}
                </p>
            </div>
        </div>

        <div>
            <p class="text-xs font-semibold uppercase tracking-wider text-slate-400 dark:text-gray-500 mb-2 flex items-center">
                <i class="fa-solid fa-heading mr-2 text-red-500"></i> Subject
            </p>
            <p class="text-xl font-bold text-slate-800 dark:text-gray-100 mb-8 pl-6">
                {{ $contact->subject ?? 'No Subject Provided' }}
            </p>

            <p class="text-xs font-semibold uppercase tracking-wider text-slate-400 dark:text-gray-500 mb-3 flex items-center">
                <i class="fa-regular fa-message mr-2 text-indigo-500"></i> Main Message
            </p>
            {{-- Light mode-e bg-slate-50/80 ebong Dark mode-e white/5 bebohar kora hoyeche layout onujayi --}}
            <div class="p-6 md:p-8 bg-slate-50/80 dark:bg-white/5 rounded-2xl border border-slate-100 dark:border-white/10 text-slate-700 dark:text-gray-300 leading-relaxed whitespace-pre-line shadow-inner">
                {{ $contact->message }}
            </div>
        </div>
        
    </div>
</div>
@endsection