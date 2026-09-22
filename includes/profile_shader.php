<!-- ======================================================= -->
<!-- PERFIL INTERACTIVO CON THREE.JS (RGB SHIFT & 3D TILT)  -->
<!-- ======================================================= -->

<div class="relative group select-none flex items-center justify-center">
    <!-- Resplandor ambiental difuminado de fondo (Aura Cósmica) -->
    <div class="absolute -inset-8 sm:-inset-12 rounded-full bg-gradient-to-tr from-sky-500/25 via-indigo-500/20 to-transparent blur-3xl pointer-events-none -z-10 animate-pulse"></div>
    
    <!-- Anillos orbitales decorativos -->
    <div class="absolute -inset-2 sm:-inset-3 rounded-full border border-sky-400/25 pointer-events-none scale-100 group-hover:scale-105 transition-transform duration-700"></div>
    <div class="absolute -inset-5 sm:-inset-6 rounded-full border border-indigo-400/15 pointer-events-none scale-95 group-hover:scale-110 transition-transform duration-1000"></div>

    <!-- Contenedor Circular con Bordes Difuminados (Radial Feathering Mask) -->
    <div 
        id="profile-circle-wrapper" 
        class="profile-circle-container relative rounded-full overflow-hidden shadow-2xl flex items-center justify-center cursor-pointer bg-slate-950 transition-transform duration-500">
        
        <!-- Imagen estática / Poster inicial (se oculta automáticamente al iniciar WebGL para evitar doble imagen) -->
        <img 
            id="profile-static-img" 
            src="img/perfil.webp" 
            alt="Beder - Perfil" 
            class="absolute inset-0 w-full h-full object-cover rounded-full z-0 pointer-events-none transition-opacity duration-300" />
        
        <!-- Canvas WebGL interactivo -->
        <canvas id="profile-shader-canvas" class="absolute inset-0 w-full h-full z-10 opacity-0 transition-opacity duration-300"></canvas>
    </div>
</div>

<style>
    /* Dimensiones explícitas y máscara radial para bordes perfectamente difuminados */
    .profile-circle-container {
        width: 280px;
        height: 280px;
        -webkit-mask-image: radial-gradient(circle closest-side, rgba(0,0,0,1) 68%, rgba(0,0,0,0.5) 86%, rgba(0,0,0,0) 100%);
        mask-image: radial-gradient(circle closest-side, rgba(0,0,0,1) 68%, rgba(0,0,0,0.5) 86%, rgba(0,0,0,0) 100%);
    }
    @media (min-width: 640px) {
        .profile-circle-container {
            width: 320px;
            height: 320px;
        }
    }
    @media (min-width: 768px) {
        .profile-circle-container {
            width: 350px;
            height: 350px;
        }
    }
    @media (min-width: 1024px) {
        .profile-circle-container {
            width: 380px;
            height: 380px;
        }
    }
    @media (min-width: 1280px) {
        .profile-circle-container {
            width: 410px;
            height: 410px;
        }
    }
</style>

