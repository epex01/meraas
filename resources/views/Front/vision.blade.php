@include('include.header')

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      /* Smooth scrolling for the whole page */
      html {
        scroll-behavior: smooth;
      }
      /* Simple transition for the scroll to top button */
      #scrollToTopBtn.hidden {
        opacity: 0;
        transform: translateY(10px);
        pointer-events: none;
      }
      #scrollToTopBtn {
        opacity: 1;
        transform: translateY(0);
        transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
      }
      /* Animation styles for scroll-triggered elements */
      .scroll-animate {
          opacity: 0;
          transform: translateY(30px);
          transition: opacity 0.8s ease-out, transform 0.8s ease-out;
      }
      .scroll-animate.in-view {
          opacity: 1;
          transform: translateY(0);
      }
      .scroll-animate.delay-1 {
          transition-delay: 0.2s;
      }
      .scroll-animate.delay-2 {
          transition-delay: 0.4s;
      }
       .scroll-animate.delay-3 {
          transition-delay: 0.6s;
      }

      /* Slider styles */
      .slider-container {
        position: relative;
        width: 100%;
        overflow: hidden;
      }
      .slider-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
      }
      .slide {
        min-width: 100%;
        box-sizing: border-box;
        transition: opacity 0.5s ease-in-out;
        opacity: 0;
      }
      .slide.active {
        opacity: 1;
      }
    </style>
