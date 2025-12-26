<footer class="bg-blue-900 text-white pt-10 pb-6">
    <div class="container mx-auto px-6 md:px-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-8">
            
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9c/Logo_Tut_Wuri_Handayani.png" class="w-10" alt="Logo">
                    <div>
                        <h2 class="text-lg font-bold leading-tight">SDN-2 JAMBU</h2>
                        <p class="text-[10px] text-blue-300 uppercase tracking-tighter">Sekolah Penggerak</p>
                    </div>
                </div>
                <p class="text-gray-300 text-xs leading-relaxed mb-5 italic">
                    Mewujudkan generasi cerdas, berkarakter, dan bertaqwa melalui pendidikan berkualitas di lingkungan yang nyaman.
                </p>
                <div class="flex gap-3">
                    <a href="#" class="w-8 h-8 bg-blue-800 rounded-lg flex items-center justify-center hover:bg-green-500 transition text-sm shadow-sm"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="w-8 h-8 bg-blue-800 rounded-lg flex items-center justify-center hover:bg-green-500 transition text-sm shadow-sm"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="w-8 h-8 bg-blue-800 rounded-lg flex items-center justify-center hover:bg-green-500 transition text-sm shadow-sm"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div>
                <h3 class="text-sm font-bold mb-4 border-b border-green-500 pb-1 inline-block uppercase tracking-wider">Tautan</h3>
                <ul class="space-y-2 text-xs text-gray-300">
                    <li><a href="{{ url('/profil') }}" class="hover:text-green-400 transition flex items-center gap-2"><i class="fas fa-school text-[8px]"></i> Profil Sekolah</a></li>
                    <li><a href="{{ url('/visi-misi') }}" class="hover:text-green-400 transition flex items-center gap-2"><i class="fas fa-bullseye text-[8px]"></i> Visi & Misi</a></li>
                    <li><a href="{{ url('/guru') }}" class="hover:text-green-400 transition flex items-center gap-2"><i class="fas fa-user-tie text-[8px]"></i> Data Guru</a></li>
                    <li><a href="{{ url('/berita') }}" class="hover:text-green-400 transition flex items-center gap-2"><i class="fas fa-newspaper text-[8px]"></i> Berita Terbaru</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-sm font-bold mb-4 border-b border-green-500 pb-1 inline-block uppercase tracking-wider">Kontak</h3>
                <div class="space-y-2 text-[11px] text-gray-300">
                    <div class="flex gap-3">
                        <i class="fas fa-map-marker-alt text-green-500 flex-none"></i>
                        <p>Jl. Jambu No. 2, Kec. Mlonggo, Kab. Jepara</p>
                    </div>
                    <div class="flex gap-3">
                        <i class="fas fa-phone-alt text-green-500 flex-none"></i>
                        <p>(0291) 123456</p>
                    </div>
                    <div class="flex gap-3">
                        <i class="fas fa-envelope text-green-500 flex-none"></i>
                        <p>admin@sdn2jambu.sch.id</p>
                    </div>
                </div>
                <div class="mt-4 rounded-xl overflow-hidden h-24 bg-gray-700 border border-blue-800">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15849.569424687255!2d110.6953265!3d-6.721867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e711f1f26a57e3b%3A0xc3b092248557e3b!2sJambu%2C%20Mlonggo%2C%20Jepara%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1710000000000!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

        <div class="border-t border-blue-800/50 pt-6 flex flex-col md:flex-row justify-between items-center text-[10px] text-blue-400 uppercase tracking-widest">
            <p>© 2025 SDN-2 JAMBU. All Rights Reserved.</p>
            <div class="mt-2 md:mt-0 flex gap-4 italic capitalize">
                <span class="opacity-50 text-blue-200 font-medium tracking-normal">Dikelola oleh Tim IT SDN-2 JAMBU</span>
            </div>
        </div>
    </div>
</footer>