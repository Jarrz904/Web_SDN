@extends('layouts.app')

@section('isi_konten')
<section class="py-24 bg-slate-50 overflow-hidden">
    <div class="container mx-auto px-6 md:px-20">
        <div class="text-center max-w-3xl mx-auto mb-20 relative">
            <div class="inline-block px-4 py-1.5 bg-blue-100 rounded-full mb-4">
                <span class="text-blue-700 font-black text-xs uppercase tracking-[0.2em] flex items-center gap-2">
                    <i class="fas fa-users"></i> Professional Team
                </span>
            </div>
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 uppercase tracking-tighter mb-4">
                Tenaga <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-900 to-green-600">Pendidik</span>
            </h1>
            <p class="text-gray-500 text-lg italic">Mengenal lebih dekat sosok inspiratif bapak dan ibu guru penggerak di SDN 2 MARGASARI.</p>
            <div class="w-24 h-1.5 bg-green-500 mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
            @php
                $teachers = [
                    ['nama' => 'H. Ahmad Fauzi, M.Pd', 'jabatan' => 'Kepala Sekolah', 'nip' => '19750312 200003 1 004'],
                    ['nama' => 'Siti Maryam, S.Pd', 'jabatan' => 'Wali Kelas 6A', 'nip' => '19820521 201001 2 015'],
                    ['nama' => 'Budi Santoso, S.Pd.SD', 'jabatan' => 'Wali Kelas 5A', 'nip' => '19881005 201402 1 002'],
                    ['nama' => 'Lestari Handayani, S.Pd', 'jabatan' => 'Guru Agama', 'nip' => '19850115 200903 2 008'],
                    ['nama' => 'Rahmat Hidayat, S.Pd', 'jabatan' => 'Guru PJOK', 'nip' => '19920730 201903 1 011'],
                    ['nama' => 'Dewi Sartika, S.Si', 'jabatan' => 'Wali Kelas 4B', 'nip' => '19900412 201502 2 003'],
                    ['nama' => 'Annas Muttaqin, S.Pd', 'jabatan' => 'Guru Bahasa Inggris', 'nip' => '19941122 202001 1 009'],
                    ['nama' => 'Siska Amelia, S.Pd', 'jabatan' => 'Guru Kesenian', 'nip' => '19930218 201902 2 004'],
                ];
            @endphp

            @foreach($teachers as $teacher)
            <div class="group relative">
                <div class="absolute inset-0 bg-blue-900 rounded-[2.5rem] rotate-0 group-hover:-rotate-3 transition duration-500 opacity-0 group-hover:opacity-100"></div>
                
                <div class="relative bg-white rounded-[2rem] shadow-sm overflow-hidden border border-slate-100 hover:shadow-2xl transition-all duration-500 group-hover:-translate-y-4">
                    <div class="aspect-[4/5] bg-slate-100 relative overflow-hidden">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($teacher['nama']) }}&background=f1f5f9&color=1e3a8a&size=400" 
                             alt="{{ $teacher['nama'] }}" 
                             class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                        
                        <div class="absolute inset-0 bg-blue-900/60 flex items-center justify-center gap-3 opacity-0 group-hover:opacity-100 transition duration-500">
                            <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-blue-900 hover:bg-green-500 hover:text-white transition"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-blue-900 hover:bg-green-500 hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
                        </div>

                        <div class="absolute bottom-4 left-4 right-4">
                            <span class="px-4 py-1.5 bg-white/90 backdrop-blur-sm text-blue-900 text-[10px] font-black uppercase tracking-widest rounded-xl shadow-lg border border-white">
                                {{ $teacher['jabatan'] }}
                            </span>
                        </div>
                    </div>

                    <div class="p-8 text-center bg-white relative">
                        <h3 class="font-black text-slate-800 text-lg leading-tight mb-2 group-hover:text-blue-900 transition">
                            {{ $teacher['nama'] }}
                        </h3>
                        <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest mb-4">NIP. {{ $teacher['nip'] }}</p>
                        
                        <div class="flex justify-center gap-1 opacity-0 group-hover:opacity-100 transition duration-500">
                            <div class="w-8 h-1 bg-green-500 rounded-full"></div>
                            <div class="w-2 h-1 bg-blue-900 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-20 p-10 bg-white rounded-[3rem] border-2 border-dashed border-slate-200 flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="flex items-center gap-6">
                <div class="w-16 h-16 bg-blue-900 rounded-3xl flex items-center justify-center text-white text-3xl shadow-xl shadow-blue-900/20">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div>
                    <h4 class="text-xl font-black text-slate-800 uppercase tracking-tighter">Total Tenaga Pendidik</h4>
                    <p class="text-gray-500 italic">24 Guru & 6 Staf Tata Usaha</p>
                </div>
            </div>
            <a href="#" class="px-8 py-4 bg-blue-900 text-white rounded-2xl font-black text-xs uppercase tracking-[0.2em] hover:bg-green-600 transition shadow-xl shadow-blue-900/10">
                Struktur Organisasi <i class="fas fa-sitemap ml-2"></i>
            </a>
        </div>
    </div>
</section>
@endsection