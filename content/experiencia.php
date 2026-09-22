<?php
// Datos dinámicos de experiencia laboral (Fácil de agregar o modificar)
$experiencias = [
    [
        'empresa'     => 'Multitronikaservicios E.I.R.L.',
        'badge'       => 'Actual',
        'periodo'     => '2020 — Presente',
        'puesto'      => 'Especialista en Redes, Telecomunicaciones e Informática',
        'descripcion' => 'Especialista en redes e infraestructura de telecomunicaciones, con experiencia en despliegue y mantenimiento de redes y sistemas informáticos, así como en el desarrollo e implementación de un sistema web para la gestión interna de la empresa.',
        'logros'      => ['Infraestructura & Telecomunicaciones', 'Sistema Web de Gestión Interna'],
        'tags'        => ['Redes', 'Telecomunicaciones', 'Sistemas Web', 'TI'],
        'color'       => 'sky',
        'esPresente'  => true,
    ],
    [
        'empresa'     => 'JM&GV S.A.C.',
        'badge'       => 'Sistemas',
        'periodo'     => '2018 — 2021',
        'puesto'      => 'Sistemas & Infraestructura TI',
        'descripcion' => 'Gestión y administración de servidores, redes locales y sistemas de almacenamiento corporativo. Implementé mejoras en la infraestructura digital, optimizando la conectividad y reduciendo los tiempos de inactividad de los servicios clave de la organización.',
        'logros'      => ['Administración de Servidores & Storage', 'Optimización de Conectividad'],
        'tags'        => ['Servidores', 'Redes Locales', 'Storage', 'Infraestructura'],
        'color'       => 'indigo',
        'esPresente'  => false,
    ],
    [
        'empresa'     => 'DEVELOPER',
        'badge'       => 'Cusco — Perú',
        'periodo'     => '2013 — 2020',
        'puesto'      => 'Desarrollador de Sistemas Web & Software',
        'descripcion' => 'Desarrollo e implementación de sistemas web integrales, plataformas de gestión a medida y soluciones de software de alto rendimiento. Especializado en diseño de arquitectura web, creación de paneles administrativos, optimización de bases de datos y entrega de aplicaciones robustas orientadas al usuario final.',
        'logros'      => ['Desarrollo de Sistemas Web a Medida', 'Plataformas de Gestión & Optimización'],
        'tags'        => ['Sistemas Web', 'PHP / MySQL', 'JavaScript', 'Full Stack'],
        'color'       => 'rose',
        'esPresente'  => false,
    ],
];

