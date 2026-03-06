@extends('layouts.app')
@section('title', 'Tumbler Studio – Career')
@section('styled_title')
    <span class="bg-gradient-to-r from-[#FF3668] to-[#CF0037] bg-clip-text text-transparent font-bold">
    Latest 
    </span>
    Blogs
@endsection
@section('breadcrumb', 'Blogs')


@push('meta-tags')
    <!-- SEO Meta Tags -->
    <meta name="description" content="Read our latest blog posts and articles">
    <meta name="keywords" content="blog, articles, news, updates">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Blog - {{ config('app.name') }}">
    <meta property="og:description" content="Read our latest blog posts and articles">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="Blog - {{ config('app.name') }}">
    <meta name="twitter:description" content="Read our latest blog posts and articles">
@endpush

@section('content')
<div class="min-h-screen relative bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 py-12 px-4 2xl:px-0">
   <div class="absolute top-0 left-20 w-[250px] hidden lg:block" data-aos="fade-right" data-aos-duration="1000">
        <img src="{{ asset('assets/image/home/triangle.png') }}" alt="" />
    </div>

    <div class="absolute -top-10 right-10 w-[250px] hidden lg:block" data-aos="fade-left" data-aos-duration="1000">
        <img src="{{ asset('assets/image/home/yellowtri.png') }}" alt="" />
    </div>
    
    <div class="container mx-auto">
        {{-- Header Section --}}
          <div class="mx-auto text-center" data-aos="fade-up" data-aos-duration="1000">
        <h3 class="font-bold text-lg md:text-3xl lg:text-6xl py-2 lg:py-5 text-[#CF0037]">
            Blogs
        </h3>
        <p class="font-semibold text-[#000000]">
            We thrive on creative challenges, and your project could be our next
            masterpiece.<br />Let's work together to bring your vision to life
            through the magic of animation.
        </p>
    </div>

        <div class="container mx-auto mt-20">
            <div id="loadingSpinner" class="hidden">
                <div class="flex items-center justify-center py-20">
                    <div class="relative">
                        <div class="w-20 h-20 border-4 border-blue-200 rounded-full"></div>
                        <div class="w-20 h-20 border-4 border-blue-600 border-t-transparent rounded-full animate-spin absolute top-0 left-0"></div>
                    </div>
                </div>
            </div>

            <div id="searchInfo" class="mb-6 hidden max-w-5xl mx-auto">
                <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded-lg flex items-center justify-between">
                    <p class="text-gray-700 flex items-center space-x-2">
                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Search results for: <strong class="text-blue-600" id="searchTerm"></strong></span>
                    </p>
                    <span class="text-sm font-semibold text-gray-500 px-4 py-2 bg-white rounded-full" id="resultsCount"></span>
                </div>
            </div>

            <div id="blogContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($blogs as $blog)
                    @include('blog::partials.blog-card', ['blog' => $blog])
                @empty
                    <div class="col-span-full">
                        @include('blog::partials.no-results')
                    </div>
                @endforelse
            </div>

            <div id="paginationContainer" class="mt-12 flex justify-center">
                @if($blogs->hasPages())
                    <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl p-6 border border-gray-200">
                        {{ $blogs->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
<style>
/* Enhanced Animations */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(40px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.animate-fade-in {
    animation: fadeIn 0.6s ease-out;
}

.animate-fade-in-up {
    animation: fadeInUp 0.8s ease-out;
}

.animate-slide-in-right {
    animation: slideInRight 0.6s ease-out;
}

/* Line Clamp Utilities */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Custom Scrollbar */
::-webkit-scrollbar {
    width: 12px;
}

::-webkit-scrollbar-track {
    background: linear-gradient(to bottom, #f1f5f9, #e2e8f0);
}

.dark ::-webkit-scrollbar-track {
    background: linear-gradient(to bottom, #1e293b, #0f172a);
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(to bottom, #3b82f6, #8b5cf6);
    border-radius: 10px;
    border: 2px solid transparent;
    background-clip: padding-box;
}

::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(to bottom, #2563eb, #7c3aed);
    background-clip: padding-box;
}

/* Glassmorphism Effect */
.glass {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

/* Loading Spinner */
@keyframes spin {
    to { transform: rotate(360deg); }
}

.animate-spin {
    animation: spin 1s linear infinite;
}

/* Smooth Transitions */
* {
    transition-property: background-color, border-color, color, fill, stroke;
    transition-duration: 200ms;
    transition-timing-function: ease-in-out;
}

/* Card Hover Effects */
.hover-lift {
    transition: all 0.3s ease;
}

.hover-lift:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

/* Pulse Animation for Badges */
@keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.6; }
}

.animate-pulse {
    animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}
</style>
@endpush

@push('scripts')
<script>
// AJAX Configuration
const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content || '{{ csrf_token() }}';

// Toast Notification Function
function showToast(message, type = 'info') {
    const toast = document.createElement('div');
    const colors = {
        'success': 'from-green-500 to-emerald-600',
        'error': 'from-red-500 to-rose-600',
        'warning': 'from-yellow-500 to-orange-600',
        'info': 'from-blue-500 to-indigo-600'
    };
    
    const icons = {
        'success': '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>',
        'error': '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>',
        'warning': '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>',
        'info': '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>'
    };

    toast.className = 'transform transition-all duration-500 ease-out opacity-0 translate-x-full';
    toast.innerHTML = `
        <div class="bg-gradient-to-r ${colors[type]} text-white px-6 py-4 rounded-2xl shadow-2xl flex items-center space-x-3 min-w-[320px] backdrop-blur-sm">
            <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    ${icons[type]}
                </svg>
            </div>
            <span class="flex-1 font-semibold">${message}</span>
            <button onclick="this.parentElement.parentElement.remove()" class="text-white/80 hover:text-white transition-colors ml-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    `;

    const container = document.getElementById('toastContainer');
    container.appendChild(toast);
    
    setTimeout(() => {
        toast.classList.remove('opacity-0', 'translate-x-full');
    }, 100);
    
    setTimeout(() => {
        toast.classList.add('opacity-0', 'translate-x-full');
        setTimeout(() => toast.remove(), 500);
    }, 5000);
}

// AJAX Blog Search Function
function searchBlogs(page = 1) {
    const searchInput = document.getElementById('searchInput');
    const blogContainer = document.getElementById('blogContainer');
    const loadingSpinner = document.getElementById('loadingSpinner');
    const paginationContainer = document.getElementById('paginationContainer');
    const searchInfo = document.getElementById('searchInfo');
    
    const searchTerm = searchInput.value.trim();
    const activeCategory = document.querySelector('.category-filter.active')?.dataset.category || '';
    
    // Show loading
    loadingSpinner.classList.remove('hidden');
    blogContainer.style.opacity = '0.5';
    
    // Build URL
    let url = new URL('{{ route("frontend.blog.index") }}');
    if (searchTerm) url.searchParams.set('search', searchTerm);
    if (activeCategory) url.searchParams.set('category', activeCategory);
    if (page > 1) url.searchParams.set('page', page);
    
    fetch(url, {
        method: 'GET',
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json',
        }
    })
    .then(response => response.json())
    .then(data => {
        // Hide loading
        loadingSpinner.classList.add('hidden');
        blogContainer.style.opacity = '1';
        
        // Update blog container
        if (data.html) {
            blogContainer.innerHTML = data.html;
            
            // Animate cards
            const cards = blogContainer.querySelectorAll('article');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    card.style.transition = 'all 0.5s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });
        }
        
        // Update pagination
        if (data.pagination) {
            paginationContainer.innerHTML = data.pagination;
        } else {
            paginationContainer.innerHTML = '';
        }
        
        // Show search info
        if (searchTerm) {
            searchInfo.classList.remove('hidden');
            document.getElementById('searchTerm').textContent = searchTerm;
            document.getElementById('resultsCount').textContent = `${data.total || 0} ${data.total === 1 ? 'result' : 'results'}`;
            
            if (data.total > 0) {
                showToast(`Found ${data.total} result${data.total !== 1 ? 's' : ''} for "${searchTerm}"`, 'success');
            } else {
                showToast('No results found. Try a different search term.', 'warning');
            }
        } else {
            searchInfo.classList.add('hidden');
        }
        
        // Scroll to top
        window.scrollTo({ top: 0, behavior: 'smooth' });
    })
    .catch(error => {
        console.error('Search error:', error);
        loadingSpinner.classList.add('hidden');
        blogContainer.style.opacity = '1';
        showToast('An error occurred. Please try again.', 'error');
    });
}

// Search Form Handler
document.getElementById('searchForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    searchBlogs();
});

// Clear Search Button
document.getElementById('clearSearch')?.addEventListener('click', function() {
    document.getElementById('searchInput').value = '';
    searchBlogs();
});

// Category Filter Buttons
document.querySelectorAll('.category-filter').forEach(button => {
    button.addEventListener('click', function() {
        // Remove active class from all buttons
        document.querySelectorAll('.category-filter').forEach(btn => {
            btn.classList.remove('active', 'bg-gradient-to-r', 'from-blue-600', 'via-purple-600', 'to-pink-600', 'text-white', 'shadow-xl');
            btn.classList.add('bg-white', 'dark:bg-gray-800', 'text-gray-700', 'dark:text-gray-300');
        });
        
        // Add active class to clicked button
        this.classList.add('active', 'bg-gradient-to-r', 'from-blue-600', 'via-purple-600', 'to-pink-600', 'text-white', 'shadow-xl');
        this.classList.remove('bg-white', 'dark:bg-gray-800', 'text-gray-700', 'dark:text-gray-300');
        
        const category = this.dataset.category;
        
        // Update URL without reload
        const url = new URL(window.location);
        if (category) {
            url.searchParams.set('category', category);
        } else {
            url.searchParams.delete('category');
        }
        window.history.pushState({}, '', url);
        
        // Fetch blogs for this category
        searchBlogs();
    });
});

// Newsletter Form AJAX
document.getElementById('newsletterForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const form = this;
    const button = document.getElementById('newsletterButton');
    const email = document.getElementById('newsletterEmail')?.value || '{{ auth()->user()->email ?? "" }}';
    
    // Disable button
    button.disabled = true;
    button.innerHTML = `
        <svg class="animate-spin w-5 h-5 mx-auto" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
    `;
    
    fetch(form.action, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken,
            'Accept': 'application/json',
        },
        body: JSON.stringify({ email: email })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showToast(data.message || 'Successfully subscribed to newsletter! 🎉', 'success');
            form.reset();
        } else {
            showToast(data.message || 'Subscription failed. Please try again.', 'error');
        }
    })
    .catch(error => {
        console.error('Newsletter error:', error);
        showToast('An error occurred. Please try again.', 'error');
    })
    .finally(() => {
        // Re-enable button
        button.disabled = false;
        button.innerHTML = 'Subscribe Now 🚀';
    });
});

