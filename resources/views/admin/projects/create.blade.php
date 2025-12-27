@extends('admin.layouts.admin')

@section('title', 'Create New Project')

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

        .image-preview-placeholder {
            text-align: center;
            color: #6c757d;
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
    <div class="container-fluid">
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" id="projectForm">
            @csrf

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
                                <label class="form-label fw-semibold">Project Title <span
                                        class="text-danger">*</span></label>
                                <input type="text"
                                    class="form-control form-control-lg @error('title') is-invalid @enderror" name="title"
                                    value="{{ old('title') }}" placeholder="e.g., CrickBash" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Subtitle <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('subtitle') is-invalid @enderror"
                                    name="subtitle" value="{{ old('subtitle') }}"
                                    placeholder="e.g., Cricket Information Platform" required>
                                @error('subtitle')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold">Project Type <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select @error('project_type') is-invalid @enderror"
                                        name="project_type" required>
                                        <option value="">Select Type</option>
                                        <option value="personal" {{ old('project_type') == 'personal' ? 'selected' : '' }}>
                                            Personal Project</option>
                                        <option value="company" {{ old('project_type') == 'company' ? 'selected' : '' }}>
                                            Company Project</option>
                                    </select>
                                    @error('project_type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold">Status <span class="text-danger">*</span></label>
                                    <select class="form-select @error('status') is-invalid @enderror" name="status"
                                        required>
                                        <option value="">Select Status</option>
                                        <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>
                                            Completed</option>
                                        <option value="ongoing" {{ old('status') == 'ongoing' ? 'selected' : '' }}>Ongoing
                                        </option>
                                        <option value="modifying" {{ old('status') == 'modifying' ? 'selected' : '' }}>
                                            Modifying</option>
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
                            <textarea id="editor" name="description" class="@error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">Write a detailed description of your project</small>
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
                                    name="live_link" value="{{ old('live_link') }}" placeholder="https://example.com">
                                @error('live_link')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    <i class="fab fa-github me-2"></i>GitHub Link
                                </label>
                                <input type="url" class="form-control @error('github_link') is-invalid @enderror"
                                    name="github_link" value="{{ old('github_link') }}"
                                    placeholder="https://github.com/username/project">
                                @error('github_link')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    <i class="fab fa-youtube me-2"></i>Video Link (YouTube)
                                </label>
                                <input type="url" class="form-control @error('video_link') is-invalid @enderror"
                                    name="video_link" value="{{ old('video_link') }}"
                                    placeholder="https://www.youtube.com/watch?v=...">
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
                            <label class="form-label fw-semibold">Main Project Image <span
                                    class="text-danger">*</span></label>
                            <div class="image-preview mb-3" id="primaryImagePreview">
                                <div class="image-preview-placeholder">
                                    <i class="fas fa-cloud-upload-alt fa-3x mb-2"></i>
                                    <p class="mb-0">Upload Primary Image</p>
                                    <small class="text-muted">Recommended: 800x600px</small>
                                </div>
                            </div>
                            <input type="file" class="form-control @error('primary_image') is-invalid @enderror"
                                name="primary_image" accept="image/*" id="primaryImageInput" required>
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
                            <label class="form-label fw-semibold">Additional Images</label>
                            <input type="file" class="form-control @error('secondary_images.*') is-invalid @enderror"
                                name="secondary_images[]" accept="image/*" id="secondaryImagesInput" multiple>
                            <small class="text-muted d-block mb-2">You can upload multiple images</small>
                            @error('secondary_images.*')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
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
                            <input type="text" class="form-control @error('technologies') is-invalid @enderror"
                                name="technologies" value="{{ old('technologies') }}"
                                placeholder="Laravel, React, MySQL">
                            <small class="text-muted">Comma-separated</small>
                            @error('technologies')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="card">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary w-100 mb-2">
                                <i class="fas fa-save me-2"></i>Save Project
                            </button>
                            <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-danger w-100">
                                <i class="fas fa-times me-2"></i>Cancel
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
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

            Array.from(files).forEach((file, index) => {
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
    </script>
@endpush
