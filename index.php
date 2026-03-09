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
    <section class="intro" id="intro">
        <h1>Intro - about myself, picture, titles, work </h1>
    </section>
    <section class="sticky" id="sticky">
        <div class="sticky-header">
            <h1>My work experience</h1>
        </div>

        <div class="card-container">
            <div class="card" id="card-1">
                <div class="card-front">
                    <img src="assets/1.jpg" alt="" />
                </div>
                <div class="card-back">
                    <span> ( 01 )</span>
                    <p>Front-end Development</p>
                </div>
            </div>

            <div class="card" id="card-2">
                <div class="card-front">
                    <img src="assets/2.jpg" alt="" />
                </div>
                <div class="card-back">
                    <span> ( 02 )</span>
                    <p>DevOps</p>
                </div>
            </div>

            <div class="card" id="card-3">
                <div class="card-front">
                    <img src="assets/3.jpg" alt="" />
                </div>
                <div class="card-back">
                    <span> ( 03 )</span>
                    <p>Back-end Development</p>
                </div>
            </div>
        </div>
    </section>
    <section class="outro" id="outro">
        <h1>Technical skills</h1>
    </section>
    <section class="outro" id="outro">
        <h1>Expanded work experience</h1>
    </section>
    <section class="outro" id="outro">
        <h1>Projects</h1>
    </section>

    <script src="js/index-script.js"></script>
</body>

</html>