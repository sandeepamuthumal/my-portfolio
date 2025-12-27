@extends('admin.layouts.admin')

@section('title', 'Edit Project')

@push('styles')
    <style>
        .image-preview {
            width: 100%;
            max-width: 300px;
            height: 200px;
            border: 2px dashed #dee2e6;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
            background: #f8f9fa;
        }

        .image-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .secondary-images-preview {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .secondary-image-item {
            position: relative;
            width: 120px;
            height: 120px;
            border: 2px solid #dee2e6;
            border-radius: 8px;
            overflow: hidden;
        }

        .secondary-image-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .remove-image {
            position: absolute;
            top: 5px;
            right: 5px;
            background: rgba(220, 53, 69, 0.9);
            color: white;
            border: none;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .ck-editor__editable {
            min-height: 400px;
        }
    </style>
@endpush

@section('content')
    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data" id="projectForm">
        @csrf
        @method('PUT')

        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-8">
                <!-- Basic Information -->
                <div class="card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0"><i class="fas fa-info-circle me-2"></i>Basic Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Project Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg @error('title') is-invalid @enderror"
                                name="title" value="{{ old('title', $project->title) }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Subtitle <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('subtitle') is-invalid @enderror"
                                name="subtitle" value="{{ old('subtitle', $project->subtitle) }}" required>
                            @error('subtitle')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Project Type <span
                                        class="text-danger">*</span></label>
                                <select class="form-select @error('project_type') is-invalid @enderror" name="project_type"
                                    required>
                                    <option value="">Select Type</option>
                                    <option value="personal"
                                        {{ old('project_type', $project->project_type) == 'personal' ? 'selected' : '' }}>
                                        Personal Project</option>
                                    <option value="company"
                                        {{ old('project_type', $project->project_type) == 'company' ? 'selected' : '' }}>
                                        Company Project</option>
                                </select>
                                @error('project_type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Status <span class="text-danger">*</span></label>
                                <select class="form-select @error('status') is-invalid @enderror" name="status" required>
                                    <option value="">Select Status</option>
                                    <option value="completed"
                                        {{ old('status', $project->status) == 'completed' ? 'selected' : '' }}>Completed
                                    </option>
                                    <option value="ongoing"
                                        {{ old('status', $project->status) == 'ongoing' ? 'selected' : '' }}>Ongoing
                                    </option>
                                    <option value="modifying"
                                        {{ old('status', $project->status) == 'modifying' ? 'selected' : '' }}>Modifying
                                    </option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Description -->
                <div class="card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0"><i class="fas fa-file-alt me-2"></i>Project Description</h5>
                    </div>
                    <div class="card-body">
                        <label class="form-label fw-semibold">Description <span class="text-danger">*</span></label>
                        <textarea id="editor" name="description" class="@error('description') is-invalid @enderror">{{ old('description', $project->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Links -->
                <div class="card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0"><i class="fas fa-link me-2"></i>Project Links</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="fas fa-external-link-alt me-2"></i>Live Link
                            </label>
                            <input type="url" class="form-control @error('live_link') is-invalid @enderror"
                                name="live_link" value="{{ old('live_link', $project->live_link) }}">
                            @error('live_link')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="fab fa-github me-2"></i>GitHub Link
                            </label>
                            <input type="url" class="form-control @error('github_link') is-invalid @enderror"
                                name="github_link" value="{{ old('github_link', $project->github_link) }}">
                            @error('github_link')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="fab fa-youtube me-2"></i>Video Link
                            </label>
                            <input type="url" class="form-control @error('video_link') is-invalid @enderror"
                                name="video_link" value="{{ old('video_link', $project->video_link) }}">
                            @error('video_link')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-4">
                <!-- Primary Image -->
                <div class="card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0"><i class="fas fa-image me-2"></i>Primary Image</h5>
                    </div>
                    <div class="card-body">
                        <label class="form-label fw-semibold">Main Project Image</label>
                        <div class="image-preview mb-3" id="primaryImagePreview">
                            <img src="{{ asset($project->primary_image) }}" alt="Current">
                        </div>
                        <input type="file" class="form-control @error('primary_image') is-invalid @enderror"
                            name="primary_image" accept="image/*" id="primaryImageInput">
                        <small class="text-muted">Leave empty to keep current image</small>
                        @error('primary_image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Secondary Images -->
                <div class="card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0"><i class="fas fa-images me-2"></i>Secondary Images</h5>
                    </div>
                    <div class="card-body">
                        <label class="form-label fw-semibold">Existing Images</label>
                        <div class="secondary-images-preview mb-3" id="existingImages">
                            @foreach ($project->images as $image)
                                <div class="secondary-image-item" data-image-id="{{ $image->id }}">
                                    <img src="{{ asset($image->image_path) }}">
                                    <button type="button" class="remove-image"
                                        onclick="removeExistingImage({{ $image->id }})">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            @endforeach
                        </div>

                        <label class="form-label fw-semibold">Add More Images</label>
                        <input type="file" class="form-control" name="secondary_images[]" accept="image/*"
                            id="secondaryImagesInput" multiple>
                        <div class="secondary-images-preview" id="secondaryImagesPreview"></div>
                    </div>
                </div>

                <!-- Technologies -->
                <div class="card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0"><i class="fas fa-code me-2"></i>Technologies</h5>
                    </div>
                    <div class="card-body">
                        <label class="form-label fw-semibold">Tech Stack</label>
                        <input type="text" class="form-control" name="technologies"
                            value="{{ old('technologies', $project->technologies) }}">
                        <small class="text-muted">Comma-separated</small>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="card">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary w-100 mb-2">
                            <i class="fas fa-save me-2"></i>Update Project
                        </button>
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-secondary w-100 mb-2">
                            <i class="fas fa-arrow-left me-2"></i>Back to List
                        </a>
                        <button type="button" class="btn btn-outline-danger w-100" onclick="deleteProject()">
                            <i class="fas fa-trash me-2"></i>Delete Project
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Hidden inputs for removed images -->
    <div id="removeImagesContainer"></div>

    <!-- Delete Form -->
    <form id="deleteForm" action="{{ route('admin.projects.destroy', $project) }}" method="POST"
        style="display: none;">
        @csrf
        @method('DELETE')
    </form>
@endsection


@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
    <script>
        // Initialize CKEditor
        let editor;
        ClassicEditor.create(document.querySelector('#editor'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'underline', '|', 'link', 'bulletedList', 'numberedList',
                '|', 'outdent', 'indent', '|', 'blockQuote', 'insertTable', '|', 'undo', 'redo'
            ]
        }).then(newEditor => {
            editor = newEditor;
        });

        // Primary Image Preview
        document.getElementById('primaryImageInput').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('primaryImagePreview').innerHTML = `<img src="${e.target.result}">`;
                }
                reader.readAsDataURL(file);
            }
        });

        // Secondary Images Preview
        document.getElementById('secondaryImagesInput').addEventListener('change', function(e) {
            const files = e.target.files;
            const preview = document.getElementById('secondaryImagesPreview');
            preview.innerHTML = '';

            Array.from(files).forEach((file) => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const div = document.createElement('div');
                    div.className = 'secondary-image-item';
                    div.innerHTML = `<img src="${e.target.result}">`;
                    preview.appendChild(div);
                }
                reader.readAsDataURL(file);
            });
        });

        // Remove existing image
        function removeExistingImage(imageId) {
            if (confirm('Remove this image?')) {
                // Add hidden input to mark for deletion
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'remove_images[]';
                input.value = imageId;
                document.getElementById('removeImagesContainer').appendChild(input);

                // Remove from display
                document.querySelector(`[data-image-id="${imageId}"]`).remove();
            }
        }

        // Delete project
        function deleteProject() {
            if (confirm('Are you sure you want to delete this project? This action cannot be undone.')) {
                document.getElementById('deleteForm').submit();
            }
        }
    </script>
@endpush
