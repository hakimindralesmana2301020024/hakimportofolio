<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') — Hakim Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Poppins:wght@600;800&display=swap" rel="stylesheet">
    <style>
  body { font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial; }
  h1,h2,h3 { font-family: 'Poppins', sans-serif; }
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
    <footer class="mt-20 py-8 border-t border-gray-800 text-center text-sm text-gray-400">
      © {{ date('Y') }} Hakim. Dibuat dengan ❤️ dan Laravel.
    </footer>

</body>
</html>
