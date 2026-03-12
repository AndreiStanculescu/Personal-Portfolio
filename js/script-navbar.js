// Navbar animation
document.addEventListener("DOMContentLoaded", () => {
    const nav = document.querySelector(".nav");

    nav.style.width = "50%";

    gsap.registerPlugin(ScrollTrigger);

    gsap.to(nav, {
        width: "30%",
        duration: 0.5,
        ease: "power1.out",
        scrollTrigger: {
            trigger: "body",
            start: "top top",
            end: 500,
            scrub: true,
        }
    });
});

document.querySelectorAll('.nav a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));

        if (target) {
            lenis.scrollTo(target, {
                duration: 0.2,
                easing: (t) => 1 - Math.pow(1 - t, 4),
                lock: true
            });
        }
    });
});

// Hide navbar on certain sections
// document.addEventListener("DOMContentLoaded", () => {
//     const navbar = document.getElementById("navbar");
//     const projectSection = document.querySelector(".projects");

//     const observer = new IntersectionObserver(
//         (entries) => {
//             entries.forEach(entry => {
//                 if (entry.isIntersecting) {
//                     navbar.style.opacity = "0";
//                     navbar.style.pointerEvents = "none";
//                 } else {
//                     navbar.style.opacity = "1";
//                     navbar.style.pointerEvents = "auto";
//                 }
//             });
//         },
//         {
//             threshold: 0.5
//         }
//     );

//     observer.observe(projectSection);
// });