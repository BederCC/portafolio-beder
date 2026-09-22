<div class="max-w-5xl h-full flex flex-col justify-center">
    <!-- Section Header & Deck Controls -->
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-6 md:mb-8">
        <div>
            <div class="flex items-center gap-3 mb-2">
                <span class="text-rose-500 font-mono text-[10px] uppercase tracking-[0.4em] font-bold flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-rose-500 animate-pulse"></span>
                    03. Portafolio
                </span>
                <div class="h-px bg-gradient-to-r from-rose-500/40 to-transparent w-16"></div>
            </div>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-white tracking-tighter leading-none">
                PROYECTOS <span class="text-transparent bg-clip-text bg-gradient-to-r from-rose-400 via-purple-400 to-indigo-400">DESTACADOS.</span>
            </h2>
        </div>

        <!-- Deck Paginator Controls -->
        <div class="flex items-center gap-3 self-start sm:self-auto">
            <div class="text-[11px] font-mono text-slate-400 bg-slate-900/80 px-3.5 py-1.5 rounded-full border border-white/10 flex items-center gap-2.5 backdrop-blur-md shadow-lg">
                <span>Página <strong id="deck-current-page" class="text-white font-bold">1</strong> de <strong id="deck-total-pages" class="text-slate-400 font-bold">2</strong></span>
                <div id="deck-dots-container" class="flex items-center gap-1 pl-1">
                    <!-- Injected via JS -->
                </div>
            </div>

            <div class="flex items-center gap-1.5">
                <button 
                    id="btn-deck-prev" 
                    onclick="changeDeckPage(-1)" 
                    class="w-9 h-9 rounded-full bg-slate-900/90 hover:bg-rose-500 text-slate-300 hover:text-white border border-white/10 hover:border-rose-500/50 flex items-center justify-center transition-all duration-300 disabled:opacity-30 disabled:pointer-events-none cursor-pointer shadow-lg">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button 
                    id="btn-deck-next" 
                    onclick="changeDeckPage(1)" 
                    class="w-9 h-9 rounded-full bg-slate-900/90 hover:bg-rose-500 text-slate-300 hover:text-white border border-white/10 hover:border-rose-500/50 flex items-center justify-center transition-all duration-300 disabled:opacity-30 disabled:pointer-events-none cursor-pointer shadow-lg">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Dynamic Bento Deck Container (Fixed height to avoid any layout shifts) -->
    <div id="bento-deck-wrapper" class="relative w-full h-[470px] sm:h-[490px] md:h-[460px] overflow-hidden">
        <div id="bento-deck-grid" class="w-full h-full transition-all duration-300 ease-out transform opacity-100 translate-x-0">
            <!-- Bento Cards Injected Dynamically via renderDeckPage() -->
        </div>
    </div>
</div>

<!-- ========================================== -->
<!-- MODAL INTERACTIVO DE DETALLES DE PROYECTO -->
<!-- ========================================== -->
<div 
    id="project-modal-backdrop"
    onclick="closeProjectModalOnBackdrop(event)"
    class="fixed inset-0 z-50 bg-slate-950/85 backdrop-blur-md flex items-center justify-center p-4 sm:p-6 opacity-0 pointer-events-none transition-all duration-300">
    
    <div 
        id="project-modal-content"
        class="bg-slate-900 border border-white/15 rounded-3xl max-w-3xl w-full max-h-[90vh] overflow-y-auto shadow-2xl p-6 sm:p-8 transform scale-95 transition-all duration-300 relative text-slate-200 custom-scrollbar">
        
        <!-- Close Button -->
        <button 
            onclick="closeProjectModal()"
            class="absolute top-5 right-5 w-9 h-9 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-colors cursor-pointer z-20">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>

        <!-- Dynamic Content Header -->
        <div id="modal-category" class="text-rose-400 font-mono text-[10px] font-bold uppercase tracking-widest mb-1">
            Categoría del Proyecto
        </div>
        <h3 id="modal-title" class="text-2xl sm:text-3xl font-black text-white mb-4 pr-8">
            Título del Proyecto
        </h3>

        <!-- Media Preview Box -->
        <div id="modal-media-container" class="mb-6 rounded-2xl overflow-hidden border border-white/10 bg-slate-950 shadow-inner">
            <img id="modal-image" src="" alt="Vista previa del proyecto" class="w-full h-auto max-h-[350px] object-cover" />
        </div>

        <!-- Description -->
        <div class="mb-6 space-y-3">
            <h4 class="text-xs font-mono font-bold text-slate-400 uppercase tracking-wider">Descripción del Sistema</h4>
            <p id="modal-description" class="text-sm text-slate-300 leading-relaxed font-light">
                Detalles del proyecto...
            </p>
        </div>

        <!-- Key Features List -->
        <div class="mb-6 space-y-3">
            <h4 class="text-xs font-mono font-bold text-slate-400 uppercase tracking-wider">Características Clave</h4>
            <ul id="modal-features" class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs text-slate-300">
                <!-- Injected via JS -->
            </ul>
        </div>

        <!-- Tech Stack Badges -->
        <div class="mb-6 space-y-3">
            <h4 class="text-xs font-mono font-bold text-slate-400 uppercase tracking-wider">Tecnologías Utilizadas</h4>
            <div id="modal-tags" class="flex flex-wrap gap-2">
                <!-- Injected via JS -->
            </div>
        </div>

        <!-- Modal Footer Actions -->
        <div class="pt-4 border-t border-white/10 flex items-center justify-end gap-3">
            <button 
                onclick="closeProjectModal()"
                class="px-4 py-2 bg-white/10 hover:bg-white/20 text-slate-200 text-xs font-bold rounded-xl transition-colors cursor-pointer">
                Cerrar
            </button>
            <a 
                id="modal-link" 
                href="#" 
                target="_blank"
                class="px-5 py-2 bg-rose-500 hover:bg-rose-600 text-white text-xs font-bold rounded-xl shadow-lg flex items-center gap-2 transition-all cursor-pointer">
                <span>Ver Proyecto Demo</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
            </a>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- SCRIPT DE INTERACCIÓN DEL BENTO DECK PAGINADO Y MODAL          -->
