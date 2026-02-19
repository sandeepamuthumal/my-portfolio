<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title }} - Sandeepa Muthumal</title>
    <meta name="description" content="{{ $project->subtitle }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <style>
        /* Image Gallery Styles */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            cursor: pointer;
            aspect-ratio: 4/3;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        /* Lightbox */
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.95);
            z-index: 9999;
            align-items: center;
            justify-content: center;
        }

        .lightbox.active {
            display: flex;
        }

        .lightbox img {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: white;
            font-size: 24px;
            transition: all 0.3s;
        }

        .lightbox-close:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .project-description ul {
            list-style: disc;
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <!-- Animated Background -->
    <div class="animated-bg"></div>

    <!-- Scroll to Top Button -->
    <div class="scroll-to-top" id="scrollToTop">
        <i class="fas fa-arrow-up text-white text-xl"></i>
    </div>

     <!-- Navigation -->
    <nav class="fixed w-full top-0 z-50 px-6 py-4 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="font-bold text-xl">
                <span class="gradient-text font-mono text-2xl">&lt;SM /&gt;</span>
            </div>
            <div class="hidden md:flex space-x-8 font-medium">
                <a href="{{ route('home') }}#home" class="hover:text-blue-400 transition-all duration-300">Home</a>
                <a href="{{ route('home') }}#about" class="hover:text-blue-400 transition-all duration-300">About</a>
                <a href="{{ route('home') }}#skills" class="hover:text-blue-400 transition-all duration-300">Skills</a>
                <a href="{{ route('projects.all') }}" class="text-blue-400">Projects</a>
                <a href="{{ route('home') }}#experience" class="hover:text-blue-400 transition-all duration-300">Experience</a>
                <a href="{{ route('home') }}#contact" class="hover:text-blue-400 transition-all duration-300">Contact</a>
            </div>
            <button class="md:hidden text-2xl" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div class="hidden md:hidden mt-4 glass rounded-lg p-4" id="mobileMenu">
            <div class="flex flex-col space-y-3 font-medium">
                <a href="{{ route('home') }}#home" class="hover:text-blue-400 transition">Home</a>
                <a href="{{ route('home') }}#about" class="hover:text-blue-400 transition">About</a>
                <a href="{{ route('home') }}#skills" class="hover:text-blue-400 transition">Skills</a>
                <a href="{{ route('projects.all') }}" class="hover:text-blue-400 transition">Projects</a>
                <a href="{{ route('home') }}#experience" class="hover:text-blue-400 transition">Experience</a>
                <a href="{{ route('home') }}#contact" class="hover:text-blue-400 transition">Contact</a>
            </div>
        </div>
    </nav>

    @php
        $statusMap = [
            'completed' => ['class' => 'status-completed', 'label' => 'Completed', 'icon' => 'fa-check-circle'],
            'ongoing' => ['class' => 'status-ongoing', 'label' => 'Ongoing', 'icon' => 'fa-spinner'],
            'modifying' => ['class' => 'status-modifying', 'label' => 'Modifying', 'icon' => 'fa-wrench'],
        ];
    @endphp

    <!-- Project Header -->
    <section class="pt-32 pb-12 px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Back Button -->
            <div class="mb-8" data-aos="fade-right">
                <a href="{{ route('projects.all') }}" class="inline-flex items-center gap-2 text-blue-400 hover:text-blue-300 transition">
                    <i class="fas fa-arrow-left"></i>
                    <span>Back to Projects</span>
                </a>
            </div>

            <!-- Title Section -->
            <div class="glass-card rounded-2xl p-8 md:p-12 mb-8" data-aos="fade-up">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-6">
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="status-badge {{ $statusMap[$project->status]['class'] }}">
                                <i class="fas {{ $statusMap[$project->status]['icon'] }}"></i>
                                {{ $statusMap[$project->status]['label'] }}
                            </span>
                            <span class="text-slate-400 text-sm">
                                <i class="fas {{ $project->project_type == 'personal' ? 'fa-user' : 'fa-building' }} mr-1"></i>
                                {{ ucfirst($project->project_type) }} Project
                            </span>
                        </div>

                        <h1 class="text-4xl md:text-5xl font-bold mb-3">
                            {{ $project->title }}
                        </h1>

                        <p class="text-xl text-slate-300">
                            {{ $project->subtitle }}
                        </p>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap gap-3">
                        @if($project->live_link)
                            <a href="{{ $project->live_link }}" target="_blank" class="neon-button text-white">
                                <i class="fas fa-external-link-alt mr-2"></i>Live Demo
                            </a>
                        @endif

                        @if($project->github_link)
                            <a href="{{ $project->github_link }}" target="_blank" class="glass px-6 py-3 rounded-lg font-semibold hover:bg-slate-800 transition">
                                <i class="fab fa-github mr-2"></i>View Code
                            </a>
                        @endif

                        @if($project->video_link)
                            <a href="{{ $project->video_link }}" target="_blank" class="glass px-6 py-3 rounded-lg font-semibold hover:bg-slate-800 transition">
                                <i class="fab fa-youtube mr-2"></i>Watch Demo
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Technologies -->
                <div>
                    <h3 class="text-white font-semibold mb-3 flex items-center gap-2">
                        <i class="fas fa-code text-blue-400"></i>
                        Technologies Used
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach(explode(',', $project->technologies) as $tech)
                            <span class="bg-blue-500/20 text-blue-300 px-4 py-2 rounded-lg text-sm font-mono">
                                {{ trim($tech) }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Main Image -->
            <div class="mb-8" data-aos="zoom-in">
                <div class="glass-card rounded-2xl overflow-hidden">
                    <img src="{{ asset($project->primary_image) }}"
                         alt="{{ $project->title }}"
                         class="w-full h-auto cursor-pointer hover:scale-105 transition-transform duration-500"
                         onclick="openLightbox(this.src)">
                </div>
            </div>

            <!-- Content Grid -->
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Description -->
                    <div class="glass-card rounded-2xl p-8" data-aos="fade-up">
                        <h2 class="text-2xl font-bold mb-6 flex items-center gap-3">
                            <i class="fas fa-info-circle text-blue-400"></i>
                            Project Overview
                        </h2>
                        <div class="prose prose-invert prose-blue max-w-none text-slate-300 leading-relaxed project-description">
                            {!! $project->description !!}
                        </div>
                    </div>

                    <!-- Gallery -->
                    @if($project->images->count() > 0)
                        <div class="glass-card rounded-2xl p-8" data-aos="fade-up">
                            <h2 class="text-2xl font-bold mb-6 flex items-center gap-3">
                                <i class="fas fa-images text-blue-400"></i>
                                Project Gallery
                            </h2>
                            <div class="gallery-grid">
                                @foreach($project->images as $image)
                                    <div class="gallery-item glass">
                                        <img src="{{ asset($image->image_path) }}"
                                             alt="Gallery image {{ $loop->iteration }}"
                                             onclick="openLightbox(this.src)">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    <!-- Project Info -->
                    <div class="glass-card rounded-2xl p-6" data-aos="fade-left">
                        <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
                            <i class="fas fa-list text-blue-400"></i>
                            Project Details
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <div class="text-slate-400 text-sm mb-1">Status</div>
                                <span class="status-badge {{ $statusMap[$project->status]['class'] }}">
                                    <i class="fas {{ $statusMap[$project->status]['icon'] }}"></i>
                                    {{ $statusMap[$project->status]['label'] }}
                                </span>
                            </div>

                            <div>
                                <div class="text-slate-400 text-sm mb-1">Project Type</div>
                                <div class="text-white font-medium">
                                    <i class="fas {{ $project->project_type == 'personal' ? 'fa-user' : 'fa-building' }} mr-2 text-blue-400"></i>
                                    {{ ucfirst($project->project_type) }} Project
                                </div>
                            </div>

                            <div>
                                <div class="text-slate-400 text-sm mb-1">Created</div>
                                <div class="text-white font-medium">
                                    {{ $project->created_at->format('F Y') }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Share -->
                    <div class="glass-card rounded-2xl p-6" data-aos="fade-left" data-aos-delay="100">
                        <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
                            <i class="fas fa-share-alt text-blue-400"></i>
                            Share Project
                        </h3>
                        <div class="flex gap-3">
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($project->title) }}"
                               target="_blank"
                               class="flex-1 glass rounded-lg p-3 text-center hover:bg-blue-500/20 transition">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}"
                               target="_blank"
                               class="flex-1 glass rounded-lg p-3 text-center hover:bg-blue-500/20 transition">
                                <i class="fab fa-linkedin text-xl"></i>
                            </a>
                            <button onclick="copyToClipboard()"
                                    class="flex-1 glass rounded-lg p-3 text-center hover:bg-blue-500/20 transition">
                                <i class="fas fa-link text-xl"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Navigation -->
                    <div class="glass-card rounded-2xl p-6" data-aos="fade-left" data-aos-delay="200">
                        <h3 class="text-xl font-bold mb-4">Navigate</h3>
                        <div class="space-y-3">
                            @if($previous_project)
                                <a href="{{ route('projects.show', $previous_project->url) }}"
                                   class="block glass rounded-lg p-3 hover:bg-slate-800 transition">
                                    <div class="text-slate-400 text-xs mb-1">← Previous</div>
                                    <div class="text-white font-medium text-sm">{{ $previous_project->title }}</div>
                                </a>
                            @endif

                            @if($next_project)
                                <a href="{{ route('projects.show', $next_project->url) }}"
                                   class="block glass rounded-lg p-3 hover:bg-slate-800 transition">
                                    <div class="text-slate-400 text-xs mb-1">Next →</div>
                                    <div class="text-white font-medium text-sm">{{ $next_project->title }}</div>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Projects -->
    @if($related_projects->count() > 0)
        <section class="py-20 px-6">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold mb-8" data-aos="fade-up">
                    Related <span class="gradient-text">Projects</span>
                </h2>

                <div class="grid md:grid-cols-3 gap-8">
                    @foreach($related_projects as $related)
                        <div class="glass-card rounded-2xl overflow-hidden project-card" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="project-card-image">
                                <img src="{{ asset($related->primary_image) }}" alt="{{ $related->title }}">
                            </div>

                            <div class="p-6">
                                <h3 class="text-xl font-bold text-white mb-2">{{ $related->title }}</h3>
                                <p class="text-slate-400 text-sm mb-4">{{ $related->subtitle }}</p>

                                <a href="{{ route('projects.show', $related->url) }}"
                                   class="text-blue-400 hover:text-blue-300 font-medium text-sm">
                                    View Project <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Lightbox -->
    <div class="lightbox" id="lightbox" onclick="closeLightbox()">
        <span class="lightbox-close" onclick="closeLightbox()">
            <i class="fas fa-times"></i>
        </span>
        <img src="" alt="Lightbox image" id="lightboxImage">
    </div>

    <!-- Footer -->
    <footer class="py-12 px-6 border-t border-slate-800">
        <div class="max-w-7xl mx-auto text-center">
            <p class="text-slate-400">
                © {{ date('Y') }} Sandeepa Muthumal. All rights reserved.
            </p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Lightbox functions
        function openLightbox(src) {
            document.getElementById('lightbox').classList.add('active');
            document.getElementById('lightboxImage').src = src;
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            document.getElementById('lightbox').classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        // Close lightbox on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeLightbox();
            }
        });

        // Copy to clipboard
        function copyToClipboard() {
            navigator.clipboard.writeText(window.location.href);
            alert('Link copied to clipboard!');
        }

        // Navbar Scroll Effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

            // Scroll to Top Button
            const scrollBtn = document.getElementById('scrollToTop');
            if (window.scrollY > 500) {
                scrollBtn.classList.add('visible');
            } else {
                scrollBtn.classList.remove('visible');
            }
        });

        // Scroll to Top
        document.getElementById('scrollToTop').addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>
</html>
