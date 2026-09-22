<?php include 'includes/header.php'; ?>

<main class="flex min-h-screen bg-slate-950 text-slate-200 selection:bg-sky-500/30 overflow-hidden">
    
    <!-- Designer Side Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <!-- Dynamic Content Area (Scroll Snapping Enabled on Desktop) -->
    <div class="flex-grow h-screen overflow-y-auto relative scroll-smooth bg-slate-950 md:snap-y md:snap-mandatory" id="content-scroller">
        
        <!-- Ambient Background Lights & Fireflies Effect -->
        <div class="fixed inset-0 pointer-events-none">
            <div class="absolute top-[20%] left-[10%] w-[300px] sm:w-[500px] h-[300px] sm:h-[500px] bg-sky-500/5 blur-[120px] rounded-full"></div>
            <div class="absolute bottom-[10%] right-[10%] w-[250px] sm:w-[400px] h-[250px] sm:h-[400px] bg-indigo-500/5 blur-[100px] rounded-full"></div>
        </div>

        <!-- Módulo independiente de Luciérnagas (Eliminar este include para remover el efecto) -->
        <?php include 'includes/fireflies.php'; ?>

        <div class="max-w-6xl mx-auto px-6 sm:px-10 md:pl-44 md:pr-12 pt-20 md:pt-12 pb-32 md:pb-12 relative z-10">
            
            <!-- SECTION 1: INICIO -->
            <section id="inicio" class="min-h-[85vh] md:min-h-screen flex flex-col justify-center section-fade active snap-start py-8 md:py-0">
                <div class="hero-flex-wrapper">
                    
                    <!-- Columna de Texto (Izquierda) -->
                    <div class="hero-text-column">

                        <h1 class="text-5xl sm:text-6xl md:text-7xl xl:text-8xl font-black tracking-tighter text-white leading-[0.9] md:leading-[0.85] mb-6 sm:mb-8">
                            Hola, soy <br class="hidden sm:block"> <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-400 via-sky-300 to-indigo-400">Beder.</span>
                        </h1>
                        
                        <p class="text-base sm:text-lg md:text-xl text-slate-400 max-w-xl leading-relaxed font-light mb-8 sm:mb-10">
                            Especialista en <span class="text-white font-medium">Ingeniería de Sistemas</span> con enfoque en diseño de infraestructuras críticas, desarrollo de sistemas web y gestión de ecosistemas digitales.
                        </p>

                        <div class="flex flex-wrap items-center gap-6 sm:gap-8">
                            <a href="#proyectos" class="group flex items-center gap-4 text-[10px] font-black uppercase tracking-[0.4em] text-white hover:text-sky-400 transition-colors">
                                Explorar Portafolio
                                <div class="w-12 h-px bg-sky-500 group-hover:w-20 transition-all duration-500"></div>
                            </a>
                            <a href="#contacto" class="text-[10px] font-mono font-bold uppercase tracking-[0.3em] px-4 py-2 rounded-full border border-white/10 hover:border-sky-500/40 hover:bg-sky-500/5 text-slate-300 hover:text-white transition-all">
                                Contactar
                            </a>
                        </div>
                    </div>

                    <!-- Columna de Foto Circular Interactiva (Derecha) -->
                    <div class="hero-photo-column">
                        <?php include 'includes/profile_shader.php'; ?>
                    </div>

                </div>
            </section>

            <!-- SECTION 2: TRAYECTORIA -->
            <section id="trayectoria" class="min-h-[85vh] md:min-h-screen pt-8 md:pt-12 snap-start flex flex-col justify-center py-8 md:py-0">
                <?php include 'content/experiencia.php'; ?>
            </section>

            <!-- SECTION 3: PROYECTOS -->
            <section id="proyectos" class="min-h-[85vh] md:min-h-screen pt-8 md:pt-12 snap-start flex flex-col justify-center py-8 md:py-0">
                <?php include 'content/proyectos.php'; ?>
            </section>

            <!-- SECTION 4: HABILIDADES -->
            <section id="habilidades" class="min-h-[85vh] md:min-h-screen pt-8 md:pt-12 snap-start flex flex-col justify-center py-8 md:py-0">
                <?php include 'content/habilidades.php'; ?>
            </section>

            <!-- SECTION 5: CONTACTO -->
            <section id="contacto" class="min-h-[85vh] md:min-h-screen pt-8 md:pt-12 snap-start flex flex-col justify-center py-8 md:py-0">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-20">
                    <div>
                        <h2 class="text-3xl sm:text-4xl font-black text-white mb-4 sm:mb-6 tracking-tighter">¿Listo para el <br class="hidden sm:block"> siguiente nivel?</h2>
                        <p class="text-slate-400 mb-8 sm:mb-10 text-sm sm:text-base leading-relaxed">Disponible para consultorías estratégicas y desarrollo de proyectos de infraestructura de alta escala.</p>
                        <a href="mailto:beder1810@gmail.com" class="text-sky-400 font-bold border-b border-sky-400/20 pb-2 hover:border-sky-400 transition-all text-xl sm:text-2xl tracking-tighter break-all">beder1810@gmail.com</a>
                    </div>
                    <div class="flex flex-col justify-start md:justify-end items-start md:items-end gap-6 pt-4 md:pt-0">
                        <div class="flex flex-wrap gap-6 sm:gap-10 text-[10px] font-bold uppercase tracking-[0.4em] text-slate-500">
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

    /* Hero Flex layout - garantiza que la foto esté estrictamente a la DERECHA del texto */
    .hero-flex-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        gap: 2.5rem;
    }

    @media (min-width: 900px) {
        .hero-flex-wrapper {
            flex-direction: row !important;
            align-items: center !important;
            justify-content: space-between !important;
            gap: 2.5rem !important;
        }
        .hero-text-column {
            flex: 1 1 56% !important;
            max-width: 620px !important;
            order: 1 !important;
        }
        .hero-photo-column {
            flex: 0 0 auto !important;
            display: flex !important;
            justify-content: flex-end !important;
            align-items: center !important;
            order: 2 !important;
        }
    }
    
    /* Scrollbar Styling */
    #content-scroller::-webkit-scrollbar { width: 4px; }
    #content-scroller::-webkit-scrollbar-track { background: transparent; }
    #content-scroller::-webkit-scrollbar-thumb { background: rgba(56, 189, 248, 0.2); border-radius: 10px; }
    #content-scroller::-webkit-scrollbar-thumb:hover { background: rgba(56, 189, 248, 0.5); }

    /* Mobile Responsive Enhancements */
    @media (max-width: 767px) {
        #content-scroller {
            scroll-snap-type: none !important;
        }
        .break-all {
            word-break: break-all;
        }
    }

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
