<!DOCTYPE html>
<html lang="en">
    <head>
        <?php //include './inc/HTMLhead.php'; ?>
        <base href="http://192.168.0.47/inova/">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three@0.134.0/examples/js/loaders/GLTFLoader.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three@0.134.0/examples/js/controls/OrbitControls.js"></script>

        <style>
            #instruction {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: rgba(0, 0, 0, 0.5);
                color: white;
                font-size: 50px;
                padding: 5px 17.5px;
                border-radius: 5px;
                z-index: 10;
                transition: opacity 0.5s ease;
            }

            #model-container {
                width: 100%;
                height: 600px;
                margin: auto;
                display: flex;
                justify-content: center;
                align-items: center;
                cursor: grab;
            }
        </style>
    </head>
    <body>
        <div class="container overflow-hidden">
            <div id="model-container"></div>
            <!-- <div id="instruction"><i class="fa-solid fa-rotate"></i></div> -->
        </div>

        <script>
            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(75, 1, 0.1, 1000);
            const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
            
            const modelContainer = document.getElementById('model-container');
            modelContainer.appendChild(renderer.domElement);

            // Adjust renderer size and camera aspect ratio
            const resizeRenderer = () => {
                const width = modelContainer.clientWidth;
                const height = modelContainer.clientHeight;
                renderer.setSize(width, height);
                camera.aspect = width / height;
                camera.updateProjectionMatrix();
            };
            resizeRenderer();

            // Lights
            const ambientLight = new THREE.AmbientLight(0xffffff, 0.8);
            scene.add(ambientLight);
            const directionalLight = new THREE.DirectionalLight(0xffffff, 1);
            directionalLight.position.set(5, 10, 7.5);
            scene.add(directionalLight);

            // Load the model
            const loader = new THREE.GLTFLoader();
            loader.load(
                'img/phone/Northlight-model.glb',
                function (gltf) {
                    const model = gltf.scene;

                    // Center and scale the model
                    const box = new THREE.Box3().setFromObject(model);
                    const center = box.getCenter(new THREE.Vector3());
                    const size = box.getSize(new THREE.Vector3());
                    model.position.set(-center.x, -center.y, -center.z);
                    model.scale.set(0.85, 0.85, 0.85); // Scale as needed

                    // Adjust camera based on model size
                    const maxDim = Math.max(size.x, size.y, size.z);
                    const fov = camera.fov * (Math.PI / 180);
                    let cameraZ = Math.abs(maxDim / 2 / Math.tan(fov / 2));
                    cameraZ *= 1.2;
                    camera.position.set(0, 0, cameraZ);
                    camera.lookAt(0, 0, 0);

                    scene.add(model);
                },
                undefined,
                function (error) {
                    console.error('An error happened:', error);
                }
            );

            // Orbit controls
            const controls = new THREE.OrbitControls(camera, renderer.domElement);
            // controls.autoRotate = true;
            controls.enableRotate = true;
            controls.rotateSpeed = 0.4;
            controls.enableZoom = false;
            controls.enablePan = false;
            controls.screenSpacePanning = false;
            controls.enableDamping = true;
            controls.dampingFactor = 0.05;

            window.addEventListener('mouseup', () => {
                controls.dispatchEvent({ type: 'end' });
            });

            // Render loop
            function animate() {
                requestAnimationFrame(animate);
                controls.update();
                renderer.render(scene, camera);
            }
            animate();

            // Resize handler
            window.addEventListener('resize', resizeRenderer);
        </script>

        <!-- <script>
            // Select the instruction element
            const instruction = document.getElementById('instruction');
            const model_Container = document.getElementById('model-container');

            // Function to hide the instruction
            function hideInstruction() {
                instruction.style.opacity = '0'; // Fade out
                setTimeout(() => instruction.style.display = 'none', 500); // Remove from DOM after fade-out
            }

            // Listen for interaction events
            model_Container.addEventListener('mousedown', hideInstruction); // For mouse users
            model_Container.addEventListener('touchstart', hideInstruction); // For touch users

        </script> -->

    </body>
</html>