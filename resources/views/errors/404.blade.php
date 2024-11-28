@extends('layouts.app')  <!-- Menggunakan layout utama Anda -->

@section('content')
<div class="bg-primary-dark flex flex-col items-center justify-center h-screen mb-28">
      <h1 class="text-5xl font-bold text-white">404 Not Found</h1>
      <p class="mt-4 text-lg text-white">Whoops! That page doesn't exist.</p>
      <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
          <a href="/" class="bg-gray-800 rounded-md shadow-md p-4 text-center hover:bg-gray-700">
              <div class="text-white text-2xl">🏠</div>
              <div class="mt-2 text-white">Homepage</div>
          </a>
          <a href="{{ url('/news') }}" class="bg-gray-800 rounded-md shadow-md p-4 text-center hover:bg-gray-700">
              <div class="text-purple-500 text-2xl">📰</div>
              <div class="mt-2 text-white">Berita terbaru</div>
          </a>
          <a href="{{ url('/contact') }}" class="bg-gray-800 rounded-md shadow-md p-4 text-center hover:bg-gray-700">
              <div class="text-green-500 text-2xl">☎️</div>
              <div class="mt-2 text-white">Kontak</div>
          </a>
      </div>
  </div>
@endsection
