<?php $__env->startSection('content'); ?>

<?php echo $__env->make('../navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>
 
    .py-6 {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .px-4 {
        padding-left: 1rem;
        padding-right: 1rem;
    }

    .items-end {
        align-items: flex-end;
    }

    .flex {
        display: flex;
    }

    .z-50 {
        z-index: 50;
    }

    .inset-0,
    .inset-x-0 {
        right: 0;
        left: 0;
    }

    .inset-0 {
        top: 0;
        bottom: 0;
    }

    .fixed {
        position: fixed;
    }

    .pointer-events-none {
        pointer-events: none;
    }


   .bg-nvd {
       background: #470000;
   }
  


    .font-bold {
        font-weight: 700;
    }

    .outline-none {
        outline: 2px solid transparent;
        outline-offset: 2px;
    }

    .text-primary-500 {
        --tw-text-opacity: 1;
        color: rgb(249 115 22/var(--tw-text-opacity));
    }

    .font-medium {
        font-weight: 500;
    }

    .text-sm {
        font-size: .875rem;
        line-height: 1.25rem;
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .px-3 {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
    }

    .to-murky-800 {
        --tw-gradient-to: #34373b;
    }

    .from-murky-700 {
    --tw-gradient-from: #b10202;
    --tw-gradient-to: rgba(61, 67, 72, 0);
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}

    .bg-gradient-to-t {
        background-image: linear-gradient(to top, var(--tw-gradient-stops));
    }

    .border-primary-500 {
        --tw-border-opacity: 1;
        border-color: #e10603;
    }

    .border-b-2 {
        border-bottom-width: 2px;
    }

    .truncate,
    .whitespace-nowrap {
        white-space: nowrap;
    }

    .flex {
        display: flex;
    }

    [type=button],
    [type=reset],
    [type=submit],
    button {
        -webkit-appearance: button;
        background-color: transparent;
        background-image: none;
    }

    [role=button],
    button {
        cursor: pointer;
    }

    button,
    select {
        text-transform: none;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        font-family: inherit;
        font-size: 100%;
        font-weight: inherit;
        line-height: inherit;
        color: inherit;
        margin: 0;
        padding: 0;
    }

    .overflow-auto {
        overflow: auto;
    }

    .flex {
        display: flex;
    }

    .-mb-px {
        margin-bottom: -1px;
    }

    .hide-scrollbar {
        display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1.5rem;
    padding-left: 0;
    margin-block: 0;
    /* overflow-x: auto; */
    list-style: none;
    text-align: center;
    white-space: nowrap;
    overflow: auto;
}

    .bg-gradient-to-t {
        background-image: linear-gradient(to top, var(--tw-gradient-stops));
    }

    .bg-gradient-to-t:hover {
        background-image: linear-gradient(to top, var(--tw-gradient-stops));
    }

    .from-murky-700:hover {
        --tw-gradient-from: #3d4348;
        --tw-gradient-to: rgb(0 70 128 / 0%);
        --tw-gradient-stops: #60707d, rgb(205 205 205 / 0%);
    }

    .text-yellow-400 {
        --tw-text-opacity: 1;
        color: white;
    }

    .animate-flicker {
        -webkit-animation: flicker 5s linear infinite;
        animation: flicker 5s linear infinite;
    }

    .w-8 {
        width: 2rem;
    }

    .h-8 {
        height: 2rem;
    }

    audio,
    canvas,
    embed,
    iframe,
    img,
    object,
    svg,
    video {
        display: block;
        vertical-align: middle;
    }

    @-webkit-keyframes flicker {

        0%,
        19.999%,
        22%,
        62.999%,
        64%,
        64.999%,
        70%,
        to {
            opacity: .99;
            filter: drop-shadow(0 0 1px rgba(252, 211, 77)) drop-shadow(0 0 15px rgba(245, 158, 11)) drop-shadow(0 0 1px rgba(252, 211, 77))
        }

        20%,
        21.999%,
        63%,
        63.999%,
        65%,
        69.999% {
            opacity: .4;
            filter: none
        }
    }

    @keyframes  flicker {

        0%,
        19.999%,
        22%,
        62.999%,
        64%,
        64.999%,
        70%,
        to {
            opacity: .99;
            filter: drop-shadow(0 0 1px rgba(252, 211, 77)) drop-shadow(0 0 15px rgba(245, 158, 11)) drop-shadow(0 0 1px rgba(252, 211, 77))
        }

        20%,
        21.999%,
        63%,
        63.999%,
        65%,
        69.999% {
            opacity: .4;
            filter: none
        }
    }

    .border-primary-500.active,
    .border-primary-500.show>.border-primary-500 .bg-gradient-to-t {
        border-color: #fff;

    }

    .border-primary-500 {
        --tw-border-opacity: 1;
        border-color: #605959;
    }

    .border-primary-500:hover {
        --tw-border-opacity: 1;
        border-color: #ffffff;
    }

    .border-gray-500 {
        --tw-border-opacity: 1;
        border-color: rgb(107 104 128/var(--tw-border-opacity));
    }

    .-mb-px {
        margin-bottom: -9px;
    }
    


.pt-2 {
    padding-top: 0.5rem;
}
.box-content {
    box-sizing: content-box;
}
.flow-root {
    display: flow-root;
}
.mt-4 {
    margin-top: 1rem;
}

/*index*/

.hover\:border-primary-500:hover {
    --tw-border-opacity: 1;
    border-color: white:
}

.hover\:\!bg-murky-600:hover {
    --tw-bg-opacity: 1!important;
    background-color: rgb(74 81 87/var(--tw-bg-opacity))!important
}

.hover\:\!bg-murky-800:hover {
    --tw-bg-opacity: 1!important;
    background-color: rgb(52 55 59/var(--tw-bg-opacity))!important
}

.hover\:bg-murky-50:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(246 246 247/var(--tw-bg-opacity))
}

.hover\:bg-murky-500:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(94 102 110/var(--tw-bg-opacity))
}

.hover\:bg-murky-600:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(74 81 87/var(--tw-bg-opacity))
}

.hover\:bg-murky-700:hover {
    --tw-bg-opacity: 1;
    background-color: #8a1111 !important;
}

.hover\:bg-murky-800:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(52 55 59/var(--tw-bg-opacity))
}