</head>
<body class="bg-white font-sans text-gray-800 antialiased">
    <main>
        <!-- Hero Section -->
        <section
          class="relative h-screen bg-cover bg-center flex items-center justify-center text-white"
          style="background-image: url('images/Screenshot_1446_05_16_at_7_41_12_PM_7a450827d7a489.png')"
        >
          <div class="absolute inset-0 bg-black/50"></div>
          <div class="relative z-10 text-center px-4">
            <p class="text-sm md:text-base text-gray-300 mb-4 tracking-wider">
              Home / We Are Meraastrust / Meraastrust & Vision 2030
            </p>
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-light tracking-tight">
              Meraastrust & Vision 2030
            </h1>
          </div>
        </section>

        <!-- Content Section -->
        <section class="container mx-auto max-w-7xl px-6 py-16 lg:py-24">
          <div class="grid lg:grid-cols-2 gap-12 lg:gap-24 items-center">
            <div class="flex flex-col space-y-8">
              <div class="w-48">
                
              </div>
              <div class="text-gray-600 text-base leading-relaxed space-y-6">
                <p>
                  Meraastrust is dedicated to developing projects that cultivate a vibrant society, seamlessly blending modern advancements with Saudi Arabia’s rich heritage. Our focus is on delivering destinations that enhance daily life, offering spaces where people can connect and thrive within cohesive, forward-thinking spaces.
                </p>
                <p>
                  By integrating cutting-edge technology and sustainable practices, Meraastrust contributes to Vision 2030’s goal of inclusive growth while preserving the cultural essence of the Kingdom. Each project is designed to reshape how people experience their surroundings, creating new opportunities for connection and development.
                </p>
              </div>
              <div class="pt-4">
                <button class="bg-[#006A63] text-white font-bold py-3 px-8 rounded-md hover:bg-[#005650] transition-colors duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-[#006A63] focus:ring-opacity-50">
                  LEARN MORE
                </button>
              </div>
            </div>
            <div class="w-full h-full min-h-[300px] lg:min-h-[500px]">
              <img
                src="images/Roshn_Qaisaran_Studio_941410272023_00e7d1e51fd19b.jpeg"
                alt="Modern residential area with lush greenery"
                class="w-full h-full object-cover rounded-lg shadow-xl"
              />
            </div>
          </div>
        </section>

        <!-- Contributions Section -->
        <section id="contributions" class="bg-gray-50/50">
            <div class="container mx-auto max-w-7xl px-6 py-16 lg:py-24 overflow-hidden">
                <div class="scroll-animate">
                    <h2 class="text-5xl md:text-6xl font-light tracking-tight text-gray-800 mb-6">Our Contributions</h2>
                    <hr class="border-gray-200">
                </div>

                <div class="mt-16 lg:mt-24 space-y-16">
                    <div class="scroll-animate delay-1">
                        <div class="flex items-start gap-6 md:gap-12">
                            <span class="text-8xl md:text-9xl font-light text-gray-200 leading-none -mt-2">01</span>
                            <div class="pt-4 md:pt-6">
                                <h3 class="text-4xl md:text-5xl font-light text-[#006A63] mb-6">The Housing Program</h3>
                                <p class="text-gray-100 text-base leading-relaxed max-w-2xl">
                                    Addressing the growing demand for housing by developing high-quality, sustainable, integrated human-centric residential communities across the Kingdom, contributing to increasing the homeownership rate to 70%.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="scroll-animate delay-2">
                        <div class="flex items-start gap-6 md:gap-12">
                            <span class="text-8xl md:text-9xl font-light text-gray-200 leading-none -mt-2">02</span>
                            <div class="pt-4 md:pt-6">
                                <h3 class="text-4xl md:text-5xl font-light text-[#006A63] mb-6">Quality of Life Program</h3>
                                <p class="text-gray-100 text-base leading-relaxed max-w-2xl">
                                  Creating vibrant, healthy communities with integrated amenities that enhance the well-being of residents, aligning with the national ambition to have three Saudi cities recognized among the world’s top 100 most livable cities.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="scroll-animate delay-3">
                        <div class="flex items-start gap-6 md:gap-12">
                            <span class="text-8xl md:text-9xl font-light text-gray-200 leading-none -mt-2">03</span>
                            <div class="pt-4 md:pt-6">
                                <h3 class="text-4xl md:text-5xl font-light text-[#006A63] mb-6">Economic Diversification</h3>
                                <p class="text-gray-100 text-base leading-relaxed max-w-2xl">
                                  Stimulating the local economy by partnering with Saudi Arabian businesses, creating jobs, and boosting the construction and real estate sectors, thereby reducing the Kingdom's reliance on oil and fostering a sustainable economic future.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vision Slider Section -->
        <section id="vision-slider" class="container mx-auto max-w-7xl px-6 py-16 lg:py-24 overflow-hidden">
            <div class="scroll-animate">
                <h2 class="text-5xl md:text-6xl font-light tracking-tight text-#00A750">Meraastrust and Vision 2030</h2>
            </div>

            <div class="flex justify-between items-center mt-8 mb-12 scroll-animate delay-1">
                <div class="flex gap-3">
                    <button id="prevBtn" aria-label="Previous slide" class="w-12 h-12 rounded-full border border-gray-300 text-gray-500 flex items-center justify-center hover:bg-gray-100 transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                    </button>
                    <button id="nextBtn" aria-label="Next slide" class="w-12 h-12 rounded-full border border-gray-300 text-gray-500 flex items-center justify-center hover:bg-gray-100 transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>
                <div id="slideCounter" class="font-medium text-gray-600 text-lg">01 - 03</div>
            </div>

            <div class="slider-container scroll-animate delay-2">
                <div class="slider-track">
                    <!-- Slide 1 -->
                    <div class="slide">
                        <div class="grid lg:grid-cols-2 gap-12 lg:gap-24 items-center">
                            <div class="w-full h-full min-h-[300px] lg:min-h-[450px]">
                                <img src="images/v2032_4_d0bc2e1de3ca50.png" alt="A woman in a visor holding a golf ball" class="w-full h-full object-cover rounded-lg shadow-xl">
                            </div>
                            <div class="flex flex-col">
                                <h3 class="text-5xl font-light text-gray-800 leading-tight mb-6">A Nation Empowered by its Vision</h3>
                                <p class="text-gray-100 text-base leading-relaxed">
                                    Meraastrust contributes to achieving Saudi Vision 2030 by empowering individuals and local talents through training programs for recent graduates and future leaders, in addition to empowering women and preparing them to re-enter the workforce.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="slide">
                        <div class="grid lg:grid-cols-2 gap-12 lg:gap-24 items-center">
                            <div class="w-full h-full min-h-[300px] lg:min-h-[450px]">
                                <img src="images/Library_025292_Edit_bbcf67b86d2b7f.jpeg" alt="Modern community park with families enjoying the outdoors" class="w-full h-full object-cover rounded-lg shadow-xl">
                            </div>
                            <div class="flex flex-col">
                                <h3 class="text-5xl font-light text-gray-800 leading-tight mb-6">Enhancing Quality of Life</h3>
                                <p class="text-gray-100 text-base leading-relaxed">
                                    As a key enabler of Vision 2030's Quality of Life Program, Meraastrust is delivering vibrant communities that offer a high quality of life for all citizens, featuring green spaces, recreational facilities, and a rich cultural scene.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="slide">
                        <div class="grid lg:grid-cols-2 gap-12 lg:gap-24 items-center">
                            <div class="w-full h-full min-h-[300px] lg:min-h-[450px]">
                                <img src="images/thumb_450ac8659b0ac9.jpeg" alt="Modern cityscape of Riyadh, Saudi Arabia" class="w-full h-full object-cover rounded-lg shadow-xl">
                            </div>
                            <div class="flex flex-col">
                                <h3 class="text-5xl font-light text-gray-800 leading-tight mb-6">Driving Economic Diversification</h3>
                                <p class="text-gray-100 text-base leading-relaxed">
                                    Meraastrust plays a vital role in diversifying the nation's economy. By fostering partnerships with local contractors and suppliers, we stimulate economic growth, create jobs, and contribute to a thriving non-oil sector as outlined in Vision 2030.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Floating Action Buttons -->
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
      
            // Animation on scroll logic
            const animatedElements = document.querySelectorAll('.scroll-animate');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('in-view');
                    }
                });
            }, {
                threshold: 0.1
            });
            animatedElements.forEach(el => observer.observe(el));

            // Slider logic
            const track = document.querySelector('.slider-track');
            const slides = Array.from(track.children);
            const nextButton = document.getElementById('nextBtn');
            const prevButton = document.getElementById('prevBtn');
            const slideCounter = document.getElementById('slideCounter');
            const slideWidth = slides[0].getBoundingClientRect().width;
            let currentIndex = 0;

            const updateSlider = () => {
                track.style.transform = 'translateX(-' + slideWidth * currentIndex + 'px)';
                slides.forEach((slide, index) => {
                    if (index === currentIndex) {
                        slide.classList.add('active');
                    } else {
                        slide.classList.remove('active');
                    }
                });

                // Update counter
                slideCounter.textContent = `0${currentIndex + 1} - 0${slides.length}`;

                // Update button states
                prevButton.disabled = currentIndex === 0;
                nextButton.disabled = currentIndex === slides.length - 1;
            };

            nextButton.addEventListener('click', () => {
                if (currentIndex < slides.length - 1) {
                    currentIndex++;
                    updateSlider();
                }
            });

            prevButton.addEventListener('click', () => {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateSlider();
                }
            });

            // Initial setup
            updateSlider();

            // Recalculate slide width on window resize
            window.addEventListener('resize', () => {
                const newSlideWidth = slides[0].getBoundingClientRect().width;
                track.style.transform = 'translateX(-' + newSlideWidth * currentIndex + 'px)';
            });
        });
    </script>
 @include('include.footer')