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
<header class="md:hidden fixed top-0 left-0 right-0 z-[500] px-6 py-5 flex justify-between items-center pointer-events-none">
    <a href="#inicio" onclick="navigateToSection(event, 'inicio')" class="text-white font-black text-xl tracking-tighter uppercase pointer-events-auto">
        Beder<span class="text-sky-500">.</span>
    </a>
    
    <!-- Minimalist Morphing Cyber Trigger (Únicamente las 2 barras flotantes que mutan a X) -->
    <button 
        id="mobile-menu-btn"
        onclick="toggleMobileMenu()" 
        aria-label="Navegación" 
        class="group w-10 h-10 flex items-center justify-end cursor-pointer pointer-events-auto active:scale-90 transition-transform duration-300">
        
        <!-- Asymmetric Cyber Bars -->
        <div class="relative w-6 h-3.5 flex flex-col justify-between items-end">
            <span id="menu-bar-top" class="w-6 h-[2px] bg-white rounded-full transition-all duration-300 origin-center"></span>
            <span id="menu-bar-bottom" class="w-4 h-[2px] bg-sky-400 rounded-full transition-all duration-300 origin-center group-hover:w-6"></span>
        </div>
    </button>
</header>

<!-- Mobile Left Canvas Navigation (Menu de fondo expuesto cuando la pantalla se empuja) -->
<nav 
    id="mobile-menu-canvas" 
    class="md:hidden fixed top-0 left-0 bottom-0 w-[72vw] max-w-xs z-[520] flex flex-col justify-between p-8 sm:p-10 opacity-0 pointer-events-none transition-all duration-500 ease-out">
    
    <!-- Ambient Light Blob -->
    <div class="absolute -top-20 -left-20 w-64 h-64 bg-sky-500/10 blur-[80px] rounded-full pointer-events-none"></div>

    <!-- Vertical Floating Typography (PC Style) -->
    <div class="flex flex-col gap-6 sm:gap-8 my-auto pl-2 relative z-10 pointer-events-auto">
        <a href="#inicio" onclick="navigateToSection(event, 'inicio')" class="nav-link group flex items-baseline gap-3.5 transition-all duration-500 active">
            <span class="nav-number font-mono text-[10px] text-slate-600 transition-colors">01</span>
            <span class="nav-text text-2xl sm:text-3xl font-black uppercase tracking-tight text-slate-400 group-hover:text-white transition-all">Inicio</span>
        </a>
        <a href="#trayectoria" onclick="navigateToSection(event, 'trayectoria')" class="nav-link group flex items-baseline gap-3.5 transition-all duration-500">
            <span class="nav-number font-mono text-[10px] text-slate-600 transition-colors">02</span>
            <span class="nav-text text-2xl sm:text-3xl font-black uppercase tracking-tight text-slate-400 group-hover:text-white transition-all">Trayectoria</span>
        </a>
        <a href="#proyectos" onclick="navigateToSection(event, 'proyectos')" class="nav-link group flex items-baseline gap-3.5 transition-all duration-500">
            <span class="nav-number font-mono text-[10px] text-slate-600 transition-colors">03</span>
            <span class="nav-text text-2xl sm:text-3xl font-black uppercase tracking-tight text-slate-400 group-hover:text-white transition-all">Proyectos</span>
        </a>
        <a href="#habilidades" onclick="navigateToSection(event, 'habilidades')" class="nav-link group flex items-baseline gap-3.5 transition-all duration-500">
            <span class="nav-number font-mono text-[10px] text-slate-600 transition-colors">04</span>
            <span class="nav-text text-2xl sm:text-3xl font-black uppercase tracking-tight text-slate-400 group-hover:text-white transition-all">Habilidades</span>
        </a>
        <a href="#contacto" onclick="navigateToSection(event, 'contacto')" class="nav-link group flex items-baseline gap-3.5 transition-all duration-500">
            <span class="nav-number font-mono text-[10px] text-slate-600 transition-colors">05</span>
            <span class="nav-text text-2xl sm:text-3xl font-black uppercase tracking-tight text-slate-400 group-hover:text-white transition-all">Contacto</span>
        </a>
    </div>

    <!-- Canvas Footer -->
    <div class="relative z-10 flex items-center justify-between pt-4 border-t border-white/5 opacity-40">
        <span class="text-[9px] font-mono font-bold text-slate-400 uppercase tracking-widest">Navegación</span>
        <span class="text-[9px] font-mono text-slate-500">2026</span>
    </div>
