// Navbar animation
document.addEventListener("DOMContentLoaded", () => {
    const nav = document.querySelector(".nav");

    nav.style.width = "50%";

    gsap.registerPlugin(ScrollTrigger);

    gsap.to(nav, {
        width: "30%",
        duration: 0.3,
        ease: "power1.out",
        scrollTrigger: {
            trigger: "body",
            start: "top top",
            end: 100,
            scrub: true,
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.getElementById("navbar");
    const projectSection = document.querySelector(".project");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    navbar.style.opacity = "0";
                    navbar.style.pointerEvents = "none"; 
                } else {
                    navbar.style.opacity = "1";
                    navbar.style.pointerEvents = "auto";
                }
            });
        },
        {
            threshold: 0.5
        }
    );

    observer.observe(projectSection);
});