@extends('admin-panel::dashboard.layouts.app')
@section('title', 'Testimonials')
@section('content')
<div class="fade-in p-4">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold dark:text-white">Testimonials</h2>
        <button onclick="openModal()" class="bg-primary text-white px-5 py-2 rounded-xl shadow-lg hover:opacity-90 transition">Add New</button>
    </div>

    <div class="glass-panel rounded-2xl overflow-hidden shadow-xl border border-white/10">
        <table class="w-full text-left">
            <thead class="bg-slate-100/50 dark:bg-white/5 text-slate-600 dark:text-gray-300">
                <tr>
                    <th class="p-4 uppercase text-xs font-bold">Client</th>
                    <th class="p-4 uppercase text-xs font-bold">Rating</th>
                    <th class="p-4 uppercase text-xs font-bold text-center">Actions</th>
                </tr>
            </thead>
            <tbody id="testimonialBody">
                @foreach($testimonials as $t)
                <tr class="border-b border-white/5 dark:text-gray-200 hover:bg-white/5 transition">
                    <td class="p-4 flex items-center gap-3">
                        <img src="{{ $t->image ? asset('storage/'.$t->image) : 'https://ui-avatars.com/api/?name='.$t->name }}" class="w-10 h-10 rounded-full object-cover border border-white/20">
                        {{ $t->name }}
                    </td>
                    <td class="p-4">
                        <span class="text-yellow-500 font-bold">{{ $t->rating }} <i class="fas fa-star text-xs"></i></span>
                    </td>
                    <td class="p-4 text-center">
                        <button onclick="editItem({{ $t->id }})" class="text-blue-500 mx-2 hover:scale-110 transition"><i class="fas fa-edit"></i></button>
                        <button onclick="deleteItem({{ $t->id }})" class="text-red-500 mx-2 hover:scale-110 transition"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="testiModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden flex justify-center items-center z-[100] p-4">
    <div class="glass-panel w-full max-w-lg rounded-3xl p-8 border border-white/20 shadow-2xl">
        <h3 id="modalTitle" class="text-xl font-bold mb-6 dark:text-white">Add Testimonial</h3>
        <form id="testiForm">
            @csrf
            <input type="hidden" id="item_id" name="id">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block mb-1 text-sm dark:text-gray-300">Client Name</label>
                    <input type="text" name="name" id="name" class="w-full bg-slate-50 dark:bg-darkBg/50 border border-white/10 rounded-xl p-2.5 dark:text-white outline-none focus:ring-2 focus:ring-primary/50" required>
                </div>
                <div>
                    <label class="block mb-1 text-sm dark:text-gray-300">Rating (1-5)</label>
                    <select name="rating" id="rating" class="w-full bg-slate-50 dark:bg-darkBg/50 border border-white/10 rounded-xl p-2.5 dark:text-white outline-none focus:ring-2 focus:ring-primary/50">
                        <option value="5">5 Stars</option>
                        <option value="4">4 Stars</option>
                        <option value="3">3 Stars</option>
                        <option value="2">2 Stars</option>
                        <option value="1">1 Star</option>
                    </select>
                </div>
            </div>
            <div class="mb-4">
                <label class="block mb-1 text-sm dark:text-gray-300">Review</label>
                <textarea name="review" id="review" rows="3" class="w-full bg-slate-50 dark:bg-darkBg/50 border border-white/10 rounded-xl p-2.5 dark:text-white outline-none focus:ring-2 focus:ring-primary/50" required></textarea>
            </div>
            <div class="mb-6">
                <label class="block mb-1 text-sm dark:text-gray-300">Client Image</label>
                <input type="file" name="image" id="image" class="w-full text-sm dark:text-gray-400">
            </div>
            <div class="flex justify-end gap-3">
                <button type="button" onclick="closeModal()" class="px-5 py-2 text-slate-500 font-semibold transition">Cancel</button>
                <button type="submit" id="submitBtn" class="bg-primary text-white px-8 py-2 rounded-xl flex items-center gap-2 font-semibold shadow-lg min-w-[120px] justify-center transition">
                    <span id="btnText">Save</span>
                    <div id="loader" class="hidden animate-spin w-4 h-4 border-2 border-white border-t-transparent rounded-full"></div>
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

function openModal() { $('#testiForm')[0].reset(); $('#item_id').val(''); $('#modalTitle').text('Add Testimonial'); $('#testiModal').removeClass('hidden').addClass('flex'); }
function closeModal() { $('#testiModal').addClass('hidden').removeClass('flex'); }

$('#testiForm').on('submit', function(e) {
    e.preventDefault();
    let id = $('#item_id').val();
    let url = id ? `/admin/testimonial/${id}` : '/admin/testimonial';
    let formData = new FormData(this);
    if(id) formData.append('_method', 'PUT');

    $('#submitBtn').attr('disabled', true).addClass('opacity-70'); 
    $('#loader').removeClass('hidden'); 
    $('#btnText').text('Processing...');

    $.ajax({
        url: url, method: 'POST', data: formData, contentType: false, processData: false,
        success: function(res) {
            toastr.success(res.success);
            setTimeout(() => location.reload(), 1000);
        },
        error: function() { 
            toastr.error('Operation failed!');
            $('#submitBtn').attr('disabled', false).removeClass('opacity-70'); 
            $('#loader').addClass('hidden'); 
            $('#btnText').text('Save');
        }
    });
});

function editItem(id) {
    $.get(`/admin/testimonial/${id}/edit`, function(data) {
        $('#item_id').val(data.id); $('#name').val(data.name); $('#rating').val(data.rating); $('#review').val(data.review);
        $('#modalTitle').text('Edit Testimonial');
        $('#testiModal').removeClass('hidden').addClass('flex');
    });
}

function deleteItem(id) {
    Swal.fire({
        title: 'Are you sure?', text: "You want to delete this review?", icon: 'warning', 
        showCancelButton: true, confirmButtonColor: '#10b981', confirmButtonText: 'Yes, Delete!',
        background: document.documentElement.classList.contains('dark') ? '#050505' : '#fff',
        color: document.documentElement.classList.contains('dark') ? '#fff' : '#000'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: `/admin/testimonial/${id}`, method: 'DELETE', data: { _token: "{{ csrf_token() }}" },
                success: function(res) { toastr.success(res.success); location.reload(); }
            });
        }
    });
}
</script>
@endsection