// Mapeo de estilos por color
$estilosColor = [
    'sky' => [
        'dot'         => 'border-sky-400 shadow-[0_0_12px_rgba(56,189,248,0.9)]',
        'borderHover' => 'hover:border-sky-500/40',
        'textHover'   => 'group-hover:text-sky-400',
        'badge'       => 'bg-sky-500/10 text-sky-400 border-sky-500/20',
        'date'        => 'text-sky-400 bg-slate-950/80 border-sky-500/30 shadow-inner font-bold',
        'check'       => 'text-sky-400',
    ],
    'indigo' => [
        'dot'         => 'border-indigo-400/60 group-hover:border-indigo-400 shadow-[0_0_10px_rgba(129,140,248,0.5)]',
        'borderHover' => 'hover:border-indigo-500/40',
        'textHover'   => 'group-hover:text-indigo-300',
        'badge'       => 'bg-indigo-500/10 text-indigo-400 border-indigo-500/20',
        'date'        => 'text-slate-400 bg-slate-950/80 border-white/10',
        'check'       => 'text-indigo-400',
    ],
    'rose' => [
        'dot'         => 'border-rose-400/60 group-hover:border-rose-400 shadow-[0_0_10px_rgba(251,113,133,0.5)]',
        'borderHover' => 'hover:border-rose-500/40',
        'textHover'   => 'group-hover:text-rose-300',
        'badge'       => 'bg-rose-500/10 text-rose-400 border-rose-500/20',
        'date'        => 'text-slate-400 bg-slate-950/80 border-white/10',
        'check'       => 'text-rose-400',
    ],
    'emerald' => [
        'dot'         => 'border-emerald-400/60 group-hover:border-emerald-400 shadow-[0_0_10px_rgba(52,211,153,0.5)]',
        'borderHover' => 'hover:border-emerald-500/40',
        'textHover'   => 'group-hover:text-emerald-300',
        'badge'       => 'bg-emerald-500/10 text-emerald-400 border-emerald-500/20',
        'date'        => 'text-slate-400 bg-slate-950/80 border-white/10',
        'check'       => 'text-emerald-400',
    ],
    'amber' => [
        'dot'         => 'border-amber-400/60 group-hover:border-amber-400 shadow-[0_0_10px_rgba(251,191,36,0.5)]',
        'borderHover' => 'hover:border-amber-500/40',
        'textHover'   => 'group-hover:text-amber-300',
        'badge'       => 'bg-amber-500/10 text-amber-400 border-amber-500/20',
        'date'        => 'text-slate-400 bg-slate-950/80 border-white/10',
        'check'       => 'text-amber-400',
    ],
    'purple' => [
        'dot'         => 'border-purple-400/60 group-hover:border-purple-400 shadow-[0_0_10px_rgba(192,132,252,0.5)]',
        'borderHover' => 'hover:border-purple-500/40',
        'textHover'   => 'group-hover:text-purple-300',
        'badge'       => 'bg-purple-500/10 text-purple-400 border-purple-500/20',
        'date'        => 'text-slate-400 bg-slate-950/80 border-white/10',
        'check'       => 'text-purple-400',
    ],
];
?>
<div class="max-w-4xl h-full flex flex-col justify-center">
    <!-- Section Header -->
    <div class="mb-3 sm:mb-4">
        <div class="flex items-center gap-3 mb-1.5">
            <span class="text-sky-500 font-mono text-[10px] uppercase tracking-[0.4em] font-bold flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-sky-400 animate-pulse"></span>
                02. Trayectoria
            </span>
            <div class="h-px bg-gradient-to-r from-sky-500/40 to-transparent w-16"></div>
        </div>
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-black text-white tracking-tighter leading-none">
            EXPERIENCIA <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-400 via-indigo-400 to-rose-400">PROFESIONAL.</span>
        </h2>
    </div>

    <!-- Timeline Cards Grid -->
    <div class="relative pl-4 sm:pl-6 space-y-2.5 sm:space-y-3">
        <!-- Glowing Vertical Timeline Line -->
        <div class="absolute left-0 top-2.5 bottom-2.5 w-px bg-gradient-to-b from-sky-500 via-indigo-500/50 to-transparent"></div>

        <?php foreach ($experiencias as $exp): 
            $c = $exp['color'] ?? 'sky';
            $st = $estilosColor[$c] ?? $estilosColor['sky'];
        ?>
        <!-- EXPERIENCE: <?= htmlspecialchars($exp['empresa']) ?> -->
        <div class="relative group">
            <!-- Timeline Neon Dot -->
            <div class="absolute -left-[20px] sm:-left-[28px] top-3.5 w-3 h-3 rounded-full bg-slate-950 border-2 <?= $st['dot'] ?> group-hover:scale-125 transition-transform duration-300"></div>

            <div class="bg-slate-900/70 border border-white/10 <?= $st['borderHover'] ?> rounded-xl px-4 py-3 transition-all duration-300 shadow-xl backdrop-blur-xl group-hover:translate-x-1">
                <div class="flex flex-wrap items-center justify-between gap-2 mb-1">
                    <div class="flex items-center gap-2">
                        <h3 class="text-sm sm:text-base font-black text-white tracking-tight <?= $st['textHover'] ?> transition-colors">
                            <?= htmlspecialchars($exp['empresa']) ?>
                        </h3>
                        <?php if (!empty($exp['badge'])): ?>
                            <span class="px-2 py-0.5 <?= $st['badge'] ?> text-[9px] font-mono font-bold uppercase tracking-wider rounded-full border">
                                <?= htmlspecialchars($exp['badge']) ?>
                            </span>
                        <?php endif; ?>
                    </div>
                    <span class="text-[9px] sm:text-[10px] font-mono px-2.5 py-0.5 rounded-full border <?= $exp['esPresente'] ? $estilosColor['sky']['date'] : 'text-slate-400 bg-slate-950/80 border-white/10' ?>">
                        <?= htmlspecialchars($exp['periodo']) ?>
                    </span>
                </div>

                <p class="text-xs font-bold text-slate-300 mb-1"><?= htmlspecialchars($exp['puesto']) ?></p>

                <p class="text-slate-400 text-[11px] sm:text-xs leading-snug font-light mb-2">
                    <?= htmlspecialchars($exp['descripcion']) ?>
                </p>

                <!-- Bullet Achievements & Tags -->
                <div class="flex flex-wrap items-center justify-between gap-2 pt-1.5 border-t border-white/5 text-[10px]">
                    <div class="flex flex-wrap items-center gap-1.5 text-slate-400 font-light">
                        <?php foreach ($exp['logros'] as $i => $logro): ?>
                            <?php if ($i > 0): ?><span class="text-slate-600">•</span><?php endif; ?>
                            <span class="<?= $st['check'] ?> font-bold">✓</span> <?= htmlspecialchars($logro) ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="flex flex-wrap gap-1">
                        <?php foreach ($exp['tags'] as $tag): ?>
                            <span class="px-2 py-0.5 bg-white/5 text-slate-300 font-mono text-[9px] rounded border border-white/10"><?= htmlspecialchars($tag) ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
