class Slider {
    constructor() {
        this.counter = 0;
        this.slides = undefined;
        this.slide = undefined;
    }
    slide_left() {
        let dot = document.getElementsByClassName("dot")[this.counter];
        dot.classList.remove("active_dot")
        switch (this.counter) {
            case 0:
                this.slide.style.animation = "slide_1";
                break;
            case 1:
                this.slide.style.animation = "slide_2";
                break;
        }
        this.slide.style.animationDuration = "2s";
        this.slide.style.animationFillMode = "forwards";
        if (this.counter < 2) {
            this.counter++;
        } else {
            this.counter = 2;

        }
        dot = document.getElementsByClassName("dot")[this.counter];
        dot.classList.add("active_dot");
    }
    slide_right() {
        let dot = document.getElementsByClassName("dot")[this.counter];
        dot.classList.remove("active_dot")
        switch (this.counter) {
            case 1:
                this.slide.style.animation = "slide_1_reverse";
                break;
            case 2:
                this.slide.style.animation = "slide_2_reverse";
                break;
        }
        this.slide.style.animationDuration = "2s";
        this.slide.style.animationFillMode = "forwards";
        // this.slide.style.animationDirection = "reverse";
        if (this.counter > 0) {
            this.counter--;
        } else this.counter = 0;
        dot = document.getElementsByClassName("dot")[this.counter];
        dot.classList.add("active_dot");
    }
}

slide = new Slider();
slide.slides = document.getElementsByClassName("slide");
slide.slide = document.getElementsByClassName("container")[0];


document.addEventListener("keydown", function(e) {
    if (e.keyCode == 39) {
        slide.slide_left();
    } else if (e.keyCode == 37) {
        slide.slide_right();
    }
})