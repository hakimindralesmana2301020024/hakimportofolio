@extends('layouts.app')

@section('title', 'Tambah Proyek')

@section('content')
<div class="container mx-auto px-6 lg:px-8 py-8">
    <h1 class="text-2xl font-bold mb-6">Tambah Proyek</h1>

    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
            <input type="text" name="title" id="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>

        <div class="mb-4">
            <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
            <input type="text" name="slug" id="slug" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>

        <div class="mb-4">
            <label for="excerpt" class="block text-sm font-medium text-gray-700">Deskripsi Singkat</label>
            <textarea name="excerpt" id="excerpt" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required></textarea>
        </div>

        <div class="mb-4">
            <label for="body" class="block text-sm font-medium text-gray-700">Isi</label>
            <textarea name="body" id="body" rows="6" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required></textarea>
        </div>

        <div class="mb-4">
            <label for="thumbnail" class="block text-sm font-medium text-gray-700">Thumbnail</label>
            <input type="file" name="thumbnail" id="thumbnail" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="mb-4">
            <label for="stack" class="block text-sm font-medium text-gray-700">Teknologi</label>
            <input type="text" name="stack" id="stack" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="mb-4">
            <label for="demo_url" class="block text-sm font-medium text-gray-700">Demo URL</label>
            <input type="url" name="demo_url" id="demo_url" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="mb-4">
            <label for="repo_url" class="block text-sm font-medium text-gray-700">Repo URL</label>
            <input type="url" name="repo_url" id="repo_url" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="mb-4">
            <label for="published_at" class="block text-sm font-medium text-gray-700">Tanggal Publikasi</label>
            <input type="date" name="published_at" id="published_at" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Simpan</button>
        </div>
    </form>
</div>
@endsection