@extends('layouts.app')

@section('content')
<section class="relative bg-cover bg-center h-[300px] md:h-[400px] text-white flex items-center justify-center bg-primary-dark"
    style="background-image: url('{{ asset('images/struktur-bg.jpg') }}');" 
    data-aos="fade-in">
    <!-- Overlay -->
    <div class="absolute inset-0"></div>

    <!-- Content -->
    <div class="relative z-10 w-full" data-aos="fade-down" data-aos-duration="1200" data-aos-once="true">
        <div class="container mx-auto text-staart px-8 md:px-16 lg:px-36">
            <h1 class="text-3xl md:text-5xl font-bold mb-4 italic">TENTANG KAMI</h1>
        </div>
        <nav class="flex lg:px-36 px-8" aria-label="Breadcrumb">
          <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
              <a href="/" class="inline-flex items-center text-sm font-medium text-white dark:text-white hover-line hover:text-green-400" data-aos="fade-right">
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
                <span class="ms-1 text-sm font-medium text-white md:ms-2 dark:text-white">Tentang Kami</span>
              </div>
            </li>
          </ol>
        </nav>
    </div>
</section>

<section id="about-us" class="flex flex-col md:flex-row items-center justify-between py-8 px-4 md:px-8 max-w-screen-xl mx-auto lg:mb-36" data-aos-once="true">
    <!-- Text Content -->
    <div class="w-full md:w-1/2 text-left md:text-left mb-8 md:mb-0" data-aos="fade-right">
        <h2 class="text-3xl font-bold dark:text-black mb-4">
            Tentang Kami PT Sumber <br /> Bumi Putera
        </h2>
        <p class="text-lg mb-6">
            PT Sumber Bumi Putera  (PT SBP) adalah sebuah perusahaan yang <br /> bergerak di industri pertambangan Bijih Nikel dengan Nomor Izin <br /> Usaha pertambangan operasi Produksi (IUP OP) 259/DPM-PTSP/ <br /> III/2018 yang didirikan pada tahun 2018. Lokasi tambang PT SBP <br /> berada di Blok Mandiodo, tepatnya di Desa Puusili, Kel. Tappunggaya,<br /> Kec. Molowale, Provinsi Sulawesi Tenggara. <br/><br/> 
            PT Sumber Bumi Putera berdiri dengan komitmen kuat terhadap <br/> kualitas dan keberlanjutan...
        </p>
    </div>

    <!-- Image Content -->
    <div class="w-full md:w-1/2" style="min-height: 300px;" data-aos="zoom-in-up">
      <img
          src="{{ asset('images/tentangkami.svg') }}"
          alt="Ilustrasi tentang PT Sumber Bumi Putera"
          class="w-full h-auto object-cover rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out"
      />

        <p class="mt-4 text-center text-sm md:text-base text-gray-600">
            Sulawesi Tenggara terkenal sebagai daerah penghasil Bijih Nikel terbesar di Indonesia, dan Indonesia merupakan negara dengan cadangan Nikel terbesar di Dunia (Goostats.id, 2024).
        </p>
    </div>
</section>

@endsection
