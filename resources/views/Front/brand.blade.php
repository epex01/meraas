@include('include.header')


  
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; }
    h1, h2, h3 { font-family: 'Lora', serif; }
    .animate-on-scroll { transition: all 0.8s ease; opacity: 0; transform: translateY(30px); }
    .visible { opacity: 1 !important; transform: translateY(0) !important; }
  </style>
</head>
<body class="bg-white text-zinc-800 transition-colors duration-500 ease-out">

  <!-- Side Navigation -->
  <nav class="fixed top-1/2 -translate-y-1/2 right-4 md:right-8 z-50">
    <ul class="flex flex-col space-y-4">
      <li class="group relative transition-transform duration-300 hover:translate-x-1">
        <a href="#beginning" class="sidenav-link flex items-center justify-center w-6 h-6">
          <span class="block w-2.5 h-2.5 rounded-full bg-zinc-400 group-hover:bg-[#004F35] transition-all duration-300 group-hover:scale-150"></span>
        </a>
        <span class="absolute right-full mr-3 px-3 py-1 rounded-md text-sm text-white bg-[#004F35] opacity-0 scale-90 group-hover:opacity-100 group-hover:scale-100 transition-all duration-300">The Beginning</span>
      </li>
      <li class="group relative transition-transform duration-300 hover:translate-x-1">
        <a href="#purpose" class="flex items-center justify-center w-6 h-6">
          <span class="block w-2.5 h-2.5 rounded-full bg-zinc-400 group-hover:bg-[#004F35] transition-all duration-300 group-hover:scale-150"></span>
        </a>
        <span class="absolute right-full mr-3 px-3 py-1 rounded-md text-sm text-white bg-[#004F35] opacity-0 scale-90 group-hover:opacity-100 group-hover:scale-100 transition-all duration-300">Our Purpose</span>
      </li>
      <li class="group relative transition-transform duration-300 hover:translate-x-1">
        <a href="#logo" class="flex items-center justify-center w-6 h-6">
          <span class="block w-2.5 h-2.5 rounded-full bg-zinc-400 group-hover:bg-[#004F35] transition-all duration-300 group-hover:scale-150"></span>
        </a>
        <span class="absolute right-full mr-3 px-3 py-1 rounded-md text-sm text-white bg-[#004F35] opacity-0 scale-90 group-hover:opacity-100 group-hover:scale-100 transition-all duration-300">Our Logo</span>
      </li>
      <li class="group relative transition-transform duration-300 hover:translate-x-1">
        <a href="#colors" class="flex items-center justify-center w-6 h-6">
          <span class="block w-2.5 h-2.5 rounded-full bg-zinc-400 group-hover:bg-[#004F35] transition-all duration-300 group-hover:scale-150"></span>
        </a>
        <span class="absolute right-full mr-3 px-3 py-1 rounded-md text-sm text-white bg-[#004F35] opacity-0 scale-90 group-hover:opacity-100 group-hover:scale-100 transition-all duration-300">Our Identity</span>
      </li>
      <li class="group relative transition-transform duration-300 hover:translate-x-1">
        <a href="#living" class="flex items-center justify-center w-6 h-6">
          <span class="block w-2.5 h-2.5 rounded-full bg-zinc-400 group-hover:bg-[#004F35] transition-all duration-300 group-hover:scale-150"></span>
        </a>
        <span class="absolute right-full mr-3 px-3 py-1 rounded-md text-sm text-white bg-[#004F35] opacity-0 scale-90 group-hover:opacity-100 group-hover:scale-100 transition-all duration-300">A New Way of Living</span>
      </li>
    </ul>
  </nav>

  <main>

    <!-- Hero (keep dark) -->
    <section id="beginning" class="relative flex flex-col items-center justify-center h-screen text-white overflow-hidden transition-all duration-700">
      <img src="images/Roshn000_Qaisaran_Studio35698_6647104705df3d.jpeg" class="absolute inset-0 w-full h-full object-cover scale-105 brightness-75 animate-zoomSlow" />
      <div class="absolute inset-0 bg-gradient-to-b from-black/70 to-[#004F35]/80"></div>
      <div class="relative text-center px-6 max-w-3xl z-10 animate-fadeIn">
        <h1 class="text-5xl md:text-7xl font-serif font-semibold mb-6">The Beginning</h1>
        <p class="text-lg md:text-xl leading-relaxed text-gray-100">
          Meraastrust began as a vision — to create spaces built on trust, community, and progress. From a single idea to a movement reshaping modern living, our journey continues with purpose.
        </p>
      </div>
      <div class="absolute bottom-10 text-center animate-bounce text-sm tracking-widest">
        <svg class="w-6 h-6 mx-auto mt-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7-7-7m7 7V3" />
        </svg>
      </div>
    </section>

    <!-- Purpose -->
    <section id="purpose" class="bg-roshn-green text-white animate-on-scroll container mx-auto px-6 py-24 md:py-32 flex flex-col lg:flex-row items-center gap-16 transition-all duration-700">
      <div class="lg:w-1/2 space-y-6 animate-slideInLeft">
        <h2 class="text-4xl md:text-6xl font-serif mb-8 text-yellow-300">Our Purpose is Clear</h2>
        <p class="text-lg leading-relaxed text-white/90">
          At Meraastrust, our purpose goes beyond construction — we build environments that nurture belonging and inspire growth. Every project we create begins with understanding people and ends with enriching lives.
        </p>
        <p class="text-lg leading-relaxed text-white/90">
          Driven by integrity, innovation, and a deep respect for community, we are redefining what it means to call a place home.
        </p>
      </div>
      <div class="lg:w-1/2 animate-slideInRight">
        <img src="images/Roshn000_Qaisaran_Studio35698_6647104705df3d.jpeg" alt="Modern Architecture" class="rounded-2xl shadow-2xl hover:scale-105 transition-transform duration-700" />
      </div>
    </section>

    <!-- Logo -->
    <section id="logo" class="bg-roshn-green animate-on-scroll container mx-auto px-6 py-24 md:py-32 flex flex-col lg:flex-row items-center gap-16 transition-all duration-700">
      <div class="lg:w-2/5 animate-slideInLeft">
        <img src="images/logo_w_bg.png" alt="Logo concept" class="rounded-2xl shadow-lg hover:scale-105 transition duration-700 bg-white" />
      </div>
      <div class="lg:w-3/5 text-zinc-100 animate-slideInRight">
        <h2 class="text-4xl md:text-6xl font-serif text-[#00A750] mb-8">The Story of Our Logo</h2>
        <p class="text-lg leading-relaxed mb-6">
          Our logo reflects our values — tradition meeting modernity. The lines represent transparency and connection; the green tones, our commitment to growth and harmony.
        </p>
        <p class="text-lg leading-relaxed">
          Together, these elements form the soul of Meraastrust — a mark of integrity and inspiration.
        </p>
      </div>
    </section>

    <!-- Colors -->
    <section id="colors" class="bg-white animate-on-scroll py-24 md:py-32 transition-all duration-700">
      <div class="container mx-auto px-6 text-center max-w-4xl mb-16 animate-fadeIn">
        <h2 class="text-4xl md:text-6xl font-serif text-[#004F35] mb-8">The Colours of Our Identity</h2>
        <p class="text-lg text-zinc-700">Every hue speaks of who we are — inspired by nature, driven by innovation, united by vision.</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 container mx-auto px-6 animate-fadeUp">
        <div class="rounded-xl overflow-hidden shadow-lg hover:scale-105 transition bg-white">
          <div class="h-28 bg-green-900"></div>
          <div class="bg-white p-6">
            <h3 class="font-semibold text-lg text-[#004F35] mb-2">Green</h3>
            <p class="text-sm text-zinc-600">Symbolizes renewal and sustainable growth in everything we create.</p>
          </div>
        </div>
        <div class="rounded-xl overflow-hidden shadow-lg hover:scale-105 transition bg-white">
          <div class="h-28 bg-yellow-500"></div>
          <div class="bg-white p-6">
            <h3 class="font-semibold text-lg text-[#004F35] mb-2">Yellow</h3>
            <p class="text-sm text-zinc-600">Represents optimism, warmth, and the welcoming light of our communities.</p>
          </div>
        </div>
        <div class="rounded-xl overflow-hidden shadow-lg hover:scale-105 transition bg-white">
          <div class="h-28 bg-blue-800"></div>
          <div class="bg-white p-6">
            <h3 class="font-semibold text-lg text-[#004F35] mb-2">Blue</h3>
            <p class="text-sm text-zinc-600">Symbolizes stability, vision, and the boundless potential ahead.</p>
          </div>
        </div>
        <div class="rounded-xl overflow-hidden shadow-lg hover:scale-105 transition bg-white">
          <div class="h-28 bg-neutral-900"></div>
          <div class="bg-white p-6">
            <h3 class="font-semibold text-lg text-[#004F35] mb-2">Charcoal</h3>
            <p class="text-sm text-zinc-600">Reflects strength, sophistication, and creative depth.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Living -->
    <section id="living" class="bg-#004F35 animate-on-scroll container mx-auto px-6 py-24 md:py-32 text-center transition-all duration-700">
      <h2 class="text-4xl md:text-6xl font-serif text-[#00A750] mb-8 animate-fadeIn">A New Way of Living</h2>
      <p class="text-lg leading-relaxed text-zinc-100 max-w-3xl mx-auto mb-10 animate-fadeUp">
        Meraastrust is redefining the fabric of life — where architecture breathes, neighborhoods connect, and every space inspires harmony.
      </p>
      <img src="images/sedra_lifestyle1_new_db444d915d6862.jpeg" alt="Community living" class="rounded-2xl shadow-2xl mx-auto mb-10 hover:scale-105 transition duration-700" />
      <p class="text-lg leading-relaxed text-zinc-100 max-w-3xl mx-auto animate-fadeUp">
        Our communities bring together sustainability, culture, and design — offering more than homes, a lifestyle that nurtures generations.
      </p>
    </section>

  </main>

  <!-- Smooth animations -->
  <style>
    @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes fadeUp { from { opacity: 0; transform: translateY(40px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes slideInLeft { from { opacity: 0; transform: translateX(-40px); } to { opacity: 1; transform: translateX(0); } }
    @keyframes slideInRight { from { opacity: 0; transform: translateX(40px); } to { opacity: 1; transform: translateX(0); } }
    @keyframes zoomSlow { from { transform: scale(1.05); } to { transform: scale(1.1); } }
    .animate-fadeIn { animation: fadeIn 1s ease-out forwards; }
    .animate-fadeUp { animation: fadeUp 1s ease-out forwards; }
    .animate-slideInLeft { animation: slideInLeft 1s ease-out forwards; }
    .animate-slideInRight { animation: slideInRight 1s ease-out forwards; }
    .animate-zoomSlow { animation: zoomSlow 20s ease-in-out infinite alternate; }
  </style>


</body>

  <script>
    // Scroll animation
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) entry.target.classList.add('visible');
      });
    }, { threshold: 0.2 });
    document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));
  </script>

 @include('include.footer')
