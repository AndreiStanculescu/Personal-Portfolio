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
</head>

<body>
    <?php include __DIR__ . '/navbar.php'; ?>

    <?php include __DIR__ . '/section1.html'; ?>

    <?php include __DIR__ . '/section2.html'; ?>

    <?php include __DIR__ . '/section3.html'; ?>

    <?php include __DIR__ . '/section4.html'; ?>

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

