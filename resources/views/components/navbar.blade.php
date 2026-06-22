<nav class="sticky top-0 z-50 bg-white shadow-sm py-4 px-6 md:px-20 flex justify-between items-center">
    <div class="flex items-center gap-3">
        <img src="https://2.bp.blogspot.com/-sqiAfuxCdqU/UN5bJ3CiecI/AAAAAAAABIA/Zvv5CKfu0TA/s1600/Logo+Tut+Wuri+Handayani.png"
            class="w-10" alt="Logo Tut Wuri">
        <div>
            <h1 class="text-xl font-bold text-blue-900 leading-none uppercase">SDN-2 Margasari</h1>
            <p class="text-[10px] text-gray-500 font-medium tracking-tighter uppercase">Sekolah Dasar</p>
        </div>
    </div>

    <div class="hidden md:flex space-x-6 font-bold text-sm uppercase text-gray-600 items-center">
        <a href="{{ url('/') }}"
            class="{{ Request::is('/') ? 'text-green-500' : '' }} hover:text-green-500 transition font-bold">Home</a>

       <div class="relative group py-2">
    <a href="{{ url('/profil') }}"
        class="{{ Request::is('profil*') || Request::is('visi-misi*') || Request::is('guru*') || Request::is('struktur-organisasi*') || Request::is('data-siswa*') ? 'text-green-500' : 'text-slate-700' }} group-hover:text-green-500 flex items-center gap-1 transition cursor-pointer font-bold">
        
        <span>
            @if(Request::is('visi-misi*'))
                Visi, Misi & Tujuan
            @elseif(Request::is('guru*'))
                Data Guru
            @elseif(Request::is('struktur-organisasi*'))
                Struktur Organisasi
            @elseif(Request::is('data-siswa*'))
                Data Siswa
            @else
                Profil
            @endif
        </span>

        <i class="fas fa-chevron-down text-[10px] group-hover:rotate-180 transition-transform duration-300"></i>
    </a>

    <div class="absolute hidden group-hover:block bg-white shadow-2xl p-4 w-60 rounded-xl top-full mt-0 border border-gray-100 animate-fade-in z-[999]">
        
        <a href="{{ url('/visi-misi') }}"
            class="block py-2.5 px-4 rounded-lg {{ Request::is('visi-misi*') ? 'bg-green-50 text-green-500' : 'text-slate-600' }} hover:bg-green-50 hover:text-green-500 italic font-medium text-xs transition uppercase mb-1 border-t border-gray-50 pt-2">
            <i class="fas fa-bullseye mr-2 text-[10px]"></i> Visi, Misi & Tujuan
        </a>

         <a href="{{ url('/profil') }}"
            class="block py-2.5 px-4 rounded-lg {{ Request::is('profil*') ? 'bg-green-50 text-green-500' : 'text-slate-600' }} hover:bg-green-50 hover:text-green-500 italic font-medium text-xs transition uppercase mb-1">
            <i class="fas fa-bullseye mr-2 text-[10px]"></i> Profil
        </a>

        <a href="{{ url('/guru') }}"
            class="block py-2.5 px-4 rounded-lg {{ Request::is('guru*') ? 'bg-green-50 text-green-500' : 'text-slate-600' }} hover:bg-green-50 hover:text-green-500 italic font-medium text-xs transition uppercase mb-1">
            <i class="fas fa-user-tie mr-2 text-[10px]"></i> Data Guru
        </a>

        <a href="{{ url('/struktur-organisasi') }}"
            class="block py-2.5 px-4 rounded-lg {{ Request::is('struktur-organisasi*') ? 'bg-green-50 text-green-500' : 'text-slate-600' }} hover:bg-green-50 hover:text-green-500 italic font-medium text-xs transition uppercase mb-1">
            <i class="fas fa-sitemap mr-2 text-[10px]"></i> Struktur Organisasi
        </a>

        <a href="{{ url('/data-siswa') }}"
            class="block py-2.5 px-4 rounded-lg {{ Request::is('data-siswa*') ? 'bg-green-50 text-green-500' : 'text-slate-600' }} hover:bg-green-50 hover:text-green-500 italic font-medium text-xs transition uppercase">
            <i class="fas fa-user-graduate mr-2 text-[10px]"></i> Data Siswa
        </a>
    </div>
</div>
        <a href="{{ url('/kesiswaan') }}"
            class="{{ Request::is('kesiswaan') ? 'text-green-500' : '' }} hover:text-green-500 transition font-bold">Kesiswaan</a>
        <a href="{{ url('/berita') }}"
            class="{{ Request::is('berita') ? 'text-green-500' : '' }} hover:text-green-500 transition font-bold">Berita</a>

        {{-- Menu Informasi Baru --}}
        <a href="{{ url('/informasi') }}"
            class="{{ Request::is('informasi') ? 'text-green-500' : '' }} hover:text-green-500 transition font-bold">Informasi</a>

        <a href="{{ url('/galeri') }}"
            class="{{ Request::is('galeri') ? 'text-green-500' : '' }} hover:text-green-500 transition font-bold">Galeri</a>
        <a href="{{ url('/artikel') }}"
            class="{{ Request::is('artikel') ? 'text-green-500' : '' }} hover:text-green-500 transition font-bold">Artikel</a>
    </div>

    <div class="md:hidden">
        <button class="text-blue-900 text-2xl focus:outline-none"><i class="fas fa-bars"></i></button>
    </div>
</nav>