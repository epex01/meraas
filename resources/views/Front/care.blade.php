@include('include.header')

    <style>
        :root {
            --bg-dark-primary: #111827;
            --bg-dark-secondary: #1f2937;
            --bg-dark-tertiary: #374151;
            --text-primary: #e5e7eb;
            --text-secondary: #9ca3af;
            --accent-primary: #14b8a6;
            --accent-secondary: #0d9488;
        }

        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: sans-serif;
            background-color: var(--bg-dark-primary);
            color: var(--text-primary);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        h1, h2, h3, h4 {
            color: white;
            line-height: 1.2;
        }

        h1 { font-size: 3.5rem; font-weight: 800; }
        h2 { font-size: 2.5rem; font-weight: 700; }
        h3 { font-size: 1.75rem; font-weight: 600; }
        h4 { font-size: 1.25rem; font-weight: 600; }

        a {
            color: var(--accent-primary);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: var(--accent-secondary);
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        button {
            cursor: pointer;
            font-family: inherit;
            border: none;
            background: none;
            color: inherit;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        section {
            padding: 5rem 0;
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 24rem;
            background-image: url('https://picsum.photos/1920/1080?random=0');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
        }
        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.6);
        }
        .hero-content {
            position: relative;
            width: 100%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }
        .hero-content p {
            color: var(--text-secondary);
            margin-bottom: 0.5rem;
        }

        /* Mission Section */
        .mission-section {
            text-align: center;
        }
        .mission-section h2 {
            max-width: 48rem;
            margin: 0 auto;
            font-size: 2.5rem;
            font-weight: 300;
            line-height: 1.4;
        }
        .mission-section .faded-text {
            color: var(--text-secondary);
        }

        /* Contact Section */
        .contact-section {
            background-color: var(--bg-dark-secondary);
        }
        .contact-section h2 {
            margin-bottom: 3rem;
        }
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 3rem;
        }
        @media (min-width: 1024px) {
            .contact-grid {
                grid-template-columns: 1fr 1fr;
            }
        }
        .contact-grid form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        .contact-grid input, .contact-grid textarea, .contact-grid select {
            width: 100%;
            padding: 0.75rem 1rem;
            background-color: var(--bg-dark-tertiary);
            border: 1px solid #4b5563;
            border-radius: 0.375rem;
            color: var(--text-primary);
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .contact-grid input:focus, .contact-grid textarea:focus, .contact-grid select:focus {
            outline: none;
            border-color: var(--accent-primary);
            box-shadow: 0 0 0 2px var(--accent-primary);
        }
        .input-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        @media (min-width: 768px) {
            .input-grid {
                grid-template-columns: 1fr 1fr;
            }
        }
        .phone-group {
            display: flex;
        }
        .phone-group select {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-right: none;
            width: auto;
        }
        .phone-group input {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        .select-wrapper {
            position: relative;
        }
        .select-wrapper::after {
            content: '▼';
            position: absolute;
            top: 50%;
            right: 1rem;
            transform: translateY(-50%);
            pointer-events: none;
            color: var(--text-secondary);
            font-size: 0.75rem;
        }
        .select-wrapper select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        .submit-group {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        .text-button {
            background-color: var(--accent-primary);
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 0.375rem;
            font-weight: 600;
            letter-spacing: 0.05em;
            transition: background-color 0.3s;
        }
        .text-button:hover {
            background-color: var(--accent-secondary);
        }
        .icon-button {
            background-color: var(--bg-dark-tertiary);
            padding: 0.75rem;
            border-radius: 50%;
            transition: background-color 0.3s;
        }
        .icon-button:hover {
            background-color: #4b5563;
        }
        .icon-button svg {
            width: 1.5rem;
            height: 1.5rem;
        }
        .contact-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0.5rem;
        }
        @media (max-width: 1023px) {
            .contact-image {
                display: none;
            }
        }

        /* Support Channels */
        .support-channels-section .section-header-small {
            text-align: center;
            margin-bottom: 3rem;
        }
        .section-header-small p {
            color: var(--accent-primary);
            font-weight: 600;
            letter-spacing: 0.1em;
            margin-bottom: 0.5rem;
        }
        .support-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }
        .support-item {
            background-color: var(--bg-dark-secondary);
            padding: 2rem;
            border-radius: 0.5rem;
            text-align: center;
            transition: transform 0.3s, background-color 0.3s;
        }
        .support-item:hover {
            transform: translateY(-5px);
            background-color: var(--accent-primary);
        }
        .support-icon-bg {
            width: 5rem;
            height: 5rem;
            margin: 0 auto 1.5rem;
            border-radius: 50%;
            background-color: var(--bg-dark-tertiary);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s;
        }
        .support-item:hover .support-icon-bg {
            background-color: var(--accent-secondary);
        }
        .support-icon-bg svg {
            width: 2rem;
            height: 2rem;
        }
        .support-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: white;
            margin-bottom: 0.25rem;
        }
        .support-subtitle {
            color: var(--text-secondary);
            transition: color 0.3s;
        }
        .support-item:hover .support-subtitle {
            color: var(--text-primary);
        }

        /* Sales Centers */
        .sales-centers-section {
            background-color: var(--bg-dark-secondary);
        }
        .sales-centers-section > .container > h2 {
            text-align: center;
            margin-bottom: 3rem;
        }
        .sales-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }
        @media (min-width: 1024px) {
            .sales-grid {
                grid-template-columns: 3fr 2fr;
            }
        }
        #sales-image-container, .sales-map {
            position: relative;
            border-radius: 0.5rem;
            overflow: hidden;
            aspect-ratio: 4 / 3;
        }
        .sales-map {
            aspect-ratio: 1 / 1;
        }
        .sales-image, .map-image {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }
        .sales-image.active, .map-image.active {
            opacity: 1;
        }
        .sales-tabs {
            display: flex;
            border-bottom: 1px solid var(--bg-dark-tertiary);
            margin-top: 2rem;
        }
        .sales-tab {
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            color: var(--text-secondary);
            border-bottom: 2px solid transparent;
            transition: color 0.3s, border-color 0.3s;
        }
        .sales-tab:hover {
            color: white;
        }
        .sales-tab.active {
            color: var(--accent-primary);
            border-color: var(--accent-primary);
        }
        #sales-tab-content-container {
            margin-top: 1.5rem;
            position: relative;
            min-height: 280px;
        }
        .sales-tab-content {
            transition: opacity 0.5s ease-in-out;
            opacity: 0;
            position: absolute;
            inset: 0;
            pointer-events: none;
        }
        .sales-tab-content.active {
            opacity: 1;
            position: static;
            pointer-events: auto;
        }
        .visit-location {
            color: var(--accent-primary);
            font-weight: 600;
            letter-spacing: 0.1em;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }
        .sales-tab-content h3 { margin-bottom: 0.5rem; }
        .sales-tab-content > p { color: var(--text-secondary); margin-bottom: 1rem; }
        .sales-tab-content h4 { margin-bottom: 0.5rem; }
        .sales-tab-content ul {
            list-style-position: inside;
            color: var(--text-secondary);
            padding-left: 0.5rem;
        }

        /* Offices Section */
        #offices {
            overflow: hidden;
        }
        .offices-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 3rem;
        }
        .carousel-nav button {
            background-color: var(--bg-dark-secondary);
            border-radius: 50%;
            width: 2.5rem;
            height: 2.5rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s;
        }
        .carousel-nav button:hover {
            background-color: var(--bg-dark-tertiary);
        }
        .carousel-nav button svg {
            width: 1.5rem;
            height: 1.5rem;
        }
        .carousel-nav {
            display: flex;
            gap: 0.5rem;
        }
        .offices-carousel-wrapper {
            margin-left: calc((100% - 1280px) / 2 + 1.5rem);
        }
        @media (max-width: 1280px) {
            .offices-carousel-wrapper {
                margin-left: 1.5rem;
            }
        }
        .offices-carousel {
            display: flex;
            gap: 2rem;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            padding-bottom: 2rem; /* for shadow */
        }
        .offices-carousel::-webkit-scrollbar {
            display: none;
        }
        .office-card {
            flex: 0 0 22rem;
            scroll-snap-align: start;
            position: relative;
            height: 500px;
            border-radius: 0.5rem;
            overflow: hidden;
        }
        .office-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .office-card:hover img {
            transform: scale(1.05);
        }
        .office-card-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,1) 0%, rgba(0,0,0,0.6) 50%, transparent 100%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 1.5rem;
            color: white;
        }
        .office-card-overlay h3 {
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }
        .office-details {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: max-height 0.5s ease, opacity 0.5s ease;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }
        .office-card:hover .office-details {
            max-height: 300px;
            opacity: 1;
        }
        .office-detail-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }
        .office-detail-item svg {
            width: 1.25rem;
            height: 1.25rem;
            color: var(--accent-primary);
            flex-shrink: 0;
            margin-top: 0.25rem;
        }
        .office-detail-item span {
            display: block;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            color: var(--accent-primary);
            text-transform: uppercase;
        }
        .office-detail-item p, .office-detail-item a {
            font-size: 0.9rem;
            color: white;
        }
        .offices-carousel .spacer {
            flex: 0 0 1px;
        }

        /* FAQs Section */
        .faqs-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem 4rem;
        }
        @media (min-width: 768px) {
            .faqs-grid {
                grid-template-columns: 1fr 2fr;
            }
        }
        .faq-item {
            border-bottom: 1px solid var(--bg-dark-tertiary);
        }
        .faq-question {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: left;
            padding: 1.5rem 0;
            font-size: 1.125rem;
            font-weight: 600;
        }
        .faq-icon {
            position: relative;
            width: 1.5rem;
            height: 1.5rem;
            transition: transform 0.3s ease;
        }
        .faq-icon svg {
            position: absolute;
            transition: opacity 0.3s ease;
        }
        .faq-icon .minus-icon { opacity: 0; }
        .faq-item.active .faq-icon { transform: rotate(135deg); }
        .faq-item.active .faq-icon .plus-icon { opacity: 0; }
        .faq-item.active .faq-icon .minus-icon { opacity: 1; }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-in-out, padding 0.5s ease-in-out;
        }
        .faq-answer p {
            color: var(--text-secondary);
            padding-bottom: 1.5rem;
        }
        .faq-item.active .faq-answer {
            max-height: 200px;
        }

        /* Floating Buttons */
        .floating-buttons {
            position: fixed;
            bottom: 1.5rem;
            right: 1.5rem;
            z-index: 50;
        }
        .scroll-top-button {
            background-color: var(--accent-primary);
            color: white;
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.4);
            transition: opacity 0.3s, transform 0.3s, background-color 0.3s;
            opacity: 0;
            transform: scale(0.5);
            pointer-events: none;
        }
        .scroll-top-button.visible {
            opacity: 1;
            transform: scale(1);
            pointer-events: auto;
        }
        .scroll-top-button:hover {
            background-color: var(--accent-secondary);
        }
        .scroll-top-button svg {
            width: 1.5rem;
            height: 1.5rem;
        }
    </style>
