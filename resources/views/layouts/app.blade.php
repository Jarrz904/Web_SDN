<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDN-2 Margasari - Sekolah Dasar </title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        /* Animasi halus untuk dropdown menu profil */
        .animate-fade-in {
            animation: fadeIn 0.2s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
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