@extends('layouts.app')

@section('content')
<section class="relative bg-cover bg-center h-[300px] md:h-[400px] text-white flex items-center justify-center bg-primary-dark" style="background-image: url('{{ asset('images/struktur-bg.jpg') }}');" data-aos="fade-in">
  <!-- Overlay -->
  <div class="absolute inset-0 "></div>

  <!-- Content -->
  <div class="relative z-10 w-full" data-aos="fade-up" data-aos-duration="1200">
      <div class="container mx-auto text-staart px-8 md:px-16 lg:px-36">
          <h1 class="text-3xl md:text-5xl font-bold mb-4 italic">SEJARAH SINGKAT</h1>
      </div>
      <nav class="flex lg:px-36 px-8" aria-label="Breadcrumb">
          <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse" data-aos="fade-down">
              <li class="inline-flex items-center">
                  <a href="/" class="inline-flex items-center text-sm font-medium text-white dark:text-white hover-line hover:text-green-400">Home</a>
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
                      <span class="ms-1 text-sm font-medium text-white md:ms-2 dark:text-white">Sejarah Singkat</span>
                  </div>
              </li>
          </ol>
      </nav>
  </div>
</section>

<section id="sejarah" class="py-8 px-4 md:px-8 max-w-screen-xl mx-auto">
  <!-- Sejarah Singkat -->
  <div class="text-left mb-8" data-aos="fade-right">
      <h2 class="text-3xl font-bold dark:text-black mb-4">Sejarah Singkat</h2>
  </div>

  <!-- Gambar Sejarah -->
  <div class="w-full mb-16" data-aos="zoom-in">
      <img src="{{ asset('images/sejarah.svg') }}" alt="Sejarah" class="w-full h-auto object-cover rounded-lg hover:scale-105 transition-transform duration-300 ease-in-out">
  </div>

  <!-- Teks dan Pembatas Baris -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 lg:mb-36">
      <!-- Teks 1 dengan garis -->
      <div class="flex items-center justify-center" data-aos="fade-up">
          <p class="lg:text-center md:text-start text-sm md:text-base mx-4">SBP didirikan pada tahun 2018, dan memulai eksplorasi pada tahun
              2019. Dan mulai melakukan produksi pada tahun 2020 sampai dengan
              sekarang</p>
          <div class="border-l-2 h-36 mx-4 border-green-300"></div>
      </div>

      <!-- Teks 2 dengan garis -->
      <div class="flex items-center justify-center" data-aos="fade-up" data-aos-delay="200">
          <p class="lg:text-center md:text-start text-sm md:text-base mx-4">PT. Sumber Bumi Putera telah memiliki
              izin usaha pertambangan / IUP dengan
              nomor 259/DPM-PTSP/III/2018.
              Dan memiliki luas lahan IUP sebesar
              218,21 Ha.</p>
          <div class="border-l-2 h-36 mx-4 border-green-300"></div>
      </div>

      <!-- Teks 3 dengan garis -->
      <div class="flex items-center justify-center" data-aos="fade-up" data-aos-delay="400">
          <p class="lg:text-center md:text-start text-sm md:text-base mx-4">PT. Sumber Bumi Putera
              Sudah terdaftar di DIRJEN Pajak
              Dengan Nomor Pokok Wajib Pajak
              83.802.002.2-811.000</p>
          <div class="border-l-2 h-36 mx-4 border-green-300"></div>
      </div>

      <!-- Teks 4 tanpa garis pembatas -->
      <div class="flex items-center justify-center" data-aos="fade-up" data-aos-delay="600">
          <p class="lg:text-center md:text-start text-sm md:text-base mx-4">PT. Sumber Bumi Putera
              Sudah Terdaftar di BKPM dengan Nomor Izin Berusaha 912010082003</p>
      </div>
  </div>
</section>
@endsection
