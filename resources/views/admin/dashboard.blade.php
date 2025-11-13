@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container mx-auto px-6 lg:px-8 py-8">
    <h1 class="text-2xl font-bold mb-6">Dashboard Admin</h1>

    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded">Tambah Proyek</a>

    <div class="mt-6">
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Judul</th>
                    <th class="border border-gray-300 px-4 py-2">Slug</th>
                    <th class="border border-gray-300 px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $project->title }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $project->slug }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="{{ route('admin.edit', $project) }}" class="text-blue-500">Edit</a>
                            <form action="{{ route('admin.destroy', $project) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 ml-2">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection