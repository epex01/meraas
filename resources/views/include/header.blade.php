<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meeras | A New Way of Living</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="assets/css/stylish.css">
  
 <!--<div id="google_translate_element"></div>-->
    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  
  
  <script>



    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'primary': '#00A750', // Green
            'primary-light': 'rgba(0, 167, 80, 0.1)',
            'primary-shadow': '#00823E', // Darker Green
            'accent': '#E6F6EC', // Light Green
            'secondary-seashell': '#1A221C', // Lighter Dark Green/Grey
            'grey-border': 'rgba(255, 255, 255, 0.2)',
            'body': '#F7F9F8',
            'body-light': 'rgba(247, 249, 248, 0.7)',
            'base': '#121713', // Dark Green/Grey
          },
          fontFamily: {
            'ibmPlexAr': ['"IBM Plex Sans"', 'sans-serif'],
          },
          fontSize: {
            '3.6xl': '2.1875rem',
            '4.5xl': '2.8125rem',
            '6.5xl': '4rem',
            '10xl': '10rem',
          },
          spacing: {
            '7.5': '1.875rem',
            '15': '3.75rem'
          },
          borderRadius: {
            '81xl': '5.0625rem'
          },
          lineHeight: {
            '12': '3rem',
            '13': '3.25rem',
            '24': '6rem',
            '26': '6.5rem',
            '30': '7.5rem',
            '32': '8rem',
          }
        }
      }
    }
  </script>
</head>

<body class="font-ibmPlexAr text-body bg-base overflow-x-hidden">

  <!-- Header -->
  <header id="header"
    class="fixed start-0 w-full z-[999] flex flex-col px-15 pt-11 transition-all duration-1000 max-lg:p-0">
    <div
      class="flex flex-row justify-between items-center px-5 py-4 text-base lg:rounded-[15.625rem] bg-base/30 max-lg:py-5 max-sm:pe-5 max-lg:pe-8 text-white transition-all duration-300">
      <a href="home" class="text-2xl font-bold tracking-wider">
        Meeras
      </a>
      <!-- Desktop Navigation -->
      <div class="hidden lg:flex gap-7 items-center max-2xl:gap-5">
        <nav
          class="flex gap-5 justify-between self-stretch my-auto leading-[120%] max-xxl:text-xs max-xl:gap-3.5 max-1xl:gap-6 relative">
          <!-- We are Meraastrust (Dropdown Parent) -->
          <div class="relative group">
            <a href="#" class="relative flex items-center" data-key="nav_about">
              About
            </a>

            <!-- Dropdown Menu -->
            <div
              class="absolute left-0 mt-2 w-[500px] bg-green-900/70 backdrop-blur-md shadow-lg rounded-2xl p-6 hidden group-hover:flex justify-between z-50 transition-all duration-300">
              <!-- Left Side: Note + Button -->
              <div class="w-1/2 pr-4 border-r border-gray-200">
                <h3 class="text-lg font-semibold text-green-400/100 mb-2">
                  About Meraastrust
                </h3>
                <p class="text-sm text-white-600 mb-4">
                  Meraastrust is Saudi Arabia's leading multi-asset class real estate developer and a Public Investment
                  Fund (PIF) company, serving as a key enabler of Saudi Vision 2030. ROSHN is transforming the urban
                  landscape with human-centric, integrated developments that elevate connectivity and enhance the
                  quality of life across the Kingdom
                </p>
                <button class="bg-emerald-500 hover:bg-emerald-600 text-white px-4 py-2 rounded-lg text-sm transition">
                  Learn More
                </button>
              </div>

              <!-- Right Side: Links -->
              <div class="w-1/2 pl-4 space-y-2">
                <a href="leader" class="block hover:text-emerald-300 font-medium transition">
                  Leadership
                </a>
                <a href="brand" class="block hover:text-emerald-300 font-medium transition">
                  Brand Story
                </a>
                <a href="vision" class="block hover:text-emerald-300 font-medium transition">
                  Vision 2030
                </a>
                <a href="awards" class="block hover:text-emerald-300 font-medium transition">
                  Our Awards
                </a>
                <a href="sponor" class="block hover:text-emerald-300 font-medium transition">
                  Sponorship
                </a>
              </div>
            </div>
          </div>







          <!-- Communities (Dropdown Parent) -->
          <div class="relative group">
            <a href="#" class="relative flex items-center" data-key="nav_about">
              Communities
            </a>

            <!-- Dropdown Menu -->
            <div
              class="absolute left-0 mt-2 w-[500px] bg-green-900/70 backdrop-blur-md shadow-lg rounded-2xl p-6 hidden group-hover:flex justify-between z-50 transition-all duration-300">
              <!-- Left Side: Note + Button -->
              <div class="w-1/2 pr-4 border-r border-gray-200">
                <h3 class="text-lg font-semibold text-green-400/100 mb-2">
                 Communities
                </h3>
                <p class="text-sm text-white-600 mb-4">
                  Our residential communities are distinguished by their vibrant and fully integrated design, offering a diverse range of homes to suit all preferences and budgets—from elegant apartments to luxurious villas.
                </p>
                <button class="bg-emerald-500 hover:bg-emerald-600 text-white px-4 py-2 rounded-lg text-sm transition">
                  Learn More
                </button>
              </div>

              <!-- Right Side: Links -->
              <div class="w-1/2 pl-4 space-y-2">
                <a href="sedra" class="block hover:text-emerald-300 font-medium transition">
                  SEDRA
                </a>
                <a href="alarous" class="block hover:text-emerald-300 font-medium transition">
                 ALAROUS
                </a>
                <a href="warefa" class="block hover:text-emerald-300 font-medium transition">
                  WAREFA
                </a>
                <a href="almanar" class="block hover:text-emerald-300 font-medium transition">
                  ALMANAR
                </a>
                <a href="aldanah" class="block hover:text-emerald-300 font-medium transition">
                  ALDANAH
                </a>
              </div>
            </div>
          </div>

          <!-- Other Links -->
           <!-- Communities (Dropdown Parent) -->
          <div class="relative group">
            <a href="#" class="relative flex items-center" data-key="nav_about">
              By Meraastrust Group
            </a>

            <!-- Dropdown Menu -->
            <div
              class="absolute left-0 mt-2 w-[500px] bg-green-900/70 backdrop-blur-md shadow-lg rounded-2xl p-6 hidden group-hover:flex justify-between z-50 transition-all duration-300">
              <!-- Left Side: Note + Button -->
              <div class="w-1/2 pr-4 border-r border-gray-200">
                <h3 class="text-lg font-semibold text-green-400/100 mb-2">
                 By Meraastrust Group
                </h3>
                <p class="text-sm text-white-600 mb-4">
                  As a national champion of destination real estate, ROSHN Group is redefining urban landscapes with a diversified multi-asset strategy.
                </p>
                <button class="bg-emerald-500 hover:bg-emerald-600 text-white px-4 py-2 rounded-lg text-sm transition">
                  Learn More
                </button>
              </div>

              <!-- Right Side: Links -->
              <div class="w-1/2 pl-4 space-y-2">
                <a href="marafy" class="block hover:text-emerald-300 font-medium transition">
                  MARAFY
                </a>
                <a href="meera_front" class="block hover:text-emerald-300 font-medium transition">
                 Meraastrust Front 
                </a>
                <a href="stadium" class="block hover:text-emerald-300 font-medium transition">
                  Meraastrust Stadium
                </a>
                <a href="next" class="block hover:text-emerald-300 font-medium transition">
                  Meraastrust Next
                </a>            
              </div>
            </div>
          </div>







          <a class="relative flex items-center" href="news" data-key="nav_media_center">
            News
          </a>
          <a class="relative flex items-center" href="csr" data-key="nav_careers">
            CSR
          </a>
          <a class="relative flex items-center" href="care" data-key="nav_contact">
            Meraastrust Care
          </a>
        </nav>
        
     
        <span class="sep inline-block w-[1px] h-[1.2rem] bg-white/50 m-1 transition-all duration-700"></span>
        <a class="justify-center relative whitespace-nowrap px-6 py-4 bg-primary text-white lg:hover:bg-primary-shadow lg:hover:text-white uppercase leading-[110%] rounded-[18.75rem] transition-all duration-500 !capitalize"
          href="register" data-key="nav_get_in_touch">REGISTER INSTEREST</a>
      </div>
      <!-- Mobile Menu Button -->
      <button id="mobile-menu-button"
        class="lg:hidden z-[1001] relative w-8 h-8 flex flex-col justify-around items-center focus:outline-none">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
      </button>
    </div>
  </header>

  <!-- Mobile Menu Overlay -->
  <div id="mobile-menu-overlay" class="fixed inset-0 bg-base z-[1000] flex-col p-8 text-white">
    <!-- Overlay Header -->
    <div class="flex justify-between items-center w-full pb-8">
      <a href="#" class="text-2xl font-bold tracking-wider">
        Meeras
      </a>
      <div class="flex items-center gap-4">
        <button id="mobile-overlay-lang-btn" class="border border-white/50 rounded-full px-4 py-1 text-sm"
          data-key="nav_language_toggle">العربية</button>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 transition-all duration-700 cursor-pointer">
          <circle cx="11" cy="11" r="8"></circle>
          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
        <span class="inline-block w-[1px] h-6 bg-white/50"></span>
        <button id="mobile-menu-close-button" class="focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
        </button>
      </div>
    </div>

    <!-- Overlay Navigation -->
    <nav class="flex flex-col flex-grow w-full">
      <ul class="text-2xl font-light">
