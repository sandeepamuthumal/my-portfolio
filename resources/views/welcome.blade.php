<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandeepa Muthumal - Full-Stack Software Engineer | Laravel, React, Node.js Specialist</title>
    <meta name="description"
        content="Full-stack software engineer with 2+ years building production systems. Specializing in Laravel, React, Node.js, and scalable backend architecture.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    {{-- favicon --}}
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
    {{-- custom styles --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <!-- Loading Screen -->
    <div class="loading-screen" id="loadingScreen">
        <div class="loader"></div>
    </div>

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
                <a href="#home" class="hover:text-blue-400 transition-all duration-300 hover:scale-110">Home</a>
                <a href="#about" class="hover:text-blue-400 transition-all duration-300 hover:scale-110">About</a>
                <a href="#skills" class="hover:text-blue-400 transition-all duration-300 hover:scale-110">Skills</a>
                <a href="#projects" class="hover:text-blue-400 transition-all duration-300 hover:scale-110">Projects</a>
                <a href="#experience"
                    class="hover:text-blue-400 transition-all duration-300 hover:scale-110">Experience</a>
                <a href="#contact" class="hover:text-blue-400 transition-all duration-300 hover:scale-110">Contact</a>
            </div>
            <button class="md:hidden text-2xl" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div class="hidden md:hidden mt-4 glass rounded-lg p-4" id="mobileMenu">
            <div class="flex flex-col space-y-3 font-medium">
                <a href="#home" class="hover:text-blue-400 transition">Home</a>
                <a href="#about" class="hover:text-blue-400 transition">About</a>
                <a href="#skills" class="hover:text-blue-400 transition">Skills</a>
                <a href="#projects" class="hover:text-blue-400 transition">Projects</a>
                <a href="#experience" class="hover:text-blue-400 transition">Experience</a>
                <a href="#contact" class="hover:text-blue-400 transition">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center justify-center px-6 pt-20 relative overflow-hidden">
        <!-- Floating Particles Background -->
        <div class="particles-container">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>

        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center relative z-10">
            <!-- Left: Content -->
            <div class="hero-content">
                <div data-aos="fade-up" data-aos-duration="1000">
                    <!-- Status Badge -->
                    <div class="inline-block mb-4">
                        <div class="status-badge-hero">
                            <span class="status-dot"></span>
                            <span class="status-text">Open to Internship Opportunities</span>
                        </div>
                    </div>

                    <p class="text-blue-400 font-mono text-sm mb-2 animate-slide-down">Hello, I'm</p>

                    <h1 class="text-5xl md:text-6xl font-bold mb-4 hero-title">
                        Sandeepa <span class="gradient-text-animated">Muthumal</span>
                    </h1>

                    <h2 class="text-2xl md:text-3xl font-semibold text-slate-300 mb-6 hero-subtitle">
                        <span class="typing-text">Full-Stack Software Engineer</span>
                        <span class="typing-cursor">|</span>
                    </h2>

                    <p class="text-lg text-slate-400 mb-8 leading-relaxed">
                        Specialized in building <span class="highlight-text">scalable backend systems</span> and
                        <span class="highlight-text">production-grade web applications</span>.
                        <strong class="text-white">2+ years</strong> shipping real-world solutions with Laravel, React,
                        and Node.js.
                    </p>

                    <div class="flex flex-wrap gap-4 mb-8">
                        <a href="#contact" class="neon-button-hero group">
                            <span class="button-content">
                                <i class="fas fa-briefcase mr-2"></i>
                                Hire Me
                            </span>
                            <span class="button-glow"></span>
                        </a>
                        <a href="#projects" class="glass-button-hero group">
                            <span class="button-content">
                                <i class="fas fa-code mr-2"></i>
                                View Projects
                            </span>
                        </a>
                    </div>

                    <div class="flex gap-4">
                        <a href="https://linkedin.com/in/sandeepa-muthumal" target="_blank" class="social-icon"
                            data-tooltip="LinkedIn">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://github.com/sandeepamuthumal" target="_blank" class="social-icon"
                            data-tooltip="GitHub">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="mailto:sandeepamuthumal3@gmail.com" class="social-icon" data-tooltip="Email">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right: Animated Profile Image -->
            <div data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="300" class="hero-image-section">
                <div class="profile-wrapper">
                    <!-- Animated Rings -->
                    <div class="profile-ring ring-1"></div>
                    <div class="profile-ring ring-2"></div>
                    <div class="profile-ring ring-3"></div>

                    <!-- Orbiting Elements -->
                    <div class="orbit-container">
                        <div class="orbit-item orbit-1">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="orbit-item orbit-2">
                            <i class="fas fa-server"></i>
                        </div>
                        <div class="orbit-item orbit-3">
                            <i class="fas fa-database"></i>
                        </div>
                        <div class="orbit-item orbit-4">
                            <i class="fas fa-rocket"></i>
                        </div>
                    </div>

                    <!-- Main Profile Container -->
                    <div class="profile-main-container">
                        <!-- Glowing Border -->
                        <div class="profile-glow-border"></div>

                        <!-- Image Container -->
                        <div class="profile-image-wrapper">
                            <img src="{{ asset('images/Profile1.png') }}" alt="Sandeepa Muthumal"
                                class="profile-image">

                            <!-- Shine Effect Overlay -->
                            <div class="shine-effect"></div>
                        </div>

                        <!-- Floating Badge -->
                        <div class="profile-badge-float">
                            <i class="fas fa-trophy mr-2"></i>
                            <span>10+ Projects</span>
                        </div>
                    </div>

                    <!-- Background Glow -->
                    <div class="profile-bg-glow"></div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <div class="scroll-mouse">
                <div class="scroll-wheel"></div>
            </div>
            <p class="scroll-text">Scroll to explore</p>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 px-6" data-aos="fade-up">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="glass-card rounded-xl p-6 text-center stat-card hover-lift">
                    <div class="text-4xl font-bold gradient-text mb-2" data-count="2">0+</div>
                    <div class="text-slate-400 font-medium">Years Experience</div>
                </div>
                <div class="glass-card rounded-xl p-6 text-center stat-card hover-lift" style="animation-delay: 0.1s">
                    <div class="text-4xl font-bold gradient-text mb-2" data-count="10">0+</div>
                    <div class="text-slate-400 font-medium">Projects Delivered</div>
                </div>
                <div class="glass-card rounded-xl p-6 text-center stat-card hover-lift" style="animation-delay: 0.2s">
                    <div class="text-4xl font-bold gradient-text mb-2" data-count="15">0+</div>
                    <div class="text-slate-400 font-medium">Technologies</div>
                </div>
                <div class="glass-card rounded-xl p-6 text-center stat-card hover-lift" style="animation-delay: 0.3s">
                    <div class="text-4xl font-bold gradient-text mb-2" data-count="100">0%</div>
                    <div class="text-slate-400 font-medium">Client Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section (Inspired by Image 3) -->
    <section id="about" class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-down">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">
                    Building Systems <span class="gradient-text">That Scale</span>
                </h2>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 mb-16">
                <!-- Left: Main Description -->
                <div data-aos="fade-right">
                    <p class="text-slate-300 text-lg leading-relaxed mb-6">
                        I'm a <strong class="text-white">BICT (Hons) undergraduate</strong> and full-stack developer
                        with over two years of
                        hands-on experience at SCITS, where I've architected and delivered <strong
                            class="text-blue-400">10+ production web applications</strong>.
                    </p>
                    <p class="text-slate-300 leading-relaxed mb-6">
                        Working in a startup environment shaped my engineering philosophy — I believe in writing clean,
                        maintainable code,
                        designing robust database schemas, and building APIs that teams can depend on.
                    </p>
                    <p class="text-slate-300 leading-relaxed mb-6">
                        Beyond my day job, I've led university group projects as both developer and PM, taking ownership
                        of architecture
                        decisions and mentoring teammates new to software engineering. Currently expanding into
                        <strong class="text-blue-400">Spring Boot, Docker, and CI/CD</strong> for enterprise-ready
                        development.
                    </p>

                    <!-- What I Bring Box -->
                    <div class="glass rounded-xl p-6 mt-8">
                        <h4 class="font-bold text-white text-lg mb-4 flex items-center gap-2">
                            <i class="fas fa-arrow-right text-blue-400"></i>
                            What I Bring to a Team
                        </h4>
                        <ul class="text-slate-300 space-y-2">
                            <li class="flex items-start gap-2">
                                <i class="fas fa-check text-blue-400 mt-1 flex-shrink-0"></i>
                                <span>Production-ready code with proper error handling and validation</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-check text-blue-400 mt-1 flex-shrink-0"></i>
                                <span>Strong database design and optimization skills</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-check text-blue-400 mt-1 flex-shrink-0"></i>
                                <span>Clear documentation and collaborative communication</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-check text-blue-400 mt-1 flex-shrink-0"></i>
                                <span>Ownership mentality - I don't just complete tasks, I solve problems</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Right: Feature Cards (Inspired by Image 3) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6" data-aos="fade-left">
                    <div class="about-card">
                        <div class="about-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Full SDLC Experience</h3>
                        <p class="text-slate-400">
                            From design to deployment, I've handled complete project lifecycles in production
                            environments.
                        </p>
                    </div>

                    <div class="about-card">
                        <div class="about-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Client-Facing Skills</h3>
                        <p class="text-slate-400">
                            Direct communication with clients, requirement gathering, and translating business needs to
                            technical solutions.
                        </p>
                    </div>

                    <div class="about-card">
                        <div class="about-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Startup Mindset</h3>
                        <p class="text-slate-400">
                            Comfortable with fast-paced environments, tight deadlines, and wearing multiple hats when
                            needed.
                        </p>
                    </div>

                    <div class="about-card">
                        <div class="about-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Knowledge Sharer</h3>
                        <p class="text-slate-400">
                            Leading SCITS Circle sessions to help new developers learn faster and integrate into real
                            projects.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-down">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">
                    Tech <span class="gradient-text">Stack</span>
                </h2>
                <p class="text-slate-400 text-lg">Technologies I work with daily</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Backend -->
                <div class="glass-card rounded-xl p-6" data-aos="flip-left" data-aos-delay="0">
                    <div class="text-4xl mb-4 text-blue-400 tech-icon"><i class="fas fa-server"></i></div>
                    <h3 class="text-xl font-bold mb-4 text-white">Backend Engineering</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="skill-badge glass px-3 py-1 rounded-full text-sm font-mono">Laravel</span>
                        <span class="skill-badge glass px-3 py-1 rounded-full text-sm font-mono">PHP</span>
                        <span class="skill-badge glass px-3 py-1 rounded-full text-sm font-mono">Node.js</span>
                        <span class="skill-badge glass px-3 py-1 rounded-full text-sm font-mono">Express.js</span>
                        <span class="skill-badge glass px-3 py-1 rounded-full text-sm font-mono">REST APIs</span>
                        <span class="skill-badge glass px-3 py-1 rounded-full text-sm font-mono">Spring Boot</span>
                    </div>
                </div>

                <!-- Frontend -->
                <div class="glass-card rounded-xl p-6" data-aos="flip-left" data-aos-delay="100">
                    <div class="text-4xl mb-4 text-blue-400 tech-icon"><i class="fas fa-palette"></i></div>
                    <h3 class="text-xl font-bold mb-4 text-white">Frontend Development</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="skill-badge glass px-3 py-1 rounded-full text-sm font-mono">React.js</span>
                        <span class="skill-badge glass px-3 py-1 rounded-full text-sm font-mono">Livewire</span>
                        <span class="skill-badge glass px-3 py-1 rounded-full text-sm font-mono">Tailwind CSS</span>
                        <span class="skill-badge glass px-3 py-1 rounded-full text-sm font-mono">JavaScript</span>
                        <span class="skill-badge glass px-3 py-1 rounded-full text-sm font-mono">jQuery</span>
                    </div>
                </div>

                <!-- Database -->
                <div class="glass-card rounded-xl p-6" data-aos="flip-left" data-aos-delay="200">
                    <div class="text-4xl mb-4 text-blue-400 tech-icon"><i class="fas fa-database"></i></div>
                    <h3 class="text-xl font-bold mb-4 text-white">Database & Storage</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="skill-badge glass px-3 py-1 rounded-full text-sm font-mono">MySQL</span>
                        <span class="skill-badge glass px-3 py-1 rounded-full text-sm font-mono">MongoDB</span>
                        <span class="skill-badge glass px-3 py-1 rounded-full text-sm font-mono">PostgreSQL</span>
                        <span class="skill-badge glass px-3 py-1 rounded-full text-sm font-mono">Redis</span>
                    </div>
                </div>

                <!-- DevOps -->
                <div class="glass-card rounded-xl p-6" data-aos="flip-left" data-aos-delay="300">
                    <div class="text-4xl mb-4 text-blue-400 tech-icon"><i class="fas fa-tools"></i></div>
                    <h3 class="text-xl font-bold mb-4 text-white">DevOps & Tools</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="skill-badge glass px-3 py-1 rounded-full text-sm font-mono">Git</span>
                        <span class="skill-badge glass px-3 py-1 rounded-full text-sm font-mono">Docker</span>
                        <span class="skill-badge glass px-3 py-1 rounded-full text-sm font-mono">Linux</span>
                        <span class="skill-badge glass px-3 py-1 rounded-full text-sm font-mono">CI/CD</span>
                        <span class="skill-badge glass px-3 py-1 rounded-full text-sm font-mono">AWS</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section with Tabs -->
    <section id="projects" class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-down">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">
                    Featured <span class="gradient-text">Projects</span>
                </h2>
                <p class="text-slate-400 text-lg">Production systems built with engineering excellence</p>
            </div>

            <!-- Project Tabs -->
            <div class="flex justify-center gap-4 mb-12" data-aos="fade-up">
                <button class="tab-button active" onclick="switchTab('personal')" id="tab-personal">
                    <i class="fas fa-star mr-2"></i>Personal Projects
                </button>
                <button class="tab-button" onclick="switchTab('company')" id="tab-company">
                    <i class="fas fa-building mr-2"></i>Company Projects
                </button>
            </div>

            @php
                $statusMap = [
                    'completed' => ['class' => 'status-completed', 'label' => 'Completed', 'icon' => 'fa-check-circle'],
                    'ongoing' => ['class' => 'status-ongoing', 'label' => 'Ongoing', 'icon' => 'fa-spinner'],
                    'modifying' => ['class' => 'status-modifying', 'label' => 'Modifying', 'icon' => 'fa-wrench'],
                ];
            @endphp


            <!-- Personal Projects Tab Content -->
            <div id="content-personal" class="tab-content">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($personal_projects as $project)
                        <div class="glass-card rounded-2xl overflow-hidden project-card" data-aos="zoom-in">

                            <!-- Image -->
                            <div class="project-card-image">
                                <img src="{{ asset($project->primary_image) }}" alt="{{ $project->title }}"
                                    loading="lazy">
                            </div>

                            <div class="p-6">

                                <!-- Header -->
                                <div class="flex items-start justify-between mb-3">
                                    <div>
                                        <h3 class="text-xl font-bold text-white mb-1">
                                            {{ $project->title }}
                                        </h3>
                                        <p class="text-sm text-slate-400">
                                            {{ $project->subtitle }}
                                        </p>
                                    </div>

                                    {{-- Status --}}
                                    <span class="status-badge {{ $statusMap[$project->status]['class'] }}">
                                        <i class="fas {{ $statusMap[$project->status]['icon'] }}"></i>
                                        {{ $statusMap[$project->status]['label'] }}
                                    </span>
                                </div>

                                <!-- Description -->
                                <p class="text-slate-400 text-sm mb-4 line-clamp-2">
                                    {!! strip_tags($project->description) !!}
                                </p>

                                <!-- Project Type -->
                                <div class="mb-3">
                                    <span class="text-xs text-slate-500 font-mono">
                                        Personal Project
                                    </span>
                                </div>

                                <!-- Technologies -->
                                <div class="flex flex-wrap gap-2 mb-4">
                                    @foreach (explode(',', $project->technologies) as $tech)
                                        <span class="bg-blue-500/20 text-blue-300 px-2 py-1 rounded text-xs font-mono">
                                            {{ trim($tech) }}
                                        </span>
                                    @endforeach
                                </div>

                                <!-- Actions -->
                                <div class="flex items-center justify-between pt-4 border-t border-slate-700">
                                    <span class="text-slate-400 text-sm">
                                        <i class="fas fa-code mr-1"></i> Personal
                                    </span>

                                    <div class="flex gap-2">
                                        @if ($project->live_link)
                                            <a href="{{ $project->live_link }}" target="_blank"
                                                class="text-blue-400 hover:text-blue-300">
                                                <i class="fas fa-external-link-alt"></i>
                                            </a>
                                        @endif

                                        @if ($project->github_link)
                                            <a href="{{ $project->github_link }}" target="_blank"
                                                class="text-blue-400 hover:text-blue-300">
                                                <i class="fab fa-github"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


            <!-- Company Projects Tab Content -->
            <div id="content-company" class="tab-content hidden">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($company_projects as $project)
                        <div class="glass-card rounded-2xl overflow-hidden project-card" data-aos="zoom-in">

                            <!-- Image -->
                            <div class="project-card-image">
                                <img src="{{ asset($project->primary_image) }}" alt="{{ $project->title }}"
                                    loading="lazy">
                            </div>

                            <div class="p-6">

                                <!-- Header -->
                                <div class="flex items-start justify-between mb-3">
                                    <div>
                                        <h3 class="text-xl font-bold text-white mb-1">
                                            {{ $project->title }}
                                        </h3>
                                        <p class="text-sm text-slate-400">
                                            {{ $project->subtitle }}
                                        </p>
                                    </div>

                                    {{-- Status --}}
                                    <span class="status-badge {{ $statusMap[$project->status]['class'] }}">
                                        <i class="fas {{ $statusMap[$project->status]['icon'] }}"></i>
                                        {{ $statusMap[$project->status]['label'] }}
                                    </span>
                                </div>

                                <!-- Description -->
                                <p class="text-slate-400 text-sm mb-4 line-clamp-2">
                                    {!! strip_tags($project->description) !!}
                                </p>

                                <!-- Project Type -->
                                <div class="mb-3">
                                    <span class="text-xs text-slate-500 font-mono">
                                        Personal Project
                                    </span>
                                </div>

                                <!-- Technologies -->
                                <div class="flex flex-wrap gap-2 mb-4">
                                    @foreach (explode(',', $project->technologies) as $tech)
                                        <span class="bg-blue-500/20 text-blue-300 px-2 py-1 rounded text-xs font-mono">
                                            {{ trim($tech) }}
                                        </span>
                                    @endforeach
                                </div>

                                <!-- Actions -->
                                <div class="flex items-center justify-between pt-4 border-t border-slate-700">
                                    <span class="text-slate-400 text-sm">
                                        <i class="fas fa-code mr-1"></i> Company
                                    </span>

                                    <div class="flex gap-2">
                                        @if ($project->live_link)
                                            <a href="{{ $project->live_link }}" target="_blank"
                                                class="text-blue-400 hover:text-blue-300">
                                                <i class="fas fa-external-link-alt"></i>
                                            </a>
                                        @endif

                                        @if ($project->github_link)
                                            <a href="{{ $project->github_link }}" target="_blank"
                                                class="text-blue-400 hover:text-blue-300">
                                                <i class="fab fa-github"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- View All Projects Button -->
            <div class="text-center mt-3" data-aos="fade-up">
                <a href="projects.html" class="neon-button text-white inline-block">
                    <i class="fas fa-th mr-2"></i>View All Projects
                </a>
            </div>
        </div>
    </section>

    <!-- Experience Timeline Section -->
    <section id="experience" class="py-20 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-down">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">
                    Professional <span class="gradient-text">Journey</span>
                </h2>
                <p class="text-slate-400 text-lg">Building production systems since 2022</p>
            </div>

            <div class="relative timeline-line">
                <!-- Current Role -->
                <div class="grid md:grid-cols-2 gap-8 mb-16" data-aos="fade-right">
                    <div class="order-2 md:order-1"></div>
                    <div class="order-1 md:order-2 glass-card rounded-xl p-6 hover-lift">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-4 h-4 bg-blue-500 rounded-full pulse-dot"></div>
                            <span class="text-blue-400 font-mono text-sm">2022 - Present</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Full-Stack Developer</h3>
                        <h4 class="text-blue-400 font-semibold mb-4">SCITS • Colombo, Sri Lanka</h4>
                        <ul class="text-slate-300 space-y-2 text-sm">
                            <li class="flex items-start gap-2">
                                <i class="fas fa-code text-blue-400 mt-1"></i>
                                <span>Architected and delivered 10+ production web applications serving 1000+
                                    users</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-rocket text-blue-400 mt-1"></i>
                                <span>Led complete SDLC from requirements gathering to deployment</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-users text-blue-400 mt-1"></i>
                                <span>Managed direct client communication and delivered under tight deadlines</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-chalkboard-teacher text-blue-400 mt-1"></i>
                                <span>Mentored junior developers through SCITS Circle sessions</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-tachometer-alt text-blue-400 mt-1"></i>
                                <span>Optimized database queries resulting in 70% performance improvement</span>
                            </li>
                        </ul>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="bg-blue-500/20 text-blue-300 px-2 py-1 rounded text-xs">Laravel</span>
                            <span class="bg-blue-500/20 text-blue-300 px-2 py-1 rounded text-xs">React</span>
                            <span class="bg-blue-500/20 text-blue-300 px-2 py-1 rounded text-xs">Node.js</span>
                            <span class="bg-blue-500/20 text-blue-300 px-2 py-1 rounded text-xs">MySQL</span>
                        </div>
                    </div>
                </div>

                <!-- Education -->
                <div class="grid md:grid-cols-2 gap-8 mb-16" data-aos="fade-left">
                    <div class="glass-card rounded-xl p-6 hover-lift">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-4 h-4 bg-blue-500 rounded-full"></div>
                            <span class="text-blue-400 font-mono text-sm">2023 - Present</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">BICT (Hons) Undergraduate</h3>
                        <h4 class="text-blue-400 font-semibold mb-4">University • Sri Lanka</h4>
                        <ul class="text-slate-300 space-y-2 text-sm">
                            <li class="flex items-start gap-2">
                                <i class="fas fa-project-diagram text-blue-400 mt-1"></i>
                                <span>Led multiple group projects as primary developer and PM</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-hands-helping text-blue-400 mt-1"></i>
                                <span>Guided teammates new to software engineering</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-book text-blue-400 mt-1"></i>
                                <span>Focused on Software Engineering & System Design</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-balance-scale text-blue-400 mt-1"></i>
                                <span>Balanced full-time work with academic excellence</span>
                            </li>
                        </ul>
                    </div>
                    <div class="order-1 md:order-2"></div>
                </div>

                <!-- Freelance -->
                <div class="grid md:grid-cols-2 gap-8" data-aos="fade-right">
                    <div class="order-2 md:order-1"></div>
                    <div class="order-1 md:order-2 glass-card rounded-xl p-6 hover-lift">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-4 h-4 bg-blue-500 rounded-full"></div>
                            <span class="text-blue-400 font-mono text-sm">2022 - 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Freelance Developer</h3>
                        <h4 class="text-blue-400 font-semibold mb-4">Independent • Remote</h4>
                        <ul class="text-slate-300 space-y-2 text-sm">
                            <li class="flex items-start gap-2">
                                <i class="fas fa-globe text-blue-400 mt-1"></i>
                                <span>Delivered custom solutions for international clients</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-handshake text-blue-400 mt-1"></i>
                                <span>Handled end-to-end project lifecycle</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-clipboard-check text-blue-400 mt-1"></i>
                                <span>Developed requirement gathering skills</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-briefcase text-blue-400 mt-1"></i>
                                <span>Built diverse portfolio across business domains</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-down">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">
                    What People <span class="gradient-text">Say</span>
                </h2>
                <p class="text-slate-400 text-lg">Feedback from colleagues and clients</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="glass-card rounded-xl p-6 testimonial-card hover-lift" data-aos="flip-up"
                    data-aos-delay="0">
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-14 h-14 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                            AW
                        </div>
                        <div>
                            <h4 class="font-bold text-white">Thilina Hewage</h4>
                            <p class="text-slate-400 text-sm">Tech Lead, SCITS</p>
                        </div>
                    </div>
                    <p class="text-slate-300 italic leading-relaxed">
                        "Sandeepa consistently delivers high-quality code and takes ownership of complex features. His
                        ability to debug production issues and optimize performance has been invaluable."
                    </p>
                    <div class="flex text-yellow-400 mt-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="glass-card rounded-xl p-6 testimonial-card hover-lift" data-aos="flip-up"
                    data-aos-delay="100">
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-14 h-14 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                            KP
                        </div>
                        <div>
                            <h4 class="font-bold text-white">Shevon</h4>
                            <p class="text-slate-400 text-sm">Client, Cleaning Services</p>
                        </div>
                    </div>
                    <p class="text-slate-300 italic leading-relaxed">
                        "The management system Sandeepa built transformed our operations. He understood our requirements
                        perfectly and delivered a solution that saved us countless hours."
                    </p>
                    <div class="flex text-yellow-400 mt-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="glass-card rounded-xl p-6 testimonial-card hover-lift" data-aos="flip-up"
                    data-aos-delay="200">
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-14 h-14 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                            NS
                        </div>
                        <div>
                            <h4 class="font-bold text-white">Kavindu </h4>
                            <p class="text-slate-400 text-sm">Junior Developer, SCITS</p>
                        </div>
                    </div>
                    <p class="text-slate-300 italic leading-relaxed">
                        "Learning from Sandeepa's mentorship sessions accelerated my skills significantly. He explains
                        complex concepts clearly and always makes time to help."
                    </p>
                    <div class="flex text-yellow-400 mt-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 px-6">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-down">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">
                    Let's <span class="gradient-text">Connect</span>
                </h2>
                <p class="text-slate-400 text-lg">Open to software engineering internships and collaboration</p>
            </div>

            <div class="glass-card rounded-2xl p-8 md:p-12" data-aos="zoom-in">
                <div class="grid md:grid-cols-2 gap-12">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-6">Get In Touch</h3>
                        <p class="text-slate-300 mb-8 leading-relaxed">
                            I'm currently seeking software engineering internship opportunities where I can contribute
                            to
                            production systems, learn from experienced teams, and grow as an engineer.
                        </p>

                        <div class="space-y-4">
                            <div class="flex items-center gap-4 hover-lift">
                                <div
                                    class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center text-blue-400">
                                    <i class="fas fa-envelope text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-slate-400 text-sm">Email</p>
                                    <a href="mailto:sandeepamuthumal3@gmail.com"
                                        class="text-white font-semibold hover:text-blue-400 transition">
                                        sandeepamuthumal3@gmail.com
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-center gap-4 hover-lift">
                                <div
                                    class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center text-blue-400">
                                    <i class="fab fa-linkedin text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-slate-400 text-sm">LinkedIn</p>
                                    <a href="https://linkedin.com/in/sandeepa-muthumal" target="_blank"
                                        class="text-white font-semibold hover:text-blue-400 transition">
                                        /in/sandeepa-muthumal
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-center gap-4 hover-lift">
                                <div
                                    class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center text-blue-400">
                                    <i class="fab fa-github text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-slate-400 text-sm">GitHub</p>
                                    <a href="https://github.com/sandeepamuthumal" target="_blank"
                                        class="text-white font-semibold hover:text-blue-400 transition">
                                        github.com/sandeepamuthumal
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-center gap-4 hover-lift">
                                <div
                                    class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center text-blue-400">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-slate-400 text-sm">Location</p>
                                    <p class="text-white font-semibold">Colombo, Sri Lanka</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <form class="space-y-6" id="contactForm">
                            @csrf
                            <div>
                                <label class="block text-slate-300 font-medium mb-2">Your Name</label>
                                <input type="text" name="name" required
                                    class="w-full bg-slate-900/50 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition"
                                    placeholder="John Doe">
                            </div>

                            <div>
                                <label class="block text-slate-300 font-medium mb-2">Email Address</label>
                                <input type="email" name="email" required
                                    class="w-full bg-slate-900/50 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition"
                                    placeholder="john@example.com">
                            </div>

                            <div>
                                <label class="block text-slate-300 font-medium mb-2">Message</label>
                                <textarea name="message" required rows="4"
                                    class="w-full bg-slate-900/50 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition resize-none"
                                    placeholder="Tell me about your project or opportunity..."></textarea>
                            </div>

                            <button type="submit" class="neon-button w-full text-white">
                                <i class="fas fa-paper-plane mr-2"></i>Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="mt-16 text-center glass-card rounded-2xl p-12" data-aos="fade-up">
                <h3 class="text-3xl font-bold text-white mb-4">Looking for a Dedicated Engineer?</h3>
                <p class="text-slate-300 text-lg mb-8 max-w-2xl mx-auto leading-relaxed">
                    I bring 2+ years of production experience, a strong work ethic, and genuine passion for building
                    reliable software systems. Let's talk about how I can contribute to your team.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="/files/Sandeepa Muthumal_CV.pdf" download class="neon-button text-white inline-block">
                        <i class="fas fa-download mr-2"></i>Download Resume
                    </a>
                    <a href="https://calendly.com/sandeepa" target="_blank"
                        class="glass px-8 py-3 rounded-lg font-semibold hover:bg-slate-800 transition inline-block hover-lift">
                        <i class="fas fa-calendar mr-2"></i>Schedule a Call
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 px-6 border-t border-slate-800">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-3 gap-8 mb-8">
                <div data-aos="fade-right">
                    <h3 class="text-xl font-bold gradient-text font-mono mb-4">&lt;SM /&gt;</h3>
                    <p class="text-slate-400 leading-relaxed">
                        Full-Stack Software Engineer specializing in building scalable backend systems and
                        production-grade web applications.
                    </p>
                </div>

                <div data-aos="fade-up">
                    <h4 class="text-white font-bold mb-4">Quick Links</h4>
                    <div class="space-y-2">
                        <a href="#about"
                            class="block text-slate-400 hover:text-blue-400 transition hover:translate-x-2">About</a>
                        <a href="#skills"
                            class="block text-slate-400 hover:text-blue-400 transition hover:translate-x-2">Skills</a>
                        <a href="#projects"
                            class="block text-slate-400 hover:text-blue-400 transition hover:translate-x-2">Projects</a>
                        <a href="#experience"
                            class="block text-slate-400 hover:text-blue-400 transition hover:translate-x-2">Experience</a>
                        <a href="#contact"
                            class="block text-slate-400 hover:text-blue-400 transition hover:translate-x-2">Contact</a>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <h4 class="text-white font-bold mb-4">Connect</h4>
                    <div class="flex gap-4 mb-4">
                        <a href="https://linkedin.com/in/sandeepa-muthumal" target="_blank"
                            class="w-10 h-10 glass rounded-lg flex items-center justify-center hover:bg-blue-500 hover:text-white transition hover-lift">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://github.com/sandeepamuthumal" target="_blank"
                            class="w-10 h-10 glass rounded-lg flex items-center justify-center hover:bg-blue-500 hover:text-white transition hover-lift">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="mailto:sandeepamuthumal3@gmail.com"
                            class="w-10 h-10 glass rounded-lg flex items-center justify-center hover:bg-blue-500 hover:text-white transition hover-lift">
                            <i class="fas fa-envelope"></i>
                        </a>
                        {{-- <a href="https://twitter.com/sandeepa" target="_blank"
                            class="w-10 h-10 glass rounded-lg flex items-center justify-center hover:bg-blue-500 hover:text-white transition hover-lift">
                            <i class="fab fa-twitter"></i>
                        </a> --}}
                    </div>
                    <p class="text-slate-400 text-sm">
                        <i class="fas fa-briefcase mr-2"></i>Available for internship opportunities
                    </p>
                </div>
            </div>

            <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-slate-400 text-sm">
                    © <span id="currentYear"></span> Sandeepa Muthumal. All rights reserved.
                </p>
                <p class="text-slate-400 text-sm mt-4 md:mt-0">
                    Built with <span class="text-red-500 animate-pulse">❤</span> using Laravel & Tailwind CSS
                </p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Loading Screen
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.getElementById('loadingScreen').classList.add('hidden');
            }, 1000);
        });

        // Set current year
        document.getElementById('currentYear').textContent = new Date().getFullYear();

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

        // Mobile Menu Toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', () => {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    document.getElementById('mobileMenu').classList.add('hidden');
                }
            });
        });

        // Counter Animation for Stats
        function animateCounter(element) {
            const target = parseInt(element.getAttribute('data-count'));
            const duration = 2000;
            const increment = target / (duration / 16);
            let current = 0;

            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    element.textContent = Math.floor(current) + (element.textContent.includes('%') ? '%' : '+');
                    requestAnimationFrame(updateCounter);
                } else {
                    element.textContent = target + (element.textContent.includes('%') ? '%' : '+');
                }
            };
            updateCounter();
        }

        // Trigger counter animation when stats section is visible
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.querySelectorAll('[data-count]').forEach(counter => {
                        animateCounter(counter);
                    });
                    statsObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });

        const statsSection = document.querySelector('.stat-card')?.closest('section');
        if (statsSection) {
            statsObserver.observe(statsSection);
        }

        // Tab Switching
        function switchTab(tabName) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });

            // Remove active class from all buttons
            document.querySelectorAll('.tab-button').forEach(button => {
                button.classList.remove('active');
            });

            // Show selected tab content
            document.getElementById('content-' + tabName).classList.remove('hidden');

            // Add active class to clicked button
            document.getElementById('tab-' + tabName).classList.add('active');
        }


        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const button = e.target.querySelector('button[type="submit"]');
            const originalText = button.innerHTML;
            button.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Sending...';
            button.disabled = true;

            fetch("{{ route('contact.store') }}", {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                        'Accept': 'application/json'
                    },
                    body: new FormData(this)
                })
                .then(res => res.json())
                .then(data => {
                    if (data.status) {
                        button.innerHTML = originalText;
                        button.disabled = false;
                        this.reset();
                    }
                })
                .catch(() => alert('Something went wrong'));
        });
    </script>

    <script>
        // Parallax Effect on Mouse Move
        document.addEventListener('DOMContentLoaded', function() {
            const heroSection = document.getElementById('home');
            const profileWrapper = document.querySelector('.profile-wrapper');
            const particles = document.querySelectorAll('.particle');

            // Mouse parallax effect
            heroSection.addEventListener('mousemove', (e) => {
                const mouseX = e.clientX / window.innerWidth;
                const mouseY = e.clientY / window.innerHeight;

                // Move profile wrapper
                const moveX = (mouseX - 0.5) * 30;
                const moveY = (mouseY - 0.5) * 30;

                if (profileWrapper) {
                    profileWrapper.style.transform = `translate(${moveX}px, ${moveY}px)`;
                }

                // Move particles
                particles.forEach((particle, index) => {
                    const speed = (index + 1) * 0.5;
                    const x = (mouseX - 0.5) * speed * 10;
                    const y = (mouseY - 0.5) * speed * 10;
                    particle.style.transform = `translate(${x}px, ${y}px)`;
                });
            });

            // Tilt effect on profile image
            const profileImage = document.querySelector('.profile-image-wrapper');
            if (profileImage) {
                profileImage.addEventListener('mousemove', (e) => {
                    const rect = profileImage.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;

                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;

                    const rotateX = (y - centerY) / 10;
                    const rotateY = (centerX - x) / 10;

                    profileImage.style.transform =
                        `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`;
                });

                profileImage.addEventListener('mouseleave', () => {
                    profileImage.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale(1)';
                });
            }

            // Animate orbit items on click
            const orbitItems = document.querySelectorAll('.orbit-item');
            orbitItems.forEach(item => {
                item.addEventListener('click', function() {
                    this.style.animation = 'none';
                    setTimeout(() => {
                        this.style.animation = '';
                    }, 10);
                });
            });

            // Dynamic gradient text on scroll
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const gradientText = document.querySelector('.gradient-text-animated');

                if (gradientText) {
                    gradientText.style.backgroundPosition = `${scrolled}% center`;
                }
            });

            // Add sparkle effect on profile hover
            const profileMainContainer = document.querySelector('.profile-main-container');
            if (profileMainContainer) {
                profileMainContainer.addEventListener('mouseenter', () => {
                    createSparkles(profileMainContainer);
                });
            }
        });

        // Create sparkle particles
        function createSparkles(container) {
            for (let i = 0; i < 10; i++) {
                const sparkle = document.createElement('div');
                sparkle.className = 'sparkle';
                sparkle.style.cssText = `
            position: absolute;
            width: 4px;
            height: 4px;
            background: white;
            border-radius: 50%;
            pointer-events: none;
            animation: sparkleAnimation 1s ease-out forwards;
            left: ${Math.random() * 100}%;
            top: ${Math.random() * 100}%;
            box-shadow: 0 0 10px white;
        `;
                container.appendChild(sparkle);

                setTimeout(() => sparkle.remove(), 1000);
            }
        }

        // Sparkle animation (add to CSS if not present)
        const sparkleStyle = document.createElement('style');
        sparkleStyle.textContent = `
    @keyframes sparkleAnimation {
        0% {
            transform: scale(0) translateY(0);
            opacity: 1;
        }
        100% {
            transform: scale(1.5) translateY(-30px);
            opacity: 0;
        }
    }
`;
        document.head.appendChild(sparkleStyle);

        // Typing effect for subtitle (optional enhancement)
        function typeWriter(element, text, speed = 100) {
            let i = 0;
            element.textContent = '';

            function type() {
                if (i < text.length) {
                    element.textContent += text.charAt(i);
                    i++;
                    setTimeout(type, speed);
                }
            }

            type();
        }

        // Initialize typing effect
        const typingText = document.querySelector('.typing-text');
        if (typingText) {
            const originalText = typingText.textContent;
            typeWriter(typingText, originalText, 80);
        }
    </script>
</body>

</html>
