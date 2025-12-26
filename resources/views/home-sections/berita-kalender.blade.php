<section class="py-20 bg-slate-50">
    <div class="container mx-auto px-6 md:px-20 grid md:grid-cols-3 gap-12">
        
        <div class="md:col-span-2">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <h3 class="text-3xl font-black text-slate-800 flex items-center gap-3 uppercase tracking-tighter">
                        <span class="w-2 h-10 bg-green-500 rounded-full"></span> 
                        Kabar Terkini
                    </h3>
                    <p class="text-gray-500 text-sm mt-1 ml-5">Informasi terbaru seputar SDN 2 MARGASARI</p>
                </div>
                <a href="{{ url('/berita') }}" class="text-blue-600 font-bold text-sm hover:text-blue-800 transition flex items-center gap-1 group">
                    Lihat Semua <i class="fas fa-arrow-right text-[10px] group-hover:translate-x-1 transition"></i>
                </a>
            </div>

            <div class="space-y-6">
                @php
                    $berita = [
                        [
                            'judul' => 'Persiapan Lomba Tingkat Provinsi Tahun 2026',
                            'kategori' => 'Prestasi',
                            'tgl' => '26 Desember 2025',
                            'img' => 'https://images.unsplash.com/photo-1577896851231-70ef1460011e?q=80&w=400&h=300&fit=crop'
                        ],
                        [
                            'judul' => 'Penerapan Kurikulum Merdeka di SDN 2 Margasari',
                            'kategori' => 'Akademik',
                            'tgl' => '24 Desember 2025',
                            'img' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?q=80&w=400&h=300&fit=crop'
                        ],
                        [
                            'judul' => 'Kegiatan Market Day: Melatih Jiwa Kewirausahaan Siswa',
                            'kategori' => 'Kegiatan',
                            'tgl' => '20 Desember 2025',
                            'img' => 'https://images.unsplash.com/photo-1544531585-9847b68c8c86?q=80&w=400&h=300&fit=crop'
                        ]
                    ];
                @endphp

                @foreach ($berita as $item)
                <div class="group bg-white p-5 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col sm:flex-row gap-6 border border-transparent hover:border-green-100">
                    <div class="sm:w-44 h-32 bg-gray-100 rounded-xl flex-shrink-0 overflow-hidden relative">
                        <img src="{{ $item['img'] }}" alt="Berita" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                    <div class="flex flex-col justify-center">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-[9px] bg-green-100 text-green-700 px-3 py-1 rounded-full font-black uppercase tracking-wider">{{ $item['kategori'] }}</span>
                            <span class="text-[11px] text-gray-400 flex items-center gap-1">
                                <i class="far fa-calendar-alt"></i> {{ $item['tgl'] }}
                            </span>
                        </div>
                        <h4 class="font-bold text-lg text-slate-800 group-hover:text-blue-900 transition leading-tight mb-2">
                            {{ $item['judul'] }}
                        </h4>
                        <p class="text-sm text-gray-500 line-clamp-2 leading-relaxed">Terus berinovasi dan berprestasi, SDN 2 Margasari berkomitmen memberikan kualitas terbaik...</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="h-fit sticky top-24">
            <div class="bg-blue-900 text-white p-8 rounded-[2rem] shadow-2xl relative overflow-hidden">
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-white/5 rounded-full"></div>
                
                <h3 class="font-black text-2xl mb-8 flex items-center gap-3 italic uppercase tracking-tighter">
                    <i class="fas fa-calendar-day text-yellow-400"></i>
                    Agenda <br>Sekolah
                </h3>

                <div class="space-y-6 relative z-10">
                    @php
                        $agenda = [
                            ['tgl' => '01', 'bln' => 'JAN', 'event' => 'Libur Tahun Baru 2026'],
                            ['tgl' => '05', 'bln' => 'JAN', 'event' => 'Hari Pertama Masuk Sekolah'],
                            ['tgl' => '12', 'bln' => 'JAN', 'event' => 'Rapat Pleno Orang Tua'],
                            ['tgl' => '25', 'bln' => 'JAN', 'event' => 'Peringatan Hari Gizi Nasional'],
                            ['tgl' => '02', 'bln' => 'FEB', 'event' => 'Ujian Tengah Semester'],
                        ];
                    @endphp

                    @foreach ($agenda as $ev)
                    <div class="flex gap-4 group cursor-pointer border-b border-blue-800 pb-4 last:border-0">
                        <div class="flex-shrink-0 w-12 h-14 bg-white/10 rounded-xl flex flex-col items-center justify-center border border-white/20 group-hover:bg-yellow-400 group-hover:text-blue-900 transition-all duration-300">
                            <span class="text-lg font-black leading-none">{{ $ev['tgl'] }}</span>
                            <span class="text-[9px] font-bold uppercase tracking-widest mt-1 opacity-80">{{ $ev['bln'] }}</span>
                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="text-sm font-bold text-white group-hover:text-yellow-400 transition leading-snug">{{ $ev['event'] }}</p>
                            <span class="text-[10px] text-blue-300 mt-1 flex items-center gap-1 uppercase tracking-tighter">
                                <i class="far fa-clock"></i> 07:30 - Selesai
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="mt-8">
                    <button class="w-full py-3 bg-white/10 border border-white/20 rounded-xl text-xs font-bold uppercase tracking-widest hover:bg-white hover:text-blue-900 transition duration-300">
                        Unduh Kalender .PDF
                    </button>
                </div>
            </div>
            
            <div class="mt-6 bg-green-500 p-6 rounded-[2rem] text-white flex items-center justify-between">
                <div>
                    <p class="text-[10px] font-black uppercase tracking-[0.2em] opacity-80">Status</p>
                    <p class="text-lg font-bold">Sekolah Penggerak</p>
                </div>
                <i class="fas fa-medal text-3xl opacity-30"></i>
            </div>
        </div>

    </div>
</section>