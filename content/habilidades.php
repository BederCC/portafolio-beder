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
            
            <!-- Contenedor fluido para íconos con Tooltip en Hover -->
            <div class="flex flex-wrap items-center gap-3.5 sm:gap-4.5 pt-2 max-h-[360px] overflow-y-auto pr-1 custom-scrollbar">
                <?php 
                // Carpeta base de íconos
                $baseIconDir = 'assets/img/icon/';

                // Lista de habilidades: solo especifica el Nombre y el archivo de ícono (ej. 'github.svg')
                $skills = [
                    ['name' => 'GitHub', 'icon' => 'github.svg'],
                    ['name' => 'HTML5', 'icon' => 'html5.svg'],
                    ['name' => 'CSS3', 'icon' => 'css3.svg'],
                    ['name' => 'JavaScript', 'icon' => 'javascript.svg'],
                    ['name' => 'TypeScript', 'icon' => 'typescript.svg'],
                    ['name' => 'PHP', 'icon' => 'php.svg'],
                    ['name' => 'MySQL', 'icon' => 'mysql.svg'],
                    ['name' => 'PostgreSQL', 'icon' => 'postgresql.svg'],
                    ['name' => 'React', 'icon' => 'react.svg'],
                    ['name' => 'Tailwind CSS', 'icon' => 'tailwind.svg'],
                    ['name' => 'Node.js', 'icon' => 'nodejs.svg'],
                    ['name' => 'Git', 'icon' => 'git.svg'],
                    ['name' => 'Linux', 'icon' => 'linux.svg'],
                    ['name' => 'Docker', 'icon' => 'docker.svg'],
                    ['name' => 'Apache', 'icon' => 'apache.svg']
                ]; 
                
                foreach($skills as $s): 
                    $iconRaw = $s['icon'];
                    if (strpos($iconRaw, '<svg') !== false) {
                        $iconMarkup = $iconRaw;
                    } else {
                        $filePath = (strpos($iconRaw, '/') !== false) ? $iconRaw : $baseIconDir . $iconRaw;
                        $iconMarkup = '<img src="' . htmlspecialchars($filePath) . '" alt="' . htmlspecialchars($s['name']) . '" class="w-7 h-7 object-contain" />';
                    }
                ?>
                
                <!-- Ícono sin fondo (Grayscale por defecto -> Color en Hover) -->
                <div class="relative group flex items-center justify-center p-1.5 cursor-pointer">
                    
                    <!-- Ícono con filtro Grayscale y transición a Color + Scale -->
                    <div class="flex items-center justify-center filter grayscale opacity-40 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300 group-hover:scale-125 group-hover:drop-shadow-[0_0_12px_rgba(56,189,248,0.6)]">
                        <?php echo $iconMarkup; ?>
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
