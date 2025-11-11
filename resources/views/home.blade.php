@extends('layouts.app')

@section('title', 'Home — Hakim Portfolio')

@section('content')
<!-- HERO -->
<section id="hero" class="min-h-screen flex items-center bg-gradient-to-br from-black via-gray-900 to-gray-800 text-white">
  <div class="container mx-auto px-6 lg:px-8 py-20">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">

      <!-- LEFT: teks -->
      <div class="lg:col-span-7" data-aos="fade-right">
        <p class="text-sm uppercase tracking-widest text-rose-400 mb-3">Creative Portfolio</p>

        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight">
          Hi, saya <span class="text-rose-400">Hakim</span><br>
          <span class="text-gray-300 font-semibold">Desainer Grafis • UI/UX • Photographer • Videographer</span>
        </h1>

        <p class="mt-6 text-gray-400 max-w-xl">
          Saya menggabungkan estetika visual dan pengalaman pengguna untuk membuat desain yang menarik & efektif — poster, branding, UI, foto, sampai video.
          Portofolio ini menunjukkan sebagian karya saya yang fokus pada komposisi, tipografi, dan storytelling visual.
        </p>

        <div class="mt-8 flex flex-wrap gap-4">
          <a href="#works" class="px-6 py-3 bg-rose-500 hover:bg-rose-600 rounded-lg font-semibold transition shadow-md shadow-rose-600/30">Lihat Karya</a>
          <a href="#contact" class="px-6 py-3 border border-gray-700 hover:bg-gray-800 rounded-lg font-semibold transition">Hire / Kontak</a>
        </div>

        <div class="mt-10 flex flex-wrap gap-3 text-sm text-gray-300">
          <span class="px-3 py-1 bg-gray-800/40 rounded-full">Branding</span>
          <span class="px-3 py-1 bg-gray-800/40 rounded-full">Poster Design</span>
          <span class="px-3 py-1 bg-gray-800/40 rounded-full">Photography</span>
          <span class="px-3 py-1 bg-gray-800/40 rounded-full">Video</span>
        </div>
      </div>

      <!-- RIGHT: visual card -->
      <div class="lg:col-span-5 flex justify-center lg:justify-end" data-aos="zoom-in" data-aos-delay="120">
        <div class="relative w-80 h-80 rounded-2xl overflow-hidden bg-gradient-to-br from-rose-900/30 to-black shadow-xl creative-card">
          <img src="{{ asset('assets/images/hero-sample.jpg') }}" alt="Project visual" class="object-cover w-full h-full">
          <!-- subtle overlay -->
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- SERVICES -->
<section id="services" class="py-20 bg-gradient-to-b from-gray-900 to-black text-white">
  <div class="container mx-auto px-6 lg:px-8">
    <div class="text-center mb-10" data-aos="fade-up">
      <p class="text-sm uppercase tracking-widest text-rose-400">Layanan</p>
      <h2 class="text-3xl font-extrabold mt-2">Apa yang saya tawarkan</h2>
      <p class="mt-3 text-gray-400 max-w-2xl mx-auto">Desain visual yang memadukan estetika & strategi. Saya menangani project end-to-end dari konsep sampai deliverable.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- card service -->
      <div class="p-6 rounded-xl bg-gray-800/30 backdrop-blur-sm shadow-soft hover:shadow-soft-lg transition" data-aos="fade-up">
        <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-rose-500/10 text-rose-400 mb-4">
          <!-- icon -->
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M4 4h7v7H4zM13 4h7v11h-7zM4 13h7v7H4z"/></svg>
        </div>
        <h3 class="font-semibold text-lg">Desain Grafis & Poster</h3>
        <p class="mt-2 text-sm text-gray-400">Poster, materi cetak, branding visual yang kuat dan komunikatif.</p>
      </div>

      <div class="p-6 rounded-xl bg-gray-800/30 backdrop-blur-sm shadow-soft hover:shadow-soft-lg transition" data-aos="fade-up" data-aos-delay="60">
        <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-rose-500/10 text-rose-400 mb-4">
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M3 3h18v4H3zM3 10h18v11H3z"/></svg>
        </div>
        <h3 class="font-semibold text-lg">UI / UX Design</h3>
        <p class="mt-2 text-sm text-gray-400">Wireframe, prototyping, UI systems & design handoff untuk developer.</p>
      </div>

      <div class="p-6 rounded-xl bg-gray-800/30 backdrop-blur-sm shadow-soft hover:shadow-soft-lg transition" data-aos="fade-up" data-aos-delay="120">
        <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-rose-500/10 text-rose-400 mb-4">
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 7h7l-6 4 3 8-7-5-7 5 3-8-6-4h7z"/></svg>
        </div>
        <h3 class="font-semibold text-lg">Fotografi</h3>
        <p class="mt-2 text-sm text-gray-400">Corporate & creative photography — storytelling melalui frame & komposisi.</p>
      </div>

      <div class="p-6 rounded-xl bg-gray-800/30 backdrop-blur-sm shadow-soft hover:shadow-soft-lg transition" data-aos="fade-up" data-aos-delay="180">
        <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-rose-500/10 text-rose-400 mb-4">
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M3 3h18v14H3zM3 18h18v3H3z"/></svg>
        </div>
        <h3 class="font-semibold text-lg">Videography</h3>
        <p class="mt-2 text-sm text-gray-400">Konsep video, editing, color grading dan storytelling visual.</p>
      </div>
    </div>
  </div>
