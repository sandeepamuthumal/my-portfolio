@extends('admin.layouts.admin')

@section('title')
    Admin Dashboard
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Admin Dashboard</h2>
                    <p class="mb-0 text-title-gray">Welcome back! Let’s start from where you left.</p>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid general-widget">
        <div class="row mb-4">
            <div class="col-md-3 mb-3">
                <div class="card"
                    style="border: none; border-radius: 10px; padding: 25px; box-shadow: 0 2px 10px rgba(0,0,0,0.08);">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-1">Total Projects</h6>
                            <h2 class="mb-0">{{ $stats['total_projects'] }}</h2>
                        </div>
                        <div
                            style="width: 60px; height: 60px; border-radius: 10px; background: rgba(13, 110, 253, 0.1); display: flex; align-items: center; justify-content: center; font-size: 24px; color: #0d6efd;">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card"
                    style="border: none; border-radius: 10px; padding: 25px; box-shadow: 0 2px 10px rgba(0,0,0,0.08);">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-1">Personal</h6>
                            <h2 class="mb-0">{{ $stats['personal_projects'] }}</h2>
                        </div>
                        <div
                            style="width: 60px; height: 60px; border-radius: 10px; background: rgba(25, 135, 84, 0.1); display: flex; align-items: center; justify-content: center; font-size: 24px; color: #198754;">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card"
                    style="border: none; border-radius: 10px; padding: 25px; box-shadow: 0 2px 10px rgba(0,0,0,0.08);">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-1">Company</h6>
                            <h2 class="mb-0">{{ $stats['company_projects'] }}</h2>
                        </div>
                        <div
                            style="width: 60px; height: 60px; border-radius: 10px; background: rgba(255, 193, 7, 0.1); display: flex; align-items: center; justify-content: center; font-size: 24px; color: #ffc107;">
                            <i class="fas fa-building"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card"
                    style="border: none; border-radius: 10px; padding: 25px; box-shadow: 0 2px 10px rgba(0,0,0,0.08);">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-1">Live Projects</h6>
                            <h2 class="mb-0">{{ $stats['live_projects'] }}</h2>
                        </div>
                        <div
                            style="width: 60px; height: 60px; border-radius: 10px; background: rgba(13, 202, 240, 0.1); display: flex; align-items: center; justify-content: center; font-size: 24px; color: #0dcaf0;">
                            <i class="fas fa-check-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Quick Actions</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex gap-3 flex-wrap">
                            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus me-2"></i>Add New Project
                            </a>
                            <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-primary">
                                <i class="fas fa-list me-2"></i>View All Projects
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Recent Projects</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush">
                            @forelse($recent_projects as $project)
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>{{ $project->title }}</strong>
                                        <br><small class="text-muted">{{ ucfirst($project->project_type) }} Project</small>
                                    </div>
                                    <div class="d-flex gap-2 align-items-center">
                                        @if ($project->status == 'completed')
                                            <span class="badge bg-success">Completed</span>
                                        @elseif($project->status == 'ongoing')
                                            <span class="badge bg-warning text-dark">Ongoing</span>
                                        @else
                                            <span class="badge bg-secondary">Modifying</span>
                                        @endif
                                        <a href="{{ route('admin.projects.edit', $project) }}"
                                            class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center py-4 text-muted">
                                    <i class="fas fa-inbox fa-3x mb-3"></i>
                                    <p>No projects yet. Create your first project!</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
