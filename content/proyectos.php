<div class="max-w-5xl h-full flex flex-col justify-center">
    <!-- Header -->
    <div class="mb-8 md:mb-12">
        <div class="flex items-center gap-3 mb-3">
            <span class="text-rose-500 font-mono text-[10px] uppercase tracking-[0.4em] font-bold">03. Portafolio</span>
            <div class="h-px bg-rose-500/20 w-12"></div>
        </div>
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-white tracking-tighter leading-none">
            PROYECTOS <span class="text-slate-800">DESTACADOS.</span>
        </h2>
    </div>

    <!-- Bento Grid -->
    <div class="grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-4 min-h-0 md:h-[60vh]">
        <!-- Main Project (Bento Large) -->
        <div class="md:col-span-2 md:row-span-2 group relative bg-white/5 border border-white/10 rounded-3xl p-6 sm:p-8 overflow-hidden hover:border-rose-500/50 transition-all duration-500 min-h-[260px]">
            <!-- Imagen de captura de pantalla del proyecto (Colocar tu captura en assets/img/universidad-en-linea.jpg) -->
            <div class="absolute inset-0 bg-cover bg-center opacity-25 group-hover:opacity-40 group-hover:scale-105 transition-all duration-700 pointer-events-none" style="background-image: url('assets/img/universidad-en-linea.png');"></div>
            <!-- Degradado para mantener legibilidad del texto -->
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/70 to-slate-950/30 pointer-events-none"></div>

            <div class="relative z-10 h-full flex flex-col justify-between">
                <div class="mb-6 md:mb-0">
                    <p class="text-rose-500 font-mono text-[9px] mb-2 font-bold uppercase">Plataforma Web & Educación</p>
                    <h4 class="text-xl sm:text-2xl font-black text-white mb-3 tracking-tight group-hover:text-rose-400 transition-colors">Universidad en Línea</h4>
                    <p class="text-slate-300 text-xs sm:text-sm leading-relaxed max-w-xs">
                        Ecosistema educativo digital para la gestión académica, aulas virtuales y campus interactivo.
                    </p>
                </div>
                <div class="flex items-center gap-2">
                    <span class="px-3 py-1 bg-white/10 text-[9px] font-bold text-slate-200 rounded-lg border border-white/10 backdrop-blur-md">PHP</span>
                    <span class="px-3 py-1 bg-white/10 text-[9px] font-bold text-slate-200 rounded-lg border border-white/10 backdrop-blur-md">SQL</span>
                    <span class="px-3 py-1 bg-white/10 text-[9px] font-bold text-slate-200 rounded-lg border border-white/10 backdrop-blur-md">Web</span>
                </div>
            </div>
        </div>

        <!-- Project 2 (Bento Square) -->
        <div class="md:col-span-2 group relative bg-white/5 border border-white/10 rounded-3xl p-6 overflow-hidden hover:border-indigo-500/50 transition-all min-h-[120px]">
            <div class="flex flex-col justify-between h-full">
                <h4 class="text-base sm:text-lg font-bold text-white group-hover:text-indigo-400 transition-colors mb-2 md:mb-0">Portal Multitronika</h4>
                <p class="text-[10px] text-slate-400">Infraestructura digital para soporte corporativo.</p>
            </div>
        </div>

        <!-- Project 3 (Bento Square) -->
        <div class="md:col-span-1 group relative bg-white/5 border border-white/10 rounded-3xl p-6 overflow-hidden hover:border-sky-500/50 transition-all min-h-[100px]">
            <div class="flex flex-col justify-center items-center h-full text-center">
                <span class="text-sky-500 font-black text-xl mb-1">+10</span>
                <span class="text-[8px] font-bold text-slate-500 uppercase tracking-widest">Sistemas</span>
            </div>
        </div>

        <!-- Project 4 (Bento Square) -->
        <div class="md:col-span-1 group relative bg-slate-900 border border-white/5 rounded-3xl p-6 overflow-hidden hover:border-emerald-500/50 transition-all min-h-[100px]">
            <div class="flex flex-col justify-center items-center h-full text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-slate-600 mb-2 group-hover:text-emerald-500 transition-colors"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                <span class="text-[8px] font-bold text-slate-500 uppercase tracking-widest">Infraestructura</span>
            </div>
        </div>
    </div>
</div>