.hover\:bg-orange-400:hover,.hover\:bg-primary-400:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(251 146 60/var(--tw-bg-opacity))
}

.hover\:bg-primary-600:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(234 88 12/var(--tw-bg-opacity))
}

.hover\:from-murky-700:hover {
    --tw-gradient-from: #3d4348;
    --tw-gradient-to: rgba(61,67,72,0);
    --tw-gradient-stops: var(--tw-gradient-from),var(--tw-gradient-to)
}

.hover\:text-murky-500:hover {
    --tw-text-opacity: 1;
    color: rgb(94 102 110/var(--tw-text-opacity))
}

.hover\:text-murky-800:hover {
    --tw-text-opacity: 1;
    color: rgb(52 55 59/var(--tw-text-opacity))
}

.hover\:text-primary-200:hover {
    --tw-text-opacity: 1;
    color: rgb(254 215 170/var(--tw-text-opacity))
}

.hover\:text-primary-300:hover {
    --tw-text-opacity: 1;
    color: rgb(253 186 116/var(--tw-text-opacity))
}

.hover\:text-primary-400:hover {
    --tw-text-opacity: 1;
    color: rgb(251 146 60/var(--tw-text-opacity))
}

.hover\:shadow-2xl:hover {
    --tw-shadow: 0 25px 50px -12px rgba(0,0,0,.25);
    --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)
}

.hover\:ring-2:hover {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)
}

.hover\:ring-primary-500:hover {
    --tw-ring-opacity: 1;
    --tw-ring-color: #bf00ff ;
}

.hover\:ring-offset-2:hover {
    --tw-ring-offset-width: 2px
}

.hover\:ring-offset-murky-800:hover {
    --tw-ring-offset-color: white 
}

.filter {
    filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
}

.backdrop-blur {
    --tw-backdrop-blur: blur(8px)
}

.backdrop-blur,.backdrop-blur-sm {
    -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
    backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia)
}

.backdrop-blur-sm {
    --tw-backdrop-blur: blur(4px)
}

.backdrop-filter {
    -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
    backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia)
}

.transition {
    transition-property: color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;
    transition-property: color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;
    transition-property: color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;
    transition-timing-function: cubic-bezier(.4,0,.2,1);
    transition-duration: .15s
}

.transition-\[max-height\] {
    transition-property: max-height;
    transition-timing-function: cubic-bezier(.4,0,.2,1);
    transition-duration: .15s
}

.transition-all {
    transition-property: all;
    transition-timing-function: cubic-bezier(.4,0,.2,1);
    transition-duration: .15s
}

.transition-colors {
    transition-property: color,background-color,border-color,outline-color,text-decoration-color,fill,stroke;
    transition-timing-function: cubic-bezier(.4,0,.2,1);
    transition-duration: .15s
}

.transition-opacity {
    transition-property: opacity;
    transition-timing-function: cubic-bezier(.4,0,.2,1);
    transition-duration: .15s
}

.delay-150 {
    transition-delay: .15s
}

.duration-100 {
    transition-duration: .1s
}

.duration-150 {
    transition-duration: .15s
}

.duration-200 {
    transition-duration: .2s
}

.duration-300 {
    transition-duration: .3s
}

.duration-700 {
    transition-duration: .7s
}

.duration-75 {
    transition-duration: 75ms
}

.ease-in {
    transition-timing-function: cubic-bezier(.4,0,1,1)
}

.ease-in-out {
    transition-timing-function: cubic-bezier(.4,0,.2,1)
}

.ease-linear {
    transition-timing-function: linear
}

.ease-out {
    transition-timing-function: cubic-bezier(0,0,.2,1)
}

