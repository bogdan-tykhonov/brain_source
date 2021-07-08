import $ from 'jquery';
import 'slick-carousel';
import dropDown from '../js/components/dropdown.js';
import Slider from './slider.js';
import submitMainForm from './ajax_form'; 

function initNewsSlider(){
  const slider = document.querySelector('.news-slider');
  if(!slider) return;
  const prev = document.querySelector('.news-slider-prev button');
  const next = document.querySelector('.news-slider-next button');
  const newsSlider = new Slider(prev, next , slider);
  prev.addEventListener('click', () => newsSlider.slidePrev());
  next.addEventListener('click', () => newsSlider.slideNext());
}

function initVacancySlider(){
  const slider = document.querySelector('.vacancy-slider');
  if(!slider) return;
  const prev = document.querySelector('.vacancy-slider-prev button');
  const next = document.querySelector('.vacancy-slider-next button');
  const newsSlider = new Slider(prev, next , slider);
  prev.addEventListener('click', () => newsSlider.slidePrev());
  next.addEventListener('click', () => newsSlider.slideNext());
}

  
  // window.addEventListener('load', () => {
    window.dropDown = dropDown;

    initNewsSlider();
    initVacancySlider();

    if(document.querySelector('.main-slider')){
      $(".main-slider").slick({
        slidesToShow: 1,
        infinite: true,
        arrows:false,
        dots:true
      });
    };
    document.querySelector('.main-form').addEventListener('submit', (event)=> submitMainForm(event));

    function validationInputs(){
      const inputs = document.querySelectorAll('.main-form .obligatory input');
      const message = document.querySelector('.main-form .obligatory textarea');
      message.addEventListener('input', event => {
        if(event.target.value != ''){
          event.target.closest('.obligatory').classList.remove('error');
          event.target.closest('.obligatory').classList.add('checked');
        }
      });
      for(let input of inputs){
        input.addEventListener('input', (event) => {
          if(event.target.value != ''){
            event.target.closest('.obligatory').classList.remove('error');
            event.target.closest('.obligatory').classList.add('checked');
          }
        });
      }
    };
    validationInputs();

    document.querySelector('.header-mob-toggle').addEventListener('click', ()=>{
      document.querySelector('.mob-menu').classList.add('opened');
    });
    
    document.querySelector('.mob-close').addEventListener('click', () => {
      document.querySelector('.mob-menu').classList.remove('opened');
    });

  // });







