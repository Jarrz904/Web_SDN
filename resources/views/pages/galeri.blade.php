@extends('layouts.app')

@section('isi_konten')
<section class="py-24 bg-white overflow-hidden">
    <div class="container mx-auto px-6 md:px-20">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-block px-4 py-1.5 bg-green-50 rounded-full mb-4">
                <span class="text-green-600 font-black text-xs uppercase tracking-[0.2em] flex items-center gap-2">
                    <i class="fas fa-camera-retro"></i> Dokumentasi Visual
                </span>
            </div>
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 mb-4 uppercase tracking-tighter">
                Galeri <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-900 to-green-600">Momen Berharga</span>
            </h1>
            <p class="text-gray-500 text-lg italic">Menyimpan setiap jejak langkah dan prestasi siswa SDN 2 MARGASARI dalam bingkai dokumentasi terbaik.</p>
        </div>

        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <button class="px-6 py-2 rounded-full bg-blue-900 text-white text-xs font-bold uppercase tracking-widest shadow-lg shadow-blue-900/20">Semua</button>
            <button class="px-6 py-2 rounded-full bg-slate-100 text-slate-500 text-xs font-bold uppercase tracking-widest hover:bg-green-500 hover:text-white transition shadow-sm">Kegiatan</button>
            <button class="px-6 py-2 rounded-full bg-slate-100 text-slate-500 text-xs font-bold uppercase tracking-widest hover:bg-green-500 hover:text-white transition shadow-sm">Fasilitas</button>
            <button class="px-6 py-2 rounded-full bg-slate-100 text-slate-500 text-xs font-bold uppercase tracking-widest hover:bg-green-500 hover:text-white transition shadow-sm">Prestasi</button>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @php
                $images = [
                    ['url' => 'https://images.unsplash.com/photo-1577896851231-70ef1460011e?q=80&w=600', 'title' => 'Lomba Mewarnai'],
                    ['url' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?q=80&w=600', 'title' => 'Belajar di Taman'],
                    ['url' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=600', 'title' => 'Praktikum Sains'],
                    ['url' => 'https://images.unsplash.com/photo-1529390079861-591de354faf5?q=80&w=600', 'title' => 'Upacara Bendera'],
                    ['url' => 'https://images.unsplash.com/photo-1511629091441-ee461463a2cd?q=80&w=600', 'title' => 'Kegiatan Pramuka'],
                    ['url' => 'https://images.unsplash.com/photo-1544531585-9847b68c8c86?q=80&w=600', 'title' => 'Market Day'],
                    ['url' => 'https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=600', 'title' => 'Perpustakaan'],
                    ['url' => 'https://images.unsplash.com/photo-1588072432836-e10032774350?q=80&w=600', 'title' => 'Olahraga Bersama'],
                    ['url' => 'https://images.unsplash.com/photo-1501290741922-b56c0d0884af?q=80&w=600', 'title' => 'Seni Tari'],
                    ['url' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=600', 'title' => 'Hari Guru'],
                    ['url' => 'https://images.unsplash.com/photo-1580582932707-520aed937b7b?q=80&w=600', 'title' => 'Gedung Utama'],
                    ['url' => 'https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?q=80&w=600', 'title' => 'Laboratorium IT']
                ];
            @endphp

            @foreach ($images as $img)
            <div class="group relative aspect-square bg-slate-200 rounded-[2rem] overflow-hidden cursor-pointer shadow-sm hover:shadow-2xl hover:shadow-blue-900/20 transition-all duration-500">
                <img src="{{ $img['url'] }}" 
                     alt="{{ $img['title'] }}" 
                     class="w-full h-full object-cover group-hover:scale-110 group-hover:rotate-2 transition duration-700">
                
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                
                <div class="absolute inset-0 p-6 flex flex-col justify-end translate-y-8 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500">
                    <p class="text-[10px] text-green-400 font-black uppercase tracking-[0.2em] mb-1">SDN 2 MARGASARI</p>
                    <h3 class="text-white font-bold text-lg leading-tight uppercase tracking-tight">{{ $img['title'] }}</h3>
                    
                    <div class="mt-4 flex items-center justify-between">
                        <span class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white border border-white/30">
                            <i class="fas fa-search-plus text-xs"></i>
                        </span>
                        <span class="text-[9px] text-white/60 font-medium italic">Klik untuk memperbesar</span>
                    </div>
                </div>

                <div class="absolute top-4 right-4 w-2 h-8 bg-green-500 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 delay-100"></div>
            </div>
            @endforeach
        </div>

        <div class="mt-20 text-center">
            <button class="group relative px-10 py-4 bg-white border-2 border-blue-900 text-blue-900 rounded-2xl font-black text-xs uppercase tracking-[0.3em] overflow-hidden transition-all duration-300 hover:text-white">
                <span class="absolute inset-0 w-0 bg-blue-900 transition-all duration-300 group-hover:w-full -z-10"></span>
                Muat Lebih Banyak
            </button>
        </div>
    </div>
</section>
@endsection