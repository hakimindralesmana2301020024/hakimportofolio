<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; // Import model Project

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::all(); // Ambil semua data proyek dari database
        return view('home', compact('projects')); // Kirim data ke view
    }
}
