@extends('admin-panel::dashboard.layouts.app')

@section('content')
<div class="fade-in p-4">
    <div class="flex flex-col md:flex-row justify-between items-center mb-8 gap-4">
        <div>
            <h2 class="text-3xl font-bold dark:text-white text-slate-800">Team Management</h2>
            <p class="text-slate-500 dark:text-gray-400">Add, edit or remove your team members</p>
        </div>
        <button onclick="openModal()" class="bg-primary hover:opacity-90 text-white px-6 py-3 rounded-xl font-semibold shadow-lg transition-all flex items-center gap-2">
            <i class="fas fa-plus"></i> Add New Member
        </button>
    </div>

    <div class="glass-panel rounded-2xl overflow-hidden border border-slate-200 dark:border-white/10 shadow-xl">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-slate-100/50 dark:bg-white/5 text-slate-600 dark:text-gray-300">
                        <th class="p-5 font-semibold text-xs uppercase tracking-wider">Profile</th>
                        <th class="p-5 font-semibold text-xs uppercase tracking-wider">Name</th>
                        <th class="p-5 font-semibold text-xs uppercase tracking-wider">Designation</th>
                        <th class="p-5 font-semibold text-xs uppercase tracking-wider text-center">Actions</th>
                    </tr>
                </thead>
                <tbody id="teamTableBody" class="divide-y divide-slate-100 dark:divide-white/5">
                    @forelse($teams as $member)
                    <tr class="hover:bg-slate-50/50 dark:hover:bg-white/5 transition-colors">
                        <td class="p-5">
                            <img src="{{ asset('storage/'.$member->profile_image) }}" class="w-12 h-12 rounded-xl object-cover border border-white dark:border-slate-700 shadow-sm">
                        </td>
                        <td class="p-5 font-medium dark:text-gray-200">{{ $member->name }}</td>
                        <td class="p-5 text-slate-500 dark:text-gray-400 text-sm">{{ $member->designation }}</td>
                        <td class="p-5">
                            <div class="flex justify-center items-center gap-4">
                                <button onclick="editMember({{ $member->id }})" class="text-blue-500 hover:scale-110 transition-transform" title="View/Edit">
                                    <i class="fas fa-edit text-lg"></i>
                                </button>
                                <button onclick="deleteMember({{ $member->id }})" class="text-red-500 hover:scale-110 transition-transform" title="Delete">
                                    <i class="fas fa-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="p-10 text-center text-slate-400">No members found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="teamModal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-md hidden flex justify-center items-center z-[100] p-4">
    <div class="glass-panel w-full max-w-lg rounded-3xl border border-white/20 dark:border-white/10 shadow-2xl overflow-hidden">
        <div class="p-6 border-b border-slate-100 dark:border-white/5 flex justify-between items-center">
            <h3 id="modalTitle" class="text-xl font-bold dark:text-white">Add Team Member</h3>
            <button onclick="closeModal()" class="text-slate-400 hover:text-slate-600 dark:hover:text-white"><i class="fas fa-times"></i></button>
        </div>
        
        <form id="teamForm" class="p-8 space-y-6">
            @csrf
            <input type="hidden" id="member_id" name="id">
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-2 dark:text-gray-300">Full Name</label>
                    <input type="text" name="name" id="name" class="w-full bg-slate-50 dark:bg-darkBg/50 border border-slate-200 dark:border-white/10 rounded-xl p-3 outline-none focus:ring-2 focus:ring-primary/50 dark:text-white transition" required>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2 dark:text-gray-300">Designation</label>
                    <input type="text" name="designation" id="designation" class="w-full bg-slate-50 dark:bg-darkBg/50 border border-slate-200 dark:border-white/10 rounded-xl p-3 outline-none focus:ring-2 focus:ring-primary/50 dark:text-white transition" required>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2 dark:text-gray-300">Profile Image</label>
                    <input type="file" name="profile_image" id="profile_image" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20 cursor-pointer">
                </div>
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <button type="button" onclick="closeModal()" class="px-6 py-3 rounded-xl text-slate-500 hover:bg-slate-100 dark:hover:bg-white/5 transition font-semibold">Cancel</button>
                <button type="submit" id="submitBtn" class="bg-primary text-white px-8 py-3 rounded-xl font-semibold shadow-lg flex items-center gap-3 transition-all min-w-[140px] justify-center">
                    <span id="btnText">Save Member</span>
                    <div id="btnLoader" class="hidden">
                        <svg class="animate-spin h-5 w-5 text-white" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </div>
                </button>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
toastr.options = { "closeButton": true, "progressBar": true, "positionClass": "toast-top-right" };

function openModal() {
    $('#teamForm')[0].reset();
    $('#member_id').val('');
    $('#modalTitle').text('Add New Team Member');
    $('#teamModal').removeClass('hidden').addClass('flex');
}

function closeModal() {
    $('#teamModal').addClass('hidden').removeClass('flex');
}

$('#teamForm').on('submit', function(e) {
    e.preventDefault();
    let id = $('#member_id').val();
    let url = id ? `/admin/team/${id}` : '/admin/team';
    let formData = new FormData(this);
    if(id) formData.append('_method', 'PUT');

    $('#submitBtn').attr('disabled', true).addClass('opacity-70');
    $('#btnLoader').removeClass('hidden');
    $('#btnText').text('Processing...');

    $.ajax({
        url: url,
        method: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(res) {
            toastr.success(res.success);
            setTimeout(() => location.reload(), 1000);
        },
        error: function(xhr) {
            if(xhr.status === 422) {
                let errors = xhr.responseJSON.errors;
                $.each(errors, function(key, val) { toastr.error(val[0]); });
            } else {
                toastr.error('Submission failed. Check image size (Max 10MB).');
            }
            $('#submitBtn').attr('disabled', false).removeClass('opacity-70');
            $('#btnLoader').addClass('hidden');
            $('#btnText').text('Save Member');
        }
    });
});

function editMember(id) {
    $.get(`/admin/team/${id}/edit`, function(data) {
        $('#member_id').val(data.id);
        $('#name').val(data.name);
        $('#designation').val(data.designation);
        $('#modalTitle').text('Update Member Info');
        $('#teamModal').removeClass('hidden').addClass('flex');
    });
}

function deleteMember(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to delete this member permanently?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#10b981',
        cancelButtonColor: '#ef4444',
        confirmButtonText: 'Yes, delete!',
        background: document.documentElement.classList.contains('dark') ? '#050505' : '#fff',
        color: document.documentElement.classList.contains('dark') ? '#fff' : '#000'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: `/admin/team/${id}`,
                method: 'DELETE',
                data: { _token: "{{ csrf_token() }}" },
                success: function(res) {
                    toastr.success(res.success);
                    location.reload();
                }
            });
        }
    });
}
</script>
@endsection