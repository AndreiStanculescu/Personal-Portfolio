<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.25/bundled/lenis.min.js"></script>
    <link rel="stylesheet" href="css/style-index.css">
</head>

<body>
    <?php include __DIR__ . '/navbar.php'; ?>
    <section class="intro">
        <h1>Every idea begins as a single image</h1>
    </section>
    <section class="sticky">
        <div class="sticky-header">
            <h1>Three pillars with one purpose</h1>
        </div>

        <div class="card-container">
            <div class="card" id="card-1">
                <div class="card-front">
                    <img src="assets/1.jpg" alt="" />
                </div>
                <div class="card-back">
                    <span> ( 01 )</span>
                    <p> Interactive Web Experiences</p>
                </div>
            </div>

            <div class="card" id="card-2">
                <div class="card-front">
                    <img src="assets/2.jpg" alt="" />
                </div>
                <div class="card-back">
                    <span> ( 02 )</span>
                    <p>Thoughtful Design Language</p>
                </div>
            </div>

            <div class="card" id="card-3">
                <div class="card-front">
                    <img src="assets/3.jpg" alt="" />
                </div>
                <div class="card-back">
                    <span> ( 03 )</span>
                    <p>Visual Design Systems</p>
                </div>
            </div>
        </div>
    </section>
    <section class="outro">
        <h1>Every transition leave a trace</h1>
    </section>

    <script src="js/script.js"></script>
</body>

</html>