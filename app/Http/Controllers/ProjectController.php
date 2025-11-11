<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema; // <-- PENTING: harus di sini, di atas, bukan di dalam class

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        // Jika tabel projects tersedia gunakan Eloquent, jika tidak gunakan dummy data agar halaman tetap tampil
        if (Schema::hasTable('projects') && class_exists(\App\Models\Project::class)) {
            $query = \App\Models\Project::query()->orderBy('published_at', 'desc');

            if ($request->filled('category')) {
                $query->where('category', $request->category);
            }

            $projects = $query->get();
        } else {
            // Dummy data sementara agar halaman tidak error saat tabel belum dibuat
            $projects = collect([
                ['id'=>1,'title'=>'Brand Poster A','category'=>'branding','thumb'=>'assets/images/works/work-1.jpg','year'=>'2025','slug'=>'brand-poster-a'],
                ['id'=>2,'title'=>'Portrait Shoot','category'=>'photo','thumb'=>'assets/images/works/work-2.jpg','year'=>'2024','slug'=>'portrait-shoot'],
                ['id'=>3,'title'=>'Promo Video','category'=>'video','thumb'=>'assets/images/works/work-3.jpg','year'=>'2025','slug'=>'promo-video'],
                ['id'=>4,'title'=>'Brand Identity B','category'=>'branding','thumb'=>'assets/images/works/work-4.jpg','year'=>'2024','slug'=>'brand-identity-b'],
                ['id'=>5,'title'=>'Event Photography','category'=>'photo','thumb'=>'assets/images/works/work-5.jpg','year'=>'2023','slug'=>'event-photography'],
                ['id'=>6,'title'=>'Short Film','category'=>'video','thumb'=>'assets/images/works/work-6.jpg','year'=>'2025','slug'=>'short-film'],
            ]);

            if ($request->filled('category')) {
                $projects = $projects->where('category', $request->category)->values();
            }
        }

        $categories = ['all' => 'All', 'branding' => 'Branding', 'photo' => 'Photo', 'video' => 'Video'];

        return view('portfolio', compact('projects', 'categories'));
    }

    public function show($slug)
    {
        // Jika menggunakan DB (Eloquent)
        if (class_exists(\App\Models\Project::class) && Schema::hasTable('projects')) {
            $project = \App\Models\Project::where('slug', $slug)->firstOrFail();
            return view('project-detail', compact('project'));
        }

        // Dummy detail project jika belum ada DB
        $dummy = (object)[
            'title' => 'Contoh Project',
            'category' => 'branding',
            'year' => '2025',
            'excerpt' => 'Deskripsi singkat proyek contoh.',
            'problem' => 'Problem statement.',
            'solution' => 'Solusi yang diterapkan.',
            'result' => 'Hasil yang dicapai.',
            'role' => 'Designer, Photographer',
            'tools' => 'Figma, Photoshop',
            'images' => [
                'assets/images/works/work-1.jpg',
                'assets/images/works/work-1b.jpg',
            ],
            'video' => ''
        ];

        return view('project-detail', ['project' => $dummy]);
    }
}
