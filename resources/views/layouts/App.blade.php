<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumber Bumi Putera</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3/dist/jquery.fancybox.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/scroll-into-view-if-needed@1.0.0/index.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3/dist/jquery.fancybox.min.js"></script>
    

</head>
<body>
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Hero Section -->
    @yield('hero')

    @if(View::getSection('about'))
        @yield('about')
    @endif


    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    @include('partials.partner')
    @include('partials.footer')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const logosContainer = document.getElementById('scrolling-logos');
            const totalWidth = logosContainer.scrollWidth / 2; // Total lebar setelah duplikasi gambar
            const duration = 30; // Durasi animasi dalam detik
    
            // GSAP animation untuk terus bergerak tanpa henti
            gsap.to(logosContainer, {
                x: -totalWidth, // Geser ke kiri sampai akhir
                ease: "linear",
                duration: duration,
                repeat: -1, // Looping tak terbatas
                modifiers: {
                    x: function(x) {
                        // Setelah mencapai ujung, reset ke awal tanpa jeda
                        if (parseFloat(x) <= -totalWidth) {
                            return '0px'; // Reset posisi ke awal
                        }
                        return x;
                    }
                }
            });
        });
    </script>
    <script>
    $(document).ready(function() {
        $('[data-fancybox="gallery"]').fancybox({
            buttons: [
                "zoom",
                "close"
            ]
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Inisialisasi AOS dengan opsi 'once: false' untuk memicu animasi berkali-kali
        AOS.init({
            once: false, // Animasi akan muncul setiap kali elemen memasuki viewport
            duration: 1000, // Durasi animasi
            easing: 'ease-in-out', // Easing animasi
        });
    });
</script>

    
    
    
    

    
</body>
</html>
