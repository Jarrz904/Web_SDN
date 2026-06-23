@extends('layouts.app')

@section('isi_konten')
<section class="py-20 bg-white overflow-hidden">
    <div class="container mx-auto px-6 md:px-20">
        <div class="flex flex-col md:flex-row items-center gap-16">
            <div class="md:w-1/2 relative">
                <div class="inline-block px-4 py-1.5 bg-green-50 rounded-full mb-4">
                    <span class="text-green-600 font-black text-xs uppercase tracking-[0.2em] flex items-center gap-2">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                        </span>
                        Mengenal Lebih Dekat
                    </span>
                </div>
                <h1 class="text-5xl md:text-6xl font-black text-slate-900 mt-2 mb-8 leading-[1.1]">
                    Profil <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-900 to-blue-600">SDN 3 LAMUK</span>
                </h1>
                <p class="text-gray-600 leading-relaxed text-lg mb-10">
                    SDN 3 Lamuk merupakan institusi pendidikan dasar unggulan yang berdedikasi untuk menciptakan lingkungan belajar yang inspiratif, inovatif, dan religius. Terletak di lingkungan yang asri, kami telah menjadi rumah bagi generasi cerdas untuk tumbuh dan berkembang sejak tahun 1985.
                </p>
                
                <div class="grid grid-cols-3 gap-8">
                    <div class="group">
                        <p class="text-4xl font-black text-blue-900 group-hover:text-green-500 transition">1985</p>
                        <p class="text-gray-400 text-[10px] font-bold uppercase tracking-widest mt-1 italic">Tahun Berdiri</p>
                    </div>
                    <div class="border-l border-gray-100 pl-8 group">
                        <p class="text-4xl font-black text-blue-900 group-hover:text-green-500 transition">A</p>
                        <p class="text-gray-400 text-[10px] font-bold uppercase tracking-widest mt-1 italic">Akreditasi</p>
                    </div>
                    <div class="border-l border-gray-100 pl-8 group">
                        <p class="text-4xl font-black text-blue-900 group-hover:text-green-500 transition">12</p>
                        <p class="text-gray-400 text-[10px] font-bold uppercase tracking-widest mt-1 italic">Rombel</p>
                    </div>
                </div>
            </div>

            <div class="md:w-1/2 relative group">
                <div class="absolute -top-10 -left-10 w-40 h-40 bg-green-50 rounded-full -z-10 animate-pulse"></div>
                <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-blue-50 rounded-full -z-10 animate-bounce-slow"></div>
                
                <div class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-tr from-blue-900 to-green-500 rounded-[2.5rem] opacity-10 group-hover:opacity-20 transition duration-500"></div>
                    <img src="https://lh3.googleusercontent.com/gps-cs-s/APNQkAExy1mKjvbpib8VDfvdMASsLXxBK7fdNFXZ1mYEtn0PXiErIWxaBGDFkJvqUpQV16VKa0wa_vVN4hkFxJxrKc0_niTS4k6HUjKchn8J4EevVixsS_fUoKGmFLUKQf2cyYKSPL_7ng=w408-h306-k-no" 
                         alt="Gedung SDN 2 Margasari" 
                         class="rounded-[2rem] shadow-2xl relative z-10 w-full h-[500px] object-cover border-4 border-white transition duration-500 group-hover:scale-[1.02]">
                    
                    <div class="absolute -bottom-8 -right-8 bg-blue-900 text-white p-6 rounded-3xl shadow-2xl z-20 flex items-center gap-4 transform group-hover:translate-y-[-10px] transition duration-500">
                        <div class="w-14 h-14 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-2xl shadow-inner">
                            <i class="fas fa-certificate text-yellow-400"></i>
                        </div>
                        <div>
                            <p class="text-[10px] text-blue-200 font-black uppercase tracking-[0.2em]">Status Sekolah</p>
                            <p class="font-bold text-xl italic">Sekolah Dasar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-slate-50 relative overflow-hidden">
    <div class="container mx-auto px-6 md:px-20">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-black text-slate-800 uppercase tracking-tighter">Pilar Pendidikan Kami</h2>
            <div class="w-24 h-1.5 bg-green-500 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-3 gap-10">
            <div class="group bg-white p-10 rounded-[2.5rem] shadow-sm border border-slate-100 hover:shadow-2xl hover:shadow-blue-900/10 transition-all duration-500 hover:-translate-y-2">
                <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-3xl mb-8 group-hover:bg-blue-600 group-hover:text-white transition duration-500 shadow-inner">
                    <i class="fas fa-history"></i>
                </div>
                <h3 class="text-2xl font-black text-slate-800 mb-4 uppercase tracking-tight">Sejarah Singkat</h3>
                <p class="text-gray-500 leading-relaxed">
                    Didirikan pada tahun 1985, SDN 3 Lamuk terus bertransformasi mengikuti perkembangan zaman. Dari gedung sederhana hingga kini menjadi sekolah rujukan dengan fasilitas teknologi digital yang mumpuni.
                </p>
            </div>

            <div class="group bg-white p-10 rounded-[2.5rem] shadow-sm border border-slate-100 hover:shadow-2xl hover:shadow-green-900/10 transition-all duration-500 hover:-translate-y-2">
                <div class="w-16 h-16 bg-green-50 text-green-600 rounded-2xl flex items-center justify-center text-3xl mb-8 group-hover:bg-green-600 group-hover:text-white transition duration-500 shadow-inner">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3 class="text-2xl font-black text-slate-800 mb-4 uppercase tracking-tight">Budaya Sekolah</h3>
                <p class="text-gray-500 leading-relaxed">
                    Kami menjunjung tinggi nilai <span class="text-green-600 font-bold italic">"5S"</span> (Senyum, Sapa, Salam, Sopan, Santun) dan budaya cinta lingkungan melalui kurikulum berbasis pelestarian alam yang konsisten.
                </p>
            </div>

            <div class="group bg-white p-10 rounded-[2.5rem] shadow-sm border border-slate-100 hover:shadow-2xl hover:shadow-orange-900/10 transition-all duration-500 hover:-translate-y-2">
                <div class="w-16 h-16 bg-orange-50 text-orange-600 rounded-2xl flex items-center justify-center text-3xl mb-8 group-hover:bg-orange-600 group-hover:text-white transition duration-500 shadow-inner">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3 class="text-2xl font-black text-slate-800 mb-4 uppercase tracking-tight">Keunggulan</h3>
                <p class="text-gray-500 leading-relaxed">
                    Unggul dalam integrasi IT (Chromebook Learning), pengembangan karakter religius, serta wadah minat bakat melalui 15+ jenis ekstrakurikuler yang aktif dan berprestasi.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="container mx-auto px-6 md:px-20">
        <div class="bg-blue-950 rounded-[3.5rem] overflow-hidden text-white flex flex-col md:flex-row shadow-2xl relative">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>

            <div class="md:w-1/3 p-16 bg-gradient-to-b from-blue-900 to-blue-950 flex flex-col justify-center items-center text-center relative z-10 border-r border-white/5">
                <div class="relative group">
                    <div class="absolute -inset-4 bg-white/10 rounded-full blur group-hover:blur-xl transition duration-500"></div>
                    <img src="https://2.bp.blogspot.com/-sqiAfuxCdqU/UN5bJ3CiecI/AAAAAAAABIA/Zvv5CKfu0TA/s1600/Logo+Tut+Wuri+Handayani.png" 
                         class="w-36 mb-8 relative" alt="Logo Tut Wuri Handayani">
                </div>
                <div class="space-y-2">
                    <h4 class="text-2xl font-black italic tracking-widest text-yellow-400">NPSN: 12345678</h4>
                    <p class="text-blue-300 text-xs font-bold uppercase tracking-[0.3em]">NSS: 101032001002</p>
                </div>
                <div class="mt-8 pt-8 border-t border-white/10 w-full text-[10px] text-blue-400 font-medium uppercase tracking-widest">
                    Terakreditasi A (Unggul)
                </div>
            </div>

            <div class="md:w-2/3 p-16 relative z-10">
                <h2 class="text-3xl font-black mb-12 italic border-b border-blue-800 pb-6 flex items-center gap-4 uppercase tracking-tighter">
                    <i class="fas fa-info-circle text-green-500"></i> Informasi Identitas
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-y-10 gap-x-16">
                    <div class="group">
                        <p class="text-green-500 text-[10px] uppercase font-black tracking-[0.2em] mb-2">Alamat Institusi</p>
                        <p class="text-lg leading-relaxed text-blue-50 group-hover:text-green-400 transition">Jl. Lamuk No. 03, Kec. Kaliwiro, Kab. Wonosobo</p>
                    </div>
                    
                    <div class="group">
                        <p class="text-green-500 text-[10px] uppercase font-black tracking-[0.2em] mb-2">Pimpinan Sekolah</p>
                        <p class="text-xl font-black italic group-hover:text-green-400 transition underline underline-offset-8 decoration-blue-700">M. FAJAR, M.Kom.</p>
                    </div>
                    
                    <div class="group">
                        <p class="text-green-500 text-[10px] uppercase font-black tracking-[0.2em] mb-2">Kontak Email</p>
                        <p class="text-lg text-blue-50 group-hover:text-green-400 transition font-medium">kontak@sdn3lamuk.sch.id</p>
                    </div>
                    
                    <div class="group">
                        <p class="text-green-500 text-[10px] uppercase font-black tracking-[0.2em] mb-2">Legalitas Lahan</p>
                        <p class="text-lg text-blue-50 group-hover:text-green-400 transition">Milik Pemerintah (Hak Pakai / SHM)</p>
                    </div>

                    <div class="group border-t border-white/5 pt-6">
                        <p class="text-green-500 text-[10px] uppercase font-black tracking-[0.2em] mb-2">Waktu Belajar</p>
                        <p class="text-lg text-blue-50">Pagi (07.00 - 14.00 WIB)</p>
                    </div>

                    <div class="group border-t border-white/5 pt-6">
                        <p class="text-green-500 text-[10px] uppercase font-black tracking-[0.2em] mb-2">Status Sekolah</p>
                        <p class="text-lg text-blue-50">Negeri / Pusat Keunggulan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection