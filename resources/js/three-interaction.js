import * as THREE from "three";

// Set up the scene, camera, and renderer
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, 1, 0.1, 1000);
const renderer = new THREE.WebGLRenderer({ alpha: true }); // Transparent background
renderer.setSize(300, 300);
document.getElementById("3d-canvas").appendChild(renderer.domElement);

// Create the white cube or asteroid
const geometry = new THREE.BoxGeometry(); // Can replace with asteroid OBJ if desired
const material = new THREE.MeshBasicMaterial({ color: 0xffffff });
const cube = new THREE.Mesh(geometry, material);
scene.add(cube);

// Position the camera
camera.position.z = 5;

// Animation loop for the cube (normal rotation)
function animate() {
    requestAnimationFrame(animate);

    // Cube rotation
    cube.rotation.x += 0.01;
    cube.rotation.y += 0.01;

    renderer.render(scene, camera);
}

// Interaction on hover
document.getElementById("3d-canvas").addEventListener("mouseenter", () => {
    cube.rotation.x += 0.05;
    cube.rotation.y += 0.05;
    cube.scale.set(1.2, 1.2, 1.2);
});

document.getElementById("3d-canvas").addEventListener("mouseleave", () => {
    cube.scale.set(1, 1, 1);
});

animate();
