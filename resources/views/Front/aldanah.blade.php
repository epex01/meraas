@include('include.header')

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              'primary-blue': '#0A2F5B',
              'accent-gold': '#C4A484',
              'dark-text': '#212529',
              'light-text': '#6c757d',
              'background-light': '#f8f9fa',
              'border-color': '#dee2e6',
            },
            fontFamily: {
              sans: ['Open Sans', 'sans-serif'],
              poppins: ['Poppins', 'sans-serif'],
            },
            fontSize: {
              'clamp-3-6': 'clamp(3rem, 10vw, 6rem)',
            },
          }
        }
      }
    </script>
    <style>
      body {
        font-family: 'Open Sans', 'sans-serif';
        color: #212529;
        overflow-x: hidden;
      }
      h1, h2, h3, h4, h5, h6 {
        font-family: 'Poppins', 'sans-serif';
      }
      @keyframes slideDown {
        from { transform: translateY(-100%); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
      }
      .animate-slideDown {
        animation: slideDown 0.5s ease-out;
      }
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
      .group:hover .group-hover\:w-1\/2 {
          width: 50%;
      }
    </style>
</head>
<body class="bg-white">
    <header>
      <div class="h-[80vh] relative bg-cover bg-center flex flex-col justify-center items-center text-white text-center" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(images/EXT_08_Mosque_B3_754bde1981081b.jpeg)">
        <p class="animate-on-scroll mb-5 text-base" style="transition-delay: 0.1s;">Home / Communities / Aldanah</p>
        <h1 class="animate-on-scroll font-poppins font-medium tracking-wider my-5 text-clamp-3-6" style="transition-delay: 0.2s;">Aldanah</h1>
        <div class="animate-on-scroll w-32 h-32 bg-white/80 flex justify-center items-center text-dark-text rounded-full text-2xl font-bold border-2 border-white" style="transition-delay: 0.3s;">
          Aldanah
        </div>
      </div>      
    </header>

    <main>
        <section id="welcome" class="py-20 container mx-auto max-w-screen-xl px-5 grid md:grid-cols-2 gap-12 items-center">
            <div class="text-center md:text-left">
                <h2 class="animate-on-scroll font-poppins text-5xl mb-5 font-normal text-primary-blue">Welcome to Aldanah</h2>
                <p class="animate-on-scroll mb-8 leading-loose text-light-text" style="transition-delay: 0.1s;">
                    Discover Aldanah, Jeddah's premier coastal community where luxury living meets the serene beauty of the Red Sea. Meticulously designed public spaces and pedestrian-friendly avenues create a breathtaking environment to call home.
                </p>
                <a href="#" class="animate-on-scroll inline-flex items-center bg-accent-gold text-white py-4 px-8 rounded-full uppercase font-semibold transition-all duration-300 hover:bg-[#ab8b6a] hover:scale-105 no-underline" style="transition-delay: 0.2s;">
                    <span class="bg-white/20 rounded-full p-2.5 inline-flex mr-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </span>
                    Register Your Interest
                </a>
            </div>
            <div class="animate-on-scroll md:border-l md:border-border-color md:pl-8 text-center md:text-left border-t border-border-color pt-5 md:border-t-0 md:pt-0" style="transition-delay: 0.3s;">
                <p class="tracking-wider text-sm text-light-text">LOCATION</p>
                <p class="text-2xl font-semibold text-primary-blue">Jeddah</p>
            </div>
        </section>
        
        <section id="community" class="container mx-auto max-w-screen-xl px-5 py-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2.5">
            <div class="animate-on-scroll overflow-hidden rounded-lg" style="transition-delay: 0s"><img src="images/EXT_05_Park_Aerial_B4_a9812175421e8b.jpeg" alt="Community photo 1" class="w-full h-full object-cover transition-transform duration-500 ease-in-out hover:scale-105 hover:brightness-110"></div>
            <div class="animate-on-scroll overflow-hidden rounded-lg" style="transition-delay: 0.1s"><img src="images/EXT_06_Mosque_Aerial_B3_a7367f516e6cdc.jpeg" alt="Community photo 2" class="w-full h-full object-cover transition-transform duration-500 ease-in-out hover:scale-105 hover:brightness-110"></div>
            <div class="animate-on-scroll overflow-hidden rounded-lg" style="transition-delay: 0.2s"><img src="images/aldanah1_28c38a4532e590.jpeg" alt="Community photo 3" class="w-full h-full object-cover transition-transform duration-500 ease-in-out hover:scale-105 hover:brightness-110"></div>
        </section>

        <section id="phases" class="py-20 container mx-auto max-w-screen-xl px-5">
            <h2 class="animate-on-scroll font-poppins text-5xl font-normal mb-16 text-center text-primary-blue">Available Phases</h2>
            <div class="animate-on-scroll grid lg:grid-cols-2 gap-12 items-center mb-20 transition-transform duration-300 hover:-translate-y-1 hover:shadow-2xl p-4 rounded-lg">
                <div class="rounded-lg overflow-hidden shadow-lg"><img src="images/View_B_2_Stage_E_38ee10e67c5ca1.jpeg" alt="The Marina Phase" class="w-full transition-transform duration-500 hover:scale-105"></div>
                <div>
                    <span class="bg-[#e0e8f2] text-primary-blue py-1.5 px-4 rounded-full inline-block mb-5 text-sm font-semibold">SALES LAUNCHED</span>
                    <h3 class="font-poppins text-4xl mb-5 font-normal">The Marina Phase</h3>
                    <p class="text-light-text">Introducing the inaugural phase of Aldanah. With the community already generating excitement, this first phase offers a unique opportunity to join a lifestyle defined by elegance and seaside charm.</p>
                </div>
            </div>
            <div class="animate-on-scroll grid lg:grid-cols-2 gap-12 items-center mb-20 transition-transform duration-300 hover:-translate-y-1 hover:shadow-2xl p-4 rounded-lg">
                <div class="rounded-lg overflow-hidden shadow-lg lg:order-last"><img src="images/6_57b68373c52f9a.jpeg" alt="The Corniche Phase" class="w-full transition-transform duration-500 hover:scale-105"></div>
                <div>
                    <span class="bg-[#e0e8f2] text-primary-blue py-1.5 px-4 rounded-full inline-block mb-5 text-sm font-semibold">COMING SOON</span>
                    <h3 class="font-poppins text-4xl mb-5 font-normal">The Corniche Phase</h3>
                    <p class="text-light-text">Anticipated for late 2024, this phase will feature exclusive villas with direct access to the Jeddah Corniche, offering unparalleled views and recreational opportunities at your doorstep.</p>
                </div>
            </div>
        </section>

        <section id="benefits" class="py-20 bg-background-light">
            <div class="container mx-auto max-w-screen-xl px-5">
                <h2 class="animate-on-scroll text-primary-blue text-5xl font-normal mb-20 text-center font-poppins">Key Benefits</h2>
                <div class="animate-on-scroll relative pl-24 mb-16 max-w-2xl mx-auto text-left" style="transition-delay: 0s;"><span class="absolute left-0 top-0 text-8xl font-semibold text-gray-200 leading-none z-0 select-none">01</span><div class="relative z-10"><h3 class="text-primary-blue text-3xl mb-2.5 font-poppins">Unparalleled Coastal Location</h3><p class="text-dark-text">Nestled along the pristine coastline of north Jeddah, Aldanah is moments away from King Abdulaziz International Airport and Jeddah's most iconic landmarks, blending convenience with exclusivity.</p></div></div>
                <div class="animate-on-scroll relative pl-24 mb-16 max-w-2xl mx-auto text-left" style="transition-delay: 0.1s;"><span class="absolute left-0 top-0 text-8xl font-semibold text-gray-200 leading-none z-0 select-none">02</span><div class="relative z-10"><h3 class="text-primary-blue text-3xl mb-2.5 font-poppins">Steps from Luxury Retail</h3><p class="text-dark-text">As a resident of Aldanah, the finest dining, shopping, and entertainment venues are just moments away, offering a vibrant lifestyle set against a backdrop of beautiful seascapes and greenery.</p></div></div>
                <div class="animate-on-scroll relative pl-24 mb-16 max-w-2xl mx-auto text-left" style="transition-delay: 0.2s;"><span class="absolute left-0 top-0 text-8xl font-semibold text-gray-200 leading-none z-0 select-none">03</span><div class="relative z-10"><h3 class="text-primary-blue text-3xl mb-2.5 font-poppins">Inspired by the Sea</h3><p class="text-dark-text">The gentle sea breeze and the rhythm of the waves inspire the design of Aldanah. Natural elements are integrated throughout the community, providing a tranquil and beautiful backdrop to everyday life.</p></div></div>
            </div>
        </section>

        <section id="masterplan" class="py-20 container mx-auto max-w-screen-xl px-5">
            <h2 class="animate-on-scroll text-primary-blue text-5xl font-normal mb-16 text-center font-poppins">The Masterplan</h2>
            <div class="animate-on-scroll flex justify-center flex-wrap mb-10" style="transition-delay: 0.1s;"><button class="py-2.5 px-5 m-1.5 border border-primary-blue rounded-md cursor-pointer transition-all duration-300 bg-primary-blue text-white font-poppins">Overall Masterplan</button></div>
            <img src="images/warefa_masterplan_2_21bdbaf6381169.png" alt="Masterplan" class="animate-on-scroll rounded-lg w-full" style="transition-delay: 0.2s;">
        </section>
        
        <section id="glance" class="py-20 container mx-auto max-w-screen-xl px-5">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
                <div class="animate-on-scroll p-5 text-center" style="transition-delay: 0s;"><h3 class="text-6xl text-primary-blue font-semibold"><span class="count-up" data-value="350">34</span><span class="text-3xl font-normal ml-1">Amenities</span></h3><p class="text-light-text mt-2.5">Conveniently located to cater to your every need</p></div>
                <div class="animate-on-scroll p-5 text-center" style="transition-delay: 0.1s;"><h3 class="text-6xl text-primary-blue font-semibold"><span class="count-up" data-value="25">100</span><span class="font-normal">K</span><span class="text-3xl font-normal ml-1">Homes</span></h3><p class="text-light-text mt-2.5">With designs to suit all tastes and lifestyles</p></div>
                <div class="animate-on-scroll p-5 text-center" style="transition-delay: 0.2s;"><h3 class="text-6xl text-primary-blue font-semibold"><span class="count-up" data-value="15">12</span><span class="font-normal">M</span><span class="text-3xl font-normal ml-1">sqm</span></h3><p class="text-light-text mt-2.5">Meticulously maintained and managed landscape</p></div>
                <div class="animate-on-scroll p-5 text-center" style="transition-delay: 0.3s;"><h3 class="text-6xl text-primary-blue font-semibold"><span class="count-up" data-value="6">32</span><span class="text-3xl font-normal ml-1">Phases</span></h3><p class="text-light-text mt-2.5">Each an integrated, pedestrian-friendly neighborhood</p></div>
            </div>
        </section>
        
        <section id="location" class="relative py-20">
            <img src="images/1806_J_02_S3_Pocket_Park_Hummingbird_R7_8_K_1_baab970dd11b85.png" alt="Jeddah aerial view" class="absolute top-0 left-0 w-full h-full object-cover z-0 opacity-10">
            <div class="container mx-auto max-w-screen-xl px-5 grid lg:grid-cols-2 gap-12 items-center relative z-10">
                <div class="animate-on-scroll bg-white p-10 shadow-xl rounded-lg"><h2 class="text-4xl mb-5 text-primary-blue font-poppins">The Perfect Location in Jeddah</h2><p class="text-dark-text">Aldanah is situated in the prestigious north of Jeddah, a stone's throw from the Red Sea Mall and the vibrant Jeddah Corniche. The entire city is easily accessible via King Abdulaziz Road, connecting you to the heart of this dynamic coastal hub.</p></div>
                <div></div>
            </div>
        </section>

        <section id="sales-centers" class="py-20 container mx-auto max-w-screen-xl px-5">
            <div class="animate-on-scroll flex justify-between items-center mb-10">
                <h2 class="text-primary-blue text-5xl font-normal font-poppins">Our Sales Centers</h2>
                <div class="flex gap-2.5">
                    <button id="sales-prev" class="w-12 h-12 rounded-full border border-border-color bg-white flex justify-center items-center transition-transform duration-300 hover:scale-110 hover:shadow-md"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform rotate-180"><path d="M5 12H19" stroke="#0A2F5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12 5L19 12L12 19" stroke="#0A2F5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></button>
                    <button id="sales-next" class="w-12 h-12 rounded-full border border-border-color bg-white flex justify-center items-center transition-transform duration-300 hover:scale-110 hover:shadow-md"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H19" stroke="#0A2F5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12 5L19 12L12 19" stroke="#0A2F5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></button>
                </div>
            </div>
            <div class="animate-on-scroll overflow-hidden" style="transition-delay: 0.1s;">
                <div id="sales-carousel-inner" class="flex transition-transform duration-500 ease-in-out">
                    <div class="flex-shrink-0 w-full md:w-1/2 p-2.5"><div class="bg-cover bg-center text-white rounded-lg min-h-[400px] p-10 flex flex-col justify-center transition-transform duration-300 hover:-translate-y-1 hover:shadow-2xl" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(images/Fine_Art117_30082456396fa3.jpeg)"><h3 class="text-3xl mb-8 font-poppins">Aldanah Sales Center</h3><p class="flex items-center mb-4">PHONE: 920022288</p><p class="flex items-center mb-4">LOCATION: North Obhur, Jeddah</p><p class="flex items-center">WORKING HOURS: Sun-Thu: (10 AM - 7 PM)</p></div></div>
                    <div class="flex-shrink-0 w-full md:w-1/2 p-2.5"><div class="bg-cover bg-center text-white rounded-lg min-h-[400px] p-10 flex flex-col justify-center transition-transform duration-300 hover:-translate-y-1 hover:shadow-2xl" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(images/Fine_Art117_30082456396fa3.jpeg)"><h3 class="text-3xl mb-8 font-poppins">Jeddah Corniche Center</h3><p class="flex items-center mb-4">PHONE: 920022288</p><p class="flex items-center mb-4">LOCATION: Ash Shati, Jeddah</p><p class="flex items-center">WORKING HOURS: Sun & Thu: (10 AM - 7 PM), Mon, Tue & Wed: (12 PM - 9 PM)</p></div></div>
                    <div class="flex-shrink-0 w-full md:w-1/2 p-2.5"><div class="bg-cover bg-center text-white rounded-lg min-h-[400px] p-10 flex flex-col justify-center transition-transform duration-300 hover:-translate-y-1 hover:shadow-2xl" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(images/Fine_Art117_30082456396fa3.jpeg)"><h3 class="text-3xl mb-8 font-poppins">Riyadh Sales Center</h3><p class="flex items-center mb-4">PHONE: 920022288</p><p class="flex items-center mb-4">LOCATION: King Abdullah Financial District, Riyadh</p><p class="flex items-center">WORKING HOURS: Daily: (10 AM - 8 PM)</p></div></div>
                </div>
            </div>
        </section>
        
        <section class="py-20 bg-background-light">
            <div class="container mx-auto max-w-screen-xl px-5 flex justify-between items-center flex-wrap gap-5">
                <h2 class="animate-on-scroll text-2xl md:text-4xl font-normal text-primary-blue font-poppins">Discover luxury living by the sea<br>in an Aldanah community</h2>
                <a href="#" class="animate-on-scroll inline-flex items-center bg-accent-gold text-white py-4 px-8 rounded-full uppercase font-semibold transition-all duration-300 hover:bg-[#ab8b6a] hover:scale-105 no-underline" style="transition-delay: 0.1s;">
                    <span class="bg-white/20 rounded-full p-4 inline-flex mr-2.5"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
                    REGISTER INTEREST NOW
                </a>
            </div>
        </section>
    </main>

    <footer class="bg-[#343a40] text-white py-5">
      <nav class="container mx-auto max-w-screen-xl px-5 flex justify-center items-center flex-wrap">
        <a href="#phases" class="text-white no-underline py-2.5 px-5 transition-colors duration-300 hover:text-gray-300">Phases</a>
        <a href="#community" class="text-white no-underline py-2.5 px-5 transition-colors duration-300 hover:text-gray-300">Community Life</a>
        <a href="#benefits" class="text-white no-underline py-2.5 px-5 transition-colors duration-300 hover:text-gray-300">Benefits</a>
        <a href="#masterplan" class="text-white no-underline py-2.5 px-5 transition-colors duration-300 hover:text-gray-300">Masterplan</a>
        <a href="#glance" class="text-white no-underline py-2.5 px-5 transition-colors duration-300 hover:text-gray-300">At Glance</a>
        <a href="#location" class="text-white no-underline py-2.5 px-5 transition-colors duration-300 hover:text-gray-300">Location</a>
        <a href="#sales-centers" class="text-white no-underline py-2.5 px-5 transition-colors duration-300 hover:text-gray-300">Sales centers</a>
      </nav>
    </footer>

    <div class="fixed bottom-5 right-5 z-50 flex flex-col gap-2.5">
        <button id="scroll-to-top" class="w-12 h-12 rounded-full bg-dark-text flex justify-center items-center shadow-lg transition-all duration-300 opacity-0 scale-50 invisible hover:scale-110">
           <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 19V5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5 12L12 5L19 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
        </button>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const animationObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.animate-on-scroll').forEach(el => animationObserver.observe(el));

        const navWrapper = document.getElementById('nav-wrapper');
        const navOffsetTop = navWrapper.offsetTop;
        window.addEventListener('scroll', () => {
            if (window.scrollY > navOffsetTop) {
                navWrapper.classList.add('fixed', 'top-0', 'left-0', 'right-0', 'z-50', 'shadow-lg', 'animate-slideDown');
            } else {
                navWrapper.classList.remove('fixed', 'top-0', 'left-0', 'right-0', 'z-50', 'shadow-lg', 'animate-slideDown');
            }
        });

        const countUp = (el, end, duration = 2000) => {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                el.textContent = Math.floor(progress * end).toLocaleString();
                if (progress < 1) window.requestAnimationFrame(step);
            };
            window.requestAnimationFrame(step);
        };
        const countUpObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    countUp(el, parseInt(el.getAttribute('data-value'), 10));
                    observer.unobserve(el);
                }
            });
        }, { threshold: 0.8 });
        document.querySelectorAll('.count-up').forEach(el => countUpObserver.observe(el));

        const carouselInner = document.getElementById('sales-carousel-inner');
        const prevBtn = document.getElementById('sales-prev');
        const nextBtn = document.getElementById('sales-next');
        const totalItems = carouselInner.children.length;
        let currentIndex = 0;
        let itemsVisible = window.innerWidth > 768 ? 2 : 1;

        const updateCarousel = () => {
            carouselInner.style.transform = `translateX(-${currentIndex * (100 / itemsVisible)}%)`;
        };
        const handleResize = () => {
            const newItemsVisible = window.innerWidth > 768 ? 2 : 1;
            if (newItemsVisible !== itemsVisible) {
                itemsVisible = newItemsVisible;
                if (currentIndex > totalItems - itemsVisible) {
                    currentIndex = Math.max(0, totalItems - itemsVisible);
                }
                updateCarousel();
            }
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
        window.addEventListener('resize', handleResize);
        handleResize();
        
        const scrollToTopBtn = document.getElementById('scroll-to-top');
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.remove('opacity-0', 'scale-50', 'invisible');
                scrollToTopBtn.classList.add('opacity-100', 'scale-100', 'visible');
            } else {
                scrollToTopBtn.classList.remove('opacity-100', 'scale-100', 'visible');
                scrollToTopBtn.classList.add('opacity-0', 'scale-50', 'invisible');
            }
        });
        scrollToTopBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    });
    </script>

@include('include.footer')
