<footer class="bg-slate-900 text-white pt-12 pb-6 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-48 h-48 bg-blue-600/5 rounded-full -mr-24 -mt-24 blur-2xl"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-green-500/5 rounded-full -ml-32 -mb-32 blur-2xl"></div>

    <div class="container mx-auto px-6 md:px-20 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-10">
            
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9c/Logo_Tut_Wuri_Handayani.png" class="w-10 drop-shadow-lg" alt="Logo">
                    <div>
                        <h2 class="text-lg font-black leading-tight tracking-tighter uppercase">SDN 2<br><span class="text-green-500">MARGASARI</span></h2>
                        <span class="inline-block px-2 py-0.5 bg-blue-600 text-[7px] font-black rounded uppercase tracking-widest mt-1">Sekolah Penggerak</span>
                    </div>
                </div>
                <p class="text-slate-400 text-[11px] leading-relaxed italic font-medium max-w-xs">
                    "Mencetak generasi unggul yang berakhlak mulia, cerdas, dan peduli lingkungan di era digital."
                </p>
                <div class="flex gap-3">
                    <a href="#" class="w-8 h-8 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-all shadow-md group">
                        <i class="fab fa-facebook-f text-xs group-hover:scale-110"></i>
                    </a>
                    <a href="#" class="w-8 h-8 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-pink-600 transition-all shadow-md group">
                        <i class="fab fa-instagram text-xs group-hover:scale-110"></i>
                    </a>
                    <a href="#" class="w-8 h-8 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-red-600 transition-all shadow-md group">
                        <i class="fab fa-youtube text-xs group-hover:scale-110"></i>
                    </a>
                </div>
            </div>

            <div>
                <h3 class="text-[10px] font-black mb-6 uppercase tracking-[0.2em] text-green-500">Navigasi</h3>
                <ul class="space-y-3 text-[10px] font-bold uppercase tracking-wider text-slate-400">
                    <li><a href="{{ url('/profil') }}" class="hover:text-white hover:translate-x-1 transition-all flex items-center gap-2"><i class="fas fa-chevron-right text-[7px] text-green-500"></i> Profil Sekolah</a></li>
                    <li><a href="{{ url('/visi-misi') }}" class="hover:text-white hover:translate-x-1 transition-all flex items-center gap-2"><i class="fas fa-chevron-right text-[7px] text-green-500"></i> Visi & Misi</a></li>
                    <li><a href="{{ url('/guru') }}" class="hover:text-white hover:translate-x-1 transition-all flex items-center gap-2"><i class="fas fa-chevron-right text-[7px] text-green-500"></i> Tenaga Pendidik</a></li>
                    <li><a href="{{ url('/artikel') }}" class="hover:text-white hover:translate-x-1 transition-all flex items-center gap-2"><i class="fas fa-chevron-right text-[7px] text-green-500"></i> Berita & Artikel</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-[10px] font-black mb-6 uppercase tracking-[0.2em] text-green-500">Kesiswaan</h3>
                <ul class="space-y-3 text-[10px] font-bold uppercase tracking-wider text-slate-400">
                    <li><a href="{{ url('/data-siswa') }}" class="hover:text-white flex items-center gap-2"><i class="fas fa-users text-green-500 w-4"></i> Data Statistik</a></li>
                    <li><a href="{{ url('/kesiswaan') }}" class="hover:text-white flex items-center gap-2"><i class="fas fa-trophy text-green-500 w-4"></i> Ekstrakurikuler</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fas fa-calendar-alt text-green-500 w-4"></i> Kalender Akademik</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fas fa-download text-green-500 w-4"></i> Unduhan Dokumen</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-[10px] font-black mb-6 uppercase tracking-[0.2em] text-green-500">Kontak Resmi</h3>
                <div class="space-y-3 text-[11px] text-slate-400">
                    <div class="flex gap-3">
                        <i class="fas fa-map-marker-alt text-green-500 mt-1 shrink-0"></i>
                        <p class="leading-snug">Jl. Margasari No. 02, Kec. Margasari, Tegal, Jawa Tengah</p>
                    </div>
                    <div class="flex gap-3">
                        <i class="fas fa-phone-alt text-green-500 shrink-0"></i>
                        <p class="font-bold text-slate-200">(0283) 123 4567</p>
                    </div>
                    <div class="flex gap-3">
                        <i class="fas fa-envelope text-green-500 shrink-0"></i>
                        <p class="font-bold text-slate-200">admin@sdn2margasari.sch.id</p>
                    </div>
                </div>
                <div class="mt-4 rounded-xl overflow-hidden h-20 bg-slate-800 border border-slate-700 group">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.123456789!2d109.1234567!3d-7.1234567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMDcnMjQuNCJTIDEwOcKwMDcnMjQuNCJF!5e0!3m2!1sid!2sid!4v1234567890" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" class="grayscale group-hover:grayscale-0 transition-all duration-500"></iframe>
                </div>
            </div>
        </div>

        <div class="border-t border-slate-800 pt-6 flex flex-col md:flex-row justify-between items-center gap-4 text-center md:text-left">
            <p class="text-[9px] font-black uppercase tracking-[0.2em] text-slate-500">
                © 2025 <span class="text-slate-300">SDN 2 MARGASARI</span>. All Rights Reserved.
            </p>
            <div class="flex flex-wrap justify-center items-center gap-4">
                <span class="text-[8px] font-black uppercase tracking-widest text-slate-600 italic">Tim IT SDN 2 MARGASARI</span>
                <div class="h-3 w-px bg-slate-800 hidden md:block"></div>
                <div class="flex gap-3 text-[9px] font-bold text-slate-500 uppercase">
                    <a href="#" class="hover:text-green-500 transition">Privasi</a>
                    <a href="#" class="hover:text-green-500 transition">Syarat</a>
                </div>
            </div>
        </div>
    </div>
</footer>