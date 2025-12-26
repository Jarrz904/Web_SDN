@extends('layouts.app')

@section('isi_konten')
<section class="py-24 bg-slate-50 overflow-hidden">
    <div class="container mx-auto px-6 md:px-20">
        <div class="text-center max-w-3xl mx-auto mb-20 relative">
            <div class="inline-block px-4 py-1.5 bg-blue-100 rounded-full mb-4">
                <span class="text-blue-700 font-black text-xs uppercase tracking-[0.2em] flex items-center gap-2">
                    <i class="fas fa-chart-pie"></i> Student Statistics
                </span>
            </div>
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 uppercase tracking-tighter mb-4">
                Data <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-900 to-green-600">Peserta Didik</span>
            </h1>
            <p class="text-gray-500 text-lg italic">Gambaran umum pertumbuhan dan sebaran statistik siswa SDN 2 MARGASARI.</p>
            <div class="w-24 h-1.5 bg-green-500 mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-20">
            <div class="group bg-white p-10 rounded-[2.5rem] shadow-sm border-t-8 border-blue-600 hover:shadow-2xl hover:shadow-blue-900/10 transition-all duration-500 hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-blue-50 rounded-full opacity-50 group-hover:scale-150 transition duration-700"></div>
                <div class="relative z-10">
                    <div class="flex justify-between items-center mb-6">
                        <span class="text-slate-400 font-black uppercase tracking-widest text-[10px]">Total Siswa Aktif</span>
                        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center shadow-inner">
                            <i class="fas fa-users text-xl"></i>
                        </div>
                    </div>
                    <h2 class="text-6xl font-black text-slate-800 tracking-tighter">342</h2>
                    <p class="text-gray-400 text-xs mt-4 font-bold uppercase tracking-widest italic flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-green-500"></span> TA 2025/2026
                    </p>
                </div>
            </div>

            <div class="group bg-white p-10 rounded-[2.5rem] shadow-sm border-t-8 border-pink-500 hover:shadow-2xl hover:shadow-pink-900/10 transition-all duration-500 hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-pink-50 rounded-full opacity-50 group-hover:scale-150 transition duration-700"></div>
                <div class="relative z-10">
                    <div class="flex justify-between items-center mb-6">
                        <span class="text-slate-400 font-black uppercase tracking-widest text-[10px]">Siswa Perempuan</span>
                        <div class="w-12 h-12 bg-pink-50 text-pink-500 rounded-2xl flex items-center justify-center shadow-inner">
                            <i class="fas fa-female text-xl"></i>
                        </div>
                    </div>
                    <h2 class="text-6xl font-black text-slate-800 tracking-tighter">168</h2>
                    <p class="text-gray-400 text-xs mt-4 font-bold uppercase tracking-widest italic">± 49% Popuasi Siswa</p>
                </div>
            </div>

            <div class="group bg-white p-10 rounded-[2.5rem] shadow-sm border-t-8 border-cyan-500 hover:shadow-2xl hover:shadow-cyan-900/10 transition-all duration-500 hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-cyan-50 rounded-full opacity-50 group-hover:scale-150 transition duration-700"></div>
                <div class="relative z-10">
                    <div class="flex justify-between items-center mb-6">
                        <span class="text-slate-400 font-black uppercase tracking-widest text-[10px]">Siswa Laki-Laki</span>
                        <div class="w-12 h-12 bg-cyan-50 text-cyan-500 rounded-2xl flex items-center justify-center shadow-inner">
                            <i class="fas fa-male text-xl"></i>
                        </div>
                    </div>
                    <h2 class="text-6xl font-black text-slate-800 tracking-tighter">174</h2>
                    <p class="text-gray-400 text-xs mt-4 font-bold uppercase tracking-widest italic">± 51% Populasi Siswa</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-[3rem] shadow-xl shadow-slate-200/50 overflow-hidden border border-white relative">
            <div class="bg-gradient-to-r from-blue-900 to-blue-800 px-10 py-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h3 class="text-white text-xl font-black uppercase tracking-tight">Rincian Data Per Kelas</h3>
                    <p class="text-blue-200 text-xs font-bold uppercase tracking-[0.2em] mt-1">Distribusi Rombongan Belajar</p>
                </div>
                <div class="flex items-center gap-3">
                    <span class="bg-white/10 px-4 py-2 rounded-xl text-white text-[10px] font-bold uppercase backdrop-blur-sm">Total 12 Rombel</span>
                    <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-xl text-[10px] font-black uppercase transition shadow-lg">
                        <i class="fas fa-download mr-2"></i> Unduh PDF
                    </button>
                </div>
            </div>
            
            <div class="overflow-x-auto p-4">
                <table class="w-full text-left border-separate border-spacing-y-2">
                    <thead>
                        <tr class="text-slate-400 text-[10px] font-black uppercase tracking-[0.2em]">
                            <th class="px-10 py-4">Tingkat Kelas</th>
                            <th class="px-10 py-4 text-center">Laki-Laki</th>
                            <th class="px-10 py-4 text-center">Perempuan</th>
                            <th class="px-10 py-4 text-center">Kapasitas</th>
                            <th class="px-10 py-4 text-center">Total Akhir</th>
                        </tr>
                    </thead>
                    <tbody class="text-slate-600">
                        @php
                            $data_kelas = [
                                ['I', 28, 29, '100%'],
                                ['II', 30, 27, '98%'],
                                ['III', 27, 28, '95%'],
                                ['IV', 29, 29, '100%'],
                                ['V', 31, 26, '97%'],
                                ['VI', 29, 29, '100%'],
                            ];
                        @endphp
                        @foreach($data_kelas as $row)
                        <tr class="group hover:bg-slate-50 transition-all duration-300">
                            <td class="px-10 py-5 bg-slate-50 group-hover:bg-blue-50 rounded-l-2xl transition-colors">
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center font-black text-blue-900 shadow-sm border border-slate-100 italic">
                                        {{ $row[0] }}
                                    </div>
                                    <span class="font-black text-slate-700 uppercase tracking-tighter">Kelas {{ $row[0] }}</span>
                                </div>
                            </td>
                            <td class="px-10 py-5 text-center font-bold text-slate-500 italic">{{ $row[1] }}</td>
                            <td class="px-10 py-5 text-center font-bold text-slate-500 italic">{{ $row[2] }}</td>
                            <td class="px-10 py-5 text-center">
                                <div class="flex flex-col items-center gap-1">
                                    <div class="w-16 h-1.5 bg-slate-100 rounded-full overflow-hidden">
                                        <div class="h-full bg-green-500" style="width: {{ $row[3] }}"></div>
                                    </div>
                                    <span class="text-[9px] font-black text-slate-400">{{ $row[3] }}</span>
                                </div>
                            </td>
                            <td class="px-10 py-5 text-center bg-slate-50 group-hover:bg-blue-50 rounded-r-2xl transition-colors">
                                <span class="text-xl font-black text-blue-900 tracking-tighter">{{ $row[1] + $row[2] }}</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="bg-slate-50 p-6 text-center border-t border-slate-100">
                <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest italic">
                    * Data diperbarui secara berkala melalui integrasi sistem Dapodik Kemendikbudristek
                </p>
            </div>
        </div>
    </div>
</section>
@endsection