.ease-in-out {
    transition-timing-function: cubic-bezier(.4,0,.2,1);
}
.duration-300 {
    transition-duration: .3s;
}
.bg-murky-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(61 67 72/var(--tw-bg-opacity));
}
.rounded-2xl {
    border-radius: 1rem;
}
.overflow-hidden {
    overflow: hidden;
}
.scale-95, .transform {
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.relative {
    position: relative;
}

  .swiper-testimonial {
        padding: 1.5em;
    }

    .swiper-testimonial .content-wrapper {
        position: relative;
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 1fr;
        grid-template-areas: ".";
        width: 100%;
        justify-items: center;
        align-items: center;
    }

    .swiper-testimonial .content-wrapper .content {
        padding: 3em 1.5em;
        text-align: center;
        display: grid;
        justify-items: center;
        align-items: center;
        margin: 0 auto;
        color: #000;
    }

    .swiper-testimonial .content-wrapper .content :first-child {
        margin: 0;
    }

    .swiper-testimonial .content-wrapper .content .swiper-avatar {
        width: 100%;
        max-width: 125px;
        height: auto;
    }

    .swiper-testimonial .content-wrapper .content .swiper-avatar img {
        border-radius: 500px;
    }

    .swiper-testimonial .content-wrapper .content .cite {
        font-size: 14px;
        font-weight: bold;
    }

    .swiper-testimonial .swiper-slide {
        margin: 0;
        height: auto;
        width: 100%;
        padding: 0;
        opacity: 0.2;
        /* background: rgba(255, 255, 255, 0.3); */
        border-radius: 6px;
        transition: all 0.5s ease-in-out;
    }

    .swiper-testimonial .swiper-slide.swiper-slide-active {
        /* background: white; */
        opacity: 1;
        transform: scale(1.1);
    }

    .swiper-testimonial .swiper-nav-wrapper {
        bottom: 0;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        width: auto;
        padding-top: 3em;
    }

    .swiper-testimonial .swiper-nav-wrapper .swiper-button-next,
    .swiper-testimonial .swiper-nav-wrapper .swiper-button-prev {
        top: 0;
        top: auto;
        left: auto;
        right: auto;
        position: relative !important;
    }

    .swiper-testimonial .swiper-nav-wrapper .swiper-button-next:after,
    .swiper-testimonial .swiper-nav-wrapper .swiper-button-prev:after {
        display: none;
    }

    .swiper-testimonial .swiper-nav-wrapper .swiper-button-next,
    .swiper-testimonial .swiper-nav-wrapper .swiper-container-rtl .swiper-button-prev {
        background-image: url("data:image/svg+xml,%0A%3Csvg width='9px' height='16px' viewBox='0 0 9 16' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cg id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='chevron-right' fill='%23FFFFFF' fill-rule='nonzero'%3E%3Cpath d='M8.674805,7.066406 L1.924805,0.316406 C1.696288,0.105468 1.432619,0 1.133789,0 C0.834959,0 0.57129,0.105468 0.342773,0.316406 C0.114257,0.544923 0,0.808592 0,1.107422 C0,1.406251 0.114257,1.669921 0.342773,1.898438 L6.301758,7.857422 L0.342773,13.816406 C0.114257,14.044923 0,14.308592 0,14.607422 C0,14.906251 0.114257,15.169921 0.342773,15.398438 C0.465821,15.521485 0.584472,15.609375 0.69873,15.662109 C0.812989,15.714844 0.958007,15.741211 1.133789,15.741211 C1.309571,15.741211 1.454589,15.714844 1.568848,15.662109 C1.683106,15.609375 1.801757,15.521485 1.924805,15.398438 L8.674805,8.648438 C8.903321,8.419921 9.017578,8.156251 9.017578,7.857422 C9.017578,7.558592 8.903321,7.294923 8.674805,7.066406 Z' id='Path'%3E%3C/path%3E%3C/g%3E%3C/g%3E%3C/svg%3E") !important;
        width: 20px;
        height: 20px;
        background-size: 20px 20px;
        background-repeat: no-repeat;
        margin: 0;
        padding: 0;
    }

    .swiper-testimonial .swiper-nav-wrapper .swiper-button-prev,
    .swiper-testimonial .swiper-nav-wrapper .swiper-container-rtl .swiper-button-next {
        background-image: url("data:image/svg+xml,%0A%3Csvg width='9px' height='16px' viewBox='0 0 9 16' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cg id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='chevron-right' transform='translate(4.508789, 7.870605) rotate(-180.000000) translate(-4.508789, -7.870605) translate(-0.000000, -0.000000)' fill='%23FFFFFF' fill-rule='nonzero'%3E%3Cpath d='M8.674805,7.066406 L1.924805,0.316406 C1.696288,0.105468 1.432619,0 1.133789,0 C0.834959,0 0.57129,0.105468 0.342773,0.316406 C0.114257,0.544923 0,0.808592 0,1.107422 C0,1.406251 0.114257,1.669921 0.342773,1.898438 L6.301758,7.857422 L0.342773,13.816406 C0.114257,14.044923 0,14.308592 0,14.607422 C0,14.906251 0.114257,15.169921 0.342773,15.398438 C0.465821,15.521485 0.584472,15.609375 0.69873,15.662109 C0.812989,15.714844 0.958007,15.741211 1.133789,15.741211 C1.309571,15.741211 1.454589,15.714844 1.568848,15.662109 C1.683106,15.609375 1.801757,15.521485 1.924805,15.398438 L8.674805,8.648438 C8.903321,8.419921 9.017578,8.156251 9.017578,7.857422 C9.017578,7.558592 8.903321,7.294923 8.674805,7.066406 Z' id='Path'%3E%3C/path%3E%3C/g%3E%3C/g%3E%3C/svg%3E") !important;
        width: 20px;
        height: 20px;
        background-size: 20px 20px;
        background-repeat: no-repeat;
        margin: 0;
        padding: 0;
    }

    .swiper-pagination {
        margin: 0;
        padding: 0;
        width: auto;
        position: relative !important;
        display: block;
        width: auto;
    }

    .swiper-pagination .swiper-pagination-bullets {
        margin: 0;
    }

    .swiper-pagination .swiper-pagination-bullets .swiper-pagination-bullet {
        margin: 0;
        background: #fff !important;
    }

 
   
    .ulasan {
        font-size: 10px;
        color: #fff;
    }
    .naprod {
        font-size: 10px;
        color: #fff;
    }
    .nanominal {
        font-size: 13px;
        color: #fff;
        font-weight: 100;
    }
    .ulasan-email {
        font-size: 6px;
        color: #6c757d;
    }
    .ulasan-email::before {
        content: "\2014 \00A0";
    }
    
     .creativeux-shadow {
        box-shadow: 0 4px 80px hsla(0, 0%, 77%, .13), 0 1.6711px 33.4221px hsla(0, 0%, 77%, .09), 0 0.893452px 17.869px hsla(0, 0%, 77%, .08), 0 0.500862px 10.0172px hsla(0, 0%, 77%, .07), 0 0.266004px 5.32008px hsla(0, 0%, 77%, .05), 0 0.11069px 2.21381px hsla(0, 0%, 77%, .04);
    }


.flip-card {
  position: relative;
  display: inline-flex;
  flex-direction: column;
  border-radius: 0.15em 0.15em 0 0;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 17px;
}

.top,
.bottom,
.flip-card .top-flip,
.flip-card .bottom-flip {
  height: .75em;
  line-height: 1;
  padding: .25em;
  overflow: hidden;
}

.top,
.flip-card .top-flip {
  background-color: #c21010!important;
  border-top-right-radius: .1em;
  border-top-left-radius: .1em;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  color: #ccc;
  border-radius: 0.25em 0.25em 0 0;
}

.bottom,
.flip-card .bottom-flip {
  background-color: #e64848!important;
  display: flex;
  align-items: flex-end;
  border-bottom-right-radius: .1em;
  border-bottom-left-radius: .1em;
  color: #fff;
  border-radius: 0 0 0.25em 0.25em;
}

.flip-card .top-flip {
  position: absolute;
  width: 100%;
  animation: flip-top 250ms ease-in;
  transform-origin: bottom;
  background-color: #e64848!important;
}

@keyframes  flip-top {
  100% {
    transform: rotateX(90deg);
  }
}

.flip-card .bottom-flip {
  position: absolute;
  bottom: 0;
  width: 100%;
  animation: flip-bottom 250ms ease-out 250ms;
  transform-origin: top;
  transform: rotateX(90deg);
}

@keyframes  flip-bottom {
  100% {
    transform: rotateX(0deg);
  }
}

.containerr {
  gap: .4em;
  justify-content: center;
  position:absolute;
  display:flex;
}

.container-segment {
  display: flex;
  flex-direction: column;
  gap: .1em;
  align-items: center;
}

.segment {
  display: flex;
  gap: .1em;
}

.segment-title {
  font-size: 1rem;
}


.text-tih {
    font-size: 1.25rem;
    line-height: 1.90rem;
}

 @media (min-width: 992px) {
    .desktop-padding {
      padding: 20px;
    }
  }
  
.container {
  max-width: 1370px;
  margin: 0 auto;
  padding: 0 20px;
  box-sizing: border-box;
}

@media (max-width: 768px) {
  .container {
    padding: 0 7px;
  }
}


  /*FLASHSALE*/
  

.swiper-android .swiper-slide, .swiper-wrapper {
    transform: translateZ(0);
}
.swiper-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
    z-index: 1;
    display: flex;
    transition-property: transform;
    box-sizing: content-box;
}




.mat-tab-body-content {
    height: 100%;
    overflow: auto;
}
.mat-tab-body-wrapper {
    position: relative;
    overflow: hidden;
    display: flex;
    transition: height 500ms cubic-bezier(0.35, 0, 0.25, 1);
}
.mat-tab-body.mat-tab-body-active {
    position: relative;
    overflow-x: hidden;
    overflow-y: auto;
    z-index: 0;
    flex-grow: 1;
}

.mat-tab-body {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    position: absolute;
    display: block;
    overflow: hidden;
    outline: 0;
    flex-basis: 100%;
}



.text-\[\#FF2A2A\] {
    --tw-text-opacity: 1;
    color: rgb(255 42 42/var(--tw-text-opacity));
}
.font-bold {
    font-weight: 700;
}
.text-xs {
    font-size: .75rem;
    line-height: 1rem;
}
.py-0\.5 {
    padding-top: 0.125rem;
    padding-bottom: 0.125rem;
}
.px-2 {
    padding-left: 0.5rem;
    padding-right: 0.5rem;
}
.bg-danger-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(254 202 202/var(--tw-bg-opacity));
}
.rounded {
    border-radius: 0.25rem;
}
.items-center {
    align-items: center;
}
.inline-flex {
    display: inline-flex;
}
.left-4 {
    left: 1rem;
}
.absolute {
    position: absolute;
}
.text-white {
    --tw-text-opacity: 1;
    color: rgb(255 255 255/var(--tw-text-opacity));
}
.font-bold {
    font-weight: 700;
}
.text-sm {
    font-size: .875rem;
    line-height: 1.25rem;
}
.relative {
    position: relative;
}
blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre {
    margin: 0;
}
h1, h2, h3, h4, h5, h6 {
    font-size: inherit;
    font-weight: inherit;
}
.backdrop-promo {
    background: linear-gradient(0deg,rgba(0,0,0,.6),rgba(0,0,0,.4));
}
.p-2 {
    padding: 0.5rem;
}
.rounded-lg {
    border-radius: 0.5rem;
}
.overflow-hidden {
    overflow: hidden;
}
.justify-end {
    justify-content: flex-end;
}
.items-end {
    align-items: flex-end;
}
.h-full {
    height: 100%;
}
.flex {
    display: flex;
}
.top-0 {
    top: 0;
}
.inset-x-0 {
    left: 0;
    right: 0;
}
.absolute {
    position: absolute;
}

.shadow, .shadow-lg {
    box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow);
}
.shadow-lg {
    --tw-shadow: 0 10px 15px -3px rgba(0,0,0,.1),0 4px 6px -4px rgba(0,0,0,.1);
    --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color),0 4px 6px -4px var(--tw-shadow-color);
}
.rounded-lg {
    border-radius: 0.5rem;
}



.shadow, .shadow-lg {
    box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow);
}
.shadow-lg {
    --tw-shadow: 0 10px 15px -3px rgba(0,0,0,.1),0 4px 6px -4px rgba(0,0,0,.1);
    --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color),0 4px 6px -4px var(--tw-shadow-color);
}
.rounded-lg {
    border-radius: 0.5rem;
}
.overflow-hidden {
    overflow: hidden;
}

.h-80 {
    height: 20rem;
}

.line-through {
    text-decoration-line: line-through;
}
.text-\[\#FF2A2A\] {
    --tw-text-opacity: 1;
    color: rgb(255 42 42/var(--tw-text-opacity));
}
.text-xs {
    font-size: .75rem;
    line-height: 1rem;
}
.ml-2 {
    margin-left: 0.5rem;
}

   .tihmel {
    width: 25px;
}

       .shadow-2xl {
    --tw-shadow: 0 25px 50px -12px rgba(0,0,0,.25);
    --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
}
.shadow, .shadow-2xl {
    box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow);
}
.py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
}
.px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
}
.bg-transparent {
    background-color: transparent;
}
.mb-4 {
    margin-bottom: 1rem;
}
.relative {
    position: relative;
}
.-z-10 {
    z-index: -10;
}
.inset-0, .inset-x-0 {
    right: 0;
    left: 0;
}
.inset-0 {
    top: 0;
    bottom: 0;
}
.absolute {
    position: absolute;
}
.area, .circles {
    width: 100%;
    height: 100%;
}

.circles {
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden;
}
.area, .circles {
    width: 100%;
    height: 100%;
}
menu, ol, ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

@keyframes  hightlight {
    0% {
        left: -400%;
    }
    to {
        left: 100%;
    }
}
.selected-item:after {
    animation: hightlight 5s ease-in infinite forwards;
    background-color: hsla(204, 9%, 89%, 0.5);
    --tw-content: "";
    content: var(--tw-content);
}
.product-thumbnail-container {
    perspective: 25em;
}
.product-thumbnail-container img {
    position: relative;
    transform: rotateY(20deg) rotateX(-4deg) !important;
    transform-origin: left center;
}
.area {
    background-image: linear-gradient(to right,var(--tw-gradient-stops));
    --tw-gradient-from: #1e2022;
    --tw-gradient-to: rgba(30,32,34,0);
    --tw-gradient-stops: var(--tw-gradient-from),var(--tw-gradient-to);
    --tw-gradient-to: rgba(94,102,110,0);
    --tw-gradient-stops: var(--tw-gradient-from),#5e666e,var(--tw-gradient-to);
    --tw-gradient-to: #e1e4e6;
    position: relative;

}

