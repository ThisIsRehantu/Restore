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
        font-size: 0.875rem;
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
        display: none;
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
        color: #707FEB;

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

.hover\:ring-yellow-400:hover {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(250 204 21);
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
      padding: 4px;
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

.lazy {
    background: rgb(52 55 59/var(--tw-bg-opacity));
}

.bg-featured-game-card {
--tw-bg-opacity: 1;
    background-color: rgb(52 55 59/var(--tw-bg-opacity));
    --tw-text-opacity: 1;
    color: rgb(255 255 255/var(--tw-text-opacity));
    background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgMTkyMCAxMDAwIj48c3R5bGUgdHlwZT0idGV4dC9jc3MiPnBhdGh7b3BhY2l0eTouMTtjbGlwLXBhdGg6dXJsKCNjbGlwUGF0aCk7ZmlsbDp1cmwoI2xpbmVhckdyYWRpZW50KTt9PC9zdHlsZT48Y2xpcFBhdGggaWQ9ImNsaXBQYXRoIj48cmVjdCB3aWR0aD0iMTkyMCIgaGVpZ2h0PSIxMDAwIi8+PC9jbGlwUGF0aD48bGluZWFyR3JhZGllbnQgaWQ9ImxpbmVhckdyYWRpZW50IiB4MT0iMCUiIHkxPSIwJSIgeDI9IjkwJSIgeTI9IjAlIj48c3RvcCBvZmZzZXQ9IjAiIHN0b3AtY29sb3I9ImhzbCgwIDAlIDEwMCUvMSkiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9ImhzbCgwIDAlIDEwMCUvMCkiLz48L2xpbmVhckdyYWRpZW50PjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE5MjAsMTAwMClzY2FsZSgtMSwtMSkiPjxwYXRoIGQ9Ik0xMzg0LjUgMzQzLjJMMTkyLjcgMTUzNWwtMjEzLjUtM0wxMzgzIDEyOC4ybDEuNSAyMTV6Ii8+PHBhdGggZD0iTTE5MTkuNyA0NDguM0wxMzU5IDEwMDlsLTEwMC40LTEuNEwxOTE5IDM0Ny4xbC43IDEwMS4yeiIvPjxwYXRoIGQ9Ik0xMTc2LjcgNTE0LjNMNjE2IDEwNzVsLTEwMC40LTEuNEwxMTc2IDQxMy4xbC43IDEwMS4yeiIvPjxwYXRoIGQ9Ik02NDQuNyA0NTcuM0w4NCAxMDE4bC0xMDAuNC0xLjRMNjQ0IDM1Ni4xbC43IDEwMS4yeiIvPjxwYXRoIGQ9Ik0xMzg3LjcgNDQ4LjNMODI3IDEwMDlsLTEwMC40LTEuNEwxMzg3IDM0Ny4xbC43IDEwMS4yeiIvPjxwYXRoIGQ9Ik0xMjUwLjEgNDkzLjhsLTU0NSA1NDUtNTIuNyA0My42IDY0MS45LTY0MS45LTQ0LjIgNTMuM3oiLz48cGF0aCBkPSJNODkxLjEgNjM5LjFMLTc3OCAyMzA4LjNsLTI5OC45LTQuMkw4ODkgMzM4LjFsMi4xIDMwMXoiLz48cGF0aCBkPSJNMTg3MC40IDQxOS44TC0yOC44IDIzMTlsLTM0MC4xLTQuOEwxODY4IDc3LjNsMi40IDM0Mi41eiIvPjxwYXRoIGQ9Ik05MDguNCA0MzYuOEwtOTkwLjggMjMzNmwtMzQwLjEtNC44TDkwNiA5NC4zbDIuNCAzNDIuNXoiLz48cGF0aCBkPSJNMTYzMi40IDUxNS44TC0yNjYuOCAyNDE1bC0zNDAuMS00LjhMMTYzMCAxNzMuM2wyLjQgMzQyLjV6Ii8+PHBhdGggZD0iTTExNzYuMyA1NjcuMUwtMTQ0NS42IDMxODlsLTQ2OS41LTYuNkwxMTczIDk0LjNsMy4zIDQ3Mi44eiIvPjxwYXRoIGQ9Ik0xNDI3LjMgNTgwLjFMLTExOTQuNiAzMjAybC00NjkuNS02LjZMMTQyNCAxMDcuM2wzLjMgNDcyLjh6Ii8+PHBhdGggZD0iTTE2NDkuNSA4ODAuMkw0NTcuNyAyMDcybC0yMTMuNS0zTDE2NDggNjY1LjJsMS41IDIxNXoiLz48cGF0aCBkPSJNNjc1LjggNTIyLjJsLTI2MjEuOSAyNjIxLjktNDY5LjQtNi42TDY3Mi41IDQ5LjRsMy4zIDQ3Mi44eiIvPjxwYXRoIGQ9Ik0yNTk1LjkgNTIyLjJMLTI2IDMxNDQuMWwtNDY5LjUtNi42TDI1OTIuNiA0OS40bDMuMyA0NzIuOHoiLz48L2c+PC9zdmc+);
    background-repeat: no-repeat;
    background-position: top;
    background-size: clamp(60em,100rem,100em) auto,cover; 
    
    }
    
    
