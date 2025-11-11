@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="min-h-screen flex items-center" aria-labelledby="hero-heading">
  <div class="container mx-auto px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

      <!-- LEFT: teks -->
      <div class="lg:col-span-7" data-aos="fade-right">
        <p class="text-sm uppercase tracking-widest text-rose-500 mb-4">Hi there — I build things on the web</p>

        <h1 id="hero-heading" class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight text-white">
          Hi, I’m <span class="text-rose-400">Hakim</span> — <span class="text-gray-300 font-semibold">Web Developer</span>
        </h1>

        <p class="mt-6 text-gray-300 max-w-2xl">
          Saya fokus membuat aplikasi web modern menggunakan Laravel, Tailwind CSS, dan Vue/Alpine. Saya suka membangun UI yang simpel namun rapi, performa yang baik, dan pengalaman pengguna yang menyenangkan.
        </p>

        <div class="mt-8 flex flex-wrap gap-4">
          <a href="{{ route('portfolio') }}" class="inline-flex items-center px-5 py-3 rounded-lg bg-rose-500 hover:bg-rose-600 transition shadow">
            Lihat Portofolio
          </a>

          <a href="{{ route('contact') }}" class="inline-flex items-center px-5 py-3 rounded-lg border border-gray-700 text-gray-200 hover:bg-gray-800 transition">
            Hubungi Saya
          </a>
        </div>

        <!-- quick skills -->
        <div class="mt-8 flex flex-wrap gap-3">
          <span class="text-xs bg-gray-800/40 px-3 py-1 rounded-full text-gray-200">Laravel</span>
          <span class="text-xs bg-gray-800/40 px-3 py-1 rounded-full text-gray-200">Tailwind</span>
          <span class="text-xs bg-gray-800/40 px-3 py-1 rounded-full text-gray-200">Vite</span>
          <span class="text-xs bg-gray-800/40 px-3 py-1 rounded-full text-gray-200">Vue / Alpine</span>
        </div>
      </div>

      <!-- RIGHT: foto + card -->
      <div class="lg:col-span-5 flex justify-center lg:justify-end" data-aos="zoom-in" data-aos-delay="150">
        <div class="relative w-72 h-72 sm:w-80 sm:h-80 rounded-2xl shadow-2xl overflow-hidden bg-gradient-to-br from-rose-900 via-black to-gray-900">
          <!-- Dekorasi overlay -->
          <div class="absolute inset-0 mix-blend-screen pointer-events-none" aria-hidden="true"></div>

          <!-- Foto -->
          <img src="{{ asset('assets/images/profile.jpg') }}" alt="Foto Hakim" class="object-cover w-full h-full brightness-90">

          <!-- border neon -->
          <div class="absolute -inset-1 rounded-2xl border-2 border-rose-500/40 blur-sm"></div>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection
