@extends('layouts.app')

@section('title','Contact')

@section('content')
<section class="min-h-screen bg-gradient-to-b from-black via-gray-900 to-gray-800 text-white py-24">
  <div class="container mx-auto px-6 lg:px-8">
    <div class="max-w-5xl mx-auto">

      <!-- header -->
      <div class="text-center mb-10" data-aos="fade-up">
        <p class="text-sm uppercase tracking-widest text-rose-400">Get in touch</p>
        <h2 class="text-3xl md:text-4xl font-extrabold mt-2">Let’s build something great together</h2>
        <p class="mt-3 text-gray-400 max-w-2xl mx-auto">Kirim pesan singkat—brief, pertanyaan, atau tawaran kerja. Saya akan membalas secepatnya.</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

        <!-- FORM -->
        <div class="lg:col-span-7" data-aos="fade-right">
          <div class="p-6 bg-gray-900/40 rounded-2xl shadow-soft">
            @if(session('success'))
              <div class="mb-4 px-4 py-3 rounded-lg bg-green-600/20 border border-green-600 text-green-200">
                {{ session('success') }}
              </div>
            @endif

            <!-- Alpine handles disabling submit button and local UI -->
            <form x-data="{ submitting: false }" @submit.prevent="submitting=true; $el.submit();" action="{{ route('contact.send') }}" method="POST" novalidate class="space-y-4">
              @csrf

              <div>
                <label class="block text-sm text-gray-300 mb-2">Nama</label>
                <input
                  name="name"
                  value="{{ old('name') }}"
                  required
                  type="text"
                  class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-800 text-white placeholder-gray-400 focus:border-rose-400 focus:ring-rose-400 outline-none transition"
                  placeholder="Nama lengkap"
                >
                @error('name') <div class="mt-2 text-xs text-rose-400">{{ $message }}</div> @enderror
              </div>

              <div>
                <label class="block text-sm text-gray-300 mb-2">Email</label>
                <input
                  name="email"
                  value="{{ old('email') }}"
                  required
                  type="email"
                  class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-800 text-white placeholder-gray-400 focus:border-rose-400 focus:ring-rose-400 outline-none transition"
                  placeholder="email@domain.com"
                >
                @error('email') <div class="mt-2 text-xs text-rose-400">{{ $message }}</div> @enderror
              </div>

              <div>
                <label class="block text-sm text-gray-300 mb-2">Subject</label>
                <input
                  name="subject"
                  value="{{ old('subject') }}"
                  type="text"
                  class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-800 text-white placeholder-gray-400 focus:border-rose-400 focus:ring-rose-400 outline-none transition"
                  placeholder="Judul pesan (opsional)"
                >
                @error('subject') <div class="mt-2 text-xs text-rose-400">{{ $message }}</div> @enderror
              </div>

              <div>
                <label class="block text-sm text-gray-300 mb-2">Pesan</label>
                <textarea
                  name="message"
                  required
                  rows="6"
                  class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-800 text-white placeholder-gray-400 focus:border-rose-400 focus:ring-rose-400 outline-none transition"
                  placeholder="Tulis pesan, brief, atau pertanyaanmu di sini..."
                >{{ old('message') }}</textarea>
                @error('message') <div class="mt-2 text-xs text-rose-400">{{ $message }}</div> @enderror
              </div>

              <div class="flex items-center gap-4 mt-2">
                <button
                  type="submit"
                  :disabled="submitting"
                  class="inline-flex items-center gap-2 px-5 py-3 bg-rose-500 hover:bg-rose-600 disabled:opacity-60 disabled:cursor-wait rounded-lg font-semibold shadow-md transition"
                >
                  <svg x-show="!submitting" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14"/></svg>
                  <svg x-show="submitting" class="w-4 h-4 animate-spin" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 2v4"/></svg>
                  <span x-text="submitting ? 'Mengirim...' : 'Kirim Pesan'"></span>
                </button>

                <a href="{{ asset('assets/resume/Hakim_Resume.pdf') }}" download class="px-4 py-3 border border-gray-700 rounded-lg text-gray-200 hover:bg-gray-800 transition">Download CV</a>
              </div>
            </form>
          </div>
        </div>

        <!-- CONTACT INFO -->
        <aside class="lg:col-span-5" data-aos="fade-left">
          <div class="p-6 rounded-2xl bg-gradient-to-br from-gray-900/40 to-black/40 shadow-soft">
            <h4 class="font-semibold text-lg">Informasi Kontak</h4>
            <p class="mt-3 text-gray-300">Prefer email untuk brief / proposal. Bisa juga DM via sosial media untuk quick chat.</p>

            <div class="mt-6 space-y-4 text-sm text-gray-300">
              <div>
                <div class="text-xs text-gray-400">Email</div>
                <div class="mt-1">hakim@example.com</div>
              </div>

              <div>
                <div class="text-xs text-gray-400">Lokasi</div>
                <div class="mt-1">Indonesia (tersedia remote)</div>
              </div>

              <div>
                <div class="text-xs text-gray-400">Ketersediaan</div>
                <div class="mt-1">Freelance & kontrak — cek DM untuk slot</div>
              </div>
            </div>

            <hr class="my-5 border-gray-800">

            <div>
              <h5 class="font-semibold text-sm text-gray-300">Sosial</h5>
              <div class="mt-3 flex items-center gap-3">
                <a href="#" class="flex items-center gap-2 px-3 py-2 rounded-md bg-gray-800/40 hover:bg-gray-800 transition">
                  <svg class="w-4 h-4 text-rose-400" viewBox="0 0 24 24" fill="currentColor"><path d="M22 2.01L2 2v20l20-.01V2.01zM7.75 20H4v-7h3.75V20zM6 9.5a2.25 2.25 0 11.001-4.5A2.25 2.25 0 016 9.5zM20 20h-3.75v-3.5c0-.83-.02-1.9-1.16-1.9-1.16 0-1.34.9-1.34 1.84V20H9.5v-7H13v1.04h.05c.48-.9 1.65-1.84 3.4-1.84 3.63 0 4.55 2.4 4.55 5.52V20z"/></svg>
                  <span class="text-xs">LinkedIn</span>
                </a>

                <a href="#" class="flex items-center gap-2 px-3 py-2 rounded-md bg-gray-800/40 hover:bg-gray-800 transition">
                  <svg class="w-4 h-4 text-rose-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 3.58 8 8 8 4.42 0 8-3.58 8-8 0-5.52-4.48-10-8-10z"/></svg>
                  <span class="text-xs">Instagram</span>
                </a>

                <a href="#" class="flex items-center gap-2 px-3 py-2 rounded-md bg-gray-800/40 hover:bg-gray-800 transition">
                  <svg class="w-4 h-4 text-rose-400" viewBox="0 0 24 24" fill="currentColor"><path d="M21 3H3v18l6-3 6 3 6-3V3z"/></svg>
                  <span class="text-xs">Behance</span>
                </a>
              </div>
            </div>

            <div class="mt-6 text-sm text-gray-400">
              <div><strong>Waktu respons</strong></div>
              <div class="mt-1">Biasanya 24–48 jam untuk pesan biasa.</div>
            </div>
          </div>
        </aside>

      </div>
    </div>
  </div>
</section>
@endsection