.load {
--tw-bg-opacity: 1;
    background-color: transparent;
    color: transparent;
    background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgMTkyMCAxMDAwIj48c3R5bGUgdHlwZT0idGV4dC9jc3MiPnBhdGh7b3BhY2l0eTouMTtjbGlwLXBhdGg6dXJsKCNjbGlwUGF0aCk7ZmlsbDp1cmwoI2xpbmVhckdyYWRpZW50KTt9PC9zdHlsZT48Y2xpcFBhdGggaWQ9ImNsaXBQYXRoIj48cmVjdCB3aWR0aD0iMTkyMCIgaGVpZ2h0PSIxMDAwIi8+PC9jbGlwUGF0aD48bGluZWFyR3JhZGllbnQgaWQ9ImxpbmVhckdyYWRpZW50IiB4MT0iMCUiIHkxPSIwJSIgeDI9IjkwJSIgeTI9IjAlIj48c3RvcCBvZmZzZXQ9IjAiIHN0b3AtY29sb3I9ImhzbCgwIDAlIDEwMCUvMSkiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9ImhzbCgwIDAlIDEwMCUvMCkiLz48L2xpbmVhckdyYWRpZW50PjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE5MjAsMTAwMClzY2FsZSgtMSwtMSkiPjxwYXRoIGQ9Ik0xMzg0LjUgMzQzLjJMMTkyLjcgMTUzNWwtMjEzLjUtM0wxMzgzIDEyOC4ybDEuNSAyMTV6Ii8+PHBhdGggZD0iTTE5MTkuNyA0NDguM0wxMzU5IDEwMDlsLTEwMC40LTEuNEwxOTE5IDM0Ny4xbC43IDEwMS4yeiIvPjxwYXRoIGQ9Ik0xMTc2LjcgNTE0LjNMNjE2IDEwNzVsLTEwMC40LTEuNEwxMTc2IDQxMy4xbC43IDEwMS4yeiIvPjxwYXRoIGQ9Ik02NDQuNyA0NTcuM0w4NCAxMDE4bC0xMDAuNC0xLjRMNjQ0IDM1Ni4xbC43IDEwMS4yeiIvPjxwYXRoIGQ9Ik0xMzg3LjcgNDQ4LjNMODI3IDEwMDlsLTEwMC40LTEuNEwxMzg3IDM0Ny4xbC43IDEwMS4yeiIvPjxwYXRoIGQ9Ik0xMjUwLjEgNDkzLjhsLTU0NSA1NDUtNTIuNyA0My42IDY0MS45LTY0MS45LTQ0LjIgNTMuM3oiLz48cGF0aCBkPSJNODkxLjEgNjM5LjFMLTc3OCAyMzA4LjNsLTI5OC45LTQuMkw4ODkgMzM4LjFsMi4xIDMwMXoiLz48cGF0aCBkPSJNMTg3MC40IDQxOS44TC0yOC44IDIzMTlsLTM0MC4xLTQuOEwxODY4IDc3LjNsMi40IDM0Mi41eiIvPjxwYXRoIGQ9Ik05MDguNCA0MzYuOEwtOTkwLjggMjMzNmwtMzQwLjEtNC44TDkwNiA5NC4zbDIuNCAzNDIuNXoiLz48cGF0aCBkPSJNMTYzMi40IDUxNS44TC0yNjYuOCAyNDE1bC0zNDAuMS00LjhMMTYzMCAxNzMuM2wyLjQgMzQyLjV6Ii8+PHBhdGggZD0iTTExNzYuMyA1NjcuMUwtMTQ0NS42IDMxODlsLTQ2OS41LTYuNkwxMTczIDk0LjNsMy4zIDQ3Mi44eiIvPjxwYXRoIGQ9Ik0xNDI3LjMgNTgwLjFMLTExOTQuNiAzMjAybC00NjkuNS02LjZMMTQyNCAxMDcuM2wzLjMgNDcyLjh6Ii8+PHBhdGggZD0iTTE2NDkuNSA4ODAuMkw0NTcuNyAyMDcybC0yMTMuNS0zTDE2NDggNjY1LjJsMS41IDIxNXoiLz48cGF0aCBkPSJNNjc1LjggNTIyLjJsLTI2MjEuOSAyNjIxLjktNDY5LjQtNi42TDY3Mi41IDQ5LjRsMy4zIDQ3Mi44eiIvPjxwYXRoIGQ9Ik0yNTk1LjkgNTIyLjJMLTI2IDMxNDQuMWwtNDY5LjUtNi42TDI1OTIuNiA0OS40bDMuMyA0NzIuOHoiLz48L2c+PC9zdmc+);
    background-repeat: no-repeat;
    background-position: top;
    background-size: clamp(60em,100rem,100em) auto,cover; 
    
    }

