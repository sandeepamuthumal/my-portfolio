<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $stats = [
            'total_projects' => Project::count(),
            'personal_projects' => Project::where('project_type', 'personal')->count(),
            'company_projects' => Project::where('project_type', 'company')->count(),
            'live_projects' => Project::where('status', 'completed')->count(),
        ];

        $recent_projects = Project::with('images')
            ->latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact('stats', 'recent_projects'));
    }
}
