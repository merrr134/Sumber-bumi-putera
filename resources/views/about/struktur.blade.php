@extends('layouts.app')

@section('content')
<section 
    class="relative bg-cover bg-center h-[300px] md:h-[400px] text-white flex items-center justify-center bg-primary-dark" 
    style="background-image: url('{{ asset('images/struktur-bg.jpg') }}');"
    data-aos="fade-in"
>
    <!-- Overlay -->
    <div class="absolute inset-0"></div>

    <!-- Content -->
    <div class="relative z-10 w-full">
        <!-- Judul Header -->
        <div class="container mx-auto text-start px-8 md:px-16 lg:px-36">
            <h1 
                class="text-3xl md:text-5xl font-bold mb-4 italic" 
                data-aos="fade-right" 
                data-aos-delay="200"
            >
                STRUKTUR ORGANISASI
            </h1>
        </div>

        <!-- Breadcrumb Navigation -->
        <nav 
            class="flex lg:px-36 px-8 mt-4" 
            aria-label="Breadcrumb"
            data-aos="fade-up"
            data-aos-delay="400"
        >
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <!-- Home -->
                <li class="inline-flex items-center">
                    <a 
                        href="/" 
                        class="inline-flex items-center text-sm font-medium text-white hover-line hover:text-green-400"
                    >
                        Home
                    </a>
                </li>

                <!-- Divider -->
                <li>
                    <div class="flex items-center">
                        <svg 
                            class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" 
                            aria-hidden="true" 
                            xmlns="http://www.w3.org/2000/svg" 
                            fill="none" 
                            viewBox="0 0 6 10"
                        >
                            <path 
                                stroke="currentColor" 
                                stroke-linecap="round" 
                                stroke-linejoin="round" 
                                stroke-width="2" 
                                d="m1 9 4-4-4-4"
                            />
                        </svg>
                        <a 
                            href="#" 
                            class="ms-1 text-sm font-medium text-white md:ms-2 hover-line hover:text-green-400"
                        >
                            Tentang Kami
                        </a>
                    </div>
                </li>

                <!-- Current Page -->
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg 
                            class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" 
                            aria-hidden="true" 
                            xmlns="http://www.w3.org/2000/svg" 
                            fill="none" 
                            viewBox="0 0 6 10"
                        >
                            <path 
                                stroke="currentColor" 
                                stroke-linecap="round" 
                                stroke-linejoin="round" 
                                stroke-width="2" 
                                d="m1 9 4-4-4-4"
                            />
                        </svg>
                        <span 
                            class="ms-1 text-sm font-medium text-white md:ms-2"
                        >
                            Struktur Organisasi
                        </span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
</section>
<section id="struktur" class="py-8 px-4 md:px-8 max-w-screen-xl mx-auto">
  <!-- Judul Struktur -->
  <div class="text-left mb-8">
      <h2 
          class="text-3xl font-bold dark:text-black mb-4" 
          data-aos="fade-right"
      >
          Struktur Organisasi
      </h2>
  </div>

  <!-- Gambar Struktur -->
  <div class="w-full mb-8" data-aos="zoom-in">
      <img 
          src="{{ asset('images/struktur.svg') }}" 
          alt="Struktur Organisasi" 
          class="w-full h-auto object-cover rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out"
      />
  </div>
</section>


@endsection
