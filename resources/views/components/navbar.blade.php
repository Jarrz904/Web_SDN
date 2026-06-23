<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<nav x-data="{ mobileMenu: false, profilDropdown: false }"
    class="sticky top-0 z-50 bg-white shadow-sm py-4 px-6 md:px-20 flex justify-between items-center">

    <div class="flex items-center gap-3">
        <img src="https://2.bp.blogspot.com/-sqiAfuxCdqU/UN5bJ3CiecI/AAAAAAAABIA/Zvv5CKfu0TA/s1600/Logo+Tut+Wuri+Handayani.png"
            class="w-10" alt="Logo Tut Wuri">
        <div>
            <h1 class="text-xl font-bold text-blue-900 leading-none uppercase">SDN 3 Lamuk</h1>
            <p class="text-[10px] text-gray-500 font-medium tracking-tighter uppercase">Sekolah Dasar</p>
        </div>
    </div>

    <div class="hidden md:flex space-x-6 font-bold text-sm uppercase text-gray-600 items-center">
        <a href="{{ url('/') }}"
            class="{{ Request::is('/') ? 'text-green-500' : '' }} hover:text-green-500 transition">Home</a>

        <div class="relative group py-2">
            <button
                class="{{ Request::is('profil*', 'visi-misi*', 'guru*', 'struktur-organisasi*', 'data-siswa*') ? 'text-green-500' : 'text-slate-700' }} hover:text-green-500 flex items-center gap-1 transition font-bold">
                <span>
                    @if(Request::is('visi-misi*'))
                        Visi, Misi & Tujuan
                    @elseif(Request::is('guru*'))
                        Data Guru
                    @elseif(Request::is('struktur-organisasi*'))
                        Struktur Organisasi
                    @elseif(Request::is('data-siswa*'))
                        Data Siswa
                    @elseif(Request::is('profil*'))
                        Profil Sekolah
                    @else
                        Profil
                    @endif
                </span>
                <i class="fas fa-chevron-down text-[10px]"></i>
            </button>

            <div
                class="absolute hidden group-hover:block bg-white shadow-2xl p-4 w-60 rounded-xl top-full mt-0 border border-gray-100 z-[999]">
                <a href="{{ url('/visi-misi') }}"
                    class="block py-2.5 px-4 rounded-lg {{ Request::is('visi-misi*') ? 'bg-green-50 text-green-500' : 'text-slate-600' }} hover:bg-green-50 hover:text-green-500 italic font-medium text-xs transition uppercase mb-1">
                    <i class="fas fa-bullseye mr-2"></i> Visi, Misi & Tujuan
                </a>
                <a href="{{ url('/profil') }}"
                    class="block py-2.5 px-4 rounded-lg {{ Request::is('profil*') ? 'bg-green-50 text-green-500' : 'text-slate-600' }} hover:bg-green-50 hover:text-green-500 italic font-medium text-xs transition uppercase mb-1">
                    <i class="fas fa-school mr-2"></i> Profil Sekolah
                </a>
                <a href="{{ url('/guru') }}"
                    class="block py-2.5 px-4 rounded-lg {{ Request::is('guru*') ? 'bg-green-50 text-green-500' : 'text-slate-600' }} hover:bg-green-50 hover:text-green-500 italic font-medium text-xs transition uppercase mb-1">
                    <i class="fas fa-user-tie mr-2"></i> Data Guru
                </a>
                <a href="{{ url('/struktur-organisasi') }}"
                    class="block py-2.5 px-4 rounded-lg {{ Request::is('struktur-organisasi*') ? 'bg-green-50 text-green-500' : 'text-slate-600' }} hover:bg-green-50 hover:text-green-500 italic font-medium text-xs transition uppercase mb-1">
                    <i class="fas fa-sitemap mr-2"></i> Struktur Organisasi
                </a>
                <a href="{{ url('/data-siswa') }}"
                    class="block py-2.5 px-4 rounded-lg {{ Request::is('data-siswa*') ? 'bg-green-50 text-green-500' : 'text-slate-600' }} hover:bg-green-50 hover:text-green-500 italic font-medium text-xs transition uppercase">
                    <i class="fas fa-user-graduate mr-2"></i> Data Siswa
                </a>
            </div>
        </div>

        <a href="{{ url('/kesiswaan') }}" class="hover:text-green-500 transition">Kesiswaan</a>
        <a href="{{ url('/berita') }}" class="hover:text-green-500 transition">Berita</a>
        <a href="{{ url('/informasi') }}" class="hover:text-green-500 transition">Informasi</a>
        <a href="{{ url('/galeri') }}" class="hover:text-green-500 transition">Galeri</a>
        <a href="{{ url('/artikel') }}" class="hover:text-green-500 transition">E-Library</a>
    </div>

    <div class="md:hidden">
        <button @click="mobileMenu = !mobileMenu" class="text-blue-900 text-2xl focus:outline-none">
            <i class="fas" :class="mobileMenu ? 'fa-times' : 'fa-bars'"></i>
        </button>
    </div>

    <div x-show="mobileMenu" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 transform -translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        class="absolute top-full left-0 w-full bg-white shadow-lg p-6 md:hidden flex flex-col space-y-4 border-t border-gray-100">

        <a href="{{ url('/') }}" class="font-bold text-slate-700">Home</a>

        <div>
            <button @click="profilDropdown = !profilDropdown"
                class="font-bold text-slate-700 flex justify-between w-full">
                Profil <i class="fas fa-chevron-down" :class="profilDropdown ? 'rotate-180' : ''"></i>
            </button>
            <div x-show="profilDropdown" class="mt-2 pl-4 space-y-2 border-l-2 border-green-500">
                <a href="{{ url('/visi-misi') }}" class="block text-xs uppercase text-slate-600">Visi, Misi & Tujuan</a>
                <a href="{{ url('/profil') }}" class="block text-xs uppercase text-slate-600">Profil Sekolah</a>
                <a href="{{ url('/guru') }}" class="block text-xs uppercase text-slate-600">Data Guru</a>
                <a href="{{ url('/struktur-organisasi') }}" class="block text-xs uppercase text-slate-600">Struktur
                    Organisasi</a>
                <a href="{{ url('/data-siswa') }}" class="block text-xs uppercase text-slate-600">Data Siswa</a>
            </div>
        </div>

        <a href="{{ url('/kesiswaan') }}" class="font-bold text-slate-700">Kesiswaan</a>
        <a href="{{ url('/berita') }}" class="font-bold text-slate-700">Berita</a>
        <a href="{{ url('/informasi') }}" class="font-bold text-slate-700">Informasi</a>
        <a href="{{ url('/galeri') }}" class="font-bold text-slate-700">Galeri</a>
        <a href="{{ url('/artikel') }}" class="font-bold text-slate-700">E-Library</a>
    </div>
</nav>