<link rel="stylesheet" href="css/navbar-style.css" />
<div class="nav">

    <div class="nav-bottom">
        <div class="nav-items">
            <div class="nav-item">
                <a href="#">Home</a>
            </div>
            <div class="nav-item">
                <a href="#">Nominees</a>
            </div>
            <div class="nav-item">
                <a href="#">Directory</a>
            </div>
            <div class="nav-item">
                <a href="#">Collections</a>
            </div>
        </div>
    </div>
</div>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script> -->
<!-- <script>
    document.addEventListener("DOMContentLoaded", () => {
        const nav = document.querySelector(".nav");
        const navItems = document.querySelector(".nav-items");
        const navHome = document.querySelector(".nav-home");
        const navTop = document.querySelector(".nav-top");
        const icon = document.querySelector(".hamburger i");

        let isOpen = false;

        gsap.set(nav, { height: "60px" });
        gsap.set(navTop, { opacity: 0, scale: 0.9, display: "none" });
        gsap.set(navItems, { opacity: 1, display: "flex" });
        gsap.set(navHome, { flexGrow: 0 });

        navHome.addEventListener("click", () => {
            if(!isOpen) {
                gsap.to(nav, {
                    height: "370px",
                    duration: 0.75,
                    ease: "power4.inOut",
                    immediateRender: false
                });

                gsap.to(navTop, {
                    opacity: 1,
                    scale: 1,
                    duration: 0.3,
                    onStart: () => {
                        gsap.set(navTop, { display: "block"});
                    },
                    delay: 0.5,
                    immediateRender: false
                });

                gsap.to(navItems,  {
                    opacity: 0,
                    duration: 0.1,
                    onComplete: () => {
                        gsap.set(navItems, { display: "none" });
                    },
                    immediateRender: false
                });

                gsap.to(navHome, {
                    flexGrow: 1,
                    duration: 0.2,
                    ease: "power4.inOut",
                    delay: 0,
                    immediateRender: false,
                    onComplete: () => {
                        icon.className = "ph-light ph-x";
                    }
                });
            }   else {
                gsap.to(nav, {
                    height: "60px",
                    duration: 0.75,
                    ease: "power4.inOut",
                    delay: 0.2,
                    immediateRender: false
                });

                gsap.to(navTop, {
                    opacity: 0,
                    scale: 0.9,
                    duration: 0.2,
                    onComplete: () => {
                        gsap.set(navTop, { display: "none" });
                    },
                    immediateRender: false;
                });

                gsap.to(navHome, {
                    flexGrow: 0,
                    duration: 0.2,
                    ease: "power4.inOut",
                    immediateRender: false,
                    onComplete: () => {
                        icon.className = "ph-light ph-list";
                    }
                });

                gsap.to(navItems, {
                    opacity: 1,
                    duration: 0.2,
                    onStart: ()=> {
                        gsap.set(navItems, { display: "flex" });
                    },
                    delay: 0.5,
                    immediateRender: false
                });
            }
            isOpen = !isOpen;
        });
    });
</script> -->