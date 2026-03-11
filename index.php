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

    <section class="experience" id="experience">
        <h1>Work experience</h1>
        <div class="text">
            <p class="role">DevOps Engineer - Info World</p>
            <p class="description">• Designed and operated AWS cloud infrastructure for production healthcare applications using EC2, VPC, RDS, S3, MSK and IAM, ensuring high availability, scalability and security.<br>
                • Automated infrastructure provisioning with Terraform (IaC), standardizing environments and significantly reducing deployment time and configuration drift.<br>
                • Implemented configuration management with Ansible, eliminating manual server setup and improving release reliability.<br>
                • Built Python and Bash automation scripts for operational tasks, monitoring and maintenance, reducing repetitive manual work.<br>
                • Implemented monitoring, alerting and observability with Datadog, proactively detecting incidents and improving system uptime.<br>
                • Deployed and administered Kafka, PostgreSQL and Couchbase clusters supporting data-intensive, high-traffic applications.<br>
                • Managed containerized workloads using Docker and Kubernetes, improving scalability and simplifying deployments.<br>
                • Designed and maintained CI/CD pipelines (GitHub/Bitbucket), enabling faster and safer releases.<br>
                • Partnered with international stakeholders (Romania & US) to deliver reliable infrastructure solutions and production support.<br>
            </p>
        </div>
    </section>

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

    <script src="js/index-script.js"></script>
    <!-- NAVBAR -->
    <script src="/js/navbar-script.js"></script>
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
 

</body>

</html>