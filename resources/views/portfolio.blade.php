@extends('layouts.app')

@section('title', 'Portfolio — Hakim Portfolio')

@section('content')
<section id="portfolio" class="py-20 bg-gradient-to-b from-gray-900 to-black text-white">
  <div class="container mx-auto px-6 lg:px-8">
    <div class="text-center mb-8">
      <p class="text-sm uppercase tracking-widest text-rose-400">Portfolio</p>
      <h2 class="text-3xl font-extrabold mt-2">All Works</h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach ($projects as $project)
        <a href="{{ route('portfolio.show', $project['slug']) }}" class="group block rounded-xl overflow-hidden shadow-soft hover:shadow-soft-lg transition">
          <div class="relative h-64 bg-gray-800">
            <img src="{{ asset($project['thumb']) }}" alt="{{ $project['title'] }}" class="object-cover w-full h-full transform group-hover:scale-105 transition">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
          </div>
          <div class="p-4 bg-gray-900/60">
            <div class="flex items-center justify-between">
              <div>
                <div class="font-semibold">{{ $project['title'] }}</div>
                <div class="text-xs text-gray-400">{{ ucfirst($project['category']) }}</div>
              </div>
              <div class="text-xs text-gray-400">{{ $project['year'] }}</div>
            </div>
          </div>
        </a>
      @endforeach
    </div>

    <div class="mt-8 text-center">
      <a href="{{ route('portfolio') }}" class="inline-block px-6 py-3 bg-rose-500 rounded-lg font-semibold shadow-md hover:shadow-lg transition">View All Projects</a>
    </div>
  </div>
</section>
@endsection