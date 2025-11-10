@include('include.header')
    <style>
        :root {
            --color-background: #0A0A14;
            --color-surface: #FFFFFF;
            --color-surface-secondary: #F7F7F7;
            --color-primary: #00B087;
            --color-secondary: #4F46E5;
            --color-text-light: #F0F0F5;
            --color-text-light-secondary: #A0A0B0;
            --color-text-dark: #1D1D1F;
            --color-text-dark-secondary: #6E6E73;
            --border-color: #EAEAEA;
            --font-sans: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }

        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
            font-size: 16px;
        }

        body {
            font-family: var(--font-sans);
            background-color: var(--color-surface);
            color: var(--color-text-dark);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .container {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            padding: 0 2rem;
        }

        section {
            padding: 6rem 0;
            overflow: hidden; /* Prevent horizontal scroll from animations */
        }
        
        h1, h2, h3, h4 {
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -0.02em;
        }

        p {
            line-height: 1.6;
            color: var(--color-text-dark-secondary);
            margin-bottom: 1rem;
        }

        .fade-in-section {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in-section.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        @media (max-width: 768px) {
            section {
                padding: 4rem 0;
            }
            .container {
                padding: 0 1rem;
            }
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 1.5rem 0;
            z-index: 1000;
            transition: background-color 0.3s ease, padding 0.3s ease, box-shadow 0.3s ease;
        }
        .header.scrolled {
            background-color: rgba(10, 10, 20, 0.8);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--color-text-light);
            text-decoration: none;
            letter-spacing: -1px;
        }
        .logo-next {
            color: var(--color-primary);
        }
        .nav {
            display: flex;
            gap: 2rem;
        }
        .nav-link {
            color: var(--color-text-light-secondary);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
        }
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            display: block;
            margin-top: 5px;
            right: 0;
            background: var(--color-primary);
            transition: width 0.3s ease;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--color-text-light);
        }
        .nav-link.active:after {
            width: 100%;
            left: 0;
            background: var(--color-primary);
        }
        
        @media (max-width: 768px) {
            .nav {
               display: none;
            }
        }

        #hero {
            height: 100vh;
            background: var(--color-background);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: var(--color-text-light);
            overflow: hidden;
            position: relative;
        }
         #hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: linear-gradient(35deg, var(--color-primary), var(--color-secondary));
            animation: grain 8s steps(10) infinite, color-shift 15s ease-in-out infinite;
            opacity: 0.1;
        }
        @keyframes grain {
            0%, 100% { transform:translate(0, 0) }
            10% { transform:translate(-5%, -10%) }
            20% { transform:translate(-15%, 5%) }
            30% { transform:translate(7%, -25%) }
            40% { transform:translate(-5%, 25%) }
            50% { transform:translate(-15%, 10%) }
            60% { transform:translate(15%, 0%) }
            70% { transform:translate(0%, 15%) }
            80% { transform:translate(3%, 35%) }
            90% { transform:translate(-10%, 10%) }
        }
         @keyframes color-shift {
            0% { background: linear-gradient(35deg, var(--color-primary), var(--color-secondary));}
            50% { background: linear-gradient(35deg, var(--color-secondary), var(--color-primary));}
            100% { background: linear-gradient(35deg, var(--color-primary), var(--color-secondary));}
        }
        .hero-breadcrumbs {
            font-size: 1rem;
            color: var(--color-text-light-secondary);
            margin-bottom: 1rem;
            letter-spacing: 0.5px;
        }
        .hero-title {
            font-size: clamp(3rem, 10vw, 8rem);
            font-weight: 800;
            letter-spacing: -0.05em;
        }
        
        #overview {
           background: var(--color-surface-secondary);
        }
        .overview-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }
        .overview-title {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin-bottom: 1.5rem;
            color: var(--color-text-dark);
        }
         .overview-image {
            width: 100%;
            border-radius: 16px;
            object-fit: cover;
            aspect-ratio: 4 / 3;
        }
        @media (max-width: 768px) {
            .overview-grid {
                grid-template-columns: 1fr;
            }
        }

        .section-title {
            font-size: clamp(2rem, 5vw, 3rem);
            text-align: center;
            margin-bottom: 4rem;
            color: var(--color-text-dark);
        }
        .themes-grid {
            display: grid;
            gap: 2rem;
        }
        .theme-card {
            background: var(--color-surface);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 2rem;
            display: grid;
            grid-template-columns: auto 1fr auto;
            gap: 2rem;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        .theme-number {
            font-size: 6rem;
            font-weight: 800;
            color: var(--color-surface-secondary);
            line-height: 1;
        }
        .theme-title {
            font-size: 1.75rem;
            margin-bottom: 0.5rem;
            color: var(--color-text-dark);
        }
        .theme-icon {
            width: 50px;
            height: 50px;
            color: var(--color-primary);
        }
         @media (max-width: 768px) {
            .theme-card {
                grid-template-columns: 1fr;
                text-align: center;
            }
            .theme-number {
                position: absolute;
                top: 1rem;
                left: 1rem;
                font-size: 4rem;
                opacity: 0.5;
            }
             .theme-icon {
                margin: 1rem auto 0;
            }
        }
        
        #engine {
            background: var(--color-surface-secondary);
        }
        .engine-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }
        .pillar-card {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            aspect-ratio: 3 / 4;
            color: var(--color-text-light);
            display: flex;
            align-items: flex-end;
            padding: 2rem;
            transition: transform 0.3s ease;
        }
        .pillar-card:hover {
            transform: translateY(-10px);
        }
        .pillar-bg {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            object-fit: cover;
            z-index: 0;
            transition: transform 0.3s ease;
        }
         .pillar-card:hover .pillar-bg {
            transform: scale(1.05);
        }
        .pillar-overlay {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            z-index: 1;
        }
        .pillar-title {
            font-size: 2rem;
            position: relative;
            z-index: 2;
        }
        @media (max-width: 992px) {
            .engine-grid {
                grid-template-columns: 1fr;
            }
        }

        .initiatives-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }
        .initiatives-content .pre-title {
            color: var(--color-primary);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
         .initiatives-content .initiatives-title {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin-bottom: 1.5rem;
        }
        .initiatives-images {
            position: relative;
            height: 400px;
        }
        .initiatives-img {
            position: absolute;
            border-radius: 16px;
            width: 70%;
            height: 70%;
            object-fit: cover;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .initiatives-img-1 {
            top: 0;
            left: 0;
        }
         .initiatives-img-2 {
            bottom: 0;
            right: 0;
        }
        @media (max-width: 768px) {
            .initiatives-grid {
                grid-template-columns: 1fr;
            }
            .initiatives-images {
                grid-row: 1;
                margin-bottom: 2rem;
            }
        }
        
        #join-us {
            background: var(--color-surface-secondary);
        }
        .tabs-nav {
            display: flex;
            gap: 1rem;
            border-bottom: 1px solid var(--border-color);
            margin-bottom: 3rem;
        }
        .tab-button {
            padding: 1rem 1.5rem;
            border: none;
            background: transparent;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            color: var(--color-text-dark-secondary);
            border-bottom: 2px solid transparent;
            transition: all 0.3s ease;
        }
        .tab-button.active {
            color: var(--color-primary);
            border-bottom-color: var(--color-primary);
        }
        .tab-content-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }
        .tab-image {
            width: 100%;
            border-radius: 16px;
            object-fit: cover;
            aspect-ratio: 4 / 3;
        }
        .tab-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        .cta-button {
            display: inline-block;
            background-color: var(--color-primary);
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 1rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .cta-button:hover {
           background-color: #008a6e;
           transform: translateY(-2px);
        }
        @media (max-width: 768px) {
            .tabs-nav {
                flex-wrap: wrap;
            }
            .tab-content-grid {
                grid-template-columns: 1fr;
            }
        }
        
        .floating-buttons-container {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            z-index: 999;
        }
        .floating-button {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, opacity 0.3s ease;
        }
        .floating-button:hover {
            transform: translateY(-3px);
        }
        .accessibility-btn {
            background-color: var(--color-primary);
            color: white;
        }
        .back-to-top-btn {
            background-color: var(--color-surface);
            color: var(--color-text-dark);
            border: 1px solid var(--border-color);
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
        }
        .back-to-top-btn.visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <main>
        <section id="hero">
            <div class="fade-in-section">
              <p class="hero-breadcrumbs">Home / We Are ROSHN / Meraastrust</p>
              <h1 class="hero-title">Meraastrust</h1>
            </div>
        </section>

        <section id="overview">
            <div class="container">
                <div class="fade-in-section overview-grid">
                    <div>
                        <h2 class="overview-title">We Create What’s Next in Real Estate</h2>
                        <p>As Meraastrust innovation arm, Meraastrust is a program designed to develop human-centric experiences that accelerate growth, enhance collaboration, and establish new standards within the real estate sector.</p>
                    </div>
                    <img src="images/Studio35708_acf85f016ab4eb.jpeg" alt="Innovation Robot" class="overview-image" />
                </div>
            </div>
        </section>

        <section id="themes">
            <div class="container">
                <div class="fade-in-section">
                  <h2 class="section-title text-white">Our Strategic Innovation Themes</h2>
                </div>
                <div class="themes-grid">
                    <div class="fade-in-section">
                        <div class="theme-card">
                            <div class="theme-number">01</div>
                            <div>
                                <h3 class="theme-title">Future of Living</h3>
                                <p>Reimagining modern lifestyles through the integration of smart technologies, modular construction methods, and data-driven design.</p>
                            </div>
                            <div class="theme-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div class="fade-in-section">
                        <div class="theme-card">
                            <div class="theme-number">02</div>
                            <div>
                                <h3 class="theme-title">Elevated Human Experiences</h3>
                                <p>Focusing on development around people and place by fostering inclusive, engaging, and socially connected communities.</p>
                            </div>
                            <div class="theme-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m-7.5-2.72a3 3 0 00-4.682-2.72 9.094 9.094 0 003.741-.479m7.5 2.72a8.963 8.963 0 01-7.5 0M12 3v1.5M12 9v.01M12 15v.01M12 21v1.5M9 5.25v.01M9 11.25v.01M9 17.25v.01M15 5.25v.01M15 11.25v.01M15 17.25v.01M4.5 9.75v.01M4.5 15.75v.01M19.5 9.75v.01M19.5 15.75v.01"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div class="fade-in-section">
                        <div class="theme-card">
                            <div class="theme-number">03</div>
                            <div>
                                <h3 class="theme-title">New Business Horizons</h3>
                                <p>Exploring scalable commercial opportunities beyond traditional real estate through venture creation, digital platforms, and innovative service models.</p>
                            </div>
                            <div class="theme-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="engine">
            <div class="container">
                <div class="fade-in-section">
                    <h2 class="section-title">Our Innovation Engine</h2>
                </div>
                <div class="engine-grid">
                    <div class="fade-in-section">
                        <div class="pillar-card">
                            <img src="images/13_06_No_Kids_08a8150e15c9eb.jpeg" alt="Discover & Explore" class="pillar-bg" />
                            <div class="pillar-overlay"></div>
                            <h3 class="pillar-title">Discover & Explore</h3>
                        </div>
                    </div>
                    <div class="fade-in-section">
                        <div class="pillar-card">
                            <img src="images/Fine_Art142_1_ddb0af8ddad695.jpeg" alt="Engage & Empower" class="pillar-bg" />
                            <div class="pillar-overlay"></div>
                            <h3 class="pillar-title">Engage & Empower</h3>
                        </div>
                    </div>
                    <div class="fade-in-section">
                        <div class="pillar-card">
                            <img src="images/Fine_Art161_4dd235af9c6bb1.png" alt="Test, Build & Scale" class="pillar-bg" />
                            <div class="pillar-overlay"></div>
                            <h3 class="pillar-title">Test, Build & Scale</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="initiatives">
            <div class="container">
                <div class="fade-in-section initiatives-grid">
                    <div class="initiatives-images">
                        <img src="images/FB_06545s_5a2759e2c11fda.jpeg" alt="Visionaries event" class="initiatives-img initiatives-img-1" />
                        <img src="images/Fine_Art198_S_8586f37872b7af.jpeg" alt="Team working" class="initiatives-img initiatives-img-2" />
                    </div>
                    <div class="initiatives-content">
                        <p class="pre-title">INNOVATION INITIATIVES</p>
                        <h2 class="initiatives-title">Turning Bold Ideas into Ventures</h2>
                        <p>ROSHN Group has a successful track record of leading real estate innovation events, including ROSHN Hackathon and the internal Visionaries initiative. Meraastrust accelerates the Group's leadership across the innovation ecosystem by curating events and initiatives that empower bold thinkers to transform high-potential ideas into viable business solutions.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="join-us">
            <div class="container">
                <div class="fade-in-section">
                    <h2 class="section-title">Join Us On Our Journey</h2>
                </div>
                <div class="fade-in-section">
                    <div class="tabs-nav">
                        <button class="tab-button active" data-tab="Entrepreneurs" role="tab" aria-selected="true">Entrepreneurs</button>
                        <button class="tab-button" data-tab="Startups" role="tab" aria-selected="false">Startups</button>
                        <button class="tab-button" data-tab="Industry Partners" role="tab" aria-selected="false">Industry Partners</button>
                    </div>
                </div>
                <div class="fade-in-section tab-content-grid">
                    <img src="images/2_Q2_A4645_HDR_Pano_copy_2_1_acc43b93261156.jpeg" alt="Entrepreneurs" class="tab-image" id="tab-image">
                    <div>
                        <h3 class="tab-title" id="tab-title">Entrepreneurs</h3>
                        <p id="tab-text">Innovators and entrepreneurs with innovative ideas can join our venture building programs to transform bold concepts into viable business solutions through direct collaboration with ROSHN Group.</p>
                        <a href="#" class="cta-button" id="tab-cta">Pitch Your Idea</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="floating-buttons-container">
     
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // --- ANIMATIONS ON SCROLL ---
            const animatedSections = document.querySelectorAll('.fade-in-section');
            const animationObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            animatedSections.forEach(section => animationObserver.observe(section));

            // --- STICKY HEADER ---
            const header = document.querySelector('.header');
            const handleScroll = () => {
                if (window.scrollY > 10) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            };
            window.addEventListener('scroll', handleScroll);

            // --- ACTIVE NAV LINK ON SCROLL ---
            const navLinks = document.querySelectorAll('.nav-link');
            const sections = document.querySelectorAll('main section');
            const navObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const id = entry.target.getAttribute('id');
                        navLinks.forEach(link => {
                            link.classList.remove('active');
                            if (link.getAttribute('href') === `#${id}`) {
                                link.classList.add('active');
                            }
                        });
                    }
                });
            }, { rootMargin: '-30% 0px -70% 0px' });
            sections.forEach(section => navObserver.observe(section));
            
            // --- TABS LOGIC FOR 'JOIN US' SECTION ---
            const tabsData = {
                'Entrepreneurs': {
                    img: 'https://images.unsplash.com/photo-1556157382-97eda2d62296?q=80&w=1740&auto=format&fit=crop',
                    text: "Innovators and entrepreneurs with innovative ideas can join our venture building programs to transform bold concepts into viable business solutions through direct collaboration with ROSHN Group.",
                    button: "Pitch Your Idea"
                },
                'Startups': {
                    img: 'https://images.unsplash.com/photo-1600880292210-352bb62b2455?q=80&w=1740&auto=format&fit=crop',
                    text: "Scaling-ready startups can join our programs that focus on transforming bold ventures into viable business solutions. This program offers expert mentorship and comprehensive training.",
                    button: "Accelerate Your Startup"
                },
                'Industry Partners': {
                    img: 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=1740&auto=format&fit=crop',
                    text: "Venture capitalists, venture builders, and corporations can explore strategic partnerships with ROSHN Group to build mutual value within our innovation ecosystem.",
                    button: "Collaborate With Us"
                }
            };
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabImage = document.getElementById('tab-image');
            const tabTitle = document.getElementById('tab-title');
            const tabText = document.getElementById('tab-text');
            const tabCta = document.getElementById('tab-cta');

            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const tabName = button.dataset.tab;
                    const tabData = tabsData[tabName];

                    // Update active button
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');
                    
                    // Update content
                    tabImage.src = tabData.img;
                    tabImage.alt = tabName;
                    tabTitle.textContent = tabName;
                    tabText.textContent = tabData.text;
                    tabCta.textContent = tabData.button;
                });
            });

            // --- FLOATING BUTTONS ---
            const backToTopButton = document.getElementById('back-to-top');
            const toggleVisibility = () => {
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.add('visible');
                } else {
                    backToTopButton.classList.remove('visible');
                }
            };
            window.addEventListener('scroll', toggleVisibility);
            backToTopButton.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });
    </script>

 @include('include.footer')
