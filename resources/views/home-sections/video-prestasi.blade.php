<section class="py-20 bg-blue-950 text-white px-6 md:px-20 overflow-hidden relative">
    <div class="absolute top-0 left-0 w-64 h-64 bg-blue-900/30 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-green-500/10 rounded-full translate-x-1/3 translate-y-1/3 blur-3xl"></div>

    <div class="container mx-auto grid md:grid-cols-2 gap-16 relative z-10">
        <div class="group">
            <div class="flex items-center justify-between mb-8 border-b border-blue-800 pb-4">
                <h3 class="text-2xl font-black tracking-tighter uppercase flex items-center gap-3">
                    <i class="fas fa-play-circle text-green-500"></i> Video Profil
                </h3>
                <span class="text-[10px] font-bold py-1 px-3 bg-blue-900 rounded-full border border-blue-700">SDN 2 MARGASARI</span>
            </div>
            
            <div class="relative group">
                <div class="absolute -inset-2 bg-gradient-to-r from-blue-600 to-green-500 rounded-2xl blur opacity-20 group-hover:opacity-40 transition duration-500"></div>
                <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                    <iframe class="w-full aspect-video scale-[1.01]" 
                            src="https://www.youtube.com/embed/XXXXXXX" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen></iframe>
                </div>
            </div>
            <p class="mt-6 text-blue-300 text-sm italic leading-relaxed">
                "Jelajahi keunggulan fasilitas dan lingkungan belajar yang asri di SDN 2 Margasari melalui tayangan visual resmi kami."
            </p>
        </div>

        <div>
            <div class="flex items-center justify-between mb-8 border-b border-blue-800 pb-4">
                <h3 class="text-2xl font-black tracking-tighter uppercase flex items-center gap-3 text-yellow-400">
                    <i class="fas fa-medal"></i> Prestasi Terbaru
                </h3>
                <div class="flex gap-2">
                    <button class="prev-p w-8 h-8 flex items-center justify-center bg-blue-800/50 rounded-lg hover:bg-green-500 transition-all border border-blue-700"><i class="fas fa-chevron-left text-xs"></i></button>
                    <button class="next-p w-8 h-8 flex items-center justify-center bg-blue-800/50 rounded-lg hover:bg-green-500 transition-all border border-blue-700"><i class="fas fa-chevron-right text-xs"></i></button>
                </div>
            </div>

            <div class="swiper prestasiSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-white/5 backdrop-blur-sm p-8 rounded-2xl border border-white/10 hover:border-yellow-400/50 transition-all duration-300 group/item">
                        <div class="w-14 h-14 bg-yellow-400/20 rounded-2xl flex items-center justify-center mb-6 group-hover/item:scale-110 transition duration-300">
                            <i class="fas fa-trophy text-yellow-400 text-3xl"></i>
                        </div>
                        <h4 class="font-bold text-xl mb-2">Juara 1 Lomba Catur</h4>
                        <p class="text-sm text-blue-300 leading-relaxed mb-4">Mewakili sekolah dalam ajang bergengsi O2SN Tingkat Kabupaten Semarang 2025.</p>
                        <span class="text-[10px] font-black uppercase tracking-[0.2em] py-1 px-3 bg-green-500/20 text-green-400 rounded-md">Tingkat Kabupaten</span>
                    </div>

                    <div class="swiper-slide bg-white/5 backdrop-blur-sm p-8 rounded-2xl border border-white/10 hover:border-blue-400/50 transition-all duration-300 group/item">
                        <div class="w-14 h-14 bg-blue-400/20 rounded-2xl flex items-center justify-center mb-6 group-hover/item:scale-110 transition duration-300">
                            <i class="fas fa-award text-blue-400 text-3xl"></i>
                        </div>
                        <h4 class="font-bold text-xl mb-2">Juara 2 Lomba Pidato</h4>
                        <p class="text-sm text-blue-300 leading-relaxed mb-4">Keberhasilan dalam lomba Literasi dan Seni tingkat Kecamatan Margasari.</p>
                        <span class="text-[10px] font-black uppercase tracking-[0.2em] py-1 px-3 bg-blue-500/20 text-blue-400 rounded-md">Tingkat Kecamatan</span>
                    </div>

                    <div class="swiper-slide bg-white/5 backdrop-blur-sm p-8 rounded-2xl border border-white/10 hover:border-orange-400/50 transition-all duration-300 group/item">
                        <div class="w-14 h-14 bg-orange-400/20 rounded-2xl flex items-center justify-center mb-6 group-hover/item:scale-110 transition duration-300">
                            <i class="fas fa-star text-orange-400 text-3xl"></i>
                        </div>
                        <h4 class="font-bold text-xl mb-2">Terbaik 3 Adiwiyata</h4>
                        <p class="text-sm text-blue-300 leading-relaxed mb-4">Penghargaan sekolah sehat dan ramah lingkungan tingkat Kabupaten.</p>
                        <span class="text-[10px] font-black uppercase tracking-[0.2em] py-1 px-3 bg-orange-500/20 text-orange-400 rounded-md">Penghargaan</span>
                    </div>
                </div>
            </div>

            <div class="mt-10 grid grid-cols-3 gap-4 border-t border-blue-900 pt-8">
                <div class="text-center">
                    <p class="text-2xl font-black text-green-500">25+</p>
                    <p class="text-[9px] uppercase tracking-widest text-blue-300">Medali Emas</p>
                </div>
                <div class="text-center border-x border-blue-900 px-4">
                    <p class="text-2xl font-black text-yellow-400">12</p>
                    <p class="text-[9px] uppercase tracking-widest text-blue-300">Piala Nasional</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-black text-blue-400">100+</p>
                    <p class="text-[9px] uppercase tracking-widest text-blue-300">Siswa Berbakat</p>
                </div>
            </div>
        </div>
    </div>
</section>