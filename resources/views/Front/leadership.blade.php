@include('include.header')


  
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'roshn-beige': '#F7F5F2',
                        'roshn-brown': '#6B4F4B',
                        'roshn-green': '#004A3A',
                        'roshn-gold': '#C8A876',
                    },
                    fontFamily: {
                        sans: ['"Helvetica Neue"', 'Helvetica', 'Arial', 'sans-serif'],
                    },
                    keyframes: {
                        'fade-in-scale': {
                            '0%': { opacity: '0', transform: 'scale(0.95)' },
                            '100%': { opacity: '1', transform: 'scale(1)' },
                        }
                    },
                    animation: {
                        'fade-in-scale': 'fade-in-scale 0.3s ease-in-out forwards',
                    }
                }
            }
        }
    </script>
    <style>
        /* Base styles for the modal overlay */
        .modal-overlay {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
        }

        /* When the modal's ID is the target in the URL, show it */
        .modal-overlay:target {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        /* Lock scrolling when a modal is open */
        html:has(.modal-overlay:target) {
            overflow: hidden;
        }
    </style>
</head>
<body class="bg-roshn-beige text-roshn-brown">

    <!-- Header -->
 

    <!-- Hero Section -->
    <div class="relative bg-cover bg-center" style="background-image: url('');">
        <div class="absolute inset-0 bg-roshn-green opacity-50"></div>
        <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-3 tracking-tight">
                    Our Leadership
                </h1>
                <p class="text-lg md:text-xl text-roshn-beige max-w-3xl mx-auto">
                    Inspired by the principles of Meeras — blending heritage with modernity — our leaders guide ROSHN towards a future of vibrant, integrated communities.
                </p>
            </div>
        </div>
    </div>


    <!-- Main Content -->
    <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20 bg-white">
        <!-- Leadership Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 md:gap-12">
            <!-- David Grover Card -->
            <a href="#leader-1" class="group text-center">
                <div class="relative overflow-hidden rounded-lg shadow-md mb-4 transition-all duration-300 ease-in-out group-hover:shadow-xl group-hover:scale-105">
                    <img src="images/portait.jpg" alt="Portrait of David Grover" class="w-full h-auto object-cover aspect-square sm:aspect-[4/5] transition-transform duration-300 ease-in-out" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                        <h3 class="text-xl font-semibold tracking-tight">David Grover</h3>
                    </div>
                </div>
                <p class="text-roshn-gold font-medium text-sm transition-colors duration-300 group-hover:text-roshn-green">Group Chief Executive Officer</p>
            </a>

            <!-- Sabah Al-Haider Card -->
            <a href="#leader-2" class="group text-center">
                <div class="relative overflow-hidden rounded-lg shadow-md mb-4 transition-all duration-300 ease-in-out group-hover:shadow-xl group-hover:scale-105">
                    <img src="images/portait.jpg" alt="Portrait of Sabah Al-Haider" class="w-full h-auto object-cover aspect-square sm:aspect-[4/5] transition-transform duration-300 ease-in-out" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                        <h3 class="text-xl font-semibold tracking-tight">Sabah Al-Haider</h3>
                    </div>
                </div>
                <p class="text-roshn-gold font-medium text-sm transition-colors duration-300 group-hover:text-roshn-green">Group Chief Financial Officer</p>
            </a>
            
            <!-- Kareem Al-Saleh Card -->
            <a href="#leader-3" class="group text-center">
                <div class="relative overflow-hidden rounded-lg shadow-md mb-4 transition-all duration-300 ease-in-out group-hover:shadow-xl group-hover:scale-105">
                    <img src="images/portait.jpg" alt="Portrait of Kareem Al-Saleh" class="w-full h-auto object-cover aspect-square sm:aspect-[4/5] transition-transform duration-300 ease-in-out" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                        <h3 class="text-xl font-semibold tracking-tight">Kareem Al-Saleh</h3>
                    </div>
                </div>
                <p class="text-roshn-gold font-medium text-sm transition-colors duration-300 group-hover:text-roshn-green">Group Chief Projects Officer</p>
            </a>

            <!-- Lana Al-Rashid Card -->
            <a href="#leader-4" class="group text-center">
                <div class="relative overflow-hidden rounded-lg shadow-md mb-4 transition-all duration-300 ease-in-out group-hover:shadow-xl group-hover:scale-105">
                    <img src="images/portait.jpg" alt="Portrait of Lana Al-Rashid" class="w-full h-auto object-cover aspect-square sm:aspect-[4/5] transition-transform duration-300 ease-in-out" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                        <h3 class="text-xl font-semibold tracking-tight">Lana Al-Rashid</h3>
                    </div>
                </div>
                <p class="text-roshn-gold font-medium text-sm transition-colors duration-300 group-hover:text-roshn-green">Group Chief Marketing Officer</p>
            </a>

            <!-- Faisal Al-Othman Card -->
            <a href="#leader-5" class="group text-center">
                <div class="relative overflow-hidden rounded-lg shadow-md mb-4 transition-all duration-300 ease-in-out group-hover:shadow-xl group-hover:scale-105">
                    <img src="images/portait.jpg" alt="Portrait of Faisal Al-Othman" class="w-full h-auto object-cover aspect-square sm:aspect-[4/5] transition-transform duration-300 ease-in-out" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                        <h3 class="text-xl font-semibold tracking-tight">Faisal Al-Othman</h3>
                    </div>
                </div>
                <p class="text-roshn-gold font-medium text-sm transition-colors duration-300 group-hover:text-roshn-green">Group Chief Human Resources Officer</p>
            </a>

            <!-- Omar Abdulaziz Card -->
            <a href="#leader-6" class="group text-center">
                <div class="relative overflow-hidden rounded-lg shadow-md mb-4 transition-all duration-300 ease-in-out group-hover:shadow-xl group-hover:scale-105">
                    <img src="images/portait.jpg" alt="Portrait of Omar Abdulaziz" class="w-full h-auto object-cover aspect-square sm:aspect-[4/5] transition-transform duration-300 ease-in-out" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                        <h3 class="text-xl font-semibold tracking-tight">Omar Abdulaziz</h3>
                    </div>
                </div>
                <p class="text-roshn-gold font-medium text-sm transition-colors duration-300 group-hover:text-roshn-green">Group Chief Development Officer</p>
            </a>

            <!-- Noura Al-Turki Card -->
            <a href="#leader-7" class="group text-center">
                <div class="relative overflow-hidden rounded-lg shadow-md mb-4 transition-all duration-300 ease-in-out group-hover:shadow-xl group-hover:scale-105">
                    <img src="images/portait.jpg" alt="Portrait of Noura Al-Turki" class="w-full h-auto object-cover aspect-square sm:aspect-[4/5] transition-transform duration-300 ease-in-out" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                        <h3 class="text-xl font-semibold tracking-tight">Noura Al-Turki</h3>
                    </div>
                </div>
                <p class="text-roshn-gold font-medium text-sm transition-colors duration-300 group-hover:text-roshn-green">Group Chief Legal Officer</p>
            </a>

            <!-- Yasser Al-Qahtani Card -->
            <a href="#leader-8" class="group text-center">
                <div class="relative overflow-hidden rounded-lg shadow-md mb-4 transition-all duration-300 ease-in-out group-hover:shadow-xl group-hover:scale-105">
                    <img src="images/portait.jpg" alt="Portrait of Yasser Al-Qahtani" class="w-full h-auto object-cover aspect-square sm:aspect-[4/5] transition-transform duration-300 ease-in-out" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                        <h3 class="text-xl font-semibold tracking-tight">Yasser Al-Qahtani</h3>
                    </div>
                </div>
                <p class="text-roshn-gold font-medium text-sm transition-colors duration-300 group-hover:text-roshn-green">Group Chief Technology Officer</p>
            </a>
        </div>
    </main>


    <!-- Modals -->
    <!-- David Grover Modal -->
    <div id="leader-1" class="modal-overlay fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm" role="dialog" aria-modal="true">
        <a href="#" class="absolute inset-0" aria-label="Close modal"></a>
        <div class="relative bg-roshn-beige rounded-lg shadow-2xl w-11/12 max-w-4xl max-h-[90vh] overflow-y-auto m-4 flex flex-col md:flex-row animate-fade-in-scale">
            <div class="w-full md:w-1/3 flex-shrink-0">
                <img src="images/portait.jpg" alt="Portrait of David Grover" class="w-full h-52 md:h-full object-cover rounded-t-lg md:rounded-l-lg md:rounded-t-none" />
            </div>
            <div class="p-8 md:p-10 flex-grow">
                <h2 class="text-3xl font-bold text-roshn-green mb-1">David Grover</h2>
                <p class="text-lg font-semibold text-roshn-gold mb-6">Group Chief Executive Officer</p>
                <p class="text-base text-roshn-brown leading-relaxed">David Grover brings over 35 years of international experience in real estate development and investment. As Group CEO, he is responsible for ROSHN’s overall vision, strategy, and execution, driving the company’s mission to deliver high-quality communities across Saudi Arabia. His leadership is pivotal in shaping the future of urban living in the Kingdom, aligning with Vision 2030.</p>
            </div>
            <a href="#" class="absolute top-4 right-4 text-roshn-brown hover:text-roshn-green transition-colors z-10" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
            </a>
        </div>
    </div>
    
    <!-- Sabah Al-Haider Modal -->
    <div id="leader-2" class="modal-overlay fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm" role="dialog" aria-modal="true">
        <a href="#" class="absolute inset-0" aria-label="Close modal"></a>
        <div class="relative bg-roshn-beige rounded-lg shadow-2xl w-11/12 max-w-4xl max-h-[90vh] overflow-y-auto m-4 flex flex-col md:flex-row animate-fade-in-scale">
            <div class="w-full md:w-1/3 flex-shrink-0">
                <img src="images/portait.jpg" alt="Portrait of Sabah Al-Haider" class="w-full h-52 md:h-full object-cover rounded-t-lg md:rounded-l-lg md:rounded-t-none" />
            </div>
            <div class="p-8 md:p-10 flex-grow">
                <h2 class="text-3xl font-bold text-roshn-green mb-1">Sabah Al-Haider</h2>
                <p class="text-lg font-semibold text-roshn-gold mb-6">Group Chief Financial Officer</p>
                <p class="text-base text-roshn-brown leading-relaxed">Sabah Al-Haider leads ROSHN’s financial strategy, overseeing investment management, capital structuring, and fiscal governance. With a robust background in corporate finance and strategic planning, Sabah ensures the company’s financial health and sustainability, enabling large-scale projects that contribute to the national economy.</p>
            </div>
            <a href="#" class="absolute top-4 right-4 text-roshn-brown hover:text-roshn-green transition-colors z-10" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
            </a>
        </div>
    </div>

    <!-- Kareem Al-Saleh Modal -->
    <div id="leader-3" class="modal-overlay fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm" role="dialog" aria-modal="true">
        <a href="#" class="absolute inset-0" aria-label="Close modal"></a>
        <div class="relative bg-roshn-beige rounded-lg shadow-2xl w-11/12 max-w-4xl max-h-[90vh] overflow-y-auto m-4 flex flex-col md:flex-row animate-fade-in-scale">
            <div class="w-full md:w-1/3 flex-shrink-0">
                <img src="images/portait.jpg" alt="Portrait of Kareem Al-Saleh" class="w-full h-52 md:h-full object-cover rounded-t-lg md:rounded-l-lg md:rounded-t-none" />
            </div>
            <div class="p-8 md:p-10 flex-grow">
                <h2 class="text-3xl font-bold text-roshn-green mb-1">Kareem Al-Saleh</h2>
                <p class="text-lg font-semibold text-roshn-gold mb-6">Group Chief Projects Officer</p>
                <p class="text-base text-roshn-brown leading-relaxed">Kareem Al-Saleh is at the helm of project delivery, from conception to completion. His expertise in large-scale construction and engineering management ensures that all ROSHN communities are built to the highest standards of quality, innovation, and sustainability. He champions modern construction techniques and efficient project execution.</p>
            </div>
            <a href="#" class="absolute top-4 right-4 text-roshn-brown hover:text-roshn-green transition-colors z-10" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
            </a>
        </div>
    </div>

    <!-- Lana Al-Rashid Modal -->
    <div id="leader-4" class="modal-overlay fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm" role="dialog" aria-modal="true">
        <a href="#" class="absolute inset-0" aria-label="Close modal"></a>
        <div class="relative bg-roshn-beige rounded-lg shadow-2xl w-11/12 max-w-4xl max-h-[90vh] overflow-y-auto m-4 flex flex-col md:flex-row animate-fade-in-scale">
            <div class="w-full md:w-1/3 flex-shrink-0">
                <img src="images/portait.jpg" alt="Portrait of Lana Al-Rashid" class="w-full h-52 md:h-full object-cover rounded-t-lg md:rounded-l-lg md:rounded-t-none" />
            </div>
            <div class="p-8 md:p-10 flex-grow">
                <h2 class="text-3xl font-bold text-roshn-green mb-1">Lana Al-Rashid</h2>
                <p class="text-lg font-semibold text-roshn-gold mb-6">Group Chief Marketing Officer</p>
                <p class="text-base text-roshn-brown leading-relaxed">Lana Al-Rashid orchestrates ROSHN’s brand strategy, marketing, and communications. She is dedicated to building a brand that resonates with the aspirations of Saudi families, showcasing ROSHN’s commitment to quality of life. Her vision is crucial in positioning ROSHN as a leading real estate developer in the region.</p>
            </div>
            <a href="#" class="absolute top-4 right-4 text-roshn-brown hover:text-roshn-green transition-colors z-10" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
            </a>
        </div>
    </div>

    <!-- Faisal Al-Othman Modal -->
    <div id="leader-5" class="modal-overlay fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm" role="dialog" aria-modal="true">
        <a href="#" class="absolute inset-0" aria-label="Close modal"></a>
        <div class="relative bg-roshn-beige rounded-lg shadow-2xl w-11/12 max-w-4xl max-h-[90vh] overflow-y-auto m-4 flex flex-col md:flex-row animate-fade-in-scale">
            <div class="w-full md:w-1/3 flex-shrink-0">
                <img src="images/portait.jpg" alt="Portrait of Faisal Al-Othman" class="w-full h-52 md:h-full object-cover rounded-t-lg md:rounded-l-lg md:rounded-t-none" />
            </div>
            <div class="p-8 md:p-10 flex-grow">
                <h2 class="text-3xl font-bold text-roshn-green mb-1">Faisal Al-Othman</h2>
                <p class="text-lg font-semibold text-roshn-gold mb-6">Group Chief Human Resources Officer</p>
                <p class="text-base text-roshn-brown leading-relaxed">Faisal Al-Othman is responsible for cultivating a world-class workforce at ROSHN. He leads talent acquisition, development, and organizational culture initiatives. Faisal is passionate about creating an empowering and inclusive environment where employees can thrive and contribute to the company’s ambitious goals.</p>
            </div>
            <a href="#" class="absolute top-4 right-4 text-roshn-brown hover:text-roshn-green transition-colors z-10" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
            </a>
        </div>
    </div>

    <!-- Omar Abdulaziz Modal -->
    <div id="leader-6" class="modal-overlay fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm" role="dialog" aria-modal="true">
        <a href="#" class="absolute inset-0" aria-label="Close modal"></a>
        <div class="relative bg-roshn-beige rounded-lg shadow-2xl w-11/12 max-w-4xl max-h-[90vh] overflow-y-auto m-4 flex flex-col md:flex-row animate-fade-in-scale">
            <div class="w-full md:w-1/3 flex-shrink-0">
                <img src="images/portait.jpg" alt="Portrait of Omar Abdulaziz" class="w-full h-52 md:h-full object-cover rounded-t-lg md:rounded-l-lg md:rounded-t-none" />
            </div>
            <div class="p-8 md:p-10 flex-grow">
                <h2 class="text-3xl font-bold text-roshn-green mb-1">Omar Abdulaziz</h2>
                <p class="text-lg font-semibold text-roshn-gold mb-6">Group Chief Development Officer</p>
                <p class="text-base text-roshn-brown leading-relaxed">Omar Abdulaziz steers the development lifecycle of ROSHN’s communities, from land acquisition and master planning to design and infrastructure. His forward-thinking approach ensures that each development is not just a collection of homes, but a vibrant, integrated ecosystem for modern living.</p>
            </div>
            <a href="#" class="absolute top-4 right-4 text-roshn-brown hover:text-roshn-green transition-colors z-10" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
            </a>
        </div>
    </div>

    <!-- Noura Al-Turki Modal -->
    <div id="leader-7" class="modal-overlay fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm" role="dialog" aria-modal="true">
        <a href="#" class="absolute inset-0" aria-label="Close modal"></a>
        <div class="relative bg-roshn-beige rounded-lg shadow-2xl w-11/12 max-w-4xl max-h-[90vh] overflow-y-auto m-4 flex flex-col md:flex-row animate-fade-in-scale">
            <div class="w-full md:w-1/3 flex-shrink-0">
                <img src="images/portait.jpg" alt="Portrait of Noura Al-Turki" class="w-full h-52 md:h-full object-cover rounded-t-lg md:rounded-l-lg md:rounded-t-none" />
            </div>
            <div class="p-8 md:p-10 flex-grow">
                <h2 class="text-3xl font-bold text-roshn-green mb-1">Noura Al-Turki</h2>
                <p class="text-lg font-semibold text-roshn-gold mb-6">Group Chief Legal Officer</p>
                <p class="text-base text-roshn-brown leading-relaxed">Noura Al-Turki provides expert legal counsel and oversees all corporate governance and compliance matters for ROSHN. Her strategic guidance is essential in navigating the complex legal landscape of large-scale real estate development, ensuring the company operates with integrity and transparency.</p>
            </div>
            <a href="#" class="absolute top-4 right-4 text-roshn-brown hover:text-roshn-green transition-colors z-10" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
            </a>
        </div>
    </div>

    <!-- Yasser Al-Qahtani Modal -->
    <div id="leader-8" class="modal-overlay fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm" role="dialog" aria-modal="true">
        <a href="#" class="absolute inset-0" aria-label="Close modal"></a>
        <div class="relative bg-roshn-beige rounded-lg shadow-2xl w-11/12 max-w-4xl max-h-[90vh] overflow-y-auto m-4 flex flex-col md:flex-row animate-fade-in-scale">
            <div class="w-full md:w-1/3 flex-shrink-0">
                <img src="images/portait.jpg" alt="Portrait of Yasser Al-Qahtani" class="w-full h-52 md:h-full object-cover rounded-t-lg md:rounded-l-lg md:rounded-t-none" />
            </div>
            <div class="p-8 md:p-10 flex-grow">
                <h2 class="text-3xl font-bold text-roshn-green mb-1">Yasser Al-Qahtani</h2>
                <p class="text-lg font-semibold text-roshn-gold mb-6">Group Chief Technology Officer</p>
                <p class="text-base text-roshn-brown leading-relaxed">Yasser Al-Qahtani drives ROSHN’s digital transformation and technology strategy. He is focused on integrating smart technologies into ROSHN communities and streamlining business operations through innovation. His work is key to building future-proof, connected, and efficient living environments.</p>
            </div>
            <a href="#" class="absolute top-4 right-4 text-roshn-brown hover:text-roshn-green transition-colors z-10" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
            </a>
        </div>
    </div>
    
  @include('include.footer')