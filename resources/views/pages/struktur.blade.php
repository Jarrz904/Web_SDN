@extends('layouts.app')

@section('isi_konten')
<section class="py-24 bg-white overflow-hidden">
    <div class="container mx-auto px-6 md:px-20">
        <div class="text-center max-w-3xl mx-auto mb-20 relative">
            <div class="inline-block px-4 py-1.5 bg-blue-50 rounded-full mb-4">
                <span class="text-blue-600 font-black text-xs uppercase tracking-[0.2em] flex items-center gap-2">
                    <i class="fas fa-sitemap"></i> Management Structure
                </span>
            </div>
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 uppercase tracking-tighter mb-4">
                Struktur <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-900 to-green-600">Organisasi</span>
            </h1>
            <p class="text-gray-500 text-lg italic">Sinergi kepemimpinan dan manajemen profesional SDN 3 LAMUK TA 2025/2026.</p>
            <div class="w-24 h-1.5 bg-green-500 mx-auto mt-6 rounded-full"></div>
        </div>
        
        <div class="relative group">
            <div class="absolute -inset-4 bg-gradient-to-tr from-blue-100 to-green-50 rounded-[3rem] blur-2xl opacity-50 group-hover:opacity-100 transition duration-1000"></div>
            
            <div class="relative bg-slate-50 p-4 md:p-12 rounded-[3rem] border-2 border-dashed border-slate-200 shadow-inner overflow-hidden">
                <div class="absolute top-6 left-6 bg-white/80 backdrop-blur-md px-4 py-2 rounded-2xl shadow-sm border border-slate-100 z-10">
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest flex items-center gap-2">
                        <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span> Bagan Resmi Sekolah
                    </p>
                </div>

                <img src="https://lh3.googleusercontent.com/gps-cs-s/APNQkAExy1mKjvbpib8VDfvdMASsLXxBK7fdNFXZ1mYEtn0PXiErIWxaBGDFkJvqUpQV16VKa0wa_vVN4hkFxJxrKc0_niTS4k6HUjKchn8J4EevVixsS_fUoKGmFLUKQf2cyYKSPL_7ng=w408-h306-k-no" 
                     alt="Struktur Organisasi SDN 3 LAMUK" 
                     class="mx-auto rounded-[2rem] shadow-2xl transition-all duration-700 group-hover:scale-[1.02] border-4 border-white w-full h-auto">
                
                <div class="absolute bottom-10 right-10 flex gap-3">
                    <button class="p-4 bg-white/90 backdrop-blur-md text-blue-900 rounded-2xl shadow-xl hover:bg-blue-900 hover:text-white transition duration-300">
                        <i class="fas fa-search-plus"></i>
                    </button>
                    <button class="px-6 py-4 bg-blue-900 text-white rounded-2xl shadow-xl hover:bg-green-600 transition duration-300 font-black text-xs uppercase tracking-widest flex items-center gap-2">
                        <i class="fas fa-download"></i> Unduh Bagan
                    </button>
                </div>
            </div>
        </div>
        
        <div class="mt-20 grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="group p-8 bg-blue-50 rounded-[2.5rem] border border-blue-100 hover:bg-blue-900 transition-all duration-500">
                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-blue-900 text-2xl mb-6 shadow-sm group-hover:scale-110 transition duration-500">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3 class="font-black text-blue-900 mb-3 uppercase tracking-tight group-hover:text-white transition">Komite Sekolah</h3>
                <p class="text-sm text-slate-600 italic group-hover:text-blue-100 transition leading-relaxed">Badan mandiri yang mewadahi peran serta masyarakat dalam meningkatkan mutu pendidikan.</p>
            </div>

            <div class="group p-8 bg-green-50 rounded-[2.5rem] border border-green-100 hover:bg-green-600 transition-all duration-500">
                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-green-600 text-2xl mb-6 shadow-sm group-hover:scale-110 transition duration-500">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h3 class="font-black text-green-900 mb-3 uppercase tracking-tight group-hover:text-white transition">Kepala Sekolah</h3>
                <p class="text-sm text-slate-600 italic group-hover:text-green-50 transition leading-relaxed">Manajer utama yang mengarahkan visi, misi, dan kebijakan strategis sekolah.</p>
            </div>

            <div class="group p-8 bg-purple-50 rounded-[2.5rem] border border-purple-100 hover:bg-purple-600 transition-all duration-500">
                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-purple-600 text-2xl mb-6 shadow-sm group-hover:scale-110 transition duration-500">
                    <i class="fas fa-file-invoice"></i>
                </div>
                <h3 class="font-black text-purple-900 mb-3 uppercase tracking-tight group-hover:text-white transition">Administrasi/TU</h3>
                <p class="text-sm text-slate-600 italic group-hover:text-purple-50 transition leading-relaxed">Pengelola sistem data, persuratan, dan pelayanan administrasi kependidikan.</p>
            </div>

            <div class="group p-8 bg-orange-50 rounded-[2.5rem] border border-orange-100 hover:bg-orange-500 transition-all duration-500">
                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-orange-500 text-2xl mb-6 shadow-sm group-hover:scale-110 transition duration-500">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3 class="font-black text-orange-900 mb-3 uppercase tracking-tight group-hover:text-white transition">Dewan Guru</h3>
                <p class="text-sm text-slate-600 italic group-hover:text-orange-50 transition leading-relaxed">Ujung tombak pembelajaran yang mendidik dan membimbing karakter siswa secara profesional.</p>
            </div>
        </div>

        <div class="mt-16 bg-slate-900 rounded-[3rem] p-10 text-center relative overflow-hidden">
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 20px 20px;"></div>
            
            <div class="relative z-10">
                <h4 class="text-white text-lg font-bold mb-2">Transparansi Manajemen</h4>
                <p class="text-slate-400 text-sm italic max-w-2xl mx-auto leading-relaxed">
                    Struktur organisasi ini dibuat untuk memastikan tata kelola sekolah yang akuntabel, efektif, dan efisien demi pelayanan pendidikan terbaik bagi seluruh siswa SDN 3 LAMUK.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection