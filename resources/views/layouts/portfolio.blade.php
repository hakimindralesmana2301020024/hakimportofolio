@extends('layouts.app')
@section('title','Portfolio')
@section('content')
<h1 class="text-3xl font-bold">Portfolio</h1>
<div class="grid grid-cols-3 gap-6 mt-6">
@foreach($projects as $project)
<div class="card">
<img src="{{ asset($project->thumbnail ?: 'assets/images/default.png') }}" alt="{{ $project->title }}">
<h3 class="mt-2"><a href="{{ route('portfolio.show', $project->slug) }}">{{ $project->title }}</a></h3>
<p class="text-sm">{{ $project->excerpt }}</p>
</div>
@endforeach
</div>
<div class="mt-6">{{ $projects->links() }}</div>
@endsection