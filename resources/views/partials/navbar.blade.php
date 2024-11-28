<nav id="navbar" class="bg-transparent fixed top-0 left-0 w-full z-50 transition-all duration-300">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between p-4 container mx-auto">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/logo.png') }}" class="lg:h-24 h-16" alt="Company Logo" />
        </a>
        <!-- Hamburger Button -->
        <button data-collapse-toggle="navbar-dropdown" type="button" id="hamburger-btn" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-black rounded-lg md:hidden focus:outline-none  dark:text-black " aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg id="hamburger-icon" class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
            <svg id="close-icon" class="w-5 h-5 hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
        <!-- Navbar Dropdown -->
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-transparent md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent md:dark:bg-transparent">
                <li><a href="/" class="block py-2 px-3 text-white rounded hover:text-green-500 hover-line">Home</a></li>
                <li class="relative group">
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-white md:hover:text-green-500 ">
                        Tentang Kami
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="absolute left-0 hidden mt-2 font-normal bg-white divide-y rounded-lg shadow w-44 group-hover:block">
                        <ul class="py-2 text-sm text-gray-500 dark:text-black">
                            <li><a href="{{ url('/about-us/tentang-kami') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100 dark:hover:bg-gray-200 dark:text-black dark:hover:text-green-500 font-semibold">Tentang Kami</a></li>
                            <li><a href="{{ url('/about-us/visi-misi') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100 dark:hover:bg-gray-200 dark:text-black dark:hover:text-green-500 font-semibold">Visi & Misi</a></li>
                            <li><a href="{{ url('/about-us/sejarah') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100 dark:hover:bg-gray-200 dark:text-black dark:hover:text-green-500 font-semibold">Sejarah Singkat</a></li>
                            <li><a href="{{ url('/about-us/tentang-site') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100 dark:hover:bg-gray-200 dark:text-black dark:hover:text-green-500 font-semibold">Tentang Site</a></li>
                            <li><a href="{{ url('/about-us/struktur') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100 dark:hover:bg-gray-200 dark:text-black dark:hover:text-green-500 font-semibold">Struktur Organinasi</a></li>
                            <li><a href="{{ url('/about-us/laporan-penjualan') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100 dark:hover:bg-gray-200 dark:text-black dark:hover:text-green-500 font-semibold">Laporan Penjualan</a></li>
                            <li><a href="{{ url('/about-us/aset-perusahaan') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100 dark:hover:bg-gray-200 dark:text-black dark:hover:text-green-500 font-semibold">Aset Perusahaan</a></li>
                        </ul>
                    </div>
                    
                </li>
                <li><a href="{{ url('/news') }}" class="block py-2 px-3 text-white hover:text-green-500 hover-line">Berita</a></li>
                <li><a href="{{ url('/contact') }}" class="block py-2 px-3 text-white hover:text-green-500 hover-line">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<script>
   const navbar = document.getElementById('navbar');
const navbarLinks = document.querySelectorAll('#navbar-dropdown a'); // Navbar links
const dropdownButton = document.getElementById('dropdownNavbarLink'); // Dropdown button
const dropdownLinks = document.querySelectorAll('#dropdownNavbar a'); // Dropdown links
// Hamburger icon toggle
const hamburgerBtn = document.getElementById('hamburger-btn');
const hamburgerIcon = document.getElementById('hamburger-icon');
const closeIcon = document.getElementById('close-icon');
const navbarDropdown = document.getElementById('navbar-dropdown');

// Toggle dropdown menu
hamburgerBtn.addEventListener('click', () => {
    // Toggle visibility of the menu
    navbarDropdown.classList.toggle('hidden');
    
    // Toggle visibility of icons
    hamburgerIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
});


// Function to update navbar colors based on scroll position
function updateNavbarColors(scrollY) {
    // Cek apakah perangkat mobile (max-width: 768px) dan navbar di-scroll
    if (window.innerWidth <= 768) {
        // Set background langsung ke putih pada mobile
        navbar.classList.add('bg-white', 'shadow-xl');
        navbar.classList.remove('bg-transparent');
        navbarLinks.forEach(link => {
            link.classList.remove('text-white');
            link.classList.add('text-black');
        });
        dropdownButton.classList.remove('text-white');
        dropdownButton.classList.add('text-black');
        dropdownLinks.forEach(link => {
            link.classList.remove('text-white');
            link.classList.add('text-black');
        });
    } else if (scrollY > 50) {
        // Apply styles when scrolled down (untuk desktop)
        navbar.classList.add('bg-white', 'shadow-xl');
        navbar.classList.remove('bg-transparent');
        navbarLinks.forEach(link => {
            link.classList.remove('text-white');
            link.classList.add('text-black');
        });
        dropdownButton.classList.remove('text-white');
        dropdownButton.classList.add('text-black');
        dropdownLinks.forEach(link => {
            link.classList.remove('text-white');
            link.classList.add('text-black');
        });
    } else {
        // Reset styles when at the top of the page (untuk desktop)
        navbar.classList.remove('bg-white', 'shadow-xl');
        navbar.classList.add('bg-transparent');
        navbarLinks.forEach(link => {
            link.classList.remove('text-black');
            link.classList.add('text-white');
        });
        dropdownButton.classList.remove('text-black');
        dropdownButton.classList.add('text-white');
        dropdownLinks.forEach(link => {
            link.classList.remove('text-black');
            link.classList.add('text-white');
        });
    }
}

// Event listener pada scroll
window.addEventListener('scroll', () => {
    updateNavbarColors(window.scrollY);
});

// Initialize navbar colors when the page loads
updateNavbarColors(window.scrollY);

</script>

<style>
    @media (max-width: 768px) {
    #navbar {
        background-color: white; /* Atur background navbar menjadi putih di mobile */
    }
    #navbar .text-white {
        color: black; /* Mengubah warna teks navbar menjadi hitam di mobile */
    }
    #navbar .hover-line::after {
        background-color: #32CD32; /* Warna hijau untuk hover effect */
    }
}

</style>
