import simpleParallax from 'simple-parallax-js';

export class Parallax {
    constructor() {
        this.image = document.querySelectorAll('.parallax-banner');
        this.init()
    }

    init() {
        new simpleParallax(this.image, {
            delay: 0,
            orientation: 'up',
            scale: 1.3,
        });
    }
}
