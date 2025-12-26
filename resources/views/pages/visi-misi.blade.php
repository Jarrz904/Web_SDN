@extends('layouts.app')

@section('isi_konten')
<section class="relative py-28 bg-gradient-to-br from-blue-900 via-blue-800 to-slate-900 text-white overflow-hidden">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-500/10 rounded-full -mr-64 -mt-64 blur-3xl animate-pulse"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-green-500/10 rounded-full -ml-32 -mb-32 blur-3xl"></div>
    
    <div class="container mx-auto px-6 md:px-20 text-center relative z-10">
        <div class="inline-block px-4 py-1.5 bg-white/10 backdrop-blur-md rounded-full mb-6 border border-white/20">
            <span class="text-blue-100 font-black text-xs uppercase tracking-[0.3em] flex items-center gap-2">
                <i class="fas fa-compass animate-spin-slow"></i> Our Foundation
            </span>
        </div>
        <h1 class="text-5xl md:text-7xl font-black uppercase tracking-tighter mb-6 leading-none">
            Visi, Misi <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-cyan-300">& Tujuan</span>
        </h1>
        <p class="text-blue-100 max-w-2xl mx-auto italic text-lg opacity-80 font-light leading-relaxed">
            "Menjadi kompas bagi SDN 2 MARGASARI dalam membentuk karakter unggul dan kecemerlangan akademik di era digital."
        </p>
    </div>
</section>

<section class="py-24 bg-slate-50 relative -mt-16 z-20">
    <div class="container mx-auto px-6 md:px-20">
        <div class="grid lg:grid-cols-2 gap-12">
            <div class="group bg-white p-12 rounded-[3.5rem] shadow-2xl shadow-slate-200 border border-white relative overflow-hidden transition-all duration-500 hover:-translate-y-3">
                <div class="absolute -right-10 -top-10 w-40 h-40 bg-green-50 rounded-full group-hover:scale-150 transition duration-700"></div>
                
                <div class="relative z-10">
                    <div class="w-20 h-20 bg-green-100 text-green-600 rounded-3xl flex items-center justify-center text-3xl mb-10 shadow-inner group-hover:bg-green-600 group-hover:text-white transition-colors duration-500">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h2 class="text-4xl font-black text-slate-800 uppercase mb-8 tracking-tighter italic">Visi Utama</h2>
                    <div class="relative">
                        <i class="fas fa-quote-left absolute -top-6 -left-4 text-slate-100 text-6xl -z-10"></i>
                        <p class="text-gray-700 text-2xl md:text-3xl leading-snug font-bold italic tracking-tight">
                            "Terwujudnya Peserta Didik yang Berakhlak Mulia, Cerdas, Terampil, Mandiri, dan Berwawasan Lingkungan."
                        </p>
                    </div>
                    <div class="mt-10 flex items-center gap-4">
                        <div class="h-1 w-20 bg-green-500 rounded-full"></div>
                        <span class="text-xs font-black uppercase tracking-widest text-slate-400 font-sans">Visi 2025-2030</span>
                    </div>
                </div>
            </div>

            <div class="group bg-white p-12 rounded-[3.5rem] shadow-2xl shadow-slate-200 border border-white transition-all duration-500 hover:-translate-y-3">
                <div class="flex items-center gap-6 mb-10">
                    <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center text-2xl shadow-inner group-hover:bg-blue-600 group-hover:text-white transition-colors duration-500">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h2 class="text-4xl font-black text-slate-800 uppercase tracking-tighter italic">Misi Kami</h2>
                </div>
                
                <ul class="space-y-6">
                    @php
                        $misi = [
                            ["Menanamkan nilai religius melalui pembiasaan ibadah harian.", "bg-blue-500"],
                            ["Menyelenggarakan pembelajaran inovatif berbasis teknologi.", "bg-green-500"],
                            ["Mengembangkan bakat siswa melalui ekstrakurikuler variatif.", "bg-yellow-500"],
                            ["Menerapkan pola hidup bersih & sehat di lingkungan sekolah.", "bg-cyan-500"],
                            ["Kerjasama harmonis antara sekolah, orang tua, & masyarakat.", "bg-purple-500"],
                            ["Mewujudkan budaya literasi dan berpikir kritis sejak dini.", "bg-red-500"]
                        ];
                    @endphp
                    @foreach($misi as $item)
                    <li class="flex items-start gap-5 group/list">
                        <div class="mt-1 flex-none w-8 h-8 {{ $item[1] }} text-white rounded-xl flex items-center justify-center shadow-lg transform group-hover/list:rotate-12 transition transition-all duration-300">
                            <i class="fas fa-check text-[12px]"></i>
                        </div>
                        <span class="text-slate-600 font-semibold leading-relaxed group-hover/list:text-blue-900 transition-colors">
                            {{ $item[0] }}
                        </span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mt-32">
            <div class="text-center mb-20 relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-slate-200"></div>
                </div>
                <div class="relative bg-slate-50 px-8 inline-block">
                    <span class="text-green-600 font-black uppercase tracking-[0.4em] text-xs">Roadmap Sukses</span>
                    <h2 class="text-4xl md:text-5xl font-black text-slate-900 uppercase mt-2 tracking-tighter">Tujuan Strategis</h2>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $tujuan = [
                        [
                            'icon' => 'fa-graduation-cap', 'color' => 'text-blue-600', 'bg' => 'bg-blue-50',
                            'title' => 'Ekselensi Akademik',
                            'desc' => 'Meningkatkan standar kelulusan dan nilai rata-rata UN/Asesmen Nasional secara konsisten.'
                        ],
                        [
                            'icon' => 'fa-hands-praying', 'color' => 'text-yellow-600', 'bg' => 'bg-yellow-50',
                            'title' => 'Integritas Moral',
                            'desc' => 'Membentuk profil pelajar Pancasila yang santun, disiplin, dan menghormati keberagaman.'
                        ],
                        [
                            'icon' => 'fa-seedling', 'color' => 'text-green-600', 'bg' => 'bg-green-50',
                            'title' => 'Eco-School',
                            'desc' => 'Meraih predikat sekolah Adiwiyata Nasional dengan budaya bebas sampah plastik.'
                        ],
                        [
                            'icon' => 'fa-microchip', 'color' => 'text-purple-600', 'bg' => 'bg-purple-50',
                            'title' => 'Literasi Digital',
                            'desc' => 'Mengintegrasikan 100% pembelajaran kelas dengan perangkat IT pada tahun 2026.'
                        ]
                    ];
                @endphp
                @foreach($tujuan as $t)
                <div class="group bg-white p-8 rounded-[2.5rem] border border-transparent hover:border-slate-100 hover:shadow-2xl transition-all duration-500 text-center">
                    <div class="w-20 h-20 {{ $t['bg'] }} {{ $t['color'] }} rounded-[2rem] flex items-center justify-center text-3xl mx-auto mb-8 transform group-hover:rotate-6 transition-all duration-500 shadow-sm">
                        <i class="fas {{ $t['icon'] }}"></i>
                    </div>
                    <h4 class="text-lg font-black text-slate-800 mb-4 uppercase tracking-tighter">{{ $t['title'] }}</h4>
                    <p class="text-slate-500 text-sm leading-relaxed italic">"{{ $t['desc'] }}"</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-white relative overflow-hidden">
    <div class="absolute left-0 top-0 w-1/2 h-full bg-slate-50/50 -skew-x-12 -translate-x-20"></div>
    <div class="container mx-auto px-6 text-center relative z-10">
        <div class="max-w-4xl mx-auto">
            <div class="flex justify-center mb-8">
                <div class="w-12 h-1 bg-blue-900 rounded-full"></div>
                <i class="fas fa-quote-right text-4xl text-slate-200 mx-6"></i>
                <div class="w-12 h-1 bg-blue-900 rounded-full"></div>
            </div>
            <p class="text-3xl md:text-4xl font-black text-slate-400 italic leading-tight tracking-tight">
                "Pendidikan bukan sekadar mengisi wadah yang kosong, namun tentang <span class="text-blue-900">menyalakan api karakter</span> dalam jiwa setiap anak."
            </p>
            <div class="mt-10">
                <p class="font-black text-blue-900 uppercase tracking-[0.5em] text-sm">SDN 2 MARGASARI</p>
                <div class="mt-2 flex justify-center gap-1">
                    <div class="w-2 h-2 rounded-full bg-green-500"></div>
                    <div class="w-8 h-2 rounded-full bg-blue-900"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes spin-slow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    .animate-spin-slow {
        animation: spin-slow 8s linear infinite;
    }
</style>
@endsection