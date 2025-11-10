@include('include.header')

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
      html {
        scroll-behavior: smooth;
      }
      body {
        font-family: 'Open Sans', sans-serif;
        overflow-x: hidden;
        color: #ffffff;
        background-color: #fff; !important;
      }
      h1, h2, h3, h4, h5, h6 {
        font-family: 'Poppins', sans-serif;
      }
      /* Animation class for elements to fade in on scroll */
      .animate-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        will-change: opacity, transform;
      }
      .animate-on-scroll.is-visible {
        opacity: 1;
        transform: translateY(0);
      }
      /* Sticky Navigation Animation */
      .sticky-nav-wrapper.sticky {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 50;
        animation: slideDown 0.5s ease-out;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
      }
      @keyframes slideDown {
        from { transform: translateY(-100%); }
        to { transform: translateY(0); }
      }
      /* Scroll to top button visibility */
      #scroll-to-top {
        transition: opacity 0.3s ease-out, transform 0.3s ease-out;
      }
      #scroll-to-top.hidden-btn {
        opacity: 0;
        transform: scale(0.5);
        pointer-events: none;
      }
    </style>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              'warefa-primary': '#0A2F5B',
              'warefa-accent': '#C4A484',
              'warefa-dark': '#212529',
              'warefa-light': '#6c757d',
              'warefa-background': '#f8f9fa',
            },
            fontFamily: {
              sans: ['Open Sans', 'sans-serif'],
              heading: ['Poppins', 'sans-serif'],
            },
          },
        },
      }
    </script>
  </head>
  <body>
    <header>
      <div 
        class="h-[80vh] relative bg-cover bg-center flex flex-col justify-center items-center text-white text-center"
        style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(images/MAP_WAREFA_Website_eab9f91e20e282.png)"
      >
        <p class="animate-on-scroll" style="transition-delay: 0.1s;">Home / Communities / WAREFA</p>
        <h1 class="font-heading font-medium tracking-wider my-5 animate-on-scroll text-5xl md:text-7xl lg:text-8xl" style="transition-delay: 0.2s;">WAREFA</h1>
        <div 
          class="w-32 h-32 bg-white/80 flex justify-center items-center text-warefa-dark rounded-full text-xl font-bold border-2 border-white animate-on-scroll"
          style="transition-delay: 0.3s;"
        >
          WAREFA
        </div>
      </div>
   
    </header>

    <main>
        <section id="welcome" class="py-20 lg:py-24 container mx-auto px-5">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <h2 class="font-heading text-4xl lg:text-5xl mb-5 text-warefa-primary animate-on-scroll">Welcome to WAREFA</h2>
                    <p class="mb-8 text-warefa-light leading-relaxed animate-on-scroll" style="transition-delay: 0.1s;">
                        Discover WAREFA, Riyadh's premier integrated community where modern living meets the tranquility of nature. Meticulously designed public spaces and pedestrian-friendly avenues create a breathtaking environment to call home.
                    </p>
                    <div class="animate-on-scroll" style="transition-delay: 0.2s;">
                        <a href="#" class="bg-warefa-accent text-white py-4 px-8 rounded-full inline-flex items-center cursor-pointer uppercase font-semibold transition-all duration-300 hover:bg-opacity-80 hover:scale-105 transform">
                            <span class="bg-white/20 rounded-full p-2.5 inline-flex mr-4">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                            Register Your Interest
                        </a>
                    </div>
                </div>
                <div class="text-center lg:text-left lg:border-l lg:border-gray-200 lg:pl-8 animate-on-scroll" style="transition-delay: 0.3s;">
                     <div class="border-t lg:border-t-0 border-gray-200 pt-5 lg:pt-0">
                        <p class="text-warefa-light tracking-widest text-sm">LOCATION</p>
                        <p class="text-2xl font-semibold text-warefa-primary">Riyadh</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="community" class="container mx-auto px-5 py-10">
            <div class="grid md:grid-cols-3 gap-2.5">
                <div class="overflow-hidden rounded-lg animate-on-scroll" style="transition-delay: 0s">
                    <img src="images/warefa_lifestyle2_30c7ddd548ab0a.png" alt="Community photo 1" class="w-full h-full object-cover transition-transform duration-500 ease-in-out hover:scale-105 hover:brightness-110">
                </div>
                <div class="overflow-hidden rounded-lg animate-on-scroll" style="transition-delay: 0.1s">
                    <img src="images/warefa_lifestyle_3deef2031b1923.png" alt="Community photo 2" class="w-full h-full object-cover transition-transform duration-500 ease-in-out hover:scale-105 hover:brightness-110">
                </div>
                <div class="overflow-hidden rounded-lg animate-on-scroll" style="transition-delay: 0.2s">
                    <img src="images/sedra_lifestyle_new_299f7af7c63ce9.jpeg" alt="Community photo 3" class="w-full h-full object-cover transition-transform duration-500 ease-in-out hover:scale-105 hover:brightness-110">
                </div>
            </div>
        </section>

        <section id="phases" class="py-20 lg:py-24 container mx-auto px-5">
            <h2 class="font-heading text-4xl lg:text-5xl mb-16 text-center text-warefa-primary animate-on-scroll">Available Phases</h2>
            <div class="grid lg:grid-cols-2 gap-12 items-center mb-20 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl p-4 rounded-lg animate-on-scroll">
                <div class="img-wrapper rounded-lg overflow-hidden shadow-lg">
                    <img src="images/Modern_Salmani_b16b69a28806c8.jpeg" alt="The Oasis Phase" class="w-full transition-transform duration-500 hover:scale-105">
                </div>
                <div>
                    <span class="bg-blue-100 text-warefa-primary py-1.5 px-4 rounded-full inline-block mb-5 text-sm font-semibold">SALES LAUNCHED</span>
                    <h3 class="font-heading text-4xl mb-5">The Oasis Phase</h3>
                    <p class="text-warefa-light leading-relaxed">Introducing the inaugural phase of WAREFA. With the community already generating excitement, this first phase offers a unique opportunity to join a lifestyle defined by elegance and modern comfort.</p>
                </div>
            </div>
            <div class="grid lg:grid-cols-2 gap-12 items-center mb-20 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl p-4 rounded-lg animate-on-scroll">
                <div class="img-wrapper rounded-lg overflow-hidden shadow-lg lg:order-last">
                    <img src="images/Fine_Art142_1_ddb0af8ddad695.jpeg" alt="The Boulevard Phase" class="w-full transition-transform duration-500 hover:scale-105">
                </div>
                <div>
                    <span class="bg-blue-100 text-warefa-primary py-1.5 px-4 rounded-full inline-block mb-5 text-sm font-semibold">COMING SOON</span>
                    <h3 class="font-heading text-4xl mb-5">The Boulevard Phase</h3>
                    <p class="text-warefa-light leading-relaxed">Anticipated for late 2024, this phase will feature exclusive townhouses with direct access to the central boulevard, offering unparalleled access to retail and recreational opportunities at your doorstep.</p>
                </div>
            </div>
        </section>
        
        <section id="benefits" class="py-20 lg:py-24 bg-warefa-background">
            <div class="container mx-auto px-5">
                <h2 class="font-heading text-4xl lg:text-5xl mb-20 text-center text-warefa-primary animate-on-scroll">Key Benefits</h2>
                <div class="relative pl-24 mb-16 max-w-2xl mx-auto text-left animate-on-scroll" style="transition-delay: 0s">
                    <span class="absolute left-0 top-0 font-heading text-8xl font-bold text-gray-100 leading-none z-0">01</span>
                    <div class="relative z-10">
                        <h3 class="font-heading text-warefa-primary text-3xl mb-2.5">Strategic Central Location</h3>
                        <p class="text-warefa-light">Nestled in the heart of north Riyadh, WAREFA is moments away from King Khalid International Airport and Riyadh's most iconic landmarks, blending convenience with exclusivity.</p>
                    </div>
                </div>
                 <div class="relative pl-24 mb-16 max-w-2xl mx-auto text-left animate-on-scroll" style="transition-delay: 0.1s">
                    <span class="absolute left-0 top-0 font-heading text-8xl font-bold text-gray-100 leading-none z-0">02</span>
                    <div class="relative z-10">
                        <h3 class="font-heading text-warefa-primary text-3xl mb-2.5">Steps from Vibrant Lifestyle Hubs</h3>
                        <p class="text-warefa-light">As a resident of WAREFA, the finest dining, shopping, and entertainment venues are just moments away, offering a dynamic lifestyle set against a backdrop of beautiful landscapes and parks.</p>
                    </div>
                </div>
                 <div class="relative pl-24 mb-16 max-w-2xl mx-auto text-left animate-on-scroll" style="transition-delay: 0.2s">
                    <span class="absolute left-0 top-0 font-heading text-8xl font-bold text-gray-100 leading-none z-0">03</span>
                    <div class="relative z-10">
                        <h3 class="font-heading text-warefa-primary text-3xl mb-2.5">Inspired by Nature</h3>
                        <p class="text-warefa-light">The open green spaces and the rhythm of community life inspire the design of WAREFA. Natural elements are integrated throughout, providing a tranquil and beautiful backdrop to everyday life.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="masterplan" class="py-20 lg:py-24 container mx-auto px-5">
            <h2 class="font-heading text-4xl lg:text-5xl mb-10 text-center text-warefa-primary animate-on-scroll">The Masterplan</h2>
            <div class="flex justify-center flex-wrap mb-10 animate-on-scroll" style="transition-delay: 0.1s">
                 <button class="py-2.5 px-5 m-1.5 border border-warefa-primary bg-warefa-primary text-white rounded-md cursor-pointer transition-all duration-300 font-heading">
                    Overall Masterplan
                </button>
            </div>
            <img src="images/masterplan_warefa_2x_f511e63ad2ff9e.png" alt="Masterplan" class="rounded-lg shadow-lg animate-on-scroll" style="transition-delay: 0.2s">
        </section>

        <section id="glance" class="py-20 lg:py-24 container mx-auto px-5">
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-10">
                <div class="text-center p-5 animate-on-scroll" style="transition-delay: 0s">
                    <h3 class="font-heading font-bold text-5xl lg:text-6xl text-warefa-primary">
                        <span class="count-up" data-value="350">31</span>
                        <span class="text-3xl lg:text-4xl"> Amenities</span>
                    </h3>
                    <p class="text-warefa-light mt-2.5">Conveniently located to cater to your every need</p>
                </div>
                <div class="text-center p-5 animate-on-scroll" style="transition-delay: 0.1s">
                    <h3 class="font-heading font-bold text-5xl lg:text-6xl text-warefa-primary">
                        <span class="count-up" data-value="25">300</span>K
                        <span class="text-3xl lg:text-4xl"> Homes</span>
                    </h3>
                    <p class="text-warefa-light mt-2.5">With designs to suit all tastes and lifestyles</p>
                </div>
                <div class="text-center p-5 animate-on-scroll" style="transition-delay: 0.2s">
                    <h3 class="font-heading font-bold text-5xl lg:text-6xl text-warefa-primary">
                        <span class="count-up" data-value="15">31</span>M
                        <span class="text-3xl lg:text-4xl"> sqm</span>
                    </h3>
                    <p class="text-warefa-light mt-2.5">Meticulously maintained and managed landscape</p>
                </div>
                <div class="text-center p-5 animate-on-scroll" style="transition-delay: 0.3s">
                    <h3 class="font-heading font-bold text-5xl lg:text-6xl text-warefa-primary">
                        <span class="count-up" data-value="6">2</span>
                        <span class="text-3xl lg:text-4xl"> Phases</span>
                    </h3>
                    <p class="text-warefa-light mt-2.5">Each an integrated, pedestrian-friendly neighborhood</p>
                </div>
            </div>
        </section>

        <section id="location" class="relative py-20 lg:py-24">
            <div class="absolute inset-0 bg-cover bg-center opacity-10 z-0" style="background-image: url(images/EXT_06_Mosque_Aerial_B3_a7367f516ec1ad.jpeg)"></div>
            <div class="relative container mx-auto px-5 z-10">
                 <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="bg-white p-10 rounded-lg shadow-xl animate-on-scroll">
                        <h2 class="font-heading text-3xl lg:text-4xl mb-5 text-warefa-primary">The Perfect Location in Riyadh</h2>
                        <p class="text-warefa-light leading-relaxed">
                           WAREFA is situated in the prestigious north of Riyadh, a stone's throw from major business hubs and entertainment districts. The entire city is easily accessible via King Salman Road, connecting you to the heart of this dynamic capital hub.
                        </p>
                    </div>
                    <div></div>
                </div>
            </div>
        </section>

        <section id="sales-centers" class="py-20 lg:py-24 container mx-auto px-5">
            <div class="flex justify-between items-center mb-10 animate-on-scroll">
                <h2 class="font-heading text-4xl lg:text-5xl text-warefa-primary">Our Sales Centers</h2>
                <div class="flex gap-2.5">
                   <button id="sales-prev" class="w-12 h-12 rounded-full border border-gray-300 bg-white flex justify-center items-center transition-all duration-300 hover:scale-110 hover:shadow-md">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform rotate-180"><path d="M5 12H19" stroke="#0A2F5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 5L19 12L12 19" stroke="#0A2F5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                    <button id="sales-next" class="w-12 h-12 rounded-full border border-gray-300 bg-white flex justify-center items-center transition-all duration-300 hover:scale-110 hover:shadow-md">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H19" stroke="#0A2F5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 5L19 12L12 19" stroke="#0A2F5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                </div>
            </div>
            <div class="overflow-hidden animate-on-scroll" style="transition-delay: 0.1s;">
                <div id="sales-carousel-inner" class="flex transition-transform duration-500 ease-in-out">
                    <div class="flex-shrink-0 w-full md:w-1/2 px-2.5">
                        <div class="h-96 rounded-lg bg-cover bg-center text-white p-10 flex flex-col justify-center transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(images/Fine_Art192_85523e78a53f19.png)">
                            <h3 class="font-heading text-3xl mb-8">WAREFA Sales Center</h3>
                            <p class="flex items-center mb-4">PHONE: 920022288</p>
                            <p class="flex items-center mb-4">LOCATION: North Riyadh</p>
                            <p class="flex items-center">WORKING HOURS: Sun-Thu: (10 AM - 7 PM)</p>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-full md:w-1/2 px-2.5">
                        <div class="h-96 rounded-lg bg-cover bg-center text-white p-10 flex flex-col justify-center transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(images/Fine_Art192_85523e78a53f19.png)">
                            <h3 class="font-heading text-3xl mb-8">Riyadh Boulevard Center</h3>
                            <p class="flex items-center mb-4">PHONE: 920022288</p>
                            <p class="flex items-center mb-4">LOCATION: Hittin, Riyadh</p>
                            <p class="flex items-center">WORKING HOURS: Sun-Thu: (10 AM - 7 PM), Fri-Sat: (4 PM - 10 PM)</p>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-full md:w-1/2 px-2.5">
                        <div class="h-96 rounded-lg bg-cover bg-center text-white p-10 flex flex-col justify-center transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(https://picsum.photos/600/400?image=103)">
                            <h3 class="font-heading text-3xl mb-8">KAFD Sales Center</h3>
                            <p class="flex items-center mb-4">PHONE: 920022288</p>
                            <p class="flex items-center mb-4">LOCATION: King Abdullah Financial District, Riyadh</p>
                            <p class="flex items-center">WORKING HOURS: Daily: (10 AM - 8 PM)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 lg:py-24 bg-warefa-background">
            <div class="container mx-auto px-5">
                <div class="flex flex-wrap justify-between items-center gap-5">
                    <h2 class="font-heading text-2xl lg:text-4xl text-warefa-primary animate-on-scroll">
                        Discover modern living in the heart of Riyadh<br>in a WAREFA community
                    </h2>
                     <a href="#" class="bg-warefa-accent text-white py-4 px-8 rounded-full inline-flex items-center cursor-pointer uppercase font-semibold transition-all duration-300 hover:bg-opacity-80 hover:scale-105 transform animate-on-scroll" style="transition-delay: 0.1s;">
                        <span class="bg-white/20 rounded-full p-3.5 inline-flex mr-2.5">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        REGISTER INTEREST NOW
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-warefa-dark text-white py-5">
        <nav class="container mx-auto px-5 flex justify-center items-center flex-wrap">
            <a href="#phases" class="text-white px-5 py-2.5 transition-colors duration-300 hover:text-gray-300">Phases</a>
            <a href="#community" class="text-white px-5 py-2.5 transition-colors duration-300 hover:text-gray-300">Community Life</a>
            <a href="#benefits" class="text-white px-5 py-2.5 transition-colors duration-300 hover:text-gray-300">Benefits</a>
            <a href="#masterplan" class="text-white px-5 py-2.5 transition-colors duration-300 hover:text-gray-300">Masterplan</a>
            <a href="#glance" class="text-white px-5 py-2.5 transition-colors duration-300 hover:text-gray-300">At Glance</a>
            <a href="#location" class="text-white px-5 py-2.5 transition-colors duration-300 hover:text-gray-300">Location</a>
            <a href="#sales-centers" class="text-white px-5 py-2.5 transition-colors duration-300 hover:text-gray-300">Sales centers</a>
        </nav>
    </footer>

    <div class="fixed bottom-5 right-5 z-50 flex flex-col gap-2.5">
      <button id="scroll-to-top" class="w-12 h-12 rounded-full bg-warefa-dark text-white flex justify-center items-center shadow-lg hidden-btn">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
          </svg>
      </button>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', () => {
        // --- On Scroll Animations ---
        const scrollObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.animate-on-scroll').forEach(el => scrollObserver.observe(el));
        
        // --- Sticky Navigation ---
        const navWrapper = document.getElementById('nav-wrapper');
        // A threshold of 100px before the nav becomes sticky
        const stickyThreshold = navWrapper.offsetTop > 0 ? navWrapper.offsetTop : 100;

        window.addEventListener('scroll', () => {
            if (window.scrollY > stickyThreshold) {
                navWrapper.classList.add('sticky');
            } else {
                navWrapper.classList.remove('sticky');
            }
        }, { passive: true });

        // --- Count Up Animation ---
        const countUpObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const target = parseInt(el.dataset.value, 10);
                    const duration = 2000;
                    let start = 0;
                    let startTime = null;
                    
                    const step = (timestamp) => {
                        if (!startTime) startTime = timestamp;
                        const progress = Math.min((timestamp - startTime) / duration, 1);
                        el.textContent = Math.floor(progress * target);
                        if (progress < 1) {
                            window.requestAnimationFrame(step);
                        }
                    };
                    window.requestAnimationFrame(step);
                    observer.unobserve(el);
                }
            });
        }, { threshold: 0.8 });
        
        document.querySelectorAll('.count-up').forEach(el => countUpObserver.observe(el));

        // --- Sales Center Carousel ---
        const carouselInner = document.getElementById('sales-carousel-inner');
        const prevBtn = document.getElementById('sales-prev');
        const nextBtn = document.getElementById('sales-next');
        const totalItems = carouselInner.children.length;
        let currentIndex = 0;
        let itemsVisible = 1;

        const updateCarousel = () => {
            itemsVisible = window.innerWidth >= 768 ? 2 : 1;
            // Ensure index is not out of bounds after resize
            if (currentIndex > totalItems - itemsVisible) {
                currentIndex = totalItems - itemsVisible;
            }
            carouselInner.style.transform = `translateX(-${currentIndex * (100 / totalItems * itemsVisible)}%)`;
        };

        nextBtn.addEventListener('click', () => {
            if (totalItems > itemsVisible) {
                currentIndex = (currentIndex >= totalItems - itemsVisible) ? 0 : currentIndex + 1;
                updateCarousel();
            }
        });

        prevBtn.addEventListener('click', () => {
            if (totalItems > itemsVisible) {
                currentIndex = (currentIndex <= 0) ? totalItems - itemsVisible : currentIndex - 1;
                updateCarousel();
            }
        });
        
        window.addEventListener('resize', updateCarousel);
        updateCarousel(); // Initial call

        // --- Floating Scroll-to-Top Button ---
        const scrollToTopBtn = document.getElementById('scroll-to-top');

        const toggleVisibility = () => {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.remove('hidden-btn');
            } else {
                scrollToTopBtn.classList.add('hidden-btn');
            }
        };

        window.addEventListener('scroll', toggleVisibility, { passive: true });
        
        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
      });
    </script>
    
 @include('include.footer')
