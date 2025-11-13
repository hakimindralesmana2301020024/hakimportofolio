<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.dashboard', compact('projects'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:projects',
            'excerpt' => 'required|string',
            'body' => 'required|string',
            'thumbnail' => 'nullable|image',
            'stack' => 'nullable|string',
            'demo_url' => 'nullable|url',
            'repo_url' => 'nullable|url',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
        }

        Project::create($data);

        return redirect()->route('admin.dashboard')->with('success', 'Proyek berhasil ditambahkan.');
    }

    public function edit(Project $project)
    {
        return view('admin.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:projects,slug,' . $project->id,
            'excerpt' => 'required|string',
            'body' => 'required|string',
            'thumbnail' => 'nullable|image',
            'stack' => 'nullable|string',
            'demo_url' => 'nullable|url',
            'repo_url' => 'nullable|url',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
        }

        $project->update($data);

        return redirect()->route('admin.dashboard')->with('success', 'Proyek berhasil diperbarui.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Proyek berhasil dihapus.');
    }
}