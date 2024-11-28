@extends('layouts.app')

@section('content')
<section class="relative bg-cover bg-center text-white flex items-center justify-center bg-primary-dark min-h-[80vh]" 
    style="background-image: url('{{ asset('images/struktur-bg.jpg') }}');" 
    data-aos="fade-zoom-in" data-aos-duration="1200">
    <!-- Overlay -->
    <div class="absolute inset-0"></div>

    <!-- Content -->
    <div class="relative z-10 w-full mb-36">
        <div class="container mx-auto text-start px-8 md:px-16 lg:px-36">
            <h1 class="text-3xl md:text-5xl font-bold mb-4 italic" data-aos="fade-down" data-aos-delay="300">
                TENTANG SITE
            </h1>
        </div>
        
        <nav class="flex lg:px-36 px-8" aria-label="Breadcrumb" data-aos="fade-right" data-aos-delay="500">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 1 1 1-1h2a1 1 0 1 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <a href="#" class="ms-1 text-sm font-medium text-white md:ms-2">Kontak</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ms-1 text-sm font-medium text-white md:ms-2">Tentang Site</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
</section>

<!-- Video Section with Text Gap -->
<div class="relative z-20 max-w-screen-xl mx-auto bg-white mb-36 -mt-60 rounded-lg">
    <div class="container mx-auto px-4 lg:px-0">
        <!-- Video Section -->
        <div class="w-full">
            <div class="relative aspect-w-16 aspect-h-9" data-aos="zoom-in" data-aos-delay="300">
                <video autoplay muted loop class="w-full h-full rounded-t-lg">
                    <source src="{{ asset('vidio/vidio.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>

        <!-- Responsive Text Sections -->
        <div class="flex flex-col lg:flex-row justify-between p-6 space-y-6 lg:space-y-0">
            <div class="text-center flex-1 mx-4" data-aos="fade-up" data-aos-delay="400">
                <p class="text-black">
                    The area of ​​the SBP Mining Business License is 2 18.21 Ha. Located in Pusukuli village, Tapunggea sub-district, Molowe District, North Konawe Regency, Southeast Sulawesi province..
                </p>
            </div>

            <div class="text-center flex-1 mx-4" data-aos="fade-up" data-aos-delay="600">
                <p class="text-black">
                    The PT. Sumber Bumi Putera site is 128KM from Kendari or less, dx3 takes around 3 hours by land.
                </p>
            </div>

            <div class="text-center flex-1 mx-4" data-aos="fade-up" data-aos-delay="800">
                <p class="text-black">
                    PT.Sumber Bumi Putera hauling road distance from PIT to stockpile is 3.5 KM, distance from PIT to Cinta Jaya jetty is 9.5 KM
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
