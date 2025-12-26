@extends('layouts.app')

@section('isi_konten')
<section class="py-24 bg-white">
    <div class="container mx-auto px-6 md:px-20">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div class="max-w-2xl">
                <div class="inline-block px-4 py-1.5 bg-blue-50 rounded-full mb-4">
                    <span class="text-blue-600 font-black text-xs uppercase tracking-[0.2em] flex items-center gap-2">
                        <i class="fas fa-newspaper"></i> News & Update
                    </span>
                </div>
                <h1 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tighter uppercase">
                    Update Berita <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-900 to-green-600">SDN 2 MARGASARI</span>
                </h1>
            </div>
            <div class="flex items-center gap-4 border-b-2 border-slate-100 pb-2">
                <i class="fas fa-search text-slate-300"></i>
                <input type="text" placeholder="Cari berita..." class="bg-transparent outline-none text-sm font-medium text-slate-600 w-48">
            </div>
        </div>

        <div class="grid gap-12">
            @php
                $beritas = [
                    [
                        'tag' => 'Kegiatan',
                        'color' => 'bg-green-100 text-green-700',
                        'judul' => 'Peringatan Hari Guru di SDN 2 MARGASARI Berlangsung Meriah',
                        'desc' => 'Acara diisi dengan berbagai penampilan bakat siswa sebagai bentuk apresiasi kepada guru, mulai dari pembacaan puisi hingga paduan suara...',
                        'tgl' => '26 Desember 2025',
                        'img' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=600&h=400&fit=crop'
                    ],
                    [
                        'tag' => 'Prestasi',
                        'color' => 'bg-yellow-100 text-yellow-700',
                        'judul' => 'Tim Pramuka Raih Juara Umum Jambore Ranting 2025',
                        'desc' => 'Dedikasi dan latihan keras siswa membuahkan hasil membanggakan dengan membawa pulang piala bergilir juara umum tahun ini...',
                        'tgl' => '24 Desember 2025',
                        'img' => 'https://images.unsplash.com/photo-1529390079861-591de354faf5?q=80&w=600&h=400&fit=crop'
                    ],
                    [
                        'tag' => 'Akademik',
                        'color' => 'bg-blue-100 text-blue-700',
                        'judul' => 'Workshop Literasi Digital: Mempersiapkan Siswa di Era AI',
                        'desc' => 'Sekolah mengundang pakar IT untuk memberikan pemahaman dasar mengenai keamanan digital dan pemanfaatan teknologi secara bijak...',
                        'tgl' => '20 Desember 2025',
                        'img' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=600&h=400&fit=crop'
                    ],
                    [
                        'tag' => 'Infrastruktur',
                        'color' => 'bg-purple-100 text-purple-700',
                        'judul' => 'Peresmian Laboratorium Komputer Baru SDN 2 MARGASARI',
                        'desc' => 'Fasilitas baru dengan 30 unit komputer terbaru siap mendukung kegiatan belajar mengajar berbasis IT bagi seluruh siswa...',
                        'tgl' => '15 Desember 2025',
                        'img' => 'https://images.unsplash.com/photo-1571260899304-425eee4c7efc?q=80&w=600&h=400&fit=crop'
                    ]
                ];
            @endphp

            @foreach ($beritas as $item)
            <div class="group flex flex-col md:flex-row gap-8 items-start hover:bg-slate-50/50 p-4 rounded-[2rem] transition-all duration-500">
                <div class="w-full md:w-80 shrink-0 relative overflow-hidden rounded-3xl shadow-lg border-4 border-white transform group-hover:-rotate-1 transition duration-500">
                    <img src="{{ $item['img'] }}" alt="Berita" class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
                </div>

                <div class="flex flex-col justify-center py-2">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-widest {{ $item['color'] }}">
                            {{ $item['tag'] }}
                        </span>
                        <span class="text-slate-300 text-xs font-bold flex items-center gap-2 italic">
                            <i class="far fa-calendar-alt text-blue-500"></i> {{ $item['tgl'] }}
                        </span>
                    </div>
                    
                    <h2 class="text-2xl md:text-3xl font-black text-slate-800 leading-tight group-hover:text-blue-900 transition duration-300">
                        {{ $item['judul'] }}
                    </h2>
                    
                    <p class="text-slate-500 mt-4 text-base leading-relaxed line-clamp-2 italic">
                        "{{ $item['desc'] }}"
                    </p>

                    <div class="mt-6 flex items-center gap-6">
                        <button class="flex items-center gap-2 text-blue-900 font-black text-xs uppercase tracking-widest group-hover:gap-4 transition-all">
                            Baca Selengkapnya <i class="fas fa-arrow-right text-green-500"></i>
                        </button>
                        <div class="flex -space-x-2">
                            <img src="https://ui-avatars.com/api/?name=Admin&background=random" class="w-6 h-6 rounded-full border-2 border-white shadow-sm" title="Posted by Admin">
                            <div class="w-6 h-6 rounded-full bg-slate-100 border-2 border-white flex items-center justify-center text-[8px] font-bold text-slate-400 italic">
                                +1
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-px bg-gradient-to-r from-transparent via-slate-100 to-transparent w-full"></div>
            @endforeach
        </div>

        <div class="mt-20 flex justify-center items-center gap-2">
            <button class="w-12 h-12 rounded-2xl bg-slate-100 text-slate-400 hover:bg-blue-900 hover:text-white transition shadow-sm"><i class="fas fa-chevron-left"></i></button>
            <button class="w-12 h-12 rounded-2xl bg-blue-900 text-white shadow-xl shadow-blue-900/20 font-black">1</button>
            <button class="w-12 h-12 rounded-2xl bg-white border border-slate-100 text-slate-600 hover:bg-slate-50 transition font-black">2</button>
            <button class="w-12 h-12 rounded-2xl bg-white border border-slate-100 text-slate-600 hover:bg-slate-50 transition font-black">3</button>
            <button class="w-12 h-12 rounded-2xl bg-slate-100 text-slate-400 hover:bg-blue-900 hover:text-white transition shadow-sm"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</section>
@endsection