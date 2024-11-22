@extends('layouts.app')

@section('content')
<section class="relative bg-cover bg-center text-black flex items-center justify-center bg-primary-light min-h-[80vh]" style="background-image: url('{{ asset('images/struktur-bg.jpg') }}');">
    <!-- Overlay -->
    <div class="absolute inset-0"></div>

    <!-- Content -->
    <div class="relative z-20 mx-auto  mb-12 rounded-lg max-w-[1000px] overflow-hidden">
      <div class="container mx-auto px-4 lg:px-8">
          <h1 class="text-3xl md:text-5xl font-bold mb-4 text-center">
              Job Fair Expo 2024: SMK Telkom Makassar Hadirkan Peluang Karier untuk Generasi Muda
          </h1>
      </div>
  </div>
</section>

<!-- Bagian Gambar dan Informasi Kontak -->
<div class="relative z-20 mx-auto bg-white lg:mb-28 md:mb-12 -mt-36 rounded-lg shadow-md max-w-[1000px] overflow-hidden">
    <!-- Bagian Gambar -->
    <div class="w-full">
        <img 
            src="{{ asset('images/gambar1.png') }}" 
            alt="Gambar Placeholder" 
            class="w-full h-auto object-cover"
        />
    </div>

    <!-- Bagian Informasi Kontak -->
    <div class="p-6 text-start">
        <h2 class="text-2xl font-semibold text-gray-800">Alamat</h2>
        <p class="text-gray-600 mb-4">
            Grand Slipi Tower, Jl. Letjen S. Parman No.1, <br> RT.1/RW.4, Palmerah, Kec. Palmerah, Kota Jakarta Barat, <br/> Daerah Khusus Ibukota Jakarta 11480
        </p>
        <div class="mb-4">
            <h3 class="text-xl font-semibold text-gray-800">Phone</h3>
            <p class="text-gray-600">+6221 29022227</p>
        </div>
        <div class="mt-4 ">
            <h3 class="text-xl font-semibold text-gray-800">E-mail</h3>
            <p class="text-gray-600">legalsbp028@gmail.com</p>
        </div>
    </div>
</div>

@endsection
