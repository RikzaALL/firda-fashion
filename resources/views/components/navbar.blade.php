<nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-b border-border/50 transition-transform duration-300"
     x-data="{ open: false, lastScroll: 0, visible: true }"
     x-init="window.addEventListener('scroll', () => {
         let currentScroll = window.pageYOffset;
         visible = currentScroll < lastScroll || currentScroll < 80;
         lastScroll = currentScroll;
     })"
     :class="{ '-translate-y-full': !visible }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            <div class="flex items-center gap-3">
            <a href="#home" class="block shrink-0">
                <img src="{{ asset('assets/Firda_Fashion_Logo.webp') }}" alt="Firda Fashion" class="h-10 lg:h-12 w-auto">
            </a>
            <a href="#home" class="font-display text-2xl lg:text-3xl font-bold text-primary tracking-tight">
                Firda Fashion
            </a>
            </div>

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

            <button @click="open = !open" class="lg:hidden p-2 text-foreground/80 hover:text-primary transition-colors" aria-label="Toggle menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <template x-if="!open">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </template>
                    <template x-if="open">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </template>
                </svg>
            </button>
        </div>
    </div>

    <div x-show="open" @click.away="open = false" x-transition:enter="animate-slide-down" class="lg:hidden border-t border-border/50 bg-white">
        <div class="px-4 py-4 space-y-3">
            <a href="#home" @click="open = false" class="block text-sm font-medium text-foreground/80 hover:text-primary transition-colors">Home</a>
            <a href="#layanan" @click="open = false" class="block text-sm font-medium text-foreground/80 hover:text-primary transition-colors">Layanan</a>
            <a href="#gallery" @click="open = false" class="block text-sm font-medium text-foreground/80 hover:text-primary transition-colors">Gallery Jahit</a>
            <a href="#tentang" @click="open = false" class="block text-sm font-medium text-foreground/80 hover:text-primary transition-colors">Tentang Kami</a>
            <a href="#kontak" @click="open = false" class="block text-sm font-medium text-foreground/80 hover:text-primary transition-colors">Kontak</a>
        </div>
    </div>
</nav>
