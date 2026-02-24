<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Tumbler Studios Dashboard')</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <script>
        // Check local storage immediately to avoid flicker
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        // glass: "rgba(255, 255, 255, 0.05)",
                        // glassBorder: "rgba(255, 255, 255, 0.1)",
                        // darkBg: "#050505",
                        // lightBg: "#f8fafc",
                        // primary: "#10b981",
                        // secondary: "#0f172a"
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        
        /* Glassmorphism Utilities - Dynamic for Light/Dark */
        
        /* DARK MODE */
        .dark .glass-panel {
            background: rgba(20, 20, 20, 0.6);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
        }
        
        .dark .glass-card {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0.01) 100%);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        /* LIGHT MODE (Frosted White) */
       .glass-panel {
            /* background: #572BC6; */
            background: rgba(255, 255, 255, 0.85); 
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
          
            border: 1px solid rgba(255, 255, 255, 1);
            border-bottom: 1px solid rgba(200, 200, 200, 0.3);
            box-shadow: 0 8px 32px 0 rgba(100, 100, 111, 0.1); 
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 24px -1px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .glass-card:hover {
            box-shadow: 0 10px 40px -5px rgba(0, 0, 0, 0.1);
        }

        /* Scrollbar styling */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        .dark ::-webkit-scrollbar-track {
            background: #0f172a;
        }
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        .dark ::-webkit-scrollbar-thumb {
            background: #334155;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #64748b;
        }

        /* Nav Item Active State */
        .nav-item.active {
            background: linear-gradient(to right, rgba(16, 185, 129, 0.1), rgba(20, 184, 166, 0.1));
            color: #059669;
            border-right: 3px solid #10b981;
        }
        .dark .nav-item.active {
            background: rgba(255, 255, 255, 0.05);
            color: #34d399;
            border-right: 3px solid #34d399;
        }

        /* Skeleton Animation */
        .skeleton {
            background-color: #e2e8f0;
            position: relative;
            overflow: hidden;
        }
        .dark .skeleton {
            background-color: #334155;
        }
        .skeleton::after {
            content: '';
            position: absolute;
            top: 0;
            left: -150%;
            width: 150%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            animation: shimmer 1.5s infinite;
        }
        .dark .skeleton::after {
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.05), transparent);
        }
        @keyframes shimmer {
            100% { left: 150%; }
        }

     :root {
            --primary: {{ session('theme.primary_color', '#10b981') }};
            --secondary: {{ session('theme.secondary_color', '#0f172a') }};
            --accent: {{ session('theme.accent_color', '#FFAC00') }};
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #1A685B 0%, #2a8875 100%);
        }
        
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .sidebar {
            transition: transform 0.3s ease;
        }
        
        .sidebar-open {
            transform: translateX(0);
        }
        
        .sidebar-closed {
            transform: translateX(-100%);
        }
        
