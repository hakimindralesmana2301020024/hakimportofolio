@extends('layouts.app')
@section('title', $project->title)
@section('content')
<article>
<h1 class="text-3xl font-bold">{{ $project->title }}</h1>
<p class="mt-2 text-sm">{{ $project->excerpt }}</p>
<div class="mt-4">{!! nl2br(e($project->body)) !!}</div>
<div class="mt-6">
@if($project->demo_url)<a href="{{ $project->demo_url }}" target="_blank">Live Demo</a>@endif
@if($project->repo_url)<a href="{{ $project->repo_url }}" target="_blank" class="ml-4">GitHub</a>@endif
</div>
</article>
@endsection