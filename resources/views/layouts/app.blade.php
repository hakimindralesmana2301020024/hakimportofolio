<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') — Hakim Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Poppins:wght@600;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <style>
  body {
    background: linear-gradient(to bottom, #1a1a1a, #000000); /* Light black to dark black */
    color: #ffffff; /* White text for contrast */
  }

  nav {
    background: linear-gradient(to bottom, #1a1a1a, #000000); /* Light black to dark black */
  }

  footer {
    background: linear-gradient(to bottom, #1a1a1a, #000000); /* Light black to dark black */
  }

  section {
    background: linear-gradient(to bottom, #1a1a1a, #000000); /* Light black to dark black */
  }

  h1,h2,h3 { font-family: 'Poppins', sans-serif; }

  section {
    position: relative;
  }

  section::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 20px;
    background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.5));
    pointer-events: none;
  }
</style>
</head>
<body class="bg-gray-900 text-white antialiased">

    <!-- Navbar -->
    <nav x-data="{ open: false, scrolled: false }"
         x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 10)"
         :class="scrolled ? 'bg-gray-900/80 backdrop-blur-md shadow-md' : 'bg-transparent'"
         class="fixed top-0 left-0 w-full z-50 transition duration-300">
      <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

          <!-- Logo -->
          <a href="{{ route('home') }}" class="font-bold text-xl text-rose-400 hover:text-rose-300 transition">
            Hakim<span class="text-white">.</span>
          </a>

          <!-- Desktop Menu -->
          <div class="hidden md:flex space-x-8 text-sm font-medium">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-rose-400' : 'text-gray-300 hover:text-white' }}">Home</a>
            <a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'text-rose-400' : 'text-gray-300 hover:text-white' }}">Portfolio</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-rose-400' : 'text-gray-300 hover:text-white' }}">Contact</a>
          </div>

          <!-- Mobile Toggle -->
          <button @click="open = !open" class="md:hidden focus:outline-none">
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Menu -->
      <div x-show="open" x-transition
           class="md:hidden bg-gray-900/95 backdrop-blur-md border-t border-gray-800 px-6 pb-6 space-y-3">
        <a href="{{ route('home') }}" class="block text-gray-300 hover:text-rose-400">Home</a>
        <a href="{{ route('portfolio') }}" class="block text-gray-300 hover:text-rose-400">Portfolio</a>
        <a href="{{ route('contact') }}" class="block text-gray-300 hover:text-rose-400">Contact</a>
      </div>
    </nav>

    <!-- Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
   <footer class="bg-[#0b0b0d] text-gray-300 border-t border-gray-800 py-12 text-center">
  <div class="container mx-auto px-6">

    <!-- Nama / Brand -->
    <h3 class="text-2xl font-bold text-white mb-3 tracking-tight">
      Hakim<span class="text-rose-400">.</span>
    </h3>

    <!-- Deskripsi -->
    <p class="max-w-xl mx-auto text-sm text-gray-400 leading-relaxed mb-6">
      Hakim adalah seorang desainer grafis & visual kreatif yang berfokus pada karya desain, fotografi, dan videografi.
      Menggabungkan estetika modern dan fungsionalitas dalam setiap karya.
    </p>

    <!-- Social icons -->
    <div class="flex items-center justify-center gap-4 mt-6">
      <a href="#" class="p-2 rounded-full bg-gray-800 hover:bg-rose-500 hover:text-white transition" aria-label="Facebook">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12a10 10 0 10-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.2 1.8.2v2h-1c-1 0-1.3.6-1.3 1.2V12h2.3l-.4 3h-1.9v7A10 10 0 0022 12z"/></svg>
      </a>

      <a href="#" class="p-2 rounded-full bg-gray-800 hover:bg-rose-500 hover:text-white transition" aria-label="Twitter">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.1 1.5A4.48 4.48 0 0022.4.4a9.18 9.18 0 01-2.9 1.1A4.52 4.52 0 0016.1 0c-2.5 0-4.6 2.1-4.6 4.6 0 .4 0 .8.1 1.1C7.7 5.5 4.1 3.6 1.7.7a4.48 4.48 0 00-.6 2.3c0 1.6.8 3 2.1 3.8A4.48 4.48 0 01.9 6v.1c0 2.3 1.6 4.3 3.8 4.7-.4.1-.8.2-1.2.2-.3 0-.6 0-.9-.1.6 1.9 2.3 3.3 4.3 3.3A9.06 9.06 0 010 19.5 12.8 12.8 0 006.9 21c8.3 0 12.8-6.9 12.8-12.8v-.6A8.7 8.7 0 0023 3z"/></svg>
      </a>

      <a href="#" class="p-2 rounded-full bg-gray-800 hover:bg-rose-500 hover:text-white transition" aria-label="Instagram">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2c1.7 0 3 1.3 3 3v10c0 1.7-1.3 3-3 3H7c-1.7 0-3-1.3-3-3V7c0-1.7 1.3-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2c1.7 0 3 1.3 3 3s-1.3 3-3 3a3 3 0 110-6zm4.8-3a1.2 1.2 0 100 2.4 1.2 1.2 0 000-2.4z"/></svg>
      </a>

      <a href="#" class="p-2 rounded-full bg-gray-800 hover:bg-rose-500 hover:text-white transition" aria-label="LinkedIn">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.45 20.45h-3.55v-5.4c0-1.3 0-3-1.8-3s-2 1.4-2 2.9v5.5H9.55V9h3.4v1.6h.05c.45-.9 1.55-1.8 3.2-1.8 3.45 0 4.1 2.3 4.1 5.2v6.45zM5.4 7.45a2.05 2.05 0 110-4.1 2.05 2.05 0 010 4.1zM3.6 20.45h3.55V9H3.6v11.45zM22.2 0H1.8C.8 0 0 .8 0 1.8v20.4C0 23.2.8 24 1.8 24h20.4c1 0 1.8-.8 1.8-1.8V1.8C24 .8 23.2 0 22.2 0z"/></svg>
      </a>
    </div>

    <!-- Copyright -->
    <div class="mt-8 text-sm text-gray-500">
      © {{ date('Y') }} Hakim. Dibuat dengan <span class="text-rose-400">❤</span> dan kreativitas.
    </div>
  </div>
</footer>




</body>
</html>
