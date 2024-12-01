<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './inc/HTMLhead.php'; ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three@0.134.0/examples/js/loaders/GLTFLoader.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three@0.134.0/examples/js/controls/OrbitControls.js"></script>

        <style>
            #model-container {
                width: 100%;
                height: 700px;
                margin: auto;
                display: flex;
                justify-content: center;
                align-items: center;
                /* padding-top: 200px; */
                cursor: grab;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div id="model-container"></div>
        </div>

        <script>
            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
            const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
            renderer.setSize(window.innerWidth, window.innerHeight);
            document.getElementById('model-container').appendChild(renderer.domElement);

            // Lights
            const ambientLight = new THREE.AmbientLight(0xffffff, 0.8);
            scene.add(ambientLight);
            const directionalLight = new THREE.DirectionalLight(0xffffff, 1);
            directionalLight.position.set(5, 10, 7.5);
            scene.add(directionalLight);

            // Load the model
            const loader = new THREE.GLTFLoader();
            loader.load(
                'img/phone/Northlight.glb',
                function (gltf) {
                    const model = gltf.scene;

                    // Center and scale the model
                    const box = new THREE.Box3().setFromObject(model);
                    const center = box.getCenter(new THREE.Vector3());
                    const size = box.getSize(new THREE.Vector3());
                    model.position.set(-center.x, -center.y, -center.z);
                    model.scale.set(0.6, 0.6, 0.6); // Scale as needed

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
            controls.rotateSpeed = 0.6;
            controls.enableZoom = false;
            controls.enablePan = false;
            controls.screenSpacePanning = false;
            controls.enableDamping = true;
            controls.dampingFactor = 0.05;

            // Render loop
            function animate() {
                requestAnimationFrame(animate);
                controls.update();
                renderer.render(scene, camera);
            }
            animate();

            // Resize handler
            window.addEventListener('resize', () => {
                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(window.innerWidth, window.innerHeight);
            });

        </script>

    </body>
</html>