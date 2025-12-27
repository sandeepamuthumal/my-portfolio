@extends('admin.layouts.admin')

@section('title', 'Projects Management')

@push('styles')
    <style>
        .project-item {
            cursor: move;
            transition: all 0.3s;
        }

        .project-item:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .project-item.sortable-ghost {
            opacity: 0.4;
        }

        .drag-handle {
            cursor: grab;
            padding: 10px;
            color: #6c757d;
        }

        .drag-handle:active {
            cursor: grabbing;
        }

        .project-thumbnail {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
        }

        .badge-order {
            font-size: 16px;
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
        }
    </style>
@endpush

@section('content')
    <div class="container-fluid">
        <!-- Action Bar -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus me-2"></i>Add New Project
                        </a>
                        <button class="btn btn-success" id="saveOrderBtn" style="display: none;">
                            <i class="fas fa-save me-2"></i>Save Order
                        </button>
                    </div>
                    <div class="col-md-6">
                        <form method="GET" action="{{ route('admin.projects.index') }}">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                                <input type="text" class="form-control" name="search" placeholder="Search projects..."
                                    value="{{ request('search') }}">
                                <select class="form-select" style="max-width: 180px;" name="type">
                                    <option value="">All Types</option>
                                    <option value="personal" {{ request('type') == 'personal' ? 'selected' : '' }}>Personal
                                    </option>
                                    <option value="company" {{ request('type') == 'company' ? 'selected' : '' }}>Company
                                    </option>
                                </select>
                                <select class="form-select" style="max-width: 180px;" name="status">
                                    <option value="">All Status</option>
                                    <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>
                                        Completed</option>
                                    <option value="ongoing" {{ request('status') == 'ongoing' ? 'selected' : '' }}>Ongoing
                                    </option>
                                    <option value="modifying" {{ request('status') == 'modifying' ? 'selected' : '' }}>
                                        Modifying</option>
                                </select>
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Projects List -->
        <div class="card">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">
                    <i class="fas fa-list me-2"></i>All Projects
                    <span class="badge bg-primary ms-2">{{ $projects->total() }}</span>
                </h5>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="reorderMode">
                    <label class="form-check-label" for="reorderMode">
                        <i class="fas fa-sort me-1"></i>Reorder Mode
                    </label>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th width="50">#</th>
                                <th>Project</th>
                                <th width="120">Type</th>
                                <th width="120">Status</th>
                                <th width="150">Links</th>
                                <th width="180">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="projectsList">
                            @forelse($projects as $project)
                                <tr class="project-item" data-id="{{ $project->id }}">
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="drag-handle d-none"><i class="fas fa-grip-vertical"></i></span>
                                            <span class="badge badge-order bg-primary">{{ $project->order }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <strong class="d-block">{{ $project->title }}</strong>
                                        <small class="text-muted">{{ $project->subtitle }}</small>
                                    </td>
                                    <td>
                                        @if ($project->project_type == 'personal')
                                            <span class="badge bg-info">Personal</span>
                                        @else
                                            <span class="badge bg-warning text-dark">Company</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($project->status == 'completed')
                                            <span class="badge bg-success">Completed</span>
                                        @elseif($project->status == 'ongoing')
                                            <span class="badge bg-warning text-dark">Ongoing</span>
                                        @else
                                            <span class="badge bg-secondary">Modifying</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            @if ($project->live_link)
                                                <a href="{{ $project->live_link }}" target="_blank"
                                                    class="btn btn-outline-primary" title="Live Site">
                                                    <i class="fas fa-external-link-alt"></i>
                                                </a>
                                            @endif
                                            @if ($project->github_link)
                                                <a href="{{ $project->github_link }}" target="_blank"
                                                    class="btn btn-outline-dark" title="GitHub">
                                                    <i class="fab fa-github"></i>
                                                </a>
                                            @endif
                                            @if ($project->video_link)
                                                <a href="{{ $project->video_link }}" target="_blank"
                                                    class="btn btn-outline-danger" title="Video">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('admin.projects.edit', $project) }}"
                                                class="btn btn-outline-primary" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button class="btn btn-outline-danger"
                                                onclick="deleteProject({{ $project->id }})" title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center py-5">
                                        <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                                        <p class="text-muted">No projects found. <a
                                                href="{{ route('admin.projects.create') }}">Create your first project</a>
                                        </p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            @if ($projects->hasPages())
                <div class="card-footer bg-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">Showing {{ $projects->firstItem() }} to {{ $projects->lastItem() }} of
                            {{ $projects->total() }} projects</small>
                        {{ $projects->links() }}
                    </div>
                </div>
            @endif
        </div>

        <form id="deleteForm" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    </div>
@endsection


@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
    <script>
        let sortable = null;

        document.getElementById('reorderMode').addEventListener('change', function() {
            const dragHandles = document.querySelectorAll('.drag-handle');
            const tbody = document.getElementById('projectsList');
            const saveBtn = document.getElementById('saveOrderBtn');

            if (this.checked) {
                dragHandles.forEach(handle => handle.classList.remove('d-none'));
                saveBtn.style.display = 'inline-block';

                sortable = Sortable.create(tbody, {
                    animation: 150,
                    handle: '.drag-handle',
                    ghostClass: 'sortable-ghost',
                    onEnd: function(evt) {
                        updateOrderNumbers();
                    }
                });
            } else {
                dragHandles.forEach(handle => handle.classList.add('d-none'));
                saveBtn.style.display = 'none';
                if (sortable) {
                    sortable.destroy();
                    sortable = null;
                }
            }
        });

        function updateOrderNumbers() {
            const rows = document.querySelectorAll('.project-item');
            rows.forEach((row, index) => {
                const badge = row.querySelector('.badge-order');
                badge.textContent = index + 1;
            });
        }

        document.getElementById('saveOrderBtn').addEventListener('click', function() {
            const rows = document.querySelectorAll('.project-item');
            const orders = [];

            rows.forEach((row, index) => {
                orders.push({
                    id: parseInt(row.dataset.id),
                    order: index + 1
                });
            });

            fetch('{{ route('admin.projects.reorder') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        orders: orders
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Order saved successfully!');
                        location.reload();
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error saving order');
                });
        });

        function deleteProject(id) {
            if (confirm('Are you sure you want to delete this project?')) {
                const form = document.getElementById('deleteForm');
                form.action = '/admin/projects/' + id;
                form.submit();
            }
        }
    </script>
@endpush
