@extends('layouts.app')

@section('content')
<section class="relative bg-cover bg-center h-[300px] md:h-[400px] text-white flex items-center justify-center bg-primary-dark" style="background-image: url('{{ asset('images/struktur-bg.jpg') }}');" data-aos="fade-in">
  <!-- Overlay -->
  <div class="absolute inset-0 "></div>

  <!-- Content -->
  <div class="relative z-10 w-full" data-aos="fade-down" data-aos-duration="1200">
      <div class="container mx-auto text-staart px-8 md:px-16 lg:px-36">
          <h1 class="text-3xl md:text-5xl font-bold mb-4 italic">VISI & MISI</h1>
      </div>
      <nav class="flex lg:px-36 px-8" aria-label="Breadcrumb">
          <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse" data-aos="fade-up">
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
                      <span class="ms-1 text-sm font-medium text-white md:ms-2 dark:text-white">Visi & Misi</span>
                  </div>
              </li>
          </ol>
      </nav>
  </div>
</section>

<section id="visi-misi" class="max-w-screen-xl mx-auto py-8 px-4 md:px-8">
  <!-- Judul -->
  <div class="text-start mb-8" data-aos="fade-right">
      <h2 class="text-3xl font-bold dark:text-black mb-4">Visi & Misi PT Sumber Bumi Putera</h2>
  </div>

  <!-- Konten Visi -->
  <div class="flex flex-col md:flex-row items-start mb-6" data-aos="fade-up">
      <!-- Ikon Visi -->
      <div class="w-12 h-12 flex-shrink-0">
          <img src="{{ asset('images/visi.svg') }}" alt="Icon Visi" class="w-full h-full object-contain" />
      </div>
      <!-- Teks Visi -->
      <div class="ml-4">
          <h3 class="text-xl font-semibold mb-2">Visi</h3>
          <p class="text-base">
              Menjadi perusahaan pertambangan nikel terkemuka di Indonesia yang berkontribusi signifikan terhadap pembangunan ekonomi nasional dan kesejahteraan masyarakat.
          </p>
      </div>
  </div>

  <!-- Konten Misi -->
  <div class="flex flex-col md:flex-row items-start lg:mb-16 md:-mb-4" data-aos="fade-up" data-aos-delay="200">
      <!-- Ikon Misi -->
      <div class="w-12 h-12 flex-shrink-0">
          <img src="{{ asset('images/misi.svg') }}" alt="Icon Misi" class="w-full h-full object-contain" />
      </div>
      <!-- Teks Misi -->
      <div class="ml-4">
          <h3 class="text-xl font-semibold mb-2">Misi</h3>
          <ul class="list-decimal ml-5 space-y-2">
              <li>Menghasilkan produk nikel dengan kualitas yang terbaik melalui proses pertambangan yang bertanggung jawab dan efisien.</li>
              <li>Mengembangkan dan menerapkan teknologi inovatif untuk mendukung operasional yang berkelanjutan.</li>
              <li>Menciptakan lapangan kerja dan memberdayakan masyarakat sekitar daerah operasional kami.</li>
              <li>Menjaga lingkungan sekitar.</li>
          </ul>
      </div>
  </div>
</section>

@endsection