.area {
    padding-bottom: 30px;
    margin-bottom: 30px;
}
.carousel {
    z-index: 1;
}
.area, .circles {
    width: 100%;
    height: 100%;
}
.circles {
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden;
    background: linear-gradient(244deg, #e0e4e6, transparent);
    max-height: 588px;
}
.circles li {
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: hsla(0, 0%, 100%, 0.2);
    animation: animate 25s linear infinite;
    bottom: -150px;
}
.circles li:first-child {
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}
.circles li:nth-child(2) {
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}
.circles li:nth-child(3) {
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}
.circles li:nth-child(4) {
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}
.circles li:nth-child(5) {
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}
.circles li:nth-child(6) {
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}
.circles li:nth-child(7) {
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}
.circles li:nth-child(8) {
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 10s;
    animation-duration: 45s;
}
.circles li:nth-child(9) {
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}
.circles li:nth-child(10) {
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}

.rectangle {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}
.rectangle li {
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 80px;
    background: hsla(0, 0%, 100%, 0.2);
    animation: animate-persegi-panjang 25s linear infinite;
    bottom: -250px;
}
.rectangle li:first-child {
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}
.rectangle li:nth-child(2) {
    left: 10%;
    width: 20px;
    height: 80px;
    animation-delay: 2s;
    animation-duration: 12s;
}
.rectangle li:nth-child(3) {
    left: 70%;
    width: 20px;
    height: 80px;
    animation-delay: 4s;
}
.rectangle li:nth-child(4) {
    left: 40%;
    width: 60px;
    height: 120px;
    animation-delay: 0s;
    animation-duration: 18s;
}
.rectangle li:nth-child(5) {
    left: 65%;
    width: 20px;
    height: 80px;
    animation-delay: 0s;
}
.rectangle li:nth-child(6) {
    left: 75%;
    width: 110px;
    height: 170px;
    animation-delay: 3s;
}
.rectangle li:nth-child(7) {
    left: 35%;
    width: 150px;
    height: 240px;
    animation-delay: 7s;
}
.rectangle li:nth-child(8) {
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 10s;
    animation-duration: 45s;
}
.rectangle li:nth-child(9) {
    left: 20%;
    width: 15px;
    height: 40px;
    animation-delay: 2s;
    animation-duration: 35s;
}
.rectangle li:nth-child(10) {
    left: 85%;
    width: 150px;
    height: 270px;
    animation-delay: 0s;
    animation-duration: 11s;
} 

.lazy {
    background: rgb(52 55 59/var(--tw-bg-opacity));
}
                
@keyframes  animate {
    0% {
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }
    to {
        transform: translateY(-1000px) rotate(2turn);
        opacity: 0;
        border-radius: 50%;
    }
}
@keyframes  animate-persegi-panjang {
    0% {
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }
    to {
        transform: translateY(-1000px) rotate(2turn);
        opacity: 0;
        border-radius: 5%;
    }
}


.area {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden; 
}
</style>

<section class="relative mb-2 px-0 py-4 shadow-2xl lg:min-h-[500px]">
            <div class="col-lg-9 mx-auto">
              <div class="swiper my-swiper swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-container swiper-container-mobile" data-aos="zoom-in">
                <div class="swiper-wrapper">
                    <?php $i = 1; ?> 
        <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <?php $active = ($i == 1) ? 'active' : ''; ?>
                    <div class="swiper-slide " data-swiper-slide-index="<?php echo e($i-1); ?>" role="group"
                        aria-label="<?php echo e($i); ?> / <?php echo e(count($banner)); ?>" >
                        <img src="<?php echo e($data->path); ?>" alt="" class="d-block w-100 creativeux-rounded-kecil">
                        <div class="swiper-slide-shadow-left" style="opacity: 2; transition-duration: 300ms;"></div>
                        <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 300ms;"></div>
                    </div>
                    <?php $i++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
             </div>
            </div>
         <div class="absolute inset-0 -z-10">
         <div class="area pt-3">
      <ul class="circles">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
    </ul>
  </div>
</div>
</section>

<div class="container mt-2">
    <div class="wrapper mt-3 pt-1">

 <h3 class="mb-6 text-lg font-semibold uppercase leading-relaxed tracking-wider">
     <i class="fa-solid fa-fire fa-beat-fade fa-lg text-warning"></i>&nbsp;Populer</h3>
    <div  class="mt-3 md:mt-10 grid grid-cols-3 gap-3 sm:grid-cols-4 sm:gap-3 md:grid-cols-5 md:gap-3 lg:grid-cols-6 lg:gap-3 xl:grid-cols-6 xl:gap-5">
                        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($category->tipe == "populer"): ?>
                        <a href="<?php echo e(env('APP_URL').'/order/'.$category->kode); ?>"
                            class="featured-game-card relative hover:shadow-sm hover:cursor-pointer overflow-hidden rounded-2xl  hover:ring-primary-500 duration-300  hover:shadow-2xl hover:ring-2   hover:ring-offset-white-500">
                            <div class="blur-sharp">
                                <div class="relative lazy h-[9.4rem] sm:h-[14.4rem] md:h-[14.4rem] lg:h-[10.4rem] xl:w-auto ">
                                    <img alt="<?php echo e($category->nama); ?>" sizes="100vw" srcset="<?php echo e($category->thumbnail); ?>"
                                        src="<?php echo e($category->thumbnail); ?>" decoding="async" data-nimg="fill"
                                        class="object-cover object-center !hover:rounded-3xl" loading="lazy"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                </div>
                            </div>
                            <div class="cover !absolute bottom-0 m-3 h-full">
                                <div class="flex flex-col h-full justify-between no-underline">
                                    <div class="relative p-3 mx-auto my-auto h-15 w-10 lg:h-14 lg:w-14">
                                        
                                    </div>
                                    <div>
                                        <p class="font-semibold text-white text-[12px] lg:text-[16px] mb-1 line-clamp-2">
                                            <?php echo e($category->nama); ?></p>
                                        <p class="font-light text-[10px] lg:text-[14px] text-warning line-clamp-2"><?php echo e($category->sub_nama); ?>

                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div> 
                </div>
                </div>

<div class="container">
<div class="wrapper mt-3">
    <div aria-live="assertive"
        class="pointer-events-none fixed inset-0 z-50 flex items-end px-4 py-6 sm:items-start sm:p-6">
        <div class="flex w-full flex-col items-center space-y-4 sm:items-end"></div>
    </div> 
   
    
    <div class="row d-lg-none d-inline-block m-0 w-100 pt-0 ">
        <div class="col-lg-10 mx-auto p-0 d-lg-block">
        </div>
        
            <div class="row h-100 mt-0">
                <div class="col-sm-11">
                    <ul class="nav nav-pills justify-content-left hide-scrollbar -mb-px flex space-x-3 overflow-auto"
                        id="myTab" role="tablist">
                        
                     
                        <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                            <button
                                class="btn-sm btn-category  flex whitespace-nowrap border-b-2 py-2 px-3 text-sm font-medium outline-none border-primary-500 from-murky-700 to-murky-800 active "
                                id="game-tab" data-bs-toggle="tab"
                                data-bs-target="#game" type="button" role="tab" aria-controls="game"
                                aria-selected="true">
                                <small>Game Mobile</small>
                            </button>
                        </li> 
                        
                     <!--   <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                            <button
                                class="btn-sm btn-category  flex whitespace-nowrap border-b-2 py-2 px-3 text-sm font-medium outline-none border-primary-500 from-murky-700 to-murky-800 "
                                id="Joki-tab" data-bs-toggle="tab"
                                data-bs-target="#Joki" type="button" role="tab" aria-controls="game"
                                aria-selected="true">
                                <small>Joki MLBB</small>
                            </button>
                        </li> -->
                        
                         <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                            <button
                                class="btn-sm btn-category  flex whitespace-nowrap border-b-2 py-2 px-3 text-sm font-medium outline-none border-primary-500 from-murky-700 to-murky-800 "
                                id="Pulsa-tab" data-bs-toggle="tab"
                                data-bs-target="#Pulsa" type="button" role="tab" aria-controls="game"
                                aria-selected="true">
                                <small>Pulsa</small>
                            </button>
                        </li> 
                        
                        <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                            <button
                                class="btn-sm btn-category  flex whitespace-nowrap border-b-2 py-2 px-3 text-sm font-medium outline-none border-primary-500 from-murky-700 to-murky-800 "
                                id="Voucher-tab" data-bs-toggle="tab"
                                data-bs-target="#Voucher" type="button" role="tab" aria-controls="game"
                                aria-selected="true">
                                <small>Voucher</small>
                            </button>
                        </li>
                        
                        <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                            <button
                                class="btn-sm btn-category  flex whitespace-nowrap border-b-2 py-2 px-3 text-sm font-medium outline-none border-primary-500 from-murky-700 to-murky-800 "
                                id="app-tab" data-bs-toggle="tab"
                                data-bs-target="#App" type="button" role="tab" aria-controls="game"
                                aria-selected="true">
                                <small>App Premium</small>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
  

        <div class="mx-auto max-w-7xl px-0 pt-0 sm:px-6 lg:px-8 d-none d-lg-block">
            <div class="mx-auto max-w-7xl pt-0 lg:px-8 mt-0 md:mt-1">
                <div class="mt-4 mb-2 flex flex-col-reverse justify-between border-b border-red-600 md:flex-row">
                    <nav class="-mb-px flex text-center text-sm font-medium" aria-label="Tabs">
                        <ul class="nav nav-pills justify-content-left hide-scrollbar" id="myTab" role="tablist">
                         
                        <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                            <button
                                class="btn-sm btn-category  flex whitespace-nowrap border-b-2 py-2 px-3 text-sm font-medium outline-none border-primary-500 from-murky-700 to-murky-800 active"
                                id="game-tab" data-bs-toggle="tab"
                                data-bs-target="#game" type="button" role="tab" aria-controls="game"
                                aria-selected="true">
                                <small>Game Mobile</small>
                            </button>
                        </li> 
                        <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                            <button
                                class="btn-sm btn-category  flex whitespace-nowrap border-b-2 py-2 px-3 text-sm font-medium outline-none border-primary-500 from-murky-700 to-murky-800 "
                                id="Joki-tab" data-bs-toggle="tab"
                                data-bs-target="#Joki" type="button" role="tab" aria-controls="game"
                                aria-selected="true">
                                <small>Joki MLBB</small>
                            </button>
                        </li>
                        <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                            <button
                                class="btn-sm btn-category  flex whitespace-nowrap border-b-2 py-2 px-3 text-sm font-medium outline-none border-primary-500 from-murky-700 to-murky-800 "
                                id="Pulsa-tab" data-bs-toggle="tab"
                                data-bs-target="#Pulsa" type="button" role="tab" aria-controls="game"
                                aria-selected="true">
                                <small>Pulsa</small>
                            </button>
                        </li>
                        
                         <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                            <button
                                class="btn-sm btn-category  flex whitespace-nowrap border-b-2 py-2 px-3 text-sm font-medium outline-none border-primary-500 from-murky-700 to-murky-800 "
                                id="Voucher-tab" data-bs-toggle="tab"
                                data-bs-target="#Voucher" type="button" role="tab" aria-controls="game"
                                aria-selected="true">
                                <small>Voucher</small>
                            </button>
                        </li>
                        
                        
                        <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                            <button
                                class="btn-sm btn-category  flex whitespace-nowrap border-b-2 py-2 px-3 text-sm font-medium outline-none border-primary-500 from-murky-700 to-murky-800 "
                                id="app-tab" data-bs-toggle="tab"
                                data-bs-target="#App" type="button" role="tab" aria-controls="game"
                                aria-selected="true">
                                <small>App Premium</small>
                            </button>
                        </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        
        
        
       <div class="col-lg-11 mt-5 mx-auto">
            <div class="tab-content" id="myTabContent">
                
                <div class="tab-pane active" id="game" role="tabpanel" aria-labelledby="game-tab">
                     <div
                        class="mt-3 md:mt-10 grid grid-cols-3 gap-3 sm:grid-cols-4 sm:gap-3 md:grid-cols-5 md:gap-3 lg:grid-cols-5 lg:gap-3 xl:grid-cols-6 xl:gap-5">
                         
                        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($category->tipe == "game"): ?>
                        <a href="<?php echo e(env('APP_URL').'/order/'.$category->kode); ?>"
                            class="featured-game-card relative hover:shadow-sm hover:cursor-pointer  group relative overflow-hidden rounded-2xl  hover:ring-primary-500 duration-300  hover:shadow-2xl hover:ring-2   hover:ring-offset-white-500">
                            <div class="blur-sharp ">
                                <div class="relative h-[9.4rem] sm:h-[14.4rem] md:h-[14.4rem] lg:h-[10.4rem] xl:w-auto ">
                                    <img alt="<?php echo e($category->nama); ?>" sizes="100vw"
                                        src="<?php echo e($category->thumbnail); ?>" decoding="async" data-nimg="fill"
                                        class="object-cover object-center !hover:rounded-3xl" loading="lazy"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                </div>
                            </div>
                            <div class="cover !absolute bottom-0 m-3 h-full">
                                <div class="flex flex-col h-full justify-between no-underline">
                                    <div class="relative p-3 mx-auto my-auto h-15 w-10 lg:h-14 lg:w-14">
                                        
                                    </div>
                                    <div>
                                        <p class="font-semibold text-white text-[12px] lg:text-[16px] mb-1 line-clamp-2">
                                            <?php echo e($category->nama); ?></p>
                                        <p class="font-light text-[10px] lg:text-[14px] text-warning line-clamp-2"><?php echo e($category->sub_nama); ?>

                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                         </a>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                
                <div class="tab-pane" id="Joki" role="tabpanel" aria-labelledby="Joki-tab">
                       <div
                        class="mt-3 md:mt-10 grid grid-cols-3 gap-3 sm:grid-cols-4 sm:gap-3 md:grid-cols-5 md:gap-3 lg:grid-cols-6 lg:gap-3 xl:grid-cols-6 xl:gap-5">
                        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($category->tipe == "joki"): ?>
                        <a href="<?php echo e(env('APP_URL').'/order/'.$category->kode); ?>"
                            class="featured-game-card relative hover:shadow-sm hover:cursor-pointer  group relative overflow-hidden rounded-2xl  hover:ring-primary-500 duration-300  hover:shadow-2xl hover:ring-2   hover:ring-offset-white-500">
                            <div class="blur-sharp ">
                                <div class="relative h-[9.4rem] sm:h-[14.4rem] md:h-[14.4rem] lg:h-[10.4rem] xl:w-auto ">
                                    <img alt="<?php echo e($category->nama); ?>" sizes="100vw" srcset="<?php echo e($category->thumbnail); ?>"
                                        src="<?php echo e($category->thumbnail); ?>" decoding="async" data-nimg="fill"
                                        class="object-cover object-center !hover:rounded-3xl" loading="lazy"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                </div>
                            </div>
                            <div class="cover !absolute bottom-0 m-3 h-full">
                                <div class="flex flex-col h-full justify-between no-underline">
                                    <div class="relative p-3 mx-auto my-auto h-15 w-10 lg:h-14 lg:w-14">
                                        
                                    </div>
                                    <div>
                                        <p class="font-semibold text-white text-[12px] lg:text-[16px] mb-1 line-clamp-2">
                                            <?php echo e($category->nama); ?></p>
                                        <p class="font-light text-[10px] lg:text-[14px] text-warning line-clamp-2"><?php echo e($category->sub_nama); ?>

                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                         </a>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
      
                <div class="tab-pane" id="Pulsa" role="tabpanel" aria-labelledby="Pulsa-tab">
                       <div
                        class="mt-3 md:mt-10 grid grid-cols-3 gap-3 sm:grid-cols-4 sm:gap-3 md:grid-cols-5 md:gap-3 lg:grid-cols-6 lg:gap-3 xl:grid-cols-6 xl:gap-5">
                        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($category->tipe == "pulsa"): ?>
                        <a href="<?php echo e(env('APP_URL').'/order/'.$category->kode); ?>"
                            class="featured-game-card relative hover:shadow-sm hover:cursor-pointer  group relative overflow-hidden rounded-2xl  hover:ring-primary-500 duration-300  hover:shadow-2xl hover:ring-2   hover:ring-offset-white-500">
                            <div class="blur-sharp ">
                                <div class="relative h-[9.4rem] sm:h-[14.4rem] md:h-[14.4rem] lg:h-[10.4rem] xl:w-auto ">
                                    <img alt="<?php echo e($category->nama); ?>" sizes="100vw" 
                                        src="<?php echo e($category->thumbnail); ?>" decoding="async" data-nimg="fill"
                                        class="object-cover object-center !hover:rounded-3xl" loading="lazy"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                </div>
                            </div>
                            <div class="cover !absolute bottom-0 m-3 h-full">
                                <div class="flex flex-col h-full justify-between no-underline">
                                    <div class="relative p-3 mx-auto my-auto h-15 w-10 lg:h-14 lg:w-14">
                                        
                                    </div>
                                    <div>
                                        <p class="font-semibold text-white text-[12px] lg:text-[16px] mb-1 line-clamp-2">
                                            <?php echo e($category->nama); ?></p>
                                        <p class="font-light text-[10px] lg:text-[14px] text-warning line-clamp-2"><?php echo e($category->sub_nama); ?>

                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                         </a>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                   
                
                <div class="tab-pane" id="Voucher" role="tabpanel" aria-labelledby="Voucher-tab">
                        <div
                        class="mt-3 md:mt-10 grid grid-cols-3 gap-3 sm:grid-cols-4 sm:gap-3 md:grid-cols-5 md:gap-3 lg:grid-cols-6 lg:gap-3 xl:grid-cols-6 xl:gap-5">
                        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($category->tipe == "voucher"): ?>
                       <a href="<?php echo e(env('APP_URL').'/order/'.$category->kode); ?>"
                            class="featured-game-card relative hover:shadow-sm hover:cursor-pointer  group relative overflow-hidden rounded-2xl  hover:ring-primary-500 duration-300  hover:shadow-2xl hover:ring-2   hover:ring-offset-white-500">
                            <div class="blur-sharp ">
                                <div class="relative h-[9.4rem] sm:h-[14.4rem] md:h-[14.4rem] lg:h-[10.4rem] xl:w-auto ">
                                    <img alt="<?php echo e($category->nama); ?>" sizes="100vw" 
                                        src="<?php echo e($category->thumbnail); ?>" decoding="async" data-nimg="fill"
                                        class="object-cover object-center !hover:rounded-3xl" loading="lazy"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                </div>
                            </div>
                            <div class="cover !absolute bottom-0 m-3 h-full">
                                <div class="flex flex-col h-full justify-between no-underline">
                                    <div class="relative p-3 mx-auto my-auto h-15 w-10 lg:h-14 lg:w-14">
                                        
                                    </div>
                                    <div>
                                        <p class="font-semibold text-white text-[12px] lg:text-[16px] mb-1 line-clamp-2">
                                            <?php echo e($category->nama); ?></p>
                                        <p class="font-light text-[10px] lg:text-[14px] text-warning line-clamp-2"><?php echo e($category->sub_nama); ?>

                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                         </a>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                
                <div class="tab-pane" id="App" role="tabpanel" aria-labelledby="app-tab">
                        <div
                        class="mt-3 md:mt-10 grid grid-cols-3 gap-3 sm:grid-cols-4 sm:gap-3 md:grid-cols-5 md:gap-3 lg:grid-cols-6 lg:gap-3 xl:grid-cols-6 xl:gap-5">
                        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($category->tipe == "app"): ?>
                       <a href="<?php echo e(env('APP_URL').'/order/'.$category->kode); ?>"
                            class="featured-game-card relative hover:shadow-sm hover:cursor-pointer  group relative overflow-hidden rounded-2xl  hover:ring-primary-500 duration-300  hover:shadow-2xl hover:ring-2   hover:ring-offset-white-500">
                            <div class="blur-sharp ">
                                <div class="relative h-[9.4rem] sm:h-[14.4rem] md:h-[14.4rem] lg:h-[10.4rem] xl:w-auto ">
                                    <img alt="<?php echo e($category->nama); ?>" sizes="100vw" 
                                        src="<?php echo e($category->thumbnail); ?>" decoding="async" data-nimg="fill"
                                        class="object-cover object-center !hover:rounded-3xl" loading="lazy"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                </div>
                            </div>
                            <div class="cover !absolute bottom-0 m-3 h-full">
                                <div class="flex flex-col h-full justify-between no-underline">
                                    <div class="relative p-3 mx-auto my-auto h-15 w-10 lg:h-14 lg:w-14">
                                        
                                    </div>
                                    <div>
                                        <p class="font-semibold text-white text-[12px] lg:text-[16px] mb-1 line-clamp-2">
                                            <?php echo e($category->nama); ?></p>
                                        <p class="font-light text-[10px] lg:text-[14px] text-warning line-clamp-2"><?php echo e($category->sub_nama); ?>

                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                         </a>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--  Modal content for the above example -->


<div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark" style="box-shadow:0 0 3rem #000000 !important">
            <div class="modal-body">
                <div class="row" id="textInfo">
                    <div class="col-12 mb-2">
                        <div class="card" style="border:1px solid #4b4d50;background-color: #484d52;">
                            <div class="card-header">
                                <h5 class="modal-title" id="myLargeModalLabel"><i class="fa fa-bullhorn" aria-hidden="true"></i> Information</h5>
                            </div>
                            <div class="card-body bg-dark pb-0">
                                <div class="row">
                                    <div class="col-12" style="font-size:12px !important">
                                        <p class="card-text"></p>
                                        <img src='<?php echo e(isset($popup->path) ? $popup->path : ""); ?>' width="100%"
                                            class="img-fluid">
                                        <span class="text-white"><?php echo isset($popup->deskripsi) ? $popup->deskripsi : " <p
                                                class='text-center'>
                                                Selamat datang di ".ENV("APP_NAME")." Selamat berbelanja.</p>"; ?>

                                        </span>
                                        <div class="col-12 text-end" style="font-size:10px !important"><span>BY <?php echo e(ENV('APP_NAME')); ?> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col float-start">
                                <div class="form-check mt-2" style="font-size:12px">
                                    <label class="form-check-label mt-2" style="font-size:12px !important"
                                        for="customCheck1">
                                        <input type="checkbox" class="form-check-input" id="dontShow"> Jangan tampilkan
                                        lagi</label>
                                </div>
                            </div>
                            <div class="col text-end">
                                <button type="button" name="read_popup_news_b2c" style="font-size:13px"
                                    class="btn btn-primary btn-sm ml-auto mt-2" data-bs-dismiss="modal"
                                    onclick="disablePopup()">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal --> <?php $__env->stopSection(); ?> <?php $__env->startSection('js'); ?>
<script>
    var delay = (function () {
        var timer = 0;
        return function (callback, ms) {
            clearTimeout(timer);
            timer = setTimeout(callback, ms);
        };
    })();
    $('#searchProds').keyup(function () {
        const data = $(this).val();
        if (data.length < 1) {
            $('.resultsearch').removeClass('show');
            $('.resultsearch li').remove();
        } else {
            delay(function () {
                $.ajax({
                    url: "<?php echo e(url('/cari/index')); ?>",
                    method: "POST",
                    data: {
                        data: data
                    },
                    beforeSend: function () {
                        $('.resultsearch li').remove();
                    },
                    success: function (res) {
                        $('.resultsearch').append(res);
                        $('.resultsearch').addClass('show');
                    }
                })
            }, 1000);
        }
    })
</script>


<script>
    const mySwiper = new Swiper('.my-swiper', {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        speed: 400,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },


    });
