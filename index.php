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
        <img src="assets/profil.jpg" alt="profile">
        <div class="intro-text">
            <p>Welcome to my Portfolio!</p>
            <h1>Hello, I am Andrei.</h1>
            <h2 class="role">DevOps Engineer | Full-Stack Developer</h2>
            <h4>Contact details:</h4>
            <ul class="contact">
                <li>Mail: andrei.florin.stanculescu@gmail.com</li>
                <li>Phone: +40722611727</li>
                <li>City: Bucharest</li>
                <li>GitHub: <a href="https://github.com/AndreiStanculescu" target="_blank">github.com/AndreiStanculescu</a></li>
                <li>LinkedIn: <a href="https://www.linkedin.com/in/stanculescu-andrei-0309ab174" target="_blank">linkedin.com/in/stanculescu-andrei</a></li>
            </ul>
        </div>
    </section>

    <section class="sticky" id="sticky">
        <div class="sticky-header">
            <h1>Technical skills:</h1>
        </div>

        <div class="card-container">
            <div class="card" id="card-1">
                <div class="card-front">
                    <img src="assets/1.png" alt="" />
                </div>
                <div class="card-back">
                    <h1>Front-end Development</h1>
                    <div class="icons">

                        <div class="icon">
                            <img src="assets/js.png">
                            <p>Javascript</p>
                        </div>

                        <div class="icon">
                            <img src="assets/jquery.png">
                            <p>jQuery</p>
                        </div>

                        <div class="icon">
                            <img src="assets/html.png">
                            <p>HTML5</p>
                        </div>

                        <div class="icon">
                            <img src="assets/css.png">
                            <p>CSS3</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card" id="card-2">
                <div class="card-front">
                    <img src="assets/2.png" alt="" />
                </div>
                <div class="card-back">
                    <h1>DevOps</h1>

                    <div class="icons">
                        <div class="icon">
                            <img src="assets/aws.png">
                            <p>AWS</p>
                        </div>

                        <div class="icon">
                            <img src="assets/docker.png">
                            <p>Docker</p>
                        </div>

                        <div class="icon">
                            <img src="assets/k8.png">
                            <p>Kubernetes</p>
                        </div>

                        <div class="icon">
                            <img src="assets/ansible.png">
                            <p>Ansible</p>
                        </div>

                        <div class="icon">
                            <img src="assets/terraform.jpg">
                            <p>Terraform</p>
                        </div>

                        <div class="icon">
                            <img src="assets/cicd.png">
                            <p>CI/CD</p>
                        </div>

                        <div class="icon">
                            <img src="assets/git.png">
                            <p>Git</p>
                        </div>

                        <div class="icon">
                            <img src="assets/linux.png">
                            <p>Linux</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card" id="card-3">
                <div class="card-front">
                    <img src="assets/3.png" alt="" />
                </div>
                <div class="card-back">
                    <h1>Back-end Development</h1>
                    <div class="icons">
                        <div class="icon">
                            <img src="assets/php.png">
                            <p>PHP</p>
                        </div>

                        <div class="icon">
                            <img src="assets/laravel.png">
                            <p>Laravel</p>
                        </div>

                        <div class="icon">
                            <img src="assets/python.png">
                            <p>Python</p>
                        </div>

                        <div class="icon">
                            <img src="assets/bash.png">
                            <p>Bash</p>
                        </div>

                        <div class="icon">
                            <img src="assets/mysql.png">
                            <p>MySQL</p>
                        </div>

                        <div class="icon">
                            <img src="assets/postgresql.png">
                            <p>Postgresql</p>
                        </div>

                        <div class="icon">
                            <img src="assets/couchbase.png">
                            <p>Couchbase</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- <section class="outro" id="outro">
        <h1>Technical skills</h1>
    </section> -->

    <section class="experience" id="experience">
        <h1>Expanded work experience</h1>
    </section>

    <section class="projects" id="projects">
        <h1>Projects</h1>
    </section>

    <script src="js/index-script.js"></script>
</body>

</html>