<!-- ============================================================== -->
<script>
const PROJECTS_LIST = [
    {
        key: 'universidad',
        category: 'Plataforma Web & Educación',
        title: 'Universidad en Línea',
        subtitle: 'Plataforma de Carreras',
        status: 'Sistema En Línea',
        image: 'assets/img/universidad-en-linea.png',
        description: 'Ecosistema educativo digital para gestión académica, campus interactivo, seguimiento de lecturas y exámenes virtuales en tiempo real.',
        features: [
            'Navegación intuitiva por módulos y cursos de Ingeniería de Sistemas.',
            'Sistema de lectura activa y cuestionarios automatizados (Quizzes).',
            'Panel de administración para gestión de estudiantes y notas.',
            'Barra de avance en tiempo real y contador de gamificación (Puntos/Monedas).'
        ],
        tags: ['PHP 8', 'MySQL', 'Tailwind', 'JS', 'SEO'],
        accent: 'rose',
        link: 'https://universidad.beder.site'
    },
    {
        key: 'multitronika',
        category: 'Soporte & Gestión TI',
        title: 'Portal Multitronika',
        subtitle: 'Empresarial',
        image: 'assets/img/sistema-de-control-interno.png',
        description: 'Infraestructura digital para la gestión interna y soporte corporativo, asistencias, soporte técnico, inventario, herramientas administrativas, gestión y seguimiento de trabajos y facturación, automatización de presupuestos, entre otras.',
        features: [
            'Gestión de tickets de soporte con niveles de prioridad.',
            'Monitoreo del estado de infraestructura y servidores.',
            'Reportes de rendimiento e incidencias en tiempo real.',
            'Autenticación segura basada en roles de usuario.'
        ],
        tags: ['Linux', 'Apache', 'Redes'],
        accent: 'indigo',
        link: '#'
    },
    {
        key: 'sistemas',
        category: 'sistema web',
        title: 'Centro de Capacitacion',
        image: 'assets/img/ayni-academy.png',
        description: 'Sistemas web, bases de datos y soluciones a medida desarrolladas para entidades corporativas.',
        features: [
            'Desarrollo Full-Stack adaptado a los requerimientos del cliente.',
            'Bases de datos optimizadas para alta concurrencia.',
            'Diseño 100% responsivo para móviles y escritorios.',
            'Integración de APIs y Roles'
        ],
        tags: ['PHP', 'JavaScript', 'MySQL'],
        accent: 'sky',
        link: '#'
    },
    {
        key: 'infraestructura',
        category: 'Aplicacion web',
        title: 'Redes & Servidores',
        image: 'assets/img/universidad-en-linea.png',
        description: 'Cableado estructurado, redes VLAN y configuración de servidores de datos críticos.',
        features: [
            'Configuración de servidores Linux (Ubuntu Server / Debian).',
            'Implementación de redes VLAN y políticas de seguridad.',
            'Sistemas de respaldo de energía y copias de seguridad automáticas.',
            'Supervisión y auditoría de seguridad informática.'
        ],
        tags: ['Linux Server', 'Cisco', 'VLAN'],
        accent: 'emerald',
        link: '#'
    },
    {
        key: 'ecommerce',
        category: 'E-Commerce & Pagos',
        title: 'Sistema E-Commerce',
        subtitle: 'Tienda Digital',
        status: 'Pagos Digitales',
        image: 'assets/img/universidad-en-linea.png',
        description: 'Plataforma de comercio electrónico transaccional con carrito de compras, pasarela de pago en línea e inventario sincronizado.',
        features: [
            'Integración con API de MercadoPago / Culqi / Niubiz.',
            'Catálogo de productos con filtros dinámicos y búsqueda.',
            'Panel de inventario y pedidos con notificaciones por correo.',
            'Optimizado para alta conversión y velocidad de carga.'
        ],
        tags: ['PHP 8', 'MySQL', 'MercadoPago'],
        accent: 'amber',
        link: '#'
    },
    {
        key: 'asistencia',
        category: 'Recursos Humanos & IoT',
        title: 'Control Biométrico',
        subtitle: 'Control de Personal',
        image: 'assets/img/universidad-en-linea.png',
        description: 'Sistema web de marcaciones para colaboradores, integración con relojes biométricos y reportes ejecutivos.',
        features: [
            'Sincronización automatizada con dispositivos biométricos.',
            'Cálculo exacto de horas trabajadas y descuentos.',
            'Exportación instantánea a formatos PDF y Excel.',
            'Módulo de permisos, licencias y vacaciones.'
        ],
        tags: ['PHP 8', 'API Rest', 'PDF/Excel'],
        accent: 'cyan',
        link: '#'
    },
    {
        key: 'dashboard',
        category: 'Business Intelligence',
        title: 'Dashboard Analítica',
        image: 'assets/img/universidad-en-linea.png',
        description: 'Panel de métricas interactivas, KPIs en tiempo real, gráficos de ventas y proyección de crecimiento.',
        features: [
            'Gráficos interactivos de líneas, barras y sectores.',
            'Filtros por rango de fechas, sedes y vendedores.',
            'Consolidación de ventas e ingresos mensuales.',
            'Diseño oscuro futurista de alto impacto visual.'
        ],
        tags: ['Chart.js', 'Tailwind', 'SQL'],
        accent: 'purple',
        link: '#'
    },
    {
        key: 'intranet',
        category: 'Intranet & Documentos',
        title: 'Intranet Documental',
        image: 'assets/img/universidad-en-linea.png',
        description: 'Sistema institucional para repositorio seguro de archivos, trámites digitales y control de acceso.',
        features: [
            'Control de versiones de archivos y permisos granulares.',
            'Buscador rápido de documentos por etiquetas o tipo.',
            'Publicación de noticias y comunicados internos.',
            'Registro de auditoría y descargas de usuarios.'
        ],
        tags: ['Cloud Storage', 'PHP', 'Seguridad'],
        accent: 'emerald',
        link: '#'
    }
];

