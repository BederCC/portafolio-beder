<?php
/**
 * EFECTO DE FONDO: LUCIÉRNAGAS (FIREFLIES ANIMATION)
 * -------------------------------------------------------------
 * Módulo independiente. Para activar o desactivar en la web,
 * simplemente incluye o remueve esta línea en index.php:
 * <?php include 'includes/fireflies.php'; ?>
 */
?>
<div id="fireflies-container" class="fixed inset-0 pointer-events-none z-[1] overflow-hidden">
    <?php for ($i = 1; $i <= 15; $i++): ?>
        <div class="firefly firefly-<?php echo $i; ?>"></div>
    <?php endfor; ?>
</div>

<style>
.firefly {
    position: fixed;
    left: 50%;
    top: 50%;
    width: 0.4vw;
    height: 0.4vw;
    margin: -0.2vw 0 0 9.8vw;
    animation: ease 200s alternate infinite;
    pointer-events: none;
}

.firefly::before,
.firefly::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    transform-origin: -10vw;
}

.firefly::before {
    background: rgba(0, 0, 0, 0.4);
    opacity: 0.4;
    animation: firefly-drift ease alternate infinite;
}

.firefly::after {
    background: #ffffff;
    opacity: 0;
    box-shadow: 0 0 0vw 0vw #facc15;
    animation: firefly-drift ease alternate infinite, firefly-flash ease infinite;
}

@keyframes firefly-drift {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

@keyframes firefly-flash {
    0%, 30%, 100% {
        opacity: 0;
        box-shadow: 0 0 0vw 0vw #facc15;
    }
    5% {
        opacity: 1;
        box-shadow: 0 0 2.2vw 0.4vw #facc15;
    }
}

<?php 
// Generación dinámica de rutas aleatorias idénticas al mixin de Sass
for ($i = 1; $i <= 15; $i++): 
    $rotationSpeed = rand(8, 18) . 's';
    $flashDuration = rand(5000, 11000) . 'ms';
    $flashDelay = rand(500, 8500) . 'ms';
    $steps = rand(16, 28);
?>
.firefly-<?php echo $i; ?> {
    animation-name: move-firefly-<?php echo $i; ?>;
}
.firefly-<?php echo $i; ?>::before {
    animation-duration: <?php echo $rotationSpeed; ?>;
}
.firefly-<?php echo $i; ?>::after {
    animation-duration: <?php echo $rotationSpeed; ?>, <?php echo $flashDuration; ?>;
    animation-delay: 0ms, <?php echo $flashDelay; ?>;
}

@keyframes move-firefly-<?php echo $i; ?> {
    <?php for ($step = 0; $step <= $steps; $step++): 
        $pct = round($step * (100 / $steps), 2);
        $tx = rand(-50, 50) . 'vw';
        $ty = rand(-50, 50) . 'vh';
        $sc = round(rand(25, 100) / 100, 2);
    ?>
    <?php echo $pct; ?>% {
        transform: translateX(<?php echo $tx; ?>) translateY(<?php echo $ty; ?>) scale(<?php echo $sc; ?>);
    }
    <?php endfor; ?>
}
<?php endfor; ?>
</style>
