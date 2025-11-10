
document.addEventListener('DOMContentLoaded', () => {

    const translations = {
        en: {
            interest_section_title: "Area of Interest",
            interest_title: "What are you <br />interested in?",
            interest_cards: [
                { title: 'Buy a home', description: "Find your dream home in one of our vibrant, fully-integrated communities. Discover a new way of living with Meeras.", buttonText: 'EXPLORE', buttonLink: '#', image: 'https://placehold.co/400x400/1A221C/00A750/svg?text=Home' },
                { title: 'Rent a home', description: "Experience the Meeras lifestyle with our premium rental properties. Enjoy world-class amenities and a thriving community.", buttonText: 'BROWSE RENTALS', buttonLink: '#', image: 'https://placehold.co/400x400/1A221C/00A750/svg?text=Rent' },
                { title: 'Land Plots', description: 'Invest in your future with strategically located land plots, perfect for building your custom home or commercial project.', buttonText: 'VIEW PLOTS', buttonLink: '#', image: 'https://placehold.co/400x400/1A221C/00A750/svg?text=Land' },
                { title: 'Commercial', description: 'Discover prime commercial and retail spaces within our bustling communities, designed to help your business thrive.', buttonText: 'SEE SPACES', buttonLink: '#', image: 'https://placehold.co/400x400/1A221C/00A750/svg?text=Business' },
                { title: 'Careers', description: 'Join a team of passionate professionals dedicated to shaping the future of urban living in Saudi Arabia. Build your career with Meeras.', buttonText: 'JOIN US', buttonLink: '#', image: 'https://placehold.co/400x400/1A221C/00A750/svg?text=Careers' }
            ]
        },
        
    };

    const languageButton = document.getElementById('language-button');
    const languageDropdown = document.getElementById('language-dropdown');
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const mobileMenuCloseButton = document.getElementById('mobile-menu-close-button');
    const mobileOverlayLangBtn = document.getElementById('mobile-overlay-lang-btn');
    
    // --- Mobile Navigation Logic ---
    function closeMobileMenu() {
        mobileMenuButton.classList.remove('active');
        mobileMenuOverlay.classList.remove('active');
        document.body.classList.remove('no-scroll');
    }

    function openMobileMenu() {
        mobileMenuButton.classList.add('active');
        mobileMenuOverlay.classList.add('active');
        document.body.classList.add('no-scroll');
    }

    if (mobileMenuButton && mobileMenuOverlay) {
        mobileMenuButton.addEventListener('click', openMobileMenu);
        
        if (mobileMenuCloseButton) {
            mobileMenuCloseButton.addEventListener('click', closeMobileMenu);
        }

        // Close menu if a nav link is clicked
        mobileMenuOverlay.querySelector('nav ul').addEventListener('click', (e) => {
            if (e.target.closest('a')) {
                closeMobileMenu();
            }
        });

        // Handle mobile language switching
        if (mobileOverlayLangBtn) {
            mobileOverlayLangBtn.addEventListener('click', (e) => {
                const currentLang = document.documentElement.lang;
                const targetLang = currentLang === 'en' ? 'ar' : 'en'; // Simple toggle for example
                setLanguage(targetLang);
                e.preventDefault();
            });
        }
    }

    // --- Language Switcher Logic ---
    function setLanguage(lang) {
        const langData = translations[lang];
        if (!langData) return;

        document.querySelectorAll('[data-key]').forEach(element => {
            const key = element.getAttribute('data-key');
            if (langData[key]) {
                // Find the span if it exists, otherwise update the whole element
                const textNode = element.querySelector('span') || element;
                textNode.innerHTML = langData[key];
            }
        });

        // Update interest section cards
        const interestSectionExists = document.getElementById('interest-title');
        if (interestSectionExists) {
            interestData = langData.interest_cards;
            rebuildInterestCards(lang);
            updateInterestContent(0, lang);
        }

        document.documentElement.lang = lang;
        document.documentElement.dir = lang === 'ar' ? 'rtl' : 'ltr';

        if (languageButton) {
          languageButton.textContent = languageDropdown.querySelector(`[data-lang="${lang}"]`).textContent;
        }
        localStorage.setItem('selectedLanguage', lang);
        if (languageDropdown) {
          languageDropdown.classList.remove('show');
        }
    }

    if (languageButton && languageDropdown) {
        languageButton.addEventListener('click', () => {
            languageDropdown.classList.toggle('show');
        });

        languageDropdown.addEventListener('click', (e) => {
            if (e.target.tagName === 'A') {
                const lang = e.target.getAttribute('data-lang');
                setLanguage(lang);
                e.preventDefault();
            }
        });

        document.addEventListener('click', (e) => {
            if (!languageButton.contains(e.target) && !languageDropdown.contains(e.target)) {
                languageDropdown.classList.remove('show');
            }
        });
    }

    // --- Powerful Interaction Animations on Scroll ---
    const revealElements = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    revealElements.forEach(el => {
        revealObserver.observe(el);
    });
    
    // --- Parallax Effect on About Us Image ---
    const parallaxContainer = document.getElementById('parallax-container');
    const parallaxImage = document.getElementById('parallax-image');
    if(parallaxImage && parallaxContainer) {
      window.addEventListener('scroll', () => {
          const containerRect = parallaxContainer.getBoundingClientRect();
          const windowHeight = window.innerHeight;
          // Check if the container is in the viewport
          if (containerRect.top < windowHeight && containerRect.bottom >= 0) {
              const scrollPercent = (windowHeight - containerRect.top) / (windowHeight + containerRect.height);
              const moveDistance = scrollPercent * 50 - 25; // Adjust multiplier for effect strength
              parallaxImage.style.transform = `translate3d(0, ${moveDistance}px, 0)`;
          }
      });
    }

    // --- Header Scroll Effect ---
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('header-scrolled');
        } else {
            header.classList.remove('header-scrolled');
        }
    });

    // --- Communities Showcase Scroll Animation ---
    const showcaseSection = document.getElementById('communities-showcase');
    const stickyContainer = document.getElementById('showcase-sticky-container');
    const panels = document.querySelectorAll('.showcase-panel');

    if (showcaseSection && panels.length > 0) {
        // Set the first panel as active by default
        panels[0].classList.add('active');

        const scrollObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const rect = showcaseSection.getBoundingClientRect();
                        const scrollTop = -rect.top;
                        const scrollHeight = rect.height - window.innerHeight;
                        const scrollProgress = Math.max(0, Math.min(1, scrollTop / scrollHeight));
                        
                        // Determine which panel should be active
                        const activeIndex = Math.floor(scrollProgress * (panels.length));

                        panels.forEach((panel, index) => {
                           if (index <= activeIndex) {
                                panel.classList.add('active');
                           } else {
                                panel.classList.remove('active');
                           }
                        });
                    }
                });
            },
            { threshold: Array.from(Array(101).keys(), (i) => i / 100) } // Trigger for every 1% of visibility
        );

        scrollObserver.observe(showcaseSection);
    }

    // --- Lifestyle Section "Cutting" Overlay Animation ---
    const lifestyleSection = document.getElementById('lifestyle-section');
    const cutterTop = document.getElementById('cutter-top');
    const cutterBottom = document.getElementById('cutter-bottom');
    
    if (lifestyleSection && cutterTop && cutterBottom) {
        const lifestyleObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        window.addEventListener('scroll', handleLifestyleScroll);
                    } else {
                        window.removeEventListener('scroll', handleLifestyleScroll);
                    }
                });
            },
            { threshold: 0 }
        );

        function handleLifestyleScroll() {
            const rect = lifestyleSection.getBoundingClientRect();
            const scrollTop = -rect.top;
            const scrollHeight = rect.height - window.innerHeight;
            
            if (scrollTop >= 0 && scrollTop <= scrollHeight) {
                const scrollProgress = scrollTop / scrollHeight;

                // Animation phases: 
                // 0 -> 0.4: Wipes in
                // 0.4 -> 0.6: Full coverage
                // 0.6 -> 1.0: Wipes out
                
                let topTranslate, bottomTranslate;

                if (scrollProgress < 0.5) {
                    // Wiping in
                    const phaseProgress = scrollProgress / 0.5;
                    topTranslate = -100 + (100 * phaseProgress);
                    bottomTranslate = 100 - (100 * phaseProgress);
                } else {
                    // Wiping out
                    const phaseProgress = (scrollProgress - 0.5) / 0.5;
                    topTranslate = 0 + (100 * phaseProgress);
                    bottomTranslate = 0 - (100 * phaseProgress);
                }

                cutterTop.style.transform = `skewY(-10deg) translateY(${topTranslate}%)`;
                cutterBottom.style.transform = `skewY(-10deg) translateY(${bottomTranslate}%)`;
            }
        }

        lifestyleObserver.observe(lifestyleSection);
    }


    // --- Interest Section Logic ---
    let interestData = []; // Will be populated by language data
    const interestTitleEl = document.getElementById('interest-title');
    const interestDescEl = document.getElementById('interest-description');
    const interestButtonEl = document.getElementById('interest-button');
    const interestImageEl = document.getElementById('interest-image');
    const cardContainer = document.querySelector('#interest-section .flex-row.flex-wrap');

    function updateInterestContent(index, lang) {
        const currentLangData = translations[lang || localStorage.getItem('selectedLanguage') || 'en'];
        const item = currentLangData.interest_cards[index];

        interestTitleEl.textContent = item.title;
        interestDescEl.textContent = item.description;
        interestButtonEl.href = item.buttonLink;
        interestButtonEl.querySelector('.flex.items-center.justify-center').textContent = item.buttonText;
        interestImageEl.src = item.image;
        
        document.querySelectorAll('.interest-card').forEach((card, i) => {
            card.classList.toggle('border-primary', i === index);
            card.classList.toggle('border-grey-border', i !== index);
            card.querySelector('.bg-primary-light')?.classList.toggle('opacity-100', i === index);
            card.querySelector('a').classList.toggle('scale-100', i === index);
            card.querySelector('a').classList.toggle('opacity-100', i === index);
            card.querySelector('a').classList.toggle('scale-0', i !== index);
            card.querySelector('a').classList.toggle('opacity-0', i !== index);
        });
    }

    function rebuildInterestCards(lang) {
        cardContainer.innerHTML = ''; // Clear existing cards
        const currentLangData = translations[lang];

        currentLangData.interest_cards.forEach((item, index) => {
            const card = document.createElement('div');
            card.className = `interest-card group flex flex-col lg:justify-end gap-3 p-4 w-full leading-5 max-w-[10.3125rem] relative border transition-colors duration-500 cursor-pointer max-md:grow max-md:shrink-0 max-md:items-center max-md:max-w-[175px] md:h-[7.9375rem] ${index === 0 ? 'border-primary' : 'border-grey-border'}`;
            card.innerHTML = `
                <div class="bg-primary-light absolute top-0 left-0 size-full transition-all duration-500 ${index === 0 ? 'opacity-100' : 'opacity-0'}"></div>
                <a href="${item.buttonLink}" class="z-10 rounded-full bg-primary w-8 h-8 text-white flex items-center justify-center top-[0.625rem] end-[0.75rem] shrink-0 transition-all duration-500 max-lg:hidden md:absolute ${index === 0 ? 'scale-100 opacity-100' : 'scale-0 opacity-0'}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 rtl-flip"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
                <p class="text relative z-10 transition-colors duration-500 md:mt-8 text-body">${item.title}</p>
            `;
            card.addEventListener('mouseenter', () => updateInterestContent(index, lang));
            cardContainer.appendChild(card);
        });
    }

    if (interestTitleEl) { // Check if the interest section exists
        const savedLang = localStorage.getItem('selectedLanguage') || 'en';
        setLanguage(savedLang);
    }


    // --- Back to Top Button ---
    const backToTopButton = document.getElementById('back-to-top');
    backToTopButton.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});


  function toggleSubmenu(id) {
    const submenus = document.querySelectorAll('ul[id$="-submenu"]');
    const arrows = document.querySelectorAll('svg[id^="arrow-"]');

    submenus.forEach(submenu => {
      if (submenu.id !== id) submenu.classList.add('hidden');
    });

    arrows.forEach(arrow => {
      if (arrow.id !== 'arrow-' + id) arrow.classList.remove('rotate-90');
    });

    const currentSubmenu = document.getElementById(id);
    const currentArrow = document.getElementById('arrow-' + id);

    currentSubmenu.classList.toggle('hidden');
    currentArrow.classList.toggle('rotate-90');
  }