</script>

 <script>
       
        const swiper2 = new Swiper(".swiper-testimonial", {
            // Optional parameters
            direction: "horizontal",
            loop: true,
            autoHeight: false,
            centeredSlides: true,
            slidesPerView: 1,
            // Responsive breakpoints
            breakpoints: {
                340: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                }
            },
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },

            // If we need pagination
            pagination: {
                el: ".swiper-pagination"
            },

            // Navigation arrows
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            }

            // And if we need scrollbar
            /*scrollbar: {
                    el: '.swiper-scrollbar',
                },*/
        });
    </script>





                
               
                
<script>
    var swiper = new Swiper('.swiperrr', {
    autoplay: true,
    spaceBetween: 27,
    loop: true,
    autoplay: {
        delay: 3000,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        276: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 10
        }
    }
});

</script>
    
<script type="text/javascript">
    var cookie = document.cookie.split("; ");
    if (cookie.length < 2) {
        $(document).ready(function () {
            $("#popup").modal("show");
        })
    }

    function disablePopup() {
        var checkBox = document.getElementById("dontShow");
        var date = new Date();
        date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
        if (checkBox.checked) {
            document.cookie = "popup=0; expires=" + date.toGMTString();
        }
    }
</script> 


 <script src="/assets/js/part/particles.min.js"></script>
 <script src="/assets/js/part/app.js"></script>
 
<?php echo $__env->make('../footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mysticpe/job.mystic-pedia.net/system/resources/views/components/index.blade.php ENDPATH**/ ?>