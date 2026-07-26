<div class="max-w-4xl h-full flex flex-col justify-center">
    <!-- Section Header -->
    <div class="mb-8 md:mb-12">
        <div class="flex items-center gap-3 mb-3">
            <span class="text-emerald-500 font-mono text-[10px] uppercase tracking-[0.4em] font-bold">04. Expertise</span>
            <div class="h-px bg-emerald-500/20 w-12"></div>
        </div>
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-white tracking-tighter leading-none">
            CAPACIDADES <span class="text-slate-800">& SKILLS.</span>
        </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
        <!-- Education -->
        <div class="space-y-6">
            <h3 class="text-slate-500 font-bold uppercase tracking-[0.2em] text-[9px]">Formación</h3>
            <div class="space-y-6">
                <div class="group border-l border-white/10 pl-6">
                    <h4 class="text-lg sm:text-xl font-bold text-white group-hover:text-emerald-400 transition-colors leading-tight">Ingeniería de Sistemas</h4>
                    <p class="text-slate-400 text-xs italic mt-1">U. Tecnológica de los Andes</p>
                </div>
                <div class="group border-l border-white/10 pl-6">
                    <h4 class="text-lg sm:text-xl font-bold text-white group-hover:text-emerald-400 transition-colors leading-tight">Fullstack & TI</h4>
                    <p class="text-slate-400 text-xs italic mt-1">Next University / Platzi / Certificaciones</p>
                </div>
            </div>
        </div>

        <!-- Skills Pill Grid -->
        <div class="space-y-6">
            <h3 class="text-slate-500 font-bold uppercase tracking-[0.2em] text-[9px]">Habilidades Clave</h3>
            <div class="flex flex-wrap gap-2">
                <?php 
                $skills = ['Liderazgo', 'Gestión TI', 'Arquitectura', 'Seguridad', 'Consultoría', 'Estrategia']; 
                foreach($skills as $s): ?>
                <span class="px-3.5 py-2 bg-white/5 border border-white/10 text-[9px] sm:text-[10px] font-black text-white rounded-xl uppercase tracking-widest hover:border-emerald-500/50 hover:bg-emerald-500/5 transition-all">
                    <?php echo $s; ?>
                </span>
                <?php endforeach; ?>
            </div>
            
            <div class="p-5 sm:p-6 rounded-2xl bg-emerald-500/5 border border-emerald-500/10 mt-6">
                <p class="text-slate-300 text-xs sm:text-sm leading-relaxed italic">
                    "Convirtiendo complejidad técnica en soluciones escalables."
                </p>
            </div>
        </div>
    </div>
</div>