</section>

<!-- ABOUT (ringkas) -->
<section id="about" class="py-20 bg-black text-white border-t border-gray-800">
  <div class="container mx-auto px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
      <div class="lg:col-span-5" data-aos="zoom-in">
        <div class="w-full rounded-xl overflow-hidden shadow-2xl creative-card">
          <img src="{{ asset('assets/images/profile.jpg') }}" alt="Hakim" class="object-cover w-full h-96">
        </div>
      </div>

      <div class="lg:col-span-7" data-aos="fade-left">
        <h3 class="text-2xl font-bold">Tentang Saya</h3>
        <p class="mt-4 text-gray-300 max-w-2xl">
          Saya seorang creative professional dengan fokus di desain visual dan multimedia. Saya menangani project branding, poster, UI/UX, fotografi, dan video.
          Metode kerja saya: research → concept → execution → deliver with attention to detail.
        </p>

        <div class="mt-6 flex gap-3">
          <a href="{{ asset('assets/resume/Hakim_Resume.pdf') }}" download class="px-4 py-2 bg-rose-500 rounded-md font-semibold shadow-md hover:shadow-lg transition">Download CV</a>
          <a href="#contact" class="px-4 py-2 border border-gray-700 rounded-md text-gray-200 hover:bg-gray-800 transition">Let's talk</a>
        </div>

        <div class="mt-8">
          <h5 class="font-semibold mb-3">Tools & Teknologi</h5>
          <div class="flex flex-wrap gap-2">
            <span class="px-3 py-1 bg-gray-800/40 rounded-full text-sm text-gray-200">Figma</span>
            <span class="px-3 py-1 bg-gray-800/40 rounded-full text-sm text-gray-200">Adobe Photoshop</span>
            <span class="px-3 py-1 bg-gray-800/40 rounded-full text-sm text-gray-200">Adobe Premiere</span>
            <span class="px-3 py-1 bg-gray-800/40 rounded-full text-sm text-gray-200">Lightroom</span>
            <span class="px-3 py-1 bg-gray-800/40 rounded-full text-sm text-gray-200">After Effects</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WORKS / PORTFOLIO PREVIEW (with filter) -->
