<footer class="bg-roshn-green text-white relative overflow-hidden">
  {{-- Decorative gradient overlay (optional) --}}
  <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent pointer-events-none"></div>

  {{-- MAIN FOOTER --}}
  <div class="relative max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-10 border-b border-white/20">
    {{-- Column 1: Logo + Short Description --}}
    <div class="space-y-4">
      <a href="/" class="inline-block">
        <img src="{{ asset('meraas_2.png') }}" alt="Meraastrust Logo" class="h-10">
      </a>
      <p class="text-sm text-white/80 leading-relaxed">
        Meraastrust is redefining communities across Saudi Arabia with a commitment to sustainability, innovation, and the vision of 2030.
      </p>
    </div>

    {{-- Column 2: Company --}}
    <div class="flex flex-col gap-3">
      <h4 class="font-semibold text-lg mb-2">Company</h4>
      <a href="#" class="text-white/80 hover:text-white transition">About Us</a>
      <a href="#" class="text-white/80 hover:text-white transition">Our Vision</a>
      <a href="#" class="text-white/80 hover:text-white transition">Careers</a>
    </div>

    {{-- Column 3: Explore --}}
    <div class="flex flex-col gap-3">
      <h4 class="font-semibold text-lg mb-2">Explore</h4>
      <a href="#" class="text-white/80 hover:text-white transition">Communities</a>
      <a href="#" class="text-white/80 hover:text-white transition">Buy a Home</a>
      <a href="#" class="text-white/80 hover:text-white transition">Rent a Home</a>
    </div>

    {{-- Column 4: Connect --}}
    <div class="flex flex-col gap-3">
      <h4 class="font-semibold text-lg mb-2">Connect</h4>
      <a href="#" class="text-white/80 hover:text-white transition">Contact Us</a>
      <a href="#" class="text-white/80 hover:text-white transition">Media Center</a>
      <a href="#" class="text-white/80 hover:text-white transition">LinkedIn</a>

      {{-- Social Icons --}}
      <div class="flex gap-4 mt-3">
        <a href="#" class="hover:text-emerald-300 transition">
          <i class="fab fa-facebook-f text-xl"></i>
        </a>
        <a href="#" class="hover:text-emerald-300 transition">
          <i class="fab fa-twitter text-xl"></i>
        </a>
        <a href="#" class="hover:text-emerald-300 transition">
          <i class="fab fa-linkedin-in text-xl"></i>
        </a>
        <a href="#" class="hover:text-emerald-300 transition">
          <i class="fab fa-instagram text-xl"></i>
        </a>
      </div>
    </div>
  </div>

  {{-- COPYRIGHT BAR --}}
  <div class="relative max-w-7xl mx-auto px-6 py-6 flex flex-col md:flex-row justify-between items-center text-sm text-white/80 gap-4">
    <p>&copy; {{ date('Y') }} Meraastrust. All Rights Reserved.</p>


   

    <div class="flex gap-6">
      <a href="#" class="hover:text-white transition">Privacy Policy</a>
      <a href="#" class="hover:text-white transition">Terms of Use</a>
    </div>

    {{-- Back to top --}}
    <button id="back-to-top"
      class="fixed bottom-8 right-8 bg-white text-roshn-green shadow-lg rounded-full p-3 hover:bg-gray-100 transition"
      aria-label="Back to top">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="w-5 h-5">
        <line x1="12" y1="19" x2="12" y2="5"></line>
        <polyline points="5 12 12 5 19 12"></polyline>
      </svg>
    </button>
  </div>
</footer>

{{-- Optional JS for smooth scroll to top --}}
<script>
  const backToTop = document.getElementById('back-to-top');
  backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
</script>

<script src="assets/js/script1.js"></script>


