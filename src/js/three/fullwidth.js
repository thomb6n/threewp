import * as THREE from "three";
import { OrbitControls } from "three/examples/jsm/controls/OrbitControls";
import { GLTFLoader } from "three/examples/jsm/loaders/GLTFLoader";
import duckModel from "../../models/YellowDuck.glb";

const canvas = document.getElementById("three-fullwidth");

if (canvas) {
  const scene = new THREE.Scene();

  const sizes = {
    height: canvas.clientHeight,
    width: canvas.clientWidth,
  };

  const variables = {
    sceneColor: canvas.dataset.sceneColor,
    meshColor: canvas.dataset.meshColor,
    wireframe: canvas.dataset.wireframe,
    shape: canvas.dataset.shape,
  };

  let shape;

  switch (variables.shape) {
    case "donut":
      shape = new THREE.TorusGeometry(0.8, 0.4);
      break;
    case "sphere":
      shape = new THREE.SphereGeometry(1, 12, 12);
      break;
    case "box":
    default:
      shape = new THREE.BoxGeometry(1, 1, 1);
      break;
  }

  const gltfLoader = new GLTFLoader();
  gltfLoader.load(duckModel, (glb) => {
    scene.add(glb.scene);
    glb.scene.scale.set(0.1, 0.1, 0.1);
    glb.scene.position.set(0, -0.8, 0);
  });

  const mesh = new THREE.Mesh(
    shape,
    new THREE.MeshBasicMaterial({
      color: variables.meshColor,
      wireframe: variables.wireframe === "1" ? true : false,
    })
  );
  // scene.add(mesh);

  const ambientLight = new THREE.AmbientLight(0xffffff, 4);
  scene.add(ambientLight);

  const camera = new THREE.PerspectiveCamera(
    65,
    sizes.width / sizes.height,
    0.1,
    100
  );
  camera.position.z = 3.25;
  scene.add(camera);

  const controls = new OrbitControls(camera, canvas);
  controls.enableDamping = true;
  controls.enableZoom = false;
  controls.enablePan = false;

  const renderer = new THREE.WebGLRenderer({ canvas: canvas, antialias: true });
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  renderer.setClearColor(variables.sceneColor);
  renderer.outputColorSpace = THREE.SRGBColorSpace;
  renderer.setSize(sizes.width, sizes.height);

  window.addEventListener("resize", () => {
    sizes.height = canvas.clientHeight;
    sizes.width = canvas.clientWidth;

    camera.aspect = sizes.width / sizes.height;
    camera.updateProjectionMatrix();

    renderer.setSize(sizes.width, sizes.height);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  });

  const clock = new THREE.Clock();

  const updateFrame = () => {
    const elapsedTime = clock.getElapsedTime();

    mesh.rotation.x = elapsedTime * 0.15;
    mesh.rotation.y = elapsedTime * 0.25;

    renderer.render(scene, camera);
    controls.update();

    window.requestAnimationFrame(updateFrame);
  };

  updateFrame();
}