// Pagination AJAX Handler
document.addEventListener('click', function(e) {
    if (e.target.closest('.pagination a')) {
        e.preventDefault();
        const url = new URL(e.target.closest('.pagination a').href);
        const page = url.searchParams.get('page');
        if (page) {
            searchBlogs(page);
        }
    }
});

// Real-time Search (Optional - debounced)
let searchTimeout;
document.getElementById('searchInput')?.addEventListener('input', function() {
    clearTimeout(searchTimeout);
    searchTimeout = setTimeout(() => {
        if (this.value.length >= 3 || this.value.length === 0) {
            searchBlogs();
        }
    }, 500);
});

// Keyboard Shortcuts
document.addEventListener('keydown', function(e) {
    // Ctrl/Cmd + K to focus search
    if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
        e.preventDefault();
        const searchInput = document.getElementById('searchInput');
        searchInput?.focus();
        searchInput?.select();
    }
    
    // Escape to clear search
    if (e.key === 'Escape') {
        const searchInput = document.getElementById('searchInput');
        if (searchInput && searchInput.value) {
            searchInput.value = '';
            searchBlogs();
        }
    }
});

// Smooth Scroll for Internal Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Lazy Loading for Images
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                }
                observer.unobserve(img);
            }
        });
    });
    
    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });
}

// View Counter (track views on scroll)
let viewsCounted = false;
window.addEventListener('scroll', function() {
    if (!viewsCounted && window.scrollY > 300) {
        viewsCounted = true;
        // Track page view analytics here
        console.log('Page view tracked');
    }
});

// Dark Mode Toggle Animation
const darkModeObserver = new MutationObserver(() => {
    document.body.style.transition = 'background-color 0.3s ease';
});

if (document.documentElement) {
    darkModeObserver.observe(document.documentElement, {
        attributes: true,
        attributeFilter: ['class']
    });
}

// Initial load animations
document.addEventListener('DOMContentLoaded', function() {
    // Animate page elements on load
    const elements = document.querySelectorAll('.animate-on-scroll');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
            }
        });
    }, { threshold: 0.1 });
    
    elements.forEach(el => observer.observe(el));
    
    // Show initial search results if present
    @if(request('search'))
        const resultsCount = {{ $blogs->total() }};
        if (resultsCount > 0) {
            showToast(`Found ${resultsCount} result${resultsCount !== 1 ? 's' : ''} for "{{ request('search') }}"`, 'success');
        }
    @endif
});

// Service Worker for offline support (optional)
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        // navigator.serviceWorker.register('/sw.js');
    });
}
</script>
@endpush