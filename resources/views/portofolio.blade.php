@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
<section class="py-20 bg-gradient-to-b from-gray-900 to-black text-white min-h-screen">
  <div class="container mx-auto px-6 lg:px-8">
    <div class="text-center mb-8" data-aos="fade-up">
      <p class="text-sm uppercase tracking-widest text-rose-400">Portfolio</p>
      <h2 class="text-3xl font-extrabold mt-2">Semua Karya</h2>
      <p class="mt-3 text-gray-400 max-w-2xl mx-auto">Klik salah satu karya untuk melihat detail dan case study.</p>
    </div>

    <!-- FILTER (server-side via query param) -->
    <div class="flex items-center justify-center gap-3 mb-8" data-aos="fade-up">
      @foreach($categories as $key => $label)
        @if($key === 'all')
          <a href="{{ route('portfolio') }}" class="px-4 py-2 rounded-full text-sm {{ request()->filled('category') ? 'bg-gray-800 text-gray-300' : 'bg-rose-500 text-white' }}">
            {{ $label }}
          </a>
        @else
          <a href="{{ route('portfolio', ['category' => $key]) }}" class="px-4 py-2 rounded-full text-sm {{ request('category') === $key ? 'bg-rose-500 text-white' : 'bg-gray-800 text-gray-300 hover:bg-gray-700' }}">
            {{ $label }}
          </a>
        @endif
      @endforeach
    </div>

    <!-- GRID -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="fade-up" data-aos-delay="40">
      @forelse($projects as $p)
        @php
          // if using Eloquent Model, adapt attributes
          $thumb = is_object($p) && property_exists($p, 'thumbnail') ? ($p->thumbnail ?: 'assets/images/works/default.jpg') : ($p['thumb'] ?? 'assets/images/works/default.jpg');
          $title = is_object($p) ? ($p->title ?? '') : ($p['title'] ?? '');
          $category = is_object($p) ? ($p->category ?? '') : ($p['category'] ?? '');
          $year = is_object($p) ? ($p->year ?? now()->year) : ($p['year'] ?? now()->year);
          $slug = is_object($p) ? ($p->slug ?? '#') : ($p['slug'] ?? '#');
        @endphp

        <a href="{{ is_string($slug) && $slug !== '#' ? route('portfolio.show', $slug) : '#' }}" class="group block rounded-xl overflow-hidden shadow-soft hover:shadow-soft-lg transition">
          <div class="relative h-64 bg-gray-800">
            <img src="{{ asset($thumb) }}" alt="{{ $title }}" class="object-cover w-full h-full transform group-hover:scale-105 transition">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
          </div>
          <div class="p-4 bg-gray-900/60">
            <div class="flex items-center justify-between">
              <div>
                <div class="font-semibold">{{ $title }}</div>
                <div class="text-xs text-gray-400">{{ ucfirst($category) }}</div>
              </div>
              <div class="text-xs text-gray-400">{{ $year }}</div>
            </div>
          </div>
        </a>
      @empty
        <div class="col-span-3 text-center text-gray-400 py-20">
          Belum ada karya untuk kategori ini.
        </div>
      @endforelse
    </div>

    <!-- jika ingin pagination di masa depan, taruh di sini -->
    {{-- <div class="mt-8">{{ $projects->links() }}</div> --}}
  </div>
</section>
@endsection
