@extends('admin-panel::dashboard.layouts.app')
@section('title', 'Contacts List')

@section('content')
<div class="container mx-auto px-2 sm:px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Contact Messages</h1>
    </div>

    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden glass-card">
        <div class="overflow-x-auto">
            <table class="w-full whitespace-nowrap">
                <thead class="bg-gray-100 dark:bg-gray-700/50 text-gray-600 dark:text-gray-300">
                    <tr class="text-left text-sm font-semibold tracking-wide border-b border-gray-200 dark:border-gray-700">
                        <th class="px-6 py-4">Name</th>
                        <th class="px-6 py-4">Email & Phone</th>
                        <th class="px-6 py-4">Subject</th>
                        <th class="px-6 py-4">Time</th>
                        <th class="px-6 py-4 text-center">Status</th>
                        <th class="px-6 py-4 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @forelse($contacts as $contact)
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-750/50 transition-colors duration-200 {{ $contact->is_read ? '' : 'bg-emerald-50/50 dark:bg-emerald-900/10' }}">
                        
                        <td class="px-6 py-4">
                            <div class="text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $contact->name }}</div>
                        </td>
                        
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-800 dark:text-gray-200">{{ $contact->email }}</div>
                            <div class="text-xs text-gray-500 dark:text-gray-400 mt-1">{{ $contact->phone }}</div>
                        </td>
                        
                        <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300">
                            {{ \Illuminate\Support\Str::limit($contact->subject ?? 'N/A', 20) }}
                        </td>
                        
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-700 dark:text-gray-300">{{ $contact->created_at->format('d M, Y') }}</div>
                            <div class="text-xs text-gray-500 dark:text-gray-400 mt-1">{{ $contact->created_at->format('h:i A') }}</div>
                        </td>
                        
                        <td class="px-6 py-4 text-center">
                            @if($contact->is_read)
                                <span class="px-3 py-1 text-[10px] uppercase tracking-wider font-semibold text-gray-600 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Read</span>
                            @else
                                <span class="px-3 py-1 text-[10px] uppercase tracking-wider font-semibold text-emerald-600 bg-emerald-100 rounded-full dark:bg-emerald-900/40 dark:text-emerald-400">New</span>
                            @endif
                        </td>
                        
                        <td class="px-6 py-4 text-center space-x-4">
                            <a href="{{ route('admin.contacts.show', $contact->id) }}" class="text-blue-500 hover:text-blue-700 hover:scale-110 inline-block transition-transform duration-200" title="View Message">
                                <i class="fa-solid fa-eye text-lg"></i>
                            </a>
                            <button type="button" class="delete-btn text-red-500 hover:text-red-700 hover:scale-110 inline-block transition-transform duration-200" data-url="{{ route('admin.contacts.destroy', $contact->id) }}" title="Delete Message">
                                <i class="fa-solid fa-trash text-lg"></i>
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-10 text-center text-gray-500 dark:text-gray-400">
                            <i class="fa-regular fa-folder-open text-4xl mb-3"></i>
                            <p>No contact messages found.</p>
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
            let tr = this.closest('tr'); // Delete hole row ta hide korar jonno

            Swal.fire({
                title: 'Are you sure?',
                text: "You want to delete this message? This action cannot be undone!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#6b7280',
                confirmButtonText: '<i class="fa-solid fa-trash mr-1"></i> Yes, delete it!'
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
                            // Sundor vabe row ta fada out hoye delete hobe (No page reload)
                            tr.classList.add('opacity-0', '-translate-x-4', 'transition-all', 'duration-500');
                            setTimeout(() => { tr.remove(); }, 500);

                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                icon: 'success',
                                title: data.message,
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                    })
                    .catch(error => {
                        Swal.fire('Error!', 'Something went wrong.', 'error');
                    });
                }
            })
        });
    });
</script>
@endpush