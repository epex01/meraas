@include('include.header')

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
  <body class="bg-white text-gray-800">
    <main>
        <!-- Hero -->
        <div class="relative h-screen bg-cover bg-center text-white flex flex-col justify-center items-center" style="background-image: url('images/1_bf41941c8b650d.jpeg')">
            <div class="absolute inset-0 bg-black opacity-40"></div>
            <div class="relative z-10 text-center px-4">
                <p class="text-lg mb-2">Home / Corporate Social Responsibility</p>
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-thin tracking-tighter">
                    Corporate Social<br />Responsibility
                </h1>
            </div>
        </div>

        <!-- Ambitious Nation -->
        <section class="bg-white py-16 md:py-24 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-24 items-center">
                <h2 class="text-5xl md:text-6xl lg:text-7xl font-light text-gray-800 tracking-tight">
                    For an Ambitious<br />Nation
                </h2>
                <p class="text-base md:text-lg text-gray-600 leading-relaxed">
                    meraastrust contributes to enhancing quality of life through our social responsibility initiatives under the "YHYEEK" program, which aims to create a positive and lasting impact on the community. The program is centered around five key pillars of development: societal development, environmental sustainability, education and innovation, arts and culture, and public health.
                </p>
            </div>
        </section>

        <!-- Video Section -->
        <div class="relative h-[60vh] md:h-[80vh] bg-cover bg-center flex items-center justify-center cursor-pointer group" style="background-image: url('images/DSC_03713s_d7ce8adb12e293.jpeg')">
            <div class="absolute inset-0 bg-black opacity-20 group-hover:opacity-40 transition-opacity"></div>
            <div class="relative z-10 text-center text-white flex flex-col items-center">
                <div class="w-20 h-20 md:w-24 md:h-24 rounded-full border-2 border-white flex items-center justify-center bg-black bg-opacity-30 group-hover:bg-opacity-50 transition-all transform group-hover:scale-110">
                    <svg class="w-10 h-10 md:w-12 md:h-12 text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M8 5v14l11-7z" />
                    </svg>
                </div>
                <span class="mt-4 text-lg font-medium tracking-widest uppercase">Play Video</span>
            </div>
        </div>

        <!-- Yuhyeek Program -->
        <section class="bg-white py-16 md:py-24 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-center">
                <div class="flex flex-col">
                    <svg class="w-48 h-auto mb-6" viewBox="0 0 200 100">
                        <text x="10" y="70" font-family="Arial, sans-serif" font-size="60" fill="#00695C">يحــييك</text>
                        <rect x="30" y="78" width="15" height="4" fill="#00695C" />
                        <rect x="55" y="78" width="15" height="4" fill="#00695C" />
                        <rect x="80" y="78" width="15" height="4" fill="#00695C" />
                        <rect x="105" y="78" width="15" height="4" fill="#00695C" />
                        <path d="M 20 15 H 40 L 30 5 Z" fill="#7E57C2" />
                        <path d="M 45 15 H 65 L 55 5 Z" fill="#FFEE58" />
                        <path d="M 70 15 H 90 L 80 5 Z" fill="#26A69A" />
                        <path d="M 95 15 H 115 L 105 5 Z" fill="#EF5350" />
                    </svg>
                    <p class="text-xs text-gray-500 mb-6">meraastrust Social Responsibility Program</p>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-light text-gray-800 tracking-tight mb-6">
                        YHYEEK: meraastrust Social Responsibility Program
                    </h2>
                    <p class="text-base md:text-lg text-gray-600 leading-relaxed">
                        meraastrust strives to leave a lasting impact through sponsorships, strategic partnerships, foster community engagement, and the application of sustainability principles. This commitment aims to set new benchmarks for social responsibility and sustainable development within the real estate sector in the Kingdom.
                    </p>
                </div>
                <div class="w-full h-80 md:h-96 lg:h-full bg-gray-100">
                    <img src="images/contractors_79aa6fb5be4e5b.jpeg" alt="Volunteers in vests" class="w-full h-full object-cover" />
                </div>
            </div>
        </section>

      
        
        <!-- Report -->
        <section class="bg-[#5a5a4a] py-16 md:py-24 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-center">
                <div class="text-white">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-light tracking-tight mb-6">
                        meraastrust CSR Report 2024
                    </h2>
                    <p class="text-base md:text-lg leading-relaxed mb-8 max-w-lg">
                        In this report, explore meraastrust’s commitment to community development and its various CSR initiatives, designed to foster sustainable outreach, empower individuals and institutions, and cultivate opportunities across the Kingdom of Saudi Arabia.
                    </p>
                    <div class="flex items-center space-x-4">
                        <button class="w-16 h-16 rounded-full bg-white text-gray-800 flex items-center justify-center hover:bg-gray-200 transition-colors" aria-label="Download Report">
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                        </button>
                        <button class="px-8 py-5 bg-white text-gray-800 rounded-full font-semibold hover:bg-gray-200 transition-colors">
                            VIEW REPORT
                        </button>
                    </div>
                </div>
                <div class="w-full h-80 md:h-96 lg:h-[500px] bg-gray-700">
                    <img src="images/2_Q2_A4645_HDR_Pano_copy_2_1_acc43b93261156.jpeg" alt="Glowing tree" class="w-full h-full object-cover" />
                </div>
            </div>
        </section>
    </main>



    <script src="script.js"></script>

 @include('include.footer')
