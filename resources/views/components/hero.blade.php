<section id="home" class="min-h-screen pt-28 lg:pt-20 flex items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="space-y-8 py-12 lg:py-20">
                <div class="space-y-2">
                    <h1 class="font-display text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-bold text-foreground leading-[0.9] tracking-tight text-balance">
                        Firda Fashion
                    </h1>
                </div>

                <p class="font-display text-xl sm:text-2xl lg:text-3xl text-primary font-medium italic">
                    Esensi dari Sebuah Gaya
                </p>

                <p class="text-base sm:text-lg text-foreground/70 leading-relaxed max-w-xl">
                    Kami membantumu mewujudkan ide menjadi suatu pakaian melalui proses jahit, pembuatan pola yang dikerjakan dengan presisi dan detail menyeluruh.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="#gallery" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white font-medium text-sm rounded-none hover:bg-primary/90 transition-all duration-300">
                        Gallery Jahit
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="#kontak" class="inline-flex items-center gap-2 px-6 py-3 border-2 border-primary text-primary font-medium text-sm rounded-none hover:bg-primary hover:text-white transition-all duration-300">
                        Hubungi Kami
                    </a>
                </div>
            </div>

            <div class="relative mt-12 lg:mt-0">
                <div class="aspect-[3/4] bg-gradient-to-br from-primary/10 to-secondary/10 relative overflow-hidden">
                    <img src="{{ asset('assets/FotoModelFF.webp') }}" alt="Firda Fashion Model" class="w-full h-full object-cover">
                    <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-accent/10 -z-10"></div>
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-primary/10 -z-10"></div>
                </div>
            </div>
        </div>
    </div>
</section>