let currentDeckPage = 0;
let isDeckAnimating = false;

function getItemsPerPage() {
    return window.innerWidth < 768 ? 1 : 4;
}

function initDeck() {
    renderDeckPage(0);
    setupDeckTouchGestures();
}

function changeDeckPage(delta) {
    if (isDeckAnimating) return;
    
    const itemsPerPage = getItemsPerPage();
    const totalPages = Math.ceil(PROJECTS_LIST.length / itemsPerPage);
    const newPage = currentDeckPage + delta;
    
    if (newPage < 0 || newPage >= totalPages) return;
    
    isDeckAnimating = true;
    const grid = document.getElementById('bento-deck-grid');
    
    // Directional Slide Vectors
    const exitTranslate = delta > 0 ? '-translate-x-12' : 'translate-x-12';
    const enterTranslate = delta > 0 ? 'translate-x-12' : '-translate-x-12';
    const gridBaseClass = window.innerWidth < 768 
        ? 'w-full h-full grid grid-cols-1 gap-4' 
        : 'w-full h-full grid grid-cols-4 grid-rows-2 gap-4 md:gap-5';
    
    // Step 1: Slide Out Current Page
    grid.style.transition = 'all 200ms cubic-bezier(0.4, 0, 0.2, 1)';
    grid.className = `${gridBaseClass} transform opacity-0 ${exitTranslate} scale-[0.98]`;

    setTimeout(() => {
        // Step 2: Render New Page Data
        currentDeckPage = newPage;
        renderDeckPage(currentDeckPage);

        // Step 3: Position New Page offscreen without transition
        grid.style.transition = 'none';
        grid.className = `${gridBaseClass} transform opacity-0 ${enterTranslate} scale-[0.98]`;

        // Step 4: Smooth Slide In to Center
        requestAnimationFrame(() => {
            requestAnimationFrame(() => {
                grid.style.transition = 'all 380ms cubic-bezier(0.16, 1, 0.3, 1)';
                grid.className = `${gridBaseClass} transform opacity-100 translate-x-0 scale-100`;
                
                setTimeout(() => {
                    isDeckAnimating = false;
                }, 380);
            });
        });
    }, 200);
}

