@extends('layouts.app')

@section('isi_konten')
    {{-- Section 0: Welcome / Hero Section --}}
    {{-- Menambahkan section welcome sebagai pembuka halaman utama --}}
    @include('home-sections.welcome')

    {{-- Section 1: Sambutan Kepala Sekolah --}}
    @include('home-sections.sambutan')

    {{-- Section 2: Kabar Terkini & Kalender --}}
    @include('home-sections.berita-kalender')

    {{-- Section 3: Artikel & Mading --}}
    @include('home-sections.artikel-mading')

    {{-- Section 4: Video Profil & Prestasi (Bisa Digeser) --}}
    @include('home-sections.video-prestasi')
@endsection

@push('styles')
{{-- Menambahkan CDN Swiper CSS jika belum ada di layouts.app --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
    /* Custom style untuk navigasi swiper agar lebih cantik */
    .button-next, .button-prev {
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .button-next:hover, .button-prev:hover {
        transform: scale(1.1);
    }
</style>
@endpush

@push('scripts')
{{-- Menambahkan CDN Swiper JS --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  // Inisialisasi Swiper untuk fitur geser prestasi
  document.addEventListener('DOMContentLoaded', function () {
    // Pastikan element .mySwiper ada sebelum inisialisasi
    if (document.querySelector('.mySwiper')) {
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 25,
        loop: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: ".button-next",
          prevEl: ".button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          640: { slidesPerView: 1 },
          768: { slidesPerView: 2 },
          1024: { slidesPerView: 3 }, // Tambahan untuk layar besar
        }
      });
    }
  });
</script>
@endpush