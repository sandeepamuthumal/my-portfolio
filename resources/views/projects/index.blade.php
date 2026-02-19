<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Projects - Sandeepa Muthumal | Full-Stack Software Engineer</title>
    <meta name="description" content="Browse all projects built by Sandeepa Muthumal - Production-grade web applications using Laravel, React, Node.js">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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

    <!-- Page Header -->
    <section class="pt-32 pb-16 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12" data-aos="fade-down">
                <h1 class="text-5xl md:text-6xl font-bold mb-4">
                    All <span class="gradient-text">Projects</span>
                </h1>
                <p class="text-slate-400 text-lg max-w-2xl mx-auto">
                    Production systems built with engineering excellence. Browse through {{ $stats['total'] }}+ real-world applications.
                </p>
            </div>

            <!-- Stats Bar -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-12" data-aos="fade-up">
                <div class="glass-card rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold gradient-text">{{ $stats['total'] }}</div>
                    <div class="text-slate-400 text-sm">Total Projects</div>
                </div>
                <div class="glass-card rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold gradient-text">{{ $stats['personal'] }}</div>
                    <div class="text-slate-400 text-sm">Personal</div>
                </div>
                <div class="glass-card rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold gradient-text">{{ $stats['company'] }}</div>
                    <div class="text-slate-400 text-sm">Company</div>
                </div>
                <div class="glass-card rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold gradient-text">{{ $stats['completed'] }}</div>
                    <div class="text-slate-400 text-sm">Completed</div>
                </div>
            </div>

            <!-- Filters -->
            <div class="glass-card rounded-xl p-6 mb-12" data-aos="fade-up">
                <form method="GET" action="{{ route('projects.all') }}" id="filterForm">
                    <div class="grid md:grid-cols-4 gap-4">
                        <!-- Search -->
                        <div class="md:col-span-2">
                            <label class="block text-slate-300 text-sm font-medium mb-2">
                                <i class="fas fa-search mr-2"></i>Search Projects
                            </label>
                            <input type="text" name="search" value="{{ request('search') }}"
                                   class="w-full bg-slate-900/50 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition"
                                   placeholder="Search by title, description, or technology...">
                        </div>

                        <!-- Type Filter -->
                        <div>
                            <label class="block text-slate-300 text-sm font-medium mb-2">
                                <i class="fas fa-filter mr-2"></i>Project Type
                            </label>
                            <select name="type" onchange="document.getElementById('filterForm').submit()"
                                    class="w-full bg-slate-900/50 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500 transition">
                                <option value="">All Types</option>
                                <option value="personal" {{ request('type') == 'personal' ? 'selected' : '' }}>Personal</option>
                                <option value="company" {{ request('type') == 'company' ? 'selected' : '' }}>Company</option>
                            </select>
                        </div>

                        <!-- Status Filter -->
                        <div>
                            <label class="block text-slate-300 text-sm font-medium mb-2">
                                <i class="fas fa-tasks mr-2"></i>Status
                            </label>
                            <select name="status" onchange="document.getElementById('filterForm').submit()"
                                    class="w-full bg-slate-900/50 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500 transition">
                                <option value="">All Status</option>
                                <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                <option value="ongoing" {{ request('status') == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                                <option value="modifying" {{ request('status') == 'modifying' ? 'selected' : '' }}>Modifying</option>
                            </select>
                        </div>
                    </div>

                    <!-- Technology Filter -->
                    {{-- <div class="mt-4">
                        <label class="block text-slate-300 text-sm font-medium mb-3">
                            <i class="fas fa-code mr-2"></i>Filter by Technology
                        </label>
                        <div class="flex flex-wrap gap-2">
                            <a href="{{ route('projects.all') }}"
                               class="px-4 py-2 rounded-lg text-sm font-medium transition {{ !request('tech') ? 'bg-blue-500 text-white' : 'bg-slate-900/50 text-slate-300 hover:bg-slate-800' }}">
                                All
                            </a>
                            @foreach($all_technologies->take(15) as $tech)
                                <a href="{{ route('projects.all', array_merge(request()->all(), ['tech' => $tech])) }}"
                                   class="px-4 py-2 rounded-lg text-sm font-medium transition {{ request('tech') == $tech ? 'bg-blue-500 text-white' : 'bg-slate-900/50 text-slate-300 hover:bg-slate-800' }}">
                                    {{ $tech }}
                                </a>
                            @endforeach
                        </div>
                    </div> --}}

                    <!-- Active Filters -->
                    @if(request('search') || request('type') || request('status') || request('tech'))
                        <div class="mt-4 flex items-center gap-3">
                            <span class="text-slate-400 text-sm">Active Filters:</span>
                            @if(request('search'))
                                <span class="bg-blue-500/20 text-blue-300 px-3 py-1 rounded-full text-sm flex items-center gap-2">
                                    Search: "{{ request('search') }}"
                                    <a href="{{ route('projects.all', request()->except('search')) }}" class="hover:text-white">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </span>
                            @endif
                            @if(request('type'))
                                <span class="bg-blue-500/20 text-blue-300 px-3 py-1 rounded-full text-sm flex items-center gap-2">
                                    Type: {{ ucfirst(request('type')) }}
                                    <a href="{{ route('projects.all', request()->except('type')) }}" class="hover:text-white">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </span>
                            @endif
                            @if(request('status'))
                                <span class="bg-blue-500/20 text-blue-300 px-3 py-1 rounded-full text-sm flex items-center gap-2">
                                    Status: {{ ucfirst(request('status')) }}
                                    <a href="{{ route('projects.all', request()->except('status')) }}" class="hover:text-white">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </span>
                            @endif
                            @if(request('tech'))
                                <span class="bg-blue-500/20 text-blue-300 px-3 py-1 rounded-full text-sm flex items-center gap-2">
                                    Tech: {{ request('tech') }}
                                    <a href="{{ route('projects.all', request()->except('tech')) }}" class="hover:text-white">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </span>
                            @endif
                            <a href="{{ route('projects.all') }}" class="text-blue-400 hover:text-blue-300 text-sm ml-auto">
                                <i class="fas fa-redo mr-1"></i>Clear All
                            </a>
                        </div>
                    @endif
                </form>
            </div>

            @php
                $statusMap = [
                    'completed' => ['class' => 'status-completed', 'label' => 'Completed', 'icon' => 'fa-check-circle'],
                    'ongoing' => ['class' => 'status-ongoing', 'label' => 'Ongoing', 'icon' => 'fa-spinner'],
                    'modifying' => ['class' => 'status-modifying', 'label' => 'Modifying', 'icon' => 'fa-wrench'],
                ];
            @endphp

            <!-- Projects Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @forelse($projects as $project)
                    <div class="glass-card rounded-2xl overflow-hidden project-card" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 50 }}">
                        <!-- Image -->
                        <div class="project-card-image">
                            <img src="{{ asset($project->primary_image) }}" alt="{{ $project->title }}"
                                    loading="lazy">
                        </div>

                        <div class="p-6">
                            <!-- Header -->
                            <div class="flex items-start justify-between mb-3">
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-white mb-1">
                                        {{ $project->title }}
                                    </h3>
                                    <p class="text-sm text-slate-400">
                                        {{ $project->subtitle }}
                                    </p>
                                </div>

                                {{-- Status --}}
                                <span class="status-badge {{ $statusMap[$project->status]['class'] }} ml-2">
                                    <i class="fas {{ $statusMap[$project->status]['icon'] }}"></i>
                                    {{ $statusMap[$project->status]['label'] }}
                                </span>
                            </div>

                            <!-- Description -->
                            <p class="text-slate-400 text-sm mb-4 line-clamp-2">
                                {!! Str::limit(strip_tags($project->description), 100) !!}
                            </p>

                            <!-- Technologies -->
                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach(array_slice(explode(',', $project->technologies), 0, 3) as $tech)
                                    <span class="bg-blue-500/20 text-blue-300 px-2 py-1 rounded text-xs font-mono">
                                        {{ trim($tech) }}
                                    </span>
                                @endforeach
                                @if(count(explode(',', $project->technologies)) > 3)
                                    <span class="bg-slate-700 text-slate-300 px-2 py-1 rounded text-xs">
                                        +{{ count(explode(',', $project->technologies)) - 3 }} more
                                    </span>
                                @endif
                            </div>

                            <!-- Actions -->
                            <div class="flex items-center justify-between pt-4 border-t border-slate-700">
                                <span class="text-slate-400 text-sm">
                                    <i class="fas {{ $project->project_type == 'personal' ? 'fa-user' : 'fa-building' }} mr-1"></i>
                                    {{ ucfirst($project->project_type) }}
                                </span>

                                <div class="flex gap-3">
                                    <a href="{{ route('projects.show', $project->url) }}"
                                       class="text-blue-400 hover:text-blue-300 font-medium text-sm">
                                        View Details <i class="fas fa-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-20">
                        <i class="fas fa-inbox text-6xl text-slate-700 mb-4"></i>
                        <h3 class="text-2xl font-bold text-white mb-2">No Projects Found</h3>
                        <p class="text-slate-400 mb-6">Try adjusting your filters or search terms</p>
                        <a href="{{ route('projects.all') }}" class="neon-button text-white inline-block">
                            <i class="fas fa-redo mr-2"></i>Clear Filters
                        </a>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($projects->hasPages())
                <div class="flex justify-center" data-aos="fade-up">
                    <div class="glass-card rounded-xl p-4">
                        {{ $projects->links('pagination::tailwind') }}
                    </div>
                </div>
            @endif
        </div>
    </section>

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
