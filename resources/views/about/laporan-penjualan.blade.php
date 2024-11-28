@extends('layouts.app')

@section('content')
<section class="relative bg-cover bg-center h-[300px] md:h-[400px] text-white flex items-center justify-center bg-primary-dark" style="background-image: url('{{ asset('images/struktur-bg.jpg') }}');">
  <!-- Overlay -->
  <div class="absolute inset-0 "></div>

  <!-- Content -->
  <div class="relative z-10 w-full">
      <div class="container mx-auto text-staart px-8 md:px-16 lg:px-36">
          <h1 class="text-3xl md:text-5xl font-bold mb-4 italic text-white" data-aos="fade-down">LAPORAN PENJUALAN</h1>
      </div>

      <!-- Nav with animation -->
      <nav class="flex lg:px-36 px-8" aria-label="Breadcrumb" data-aos="fade-up">
          <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
              <li class="inline-flex items-center">
                  <a href="/" class="inline-flex items-center text-sm font-medium text-white dark:text-white hover-line hover:text-green-400">
                      Home
                  </a>
              </li>
              <li>
                  <div class="flex items-center">
                      <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                      </svg>
                      <a href="#" class="ms-1 text-sm font-medium text-white md:ms-2 dark:text-white hover-line hover:text-green-400">Tentang Kami</a>
                  </div>
              </li>
              <li aria-current="page">
                  <div class="flex items-center">
                      <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                      </svg>
                      <span class="ms-1 text-sm font-medium text-white md:ms-2 dark:text-white">Laporan Penjualan</span>
                  </div>
              </li>
          </ol>
      </nav>
  </div>
</section>

<!-- Content Section -->
<section class="max-w-screen-xl mx-auto py-8 px-4 md:px-8">
  <!-- Judul -->
  <div class="text-start mb-16">
      <h2 class="text-3xl font-bold dark:text-black mb-4" data-aos="fade-up">Laporan Penjualan PT Sumber Bumi Putera</h2>
  </div>

  <!-- Konten Penjelasan dan Gambar -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
      <!-- Teks -->
      <div>
          <p class="text-lg leading-relaxed mb-4 font-base" data-aos="fade-right">
              Dari rentang waktu 2020 sampai dengan tahun 2024, PT. Sumber Bumi Putera telah melakukan penjualan bijih nikel dengan total <b>1,526,308 WMT</b>.
          </p>
          <!-- Data Penjualan -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12 text-center">
              <div data-aos="flip-left">
                  <img src="{{ asset('images/kadar1.svg') }}" alt="Data Penjualan 1" class="w-36 h-36 mx-auto hover:scale-105 transition-transform duration-300 ease-in-out">
                  <p class="mt-2 text-sm font-bold">KADAR NIKEL 1,8 % UP</p>
                  <p class="mt-2 text-sm font-sm">kadar tertinggi yang kami jual ke pabrik</p>
              </div>
              <div data-aos="flip-up">
                  <img src="{{ asset('images/kadar2.svg') }}" alt="Data Penjualan 2" class="w-28 h-28 mx-auto mt-8 hover:scale-105 transition-transform duration-300 ease-in-out">
                  <p class="mt-2 text-sm font-bold">KADAR NIKEL 1,7 % UP</p>
                  <p class="mt-2 text-sm font-sm">kadar rata-rata yang kami jual ke pabrik</p>
              </div>
              <div data-aos="flip-right">
                  <img src="{{ asset('images/kadar3.svg') }}" alt="Data Penjualan 3" class="w-20 h-20 mx-auto mt-16 hover:scale-105 transition-transform duration-300 ease-in-out">
                  <p class="mt-2 text-sm font-bold">KADAR NIKEL 1,6 % UP</p>
                  <p class="mt-2 text-sm font-sm">kadar terendah yang kami jual ke pabrik</p>
              </div>
          </div>
      </div>

      <!-- Gambar -->
      <div data-aos="zoom-in">
          <img src="{{ asset('images/image6.jpg') }}" alt="Gambar Penjualan" class="w-full h-auto object-cover rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
      </div>
  </div>

  <!-- Diagram -->
  <div class="lg:mb-16">
      <h3 class="text-center text-xl lg:text-4xl font-bold mb-6" data-aos="fade-up">DIAGRAM HASIL PENJUALAN DARI TAHUN 2020-2024</h3>
      <div class="w-full" data-aos="fade-in">
          <img src="{{ asset('images/diagramm.jpg') }}" alt="Diagram Penjualan" class="mx-auto rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
      </div>
  </div>
</section>

@endsection
