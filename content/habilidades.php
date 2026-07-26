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

        <!-- Pure Icon Grid without Background + Hover Tooltips -->
        <div class="space-y-6">
            <h3 class="text-slate-500 font-bold uppercase tracking-[0.2em] text-[9px]">Stack Tecnológico & Herramientas</h3>
            
            <!-- Contenedor fluido para ~60 íconos -->
            <div class="flex flex-wrap items-center gap-3.5 sm:gap-5 pt-2 max-h-[360px] overflow-y-auto pr-1 custom-scrollbar">
                <?php 
                $skills = [
                    [
                        'name' => 'HTML5',
                        'icon' => '<svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.97 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622-12.871-.001.682 7.957h8.839l-.328 3.487-3.57.973-3.567-.973-.24-2.68H5.945l.432 5.176 5.594 1.554 5.597-1.554.767-8.583H8.531z"/></svg>'
                    ],
                    [
                        'name' => 'HTML5',
                        'icon' => '<svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.97 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622-12.871-.001.682 7.957h8.839l-.328 3.487-3.57.973-3.567-.973-.24-2.68H5.945l.432 5.176 5.594 1.554 5.597-1.554.767-8.583H8.531z"/></svg>'
                    ],
                    [
                        'name' => 'HTML5',
                        'icon' => '<svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.97 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622-12.871-.001.682 7.957h8.839l-.328 3.487-3.57.973-3.567-.973-.24-2.68H5.945l.432 5.176 5.594 1.554 5.597-1.554.767-8.583H8.531z"/></svg>'
                    ],
                    [
                        'name' => 'HTML5',
                        'icon' => '<svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.97 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622-12.871-.001.682 7.957h8.839l-.328 3.487-3.57.973-3.567-.973-.24-2.68H5.945l.432 5.176 5.594 1.554 5.597-1.554.767-8.583H8.531z"/></svg>'
                    ],
                    [
                        'name' => 'HTML5',
                        'icon' => '<svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.97 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622-12.871-.001.682 7.957h8.839l-.328 3.487-3.57.973-3.567-.973-.24-2.68H5.945l.432 5.176 5.594 1.554 5.597-1.554.767-8.583H8.531z"/></svg>'
                    ],
                    [
                        'name' => 'HTML5',
                        'icon' => '<svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.97 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622-12.871-.001.682 7.957h8.839l-.328 3.487-3.57.973-3.567-.973-.24-2.68H5.945l.432 5.176 5.594 1.554 5.597-1.554.767-8.583H8.531z"/></svg>'
                    ],
                    [
                        'name' => 'HTML5',
                        'icon' => '<svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.97 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622-12.871-.001.682 7.957h8.839l-.328 3.487-3.57.973-3.567-.973-.24-2.68H5.945l.432 5.176 5.594 1.554 5.597-1.554.767-8.583H8.531z"/></svg>'
                    ],
                    [
                        'name' => 'HTML5',
                        'icon' => '<svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.97 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622-12.871-.001.682 7.957h8.839l-.328 3.487-3.57.973-3.567-.973-.24-2.68H5.945l.432 5.176 5.594 1.554 5.597-1.554.767-8.583H8.531z"/></svg>'
                    ],
                    [
                        'name' => 'HTML5',
                        'icon' => '<svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.97 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622-12.871-.001.682 7.957h8.839l-.328 3.487-3.57.973-3.567-.973-.24-2.68H5.945l.432 5.176 5.594 1.554 5.597-1.554.767-8.583H8.531z"/></svg>'
                    ],
                    [
                        'name' => 'HTML5',
                        'icon' => '<svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.97 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622-12.871-.001.682 7.957h8.839l-.328 3.487-3.57.973-3.567-.973-.24-2.68H5.945l.432 5.176 5.594 1.554 5.597-1.554.767-8.583H8.531z"/></svg>'
                    ],
                    [
                        'name' => 'HTML5',
                        'icon' => '<svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.97 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622-12.871-.001.682 7.957h8.839l-.328 3.487-3.57.973-3.567-.973-.24-2.68H5.945l.432 5.176 5.594 1.554 5.597-1.554.767-8.583H8.531z"/></svg>'
                    ],
                    [
                        'name' => 'HTML5',
                        'icon' => '<svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.97 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622-12.871-.001.682 7.957h8.839l-.328 3.487-3.57.973-3.567-.973-.24-2.68H5.945l.432 5.176 5.594 1.554 5.597-1.554.767-8.583H8.531z"/></svg>'
                    ],
                    [
                        'name' => 'HTML5',
                        'icon' => '<svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.97 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622-12.871-.001.682 7.957h8.839l-.328 3.487-3.57.973-3.567-.973-.24-2.68H5.945l.432 5.176 5.594 1.554 5.597-1.554.767-8.583H8.531z"/></svg>'
                    ],
                    
                    [
                        'name' => 'HTML5',
                        'icon' => '<svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.97 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622-12.871-.001.682 7.957h8.839l-.328 3.487-3.57.973-3.567-.973-.24-2.68H5.945l.432 5.176 5.594 1.554 5.597-1.554.767-8.583H8.531z"/></svg>'
                    ],
                    [
                        'name' => 'CSS3',
                        'icon' => '<svg class="w-7 h-7 text-sky-500" viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.97 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622-12.871-.001.682 7.957h8.839l-.328 3.487-3.57.973-3.567-.973-.24-2.68H5.945l.432 5.176 5.594 1.554 5.597-1.554.767-8.583H8.531z"/></svg>'
                    ],
                    [
                        'name' => 'JavaScript',
                        'icon' => '<svg class="w-7 h-7 text-yellow-400" viewBox="0 0 24 24" fill="currentColor"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 3h18v18H3V3zm10.7 13.9c.4.7.9 1.2 1.7 1.2.8 0 1.3-.4 1.3-1.1 0-.7-.5-1-1.5-1.4l-.5-.2c-1.5-.6-2.5-1.4-2.5-3 0-1.6 1.3-2.8 3.2-2.8 1.4 0 2.4.5 3 1.6l-1.6 1c-.3-.6-.8-.9-1.4-.9-.6 0-1 .4-1 .9 0 .6.4.9 1.4 1.3l.5.2c1.7.7 2.7 1.5 2.7 3.2 0 1.9-1.5 3-3.6 3-2.1 0-3.3-1-3.9-2.3l1.7-1zm-6.8.2c.3.6.7.9 1.3.9.6 0 1-.3 1-1.3V9.2h2.2v7.5c0 2.2-1.3 3.2-3.2 3.2-1.7 0-2.7-.8-3.2-2l1.9-1.2z"/></svg>'
                    ],
                    [
                        'name' => 'PHP',
                        'icon' => '<svg class="w-7 h-7 text-indigo-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm-3.5 16H6.8l.6-3h1.8c1.3 0 2.2-.6 2.5-1.8.3-1.2-.3-2.2-1.6-2.2H7.9l-1.4 7H5l2.2-11h3.4c2.5 0 3.9 1.3 3.3 3.8-.5 2.2-2.2 4.2-5.4 4.2zm7.7 0h-1.7l.6-3h1.8c1.3 0 2.2-.6 2.5-1.8.3-1.2-.3-2.2-1.6-2.2h-2.2l-1.4 7h-1.5l2.2-11h3.4c2.5 0 3.9 1.3 3.3 3.8-.5 2.2-2.2 4.2-5.4 4.2z"/></svg>'
                    ],
                    [
                        'name' => 'MySQL',
                        'icon' => '<svg class="w-7 h-7 text-sky-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>'
                    ],
                    [
                        'name' => 'React',
                        'icon' => '<svg class="w-7 h-7 text-cyan-400" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="2.5"/><ellipse cx="12" cy="12" rx="10" ry="4.5" fill="none" stroke="currentColor" stroke-width="1.5"/><ellipse cx="12" cy="12" rx="10" ry="4.5" fill="none" stroke="currentColor" stroke-width="1.5" transform="rotate(60 12 12)"/><ellipse cx="12" cy="12" rx="10" ry="4.5" fill="none" stroke="currentColor" stroke-width="1.5" transform="rotate(120 12 12)"/></svg>'
                    ],
                    [
                        'name' => 'Git',
                        'icon' => '<svg class="w-7 h-7 text-rose-500" viewBox="0 0 24 24" fill="currentColor"><path d="M23.546 10.93L13.067.452c-.604-.603-1.582-.603-2.188 0L8.708 2.627l2.76 2.76c.645-.216 1.379-.06 1.889.449.516.516.668 1.258.442 1.902l2.66 2.66c.644-.225 1.386-.073 1.902.443.744.744.744 1.952 0 2.696-.744.744-1.952.744-2.696 0-.55-.55-.694-1.341-.433-2.016l-2.483-2.483v6.577c.216.1.41.242.56.417.744.744.744 1.952 0 2.696-.744.744-1.952.744-2.696 0-.744-.744-.744-1.952 0-2.696.183-.183.393-.324.623-.422V9.332a1.986 1.986 0 0 1-.623-.422c-.523-.523-.672-1.272-.444-1.921L7.546 4.316.454 11.408c-.604.604-.604 1.582 0 2.188l10.48 10.479c.604.604 1.582.604 2.188 0l10.424-10.424c.604-.604.604-1.582 0-2.221z"/></svg>'
                    ]
                ]; 
                
                foreach($skills as $s): ?>
                
                <!-- Ícono sin fondo (Grayscale por defecto -> Color en Hover) -->
                <div class="relative group flex items-center justify-center p-1.5 cursor-pointer">
                    
                    <!-- Ícono con filtro Grayscale y transición a Color + Scale -->
                    <div class="flex items-center justify-center filter grayscale opacity-40 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300 group-hover:scale-125 group-hover:drop-shadow-[0_0_12px_rgba(56,189,248,0.6)]">
                        <?php echo $s['icon']; ?>
                    </div>
                    
                    <!-- Tooltip flotante con el nombre -->
                    <div class="absolute bottom-full mb-2 left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 pointer-events-none transition-all duration-300 group-hover:-translate-y-1 z-30">
                        <div class="px-2.5 py-1 bg-slate-900/95 border border-white/10 text-[9px] font-bold text-white uppercase tracking-wider rounded-lg whitespace-nowrap shadow-2xl backdrop-blur-md">
                            <?php echo $s['name']; ?>
                        </div>
                        <!-- Flechita del tooltip -->
                        <div class="w-2 h-2 bg-slate-900 border-b border-r border-white/10 rotate-45 mx-auto -mt-1"></div>
                    </div>

                </div>

                <?php endforeach; ?>
            </div>
            <p class="text-[10px] text-slate-500 italic pt-1">Pasa el cursor para ver el color y nombre de la tecnología.</p>
        </div>
    </div>
</div>
