<div class="relative w-full h-screen overflow-hidden">
      <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out" id="slide1">
          <div class="absolute inset-0 bg-black opacity-50"></div>
          <img src="{{ asset('images/image6.jpg') }}" class="w-full h-full object-cover">
      </div>
      <div class="absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out" id="slide2">
          <div class="absolute inset-0 bg-black opacity-50"></div>
          <img src="{{ asset('images/image7.jpg') }}" class="w-full h-full object-cover">
      </div>
      <div class="absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out" id="slide3">
          <div class="absolute inset-0 bg-black opacity-50"></div>
          <img src="{{ asset('images/image8.jpg') }}" class="w-full h-full object-cover">
      </div>
      <div class="absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out" id="slide4">
          <div class="absolute inset-0 bg-black opacity-50"></div>
          <img src="{{ asset('images/gambar2.png') }}" class="w-full h-full object-cover">
      </div>
      <div class="absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out" id="slide5">
          <div class="absolute inset-0 bg-black opacity-50"></div>
          <img src="{{ asset('images/gambar3.png') }}" class="w-full h-full object-cover">
      </div>
      <div class="absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out" id="slide6">
          <div class="absolute inset-0 bg-black opacity-50"></div>
          <img src="{{ asset('images/gambar4.png') }}" class="w-full h-full object-cover">
      </div>
      <div class="absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out" id="slide7">
          <div class="absolute inset-0 bg-black opacity-50"></div>
          <img src="{{ asset('images/gambar5.png') }}" class="w-full h-full object-cover">
      </div>
  </div>
  
  <script>
      let currentIndex = 0;
      const slides = [
          document.getElementById('slide1'),
          document.getElementById('slide2'),
          document.getElementById('slide3'),
          document.getElementById('slide4'),
          document.getElementById('slide5'),
          document.getElementById('slide6'),
          document.getElementById('slide7'),
      ];
  
      setInterval(() => {
          slides[currentIndex].classList.add('opacity-0');
          currentIndex = (currentIndex + 1) % slides.length;
          slides[currentIndex].classList.remove('opacity-0');
      }, 5000);
  </script>
  