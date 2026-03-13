// Navbar animation
document.addEventListener("DOMContentLoaded", () => {
    const nav = document.querySelector(".nav");
    gsap.registerPlugin(ScrollTrigger);

    // breakpoint >1000px
    if (window.innerWidth > 1000) {
        const targetWidth = "30%"; 

        // 50% -> 30%
        gsap.to(nav, {
            width: targetWidth,
            duration: 0.5,
            ease: "power1.out",
            scrollTrigger: {
                trigger: "body",
                start: "top top",
                end: 500,
                scrub: true,
            }
        });
    }

    // breakpoint <1000px
    else if (window.innerWidth <= 1000 && window.innerWidth > 500) {
        const targetWidth = "50%";

        // 70% -> 50%
        gsap.to(nav, {
            width: targetWidth,
            duration: 0.5,
            ease: "power1.out",
            scrollTrigger: {
                trigger: "body",
                start: "top top",
                end: 500,
                scrub: true,
            }
        });
    }

    // breakpoint <500px
    else {
        const targetWidth = "70%";

        // 90% -> 70%
        gsap.to(nav, {
            width: targetWidth,
            duration: 0.5,
            ease: "power1.out",
            scrollTrigger: {
                trigger: "body",
                start: "top top",
                end: 500,
                scrub: true,
            }
        });
    }
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