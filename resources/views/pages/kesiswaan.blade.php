@extends('layouts.app')

@section('isi_konten')
<section class="py-24 bg-slate-50 overflow-hidden">
    <div class="container mx-auto px-6 md:px-20">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <div class="inline-block px-4 py-1.5 bg-yellow-100 rounded-full mb-4">
                <span class="text-yellow-700 font-black text-xs uppercase tracking-[0.2em] flex items-center gap-2">
                    <i class="fas fa-star"></i> Student Development
                </span>
            </div>
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 uppercase tracking-tighter mb-4">
                Program <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-900 to-green-600">Kesiswaan</span>
            </h1>
            <p class="text-gray-500 text-lg italic">Wadah pengembangan bakat, minat, dan karakter siswa untuk mencetak generasi unggul yang kreatif dan berakhlak mulia.</p>
            <div class="w-24 h-1.5 bg-yellow-500 mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            <div class="group bg-white p-10 rounded-[2.5rem] shadow-sm border border-slate-100 hover:shadow-2xl hover:shadow-blue-900/10 transition-all duration-500 hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute -right-6 -top-6 w-24 h-24 bg-blue-50 rounded-full opacity-0 group-hover:opacity-100 transition duration-500 scale-0 group-hover:scale-100"></div>
                
                <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center text-3xl mb-8 group-hover:bg-blue-600 group-hover:text-white transition duration-500 shadow-inner">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="text-2xl font-black text-slate-800 mb-4 uppercase tracking-tight">Ekstrakurikuler</h3>
                <p class="text-gray-500 leading-relaxed mb-6">Pengembangan bakat non-akademik melalui berbagai pilihan kegiatan menarik.</p>
                
                <div class="flex flex-wrap gap-2 mt-auto">
                    <span class="px-3 py-1 bg-slate-100 text-slate-600 text-[10px] font-bold rounded-lg uppercase tracking-wider">Pramuka</span>
                    <span class="px-3 py-1 bg-slate-100 text-slate-600 text-[10px] font-bold rounded-lg uppercase tracking-wider">Drumband</span>
                    <span class="px-3 py-1 bg-slate-100 text-slate-600 text-[10px] font-bold rounded-lg uppercase tracking-wider">Seni Tari</span>
                    <span class="px-3 py-1 bg-slate-100 text-slate-600 text-[10px] font-bold rounded-lg uppercase tracking-wider">+ Lainnya</span>
                </div>
            </div>

            <div class="group bg-white p-10 rounded-[2.5rem] shadow-sm border border-slate-100 hover:shadow-2xl hover:shadow-green-900/10 transition-all duration-500 hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute -right-6 -top-6 w-24 h-24 bg-green-50 rounded-full opacity-0 group-hover:opacity-100 transition duration-500 scale-0 group-hover:scale-100"></div>

                <div class="w-16 h-16 bg-green-100 text-green-600 rounded-2xl flex items-center justify-center text-3xl mb-8 group-hover:bg-green-600 group-hover:text-white transition duration-500 shadow-inner">
                    <i class="fas fa-medal"></i>
                </div>
                <h3 class="text-2xl font-black text-slate-800 mb-4 uppercase tracking-tight">Prestasi Siswa</h3>
                <p class="text-gray-500 leading-relaxed mb-6">Apresiasi dan dokumentasi raihan medali serta piala siswa di berbagai tingkatan.</p>
                <a href="#" class="text-green-600 font-black text-xs uppercase tracking-widest flex items-center gap-2 group-hover:gap-3 transition-all">
                    Lihat Galeri <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="group bg-white p-10 rounded-[2.5rem] shadow-sm border border-slate-100 hover:shadow-2xl hover:shadow-yellow-900/10 transition-all duration-500 hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute -right-6 -top-6 w-24 h-24 bg-yellow-50 rounded-full opacity-0 group-hover:opacity-100 transition duration-500 scale-0 group-hover:scale-100"></div>

                <div class="w-16 h-16 bg-yellow-100 text-yellow-600 rounded-2xl flex items-center justify-center text-3xl mb-8 group-hover:bg-yellow-600 group-hover:text-white transition duration-500 shadow-inner">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h3 class="text-2xl font-black text-slate-800 mb-4 uppercase tracking-tight">Organisasi</h3>
                <p class="text-gray-500 leading-relaxed mb-6">Melatih jiwa kepemimpinan dan tanggung jawab sosial sejak usia dini.</p>
                <ul class="text-xs font-bold text-slate-400 space-y-2">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-yellow-500"></i> Dokter Kecil</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-yellow-500"></i> Polisi Cilik (Pocil)</li>
                </ul>
            </div>

            <div class="group bg-white p-10 rounded-[2.5rem] shadow-sm border border-slate-100 hover:shadow-2xl hover:shadow-purple-900/10 transition-all duration-500 hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute -right-6 -top-6 w-24 h-24 bg-purple-50 rounded-full opacity-0 group-hover:opacity-100 transition duration-500 scale-0 group-hover:scale-100"></div>

                <div class="w-16 h-16 bg-purple-100 text-purple-600 rounded-2xl flex items-center justify-center text-3xl mb-8 group-hover:bg-purple-600 group-hover:text-white transition duration-500 shadow-inner">
                    <i class="fas fa-heart"></i>
                </div>
                <h3 class="text-2xl font-black text-slate-800 mb-4 uppercase tracking-tight">Religius</h3>
                <p class="text-gray-500 leading-relaxed mb-6">Pembiasaan ibadah harian, BTQ, dan peringatan hari besar keagamaan.</p>
                <div class="h-1 w-full bg-slate-100 rounded-full overflow-hidden">
                    <div class="h-full bg-purple-500 w-[90%]"></div>
                </div>
            </div>

            <div class="group bg-white p-10 rounded-[2.5rem] shadow-sm border border-slate-100 hover:shadow-2xl hover:shadow-red-900/10 transition-all duration-500 hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute -right-6 -top-6 w-24 h-24 bg-red-50 rounded-full opacity-0 group-hover:opacity-100 transition duration-500 scale-0 group-hover:scale-100"></div>

                <div class="w-16 h-16 bg-red-100 text-red-600 rounded-2xl flex items-center justify-center text-3xl mb-8 group-hover:bg-red-600 group-hover:text-white transition duration-500 shadow-inner">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3 class="text-2xl font-black text-slate-800 mb-4 uppercase tracking-tight">Digital & Literasi</h3>
                <p class="text-gray-500 leading-relaxed mb-6">Pemanfaatan Chromebook dan sudut baca kelas untuk meningkatkan literasi.</p>
                <span class="text-[10px] font-black text-red-500 bg-red-50 px-3 py-1 rounded-md uppercase tracking-widest">Sekolah Penggerak</span>
            </div>

            <div class="group bg-white p-10 rounded-[2.5rem] shadow-sm border border-slate-100 hover:shadow-2xl hover:shadow-emerald-900/10 transition-all duration-500 hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute -right-6 -top-6 w-24 h-24 bg-emerald-50 rounded-full opacity-0 group-hover:opacity-100 transition duration-500 scale-0 group-hover:scale-100"></div>

                <div class="w-16 h-16 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center text-3xl mb-8 group-hover:bg-emerald-600 group-hover:text-white transition duration-500 shadow-inner">
                    <i class="fas fa-seedling"></i>
                </div>
                <h3 class="text-2xl font-black text-slate-800 mb-4 uppercase tracking-tight">Adiwiyata</h3>
                <p class="text-gray-500 leading-relaxed mb-6">Program cinta lingkungan, pemilahan sampah, dan apotek hidup sekolah.</p>
                <div class="flex items-center gap-2">
                    <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Go Green Campus</p>
                </div>
            </div>
        </div>

        <div class="mt-20 p-12 bg-blue-900 rounded-[3.5rem] text-white relative overflow-hidden shadow-2xl shadow-blue-900/40">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="max-w-xl">
                    <h2 class="text-3xl font-black mb-4 leading-tight">Ingin Bergabung dalam Program Kami?</h2>
                    <p class="text-blue-100 italic">Daftarkan diri atau putra-putri Anda dalam berbagai kegiatan pengembangan minat dan bakat di SDN 2 Margasari.</p>
                </div>
                <a href="#" class="px-10 py-5 bg-white text-blue-900 rounded-[2rem] font-black text-xs uppercase tracking-[0.2em] hover:bg-yellow-400 transition-all shadow-xl">
                    Hubungi Kesiswaan <i class="fas fa-paper-plane ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection