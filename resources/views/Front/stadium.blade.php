@include('include.header')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              'brand-green': '#004d40',
              'brand-green-light': '#006a59',
              'brand-gray': '#333333',
              'brand-light-gray': '#f5f5f5',
            },
            fontFamily: {
              sans: ['Roboto', 'sans-serif'],
              heading: ['Oswald', 'sans-serif'],
            },
          }
        }
      }
    </script>
    <style>
      body {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }
      /* Active Nav Link Underline */
       .nav-link span {
        display: block;
        transition: width 0.3s ease-in-out;
        width: 0;
      }
      .nav-link.active span, .nav-link:hover span {
         width: 100%;
      }
      /* Scroll to top button visibility */
      #scrollToTopBtn {
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s, visibility 0.3s, transform 0.3s;
        transform: translateY(20px);
      }
      #scrollToTopBtn.visible {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
      }
      #scrollToTopBtn:hover {
        transform: translateY(-4px);
      }

       /* Scroll-triggered Animations */
      .animate-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
      }
      .animate-on-scroll.is-visible {
        opacity: 1;
        transform: translateY(0);
      }
      .delay-100 { transition-delay: 100ms !important; }
      .delay-200 { transition-delay: 200ms !important; }
      .delay-300 { transition-delay: 300ms !important; }

      /* Header Load Animation */
      @keyframes fadeInUp {
        from {
          opacity: 0;
          transform: translateY(20px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
      .header-title-animation {
        animation: fadeInUp 1s ease-out 0.2s;
        animation-fill-mode: backwards;
      }
      .header-logo-animation {
        animation: fadeInUp 1s ease-out 0.5s;
        animation-fill-mode: backwards;
      }

      /* Video Button Pulse */
       @keyframes pulse {
        0%, 100% {
          transform: scale(1);
          box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4);
        }
        70% {
          transform: scale(1.1);
          box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
        }
       }
      .btn-pulse {
        animation: pulse 2s infinite;
      }
    </style>
</head>
  <body class="bg-white text-brand-gray font-sans">

    

    <!-- Header -->
    <header id="home" class="relative h-screen bg-cover bg-center text-white flex flex-col items-center justify-center" style="background-image: url('images/Roshn640_Qaisaran_Studio35667_118d5cff1752c3.png')">
      <div class="absolute inset-0 bg-gradient-to-t from-brand-gray via-brand-gray/70 to-transparent opacity-90"></div>
      <div class="relative z-10 text-center px-4 pt-24">
        <div class="text-sm tracking-widest mb-4 header-title-animation uppercase">
          <span>A Meraastrust Venue</span>
        </div>
        <h1 class="text-6xl md:text-9xl font-bold tracking-wider my-4 header-title-animation font-heading uppercase">
          Where Legends<br/>Are Forged
        </h1>
        <div class="mt-8 flex justify-center header-logo-animation">
          <div class="bg-white bg-opacity-10 p-4 border border-gray-500">
            <svg width="80" height="80" viewBox="0 0 100 100" class="text-white">
                <path d="M20 20 L50 40 L80 20 L80 80 L50 60 L20 80 Z" stroke="currentColor" stroke-width="4" fill="none" />
                <text x="50" y="95" text-anchor="middle" font-size="10" fill="currentColor" class="font-bold font-sans">MERAAS</text>
            </svg>
          </div>
        </div>
      </div>
    </header>

    <main>
      <!-- Overview Section -->
      <section id="overview" class="py-20 md:py-32 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-24 items-center">
            <div>
              <h2 class="text-5xl md:text-6xl font-bold text-brand-gray leading-tight mb-6 animate-on-scroll font-heading uppercase">
                An Arena Built For Glory
              </h2>
              <p class="text-gray-600 leading-relaxed animate-on-scroll delay-100">
                Meraastrust Stadium is more than steel and glass—it's the epicenter of passion, competition, and unforgettable moments. This iconic, multi-purpose venue is engineered to host the world's most prestigious sporting events, legendary concerts, and premier cultural gatherings.
              </p>
            </div>
            <div class="space-y-8">
              <div class="flex items-center p-4 border-b border-gray-200 last:border-b-0 transition duration-300 hover:bg-gray-50 hover:shadow-sm animate-on-scroll delay-100">
                  <div class="mr-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.364 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.196-1.538-1.118l1.518-4.674a1 1 0 00-.364-1.118L2.05 10.1c-.783-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                  </div>
                  <span class="text-2xl font-light text-brand-gray">Championship Sports</span>
              </div>
              <div class="flex items-center p-4 border-b border-gray-200 last:border-b-0 transition duration-300 hover:bg-gray-50 hover:shadow-sm animate-on-scroll delay-200">
                  <div class="mr-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 6l12-3" />
                    </svg>
                  </div>
                  <span class="text-2xl font-light text-brand-gray">Global Entertainment</span>
              </div>
              <div class="flex items-center p-4 border-b border-gray-200 last:border-b-0 transition duration-300 hover:bg-gray-50 hover:shadow-sm animate-on-scroll delay-300">
                  <div class="mr-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-5.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-5.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222 4 2.222V20M12 14L8 12" />
                    </svg>
                  </div>
                  <span class="text-2xl font-light text-brand-gray">Premier Events</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Numbers Section -->
      <section id="numbers" class="py-20 md:py-32 bg-brand-gray text-white transform -skew-y-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 transform skew-y-2">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="p-4 animate-on-scroll">
              <h3 class="counter text-6xl md:text-8xl font-thin text-brand-green-light tracking-tight font-heading" data-target="80000" data-final-text="80K+">0</h3>
              <p class="mt-4 text-lg text-gray-300 font-heading uppercase tracking-wider">Thundering Seats</p>
            </div>
            <div class="p-4 animate-on-scroll delay-100">
              <h3 class="counter text-6xl md:text-8xl font-thin text-brand-green-light tracking-tight font-heading" data-target="40000" data-final-text="40K+ m²">0</h3>
              <p class="mt-4 text-lg text-gray-300 font-heading uppercase tracking-wider">Immersive Viewing</p>
            </div>
            <div class="p-4 animate-on-scroll delay-200">
              <h3 class="counter text-6xl md:text-8xl font-thin text-brand-green-light tracking-tight font-heading" data-target="200" data-final-text="200+">0</h3>
              <p class="mt-4 text-lg text-gray-300 font-heading uppercase tracking-wider">Elite Suites</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Video Section -->
      <section id="video" class="relative h-[70vh] bg-cover bg-center text-white flex items-center justify-center">
        <div class="absolute inset-0 w-full h-full bg-cover bg-center" style="background-image: url('images/Sales_library29_74129646d5fefc.jpeg')"></div>
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 text-center animate-on-scroll">
          <button class="bg-white bg-opacity-80 hover:bg-opacity-100 text-brand-green w-24 h-24 rounded-full flex items-center justify-center transition-transform transform hover:scale-110 hover:shadow-xl btn-pulse">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 ml-1" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
            </svg>
          </button>
          <p class="mt-6 text-lg font-semibold tracking-widest uppercase font-heading">Feel The Roar</p>
        </div>
      </section>

      <!-- Details Section -->
      <section id="details" class="py-20 md:py-32 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-5xl md:text-6xl font-bold text-brand-gray leading-tight font-heading uppercase">
              Engineered For Excellence
            </h2>
          </div>
          <div id="details-list" class="space-y-20">
            <!-- Details will be injected by JS -->
          </div>
        </div>
      </section>

      <!-- Events Section -->
      <section id="events" class="py-20 md:py-32 bg-brand-light-gray overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="text-center mb-8 animate-on-scroll">
            <span class="text-brand-green tracking-widest">MORE THAN A GAME</span>
            <h2 class="text-4xl md:text-6xl font-bold text-brand-gray mt-2 font-heading uppercase">Home of Champions & Chart-Toppers</h2>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mt-12">
            <div class="relative h-96 animate-on-scroll">
              <img src="images/Studio35708_acf85f016ab4eb.jpeg" alt="Concert at the stadium" class="absolute top-0 left-0 w-full h-full object-cover rounded-lg shadow-xl transition-transform duration-500 hover:scale-105"/>
            </div>
            <div class="relative h-96 animate-on-scroll delay-200">
              <img src="images/Interior_Images_VT_1_3_1a582f4cb63681.jpeg" alt="Sporting event" class="absolute top-0 left-0 w-full h-full object-cover rounded-lg shadow-xl transition-transform duration-500 hover:scale-105 translate-y-12 md:translate-y-0 md:-translate-x-12"/>
            </div>
          </div>
          <div class="max-w-3xl mx-auto mt-20 md:mt-16 text-center animate-on-scroll">
            <p class="text-gray-600 leading-relaxed mb-8">
              From the roar of a championship final to the energy of a sold-out concert, Meraastrust Stadium is built for legacy-defining moments. Our flexible infrastructure and world-class operations team are ready to host a diverse lineup of global events, making us the premier choice for international promoters and organizations.
            </p>
            <a href="#" class="inline-flex items-center bg-brand-green text-white py-3 px-8 rounded-full text-lg font-medium hover:bg-brand-green-light transition-all duration-300 group transform hover:scale-105 hover:shadow-lg font-heading uppercase">
              Host Your Event
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </a>
          </div>
        </div>
      </section>

      <!-- Gallery Section -->
      <section id="gallery" class="py-20 md:py-32 bg-brand-gray text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="text-left mb-12 animate-on-scroll">
            <h2 class="text-5xl md:text-6xl font-bold font-heading uppercase">Moments of Glory</h2>
          </div>
          <div id="gallery-main" class="relative h-[70vh] w-full bg-cover bg-center rounded-lg shadow-2xl transition-all duration-500 animate-on-scroll delay-100">
            <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/80 to-transparent">
              <div class="flex items-center justify-center space-x-4">
                <button id="gallery-prev" class="p-3 bg-white/20 rounded-full text-white hover:bg-white/40 transition-all duration-300 transform hover:scale-110">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                  </svg>
                </button>
  
                <div id="gallery-thumbs" class="flex space-x-3 overflow-x-auto pb-2">
                  <!-- Thumbnails will be injected by JS -->
                </div>
  
                <button id="gallery-next" class="p-3 bg-white/20 rounded-full text-white hover:bg-white/40 transition-all duration-300 transform hover:scale-110">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Partnership Section -->
      <section id="partnership" class="relative py-20 md:py-40 bg-cover bg-center text-white" style="background-image: url('imgaes/masterplan_en_9f9843392f6b7f.png')">
        <div class="absolute inset-0 bg-brand-gray opacity-80"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h2 class="text-5xl md:text-7xl font-bold leading-tight mb-8 animate-on-scroll font-heading uppercase">
            Become Part of the Legacy
          </h2>
          <p class="max-w-2xl mx-auto text-lg text-gray-200 mb-10 animate-on-scroll delay-100">
            Align your brand with excellence and connect with millions of passionate fans. Discover partnership opportunities that will put you at the center of the action.
          </p>
          <a href="#" class="inline-flex items-center bg-brand-green-light text-white py-4 px-10 rounded-full text-lg font-medium hover:bg-white hover:text-brand-green transition-all duration-300 group transform hover:scale-105 hover:shadow-lg animate-on-scroll delay-200 font-heading uppercase tracking-wider">
            Explore Partnerships
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>
        </div>
      </section>
    </main>

   
    
 
    
    <script>
      document.addEventListener('DOMContentLoaded', () => {

        // --- Data ---
        const GALLERY_IMAGES = [
          { id: 1, src: 'images/masterplan_en_9f9843392f6b7f.png', thumb: 'images/masterplan_en_9f9843392f6b7f.png', alt: 'Goal line action' },
          { id: 2, src: 'images/DSC_04870_hr_cd057855e991fa.jpeg', thumb: 'images/DSC_04870_hr_cd057855e991fa.jpeg', alt: 'Fans celebrating a victory' },
          { id: 3, src: 'images/DSC_05383_43db5927fcdced.jpeg', thumb: 'images/DSC_05383_43db5927fcdced.jpeg', alt: 'A rock concert under the stadium lights' },
          { id: 4, src: 'images/DSC_7839_Edit_1_247eeb8d69f844.jpeg', thumb: 'images/DSC_7839_Edit_1_247eeb8d69f844.jpeg', alt: 'Players entering the field' },
          { id: 5, src: 'images/hero_0687ae1f973343.jpeg', thumb: 'images/hero_0687ae1f973343.jpeg', alt: 'Architectural detail of the stadium roof' },
        ];

        const DETAIL_ITEMS = [
          {
            id: '01',
            title: 'Peak Performance Environment',
            description: 'Our state-of-the-art retractable roof and hybrid grass pitch system ensures perfect playing conditions year-round, making every match a showcase of skill and athleticism.',
            icon: `<svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-brand-green transition-transform duration-300 hover:scale-110" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1"><path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" /><path stroke-linecap="round" stroke-linejoin="round" d="M13 17l-1-4-1 4M7 17l1-4-1 4" /></svg>`
          },
          {
            id: '02',
            title: 'Total Fan Immersion',
            description: 'With the world\'s largest 360-degree halo screen, stadium-wide 5G Wi-Fi, and 200+ luxury suites, we put you at the heart of the action. This isn\'t just watching a game; it\'s living it.',
            icon: `<svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-brand-green transition-transform duration-300 hover:scale-110" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>`
          },
          {
            id: '03',
            title: 'A Greener Future',
            description: 'Meraastrust Stadium is a LEED Platinum certified venue, powered by 100% renewable energy and featuring advanced water recycling systems. We are building a sustainable legacy for generations of fans to come.',
            icon: `<svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-brand-green transition-transform duration-300 hover:scale-110" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M14.5 9.5c-2.5 1-4.5 3-5.5 5.5" /></svg>`
          },
        ];

        // --- Navbar Scroll Effect ---
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
          if (window.scrollY > 50) {
            navbar.classList.add('bg-brand-gray', 'bg-opacity-95', 'shadow-lg', 'backdrop-blur-sm');
            navbar.classList.remove('bg-transparent');
          } else {
            navbar.classList.remove('bg-brand-gray', 'bg-opacity-95', 'shadow-lg', 'backdrop-blur-sm');
            navbar.classList.add('bg-transparent');
          }
        });
        
        // --- Navigation Active State ---
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');
        const navObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    navLinks.forEach(link => {
                        link.classList.remove('active', 'text-white');
                        link.classList.add('text-gray-300');
                        if (link.getAttribute('data-nav-id') === id) {
                            link.classList.add('active', 'text-white');
                            link.classList.remove('text-gray-300');
                        }
                    });
                }
            });
        }, { rootMargin: '-30% 0px -70% 0px' });
        sections.forEach(section => navObserver.observe(section));

        // --- Details Section ---
        const detailsList = document.getElementById('details-list');
        detailsList.innerHTML = DETAIL_ITEMS.map(item => `
          <div class="relative grid grid-cols-1 md:grid-cols-12 gap-8 items-center border-b border-gray-200 pb-12 last:border-b-0 last:pb-0 animate-on-scroll">
            <div class="md:col-span-2">
              <span class="text-8xl font-thin text-gray-200">${item.id}</span>
            </div>
            <div class="md:col-span-7">
              <h3 class="text-3xl md:text-4xl font-bold text-brand-green mb-4 font-heading uppercase">${item.title}</h3>
              <p class="text-gray-600 leading-relaxed">${item.description}</p>
            </div>
            <div class="md:col-span-3 flex justify-center md:justify-end">
              ${item.icon}
            </div>
          </div>
        `).join('');

        // --- Gallery ---
        const galleryMain = document.getElementById('gallery-main');
        const galleryThumbsContainer = document.getElementById('gallery-thumbs');
        const prevBtn = document.getElementById('gallery-prev');
        const nextBtn = document.getElementById('gallery-next');
        let currentIndex = 0;

        function updateGallery(index) {
            galleryMain.style.backgroundImage = `url(${GALLERY_IMAGES[index].src})`;
            document.querySelectorAll('.gallery-thumb').forEach((thumb, i) => {
                if (i === index) {
                    thumb.classList.add('border-white', 'scale-110');
                    thumb.classList.remove('border-transparent', 'opacity-60');
                } else {
                    thumb.classList.remove('border-white', 'scale-110');
                    thumb.classList.add('border-transparent', 'opacity-60');
                }
            });
            currentIndex = index;
        }

        GALLERY_IMAGES.forEach((image, index) => {
            const thumb = document.createElement('img');
            thumb.src = image.thumb;
            thumb.alt = image.alt;
            thumb.className = `gallery-thumb flex-shrink-0 w-24 h-16 object-cover rounded-md cursor-pointer border-2 transition-all duration-300 hover:opacity-100 hover:!scale-110`;
            thumb.addEventListener('click', () => updateGallery(index));
            galleryThumbsContainer.appendChild(thumb);
        });
        
        prevBtn.addEventListener('click', () => {
            const newIndex = currentIndex === 0 ? GALLERY_IMAGES.length - 1 : currentIndex - 1;
            updateGallery(newIndex);
        });

        nextBtn.addEventListener('click', () => {
            const newIndex = currentIndex === GALLERY_IMAGES.length - 1 ? 0 : currentIndex + 1;
            updateGallery(newIndex);
        });

        updateGallery(0);

        // --- Scroll Animations & Number Counter ---
        const animateCountUp = (el) => {
            const target = +el.getAttribute('data-target');
            const final_text = el.getAttribute('data-final-text');
            el.innerText = '0';
            const duration = 2000;
            const frameDuration = 1000 / 60;
            const totalFrames = Math.round(duration / frameDuration);
            let frame = 0;
            
            const counter = setInterval(() => {
                frame++;
                const progress = frame / totalFrames;
                const currentCount = target * progress;
                
                if (target % 1 !== 0) {
                  el.innerText = currentCount.toFixed(1);
                } else {
                  el.innerText = Math.floor(currentCount).toLocaleString();
                }

                if (frame === totalFrames) {
                    el.innerText = final_text || target.toLocaleString();
                    clearInterval(counter);
                }
            }, frameDuration);
        };
        
        const animationObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    if (entry.target.classList.contains('counter') && !entry.target.dataset.animated) {
                        animateCountUp(entry.target);
                        entry.target.dataset.animated = 'true';
                    }
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.animate-on-scroll, .counter').forEach(el => {
            animationObserver.observe(el);
        });

        // --- Scroll To Top Button ---
        const scrollToTopBtn = document.getElementById('scrollToTopBtn');
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.add('visible');
            } else {
                scrollToTopBtn.classList.remove('visible');
            }
        });
        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // --- Footer Year ---
        document.getElementById('footer-year').textContent = new Date().getFullYear();

      });
    </script>
 @include('include.footer')