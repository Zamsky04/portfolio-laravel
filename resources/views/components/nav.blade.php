@php $links = [
    ['#about', 'Tentang', 'user'],
    ['#projects', 'Proyek', 'folder'],
    ['#skills', 'Keahlian', 'code'],
    ['#contact', 'Kontak', 'message-circle'],
]; @endphp

<header id="top" class="sticky top-0 z-50 border-b nav-glass transition-all duration-300">
    <div class="mx-auto max-w-7xl px-4 py-4">
        <div class="flex items-center justify-between">
        <!-- Logo -->
        <a href="/" class="flex items-center gap-3 font-bold text-lg group">
            <div class="relative">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-purple-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition-opacity"></div>
            <div class="relative inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-600 to-purple-600 text-white font-bold shadow-lg">
                SB
            </div>
            </div>
            <div class="hidden sm:block">
            <span class="bg-gradient-to-r from-slate-900 to-slate-700 bg-clip-text text-transparent">
                Sky Blue
            </span>
            <div class="text-xs text-slate-500 font-normal -mt-1">Portfolio</div>
            </div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex items-center gap-1">
            @foreach($links as [$href, $label, $icon])
            <a href="{{ $href }}"
                class="group relative px-4 py-2 rounded-xl text-sm font-medium text-slate-700 hover:text-blue-600 transition-all duration-200 u-underline">
                <div class="flex items-center gap-2">
                <!-- Icon (using heroicons) -->
                @if($icon === 'user')
                <svg class="w-4 h-4 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                @elseif($icon === 'folder')
                <svg class="w-4 h-4 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/>
                </svg>
                @elseif($icon === 'code')
                <svg class="w-4 h-4 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                </svg>
                @elseif($icon === 'message-circle')
                <svg class="w-4 h-4 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
                @endif
                <span>{{ $label }}</span>
                </div>

                <!-- Active indicator -->
                <div class="absolute inset-x-2 -bottom-1 h-0.5 bg-gradient-to-r rounded-full scale-x-0 group-hover:scale-x-100 transition-transform origin-center"></div>
            </a>
            @endforeach

            <!-- CTA Button -->
            <div class="ml-6 pl-6 border-l border-slate-200">
            <a href="#contact" class="btn-primary group">
                <span>Hubungi Saya</span>
                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            </div>
        </nav>

        <!-- Mobile Menu Button -->
        <button id="btnMobile" class="lg:hidden inline-flex items-center justify-center w-10 h-10 rounded-xl border border-slate-200 bg-white/80 backdrop-blur-sm hover:bg-white transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-blue-500/20">
            <svg class="w-5 h-5 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <span class="sr-only">Toggle menu</span>
        </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="lg:hidden hidden">
        <div class="absolute top-full left-0 right-0 bg-white/95 backdrop-blur-xl border-t border-slate-200 shadow-xl">
            <div class="mx-auto max-w-7xl px-4 py-6">
            <!-- Mobile Navigation Links -->
            <div class="space-y-1 mb-6">
                @foreach($links as [$href, $label, $icon])
                <a href="{{ $href }}"
                    class="group flex items-center gap-4 px-4 py-3 rounded-2xl text-slate-700 hover:text-blue-600 hover:bg-blue-50/50 transition-all duration-200">
                    <!-- Icon -->
                    @if($icon === 'user')
                    <svg class="w-5 h-5 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    @elseif($icon === 'folder')
                    <svg class="w-5 h-5 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/>
                    </svg>
                    @elseif($icon === 'code')
                    <svg class="w-5 h-5 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                    @elseif($icon === 'message-circle')
                    <svg class="w-5 h-5 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    @endif

                    <div class="flex-1">
                    <div class="font-medium">{{ $label }}</div>
                    @if($href === '#about')
                        <div class="text-xs text-slate-500">Lebih dekat dengan saya</div>
                    @elseif($href === '#projects')
                        <div class="text-xs text-slate-500">Karya & pencapaian</div>
                    @elseif($href === '#skills')
                        <div class="text-xs text-slate-500">Keahlian teknologi</div>
                    @elseif($href === '#contact')
                        <div class="text-xs text-slate-500">Mari berkolaborasi</div>
                    @endif
                    </div>

                    <svg class="w-4 h-4 opacity-40 group-hover:opacity-100 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
                @endforeach
            </div>

            <!-- Mobile CTA -->
            <div class="pt-4 border-t border-slate-200">
                <a href="#contact" class="w-full btn-primary justify-center">
                <span>Mulai Proyek</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
                </a>

                <!-- Quick Contact Info -->
                <div class="mt-4 pt-4 border-t border-slate-100 text-center space-y-2 text-sm text-slate-600">
                <div class="flex items-center justify-center gap-2">
                    <div class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></div>
                    <span>Tersedia untuk proyek baru</span>
                </div>
                <div>Respons dalam 24 jam</div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Progress indicator -->
    <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-blue-600 via-purple-600 to-emerald-600 transform scale-x-0 transition-transform origin-left" id="scrollProgress"></div>
</header>

<script>
// Update scroll progress indicator
window.addEventListener('scroll', () => {
    const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrolled = (winScroll / height) * 100;

    const progressBar = document.getElementById('scrollProgress');
    if (progressBar) {
        progressBar.style.transform = `scaleX(${scrolled / 100})`;
    }
    });
</script>
