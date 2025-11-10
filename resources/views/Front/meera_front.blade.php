@include('include.header')

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              'Meraastrust-green': '#005A4A',
              'Meraastrust-green-light': '#007A63',
              'Meraastrust-text': '#212529',
              'Meraastrust-gray': '#F8F9FA',
            },
            fontFamily: {
              sans: ['"Helvetica Neue"', 'Arial', 'sans-serif'],
            }
          }
        }
      }
    </script>
    <style>
        .nav-link.active {
            color: white;
        }
        .nav-link.active .nav-indicator {
            transform: scaleX(1);
        }
        .nav-indicator {
            transform: scaleX(0);
            transition: transform 0.3s ease-in-out;
        }
    </style>

</head>
<body class="bg-white text-Meraastrust-text font-sans">
    <main>
        <!-- Hero Section -->
        <section id="overview" data-nav-id="overview" class="relative h-screen bg-cover bg-center text-white" style="background-image: url('images/DSC_01311_Pano_copyl_7ef491759bf6fd.jpeg')">
          <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center">
            <div class="text-center">
              <p class="text-sm tracking-wider">Home / By Meraastrust Group / Meraastrust Front</p>
              <h1 class="text-6xl md:text-8xl font-thin my-6 tracking-wider">Meraastrust Front</h1>
              <div class="mx-auto mt-8 w-32 h-32 bg-gray-600 bg-opacity-70 rounded-full flex flex-col justify-center items-center p-4">
                <svg class="w-8 h-8 mb-1" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M41 4H7C5.34315 4 4 5.34315 4 7V41C4 42.6569 5.34315 44 7 44H41C42.6569 44 44 42.6569 44 41V7C44 5.34315 42.6569 4 41 4Z" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M24 4V24" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 24H44" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M24 44C33.3888 44 41 33.3888 41 24C41 14.6112 33.3888 4 24 4C14.6112 4 7 14.6112 7 24C7 33.3888 14.6112 44 24 44Z" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <span class="text-xs">واجهة روشن</span>
                <span class="text-sm font-semibold">Meraastrust FRONT</span>
              </div>
            </div>
          </div>
        </section>

        <!-- Intro Section -->
        <section data-nav-id="overview" class="bg-white py-20 lg:py-32">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
                <div class="text-Meraastrust-text">
                    <h2 class="text-4xl lg:text-5xl font-thin leading-tight">‘Shop, Work & Play’ Reimagined</h2>
                    <p class="mt-6 text-gray-600 leading-relaxed">Meraastrust Front is one of the most vibrant mixed-use destinations in North Riyadh. It offers an extraordinary urban experience that reimagines how we work, play, dine, shop, and share space. The area features cinemas, numerous upscale cafes and restaurants, major retail brands, and everyday convenience stores.</p>
                    <button class="mt-10 inline-flex items-center bg-Meraastrust-green text-white px-8 py-3 rounded-full text-sm font-semibold hover:bg-Meraastrust-green-light transition-colors duration-300 group">
                        VISIT WEBSITE
                        <span class="ml-3 bg-white bg-opacity-20 rounded-full p-1 group-hover:translate-x-1 transition-transform duration-300">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg>
                        </span>
                    </button>
                </div>
                <div class="space-y-8">
                    <div class="flex items-center space-x-6 pb-8 border-b border-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-Meraastrust-green"><path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9.75-9-5.25m9 5.25-9-5.25" /><path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5l9 5.25m9-5.25-9 5.25m0 0v9.75" /></svg>
                        <h3 class="text-2xl font-light">Retail</h3>
                    </div>
                    <div class="flex items-center space-x-6 pb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-Meraastrust-green"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M8.25 21V3m8.25 18V3M3.75 6H20.25m-16.5 6H20.25m-16.5 6H20.25" /></svg>
                        <h3 class="text-2xl font-light">Offices</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section id="numbers" data-nav-id="numbers" class="bg-Meraastrust-gray py-20 lg:py-28">
            <div class="max-w-5xl mx-auto px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-y-12 md:gap-y-0 md:divide-x md:divide-gray-200">
                    <div class="text-center px-4"><p class="text-6xl lg:text-7xl font-thin text-Meraastrust-green">10M+</p><p class="mt-4 text-lg text-Meraastrust-text">Visitors Annually</p></div>
                    <div class="text-center px-4"><p class="text-6xl lg:text-7xl font-thin text-Meraastrust-green">100+</p><p class="mt-4 text-lg text-Meraastrust-text">Shops & Restaurants</p></div>
                    <div class="text-center px-4"><p class="text-6xl lg:text-7xl font-thin text-Meraastrust-green">30+</p><p class="mt-4 text-lg text-Meraastrust-text">Amenities & Services</p></div>
                </div>
            </div>
        </section>

        <!-- Details Section -->
        <section id="details" data-nav-id="details" class="bg-white py-20 lg:py-32">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <h2 class="text-4xl lg:text-5xl font-thin text-Meraastrust-text text-center mb-16">The Ultimate Destination for Modern Lifestyle</h2>
                <div>
                    <!-- Detail Item 1 -->
                    <div class="relative py-12 border-b border-gray-200">
                        <div class="grid md:grid-cols-12 gap-8 items-center">
                            <div class="md:col-span-2"><span class="text-8xl font-thin text-gray-200">01</span></div>
                            <div class="md:col-span-7">
                                <h3 class="text-4xl font-light text-Meraastrust-green">Strategic location</h3>
                                <p class="mt-4 text-gray-600 leading-relaxed">Meraastrust Front is located in Riyadh's most vibrant district, offering effortless access to everything the city has to offer. With its prime central location and close proximity to numerous popular attractions, Meraastrust Front is the ideal hub for your city break experience.</p>
                            </div>
                            <div class="md:col-span-3 flex justify-start md:justify-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20 text-Meraastrust-green"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21.75c-3.75-4.5-8.25-9.75-8.25-13.5A8.25 8.25 0 0 1 12 0a8.25 8.25 0 0 1 8.25 8.25c0 3.75-4.5 9-8.25 13.5Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M12 11.25a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 0 0 0 7.5Z" /></svg></div>
                        </div>
                    </div>
                    <!-- Detail Item 2 -->
                    <div class="relative py-12 border-b border-gray-200">
                        <div class="grid md:grid-cols-12 gap-8 items-center">
                            <div class="md:col-span-2"><span class="text-8xl font-thin text-gray-200">02</span></div>
                            <div class="md:col-span-7">
                                <h3 class="text-4xl font-light text-Meraastrust-green">Extraordinary Urban Experience</h3>
                                <p class="mt-4 text-gray-600 leading-relaxed">An extraordinary urban experience that reimagines how we work, play, dine, shop, and share space in the north of Riyadh. Integrating human-centered design and social spaces, Meraastrust Front is a living hub of connection and an environment that fosters innovation.</p>
                            </div>
                            <div class="md:col-span-3 flex justify-start md:justify-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20 text-Meraastrust-green"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.479.038.673.684.314.99l-4.118 3.991a.563.563 0 0 0-.162.632l1.18 5.484a.563.563 0 0 1-.844.62l-4.902-2.88a.562.562 0 0 0-.57 0l-4.902 2.88a.562.562 0 0 1-.844-.62l1.18-5.484a.563.563 0 0 0-.162-.632l-4.118-3.991a.563.563 0 0 1 .314-.99l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" /></svg></div>
                        </div>
                    </div>
                    <!-- Detail Item 3 -->
                    <div class="relative py-12">
                        <div class="grid md:grid-cols-12 gap-8 items-center">
                            <div class="md:col-span-2"><span class="text-8xl font-thin text-gray-200">03</span></div>
                            <div class="md:col-span-7">
                                <h3 class="text-4xl font-light text-Meraastrust-green">Sustainability & Innovation</h3>
                                <p class="mt-4 text-gray-600 leading-relaxed">As a dynamic addition to Meraastrust Group's growing portfolio, Meraastrust Front embodies a commitment to sustainability, innovation, and world-class urban experiences. By combining sustainability and smart infrastructure, Meraastrust Front delivers exceptional services with operational efficiency, creating a vibrant, future-ready environment that meets visitors' expectations.</p>
                            </div>
                            <div class="md:col-span-3 flex justify-start md:justify-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20 text-Meraastrust-green"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21.75c-4.97 0-9-4.03-9-9s4.03-9 9-9 9 4.03 9 9-4.03 9-9 9Zm0-15.75c-3.72 0-6.75 3.03-6.75 6.75s3.03 6.75 6.75 6.75 6.75-3.03 6.75-6.75S15.72 6 12 6Zm0 11.25a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Zm0-6.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" clip-rule="evenodd" /><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v3m0 12v3m5.657-14.657 2.121-2.121m-12.728 0 2.121 2.121m12.728 12.728-2.121-2.121M6.343 6.343l-2.121-2.121" /></svg></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Shopping Area Section -->
        <section id="shopping" data-nav-id="shopping" class="bg-Meraastrust-gray py-20 lg:py-32">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="flex items-center space-x-3 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-Meraastrust-green"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.658-.463 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007Z" /></svg>
                    <span class="text-sm font-semibold tracking-widest text-Meraastrust-green">SHOPPING AREA</span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-thin text-Meraastrust-text leading-tight mb-12">Reimagining How We Shop, Play, & Dine</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="overflow-hidden rounded-lg shadow-lg"><img src="images/DSC_0798_Edit_f1f86a483be2a0.jpeg" alt="Shopping at Meraastrust Front" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500" /></div>
                    <div class="overflow-hidden rounded-lg shadow-lg"><img src="images/DSC_05052_1_d15521e558ba4b.jpeg" alt="Dining at Meraastrust Front" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500" /></div>
                    <div class="overflow-hidden rounded-lg shadow-lg"><img src="images/DSC_05383_43db5927fcdced.jpeg" alt="Entertainment at Meraastrust Front" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500" /></div>
                </div>
            </div>
        </section>

        <!-- Business Area Section -->
        <section id="business" data-nav-id="business" class="bg-white py-20 lg:py-32 overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="flex items-center space-x-3 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-Meraastrust-green"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.25v-2.25c0-1.242-.664-2.34-1.66-2.857V7.5a1.5 1.5 0 0 0-1.5-1.5H6.75a1.5 1.5 0 0 0-1.5 1.5v1.893c-.996.517-1.66 1.615-1.66 2.857v2.25m15 0a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5m15 0v-2.25" /></svg>
                    <span class="text-sm font-semibold tracking-widest text-Meraastrust-green">BUSINESS AREA</span>
                </div>
                <div class="grid lg:grid-cols-2 gap-8 items-center">
                    <div><h2 class="text-4xl lg:text-6xl font-thin text-Meraastrust-text leading-tight">A Dynamic Hub for <span class="text-amber-500">Innovation</span> and Growth</h2></div>
                    <div class="relative h-64 lg:h-96 rounded-lg overflow-hidden shadow-lg"><img src="images/DSC_03713s_d7ce8adb12e293.jpeg" alt="Business buildings at Meraastrust Front" class="absolute inset-0 w-full h-full object-cover" /></div>
                </div>
                <div class="grid lg:grid-cols-2 gap-8 items-center mt-8">
                    <div class="relative h-64 lg:h-96 rounded-lg overflow-hidden shadow-lg"><img src="images/DSC_01311_Pano_copyl_7ef491759bf6fd.jpeg" alt="Business people meeting at Meraastrust Front" class="absolute inset-0 w-full h-full object-cover" /></div>
                    <div><p class="text-gray-600 leading-relaxed lg:pl-12">Meraastrust Front’s Business Area is designed to empower businesses to embrace change, innovate, and thrive in an ever-evolving landscape. By fostering collaboration and forward-thinking, we provide a dynamic environment where businesses can stay ahead of the curve and shape the future with confidence.</p></div>
                </div>
            </div>
        </section>

        <!-- Comfort and Convenience Section -->
        <section id="comfort" data-nav-id="comfort" class="bg-Meraastrust-gray py-20 lg:py-32">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-4xl lg:text-6xl font-thin text-Meraastrust-text leading-tight mb-6">Comfort and Convenience</h2>
                    <p class="text-gray-600 leading-relaxed">Meraastrust Front is committed to providing an exceptional experience for all visitors and tenants, offering a wide range of services and state-of-the-art facilities. Whether shopping, dining, or simply enjoying the space, visitors benefit from services such as electric car chargers, valet parking, and prayer spaces, which ensure a comfortable and hassle-free visit. Every detail is thoughtfully designed to make time spent at Meraastrust Front a truly pleasant experience.</p>
                </div>
                <div class="relative h-96 rounded-lg overflow-hidden shadow-2xl"><img src="images/Eastren_Prov.jpeg" alt="Comfort and Convenience at Meraastrust Front" class="w-full h-full object-cover" /></div>
            </div>
        </section>

        <!-- Events Section -->
        <section id="events" data-nav-id="events" class="bg-white py-20 lg:py-32">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="flex justify-between items-center mb-12">
                    <h2 class="text-4xl lg:text-5xl font-thin text-Meraastrust-text">Events at a Glance</h2>
                    <div class="flex items-center space-x-4">
                        <span id="event-counter" class="text-gray-500">01 - 03</span>
                        <button id="event-prev" class="p-3 border rounded-full text-gray-600 hover:bg-gray-100 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" /></svg></button>
                        <button id="event-next" class="p-3 border rounded-full text-gray-600 hover:bg-gray-100 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg></button>
                    </div>
                </div>
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div class="relative w-full h-96 lg:h-[500px] rounded-lg overflow-hidden shadow-lg">
                        <img id="event-image" src="images/Jiratika1_1626ca669b8371.jpeg" alt="National Celebrations & Events" class="w-full h-full object-cover" />
                    </div>
                    <div>
                        <h3 id="event-title" class="text-4xl font-light text-Meraastrust-text mb-6">National Celebrations & Events</h3>
                        <p id="event-description" class="text-gray-600 leading-relaxed">Saudi National Day and Founding Day mark annual milestones celebrating the Kingdom’s rich heritage and unwavering unity. Meraastrust Front honors these national occasions with a unique blend of cultural festivities.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SEDRA Community Section -->
        <section id="sedra" data-nav-id="sedra" class="bg-Meraastrust-gray py-20 lg:py-32">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <div class="flex items-center space-x-3 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-Meraastrust-green"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1M3 7.5l3 1.5M3 12l3-1.5m-3 1.5v-1.5m15.75 4.5v-1.5m0-3l3-1.5m-3 1.5v-1.5" /></svg>
                            <span class="text-sm font-semibold tracking-widest text-Meraastrust-green">SEDRA COMMUNITY</span>
                        </div>
                        <h2 class="text-4xl lg:text-6xl font-thin text-Meraastrust-text leading-tight">Great Complement to SEDRA</h2>
                    </div>
                    <div class="relative h-96 rounded-lg overflow-hidden shadow-lg"><img src="images/Jeddah_Office_ffad16375f32ce.jpeg" alt="SEDRA Community" class="w-full h-full object-cover" /></div>
                </div>
                <div class="grid lg:grid-cols-2 gap-16 items-center mt-12">
                    <div>
                        <p class="text-gray-600 leading-relaxed">The mixed-use facilities at Meraastrust Front harmoniously complement the diverse selection of parks and playgrounds in the neighboring SEDRA community, offering a modern and integrated lifestyle.</p>
                        <button class="mt-10 inline-flex items-center bg-Meraastrust-green text-white px-8 py-3 rounded-full text-sm font-semibold hover:bg-Meraastrust-green-light transition-colors duration-300 group">
                            DISCOVER SEDRA
                            <span class="ml-3 bg-white bg-opacity-20 rounded-full p-1 group-hover:translate-x-1 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg>
                            </span>
                        </button>
                    </div>
                    <div></div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section id="gallery" data-nav-id="gallery" class="bg-white py-20 lg:py-32">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <h2 class="text-4xl lg:text-5xl font-thin text-Meraastrust-text mb-12">Gallery</h2>
                <div class="relative">
                    <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden shadow-2xl bg-gray-200">
                        <img id="gallery-image" src="images/01d1660197ae368.png" alt="Gallery image 1" class="w-full h-full object-cover" />
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex items-end p-8">
                        <div class="w-full flex justify-between items-center">
                            <button id="gallery-prev" class="p-3 bg-black/30 text-white rounded-full hover:bg-black/50 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" /></svg></button>
                            <div id="gallery-thumbnails" class="flex space-x-2">
                                <!-- Thumbnails will be injected by JS -->
                            </div>
                            <button id="gallery-next" class="p-3 bg-black/30 text-white rounded-full hover:bg-black/50 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Leasing Section -->
        <section class="bg-Meraastrust-gray py-20 lg:py-32">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 flex flex-col lg:flex-row justify-between items-center gap-8">
                <h2 class="text-5xl lg:text-7xl font-thin text-Meraastrust-green leading-tight text-center lg:text-left">Leasing <br /> Opportunities</h2>
                <button class="inline-flex items-center bg-Meraastrust-green text-white pl-4 pr-8 py-4 rounded-full text-base font-semibold hover:bg-Meraastrust-green-light transition-colors duration-300 group whitespace-nowrap">
                    <span class="mr-4 bg-white bg-opacity-20 rounded-full p-3 group-hover:translate-x-1 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg>
                    </span>
                    REGISTER YOUR INTEREST
                </button>
            </div>
        </section>
    </main>
    
   
    
   
    </div>

 @include('include.footer')