<!-- ========================================== -->
<!-- SCRIPT DEL EFECTO THREE.JS + SHADERS       -->
<!-- ========================================== -->
<script>
(function() {
    // Asegurar compatibilidad de TweenMax con GSAP
    const Tween = window.gsap || window.TweenMax;

    class PlaneSubject {
        constructor(scene, onReady) {
            this.raycaster = new THREE.Raycaster();
            this.scene = scene;
            this.mesh = null;

            const textureLoader = new THREE.TextureLoader();
            textureLoader.crossOrigin = '';

            // Cargar imagen de perfil con callback seguro
            const texture = textureLoader.load('img/perfil.webp', (tex) => {
                tex.generateMipmaps = true;
                tex.minFilter = THREE.LinearFilter;
                tex.magFilter = THREE.LinearFilter;
                tex.needsUpdate = true;
                if (typeof onReady === 'function') onReady();
            });

            // Tamaño del plano ajustado al 100% de la vista de la cámara (FOV 60 a z=8)
            const planeHeight = 2.0 * Math.tan((60.0 / 2.0) * Math.PI / 180.0) * 8.0; // aprox 9.24
            const geometry = new THREE.PlaneGeometry(planeHeight, planeHeight, 32, 32);

            const material = new THREE.ShaderMaterial({
                transparent: true,
                vertexShader: `
                    varying vec2 vUv; 

                    void main() {
                        vUv = uv;
                        gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);
                    }
                `,
                fragmentShader: `
                    precision highp float; 

                    uniform sampler2D u_texture;
                    uniform float imageAspectRatio;
                    uniform float aspectRatio;
                    uniform float opacity;
                    uniform float hover;
                    varying vec2 vUv;

                    float exponentialInOut(float t) {
                        return t == 0.0 || t == 1.0 
                            ? t 
                            : t < 0.5
                                ? +0.5 * pow(2.0, (20.0 * t) - 10.0)
                                : -0.5 * pow(2.0, 10.0 - (t * 20.0)) + 1.0;
                    } 

                    void main() {
                        vec2 uv = vUv;

                        // Fix aspect ratio
                        float u = imageAspectRatio / aspectRatio;
                        if (imageAspectRatio > aspectRatio) {
                            u = 1.0 / u;
                        }

                        uv.y *= u;
                        uv.y -= (u) / 2.0 - 0.5;

                        // Hover zoom sutil sin salto brusco
                        float zoomLevel = 0.06;
                        float hoverLevel = exponentialInOut(min(1.0, (distance(vec2(0.5), uv) * hover) + hover));
                        uv *= 1.0 - zoomLevel * hoverLevel;
                        uv += zoomLevel / 2.0 * hoverLevel;
                        uv = clamp(uv, 0.0, 1.0);

                        vec4 color = texture2D(u_texture, uv);

                        if (hoverLevel > 0.001) {
                            float hEffect = 1.0 - abs(hoverLevel - 0.5) * 2.0;
                            // Pixel displacement suave
                            uv.y += color.r * hEffect * 0.025;
                            color = texture2D(u_texture, uv);
                            // RGB Chromatic Shift
                            color.r = texture2D(u_texture, uv + vec2(hEffect * 0.009, 0.0)).r;
                            color.g = texture2D(u_texture, uv - vec2(hEffect * 0.009, 0.0)).g;
                        }

                        gl_FragColor = color;
                    }
                `,
                uniforms: {
                    u_texture: { value: texture },
                    imageAspectRatio: { value: 1.0 },
                    aspectRatio: { value: 1.0 },
                    opacity: { value: 1.0 },
                    hover: { value: 0.0 }
                }
            });

            this.mesh = new THREE.Mesh(geometry, material);
            this.scene.add(this.mesh);
        }

        update(delta, time) {}

        mouseHandler(mouse, camera) {
            if (!this.mesh) return;

            // isHovered exacto basado en el círculo achicado
            const isHovered = mouse.isHovered !== undefined ? mouse.isHovered : 0;
            const mouseX = mouse.x || 0;
            const mouseY = mouse.y || 0;

            const tween = window.gsap || window.TweenMax;
            if (tween) {
                // Tween suave del uniforme hover (zoom & RGB shift)
                tween.to(this.mesh.material.uniforms.hover, {
                    value: isHovered,
                    duration: 1.2,
                    ease: "power2.out",
                    overwrite: "auto"
                });

                // Posición sutil de paralaje (muy suave)
                tween.to(this.mesh.position, {
                    x: mouseX * 0.07,
                    y: mouseY * 0.07,
                    duration: 1.4,
                    ease: "power2.out",
                    overwrite: "auto"
                });

                // Inclinación 3D tilt sutil y suave (máximo ~3 grados)
                tween.to(this.mesh.rotation, {
                    x: -mouseY * 0.05,
                    y: mouseX * 0.05,
                    duration: 1.4,
                    ease: "power2.out",
                    overwrite: "auto"
                });
            } else {
                // Fallback de interpolación suave si GSAP no está disponible
                this.mesh.material.uniforms.hover.value += (isHovered - this.mesh.material.uniforms.hover.value) * 0.05;
                this.mesh.position.x += (mouseX * 0.07 - this.mesh.position.x) * 0.05;
                this.mesh.position.y += (mouseY * 0.07 - this.mesh.position.y) * 0.05;
                this.mesh.rotation.x += (-mouseY * 0.05 - this.mesh.rotation.x) * 0.05;
                this.mesh.rotation.y += (mouseX * 0.05 - this.mesh.rotation.y) * 0.05;
            }
        }
    }

    class ProfileSceneManager {
        constructor(canvas, container, onReady) {
            this.canvas = canvas;
            this.container = container;
            this.clock = new THREE.Clock();
            this.mouse = new THREE.Vector2();

            this.scene = new THREE.Scene();

            const width = this.container.clientWidth || 380;
            const height = this.container.clientHeight || 380;

            const DPR = Math.min(window.devicePixelRatio || 1, 2);
            this.renderer = new THREE.WebGLRenderer({
                canvas: this.canvas,
                antialias: true,
                alpha: true,
                powerPreference: "high-performance"
            });
            this.renderer.setPixelRatio(DPR);
            this.renderer.setSize(width, height, false);

            const aspectRatio = width / height;
            this.camera = new THREE.PerspectiveCamera(60, aspectRatio, 1, 100);
            this.camera.position.z = 8;

            this.sceneSubjects = [new PlaneSubject(this.scene, onReady)];
        }

        update() {
            const delta = this.clock.getDelta();
            const elapsed = this.clock.getElapsedTime();

            for (let i = 0; i < this.sceneSubjects.length; i++) {
                if (this.sceneSubjects[i].update) {
                    this.sceneSubjects[i].update(delta, elapsed);
                }
            }

            this.renderer.render(this.scene, this.camera);
        }

        resizeHandler() {
            const width = this.container.clientWidth || 380;
            const height = this.container.clientHeight || 380;

            this.camera.aspect = width / height;
            this.camera.updateProjectionMatrix();

            this.renderer.setSize(width, height, false);
        }

        mouseHandler(mousePos) {
            this.mouse.x = mousePos.x;
            this.mouse.y = mousePos.y;
            this.mouse.isHovered = mousePos.isHovered;

            for (let i = 0; i < this.sceneSubjects.length; i++) {
                if (this.sceneSubjects[i].mouseHandler) {
                    this.sceneSubjects[i].mouseHandler(this.mouse, this.camera);
                }
            }
        }
    }

    function initProfileEffect() {
        const canvas = document.getElementById('profile-shader-canvas');
        const container = document.getElementById('profile-circle-wrapper');
        const staticImg = document.getElementById('profile-static-img');
        if (!canvas || !container) return;

        if (typeof THREE === 'undefined') {
            console.warn('[ProfileEffect] Three.js no está cargado.');
            return;
        }

        const onTextureReady = () => {
            requestAnimationFrame(() => {
                canvas.classList.remove('opacity-0');
                // Ocultar la imagen estática por completo una vez que el canvas WebGL está activo
                if (staticImg) {
                    staticImg.style.opacity = '0';
                    setTimeout(() => {
                        staticImg.style.display = 'none';
                    }, 350);
                }
            });
        };

        const sceneManager = new ProfileSceneManager(canvas, container, onTextureReady);

        const resizeCanvas = () => {
            sceneManager.resizeHandler();
        };

        const mouseHandler = (e) => {
            const rect = container.getBoundingClientRect();
            const radius = rect.width / 2;
            const cx = rect.left + radius;
            const cy = rect.top + radius;

            const dx = e.clientX - cx;
            const dy = e.clientY - cy;
            const distFromCenter = Math.hypot(dx, dy);

            // Círculo de activación achicado: solo se activa si el cursor entra de verdad en la imagen (al 75% del radio)
            const isInside = distFromCenter < (radius * 0.75);

            // Coordenadas normalizadas [-1, 1] suaves para el tilt
            const x = Math.max(-1.0, Math.min(1.0, dx / (radius * 1.1)));
            const y = Math.max(-1.0, Math.min(1.0, -dy / (radius * 1.1)));

            sceneManager.mouseHandler({
                x: x,
                y: y,
                isHovered: isInside ? 1 : 0
            });
        };

        const resetMouse = () => {
            sceneManager.mouseHandler({ x: 0, y: 0, isHovered: 0 });
        };

        window.addEventListener('resize', resizeCanvas, false);
        window.addEventListener('mousemove', mouseHandler, { passive: true });
        window.addEventListener('touchmove', (e) => {
            if (e.touches && e.touches[0]) mouseHandler(e.touches[0]);
        }, { passive: true });
        document.addEventListener('mouseleave', resetMouse);

        resizeCanvas();

        const render = () => {
            window.requestAnimationFrame(render);
            sceneManager.update();
        };

        render();
    }

    // Inicializar tras DOM listo
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => setTimeout(initProfileEffect, 60));
    } else {
        setTimeout(initProfileEffect, 60);
    }
})();
</script>
