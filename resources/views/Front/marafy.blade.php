@include('include.header')

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
              sans: ['Helvetica', 'Arial', 'sans-serif'],
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
      /* FAQ Accordion Styles */
      .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s ease-in-out;
      }
      .faq-item.open .faq-answer {
        max-height: 20rem; /* Adjust as needed */
      }
      .faq-item.open .faq-icon {
        transform: rotate(45deg);
      }
      .faq-item .faq-icon {
        transition: transform 0.3s ease-in-out;
      }
      /* Active Nav Link Underline */
       .nav-link span {
        display: block;
        transition: width 0.3s ease-in-out;
        width: 0;
      }
      .nav-link.active span, .nav-link:hover span {
         width: 1rem; /* w-4 */
      }
      /* Scroll to top button visibility */
      #scrollToTopBtn {
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s, visibility 0.3s, transform 0.3s;
      }
      #scrollToTopBtn.visible {
        opacity: 1;
        visibility: visible;
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
    </style>
  </head>
  <body class="bg-white text-brand-gray font-sans">
    
    <!-- Header Section -->
    <header 
      class="relative h-screen bg-cover bg-center text-white flex flex-col items-center justify-center"
      style="background-image: url('images/Fine_Art161_4dd235af9c98d6.png')"
    >
      <div class="absolute inset-0 bg-black opacity-40"></div>
      <div class="relative z-10 text-center">
        <div class="text-sm tracking-widest mb-4 header-title-animation">
          <span>Home / By Meraastrust / MARAFY</span>
        </div>
        <h1 class="text-7xl md:text-9xl font-thin tracking-widest my-4 header-title-animation">MARAFY</h1>
        <div class="mt-8 flex justify-center header-logo-animation">
          <div class="bg-white bg-opacity-90 p-4 border border-gray-200">
            <svg width="80" height="80" viewBox="0 0 100 100" class="text-brand-green">
              <rect x="20" y="20" width="60" height="60" stroke="currentColor" stroke-width="4" fill="none" />
              <path d="M40 70 C 45 50, 55 50, 60 70" stroke="currentColor" stroke-width="4" fill="none" />
              <path d="M30 40 Q 50 25, 70 40" stroke="currentColor" stroke-width="4" fill="none" />
              <text x="50" y="90" text-anchor="middle" font-size="12" fill="currentColor" class="font-bold">مرافي</text>
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
              <h2 class="text-4xl md:text-5xl font-thin text-brand-gray leading-tight mb-6 animate-on-scroll">
                Redefining Living Experience in North Jeddah
              </h2>
              <p class="text-gray-600 leading-relaxed animate-on-scroll delay-100">
                MARAFY is the first fully integrated, mixed-use destination developed by Meraastrust, redefining lifestyle in North Jeddah and positioning it as a world-class waterfront destination. Centered around an impressive 11-kilometer water canal, the first-of-its-kind in the Kingdom, MARAFY features scenic pedestrian promenades, premium retail shops, floating restaurants, luxury hotels, and beautifully landscaped parks, all complemented by a vibrant mix of cultural and entertainment attractions.
              </p>
            </div>
            <div class="space-y-8">
              <div class="flex items-center p-4 border-b border-gray-200 last:border-b-0 transition duration-300 hover:bg-gray-50 hover:shadow-sm animate-on-scroll delay-100">
                <div class="mr-6">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h6m-6 4h6m-6 4h6" />
                  </svg>
                </div>
                <span class="text-2xl font-light text-brand-gray">Retail</span>
              </div>
              <div class="flex items-center p-4 border-b border-gray-200 last:border-b-0 transition duration-300 hover:bg-gray-50 hover:shadow-sm animate-on-scroll delay-200">
                <div class="mr-6">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h6m-6 4h6m-6 4h6" />
                      <path d="M17 10h.01M17 14h.01M17 18h.01M7 10h.01M7 14h.01M7 18h.01" />
                  </svg>
                </div>
                <span class="text-2xl font-light text-brand-gray">Offices</span>
              </div>
              <div class="flex items-center p-4 border-b border-gray-200 last:border-b-0 transition duration-300 hover:bg-gray-50 hover:shadow-sm animate-on-scroll delay-300">
                <div class="mr-6">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                  </svg>
                </div>
                <span class="text-2xl font-light text-brand-gray">Residential</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Numbers Section -->
      <section id="numbers" class="py-20 md:py-32 bg-brand-light-gray">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="p-4 border-b md:border-b-0 md:border-r border-gray-300 last:border-r-0 last:border-b-0 transition-transform duration-300 hover:scale-105 hover:shadow-lg rounded-lg animate-on-scroll">
              <h3 class="counter text-6xl md:text-8xl font-thin text-brand-green tracking-tight" data-target="100">0</h3>
              <p class="mt-4 text-lg text-gray-700">100+<span class="align-super ml-1">m</span> Wide urban water canal</p>
            </div>
            <div class="p-4 border-b md:border-b-0 md:border-r border-gray-300 last:border-r-0 last:border-b-0 transition-transform duration-300 hover:scale-105 hover:shadow-lg rounded-lg animate-on-scroll delay-100">
              <h3 class="counter text-6xl md:text-8xl font-thin text-brand-green tracking-tight" data-target="130">0</h3>
              <p class="mt-4 text-lg text-gray-700">130K+ Expected residents</p>
            </div>
            <div class="p-4 transition-transform duration-300 hover:scale-105 hover:shadow-lg rounded-lg animate-on-scroll delay-200">
              <h3 class="counter text-6xl md:text-8xl font-thin text-brand-green tracking-tight" data-target="9.4">0</h3>
              <p class="mt-4 text-lg text-gray-700">9.4M+<span class="align-super ml-1">m²</span> Integrated mixed-use area</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Video Section -->
      <section id="video" class="relative h-[70vh] bg-cover bg-center text-white flex items-center justify-center">
        <div 
          class="absolute inset-0 w-full h-full bg-cover bg-center"
          style="background-image: url('images/Fine_Art143_08c3e61b33473f.png')"
        ></div>
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative z-10 text-center animate-on-scroll">
          <button class="bg-white bg-opacity-80 hover:bg-opacity-100 text-brand-green w-24 h-24 rounded-full flex items-center justify-center transition-transform transform hover:scale-110 hover:shadow-xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
            </svg>
          </button>
          <p class="mt-4 text-sm font-semibold tracking-widest uppercase">Play Video</p>
        </div>
      </section>

      <!-- Details Section -->
      <section id="details" class="py-20 md:py-32 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-4xl md:text-5xl font-thin text-brand-gray leading-tight">
              The Next Chapter of Urban Living in North Jeddah
            </h2>
          </div>
          <div class="space-y-20">
            <!-- Detail Item 1 -->
            <div class="relative grid grid-cols-1 md:grid-cols-12 gap-8 items-center border-b pb-12 last:border-b-0 last:pb-0 animate-on-scroll">
              <div class="md:col-span-2">
                <span class="text-8xl font-thin text-gray-200">01</span>
              </div>
              <div class="md:col-span-7">
                <h3 class="text-3xl md:text-4xl font-light text-brand-green mb-4">Transformative Destination, Immersive Experiences</h3>
                <p class="text-gray-600 leading-relaxed">Discover a world of possibilities at MARAFY, where every corner is designed to inspire and delight. A vibrant mix of retail, office, and residential spaces creates a dynamic urban environment unlike any other.</p>
              </div>
              <div class="md:col-span-3 flex justify-center md:justify-end">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-brand-green transition-transform duration-300 hover:scale-110" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l5.447 2.724A1 1 0 0021 16.382V5.618a1 1 0 00-1.447-.894L15 7m0 10V7m0 10L9 7" />
                    <circle cx="12" cy="12" r="3" stroke-width="1" />
                </svg>
              </div>
            </div>
            <!-- Detail Item 2 -->
            <div class="relative grid grid-cols-1 md:grid-cols-12 gap-8 items-center border-b pb-12 last:border-b-0 last:pb-0 animate-on-scroll">
              <div class="md:col-span-2">
                <span class="text-8xl font-thin text-gray-200">02</span>
              </div>
              <div class="md:col-span-7">
                <h3 class="text-3xl md:text-4xl font-light text-brand-green mb-4">The First-of-its-kind Canal in the Kingdom</h3>
                <p class="text-gray-600 leading-relaxed">Stretching 11 kilometers long and 100 meters wide, MARAFY Water Canal is Saudi Arabia’s first-of-its-kind waterfront corridor fed by the Red Sea. This vibrant waterway serves as a key mobility hub, featuring a new marina and modern transit options like water taxis, jetties, and bridges that will create a vibrant and attractive waterfront and enhance walkability and connectivity across MARAFY.</p>
              </div>
              <div class="md:col-span-3 flex justify-center md:justify-end">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-brand-green transition-transform duration-300 hover:scale-110" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.5 15.5c3-1.5 5.5-1.5 8.5 0s5.5 1.5 8.5 0" />
                </svg>
              </div>
            </div>
            <!-- Detail Item 3 -->
            <div class="relative grid grid-cols-1 md:grid-cols-12 gap-8 items-center border-b pb-12 last:border-b-0 last:pb-0 animate-on-scroll">
              <div class="md:col-span-2">
                <span class="text-8xl font-thin text-gray-200">03</span>
              </div>
              <div class="md:col-span-7">
                <h3 class="text-3xl md:text-4xl font-light text-brand-green mb-4">Sustainable Development</h3>
                <p class="text-gray-600 leading-relaxed">MARAFY is a blueprint for the future, seamlessly blending cutting-edge technology with sustainable design principles. Prioritizing pedestrian and cycling pathways, multi-modal transport, and green spaces, MARAFY will set new standards for urban living in Saudi Arabia, offering a dynamic environment that promotes social interaction, well-being, and future-forward lifestyles.</p>
              </div>
              <div class="md:col-span-3 flex justify-center md:justify-end">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-brand-green transition-transform duration-300 hover:scale-110" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.5 9.5c-2.5 1-4.5 3-5.5 5.5" />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Alarous Section -->
      <section id="alarous" class="py-20 md:py-32 bg-brand-light-gray overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="text-center mb-8 animate-on-scroll">
            <span class="text-brand-green tracking-widest">MARAFY & ALAROUS COMMUNITY</span>
            <h2 class="text-4xl md:text-6xl font-thin text-brand-gray mt-2">Expanding Horizons of Lifestyle</h2>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mt-12">
              <div class="relative h-96 animate-on-scroll">
                  <img src="images/Fine_Art192_85523e78a53f19.png" alt="Alarous Community View 1" class="absolute top-0 left-0 w-full h-full object-cover rounded-lg shadow-xl transition-transform duration-500 hover:scale-105"/>
              </div>
              <div class="relative h-96 animate-on-scroll delay-200">
                  <img src="images/Fine_Art95_027c1bcc59c0e1.png" alt="Alarous Community View 2" class="absolute top-0 left-0 w-full h-full object-cover rounded-lg shadow-xl transition-transform duration-500 hover:scale-105 translate-y-12 md:translate-y-0 md:-translate-x-12"/>
              </div>
          </div>
          <div class="max-w-3xl mx-auto mt-20 md:mt-16 text-center animate-on-scroll">
              <p class="text-gray-600 leading-relaxed mb-8">
                  Nestled along the vibrant waterfront canal, ALAROUS community seamlessly blends with its surroundings to offer a truly exceptional living experience that redefines modern lifestyles. From exhilarating water sports and waterfront dining to renowned retail brands, scenic walkways, and dedicated cycling tracks, MARAFY enriches daily life in ALAROUS, infusing it with energy, vibrancy, and a dynamic sense of community.
              </p>
              <a href="#" class="inline-flex items-center bg-brand-green text-white py-3 px-8 rounded-full text-lg font-medium hover:bg-brand-green-light transition-all duration-300 group transform hover:scale-105 hover:shadow-lg">
                  Discover ALAROUS
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                  </svg>
              </a>
          </div>
        </div>
      </section>

      <!-- Gallery Section -->
      <section id="gallery" class="py-20 md:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="text-left mb-12 animate-on-scroll">
            <h2 class="text-4xl md:text-5xl font-thin text-brand-gray">Gallery</h2>
          </div>
          <div id="gallery-main" class="relative h-[70vh] w-full bg-cover bg-center rounded-lg shadow-2xl transition-all duration-500 animate-on-scroll delay-100">
              <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/70 to-transparent">
                  <div class="flex items-center justify-center space-x-4">
                      <button id="gallery-prev" class="p-3 bg-white/20 rounded-full text-white hover:bg-white/40 transition-all duration-300 transform hover:scale-110">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                          </svg>
                      </button>

                      <div id="gallery-thumbs" class="flex space-x-3 overflow-hidden">
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

      <!-- FAQs Section -->
      <section id="faqs" class="py-20 md:py-32 bg-brand-light-gray">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="max-w-4xl mx-auto animate-on-scroll">
            <h2 class="text-4xl md:text-5xl font-thin text-brand-gray mb-12">FAQs</h2>
            <dl id="faq-list" class="space-y-2">
              <!-- FAQ items will be injected by JS -->
            </dl>
          </div>
        </div>
      </section>

      <!-- Partnership Section -->
      <section id="partnership" class="py-20 md:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex flex-col md:flex-row justify-between items-center text-center md:text-left">
            <h2 class="text-5xl md:text-7xl font-thin text-brand-gray leading-tight mb-8 md:mb-0 animate-on-scroll">
              Partnership<br/>Opportunities
            </h2>
            <a href="#" class="inline-flex items-center bg-brand-green text-white py-4 px-10 rounded-full text-lg font-medium hover:bg-brand-green-light transition-all duration-300 group transform hover:scale-105 hover:shadow-lg animate-on-scroll delay-200">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 transform -rotate-45 group-hover:rotate-0 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
              </svg>
              Register Your Interest
            </a>
          </div>
        </div>
      </section>
    </main>

    
    


    <script>
      document.addEventListener('DOMContentLoaded', () => {

        // --- Data ---
        const galleryImages = [
            { id: 1, src: 'images/Fine_Art142_1_ddb0af8ddad695.jpeg', thumb: 'images/Fine_Art142_1_ddb0af8ddad695.jpeg', alt: 'Community gathering at sunset' },
            { id: 2, src: 'images/EXT_01_Street_B4_4d4ffcbf8a7b45.jpeg', thumb: 'images/EXT_01_Street_B4_4d4ffcbf8a7b45.jpeg', alt: 'Smiling children enjoying the outdoors' },
            { id: 3, src: 'images/EXT_03_NCC_B4_b604f8f83edf27.jpeg', thumb: 'images/EXT_03_NCC_B4_b604f8f83edf27.jpeg', alt: 'Waterfront with boats and modern architecture' },
            { id: 4, src: 'images/DSC_05383_43db5927fcdced.jpeg', thumb: 'images/DSC_05383_43db5927fcdced.jpeg', alt: 'Couple on a luxury boat' },
            { id: 5, src: 'images/DSC_01311_Pano_copyl_7ef491759bf6fd.jpeg', thumb: 'images/DSC_01311_Pano_copyl_7ef491759bf6fd.jpeg', alt: 'Dining experience by the water' },
        ];

        const faqsData = [
            { question: 'Will this development result in further property expropriation?', answer: 'Details regarding property and land will be announced in due course. We are committed to a fair and transparent process in line with all regulations.' },
            { question: 'Why was a land freeze imposed in MARAFY project area?', answer: 'A land freeze was implemented to facilitate planning and development for this large-scale urban project, ensuring that the infrastructure can be developed efficiently and according to the master plan.' },
            { question: 'What is the current situation and what are the next steps?', answer: 'The project is currently in the advanced planning and initial infrastructure phase. The next steps involve phased construction of the canal, residential, and commercial districts. More updates will be provided as we reach key milestones.' },
            { question: 'Will I lose my investment in the land or the buildings on it?', answer: 'All stakeholders will be treated in accordance with the laws and regulations of the Kingdom of Saudi Arabia. There will be a clear process for valuation and compensation where applicable.' },
            { question: 'What is the valuation mechanism?', answer: 'The valuation mechanism will be managed by an independent, government-appointed committee to ensure fairness and accuracy, based on market rates and established legal frameworks.' },
            { question: 'What is the compensation process?', answer: 'The compensation process will be communicated clearly to all affected parties. It will involve official notifications, documentation submission, valuation, and disbursement through official channels.' },
        ];


        // --- Navigation Active State ---
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');
        
        const navObserverOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.4
        };

        const navObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    navLinks.forEach(link => {
                        link.classList.remove('active', 'text-white');
                        link.classList.add('text-gray-300');
                        if (link.getAttribute('href') === `#${id}`) {
                            link.classList.add('active', 'text-white');
                            link.classList.remove('text-gray-300');
                        }
                    });
                }
            });
        }, navObserverOptions);

        sections.forEach(section => navObserver.observe(section));




        // --- Gallery ---
        const galleryMain = document.getElementById('gallery-main');
        const galleryThumbsContainer = document.getElementById('gallery-thumbs');
        const prevBtn = document.getElementById('gallery-prev');
        const nextBtn = document.getElementById('gallery-next');
        let currentIndex = 0;

        function updateGallery(index) {
            // Update main image
            galleryMain.style.backgroundImage = `url(${galleryImages[index].src})`;

            // Update thumbnails
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

        galleryImages.forEach((image, index) => {
            const thumb = document.createElement('img');
            thumb.src = image.thumb;
            thumb.alt = image.alt;
            thumb.className = 'gallery-thumb w-24 h-16 object-cover rounded-md cursor-pointer border-2 transition-all duration-300 hover:opacity-100 hover:!scale-110';
            thumb.addEventListener('click', () => updateGallery(index));
            galleryThumbsContainer.appendChild(thumb);
        });
        
        prevBtn.addEventListener('click', () => {
            const newIndex = currentIndex === 0 ? galleryImages.length - 1 : currentIndex - 1;
            updateGallery(newIndex);
        });

        nextBtn.addEventListener('click', () => {
            const newIndex = currentIndex === galleryImages.length - 1 ? 0 : currentIndex + 1;
            updateGallery(newIndex);
        });

        updateGallery(0); // Initial load


        // --- FAQs ---
        const faqList = document.getElementById('faq-list');

        faqsData.forEach((faq, index) => {
            const faqItem = document.createElement('div');
            faqItem.className = 'faq-item border-b border-gray-200 py-6';

            faqItem.innerHTML = `
              <dt>
                <button class="faq-question w-full flex justify-between items-center text-left text-gray-800 group">
                  <span class="text-xl font-light transition-colors duration-300 group-hover:text-brand-green">${faq.question}</span>
                  <span class="ml-6 h-7 flex items-center">
                    <svg class="faq-icon h-6 w-6 transform text-brand-green" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                       <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                  </span>
                </button>
              </dt>
              <dd class="faq-answer mt-2 pr-12">
                <p class="text-base text-gray-600 pt-4">${faq.answer}</p>
              </dd>
            `;
            
            faqList.appendChild(faqItem);
        });

        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', () => {
                const item = button.closest('.faq-item');
                const wasOpen = item.classList.contains('open');

                document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));

                if (!wasOpen) {
                    item.classList.add('open');
                }
            });
        });

        // --- Scroll Animations & Number Counter ---
        const animateCountUp = (el) => {
            const target = +el.getAttribute('data-target');
            el.innerText = '0';
            const duration = 1500; // 1.5 seconds
            const frameDuration = 1000 / 60; // 60fps
            const totalFrames = Math.round(duration / frameDuration);
            let frame = 0;
            
            const counter = setInterval(() => {
                frame++;
                const progress = frame / totalFrames;
                const currentCount = target * progress;
                
                if (target % 1 !== 0) { // Check if target is a float
                  el.innerText = currentCount.toFixed(1);
                } else {
                  el.innerText = Math.floor(currentCount).toLocaleString();
                }

                if (frame === totalFrames) {
                    el.innerText = target.toLocaleString() + (el.innerText.includes('100') ? '+' : (el.innerText.includes('130') ? 'K+' : 'M+'));
                    // Manually add suffixes for specific values after animation completes
                    if (target === 100) el.innerText = '100+';
                    if (target === 130) el.innerText = '130K+';
                    if (target === 9.4) el.innerText = '9.4M+';
                    clearInterval(counter);
                }
            }, frameDuration);
        };
        
        const animationObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    
                    if (entry.target.classList.contains('counter') && !entry.target.dataset.animated) {
                        animateCountUp(entry.target);
                        entry.target.dataset.animated = 'true'; // Prevent re-animating
                    }
                    
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.animate-on-scroll, .counter').forEach(el => {
            animationObserver.observe(el);
        });

      });
    </script>

 @include('include.footer')