import { jarallax, jarallaxVideo } from "jarallax"; 

export class Parallax {
    constructor() {
        this.parallaxUp = document.querySelectorAll(".jarallax-up");
        this.parallaxDown = document.querySelectorAll(".jarallax-down");
        this.init()
    }

    init() {
        jarallax(this.parallaxUp, {
            speed: -0.2,
          });

        jarallax(this.parallaxDown, {
            speed: 0.2,
        })
    }
} 