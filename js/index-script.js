
// Section snap 
// document.addEventListener("DOMContentLoaded", () => {
//     const sections = document.querySelectorAll("section");

//     sections.forEach((section) => {
//         ScrollTrigger.create({
//             trigger: section,
//             start: "top center",
//             end: "bottom center",
//             onUpdate: (self) => {
//                 if (self.progress > 0.1 && !self.snapTriggered) {
//                     lenis.scrollTo(section, { duration: 0.6, offset: 0 });
//                     self.snapTriggered = true;
//                 }
//                 if (self.progress < 0.9 && !self.snapTriggeredBack) {
//                     lenis.scrollTo(section, { duration: 0.6, offset: 0 });
//                     self.snapTriggeredBack = true;
//                 }

//                 if (self.progress === 0) self.snapTriggeredBack = false;
//                 if (self.progress === 1) self.snapTriggered = false;
//             }
//         });
//     });
// });