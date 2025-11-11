@extends('layouts.app')
@section('title','Contact')
@section('content')
<h1 class="text-2xl font-bold">Hubungi Saya</h1>


@if(session('success'))
<div class="mt-4 text-green-600">{{ session('success') }}</div>
@endif


<form action="{{ route('contact.send') }}" method="POST" class="mt-6 space-y-4">
@csrf
<div>
<label>Nama</label>
<input type="text" name="name" required class="w-full">
</div>
<div>
<label>Email</label>
<input type="email" name="email" required class="w-full">
</div>
<div>
<label>Pesan</label>
<textarea name="message" rows="6" required class="w-full"></textarea>
</div>
<div>
<button type="submit" class="btn">Kirim</button>
</div>
</form>
@endsection