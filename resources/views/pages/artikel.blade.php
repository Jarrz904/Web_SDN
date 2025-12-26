@extends('layouts.app')

@section('isi_konten')
<section class="py-24 bg-white overflow-hidden">
    <div class="container mx-auto px-6 md:px-20 text-center">
        <div class="inline-block px-4 py-1.5 bg-blue-50 rounded-full mb-6">
            <span class="text-blue-600 font-black text-xs uppercase tracking-[0.3em] flex items-center gap-2">
                <i class="fas fa-newspaper"></i> School Update
            </span>
        </div>
        <h1 class="text-5xl md:text-6xl font-black text-slate-900 uppercase tracking-tighter mb-6">
     <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-900 to-green-600">Artikel</span>
        </h1>
        <p class="text-gray-500 text-lg italic max-w-2xl mx-auto">Informasi terkini mengenai kegiatan, prestasi, dan pengumuman resmi dari SDN 2 MARGASARI.</p>
        <div class="w-24 h-1.5 bg-green-500 mx-auto mt-8 rounded-full"></div>
    </div>
</section>

<section class="pb-12 bg-white">
    <div class="container mx-auto px-6 md:px-20">
        <div class="group relative bg-slate-900 rounded-[3.5rem] overflow-hidden shadow-2xl min-h-[500px] flex items-end transition-all duration-700">
            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=1200" 
                 class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-110 transition duration-1000">
            
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/20 to-transparent"></div>

            <div class="relative p-8 md:p-16 w-full md:w-3/4">
                <span class="px-4 py-1.5 bg-green-500 text-white rounded-xl text-[10px] font-black uppercase tracking-widest mb-6 inline-block shadow-lg">
                    Berita Utama
                </span>
                <h2 class="text-3xl md:text-5xl font-black text-white mb-6 leading-tight tracking-tight uppercase">
                    Peringatan Hari Guru Nasional di SDN 2 MARGASARI Berlangsung Khidmat
                </h2>
                <div class="flex items-center gap-6 text-blue-100 mb-8 font-medium italic text-sm">
                    <span class="flex items-center gap-2"><i class="far fa-calendar-alt"></i> 26 Desember 2025</span>
                    <span class="flex items-center gap-2"><i class="far fa-user"></i> Admin Sekolah</span>
                </div>
                <a href="#" class="inline-flex items-center gap-4 px-8 py-4 bg-white text-blue-900 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-green-500 hover:text-white transition-all shadow-xl">
                    Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-slate-50">
    <div class="container mx-auto px-6 md:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @php
                $news = [
                    [
                        'kategori' => 'Prestasi',
                        'tgl' => '24 Des 2025',
                        'judul' => 'Tim Pramuka Raih Juara Umum Tingkat Kecamatan',
                        'desc' => 'Setelah persiapan intensif selama sebulan, tim penggalang putra berhasil membawa pulang piala.',
                        'img' => 'https://images.unsplash.com/photo-1511629091441-ee461463a2cd?q=80&w=600'
                    ],
                    [
                        'kategori' => 'Kegiatan',
                        'tgl' => '22 Des 2025',
                        'judul' => 'Market Day: Melatih Jiwa Kewirausahaan Sejak Dini',
                        'desc' => 'Siswa kelas 4-6 belajar memasarkan produk hasil karya mereka sendiri di halaman sekolah.',
                        'img' => 'https://images.unsplash.com/photo-1544531585-9847b68c8c86?q=80&w=600'
                    ],
                    [
                        'kategori' => 'Kurikulum',
                        'tgl' => '20 Des 2025',
                        'judul' => 'Sosialisasi Program Digitalisasi Kelas Menggunakan Chromebook',
                        'desc' => 'Sekolah mulai mengintegrasikan pembelajaran IT melalui penggunaan perangkat Chromebook bagi siswa.',
                        'img' => 'https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?q=80&w=600'
                    ],
                    [
                        'kategori' => 'Kesehatan',
                        'tgl' => '18 Des 2025',
                        'judul' => 'Pemeriksaan Kesehatan Berkala dari Puskesmas Margasari',
                        'desc' => 'Seluruh siswa kelas 1-3 menjalani pemeriksaan kesehatan mata dan gigi secara rutin.',
                        'img' => 'https://images.unsplash.com/photo-1501290741922-b56c0d0884af?q=80&w=600'
                    ],
                    [
                        'kategori' => 'Lingkungan',
                        'tgl' => '15 Des 2025',
                        'judul' => 'Gerakan Penanaman Apotek Hidup di Lingkungan Sekolah',
                        'desc' => 'Siswa diajak mengenali berbagai jenis tanaman obat dan cara membudidayakannya.',
                        'img' => 'https://images.unsplash.com/photo-1588072432836-e10032774350?q=80&w=600'
                    ],
                    [
                        'kategori' => 'Pengumuman',
                        'tgl' => '12 Des 2025',
                        'judul' => 'Jadwal Libur Akhir Semester Ganjil 2025/2026',
                        'desc' => 'Informasi resmi terkait kalender akademik dan masa liburan bagi seluruh peserta didik.',
                        'img' => 'https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=600'
                    ]
                ];
            @endphp

            @foreach($news as $item)
            <div class="group bg-white rounded-[2.5rem] overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-4 flex flex-col">
                <div class="relative aspect-[16/10] overflow-hidden">
                    <img src="{{ $item['img'] }}" 
                         alt="{{ $item['judul'] }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute top-6 left-6">
                        <span class="px-4 py-1.5 bg-white/90 backdrop-blur-md text-blue-900 text-[10px] font-black uppercase tracking-widest rounded-xl shadow-lg border border-white">
                            {{ $item['kategori'] }}
                        </span>
                    </div>
                </div>

                <div class="p-8 flex flex-col flex-grow">
                    <div class="flex items-center gap-3 text-slate-400 text-[10px] font-bold uppercase tracking-widest mb-4">
                        <i class="far fa-calendar-alt text-green-500"></i> {{ $item['tgl'] }}
                    </div>
                    <h3 class="text-xl font-black text-slate-800 leading-tight mb-4 group-hover:text-blue-900 transition uppercase tracking-tight">
                        {{ $item['judul'] }}
                    </h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-8 line-clamp-3 italic">
                        "{{ $item['desc'] }}"
                    </p>
                    
                    <div class="mt-auto pt-6 border-t border-slate-50 flex justify-between items-center">
                        <a href="#" class="text-[10px] font-black uppercase tracking-[0.2em] text-blue-900 flex items-center gap-2 group/btn">
                            Baca Berita <i class="fas fa-chevron-right group-hover/btn:translate-x-2 transition"></i>
                        </a>
                        <span class="text-slate-300"><i class="fas fa-bookmark"></i></span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection