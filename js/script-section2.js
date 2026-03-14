// let lenis;


gsap.registerPlugin(ScrollTrigger);

const mm = gsap.matchMedia();
const features = document.querySelectorAll(".feature");
const featureBgs = document.querySelectorAll(".feature-bg");
let headerFinalY = -10;

function setFeaturePositions(positions) {
  features.forEach((feature, index) => {
    const featurePos = positions[index];
    gsap.set(feature, {
      top: `${featurePos.top}%`,
      left: `${featurePos.left}%`,
    });
  });
}

let featureStartPositions = [
  { top: 25, left: 15 }, //Python
  { top: 12.5, left: 50 },  //Bash
  { top: 22.5, left: 75 },  //MySQL
  { top: 30, left: 85.5 },  //PHP
  { top: 50, left: 20 },  //Javascript
  { top: 80, left: 20 },  //HTML5
  { top: 75, left: 75 },  //CSS3
  { top: 35, left: 25 },  //GIT
  { top: 65, left: 35 },  //Linux
  { top: 72, left: 10 },  //Docker
  { top: 15, left: 65 },  //jQuery
  { top: 30, left: 60 },  //Ansible
  { top: 50, left: 80 },  //Terraform
  { top: 67.5, left: 85 },  //CI/CD
  { top: 85, left: 90 },  //Kubernetes
  { top: 22.5, left: 37.5 },  //AWS
];
// 1200+
mm.add("(min-width: 1200px)", () => {
  setFeaturePositions(featureStartPositions);
});

// 1001-1200
mm.add("(min-width: 1001px)", () => {

  setFeaturePositions(featureStartPositions);
  headerFinalY = -50;

});

// 501-1000
mm.add("(max-width: 1000px) and (min-width: 501px)", () => {

  // featureStartPositions = [
  //   { top: 20, left: 20 },
  //   { top: 20, left: 50 },
  //   { top: 20, left: 80 },
  //   { top: 40, left: 20 },
  //   { top: 40, left: 50 },
  //   { top: 40, left: 80 },
  //   { top: 60, left: 20 },
  //   { top: 60, left: 50 },
  //   { top: 60, left: 80 },
  //   { top: 80, left: 20 },
  //   { top: 80, left: 50 },
  //   { top: 80, left: 80 },
  //   { top: 30, left: 40 },
  //   { top: 25, left: 25 },
  //   { top: 35, left: 45 },
  //   { top: 40, left: 55 },
  // ];

  setFeaturePositions(featureStartPositions);

});

// 500-
mm.add("(max-width: 500px)", () => {

   headerFinalY = 30;
  featureStartPositions = [
    { top: 25, left: 15 }, //Python
    { top: 12.5, left: 50 },  //Bash
    { top: 22.5, left: 75 },  //MySQL
    { top: 30, left: 85.5 },  //PHP
    { top: 50, left: 20 },  //Javascript
    { top: 80, left: 20 },  //HTML5
    { top: 75, left: 75 },  //CSS3
    { top: 35, left: 25 },  //GIT
    { top: 65, left: 35 },  //Linux
    { top: 72, left: 10 },  //Docker
    { top: 15, left: 65 },  //jQuery
    { top: 30, left: 60 },  //Ansible
    { top: 50, left: 90 },  //Terraform
    { top: 67.5, left: 85 },  //CI/CD
    { top: 77.5, left: 90 },  //Kubernetes
    { top: 22.5, left: 37.5 },  //AWS
  ];

  setFeaturePositions(featureStartPositions);

});


let featureStartDimensions = [];

function calculateFeatureDimensions() {
  featureStartDimensions = [];

  featureBgs.forEach((bg) => {
    const rect = bg.getBoundingClientRect();

    featureStartDimensions.push({
      width: rect.width,
      height: rect.height
    });
  });
}

calculateFeatureDimensions();

const remInPixels = parseFloat(
  getComputedStyle(document.documentElement).fontSize
);
const targetWidth = 3 * remInPixels;
const targetHeight = 3 * remInPixels;

const getSearchBarFinalWidth = () => {
  return window.innerWidth < 1000 ? 20 : 25;
};

let searchBarFinalWidth = getSearchBarFinalWidth();

window.addEventListener("resize", () => {
  searchBarFinalWidth = getSearchBarFinalWidth();
  calculateFeatureDimensions();
  ScrollTrigger.refresh();
});

ScrollTrigger.create({
  trigger: ".spotlight",
  start: "start",
  end: `+=${window.innerHeight * 2.5}px`,
  pin: true,
  pinSpacing: true,
  scrub: 1,
  onUpdate: (self) => {
    const progress = self.progress;

    if (progress <= 0.3333) {
      const spotlightHeaderProgress = progress / 0.3333;
      gsap.set(".spotlight-content", {
        y: `${-100 * spotlightHeaderProgress}%`,
      });
    } else {
      gsap.set(".spotlight-content", {
        y: "-100%",
      });
    }

    if (progress >= 0 && progress <= 0.5) {
      const featureProgress = progress / 0.5;

      features.forEach((feature, index) => {
        // const original = featureStartPositions[index];
        const original = featureStartPositions[index % featureStartPositions.length];
        const currentTop =
          original.top + (50 - original.top) * featureProgress;
        const currentLeft =
          original.left + (50 - original.left) * featureProgress;

        gsap.set(feature, {
          top: `${currentTop}%`,
          left: `${currentLeft}%`,
        });
      });

      featureBgs.forEach((bg, index) => {
        const featureDim = featureStartDimensions[index];
        const currentWidth =
          featureDim.width +
          (targetWidth - featureDim.width) * featureProgress;
        const currentHeight =
          featureDim.height +
          (targetHeight - featureDim.height) * featureProgress;
        const currentBorderRadius = 1.5 + (25 - 0.5) * featureProgress;
        const currentBorderWidth = 0.125 + (0.35 - 0.125) * featureProgress;

        gsap.set(bg, {
          width: `${currentWidth}px`,
          height: `${currentHeight}px`,
          borderRadius: `${currentBorderRadius}rem`,
          borderWidth: `${currentBorderWidth}rem`,
        });
      });

      if (progress >= 0 && progress <= 0.1) {
        const featureTextProgress = progress / 0.1;
        gsap.set(".feature-content", {
          opacity: 1 - featureTextProgress,
        });
      } else if (progress > 0.1) {
        gsap.set(".feature-content", {
          opacity: 0,
        });
      }
    }

    if (progress >= 0.5) {
      gsap.set(".features", {
        opacity: 0,
      });
    } else {
      gsap.set(".features", {
        opacity: 1,
      });
    }

    if (progress >= 0.5) {
      gsap.set(".search-bar", {
        opacity: 1,
      });
    } else {
      gsap.set(".search-bar", {
        opacity: 0,
      });
    }

    if (progress >= 0.5 && progress <= 0.75) {
      const searchBarProgress = (progress - 0.5) / 0.25;

      const width = 3 + (searchBarFinalWidth - 3) * searchBarProgress;
      const height = 3 + (5 - 3) * searchBarProgress;

      const translateY = -50 + (200 - -50) * searchBarProgress;

      gsap.set(".search-bar", {
        width: `${width}rem`,
        height: `${height}rem`,
        transform: `translate(-50%, ${translateY}%)`,
      });

      gsap.set(".search-bar p", {
        opacity: 0,
      });
    } else if (progress > 0.75) {
      gsap.set(".search-bar", {
        width: `${searchBarFinalWidth}rem`,
        height: "5rem",
        transform: "translate(-50%, 200%)",
      });
    }

    if (progress >= 0.75) {
      const finalHeaderProgress = (progress - 0.75) / 0.25;

      gsap.set(".search-bar p", {
        opacity: finalHeaderProgress,
      });

      const currentY = -50 + (headerFinalY + 50) * finalHeaderProgress;

      gsap.set(".header-content", {
        y: currentY,
        opacity: finalHeaderProgress,
      });
    } else {
      gsap.set(".search-bar p", {
        opacity: 0,
      });
      gsap.set(".header-content", {
        y: -50,
        opacity: 0,
      });
    }
  },
});