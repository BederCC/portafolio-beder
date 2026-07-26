<?php include 'includes/header.php'; ?>

<main class="flex min-h-screen bg-slate-950 text-slate-200 selection:bg-sky-500/30 overflow-hidden">
    
    <!-- Designer Side Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <!-- Dynamic Content Area (Scroll Snapping Enabled) -->
    <div class="flex-grow h-screen overflow-y-auto relative scroll-smooth bg-slate-950 snap-y snap-mandatory" id="content-scroller">
        
        <!-- Ambient Background Lights -->
        <div class="fixed inset-0 pointer-events-none">
            <div class="absolute top-[20%] left-[10%] w-[500px] h-[500px] bg-sky-500/5 blur-[120px] rounded-full"></div>
            <div class="absolute bottom-[10%] right-[10%] w-[400px] h-[400px] bg-indigo-500/5 blur-[100px] rounded-full"></div>
        </div>

        <div class="max-w-6xl mx-auto pl-8 pr-8 md:pl-44 md:pr-12 py-12 relative z-10">
            
            <!-- SECTION 1: INICIO -->
            <section id="inicio" class="min-h-screen flex flex-col justify-center section-fade active snap-start">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-2xl bg-white/5 border border-white/10 mb-10 w-fit backdrop-blur-md">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-sky-500"></span>
                    </span>
                    <span class="text-[10px] font-bold uppercase tracking-[0.3em] text-sky-400">Disponible para nuevos retos</span>
                </div>

                <h1 class="text-7xl md:text-[100px] font-black tracking-tighter text-white leading-[0.8] mb-10">
                    Hola, soy <br class="hidden md:block"> <span class="text-sky-500 text-8xl md:text-[140px]">Beder.</span>
                </h1>
                
                <p class="text-xl md:text-2xl text-slate-400 max-w-2xl leading-relaxed font-light mb-12">
                    Especialista en <span class="text-white font-medium">Ingeniería de Sistemas</span> con enfoque en diseño de infraestructuras críticas y gestión de ecosistemas digitales.
                </p>

                <div class="flex gap-8">
                    <a href="#proyectos" class="group flex items-center gap-4 text-[10px] font-black uppercase tracking-[0.4em] text-white">
                        Explorar Portafolio
                        <div class="w-12 h-px bg-sky-500 group-hover:w-20 transition-all duration-500"></div>
                    </a>
                </div>
            </section>

            <!-- SECTION 2: TRAYECTORIA -->
            <section id="trayectoria" class="min-h-screen pt-12 snap-start flex flex-col justify-center">
                <?php include 'content/experiencia.php'; ?>
            </section>

            <!-- SECTION 3: PROYECTOS -->
            <section id="proyectos" class="min-h-screen pt-12 snap-start flex flex-col justify-center">
                <?php include 'content/proyectos.php'; ?>
            </section>

            <!-- SECTION 4: HABILIDADES -->
            <section id="habilidades" class="min-h-screen pt-12 snap-start flex flex-col justify-center">
                <?php include 'content/habilidades.php'; ?>
            </section>

            <!-- SECTION 5: CONTACTO -->
            <section id="contacto" class="min-h-screen pt-12 snap-start flex flex-col justify-center">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-20">
                    <div>
                        <h2 class="text-4xl font-black text-white mb-6 tracking-tighter">¿Listo para el <br> siguiente nivel?</h2>
                        <p class="text-slate-400 mb-10 leading-relaxed">Disponible para consultorías estratégicas y desarrollo de proyectos de infraestructura de alta escala.</p>
                        <a href="mailto:beder1810@gmail.com" class="text-sky-400 font-bold border-b border-sky-400/20 pb-2 hover:border-sky-400 transition-all text-2xl tracking-tighter">beder1810@gmail.com</a>
                    </div>
                    <div class="flex flex-col justify-end items-end gap-6">
                        <div class="flex gap-10 text-[10px] font-bold uppercase tracking-[0.4em] text-slate-500">
                            <a href="#" class="hover:text-white transition-colors">LinkedIn</a>
                            <a href="#" class="hover:text-white transition-colors">GitHub</a>
                            <a href="#" class="hover:text-white transition-colors">Instagram</a>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</main>

<style>
    body { font-family: 'Outfit', sans-serif; }
    
    /* Scrollbar Styling */
    #content-scroller::-webkit-scrollbar { width: 4px; }
    #content-scroller::-webkit-scrollbar-track { background: transparent; }
    #content-scroller::-webkit-scrollbar-thumb { background: rgba(56, 189, 248, 0.2); border-radius: 10px; }
    #content-scroller::-webkit-scrollbar-thumb:hover { background: rgba(56, 189, 248, 0.5); }

    /* Designer Section Fade */
    .section-fade {
        opacity: 0;
        transform: translateY(20px);
        transition: all 1s cubic-bezier(0.22, 1, 0.36, 1);
    }
    .section-fade.visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<script>
    const scroller = document.querySelector('#content-scroller');
    
    // Intersection Observer for designer fade effects & nav sync
    const observerOptions = {
        root: scroller,
        threshold: 0.5,
        rootMargin: '0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                updateNav(entry.target.id);
            }
        });
    }, observerOptions);

    document.querySelectorAll('section').forEach(section => {
        section.classList.add('section-fade');
        observer.observe(section);
    });

    function updateNav(id) {
        document.querySelectorAll('.nav-link').forEach(link => {
            link.classList.remove('active');
            const href = link.getAttribute('href').substring(1);
            if(href === id) link.classList.add('active');
        });
    }
</script>

<?php include 'includes/footer.php'; ?>
