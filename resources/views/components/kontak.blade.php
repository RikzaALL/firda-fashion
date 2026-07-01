<section id="kontak" class="py-20 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20">
            <div class="space-y-8">
                <div class="space-y-3">
                    <p class="text-sm font-medium text-primary uppercase tracking-[0.2em]">Kontak</p>
                    <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-bold text-foreground leading-[1.05]">
                        Diskusikan Kebutuhan Menjahit Anda Dengan Kami
                    </h2>
                </div>

                <p class="text-foreground/70 leading-relaxed">
                    Kami terbuka untuk diskusi kebutuhan jahit, produksi apparel, pembuatan pola, hingga sablon. Sampaikan ide Anda, kami bantu prosesnya dengan standar kualitas yang konsisten.
                </p>

                <div class="space-y-5">
                    <div class="flex items-center gap-4 group">
                        <div class="w-12 h-12 bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-foreground">Email</p>
                            <a href="mailto:hayyamodiste06@gmail.com" class="text-foreground/70 hover:text-primary transition-colors text-sm">hayyamodiste06@gmail.com</a>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 group">
                        <div class="w-12 h-12 bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-foreground">WhatsApp</p>
                            <a href="https://wa.me/628211660627" target="_blank" rel="noopener noreferrer" class="text-foreground/70 hover:text-primary transition-colors text-sm">+62 821-1660-627</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 group">
                        <div class="w-12 h-12 bg-primary/10 flex items-center justify-center shrink-0 group-hover:bg-primary/20 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-foreground">Alamat</p>
                            <a href="https://maps.app.goo.gl/THrZZxo5EEVfNJMC6" target="_blank" rel="noopener noreferrer" class="text-foreground/70 hover:text-primary transition-colors text-sm">Kemiri Muka, Kota Depok, Jawa Barat</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 border border-border">
                <h3 class="font-display text-2xl font-semibold text-foreground mb-6">Kirim Pesan via WhatsApp</h3>
                <form x-data="{
                    name: '',
                    message: '',
                    sendWA() {
                        if (!this.name || !this.message) return;
                        const text = `Halo Hayya Modiste, saya ${this.name}. ${this.message}`;
                        window.open(`https://wa.me/628211660627?text=${encodeURIComponent(text)}`, '_blank');
                    }
                }" @submit.prevent="sendWA" class="space-y-5">
                    <div>
                        <label for="name" class="block text-sm font-medium text-foreground mb-2">Nama Anda</label>
                        <input type="text" id="name" x-model="name" required
                            class="w-full px-4 py-3 border border-border bg-background text-foreground text-sm focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary transition-all"
                            placeholder="Masukkan nama Anda">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-foreground mb-2">Pesan</label>
                        <textarea id="message" x-model="message" required rows="4"
                            class="w-full px-4 py-3 border border-border bg-background text-foreground text-sm focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary transition-all resize-none"
                            placeholder="Tulis pesan Anda di sini..."></textarea>
                    </div>
                    <button type="submit"
                        class="w-full px-6 py-3 bg-primary text-white font-medium text-sm hover:bg-primary/90 transition-all duration-300 cursor-pointer">
                        Kirim ke WhatsApp
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
