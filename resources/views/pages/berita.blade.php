@extends('layouts.app')

@section('isi_konten')
<section class="py-24 bg-white" x-data="{ page: 1, search: '' }">
    <div class="container mx-auto px-6 md:px-20">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
            <div class="max-w-2xl">
                <div class="inline-block px-4 py-1.5 bg-blue-50 rounded-full mb-4">
                    <span class="text-blue-600 font-black text-xs uppercase tracking-[0.2em] flex items-center gap-2">
                        <i class="fas fa-newspaper"></i> News & Update
                    </span>
                </div>
                <h1 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tighter uppercase">
                    Update Berita <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-900 to-green-600">SDN 3 LAMUK</span>
                </h1>
            </div>
            
            <div class="flex items-center gap-4 border-b-2 border-slate-100 pb-2 focus-within:border-blue-500 transition-all">
                <i class="fas fa-search text-slate-300"></i>
                <input 
                    type="text" 
                    x-model="search" 
                    @input="page = 1" 
                    placeholder="Cari berita..." 
                    class="bg-transparent outline-none text-sm font-medium text-slate-600 w-48"
                >
            </div>
        </div>

        <div class="grid gap-8">
            @php
                $beritas = [
                    // --- HALAMAN 1 (5 Berita) ---
                    ['p' => 1, 'tag' => 'Kegiatan', 'color' => 'bg-green-100 text-green-700', 'judul' => 'Peringatan Hari Guru Nasional', 'desc' => 'Apresiasi luar biasa dari siswa untuk bapak dan ibu guru melalui pentas seni.', 'tgl' => '26 Des 2025', 'img' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=400'],
                    ['p' => 1, 'tag' => 'Prestasi', 'color' => 'bg-yellow-100 text-yellow-700', 'judul' => 'Juara Umum Jambore Ranting', 'desc' => 'Tim Pramuka SDN 2 Margasari berhasil mempertahankan piala bergilir tahun ini.', 'tgl' => '24 Des 2025', 'img' => 'https://images.unsplash.com/photo-1529390079861-591de354faf5?q=80&w=400'],
                    ['p' => 1, 'tag' => 'Sosial', 'color' => 'bg-red-100 text-red-700', 'judul' => 'Bakti Sosial Akhir Tahun', 'desc' => 'Penyaluran bantuan sembako kepada warga sekitar yang membutuhkan.', 'tgl' => '22 Des 2025', 'img' => 'https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?q=80&w=400'],
                    ['p' => 1, 'tag' => 'Akademik', 'color' => 'bg-blue-100 text-blue-700', 'judul' => 'Workshop Literasi Digital', 'desc' => 'Membekali siswa dengan kemampuan membedakan informasi hoax di internet.', 'tgl' => '20 Des 2025', 'img' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=400'],
                    ['p' => 1, 'tag' => 'Sarpras', 'color' => 'bg-purple-100 text-purple-700', 'judul' => 'Peresmian Lab Komputer', 'desc' => 'Fasilitas baru untuk mendukung ujian berbasis komputer yang modern.', 'tgl' => '18 Des 2025', 'img' => 'https://images.unsplash.com/photo-1571260899304-425eee4c7efc?q=80&w=400'],

                    // --- HALAMAN 2 (5 Berita) ---
                    ['p' => 2, 'tag' => 'Inovasi', 'color' => 'bg-indigo-100 text-indigo-700', 'judul' => 'Pembelajaran Berbasis Game', 'desc' => 'Metode gamifikasi meningkatkan antusiasme siswa dalam belajar matematika.', 'tgl' => '15 Des 2025', 'img' => 'https://images.unsplash.com/photo-1551232864-3f0890e580d9?q=80&w=400'],
                    ['p' => 2, 'tag' => 'Lingkungan', 'color' => 'bg-teal-100 text-teal-700', 'judul' => 'Aksi Tanam 1000 Pohon', 'desc' => 'Program penghijauan lingkungan sekolah demi udara yang lebih segar.', 'tgl' => '12 Des 2025', 'img' => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=400'],
                    ['p' => 2, 'tag' => 'Seni', 'color' => 'bg-orange-100 text-orange-700', 'judul' => 'Gelar Karya Projek P5', 'desc' => 'Pameran kreativitas siswa mengolah limbah plastik menjadi barang guna.', 'tgl' => '10 Des 2025', 'img' => 'https://images.unsplash.com/photo-1513364776144-60967b0f800f?q=80&w=400'],
                    ['p' => 2, 'tag' => 'Religi', 'color' => 'bg-emerald-100 text-emerald-700', 'judul' => 'Lomba Keagamaan Maulid', 'desc' => 'Memperkuat karakter religius siswa melalui lomba adzan dan tilawah.', 'tgl' => '08 Des 2025', 'img' => 'https://images.unsplash.com/photo-1584551246679-0daf3d275d0f?q=80&w=400'],
                    ['p' => 2, 'tag' => 'Kesehatan', 'color' => 'bg-pink-100 text-pink-700', 'judul' => 'Pemeriksaan Gigi Berkala', 'desc' => 'Kerjasama dengan Puskesmas menjamin kesehatan gigi seluruh siswa.', 'tgl' => '05 Des 2025', 'img' => 'https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?q=80&w=400'],

                    // --- HALAMAN 3 (5 Berita) ---
                    ['p' => 3, 'tag' => 'Olahraga', 'color' => 'bg-cyan-100 text-cyan-700', 'judul' => 'Pekan Olahraga Sekolah', 'desc' => 'Mencari bibit unggul atlet masa depan dari cabang atletik dan bola.', 'tgl' => '03 Des 2025', 'img' => 'https://images.unsplash.com/photo-1574629810360-7efbbe195018?q=80&w=400'],
                    ['p' => 3, 'tag' => 'Ekskul', 'color' => 'bg-rose-100 text-rose-700', 'judul' => 'Latihan Rutin Marching Band', 'desc' => 'Persiapan tim drumband sekolah untuk parade hari kemerdekaan.', 'tgl' => '01 Des 2025', 'img' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=400'],
                    ['p' => 3, 'tag' => 'Literasi', 'color' => 'bg-amber-100 text-amber-700', 'judul' => 'Duta Baca SDN 2 Margasari', 'desc' => 'Pemilihan siswa paling aktif berkunjung dan meminjam buku perpustakaan.', 'tgl' => '28 Nov 2025', 'img' => 'https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=400'],
                    ['p' => 3, 'tag' => 'Karya', 'color' => 'bg-violet-100 text-violet-700', 'judul' => 'Pelatihan Jurnalistik Cilik', 'desc' => 'Siswa belajar dasar-dasar menulis berita dan teknik wawancara.', 'tgl' => '25 Nov 2025', 'img' => 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=400'],
                    ['p' => 3, 'tag' => 'Parenting', 'color' => 'bg-slate-100 text-slate-700', 'judul' => 'Seminar Pola Asuh Anak', 'desc' => 'Sinergi antara sekolah dan orang tua dalam mendidik karakter anak.', 'tgl' => '20 Nov 2025', 'img' => 'https://images.unsplash.com/photo-1543269865-cbf427effbad?q=80&w=400'],
                ];
            @endphp

            @foreach ($beritas as $item)
            <div x-show="('{{ strtolower($item['judul']) }}'.includes(search.toLowerCase()) || '{{ strtolower($item['tag']) }}'.includes(search.toLowerCase())) && (search !== '' ? true : page === {{ $item['p'] }})" 
                 x-transition:enter="transition ease-out duration-500"
                 x-transition:enter-start="opacity-0 translate-y-8"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="group flex flex-col md:flex-row gap-6 items-start hover:bg-slate-50/80 p-5 rounded-[2rem] transition-all duration-500">
                
                <div class="w-full md:w-64 shrink-0 relative overflow-hidden rounded-2xl shadow-md border-2 border-white transform group-hover:-rotate-1 transition duration-500">
                    <img src="{{ $item['img'] }}" alt="Berita" class="w-full h-44 object-cover transform group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
                </div>

                <div class="flex flex-col justify-center py-1">
                    <div class="flex items-center gap-4 mb-3">
                        <span class="px-3 py-1 rounded-full text-[9px] font-black uppercase tracking-widest {{ $item['color'] }} shadow-sm">
                            {{ $item['tag'] }}
                        </span>
                        <span class="text-slate-400 text-[10px] font-bold flex items-center gap-2 italic">
                            <i class="far fa-calendar-alt text-blue-500"></i> {{ $item['tgl'] }}
                        </span>
                    </div>
                    
                    <h2 class="text-xl md:text-2xl font-black text-slate-800 leading-tight group-hover:text-blue-900 transition duration-300">
                        {{ $item['judul'] }}
                    </h2>
                    
                    <p class="text-slate-500 mt-2 text-sm leading-relaxed line-clamp-2 italic">
                        "{{ $item['desc'] }}"
                    </p>

                    <div class="mt-4 flex items-center justify-between">
                        <button class="flex items-center gap-2 text-blue-900 font-black text-[10px] uppercase tracking-widest group-hover:gap-4 transition-all">
                            Baca Selengkapnya <i class="fas fa-arrow-right text-green-500"></i>
                        </button>
                        
                        <div class="flex items-center gap-2">
                            <div class="text-right hidden sm:block">
                                <p class="text-[8px] font-bold text-slate-400 uppercase leading-none">Editor</p>
                                <p class="text-[10px] font-black text-slate-700">Admin</p>
                            </div>
                            <img src="https://ui-avatars.com/api/?name=Admin&background=003366&color=fff" class="w-8 h-8 rounded-full border border-white shadow-sm">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-16 flex justify-center items-center gap-3" x-show="search === ''">
            <button @click="if(page > 1) { page--; window.scrollTo({top: 0, behavior: 'smooth'}) }" 
                    :disabled="page === 1"
                    class="w-10 h-10 rounded-xl bg-slate-50 text-slate-400 hover:bg-blue-900 hover:text-white transition disabled:opacity-30 disabled:cursor-not-allowed shadow-sm flex items-center justify-center">
                <i class="fas fa-chevron-left text-xs"></i>
            </button>

            <template x-for="i in [1, 2, 3]">
                <button @click="page = i; window.scrollTo({top: 0, behavior: 'smooth'})" 
                        :class="page === i ? 'bg-blue-900 text-white shadow-lg shadow-blue-900/30 scale-110' : 'bg-white border border-slate-100 text-slate-600 hover:bg-slate-50'"
                        class="w-10 h-10 rounded-xl transition-all duration-300 font-black text-xs" 
                        x-text="i">
                </button>
            </template>

            <button @click="if(page < 3) { page++; window.scrollTo({top: 0, behavior: 'smooth'}) }" 
                    :disabled="page === 3"
                    class="w-10 h-10 rounded-xl bg-slate-50 text-slate-400 hover:bg-blue-900 hover:text-white transition disabled:opacity-30 disabled:cursor-not-allowed shadow-sm flex items-center justify-center">
                <i class="fas fa-chevron-right text-xs"></i>
            </button>
        </div>
        
        <div x-show="search !== '' && !document.querySelector('.group[style*=\'display: block\']') && !document.querySelector('.group:not([style*=\'display: none\'])')" 
             class="text-center py-20">
            <i class="fas fa-search text-slate-200 text-6xl mb-4"></i>
            <p class="text-slate-400 font-medium">Berita "<span x-text="search" class="text-slate-800"></span>" tidak ditemukan.</p>
        </div>
    </div>
</section>

@push('scripts')
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endpush
@endsection