<section id="works" class="py-20 bg-gradient-to-b from-gray-900 to-black text-white border-t border-gray-800">
  <div class="container mx-auto px-6 lg:px-8">
    <div class="text-center mb-8" data-aos="fade-up">
      <p class="text-sm uppercase tracking-widest text-rose-400">Selected Works</p>
      <h2 class="text-3xl font-extrabold mt-2">Beberapa Karya</h2>
    </div>

    <!-- FILTER -->
    <div x-data="{ filter: 'all' }" class="mb-8" data-aos="fade-up" data-aos-delay="30">
      <div class="flex items-center justify-center gap-3 flex-wrap">
        <button :class="filter==='all'? 'bg-rose-500 text-white' : 'bg-gray-800 text-gray-300 hover:bg-gray-700'"
                @click="filter='all'"
                class="px-4 py-2 rounded-full text-sm transition">All</button>

        <button :class="filter==='branding'? 'bg-rose-500 text-white' : 'bg-gray-800 text-gray-300 hover:bg-gray-700'"
                @click="filter='branding'"
                class="px-4 py-2 rounded-full text-sm transition">Branding</button>

        <button :class="filter==='photo'? 'bg-rose-500 text-white' : 'bg-gray-800 text-gray-300 hover:bg-gray-700'"
                @click="filter='photo'"
                class="px-4 py-2 rounded-full text-sm transition">Photo</button>

        <button :class="filter==='video'? 'bg-rose-500 text-white' : 'bg-gray-800 text-gray-300 hover:bg-gray-700'"
                @click="filter='video'"
                class="px-4 py-2 rounded-full text-sm transition">Video</button>
      </div>

      <!-- grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
        <!-- Example items: on real project you will loop through projects from DB -->
        @php
          // contoh data sementara jika belum menggunakan DB
          $works = [
            ['id'=>1,'title'=>'Brand Poster A','category'=>'branding','thumb'=>'assets/images/works/work-1.jpg','year'=>'2025','slug'=>'brand-poster-a'],
            ['id'=>2,'title'=>'Portrait Shoot','category'=>'photo','thumb'=>'assets/images/works/work-2.jpg','year'=>'2024','slug'=>'portrait-shoot'],
            ['id'=>3,'title'=>'Promo Video','category'=>'video','thumb'=>'assets/images/works/work-3.jpg','year'=>'2025','slug'=>'promo-video'],
            ['id'=>4,'title'=>'Brand Identity B','category'=>'branding','thumb'=>'assets/images/works/work-4.jpg','year'=>'2024','slug'=>'brand-identity-b'],
            ['id'=>5,'title'=>'Event Photography','category'=>'photo','thumb'=>'assets/images/works/work-5.jpg','year'=>'2023','slug'=>'event-photography'],
            ['id'=>6,'title'=>'Short Film','category'=>'video','thumb'=>'assets/images/works/work-6.jpg','year'=>'2025','slug'=>'short-film'],
          ];
        @endphp

        <template x-for="item in {{ json_encode($works) }}" :key="item.id">
          <a :href="`/portfolio/${item.slug}`"
             x-show="filter === 'all' || filter === item.category"
             x-transition
             class="group block rounded-xl overflow-hidden shadow-soft hover:shadow-soft-lg transition">
            <div class="relative h-64 bg-gray-800">
              <img :src="`/${item.thumb}`" :alt="item.title" class="object-cover w-full h-full transform group-hover:scale-105 transition">
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
            </div>
            <div class="p-4 bg-gray-900/60">
              <div class="flex items-center justify-between">
                <div>
                  <div class="font-semibold" x-text="item.title"></div>
                  <div class="text-xs text-gray-400" x-text="item.category.charAt(0).toUpperCase() + item.category.slice(1)"></div>
                </div>
                <div class="text-xs text-gray-400" x-text="item.year"></div>
              </div>
            </div>
          </a>
        </template>
      </div>

      <div class="mt-8 text-center">
        <a href="{{ route('portfolio') }}" class="inline-block px-6 py-3 bg-rose-500 rounded-lg font-semibold shadow-md hover:shadow-lg transition">Lihat semua karya</a>
      </div>
    </div>
  </div>
</section>


<!-- CONTACT CTA -->
<section id="contact" class="py-20 bg-black text-white border-t border-gray-800">
  <div class="container mx-auto px-6 lg:px-8 text-center" data-aos="fade-up">
    <h3 class="text-2xl font-extrabold">Tertarik bekerjasama?</h3>
    <p class="mt-3 text-gray-400">Kirim brief atau jadwalkan diskusi singkat — saya siap membantu mewujudkan ide visualmu.</p>
    <div class="mt-6">
      <a href="{{ route('contact') }}" class="px-6 py-3 bg-rose-500 rounded-md font-semibold shadow-md hover:shadow-lg transition">Hubungi Saya</a>
    </div>
  </div>
</section>
@endsection
