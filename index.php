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
        <img src="" alt="profile">
        <div class="intro-text">
            <p>Welcome to my Portfolio!</p>
            <h1>Hello, I am Andrei.</h1>
            <h2 class="role">DevOps Engineer | Full-Stack Developer</h2>
            <h4>Contact details:</h4>
            <p>Mail: andrei.florin.stanculescu@gmail.com<br>
                Phone: +40722611727<br>
                City: Bucharest<br>
                GitHub: <a href="https://github.com/AndreiStanculescu" target="_blank">github.com/AndreiStanculescu</a><br>
                LinkedIn: <a href="https://www.linkedin.com/in/stanculescu-andrei-0309ab174" target="_blank">linkedin.com/in/stanculescu-andrei</a><br>
            </p>
        </div>
    </section>

    <section class="sticky" id="sticky">
        <div class="sticky-header">
            <h1>Technical skills:</h1>
        </div>

        <div class="card-container">
            <div class="card" id="card-1">
                <div class="card-front">
                    <img src="assets/1.jpg" alt="" />
                </div>
                <div class="card-back">
                    <span>Front-end Development</span>
                    <div class="icons">
                        <img src="assets/php.png">
                        <img src="assets/js.png">
                        <img src="icons/html.svg">
                        <img src="icons/css.svg">
                    </div>
                    <p></p>
                </div>
            </div>

            <div class="card" id="card-2">
                <div class="card-front">
                    <img src="assets/2.jpg" alt="" />
                </div>
                <div class="card-back">
                    <span>DevOps</span>
                    <p></p>
                    <img src="icons/java.svg">
                    <img src="icons/spring.svg">
                    <img src="icons/node.svg">
                </div>
            </div>

            <div class="card" id="card-3">
                <div class="card-front">
                    <img src="assets/3.jpg" alt="" />
                </div>
                <div class="card-back">
                    <span>Back-end Development</span>
                    <p></p>
                    <img src="icons/docker.svg">
                    <img src="icons/kubernetes.svg">
                    <img src="icons/aws.svg">
                    <img src="icons/githubactions.svg">
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="outro" id="outro">
        <h1>Technical skills</h1>
    </section> -->

    <section class="outro" id="outro">
        <h1>Expanded work experience</h1>
    </section>

    <section class="outro" id="outro">
        <h1>Projects</h1>
    </section>

    <script src="js/index-script.js"></script>
</body>

</html>