@include('include.header')

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --text-primary: #1c1c1c;
            --text-secondary: #4b5563;
            --text-accent: #a8a29e;
            --bg-white: #fff;
            --border-color: #e5e7eb;
            --teal-500: #14b8a6;
            --teal-600: #0d9488;
            --teal-700: #0f766e;
        }

        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: var(--bg-white);
            color: var(--text-primary);
            line-height: 1.5;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: var(--teal-600); border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--teal-700); }

        .animate-on-scroll {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .animate-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-white text-stone-800">
    <main>
        <!-- Hero Section -->
        <section class="animate-on-scroll relative h-[60vh] text-stone-800 flex flex-col justify-center items-center text-center group overflow-hidden">
            <div class="absolute inset-0 z-[-1]">
                <img src="images/Studio74830.jpeg" alt="Colorful street art" class="w-full h-full object-cover transition-transform duration-[8000ms] ease-in-out group-hover:scale-110" />
                <div class="absolute inset-0 bg-white/60 backdrop-blur-sm"></div>
            </div>
            <div class="relative z-10 px-4">
                <p class="text-sm font-light mb-4 text-stone-600">Home / We Are Meraastrust / Sponsorships</p>
                <h1 class="text-5xl sm:text-6xl lg:text-7xl font-thin tracking-tight m-0 text-stone-900">Sponsorships</h1>
            </div>
        </section>

        <!-- Intro Section -->
        <section class="animate-on-scroll py-16 sm:py-24">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="grid lg:grid-cols-3 gap-8 items-center">
                    <h2 class="text-4xl sm:text-5xl font-light m-0 leading-tight text-stone-100 lg:col-span-1">Our Sponsorships</h2>
                    <p class="text-stone-600 leading-relaxed lg:col-span-2 text-base sm:text-lg">Meraastrust sponsorships align with our core values and the objectives of Saudi Vision 2030. The Group is committed to enhancing quality of life in the Kingdom by forging strategic partnerships that promote sports, culture, and community engagement.</p>
                </div>
            </div>
        </section>

        <!-- Purpose Section -->
        <section class="animate-on-scroll py-16 sm:py-24 overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="flex items-center gap-4 mb-8">
                    <svg class="text-teal-500" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L15.09 8.09L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.09L12 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="text-sm font-semibold tracking-wider uppercase text-teal-600">OUR PURPOSE</span>
                </div>
                <div class="relative min-h-[500px] lg:min-h-[600px] flex items-center">
                    <h2 class="relative z-10 text-4xl sm:text-5xl font-light max-w-2xl leading-tight text-stone-200">Contributing to enhancing quality <span class="text-stone-400">of life and</span> building <span class="text-stone-400">a vibrant community.</span></h2>
                    <div class="group absolute top-10 right-0 w-1/2 sm:w-2/5 lg:w-1/3 transition-all duration-500 ease-out hover:!z-20 hover:scale-105">
                        <img src="images/DSC_09203_9a82b492e4fb45.jpeg" alt="Cityscape letters" class="w-full h-auto rounded-lg shadow-2xl transition-transform duration-500 ease-out group-hover:scale-105" />
                    </div>
                    <div class="group absolute bottom-10 right-1/4 sm:right-1/3 w-1/2 sm:w-2/5 lg:w-1/3 z-0 transition-all duration-500 ease-out hover:!z-20 hover:scale-105">
                        <img src="images/Saudi_Professional.jpeg" alt="Football player celebrating" class="w-full h-auto rounded-lg shadow-2xl transition-transform duration-500 ease-out group-hover:scale-105" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Sponsors Section -->
        <section class="animate-on-scroll py-16 sm:py-24">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div id="sponsors-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Sponsor cards will be injected here by JavaScript -->
                </div>
            </div>
        </section>
    </main>

    <!-- Sponsor Modal -->
    <div id="sponsor-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 transition-opacity duration-300 opacity-0">
        <div id="modal-overlay" class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
        <div id="modal-content" class="relative bg-white w-full max-w-4xl max-h-[90vh] rounded-lg shadow-2xl overflow-y-auto transform transition-all duration-300 scale-95 opacity-0">
            <button id="close-modal-btn" class="absolute top-4 right-4 z-20 h-12 w-12 bg-teal-600 text-white rounded-full flex items-center justify-center transition-transform hover:scale-110 hover:bg-teal-700" aria-label="Close modal">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center p-8 sm:p-12">
                <div class="flex items-center justify-center bg-gray-50 p-8 rounded-md h-full min-h-[200px]">
                    <img id="modal-image" src="" alt="Sponsor logo" class="max-h-48 w-auto object-contain" />
                </div>
                <div class="flex flex-col justify-center">
                    <h2 id="modal-title" class="text-3xl sm:text-4xl font-light text-stone-800 mb-4"></h2>
                    <p id="modal-description" class="text-stone-600 leading-relaxed"></p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Floating Actions -->
    <div class="fixed bottom-6 right-6 z-40 flex flex-col items-center gap-3">
        <button id="scroll-to-top" class="h-12 w-12 flex items-center justify-center rounded-full bg-white border border-gray-300 shadow-lg text-gray-600 transition-all duration-300 opacity-0 -translate-y-4" aria-label="Scroll to top">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" /></svg>
        </button>
    
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // --- DATA ---
            const sponsorsData = [
                { id: 2, name: 'Meraastrust Water Front', type: 'large', imageUrl: 'images/DSC_00563_Enhanced_N_Rs_08109d0629e0f9.jpeg', description: "The Meraastrust Water Front is a flagship project aimed at enhancing urban living and providing world-class recreational spaces. Our sponsorship ensures the development and maintenance of this beautiful destination, offering families and individuals a place to connect, relax, and enjoy the natural beauty of the Kingdom's coastline." },
                { id: 3, name: 'LIV Golf', type: 'small', logoUrl: 'images/DSC_00563_Enhanced_N_Rs_08109d0629e0f9.jpeg', description: "Meraastrust Group sponsored the 'LIV Golf' series starting in 2022 as the 'Official Presenting Partner', showcasing its dedication to support in positioning Saudi Arabia as a hub for major international sports events while championing initiatives that encourage inclusivity in sports." },
                { id: 4, name: 'F1', type: 'small', logoUrl: 'images/DSC_00563_Enhanced_N_Rs_08109d0629e0f9.jpeg', description: "Meraastrust Group sponsored the 'F1' series starting in 2021 as a 'Founding Partner'. This collaboration reflects Meraastrust's commitment to enhancing the quality of life and enriching the sports landscape in the Kingdom." },
                { id: 5, name: 'FII', type: 'small', logoUrl: 'images/DSC_00563_Enhanced_N_Rs_08109d0629e0f9.jpeg', description: "Our partnership with the Future Investment Initiative (FII) aligns with our vision for a sustainable and innovative future. By supporting this global platform, we contribute to conversations that shape the future of investment and economic growth." },
                { id: 6, name: 'Real Estate Future Forum', type: 'small', logoUrl: 'images/DSC_00563_Enhanced_N_Rs_08109d0629e0f9.jpeg', description: "As a key player in the real estate sector, our sponsorship of the Real Estate Future Forum is a natural fit. We are dedicated to driving innovation and sustainability in urban development, and this forum provides an essential platform for collaboration and knowledge-sharing." }
            ];

            const createSponsorCard = (sponsor) => {
                const isLarge = sponsor.type === 'large';
                const cardClasses = isLarge ? 'sm:col-span-2 lg:col-span-1 lg:row-span-2' : 'sm:col-span-1';
                const card = document.createElement('div');
                card.className = `sponsor-card group relative border border-gray-200 p-8 transition-all duration-300 ease-in-out bg-white hover:-translate-y-2 hover:shadow-2xl hover:border-teal-200 cursor-pointer flex flex-col justify-between min-h-[20rem] rounded-lg ${cardClasses}`;
                
                card.dataset.name = sponsor.name;
                card.dataset.description = sponsor.description;
                card.dataset.image = isLarge ? sponsor.imageUrl : sponsor.logoUrl;

                let contentHtml = '';
                if (isLarge) {
                    contentHtml = `<div class="flex-grow flex items-end"><h3 class="text-2xl font-light text-stone-800">${sponsor.name}</h3></div>`;
                } else {
                    contentHtml = `
                        <div class="flex-grow flex items-center justify-center">
                            <img src="${sponsor.logoUrl}" alt="${sponsor.name} logo" class="max-h-16 w-auto object-contain filter grayscale transition-all duration-400 ease-in-out group-hover:filter-none group-hover:scale-105" />
                        </div>
                        <div class="text-center mt-4">
                            <h3 class="text-lg font-light text-stone-800">${sponsor.name}</h3>
                        </div>
                    `;
                }
                
                const arrowHtml = `<div class="absolute top-6 right-6 h-12 w-12 bg-teal-50 rounded-full flex items-center justify-center text-teal-500 transition-transform duration-300 group-hover:scale-110 group-hover:rotate-[45deg] group-hover:bg-teal-100"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" /></svg></div>`;
                
                card.innerHTML = contentHtml + arrowHtml;
                return card;
            };
            
            const sponsorsGrid = document.getElementById('sponsors-grid');
            sponsorsData.forEach(sponsor => {
                sponsorsGrid.appendChild(createSponsorCard(sponsor));
            });


            // --- ANIMATIONS ---
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });
            document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));


            // --- FLOATING ACTIONS ---
            const scrollTopBtn = document.getElementById('scroll-to-top');
            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 300) {
                    scrollTopBtn.classList.remove('opacity-0', '-translate-y-4');
                } else {
                    scrollTopBtn.classList.add('opacity-0', '-translate-y-4');
                }
            });
            scrollTopBtn.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });


            // --- MODAL LOGIC ---
            const modal = document.getElementById('sponsor-modal');
            const modalOverlay = document.getElementById('modal-overlay');
            const modalContent = document.getElementById('modal-content');
            const closeModalBtn = document.getElementById('close-modal-btn');
            const modalTitle = document.getElementById('modal-title');
            const modalDescription = document.getElementById('modal-description');
            const modalImage = document.getElementById('modal-image');

            const openModal = (sponsor) => {
                modalTitle.textContent = sponsor.name;
                modalDescription.textContent = sponsor.description;
                modalImage.src = sponsor.image;
                modalImage.alt = `${sponsor.name} image`;
                
                modal.classList.remove('hidden');
                setTimeout(() => {
                    modal.classList.remove('opacity-0');
                    modalContent.classList.remove('scale-95', 'opacity-0');
                }, 10);
                
                document.body.style.overflow = 'hidden';
            };

            const closeModal = () => {
                modal.classList.add('opacity-0');
                modalContent.classList.add('scale-95', 'opacity-0');
                setTimeout(() => {
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }, 300);
            };

            document.querySelectorAll('.sponsor-card').forEach(card => {
                card.addEventListener('click', () => {
                    openModal(card.dataset);
                });
            });

            closeModalBtn.addEventListener('click', closeModal);
            modalOverlay.addEventListener('click', closeModal);
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                    closeModal();
                }
            });
        });
    </script>

     @include('include.footer')

