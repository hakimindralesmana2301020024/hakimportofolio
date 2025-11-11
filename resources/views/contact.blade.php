@extends('layouts.app')

@section('title','Contact')

@section('content')
  <div class="min-h-screen flex items-center justify-center py-20 bg-gray-900 text-white">
    <div class="w-full max-w-2xl bg-gray-800/60 p-8 rounded-xl shadow-lg">
      <h1 class="text-2xl font-bold">Hubungi Saya</h1>

      @if(session('success'))
        <div class="mt-4 p-3 bg-green-600/20 text-green-300 rounded">{{ session('success') }}</div>
      @endif

      <form action="{{ route('contact.send') }}" method="POST" class="mt-6 space-y-4">
        @csrf
        <div>
          <label class="block text-sm text-gray-300">Nama</label>
          <input type="text" name="name" required class="w-full mt-1 px-3 py-2 rounded bg-gray-700 text-white">
        </div>
        <div>
          <label class="block text-sm text-gray-300">Email</label>
          <input type="email" name="email" required class="w-full mt-1 px-3 py-2 rounded bg-gray-700 text-white">
        </div>
        <div>
          <label class="block text-sm text-gray-300">Pesan</label>
          <textarea name="message" rows="6" required class="w-full mt-1 px-3 py-2 rounded bg-gray-700 text-white"></textarea>
        </div>
        <div class="pt-2">
          <button type="submit" class="px-5 py-3 bg-rose-500 rounded hover:bg-rose-600">Kirim</button>
        </div>
      </form>
    </div>
  </div>
@endsection
