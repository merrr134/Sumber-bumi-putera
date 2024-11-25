<div class="bg-white py-12 px-4">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-10 text-gray-800">Berita Terbaru</h2>
        
        <!-- Grid untuk berita -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Berita 1 -->
            <div class="relative bg-gray-100 rounded-xl shadow-lg overflow-hidden">
                <a href="{{ url('/berita') }}" class="block group relative">
                    <!-- Gambar -->
                    <img src="{{ asset('images/image6.jpg') }}" 
                         alt="Judul Berita 1" 
                         class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500 z-0"> <!-- Durasi diperpanjang -->
                </a>
                <div class="p-6">
                    <p class="text-sm text-gray-500 mb-3">12 November 2024</p>
                    <a href="{{ url('/berita') }}" class="text-xl font-bold text-gray-800 hover:text-blue-600">
                        Job Fair Expo 2024: SMK Telkom Makassar Hadirkan Peluang Karier untuk Generasi Muda
                    </a>
                    <p class="text-sm text-gray-600 mt-3">
                        Deskripsi singkat dari berita untuk memberikan gambaran kepada pembaca tentang kontennya.
                    </p>
                    <!-- Tombol dengan animasi teks -->
                    <a href="{{ url('/berita') }}" 
                       class="mt-4 flex items-center text-blue-500 font-semibold transition-all duration-500 relative group"> <!-- Durasi diperpanjang -->
                        <!-- Teks animasi masuk dari kiri (dimulai tersembunyi di kiri) -->
                        <span 
                            class="ml-2 opacity-0 transform translate-x-[-100%] group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-500"> <!-- Durasi diperpanjang -->
                            Selengkapnya
                        </span>
                        <!-- Panah dengan animasi -->
                        <span 
                            class="arrow text-2xl absolute left-0 opacity-100 ml-2 transform group-hover:left-20 group-hover:ml-8 transition-all duration-500"> <!-- Durasi diperpanjang -->
                            &#8594;
                        </span>
                    </a>
                </div>
            </div>
            

            <!-- Berita 2 -->
            <div class="relative bg-gray-100 rounded-xl shadow-lg overflow-hidden">
                <a href="#" class="block group relative">
                    <!-- Gambar -->
                    <img src="{{ asset('images/image6.jpg') }}" 
                         alt="Judul Berita 1" 
                         class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500 z-0"> <!-- Durasi diperpanjang -->
                </a>
                <div class="p-6">
                    <p class="text-sm text-gray-500 mb-3">12 November 2024</p>
                    <a href="#" class="text-xl font-bold text-gray-800 hover:text-blue-600">
                        Job Fair Expo 2024: SMK Telkom Makassar Hadirkan Peluang Karier untuk Generasi Muda
                    </a>
                    <p class="text-sm text-gray-600 mt-3">
                        Deskripsi singkat dari berita untuk memberikan gambaran kepada pembaca tentang kontennya.
                    </p>
                    <!-- Tombol dengan animasi teks -->
                    <a href="#" 
                       class="mt-4 flex items-center text-blue-500 font-semibold transition-all duration-500 relative group"> <!-- Durasi diperpanjang -->
                        <!-- Teks animasi masuk dari kiri (dimulai tersembunyi di kiri) -->
                        <span 
                            class="ml-2 opacity-0 transform translate-x-[-100%] group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-500"> <!-- Durasi diperpanjang -->
                            Selengkapnya
                        </span>
                        <!-- Panah dengan animasi -->
                        <span 
                            class="arrow text-2xl absolute left-0 opacity-100 ml-2 transform group-hover:left-20 group-hover:ml-8 transition-all duration-500"> <!-- Durasi diperpanjang -->
                            &#8594;
                        </span>
                    </a>
                </div>
            </div>

            <!-- Berita 3 -->
            <div class="relative bg-gray-100 rounded-xl shadow-lg overflow-hidden">
                <a href="#" class="block group relative">
                    <!-- Gambar -->
                    <img src="{{ asset('images/image6.jpg') }}" 
                         alt="Judul Berita 1" 
                         class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500 z-0"> <!-- Durasi diperpanjang -->
                </a>
                <div class="p-6">
                    <p class="text-sm text-gray-500 mb-3">12 November 2024</p>
                    <a href="#" class="text-xl font-bold text-gray-800 hover:text-blue-600">
                        Job Fair Expo 2024: SMK Telkom Makassar Hadirkan Peluang Karier untuk Generasi Muda
                    </a>
                    <p class="text-sm text-gray-600 mt-3">
                        Deskripsi singkat dari berita untuk memberikan gambaran kepada pembaca tentang kontennya.
                    </p>
                    <!-- Tombol dengan animasi teks -->
                    <a href="#" 
                       class="mt-4 flex items-center text-blue-500 font-semibold transition-all duration-500 relative group"> <!-- Durasi diperpanjang -->
                        <!-- Teks animasi masuk dari kiri (dimulai tersembunyi di kiri) -->
                        <span 
                            class="ml-2 opacity-0 transform translate-x-[-100%] group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-500"> <!-- Durasi diperpanjang -->
                            Selengkapnya
                        </span>
                        <!-- Panah dengan animasi -->
                        <span 
                            class="arrow text-2xl absolute left-0 opacity-100 ml-2 transform group-hover:left-20 group-hover:ml-8 transition-all duration-500"> <!-- Durasi diperpanjang -->
                            &#8594;
                        </span>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</div>
