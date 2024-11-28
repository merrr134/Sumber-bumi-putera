<div class="bg-white py-4 px-4 mb-8 md:py-8 md:mb-12 lg:mb-16">
  <div class="max-w-screen-xl mx-auto">
    <h2 class="text-2xl font-semibold text-center mb-8">Gallery</h2>
    <div class="relative">
      <!-- Tombol Previous -->
      <button id="prevButton" type="button" class="absolute left-0 top-1/2 -translate-y-1/2 rounded-full p-2 shadow z-10">
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full">
          <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
          </svg>
        </span>
      </button>

      <!-- Wrapper untuk slider -->
      <div class="overflow-hidden">
        <div id="gallerySlider" class="flex transition-transform duration-500 ease-in-out">
          <!-- Gambar 1 -->
          <div class="w-full sm:w-full md:w-1/3 px-2 shrink-0">
            <img src="{{ asset('images/gambar1.png') }}" alt="Gallery Image 1" class="w-full h-auto md:h-48 rounded-lg object-cover">
          </div>
          <div class="w-full sm:w-full md:w-1/3 px-2 shrink-0">
            <img src="{{ asset('images/gambar1.png') }}" alt="Gallery Image 1" class="w-full h-auto md:h-48 rounded-lg object-cover">
          </div>
          <div class="w-full sm:w-full md:w-1/3 px-2 shrink-0">
            <img src="{{ asset('images/gambar1.png') }}" alt="Gallery Image 1" class="w-full h-auto md:h-48 rounded-lg object-cover">
          </div>
          <div class="w-full sm:w-full md:w-1/3 px-2 shrink-0">
            <img src="{{ asset('images/gambar1.png') }}" alt="Gallery Image 1" class="w-full h-auto md:h-48 rounded-lg object-cover">
          </div>
          <div class="w-full sm:w-full md:w-1/3 px-2 shrink-0">
            <img src="{{ asset('images/gambar1.png') }}" alt="Gallery Image 1" class="w-full h-auto md:h-48 rounded-lg object-cover">
          </div>
        </div>
      </div>

      <!-- Tombol Next -->
      <button id="nextButton" type="button" class="absolute right-0 top-1/2 -translate-y-1/2 rounded-full p-2 shadow z-10">
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full">
          <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
        </span>
      </button>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const gallerySlider = document.getElementById("gallerySlider");
    const prevButton = document.getElementById("prevButton");
    const nextButton = document.getElementById("nextButton");

    let slidesToShow = calculateSlidesToShow();
    let currentIndex = 0; // Indeks awal
    const slideWidth = gallerySlider.children[0].offsetWidth;

    // Fungsi untuk menghitung jumlah slide yang ditampilkan berdasarkan lebar layar
    function calculateSlidesToShow() {
      const screenWidth = window.innerWidth;
      if (screenWidth < 640) return 1; // 1 slide pada layar kecil
      if (screenWidth < 1024) return 2; // 2 slide pada layar medium
      return 3; // 3 slide pada layar besar
    }

    // Fungsi untuk memperbarui posisi slider
    function updateSliderPosition() {
      const offset = -currentIndex * (gallerySlider.children[0].offsetWidth);
      gallerySlider.style.transform = `translateX(${offset}px)`;
    }

    // Fungsi untuk tombol next
    nextButton.addEventListener("click", () => {
      if (currentIndex < gallerySlider.children.length - slidesToShow) {
        currentIndex++;
        updateSliderPosition();
      } else {
        currentIndex = 0;
        updateSliderPosition();
      }
    });

    // Fungsi untuk tombol previous
    prevButton.addEventListener("click", () => {
      if (currentIndex > 0) {
        currentIndex--;
        updateSliderPosition();
      } else {
        currentIndex = gallerySlider.children.length - slidesToShow;
        updateSliderPosition();
      }
    });

    // Tambahkan event listener untuk perubahan ukuran layar
    window.addEventListener("resize", () => {
      slidesToShow = calculateSlidesToShow();
      updateSliderPosition();
    });

    // Inisialisasi posisi slider
    updateSliderPosition();
  });
</script>
