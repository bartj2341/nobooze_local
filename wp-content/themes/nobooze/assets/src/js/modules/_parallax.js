import { jarallax, jarallaxVideo } from "jarallax"; 

export class Parallax {
    constructor() {
        this.parallax = document.querySelectorAll(".jarallax");
        this.init()
    }

    init() {
        jarallax(this.parallax, {
            speed: 0.05,
        });
    }
} 