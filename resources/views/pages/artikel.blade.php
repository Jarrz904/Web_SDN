@extends('layouts.app')

@section('isi_konten')
<section class="py-24 bg-white overflow-hidden">
    <div class="container mx-auto px-6 md:px-20 text-center">
        <div class="inline-block px-4 py-1.5 bg-green-50 rounded-full mb-6">
            <span class="text-green-600 font-black text-xs uppercase tracking-[0.3em] flex items-center gap-2">
                <i class="fas fa-book-reader"></i> E-Library SDN 3 Lamuk
            </span>
        </div>
        <h1 class="text-5xl md:text-6xl font-black text-slate-900 uppercase tracking-tighter mb-6">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-900 to-green-600">Perpustakaan Digital</span>
        </h1>
        <p class="text-gray-500 text-lg italic max-w-2xl mx-auto">Ruang baca interaktif untuk siswa cerdas. Pilih bukumu, klik, dan mulailah petualangan membaca sekarang juga!</p>
        <div class="w-24 h-1.5 bg-blue-900 mx-auto mt-8 rounded-full"></div>
    </div>
</section>

<section class="pb-20 bg-slate-50 relative">
    <div class="container mx-auto px-6 md:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @php
                $books = [
                    [
                        'kategori' => 'Fabel & Dongeng',
                        'penulis' => 'Kak Budi',
                        'judul' => 'Kisah Si Kancil dan Buaya yang Menipu',
                        'desc' => 'Cerita klasik tentang kecerdikan Kancil saat ingin menyeberangi sungai yang dipenuhi buaya lapar.',
                        'img' => 'https://i.pinimg.com/originals/76/2c/04/762c0491d60fa12ee0531991d247c23f.jpg',
                        'isi_cerita' => '
                            <p class="mb-4">Pada suatu hari yang cerah di pinggir hutan, Si Kancil sedang berjalan-jalan mencari makan. Perutnya berbunyi keroncongan. Di seberang sungai yang lebar, ia melihat kebun mentimun yang sangat segar dan lezat.</p>
                            <p class="mb-4">Namun, sungai itu dipenuhi oleh kawanan buaya yang ganas. Kancil pun berpikir keras. Ia mendapat ide yang cemerlang. Ia berjalan ke tepi sungai dan berteriak, "Hai Buaya! Keluarlah! Aku membawa pesan dari Raja Hutan!"</p>
                            <p class="mb-4">Seekor buaya besar muncul. "Ada apa, Kancil? Jangan main-main denganku," kata Buaya. Kancil menjawab, "Raja Hutan memintaku menghitung jumlah buaya di sungai ini untuk diberikan hadiah daging segar. Berbarislah kalian sampai ke seberang agar aku bisa menghitungnya!"</p>
                            <p class="mb-4">Buaya yang serakah itu segera memanggil teman-temannya. Mereka berbaris rapi dari tepi sungai yang satu ke tepi seberangnya, menyerupai sebuah jembatan. Kancil pun segera melompat ke punggung buaya pertama.</p>
                            <p class="mb-4">"Satu... dua... tiga..." Kancil terus melompat dari satu punggung buaya ke punggung lainnya sambil menghitung, hingga akhirnya ia tiba di seberang sungai dengan selamat. "Terima kasih, Buaya! Kalian telah membantuku menyeberang," tawa Kancil sambil berlari menuju kebun mentimun.</p>
                            <p class="font-bold mt-6 text-green-600">Pesan Moral: Gunakanlah kecerdasanmu untuk menyelesaikan masalah yang sulit, bukan dengan kekuatan semata.</p>
                        '
                    ],
                    [
                        'kategori' => 'Sains Anak',
                        'penulis' => 'Guru IPA SDN 2',
                        'judul' => 'Petualangan Seru di Tata Surya Kita',
                        'desc' => 'Yuk, terbang menggunakan roket imajinasi untuk mengenal planet-planet yang ada di luar angkasa!',
                        'img' => 'https://images.unsplash.com/photo-1614730321146-b6fa6a46bcb4?q=80&w=600',
                        'isi_cerita' => '
                            <p class="mb-4">Tahukah kamu di mana kita tinggal? Kita tinggal di sebuah planet yang bernama Bumi. Bumi adalah salah satu planet yang berputar mengelilingi Matahari. Keluarga besar ini disebut dengan Tata Surya.</p>
                            <p class="mb-4">Matahari adalah bintang yang sangat besar dan sangat panas. Tanpa Matahari, Bumi kita akan gelap dan sangat dingin sehingga tidak ada makhluk hidup yang bisa bertahan.</p>
                            <p class="mb-4">Di Tata Surya kita, terdapat 8 planet yang memiliki keunikan masing-masing. Planet pertama yang paling dekat dengan Matahari adalah Merkurius, planet terkecil yang bergerak sangat cepat. Lalu ada Venus, planet yang paling terang dan sangat panas.</p>
                            <p class="mb-4">Setelah Venus, barulah planet kita, Bumi. Bumi terlihat berwarna biru dari luar angkasa karena sebagian besar permukaannya ditutupi oleh air laut. Di sebelahnya ada planet Mars yang berwarna merah karena tanahnya mengandung banyak besi.</p>
                            <p class="mb-4">Selanjutnya ada planet-planet raksasa yang terbuat dari gas. Jupiter adalah planet yang paling besar. Saturnus adalah planet yang paling cantik karena memiliki cincin yang melingkarinya. Terakhir, ada Uranus dan Neptunus, dua planet kembar yang sangat dingin karena letaknya paling jauh dari Matahari.</p>
                            <p class="font-bold mt-6 text-green-600">Fakta Unik: Meskipun siang hari sangat terang, luar angkasa di luar Bumi sebenarnya selalu berwarna hitam dan gelap gulita!</p>
                        '
                    ],
                    [
                        'kategori' => 'Budi Pekerti',
                        'penulis' => 'Ibu Nisa',
                        'judul' => 'Pahlawan Cilik: Menjaga Kebersihan Sekolah',
                        'desc' => 'Cerita tentang Bima dan teman-temannya yang belajar bahwa pahlawan tidak harus memiliki kekuatan super.',
                        'img' => 'https://www.margasari.desa.id/wp-content/uploads/images/menjaga-kebersihan-dan-keamanan-area-sekolah-di-desa-margasari.webp',
                        'isi_cerita' => '
                            <p class="mb-4">Bel istirahat berbunyi. Anak-anak berhamburan keluar kelas. Bima, Rina, dan Doni duduk di bawah pohon rindang sambil memakan bekal mereka. Tiba-tiba, angin bertiup kencang, menerbangkan banyak plastik dan kertas bungkus makanan yang berserakan di halaman sekolah.</p>
                            <p class="mb-4">Bima menghela napas, "Lihatlah halaman sekolah kita, jadi kotor sekali." Doni mengangguk setuju, "Iya, banyak teman yang membuang sampah sembarangan padahal tong sampah ada di mana-mana."</p>
                            <p class="mb-4">Rina tiba-tiba berdiri. "Bagaimana kalau kita menjadi Pasukan Kebersihan? Kita kumpulkan sampah-sampah ini!" ucapnya dengan semangat. Awalnya Bima ragu, "Ah, itu kan tugas tukang kebun sekolah." Rina tersenyum, "Sekolah ini rumah kedua kita, Bima. Menjaganya adalah tugas kita semua."</p>
                            <p class="mb-4">Akhirnya mereka bertiga mulai memunguti sampah. Mereka memisahkan sampah plastik ke tong warna kuning dan sampah daun ke tong warna hijau. Melihat aksi mereka, beberapa anak kelas lain pun merasa malu dan akhirnya ikut membantu memungut sampah.</p>
                            <p class="mb-4">Dalam waktu singkat, halaman sekolah kembali bersih dan asri. Pak Guru yang melihat kejadian itu tersenyum bangga. "Kalian adalah pahlawan cilik sekolah ini," puji Pak Guru. Bima, Rina, dan Doni saling berpandangan dan tertawa bahagia.</p>
                            <p class="font-bold mt-6 text-green-600">Pesan Moral: Berbuat baik bisa dimulai dari hal kecil, seperti membuang sampah pada tempatnya.</p>
                        '
                    ],
                    [
                        'kategori' => 'Kesehatan',
                        'penulis' => 'Tim UKS',
                        'judul' => 'Misteri Gigi Berlubang Si Tino',
                        'desc' => 'Kenapa gigi Tino tiba-tiba terasa sangat sakit saat makan es krim? Mari cari tahu jawabannya!',
                        'img' => 'https://tse2.mm.bing.net/th/id/OIP.DSP4OTkJ947kf3kc3AL9fQHaE8?rs=1&pid=ImgDetMain&o=7&rm=3',
                        'isi_cerita' => '
                            <p class="mb-4">Tino sangat suka makan makanan yang manis. Setiap hari, ia membeli permen, cokelat, dan es krim manis sepulang sekolah. Ibunya selalu mengingatkan, "Tino, jangan lupa sikat gigi sebelum tidur ya, nanti gigimu rusak."</p>
                            <p class="mb-4">Tapi Tino sering mengabaikannya. "Ah, sikat gigi besok pagi saja," pikirnya sambil langsung tidur nyenyak. Di dalam mulut Tino, sisa-sisa cokelat menempel di sela-sela gigi. Malam itu, kuman-kuman jahat mulai berpesta pora memakan sisa manis tersebut.</p>
                            <p class="mb-4">Beberapa minggu kemudian, saat Tino sedang menggigit es krim cokelat kesukaannya di kantin sekolah, tiba-tiba... "Aduh! Gigiku sakit sekali!" teriak Tino sambil memegangi pipinya. Air matanya hampir menetes.</p>
                            <p class="mb-4">Ibu membawa Tino ke dokter gigi. Dokter memeriksa mulut Tino dan menemukan sebuah lubang hitam di gigi gerahamnya. "Ini karena sisa makanan manis yang tidak dibersihkan, kuman merusak lapisan gigimu, Tino," jelas Dokter sambil menambal gigi tersebut.</p>
                            <p class="mb-4">Sejak hari itu, Tino berjanji tidak akan malas menyikat gigi lagi. Tino menyikat gigi dua kali sehari: sesudah sarapan dan sebelum tidur di malam hari.</p>
                            <p class="font-bold mt-6 text-green-600">Ayo Diingat: Sikatlah gigimu dua kali sehari agar gigimu sehat, kuat, dan bebas dari kuman!</p>
                        '
                    ]
                ];
            @endphp

            @foreach($books as $index => $item)
            <div class="group bg-white rounded-[2.5rem] overflow-hidden border border-slate-200 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-4 flex flex-col">
                
                <div class="relative aspect-[3/4] overflow-hidden bg-slate-200">
                    <img src="{{ $item['img'] }}" alt="{{ $item['judul'] }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute top-6 left-6">
                        <span class="px-4 py-1.5 bg-blue-900/90 backdrop-blur-md text-white text-[10px] font-black uppercase tracking-widest rounded-xl shadow-lg border border-blue-800">
                            {{ $item['kategori'] }}
                        </span>
                    </div>
                </div>

                <div class="p-8 flex flex-col flex-grow">
                    <div class="flex items-center gap-3 text-slate-400 text-[10px] font-bold uppercase tracking-widest mb-4">
                        <i class="fas fa-user-edit text-green-500"></i> {{ $item['penulis'] }}
                    </div>
                    <h3 class="text-xl font-black text-slate-800 leading-tight mb-4 group-hover:text-blue-900 transition uppercase tracking-tight line-clamp-2">
                        {{ $item['judul'] }}
                    </h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-8 line-clamp-3 italic">
                        "{{ $item['desc'] }}"
                    </p>
                    
                    <div id="book-data-{{ $index }}" class="hidden">
                        <div class="book-title">{{ $item['judul'] }}</div>
                        <div class="book-author">{{ $item['penulis'] }}</div>
                        <div class="book-category">{{ $item['kategori'] }}</div>
                        <div class="book-content">{!! $item['isi_cerita'] !!}</div>
                        <div class="book-img">{{ $item['img'] }}</div>
                    </div>

                    <div class="mt-auto pt-6 border-t border-slate-100 flex justify-between items-center">
                        <button onclick="bukaBuku({{ $index }})" class="text-[10px] font-black uppercase tracking-[0.2em] text-blue-900 flex items-center gap-2 group/btn hover:text-green-600 transition">
                            Mulai Membaca <i class="fas fa-book-open group-hover/btn:translate-x-2 transition"></i>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<div id="reader-modal" class="fixed inset-0 z-50 hidden bg-slate-900/80 backdrop-blur-sm flex justify-center items-center opacity-0 transition-opacity duration-300">
    <div class="bg-white w-full max-w-4xl h-[90vh] md:h-[80vh] md:rounded-[3rem] shadow-2xl flex flex-col overflow-hidden relative transform scale-95 transition-transform duration-300" id="reader-box">
        
        <div class="bg-slate-50 px-6 py-4 md:px-10 md:py-6 border-b border-slate-200 flex justify-between items-center">
            <div>
                <span id="modal-category" class="text-[10px] font-black uppercase tracking-widest text-green-600 mb-1 block">Kategori</span>
                <h2 id="modal-title" class="text-xl md:text-2xl font-black text-slate-800 uppercase tracking-tight">Judul Buku</h2>
                <div class="text-xs text-slate-500 mt-1 font-medium italic">Oleh: <span id="modal-author">Penulis</span></div>
            </div>
            <button onclick="tutupBuku()" class="w-12 h-12 bg-white border border-slate-200 rounded-full flex items-center justify-center text-slate-400 hover:text-red-500 hover:bg-red-50 transition shadow-sm">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>

        <div class="flex-grow overflow-y-auto custom-scrollbar bg-white">
            <div class="max-w-3xl mx-auto px-6 py-10 md:py-14">
                <img id="modal-img" src="" class="w-full max-h-64 object-cover rounded-3xl mb-10 shadow-lg border border-slate-100">
                
                <div id="modal-content" class="prose prose-lg md:prose-xl prose-slate max-w-none text-slate-700 leading-relaxed text-justify">
                    </div>

                <div class="mt-16 text-center border-t border-dashed border-slate-200 pt-8">
                    <p class="text-sm text-slate-400 font-bold uppercase tracking-widest">--- Tamat ---</p>
                    <button onclick="tutupBuku()" class="mt-6 px-8 py-3 bg-blue-900 text-white rounded-full font-bold text-sm hover:bg-green-600 transition shadow-lg">
                        Tutup Buku
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function bukaBuku(index) {
        // Ambil data dari elemen tersembunyi berdasarkan index
        const dataBox = document.getElementById('book-data-' + index);
        const title = dataBox.querySelector('.book-title').innerText;
        const author = dataBox.querySelector('.book-author').innerText;
        const category = dataBox.querySelector('.book-category').innerText;
        const content = dataBox.querySelector('.book-content').innerHTML;
        const imgUrl = dataBox.querySelector('.book-img').innerText;

        // Masukkan data ke dalam Modal E-Reader
        document.getElementById('modal-title').innerText = title;
        document.getElementById('modal-author').innerText = author;
        document.getElementById('modal-category').innerText = category;
        document.getElementById('modal-content').innerHTML = content;
        document.getElementById('modal-img').src = imgUrl;

        // Tampilkan Modal dengan animasi
        const modal = document.getElementById('reader-modal');
        const box = document.getElementById('reader-box');
        
        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden'); // Kunci scroll halaman belakang
        
        // Trigger animasi fade & scale
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            box.classList.remove('scale-95');
            box.classList.add('scale-100');
        }, 10);
    }

    function tutupBuku() {
        const modal = document.getElementById('reader-modal');
        const box = document.getElementById('reader-box');

        // Animasi keluar
        modal.classList.add('opacity-0');
        box.classList.remove('scale-100');
        box.classList.add('scale-95');

        // Sembunyikan sepenuhnya setelah animasi selesai (300ms)
        setTimeout(() => {
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden'); // Buka kunci scroll
        }, 300);
    }
</script>

<style>
    .custom-scrollbar::-webkit-scrollbar { width: 8px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: #f8fafc; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
</style>

@endsection