</head>
<body>

    <header class="hero">
        <div class="hero-content">
            <p>Home / meraastrust Care</p>
            <h1>meraastrust Care</h1>
        </div>
    </header>

    <main>
        <section id="mission" class="mission-section">
            <div class="container">
                <h2>
                    At meraastrust Group, our mission goes beyond simply providing world-class homes; we are dedicated to creating
                    <span class="faded-text"> lasting, meaningful experiences for every customer.</span>
                </h2>
            </div>
        </section>

        <section id="contact" class="contact-section">
            <div class="container">
                <h2>Contact Us</h2>
                <div class="contact-grid">
                    <form id="contact-form">
                        <div class="input-grid">
                            <input type="text" id="firstName" name="firstName" placeholder="First Name *" required>
                            <input type="text" id="lastName" name="lastName" placeholder="Last Name *" required>
                        </div>
                        <div class="phone-group">
                             <select aria-label="Country code">
                                <option>+966</option>
                             </select>
                             <input type="tel" id="phone" name="phone" placeholder="Phone Number *" required>
                        </div>
                        <input type="email" id="email" name="email" placeholder="Email *" required>
                        <div class="select-wrapper">
                            <select id="requestType" name="requestType" required>
                                <option value="" disabled selected>Request Type *</option>
                                <option value="general">General Inquiry</option>
                                <option value="sales">Sales</option>
                                <option value="support">Support</option>
                            </select>
                        </div>
                        <textarea id="message" name="message" rows="5" placeholder="Message *" required></textarea>
                        <div class="submit-group">
                            <button type="submit" class="text-button">SUBMIT</button>
                            <button type="submit" class="icon-button" aria-label="Submit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                            </button>
                        </div>
                    </form>
                    <div class="contact-image">
                        <img src="images/DSC_09792_HDR_new_b4e81fe69cafae.jpeg" alt="Modern Interior">
                    </div>
                </div>
            </div>
        </section>

        <section id="support" class="support-channels-section">
            <div class="container">
                 <div class="section-header-small">
                    <p>SUPPORT CHANNELS</p>
                    <h2 class="text-black">Other Ways to Reach Us</h2>
                </div>
                <div class="support-list">
                    <a href="tel:920022288" class="support-item">
                        <div class="support-icon-bg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
                        </div>
                        <p class="support-title">920022288</p><br/>
                        <p class="support-subtitle">Phone Support</p>
                    </a>
                    <a href="mailto:customercare@meraastrust.sa" class="support-item">
                        <div class="support-icon-bg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25-2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                        </div>
                        <p class="support-title">customercare@meraastrust.sa</p>
                        <p class="support-subtitle">Email Support</p>
                    </a>
                    <a href="#" class="support-item">
                        <div class="support-icon-bg">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.94-.416-1.258a4.48 4.48 0 00-5.163-3.26A9.76 9.76 0 013 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" /></svg>
                        </div>
                        <p class="support-title">@meraastrustksa</p>
                        <p class="support-subtitle">Social Media Support</p>
                    </a>
                </div>
            </div>
        </section>

        <section id="sales-centers" class="sales-centers-section">
            <div class="container">
                <h2>Our Sales Centers</h2>
                <div class="sales-grid">
                    <div class="sales-content">
                        <div id="sales-image-container">
                            <img src="images/Green_Initiative_Center_7e82df515ff258.jpeg" alt="SEDRA Sales Center" class="sales-image active" data-tab="0">
                            <img src="images/Green_Initiative_Center_7e82df515ff258.jpeg" alt="WAREFA Sales Center" class="sales-image" data-tab="1">
                            <img src="images/Green_Initiative_Center_7e82df515ff258.jpeg" alt="ALAROUS Sales Center" class="sales-image" data-tab="2">
                        </div>
                        <div class="sales-details-wrapper">
                            <div class="sales-tabs">
                                <button class="sales-tab active" data-tab="0">SEDRA Sales Center</button>
                                <button class="sales-tab" data-tab="1">WAREFA Sales Center</button>
                                <button class="sales-tab" data-tab="2">ALAROUS Sales</button>
                            </div>
                            <div id="sales-tab-content-container">
                                <div class="sales-tab-content active" data-content="0">
                                    <p class="visit-location">VISIT LOCATION</p>
                                    <h3>SEDRA Community</h3>
                                    <p>Al Janadriyah, Riyadh, Saudi Arabia</p>
                                    <h4>Business Hours:</h4>
                                    <ul>
                                        <li>Sunday & Thursday: 10:00 AM - 7:00 PM</li>
                                        <li>Monday, Tuesday & Wednesday: 12:00 PM - 9:00 PM</li>
                                        <li>Saturday: 1:00 PM - 6:00 PM</li>
                                    </ul>
                                </div>
                                <div class="sales-tab-content" data-content="1">
                                    <p class="visit-location">VISIT LOCATION</p>
                                    <h3>WAREFA Community</h3>
                                    <p>Al Janadriyah, Riyadh, Saudi Arabia</p>
                                    <h4>Business Hours:</h4>
                                    <ul>
                                        <li>Sunday & Thursday: 10:00 AM - 7:00 PM</li>
                                        <li>Monday, Tuesday & Wednesday: 12:00 PM - 9:00 PM</li>
                                    </ul>
                                </div>
                                <div class="sales-tab-content" data-content="2">
                                    <p class="visit-location">VISIT LOCATION</p>
                                    <h3>Prince Mohammed bin Abdulaziz Street</h3>
                                    <p>Al Khalidiyah, Jeddah, Saudi Arabia</p>
                                    <h4>Business Hours:</h4>
                                    <ul>
                                        <li>Sunday to Thursday: 10:00 AM - 7:00 PM</li>
                                        <li>Saturday: 2:00 PM - 6:00 PM</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-map">
                        <img src="https://www.google.com/maps?q=6.5244,3.3792" alt="Map of SEDRA Sales Center" class="map-image active" data-tab="0">
                        <img src="https://www.google.com/maps?q=6.5244,3.3792" alt="Map of WAREFA Sales Center" class="map-image" data-tab="1">
                        <img src="https://www.google.com/maps?q=6.5244,3.3792" alt="Map of ALAROUS Sales Center" class="map-image" data-tab="2">
                    </div>
                </div>
            </div>
        </section>

        <section id="offices" class="offices-section">
            <div class="container offices-header">
                <h2>Our Offices</h2>
                <div class="carousel-nav">
                    <button id="scroll-left" aria-label="Scroll left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                    </button>
                    <button id="scroll-right" aria-label="Scroll right">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                    </button>
                </div>
            </div>
            <div class="offices-carousel-wrapper">
                <div class="offices-carousel" id="offices-carousel">
                    <!-- Office Cards will be injected here by script.js or hardcoded -->
                     <div class="office-card">
                        <img src="images/Green_Initiative_Center_7e82df515ff258.jpeg" alt="Head Office">
                        <div class="office-card-overlay">
                            <h3>Head Office</h3>
                            <div class="office-details">
                                <div class="office-detail-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
                                    <div><span>PHONE</span><a href="tel:920022288">920022288</a></div>
                                </div>
                                <div class="office-detail-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25-2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                                    <div><span>EMAIL</span><a href="mailto:customercare@meraastrust.sa">customercare@meraastrust.sa</a></div>
                                </div>
                                <div class="office-detail-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                                    <div><span>LOCATION</span><p>KAFD 5.08, Riyadh</p></div>
                                </div>
                                <div class="office-detail-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                    <div><span>WORKING HOURS</span><p>Saturday to Thursday from 9 am to 9 pm</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="office-card">
                        <img src="images/Green_Initiative_Center_7e82df515ff258.jpeg" alt="Jeddah Office">
                        <div class="office-card-overlay">
                            <h3>Jeddah Office</h3>
                             <div class="office-details">
                                <div class="office-detail-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
                                    <div><span>PHONE</span><a href="tel:920022288">920022288</a></div>
                                </div>
                                 <div class="office-detail-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25-2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                                    <div><span>EMAIL</span><a href="mailto:customercare@meraastrust.sa">customercare@meraastrust.sa</a></div>
                                </div>
                                <div class="office-detail-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                                    <div><span>LOCATION</span><p>The Headquarters Business Park, Jeddah</p></div>
                                </div>
                                <div class="office-detail-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                    <div><span>WORKING HOURS</span><p>Saturday to Thursday from 9 am to 9 pm</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="office-card">
                        <img src="images/Green_Initiative_Center_7e82df515ff258.jpeg" alt="SEDRA Office">
                        <div class="office-card-overlay">
                            <h3>SEDRA Office</h3>
                             <div class="office-details">
                                <div class="office-detail-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
                                    <div><span>PHONE</span><a href="tel:920022288">920022288</a></div>
                                </div>
                                 <div class="office-detail-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25-2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                                    <div><span>EMAIL</span><a href="mailto:customercare@meraastrust.sa">customercare@meraastrust.sa</a></div>
                                </div>
                                <div class="office-detail-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                                    <div><span>LOCATION</span><p>King Khalid International Airport Road, Riyadh</p></div>
                                </div>
                                <div class="office-detail-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                    <div><span>WORKING HOURS</span><p>Saturday to Thursday from 9 am to 9 pm</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="office-card">
                        <img src="https://picsum.photos/600/800?random=23" alt="ALAROUS Office">
                        <div class="office-card-overlay">
                            <h3>ALAROUS Office</h3>
                             <div class="office-details">
                                <div class="office-detail-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
                                    <div><span>PHONE</span><a href="tel:920022288">920022288</a></div>
                                </div>
                                 <div class="office-detail-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25-2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                                    <div><span>EMAIL</span><a href="mailto:customercare@meraastrust.sa">customercare@meraastrust.sa</a></div>
                                </div>
                                <div class="office-detail-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                                    <div><span>LOCATION</span><p>Al Khalidiyah, Jeddah</p></div>
                                </div>
                                <div class="office-detail-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                    <div><span>WORKING HOURS</span><p>Saturday to Thursday from 9 am to 9 pm</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="spacer"></div>
                </div>
            </div>
        </section>

        <section id="faqs" class="faqs-section">
            <div class="container faqs-grid">
                <div class="faq-header">
                    <h2>FAQs</h2>
                </div>
                <div class="faq-list">
                    <div class="faq-item">
                        <button class="faq-question">
                            <span>What is meraastrust Group?</span>
                            <span class="faq-icon">
                               <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>
                                <svg class="minus-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" /></svg>
                            </span>
                        </button>
                        <div class="faq-answer">
                            <p>meraastrust Group is a national real estate developer, powered by the Public Investment Fund (PIF) of Saudi Arabia. We are committed to delivering high-quality living standards to the people of Saudi Arabia and supporting the government's efforts to increase rates of homeownership.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            <span>What distinguishes meraastrust Group?</span>
                            <span class="faq-icon">
                               <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>
                                <svg class="minus-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" /></svg>
                            </span>
                        </button>
                        <div class="faq-answer">
                            <p>Our communities are designed to provide a unique living experience, integrating residential, commercial, and recreational spaces. We focus on sustainability, modern infrastructure, and creating vibrant communities that enhance the quality of life for our residents.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            <span>What is meraastrust Group's role in Vision 2030?</span>
                           <span class="faq-icon">
                                <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>
                                <svg class="minus-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" /></svg>
                            </span>
                        </button>
                        <div class="faq-answer">
                            <p>As a key enabler of Vision 2030, meraastrust Group is contributing to the nation's economic diversification and increasing the quality of life. We are creating thousands of jobs, stimulating economic growth, and helping to achieve the goal of 70% homeownership for Saudi citizens by 2030.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

   

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // Contact Form Handler
            const contactForm = document.getElementById('contact-form');
            if (contactForm) {
                contactForm.addEventListener('submit', (e) => {
                    e.preventDefault();
                    alert('Thank you for your message!');
                    contactForm.reset();
                });
            }

            // Sales Center Tabs
            const salesTabsContainer = document.querySelector('.sales-tabs');
            if (salesTabsContainer) {
                const tabs = salesTabsContainer.querySelectorAll('.sales-tab');
                const contents = document.querySelectorAll('.sales-tab-content');
                const images = document.querySelectorAll('.sales-image');
                const maps = document.querySelectorAll('.map-image');

                salesTabsContainer.addEventListener('click', (e) => {
                    const clickedTab = e.target.closest('.sales-tab');
                    if (!clickedTab) return;

                    const tabIndex = clickedTab.dataset.tab;

                    // Deactivate all
                    [tabs, contents, images, maps].forEach(collection => {
                        collection.forEach(item => item.classList.remove('active'));
                    });

                    // Activate clicked
                    clickedTab.classList.add('active');
                    document.querySelector(`.sales-tab-content[data-content='${tabIndex}']`).classList.add('active');
                    document.querySelector(`.sales-image[data-tab='${tabIndex}']`).classList.add('active');
                    document.querySelector(`.map-image[data-tab='${tabIndex}']`).classList.add('active');
                });
            }

            // Offices Carousel
            const carousel = document.getElementById('offices-carousel');
            const scrollLeftBtn = document.getElementById('scroll-left');
            const scrollRightBtn = document.getElementById('scroll-right');
            if (carousel && scrollLeftBtn && scrollRightBtn) {
                const scrollAmount = () => carousel.offsetWidth * 0.8;

                scrollLeftBtn.addEventListener('click', () => {
                    carousel.scrollBy({ left: -scrollAmount(), behavior: 'smooth' });
                });
                scrollRightBtn.addEventListener('click', () => {
                    carousel.scrollBy({ left: scrollAmount(), behavior: 'smooth' });
                });
            }

            // FAQs Accordion
            const faqList = document.querySelector('.faq-list');
            if (faqList) {
                const faqItems = faqList.querySelectorAll('.faq-item');
                faqList.addEventListener('click', (e) => {
                    const clickedQuestion = e.target.closest('.faq-question');
                    if (!clickedQuestion) return;
                    
                    const clickedItem = clickedQuestion.parentElement;
                    const wasActive = clickedItem.classList.contains('active');
                    
                    // Close all items
                    faqItems.forEach(item => item.classList.remove('active'));
                    
                    // Open the clicked one if it wasn't already open
                    if (!wasActive) {
                        clickedItem.classList.add('active');
                    }
                });
            }

            // Scroll to Top Button
            const scrollTopBtn = document.getElementById('scroll-to-top');
            if (scrollTopBtn) {
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 300) {
                        scrollTopBtn.classList.add('visible');
                    } else {
                        scrollTopBtn.classList.remove('visible');
                    }
                });

                scrollTopBtn.addEventListener('click', () => {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }

        });
    </script>

 @include('include.footer')