<li class="border-b border-white/20 py-4">
  <!-- Dropdown Parent -->
  <button
    class="flex justify-between items-center w-full text-left"
    onclick="toggleSubmenu('about-submenu')"
  >
    <span>We Are Meraastrust</span>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rtl-flip transition-transform duration-300"
      viewBox="0 0 20 20" fill="currentColor" id="arrow-about-submenu">
      <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd" />
    </svg>
  </button>

  <!-- Submenu -->
  <ul id="about-submenu" class="hidden mt-2 pl-4 space-y-2 text-sm text-white/80">
    <li><a href="leader" class="block hover:text-emerald-400 transition">Leadership</a></li>
    <li><a href="brand" class="block hover:text-emerald-400 transition">The Brand Story</a></li>
    <li><a href="vision" class="block hover:text-emerald-400 transition">Vision 2030</a></li>
    <li><a href="awards" class="block hover:text-emerald-400 transition">Our Awards</a></li>
    <li><a href="sponor" class="block hover:text-emerald-400 transition">Sponsorship</a></li>
  </ul>
</li>

<script>
  function toggleSubmenu(id) {
    const submenu = document.getElementById(id);
    const arrow = document.getElementById("arrow-" + id);
    submenu.classList.toggle("hidden");
    arrow.classList.toggle("rotate-90");
  }
</script>

        <li class="border-b border-white/20 py-4">
  <!-- Dropdown Parent -->
  <button
    class="flex justify-between items-center w-full text-left"
    onclick="toggleSubmenu('communities-submenu')"
  >
    <span>Communities</span>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rtl-flip transition-transform duration-300"
      viewBox="0 0 20 20" fill="currentColor" id="arrow-communities-submenu">
      <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd" />
    </svg>
  </button>

  <!-- Submenu -->
  <ul id="communities-submenu" class="hidden mt-2 pl-4 space-y-2 text-sm text-white/80">
    <li><a href="sedra" class="block hover:text-emerald-400 transition">SEDRA</a></li>
    <li><a href="alarous" class="block hover:text-emerald-400 transition">ALAROUS</a></li>
    <li><a href="warefa" class="block hover:text-emerald-400 transition">WAREFA</a></li>
    <li><a href="almanar" class="block hover:text-emerald-400 transition">ALMANAR</a></li>
    <li><a href="aldanah" class="block hover:text-emerald-400 transition">ALDANAH</a></li>
  </ul>
</li>

<script>
  function toggleSubmenu(id) {
    const submenu = document.getElementById(id);
    const arrow = document.getElementById("arrow-" + id);
    submenu.classList.toggle("hidden");
    arrow.classList.toggle("rotate-90");
  }
</script>

        <li class="border-b border-white/20 py-4">
  <!-- Dropdown Parent -->
  <button
    class="flex justify-between items-center w-full text-left"
    onclick="toggleSubmenu('group-submenu')"
  >
    <span>By Meraastrust Group</span>
    <svg xmlns="http://www.w3.org/2000/svg"
      class="h-5 w-5 rtl-flip transition-transform duration-300"
      viewBox="0 0 20 20" fill="currentColor"
      id="arrow-group-submenu">
      <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd" />
    </svg>
  </button>

  <!-- Submenu -->
  <ul id="group-submenu" class="hidden mt-2 pl-4 space-y-2 text-sm text-white/80">
    <li><a href="marafy" class="block hover:text-emerald-400 transition">MARAFY</a></li>
    <li><a href="meera_front" class="block hover:text-emerald-400 transition">Meraastrust Front</a></li>
    <li><a href="stadium" class="block hover:text-emerald-400 transition">Meraastrust Stadium</a></li>
    <li><a href="next" class="block hover:text-emerald-400 transition">Meraastrust Next</a></li>
  </ul>
</li>

        <li class="border-b border-white/20 py-4"><a href="news" data-key="nav_news">News</a></li>
        <li class="border-b border-white/20 py-4"><a href="csr" data-key="nav_csr">CSR</a></li>
        <li class="border-b border-white/20 py-4"><a href="care" data-key="nav_roshn_care">Meraastrust Care</a></li>
      </ul>
    </nav>

    <!-- Overlay Footer Button -->
    <div class="w-full pb-4">
      <a class="block w-full text-center py-4 bg-accent text-base rounded-full uppercase font-medium" href="#"
        data-key="register">Register Interest</a>
    </div>
  </div>



   