function renderDeckPage(pageIndex) {
    const itemsPerPage = getItemsPerPage();
    const totalPages = Math.ceil(PROJECTS_LIST.length / itemsPerPage);

    if (pageIndex >= totalPages) pageIndex = totalPages - 1;
    if (pageIndex < 0) pageIndex = 0;
    currentDeckPage = pageIndex;

    document.getElementById('deck-current-page').innerText = currentDeckPage + 1;
    document.getElementById('deck-total-pages').innerText = totalPages;

    // Prev / Next buttons state
    document.getElementById('btn-deck-prev').disabled = (currentDeckPage === 0);
    document.getElementById('btn-deck-next').disabled = (currentDeckPage >= totalPages - 1);

    // Dots
    const dotsContainer = document.getElementById('deck-dots-container');
    if (dotsContainer) {
        dotsContainer.innerHTML = Array.from({ length: totalPages }).map((_, idx) => `
            <span class="w-1.5 h-1.5 rounded-full transition-all duration-300 ${idx === currentDeckPage ? 'bg-rose-500 w-3' : 'bg-slate-600'}"></span>
        `).join('');
    }

    const pageItems = PROJECTS_LIST.slice(currentDeckPage * itemsPerPage, (currentDeckPage + 1) * itemsPerPage);
    const grid = document.getElementById('bento-deck-grid');

    if (!grid || pageItems.length === 0) return;

    if (window.innerWidth < 768) {
        // MOBILE VIEW: 1 Full Featured Showcase Card
        grid.className = 'w-full h-full grid grid-cols-1 gap-4 transform opacity-100 translate-x-0';
        grid.innerHTML = createMobileCardHtml(pageItems[0], currentDeckPage, PROJECTS_LIST.length);
    } else {
        // DESKTOP VIEW: 4 Cards Bento Grid Layout
        grid.className = 'w-full h-full grid grid-cols-4 grid-rows-2 gap-4 md:gap-5 transform opacity-100 translate-x-0';
        
        const LAYOUT_PATTERNS = [
            ['md:col-span-2 md:row-span-2', 'md:col-span-2 md:row-span-1', 'md:col-span-1 md:row-span-1', 'md:col-span-1 md:row-span-1'],
            ['md:col-span-2 md:row-span-1', 'md:col-span-2 md:row-span-2', 'md:col-span-1 md:row-span-1', 'md:col-span-1 md:row-span-1'],
            ['md:col-span-1 md:row-span-1', 'md:col-span-1 md:row-span-1', 'md:col-span-2 md:row-span-2', 'md:col-span-2 md:row-span-1']
        ];

        const currentPattern = LAYOUT_PATTERNS[currentDeckPage % LAYOUT_PATTERNS.length];
        let html = '';

        pageItems.forEach((item, slotIndex) => {
            const slotClass = currentPattern[slotIndex] || 'md:col-span-1 md:row-span-1';
            html += createBentoCardHtml(item, slotClass);
        });

        grid.innerHTML = html;
    }
}

