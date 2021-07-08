export default class Slider{
    constructor(prev, next,slider){
        this.prev = prev;
        this.next = next;
        this.slider = slider;
        this.slidesStage  = this.slider.querySelector('.slider_slides');
        this.slidesWrapper = this.slider.querySelector('.slider-wrapper');
        this.slide = this.slidesStage.querySelector('.slide');;
        this.pos = 0;
        this.slideWidth = this.getSlideWidth();
        this.avaliableStage = Math.ceil(parseFloat(window.getComputedStyle(this.slidesStage).width)) -  Math.ceil(parseFloat(window.getComputedStyle(this.slidesWrapper).width));
    }

    slideNext(){
        console.log(this.avaliableStage + this.pos + ':' + this.slideWidth);
        if(this.avaliableStage + this.pos <= 0) return;
         this.prev.removeAttribute('disabled');
        this.pos = this.pos - this.slideWidth;
        this.slidesStage.style.transform = `translateX(${this.pos}px)`;
        if(this.avaliableStage + this.pos <= 0) this.next.disabled = true;
    }

     slidePrev(){
        if(this.pos == 0) return;
        this.next.removeAttribute('disabled');
        this.pos = this.pos + this.slideWidth;
        this.slidesStage.style.transform = `translateX(${this.pos}px)`;
        if(this.pos == 0) this.prev.disabled = true;
    }

    getSlideWidth(){
        const slideMargin = window.getComputedStyle(this.slide).marginRight.split('');
        slideMargin.splice(slideMargin.length - 2, 2);
        const slidermarginNum = +slideMargin.join('');
        //alert(window.getComputedStyle(this.slide).width);
        return this.slide.offsetWidth + slidermarginNum;
    }
};







