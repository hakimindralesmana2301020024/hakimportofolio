@extends('layouts.app')

@section('title','About')

@section('content')
<section class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white py-20">
  <div class="container mx-auto px-6 lg:px-8">

    <!-- Header kecil -->
    <div class="text-center mb-12" data-aos="fade-down">
      <p class="uppercase text-sm tracking-widest text-rose-400">Tentang Saya</p>
      <h2 class="text-3xl sm:text-4xl font-extrabold mt-3">Sedikit tentang saya</h2>
      <p class="mt-3 text-gray-400 max-w-2xl mx-auto">Pengembang web yang fokus membangun aplikasi yang elegan, usable, dan cepat menggunakan Laravel & modern front-end stack.</p>
    </div>

    <!-- Dua kolom: foto | deskripsi -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
      <!-- Foto -->
      <div class="lg:col-span-4 flex justify-center lg:justify-start" data-aos="zoom-in">
        <div class="w-64 h-64 rounded-2xl overflow-hidden shadow-2xl ring-1 ring-rose-600/20">
          <img src="{{ asset('assets/images/profile.jpg') }}" alt="Foto Hakim" class="object-cover w-full h-full">
        </div>
      </div>

      <!-- Deskripsi -->
      <div class="lg:col-span-8" data-aos="fade-left">
        <h3 class="text-2xl font-bold">Halo, saya Hakim 👋</h3>
        <p class="mt-4 text-gray-300 max-w-3xl">
          Saya adalah Web Developer yang berpengalaman membuat aplikasi menggunakan Laravel (backend), Tailwind CSS (UI), dan JavaScript (Vue / Alpine).
          Saya suka menyusun antarmuka yang bersih, performa yang baik, dan pengalaman pengguna yang intuitif.
        </p>

        <div class="mt-6 flex flex-wrap gap-3">
          <a href="{{ asset('assets/resume/Hakim_Resume.pdf') }}" download class="inline-flex items-center px-4 py-2 bg-rose-500 hover:bg-rose-600 rounded-md font-semibold transition">
            Download CV (PDF)
          </a>

          <a href="{{ route('contact') }}" class="inline-flex items-center px-4 py-2 border border-gray-700 rounded-md text-gray-200 hover:bg-gray-800 transition">
            Hubungi Saya
          </a>
        </div>
      </div>
    </div>

    <!-- Skill grid -->
    <div class="mt-16" data-aos="fade-up">
      <h4 class="text-xl font-bold mb-4">Skill Utama</h4>

      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
        <!-- contoh item skill: ubah / tambah sesuai keinginan -->
        <div class="flex items-center gap-3 p-4 bg-gray-800/30 rounded-lg">
          <!-- icon (SVG) -->
          <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-rose-500/10 text-rose-400">
            <!-- Laravel-like icon (simple) -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
              <path d="M3 3h7v2H5v5H3z" opacity=".9"/>
              <path d="M14 3h7v11h-2V5h-5z"/>
              <path d="M3 14h2v7h7v-2H5v-5z"/>
              <path d="M16 14h5v2h-5z"/>
            </svg>
          </div>
          <div>
            <div class="font-semibold">Laravel</div>
            <div class="text-xs text-gray-400">Backend & API</div>
          </div>
        </div>

        <div class="flex items-center gap-3 p-4 bg-gray-800/30 rounded-lg">
          <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-rose-500/10 text-rose-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
              <rect x="3" y="3" width="18" height="18" rx="2" />
            </svg>
          </div>
          <div>
            <div class="font-semibold">Tailwind CSS</div>
            <div class="text-xs text-gray-400">Utility-first UI</div>
          </div>
        </div>

        <div class="flex items-center gap-3 p-4 bg-gray-800/30 rounded-lg">
          <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-rose-500/10 text-rose-400">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3 7h7l-6 4 3 8-7-5-7 5 3-8-6-4h7z"/></svg>
          </div>
          <div>
            <div class="font-semibold">Vue / Alpine</div>
            <div class="text-xs text-gray-400">Interactivity</div>
          </div>
        </div>

        <div class="flex items-center gap-3 p-4 bg-gray-800/30 rounded-lg">
          <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-rose-500/10 text-rose-400">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M3 3h18v4H3zM3 10h18v11H3z"/></svg>
          </div>
          <div>
            <div class="font-semibold">Database</div>
            <div class="text-xs text-gray-400">MySQL / SQLite</div>
          </div>
        </div>

        <!-- tambahkan item skill lainnya sesuai kebutuhan -->
      </div>
    </div>

    <!-- Tools & Teknologi -->
    <div class="mt-12" data-aos="fade-up" data-aos-delay="80">
      <h4 class="text-xl font-bold mb-4">Tools & Teknologi</h4>
      <div class="flex flex-wrap gap-3">
        <span class="px-3 py-1 bg-gray-800/40 rounded-full text-sm text-gray-200">Laravel</span>
        <span class="px-3 py-1 bg-gray-800/40 rounded-full text-sm text-gray-200">Tailwind CSS</span>
        <span class="px-3 py-1 bg-gray-800/40 rounded-full text-sm text-gray-200">Vite</span>
        <span class="px-3 py-1 bg-gray-800/40 rounded-full text-sm text-gray-200">Vue</span>
        <span class="px-3 py-1 bg-gray-800/40 rounded-full text-sm text-gray-200">Figma</span>
        <span class="px-3 py-1 bg-gray-800/40 rounded-full text-sm text-gray-200">Git / GitHub</span>
        <span class="px-3 py-1 bg-gray-800/40 rounded-full text-sm text-gray-200">VS Code</span>
      </div>
    </div>

    <!-- Education / Quick facts (opsional, ringkas) -->
    <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 gap-6" data-aos="fade-up" data-aos-delay="120">
      <div class="p-6 bg-gray-800/30 rounded-lg">
        <h5 class="font-semibold">Lokasi</h5>
        <p class="text-gray-300 mt-2">Indonesia • Siap remote</p>
      </div>

      <div class="p-6 bg-gray-800/30 rounded-lg">
        <h5 class="font-semibold">Tersedia untuk</h5>
        <p class="text-gray-300 mt-2">Freelance, kontrak, dan project jangka panjang</p>
      </div>
    </div>

  </div>
</section>
@endsection
