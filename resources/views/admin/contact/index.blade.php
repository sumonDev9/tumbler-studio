@extends('admin-panel::dashboard.layouts.app')
@section('title', 'Contacts List')

@section('content')
<div class="container mx-auto px-2 sm:px-4 py-6 fade-in">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-slate-800 dark:text-white">Contact Messages</h1>
    </div>

    {{-- Aponar layout-er glass-panel class bebohar kora hoyeche --}}
    <div class="glass-panel rounded-3xl overflow-hidden shadow-xl border border-white/20">
        <div class="overflow-x-auto">
            <table class="w-full whitespace-nowrap">
                {{-- Layout-er slate-50 (light) ebong black (dark) theme-er sathe match kora hoyeche --}}
                <thead class="bg-slate-50/50 dark:bg-white/5 text-slate-600 dark:text-gray-300">
                    <tr class="text-left text-sm font-semibold tracking-wide border-b border-slate-200 dark:border-white/10">
                        <th class="px-6 py-4">Name</th>
                        <th class="px-6 py-4">Email & Phone</th>
                        <th class="px-6 py-4">Subject</th>
                        <th class="px-6 py-4">Time</th>
                        <th class="px-6 py-4 text-center">Status</th>
                        <th class="px-6 py-4 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-white/5">
                    @forelse($contacts as $contact)
                    {{-- Layout-er emerald-300 logic maintain kora hoyeche --}}
                    <tr class="hover:bg-slate-100/50 dark:hover:bg-white/5 transition-colors duration-200 {{ $contact->is_read ? '' : 'bg-emerald-50/30 dark:bg-emerald-900/10' }}">
                        
                        <td class="px-6 py-4">
                            <div class="text-sm font-semibold text-slate-800 dark:text-gray-200">{{ $contact->name }}</div>
                        </td>
                        
                        <td class="px-6 py-4">
                            <div class="text-sm text-slate-800 dark:text-gray-200">{{ $contact->email }}</div>
                            <div class="text-xs text-slate-500 dark:text-gray-400 mt-1">{{ $contact->phone }}</div>
                        </td>
                        
                        <td class="px-6 py-4 text-sm text-slate-700 dark:text-gray-300">
                            {{ \Illuminate\Support\Str::limit($contact->subject ?? 'N/A', 20) }}
                        </td>
                        
                        <td class="px-6 py-4">
                            <div class="text-sm text-slate-700 dark:text-gray-300">{{ $contact->created_at->format('d M, Y') }}</div>
                            <div class="text-xs text-slate-500 dark:text-gray-400 mt-1">{{ $contact->created_at->format('h:i A') }}</div>
                        </td>
                        
                        <td class="px-6 py-4 text-center">
                            @if($contact->is_read)
                                <span class="px-3 py-1 text-[10px] uppercase tracking-wider font-semibold text-slate-500 bg-slate-200/50 rounded-full dark:bg-white/10 dark:text-gray-400">Read</span>
                            @else
                                <span class="px-3 py-1 text-[10px] uppercase tracking-wider font-semibold text-primary bg-primary/10 rounded-full dark:bg-primary/20">New</span>
                            @endif
                        </td>
                        
                        <td class="px-6 py-4 text-center space-x-4">
                            <a href="{{ route('admin.contacts.show', $contact->id) }}" class="text-blue-500 hover:text-blue-600 hover:scale-110 inline-block transition-transform duration-200" title="View Message">
                                <i class="fa-solid fa-eye text-lg"></i>
                            </a>
                            <button type="button" class="delete-btn text-red-500 hover:text-red-600 hover:scale-110 inline-block transition-transform duration-200" data-url="{{ route('admin.contacts.destroy', $contact->id) }}" title="Delete Message">
                                <i class="fa-solid fa-trash text-lg"></i>
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-20 text-center text-slate-400 dark:text-gray-500">
                            <i class="fa-regular fa-folder-open text-5xl mb-4 block"></i>
                            <p class="text-lg">No contact messages found.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.querySelectorAll('.delete-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            let url = this.getAttribute('data-url');
            let tr = this.closest('tr');

            Swal.fire({
                title: 'Are you sure?',
                text: "You want to delete this message?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#10b981', {{-- Layout-er primary color --}}
                cancelButtonColor: '#ef4444',
                confirmButtonText: 'Yes, delete it!',
                {{-- Layout-er background color check --}}
                background: document.documentElement.classList.contains('dark') ? '#050505' : '#fff',
                color: document.documentElement.classList.contains('dark') ? '#fff' : '#000'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(url, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Accept': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        if(data.success) {
                            tr.classList.add('opacity-0', '-translate-x-4', 'transition-all', 'duration-500');
                            setTimeout(() => { tr.remove(); }, 500);

                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                icon: 'success',
                                title: data.message,
                                showConfirmButton: false,
                                timer: 3000,
                                background: document.documentElement.classList.contains('dark') ? '#050505' : '#fff',
                                color: document.documentElement.classList.contains('dark') ? '#fff' : '#000'
                            });
                        }
                    });
                }
            })
        });
    });
</script>
@endpush