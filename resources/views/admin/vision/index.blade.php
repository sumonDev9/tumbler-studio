@extends('admin-panel::dashboard.layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush

@section('content')
<div class="fade-in p-4">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold dark:text-white">Vision Gallery</h2>
        <button onclick="openModal()" class="bg-primary hover:opacity-90 text-white px-5 py-2 rounded-xl transition-all shadow-lg flex items-center gap-2">
            <i class="fas fa-plus"></i> Add New Image
        </button>
    </div>

    <div class="glass-panel rounded-2xl overflow-hidden shadow-xl border border-white/10">
        <table class="w-full text-left">
            <thead class="bg-slate-100/50 dark:bg-white/5 text-slate-600 dark:text-gray-300">
                <tr>
                    <th class="p-4 font-semibold text-xs uppercase">Image</th>
                    <th class="p-4 text-center font-semibold text-xs uppercase">Actions</th>
                </tr>
            </thead>
            <tbody id="galleryBody">
                @foreach($items as $item)
                <tr class="border-b border-white/5 hover:bg-white/5 transition-colors dark:text-gray-200">
                    <td class="p-4">
                        <img src="{{ asset('storage/'.$item->image) }}" class="w-32 h-20 object-cover rounded-lg border border-white/10 shadow-sm">
                    </td>
                    <td class="p-4">
                        <div class="flex justify-center items-center gap-4">
                            <button onclick="editItem({{ $item->id }})" class="text-blue-500 hover:scale-110 transition-transform"><i class="fas fa-edit text-lg"></i></button>
                            <button onclick="deleteItem({{ $item->id }})" class="text-red-500 hover:scale-110 transition-transform"><i class="fas fa-trash text-lg"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

{{-- Add/Edit Modal --}}
<div id="visionModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden flex justify-center items-center z-[100] p-4">
    <div class="glass-panel w-full max-w-md rounded-3xl p-8 border border-white/20 shadow-2xl animate-fadeIn">
        <h3 id="modalTitle" class="text-xl font-bold mb-6 dark:text-white">Add Vision Image</h3>
        <form id="visionForm">
            @csrf
            <input type="hidden" id="item_id" name="id">
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium dark:text-gray-300">Gallery Image (Max 10MB)</label>
                <input type="file" name="image" id="image" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20">
            </div>
            <div class="flex justify-end gap-3 pt-2">
                <button type="button" onclick="closeModal()" class="px-5 py-2 text-slate-500 hover:text-slate-700 font-semibold transition">Cancel</button>
                <button type="submit" id="submitBtn" class="bg-primary text-white px-8 py-2 rounded-xl flex items-center gap-3 font-semibold shadow-lg min-w-[120px] justify-center transition-all">
                    <span id="btnText">Save</span>
                    <div id="loader" class="hidden animate-spin w-5 h-5 border-2 border-white border-t-transparent rounded-full"></div>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
toastr.options = { "closeButton": true, "progressBar": true, "positionClass": "toast-top-right" };

function openModal() { 
    $('#visionForm')[0].reset(); 
    $('#item_id').val(''); 
    $('#modalTitle').text('Add Vision Image');
    $('#visionModal').removeClass('hidden').addClass('flex'); 
}

function closeModal() { 
    $('#visionModal').addClass('hidden').removeClass('flex'); 
}

$('#visionForm').on('submit', function(e) {
    e.preventDefault();
    let id = $('#item_id').val();
    let url = id ? `/admin/vision/${id}` : '/admin/vision';
    let formData = new FormData(this);
    if(id) formData.append('_method', 'PUT');

    $('#submitBtn').attr('disabled', true).addClass('opacity-70'); 
    $('#loader').removeClass('hidden');
    $('#btnText').text('Processing...');

    $.ajax({
        url: url, 
        method: 'POST', 
        data: formData, 
        contentType: false, 
        processData: false,
        success: function(res) {
            toastr.success(res.success);
            setTimeout(() => { location.reload(); }, 1000);
        },
        error: function(xhr) { 
            toastr.error('Operation failed. Check image size.');
            $('#submitBtn').attr('disabled', false).removeClass('opacity-70'); 
            $('#loader').addClass('hidden');
            $('#btnText').text('Save');
        }
    });
});

function editItem(id) {
    $.get(`/admin/vision/${id}/edit`, function(data) {
        $('#item_id').val(data.id); 
        $('#modalTitle').text('Update Vision Image');
        $('#visionModal').removeClass('hidden').addClass('flex');
    });
}

function deleteItem(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to delete this gallery image?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#10b981',
        cancelButtonColor: '#ef4444',
        confirmButtonText: 'Yes, Delete!',
        background: document.documentElement.classList.contains('dark') ? '#050505' : '#fff',
        color: document.documentElement.classList.contains('dark') ? '#fff' : '#000'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: `/admin/vision/${id}`, 
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
@endpush