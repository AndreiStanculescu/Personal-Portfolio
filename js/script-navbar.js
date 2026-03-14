// Navbar animation
document.addEventListener("DOMContentLoaded", () => {
    const nav = document.querySelector(".nav");
    gsap.registerPlugin(ScrollTrigger);

    let startWidth;
    let targetWidth;

    // 1500+
    if (window.innerWidth > 1500) {
        startWidth = "50%";
        targetWidth = "30%";
    }

    // 1200-1500
    if (window.innerWidth > 1200) {
        startWidth = "60%";
        targetWidth = "45%";
    }

    // 1000-1200
    else if (window.innerWidth > 1000) {
        startWidth = "70%";
        targetWidth = "50%";
    }

    // 500-1000
    else if (window.innerWidth > 500) {
        startWidth = "80%";
        targetWidth = "60%";
    }

    // 500-
    else {
        startWidth = "100%";
        targetWidth = "80%";
    }

    gsap.set(nav, { width: startWidth });

    gsap.to(nav, {
        width: targetWidth,
        ease: "none",
        scrollTrigger: {
            trigger: "body",
            start: "top top",
            end: 500,
            scrub: true
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