
@include('include.header')

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      body {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
          Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji",
          "Segoe UI Symbol";
      }
      #scroll-to-top-btn {
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
      }
       #scroll-to-top-btn.visible {
        opacity: 1;
      }
    </style>
  </head>
  <body>
    <div id="app" class="bg-white text-gray-800">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <header class="py-12 md:py-20 text-center md:text-left">
          <div class="text-sm text-gray-500 mb-2">
            <span>Home</span>
            <span class="mx-2">/</span>
            <span>News & Events</span>
            <span class="mx-2">/</span>
            <span class="text-gray-800">Press Releases</span>
          </div>
          <h1 class="text-5xl md:text-7xl font-light text-gray-900 tracking-tighter">
            Press Releases
          </h1>
        </header>
        
        <!-- Featured News -->
        <section id="featured-news" class="mb-16"></section>

        <!-- Filter Bar -->
        <section class="py-8 mb-8 border-t border-b border-gray-200">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="relative">
              <input
                type="text"
                id="search-input"
                placeholder="Search"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 outline-none transition-shadow"
                aria-label="Search articles"
              />
              <svg class="absolute right-4 top-1/2 -translate-y-1/2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
            </div>

            <div class="relative">
              <select
                id="category-select"
                aria-label="Filter by category"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg appearance-none bg-white focus:ring-2 focus:ring-teal-500 focus:border-teal-500 outline-none transition-shadow"
              >
              </select>
              <svg class="absolute right-4 top-1/2 -translate-y-1/2 h-5 w-5 text-gray-400 pointer-events-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </div>

            <div class="relative">
              <select
                id="sort-select"
                aria-label="Sort articles"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg appearance-none bg-white focus:ring-2 focus:ring-teal-500 focus:border-teal-500 outline-none transition-shadow"
              >
              </select>
              <svg class="absolute right-4 top-1/2 -translate-y-1/2 h-5 w-5 text-gray-400 pointer-events-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </div>
          </div>
        </section>

        <!-- Article Grid -->
        <main id="article-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-px md:bg-gray-200"></main>
        <div id="no-results" class="text-center py-16 text-gray-500 hidden">No articles found.</div>

        <!-- Load More -->
        <div id="load-more-container" class="text-center py-16">
          <button id="load-more-btn" class="group inline-flex items-center gap-4 px-8 py-3 border border-gray-400 rounded-full text-gray-700 hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-colors duration-300">
            <span class="border border-gray-400 rounded-full w-8 h-8 flex items-center justify-center group-hover:border-white">
              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </span>
            <span>Load More</span>
          </button>
        </div>
      </div>

      <!-- Floating Buttons -->
      <div class="fixed bottom-6 right-6 space-y-3 z-50">

      </div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const ALL_ARTICLES = [
            { id: 1, date: '26.10.2025', title: 'Meraastrust Group Continues as Strategic Partner of FII, to Highlight Its Real Estate Portfolio', imageUrl: 'images/7_3da8548e7f00d5.jpeg', featured: true, category: 'Partnerships', summary: 'Highlighting its extensive real estate portfolio and fostering new investment opportunities at the upcoming FII9 conference.' },
            { id: 2, date: '22.10.2025', title: 'Meraastrust Group Hosts the Annual GRC Forum to Foster Innovation', imageUrl: 'images/4aldanah_56267cb3b0ab58.jpeg', featured: true, category: 'Events', summary: 'The annual GRC forum brought together industry leaders to discuss the future of governance, risk, and compliance.' },
            { id: 3, date: '15.09.2025', title: 'Community Planting Initiative Sees Huge Success in Local Neighborhoods', imageUrl: 'images/2sp5_c435fae690223c.jpeg', featured: false, category: 'CSR', summary: 'Thousands of trees were planted by volunteers across the city, enhancing green spaces and community spirit.' },
            { id: 4, date: '02.09.2025', title: 'Executive Roundtable on Sustainable Urban Development', imageUrl: 'https://images.unsplash.com/photo-1511632765486-a01980e01a18?q=80&w=600&auto=format&fit=crop', featured: false, category: 'Corporate', summary: 'Leaders convened to discuss strategies for building sustainable and resilient cities for the future.' },
            { id: 5, date: '28.08.2025', title: 'Meraastrust Awarded "Best Places to Work" for Third Consecutive Year', imageUrl: 'https://images.unsplash.com/photo-1579226905180-636b76d96a82?q=80&w=600&auto=format&fit=crop', featured: false, category: 'Awards', summary: 'This prestigious award recognizes our commitment to employee well-being and a positive work culture.' },
            { id: 6, date: '07.12.2024', title: 'Meraastrust Group, the Sustainability...', imageUrl: 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=600&auto=format&fit=crop', featured: false, category: 'Sustainability', summary: 'Our latest report details significant strides in reducing our carbon footprint and promoting sustainable practices.' },
            { id: 7, date: '22.05.2025', title: "Meraastrust Group's Brand Value Tops...", imageUrl: 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=600&auto=format&fit=crop', featured: false, category: 'Corporate', summary: 'An independent analysis has ranked our brand value among the highest in the real estate sector.' },
            { id: 8, date: '16.04.2025', title: 'Meraastrust Group Activities CSR...', imageUrl: 'https://images.unsplash.com/photo-1591115765321-045ff10a47a1?q=80&w=600&auto=format&fit=crop', featured: false, category: 'CSR', summary: 'Our corporate social responsibility wing launched new programs focusing on education and environmental protection.' },
            { id: 9, date: '11.05.2025', title: 'Meraastrust Group is a Hosting Partner for...', imageUrl: 'https://images.unsplash.com/photo-1543269865-cbf427effbad?q=80&w=600&auto=format&fit=crop', featured: false, category: 'Partnerships', summary: 'We are proud to partner with the Global Tech Summit to foster innovation and technological advancement.' },
            { id: 10, date: '01.10.2024', title: 'Meraastrust Secures Nine Billion Saudi Riyal...', imageUrl: 'https://images.unsplash.com/photo-1556155092-490a1ba16284?q=80&w=600&auto=format&fit=crop', featured: false, category: 'Finance', summary: 'A new syndicated facility agreement will fuel our next phase of expansion and development projects.' },
            { id: 11, date: '22.10.2025', title: 'Meraastrust Group Hosts the Annual GRC...', imageUrl: 'https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=600&auto=format&fit=crop', featured: false, category: 'Events', summary: 'The annual GRC forum was a resounding success, setting new benchmarks for industry collaboration.' },
            { id: 12, date: '05.03.2025', title: 'Launch of New Smart City Project', imageUrl: 'https://images.unsplash.com/photo-1533109721025-d1ae7de84620?q=80&w=600&auto=format&fit=crop', featured: false, category: 'Projects', summary: 'This groundbreaking project will integrate cutting-edge technology to create a futuristic urban living experience.' },
        ];

        // State variables
        let visibleCount = 6;
        let searchTerm = '';
        let category = 'All Categories';
        let sortOrder = 'Latest First';

        // DOM Elements
        const articleGrid = document.getElementById('article-grid');
        const featuredNewsSection = document.getElementById('featured-news');
        const searchInput = document.getElementById('search-input');
        const categorySelect = document.getElementById('category-select');
        const sortSelect = document.getElementById('sort-select');
        const loadMoreBtn = document.getElementById('load-more-btn');
        const loadMoreContainer = document.getElementById('load-more-container');
        const noResultsDiv = document.getElementById('no-results');
        const scrollToTopBtn = document.getElementById('scroll-to-top-btn');

        // Render Functions
        const renderArticleCard = (article) => `
          <div class="group flex flex-col bg-white">
            <div class="overflow-hidden">
              <img src="images/1806_J_02_S3_District_Retail_Aerial_R7_8_K_1_ac1cf9f232f7f9.png" alt="${article.title}" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out" loading="lazy" />
            </div>
            <div class="p-6 flex flex-col flex-grow border-t-0 md:border-t md:border-t-transparent border-b border-l border-r border-gray-200">
              <p class="text-gray-500 text-sm mb-2">${article.date}</p>
              <h3 class="text-xl font-light text-gray-900 mb-4 flex-grow">${article.title}</h3>
              <a href="#" class="self-start mt-auto px-6 py-2 border border-gray-400 rounded-full text-gray-700 hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-colors duration-300">Read More</a>
            </div>
          </div>
        `;

        const renderFeaturedNews = () => {
            const featuredArticles = ALL_ARTICLES.filter(a => a.featured).slice(0, 2);
            if(featuredArticles.length < 2) return;
            const [article1, article2] = featuredArticles;

            const featuredIcon = `
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-teal-500">
                    <path d="M12 2L14.09 8.26L20 9.27L15.54 13.97L16.91 20L12 17.27L7.09 20L8.46 13.97L4 9.27L9.91 8.26L12 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4.5 10.5L2 12L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M19.5 10.5L22 12L19.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10.5 4.5L12 2L13.5 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10.5 19.5L12 22L13.5 19.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>`;
            
            featuredNewsSection.innerHTML = `
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">
                    <div class="flex flex-col justify-between p-4">
                        <div>
                            <div class="flex items-center gap-3 mb-8">
                                ${featuredIcon}
                                <h2 class="text-sm font-semibold tracking-widest text-teal-600 uppercase">Featured News</h2>
                            </div>
                            <p class="text-gray-500 mb-2">${article1.date}</p>
                            <h3 class="text-3xl font-light leading-snug text-gray-900 mb-6">
                                <a href="#" class="hover:text-teal-600 transition-colors duration-300">${article1.title}</a>
                            </h3>
                        </div>
                        <div class="overflow-hidden rounded-lg">
                            <img src="${article1.imageUrl}" alt="${article1.title}" class="w-full h-64 object-cover" />
                        </div>
                    </div>
                    <div class="relative group overflow-hidden rounded-lg min-h-[400px]">
                        <img src="${article2.imageUrl}" alt="${article2.title}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-8 text-white w-full flex justify-between items-end">
                            <div>
                                <p class="text-gray-300 mb-1">${article2.date}</p>
                                <h3 class="text-2xl font-light leading-tight">
                                    <a href="#" class="hover:underline">${article2.title}</a>
                                </h3>
                            </div>
                            <a href="#" class="flex-shrink-0 bg-white/20 hover:bg-white/40 rounded-full w-16 h-16 flex items-center justify-center transition-colors duration-300 backdrop-blur-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>`;
        };

        const renderArticles = () => {
            const nonFeaturedArticles = ALL_ARTICLES.filter(a => !a.featured);
            let filteredArticles = nonFeaturedArticles
                .filter(article => article.title.toLowerCase().includes(searchTerm.toLowerCase()))
                .filter(article => category === 'All Categories' || article.category === category);

            filteredArticles.sort((a, b) => {
                const dateA = new Date(a.date.split('.').reverse().join('-')).getTime();
                const dateB = new Date(b.date.split('.').reverse().join('-')).getTime();
                return sortOrder === 'Latest First' ? dateB - dateA : dateA - dateB;
            });

            const articlesToShow = filteredArticles.slice(0, visibleCount);
            
            if (articlesToShow.length > 0) {
                articleGrid.innerHTML = articlesToShow.map(renderArticleCard).join('');
                articleGrid.classList.remove('hidden');
                noResultsDiv.classList.add('hidden');
            } else {
                 articleGrid.innerHTML = '';
                 articleGrid.classList.add('hidden');
                 noResultsDiv.classList.remove('hidden');
            }

            if (visibleCount >= filteredArticles.length) {
                loadMoreContainer.style.display = 'none';
            } else {
                loadMoreContainer.style.display = 'block';
            }
        };
        
        // Setup Functions
        const setupFilters = () => {
            const categories = ['All Categories', ...new Set(ALL_ARTICLES.map(a => a.category))];
            categorySelect.innerHTML = categories.map(c => `<option value="${c}">${c}</option>`).join('');

            const sortOptions = ['Latest First', 'Oldest First'];
            sortSelect.innerHTML = sortOptions.map(o => `<option value="${o}">${o}</option>`).join('');
        };

        // Event Handlers
        const handleSearch = (e) => {
            searchTerm = e.target.value;
            visibleCount = 6; // Reset on new search
            renderArticles();
        };

        const handleCategoryChange = (e) => {
            category = e.target.value;
            visibleCount = 6; // Reset on new filter
            renderArticles();
        };

        const handleSortChange = (e) => {
            sortOrder = e.target.value;
            visibleCount = 6; // Reset on new sort
            renderArticles();
        };

        const handleLoadMore = () => {
            visibleCount += 6;
            renderArticles();
        };

        const handleScroll = () => {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.add('visible');
            } else {
                scrollToTopBtn.classList.remove('visible');
            }
        };
        
        const handleScrollToTop = () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        };

        // Initializer
        const init = () => {
            setupFilters();
            renderFeaturedNews();
            renderArticles();

            searchInput.addEventListener('input', handleSearch);
            categorySelect.addEventListener('change', handleCategoryChange);
            sortSelect.addEventListener('change', handleSortChange);
            loadMoreBtn.addEventListener('click', handleLoadMore);
            window.addEventListener('scroll', handleScroll);
            scrollToTopBtn.addEventListener('click', handleScrollToTop);
        };

        init();
      });
    </script>

 @include('include.footer')
