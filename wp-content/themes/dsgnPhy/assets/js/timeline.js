import gsap from "gsap";
import { ScrollTrigger } from "gsap/all";

gsap.registerPlugin(ScrollTrigger);
// const tl = gsap.timeline({
//     scrollTrigger: {
//         trigger: ".home-hero-wrapper",
//         start: "top center",
//         end: "bottom center",
//         scrub: true,
//     },
// });

// let panels = gsap.utils.toArray(".panel");
// panels.forEach((panel, i) => {
//     ScrollTrigger.create({
//         trigger: panel,
//         start: () => "top top",
//         pin: true,
//         scrub: 1,
//         pinSpacing: false,
//     });
// });