@media (min-width: 1024px) {
    .sidebar {
        transform: translateX(0) !important;
    }
}
        
        .nav-item {
            position: relative;
            overflow: hidden;
        }
        
        .nav-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: var(--primary);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }
        
        .nav-item:hover::before,
        .nav-item.active::before {
            transform: translateX(0);
        }  
        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        

   
        .pulse-animate {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        
        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.7;
            }
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease-out;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .color-preview {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            cursor: pointer;
            border: 3px solid #e5e7eb;
            transition: all 0.3s ease;
        }
        
        .color-preview:hover {
            transform: scale(1.1);
            border-color: var(--primary);
        }
        
        .toggle-switch {
            width: 60px;
            height: 30px;
            background: #cbd5e1;
            border-radius: 15px;
            position: relative;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .toggle-switch.active {
            background: var(--primary);
        }
        
        .toggle-slider {
            width: 26px;
            height: 26px;
            background: white;
            border-radius: 50%;
            position: absolute;
            top: 2px;
            left: 2px;
            transition: transform 0.3s;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        
        .toggle-switch.active .toggle-slider {
            transform: translateX(30px);
        }

        .breadcrumb-nav {
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
            color: #4b5563;
        }
  
        .breadcrumb-nav a {
            color: var(--primary);
            text-decoration: none;
            transition: color 0.2s;
        }
        .breadcrumb-nav a:hover {
            color: #124e44;
        }

        .breadcrumb-nav span {
            margin: 0 0.5rem;
        }
        .skeleton-icon { width: 60px; height: 60px; border-radius: 16px; }
        .skeleton-text { height: 20px; border-radius: 8px; }
        .skeleton-title { height: 36px; border-radius: 8px; width: 60%; }
        .skeleton-bar { height: 8px; border-radius: 4px; }
        
        .font-size-sm { font-size: 14px; }
        .font-size-md { font-size: 16px; }
        .font-size-lg { font-size: 18px; }

        .font-size-btn {
            border: 2px solid #e5e7eb;
            transition: all 0.2s ease;
        }
        .font-size-btn.active {
            border-color: var(--primary);
            background-color: rgba(26, 104, 91, 0.1);
            color: var(--primary);
            font-weight: bold;
        }

        .activity-item {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.5s ease-out forwards;
        }
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .profile-image-container {
            position: relative;
            width: 128px;
            height: 128px;
        }

        .profile-image-overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(0,0,0,0.4);
            color: white;
            border-radius: 9999px;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            cursor: pointer;
        }

        .profile-image-container:hover .profile-image-overlay {
            opacity: 1;
        }
        
        #imageToCrop {
            display: block;
            max-width: 100%;
        }
    </style>
    
    @stack('styles')
</head>
<body class="bg-slate-50 text-slate-800 dark:bg-black dark:text-gray-300 relative overflow-hidden h-screen flex">

    <div class="fixed top-0 left-0 w-96 h-96 bg-emerald-300/30 dark:bg-emerald-900/20 rounded-full blur-3xl -z-10 animate-pulse transition-colors duration-500 pointer-events-none"></div>
    <div class="fixed bottom-0 right-0 w-[500px] h-[500px] bg-blue-300/20 dark:bg-blue-900/10 rounded-full blur-3xl -z-10 transition-colors duration-500 pointer-events-none"></div>
    
    @include('admin-panel::dashboard.partials.sidebar')
    
    <div class="flex-1 flex flex-col h-screen overflow-hidden relative w-full">
        @include('admin-panel::dashboard.partials.header')
        
        <main class="flex-1 overflow-y-auto p-4 lg:p-6 pb-20 scroll-smooth">
            @yield('content')
        </main>
        
       @include('admin-panel::dashboard.partials.footer') 
    </div>

    @include('admin-panel::dashboard.partials.cropper-modal')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.js"></script>
    <script src="{{ asset('vendor/admin-panel/js/dashboard.js') }}"></script>
    
    {{-- Toggle Script --}}
    <script>
        function toggleTheme() {
            const html = document.documentElement;
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                localStorage.setItem('theme', 'light');
                updateIcons('light');
            } else {
                html.classList.add('dark');
                localStorage.setItem('theme', 'dark');
                updateIcons('dark');
            }
        }

        function updateIcons(theme) {
            const moonIcon = document.getElementById('moonIcon');
            const sunIcon = document.getElementById('sunIcon');
            if(moonIcon && sunIcon) {
                if (theme === 'dark') {
                    moonIcon.classList.add('hidden');
                    sunIcon.classList.remove('hidden');
                } else {
                    moonIcon.classList.remove('hidden');
                    sunIcon.classList.add('hidden');
                }
            }
        }

        // Initialize icons on load
        document.addEventListener('DOMContentLoaded', () => {
            if (document.documentElement.classList.contains('dark')) {
                updateIcons('dark');
            } else {
                updateIcons('light');
            }
        });

        // Mobile Sidebar Toggle
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('mobile-overlay');
            
            if (sidebar.classList.contains('-translate-x-full')) {
                sidebar.classList.remove('-translate-x-full');
                if(overlay) overlay.classList.remove('hidden');
            } else {
                sidebar.classList.add('-translate-x-full');
                if(overlay) overlay.classList.add('hidden');
            }
        }
    </script>
    
   
    @stack('scripts')
</body>
</html>