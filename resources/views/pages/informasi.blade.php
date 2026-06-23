@extends('layouts.app')

@section('isi_konten')
<section class="py-20 bg-slate-50 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-64 h-64 bg-green-100 rounded-full -translate-x-1/2 -translate-y-1/2 opacity-50 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-100 rounded-full translate-x-1/3 translate-y-1/3 opacity-50 blur-3xl"></div>

    <div class="container mx-auto px-6 md:px-20 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-black text-slate-900 uppercase tracking-tighter sm:text-5xl">
                Pusat <span class="bg-gradient-to-r from-blue-700 to-green-600 bg-clip-text text-transparent">Informasi</span>
            </h2>
            <p class="text-slate-500 mt-4 italic max-w-2xl mx-auto text-lg">
                Jendela informasi resmi SDN 3 Lamuk. Temukan pengumuman, agenda kegiatan, dan prestasi terbaru kami di sini.
            </p>
            <div class="h-1.5 w-24 bg-gradient-to-r from-blue-700 to-green-600 mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            
            <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group">
                <div class="h-56 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?q=80&w=600" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="PPDB">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <span class="absolute top-4 left-4 bg-green-600 text-white text-[10px] font-bold px-4 py-1.5 rounded-full shadow-lg">PENGUMUMAN</span>
                </div>
                <div class="p-8">
                    <div class="flex items-center gap-2 text-slate-400 text-[11px] font-bold uppercase mb-3">
                        <i class="far fa-calendar-alt text-green-500"></i> 26 Desember 2025
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 leading-tight mb-4 group-hover:text-blue-700 transition-colors">Penerimaan Peserta Didik Baru (PPDB) 2026/2027</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3">Membuka pendaftaran untuk calon siswa baru dengan kuota terbatas. Segera siapkan berkas administrasi Anda.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-blue-700 font-extrabold text-xs uppercase tracking-widest group/btn">
                        Selengkapnya <i class="fas fa-chevron-right text-[10px] group-hover/btn:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group">
                <div class="h-56 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=600" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Kegiatan">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <span class="absolute top-4 left-4 bg-blue-600 text-white text-[10px] font-bold px-4 py-1.5 rounded-full shadow-lg">KEGIATAN</span>
                </div>
                <div class="p-8">
                    <div class="flex items-center gap-2 text-slate-400 text-[11px] font-bold uppercase mb-3">
                        <i class="far fa-calendar-alt text-blue-500"></i> 20 Desember 2025
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 leading-tight mb-4 group-hover:text-blue-700 transition-colors">Pelepasan Siswa Kelas VI & Gelar Karya Seni</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3">Perayaan kelulusan yang meriah dengan penampilan seni tari dan pameran kreativitas siswa kelas VI.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-blue-700 font-extrabold text-xs uppercase tracking-widest group/btn">
                        Selengkapnya <i class="fas fa-chevron-right text-[10px] group-hover/btn:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group">
                <div class="h-56 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=600" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Prestasi">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <span class="absolute top-4 left-4 bg-orange-500 text-white text-[10px] font-bold px-4 py-1.5 rounded-full shadow-lg">PRESTASI</span>
                </div>
                <div class="p-8">
                    <div class="flex items-center gap-2 text-slate-400 text-[11px] font-bold uppercase mb-3">
                        <i class="far fa-calendar-alt text-orange-500"></i> 15 Desember 2025
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 leading-tight mb-4 group-hover:text-blue-700 transition-colors">Juara 1 Lomba Cerdas Cermat Kabupaten</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3">Selamat kepada tim cerdas cermat SDN 3 Lamuk yang berhasil meraih podium pertama tahun ini.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-blue-700 font-extrabold text-xs uppercase tracking-widest group/btn">
                        Selengkapnya <i class="fas fa-chevron-right text-[10px] group-hover/btn:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group">
                <div class="h-56 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=600" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Workshop">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <span class="absolute top-4 left-4 bg-purple-600 text-white text-[10px] font-bold px-4 py-1.5 rounded-full shadow-lg">PENDIDIKAN</span>
                </div>
                <div class="p-8">
                    <div class="flex items-center gap-2 text-slate-400 text-[11px] font-bold uppercase mb-3">
                        <i class="far fa-calendar-alt text-purple-500"></i> 10 Desember 2025
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 leading-tight mb-4 group-hover:text-blue-700 transition-colors">Workshop Peningkatan Mutu Digital Bagi Guru</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3">Pelatihan rutin tenaga pendidik dalam menguasai teknologi pembelajaran modern berbasis AI.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-blue-700 font-extrabold text-xs uppercase tracking-widest group/btn">
                        Selengkapnya <i class="fas fa-chevron-right text-[10px] group-hover/btn:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group">
                <div class="h-56 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=600" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Lingkungan">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <span class="absolute top-4 left-4 bg-teal-600 text-white text-[10px] font-bold px-4 py-1.5 rounded-full shadow-lg">LINGKUNGAN</span>
                </div>
                <div class="p-8">
                    <div class="flex items-center gap-2 text-slate-400 text-[11px] font-bold uppercase mb-3">
                        <i class="far fa-calendar-alt text-teal-500"></i> 05 Desember 2025
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 leading-tight mb-4 group-hover:text-blue-700 transition-colors">Gerakan Sabtu Bersih: Sekolah Hijau & Sehat</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3">Aksi kolaborasi orang tua, siswa, dan guru dalam menanam pohon serta membersihkan area sekolah.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-blue-700 font-extrabold text-xs uppercase tracking-widest group/btn">
                        Selengkapnya <i class="fas fa-chevron-right text-[10px] group-hover/btn:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group">
                <div class="h-56 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=600" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Akademik">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <span class="absolute top-4 left-4 bg-red-600 text-white text-[10px] font-bold px-4 py-1.5 rounded-full shadow-lg">AKADEMIK</span>
                </div>
                <div class="p-8">
                    <div class="flex items-center gap-2 text-slate-400 text-[11px] font-bold uppercase mb-3">
                        <i class="far fa-calendar-alt text-red-500"></i> 01 Desember 2025
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 leading-tight mb-4 group-hover:text-blue-700 transition-colors">Jadwal Penilaian Akhir Semester (PAS) Ganjil</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3">Berikut adalah detail jadwal mata pelajaran yang akan diujikan untuk kelas I sampai kelas VI.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-blue-700 font-extrabold text-xs uppercase tracking-widest group/btn">
                        Selengkapnya <i class="fas fa-chevron-right text-[10px] group-hover/btn:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>

        </div>
        
        <div class="mt-20 flex justify-center gap-2">
            <button class="w-10 h-10 rounded-full bg-blue-700 text-white flex items-center justify-center shadow-lg"><i class="fas fa-1"></i></button>
            <button class="w-10 h-10 rounded-full bg-white text-slate-400 flex items-center justify-center hover:bg-slate-200 transition shadow-sm border border-slate-200 italic font-bold">2</button>
            <button class="w-10 h-10 rounded-full bg-white text-slate-400 flex items-center justify-center hover:bg-slate-200 transition shadow-sm border border-slate-200 italic font-bold"><i class="fas fa-chevron-right text-xs"></i></button>
        </div>
    </div>
</section>
@endsection