function createMobileCardHtml(item, pageIdx, totalCount) {
    const colorBorderMap = {
        rose: 'hover:border-rose-500/50 border-rose-500/30',
        indigo: 'hover:border-indigo-500/50 border-indigo-500/30',
        amber: 'hover:border-amber-500/50 border-amber-500/30',
        cyan: 'hover:border-cyan-500/50 border-cyan-500/30',
        purple: 'hover:border-purple-500/50 border-purple-500/30',
        emerald: 'hover:border-emerald-500/50 border-emerald-500/30',
        sky: 'hover:border-sky-500/50 border-sky-500/30'
    };

    const colorGlowMap = {
        rose: 'bg-rose-500/15',
        indigo: 'bg-indigo-500/15',
        amber: 'bg-amber-500/15',
        cyan: 'bg-cyan-500/15',
        purple: 'bg-purple-500/15',
        emerald: 'bg-emerald-500/15',
        sky: 'bg-sky-500/15'
    };

    const colorTextMap = {
        rose: 'text-rose-400',
        indigo: 'text-indigo-400',
        amber: 'text-amber-400',
        cyan: 'text-cyan-400',
        purple: 'text-purple-400',
        emerald: 'text-emerald-400',
        sky: 'text-sky-400'
    };

    const accent = item.accent || 'rose';
    const borderClass = colorBorderMap[accent] || colorBorderMap.rose;
    const glowClass = colorGlowMap[accent] || colorGlowMap.rose;
    const textClass = colorTextMap[accent] || colorTextMap.rose;

    return `
    <div class="group relative bg-slate-900/90 border ${borderClass} rounded-3xl p-5 overflow-hidden transition-all duration-500 flex flex-col justify-between shadow-2xl backdrop-blur-xl h-full">
        <!-- Background Ambient Glow -->
        <div class="absolute -top-20 -right-20 w-52 h-52 ${glowClass} blur-[70px] rounded-full pointer-events-none"></div>

        <!-- Top Header Info -->
        <div class="relative z-10">
            <div class="flex items-center justify-between gap-2 mb-2">
                <span class="px-2.5 py-0.5 bg-white/5 border border-white/10 ${textClass} text-[9px] font-mono font-bold uppercase tracking-widest rounded-full">
                    ${item.category}
                </span>
                <span class="text-[10px] font-mono text-slate-400 font-bold">Proyecto ${pageIdx + 1} de ${totalCount}</span>
            </div>
            
            <h3 class="text-xl sm:text-2xl font-black text-white tracking-tight ${textClass} transition-colors mb-1">
                ${item.title}
            </h3>
            <p class="text-slate-300 text-xs leading-relaxed font-light line-clamp-2 sm:line-clamp-3">
                ${item.description}
            </p>
        </div>

        <!-- Mockup Preview Box -->
        ${item.image ? `
        <div onclick="openProjectModal('${item.key}')" class="relative z-10 my-2 rounded-2xl overflow-hidden border border-white/15 bg-slate-950/80 shadow-2xl cursor-pointer group/img">
            <div class="px-3 py-1.5 bg-slate-900/90 border-b border-white/10 flex items-center justify-between text-[10px] text-slate-400">
                <div class="flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-rose-500/80 inline-block"></span>
                    <span class="w-2 h-2 rounded-full bg-amber-500/80 inline-block"></span>
                    <span class="w-2 h-2 rounded-full bg-emerald-500/80 inline-block"></span>
                </div>
                <div class="bg-slate-950/80 px-2 py-0.5 rounded-md border border-white/5 font-mono text-[9px] text-slate-400">
                    ${item.key}.edu.pe
                </div>
                <span class="text-[9px] ${textClass} font-bold">Ver capturas &rarr;</span>
            </div>

            <div class="relative h-32 sm:h-36 overflow-hidden bg-slate-950">
                <img src="${item.image}" alt="${item.title}" class="w-full h-full object-cover object-top opacity-90 group-hover/img:scale-105 transition-all duration-500"/>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
            </div>
        </div>
        ` : `
        <div onclick="openProjectModal('${item.key}')" class="relative z-10 my-2 p-4 rounded-2xl border border-white/10 bg-slate-950/50 flex flex-col justify-center items-center text-center cursor-pointer">
            <div class="w-10 h-10 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center ${textClass} mb-1">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <span class="text-xs font-mono font-bold text-slate-300">${item.subtitle || item.title}</span>
        </div>
        `}

        <!-- Footer Tags & Action -->
        <div class="relative z-10 pt-2 flex items-center justify-between gap-2 border-t border-white/10">
            <div class="flex flex-wrap items-center gap-1">
                ${item.tags.map(t => `<span class="px-2 py-0.5 bg-white/5 text-[9px] font-mono font-bold text-slate-300 rounded-md border border-white/10">${t}</span>`).join('')}
            </div>
            <button onclick="openProjectModal('${item.key}')" class="text-xs font-bold ${textClass} flex items-center gap-1 hover:underline cursor-pointer bg-transparent border-0 p-0">
                Ver detalles &rarr;
            </button>
        </div>
    </div>
    `;
}

