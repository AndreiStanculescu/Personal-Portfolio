gsap.registerPlugin(ScrollTrigger);

const outroTitle = document.querySelector(".outro-title");
const outroSubtitle = document.querySelector(".outro-subtitle");
const contactItems = gsap.utils.toArray(".contact-item");

gsap.set([outroTitle, outroSubtitle, contactItems], {
    y: 50,
    opacity: 0
});

gsap.timeline({
    scrollTrigger: {
        trigger: ".outro",
        start: `top+=${window.innerHeight * 2} top`,
        toggleActions: "play none none reverse",
        markers: false
    }
})
    .to(outroTitle, {
        opacity: 1,
        y: 0,
        duration: 1.2,
        ease: "expo.out"
    })
    .fromTo(outroSubtitle,
        { opacity: 0, y: 0 },
        { opacity: 1, y: 0, duration: 1.0, ease: "expo.out" },
        "-=0.6"
    )
    .to(contactItems, {
        opacity: 1,
        y: 0,
        stagger: 0.2,
        duration: 1.0,
        ease: "expo.out"
    }, "-=0.5");