</nav>

<!-- Click-to-dismiss Overlay ONLY on Pushed Canvas Area (Right side) -->
<div 
    id="canvas-click-dismiss" 
    onclick="closeMobileMenu()" 
    class="md:hidden fixed top-0 bottom-0 left-[72vw] right-0 z-[510] hidden cursor-pointer">
</div>

<script>
function toggleMobileMenu() {
    const body = document.body;
    const canvas = document.getElementById('mobile-menu-canvas');
    const dismissOverlay = document.getElementById('canvas-click-dismiss');
    const barTop = document.getElementById('menu-bar-top');
    const barBottom = document.getElementById('menu-bar-bottom');
    const isOpen = body.classList.contains('canvas-pushed');
    
    if (!isOpen) {
        body.classList.add('canvas-pushed');
        canvas.classList.remove('opacity-0', 'pointer-events-none');
        canvas.classList.add('opacity-100', 'pointer-events-auto');
        dismissOverlay.classList.remove('hidden');
        
        // Morph lines to X
        if (barTop) barTop.style.transform = 'translateY(6px) rotate(45deg)';
        if (barBottom) {
            barBottom.style.width = '24px';
            barBottom.style.transform = 'translateY(-6px) rotate(-45deg)';
            barBottom.classList.remove('bg-sky-400');
            barBottom.classList.add('bg-white');
        }
    } else {
        closeMobileMenu();
    }
}

function closeMobileMenu() {
    const body = document.body;
    const canvas = document.getElementById('mobile-menu-canvas');
    const dismissOverlay = document.getElementById('canvas-click-dismiss');
    const barTop = document.getElementById('menu-bar-top');
    const barBottom = document.getElementById('menu-bar-bottom');
    
    body.classList.remove('canvas-pushed');
    if (canvas) {
        canvas.classList.remove('opacity-100', 'pointer-events-auto');
        canvas.classList.add('opacity-0', 'pointer-events-none');
    }
    if (dismissOverlay) dismissOverlay.classList.add('hidden');
    
    // Morph lines back to asymmetric hamburger
    if (barTop) barTop.style.transform = 'none';
    if (barBottom) {
        barBottom.style.width = '';
        barBottom.style.transform = 'none';
        barBottom.classList.remove('bg-white');
        barBottom.classList.add('bg-sky-400');
    }
}

function navigateToSection(e, targetId) {
    if (e) e.preventDefault();
    closeMobileMenu();
    
    setTimeout(() => {
        const targetSection = document.getElementById(targetId);
        if (targetSection) {
            targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }, 100);
}

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeMobileMenu();
});
</script>

<style>
    /* 3D Canvas Push Transition for Mobile */
    @media (max-width: 767px) {
        #content-scroller {
            transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), border-radius 0.5s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.5s ease, opacity 0.5s ease !important;
            transform-origin: left center;
        }
        
        body.canvas-pushed #content-scroller {
            transform: translateX(72vw) scale(0.84) !important;
            border-radius: 32px !important;
            box-shadow: -25px 0 65px rgba(0, 0, 0, 0.95), 0 0 0 1px rgba(255, 255, 255, 0.1) !important;
            opacity: 0.85 !important;
            pointer-events: none !important;
            user-select: none !important;
            overflow: hidden !important;
        }
    }

    /* Nav Hover States (Desktop & Mobile) */
    .nav-link:hover .nav-text {
        color: #fff !important;
        transform: translateX(10px);
    }
    .nav-link:hover .nav-number {
        color: #38bdf8 !important; /* sky-400 */
    }

    /* Active States */
    .nav-link.active .nav-number {
        color: #38bdf8 !important;
    }
    
    .nav-link.active .nav-text {
        color: #38bdf8 !important;
        transform: translateX(8px);
    }

    .nav-text {
        display: inline-block;
        transition: transform 0.5s cubic-bezier(0.22, 1, 0.36, 1), color 0.3s ease;
    }
    
    .nav-number {
        transition: color 0.3s ease;
    }
</style>
