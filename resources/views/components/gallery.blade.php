<section id="gallery" class="py-20 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <p class="text-sm font-medium text-primary uppercase tracking-[0.2em] mb-3">Portofolio</p>
            <h2 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold text-foreground">
                Gallery Jahit
            </h2>
            <div class="w-16 h-0.5 bg-primary mx-auto mt-6"></div>
        </div>

        @php
            $items = [
                ['Gaun Pesta', 'Elegan & Mewah', 'gaun_pesta.webp'],
                ['Kemeja', 'Rapi & Profesional', 'kemeja.webp'],
                ['Busana Muslim', 'Sopan & Modern', 'busana_muslim.webp'],
                ['Kebaya', 'Tradisional & Anggun', 'kebaya.webp'],
                ['Blus Wanita', 'Cantik & Trendy', 'blus_wanita.webp'],
            ];
        @endphp

        <div class="relative -mx-4 sm:-mx-6 lg:-mx-8 px-4 sm:px-6 lg:px-8"
             x-data="galleryData()"
             x-init="calc()"
             x-on:resize.window.debounce="calc()">
            <div class="overflow-hidden">
                <div class="flex gap-6 transition-transform duration-500 ease-out will-change-transform"
                     x-ref="track"
                     :style="'transform: translateX(-' + offset + 'px)'">
                    @foreach ($items as $item)
                    <div class="group relative overflow-hidden bg-muted w-72 sm:w-80 aspect-[4/5] shrink-0 cursor-pointer">
                        <img src="{{ asset('assets/' . $item[2]) }}" alt="{{ $item[0] }}" loading="lazy" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-primary/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                            <div>
                                <h3 class="text-white font-display text-xl font-semibold">{{ $item[0] }}</h3>
                                <p class="text-white/80 text-sm mt-1">{{ $item[1] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <button @click="prev()" x-show="current > 0"
                class="absolute left-2 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-white/90 hover:bg-white border border-border shadow-sm flex items-center justify-center transition-all duration-200 cursor-pointer z-10"
                aria-label="Previous">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-foreground" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button @click="next()" x-show="current < total - 1"
                class="absolute right-2 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-white/90 hover:bg-white border border-border shadow-sm flex items-center justify-center transition-all duration-200 cursor-pointer z-10"
                aria-label="Next">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-foreground" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>
</section>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('galleryData', () => ({
            total: {{ count($items) }},
            current: 0,
            trackW: 0,
            viewW: 0,
            next() {
                if (this.current < this.total - 1) this.current++;
            },
            prev() {
                if (this.current > 0) this.current--;
            },
            calc() {
                let el = this.$refs.track;
                if (!el) return;
                this.trackW = el.scrollWidth;
                this.viewW = el.parentElement.offsetWidth;
            },
            get maxOffset() {
                return Math.max(0, this.trackW - this.viewW);
            },
            get offset() {
                if (this.total <= 1) return 0;
                return this.current * this.maxOffset / (this.total - 1);
            }
        }));
    });
</script>
