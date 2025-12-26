<section id="sambutan" class="py-24 bg-white px-6 md:px-20 overflow-hidden">
    <div class="container mx-auto grid md:grid-cols-2 gap-16 items-center">
        <div class="relative flex justify-center md:justify-start">
            <div class="relative w-full max-w-[380px] group">
                <div class="absolute -bottom-6 -right-6 w-full h-full bg-green-100 rounded-[2rem] -z-10 group-hover:-bottom-4 group-hover:-right-4 transition-all duration-500"></div>
                <div class="absolute -top-6 -left-6 w-24 h-24 bg-blue-50 rounded-full -z-10 opacity-60"></div>
                
                <div class="overflow-hidden rounded-[2rem] shadow-2xl border-4 border-white">
                    <img src="{{ asset('/images/kepala-sekolah.jpg') }}" 
                         alt="Kepala Sekolah SDN-2 JAMBU" 
                         class="w-full h-[520px] object-cover object-top transform group-hover:scale-105 transition duration-700 bg-slate-100">
                </div>
                
                <div class="absolute bottom-6 left-4 right-4 bg-blue-900/95 backdrop-blur-md text-white p-5 rounded-2xl shadow-2xl border-l-4 border-green-500 transform translate-y-2 group-hover:translate-y-0 transition duration-500">
                    <p class="font-black text-xl leading-tight uppercase tracking-tight">Muhammad Fajar, M.Kom</p>
                    <div class="flex items-center gap-2 mt-1">
                        <span class="w-4 h-[2px] bg-green-400"></span>
                        <p class="text-[11px] opacity-90 italic font-medium uppercase tracking-wider text-green-400">Kepala Sekolah SDN-2 Margasari</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative">
            <div class="absolute -top-10 -left-6 text-slate-100 text-8xl font-serif -z-10 select-none">“</div>
            
            <div class="inline-block px-4 py-1.5 bg-green-50 rounded-full mb-4">
                <h2 class="text-green-600 font-black text-xs uppercase tracking-[0.2em] flex items-center gap-2">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                    </span>
                    Sambutan Hangat
                </h2>
            </div>

            <h3 class="text-4xl md:text-5xl font-black text-slate-900 mb-8 leading-[1.15]">
                Membangun Generasi <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-900 to-blue-600">Cerdas Berkarakter</span>
            </h3>

            <div class="space-y-4 text-gray-600 leading-relaxed text-lg italic">
                <p>
                    "Assalamu'alaikum Wr. Wb. Selamat datang di portal resmi <span class="font-bold text-blue-900">SDN-2 Margasari</span>. Kami berkomitmen untuk menyediakan lingkungan belajar yang inovatif dan inspiratif..."
                </p>
                <p class="text-base not-italic text-gray-500">
                    Melalui sinergi antara guru, orang tua, dan teknologi, kami berupaya mencetak lulusan yang siap menghadapi tantangan zaman dengan akhlakul karimah.
                </p>
            </div>

            <div class="mt-10 flex items-center gap-6">
                <button class="group flex items-center gap-3 bg-blue-900 text-white font-bold py-4 px-8 rounded-2xl hover:bg-green-600 transition-all duration-300 shadow-xl shadow-blue-900/20 hover:shadow-green-600/20">
                    Selengkapnya
                    <i class="fas fa-arrow-right text-sm group-hover:translate-x-1 transition"></i>
                </button>
                
                <div class="hidden sm:flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full border-2 border-slate-100 flex items-center justify-center text-blue-900">
                        <i class="fas fa-play text-[10px]"></i>
                    </div>
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Lihat Video</span>
                </div>
            </div>
        </div>
    </div>
</section>