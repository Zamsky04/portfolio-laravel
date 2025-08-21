<x-layouts.app :title="$title" :meta="$meta">
    {{-- HERO SECTION --}}
    <section class="py-20 md:py-28 overflow-hidden">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="space-y-8">
                <!-- Badge -->
                <div class="anim-in-up">
                    <div class="status-available">
                        <div class="status-dot"></div>
                        <span>Full-stack Web Developer</span>
                    </div>
                </div>

                <!-- Main Heading -->
                <div class="anim-in-up delay-100">
                    <h1 class="section-title">
                        Bangun produk web
                        <span class="bg-gradient-to-r from-brand-600 to-brand-700 bg-clip-text text-transparent">elegan</span> &
                        <span class="bg-gradient-to-r from-accent-purple to-brand-600 bg-clip-text text-transparent">modern</span>
                    </h1>
                    <p class="section-subtitle mt-6">
                        Fokus pada Laravel + TailwindCSS. Saya mencintai arsitektur rapi, UX mulus, dan performa tinggi yang memberikan pengalaman luar biasa.
                    </p>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 anim-in-up delay-200">
                    <a href="#projects" class="btn-primary group">
                        <span>Lihat Proyek</span>
                        <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="#contact" class="btn-secondary group">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        <span>Mulai Diskusi</span>
                    </a>
                </div>

                <!-- Quick Info -->
                <div class="flex flex-wrap items-center gap-6 text-sm muted anim-in-up delay-300">
                    <div class="flex items-center gap-2">
                        <div class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></div>
                        <span>Tersedia freelance</span>
                    </div>
                    <div class="w-px h-4 bg-border"></div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>Berbasis di Indonesia</span>
                    </div>
                </div>
            </div>

            <!-- Right Content - Feature Cards -->
            <div class="relative">
                <!-- Floating background elements -->
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-gradient-to-br from-brand-400/20 to-accent-purple/20 rounded-full blur-3xl anim-float"></div>
                <div class="absolute -bottom-10 -left-10 w-24 h-24 bg-gradient-to-br from-accent-emerald/20 to-brand-500/20 rounded-full blur-2xl anim-float" style="animation-delay: 2s;"></div>

                <div class="card-glass p-8 anim-in-scale delay-200">
                    <div class="grid gap-6">
                        <!-- Tech Stack Card -->
                        <div class="card-elevated p-6 group hover:scale-105 transition-all duration-300">
                            <div class="flex items-center gap-4">
                                <div class="interactive-icon">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-ink">Lightning Fast</h3>
                                    <p class="text-sm muted">Vite + Tailwind 4.1</p>
                                </div>
                            </div>
                        </div>

                        <!-- Architecture Card -->
                        <div class="card-elevated p-6 group hover:scale-105 transition-all duration-300">
                            <div class="flex items-center gap-4">
                                <div class="interactive-icon" style="background: var(--gradient-secondary);">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-ink">Clean Architecture</h3>
                                    <p class="text-sm muted">Scalable & Maintainable</p>
                                </div>
                            </div>
                        </div>

                        <!-- Focus Card -->
                        <div class="card-elevated p-6 group hover:scale-105 transition-all duration-300">
                            <div class="flex items-center gap-4">
                                <div class="interactive-icon" style="background: var(--gradient-accent);">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-ink">User-Centered</h3>
                                    <p class="text-sm muted">DX mantap, UX halus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ABOUT SECTION --}}
    <section id="about" class="py-20 relative">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-gradient-to-br from-brand-50/50 to-accent-purple/5 rounded-3xl"></div>

        <div class="relative max-w-4xl">
            <div class="anim-in-up">
                <h2 class="section-title">Tentang Saya</h2>
                <p class="section-subtitle mt-6">
                    Saya developer yang passionate dalam membangun antarmuka bersih dan backend yang kuat.
                    Berpengalaman di Laravel, Tailwind, dan integrasi komponen modern seperti Alpine.js dan Livewire.
                    Selalu memperhatikan aksesibilitas, SEO, dan maintainability dalam setiap proyek.
                </p>
            </div>

            <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="card p-6 anim-in-up delay-200 group">
                    <div class="interactive-icon mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-ink mb-2">Pengalaman</h3>
                    <p class="text-sm muted-light">3+ tahun mengembangkan aplikasi web modern dengan teknologi terkini</p>
                </div>

                <div class="card p-6 anim-in-up delay-300 group">
                    <div class="interactive-icon mb-4 group-hover:scale-110 transition-transform" style="background: var(--gradient-secondary);">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-ink mb-2">Stack Utama</h3>
                    <p class="text-sm muted-light">Laravel, TailwindCSS, MySQL, Alpine.js untuk pengalaman development optimal</p>
                </div>

                <div class="card p-6 anim-in-up delay-400 group sm:col-span-2 lg:col-span-1">
                    <div class="interactive-icon mb-4 group-hover:scale-110 transition-transform" style="background: var(--gradient-accent);">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-ink mb-2">Philosophy</h3>
                    <p class="text-sm muted-light">Code yang clean, performa tinggi, dan user experience yang memukau</p>
                </div>
            </div>
        </div>
    </section>

    {{-- PROJECTS SECTION --}}
    <section id="projects" class="py-20">
        <div class="flex items-end justify-between gap-4 mb-12">
            <div>
                <h2 class="section-title anim-in-up">Proyek Terpilih</h2>
                <p class="section-subtitle mt-4 anim-in-up delay-100">Beberapa karya terbaik yang telah saya kerjakan</p>
            </div>
            <a href="#" class="u-underline text-sm font-medium text-brand-700 hover:text-brand-600 anim-in-up delay-200">
                Lihat semua proyek
            </a>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($projects as $project)
            <article class="group card overflow-hidden anim-in-up" style="animation-delay: {{ ($loop->index + 1) * 150 }}ms">
                <!-- Project Image -->
                <div class="aspect-[16/9] overflow-hidden relative">
                    <img src="{{ $project['image'] }}"
                            alt="{{ $project['title'] }}"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>

                <!-- Project Content -->
                <div class="p-6">
                    <h3 class="font-bold text-xl text-ink mb-3 group-hover:text-brand-700 transition-colors">
                        {{ $project['title'] }}
                    </h3>
                    <p class="text-sm muted leading-relaxed mb-4">{{ $project['desc'] }}</p>

                    <!-- Tech Stack Tags -->
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach ($project['tags'] as $tag)
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-brand-50 text-brand-700 border border-brand-200">
                            {{ $tag }}
                        </span>
                        @endforeach
                    </div>

                    <!-- Project Link -->
                    <div class="flex items-center justify-between">
                        <a href="{{ $project['link'] }}"  target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 text-sm font-semibold text-brand-700 u-underline group/link">
                            <span>Lihat Detail</span>
                            <svg class="w-4 h-4 transition-transform group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>

                        <!-- Live/Demo badge if applicable -->
                        @if(isset($project['live']) && $project['live'])
                        <div class="flex items-center gap-1 text-xs text-emerald-600">
                            <div class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></div>
                            <span>Live</span>
                        </div>
                        @endif
                    </div>
                </div>
            </article>
            @endforeach
        </div>

        <!-- Load More Button -->
        <div class="mt-12 text-center anim-in-up delay-500">
            <a href="#" class="btn-secondary">
                <span>Lihat Lebih Banyak</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7"/>
                </svg>
            </a>
        </div>
    </section>

    {{-- SKILLS SECTION --}}
    <section id="skills" class="py-20 relative">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-wash to-brand-50/30 rounded-3xl"></div>

        <div class="relative">
            <div class="text-center mb-16">
                <h2 class="section-title anim-in-up">Keahlian Teknis</h2>
                <p class="section-subtitle mt-6 anim-in-up delay-100">
                    Teknologi dan tools yang saya kuasai untuk membangun solusi digital terbaik
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($skills as [$name, $pct])
                <div class="card-elevated p-6 anim-in-up group" style="animation-delay: {{ ($loop->index + 1) * 80 }}ms">
                    <div class="flex items-center justify-between mb-4">
                    <h3 class="font-semibold text-ink">{{ $name }}</h3>
                    <div class="text-sm font-bold text-brand-700">{{ $pct }}%</div>
                    </div>

                    <!-- Progress (GPU transform + gradient) -->
                    <div class="h-2 rounded-full bg-neutral-200/70 overflow-hidden">
                        <div
                            class="skill-progress h-full rounded-full origin-left will-change-transform
                                [background:linear-gradient(90deg,theme(colors.blue.500),theme(colors.indigo.500))]"
                            style="
                            --sx: {{ $pct/100 }};
                            --dur: 950ms;
                            --delay: {{ ($loop->index + 1) * 80 }}ms;
                            transform: scaleX(var(--sx));          /* Fallback: selalu terlihat */
                            opacity: 1;                            /* Fallback: selalu terlihat */
                            ">
                        </div>
                    </div>

                    <div class="mt-3">
                    {{-- deskripsi seperti milikmu --}}
                    @if($name === 'Laravel')
                    <p class="text-xs muted">Framework PHP untuk rapid development</p>
                    @elseif($name === 'TailwindCSS')
                    <p class="text-xs muted">Utility-first CSS framework</p>
                    @elseif($name === 'JavaScript')
                    <p class="text-xs muted">Modern ES6+ & DOM manipulation</p>
                    @elseif($name === 'MySQL')
                    <p class="text-xs muted">Database design & optimization</p>
                    @elseif($name === 'Git')
                    <p class="text-xs muted">Version control & collaboration</p>
                    @else
                    <p class="text-xs muted">Professional level expertise</p>
                    @endif
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Additional Skills Cloud -->
            <div class="mt-16 text-center">
                <h3 class="font-semibold text-slate-900 mb-8 anim-in-up">Tools & Technologies</h3>

                <div class="flex flex-wrap justify-center gap-4 anim-in-up delay-200">
                    @php
                    $tools = [
                        ['name' => 'Alpine.js', 'icon' => 'alpinejs/alpinejs-original.svg', 'url' => 'https://alpinejs.dev'],
                        ['name' => 'Livewire',  'icon' => 'laravel/laravel-plain.svg',      'url' => 'https://livewire.laravel.com'],
                        ['name' => 'Vite',      'icon' => 'vitejs/vitejs-original.svg',     'url' => 'https://vitejs.dev'],
                        ['name' => 'Docker',    'icon' => 'docker/docker-original.svg',     'url' => 'https://www.docker.com'],
                        ['name' => 'Redis',     'icon' => 'redis/redis-original.svg',       'url' => 'https://redis.io'],
                        ['name' => 'Figma',     'icon' => 'figma/figma-original.svg',       'url' => 'https://figma.com'],
                        ['name' => 'VS Code',   'icon' => 'vscode/vscode-original.svg',     'url' => 'https://code.visualstudio.com'],
                        ['name' => 'Postman',   'icon' => 'postman/postman-original.svg',   'url' => 'https://www.postman.com'],
                        ['name' => 'GitHub',    'icon' => 'github/github-original.svg',     'url' => 'https://github.com'],
                        ['name' => 'Vercel',    'icon' => 'vercel/vercel-original.svg',     'url' => 'https://vercel.com'],
                    ];
                    @endphp

                    @foreach ($tools as $tool)
                    <a href="{{ $tool['url'] }}" target="_blank" rel="noopener"
                        class="group relative inline-flex items-center justify-center p-3 rounded-xl bg-white/80 border border-slate-200 shadow-sm
                                hover:bg-white hover:shadow-md hover:-translate-y-0.5 transition-all duration-300">
                        <img
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/{{ $tool['icon'] }}"
                        alt="{{ $tool['name'] }} logo"
                        loading="lazy"
                        class="w-8 h-8 transition-transform duration-300 group-hover:scale-110 group-hover:rotate-3">
                        <span class="sr-only">{{ $tool['name'] }}</span>

                        {{-- Tooltip --}}
                        <span class="pointer-events-none absolute -bottom-10 left-1/2 -translate-x-1/2
                                    whitespace-nowrap rounded-md bg-slate-900 text-white text-xs px-2 py-1
                                    opacity-0 translate-y-1 group-hover:opacity-100 group-hover:translate-y-0
                                    transition-all duration-200 shadow">
                        {{ $tool['name'] }}
                        </span>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- CONTACT SECTION --}}
    <section id="contact" class="py-20">
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Contact Info -->
            <div class="space-y-8">
                <div class="anim-in-up">
                    <h2 class="section-title">Mari Berkolaborasi</h2>
                    <p class="section-subtitle mt-6">
                        Punya ide proyek menarik atau ingin berdiskusi tentang teknologi?
                        Saya selalu terbuka untuk peluang baru dan tantangan yang menginspirasi.
                        <span class="font-semibold text-brand-700">Respons biasanya ≤ 24 jam.</span>
                    </p>
                </div>

                <!-- Contact Methods -->
                <div class="space-y-6 anim-in-up delay-200">
                    <!-- Email -->
                    <div class="group flex items-center gap-4 p-4 rounded-2xl hover:bg-brand-50/50 transition-all duration-200">
                        <div class="interactive-icon group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 4.26c.3.15.64.15.94 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-ink">Email</h4>
                            <a href="mailto:email@domainkamu.com" class="text-muted hover:text-brand-700 transition-colors">
                                azzamlathifun01@gmail.com
                            </a>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="group flex items-center gap-4 p-4 rounded-2xl hover:bg-brand-50/50 transition-all duration-200">
                        <div class="interactive-icon group-hover:scale-110 transition-transform" style="background: var(--gradient-secondary);">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-ink">Telepon</h4>
                            <a href="tel:+6281234567890" class="text-muted hover:text-brand-700 transition-colors">
                                +62 853-1106-5944
                            </a>
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="group flex items-center gap-4 p-4 rounded-2xl hover:bg-brand-50/50 transition-all duration-200">
                        <div class="interactive-icon group-hover:scale-110 transition-transform" style="background: var(--gradient-accent);">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-ink">Lokasi</h4>
                            <span class="text-muted">Tangerang, Indonesia</span>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="anim-in-up delay-300">
                    <h4 class="font-medium text-ink mb-4">Temukan saya di</h4>
                    <div class="flex gap-4">
                        <a href="#" class="interactive-icon hover:scale-110 transition-all duration-200 group">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="interactive-icon hover:scale-110 transition-all duration-200" style="background: var(--gradient-secondary);">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <a href="#" class="interactive-icon hover:scale-110 transition-all duration-200" style="background: var(--gradient-accent);">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212-.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="anim-in-up delay-400">
                <form class="card-elevated p-8 space-y-6">
                    <div class="text-center mb-8">
                        <h3 class="text-xl font-semibold text-ink mb-2">Kirim Pesan</h3>
                        <p class="text-sm muted">Ceritakan tentang proyek atau ide Anda</p>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-6">
                        <!-- Name Field -->
                        <div class="relative">
                            <label class="block text-sm font-medium text-ink mb-2">Nama Lengkap</label>
                            <input type="text"
                                   required
                                   class="w-full px-4 py-3 rounded-xl border border-border bg-white focus:outline-none focus:ring-4 focus:ring-brand-500/20 focus:border-brand-500 transition-all duration-200"
                                   placeholder="John Doe">
                        </div>

                        <!-- Email Field -->
                        <div class="relative">
                            <label class="block text-sm font-medium text-ink mb-2">Email</label>
                            <input type="email"
                                   required
                                   class="w-full px-4 py-3 rounded-xl border border-border bg-white focus:outline-none focus:ring-4 focus:ring-brand-500/20 focus:border-brand-500 transition-all duration-200"
                                   placeholder="john@example.com">
                        </div>
                    </div>

                    <!-- Subject Field -->
                    <div class="relative">
                        <label class="block text-sm font-medium text-ink mb-2">Subjek</label>
                        <select class="w-full px-4 py-3 rounded-xl border border-border bg-white focus:outline-none focus:ring-4 focus:ring-brand-500/20 focus:border-brand-500 transition-all duration-200">
                            <option value="">Pilih kategori proyek</option>
                            <option value="web-development">Web Development</option>
                            <option value="ui-ux-design">UI/UX Design</option>
                            <option value="consultation">Konsultasi</option>
                            <option value="maintenance">Maintenance</option>
                            <option value="other">Lainnya</option>
                        </select>
                    </div>

                    <!-- Message Field -->
                    <div class="relative">
                        <label class="block text-sm font-medium text-ink mb-2">Pesan</label>
                        <textarea rows="5"
                                  required
                                  class="w-full px-4 py-3 rounded-xl border border-border bg-white focus:outline-none focus:ring-4 focus:ring-brand-500/20 focus:border-brand-500 transition-all duration-200 resize-none"
                                  placeholder="Ceritakan tentang proyek atau pertanyaan Anda..."></textarea>
                    </div>

                    <!-- Budget Range (Optional) -->
                    <div class="relative">
                        <label class="block text-sm font-medium text-ink mb-2">Budget Range (Opsional)</label>
                        <select class="w-full px-4 py-3 rounded-xl border border-border bg-white focus:outline-none focus:ring-4 focus:ring-brand-500/20 focus:border-brand-500 transition-all duration-200">
                            <option value="">Pilih range budget</option>
                            <option value="under-5m">< Rp 5 juta</option>
                            <option value="5-10m">Rp 5-10 juta</option>
                            <option value="10-25m">Rp 10-25 juta</option>
                            <option value="25-50m">Rp 25-50 juta</option>
                            <option value="above-50m">> Rp 50 juta</option>
                        </select>
                    </div>

                    <!-- Agreement Checkbox -->
                    <div class="flex items-start gap-3">
                        <input type="checkbox"
                               id="agreement"
                               required
                               class="mt-1 w-4 h-4 text-brand-600 bg-white border-border rounded focus:ring-brand-500/20 focus:ring-2">
                        <label for="agreement" class="text-sm text-muted leading-relaxed">
                            Saya setuju dengan <a href="#" class="text-brand-700 u-underline">syarat dan ketentuan</a>
                            serta <a href="#" class="text-brand-700 u-underline">kebijakan privasi</a> yang berlaku.
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full btn-primary group">
                        <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                        </svg>
                        <span>Kirim Pesan</span>
                    </button>

                    <!-- Form Footer -->
                    <div class="text-center pt-4 border-t border-border-light">
                        <p class="text-xs muted">
                            Pesan Anda akan dibalas dalam 24 jam pada hari kerja
                        </p>
                    </div>
                </form>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="mt-20 pt-20 border-t border-border-light" x-data="{active:null}">
            <div class="text-center mb-12">
                <h3 class="text-2xl font-semibold text-ink anim-in-up">Frequently Asked Questions</h3>
                <p class="section-subtitle mt-4 anim-in-up">Jawaban untuk pertanyaan yang sering ditanyakan</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Kolom 1 -->
                <div class="space-y-4">
                <!-- FAQ 1 -->
                <div class="card p-6 anim-in-up cursor-pointer" @click="active = active === 1 ? null : 1">
                    <div class="flex justify-between items-center text-left">
                    <h4 class="font-semibold text-ink">Berapa lama waktu pengerjaan proyek?</h4>
                    <svg :class="{'rotate-180':active===1}" class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                    </div>
                    <div x-show="active===1" x-collapse class="overflow-hidden">
                    <p class="mt-3 text-sm muted leading-relaxed">
                        Waktu pengerjaan bervariasi tergantung kompleksitas proyek. Website sederhana biasanya 1–2 minggu,
                        sedangkan aplikasi web kompleks bisa memakan waktu 4–8 minggu.
                    </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="card p-6 anim-in-up cursor-pointer" @click="active = active === 2 ? null : 2">
                    <div class="flex justify-between items-center text-left">
                    <h4 class="font-semibold text-ink">Apakah menyediakan maintenance?</h4>
                    <svg :class="{'rotate-180':active===2}" class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                    </div>
                    <div x-show="active===2" x-collapse class="overflow-hidden">
                    <p class="mt-3 text-sm muted leading-relaxed">
                        Ya, saya menyediakan layanan maintenance dan support setelah proyek selesai.
                        Termasuk bug fixes, update konten, dan optimisasi performa.
                    </p>
                    </div>
                </div>
                </div>

                <!-- Kolom 2 -->
                <div class="space-y-4">
                <!-- FAQ 3 -->
                <div class="card p-6 anim-in-up cursor-pointer" @click="active = active === 3 ? null : 3">
                    <div class="flex justify-between items-center text-left">
                    <h4 class="font-semibold text-ink">Teknologi apa yang biasa digunakan?</h4>
                    <svg :class="{'rotate-180':active===3}" class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                    </div>
                    <div x-show="active===3" x-collapse class="overflow-hidden">
                    <p class="mt-3 text-sm muted leading-relaxed">
                        Saya fokus pada Laravel untuk backend, TailwindCSS untuk styling, dan Alpine.js untuk interaktivitas.
                        Database menggunakan MySQL atau PostgreSQL.
                    </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="card p-6 anim-in-up cursor-pointer" @click="active = active === 4 ? null : 4">
                    <div class="flex justify-between items-center text-left">
                    <h4 class="font-semibold text-ink">Bagaimana sistem pembayaran?</h4>
                    <svg :class="{'rotate-180':active===4}" class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                    </div>
                    <div x-show="active===4" x-collapse class="overflow-hidden">
                    <p class="mt-3 text-sm muted leading-relaxed">
                        Pembayaran dilakukan bertahap: 50% di awal sebagai down payment,
                        25% saat milestone tengah, dan 25% sisanya setelah proyek selesai dan approved.
                    </p>
                    </div>
                </div>
                </div>
            </div>
            </div>

    </section>
</x-layouts.app>