function createBentoCardHtml(item, slotClass) {
    const isFeatured = slotClass.includes('md:row-span-2');
    const isWide = slotClass.includes('md:col-span-2') && !isFeatured;

    const colorBorderMap = {
        rose: 'hover:border-rose-500/50',
        indigo: 'hover:border-indigo-500/50',
        amber: 'hover:border-amber-500/50',
        cyan: 'hover:border-cyan-500/50',
        purple: 'hover:border-purple-500/50',
        emerald: 'hover:border-emerald-500/50',
        sky: 'hover:border-sky-500/50'
    };

    const colorGlowMap = {
        rose: 'bg-rose-500/10 group-hover:bg-rose-500/20',
        indigo: 'bg-indigo-500/10 group-hover:bg-indigo-500/20',
        amber: 'bg-amber-500/10 group-hover:bg-amber-500/20',
        cyan: 'bg-cyan-500/10 group-hover:bg-cyan-500/20',
        purple: 'bg-purple-500/10 group-hover:bg-purple-500/20',
        emerald: 'bg-emerald-500/10 group-hover:bg-emerald-500/20',
        sky: 'bg-sky-500/10 group-hover:bg-sky-500/20'
    };

    const colorTextMap = {
        rose: 'text-rose-400 group-hover:text-rose-300',
        indigo: 'text-indigo-400 group-hover:text-indigo-300',
        amber: 'text-amber-400 group-hover:text-amber-300',
        cyan: 'text-cyan-400 group-hover:text-cyan-300',
        purple: 'text-purple-400 group-hover:text-purple-300',
        emerald: 'text-emerald-400 group-hover:text-emerald-300',
        sky: 'text-sky-400 group-hover:text-sky-300'
    };

    const accent = item.accent || 'rose';
    const borderClass = colorBorderMap[accent] || colorBorderMap.rose;
    const glowClass = colorGlowMap[accent] || colorGlowMap.rose;
    const textClass = colorTextMap[accent] || colorTextMap.rose;

    // Pattern 1: Featured 2x2 Card
    if (isFeatured) {
        return `
        <div class="${slotClass} group relative bg-slate-900/90 border border-white/10 rounded-3xl p-5 sm:p-6 overflow-hidden ${borderClass} transition-all duration-500 flex flex-col justify-between shadow-2xl backdrop-blur-xl h-full">
            <div class="absolute -top-24 -right-24 w-60 h-60 ${glowClass} blur-[80px] rounded-full pointer-events-none transition-all duration-700"></div>

            <div class="relative z-10 mb-1">
                <div class="flex items-center justify-between gap-2 mb-2">
                    <span class="px-2.5 py-0.5 bg-white/5 border border-white/10 ${textClass} text-[9px] font-mono font-bold uppercase tracking-widest rounded-full">
                        ${item.category}
                    </span>
                </div>
                
                <h3 class="text-xl sm:text-2xl font-black text-white tracking-tight ${textClass} transition-colors mb-1">
                    ${item.title}
                </h3>
                <p class="text-slate-300 text-xs leading-relaxed font-light max-w-md line-clamp-2">
                    ${item.description}
                </p>
            </div>

            ${item.image ? `
            <div class="relative z-10 my-1 rounded-2xl overflow-hidden border border-white/15 bg-slate-950/80 shadow-2xl group/mockup">
                <div class="px-3 py-1.5 bg-slate-900/90 border-b border-white/10 flex items-center justify-between text-[10px] text-slate-400">
                    <div class="flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-rose-500/80 inline-block"></span>
                        <span class="w-2 h-2 rounded-full bg-amber-500/80 inline-block"></span>
                        <span class="w-2 h-2 rounded-full bg-emerald-500/80 inline-block"></span>
                    </div>
                    <div class="bg-slate-950/80 px-2.5 py-0.5 rounded-md border border-white/5 font-mono text-[9px] text-slate-400 flex items-center gap-1">
                        <svg class="w-2.5 h-2.5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        ${item.key}.edu.pe
                    </div>
                    <div class="text-slate-500 font-mono text-[9px]">Preview</div>
                </div>

                <div class="relative h-32 sm:h-36 overflow-hidden bg-slate-950 group">
                    <img src="${item.image}" alt="${item.title}" class="w-full h-full object-cover object-top opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700 ease-out"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/20 to-transparent pointer-events-none"></div>
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-slate-950/40 backdrop-blur-[2px]">
                        <button onclick="openProjectModal('${item.key}')" class="px-3 py-1.5 bg-rose-500 text-white font-bold text-xs rounded-xl shadow-xl flex items-center gap-1.5 hover:bg-rose-600 hover:scale-105 transition-all cursor-pointer">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            Captura Completa
                        </button>
                    </div>
                </div>
            </div>
            ` : `
            <div class="relative z-10 my-2 p-4 rounded-2xl border border-white/10 bg-slate-950/50 flex flex-col justify-center items-center text-center">
                <div class="w-10 h-10 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center ${textClass} mb-1">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <span class="text-xs font-mono font-bold text-slate-300">${item.subtitle || item.title}</span>
            </div>
            `}

            <div class="relative z-10 pt-1.5 flex flex-wrap items-center justify-between gap-2 border-t border-white/10">
                <div class="flex flex-wrap items-center gap-1">
                    ${item.tags.map(t => `<span class="px-2 py-0.5 bg-white/5 text-[9px] font-mono font-bold text-slate-300 rounded-md border border-white/10">${t}</span>`).join('')}
                </div>
                <button onclick="openProjectModal('${item.key}')" class="text-[11px] font-bold ${textClass} flex items-center gap-1 hover:underline cursor-pointer bg-transparent border-0 p-0 transition-all">
                    Ver detalles <span class="transition-transform group-hover:translate-x-1 inline-block">&rarr;</span>
                </button>
            </div>
        </div>
        `;
    }

    // Pattern 2: Wide 2x1 Card
    if (isWide) {
        return `
        <div class="${slotClass} group relative bg-slate-900/80 border border-white/10 rounded-3xl p-4 sm:p-5 overflow-hidden ${borderClass} transition-all duration-500 flex flex-col justify-between shadow-xl backdrop-blur-xl h-full">
            <div class="absolute -bottom-10 -right-10 w-40 h-40 ${glowClass} blur-[60px] rounded-full pointer-events-none transition-all"></div>
            
            <div class="relative z-10 flex items-start justify-between gap-3">
                <div class="flex-1">
                    <div class="flex items-center justify-between mb-1">
                        <span class="px-2.5 py-0.5 bg-white/5 ${textClass} border border-white/10 text-[9px] font-mono font-bold uppercase tracking-widest rounded-full">${item.category}</span>
                        <span class="text-[9px] font-mono text-slate-500 sm:hidden">${item.subtitle || 'Sistema'}</span>
                    </div>
                    <h3 class="text-base sm:text-lg font-black text-white ${textClass} transition-colors mb-1 line-clamp-1">${item.title}</h3>
                    <p class="text-slate-300 text-xs leading-relaxed font-light line-clamp-2">${item.description}</p>
                </div>

                ${item.image ? `
                <div class="w-24 sm:w-28 h-20 shrink-0 rounded-xl overflow-hidden border border-white/10 bg-slate-950 relative shadow-md hidden sm:block">
                    <img src="${item.image}" alt="${item.title}" class="w-full h-full object-cover object-top opacity-85 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 to-transparent"></div>
                </div>
                ` : `
                <div class="w-24 sm:w-28 h-20 shrink-0 rounded-xl border border-white/10 bg-slate-950 flex items-center justify-center relative hidden sm:flex">
                    <div class="w-7 h-7 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center ${textClass}">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                </div>
                `}
            </div>

            <div class="relative z-10 flex items-center justify-between gap-2 pt-2 border-t border-white/10">
                <div class="flex items-center gap-1">
                    ${item.tags.map(t => `<span class="px-2 py-0.5 bg-white/5 text-[9px] font-mono text-slate-300 rounded border border-white/10">${t}</span>`).join('')}
                </div>
                <button onclick="openProjectModal('${item.key}')" class="text-[11px] font-bold ${textClass} flex items-center gap-1 hover:underline cursor-pointer bg-transparent border-0 p-0 transition-all">
                    Ver detalles <span class="transition-transform group-hover:translate-x-1 inline-block">&rarr;</span>
                </button>
            </div>
        </div>
        `;
    }

    // Pattern 3: Square 1x1 Card with Mini Image Preview
    return `
    <div onclick="openProjectModal('${item.key}')" class="${slotClass} group relative bg-slate-900/80 border border-white/10 rounded-3xl p-4 overflow-hidden ${borderClass} transition-all duration-500 flex flex-col justify-between shadow-xl backdrop-blur-xl h-full cursor-pointer">
        <div class="absolute -top-10 -left-10 w-32 h-32 ${glowClass} blur-[50px] rounded-full pointer-events-none transition-all"></div>
        
        <div class="flex items-center justify-between text-slate-400 z-10">
            <span class="text-[9px] font-mono uppercase tracking-widest ${textClass} font-bold">${item.category}</span>
            <svg class="w-3.5 h-3.5 ${textClass} group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </div>

        <div class="my-1.5 relative h-20 sm:h-22 rounded-xl overflow-hidden border border-white/10 bg-slate-950 shadow-inner group/img">
            ${item.image ? `
            <img src="${item.image}" alt="${item.title}" class="w-full h-full object-cover object-top opacity-85 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500"/>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent pointer-events-none"></div>
            ` : `
            <div class="w-full h-full bg-gradient-to-br from-slate-900 via-slate-950 to-slate-900 flex items-center justify-center relative overflow-hidden">
                <div class="absolute inset-0 ${glowClass} opacity-30 blur-md"></div>
                <div class="w-8 h-8 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center ${textClass} z-10 shadow-lg">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
            </div>
            `}
        </div>

        <div class="z-10 flex items-center justify-between gap-1 pt-1 border-t border-white/5">
            <div class="text-xs font-black text-white tracking-tight ${textClass} transition-colors line-clamp-1">${item.title}</div>
            <span class="text-[10px] font-bold ${textClass} shrink-0 group-hover:underline">Detalles &rarr;</span>
        </div>
    </div>
    `;
}

