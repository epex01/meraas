@include('include.header')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-green: #00693E;
            --dark-text: #212529;
            --light-text: #6c757d;
            --background-light: #f8f9fa;
            --border-color: #dee2e6;
        }
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: 'Open Sans', sans-serif;
            color: var(--dark-text);
            line-height: 1.6;
            overflow-x: hidden;
            background-color: #fff;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
        }
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        img {
            max-width: 100%;
            height: auto;
            display: block;
        }
        .section {
            padding: 80px 0;
        }
        
        /* Header & Hero */
        .hero {
            height: 80vh;
            position: relative;
            background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(images/1806_J_02_S3_Pocket_Park_Aerial_R6_8_K_1_af96e21ddffea8.png);
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }
        .hero .breadcrumbs {
            margin-bottom: 20px;
            font-size: 1rem;
        }
        .hero .title {
            font-size: clamp(3rem, 10vw, 6rem);
            font-weight: 500;
            letter-spacing: 2px;
            margin: 20px 0;
        }
        .hero .logo {
            width: 100px;
            height: 100px;
            background: rgba(255,255,255,0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--dark-text);
            border-radius: 50%;
            font-size: 1.2rem;
            font-weight: bold;
            border: 2px solid white;
        }

        /* Navigation */
        .nav-wrapper {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }
        .nav-wrapper.sticky {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            animation: slideDown 0.5s ease-out;
        }
        @keyframes slideDown {
            from { transform: translateY(-100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        nav.main-nav {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 15px 0;
        }
        nav.main-nav a {
            color: var(--dark-text);
            text-decoration: none;
            padding: 10px 20px;
            margin: 5px;
            position: relative;
            transition: color 0.3s ease;
        }
        nav.main-nav a:hover {
            color: var(--primary-green);
        }
        nav.main-nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: var(--primary-green);
            transition: width 0.3s ease;
        }
        nav.main-nav a:hover::after {
            width: 50%;
        }

        /* Welcome Section */
        .welcome-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }
        .welcome-section h2 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 400;
        }
        .welcome-section p {
            margin-bottom: 30px;
            line-height: 1.8;
            color: var(--light-text);
        }
        .cta-button {
            background: var(--primary-green);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            cursor: pointer;
            text-transform: uppercase;
            font-weight: 600;
            transition: background 0.3s, transform 0.3s;
            text-decoration: none;
        }
        .cta-button:hover { 
            background: #004d2c;
            transform: scale(1.05);
        }
        .cta-button .icon-wrapper {
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            padding: 10px;
            display: inline-flex;
            margin-right: 15px;
        }
        .location-info {
            border-left: 1px solid var(--border-color);
            padding-left: 30px;
        }
        .location-info .label {
            color: var(--light-text);
            letter-spacing: 1px;
            font-size: 0.9rem;
        }
        .location-info .location {
            font-size: 1.5rem;
            font-weight: 600;
        }

        /* Image Gallery */
        .image-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 10px;
            padding: 40px 0;
        }
        .image-gallery .img-container {
            overflow: hidden;
            border-radius: 8px;
        }
        .image-gallery img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease, filter 0.4s ease;
        }
        .image-gallery .img-container:hover img {
            transform: scale(1.05);
            filter: brightness(1.1);
        }

        /* Phases Section */
        .phases-section h2, .masterplan-section h2, .sales-centers-section h2 {
            font-size: 3rem;
            font-weight: 400;
            margin-bottom: 60px;
            text-align: center;
        }
        .phase-card {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
            margin-bottom: 80px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .phase-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        .phase-card .img-wrapper {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .phase-card img {
            width: 100%;
            transition: transform 0.4s ease;
        }
        .phase-card:hover img {
             transform: scale(1.05);
        }
        .phase-card .status {
            background: #e0f2e9;
            color: var(--primary-green);
            padding: 5px 15px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 20px;
            font-size: 0.9rem;
            font-weight: 600;
        }
        .phase-card h3 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 400;
        }
        .phase-card p { color: var(--light-text); }
        
        /* Benefits Section */
        .benefits-section { background: var(--background-light); }
        .benefits-section h2 { font-size: 3rem; font-weight: 400; margin-bottom: 80px; text-align: center; }
        .benefit-item {
            position: relative;
            padding-left: 100px;
            margin-bottom: 60px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
        }
        .benefit-item .num {
            position: absolute;
            left: 0;
            top: 0;
            font-size: 6rem;
            font-weight: 600;
            color: #e9ecef;
            line-height: 1;
            z-index: 1;
        }
        .benefit-item .content { position: relative; z-index: 2; }
        .benefit-item h3 {
            color: var(--primary-green);
            font-size: 2rem;
            margin-bottom: 10px;
        }

        /* Masterplan Section */
        .masterplan-tabs {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }
        .masterplan-tabs button {
            padding: 10px 20px;
            margin: 5px;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
            background: white;
            color: var(--dark-text);
            font-family: 'Poppins', sans-serif;
        }
        .masterplan-tabs button:hover {
            transform: scale(1.05);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .masterplan-tabs button.active {
            background: var(--primary-green);
            color: white;
            border-color: var(--primary-green);
        }
        .masterplan-section img { border-radius: 8px; }

        /* Stats Section */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            text-align: center;
        }
        .stat-item { padding: 20px; }
        .stat-item .number {
            font-size: 4rem;
            color: var(--primary-green);
            font-weight: 600;
        }
        .stat-item .unit { font-size: 2rem; }
        .stat-item .desc { color: var(--light-text); margin-top: 10px; }
        
        /* Location Section */
        .location-section {
            position: relative;
            padding: 80px 0;
        }
        .location-section .bg-img {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            object-fit: cover;
            z-index: -1;
            opacity: 0.1;
        }
        .location-section .location-grid {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 50px;
            align-items: center;
        }
        .location-section .content-box {
            background: white;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        .location-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        /* Sales Centers */
        .sales-centers-section .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }
        .sales-centers-section h2 { margin-bottom: 0; }
        .carousel-nav { display: flex; gap: 10px; }
        .carousel-nav button {
            width: 50px; height: 50px;
            border-radius: 50%;
            border: 1px solid var(--border-color);
            background: white;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .carousel-nav button:hover {
            transform: scale(1.1);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .carousel-wrapper { overflow: hidden; }
        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease;
        }
        .sales-card {
            flex: 0 0 50%;
            padding: 40px;
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(https://images.unsplash.com/photo-1556742044-53974c5d5069?q=80&w=2970&auto=format&fit=crop);
            background-size: cover;
            color: white;
            border-radius: 8px;
            margin: 0 10px;
            min-height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .sales-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .sales-card h3 { font-size: 2rem; margin-bottom: 30px; }
        .sales-card p { display: flex; align-items: center; margin-bottom: 15px; }
        
        /* Final CTA */
        .final-cta { background: var(--background-light); }
        .final-cta .content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }
        .final-cta h2 {
            font-size: clamp(1.5rem, 5vw, 2.5rem);
            font-weight: 400;
            color: var(--primary-green);
        }
        .final-cta .cta-button .icon-wrapper {
            padding: 15px;
            margin-right: 10px;
        }
        
        /* Footer */
        footer {
            background: #343a40;
            color: white;
            padding: 20px 0;
        }
        footer nav {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        footer nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            transition: color 0.3s ease;
        }
        footer nav a:hover {
            color: #ccc;
        }

        /* Floating Buttons */
        .floating-buttons {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .floating-buttons button {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            transition: opacity 0.3s, transform 0.3s;
        }
        .floating-buttons button:hover {
            transform: scale(1.1);
        }
        #scroll-to-top {
            background: var(--dark-text);
            opacity: 0;
            transform: scale(0.5);
            visibility: hidden;
        }
        #scroll-to-top.visible {
            opacity: 1;
            transform: scale(1);
            visibility: visible;
        }
        .accessibility-btn {
            background: var(--primary-green);
        }

        /* Animation Classes */
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
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .phase-card { grid-template-columns: 1fr; }
            .phase-card:nth-child(odd) .img-wrapper { order: -1; }
            .location-section .location-grid { grid-template-columns: 1fr; }
            .location-section .content-box { max-width: 500px; margin: 0 auto; }
        }
        @media (max-width: 768px) {
            .section { padding: 50px 0; }
            .welcome-section { grid-template-columns: 1fr; text-align: center; }
            .welcome-section .content { padding-right: 0; margin-bottom: 30px; }
            .welcome-section .location-info {
                border-left: none;
                border-top: 1px solid var(--border-color);
                padding-left: 0;
                padding-top: 20px;
            }
            .sales-card { flex: 0 0 100%; }
        }
    </style>
</head>
<body>
    <header>
        <div class="hero">
            <p class="breadcrumbs animate-on-scroll" style="transition-delay: 0.1s;">Home / Communities / SEDRA</p>
            <h1 class="title animate-on-scroll" style="transition-delay: 0.2s;">SEDRA</h1>
            <div class="logo animate-on-scroll" style="transition-delay: 0.3s;">SEDRA</div>
        </div>
        <div class="nav-wrapper" id="nav-wrapper">
            <nav class="container main-nav">
                <a href="#phases">Phases</a>
                <a href="#community">Community Life</a>
                <a href="#benefits">Benefits</a>
                <a href="#masterplan">Masterplan</a>
                <a href="#glance">At Glance</a>
                <a href="#location">Location</a>
                <a href="#sales-centers">Sales centers</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="section container welcome-section" id="welcome">
            <div class="content">
                <h2 class="animate-on-scroll">Welcome to SEDRA</h2>
                <p class="animate-on-scroll" style="transition-delay: 0.1s;">Already a thriving community, SEDRA is one of Riyadh's most sought-after residential developments. Reflective of the ROSHN Group approach, streets and public spaces are lined with native trees and plants, creating a pedestrian-friendly naturally landscaped, beautiful environment in which to live.</p>
                <a href="#" class="cta-button animate-on-scroll" style="transition-delay: 0.2s;">
                    <span class="icon-wrapper">
                         <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                    Register Your Interest
                </a>
            </div>
            <div class="location-info animate-on-scroll" style="transition-delay: 0.3s;">
                <p class="label">LOCATION</p>
                <p class="location">Riyadh</p>
            </div>
        </section>

        <section class="container image-gallery" id="community">
            <div class="img-container animate-on-scroll"><img src="images/185_sed.jpeg" alt="Community photo 1"></div>
            <div class="img-container animate-on-scroll" style="transition-delay: 0.1s;"><img src="images/4aldanah_56267cb3b0ab58.jpeg" alt="Community photo 2"></div>
            <div class="img-container animate-on-scroll" style="transition-delay: 0.2s;"><img src="images/1_bf41941c8b186e.jpeg" alt="Community photo 3"></div>
        </section>

        <section class="section container phases-section" id="phases">
            <h2 class="animate-on-scroll">Available Phases</h2>
            <div class="phase-card animate-on-scroll">
                <div class="img-wrapper"><img src="images/185_sed.jpeg" alt="Fifth Phase of SEDRA"></div>
                <div>
                    <span class="status">SALES LAUNCHED</span>
                    <h3>Fifth Phase of SEDRA</h3>
                    <p>Introducing the Fifth Phase of SEDRA with SEDRA Community already thriving and demand for homes rising with every launch, this fifth phase offers the chance to join thousands of families enjoying an elevated lifestyle.</p>
                </div>
            </div>
            <div class="phase-card animate-on-scroll">
                 <div class="img-wrapper"><img src="images/8_53fa76da62fa98.jpeg" alt="Fourth Phase of SEDRA"></div>
                <div>
                    <span class="status">SALES ONGOING</span>
                    <h3>Fourth Phase of SEDRA</h3>
                    <p>Launched in spring 2024, demand for these homes has been unprecedented, especially for the new C20 villa typology. With homes close to the extraordinary Sports For All Federation Dome.</p>
                </div>
            </div>
        </section>

        <section class="section benefits-section" id="benefits">
            <div class="container">
                <h2 class="animate-on-scroll text-green-600">Key Benefits</h2>
                <div class="benefit-item animate-on-scroll">
                    <span class="num">01</span>
                    <div class="content">
                        <h3>The Perfect Location in Riyadh</h3>
                        <p class="text-black">Situated in the desirable north of the city, just a fifteen-minute drive from the King Khalid International Airport and opposite the site of Expo 2030, SEDRA could not be better located in this thriving and growing city.</p>
                    </div>
                </div>
                <div class="benefit-item animate-on-scroll" style="transition-delay: 0.1s;">
                    <span class="num">02</span>
                    <div class="content">
                        <h3>Minutes from ROSHN Front</h3>
                        <p class="text-black">As a resident of SEDRA, the restaurants, shops and cinema of ROSHN Front are on your doorstep. Showcasing both day-to-day stores and major retail brands, all overlook beautiful landscaping, water features and greenery.</p>
                    </div>
                </div>
                <div class="benefit-item animate-on-scroll" style="transition-delay: 0.2s;">
                    <span class="num">03</span>
                    <div class="content">
                        <h3>Embracing Nature</h3>
                        <p class="text-black">In addition to the Wadi that winds through SEDRA, landscaped indigenous trees and plants provide shade and a beautiful backdrop to the whole community.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="section container masterplan-section" id="masterplan">
            <h2 class="animate-on-scroll">The Masterplan</h2>
            <div class="masterplan-tabs animate-on-scroll" style="transition-delay: 0.1s;">
                <button class="active">Overall Masterplan</button>
               </div>
            <img src="images/sedra_1b_a018ba3f3f385e.png" alt="Masterplan" class="animate-on-scroll" style="transition-delay: 0.2s;">
        </section>

        <section class="section container stats-section" id="glance">
            <div class="stats-grid">
                <div class="stat-item animate-on-scroll">
                    <h3 class="number"><span class="count-up" data-value="400">0</span> <span class="unit">Amenities</span></h3>
                    <p class="desc">Conveniently located to cater to the daily needs</p>
                </div>
                <div class="stat-item animate-on-scroll" style="transition-delay: 0.1s;">
                    <h3 class="number"><span class="count-up" data-value="30">0</span>K <span class="unit">Homes</span></h3>
                    <p class="desc">With designs to suit all tastes and needs</p>
                </div>
                <div class="stat-item animate-on-scroll" style="transition-delay: 0.2s;">
                    <h3 class="number"><span class="count-up" data-value="20">0</span>M <span class="unit">sqm</span></h3>
                    <p class="desc">Meticulously maintained and managed</p>
                </div>
                <div class="stat-item animate-on-scroll" style="transition-delay: 0.3s;">
                    <h3 class="number"><span class="count-up" data-value="8">0</span> <span class="unit">Phases</span></h3>
                    <p class="desc">Each an integrated, pedestrian-friendly community</p>
                </div>
            </div>
        </section>

        <section class="location-section" id="location">
            <img src="images/185_sed.jpeg" alt="Riyadh aerial view" class="bg-img">
            <div class="container location-grid">
                <div class=" animate-on-scroll">
                    <h2 text-green-700>The Perfect Location in Riyadh</h2>
                    <p text-black>SEDRA is found in desirable north Riyadh, close to the restaurants, cinema and major brands of ROSHN Front, a beautifully landscaped retail hub. The whole of Riyadh, an extraordinarily thriving city, is easily accessed via Sidr Road, or using the new Metro, with two stops within walking distance.</p>
                </div>
                <div></div>
            </div>
        </section>

        <section class="section container sales-centers-section" id="sales-centers">
            <div class="header animate-on-scroll">
                <h2>Our Sales Centers</h2>
                <div class="carousel-nav">
                    <button id="sales-prev"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(180deg);"><path d="M5 12H19" stroke="#00693E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 5L19 12L12 19" stroke="#00693E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                    <button id="sales-next"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H19" stroke="#00693E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 5L19 12L12 19" stroke="#00693E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                </div>
            </div>
            <div class="carousel-wrapper animate-on-scroll" style="transition-delay: 0.1s;">
                <div class="carousel-inner" id="sales-carousel-inner">
                    <div class="sales-card">
                        <h3>SEDRA Sales Center</h3>
                        <p>PHONE: 920022288</p>
                        <p>LOCATION: King Khalid International Airport, Riyadh</p>
                        <p>WORKING HOURS: Sun-Thu: (10 AM - 7 PM)</p>
                    </div>
                    <div class="sales-card">
                        <h3>WAREFA Sales Center</h3>
                        <p>PHONE: 920022288</p>
                        <p>LOCATION: Al Janadriyyah, Riyadh</p>
                        <p>WORKING HOURS: Sun & Thu: (10 AM - 7 PM), Mon, Tue & Wed: (12 PM - 9 PM)</p>
                    </div>
                    <div class="sales-card">
                         <h3>ALMANAR Sales Center</h3>
                         <p>PHONE: 920022288</p>
                         <p>LOCATION: Al-Khobar, Eastern Province</p>
                         <p>WORKING HOURS: Daily: (10 AM - 8 PM)</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="section final-cta">
            <div class="container content">
                <h2 class="animate-on-scroll">Enjoy a new way of living<br>in a Meraastrust community</h2>
                <a href="#" class="cta-button animate-on-scroll" style="transition-delay: 0.1s;">
                    <span class="icon-wrapper">
                       <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                    REGISTER INTEREST NOW
                </a>
            </div>
        </section>
    </main>

    <footer>
        <nav class="container">
            <a href="#phases">Phases</a>
            <a href="#community">Community Life</a>
            <a href="#benefits">Benefits</a>
            <a href="#masterplan">Masterplan</a>
            <a href="#glance">At Glance</a>
            <a href="#location">Location</a>
            <a href="#sales-centers">Sales centers</a>
        </nav>
    </footer>

    <div class="floating-buttons">
       
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // --- Sticky Navigation ---
            const navWrapper = document.getElementById('nav-wrapper');
            const navOffsetTop = navWrapper.offsetTop;

            window.addEventListener('scroll', () => {
                if (window.scrollY > navOffsetTop) {
                    navWrapper.classList.add('sticky');
                } else {
                    navWrapper.classList.remove('sticky');
                }
            });

            // --- Masterplan Tabs ---
            const tabs = document.querySelectorAll('.masterplan-tabs button');
            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    tabs.forEach(t => t.classList.remove('active'));
                    tab.classList.add('active');
                });
            });
            
            // --- Count Up Animation ---
            const countUpObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        const target = parseInt(el.getAttribute('data-value'), 10);
                        let current = 0;
                        const duration = 1500;
                        const stepTime = Math.max(1, Math.floor(duration / target));

                        const timer = setInterval(() => {
                            current += 1;
                            el.textContent = current;
                            if (current >= target) {
                                el.textContent = target;
                                clearInterval(timer);
                            }
                        }, stepTime);
                        
                        observer.unobserve(el);
                    }
                });
            }, { threshold: 0.8 });

            document.querySelectorAll('.count-up').forEach(el => {
                countUpObserver.observe(el);
            });

            // --- Sales Center Carousel ---
            const carouselInner = document.getElementById('sales-carousel-inner');
            const prevBtn = document.getElementById('sales-prev');
            const nextBtn = document.getElementById('sales-next');
            let itemsVisible = window.innerWidth > 768 ? 2 : 1;
            const totalItems = carouselInner.children.length;
            let currentIndex = 0;

            const updateCarousel = () => {
                itemsVisible = window.innerWidth > 768 ? 2 : 1;
                const itemWidth = carouselInner.parentElement.clientWidth / itemsVisible;
                carouselInner.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
            }

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
            
          

            // --- On Scroll Animations ---
            const animationObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                animationObserver.observe(el);
            });
        });
    </script>
    
 @include('include.footer')
