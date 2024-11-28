<div class="bg-blue-200 text-black py-8">
  <div class="max-w-screen-xl container mx-auto px-4 flex flex-wrap justify-between">
    <!-- Company Info -->
    <div class="mb-8 lg:mb-0 w-full lg:w-auto flex justify-start" data-aos="fade-up" data-aos-duration="1200">
      <img src="{{ asset('images/logo.png') }}" alt="Company Logo" class="h-28 mb-2 mx-auto lg:mx-0 logo-image transition-transform duration-300 transform hover:scale-110">
    </div>
    <!-- Kantor Pusat -->
    <div class="w-full lg:w-auto mb-8 lg:mb-0 text-start" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
      <h3 class="text-xl font-semibold text-start lg:text-left flex items-center space-x-2">
        <i class="fa-solid fa-map-location-dot transition-transform duration-300 transform hover:scale-125"></i>
        <span>Kantor Pusat</span>
      </h3>
      <p class="text-start lg:text-left">
        Grand Slipi Tower, Lt.38 K,L <br>
        Jl.Letjen S.Parman No.24, RT.1/RW.4 <br>
        Palmerah, Kec.Palmerah <br>
        Kota Jakarta Barat, DKI Jakarta 11480 <br>
      </p>
    </div>
    <!-- Kantor Perwakilan -->
    <div class="w-full lg:w-auto text-start" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
      <h3 class="text-xl font-semibold text-start lg:text-left flex items-center space-x-2">
        <i class="fa-solid fa-map-location-dot transition-transform duration-300 transform hover:scale-125"></i>
        <span>Kantor Perwakilan</span>
      </h3>
      <p class="text-start lg:text-left">
        2G2M+HMR, Anduonohu, <br> Kec. Poasia, Kota Kendari, <br> Sulawesi Tenggara 93231
      </p>
    </div>
  </div>
  <hr class="my-6 border-gray-200 sm:mx-auto dark:border-white lg:my-8" />
  <span class="block text-sm text-gray-600 sm:text-center text-center opacity-0 translate-y-8" id="footerText" data-aos="fade-up" >
    © 2024 <a href="#" class="hover:underline">Sumber Bumi Putera</a>. All Rights Reserved.
  </span>
</div>

<style>
  /* Animasi Pop-Up */
  @keyframes pop-up {
    0% {
      opacity: 0;
      transform: translateY(20px); /* Mulai lebih rendah */
    }
    60% {
      opacity: 1;
      transform: translateY(-10px); /* Sedikit naik */
    }
    100% {
      opacity: 1;
      transform: translateY(0); /* Posisi normal */
    }
  }

  /* Class untuk animasi */
  .pop-up-animation {
    animation: pop-up 0.8s ease-out forwards;
  }
</style>

<script>
  // Inisialisasi AOS
  AOS.init({
    offset: 200,  // Jarak elemen mulai dianimasikan
    duration: 1000,  // Durasi animasi
    easing: 'ease',  // Jenis transisi
    delay: 100,  // Penundaan animasi
    once: false,  // Animasi akan berulang setiap elemen muncul di tampilan
    mirror: true,  // Mengaktifkan animasi ketika scroll kembali ke atas
  });

  window.addEventListener('scroll', function() {
    var footerText = document.getElementById('footerText');
    var rect = footerText.getBoundingClientRect();
    
    // Cek jika elemen terlihat di viewport
    if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
      footerText.classList.add('pop-up-animation'); // Menambahkan animasi saat elemen terlihat
    }
  });
</script>