// Touch Swipe Gesture Support for Mobile Deck
function setupDeckTouchGestures() {
    let touchStartX = 0;
    let touchEndX = 0;
    const wrapper = document.getElementById('bento-deck-wrapper');
    
    if (!wrapper || wrapper.dataset.swipeInitialized) return;
    wrapper.dataset.swipeInitialized = "true";

    wrapper.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    wrapper.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        const swipeDistance = touchEndX - touchStartX;
        if (Math.abs(swipeDistance) > 40) {
            if (swipeDistance < 0) {
                changeDeckPage(1);  // Swipe Left -> Next
            } else {
                changeDeckPage(-1); // Swipe Right -> Prev
            }
        }
    }, { passive: true });
}

// Window resize handler to switch smoothly between mobile 1-card and desktop 4-card layouts
window.addEventListener('resize', () => {
    renderDeckPage(currentDeckPage);
});

// Modal handling for details
function openProjectModal(key) {
    const data = PROJECTS_LIST.find(p => p.key === key);
    if (!data) return;

    document.getElementById('modal-category').innerText = data.category;
    document.getElementById('modal-title').innerText = data.title;
    document.getElementById('modal-description').innerText = data.description;
    
    // Render Features
    const featuresContainer = document.getElementById('modal-features');
    featuresContainer.innerHTML = data.features.map(f => `
        <li class="flex items-start gap-2">
            <span class="text-rose-400 font-bold mt-0.5">✓</span>
            <span>${f}</span>
        </li>
    `).join('');

    // Render Tags
    const tagsContainer = document.getElementById('modal-tags');
    tagsContainer.innerHTML = data.tags.map(t => `
        <span class="px-2.5 py-1 bg-white/5 text-[10px] font-mono font-bold text-slate-200 rounded-lg border border-white/10">
            ${t}
        </span>
    `).join('');

    // Render Media
    const mediaContainer = document.getElementById('modal-media-container');
    const imgEl = document.getElementById('modal-image');
    if (data.image) {
        mediaContainer.style.display = 'block';
        imgEl.src = data.image;
    } else {
        mediaContainer.style.display = 'none';
    }

    // Set Link (Only show if valid web URL exists)
    const linkEl = document.getElementById('modal-link');
    const isRealUrl = Boolean(
        data.link && 
        data.link !== '#' && 
        data.link.trim() !== '' && 
        (data.link.startsWith('http://') || data.link.startsWith('https://') || data.link.startsWith('www.'))
    );

    if (isRealUrl) {
        linkEl.href = data.link;
        linkEl.style.display = 'inline-flex';
    } else {
        linkEl.style.display = 'none';
    }

    // Show Modal
    const backdrop = document.getElementById('project-modal-backdrop');
    const content = document.getElementById('project-modal-content');

    backdrop.classList.remove('opacity-0', 'pointer-events-none');
    backdrop.classList.add('opacity-100');
    content.classList.remove('scale-95');
    content.classList.add('scale-100');
    document.body.style.overflow = 'hidden';
}

function closeProjectModal() {
    const backdrop = document.getElementById('project-modal-backdrop');
    const content = document.getElementById('project-modal-content');

    backdrop.classList.remove('opacity-100');
    backdrop.classList.add('opacity-0', 'pointer-events-none');
    content.classList.remove('scale-100');
    content.classList.add('scale-95');
    document.body.style.overflow = 'auto';
}

function closeProjectModalOnBackdrop(e) {
    if (e.target.id === 'project-modal-backdrop') {
        closeProjectModal();
    }
}

// Initialize Deck on Load
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initDeck);
} else {
    initDeck();
}
</script>


