<!-- Transparent Floating Sidebar (Desktop) -->
<nav class="hidden md:flex fixed left-0 top-0 w-48 h-screen flex-col justify-center items-start pl-12 z-[500] pointer-events-none">
    
    <!-- Simple Logo at the Top -->
    <div class="absolute top-16 left-12 pointer-events-auto">
        <a href="#inicio" class="group flex items-center gap-2">
            <span class="text-white font-black text-2xl tracking-tighter hover:text-sky-500 transition-colors uppercase">
                Beder<span class="text-sky-500">.</span>
            </span>
        </a>
    </div>

    <!-- Minimalist Text Navigation with Numbers -->
    <div class="flex flex-col gap-10 pointer-events-auto">
        <a href="#inicio" class="nav-link group flex items-center gap-4 text-[10px] font-bold uppercase tracking-[0.4em] text-slate-600 hover:text-white transition-all duration-500 active">
            <span class="nav-number font-mono text-[8px] text-slate-800 transition-colors">01</span>
            <span class="nav-text transition-transform duration-500">Inicio</span>
        </a>
        <a href="#trayectoria" class="nav-link group flex items-center gap-4 text-[10px] font-bold uppercase tracking-[0.4em] text-slate-600 hover:text-white transition-all duration-500">
            <span class="nav-number font-mono text-[8px] text-slate-800 transition-colors">02</span>
            <span class="nav-text transition-transform duration-500">Trayectoria</span>
        </a>
        <a href="#proyectos" class="nav-link group flex items-center gap-4 text-[10px] font-bold uppercase tracking-[0.4em] text-slate-600 hover:text-white transition-all duration-500">
            <span class="nav-number font-mono text-[8px] text-slate-800 transition-colors">03</span>
            <span class="nav-text transition-transform duration-500">Proyectos</span>
        </a>
        <a href="#habilidades" class="nav-link group flex items-center gap-4 text-[10px] font-bold uppercase tracking-[0.4em] text-slate-600 hover:text-white transition-all duration-500">
            <span class="nav-number font-mono text-[8px] text-slate-800 transition-colors">04</span>
            <span class="nav-text transition-transform duration-500">Habilidades</span>
        </a>
        <a href="#contacto" class="nav-link group flex items-center gap-4 text-[10px] font-bold uppercase tracking-[0.4em] text-slate-600 hover:text-white transition-all duration-500">
            <span class="nav-number font-mono text-[8px] text-slate-800 transition-colors">05</span>
            <span class="nav-text transition-transform duration-500">Contacto</span>
        </a>
    </div>

    <!-- Simple Year at the Bottom -->
    <div class="absolute bottom-16 left-12 opacity-20">
        <p class="text-[8px] font-bold text-slate-400 uppercase tracking-[0.5em] [writing-mode:vertical-lr] rotate-180">Est. 2026</p>
    </div>

</nav>

<!-- Mobile Top Header Bar -->
<header class="md:hidden fixed top-0 left-0 right-0 z-[490] px-6 py-4 bg-slate-950/80 backdrop-blur-xl border-b border-white/5 flex justify-between items-center">
    <a href="#inicio" class="text-white font-black text-xl tracking-tighter uppercase">
        Beder<span class="text-sky-500">.</span>
    </a>
    <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10">
        <span class="relative flex h-2 w-2">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-2 w-2 bg-sky-500"></span>
        </span>
        <span class="text-[9px] font-bold text-sky-400 uppercase tracking-widest">Disponible</span>
    </div>
</header>

<!-- Mobile Navigation Bar (Modern Glass Floating Bar) -->
<nav class="md:hidden fixed bottom-6 left-1/2 -translate-x-1/2 w-[92%] max-w-md flex items-center justify-between z-[500] px-4 py-3 bg-slate-900/80 backdrop-blur-2xl rounded-3xl border border-white/10 shadow-2xl">
    <a href="#inicio" class="nav-link flex flex-col items-center gap-0.5 px-2 py-1 rounded-xl transition-all active">
        <span class="nav-number text-[8px] font-mono text-slate-500">01</span>
        <span class="nav-text text-[9px] font-bold uppercase tracking-wider text-slate-400">Ini</span>
    </a>
    <a href="#trayectoria" class="nav-link flex flex-col items-center gap-0.5 px-2 py-1 rounded-xl transition-all">
        <span class="nav-number text-[8px] font-mono text-slate-500">02</span>
        <span class="nav-text text-[9px] font-bold uppercase tracking-wider text-slate-400">Bio</span>
    </a>
    <a href="#proyectos" class="nav-link flex flex-col items-center gap-0.5 px-2 py-1 rounded-xl transition-all">
        <span class="nav-number text-[8px] font-mono text-slate-500">03</span>
        <span class="nav-text text-[9px] font-bold uppercase tracking-wider text-slate-400">Proy</span>
    </a>
    <a href="#habilidades" class="nav-link flex flex-col items-center gap-0.5 px-2 py-1 rounded-xl transition-all">
        <span class="nav-number text-[8px] font-mono text-slate-500">04</span>
        <span class="nav-text text-[9px] font-bold uppercase tracking-wider text-slate-400">Tech</span>
    </a>
    <a href="#contacto" class="nav-link flex flex-col items-center gap-0.5 px-2 py-1 rounded-xl transition-all">
        <span class="nav-number text-[8px] font-mono text-slate-500">05</span>
        <span class="nav-text text-[9px] font-bold uppercase tracking-wider text-slate-400">Info</span>
    </a>
</nav>

<style>
    /* Desktop Nav Hover */
    @media (min-width: 768px) {
        .nav-link:hover .nav-text {
            transform: translateX(15px);
        }
        .nav-link:hover .nav-number {
            color: #38bdf8 !important; /* sky-400 */
        }
        
        .nav-link.active .nav-text {
            transform: translateX(15px);
        }
    }

    /* Active States - Desktop & Mobile */
    .nav-link.active {
        color: #fff !important;
    }
    .nav-link.active .nav-number {
        color: #38bdf8 !important;
    }
    .nav-link.active .nav-text {
        color: #38bdf8 !important;
    }

    .nav-text {
        display: inline-block;
        transition: transform 0.5s cubic-bezier(0.22, 1, 0.36, 1), color 0.3s ease;
    }
    
    .nav-number {
        transition: color 0.3s ease;
    }
</style>
