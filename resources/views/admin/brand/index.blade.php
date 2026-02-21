@extends('admin-panel::dashboard.layouts.app')

@section('content')
<div class="fade-in p-4">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold dark:text-white">Trusted Brands</h2>
        <button onclick="openModal()" class="bg-primary text-white px-5 py-2 rounded-xl shadow-lg">Add New Logo</button>
    </div>

    <div class="glass-panel rounded-2xl overflow-hidden border border-white/10 shadow-xl">
        <table class="w-full text-left">
            <thead class="bg-slate-100/50 dark:bg-white/5 text-slate-600 dark:text-gray-300">
                <tr>
                    <th class="p-4 uppercase text-xs font-bold">Brand Logo</th>
                    <th class="p-4 uppercase text-xs font-bold text-center">Actions</th>
                </tr>
            </thead>
            <tbody id="brandBody">
                @foreach($brands as $brand)
                <tr class="border-b border-white/5 dark:text-gray-200 hover:bg-white/5 transition">
                    <td class="p-4">
                        <img src="{{ asset('storage/'.$brand->logo) }}" class="h-12 object-contain bg-white/10 p-2 rounded-lg">
                    </td>
                    <td class="p-4 text-center">
                        <div class="flex justify-center items-center gap-4">
                            <button onclick="editBrand({{ $brand->id }})" class="text-blue-500 hover:scale-110 transition-transform"><i class="fas fa-edit text-lg"></i></button>
                            <button onclick="deleteBrand({{ $brand->id }})" class="text-red-500 hover:scale-110 transition-transform"><i class="fas fa-trash text-lg"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="brandModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden flex justify-center items-center z-[100] p-4">
    <div class="glass-panel w-full max-w-md rounded-3xl p-8 border border-white/20 shadow-2xl">
        <h3 id="modalTitle" class="text-xl font-bold mb-6 dark:text-white text-center">Add Brand Logo</h3>
<form id="brandForm">
    @csrf
    <input type="hidden" id="brand_id" name="id">
    
    <div id="multiUploadField" class="mb-6">
        <label class="block mb-2 text-sm dark:text-gray-300 font-medium text-center">Select Multiple Logos (jpeg/png/jpg/svg/webp)</label>
        <div class="relative border-2 border-dashed border-white/10 rounded-2xl p-6 text-center hover:border-primary transition cursor-pointer">
            <input type="file" name="logos[]" id="logos" multiple class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
            <i class="fas fa-images text-3xl text-primary mb-2"></i>
            <p class="text-xs text-slate-400">Click or drag images to upload multiple</p>
        </div>
    </div>

    <div id="singleUploadField" class="hidden mb-6">
        <label class="block mb-2 text-sm dark:text-gray-300 font-medium text-center">Update Logo</label>
        <input type="file" name="logo" id="logo" class="w-full text-sm dark:text-gray-400">
    </div>

    <div class="flex justify-end gap-3 pt-2">
        <button type="button" onclick="closeModal()" class="px-6 py-2 text-slate-500 font-semibold transition">Cancel</button>
        <button type="submit" id="submitBtn" class="bg-primary text-white px-8 py-2 rounded-xl flex items-center gap-3 font-semibold shadow-lg min-w-[120px] justify-center transition">
            <span id="btnText">Save</span>
            <div id="loader" class="hidden animate-spin w-5 h-5 border-2 border-white border-t-transparent rounded-full"></div>
        </button>
    </div>
</form>
    </div>
</div>

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
toastr.options = { "closeButton": true, "progressBar": true, "positionClass": "toast-top-right" };

function openModal() { 
    $('#brandForm')[0].reset(); 
    $('#brand_id').val(''); 
    $('#multiUploadField').removeClass('hidden'); // Add mode e multiple
    $('#singleUploadField').addClass('hidden');
    $('#modalTitle').text('Add Multiple Brand Logos');
    $('#brandModal').removeClass('hidden').addClass('flex'); 
}
function closeModal() { $('#brandModal').addClass('hidden').removeClass('flex'); }

$('#brandForm').on('submit', function(e) {
    e.preventDefault();
    let id = $('#brand_id').val();
    let url = id ? `/admin/brand/${id}` : '/admin/brand';
    let formData = new FormData(this);
    if(id) formData.append('_method', 'PUT');

    $('#submitBtn').attr('disabled', true).addClass('opacity-70'); 
    $('#loader').removeClass('hidden'); 
    $('#btnText').text('Uploading...');

    $.ajax({
        url: url, method: 'POST', data: formData, contentType: false, processData: false,
        success: function(res) {
            toastr.success(res.success);
            setTimeout(() => location.reload(), 1000);
        },
        error: function() { 
            toastr.error('Operation failed! Check image size.');
            $('#submitBtn').attr('disabled', false).removeClass('opacity-70'); 
            $('#loader').addClass('hidden'); 
            $('#btnText').text('Save');
        }
    });
});

function editBrand(id) {
    $.get(`/admin/brand/${id}/edit`, function(data) {
        $('#brand_id').val(data.id);
        $('#multiUploadField').addClass('hidden'); // Edit mode e single
        $('#singleUploadField').removeClass('hidden');
        $('#modalTitle').text('Update Brand Logo');
        $('#brandModal').removeClass('hidden').addClass('flex');
    });
}

function deleteBrand(id) {
    Swal.fire({
        title: 'Are you sure?', text: "You want to remove this brand logo?", icon: 'warning', 
        showCancelButton: true, confirmButtonColor: '#10b981', confirmButtonText: 'Yes, Delete!',
        background: document.documentElement.classList.contains('dark') ? '#050505' : '#fff',
        color: document.documentElement.classList.contains('dark') ? '#fff' : '#000'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: `/admin/brand/${id}`, method: 'DELETE', data: { _token: "{{ csrf_token() }}" },
                success: function(res) { toastr.success(res.success); location.reload(); }
            });
        }
    });
}
</script>
@endpush
@endsection