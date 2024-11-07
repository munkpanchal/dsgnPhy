import gsap from "gsap";
import { ScrollTrigger, TextPlugin } from "gsap/all";
import { default as SplitType } from "split-type";

const myText = new SplitType("#hero-heading");
gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(TextPlugin);
