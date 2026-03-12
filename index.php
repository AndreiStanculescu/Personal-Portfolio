<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.25/bundled/lenis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollToPlugin.min.js"></script>

    <link rel="stylesheet" href="css/style-index.css">
    <link rel="stylesheet" href="css/style-laptop.css">
</head>

<body>
    <?php include __DIR__ . '/navbar.php'; ?>

    <?php include __DIR__ . '/section1.html'; ?>

    <?php include __DIR__ . '/section2.html'; ?>

    <?php include __DIR__ . '/section3.html'; ?>

    <?php  include __DIR__ . '/section4.html'; ?>

    <script src="js/index-script.js"></script>
    <script>
        let lenis = new Lenis();
        lenis.on("scroll", ScrollTrigger.update);
        gsap.ticker.add((time) => {
            lenis.raf(time * 1000);
        });
        gsap.ticker.lagSmoothing(0);
    </script>
</body>

</html>



<!-- LAPTOP -->
<!-- <section class="project">
        <ul class="projects-list">
            <li data-img="assets/screen1.jpg">1</li>
            <li data-img="assets/screen2.jpg">2</li>
            <li data-img="assets/screen3.jpg">3</li>
            <li data-img="assets/screen4.jpg">4</li>
            <li data-img="assets/screen5.jpg">5</li>
        </ul>

        <div class="zoom-controls">
            <button id="zoom-in">+</button>
            <button id="zoom-out">-</button>
        </div>
    </section> -->

<!-- LAPTOP -->
<!-- <script type="importmap">
        {
  "imports": {
    "three": "https://unpkg.com/three@0.160.0/build/three.module.js",
    "three/addons/": "https://unpkg.com/three@0.160.0/examples/jsm/",
    "gsap": "https://unpkg.com/gsap@3.12.5/index.js"
    }
    }
    </script>
    <script type="module" src="./js/laptop-script.js"></script> -->