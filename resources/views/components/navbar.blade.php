<nav x-data="{ show: true, lastScroll: 0 }" x-init="window.addEventListener('scroll', () => { let st = window.scrollY; show = st <= lastScroll || st < 80; lastScroll = st; })" :class="show ? 'translate-y-0' : '-translate-y-full'" class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-b border-border/50 transition-transform duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            <a href="#home" class="flex items-center gap-3 shrink-0">
                <img src="{{ asset('assets/Logo_Hayya_Fashion.webp') }}" alt="Hayya Modiste" class="h-10 lg:h-12 w-auto">
                <span class="font-display text-2xl lg:text-3xl font-bold text-primary tracking-tight">Hayya Modiste</span>
            </a>

            <div class="hidden lg:flex items-center gap-8">
                <a href="#home" class="group relative text-sm font-medium text-foreground/80 hover:text-primary transition-colors duration-200">
                    Home
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="#layanan" class="group relative text-sm font-medium text-foreground/80 hover:text-primary transition-colors duration-200">
                    Layanan
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="#gallery" class="group relative text-sm font-medium text-foreground/80 hover:text-primary transition-colors duration-200">
                    Gallery Jahit
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="#tentang" class="group relative text-sm font-medium text-foreground/80 hover:text-primary transition-colors duration-200">
                    Tentang Kami
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="#kontak" class="group relative text-sm font-medium text-foreground/80 hover:text-primary transition-colors duration-200">
                    Kontak
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary group-hover:w-full transition-all duration-300"></span>
                </a>
            </div>
        </div>

        <div class="lg:hidden flex items-center gap-4 pb-3 overflow-x-auto">
            <a href="#home" class="shrink-0 text-xs font-medium uppercase tracking-wider text-foreground/80 hover:text-primary transition-colors px-3 py-1.5 bg-primary/5 rounded-md">Home</a>
            <a href="#layanan" class="shrink-0 text-xs font-medium uppercase tracking-wider text-foreground/80 hover:text-primary transition-colors px-3 py-1.5 bg-primary/5 rounded-md">Layanan</a>
            <a href="#gallery" class="shrink-0 text-xs font-medium uppercase tracking-wider text-foreground/80 hover:text-primary transition-colors px-3 py-1.5 bg-primary/5 rounded-md">Gallery</a>
            <a href="#tentang" class="shrink-0 text-xs font-medium uppercase tracking-wider text-foreground/80 hover:text-primary transition-colors px-3 py-1.5 bg-primary/5 rounded-md">Tentang</a>
            <a href="#kontak" class="shrink-0 text-xs font-medium uppercase tracking-wider text-foreground/80 hover:text-primary transition-colors px-3 py-1.5 bg-primary/5 rounded-md">Kontak</a>
        </div>
    </div>
</nav>
