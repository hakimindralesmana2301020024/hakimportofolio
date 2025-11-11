@extends('layouts.app')

@section('title', $project->title ?? 'Project Detail')

@section('content')
<section class="min-h-screen bg-black text-white py-20">
  <div class="container mx-auto px-6 lg:px-8">
    <!-- Header -->
    <div class="mb-8" data-aos="fade-up">
      <a href="{{ route('portfolio') }}" class="text-sm text-gray-400 hover:text-white">&larr; Kembali ke Portfolio</a>
      <h1 class="text-3xl md:text-4xl font-extrabold mt-3">{{ $project->title }}</h1>
      <div class="mt-2 text-sm text-gray-400">
        <span>{{ $project->category ?? 'Branding' }}</span> • <span>{{ $project->year ?? now()->year }}</span>
      </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <!-- Left: Gallery thumbnails -->
      <div class="lg:col-span-2" data-aos="fade-right">
        <div x-data="{ modalOpen: false, modalType: 'image', modalSrc: '' }">
          <div class="grid grid-cols-2 gap-4">
            @foreach($project->images ?? [] as $img)
              <button @click="modalOpen = true; modalType = 'image'; modalSrc='{{ asset($img) }}'" class="group overflow-hidden rounded-lg shadow-soft">
                <div class="relative h-48 bg-gray-800">
                  <img src="{{ asset($img) }}" alt="thumb" class="object-cover w-full h-full transform group-hover:scale-105 transition">
                  <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                </div>
              </button>
            @endforeach

            @if(!empty($project->video))
              <button @click="modalOpen = true; modalType = 'video'; modalSrc='{{ $project->video }}'" class="group overflow-hidden rounded-lg shadow-soft">
                <div class="relative h-48 bg-gray-800 flex items-center justify-center">
                  <div class="text-center">
                    <svg class="mx-auto w-10 h-10 text-rose-400" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                    <div class="mt-3 text-sm text-gray-300">Play video</div>
                  </div>
                </div>
              </button>
            @endif
          </div>

          <!-- Modal -->
          <div x-show="modalOpen" x-transition class="fixed inset-0 z-50 flex items-center justify-center p-6">
            <div class="absolute inset-0 bg-black/70" @click="modalOpen=false"></div>
            <div class="relative max-w-4xl w-full mx-auto">
              <button @click="modalOpen=false" class="absolute right-2 top-2 z-50 bg-gray-900/70 p-2 rounded-full">
                <svg class="w-5 h-5 text-gray-200" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
              </button>

              <div class="bg-black rounded-lg overflow-hidden">
                <template x-if="modalType === 'image'">
                  <img :src="modalSrc" class="w-full object-contain max-h-[80vh]" alt="Large image">
                </template>

                <template x-if="modalType === 'video'">
                  <div class="relative" style="padding-top:56.25%">
                    <iframe :src="modalSrc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="absolute inset-0 w-full h-full"></iframe>
                  </div>
                </template>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Project details -->
      <div class="lg:col-span-1" data-aos="fade-left">
        <div class="p-6 bg-gray-900/40 rounded-lg shadow-soft">
          <h4 class="font-semibold">Tentang Proyek</h4>
          <p class="mt-3 text-gray-300">{!! nl2br(e($project->excerpt ?? 'Deskripsi singkat proyek...')) !!}</p>

          <hr class="my-4 border-gray-800">

          <h5 class="font-semibold">Proses (Problem → Solusi → Hasil)</h5>
          <div class="mt-3 text-sm text-gray-300 space-y-3">
            <div>
              <div class="text-xs text-rose-400 font-semibold">Problem</div>
              <div class="text-gray-300">{{ $project->problem ?? 'Masalah yang ingin diselesaikan' }}</div>
            </div>

            <div>
              <div class="text-xs text-rose-400 font-semibold">Solusi</div>
              <div class="text-gray-300">{{ $project->solution ?? 'Pendekatan & solusi yang diterapkan' }}</div>
            </div>

            <div>
              <div class="text-xs text-rose-400 font-semibold">Hasil</div>
              <div class="text-gray-300">{{ $project->result ?? 'Hasil / impact / metrik (jika ada)' }}</div>
            </div>
          </div>

          <hr class="my-4 border-gray-800">

          <div class="text-sm text-gray-300">
            <div><span class="text-gray-400">Role:</span> {{ $project->role ?? 'Desain / Fotografi / Video' }}</div>
            <div class="mt-2"><span class="text-gray-400">Tools:</span> {{ $project->tools ?? 'Figma, Photoshop, Premiere' }}</div>
            <div class="mt-2"><span class="text-gray-400">Year:</span> {{ $project->year ?? now()->year }}</div>
          </div>

          <div class="mt-6">
            <a href="{{ route('portfolio') }}" class="inline-block px-4 py-2 bg-rose-500 rounded-md font-semibold shadow-md hover:shadow-lg transition">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
