
@include('include.header')


  <main>
    <!-- Hero Banner -->
    <section id="home-banner"
      class="relative flex flex-col justify-between items-center overflow-hidden px-15 pt-[clamp(200px,13.889vw,13.889vw)] pb-15 w-full min-h-screen bg-base max-sm:pt-[130px] max-md:px-5 max-md:pb-5">
      <video class="absolute inset-0 w-full h-full object-cover opacity-20" muted autoplay loop playsinline>
        <source src="https://videos.pexels.com/video-files/5903939/5903939-hd_1920_1080_25fps.mp4" type="video/mp4" />
      </video>
      <div class="absolute inset-x-0 top-0 h-full w-full pointer-events-none z-10"
        style="background: linear-gradient(180deg,rgba(0,0,0,0) 0%,#121713 85%)"></div>
      <div class="flex flex-col items-center z-20">
        <div class="relative text-center text-base leading-5 text-white/80 max-sm:text-sm max-sm:mb-3"
          data-key="hero_subtitle">A New Way Of Living</div>
        <div
          class="w-full font-light relative mt-0 text-[clamp(40px,7.639vw,130px)] leading-[clamp(50px,9.722vw,165px)] text-center text-white">
          <h1 data-key="hero_title">Vibrant Communities</h1>
        </div>
      </div>
      <div class="w-full flex justify-between items-end z-20 max-lg:flex-col max-lg:items-center max-lg:gap-8">
        <div class="w-full max-w-[24.25rem] flex flex-col text-white max-md-lg:self-start reveal">
          <h3 class="text-3xl leading-10 max-sm:text-xl max-sm:leading-6" data-key="hero_description">Building
            integrated communities that enrich the lives of our citizens.</h3>
          <a class="group flex text-base leading-4 ps-[3.625rem] shrink-0 text-white uppercase relative transition-all duration-500 mt-7.5 max-md:mt-5 max-lg:ps-0 lg:hover:ps-0 lg:hover:pe-[3.625rem]"
            href="#">
            <div
              class="bg-primary-shadow rounded-full p-4 flex items-center justify-center w-14 h-14 shrink-0 absolute start-0 transition-all duration-500 max-md:p-3 max-md:w-10 max-md:h-10 max-lg:!hidden lg:group-hover:opacity-0 lg:group-hover:scale-0">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-white rtl-flip">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </div>
            <div
              class="flex items-center justify-center min-w-[135px] px-11 py-5 bg-primary rounded-[18.75rem] uppercase max-md:px-5 max-md:py-3 !text-white"
              data-key="hero_learn_more">Learn More</div>
            <div
              class="bg-primary-shadow rounded-full p-4 flex items-center justify-center w-14 h-14 shrink-0 absolute end-0 opacity-0 scale-0 transition-all duration-500 lg:group-hover:opacity-100 lg:group-hover:scale-100">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-white rtl-flip">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </div>
          </a>
        </div>
        <div
          class="w-full max-w-[23.125rem] aspect-[1.48] max-md-lg:max-w-44 max-xl:max-w-[300px] max-xl:max-h-[202px] reveal">
          <div
            class="group cursor-pointer relative size-full flex flex-col items-start justify-between p-5 text-white bg-base max-md-lg:p-2.5">
            <video
              class="absolute inset-0 w-[calc(100%-0.8125rem)] h-[calc(100%-0.0625rem)] m-auto object-cover pointer-events-none opacity-50"
              muted autoplay loop playsinline>
              <source src="https://videos.pexels.com/video-files/3129579/3129579-hd_1920_1080_30fps.mp4"
                type="video/mp4" />
            </video>
            <p class="relative uppercase text-sm leading-5 z-20" data-key="hero_watch_story">watch our story</p>
            <div
              class="rounded-full w-[3.75rem] h-[3.75rem] bg-white absolute flex justify-center bottom-5 start-5 items-center z-20 transition-all duration-500 max-md-lg:w-[27px] max-md-lg:h-[27px] lg:group-hover:bg-primary">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-4 h-4 transition-colors duration-500 max-md-lg:w-2 max-md-lg:h-2 lg:group-hover:text-white">
                <polygon points="5 3 19 12 5 21 5 3"></polygon>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Us -->
    <section id="about-us"
      class="overflow-hidden bg-secondary-seashell flex flex-col pt-24 pb-28 pe-15 relative max-md:px-5 max-md:py-12 max-lg:py-15 max-sm:px-0">
      <div
        class="flex gap-5 ms-15 items-center self-start text-xl leading-6 max-md:ms-0 max-md:mb-7.5 max-lg:ms-10 max-sm:mb-4 max-sm:px-5 reveal">
        <h2 class="uppercase max-sm:text-sm text-body-light" data-key="about_section_title">ABOUT MEERAS</h2>
      </div>
      <div
        class="z-10 w-full relative text-white mix-blend-exclusion font-light text-[clamp(40px,6.667vw,150px)] leading-[clamp(62px,7.292vw,200px)] max-md:text-4xl max-md:leading-11 max-lg:top-15 md:absolute md:top-[7rem] md:left-[30.5%] md:max-w-[calc(100%-30.5%-5%)] max-sm:px-5 reveal">
        <p data-key="about_title">More Than a Home, A Community</p>
      </div>
      <div class="flex gap-5 justify-between mt-[4.625rem] sm:pb-20 max-md:mt-0 max-md:flex-wrap max-lg:mt-36">
        <div id="parallax-container"
          class="overflow-hidden md-lg:h-[45rem] max-w-[39.625rem] w-full mt-[10.75rem] max-lg:max-w-[26rem] max-md:max-w-full max-md-lg:mt-8 reveal">
          <div id="parallax-image" class="h-full w-full bg-cover bg-center transition-transform duration-300 ease-out"
            style="background-image: url('images/house1.png');">
          </div>
        </div>
        <div
          class="flex flex-col max-w-[35.1875rem] md:-me-16 max-lg:max-w-[32rem] max-md:max-w-full md:mb-12 max-sm:px-5 reveal">
          <figure class="lg:h-[37.8125rem] max-sm:-mt-40 overflow-hidden max-md-lg:hidden">
            <img alt="Happy family in a modern home" loading="lazy" class="object-cover object-center w-full h-full"
              src="images/house2.png">
          </figure>
          <p class="mt-[3rem] text-base font-ibmPlexAr text-body-light font-light leading-5 max-md:mt-5 sm:pe-10"
            data-key="about_description">
            Meeras is a national community developer, powered by Saudi Arabia's Public Investment Fund. We are dedicated
            to delivering high-quality living standards, creating vibrant communities where people can connect, thrive,
            and enjoy a new way of life.
          </p>
          <a class="group flex text-base leading-4 ps-[3.625rem] shrink-0 text-white uppercase relative transition-all duration-500 mt-7.5 max-md:mt-5 max-lg:ps-0 lg:hover:ps-0 lg:hover:pe-[3.625rem]"
            href="#">
            <div
              class="bg-primary rounded-full p-4 flex items-center justify-center w-14 h-14 shrink-0 absolute start-0 transition-all duration-500 max-md:p-3 max-md:w-10 max-md:h-10 max-lg:!hidden lg:group-hover:opacity-0 lg:group-hover:scale-0">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-white rtl-flip">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </div>
            <div
              class="flex items-center justify-center min-w-[135px] px-11 py-5 bg-primary rounded-[18.75rem] uppercase max-md:px-5 max-md:py-3 !text-white"
              data-key="about_learn_more">Learn More</div>
            <div
              class="bg-primary rounded-full p-4 flex items-center justify-center w-14 h-14 shrink-0 absolute end-0 opacity-0 scale-0 transition-all duration-500 lg:group-hover:opacity-100 lg:group-hover:scale-100">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-white rtl-flip">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- Communities Showcase -->
    <section id="communities-showcase" class="relative bg-secondary-seashell">
      <div class="container mx-auto px-15 py-24 text-center text-body">
        <h2 class="text-6.5xl font-light leading-tight mb-4 reveal" data-key="communities_title">Our Premier Communities
        </h2>
        <p class="text-xl text-body-light max-w-3xl mx-auto reveal" data-key="communities_description">Discover the
          Meeras difference, where thoughtful design and world-class amenities create unparalleled living experiences.
        </p>
      </div>
      <div id="showcase-sticky-container" class="relative">
        <div class="showcase-panel"
          style="background-image: url('images/DSC_05383_43db5927fcdced.jpeg')">
        </div>
        <div class="showcase-panel"
          style="background-image: url('images/house3.png')">
        </div>
        <div class="showcase-panel"
          style="background-image: url('images/house4.png')">
        </div>
      </div>
    </section>

    <!-- Lifestyle Section -->
    <section id="lifestyle-section" class="relative bg-secondary-seashell text-body overflow-hidden">
      <div class="lifestyle-sticky-container">
        <div class="container mx-auto px-15 py-24 text-center z-20 relative">
          <h2 class="text-6.5xl font-light leading-tight mb-4 text-white mix-blend-difference reveal"
            data-key="lifestyle_title">A World of Amenities</h2>
          <p class="text-xl text-body-light max-w-3xl mx-auto reveal" data-key="lifestyle_description">Live, work, and
            play in a community designed for your well-being.</p>
        </div>
        <div class="lifestyle-gallery-grid">
          <div class="gallery-item"><img src="images/4_1c0e4360c12541.jpeg" alt="Community Pool"></div>
          <div class="gallery-item"><img src="images/EXT_06_Mosque_Aerial_B3_a7367f516e6cdc.jpeg" alt="Community Gym">
          </div>
        </div>
        <div id="cutter-top" class="diagonal-overlay"></div>
        <div id="cutter-bottom" class="diagonal-overlay"></div>
      </div>
    </section>


    <!-- Interest Section -->
    <section id="interest-section"
      class="flex flex-col px-15 py-28 overflow-hidden bg-secondary-seashell text-body max-sm:py-12 max-md:px-5 max-lg:px-10">
      <div class="flex gap-5 justify-start w-full max-md:flex-col reveal">
        <div
          class="w-[42%] uppercase flex gap-5 justify-start items-center self-start text-xl leading-6 max-sm:text-sm max-sm:gap-3 max-sm:w-full">
          <h2 class="text-body-light" data-key="interest_section_title">Area of Interest</h2>
        </div>
        <div
          class="w-[calc(100%-34%)] text-6.5xl font-light leading-[4.125rem] max-md:text-4xl max-md:leading-11 max-lg:[&_br]:hidden max-sm:w-full">
          <h3 data-key="interest_title">What are you <br />interested in?</h3>
        </div>
      </div>
      <div
        class="mt-[5.125rem] flex justify-between gap-5 max-md:flex-col max-md:mt-10 max-lg:flex-col max-sm:mt-7 reveal">
        <div
          class="flex flex-col w-full max-w-[21.25rem] text-base max-md:mt-10 max-sm:mt-7 max-md:max-w-full max-lg:max-w-full max-lg:order-3 lg:self-end">
          <h4 id="interest-title" class="text-xl font-medium mb-4" data-key-dynamic="interest_card_title">Buy a home
          </h4>
          <p id="interest-description" class="text-body-light mb-6 min-h-[100px]"
            data-key-dynamic="interest_card_description">Find your dream home in one of our vibrant, fully-integrated
            communities. Discover a new way of living with Meeras.</p>
          <a id="interest-button"
            class="group flex text-base leading-4 ps-[3.625rem] shrink-0 text-white uppercase relative transition-all duration-500 mt-7.5 max-md:mt-5 max-lg:ps-0 lg:hover:ps-0 lg:hover:pe-[3.625rem]"
            href="#">
            <div
              class="bg-primary rounded-full p-4 flex items-center justify-center w-14 h-14 shrink-0 absolute start-0 transition-all duration-500 max-md:p-3 max-md:w-10 max-md:h-10 max-lg:!hidden lg:group-hover:opacity-0 lg:group-hover:scale-0">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-white rtl-flip">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </div>
            <div
              class="flex items-center justify-center min-w-[135px] px-11 py-5 bg-primary rounded-[18.75rem] uppercase max-md:px-5 max-md:py-3 !text-white"
              data-key-dynamic="interest_card_button">EXPLORE</div>
            <div
              class="bg-primary rounded-full p-4 flex items-center justify-center w-14 h-14 shrink-0 absolute end-0 opacity-0 scale-0 transition-all duration-500 lg:group-hover:opacity-100 lg:group-hover:scale-100">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-white rtl-flip">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </div>
          </a>
        </div>
        <div
          class="w-[calc(100%-55.125rem)] min-w-[25rem] max-md:w-full max-md:max-w-[15.5rem] max-lg:mx-auto max-lg:order-2 max-sm:min-w-[18rem] max-sm:w-full max-sm:max-w-full">
          <figure class="flex xl:ms-5 w-full max-md:ms-0 relative h-96">
            <img id="interest-image" alt="Interest Icon" loading="lazy"
              class="absolute top-0 left-0 shrink-0 w-full h-full object-contain object-center transition-all duration-500 opacity-100"
              src="https://placehold.co/400x400/1A221C/00A750/svg?text=Home">
          </figure>
        </div>
        <div
          class="flex flex-row flex-wrap gap-5 justify-between w-full h-full min-w-[22.1875rem] max-w-[22.1875rem] max-md:-mx-5 max-md:mb-8 max-md:px-5 max-md:max-w-none max-md:w-screen max-lg:max-w-full max-lg:overflow-auto max-lg:order-1 max-lg:flex-nowrap max-lg:mb-15 max-md:pb-5 max-sm:gap-3">
          <!-- Interest Cards -->
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer
    class="relative flex flex-col pt-24 px-15 bg-secondary-seashell text-body max-md:px-5 max-md:py-12 max-lg:px-10">
    <div class="flex flex-col md:flex-row justify-between w-full border-t border-b border-grey-border">
      <div class="flex flex-col justify-between pt-10 pb-5 max-md:items-center">
        <a href="#" class="text-3xl font-bold tracking-wider text-body">Meeras</a>
        <div class="flex gap-4 mt-8 md:mt-16">
          <a href="#" aria-label="Twitter" class="text-body-light hover:text-primary transition-colors"><svg
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path
                d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.87-.4.67-.63 1.45-.63 2.28 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.39.106-.803.163-1.227.163-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z">
              </path>
            </svg></a>
          <a href="#" aria-label="LinkedIn" class="text-body-light hover:text-primary transition-colors"><svg
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path
                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z">
              </path>
            </svg></a>
          <a href="#" aria-label="YouTube" class="text-body-light hover:text-primary transition-colors"><svg
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path
                d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
              </path>
            </svg></a>
        </div>
      </div>
      <div
        class="flex flex-wrap justify-between md:justify-end gap-x-8 gap-y-4 md:gap-16 w-full max-w-4xl max-md:mt-8 text-body">
        
 @include('include.footer')