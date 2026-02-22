@extends('admin-panel::dashboard.layouts.app')
@section('title', 'View Message Details')

@section('content')
<div class="container mx-auto px-4 py-6 max-w-5xl">
    
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Message Details</h1>
        <a href="{{ route('admin.contacts.index') }}" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white font-medium rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600 transition flex items-center shadow-sm">
            <i class="fa-solid fa-arrow-left mr-2"></i> Back to List
        </a>
    </div>

    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden glass-card p-6 md:p-10 relative">
        
        <div class="absolute top-6 right-6">
            <span class="px-4 py-1.5 text-xs font-semibold tracking-widest text-emerald-600 bg-emerald-100 rounded-full dark:bg-emerald-900/40 dark:text-emerald-400 border border-emerald-200 dark:border-emerald-800 shadow-sm">
                <i class="fa-solid fa-check-circle mr-1"></i> READ
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8 mt-4 border-b border-gray-100 dark:border-gray-700/50 pb-8">
            <div class="group">
                <p class="text-sm font-medium text-gray-400 dark:text-gray-500 mb-1 flex items-center">
                    <i class="fa-regular fa-user mr-2 text-emerald-500"></i> Sender Name
                </p>
                <p class="text-lg font-bold text-gray-800 dark:text-gray-100 pl-6">{{ $contact->name }}</p>
            </div>
            
            <div class="group">
                <p class="text-sm font-medium text-gray-400 dark:text-gray-500 mb-1 flex items-center">
                    <i class="fa-regular fa-envelope mr-2 text-blue-500"></i> Email Address
                </p>
                <p class="text-lg font-bold text-gray-800 dark:text-gray-100 pl-6">
                    <a href="mailto:{{ $contact->email }}" class="hover:text-blue-500 transition">{{ $contact->email }}</a>
                </p>
            </div>
            
            <div class="group">
                <p class="text-sm font-medium text-gray-400 dark:text-gray-500 mb-1 flex items-center">
                    <i class="fa-solid fa-phone mr-2 text-orange-500"></i> Phone Number
                </p>
                <p class="text-lg font-bold text-gray-800 dark:text-gray-100 pl-6">
                    <a href="tel:{{ $contact->phone }}" class="hover:text-orange-500 transition">{{ $contact->phone }}</a>
                </p>
            </div>
            
            <div class="group">
                <p class="text-sm font-medium text-gray-400 dark:text-gray-500 mb-1 flex items-center">
                    <i class="fa-regular fa-clock mr-2 text-purple-500"></i> Submitted Time
                </p>
                <p class="text-lg font-bold text-gray-800 dark:text-gray-100 pl-6">
                    {{ $contact->created_at->format('d F Y, h:i A') }}
                </p>
            </div>
        </div>

        <div>
            <p class="text-sm font-medium text-gray-400 dark:text-gray-500 mb-2 flex items-center">
                <i class="fa-solid fa-heading mr-2 text-red-500"></i> Subject
            </p>
            <p class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-8 pl-6">
                {{ $contact->subject ?? 'No Subject Provided' }}
            </p>

            <p class="text-sm font-medium text-gray-400 dark:text-gray-500 mb-3 flex items-center">
                <i class="fa-regular fa-message mr-2 text-indigo-500"></i> Main Message
            </p>
            <div class="p-6 md:p-8 bg-gray-50 dark:bg-gray-900/60 rounded-xl border border-gray-100 dark:border-gray-700/50 text-gray-700 dark:text-gray-300 leading-relaxed whitespace-pre-line shadow-inner">
                {{ $contact->message }}
            </div>
        </div>
        
    </div>
</div>
@endsection