</style>

<section class="relative mb-4 px-2 py-4 shadow-2xl lg:min-h-[350px]">
        <div class="col-lg-11 mx-auto px-0 d-lg-block">
            <div class=" swiper my-swiper swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-container swiper-container-mobile">
                <div class="swiper-wrapper">
                    <?php $i = 1; ?> 
        <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <?php $active = ($i == 1) ? 'active' : ''; ?>
        <div class="swiper-slide " data-swiper-slide-index="<?php echo e($i-1 ,); ?>" role="group" aria-label="<?php echo e($i); ?> / <?php echo e(count($banner)); ?>">
          <img src="<?php echo e($data->path); ?>" alt="" class="d-block w-100 rounded-xl">
          <div class="swiper-slide-shadow-left" style="opacity: 2; transition-duration: 300ms;"></div>
          <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 300ms;"></div>
        </div>
        <?php $i++; ?> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            </div>
            </div>
            </div>
         <div class="absolute pt-3 inset-0">
         <div class="area">
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
    </ul>
  </div>
</div>
</div>
</section>



                

<div class="container col-md-11">
    <div class="wrapper mt-3">
        <div aria-live="assertive" class="pointer-events-none fixed inset-0 z-50 flex items-end px-4 py-6 sm:items-start sm:p-6">
               <div class="flex w-full flex-col items-center space-y-4 sm:items-end">
               </div>
        </div>
       <h3 class="mb-6 text-lg font-semibold uppercase leading-relaxed tracking-wider ">
          <i class="fa-solid fa-fire fa-beat-fade fa-lg text-warning"></i>&nbsp;Populer</h3>
                    <div class="grid grid-cols-2 gap-2 md:gap-4 lg:grid-cols-3">
                        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($category->tipe == "populer"): ?>
                        <a href="<?php echo e(env('APP_URL').'/order/'.$category->kode); ?>" class="bg-featured-game-card relative hover:shadow-sm hover:cursor-pointer overflow-hidden rounded-2xl  hover:ring-yellow-400 duration-300  hover:ring-2 hover:ring-offset-white-500">
                            <div class="flex items-center">
                                <div class="relative h-24 w-24 rounded-lg ring-murky-600 ">
                                    <img alt="<?php echo e($category->nama); ?>"  width="80px" height="80px"
                                        src="<?php echo e($category->thumbnail); ?>" decoding="async" data-nimg="fill"
                                        class="!object-cover"
                                        style="position: absolute; height: 100%; width: 100% inset: 0px;">
                                </div>
                                    <div class="justify-end object-center">
                                        <p class="w-[100px]truncate text-xs font-semibold text-murky-200 sm:w-[10px] md:w-[2px] md:text-base">
                                            <?php echo e($category->nama); ?></p>
                                        <p class="font-light text-[10px] lg:text-[14px] text-warning line-clamp-2"><?php echo e($category->sub_nama); ?></p>
                                    </div>
                            </div>
                        </a>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
               
            
            
            <div class="row col-lg-11 mt-1 mx-auto">
                <div class="col-sm-11">
                    <ul class="nav nav-pills justify-content-left hide-scrollbar -mb-px flex space-x-1 overflow-auto"
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
                        
                         <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                            <button
                                class="btn-sm btn-category  flex whitespace-nowrap border-b-2 py-2 px-3 text-sm font-medium outline-none border-primary-500 from-murky-700 to-murky-800 "
                                id="Joki-tab" data-bs-toggle="tab"
                                data-bs-target="#Joki" type="button" role="tab" aria-controls="joki"
                                aria-selected="true">
                                <small>Jasa Joki MLBB</small>
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
        
        
      
<div class="container">
    <div class="wrapper mt-3">
       <div class="col-lg-11 mt-0 mx-auto">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane active" id="game" role="tabpanel" aria-labelledby="game-tab">
                     <div
                        class="mt-3 md:mt-10 grid grid-cols-3 gap-3 sm:grid-cols-4 sm:gap-3 md:grid-cols-5 md:gap-3 lg:grid-cols-5 lg:gap-3 xl:grid-cols-6 xl:gap-5">
                         
                        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($category->tipe == "game"): ?>
                        <a href="<?php echo e(env('APP_URL').'/order/'.$category->kode); ?>"
                            class="featured-game-card relative hover:shadow-sm hover:cursor-pointer  group relative overflow-hidden rounded-2xl  hover:ring-yellow-400 duration-300  hover:shadow-2xl hover:ring-2   hover:ring-offset-white-500">
                            <div class="blur-sharp ">
                                <div class="relative h-56 sm:h-[14.4rem] md:h-[14.4rem] lg:h-[10.4rem] xl:w-auto ">
                                    <img alt="<?php echo e($category->nama); ?>" sizes="100vw"
                                        src="<?php echo e($category->thumbnail); ?>" decoding="async" data-nimg="fill"
                                        class="object-cover object-center !hover:rounded-3xl" loading="lazy"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                </div>
                            </div>
                            <div class="cover !absolute bottom-0 m-3 h-full">
                                <div class="flex flex-col h-full justify-between no-underline">
                                    <div class="relative p-3 mx-auto my-auto h-16 w-10 lg:h-14 lg:w-14">
                                        
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
                            class="featured-game-card relative hover:shadow-sm hover:cursor-pointer  group relative overflow-hidden rounded-2xl  hover:ring-yellow-400 duration-300  hover:shadow-2xl hover:ring-2   hover:ring-offset-white-500">
                            <div class="blur-sharp ">
                                <div class="relative h-56 sm:h-[14.4rem] md:h-[14.4rem] lg:h-[10.4rem] xl:w-auto ">
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
      
                <div class="tab-pane" id="Pulsa" role="tabpanel" aria-labelledby="Pulsa-tab">
                       <div
                        class="mt-3 md:mt-10 grid grid-cols-3 gap-3 sm:grid-cols-4 sm:gap-3 md:grid-cols-5 md:gap-3 lg:grid-cols-6 lg:gap-3 xl:grid-cols-6 xl:gap-5">
                        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($category->tipe == "pulsa"): ?>
                        <a href="<?php echo e(env('APP_URL').'/order/'.$category->kode); ?>"
                            class="featured-game-card relative hover:shadow-sm hover:cursor-pointer  group relative overflow-hidden rounded-2xl  hover:ring-yellow-400 duration-300  hover:shadow-2xl hover:ring-2   hover:ring-offset-white-500">
                            <div class="blur-sharp ">
                                <div class="relative h-56 sm:h-[14.4rem] md:h-[14.4rem] lg:h-[10.4rem] xl:w-auto ">
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
                            class="featured-game-card relative hover:shadow-sm hover:cursor-pointer  group relative overflow-hidden rounded-2xl  hover:ring-yellow-400 duration-300  hover:shadow-2xl hover:ring-2   hover:ring-offset-white-500">
                            <div class="blur-sharp ">
                                <div class="relative h-56 sm:h-[14.4rem] md:h-[14.4rem] lg:h-[10.4rem] xl:w-auto ">
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
                            class="featured-game-card relative hover:shadow-sm hover:cursor-pointer  group relative overflow-hidden rounded-2xl  hover:ring-yellow-400 duration-300  hover:shadow-2xl hover:ring-2   hover:ring-offset-white-500">
                            <div class="blur-sharp ">
                                <div class="relative h-56 sm:h-[14.4rem] md:h-[14.4rem] lg:h-[10.4rem] xl:w-auto ">
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
        <div class="modal-content bg-gray-300" style="box-shadow:0 0 3rem #000000 !important">
            <div class="modal-body">
                <div class="row" id="textInfo">
                    <div class="col-12 mb-2">
                        <div class="card text-gray-600 "style="border:1px ;">
                            <div class="card-header">
                                <h5 class="modal-title" id="myLargeModalLabel"><i class="fa fa-bullhorn" style="color: #FF0000;" aria-hidden="true"></i> Information</h5>
                            </div>
                            <div class="card-body border-0 pb-0">
                                <div class="row">
                                    <div class="col-12" style="font-size:12px !important">
                                        <p class="card-text"></p>
                                        <img src='<?php echo e(isset($popup->path) ? $popup->path : ""); ?>' width="100%"
                                            class="img-fluid">
                                        <span class="text-gray-600"><?php echo isset($popup->deskripsi) ? $popup->deskripsi : " <p
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
    loop: false,
    autoplay: {
        delay: 2000,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
         276: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        768: {
            slidesPerView: 5,
            spaceBetween: 10
        },
        1024: {
            slidesPerView: 6,
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
 
<?php echo $__env->make('../footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nvdstor2/kenziistore.com/system/resources/views/components/index.blade.php ENDPATH**/ ?>