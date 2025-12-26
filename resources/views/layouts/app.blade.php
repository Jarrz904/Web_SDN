<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDN-2 Margasari - Sekolah Dasar </title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/76.png') }}?v=1">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/images/76.png') }}?v=1">
    <link rel="apple-touch-icon" href="{{ asset('/images/76.png') }}?v=1">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        /* Variabel Global untuk Ukuran Logo agar mudah diatur */
        :root {
            --nav-logo-height: 5rem; /* Ukuran default diperbesar (80px) */
            --nav-logo-mobile: 3.5rem; /* Ukuran di HP (56px) */
        }

        /* Animasi halus untuk dropdown menu profil */
        .animate-fade-in {
            animation: fadeIn 0.2s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* CSS Spesifik Logo Navbar - Menggunakan !important agar pasti berubah */
        .nav-logo {
            height: var(--nav-logo-height) !important;
            width: auto !important;
            max-height: none !important; /* Menghapus batasan tinggi bawaan */
            transition: all 0.3s ease;
            object-fit: contain;
        }

        @media (max-width: 768px) {
            .nav-logo {
                height: var(--nav-logo-mobile) !important;
            }
        }

        /* Memastikan container navbar menyesuaikan tinggi logo baru */
        nav .container {
            min-height: 5rem;
        }
    </style>
</head>
<body class="bg-slate-50 font-sans antialiased text-slate-900 overflow-x-hidden">

    {{-- Memanggil Navbar dari folder components --}}
    {{-- Navbar harus memiliki z-index tinggi agar dropdown berada di atas konten --}}
    @include('components.navbar')

    {{-- 
        Main content area 
        min-h-screen memastikan footer tetap di bawah jika konten sedikit
    --}}
    <main class="min-h-screen">
        @yield('isi_konten') 
    </main>

    {{-- Memanggil Footer dari folder components --}}
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    {{-- Tempat script tambahan (seperti inisialisasi Swiper) akan muncul --}}
    @stack('scripts')

</body>
</html>