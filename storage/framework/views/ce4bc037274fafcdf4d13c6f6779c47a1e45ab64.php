
<?php $__env->startSection("title", $title." -"); ?>
<?php $__env->startSection('css'); ?>

<style type="text/css">
    
@keyframes  glowing {
  0% {
    text-shadow: 0 0 5px rgba(242, 92, 84, 0.7), 0 0 10px rgba(242, 92, 84, 0.5), 0 0 15px rgba(242, 92, 84, 0.3), 0 0 20px rgba(242, 92, 84, 0.1), 0 0 25px rgba(242, 92, 84, 0.05);
  }
  50% {
    text-shadow: none;
  }
  100% {
    text-shadow: 0 0 5px rgba(242, 92, 84, 0.7), 0 0 10px rgba(242, 92, 84, 0.5), 0 0 15px rgba(242, 92, 84, 0.3), 0 0 20px rgba(242, 92, 84, 0.1), 0 0 25px rgba(242, 92, 84, 0.05);
  }
}

.glowing-text {
  font-size: 14px;
  font-weight: bold;
  display: inline-block;
  animation: glowing 2s ease-in-out infinite;
}

.btn-order {      
      position: relative;
      display: inline-block;            
      background: rgba(0,0,0,.5);       
      box-sizing: border-box;
      box-shadow: 0 15px 25px rgba(0,0,0,.6);
      overflow: hidden;
      transition: .5s;    
      border-radius: 10px;     
      border: none; 
    }

    .btn-order:hover {
      background: #FF8100;      
      box-shadow: 0 0 5px #03e9f4,
      0 0 25px #03e9f4,
      0 0 50px #03e9f4,
      0 0 100px #03e9f4;
    }
    

    .btn-order span {
      position: absolute;
      display: block;
    }

    .btn-order span:nth-child(1) {
      top: 0;
      left: -100%;
      width: 100%;
      height: 2px;
      background: linear-gradient(90deg, transparent, #03e9f4);
      animation: btn-anim1 1s linear infinite;
    }

    @keyframes  btn-anim1 {
      0% {
        left: -100%;
      }
      50%,100% {
        left: 100%;
      }
    }

    .btn-order  span:nth-child(2) {
      top: -100%;
      right: 0;
      width: 2px;
      height: 100%;
      background: linear-gradient(180deg, transparent, #03e9f4);
      animation: btn-anim2 1s linear infinite;
      animation-delay: .25s
    }

    @keyframes  btn-anim2 {
      0% {
        top: -400%;
      }
      50%,100% {
        top: 100%;
      }
    }

    .btn-order span:nth-child(3) {
      bottom: 0;
      right: -100%;
      width: 100%;
      height: 2px;
      background: linear-gradient(270deg, transparent, #03e9f4);
      animation: btn-anim3 1s linear infinite;
      animation-delay: .5s
    }

    @keyframes  btn-anim3 {
      0% {
        right: -100%;
      }
      50%,100% {
        right: 100%;
      }
    }

    .btn-order span:nth-child(4) {
      bottom: -100%;
      left: 0;
      width: 2px;
      height: 100%;
      background: linear-gradient(360deg, transparent, #03e9f4);
      animation: btn-anim4 1s linear infinite;
      animation-delay: .75s
    }

    @keyframes  btn-anim4 {
      0% {
        bottom: -100%;
      }
      50%,100% {
        bottom: 100%;
      }
    }

    .rounded-lg {

        border-radius: 0.5rem;

    }
    
    .align-items-center {
        border:none;
    }

.product-thumbnail-container img {
    position: relative;
    transform: rotateY(20deg) rotateX(-4deg)!important;
    transform-origin: left center;
}

    .btn-check:checked+.btn-secondary {

        border: 2px solid #FFBD59;

        background-color: #FFBD59 !important;

    }



    a {

        text-decoration: none !important;

    }



    .button-secondary:hover {

        background-color: transparent !important;

    }



    .card-custom {

        background-color: bg-dark !important;

    }



    .btn-secondary {

        background-color: transparent !important;

    }



    .rounded {

        border-radius: 0% !important;

    }







    .hayutopup-pgimg {

        background-color: white;

        border-radius: 3px;

        border: 1px solid white;

    }



    .hayutopup-dicek {

        font-size: 9px;

        font-style: italic;

        color: #2f2fd5;

    }



    .ap-otp-input {

        border: 3px solid #adadad43;

        border-radius: 18px;

        width: 35px;

        height: 53px;

        margin: 4px;

        text-align: center;

        font-size: 35px;

    }





    .ap-otp-input:focus {

        outline: none !important;

        border: 3px solid #adadad43;

        transition: 0.12s ease-in;

    }



    .list-group-item {
user-select: none;

}

.list-group-item:last-child {
border-top-left-radius: 10px;
border-top-right-radius: 10px;
border-bottom-right-radius: 10px;
border-bottom-left-radius: 10px;
}

.list-group input[type="radio"] {
display: none;
}

.list-group1 input[type="radio"] {
display: none;
}

.list-group input[type="radio"]+.list-group-item { 
    text-align: center;
    cursor: pointer;
    background-color: #282C30;
    color: #dcddeb;
    border: 2px;
    border-color: transparent;
    font-size: 12px;
}

.nominal-price {
font-size: 10px;
text-align: left; 

}

.hayutopup-prod { 
font-weight: bold;
color: #FFFFFF; */
padding: 0%;
text-align: left;
}

.list-group input[type="radio"]:checked+.list-group-item {  
color: #000; */
padding: 0%;
text-align: left;
}
    
.list-group input[type="radio"]+label>.row>.col>.row>.nominal-price {
/* font-style: bold; */
font-family: 'hayutopup-comic';
font-style: italic;
} 

.list-group input[type="radio"]:checked+label>.row>.col>.row>.hayutopup-prod {
color: #000033!important;
font-style: bold;

}

.list-group input[type="radio"]:checked+label>.row>.col>.row>.nominal-price {
color: #F44336;
font-family: 'hayutopup-comic';
font-weight: bold;
font-style: italic;
}

.list-group input[type="radio"]+.list-group-item+.hayutopup-prod:before {
/* content: "\2713"; */
color: transparent;
font-weight: bold;
/* margin-right: 1em; */

}

.list-group input[type="radio"]+.list-group-item:hover {
cursor: pointer;
background-color: #c3c9cc;
color: #fff;
border-color: #c3c9cc;
font-size: 12px;
border-radius: 10px;
}

.list-group input[type="radio"]:checked+.list-group-item:before {
color: inherit;
}

.list-group input[type="radio"]:checked+.list-group-item:after {
position: absolute;
top: 0;
right: 0;
width: 40px;
height: 26px;
content: "";
/* background: url(/assets/thumbnail/verif.png) top/cover;*/
text-align: center;
}


.list-group input[type="radio"]:checked+.list-group-item {
color: #000 !important;
font-size: 12px;
background: #fff;
border:  #fff!important;
box-shadow: 0 0 2.22222vw #ababab, inset 0 2.40741vw 8.05556vw #adadad43, inset 0 -8.24074vw 11.48148vw #adadad43;
overflow: hidden;
}

.list-group1 input[type="radio"]:checked+.list-group-item:after {
position: absolute;
top: 0;
right: 0;
width: 28px;
height: 26px;
content: "";
/*background: url(/assets/thumbnail/verif.png) top/cover; */
text-align: center;
}

.list-group1 input[type="radio"]:checked+.list-group-item:before {
color: inherit; 
}

.list-group1 input[type="radio"]:checked+.list-group-item {
background-color: #adadad43;
color: #fff;
font-size: 12px;
display: block;
-webkit-filter: grayscale(0%);
/* Safari 6.0 - 9.0 */
filter: grayscale(0%);
}

.list-group1 input[type="radio"]+.list-group-item {
text-align: center;
padding: 15px;
cursor: pointer;
color: #fe6c17;

/* background-color: #e8e8e8;
color: #2f2fd5; */
border-color: transparent;
box-shadow: 0 2px 5px 0 #f39200, 0 5px 10px 0 rgba(0, 0, 0, 0.19);
font-size: 12px;
border-radius: 3px;
background: rgb(208, 208, 208);
-webkit-filter: grayscale(100%);
/* Safari 6.0 - 9.0 */
filter: grayscale(100%);
}

.list-group1 input[type="radio"]+.list-group-item:hover {
cursor: pointer;
background-color: #c3c9cc;
color: #212529;
border-color: #35322d;
box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 12px 0 rgba(0, 0, 0, 0.19);
font-size: 12px;
border-radius: 3px;
}

.list-group1 input[type="radio"]:checked+.list-group-item:before {
color: inherit;
}

.list-group1 input[type="radio"]:checked+.list-group-item {
background-color: #ffffff;
color: #F44336;
font-size: 12px;
display: block;
-webkit-filter: grayscale(0%);
filter: grayscale(0%);
}
.list-group1 input[type="radio"]+.list-group-item {
text-align: center;
cursor: pointer;
border-color: #f39200;
box-shadow: 0 2px 5px 0 rgb(0 0 0 / 20%), 0 5px 10px 0 rgb(0 0 0 / 19%);
font-size: 12px;
border-radius: 3px;
background: rgb(208, 208, 208);
-webkit-filter: grayscale(100%);
filter: grayscale(100%);
}
.list-group-item:last-child {
border-radius: 10px;
}
.list-group-item:last-child {

}


    .button-action-payment .info-top {

        border-bottom: 2px solid #000;

        display: flex;

        flex-direction: row;

        flex-wrap: nowrap;

        justify-content: space-between;

        margin-bottom: 10px;

        padding-bottom: 10px;

    }



    .button-action-payment .info-bottom {

        font-size: 10px;

        color: #666666;

        text-align: left;

        line-height: 12px;

    }



    .button-action-payment .info-bottom {

        color: #767676;

        font-size: 11px;

    }



    .button-action-payment .info-top img {

        width: 100%;

        max-height: 20px;

        -o-object-fit: contain;

        object-fit: contain;

        vertical-align: middle;

    }



    .button-action-payment .info-top img {

        height: 20px;

        -o-object-fit: contain;

        object-fit: contain;

    }



    .button-action-payment .info-top b {

        font-size: 12px;

        font-weight: 600;

    }



    .patihiconurl {

        width: 32px;

        top: 30%;

        right: 5%;

        position: absolute;

    }



    .payment-img {

        background-color: #fff;

        border-radius: 6px;

    }



    .child-box .short-payment-support-info {

        align-content: center;

        align-items: center;

        background: #d0d0d0;

        border-bottom-left-radius: 7px;

        border-bottom-right-radius: 7px;

        cursor: pointer;

        display: flex;

        flex-direction: row;

        flex-wrap: wrap;

        justify-content: flex-end;

        padding: 11px 15px;

    }



    .child-box .short-payment-support-info img {

        height: 22px;

        padding: 1px;

        margin-right: 7px;

    }



    @media (max-width: 767px) {

    .child-box .short-payment-support-info img {

            height: 14px;

            margin-right: 5px;

        }

    }


    .child-box .short-payment-support-info .open-button-action-payment {

        color: #000;

        font-size: 13px;

        margin-left: 10px;

    }



    .crt {

        margin-top: .5rem !important;

    }

    .games-thumbnail {

        background-size: cover !important;

        background-repeat: no-repeat !important;

        background-position: center center !important;

        border-radius:20px !important background:url('<?php echo e($kategori->event); ?>');

    }


    .games-thumbnail .card-body {

        min-height: 200px;

        border-radius: 20px
    }



    .games-thumbnail .card-body h3 {



        margin-top: 52px;

        text-transform: uppercase
    }



    .games-logo {

        margin-bottom: 20px
    }



    .games-logo img {

        margin-left: 20px;

        margin-top: -50px;

        z-index: 1;

        position: absolute;

        ;

        border-radius: 23% !important;

        width: 100px
    }



    @media (max-width: 767px) {

        .ptih {

            display: none;

        }

    }



    .toast-warning {

        background-color: #e10603 !important;

        color: #fff !important;

    }







    .store-bg {

        background-color: #272730;

    }



    .btn-order {

        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }



    .btn-order {

        --tw-shadow: 0 25px 50px -12px rgba(0, 0, 0, .25);

        --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color)
    }



    .btn-order:after {

        --tw-skew-x: -12deg;

        animation: hightlight 5s ease-in infinite forwards;

        background-color: hsla(200, 8%, 78%, .5);

        --tw-content: "";

        content: var(--tw-content)
    }



    .btn-order:after,

    .selected-item:after {

        position: absolute;

        top: 0;

        z-index: 10;

        display: block;

        height: 100%;

        width: 1em;

        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }





    .selected-item:after {

        --tw-skew-x: -12deg
    }



    @keyframes  hightlight {

        0% {

            left: -400%
        }



        to {

            left: 100%
        }

    }



    .selected-item:after {

        animation: hightlight 5s ease-in infinite forwards;

        background-color: hsla(204, 9%, 89%, .5);

        --tw-content: "";

        content: var(--tw-content)
    }



    .product-thumbnail-container {

        perspective: 15em
    }


    

    .text-sm {

        font-size: .875rem;

        line-height: 1.25rem;

    }



    .prose-sm :where(ol):not(:where([class~=not-prose] *)) {

        margin-top: 1.1428571em;

        margin-bottom: 1.1428571em;

        padding-left: 1.5714286em;

    }

    .prose :where(ol):not(:where([class~=not-prose] *)) {

        list-style-type: decimal;

        margin-top: 1.25em;

        margin-bottom: 1.25em;

        padding-left: 1.625em;

    }

    menu,
    ol,
    ul {

        list-style: none;

        margin: 0;

        padding: 0;

    }

    .spinner {
        border: 2px solid white;
        border-left-color: #ccc;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        animation: spin 1s infinite linear;
        margin-left: 10px;
        display: none;
    }

    .button-loading {
        pointer-events: none;
        opacity: 0.5;
    }

    @keyframes  spin {
        to {
            transform: rotate(360deg);
        }
    }






    .swal2-popup {
        display: none;
        position: relative;
        box-sizing: border-box;
        grid-template-columns: minmax(0, 100%);
        width: 32em;
        max-width: 100%;
        padding: 0 0 1.25em;
        border: none;
        border-radius: 5px;
        background: rgb(50, 50, 62);
        color: #fff !important;
        font-family: inherit;
        font-size: 1rem;
    }

    .swal2-html-container {
        z-index: 1;
        justify-content: center;
        margin: 1em 1.6em 0.3em;
        padding: 0;
        overflow: auto;
        color: inherit;
        font-size: 1.125em;
        font-weight: normal;
        line-height: normal;
        text-align: left !important;
        word-wrap: break-word;
        word-break: break-word;
    }

    .bg-emerald-700 {
        --tw-bg-opacity: 1;
        background-color: rgb(4 120 87/var(--tw-bg-opacity));
    }


    .border-t {
        border-top-width: 1px;
    }

    .overflow-hidden {
        overflow: hidden;
    }

    .gap-2 {
        gap: 0.5rem;
    }

    .justify-end {
        justify-content: flex-end;
    }

    .items-center {
        align-items: center;
    }

    .transform {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .w-full {
        width: 100%
    }

    .h-8 {
        height: 2rem;
    }

    .flex {
        display: flex;
    }

    /*terbaru*/


    hr {
        height: 0;
        color: inherit;
        border-top-width: 1px
    }

    abbr:where([title]) {
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-size: inherit;
        font-weight: inherit
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    b,
    strong {
        font-weight: bolder
    }

    code,
    kbd,
    pre,
    samp {
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
        font-size: 1em
    }

    small {
        font-size: 80%
    }

    sub,
    sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline
    }

    sub {
        bottom: -.25em
    }

    sup {
        top: -.5em
    }

    table {
        text-indent: 0;
        border-color: inherit;
        border-collapse: collapse
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
        padding: 0
    }

    button,
    select {
        text-transform: none
    }

    [type=button],
    [type=reset],
    [type=submit],
    button {
        -webkit-appearance: button;
        background-color: transparent;
        background-image: none
    }

    :-moz-focusring {
        outline: auto
    }

    :-moz-ui-invalid {
        box-shadow: none
    }

    progress {
        vertical-align: baseline
    }

    ::-webkit-inner-spin-button,
    ::-webkit-outer-spin-button {
        height: auto
    }

    [type=search] {
        -webkit-appearance: textfield;
        outline-offset: -2px
    }

    ::-webkit-search-decoration {
        -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit
    }

    summary {
        display: list-item
    }

    blockquote,
    dd,
    dl,
    figure,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    hr,
    p,
    pre {
        margin: 0
    }

    fieldset {
        margin: 0
    }

    fieldset,
    legend {
        padding: 0
    }

    menu,
    ol,
    ul {
        list-style: none;
        margin: 0;
        padding: 0
    }

    textarea {
        resize: vertical
    }

    input::-moz-placeholder,
    textarea::-moz-placeholder {
        color: #9ca3af
    }

    input::placeholder,
    textarea::placeholder {
        color: #9ca3af
    }

    [role=button],
    button {
        cursor: pointer
    }

    :disabled {
        cursor: default
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
        vertical-align: middle
    }

    img,
    video {
        max-width: 100%;
        height: auto
    }

    [hidden] {
        display: none
    }

    [multiple],
    [type=date],
    [type=datetime-local],
    [type=email],
    [type=month],
    [type=number],
    [type=password],
    [type=search],
    [type=tel],
    [type=text],
    [type=time],
    [type=url],
    [type=week],
    select,
    textarea {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: #fff;
        border-color: #6b7280;
        border-width: 1px;
        border-radius: 0;
        padding: .5rem .75rem;
        font-size: 1rem;
        line-height: 1.5rem;
        --tw-shadow: 0 0 #0000
    }

    [multiple]:focus,
    [type=date]:focus,
    [type=datetime-local]:focus,
    [type=email]:focus,
    [type=month]:focus,
    [type=number]:focus,
    [type=password]:focus,
    [type=search]:focus,
    [type=tel]:focus,
    [type=text]:focus,
    [type=time]:focus,
    [type=url]:focus,
    [type=week]:focus,
    select:focus,
    textarea:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
        --tw-ring-inset: var(--tw-empty,
                /*!*/
                /*!*/
            );
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: #2563eb;
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
        border-color: #2563eb
    }

    input::-moz-placeholder,
    textarea::-moz-placeholder {
        color: #6b7280;
        opacity: 1
    }

    input::placeholder,
    textarea::placeholder {
        color: #6b7280;
        opacity: 1
    }

    ::-webkit-datetime-edit-fields-wrapper {
        padding: 0
    }

    ::-webkit-date-and-time-value {
        min-height: 1.5em
    }

    ::-webkit-datetime-edit,
    ::-webkit-datetime-edit-day-field,
    ::-webkit-datetime-edit-hour-field,
    ::-webkit-datetime-edit-meridiem-field,
    ::-webkit-datetime-edit-millisecond-field,
    ::-webkit-datetime-edit-minute-field,
    ::-webkit-datetime-edit-month-field,
    ::-webkit-datetime-edit-second-field,
    ::-webkit-datetime-edit-year-field {
        padding-top: 0;
        padding-bottom: 0
    }

    select {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIGZpbGw9J25vbmUnIHZpZXdCb3g9JzAgMCAyMCAyMCc+PHBhdGggc3Ryb2tlPScjNmI3MjgwJyBzdHJva2UtbGluZWNhcD0ncm91bmQnIHN0cm9rZS1saW5lam9pbj0ncm91bmQnIHN0cm9rZS13aWR0aD0nMS41JyBkPSdNNiA4bDQgNCA0LTQnLz48L3N2Zz4=);
        background-position: right .5rem center;
        background-repeat: no-repeat;
        background-size: 1.5em 1.5em;
        padding-right: 2.5rem;
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact
    }

    [multiple] {
        background-image: none;
        background-position: 0 0;
        background-repeat: unset;
        background-size: initial;
        padding-right: .75rem;
        -webkit-print-color-adjust: unset;
        print-color-adjust: unset
    }

    [type=checkbox],
    [type=radio] {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        padding: 0;
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
        display: inline-block;
        vertical-align: middle;
        background-origin: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        flex-shrink: 0;
        height: 1rem;
        width: 1rem;
        color: #2563eb;
        background-color: #fff;
        border-color: #6b7280;
        border-width: 1px;
        --tw-shadow: 0 0 #0000
    }

    [type=checkbox] {
        border-radius: 0
    }

    [type=radio] {
        border-radius: 100%
    }

    [type=checkbox]:focus,
    [type=radio]:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
        --tw-ring-inset: var(--tw-empty,
                /*!*/
                /*!*/
            );
        --tw-ring-offset-width: 2px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: #2563eb;
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
    }

    [type=checkbox]:checked,
    [type=radio]:checked {
        border-color: transparent;
        background-color: currentColor;
        background-size: 100% 100%;
        background-position: 50%;
        background-repeat: no-repeat
    }

    [type=checkbox]:checked {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PScwIDAgMTYgMTYnIGZpbGw9J3doaXRlJyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnPjxwYXRoIGQ9J00xMi4yMDcgNC43OTNhMSAxIDAgMDEwIDEuNDE0bC01IDVhMSAxIDAgMDEtMS40MTQgMGwtMi0yYTEgMSAwIDAxMS40MTQtMS40MTRMNi41IDkuMDg2bDQuMjkzLTQuMjkzYTEgMSAwIDAxMS40MTQgMHonLz48L3N2Zz4=)
    }

    [type=radio]:checked {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PScwIDAgMTYgMTYnIGZpbGw9J3doaXRlJyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnPjxjaXJjbGUgY3g9JzgnIGN5PSc4JyByPSczJy8+PC9zdmc+)
    }

    [type=checkbox]:checked:focus,
    [type=checkbox]:checked:hover,
    [type=radio]:checked:focus,
    [type=radio]:checked:hover {
        border-color: transparent;
        background-color: currentColor
    }

    [type=checkbox]:indeterminate {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIGZpbGw9J25vbmUnIHZpZXdCb3g9JzAgMCAxNiAxNic+PHBhdGggc3Ryb2tlPSd3aGl0ZScgc3Ryb2tlLWxpbmVjYXA9J3JvdW5kJyBzdHJva2UtbGluZWpvaW49J3JvdW5kJyBzdHJva2Utd2lkdGg9JzInIGQ9J000IDhoOCcvPjwvc3ZnPg==);
        border-color: transparent;
        background-color: currentColor;
        background-size: 100% 100%;
        background-position: 50%;
        background-repeat: no-repeat
    }

    [type=checkbox]:indeterminate:focus,
    [type=checkbox]:indeterminate:hover {
        border-color: transparent;
        background-color: currentColor
    }

    [type=file] {
        background: unset;
        border-color: inherit;
        border-width: 0;
        border-radius: 0;
        padding: 0;
        font-size: unset;
        line-height: inherit
    }

    [type=file]:focus {
        outline: 1px solid ButtonText;
        outline: 1px auto -webkit-focus-ring-color
    }

    html {
        height: 100%;
        font-feature-settings: "cv02", "cv03", "cv04", "cv11"
    }

    body {
        min-height: 100%
    }

    *,
    :after,
    :before {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgba(59, 130, 246, .5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia:
    }

    ::backdrop {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgba(59, 130, 246, .5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia:
    }

    html {
        font-family: var(--font-inter-var)
    }

    input::-webkit-inner-spin-button,
    input::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0
    }

    input[type=number] {
        -moz-appearance: textfield
    }

    .hide-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none
    }

    .hide-scrollbar::-webkit-scrollbar {
        display: none
    }

    .grecaptcha-badge {
        visibility: hidden;
        background-color: transparent;
        box-shadow: none !important
    }

    .swiper-button {
        --tw-text-opacity: 1 !important;
        color: rgb(255 255 255/var(--tw-text-opacity)) !important
    }

    .swiper-button-next:after,
    .swiper-button-prev:after,
    .swiper-rtl .swiper-button-next:after,
    .swiper-rtl .swiper-button-prev:after {
        content: "" !important
    }

    .container {
        width: 100%;
        margin-right: auto;
        margin-left: auto;
        padding-right: 1rem;
        padding-left: 1rem
    }

    @media(min-width: 640px) {
        .container {
            max-width: 640px
        }
    }

    @media(min-width: 768px) {
        .container {
            max-width: 768px
        }
    }

    @media(min-width: 1024px) {
        .container {
            max-width: 1024px
        }
    }

    @media(min-width: 1280px) {
        .container {
            max-width: 1280px
        }
    }

    @media(min-width: 1536px) {
        .container {
            max-width: 1536px
        }
    }

    .prose {
        color: #334155;
        max-width: none
    }

    .prose :where(p):not(:where([class~=not-prose] *)) {
        margin-top: 1.25em;
        margin-bottom: 1.25em
    }

    .prose :where([class~=lead]):not(:where([class~=not-prose] *)) {
        color: var(--tw-prose-lead);
        font-size: 1.25em;
        line-height: 1.6;
        margin-top: 1.2em;
        margin-bottom: 1.2em
    }

    .prose :where(a):not(:where([class~=not-prose] *)) {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        border-bottom: 1px solid #f97316
    }

    .prose :where(strong):not(:where([class~=not-prose] *)) {
        color: #fff;
        font-weight: 600
    }

    .prose :where(a strong):not(:where([class~=not-prose] *)) {
        color: inherit;
        font-weight: inherit
    }

    .prose :where(blockquote strong):not(:where([class~=not-prose] *)) {
        color: inherit
    }

    .prose :where(thead th strong):not(:where([class~=not-prose] *)) {
        color: inherit
    }

    .prose :where(ol):not(:where([class~=not-prose] *)) {
        list-style-type: decimal;
        margin-top: 1.25em;
        margin-bottom: 1.25em;
        padding-left: 1.625em
    }

    .prose :where(ol[type=A]):not(:where([class~=not-prose] *)) {
        list-style-type: upper-alpha
    }

    .prose :where(ol[type=a]):not(:where([class~=not-prose] *)) {
        list-style-type: lower-alpha
    }

    .prose :where(ol[type=As]):not(:where([class~=not-prose] *)) {
        list-style-type: upper-alpha
    }

    .prose :where(ol[type=as]):not(:where([class~=not-prose] *)) {
        list-style-type: lower-alpha
    }

    .prose :where(ol[type=I]):not(:where([class~=not-prose] *)) {
        list-style-type: upper-roman
    }

    .prose :where(ol[type=i]):not(:where([class~=not-prose] *)) {
        list-style-type: lower-roman
    }

    .prose :where(ol[type=Is]):not(:where([class~=not-prose] *)) {
        list-style-type: upper-roman
    }

    .prose :where(ol[type=is]):not(:where([class~=not-prose] *)) {
        list-style-type: lower-roman
    }

    .prose :where(ol[type="1"]):not(:where([class~=not-prose] *)) {
        list-style-type: decimal
    }

    .prose :where(ul):not(:where([class~=not-prose] *)) {
        list-style-type: none;
        margin-top: 1.25em;
        margin-bottom: 1.25em;
        padding-left: 0
    }

    .prose :where(ol>li):not(:where([class~=not-prose] *))::marker {
        font-weight: 400;
        color: var(--tw-prose-counters)
    }

    .prose :where(ul>li):not(:where([class~=not-prose] *))::marker {
        color: var(--tw-prose-bullets)
    }

    .prose :where(hr):not(:where([class~=not-prose] *)) {
        border-color: #f1f5f9;
        border-top-width: 1px;
        margin-top: 3em;
        margin-bottom: 3em
    }

    .prose :where(blockquote):not(:where([class~=not-prose] *)) {
        font-weight: 500;
        font-style: italic;
        color: var(--tw-prose-quotes);
        border-left-width: .25rem;
        border-left-color: var(--tw-prose-quote-borders);
        quotes: "\201C""\201D""\2018""\2019";
        margin-top: 1.6em;
        margin-bottom: 1.6em;
        padding-left: 1em
    }

    .prose :where(blockquote p:first-of-type):not(:where([class~=not-prose] *)):before {
        content: open-quote
    }

    .prose :where(blockquote p:last-of-type):not(:where([class~=not-prose] *)):after {
        content: close-quote
    }

    .prose :where(h1):not(:where([class~=not-prose] *)) {
        color: var(--tw-prose-headings);
        font-weight: 800;
        font-size: 2.25em;
        margin-top: 0;
        margin-bottom: .8888889em;
        line-height: 1.1111111
    }

    .prose :where(h1 strong):not(:where([class~=not-prose] *)) {
        font-weight: 900;
        color: inherit
    }

    .prose :where(h2):not(:where([class~=not-prose] *)) {
        color: var(--tw-prose-headings);
        font-weight: 700;
        font-size: 1.5em;
        margin-top: 2em;
        margin-bottom: .6666666666666666em;
        line-height: 1.3333333
    }

    .prose :where(h2 strong):not(:where([class~=not-prose] *)) {
        font-weight: 800;
        color: inherit
    }

    .prose :where(h3):not(:where([class~=not-prose] *)) {
        color: var(--tw-prose-headings);
        font-weight: 600;
        font-size: 1.25em;
        margin-top: 2.4em;
        margin-bottom: .6em;
        line-height: 1.4
    }

    .prose :where(h3 strong):not(:where([class~=not-prose] *)) {
        font-weight: 700;
        color: inherit
    }

    .prose :where(h4):not(:where([class~=not-prose] *)) {
        color: var(--tw-prose-headings);
        font-weight: 600;
        margin-top: 2em;
        margin-bottom: .5em;
        line-height: 1.5;
        font-size: 1.125em
    }

    .prose :where(h4 strong):not(:where([class~=not-prose] *)) {
        font-weight: 700;
        color: inherit
    }

    .prose :where(img):not(:where([class~=not-prose] *)) {
        margin-top: 2em;
        margin-bottom: 2em
    }

    .prose :where(figure>*):not(:where([class~=not-prose] *)) {
        margin-top: 0;
        margin-bottom: 0
    }

    .prose :where(figcaption):not(:where([class~=not-prose] *)) {
        color: var(--tw-prose-captions);
        font-size: .875em;
        line-height: 1.4285714;
        margin-top: .8571429em
    }

    .prose :where(code):not(:where([class~=not-prose] *)) {
        color: var(--tw-prose-code);
        font-weight: 500;
        font-size: .875em;
        font-variant-ligatures: none
    }

    .prose :where(code):not(:where([class~=not-prose] *)):before {
        content: "`"
    }

    .prose :where(code):not(:where([class~=not-prose] *)):after {
        content: "`"
    }

    .prose :where(a code):not(:where([class~=not-prose] *)) {
        color: inherit;
        font-weight: inherit
    }

    .prose :where(h1 code):not(:where([class~=not-prose] *)) {
        color: inherit
    }

    .prose :where(h2 code):not(:where([class~=not-prose] *)) {
        color: inherit;
        font-size: .875em
    }

    .prose :where(h3 code):not(:where([class~=not-prose] *)) {
        color: inherit;
        font-size: .9em
    }

    .prose :where(h4 code):not(:where([class~=not-prose] *)) {
        color: inherit
    }

    .prose :where(blockquote code):not(:where([class~=not-prose] *)) {
        color: inherit
    }

    .prose :where(thead th code):not(:where([class~=not-prose] *)) {
        color: inherit
    }

    .prose :where(pre):not(:where([class~=not-prose] *)) {
        color: #f8fafc;
        background-color: var(--tw-prose-pre-bg);
        overflow-x: auto;
        font-weight: 400;
        font-size: .875em;
        line-height: 1.7142857;
        margin-top: 1.4285714285714286em;
        margin-bottom: 2.2857142857142856em;
        border-radius: .75rem;
        padding: 1.25rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, .1), 0 2px 4px -2px rgba(0, 0, 0, .1);
        display: flex
    }

    .prose :where(pre code):not(:where([class~=not-prose] *)) {
        background-color: transparent;
        border-width: 0;
        border-radius: 0;
        padding: 0;
        font-weight: inherit;
        color: inherit;
        font-size: inherit;
        font-family: inherit;
        line-height: inherit;
        flex: none;
        min-width: 100%
    }

    .prose :where(pre code):not(:where([class~=not-prose] *)):before {
        content: none
    }

    .prose :where(pre code):not(:where([class~=not-prose] *)):after {
        content: none
    }

    .prose :where(table):not(:where([class~=not-prose] *)) {
        width: 100%;
        table-layout: auto;
        text-align: left;
        margin-top: 2em;
        margin-bottom: 2em;
        font-size: .875rem;
        line-height: 1.25rem
    }

    .prose :where(thead):not(:where([class~=not-prose] *)) {
        border-bottom-width: 1px;
        border-bottom-color: #e2e8f0;
        color: #334155
    }

    .prose :where(thead th):not(:where([class~=not-prose] *)) {
        color: var(--tw-prose-headings);
        font-weight: 600;
        vertical-align: bottom;
        padding: 0 .5714286em .5714286em
    }

    .prose :where(tbody tr):not(:where([class~=not-prose] *)) {
        border-bottom-width: 1px;
        border-bottom-color: #f1f5f9
    }

    .prose :where(tbody tr:last-child):not(:where([class~=not-prose] *)) {
        border-bottom-width: 1px
    }

    .prose :where(tbody td):not(:where([class~=not-prose] *)) {
        vertical-align: baseline
    }

    .prose :where(tfoot):not(:where([class~=not-prose] *)) {
        border-top-width: 1px;
        border-top-color: var(--tw-prose-th-borders)
    }

    .prose :where(tfoot td):not(:where([class~=not-prose] *)) {
        vertical-align: top
    }

    .prose {
        --tw-prose-body: #374151;
        --tw-prose-headings: #111827;
        --tw-prose-lead: #4b5563;
        --tw-prose-links: #111827;
        --tw-prose-bold: #111827;
        --tw-prose-counters: #6b7280;
        --tw-prose-bullets: #d1d5db;
        --tw-prose-hr: #e5e7eb;
        --tw-prose-quotes: #111827;
        --tw-prose-quote-borders: #e5e7eb;
        --tw-prose-captions: #6b7280;
        --tw-prose-code: #111827;
        --tw-prose-pre-code: #e5e7eb;
        --tw-prose-pre-bg: #1f2937;
        --tw-prose-th-borders: #d1d5db;
        --tw-prose-td-borders: #e5e7eb;
        --tw-prose-invert-body: #d1d5db;
        --tw-prose-invert-headings: #fff;
        --tw-prose-invert-lead: #9ca3af;
        --tw-prose-invert-links: #fff;
        --tw-prose-invert-bold: #fff;
        --tw-prose-invert-counters: #9ca3af;
        --tw-prose-invert-bullets: #4b5563;
        --tw-prose-invert-hr: #374151;
        --tw-prose-invert-quotes: #f3f4f6;
        --tw-prose-invert-quote-borders: #374151;
        --tw-prose-invert-captions: #9ca3af;
        --tw-prose-invert-code: #fff;
        --tw-prose-invert-pre-code: #d1d5db;
        --tw-prose-invert-pre-bg: rgba(0, 0, 0, .5);
        --tw-prose-invert-th-borders: #4b5563;
        --tw-prose-invert-td-borders: #374151;
        font-size: 1rem;
        line-height: 1.75
    }

    .prose :where(video):not(:where([class~=not-prose] *)) {
        margin-top: 2em;
        margin-bottom: 2em
    }

    .prose :where(figure):not(:where([class~=not-prose] *)) {
        margin-top: 2em;
        margin-bottom: 2em
    }

    .prose :where(li):not(:where([class~=not-prose] *)) {
        margin-top: .5em;
        margin-bottom: .5em
    }

    .prose :where(ol>li):not(:where([class~=not-prose] *)) {
        padding-left: .375em
    }

    .prose :where(ul>li):not(:where([class~=not-prose] *)) {
        padding-left: 1.75em;
        position: relative
    }

    .prose :where(.prose>ul>li p):not(:where([class~=not-prose] *)) {
        margin-top: .75em;
        margin-bottom: .75em
    }

    .prose :where(.prose>ul>li>:first-child):not(:where([class~=not-prose] *)) {
        margin-top: 1.25em
    }

    .prose :where(.prose>ul>li>:last-child):not(:where([class~=not-prose] *)) {
        margin-bottom: 1.25em
    }

    .prose :where(.prose>ol>li>:first-child):not(:where([class~=not-prose] *)) {
        margin-top: 1.25em
    }

    .prose :where(.prose>ol>li>:last-child):not(:where([class~=not-prose] *)) {
        margin-bottom: 1.25em
    }

    .prose :where(ul ul, ul ol, ol ul, ol ol):not(:where([class~=not-prose] *)) {
        margin-top: .75em;
        margin-bottom: .75em
    }

    .prose :where(hr+*):not(:where([class~=not-prose] *)) {
        margin-top: 0
    }

    .prose :where(h2+*):not(:where([class~=not-prose] *)) {
        margin-top: 0
    }

    .prose :where(h3+*):not(:where([class~=not-prose] *)) {
        margin-top: 0
    }

    .prose :where(h4+*):not(:where([class~=not-prose] *)) {
        margin-top: 0
    }

    .prose :where(thead th:first-child):not(:where([class~=not-prose] *)) {
        padding-left: 0
    }

    .prose :where(thead th:last-child):not(:where([class~=not-prose] *)) {
        padding-right: 0
    }

    .prose :where(tbody td, tfoot td):not(:where([class~=not-prose] *)) {
        padding: .5714286em
    }

    .prose :where(tbody td:first-child, tfoot td:first-child):not(:where([class~=not-prose] *)) {
        padding-left: 0
    }

    .prose :where(tbody td:last-child, tfoot td:last-child):not(:where([class~=not-prose] *)) {
        padding-right: 0
    }

    .prose :where(.prose>:first-child):not(:where([class~=not-prose] *)) {
        margin-top: 0
    }

    .prose :where(.prose>:last-child):not(:where([class~=not-prose] *)) {
        margin-bottom: 0
    }

    .prose :where(h1, h2, h3):not(:where([class~=not-prose] *)) {
        letter-spacing: -.025em
    }

    .prose :where(h2 small, h3 small, h4 small):not(:where([class~=not-prose] *)) {
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
        color: #64748b;
        font-weight: 500
    }

    .prose :where(h2 small):not(:where([class~=not-prose] *)) {
        font-size: 1.125rem;
        line-height: 1.75rem
    }

    .prose :where(h3 small):not(:where([class~=not-prose] *)) {
        font-size: 1rem;
        line-height: 1.5rem
    }

    .prose :where(h4 small):not(:where([class~=not-prose] *)) {
        font-size: .875rem;
        line-height: 1.25rem
    }

    .prose :where(h2, h3, h4):not(:where([class~=not-prose] *)) {
        scroll-margin-top: var(--scroll-mt)
    }

    .prose :where(ul>li):not(:where([class~=not-prose] *)):before {
        content: "";
        width: .75em;
        height: .125em;
        position: absolute;
        top: calc(.875em - .0625em);
        left: 0;
        border-radius: 999px;
        background-color: #cbd5e1
    }

    .prose :where(a:hover):not(:where([class~=not-prose] *)) {
        border-bottom-width: 2px
    }

    .prose :where(p+pre):not(:where([class~=not-prose] *)) {
        margin-top: -.2857142857142857em
    }

    .prose :where(pre+pre):not(:where([class~=not-prose] *)) {
        margin-top: -1.1428571428571428em
    }

    .prose :where(tbody code):not(:where([class~=not-prose] *)) {
        font-size: .75rem
    }

    .prose :where(figure figcaption):not(:where([class~=not-prose] *)) {
        text-align: center;
        font-style: italic
    }

    .prose :where(figure>figcaption):not(:where([class~=not-prose] *)) {
        margin-top: .8571428571428571em
    }

    .prose-sm {
        font-size: .875rem;
        line-height: 1.7142857
    }

    .prose-sm :where(p):not(:where([class~=not-prose] *)) {
        margin-top: 1.1428571em;
        margin-bottom: 1.1428571em
    }

    .prose-sm :where([class~=lead]):not(:where([class~=not-prose] *)) {
        font-size: 1.2857143em;
        line-height: 1.5555556;
        margin-top: .8888889em;
        margin-bottom: .8888889em
    }

    .prose-sm :where(blockquote):not(:where([class~=not-prose] *)) {
        margin-top: 1.3333333em;
        margin-bottom: 1.3333333em;
        padding-left: 1.1111111em
    }

    .prose-sm :where(h1):not(:where([class~=not-prose] *)) {
        font-size: 2.1428571em;
        margin-top: 0;
        margin-bottom: .8em;
        line-height: 1.2
    }

    .prose-sm :where(h2):not(:where([class~=not-prose] *)) {
        font-size: 1.4285714em;
        margin-top: 1.6em;
        margin-bottom: .8em;
        line-height: 1.4
    }

    .prose-sm :where(h3):not(:where([class~=not-prose] *)) {
        font-size: 1.2857143em;
        margin-top: 1.5555556em;
        margin-bottom: .4444444em;
        line-height: 1.5555556
    }

    .prose-sm :where(h4):not(:where([class~=not-prose] *)) {
        margin-top: 1.4285714em;
        margin-bottom: .5714286em;
        line-height: 1.4285714
    }

    .prose-sm :where(img):not(:where([class~=not-prose] *)) {
        margin-top: 1.7142857em;
        margin-bottom: 1.7142857em
    }

    .prose-sm :where(video):not(:where([class~=not-prose] *)) {
        margin-top: 1.7142857em;
        margin-bottom: 1.7142857em
    }

    .prose-sm :where(figure):not(:where([class~=not-prose] *)) {
        margin-top: 1.7142857em;
        margin-bottom: 1.7142857em
    }

    .prose-sm :where(figure>*):not(:where([class~=not-prose] *)) {
        margin-top: 0;
        margin-bottom: 0
    }

    .prose-sm :where(figcaption):not(:where([class~=not-prose] *)) {
        font-size: .8571429em;
        line-height: 1.3333333;
        margin-top: .6666667em
    }

    .prose-sm :where(code):not(:where([class~=not-prose] *)) {
        font-size: .8571429em
    }

    .prose-sm :where(h2 code):not(:where([class~=not-prose] *)) {
        font-size: .9em
    }

    .prose-sm :where(h3 code):not(:where([class~=not-prose] *)) {
        font-size: .8888889em
    }

    .prose-sm :where(pre):not(:where([class~=not-prose] *)) {
        font-size: .8571429em;
        line-height: 1.6666667;
        margin-top: 1.6666667em;
        margin-bottom: 1.6666667em;
        border-radius: .25rem;
        padding: .6666667em 1em
    }

    .prose-sm :where(ol):not(:where([class~=not-prose] *)) {
        margin-top: 1.1428571em;
        margin-bottom: 1.1428571em;
        padding-left: 1.5714286em
    }

    .prose-sm :where(ul):not(:where([class~=not-prose] *)) {
        margin-top: 1.1428571em;
        margin-bottom: 1.1428571em;
        padding-left: 1.5714286em
    }

    .prose-sm :where(li):not(:where([class~=not-prose] *)) {
        margin-top: .2857143em;
        margin-bottom: .2857143em
    }

    .prose-sm :where(ol>li):not(:where([class~=not-prose] *)) {
        padding-left: .4285714em
    }

    .prose-sm :where(ul>li):not(:where([class~=not-prose] *)) {
        padding-left: .4285714em
    }

    .prose-sm :where(.prose-sm>ul>li p):not(:where([class~=not-prose] *)) {
        margin-top: .5714286em;
        margin-bottom: .5714286em
    }

    .prose-sm :where(.prose-sm>ul>li>:first-child):not(:where([class~=not-prose] *)) {
        margin-top: 1.1428571em
    }

    .prose-sm :where(.prose-sm>ul>li>:last-child):not(:where([class~=not-prose] *)) {
        margin-bottom: 1.1428571em
    }

    .prose-sm :where(.prose-sm>ol>li>:first-child):not(:where([class~=not-prose] *)) {
        margin-top: 1.1428571em
    }

    .prose-sm :where(.prose-sm>ol>li>:last-child):not(:where([class~=not-prose] *)) {
        margin-bottom: 1.1428571em
    }

    .prose-sm :where(ul ul, ul ol, ol ul, ol ol):not(:where([class~=not-prose] *)) {
        margin-top: .5714286em;
        margin-bottom: .5714286em
    }

    .prose-sm :where(hr):not(:where([class~=not-prose] *)) {
        margin-top: 2.8571429em;
        margin-bottom: 2.8571429em
    }

    .prose-sm :where(hr+*):not(:where([class~=not-prose] *)) {
        margin-top: 0
    }

    .prose-sm :where(h2+*):not(:where([class~=not-prose] *)) {
        margin-top: 0
    }

    .prose-sm :where(h3+*):not(:where([class~=not-prose] *)) {
        margin-top: 0
    }

    .prose-sm :where(h4+*):not(:where([class~=not-prose] *)) {
        margin-top: 0
    }

    .prose-sm :where(table):not(:where([class~=not-prose] *)) {
        font-size: .8571429em;
        line-height: 1.5
    }

    .prose-sm :where(thead th):not(:where([class~=not-prose] *)) {
        padding-right: 1em;
        padding-bottom: .6666667em;
        padding-left: 1em
    }

    .prose-sm :where(thead th:first-child):not(:where([class~=not-prose] *)) {
        padding-left: 0
    }

    .prose-sm :where(thead th:last-child):not(:where([class~=not-prose] *)) {
        padding-right: 0
    }

    .prose-sm :where(tbody td, tfoot td):not(:where([class~=not-prose] *)) {
        padding: .6666667em 1em
    }

    .prose-sm :where(tbody td:first-child, tfoot td:first-child):not(:where([class~=not-prose] *)) {
        padding-left: 0
    }

    .prose-sm :where(tbody td:last-child, tfoot td:last-child):not(:where([class~=not-prose] *)) {
        padding-right: 0
    }

    .prose-sm :where(.prose-sm>:first-child):not(:where([class~=not-prose] *)) {
        margin-top: 0
    }

    .prose-sm :where(.prose-sm>:last-child):not(:where([class~=not-prose] *)) {
        margin-bottom: 0
    }

    .container {
        max-width: none
    }

    @media(min-width: 768px) {
        .container {
            max-width: 48rem
        }
    }

    @media(min-width: 1024px) {
        .container {
            max-width: 64rem
        }
    }

    @media(min-width: 1280px) {
        .container {
            max-width: 80rem
        }
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border-width: 0
    }

    .pointer-events-none {
        pointer-events: none
    }

    .pointer-events-auto {
        pointer-events: auto
    }

    .visible {
        visibility: visible
    }

    .invisible {
        visibility: hidden
    }

    .static {
        position: static
    }

    .fixed {
        position: fixed
    }

    .absolute {
        position: absolute
    }

    .relative {
        position: relative
    }

    .sticky {
        position: sticky
    }

    .inset-0 {
        top: 0;
        bottom: 0
    }

    .inset-0,
    .inset-x-0 {
        right: 0;
        left: 0
    }

    .inset-y-0 {
        top: 0;
        bottom: 0
    }

    .-bottom-10 {
        bottom: -2.5rem
    }

    .-bottom-6 {
        bottom: -1.5rem
    }

    .bottom-0 {
        bottom: 0
    }

    .bottom-4 {
        bottom: 1rem
    }

    .left-0 {
        left: 0
    }

    .left-1\/2 {
        left: 50%
    }

    .left-4 {
        left: 1rem
    }

    .right-0 {
        right: 0
    }

    .right-4 {
        right: 1rem
    }

    .top-0 {
        top: 0
    }

    .top-1\/2 {
        top: 50%
    }

    .top-20 {
        top: 5rem
    }

    .top-24 {
        top: 6rem
    }

    .top-3 {
        top: .75rem
    }

    .top-3\.5 {
        top: .875rem
    }

    .top-4 {
        top: 1rem
    }

    .-z-10 {
        z-index: -10
    }

    .z-10 {
        z-index: 10
    }

    .z-20 {
        z-index: 20
    }

    .z-30 {
        z-index: 30
    }

    .z-40 {
        z-index: 40
    }

    .z-50 {
        z-index: 50
    }

    .col-span-1 {
        grid-column: span 1/span 1
    }

    .col-span-2 {
        grid-column: span 2/span 2
    }

    .col-span-3 {
        grid-column: span 3/span 3
    }

    .col-span-5 {
        grid-column: span 5/span 5
    }

    .col-span-8 {
        grid-column: span 8/span 8
    }

    .col-span-full {
        grid-column: 1/-1
    }

    .col-start-1 {
        grid-column-start: 1
    }

    .row-span-3 {
        grid-row: span 3/span 3
    }

    .row-start-2 {
        grid-row-start: 2
    }

    .-m-2 {
        margin: -.5rem
    }

    .-m-3 {
        margin: -.75rem
    }

    .-mx-4 {
        margin-left: -1rem;
        margin-right: -1rem
    }

    .-my-6 {
        margin-top: -1.5rem;
        margin-bottom: -1.5rem
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .my-4 {
        margin-top: 1rem;
        margin-bottom: 1rem
    }

    .my-8 {
        margin-top: 2rem;
        margin-bottom: 2rem
    }

    .\!mt-0 {
        margin-top: 0 !important
    }

    .-mb-14 {
        margin-bottom: -3.5rem
    }

    .-mb-px {
        margin-bottom: -1px
    }

    .-ml-1 {
        margin-left: -.25rem
    }

    .-ml-2 {
        margin-left: -.5rem
    }

    .-mr-1 {
        margin-right: -.25rem
    }

    .-mr-2 {
        margin-right: -.5rem
    }

    .-mt-16 {
        margin-top: -4rem
    }

    .-mt-2 {
        margin-top: -.5rem
    }

    .-mt-4 {
        margin-top: -1rem
    }

    .-mt-8 {
        margin-top: -2rem
    }

    .-mt-\[60px\] {
        margin-top: -60px
    }

    .mb-2 {
        margin-bottom: .5rem
    }

    .mb-2\.5 {
        margin-bottom: .625rem
    }

    .mb-3 {
        margin-bottom: .75rem
    }

    .mb-4 {
        margin-bottom: 1rem
    }

    .mb-6 {
        margin-bottom: 1.5rem
    }

    .mb-8 {
        margin-bottom: 2rem
    }

    .ml-2 {
        margin-left: .5rem
    }

    .ml-3 {
        margin-left: .75rem
    }

    .ml-4 {
        margin-left: 1rem
    }

    .ml-6 {
        margin-left: 1.5rem
    }

    .ml-8 {
        margin-left: 2rem
    }

    .ml-auto {
        margin-left: auto
    }

    .mr-1 {
        margin-right: .25rem
    }

    .mr-3 {
        margin-right: .75rem
    }

    .mt-0 {
        margin-top: 0
    }

    .mt-0\.5 {
        margin-top: .125rem
    }

    .mt-1 {
        margin-top: .25rem
    }

    .mt-10 {
        margin-top: 2.5rem
    }

    .mt-12 {
        margin-top: 3rem
    }

    .mt-16 {
        margin-top: 4rem
    }

    .mt-2 {
        margin-top: .5rem
    }

    .mt-3 {
        margin-top: .75rem
    }

    .mt-4 {
        margin-top: 1rem
    }

    .mt-5 {
        margin-top: 1.25rem
    }

    .mt-6 {
        margin-top: 1.5rem
    }

    .mt-8 {
        margin-top: 2rem
    }

    .mt-\[4\.25rem\] {
        margin-top: 4.25rem
    }

    .block {
        display: block
    }

    .inline-block {
        display: inline-block
    }

    .flex {
        display: flex
    }

    .inline-flex {
        display: inline-flex
    }

    .\!table {
        display: table !important
    }

    .table {
        display: table
    }

    .table-cell {
        display: table-cell
    }

    .flow-root {
        display: flow-root
    }

    .grid {
        display: grid
    }

    .contents {
        display: contents
    }

    .hidden {
        display: none
    }

    .aspect-\[1080\/424\] {
        aspect-ratio: 1080/424
    }

    .aspect-\[4\/6\] {
        aspect-ratio: 4/6
    }

    .aspect-\[6\/2\] {
        aspect-ratio: 6/2
    }

    .aspect-square {
        aspect-ratio: 1/1
    }

    .h-1 {
        height: .25rem
    }



    .h-1\.5 {
        height: .375rem
    }

    .h-10 {
        height: 2.5rem
    }

    .h-12 {
        height: 3rem
    }

    .h-14 {
        height: 3.5rem
    }

    .h-16 {
        height: 4rem
    }
    .tihmel-5 {
        height: 5rem
    }
    

    .h-2 {
        height: .5rem
    }

    .h-2\.5 {
        height: .625rem
    }

    .h-3 {
        height: .75rem
    }

    .h-32 {
        height: 8rem
    }

    .h-4 {
        height: 1rem
    }

    .h-44 {
        height: 11rem
    }

    .h-5 {
        height: 1.25rem
    }

    .h-56 {
        height: 14rem
    }

    .h-6 {
        height: 1.5rem
    }

    .h-64 {
        height: 16rem
    }

    .h-7 {
        height: 1.75rem
    }

    .h-8 {
        height: 2rem
    }

    .h-9 {
        height: 2.25rem
    }

    .h-\[265px\] {
        height: 265px
    }

    .h-\[30rem\] {
        height: 30rem
    }

    .h-\[4\.25rem\] {
        height: 4.25rem
    }

    .h-\[60px\] {
        height: 60px
    }

    .h-full {
        height: 100%
    }

    .h-px {
        height: 1px
    }

    .h-screen {
        height: 100vh
    }

    .max-h-0 {
        max-height: 0
    }

    .max-h-80 {
        max-height: 20rem
    }

    .max-h-screen {
        max-height: 100vh
    }

    .min-h-full {
        min-height: 100%
    }

    .min-h-screen {
        min-height: 100vh
    }

    .w-0 {
        width: 0
    }

    .w-1 {
        width: .25rem
    }

    .w-1\.5 {
        width: .375rem
    }

    .w-1\/2 {
        width: 50%
    }

    .w-1\/4 {
        width: 25%
    }

    .w-10 {
        width: 2.5rem
    }

    .w-12 {
        width: 3rem
    }

    .w-14 {
        width: 3.5rem
    }

    .w-24 {
        width: 6rem
    }

    .w-28 {
        width: 7rem
    }

    .w-32 {
        width: 8rem
    }

    .w-4 {
        width: 1rem
    }

    .w-48 {
        width: 12rem
    }

    .w-5 {
        width: 1.25rem
    }

    .w-56 {
        width: 14rem
    }

    .w-6 {
        width: 1.5rem
    }

    .w-64 {
        width: 16rem
    }

    .w-7 {
        width: 1.75rem
    }

    .w-8 {
        width: 2rem
    }

    .w-9 {
        width: 2.25rem
    }

    .w-auto {
        width: auto
    }



    .w-px {
        width: 1px
    }

    .w-screen {
        width: 100vw
    }

    .min-w-full {
        min-width: 100%
    }

    .max-w-2xl {
        max-width: 42rem
    }

    .max-w-3xl {
        max-width: 48rem
    }

    .max-w-4xl {
        max-width: 56rem
    }

    .max-w-\[172px\] {
        max-width: 172px
    }

    .max-w-\[360px\] {
        max-width: 360px
    }

    .max-w-\[calc\(100\%-50px\)\] {
        max-width: calc(100% - 50px)
    }

    .max-w-md {
        max-width: 28rem
    }

    .max-w-xl {
        max-width: 36rem
    }

    .max-w-xs {
        max-width: 20rem
    }

    .flex-1 {
        flex: 1 1 0%
    }

    .flex-auto {
        flex: 1 1 auto
    }

    .flex-none {
        flex: none
    }

    .flex-shrink-0 {
        flex-shrink: 0
    }

    .grow {
        flex-grow: 1
    }

    .origin-top-right {
        transform-origin: top right
    }

    .-translate-x-1\/2 {
        --tw-translate-x: -50%
    }

    .-translate-x-1\/2,
    .-translate-x-full {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .-translate-x-full {
        --tw-translate-x: -100%
    }

    .translate-x-0 {
        --tw-translate-x: 0px
    }

    .translate-x-0,
    .translate-y-0 {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .translate-y-0 {
        --tw-translate-y: 0px
    }

    .translate-y-1 {
        --tw-translate-y: 0.25rem
    }

    .translate-y-1,
    .translate-y-4 {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .translate-y-4 {
        --tw-translate-y: 1rem
    }

    .rotate-180 {
        --tw-rotate: 180deg
    }

    .rotate-180,
    .rotate-90 {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .rotate-90 {
        --tw-rotate: 90deg
    }

    .scale-100 {
        --tw-scale-x: 1;
        --tw-scale-y: 1
    }

    .scale-100,
    .scale-75 {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .scale-75 {
        --tw-scale-x: .75;
        --tw-scale-y: .75
    }

    .scale-95 {
        --tw-scale-x: .95;
        --tw-scale-y: .95
    }

    .scale-95,
    .transform {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    @keyframes  enter {
        0% {
            transform: scale(.9);
            opacity: 0
        }

        to {
            transform: scale(1);
            opacity: 1
        }
    }

    .animate-enter {
        animation: enter .2s ease-out
    }

    @keyframes  leave {
        0% {
            transform: scale(1);
            opacity: 1
        }

        to {
            transform: scale(.9);
            opacity: 0
        }
    }

    .animate-leave {
        animation: leave .15s ease-in forwards
    }

    @keyframes  pulse {
        50% {
            opacity: .5
        }
    }

    .animate-pulse {
        animation: pulse 2s cubic-bezier(.4, 0, .6, 1) infinite
    }

    @keyframes  spin {
        to {
            transform: rotate(1turn)
        }
    }

    .animate-spin {
        animation: spin 1s linear infinite
    }

    .\!cursor-pointer {
        cursor: pointer !important
    }

    .cursor-default {
        cursor: default
    }

    .cursor-pointer {
        cursor: pointer
    }

    .select-none {
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none
    }

    .scroll-py-2 {
        scroll-padding-top: .5rem;
        scroll-padding-bottom: .5rem
    }




    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-size: inherit;
        font-weight: inherit;
    }

    a {
        color: inherit;
        text-decoration: inherit;
    }

    b,
    strong {
        font-weight: bolder;
    }

    code,
    kbd,
    pre,
    samp {
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
        font-size: 1em;
    }

    small {
        font-size: 80%;
    }

    sub,
    sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline;
    }

    sub {
        bottom: -0.25em;
    }

    sup {
        top: -0.5em;
    }

    table {
        text-indent: 0;
        border-color: inherit;
        border-collapse: collapse;
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

    button,
    select {
        text-transform: none;
    }

    [type="button"],
    [type="reset"],
    [type="submit"],
    button {
        -webkit-appearance: button;
        background-color: transparent;
        background-image: none;
    }

    :-moz-focusring {
        outline: auto;
    }

    :-moz-ui-invalid {
        box-shadow: none;
    }

    progress {
        vertical-align: baseline;
    }

    ::-webkit-inner-spin-button,
    ::-webkit-outer-spin-button {
        height: auto;
    }

    [type="search"] {
        -webkit-appearance: textfield;
        outline-offset: -2px;
    }

    ::-webkit-search-decoration {
        -webkit-appearance: none;
    }

    ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit;
    }

    summary {
        display: list-item;
    }

    blockquote,
    dd,
    dl,
    figure,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    hr,
    p,
    pre {
        margin: 0;
    }

    fieldset {
        margin: 0;
    }

    fieldset,
    legend {
        padding: 0;
    }

    menu,
    ol,
    ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    textarea {
        resize: vertical;
    }

    input::-moz-placeholder,
    textarea::-moz-placeholder {
        color: #9ca3af;
    }

    input::placeholder,
    textarea::placeholder {
        color: #9ca3af;
    }

    [role="button"],
    button {
        cursor: pointer;
    }

    :disabled {
        cursor: default;
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

    img,
    video {
        max-width: 100%;
        height: auto;
    }

    [hidden] {
        display: none;
    }

    [multiple],
    [type="date"],
    [type="datetime-local"],
    [type="email"],
    [type="month"],
    [type="number"],
    [type="password"],
    [type="search"],
    [type="tel"],
    [type="text"],
    [type="time"],
    [type="url"],
    [type="week"],
    select,
    textarea {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: #fff;
        border-color: #6b7280;
        border-width: 1px;
        border-radius: 0;
        padding: 0.5rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5rem;
        --tw-shadow: 0 0 #0000;
    }

    [multiple]:focus,
    [type="date"]:focus,
    [type="datetime-local"]:focus,
    [type="email"]:focus,
    [type="month"]:focus,
    [type="number"]:focus,
    [type="password"]:focus,
    [type="search"]:focus,
    [type="tel"]:focus,
    [type="text"]:focus,
    [type="time"]:focus,
    [type="url"]:focus,
    [type="week"]:focus,
    select:focus,
    textarea:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
        --tw-ring-inset: var(--tw-empty,
                /*!*/
                /*!*/
            );
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: #2563eb;
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
        border-color: #2563eb;
    }

    input::-moz-placeholder,
    textarea::-moz-placeholder {
        color: #6b7280;
        opacity: 1;
    }

    input::placeholder,
    textarea::placeholder {
        color: #6b7280;
        opacity: 1;
    }

    ::-webkit-datetime-edit-fields-wrapper {
        padding: 0;
    }

    ::-webkit-date-and-time-value {
        min-height: 1.5em;
    }

    ::-webkit-datetime-edit,
    ::-webkit-datetime-edit-day-field,
    ::-webkit-datetime-edit-hour-field,
    ::-webkit-datetime-edit-meridiem-field,
    ::-webkit-datetime-edit-millisecond-field,
    ::-webkit-datetime-edit-minute-field,
    ::-webkit-datetime-edit-month-field,
    ::-webkit-datetime-edit-second-field,
    ::-webkit-datetime-edit-year-field {
        padding-top: 0;
        padding-bottom: 0;
    }

    select {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIGZpbGw9J25vbmUnIHZpZXdCb3g9JzAgMCAyMCAyMCc+PHBhdGggc3Ryb2tlPScjNmI3MjgwJyBzdHJva2UtbGluZWNhcD0ncm91bmQnIHN0cm9rZS1saW5lam9pbj0ncm91bmQnIHN0cm9rZS13aWR0aD0nMS41JyBkPSdNNiA4bDQgNCA0LTQnLz48L3N2Zz4=);
        background-position: right 0.5rem center;
        background-repeat: no-repeat;
        background-size: 1.5em 1.5em;
        padding-right: 2.5rem;
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
    }

    [multiple] {
        background-image: none;
        background-position: 0 0;
        background-repeat: unset;
        background-size: initial;
        padding-right: 0.75rem;
        -webkit-print-color-adjust: unset;
        print-color-adjust: unset;
    }

    [type="checkbox"],
    [type="radio"] {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        padding: 0;
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
        display: inline-block;
        vertical-align: middle;
        background-origin: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        flex-shrink: 0;
        height: 1rem;
        width: 1rem;
        color: #2563eb;
        background-color: #fff;
        border-color: #6b7280;
        border-width: 1px;
        --tw-shadow: 0 0 #0000;
    }

    [type="checkbox"] {
        border-radius: 0;
    }

    [type="radio"] {
        border-radius: 100%;
    }

    [type="checkbox"]:focus,
    [type="radio"]:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
        --tw-ring-inset: var(--tw-empty,
                /*!*/
                /*!*/
            );
        --tw-ring-offset-width: 2px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: #2563eb;
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
    }

    [type="checkbox"]:checked,
    [type="radio"]:checked {
        border-color: transparent;
        background-color: currentColor;
        background-size: 100% 100%;
        background-position: 50%;
        background-repeat: no-repeat;
    }

    [type="checkbox"]:checked {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PScwIDAgMTYgMTYnIGZpbGw9J3doaXRlJyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnPjxwYXRoIGQ9J00xMi4yMDcgNC43OTNhMSAxIDAgMDEwIDEuNDE0bC01IDVhMSAxIDAgMDEtMS40MTQgMGwtMi0yYTEgMSAwIDAxMS40MTQtMS40MTRMNi41IDkuMDg2bDQuMjkzLTQuMjkzYTEgMSAwIDAxMS40MTQgMHonLz48L3N2Zz4=);
    }

    [type="radio"]:checked {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PScwIDAgMTYgMTYnIGZpbGw9J3doaXRlJyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnPjxjaXJjbGUgY3g9JzgnIGN5PSc4JyByPSczJy8+PC9zdmc+);
    }

    [type="checkbox"]:checked:focus,
    [type="checkbox"]:checked:hover,
    [type="radio"]:checked:focus,
    [type="radio"]:checked:hover {
        border-color: transparent;
        background-color: currentColor;
    }

    [type="checkbox"]:indeterminate {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIGZpbGw9J25vbmUnIHZpZXdCb3g9JzAgMCAxNiAxNic+PHBhdGggc3Ryb2tlPSd3aGl0ZScgc3Ryb2tlLWxpbmVjYXA9J3JvdW5kJyBzdHJva2UtbGluZWpvaW49J3JvdW5kJyBzdHJva2Utd2lkdGg9JzInIGQ9J000IDhoOCcvPjwvc3ZnPg==);
        border-color: transparent;
        background-color: currentColor;
        background-size: 100% 100%;
        background-position: 50%;
        background-repeat: no-repeat;
    }

    [type="checkbox"]:indeterminate:focus,
    [type="checkbox"]:indeterminate:hover {
        border-color: transparent;
        background-color: currentColor;
    }

    [type="file"] {
        background: unset;
        border-color: inherit;
        border-width: 0;
        border-radius: 0;
        padding: 0;
        font-size: unset;
        line-height: inherit;
    }

    [type="file"]:focus {
        outline: 1px solid ButtonText;
        outline: 1px auto -webkit-focus-ring-color;
    }

    html {
        height: 100%;
        font-feature-settings: "cv02", "cv03", "cv04", "cv11";
    }

    body {
        min-height: 100%;
    }

    *,
    :after,
    :before {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgba(59, 130, 246, 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia: ;
    }

    ::backdrop {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgba(59, 130, 246, 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia: ;
    }

    html {
        font-family: var(--font-inter-var);
    }

    input::-webkit-inner-spin-button,
    input::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type="number"] {
        -moz-appearance: textfield;
    }

    .hide-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .hide-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .grecaptcha-badge {
        visibility: hidden;
        background-color: transparent;
        box-shadow: none !important;
    }

    .swiper-button {
        --tw-text-opacity: 1 !important;
        color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
    }

    .swiper-button-next:after,
    .swiper-button-prev:after,
    .swiper-rtl .swiper-button-next:after,
    .swiper-rtl .swiper-button-prev:after {
        content: "" !important;
    }

    .container {
        width: 100%;
        margin-right: auto;
        margin-left: auto;
        padding-right: 1rem;
        padding-left: 1rem;
    }

    @media (min-width: 640px) {
        .container {
            max-width: 640px;
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 768px;
        }
    }

    @media (min-width: 1024px) {
        .container {
            max-width: 1024px;
        }
    }

    @media (min-width: 1280px) {
        .container {
            max-width: 1280px;
        }
    }

    @media (min-width: 1536px) {
        .container {
            max-width: 1536px;
        }
    }

    .prose {
        color: #334155;
        max-width: none;
    }

    .prose :where(p):not(:where([class~="not-prose"] *)) {
        margin-top: 1.25em;
        margin-bottom: 1.25em;
    }

    .prose :where([class~="lead"]):not(:where([class~="not-prose"] *)) {
        color: var(--tw-prose-lead);
        font-size: 1.25em;
        line-height: 1.6;
        margin-top: 1.2em;
        margin-bottom: 1.2em;
    }

    .prose :where(a):not(:where([class~="not-prose"] *)) {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        border-bottom: 1px solid #f97316;
    }

    .prose :where(strong):not(:where([class~="not-prose"] *)) {
        color: #fff;
        font-weight: 600;
    }

    .prose :where(a strong):not(:where([class~="not-prose"] *)) {
        color: inherit;
        font-weight: inherit;
    }

    .prose :where(blockquote strong):not(:where([class~="not-prose"] *)) {
        color: inherit;
    }

    .prose :where(thead th strong):not(:where([class~="not-prose"] *)) {
        color: inherit;
    }

    .prose :where(ol):not(:where([class~="not-prose"] *)) {
        list-style-type: decimal;
        margin-top: 1.25em;
        margin-bottom: 1.25em;
        padding-left: 1.625em;
    }

    .prose :where(ol[type="A"]):not(:where([class~="not-prose"] *)) {
        list-style-type: upper-alpha;
    }

    .prose :where(ol[type="a"]):not(:where([class~="not-prose"] *)) {
        list-style-type: lower-alpha;
    }

    .prose :where(ol[type="As"]):not(:where([class~="not-prose"] *)) {
        list-style-type: upper-alpha;
    }

    .prose :where(ol[type="as"]):not(:where([class~="not-prose"] *)) {
        list-style-type: lower-alpha;
    }

    .prose :where(ol[type="I"]):not(:where([class~="not-prose"] *)) {
        list-style-type: upper-roman;
    }

    .prose :where(ol[type="i"]):not(:where([class~="not-prose"] *)) {
        list-style-type: lower-roman;
    }

    .prose :where(ol[type="Is"]):not(:where([class~="not-prose"] *)) {
        list-style-type: upper-roman;
    }

    .prose :where(ol[type="is"]):not(:where([class~="not-prose"] *)) {
        list-style-type: lower-roman;
    }

    .prose :where(ol[type="1"]):not(:where([class~="not-prose"] *)) {
        list-style-type: decimal;
    }

    .prose :where(ul):not(:where([class~="not-prose"] *)) {
        list-style-type: none;
        margin-top: 1.25em;
        margin-bottom: 1.25em;
        padding-left: 0;
    }

    .prose :where(ol > li):not(:where([class~="not-prose"] *))::marker {
        font-weight: 400;
        color: var(--tw-prose-counters);
    }

    .prose :where(ul > li):not(:where([class~="not-prose"] *))::marker {
        color: var(--tw-prose-bullets);
    }

    .prose :where(hr):not(:where([class~="not-prose"] *)) {
        border-color: #f1f5f9;
        border-top-width: 1px;
        margin-top: 3em;
        margin-bottom: 3em;
    }

    .prose :where(blockquote):not(:where([class~="not-prose"] *)) {
        font-weight: 500;
        font-style: italic;
        color: var(--tw-prose-quotes);
        border-left-width: 0.25rem;
        border-left-color: var(--tw-prose-quote-borders);
        quotes: "\201C""\201D""\2018""\2019";
        margin-top: 1.6em;
        margin-bottom: 1.6em;
        padding-left: 1em;
    }

    .prose :where(blockquote p:first-of-type):not(:where([class~="not-prose"] *)):before {
        content: open-quote;
    }

    .prose :where(blockquote p:last-of-type):not(:where([class~="not-prose"] *)):after {
        content: close-quote;
    }

    .prose :where(h1):not(:where([class~="not-prose"] *)) {
        color: var(--tw-prose-headings);
        font-weight: 800;
        font-size: 2.25em;
        margin-top: 0;
        margin-bottom: 0.8888889em;
        line-height: 1.1111111;
    }

    .prose :where(h1 strong):not(:where([class~="not-prose"] *)) {
        font-weight: 900;
        color: inherit;
    }

    .prose :where(h2):not(:where([class~="not-prose"] *)) {
        color: var(--tw-prose-headings);
        font-weight: 700;
        font-size: 1.5em;
        margin-top: 2em;
        margin-bottom: 0.6666666666666666em;
        line-height: 1.3333333;
    }

    .prose :where(h2 strong):not(:where([class~="not-prose"] *)) {
        font-weight: 800;
        color: inherit;
    }

    .prose :where(h3):not(:where([class~="not-prose"] *)) {
        color: var(--tw-prose-headings);
        font-weight: 600;
        font-size: 1.25em;
        margin-top: 2.4em;
        margin-bottom: 0.6em;
        line-height: 1.4;
    }

    .prose :where(h3 strong):not(:where([class~="not-prose"] *)) {
        font-weight: 700;
        color: inherit;
    }

    .prose :where(h4):not(:where([class~="not-prose"] *)) {
        color: var(--tw-prose-headings);
        font-weight: 600;
        margin-top: 2em;
        margin-bottom: 0.5em;
        line-height: 1.5;
        font-size: 1.125em;
    }

    .prose :where(h4 strong):not(:where([class~="not-prose"] *)) {
        font-weight: 700;
        color: inherit;
    }

    .prose :where(img):not(:where([class~="not-prose"] *)) {
        margin-top: 2em;
        margin-bottom: 2em;
    }

    .prose :where(figure > *):not(:where([class~="not-prose"] *)) {
        margin-top: 0;
        margin-bottom: 0;
    }

    .prose :where(figcaption):not(:where([class~="not-prose"] *)) {
        color: var(--tw-prose-captions);
        font-size: 0.875em;
        line-height: 1.4285714;
        margin-top: 0.8571429em;
    }

    .prose :where(code):not(:where([class~="not-prose"] *)) {
        color: var(--tw-prose-code);
        font-weight: 500;
        font-size: 0.875em;
        font-variant-ligatures: none;
    }

    .prose :where(code):not(:where([class~="not-prose"] *)):before {
        content: "`";
    }

    .prose :where(code):not(:where([class~="not-prose"] *)):after {
        content: "`";
    }

    .prose :where(a code):not(:where([class~="not-prose"] *)) {
        color: inherit;
        font-weight: inherit;
    }

    .prose :where(h1 code):not(:where([class~="not-prose"] *)) {
        color: inherit;
    }

    .prose :where(h2 code):not(:where([class~="not-prose"] *)) {
        color: inherit;
        font-size: 0.875em;
    }

    .prose :where(h3 code):not(:where([class~="not-prose"] *)) {
        color: inherit;
        font-size: 0.9em;
    }

    .prose :where(h4 code):not(:where([class~="not-prose"] *)) {
        color: inherit;
    }

    .prose :where(blockquote code):not(:where([class~="not-prose"] *)) {
        color: inherit;
    }

    .prose :where(thead th code):not(:where([class~="not-prose"] *)) {
        color: inherit;
    }

    .prose :where(pre):not(:where([class~="not-prose"] *)) {
        color: #f8fafc;
        background-color: var(--tw-prose-pre-bg);
        overflow-x: auto;
        font-weight: 400;
        font-size: 0.875em;
        line-height: 1.7142857;
        margin-top: 1.4285714285714286em;
        margin-bottom: 2.2857142857142856em;
        border-radius: 0.75rem;
        padding: 1.25rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
        display: flex;
    }

    .prose :where(pre code):not(:where([class~="not-prose"] *)) {
        background-color: transparent;
        border-width: 0;
        border-radius: 0;
        padding: 0;
        font-weight: inherit;
        color: inherit;
        font-size: inherit;
        font-family: inherit;
        line-height: inherit;
        flex: none;
        min-width: 100%;
    }

    .prose :where(pre code):not(:where([class~="not-prose"] *)):before {
        content: none;
    }

    .prose :where(pre code):not(:where([class~="not-prose"] *)):after {
        content: none;
    }

    .prose :where(table):not(:where([class~="not-prose"] *)) {
        width: 100%;
        table-layout: auto;
        text-align: left;
        margin-top: 2em;
        margin-bottom: 2em;
        font-size: 0.875rem;
        line-height: 1.25rem;
    }

    .prose :where(thead):not(:where([class~="not-prose"] *)) {
        border-bottom-width: 1px;
        border-bottom-color: #e2e8f0;
        color: #334155;
    }

    .prose :where(thead th):not(:where([class~="not-prose"] *)) {
        color: var(--tw-prose-headings);
        font-weight: 600;
        vertical-align: bottom;
        padding: 0 0.5714286em 0.5714286em;
    }

    .prose :where(tbody tr):not(:where([class~="not-prose"] *)) {
        border-bottom-width: 1px;
        border-bottom-color: #f1f5f9;
    }

    .prose :where(tbody tr:last-child):not(:where([class~="not-prose"] *)) {
        border-bottom-width: 1px;
    }

    .prose :where(tbody td):not(:where([class~="not-prose"] *)) {
        vertical-align: baseline;
    }

    .prose :where(tfoot):not(:where([class~="not-prose"] *)) {
        border-top-width: 1px;
        border-top-color: var(--tw-prose-th-borders);
    }

    .prose :where(tfoot td):not(:where([class~="not-prose"] *)) {
        vertical-align: top;
    }

    .prose {
        --tw-prose-body: #374151;
        --tw-prose-headings: #111827;
        --tw-prose-lead: #4b5563;
        --tw-prose-links: #111827;
        --tw-prose-bold: #111827;
        --tw-prose-counters: #6b7280;
        --tw-prose-bullets: #d1d5db;
        --tw-prose-hr: #e5e7eb;
        --tw-prose-quotes: #111827;
        --tw-prose-quote-borders: #e5e7eb;
        --tw-prose-captions: #6b7280;
        --tw-prose-code: #111827;
        --tw-prose-pre-code: #e5e7eb;
        --tw-prose-pre-bg: #1f2937;
        --tw-prose-th-borders: #d1d5db;
        --tw-prose-td-borders: #e5e7eb;
        --tw-prose-invert-body: #d1d5db;
        --tw-prose-invert-headings: #fff;
        --tw-prose-invert-lead: #9ca3af;
        --tw-prose-invert-links: #fff;
        --tw-prose-invert-bold: #fff;
        --tw-prose-invert-counters: #9ca3af;
        --tw-prose-invert-bullets: #4b5563;
        --tw-prose-invert-hr: #374151;
        --tw-prose-invert-quotes: #f3f4f6;
        --tw-prose-invert-quote-borders: #374151;
        --tw-prose-invert-captions: #9ca3af;
        --tw-prose-invert-code: #fff;
        --tw-prose-invert-pre-code: #d1d5db;
        --tw-prose-invert-pre-bg: rgba(0, 0, 0, 0.5);
        --tw-prose-invert-th-borders: #4b5563;
        --tw-prose-invert-td-borders: #374151;
        font-size: 1rem;
        line-height: 1.75;
    }

    .prose :where(video):not(:where([class~="not-prose"] *)) {
        margin-top: 2em;
        margin-bottom: 2em;
    }

    .prose :where(figure):not(:where([class~="not-prose"] *)) {
        margin-top: 2em;
        margin-bottom: 2em;
    }

    .prose :where(li):not(:where([class~="not-prose"] *)) {
        margin-top: 0.5em;
        margin-bottom: 0.5em;
    }

    .prose :where(ol > li):not(:where([class~="not-prose"] *)) {
        padding-left: 0.375em;
    }

    .prose :where(ul > li):not(:where([class~="not-prose"] *)) {
        padding-left: 1.75em;
        position: relative;
    }

    .prose :where(.prose > ul > li p):not(:where([class~="not-prose"] *)) {
        margin-top: 0.75em;
        margin-bottom: 0.75em;
    }

    .prose :where(.prose > ul > li > :first-child):not(:where([class~="not-prose"] *)) {
        margin-top: 1.25em;
    }

    .prose :where(.prose > ul > li > :last-child):not(:where([class~="not-prose"] *)) {
        margin-bottom: 1.25em;
    }

    .prose :where(.prose > ol > li > :first-child):not(:where([class~="not-prose"] *)) {
        margin-top: 1.25em;
    }

    .prose :where(.prose > ol > li > :last-child):not(:where([class~="not-prose"] *)) {
        margin-bottom: 1.25em;
    }

    .prose :where(ul ul, ul ol, ol ul, ol ol):not(:where([class~="not-prose"] *)) {
        margin-top: 0.75em;
        margin-bottom: 0.75em;
    }

    .prose :where(hr + *):not(:where([class~="not-prose"] *)) {
        margin-top: 0;
    }

    .prose :where(h2 + *):not(:where([class~="not-prose"] *)) {
        margin-top: 0;
    }

    .prose :where(h3 + *):not(:where([class~="not-prose"] *)) {
        margin-top: 0;
    }

    .prose :where(h4 + *):not(:where([class~="not-prose"] *)) {
        margin-top: 0;
    }

    .prose :where(thead th:first-child):not(:where([class~="not-prose"] *)) {
        padding-left: 0;
    }

    .prose :where(thead th:last-child):not(:where([class~="not-prose"] *)) {
        padding-right: 0;
    }

    .prose :where(tbody td, tfoot td):not(:where([class~="not-prose"] *)) {
        padding: 0.5714286em;
    }

    .prose :where(tbody td:first-child, tfoot td:first-child):not(:where([class~="not-prose"] *)) {
        padding-left: 0;
    }

    .prose :where(tbody td:last-child, tfoot td:last-child):not(:where([class~="not-prose"] *)) {
        padding-right: 0;
    }

    .prose :where(.prose > :first-child):not(:where([class~="not-prose"] *)) {
        margin-top: 0;
    }

    .prose :where(.prose > :last-child):not(:where([class~="not-prose"] *)) {
        margin-bottom: 0;
    }

    .prose :where(h1, h2, h3):not(:where([class~="not-prose"] *)) {
        letter-spacing: -0.025em;
    }

    .prose :where(h2 small, h3 small, h4 small):not(:where([class~="not-prose"] *)) {
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
        color: #64748b;
        font-weight: 500;
    }

    .prose :where(h2 small):not(:where([class~="not-prose"] *)) {
        font-size: 1.125rem;
        line-height: 1.75rem;
    }

    .prose :where(h3 small):not(:where([class~="not-prose"] *)) {
        font-size: 1rem;
        line-height: 1.5rem;
    }

    .prose :where(h4 small):not(:where([class~="not-prose"] *)) {
        font-size: 0.875rem;
        line-height: 1.25rem;
    }

    .prose :where(h2, h3, h4):not(:where([class~="not-prose"] *)) {
        scroll-margin-top: var(--scroll-mt);
    }

    .prose :where(ul > li):not(:where([class~="not-prose"] *)):before {
        content: "";
        width: 0.75em;
        height: 0.125em;
        position: absolute;
        top: calc(0.875em - 0.0625em);
        left: 0;
        border-radius: 999px;
        background-color: #cbd5e1;
    }

    .prose :where(a:hover):not(:where([class~="not-prose"] *)) {
        border-bottom-width: 2px;
    }

    .prose :where(p + pre):not(:where([class~="not-prose"] *)) {
        margin-top: -0.2857142857142857em;
    }

    .prose :where(pre + pre):not(:where([class~="not-prose"] *)) {
        margin-top: -1.1428571428571428em;
    }

    .prose :where(tbody code):not(:where([class~="not-prose"] *)) {
        font-size: 0.75rem;
    }

    .prose :where(figure figcaption):not(:where([class~="not-prose"] *)) {
        text-align: center;
        font-style: italic;
    }

    .prose :where(figure > figcaption):not(:where([class~="not-prose"] *)) {
        margin-top: 0.8571428571428571em;
    }

    .prose-sm {
        font-size: 0.875rem;
        line-height: 1.7142857;
    }

    .prose-sm :where(p):not(:where([class~="not-prose"] *)) {
        margin-top: 1.1428571em;
        margin-bottom: 1.1428571em;
    }

    .prose-sm :where([class~="lead"]):not(:where([class~="not-prose"] *)) {
        font-size: 1.2857143em;
        line-height: 1.5555556;
        margin-top: 0.8888889em;
        margin-bottom: 0.8888889em;
    }

    .prose-sm :where(blockquote):not(:where([class~="not-prose"] *)) {
        margin-top: 1.3333333em;
        margin-bottom: 1.3333333em;
        padding-left: 1.1111111em;
    }

    .prose-sm :where(h1):not(:where([class~="not-prose"] *)) {
        font-size: 2.1428571em;
        margin-top: 0;
        margin-bottom: 0.8em;
        line-height: 1.2;
    }

    .prose-sm :where(h2):not(:where([class~="not-prose"] *)) {
        font-size: 1.4285714em;
        margin-top: 1.6em;
        margin-bottom: 0.8em;
        line-height: 1.4;
    }

    .prose-sm :where(h3):not(:where([class~="not-prose"] *)) {
        font-size: 1.2857143em;
        margin-top: 1.5555556em;
        margin-bottom: 0.4444444em;
        line-height: 1.5555556;
    }

    .prose-sm :where(h4):not(:where([class~="not-prose"] *)) {
        margin-top: 1.4285714em;
        margin-bottom: 0.5714286em;
        line-height: 1.4285714;
    }

    .prose-sm :where(img):not(:where([class~="not-prose"] *)) {
        margin-top: 1.7142857em;
        margin-bottom: 1.7142857em;
    }

    .prose-sm :where(video):not(:where([class~="not-prose"] *)) {
        margin-top: 1.7142857em;
        margin-bottom: 1.7142857em;
    }

    .prose-sm :where(figure):not(:where([class~="not-prose"] *)) {
        margin-top: 1.7142857em;
        margin-bottom: 1.7142857em;
    }

    .prose-sm :where(figure > *):not(:where([class~="not-prose"] *)) {
        margin-top: 0;
        margin-bottom: 0;
    }

    .prose-sm :where(figcaption):not(:where([class~="not-prose"] *)) {
        font-size: 0.8571429em;
        line-height: 1.3333333;
        margin-top: 0.6666667em;
    }

    .prose-sm :where(code):not(:where([class~="not-prose"] *)) {
        font-size: 0.8571429em;
    }

    .prose-sm :where(h2 code):not(:where([class~="not-prose"] *)) {
        font-size: 0.9em;
    }

    .prose-sm :where(h3 code):not(:where([class~="not-prose"] *)) {
        font-size: 0.8888889em;
    }

    .prose-sm :where(pre):not(:where([class~="not-prose"] *)) {
        font-size: 0.8571429em;
        line-height: 1.6666667;
        margin-top: 1.6666667em;
        margin-bottom: 1.6666667em;
        border-radius: 0.25rem;
        padding: 0.6666667em 1em;
    }

    .prose-sm :where(ol):not(:where([class~="not-prose"] *)) {
        margin-top: 1.1428571em;
        margin-bottom: 1.1428571em;
        padding-left: 1.5714286em;
    }

    .prose-sm :where(ul):not(:where([class~="not-prose"] *)) {
        margin-top: 1.1428571em;
        margin-bottom: 1.1428571em;
        padding-left: 1.5714286em;
    }

    .prose-sm :where(li):not(:where([class~="not-prose"] *)) {
        margin-top: 0.2857143em;
        margin-bottom: 0.2857143em;
    }

    .prose-sm :where(ol > li):not(:where([class~="not-prose"] *)) {
        padding-left: 0.4285714em;
    }

    .prose-sm :where(ul > li):not(:where([class~="not-prose"] *)) {
        padding-left: 0.4285714em;
    }

    .prose-sm :where(.prose-sm > ul > li p):not(:where([class~="not-prose"] *)) {
        margin-top: 0.5714286em;
        margin-bottom: 0.5714286em;
    }

    .prose-sm :where(.prose-sm > ul > li > :first-child):not(:where([class~="not-prose"] *)) {
        margin-top: 1.1428571em;
    }

    .prose-sm :where(.prose-sm > ul > li > :last-child):not(:where([class~="not-prose"] *)) {
        margin-bottom: 1.1428571em;
    }

    .prose-sm :where(.prose-sm > ol > li > :first-child):not(:where([class~="not-prose"] *)) {
        margin-top: 1.1428571em;
    }

    .prose-sm :where(.prose-sm > ol > li > :last-child):not(:where([class~="not-prose"] *)) {
        margin-bottom: 1.1428571em;
    }

    .prose-sm :where(ul ul, ul ol, ol ul, ol ol):not(:where([class~="not-prose"] *)) {
        margin-top: 0.5714286em;
        margin-bottom: 0.5714286em;
    }

    .prose-sm :where(hr):not(:where([class~="not-prose"] *)) {
        margin-top: 2.8571429em;
        margin-bottom: 2.8571429em;
    }

    .prose-sm :where(hr + *):not(:where([class~="not-prose"] *)) {
        margin-top: 0;
    }

    .prose-sm :where(h2 + *):not(:where([class~="not-prose"] *)) {
        margin-top: 0;
    }

    .prose-sm :where(h3 + *):not(:where([class~="not-prose"] *)) {
        margin-top: 0;
    }

    .prose-sm :where(h4 + *):not(:where([class~="not-prose"] *)) {
        margin-top: 0;
    }

    .prose-sm :where(table):not(:where([class~="not-prose"] *)) {
        font-size: 0.8571429em;
        line-height: 1.5;
    }

    .prose-sm :where(thead th):not(:where([class~="not-prose"] *)) {
        padding-right: 1em;
        padding-bottom: 0.6666667em;
        padding-left: 1em;
    }

    .prose-sm :where(thead th:first-child):not(:where([class~="not-prose"] *)) {
        padding-left: 0;
    }

    .prose-sm :where(thead th:last-child):not(:where([class~="not-prose"] *)) {
        padding-right: 0;
    }

    .prose-sm :where(tbody td, tfoot td):not(:where([class~="not-prose"] *)) {
        padding: 0.6666667em 1em;
    }

    .prose-sm :where(tbody td:first-child, tfoot td:first-child):not(:where([class~="not-prose"] *)) {
        padding-left: 0;
    }

    .prose-sm :where(tbody td:last-child, tfoot td:last-child):not(:where([class~="not-prose"] *)) {
        padding-right: 0;
    }

    .prose-sm :where(.prose-sm > :first-child):not(:where([class~="not-prose"] *)) {
        margin-top: 0;
    }

    .prose-sm :where(.prose-sm > :last-child):not(:where([class~="not-prose"] *)) {
        margin-bottom: 0;
    }

    .container {
        max-width: none;
    }

    @media (min-width: 768px) {
        .container {
            max-width: 48rem;
        }
    }

    @media (min-width: 1024px) {
        .container {
            max-width: 64rem;
        }
    }

    @media (min-width: 1280px) {
        .container {
            max-width: 80rem;
        }
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border-width: 0;
    }

    .pointer-events-none {
        pointer-events: none;
    }

    .pointer-events-auto {
        pointer-events: auto;
    }

    .visible {
        visibility: visible;
    }

    .invisible {
        visibility: hidden;
    }

    .static {
        position: static;
    }

    .fixed {
        position: fixed;
    }

    .absolute {
        position: absolute;
    }

    .relative {
        position: relative;
    }

    .sticky {
        position: sticky;
    }

    .inset-0 {
        top: 0;
        bottom: 0;
    }

    .inset-0,
    .inset-x-0 {
        right: 0;
        left: 0;
    }

    .inset-y-0 {
        top: 0;
        bottom: 0;
    }

    .-bottom-10 {
        bottom: -2.5rem;
    }

    .-bottom-6 {
        bottom: -1.5rem;
    }

    .bottom-0 {
        bottom: 0;
    }

    .bottom-4 {
        bottom: 1rem;
    }

    .left-0 {
        left: 0;
    }

    .left-1\/2 {
        left: 50%;
    }

    .left-4 {
        left: 1rem;
    }

    .right-0 {
        right: 0;
    }

    .right-4 {
        right: 1rem;
    }

    .top-0 {
        top: 0;
    }

    .top-1\/2 {
        top: 50%;
    }

    .top-20 {
        top: 5rem;
    }

    .top-24 {
        top: 6rem;
    }

    .top-3 {
        top: 0.75rem;
    }

    .top-3\.5 {
        top: 0.875rem;
    }

    .top-4 {
        top: 1rem;
    }

    .-z-10 {
        z-index: -10;
    }

    .z-10 {
        z-index: 10;
    }

    .z-20 {
        z-index: 20;
    }

    .z-30 {
        z-index: 30;
    }

    .z-40 {
        z-index: 40;
    }

    .z-50 {
        z-index: 50;
    }

    .col-span-1 {
        grid-column: span 1 / span 1;
    }

    .col-span-2 {
        grid-column: span 2 / span 2;
    }

    .col-span-3 {
        grid-column: span 3 / span 3;
    }

    .col-span-5 {
        grid-column: span 5 / span 5;
    }

    .col-span-8 {
        grid-column: span 8 / span 8;
    }

    .col-span-full {
        grid-column: 1/-1;
    }

    .col-start-1 {
        grid-column-start: 1;
    }

    .row-span-3 {
        grid-row: span 3 / span 3;
    }

    .row-start-2 {
        grid-row-start: 2;
    }

    .-m-2 {
        margin: -0.5rem;
    }

    .-m-3 {
        margin: -0.75rem;
    }

    .-mx-4 {
        margin-left: -1rem;
        margin-right: -1rem;
    }

    .-my-6 {
        margin-top: -1.5rem;
        margin-bottom: -1.5rem;
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto;
    }

    .my-4 {
        margin-top: 1rem;
        margin-bottom: 1rem;
    }

    .my-8 {
        margin-top: 2rem;
        margin-bottom: 2rem;
    }

    .\!mt-0 {
        margin-top: 0 !important;
    }

    .-mb-14 {
        margin-bottom: -3.5rem;
    }

    .-mb-px {
        margin-bottom: -1px;
    }

    .-ml-1 {
        margin-left: -0.25rem;
    }

    .-ml-2 {
        margin-left: -0.5rem;
    }

    .-mr-1 {
        margin-right: -0.25rem;
    }

    .-mr-2 {
        margin-right: -0.5rem;
    }

    .-mt-16 {
        margin-top: -4rem;
    }

    .-mt-2 {
        margin-top: -0.5rem;
    }

    .-mt-4 {
        margin-top: -1rem;
    }

    .-mt-8 {
        margin-top: -2rem;
    }

    .-mt-\[60px\] {
        margin-top: -60px;
    }

    .mb-2 {
        margin-bottom: 0.5rem;
    }

    .mb-2\.5 {
        margin-bottom: 0.625rem;
    }

    .mb-3 {
        margin-bottom: 0.75rem;
    }

    .mb-4 {
        margin-bottom: 1rem;
    }

    .mb-6 {
        margin-bottom: 1.5rem;
    }

    .mb-8 {
        margin-bottom: 2rem;
    }

    .ml-2 {
        margin-left: 0.5rem;
    }

    .ml-3 {
        margin-left: 0.75rem;
    }

    .ml-4 {
        margin-left: 1rem;
    }

    .ml-6 {
        margin-left: 1.5rem;
    }

    .ml-8 {
        margin-left: 2rem;
    }

    .ml-auto {
        margin-left: auto;
    }

    .mr-1 {
        margin-right: 0.25rem;
    }

    .mr-3 {
        margin-right: 0.75rem;
    }

    .mt-0 {
        margin-top: 0;
    }

    .mt-0\.5 {
        margin-top: 0.125rem;
    }

    .mt-1 {
        margin-top: 0.25rem;
    }

    .mt-10 {
        margin-top: 2.5rem;
    }

    .mt-12 {
        margin-top: 3rem;
    }

    .mt-16 {
        margin-top: 4rem;
    }

    .mt-2 {
        margin-top: 0.5rem;
    }

    .mt-3 {
        margin-top: 0.75rem;
    }

    .mt-4 {
        margin-top: 1rem;
    }

    .mt-5 {
        margin-top: 1.25rem;
    }

    .mt-6 {
        margin-top: 1.5rem;
    }

    .mt-8 {
        margin-top: 2rem;
    }

    .mt-\[4\.25rem\] {
        margin-top: 4.25rem;
    }

    .block {
        display: block;
    }

    .inline-block {
        display: inline-block;
    }

   
   
    .inline-flex {
        display: inline-flex;
    }

    .\!table {
        display: table !important;
    }

    .table {
        display: table;
    }

    .table-cell {
        display: table-cell;
    }

    .flow-root {
        display: flow-root;
    }

    .grid {
        display: grid;
    }

    .contents {
        display: contents;
    }

    .hidden {
        display: none;
    }

    .aspect-\[1080\/424\] {
        aspect-ratio: 1080/424;
    }

    .aspect-\[4\/6\] {
        aspect-ratio: 4/6;
    }

    .aspect-\[6\/2\] {
        aspect-ratio: 6/2;
    }

    .aspect-square {
        aspect-ratio: 1/1;
    }

    .h-1 {
        height: 0.25rem;
    }

    .h-1\.5 {
        height: 0.375rem;
    }

    .h-10 {
        height: 2.5rem;
    }

    .h-12 {
        height: 3rem;
    }

    .h-14 {
        height: 3.5rem;
    }

    
    .h-2 {
        height: 0.5rem;
    }

    .h-2\.5 {
        height: 0.625rem;
    }

    .h-3 {
        height: 0.75rem;
    }

    .h-32 {
        height: 8rem;
    }

    .h-4 {
        height: 1rem;
    }

    .h-44 {
        height: 11rem;
    }

    .h-5 {
        height: 1.25rem;
    }

    .h-56 {
        height: 14rem;
    }

    .h-6 {
        height: 1.5rem;
    }

    .h-64 {
        height: 16rem;
    }

    .h-7 {
        height: 1.75rem;
    }

    .h-8 {
        height: 2rem;
    }

    .h-9 {
        height: 2.25rem;
    }

    .h-\[265px\] {
        height: 265px;
    }

    .h-\[30rem\] {
        height: 30rem;
    }

    .h-\[4\.25rem\] {
        height: 4.25rem;
    }

    .h-\[60px\] {
        height: 60px;
    }

    .h-full {
        height: 100%;
    }

    .h-px {
        height: 1px;
    }

    .h-screen {
        height: 100vh;
    }

    .max-h-0 {
        max-height: 0;
    }

    .max-h-80 {
        max-height: 20rem;
    }

    .max-h-screen {
        max-height: 100vh;
    }

    .min-h-full {
        min-height: 100%;
    }

    .min-h-screen {
        min-height: 100vh;
    }

    .w-0 {
        width: 0;
    }

    .w-1 {
        width: 0.25rem;
    }

    .w-1\.5 {
        width: 0.375rem;
    }

    .w-1\/2 {
        width: 50%;
    }

    .w-1\/4 {
        width: 25%;
    }

    .w-10 {
        width: 2.5rem;
    }

    .w-12 {
        width: 3rem;
    }

    .w-14 {
        width: 3.5rem;
    }

    .w-24 {
        width: 6rem;
    }

    .w-28 {
        width: 7rem;
    }

    .w-32 {
        width: 8rem;
    }

    .w-4 {
        width: 1rem;
    }

    .w-48 {
        width: 12rem;
    }

    .w-5 {
        width: 1.25rem;
    }

    .w-56 {
        width: 14rem;
    }

    .w-6 {
        width: 1.5rem;
    }

    .w-64 {
        width: 16rem;
    }

    .w-7 {
        width: 1.75rem;
    }

    .w-8 {
        width: 2rem;
    }

    .w-9 {
        width: 2.25rem;
    }

    .w-auto {
        width: auto;
    }



    .w-px {
        width: 1px;
    }

    .w-screen {
        width: 100vw;
    }

    .min-w-full {
        min-width: 100%;
    }

    .max-w-2xl {
        max-width: 42rem;
    }

    .max-w-3xl {
        max-width: 48rem;
    }

    .max-w-4xl {
        max-width: 56rem;
    }

    .max-w-\[172px\] {
        max-width: 172px;
    }

    .max-w-\[360px\] {
        max-width: 360px;
    }

    .max-w-\[calc\(100\%-50px\)\] {
        max-width: calc(100% - 50px);
    }

    .max-w-md {
        max-width: 28rem;
    }

    .max-w-xl {
        max-width: 36rem;
    }

    .max-w-xs {
        max-width: 20rem;
    }

    .flex-1 {
        flex: 1 1 0%;
    }

    .flex-auto {
        flex: 1 1 auto;
    }

    .flex-none {
        flex: none;
    }

    .flex-shrink-0 {
        flex-shrink: 0;
    }

    .grow {
        flex-grow: 1;
    }

    .origin-top-right {
        transform-origin: top right;
    }

    .-translate-x-1\/2 {
        --tw-translate-x: -50%;
    }

    .-translate-x-1\/2,
    .-translate-x-full {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .-translate-x-full {
        --tw-translate-x: -100%;
    }

    .translate-x-0 {
        --tw-translate-x: 0px;
    }

    .translate-x-0,
    .translate-y-0 {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .translate-y-0 {
        --tw-translate-y: 0px;
    }

    .translate-y-1 {
        --tw-translate-y: 0.25rem;
    }

    .translate-y-1,
    .translate-y-4 {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .translate-y-4 {
        --tw-translate-y: 1rem;
    }

    .rotate-180 {
        --tw-rotate: 180deg;
    }

    .rotate-180,
    .rotate-90 {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .rotate-90 {
        --tw-rotate: 90deg;
    }

    .scale-100 {
        --tw-scale-x: 1;
        --tw-scale-y: 1;
    }

    .scale-100,
    .scale-75 {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .scale-75 {
        --tw-scale-x: 0.75;
        --tw-scale-y: 0.75;
    }

    .scale-95 {
        --tw-scale-x: 0.95;
        --tw-scale-y: 0.95;
    }

    .scale-95,
    .transform {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    @keyframes  enter {
        0% {
            transform: scale(0.9);
            opacity: 0;
        }

        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    .animate-enter {
        animation: enter 0.2s ease-out;
    }

    @keyframes  leave {
        0% {
            transform: scale(1);
            opacity: 1;
        }

        to {
            transform: scale(0.9);
            opacity: 0;
        }
    }

    .animate-leave {
        animation: leave 0.15s ease-in forwards;
    }

    @keyframes  pulse {
        50% {
            opacity: 0.5;
        }
    }

    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    @keyframes  spin {
        to {
            transform: rotate(1turn);
        }
    }

    .animate-spin {
        animation: spin 1s linear infinite;
    }

    .\!cursor-pointer {
        cursor: pointer !important;
    }

    .cursor-default {
        cursor: default;
    }

    .cursor-pointer {
        cursor: pointer;
    }

    .select-none {
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    .scroll-py-2 {
        scroll-padding-top: 0.5rem;
        scroll-padding-bottom: 0.5rem;
    }

    .list-\[\'\2705\'\] {
        list-style-type: "✅";
    }

    .list-disc {
        list-style-type: disc;
    }

    .appearance-none {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr));
    }

    .grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }

    .grid-cols-8 {
        grid-template-columns: repeat(8, minmax(0, 1fr));
    }

    .flex-row-reverse {
        flex-direction: row-reverse;
    }

    .flex-col {
        flex-direction: column;
    }

    .flex-col-reverse {
        flex-direction: column-reverse;
    }

    .place-items-center {
        place-items: center;
    }

    .content-start {
        align-content: flex-start;
    }

    .items-start {
        align-items: flex-start;
    }

    .items-end {
        align-items: flex-end;
    }

    .items-center {
        align-items: center;
    }

    .justify-start {
        justify-content: flex-start;
    }

    .justify-end {
        justify-content: flex-end;
    }

    .justify-center {
        justify-content: center;
    }

    .justify-between {
        justify-content: space-between;
    }

    .gap-1 {
        gap: 0.25rem;
    }

    .gap-2 {
        gap: 0.5rem;
    }

    .gap-3 {
        gap: 0.75rem;
    }

    .gap-4 {
        gap: 1rem;
    }

    .gap-6 {
        gap: 1.5rem;
    }

    .gap-8 {
        gap: 2rem;
    }

    .gap-x-2 {
        -moz-column-gap: 0.5rem;
        column-gap: 0.5rem;
    }

    .gap-x-4 {
        -moz-column-gap: 1rem;
        column-gap: 1rem;
    }

    .gap-x-6 {
        -moz-column-gap: 1.5rem;
        column-gap: 1.5rem;
    }

    .gap-x-8 {
        -moz-column-gap: 2rem;
        column-gap: 2rem;
    }

    .gap-y-2 {
        row-gap: 0.5rem;
    }

    .gap-y-3 {
        row-gap: 0.75rem;
    }

    .gap-y-8 {
        row-gap: 2rem;
    }

    .-space-y-px> :not([hidden])~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(-1px * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(-1px * var(--tw-space-y-reverse));
    }

    .space-x-2> :not([hidden])~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(0.5rem * var(--tw-space-x-reverse));
        margin-left: calc(0.5rem * calc(1 - var(--tw-space-x-reverse)));
    }

    .space-x-3> :not([hidden])~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(0.75rem * var(--tw-space-x-reverse));
        margin-left: calc(0.75rem * calc(1 - var(--tw-space-x-reverse)));
    }

    .space-x-3\.5> :not([hidden])~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(0.875rem * var(--tw-space-x-reverse));
        margin-left: calc(0.875rem * calc(1 - var(--tw-space-x-reverse)));
    }

    .space-x-4> :not([hidden])~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(1rem * var(--tw-space-x-reverse));
        margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
    }

    .space-x-6> :not([hidden])~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(1.5rem * var(--tw-space-x-reverse));
        margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)));
    }

    .space-y-1> :not([hidden])~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(0.25rem * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(0.25rem * var(--tw-space-y-reverse));
    }

    .space-y-12> :not([hidden])~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(3rem * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(3rem * var(--tw-space-y-reverse));
    }

    .space-y-2> :not([hidden])~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
    }

    .space-y-3> :not([hidden])~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(0.75rem * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(0.75rem * var(--tw-space-y-reverse));
    }

    .space-y-4> :not([hidden])~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(1rem * var(--tw-space-y-reverse));
    }

    .space-y-6> :not([hidden])~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
    }

    .space-y-8> :not([hidden])~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(2rem * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(2rem * var(--tw-space-y-reverse));
    }

    .divide-x> :not([hidden])~ :not([hidden]) {
        --tw-divide-x-reverse: 0;
        border-right-width: calc(1px * var(--tw-divide-x-reverse));
        border-left-width: calc(1px * calc(1 - var(--tw-divide-x-reverse)));
    }

    .divide-y> :not([hidden])~ :not([hidden]) {
        --tw-divide-y-reverse: 0;
        border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)));
        border-bottom-width: calc(1px * var(--tw-divide-y-reverse));
    }

    .divide-gray-500> :not([hidden])~ :not([hidden]) {
        --tw-divide-opacity: 1;
        border-color: rgb(107 114 128 / var(--tw-divide-opacity));
    }

    .divide-murky-500> :not([hidden])~ :not([hidden]) {
        --tw-divide-opacity: 1;
        border-color: rgb(94 102 110 / var(--tw-divide-opacity));
    }

    .divide-murky-600> :not([hidden])~ :not([hidden]) {
        --tw-divide-opacity: 1;
        border-color: rgb(74 81 87 / var(--tw-divide-opacity));
    }

    .divide-murky-800> :not([hidden])~ :not([hidden]) {
        --tw-divide-opacity: 1;
        border-color: rgb(52 55 59 / var(--tw-divide-opacity));
    }

    .divide-opacity-10> :not([hidden])~ :not([hidden]) {
        --tw-divide-opacity: 0.1;
    }

    .overflow-auto {
        overflow: auto;
    }

    .overflow-hidden {
        overflow: hidden;
    }

    .overflow-x-auto {
        overflow-x: auto;
    }

    .overflow-y-auto {
        overflow-y: auto;
    }

    .truncate {
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .truncate,
    .whitespace-nowrap {
        white-space: nowrap;
    }

    .whitespace-pre {
        white-space: pre;
    }

    .break-words {
        overflow-wrap: break-word;
    }

    .\!rounded-md {
        border-radius: 0.375rem !important;
    }

    .rounded {
        border-radius: 0.25rem;
    }

    .rounded-2xl {
        border-radius: 1rem;
    }

    .rounded-3xl {
        border-radius: 1.5rem;
    }

    .rounded-full {
        border-radius: 9999px;
    }

    .rounded-lg {
        border-radius: 0.5rem;
    }

    .rounded-md {
        border-radius: 0.375rem;
    }

    .rounded-none {
        border-radius: 0;
    }

    .rounded-sm {
        border-radius: 0.125rem;
    }

    .rounded-xl {
        border-radius: 0.75rem;
    }

    .rounded-b-lg {
        border-bottom-right-radius: 0.5rem;
        border-bottom-left-radius: 0.5rem;
    }

    .rounded-b-md {
        border-bottom-right-radius: 0.375rem;
        border-bottom-left-radius: 0.375rem;
    }

    .rounded-r-lg {
        border-bottom-right-radius: 0.5rem;
    }

    .rounded-r-lg,
    .rounded-t-lg {
        border-top-right-radius: 0.5rem;
    }

    .rounded-t-lg {
        border-top-left-radius: 0.5rem;
    }

    .rounded-tl-xl {
        border-top-left-radius: 0.75rem;
    }

    .rounded-tr-xl {
        border-top-right-radius: 0.75rem;
    }

    .\!border-0 {
        border-width: 0 !important;
    }

    .border {
        border-width: 1px;
    }

    .border-0 {
        border-width: 0;
    }

    .border-y {
        border-top-width: 1px;
    }

    .border-b,
    .border-y {
        border-bottom-width: 1px;
    }

    .border-b-2 {
        border-bottom-width: 2px;
    }

    .border-l {
        border-left-width: 1px;
    }

    .border-l-4 {
        border-left-width: 4px;
    }

    .border-t {
        border-top-width: 1px;
    }

    .border-dashed {
        border-style: dashed;
    }

    .border-cyan-400 {
        --tw-border-opacity: 1;
        border-color: rgb(34 211 238 / var(--tw-border-opacity));
    }

    .border-murky-100 {
        --tw-border-opacity: 1;
        border-color: rgb(225 228 230 / var(--tw-border-opacity));
    }

    .border-murky-400 {
        --tw-border-opacity: 1;
        border-color: rgb(120 129 137 / var(--tw-border-opacity));
    }

    .border-murky-500 {
        --tw-border-opacity: 1;
        border-color: rgb(94 102 110 / var(--tw-border-opacity));
    }

    .border-murky-600 {
        --tw-border-opacity: 1;
        border-color: rgb(74 81 87 / var(--tw-border-opacity));
    }

    .border-murky-700 {
        --tw-border-opacity: 1;
        border-color: rgb(61 67 72 / var(--tw-border-opacity));
    }

    .border-murky-800 {
        --tw-border-opacity: 1;
        border-color: rgb(52 55 59 / var(--tw-border-opacity));
    }

    .border-primary-500 {
        --tw-border-opacity: 1;
        border-color: rgb(249 115 22 / var(--tw-border-opacity));
    }

    .border-transparent {
        border-color: transparent;
    }

    .border-yellow-300 {
        --tw-border-opacity: 1;
        border-color: rgb(253 224 71 / var(--tw-border-opacity));
    }

    .border-yellow-400 {
        --tw-border-opacity: 1;
        border-color: rgb(250 204 21 / var(--tw-border-opacity));
    }

    .\!bg-murky-200 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(195 201 204 / var(--tw-bg-opacity)) !important;
    }

    .\!bg-murky-700 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(61 67 72 / var(--tw-bg-opacity)) !important;
    }

    .bg-black\/25 {
        background-color: rgba(0, 0, 0, 0.25);
    }

    .bg-blue-400\/10 {
        background-color: rgba(96, 165, 250, 0.1);
    }

    .bg-blue-50 {
        --tw-bg-opacity: 1;
        background-color: rgb(239 246 255 / var(--tw-bg-opacity));
    }

    .bg-cyan-100 {
        --tw-bg-opacity: 1;
        background-color: rgb(207 250 254 / var(--tw-bg-opacity));
    }

    .bg-emerald-200 {
        --tw-bg-opacity: 1;
        background-color: rgb(167 243 208 / var(--tw-bg-opacity));
    }

    .bg-emerald-700 {
        --tw-bg-opacity: 1;
        background-color: rgb(4 120 87 / var(--tw-bg-opacity));
    }

    .bg-energy-yellow-400\/10 {
        background-color: rgba(243, 195, 44, 0.1);
    }

    .bg-gray-500 {
        --tw-bg-opacity: 1;
        background-color: rgb(107 114 128 / var(--tw-bg-opacity));
    }

    .bg-green-50 {
        --tw-bg-opacity: 1;
        background-color: rgb(240 253 244 / var(--tw-bg-opacity));
    }

    .bg-murky-200 {
        --tw-bg-opacity: 1;
        background-color: rgb(195 201 204 / var(--tw-bg-opacity));
    }

    .bg-murky-300 {
        --tw-bg-opacity: 1;
        background-color: rgb(157 165 171 / var(--tw-bg-opacity));
    }

    .bg-murky-400 {
        --tw-bg-opacity: 1;
        background-color: rgb(120 129 137 / var(--tw-bg-opacity));
    }

    .bg-murky-500 {
        --tw-bg-opacity: 1;
        background-color: rgb(94 102 110 / var(--tw-bg-opacity));
    }

    .bg-murky-500\/75 {
        background-color: rgba(94, 102, 110, 0.75);
    }

    .bg-murky-600 {
        --tw-bg-opacity: 1;
        background-color: rgb(74 81 87 / var(--tw-bg-opacity));
    }

    .bg-murky-700 {
        --tw-bg-opacity: 1;
        background-color: rgb(61 67 72 / var(--tw-bg-opacity));
    }

    .bg-murky-700\/75 {
        background-color: rgba(61, 67, 72, 0.75);
    }

    .bg-murky-800 {
        --tw-bg-opacity: 1;
        background-color: rgb(52 55 59 / var(--tw-bg-opacity));
    }

    .bg-murky-900 {
        --tw-bg-opacity: 1;
        background-color: rgb(30 32 34 / var(--tw-bg-opacity));
    }

    .bg-primary-100 {
        --tw-bg-opacity: 1;
        background-color: rgb(255 237 213 / var(--tw-bg-opacity));
    }

    .bg-primary-500 {
        --tw-bg-opacity: 1;
        background-color: rgb(249 115 22 / var(--tw-bg-opacity));
    }

    .bg-rose-300 {
        --tw-bg-opacity: 1;
        background-color: rgb(253 164 175 / var(--tw-bg-opacity));
    }

    .bg-rose-500 {
        --tw-bg-opacity: 1;
        background-color: rgb(244 63 94 / var(--tw-bg-opacity));
    }

    .bg-sky-600 {
        --tw-bg-opacity: 1;
        background-color: rgb(2 132 199 / var(--tw-bg-opacity));
    }

    .bg-slate-100 {
        --tw-bg-opacity: 1;
        background-color: rgb(241 245 249 / var(--tw-bg-opacity));
    }

    .bg-slate-400\/10 {
        background-color: rgba(148, 163, 184, 0.1);
    }

    .bg-transparent {
        background-color: transparent;
    }

    .bg-white {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity));
    }

    .bg-yellow-100 {
        --tw-bg-opacity: 1;
        background-color: rgb(254 249 195 / var(--tw-bg-opacity));
    }

    .bg-yellow-300 {
        --tw-bg-opacity: 1;
        background-color: rgb(253 224 71 / var(--tw-bg-opacity));
    }

    .bg-yellow-50 {
        --tw-bg-opacity: 1;
        background-color: rgb(254 252 232 / var(--tw-bg-opacity));
    }

    .bg-opacity-25 {
        --tw-bg-opacity: 0.25;
    }

    .bg-opacity-5 {
        --tw-bg-opacity: 0.05;
    }

    .bg-opacity-75 {
        --tw-bg-opacity: 0.75;
    }

    .bg-opacity-80 {
        --tw-bg-opacity: 0.8;
    }

    .bg-gradient-to-b {
        background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
    }

    .bg-gradient-to-r {
        background-image: linear-gradient(to right, var(--tw-gradient-stops));
    }

    .bg-gradient-to-t {
        background-image: linear-gradient(to top, var(--tw-gradient-stops));
    }

    .bg-gradient-to-tr {
        background-image: linear-gradient(to top right, var(--tw-gradient-stops));
    }

.games-bg {
    margin-top: 62px;
    height: 240px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

    
   .bg-emerald-500	{
    background-color: rgb(16 185 129);
    }
    .from-murky-400 {
        --tw-gradient-from: #788189;
        --tw-gradient-to: hsla(208, 7%, 50%, 0);
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .from-murky-700 {
        --tw-gradient-from: #3d4348;
        --tw-gradient-to: rgba(61, 67, 72, 0);
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .from-murky-800 {
        --tw-gradient-from: #34373b;
        --tw-gradient-to: rgba(52, 55, 59, 0);
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .from-primary-400 {
        --tw-gradient-from: #fb923c;
        --tw-gradient-to: rgba(251, 146, 60, 0);
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .from-primary-500 {
        --tw-gradient-from: #f97316;
        --tw-gradient-to: rgba(249, 115, 22, 0);
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .from-transparent {
        --tw-gradient-from: transparent;
        --tw-gradient-to: transparent;
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .via-murky-800\/75 {
        --tw-gradient-to: rgba(52, 55, 59, 0);
        --tw-gradient-stops: var(--tw-gradient-from), rgba(52, 55, 59, 0.75), var(--tw-gradient-to);
    }

    .to-murky-600 {
        --tw-gradient-to: #4a5157;
    }

    .to-murky-800 {
        --tw-gradient-to: #34373b;
    }

    .to-murky-800\/75 {
        --tw-gradient-to: rgba(52, 55, 59, 0.75);
    }

    .to-primary-600 {
        --tw-gradient-to: #ea580c;
    }

    .to-transparent {
        --tw-gradient-to: transparent;
    }

    .object-contain {
        -o-object-fit: contain;
        object-fit: contain;
    }

    .object-cover {
        -o-object-fit: cover;
        object-fit: cover;
    }

    .object-scale-down {
        -o-object-fit: scale-down;
        object-fit: scale-down;
    }

    .object-center {
        -o-object-position: center;
        object-position: center;
    }

    .object-right {
        -o-object-position: right;
        object-position: right;
    }

    .\!p-2 {
        padding: 0.5rem !important;
    }

    .p-1 {
        padding: 0.25rem;
    }

    .p-1\.5 {
        padding: 0.375rem;
    }

    .p-2 {
        padding: 0.5rem;
    }

    .p-2\.5 {
        padding: 0.625rem;
    }

    .p-3 {
        padding: 0.75rem;
    }

    .p-4 {
        padding: 1rem;
    }

    .p-6 {
        padding: 1.5rem;
    }

    .p-8 {
        padding: 2rem;
    }

    .px-0 {
        padding-left: 0;
        padding-right: 0;
    }

    .px-2 {
        padding-left: 0.5rem;
        padding-right: 0.5rem;
    }

    .px-2\.5 {
        padding-left: 0.625rem;
        padding-right: 0.625rem;
    }

    .px-3 {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
    }

    .px-3\.5 {
        padding-left: 0.875rem;
        padding-right: 0.875rem;
    }

    .px-4 {
        padding-left: 1rem;
        padding-right: 1rem;
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }

    .px-8 {
        padding-left: 2rem;
        padding-right: 2rem;
    }

    .py-0 {
        padding-top: 0;
        padding-bottom: 0;
    }

    .py-0\.5 {
        padding-top: 0.125rem;
        padding-bottom: 0.125rem;
    }

    .py-1 {
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
    }

    .py-1\.5 {
        padding-top: 0.375rem;
        padding-bottom: 0.375rem;
    }

    .py-12 {
        padding-top: 3rem;
        padding-bottom: 3rem;
    }

    .py-14 {
        padding-top: 3.5rem;
        padding-bottom: 3.5rem;
    }

    .py-16 {
        padding-top: 4rem;
        padding-bottom: 4rem;
    }

    .py-2 {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }

    .py-2\.5 {
        padding-top: 0.625rem;
        padding-bottom: 0.625rem;
    }

    .py-20 {
        padding-top: 5rem;
        padding-bottom: 5rem;
    }

    .py-24 {
        padding-top: 6rem;
        padding-bottom: 6rem;
    }

    .py-3 {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
    }

    .py-3\.5 {
        padding-top: 0.875rem;
        padding-bottom: 0.875rem;
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .py-6 {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .py-8 {
        padding-top: 2rem;
        padding-bottom: 2rem;
    }

    .\!pl-3 {
        padding-left: 0.75rem !important;
    }

    .\!pr-4 {
        padding-right: 1rem !important;
    }

    .pb-0 {
        padding-bottom: 0;
    }

    .pb-0\.5 {
        padding-bottom: 0.125rem;
    }

    .pb-1 {
        padding-bottom: 0.25rem;
    }

    .pb-12 {
        padding-bottom: 3rem;
    }

    .pb-16 {
        padding-bottom: 4rem;
    }

    .pb-2 {
        padding-bottom: 0.5rem;
    }

    .pb-24 {
        padding-bottom: 6rem;
    }

    .pb-4 {
        padding-bottom: 1rem;
    }

    .pb-48 {
        padding-bottom: 12rem;
    }

    .pb-6 {
        padding-bottom: 1.5rem;
    }

    .pb-8 {
        padding-bottom: 2rem;
    }

    .pl-1 {
        padding-left: 0.25rem;
    }

    .pl-11 {
        padding-left: 2.75rem;
    }

    .pl-3 {
        padding-left: 0.75rem;
    }

    .pl-4 {
        padding-left: 1rem;
    }

    .pr-3 {
        padding-right: 0.75rem;
    }

    .pr-4 {
        padding-right: 1rem;
    }

    .pt-0 {
        padding-top: 0;
    }

    .pt-0\.5 {
        padding-top: 0.125rem;
    }

    .pt-1 {
        padding-top: 0.25rem;
    }

    .pt-12 {
        padding-top: 3rem;
    }

    .pt-16 {
        padding-top: 4rem;
    }

    .pt-2 {
        padding-top: 0.5rem;
    }

    .pt-24 {
        padding-top: 6rem;
    }

    .pt-4 {
        padding-top: 1rem;
    }

    .pt-5 {
        padding-top: 1.25rem;
    }

    .pt-6 {
        padding-top: 1.5rem;
    }

    .pt-8 {
        padding-top: 2rem;
    }

    .pt-px {
        padding-top: 1px;
    }

    .text-left {
        text-align: left;
    }

    .text-center {
        text-align: center;
    }

    .text-right {
        text-align: right;
    }

    .font-sans {
        font-family: var(--font-primary), ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, segoe ui, Roboto, helvetica neue, Arial, noto sans, sans-serif, apple color emoji, segoe ui emoji, segoe ui symbol, noto color emoji;
    }

    .\!text-sm {
        font-size: 0.875rem !important;
        line-height: 1.25rem !important;
    }

    .\!text-xs {
        font-size: 0.75rem !important;
        line-height: 1rem !important;
    }

    .text-2xl {
        font-size: 1.5rem;
        line-height: 2rem;
    }

    .text-3xl {
        font-size: 1.875rem;
        line-height: 2.25rem;
    }

    .text-4xl {
        font-size: 2.25rem;
        line-height: 2.5rem;
    }

    .text-\[10px\] {
        font-size: 10px;
    }

    .text-\[24px\] {
        font-size: 24px;
    }

    .text-base {
        font-size: 1rem;
        line-height: 1.5rem;
    }

    .text-lg {
        font-size: 1.125rem;
        line-height: 1.75rem;
    }

    .text-sm {
        font-size: 0.875rem;
        line-height: 1.25rem;
    }

    .text-xl {
        font-size: 1.25rem;
        line-height: 1.75rem;
    }

    .text-xs {
        font-size: 0.75rem;
        line-height: 1rem;
    }

    .text-xxs {
        font-size: 0.625rem;
    }

    .font-bold {
        font-weight: 700;
    }

    .font-medium {
        font-weight: 500;
    }

    .font-semibold {
        font-weight: 600;
    }

    .uppercase {
        text-transform: uppercase;
    }

    .capitalize {
        text-transform: capitalize;
    }

    .italic {
        font-style: italic;
    }

    .leading-5 {
        line-height: 1.25rem;
    }

    .leading-6 {
        line-height: 1.5rem;
    }

    .leading-7 {
        line-height: 1.75rem;
    }

    .leading-8 {
        line-height: 2rem;
    }

    .leading-relaxed {
        line-height: 1.625;
    }

    .tracking-tight {
        letter-spacing: -0.025em;
    }

    .tracking-wider {
        letter-spacing: 0.05em;
    }

    .\!text-murky-800 {
        --tw-text-opacity: 1 !important;
        color: rgb(52 55 59 / var(--tw-text-opacity)) !important;
    }

    .\!text-primary-500 {
        --tw-text-opacity: 1 !important;
        color: rgb(249 115 22 / var(--tw-text-opacity)) !important;
    }

    .text-blue-400 {
        --tw-text-opacity: 1;
        color: rgb(96 165 250 / var(--tw-text-opacity));
    }

    .text-blue-700 {
        --tw-text-opacity: 1;
        color: rgb(29 78 216 / var(--tw-text-opacity));
    }

    .text-cyan-500 {
        --tw-text-opacity: 1;
        color: rgb(6 182 212 / var(--tw-text-opacity));
    }

    .text-cyan-900 {
        --tw-text-opacity: 1;
        color: rgb(22 78 99 / var(--tw-text-opacity));
    }

    .text-emerald-400 {
        --tw-text-opacity: 1;
        color: rgb(52 211 153 / var(--tw-text-opacity));
    }

    .text-emerald-500 {
        --tw-text-opacity: 1;
        color: rgb(16 185 129 / var(--tw-text-opacity));
    }

    .text-emerald-900 {
        --tw-text-opacity: 1;
        color: rgb(6 78 59 / var(--tw-text-opacity));
    }

    .text-energy-yellow-300 {
        --tw-text-opacity: 1;
        color: rgb(246 215 89 / var(--tw-text-opacity));
    }

    .text-energy-yellow-400 {
        --tw-text-opacity: 1;
        color: rgb(243 195 44 / var(--tw-text-opacity));
    }

    .text-energy-yellow-500 {
        --tw-text-opacity: 1;
        color: rgb(237 164 19 / var(--tw-text-opacity));
    }

    .text-gray-300 {
        --tw-text-opacity: 1;
        color: rgb(209 213 219 / var(--tw-text-opacity));
    }

    .text-gray-500 {
        --tw-text-opacity: 1;
        color: rgb(107 114 128 / var(--tw-text-opacity));
    }

    .text-green-400 {
        --tw-text-opacity: 1;
        color: rgb(74 222 128 / var(--tw-text-opacity));
    }

    .text-green-500 {
        --tw-text-opacity: 1;
        color: rgb(34 197 94 / var(--tw-text-opacity));
    }

    .text-green-800 {
        --tw-text-opacity: 1;
        color: rgb(22 101 52 / var(--tw-text-opacity));
    }

    .text-murky-100 {
        --tw-text-opacity: 1;
        color: rgb(225 228 230 / var(--tw-text-opacity));
    }

    .text-murky-200 {
        --tw-text-opacity: 1;
        color: rgb(195 201 204 / var(--tw-text-opacity));
    }

    .text-murky-300 {
        --tw-text-opacity: 1;
        color: rgb(157 165 171 / var(--tw-text-opacity));
    }

    .text-murky-400 {
        --tw-text-opacity: 1;
        color: rgb(120 129 137 / var(--tw-text-opacity));
    }

    .text-murky-500 {
        --tw-text-opacity: 1;
        color: rgb(94 102 110 / var(--tw-text-opacity));
    }

    .text-murky-600 {
        --tw-text-opacity: 1;
        color: rgb(74 81 87 / var(--tw-text-opacity));
    }

    .text-murky-700 {
        --tw-text-opacity: 1;
        color: rgb(61 67 72 / var(--tw-text-opacity));
    }

    .text-murky-800 {
        --tw-text-opacity: 1;
        color: rgb(52 55 59 / var(--tw-text-opacity));
    }

    .text-murky-900 {
        --tw-text-opacity: 1;
        color: rgb(30 32 34 / var(--tw-text-opacity));
    }

    .text-primary-500 {
        --tw-text-opacity: 1;
        color: rgb(249 115 22 / var(--tw-text-opacity));
    }

    .text-primary-600 {
        --tw-text-opacity: 1;
        color: rgb(234 88 12 / var(--tw-text-opacity));
    }

    .text-red-500 {
        --tw-text-opacity: 1;
        color: rgb(239 68 68 / var(--tw-text-opacity));
    }

    .text-rose-500 {
        --tw-text-opacity: 1;
        color: rgb(244 63 94 / var(--tw-text-opacity));
    }

    .text-rose-800 {
        --tw-text-opacity: 1;
        color: rgb(159 18 57 / var(--tw-text-opacity));
    }

    .text-slate-400 {
        --tw-text-opacity: 1;
        color: rgb(148 163 184 / var(--tw-text-opacity));
    }

    .text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
    }

    .text-white\/50 {
        color: hsla(0, 0%, 100%, 0.5);
    }

    .text-yellow-400 {
        --tw-text-opacity: 1;
        color: rgb(250 204 21 / var(--tw-text-opacity));
    }

    .text-yellow-500 {
        --tw-text-opacity: 1;
        color: rgb(234 179 8 / var(--tw-text-opacity));
    }

    .text-yellow-700 {
        --tw-text-opacity: 1;
        color: rgb(161 98 7 / var(--tw-text-opacity));
    }

    .text-yellow-800 {
        --tw-text-opacity: 1;
        color: rgb(133 77 14 / var(--tw-text-opacity));
    }

    .text-opacity-40 {
        --tw-text-opacity: 0.4;
    }

    .underline {
        text-decoration-line: underline;
    }

    .decoration-primary-500 {
        text-decoration-color: #f97316;
    }

    .underline-offset-2 {
        text-underline-offset: 2px;
    }

    .antialiased {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .\!placeholder-murky-800::-moz-placeholder {
        --tw-placeholder-opacity: 1 !important;
        color: rgb(52 55 59 / var(--tw-placeholder-opacity)) !important;
    }

    .\!placeholder-murky-800::placeholder {
        --tw-placeholder-opacity: 1 !important;
        color: rgb(52 55 59 / var(--tw-placeholder-opacity)) !important;
    }

    .placeholder-murky-200::-moz-placeholder {
        --tw-placeholder-opacity: 1;
        color: rgb(195 201 204 / var(--tw-placeholder-opacity));
    }

    .placeholder-murky-200::placeholder {
        --tw-placeholder-opacity: 1;
        color: rgb(195 201 204 / var(--tw-placeholder-opacity));
    }

    .accent-murky-800 {
        accent-color: #34373b;
    }

    .accent-primary-500 {
        accent-color: #f97316;
    }

    .opacity-0 {
        opacity: 0;
    }

    .opacity-100 {
        opacity: 1;
    }

    .opacity-25 {
        opacity: 0.25;
    }

    .opacity-50 {
        opacity: 0.5;
    }

    .opacity-75 {
        opacity: 0.75;
    }

    .shadow {
        --tw-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px -1px rgba(0, 0, 0, 0.1);
        --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
    }

    .shadow,
    .shadow-2xl {
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .shadow-2xl {
        --tw-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
    }

    .shadow-lg {
        --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1);
        --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
    }

    .shadow-lg,
    .shadow-sm {
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .shadow-sm {
        --tw-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
    }

    .shadow-xl {
        --tw-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
        --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .outline-none {
        outline: 2px solid transparent;
        outline-offset: 2px;
    }

    .outline {
        outline-style: solid;
    }

    .\!ring-0 {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color) !important;
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) !important;
    }

    .ring-1 {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    }

    .ring-1,
    .ring-2 {
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
    }

    .ring-2 {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    }

    .ring-inset {
        --tw-ring-inset: inset;
    }

    .ring-black {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity));
    }

    .ring-blue-400\/30 {
        --tw-ring-color: rgba(96, 165, 250, 0.3);
    }

    .ring-energy-yellow-400\/20 {
        --tw-ring-color: rgba(243, 195, 44, 0.2);
    }

    .ring-murky-200 {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(195 201 204 / var(--tw-ring-opacity));
    }

    .ring-murky-500 {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(94 102 110 / var(--tw-ring-opacity));
    }

    .ring-murky-600 {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(74 81 87 / var(--tw-ring-opacity));
    }

    .ring-murky-900\/5 {
        --tw-ring-color: rgba(30, 32, 34, 0.05);
    }

    .ring-primary-500 {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity));
    }

    .ring-slate-400\/20 {
        --tw-ring-color: rgba(148, 163, 184, 0.2);
    }

    .ring-transparent {
        --tw-ring-color: transparent;
    }

    .ring-opacity-5 {
        --tw-ring-opacity: 0.05;
    }

    .blur {
        --tw-blur: blur(8px);
    }

    .blur,
    .grayscale {
        filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
    }

    .grayscale {
        --tw-grayscale: grayscale(100%);
    }

    .filter {
        filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
    }

    .backdrop-blur {
        --tw-backdrop-blur: blur(8px);
    }

    .backdrop-blur,
    .backdrop-blur-sm {
        -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
        backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
    }

    .backdrop-blur-sm {
        --tw-backdrop-blur: blur(4px);
    }

    .backdrop-filter {
        -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
        backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
    }

    .transition {
        transition-property: color, background-color, border-color, outline-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
        transition-property: color, background-color, border-color, outline-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
        transition-property: color, background-color, border-color, outline-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 0.15s;
    }

    .transition-\[max-height\] {
        transition-property: max-height;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 0.15s;
    }

    .transition-all {
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 0.15s;
    }

    .transition-colors {
        transition-property: color, background-color, border-color, outline-color, text-decoration-color, fill, stroke;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 0.15s;
    }

    .transition-opacity {
        transition-property: opacity;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 0.15s;
    }

    .delay-150 {
        transition-delay: 0.15s;
    }

    .duration-100 {
        transition-duration: 0.1s;
    }

    .duration-150 {
        transition-duration: 0.15s;
    }

    .duration-200 {
        transition-duration: 0.2s;
    }

    .duration-300 {
        transition-duration: 0.3s;
    }

    .duration-700 {
        transition-duration: 0.7s;
    }

    .duration-75 {
        transition-duration: 75ms;
    }

    .ease-in {
        transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
    }

    .ease-in-out {
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    }

    .ease-linear {
        transition-timing-function: linear;
    }

    .ease-out {
        transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
    }

    .bj-shadow {
        --tw-shadow: 0px 0px 14px 4px hsla(0, 0%, 82%, 0.4);
        --tw-shadow-colored: 0px 0px 14px 4px var(--tw-shadow-color);
    }

    .bj-shadow,
    .btn-order {
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .btn-order {
        --tw-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
    }

    .btn-order:after {
        --tw-skew-x: -12deg;
        animation: hightlight 5s ease-in infinite forwards;
        background: linear-gradient(270deg, transparent, #03e9f4);
        --tw-content: "";
        content: var(--tw-content);
    }

    .btn-order:after,
    .selected-item:after {
        position: absolute;
        top: 0;
        z-index: 10;
        display: block;
        height: 100%;
        width: 1em;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .selected-item:after {
        --tw-skew-x: -12deg;
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
    
    

    .placeholder\:text-xs::placeholder {
        font-size: 0.75rem;
        line-height: 1rem;
    }

    .placeholder\:text-murky-400::-moz-placeholder {
        --tw-text-opacity: 1;
        color: rgb(120 129 137 / var(--tw-text-opacity));
    }

    .placeholder\:text-murky-400::placeholder {
        --tw-text-opacity: 1;
        color: rgb(120 129 137 / var(--tw-text-opacity));
    }

    .first\:table-cell:first-child {
        display: table-cell;
    }

    .first\:pl-4:first-child {
        padding-left: 1rem;
    }

    .first\:pr-4:first-child {
        padding-right: 1rem;
    }

    .first\:text-left:first-child {
        text-align: left;
    }

    .last\:relative:last-child {
        position: relative;
    }

    .last\:table-cell:last-child {
        display: table-cell;
    }

    .last\:text-right:last-child {
        text-align: right;
    }

    .hover\:border-primary-500:hover {
        --tw-border-opacity: 1;
        border-color: rgb(249 115 22 / var(--tw-border-opacity));
    }

    .hover\:\!bg-murky-600:hover {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(74 81 87 / var(--tw-bg-opacity)) !important;
    }

    .hover\:\!bg-murky-800:hover {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(52 55 59 / var(--tw-bg-opacity)) !important;
    }

    .hover\:bg-murky-50:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(246 246 247 / var(--tw-bg-opacity));
    }

    .hover\:bg-murky-500:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(94 102 110 / var(--tw-bg-opacity));
    }

    .hover\:bg-murky-600:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(74 81 87 / var(--tw-bg-opacity));
    }

    .hover\:bg-murky-700:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(61 67 72 / var(--tw-bg-opacity));
    }

    .hover\:bg-murky-800:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(52 55 59 / var(--tw-bg-opacity));
    }

    .hover\:bg-orange-400:hover,
    .hover\:bg-primary-400:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(251 146 60 / var(--tw-bg-opacity));
    }

    .hover\:bg-primary-600:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(234 88 12 / var(--tw-bg-opacity));
    }

    .hover\:from-murky-700:hover {
        --tw-gradient-from: #3d4348;
        --tw-gradient-to: rgba(61, 67, 72, 0);
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .hover\:text-murky-500:hover {
        --tw-text-opacity: 1;
        color: rgb(94 102 110 / var(--tw-text-opacity));
    }

    .hover\:text-murky-800:hover {
        --tw-text-opacity: 1;
        color: rgb(52 55 59 / var(--tw-text-opacity));
    }

    .hover\:text-primary-200:hover {
        --tw-text-opacity: 1;
        color: rgb(254 215 170 / var(--tw-text-opacity));
    }

    .hover\:text-primary-300:hover {
        --tw-text-opacity: 1;
        color: rgb(253 186 116 / var(--tw-text-opacity));
    }

    .hover\:text-primary-400:hover {
        --tw-text-opacity: 1;
        color: rgb(251 146 60 / var(--tw-text-opacity));
    }

    .hover\:shadow-2xl:hover {
        --tw-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .hover\:ring-2:hover {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
    }

    .hover\:ring-primary-500:hover {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity));
    }

    .hover\:ring-offset-2:hover {
        --tw-ring-offset-width: 2px;
    }

    .hover\:ring-offset-murky-800:hover {
        --tw-ring-offset-color: #34373b;
    }

    .focus\:z-10:focus {
        z-index: 10;
    }

    .focus\:\!border-transparent:focus {
        border-color: transparent !important;
    }

    .focus\:border-primary-500:focus {
        --tw-border-opacity: 1;
        border-color: rgb(249 115 22 / var(--tw-border-opacity));
    }

    .focus\:\!bg-white:focus {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
    }

    .focus\:outline-none:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
    }

    .focus\:ring-0:focus {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    }

    .focus\:ring-0:focus,
    .focus\:ring-2:focus {
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
    }

    .focus\:ring-2:focus {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    }

    .focus\:ring-inset:focus {
        --tw-ring-inset: inset;
    }

    .focus\:\!ring-transparent:focus {
        --tw-ring-color: transparent !important;
    }

    .focus\:ring-primary-400:focus {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(251 146 60 / var(--tw-ring-opacity));
    }

    .focus\:ring-primary-500:focus {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity));
    }

    .focus\:ring-offset-2:focus {
        --tw-ring-offset-width: 2px;
    }

    .focus\:ring-offset-murky-900:focus {
        --tw-ring-offset-color: #1e2022;
    }

    .focus-visible\:outline-offset-0.focus-visible.js-focus-visible,
    .js-focus-visible .focus-visible\:outline-offset-0.focus-visible {
        outline-offset: 0;
    }

    .focus-visible\:outline-offset-0:focus-visible {
        outline-offset: 0;
    }

    .focus-visible\:ring-2.focus-visible.js-focus-visible,
    .js-focus-visible .focus-visible\:ring-2.focus-visible {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
    }

    .focus-visible\:ring-2:focus-visible {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
    }

    .focus-visible\:ring-primary-500.focus-visible.js-focus-visible,
    .js-focus-visible .focus-visible\:ring-primary-500.focus-visible {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity));
    }

    .focus-visible\:ring-primary-500:focus-visible {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(249 115 22 / var(--tw-ring-opacity));
    }

    .disabled\:cursor-not-allowed:disabled {
        cursor: not-allowed;
    }

    .disabled\:opacity-75:disabled {
        opacity: 0.75;
    }

    .group:hover .group-hover\:bottom-3 {
        bottom: 0.75rem;
    }

    .group:hover .group-hover\:block {
        display: block;
    }

    .group:hover .group-hover\:from-murky-900 {
        --tw-gradient-from: #1e2022;
        --tw-gradient-to: rgba(30, 32, 34, 0);
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .group:hover .group-hover\:text-murky-500 {
        --tw-text-opacity: 1;
        color: rgb(94 102 110 / var(--tw-text-opacity));
    }

    .group:hover .group-hover\:text-murky-700 {
        --tw-text-opacity: 1;
        color: rgb(61 67 72 / var(--tw-text-opacity));
    }

    .group:hover .group-hover\:text-primary-500 {
        --tw-text-opacity: 1;
        color: rgb(249 115 22 / var(--tw-text-opacity));
    }

    @media  print {
        .print\:mt-0 {
            margin-top: 0;
        }

        .print\:mt-2 {
            margin-top: 0.5rem;
        }

        .print\:block {
            display: block;
        }

        .print\:hidden {
            display: none;
        }

        .print\:flex-row {
            flex-direction: row;
        }

        .print\:items-start {
            align-items: flex-start;
        }

        .print\:gap-0 {
            gap: 0;
        }

        .print\:border-slate-200 {
            --tw-border-opacity: 1;
            border-color: rgb(226 232 240 / var(--tw-border-opacity));
        }

        .print\:p-0 {
            padding: 0;
        }

        .print\:py-8 {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .print\:pt-0 {
            padding-top: 0;
        }

        .print\:text-left {
            text-align: left;
        }

        .print\:text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem;
        }

        .print\:\!text-slate-800 {
            --tw-text-opacity: 1 !important;
            color: rgb(30 41 59 / var(--tw-text-opacity)) !important;
        }

        .print\:text-slate-800 {
            --tw-text-opacity: 1;
            color: rgb(30 41 59 / var(--tw-text-opacity));
        }
    }

    @media (min-width: 640px) {
        .sm\:col-span-7 {
            grid-column: span 7 / span 7;
        }

        .sm\:col-start-1 {
            grid-column-start: 1;
        }

        .sm\:col-start-2 {
            grid-column-start: 2;
        }

        .sm\:-mx-4 {
            margin-left: -1rem;
            margin-right: -1rem;
        }

        .sm\:mx-0 {
            margin-left: 0;
            margin-right: 0;
        }

        .sm\:my-8 {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .sm\:ml-3 {
            margin-left: 0.75rem;
        }

        .sm\:ml-4 {
            margin-left: 1rem;
        }

        .sm\:mt-0 {
            margin-top: 0;
        }

        .sm\:mt-20 {
            margin-top: 5rem;
        }

        .sm\:mt-4 {
            margin-top: 1rem;
        }

        .sm\:mt-5 {
            margin-top: 1.25rem;
        }

        .sm\:mt-6 {
            margin-top: 1.5rem;
        }

        .sm\:block {
            display: block;
        }

        .sm\:inline-block {
            display: inline-block;
        }

        .sm\:flex {
            display: flex;
        }

        .sm\:grid {
            display: grid;
        }

        .sm\:h-10 {
            height: 2.5rem;
        }

        .sm\:h-56 {
            height: 14rem;
        }

        .sm\:w-10 {
            width: 2.5rem;
        }

        .sm\:w-56 {
            width: 14rem;
        }

        .sm\:w-auto {
            width: auto;
        }

        .sm\:w-full {
            width: 100%;
        }

        .sm\:max-w-2xl {
            max-width: 42rem;
        }

        .sm\:max-w-3xl {
            max-width: 48rem;
        }

        .sm\:max-w-4xl {
            max-width: 56rem;
        }

        .sm\:max-w-5xl {
            max-width: 64rem;
        }

        .sm\:max-w-6xl {
            max-width: 72rem;
        }

        .sm\:max-w-7xl {
            max-width: 80rem;
        }

        .sm\:max-w-lg {
            max-width: 32rem;
        }

        .sm\:max-w-md {
            max-width: 28rem;
        }

        .sm\:max-w-sm {
            max-width: 24rem;
        }

        .sm\:max-w-xl {
            max-width: 36rem;
        }

        .sm\:flex-auto {
            flex: 1 1 auto;
        }

        .sm\:translate-y-0 {
            --tw-translate-y: 0px;
        }

        .sm\:scale-100,
        .sm\:translate-y-0 {
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .sm\:scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
        }

        .sm\:scale-95 {
            --tw-scale-x: 0.95;
            --tw-scale-y: 0.95;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .sm\:columns-2 {
            -moz-columns: 2;
            column-count: 2;
        }

        .sm\:grid-flow-row-dense {
            grid-auto-flow: row dense;
        }

        .sm\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .sm\:grid-cols-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .sm\:grid-cols-4 {
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }

        .sm\:flex-row {
            flex-direction: row;
        }

        .sm\:flex-row-reverse {
            flex-direction: row-reverse;
        }

        .sm\:items-start {
            align-items: flex-start;
        }

        .sm\:items-center {
            align-items: center;
        }

        .sm\:justify-end {
            justify-content: flex-end;
        }

        .sm\:gap-3 {
            gap: 0.75rem;
        }

        .sm\:gap-8 {
            gap: 2rem;
        }

        .sm\:gap-x-6 {
            -moz-column-gap: 1.5rem;
            column-gap: 1.5rem;
        }

        .sm\:gap-y-8 {
            row-gap: 2rem;
        }

        .sm\:space-x-8> :not([hidden])~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(2rem * var(--tw-space-x-reverse));
            margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .sm\:rounded-lg {
            border-radius: 0.5rem;
        }

        .sm\:to-transparent {
            --tw-gradient-to: transparent;
        }

        .sm\:object-center {
            -o-object-position: center;
            object-position: center;
        }

        .sm\:p-0 {
            padding: 0;
        }

        .sm\:p-6 {
            padding: 1.5rem;
        }

        .sm\:px-0 {
            padding-left: 0;
            padding-right: 0;
        }

        .sm\:px-14 {
            padding-left: 3.5rem;
            padding-right: 3.5rem;
        }

        .sm\:px-32 {
            padding-left: 8rem;
            padding-right: 8rem;
        }

        .sm\:px-4 {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .sm\:py-20 {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        .sm\:py-24 {
            padding-top: 6rem;
            padding-bottom: 6rem;
        }

        .sm\:py-32 {
            padding-top: 8rem;
            padding-bottom: 8rem;
        }

        .sm\:py-64 {
            padding-top: 16rem;
            padding-bottom: 16rem;
        }

        .sm\:pb-12 {
            padding-bottom: 3rem;
        }

        .sm\:pb-24 {
            padding-bottom: 6rem;
        }

        .sm\:pb-4 {
            padding-bottom: 1rem;
        }

        .sm\:pb-6 {
            padding-bottom: 1.5rem;
        }

        .sm\:pl-6 {
            padding-left: 1.5rem;
        }

        .sm\:pt-0 {
            padding-top: 0;
        }

        .sm\:pt-12 {
            padding-top: 3rem;
        }

        .sm\:pt-16 {
            padding-top: 4rem;
        }

        .sm\:text-left {
            text-align: left;
        }

        .sm\:text-2xl {
            font-size: 1.5rem;
            line-height: 2rem;
        }

        .sm\:text-3xl {
            font-size: 1.875rem;
            line-height: 2.25rem;
        }

        .sm\:text-4xl {
            font-size: 2.25rem;
            line-height: 2.5rem;
        }

        .sm\:text-5xl {
            font-size: 3rem;
            line-height: 1;
        }

        .sm\:text-\[0\] {
            font-size: 0;
        }

        .sm\:text-base {
            font-size: 1rem;
            line-height: 1.5rem;
        }

        .sm\:text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem;
        }

        .sm\:text-xs {
            font-size: 0.75rem;
            line-height: 1rem;
        }

        .sm\:leading-6 {
            line-height: 1.5rem;
        }

        .sm\:first\:pl-6:first-child {
            padding-left: 1.5rem;
        }

        .sm\:last\:pr-6:last-child {
            padding-right: 1.5rem;
        }

        .group:hover .group-hover\:sm\:bottom-4 {
            bottom: 1rem;
        }
    }

    @media (min-width: 768px) {
        .md\:static {
            position: static;
        }

        .md\:col-span-1 {
            grid-column: span 1 / span 1;
        }

        .md\:col-span-2 {
            grid-column: span 2 / span 2;
        }

        .md\:col-span-4 {
            grid-column: span 4 / span 4;
        }

        .md\:col-span-7 {
            grid-column: span 7 / span 7;
        }

        .md\:col-start-3 {
            grid-column-start: 3;
        }

        .md\:col-start-4 {
            grid-column-start: 4;
        }

        .md\:mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .md\:-mb-20 {
            margin-bottom: -5rem;
        }

        .md\:-mt-24 {
            margin-top: -6rem;
        }

        .md\:-mt-8 {
            margin-top: -2rem;
        }

        .md\:mt-0 {
            margin-top: 0;
        }

        .md\:block {
            display: block;
        }

        .md\:flex {
            display: flex;
        }

        .md\:grid {
            display: grid;
        }

        .md\:hidden {
            display: none;
        }

        .md\:w-1\/2 {
            width: 50%;
        }

        .md\:w-60 {
            width: 15rem;
        }

        .md\:w-auto {
            width: auto;
        }

        .md\:max-w-none {
            max-width: none;
        }

        .md\:flex-auto {
            flex: 1 1 auto;
        }

        .md\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .md\:grid-cols-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .md\:grid-cols-4 {
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }

        .md\:grid-cols-5 {
            grid-template-columns: repeat(5, minmax(0, 1fr));
        }

        .md\:flex-row {
            flex-direction: row;
        }

        .md\:items-start {
            align-items: flex-start;
        }

        .md\:justify-start {
            justify-content: flex-start;
        }

        .md\:justify-end {
            justify-content: flex-end;
        }

        .md\:gap-0 {
            gap: 0;
        }

        .md\:gap-2 {
            gap: 0.5rem;
        }

        .md\:gap-8 {
            gap: 2rem;
        }

        .md\:gap-x-2 {
            -moz-column-gap: 0.5rem;
            column-gap: 0.5rem;
        }

        .md\:p-20 {
            padding: 5rem;
        }

        .md\:p-4 {
            padding: 1rem;
        }

        .md\:p-6 {
            padding: 1.5rem;
        }

        .md\:px-16 {
            padding-left: 4rem;
            padding-right: 4rem;
        }

        .md\:py-12 {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        .md\:py-8 {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .md\:pb-0 {
            padding-bottom: 0;
        }

        .md\:pt-0 {
            padding-top: 0;
        }

        .md\:pt-16 {
            padding-top: 4rem;
        }

        .md\:pt-8 {
            padding-top: 2rem;
        }

        .md\:text-right {
            text-align: right;
        }

        .md\:text-2xl {
            font-size: 1.5rem;
            line-height: 2rem;
        }
    }

    @media (min-width: 1024px) {
        .lg\:col-span-1 {
            grid-column: span 1 / span 1;
        }

        .lg\:col-span-2 {
            grid-column: span 2 / span 2;
        }

        .lg\:mx-0 {
            margin-right: 0;
        }

        .lg\:ml-0,
        .lg\:mx-0 {
            margin-left: 0;
        }

        .lg\:ml-10 {
            margin-left: 2.5rem;
        }

        .lg\:mt-24 {
            margin-top: 6rem;
        }

        .lg\:block {
            display: block;
        }

        .lg\:flex {
            display: flex;
        }

        .lg\:grid {
            display: grid;
        }

        .lg\:hidden {
            display: none;
        }

        .lg\:h-\[300px\] {
            height: 300px;
        }

        .lg\:min-h-\[350px\] {
            min-height: 350px;
        }

        .lg\:max-w-none {
            max-width: none;
        }

        .lg\:flex-1 {
            flex: 1 1 0%;
        }

        .lg\:columns-3 {
            -moz-columns: 3;
            column-count: 3;
        }

        .lg\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .lg\:grid-cols-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .lg\:grid-cols-5 {
            grid-template-columns: repeat(5, minmax(0, 1fr));
        }

        .lg\:content-between {
            align-content: space-between;
        }

        .lg\:items-center {
            align-items: center;
        }

        .lg\:justify-end {
            justify-content: flex-end;
        }

        .lg\:gap-8 {
            gap: 2rem;
        }

        .lg\:space-x-6> :not([hidden])~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(1.5rem * var(--tw-space-x-reverse));
            margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .lg\:self-stretch {
            align-self: stretch;
        }

        .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem;
        }

        .lg\:py-8 {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .lg\:text-\[26px\] {
            font-size: 26px;
        }
    }

    @media (min-width: 1280px) {
        .xl\:col-span-2 {
            grid-column: span 2 / span 2;
        }

        .xl\:mt-0 {
            margin-top: 0;
        }

        .xl\:block {
            display: block;
        }

        .xl\:grid {
            display: grid;
        }

        .xl\:hidden {
            display: none;
        }

        .xl\:max-w-6xl {
            max-width: 72rem;
        }

        .xl\:grid-cols-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .xl\:grid-cols-6 {
            grid-template-columns: repeat(6, minmax(0, 1fr));
        }

        .xl\:gap-8 {
            gap: 2rem;
        }
    }

    .from-primary-400 {
        --tw-gradient-from: rgb( 184, 15, 15);
        --tw-gradient-to: rgba(251, 146, 60, 0);
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .tihh-testi {
        background: linear-gradient(to bottom, #272730, rgba(251, 146, 60, 0));
    }

    .bg-card {
        color: #ffffff;
        background: var(--warna_4) !important;
    }


    .card-header {
        
    
        border-bottom: 1px solid #fff;
    }



    @media (max-width: 700px) {
        .sticky-element {
            display: block;
            background-color: #272730;
            position: sticky;
            bottom: 0;
            z-index: 10;
            margin: 0 -4px;
            padding-top: 0;
        }
    }

    .sticky-element {
        display: none;
    }

    .sticky-element .container {
        display: flex;
        flex-direction: column;
        gap: 0;
        padding-top: 0.75rem;
    }

    .sticky-element .rounded-md {
        border-left-width: 4px;
        border-color: #F59E0B;
        background-color: #FDE68A;
        padding: 1rem;
    }

    .sticky-element .rounded-md .text-yellow-700 {
        font-size: 0.875rem;
    }

    .sticky-element .aspect-square {
        margin-bottom: 0.5rem;
    }

    .sticky-element .aspect-square img {
        width: 300px;
        height: 300px;
        object-fit: cover;
        border-radius: 0.375rem;
        color: transparent;
    }

    .sticky-element .flex-col {
        display: flex;
        flex-direction: column;
        gap: 0.25rem;
    }

    .sticky-element .text-xs {
        font-size: 0.75rem;
        font-weight: 600;
    }

    .sticky-element .text-warning {
        color: #F59E0B;
    }

    .sticky-element .items-center {
        display: flex;
        align-items: center;
    }

    .sticky-element .text-xs.italic {
        font-size: 0.75rem;
        font-style: italic;
    }

    .sticky-element .btn-primary {
        box-shadow: 0 0.5rem 1rem rgba(255, 255, 255, 0.152) !important;
        background: rgb(184, 15, 15);
        color: rgb(255, 255, 255);
    }

    .sticky-element .btn-primary:hover {
        background-color: #BF0B0B;
    }

    .sticky-element .btn-primary:disabled {
        cursor: not-allowed;
        opacity: 0.75;
    }

    .object-cover {
        -o-object-fit: cover;
        object-fit: cover;
    }

    .rounded-2xl {
        border-radius: 1rem;
    }

    .w-28 {
        width: 10rem;
    }

    .h-28 {
        height: 9rem;
    }

    img,
    video {
        max-width: 100%;
        height: auto;
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

    @media (min-width: 640px) {
        .sm\:p-2 {
            padding: 0.3rem;
        }

        .smtih {
            --tw-bg-opacity: 1;
            background-color: #788189 !important;
            
        }

        .sm\:rounded-3xl {
            border-radius: 1.1rem;
        }



        .-mt-8 {
            margin-top: -2rem;
        }
        
        
        .games-bg {
    margin-top: 62px;
    height: 340px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
 
</style>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('../navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="wrapper">
    <main class="relative">
        <div class="games-bg relative pb-16 mt-3">
            <div class="absolute inset-0">
                <img class="hidden h-full w-full object-cover inline-block" src="<?php echo e($kategori->bannerlayanan); ?>" alt=""/>
                <div class="absolute inset-0 mix-blend-multiply" aria-hidden="true"></div>
            </div>
            <div class="relative mx-auto max-w-7xl py-16 px-4 pt-0 sm:py-32 sm:px-6 lg:px-8"></div>
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
    </ul>
  </div>
</div>
        </div>
        <section class="bg-nvd">
            <div class="relative mx-auto max-w-7xl pb-1 ">
                <div class="shadow-detail-card rounded-xl bg-nvd px-3 pb-3 sm:py-8 md:px-6">
                    <div class="relative flex flex-row items-center space-x-4 pb-3 md:items-center">
                        <div class="product-thumbnail-container -mt-8 sm:-mt-20 sm:rounded-3xl sm:bg-[#952624] sm:p-2 ">
                            <img src="<?php echo e($kategori->thumbnail); ?>" alt="<?php echo e($kategori->nama); ?>"
                                class="h-28 w-32 rounded-2xl object-cover md:h-[170px] md:w-[170px]" />
                        </div>
                        <div class="flex-1 space-y-0.5 sm:mt-3 sm:space-y-2 md:mt-0">
                            <h1 class="flex items-center font-extrabold text-white sm:text-3xl"><?php echo e($kategori->nama); ?>

                            </h1>
                            <div class="inline-flex items-center space-x-2 text-xs md:text-sm pt-4 ">
                                <div class="rounded-full bg-emerald-500 "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
</div><span class="font-semibold text-[var(--text-color)]">Terverifikasi</span></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="container px-3 grid grid-cols-3 gap-8 pb-8 pt-4">
            <div class="col-span-3 md:col-span-1">
                <div class="sticky top-24 flex flex-col space-y-8">
                    <div class="card">
                     <!-- <div class="flex border-b border-murky-900">
                        <h3 class="flex w-full items-center justify-between rounded-tr-xl px-2 py-2 text-base font-semibold leading-6 text-white sm:px-4">
                        Deskripsi</h3>
                    </div> -->
                        <div class="flex h-full flex-col justify-end gap-4 ms-4 mt-1">
                            <div>
                            </div>
                        </div>
                        <div class="prose prose-sm px-4 py-2 pb-8 text-xs text-dark sm:px-6">
                            <div>
                                <br>Cara Order :</br>
                                                                        <ol>
                                                                        <?php if($kategori->kode == "mobile-legends"): ?>
                                                                        <li>Masukkan ID (SERVER)</li>
                                                                        <li>Pilih Nominal Diamond</li>
                                                                        <li>Pilih Metode Pembayaran</li>
                                                                        <li>Masukkan Nomor WhatsApp yg benar!</li>
                                                                        <li>Klik Beli &amp; lakukan Pembayaran</li>
                                                                        <li>Diamond akan masuk otomatis ke akun Anda.</li>
                                                                        
                                                                        <?php elseif($kategori->kode == "free-fire"): ?>
                                                                        <li>Masukkan ID</li>
                                                                        <li>Pilih Nominal Diamond</li>
                                                                        <li>Pilih Metode Pembayaran</li>
                                                                        <li>Masukkan Nomor WhatsApp yg benar!</li>
                                                                        <li>Klik Belo &amp; lakukan Pembayaran</li>
                                                                        <li>Diamond akan masuk otomatis ke akun Anda.</li>
                                                                        
                                                                        <?php elseif($kategori->kode == "genshin-impact"): ?>
                                                                        <li>Masukkan ID dan SERVER</li>
                                                                        <li>Pilih Nominal Genesis Crystal</li>
                                                                        <li>Pilih Metode Pembayaran</li>
                                                                        <li>Masukkan Nomor WhatsApp yg benar!</li>
                                                                        <li>Klik Beli &amp; lakukan Pembayaran</li>
                                                                        <li>Genesis Crystal akan masuk otomatis ke akun Anda.</li>
                                                                        
                                                                        <?php elseif($kategori->kode == "apex-legend-mobile"): ?>
                                                                        <li>Masukkan ID</li>
                                                                        <li>Pilih Nominal Syndicate Gold</li>
                                                                        <li>Pilih Metode Pembayaran</li>
                                                                        <li>Masukkan Nomor WhatsApp yg benar!</li>
                                                                        <li>Klik Beli &amp; lakukan Pembayaran</li>
                                                                        <li>Syndicate Gold akan masuk otomatis ke akun Anda.</li>
                                                                        
                                                                        <?php elseif($kategori->kode == "league-of-legends"): ?>
                                                                        <li>Masukkan Riot ID</li>
                                                                        <li>Pilih Nominal Wild Core</li>
                                                                        <li>Pilih Metode Pembayaran</li>
                                                                        <li>Masukkan Nomor WhatsApp yg benar!</li>
                                                                        <li>Klik Beli &amp; lakukan Pembayaran</li>
                                                                        <li>Wild Core akan masuk otomatis ke akun Anda.</li>
                                                                        
                                                                        <?php elseif($kategori->kode == "valorant"): ?>
                                                                        <li>Masukkan ID</li>
                                                                        <li>Pilih Nominal Point</li>
                                                                        <li>Pilih Metode Pembayaran</li>
                                                                        <li>Masukkan Nomor WhatsApp yg benar!</li>
                                                                        <li>Klik Beli &amp; lakukan Pembayaran</li>
                                                                        <li>Valorant Point akan masuk otomatis ke akun Anda.</li>
                                                                        
                                                                        <?php elseif($kategori->kode == "call-of-duty-mobile"): ?>
                                                                        <li>Masukkan Open ID</li>
                                                                        <li>Pilih Nominal CP</li>
                                                                        <li>Pilih Metode Pembayaran</li>
                                                                        <li>Masukkan Nomor WhatsApp</li>
                                                                        <li>Klik Order Now &amp; lakukan Pembayaran</li>
                                                                        <li>CP akan masuk otomatis ke akun Anda.</li>
                                                                        
                                                                        <?php elseif($kategori->kode == "arena-of-valor"): ?>
                                                                        <li>Masukkan Open ID akun AOV Anda</li>
                                                                        <li>Pilih Nominal Top Up</li>
                                                                        <li>Pilih Metode Pembayaran</li>
                                                                        <li>Masukkan Nomor WhatsApp</li>
                                                                        <li>Klik Order Now &amp; lakukan Pembayaran</li>
                                                                        <li>Vouchers akan masuk otomatis ke akun Anda.</li>
                                                                        
                                                                        <?php elseif($kategori->kode == "dragon-raja"): ?>
                                                                        <li>Masukkan ID</li>
                                                                        <li>Pilih Nominal Coupon</li>
                                                                        <li>Pilih Metode Pembayaran</li>
                                                                        <li>Masukkan Nomor WhatsApp</li>
                                                                        <li>Klik Order Now &amp; lakukan Pembayaran</li>
                                                                        <li>Coupon akan masuk otomatis ke akun Anda.</li>
                                                                        
                                                                        <?php elseif($kategori->kode == "sausage-man"): ?>
                                                                        <li>Masukkan ID</li>
                                                                        <li>Pilih Nominal Candy</li>
                                                                        <li>Pilih Metode Pembayaran</li>
                                                                        <li>Masukkan Nomor WhatsApp</li>
                                                                        <li>Klik Order Now &amp; lakukan Pembayaran</li>
                                                                        <li>Candy akan masuk otomatis ke akun Anda.</li>
                                                                        
                                                                        <?php elseif($kategori->kode == "life-after"): ?>
                                                                        <li>Masukkan ID dan Server</li>
                                                                        <li>Pilih Nominal Credits</li>
                                                                        <li>Pilih Metode Pembayaran</li>
                                                                        <li>Masukkan Nomor WhatsApp</li>
                                                                        <li>Klik Order Now &amp; lakukan Pembayaran</li>
                                                                        <li>Life After Credits akan masuk otomatis ke akun Anda.</li>
                                                                        
                                                                        <?php elseif($kategori->kode == "lords-mobile"): ?>
                                                                        <li>Masukkan ID IGG</li>
                                                                        <li>Pilih Nominal Diamond</li>
                                                                        <li>Pilih Metode Pembayaran</li>
                                                                        <li>Masukkan Nomor WhatsApp</li>
                                                                        <li>Klik Order Now &amp; lakukan Pembayaran</li>
                                                                        <li>Diamond akan masuk otomatis ke akun Anda.</li>
                                                                        
                                                                        <?php elseif($kategori->kode == "tom-and-jerry"): ?>
                                                                        <li>Masukkan ID</li>
                                                                        <li>Pilih Nominal Diamond</li>
                                                                        <li>Pilih Metode Pembayaran</li>
                                                                        <li>Masukkan Nomor WhatsApp</li>
                                                                        <li>Klik Order Now &amp; lakukan Pembayaran</li>
                                                                        <li>Diamond akan masuk otomatis ke akun Anda.</li>
                                                                        <?php elseif($kategori->kode == "lords-mobile"): ?>
                                                                        <li>Masukkan ID IGG</li>
                                                                        <li>Pilih Nominal Diamond</li>
                                                                        <li>Pilih Metode Pembayaran</li>
                                                                        <li>Masukkan Nomor WhatsApp</li>
                                                                        <li>Klik Order Now &amp; lakukan Pembayaran</li>
                                                                        <li>Diamond akan masuk otomatis ke akun Anda.</li>
                                                                        
                                                                        <?php elseif($kategori->kode == "marvel-super-war"): ?>
                                                                        <li>Masukkan ID</li>
                                                                        <li>Pilih Nominal Credits</li>
                                                                        <li>Pilih Metode Pembayaran</li>
                                                                        <li>Masukkan Nomor WhatsApp</li>
                                                                        <li>Klik Order Now &amp; lakukan Pembayaran</li>
                                                                        <li>Credits akan masuk otomatis ke akun Anda.</li>
                                                                        <?php elseif($kategori->kode == "mu-origin-3"): ?>
                                                                        <li>Masukkan ID</li>
                                                                        <li>Pilih Nominal Divine Diamonds</li>
                                                                        <li>Pilih Metode Pembayaran</li>
                                                                        <li>Masukkan Nomor WhatsApp</li>
                                                                        <li>Klik Order Now &amp; lakukan Pembayaran</li>
                                                                        <li>Divine Diamonds akan masuk otomatis ke akun Anda.</li>
                                                                        <?php elseif($kategori->kode == "one-punch-man"): ?>
                                                                        <li>Masukkan ID dan Server</li>
                                                                        <li>Pilih Nominal Coupons</li>
                                                                        <li>Pilih Metode Pembayaran</li>
                                                                        <li>Masukkan Nomor WhatsApp</li>
                                                                        <li>Klik Order Now &amp; lakukan Pembayaran</li>
                                                                        <li>Coupons akan masuk otomatis ke akun Anda.</li>
                                                                        <?php elseif($kategori->kode == "omega-legend"): ?>
                                                                        <li>Masukkan ID</li>
                                                                        <li>Pilih Nominal Gold</li>
                                                                        <li>Pilih Metode Pembayaran</li>
                                                                        <li>Masukkan Nomor WhatsApp</li>
                                                                        <li>Klik Order Now &amp; lakukan Pembayaran</li>
                                                                        <li>Gold akan masuk otomatis ke akun Anda.</li>
                                                                        <?php elseif($kategori->kode == "mangatoon"): ?>
                                                                        <li>Masukkan ID</li>
                                                                        <li>Pilih Nominal Coins</li>
                                                                        <li>Pilih Metode Pembayaran</li>
                                                                        <li>Masukkan Nomor WhatsApp</li>
                                                                        <li>Klik Order Now &amp; lakukan Pembayaran</li>
                                                                        <li>Coins akan masuk otomatis ke akun Anda.</li>
                                                                        <?php elseif($kategori->kode == "Youtube-Premium" ||$kategori->kode == "Disney-Hotstar"): ?>
                        <li>Masukkan Email Anda [contoh akupembeli@gmail.com]</li>
                        <li>Pilih Paket </li>
                        <li>Pilih Metode Pembayaran </li>
                        <li>Tulis Nomor WhatsApp Sesuai Petunjuk </li>
                        <li>Klik Beli &amp; lakukan Pembayaran </li>
                        <br/>
                        <b>Estimasi Antrian 1-6 Jam. Maximal 1x24 Jam</b><br/>
                        <?php elseif($kategori->kode == "Netflix-Premium"): ?>
                        <li>Kolom 1 Masukkan Email Anda,Dan Kolom 2 Isi Dengan Request Profil Dan Pin 4 Digit</li>
                        <li>Pilih Nominal Paket </li>
                        <li>Pilih Metode Pembayaran </li>
                        <li>Tulis Nomor WhatsApp Sesuai Petunjuk! </li>
                        <li>Klik Beli &amp; lakukan Pembayaran </li>
                         <br/>
                        <b>Estimasi Antrian 1-6 Jam. Maximal 1x24 Jam</b><br/>
                        <?php elseif($kategori->kode == "Spotify-Premium"): ?>
                        <li>Kolom 1 Masukkan Email Anda,Dan Kolom 2 Isi Dengan Nama Lengkap Spotify </li>
                        <li>Pilih Nominal Paket </li>
                        <li>Pilih Metode Pembayaran </li>
                        <li>Tulis Nomor WhatsApp Sesuai Petunjuk! </li>
                        <li>Klik Beli &amp; lakukan Pembayaran </li>
                         <?php elseif($kategori->kode == "Voucher-Playstation" ||$kategori->kode == "Voucher-Roblox"||$kategori->kode == "Voucher-Shell"||$kategori->kode == "Voucher-Steam"||$kategori->kode == "Voucher-Valorant"||$kategori->kode == "Voucher-Razer"): ?>
                        <li>Masukkan Nomor Whatsapp</li>
                        <li>Pilih Nominal </li>
                        <li>Pilih Metode Pembayaran </li>
                        <li>Tulis Nomor WhatsApp Sesuai Petunjuk </li>
                        <li>Klik Beli &amp; lakukan Pembayaran </li>
                        <br/>
                        <b>Estimasi 1-6 Jam. Maximal 1x24 Jam ,Voucher Akan Dikirim Melalui Whatsapp</b><br/>
                        <?php elseif($kategori->kode == "Jasa-Joki"): ?>
                        <p><strong>Joki Rank</strong> Mobile Legends dari <i><?php echo e(ENV('APP_NAME')); ?></i>: Solusi Cepat Naik Rank !</p>

<p>Kami mempersembahkan layanan joki Mobile Legends yang cepat, murah, serta aman dan terpercaya! Tingkatkan permainan dan rank Anda dengan bantuan dari profesional kami. Kami mengutamakan kepuasan dan keamanan akun Anda dalam setiap jasa yang kami berikan.</p>

<p>Waktu Pengecekan Orderan :<br />
Orderan yang sudah dibayarkan akan kami cek setiap hari mulai pukul 07.00 - 22.00 WIB.<br />
Untuk orderan yang melewati batas waktu pengecekan, akan kami proses pada jam kerja di hari berikutnya.<br />
<br />
Berikut adalah langkah-langkah sederhana untuk Order Jasa Joki :</p>

<ol>
	<li>Lengkapi Data Akun Joki Dengan Teliti (Pastikan data yang Anda masukkan sudah benar dan lengkap)</li>
	<li>Masukkan Jumlah Order Sesuai Tujuan Rank (Pastikan jumlah order sesuai dengan rank yang Anda inginkan dan sesuai dengan S&K <i><?php echo e(ENV('APP_NAME')); ?>)</i></li>
	<li>Pilih Metode Pembayaran (Kenyamanan Anda adalah prioritas kami. Kami menyediakan berbagai metode pembayaran yang mudah dan aman)</li>
	<li>Masukkan Kode Promo Jika Ada (Gunakan kode promo untuk mendapatkan penawaran spesial dan diskon menarik)</li>
	<li>Masukkan Nomor WhatsApp dan Email yang Valid (Dapatkan konfirmasi dan notifikasi langsung ke kontak Anda)</li>
	<li>Klik Order Now & Lakukan Pembayaran (Tunggu konfirmasi dari kami dan orderan Anda akan segera diproses)</li>
</ol>

<p>Estimasi Waktu Proses :<br />
Kami berkomitmen untuk menyelesaikan jasa joki Anda dalam waktu 12-48 jam. Waktu penyelesaian dapat bervariasi tergantung pada jumlah dan kompleksitas pesanan. Kami berupaya untuk memberikan layanan secepat mungkin</p>

<p><i><?php echo e(ENV('APP_NAME')); ?></i> Sahabat Para Gamers!</p>
                        
                                                                        
                                                                        <?php else: ?>
                                                                        <li>Masukkan Data Akun</li>
                                                                        <li>Pilih Nominal</li>
                                                                        <li>Pilih Metode Pembayaran</li>
                                                                        <li>Masukkan Nomor WhatsApp</li>
                                                                        <li>Klik Order Now &amp; lakukan Pembayaran</li>
                                                                        <?php endif; ?>
                                                                        
                                                                        </ol>                                                                                                
                                                </p>
                                                <!--<p style="margin-bottom: 10px; text-align: center;">
                                                    <font size="3" color="#ff9c00">
                                                        <span style="font-weight: bolder;">Layanan Aktif 24 Jam</span>
                                                    </font>
                                                </p>-->
                                <p>
                                    <?php echo htmlspecialchars_decode($kategori->ket_layanan); ?>


                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>


                          
                       
            <ul class="col-span-3 flex flex-col space-y-8 md:col-span-2">
                <div class="card">
                    <div class="card border-0 mb-0 shadow-form">
                        <div class="pl-2 py-1">
                            <div class="card-header flex align-items-center">
                                <img alt="step-one"
                                    srcset="/assets/icons/step-one.svg 1x, /assets/icons/step-one.svg 2x"
                                    src="/assets/icons/step-one.svg" width="26" height="26" decoding="async"
                                    data-nimg="1" loading="lazy" style="color: transparent; margin-left:-15px;" />

                                <h4 class="card-titel mt-2 ms-2 flex items-center font-extrabold leading-6 md:text-xl"
                                    style="color: rgb(234 234 234);">

                                    Masukkan Data</h4>

                                <div class="cursor-pointer">

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" data-bs-toggle="modal"
                                        data-bs-target="#petunjukModal" aria-hidden="true"
                                        class="h-5 w-5 text-gray-600 ms-2" style="cursor:pointer;">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">

                                        </path>

                                    </svg>

                                </div>

                            </div>

                        </div>

                        <div class="px-1">

                            <div class="card-body">

                                <div id="userData">

                                    <?php if($kategori->server_id && $kategori->kode != "life-after" &&

                                    $kategori->kode != "joki" && $kategori->kode != "genshin-impact" &&

                                    $kategori->kode != "ragnarok-m" && $kategori->kode != "tof"): ?>

                                    <div class="grid gap-2 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">

                                        <div class="w-full">

                                            <div class="relative rounded-sm text-black shadow-sm">

                                                <input
                                                    class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                    name="user_id" placeholder="User ID" type="text" value=""
                                                    id="user_id" />

                                            </div>

                                        </div>

                                        <div class="w-full">

                                            <div class="relative rounded-md text-black shadow-sm">

                                                <input
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                    name="Server" placeholder="Server ID" type="text" value=""
                                                    id="zone" />

                                            </div>

                                        </div>

                                    </div>

                                    <p class="mt-2 text-xs">Silahkan Masukkan User ID
                                        &amp; Server Anda Dan Pastikan Benar.</p>

                                    <?php elseif($kategori->kode == "life-after"): ?>

                                    <div class="grid gap-2 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">

                                        <div class="w-full">

                                            <div class="relative rounded-md text-black shadow-sm">

                                                <input
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                    name="user_id" placeholder="User ID" type="text" id="user_id" value=""
                                                    fdprocessedid="81xg1" />

                                            </div>

                                        </div>

                                        <div class="w-full">

                                            <div class="relative rounded-md text-black shadow-sm">

                                                <select
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                    name="zoneId" id="zone" placeholder="Pilih Server"
                                                    fdprocessedid="n3x76"> 
                                                <option value="" hidden="">Pilih Server</option>

                                                <option value="miskatown">Miska Town</option>

                                                <option value="sandcastle">Sand Castle</option>

                                                <option value="mouthswamp">Mouth Swamp</option>

                                                <option value="redwoodtown">Red Wood Town</option>

                                                <option value="obelisk">Oblisk</option>

                                                <option value="fallforest">Fall Forest</option>

                                                <option value="mountsnow">Mount Snow</option>

                                                <option value="nancycity">Nancy City</option>

                                                <option value="charlestown">Charles Town</option>

                                                <option value="snowhighlands">Snow High Lands</option>

                                                <option value="santopany">Santopany</option>

                                                <option value="levincity">Levin City</option>

                                                <option value="newland">New Land</option>

                                                <option value="milestone">Mile Stone</option>

                                                <option value="twinislands">Twin Island</option>

                                                <option value="500007">ChaosOutpost (NA)</option>

                                                <option value="500008">IronStride (NA)</option>

                                                <option value="520007">ChaosCity (SEA)</option>

                                                <option value="520008">TwinIslands (SEA)</option>

                                                <option value="520009">HopeWall (SEA)</option>

                                                <option value="500009">CrystalthornSea (NA)</option>

                                                <option value="520010">LabyrinthSea (SEA)</option>

                                            </select>

                                        </div>
                                        </div>

                                    </div>

                                    <?php elseif($kategori->kode == "tof"): ?>

                                    <div class="grid gap-2 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">

                                        <div class="w-full">

                                            <div class="relative rounded-md text-black shadow-sm">

                                                <input
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                    name="user_id" placeholder="User ID" type="text" id="user_id" value=""
                                                    fdprocessedid="81xg1" />

                                            </div>

                                        </div>

                                        <div class="w-full">

                                            <div class="relative rounded-md text-black shadow-sm">

                                                <select
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                    name="zoneId" id="zone" placeholder="Pilih Server"
                                                    fdprocessedid="n3x76"> 
                                                <option value="" hidden="">Pilih Server</option>

                                                <option value="Southeast Asia-Osillron">Southeast Asia-Osillron

                                                </option>

                                                <option value="Southeast Asia-Mistilteinn">Southeast

                                                    Asia-Mistilteinn</option>

                                                <option value="Southeast Asia-Illyrians">Southeast

                                                    Asia-Illyrians</option>

                                                <option value="Southeast Asia-Florione">Southeast Asia-Florione

                                                </option>

                                                <option value="Southeast Asia-Animus">Southeast Asia-Animus

                                                </option>

                                                <option value="Southeast Asia-Gumi Gumi">Southeast Asia-Gumi

                                                    Gumi</option>

                                                <option value="Southeast Asia-Oryza">Southeast Asia-Oryza

                                                </option>

                                                <option value="Southeast Asia-Saeri">Southeast Asia-Saeri

                                                </option>

                                                <option value="Southeast Asia-Phantasia">Southeast

                                                    Asia-Phantasia</option>

                                                <option value="Southeast Asia-Mechafield">Southeast

                                                    Asia-Mechafield</option>

                                                <option value="Southeast Asia-Ethereal Dream">Southeast

                                                    Asia-Ethereal Dream</option>

                                                <option value="Southeast Asia-Odyssey">Southeast Asia-Odyssey

                                                </option>

                                                <option value="Southeast Asia-Aestral-Noa">Southeast

                                                    Asia-Aestral-Noa</option>

                                                <option value="Southeast Asia-Chandra">Southeast Asia-Chandra

                                                </option>

                                                <option value="Southeast Asia-Aeria">Southeast Asia-Aeria

                                                </option>

                                                <option value="Southeast Asia-Scarlet">Southeast Asia-Scarlet

                                                </option>

                                                <option value="Southeast Asia-Fantasia">Southeast Asia-Fantasia

                                                </option>

                                                <option value="Southeast Asia-Stardust">Southeast Asia-Stardust

                                                </option>

                                                <option value="Southeast Asia-Arcania">Southeast Asia-Arcania

                                                </option>

                                                <option value="Southeast Asia-Valhalla">Southeast Asia-Valhalla

                                                </option>

                                                <option value="North America-Lunalite">North America-Lunalite

                                                </option>

                                                <option value="North America-Sol-III">North America-Sol-III

                                                </option>

                                                <option value="North America-Lighthouse">North

                                                    America-Lighthouse</option>

                                                <option value="North America-Silver Bridge">North America-Silver

                                                    Bridge</option>

                                                <option value="North America-The Glades">North America-The

                                                    Glades</option>

                                                <option value="North America-Nightfall">North America-Nightfall

                                                </option>

                                                <option value="North America-Frontier">North America-Frontier

                                                </option>

                                                <option value="North America-Libera">North America-Libera

                                                </option>

                                                <option value="North America-Solaris">North America-Solaris

                                                </option>

                                                <option value="North America-Freedom-Oasis">North

                                                    America-Freedom-Oasis</option>

                                                <option value="North America-The Worlds Between">North

                                                    America-The Worlds Between</option>

                                                <option value="North America-Radiant">North America-Radiant

                                                </option>

                                                <option value="North America-Tempest">North America-Tempest

                                                </option>

                                                <option value="North America-New Era">North America-New Era

                                                </option>

                                                <option value="North America-Observer">North America-Observer

                                                </option>

                                                <option value="North America-Starlight">North America-Starlight

                                                </option>

                                                <option value="North America-Myriad">North America-Myriad

                                                </option>

                                                <option value="North America-Oumuamua">North America-Oumuamua

                                                </option>

                                                <option value="North America-Eternium Phantasy">North

                                                    America-Eternium Phantasy</option>

                                                <option value="North America-Azure Plane">North America-Azure

                                                    Plane</option>

                                                <option value="North America-Nirvana">North America-Nirvana

                                                </option>

                                                <option value="Europe-Magia Przygoda Aida">Europe-Magia Przygoda

                                                    Aida</option>

                                                <option value="Europe-Transport Hub">Europe-Transport Hub

                                                </option>

                                                <option value="Europe-The Lumina">Europe-The Lumina</option>

                                                <option value="Europe-Lycoris">Europe-Lycoris</option>

                                                <option value="Europe-Ether">Europe-Ether</option>

                                                <option value="Europe-Olivine">Europe-Olivine</option>

                                                <option value="Europe-Iter">Europe-Iter</option>

                                                <option value="Europe-Aimanium">Europe-Aimanium</option>

                                                <option value="Europe-Alintheus">Europe-Alintheus</option>

                                                <option value="Europe-Andoes">Europe-Andoes</option>

                                                <option value="Europe-Anomora">Europe-Anomora</option>

                                                <option value="Europe-Astora">Europe-Astora</option>

                                                <option value="Europe-Valstamm">Europe-Valstamm</option>

                                                <option value="Europe-Blumous">Europe-Blumous</option>

                                                <option value="Europe-Celestialrise">Europe-Celestialrise

                                                </option>

                                                <option value="Europe-Cosmos">Europe-Cosmos</option>

                                                <option value="Europe-Dyrnwyn">Europe-Dyrnwyn</option>

                                                <option value="Europe-Elypium">Europe-Elypium</option>

                                                <option value="Europe-Excalibur">Europe-Excalibur</option>

                                                <option value="Europe-Espoir IV">Europe-Espoir IV</option>

                                                <option value="Europe-Estrela">Europe-Estrela</option>

                                                <option value="Europe-Ex Nihilor">Europe-Ex Nihilor</option>

                                                <option value="Europe-Futuria">Europe-Futuria</option>

                                                <option value="Europe-Hephaestus">Europe-Hephaestus</option>

                                                <option value="Europe-Midgard">Europe-Midgard</option>

                                                <option value="Europe-Kuura">Europe-Kuura</option>

                                                <option value="Europe-Lyramiel">Europe-Lyramiel</option>

                                                <option value="Europe-Magenta">Europe-Magenta</option>

                                                <option value="Europe-Omnium Prime">Europe-Omnium Prime</option>

                                                <option value="Europe-Turmus">Europe-Turmus</option>

                                                <option value="South America-Corvus">South America-Corvus

                                                </option>

                                                <option value="South America-Calodesma Seven">South

                                                    America-Calodesma Seven</option>

                                                <option value="South America-Columba">South America-Columba

                                                </option>

                                                <option value="South America-Tiamat">South America-Tiamat

                                                </option>

                                                <option value="South America-Orion">South America-Orion</option>

                                                <option value="South America-Luna Azul">South America-Luna Azul

                                                </option>

                                                <option value="South America-Hope">South America-Hope</option>

                                                <option value="South America-Tanzanite">South America-Tanzanite

                                                </option>

                                                <option value="South America-Antlia">South America-Antlia

                                                </option>

                                                <option value="South America-Pegasus">South America-Pegasus

                                                </option>

                                                <option value="South America-Phoenix">South America-Phoenix

                                                </option>

                                                <option value="South America-Centaurus">South America-Centaurus

                                                </option>

                                                <option value="South America-Cepheu">South America-Cepheu

                                                </option>

                                                <option value="South America-Cygnus">South America-Cygnus

                                                </option>

                                                <option value="South America-Grus">South America-Grus</option>

                                                <option value="South America-Hydra">South America-Hydra</option>

                                                <option value="South America-Lyra">South America-Lyra</option>

                                                <option value="South America-Ophiuchus">South America-Ophiuchus

                                                </option>

                                                <option value="Asia-Pacific-Cocoaiteruyo">

                                                    Asia-Pacific-Cocoaiteruyo</option>

                                                <option value="Asia-Pacific-Food Fighter">Asia-Pacific-Food

                                                    Fighter</option>

                                                <option value="Asia-Pacific-Gomap">Asia-Pacific-Gomap</option>

                                                <option value="Asia-Pacific-Yggdrasil">Asia-Pacific-Yggdrasil

                                                </option>

                                                <option value="Asia-Pacific-Daybreak">Asia-Pacific-Daybreak

                                                </option>

                                                <option value="Asia-Pacific-Adventure">Asia-Pacific-Adventure

                                                </option>

                                                <option value="Asia-Pacific-Eden">Asia-Pacific-Eden</option>

                                                <option value="Asia-Pacific-Fate">Asia-Pacific-Fate</option>

                                                <option value="Asia-Pacific-Nova">Asia-Pacific-Nova</option>

                                                <option value="Asia-Pacific-Ruby">Asia-Pacific-Ruby</option>

                                                <option value="Asia-Pacific-Babel">Asia-Pacific-Babel</option>

                                                <option value="Asia-Pacific-Pluto">Asia-Pacific-Pluto</option>

                                                <option value="Asia-Pacific-Sushi">Asia-Pacific-Sushi</option>

                                                <option value="Asia-Pacific-Venus">Asia-Pacific-Venus</option>

                                                <option value="Asia-Pacific-Galaxy">Asia-Pacific-Galaxy</option>

                                                <option value="Asia-Pacific-Memory">Asia-Pacific-Memory</option>

                                                <option value="Asia-Pacific-Oxygen">Asia-Pacific-Oxygen</option>

                                                <option value="Asia-Pacific-Sakura">Asia-Pacific-Sakura</option>

                                                <option value="Asia-Pacific-Seeker">Asia-Pacific-Seeker</option>

                                                <option value="Asia-Pacific-Shinya">Asia-Pacific-Shinya</option>

                                                <option value="Asia-Pacific-Stella">Asia-Pacific-Stella</option>

                                                <option value="Asia-Pacific-Uranus">Asia-Pacific-Uranus</option>

                                                <option value="Asia-Pacific-Utopia">Asia-Pacific-Utopia</option>

                                                <option value="Asia-Pacific-Jupiter">Asia-Pacific-Jupiter

                                                </option>

                                                <option value="Asia-Pacific-Sweetie">Asia-Pacific-Sweetie

                                                </option>

                                                <option value="Asia-Pacific-Atlantis">Asia-Pacific-Atlantis

                                                </option>

                                                <option value="Asia-Pacific-Takoyaki">Asia-Pacific-Takoyaki

                                                </option>

                                                <option value="Asia-Pacific-Mars">Asia-Pacific-Mars</option>

                                            </select>

                                        </div>

                                        </div>

                                    </div>

                                    <p class="mt-2 text-xs">Silahkan Masukkan User ID
                                        &amp; Server Anda.</p>

                                    <?php elseif($kategori->kode == "genshin-impact"): ?>

                                    <div class="grid gap-2 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">

                                        <div class="w-full">

                                            <div class="relative rounded-lg text-black shadow-sm">

                                                <input
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                    name="user_id" placeholder="User ID" type="text" id="user_id" value=""
                                                    fdprocessedid="81xg1" />

                                            </div>

                                        </div>

                                        <div class="w-full">

                                            <div class="relative rounded-md text-black shadow-sm">

                                                <select
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                    name="zoneId" id="zone" placeholder="Pilih Server"
                                                    fdprocessedid="n3x76">

                                                    <option value="" hidden="">Pilih Server</option>

                                                    <option value="america">America</option>

                                                    <option value="europe">Europe</option>

                                                    <option value="asia">Asia</option>

                                                    <option value="tw_hk_mo">TW, HK, MO</option>

                                                </select>

                                            </div>

                                        </div>

                                    </div>

                                    <p class="mt-2 text-xs">Silahkan Masukkan User ID
                                        &amp; Server Anda.</p>

                                    <?php elseif($kategori->kode == "heroes-evolved"): ?>

                                    <div class="grid gap-2 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">

                                        <div class="w-full">

                                            <div class="relative rounded-md text-black shadow-sm">

                                                <input
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                    name="user_id" placeholder="User ID" type="text" id="user_id" value=""
                                                    fdprocessedid="81xg1" />

                                            </div>

                                        </div>

                                        <div class="w-full">

                                            <div class="relative rounded-md text-black shadow-sm">

                                                <select
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                    name="zoneId" id="zone" placeholder="Pilih Server"
                                                    fdprocessedid="n3x76">

                                                    <option value="" hidden="">Pilih Server</option>

                                                <option value="North America - LOST TEMPLE [NA]"> North America

                                                    - LOST TEMPLE [NA]</option>

                                                <option value="North America - NEW ORDER"> North America - NEW

                                                    ORDER</option>

                                                <option value="Europe - ASGARD [EU]"> Europe - ASGARD [EU]

                                                </option>

                                                <option value="Europe - OLYMPUS [EU]"> Europe - OLYMPUS [EU]

                                                </option>

                                                <option value="South America - AMAZON [SA]"> South America -

                                                    AMAZON [SA]</option>

                                                <option value="South America - EL DORADO [SA]"> South America -

                                                    EL DORADO [SA]</option>

                                                <option value="Asia - SHANGRI-LA [AS]"> Asia - SHANGRI-LA [AS]

                                                </option>

                                                <option value="Asia - S1.ANGKOR [AS]"> Asia - S1.ANGKOR [AS]

                                                </option>

                                                <option value="Asia - S2.EL NIDO [AS]"> Asia - S2.EL NIDO [AS]

                                                </option>

                                                <option value="Asia - ไทย[TH]"> Asia - ไทย[TH]</option>

                                                <option value="Asia - ไทยแลนด์[TH]"> Asia - ไทยแลนด์[TH]

                                                </option>

                                            </select>

                                        </div>

                                    </div>
                                    </div>



                                    <?php elseif($kategori->kode == "ragnarok-m"): ?>

                                   <div class="grid gap-2 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">

                                        <div class="w-full">

                                            <div class="relative rounded-md text-black shadow-sm">

                                                <input
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                    name="user_id" placeholder="User ID" type="text" id="user_id" value=""
                                                    fdprocessedid="81xg1" />

                                            </div>

                                        </div>

                                        <div class="w-full">

                                            <div class="relative rounded-md text-black shadow-sm">

                                                <select
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                    name="zoneId" id="zone" placeholder="Pilih Server"
                                                    fdprocessedid="n3x76">

                                                    <option value=""selected="" disabled="">Pilih Server</option>
                                                    <option value="Eternal Love">Eternal Love</option>
                                                    <option value="Midnight Party">Midnight Party</option>
                                                    <option value="Memory Of Faith">Memory Of Faith</option>
                                                    <option value="Memory Of Faith">Valhalla</option>
                                                            

                                            </select>

                                        </div>

                                    </div>
                                    </div>

                                   <?php elseif($kategori->kode == "ace-racer"): ?>

                                    <div class="grid gap-2 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">

                                        <div class="w-full">

                                            <div class="relative rounded-lg text-black shadow-sm">

                                                <input
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                    name="user_id" placeholder="User ID" type="text" id="user_id" value=""
                                                    fdprocessedid="81xg1" />

                                            </div>

                                        </div>

                                        <div class="w-full">

                                            <div class="relative rounded-md text-black shadow-sm">

                                                <select
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                    name="zoneId" id="zone" placeholder="Pilih Server"
                                                    fdprocessedid="n3x76">

                                                     <option value="" hidden="">Pilih Server</option>
                                                     <option value="JAPAN">日本分站/JAPAN/일본-구역/サブ会場-日本</option>
                                                     <option value="KOREA">韓國分站/KOREA/한국/サブ会場-韓国</option>
                                                     <option value="ASIA">亞洲分站/ASIA/아시아/サブ会場-アジア</option>
                                                     <option value="NORTH-AMERICA">北美分站/NORTH-AMERICA/북미/サブ会場-北米</option>
                                                     <option value="EUROPE">歐洲分站/EUROPE/유럽/サブ会場-ヨーロッパ</option>

                                                </select>

                                            </div>

                                        </div>

                                    </div>

                                    <p class="mt-2 text-xs">Silahkan Masukkan User ID
                                        &amp; Server Anda.</p>

                                    <?php elseif($kategori->kode == "Indosat"): ?>

                                    <div class="grid gap-2 grid-cols-1">
                                        <div class="w-full">
                                            <div class="relative rounded-md text-black shadow-sm">
                                                <input class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                    name="userId" id="user_id" placeholder="Masukkan Nomor HP" type="number" value="" required />
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-xs">Silahkan Masukkan Nomor HP Anda. Contoh : 08xxxx</p>

                                    <?php elseif($kategori->kode == "XL"): ?>

                                    <div class="grid gap-2 grid-cols-1">
                                        <div class="w-full">
                                            <div class="relative rounded-md text-black shadow-sm">
                                                <input class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                    name="userId" id="user_id" placeholder="Masukkan Nomor HP" type="number" value="" required />
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-xs">Silahkan Masukkan Nomor HP Anda. Contoh : 08xxxx</p>

                                    <?php elseif($kategori->kode == "Tri"): ?>

                                    <div class="grid gap-2 grid-cols-1">
                                        <div class="w-full">
                                            <div class="relative rounded-md text-black shadow-sm">
                                                <input class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                    name="userId" id="user_id" placeholder="Masukkan Nomor HP" type="number" value="" required />
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-xs">Silahkan Masukkan Nomor HP Anda. Contoh : 08xxxx</p>

                                    <?php elseif($kategori->kode == "Smartfren"): ?>

                                    <div class="grid gap-2 grid-cols-1">
                                        <div class="w-full">
                                            <div class="relative rounded-md text-black shadow-sm">
                                                <input class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                    name="userId" id="user_id" placeholder="Masukkan Nomor HP" type="number" value="" required />
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-xs">Silahkan Masukkan Nomor HP Anda. Contoh : 08xxxx</p>

                                    <?php elseif($kategori->kode == "Telkomsel"): ?>

                                    <div class="grid gap-2 grid-cols-1">
                                        <div class="w-full">
                                            <div class="relative text-black shadow-sm">
                                                <input class="block rounded-md w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                    name="userId" id="user_id" placeholder="Masukkan Nomor HP" type="number" value="" required />
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-xs">Silahkan Masukkan Nomor HP Anda. Contoh : 08xxxx</p>
                                    

                                    <?php elseif($kategori->kode == "Axis"): ?>

                                    <div class="grid gap-2 grid-cols-1">
                                        <div class="w-full">
                                            <div class="relative rounded-md text-black shadow-sm">
                                                <input class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                    name="userId" id="user_id" placeholder="Masukkan Nomor HP" type="number" value="" required />
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-xs">Silahkan Masukkan Nomor HP Anda. Contoh : 08xxxx</p>

                                    <?php elseif($kategori->kode == "by-u"): ?>

                                    <div class="grid gap-2 grid-cols-1">
                                        <div class="w-full">
                                            <div class="relative rounded-md text-black shadow-sm">
                                                <input class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                    name="userId" id="user_id" placeholder="Masukkan Nomor HP" type="number" value="" required />
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-xs">Silahkan Masukkan Nomor HP Anda. Contoh : 08xxxx</p>
                                    
                             

                                    <?php elseif($kategori->kode == "Canva-Pro"): ?>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                        <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukkan Email" type="text"
                                                name="user_id" id="user_id" required>
                                        </div>
                                    </div>
                                    <?php elseif($kategori->kode == "Disney-Hotstar"): ?>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukkan Email" type="text"
                                                name="user_id" id="user_id" required>
                                        </div>                                    
                                    </div>
                                    <?php elseif($kategori->kode == "iQIYI-Premium"): ?>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukkan Email" type="text"
                                                name="user_id" id="user_id" required>
                                        </div>
                                    </div>
                                    <?php elseif($kategori->kode == "Netflix-Premium"): ?>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3 text-black">
                                            <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukkan Email" type="text"
                                                name="user_id" id="user_id" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3 text-black">
                                            <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukkan Request Profile + PIN"
                                                type="text" name="zone" id="zone" >
                                        </div>
                                    </div>
                                    <?php elseif($kategori->kode == "Spotify-Premium"): ?>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukkan Email" type="text"
                                                name="user_id" id="user_id" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukkan Nama Profile Spotify"
                                                type="text" name="zone" id="zone">
                                        </div>
                                    </div>
                                    <?php elseif($kategori->kode == "Vidio-Premier"): ?>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukkan Email" type="text"
                                                name="user_id" id="user_id" required>
                                        </div>                                    
                                        </div>
                                    <?php elseif($kategori->kode == "WeTV-Premium"): ?>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukkan Email" type="text"
                                                name="user_id" id="user_id" required>
                                        </div>
                                    </div>
                                    <?php elseif($kategori->kode == "Youtube-Premium"): ?>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3 text-black">
                                          <input class="form-floating block w-full rounded-md border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border: 1px solid #ced4da; focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukkan Email +( Password Khusus Email Sendiri )" type="text"
                                                name="user_id" id="user_id" required>
                                        </div>
                                    </div>
                                    
                                   
                                   
                                   <?php elseif($kategori->kode == "Voucher-Shell"): ?>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3 text-black">
                                          <input class="form-floating block w-full rounded-md border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border: 1px solid #ced4da; focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukan Nomor Whatsapp." type="text"
                                                name="user_id" id="user_id" required>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-sm" style="font-size: 12px; color: rgb(203, 203, 203);">Masukan nomor Handphone. Kode voucher otomatis terkirim melalui Riwayat Pesanan.</p>
                                    <?php elseif($kategori->kode == "Voucher-Steam"): ?>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3 text-black">
                                          <input class="form-floating block w-full rounded-md border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border: 1px solid #ced4da; focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukan Nomor Whatsapp." type="text"
                                                name="user_id" id="user_id" required>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-sm" style="font-size: 12px; color: rgb(203, 203, 203);">Masukan nomor Handphone. Kode voucher otomatis terkirim melalui Riwayat Pesanan.</p>
                                    <?php elseif($kategori->kode == "Voucher-Playstation"): ?>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3 text-black">
                                          <input class="form-floating block w-full rounded-md border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border: 1px solid #ced4da; focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukan Nomor Whatsapp." type="text"
                                                name="user_id" id="user_id" required>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-sm" style="font-size: 12px; color: rgb(203, 203, 203);">Masukan nomor Handphone. Kode voucher otomatis terkirim melalui Riwayat Pesanan.</p>
                                    <?php elseif($kategori->kode == "Voucher-Razer"): ?>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3 text-black">
                                          <input class="form-floating block w-full rounded-md border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border: 1px solid #ced4da; focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukan Nomor Whatsapp." type="text"
                                                name="user_id" id="user_id" required>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-sm" style="font-size: 12px; color: rgb(203, 203, 203);">Masukan nomor Handphone. Kode voucher otomatis terkirim melalui Riwayat Pesanan.</p>
                                    <?php elseif($kategori->kode == "Voucher-Roblox"): ?>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3 text-black">
                                          <input class="form-floating block w-full rounded-md border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border: 1px solid #ced4da; focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukan Nomor Whatsapp." type="text"
                                                name="user_id" id="user_id" required>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-sm" style="font-size: 12px; color: rgb(203, 203, 203);">Masukan nomor Handphone. Kode voucher otomatis terkirim melalui Riwayat Pesanan.</p>
                                    <?php elseif($kategori->kode == "Voucher-Valorant"): ?>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3 text-black">
                                          <input class="form-floating block w-full rounded-md border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border: 1px solid #ced4da; focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukan Nomor Whatsapp." type="text"
                                                name="user_id" id="user_id" required>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-sm" style="font-size: 12px; color: rgb(203, 203, 203);">Masukan nomor Handphone. Kode voucher otomatis terkirim melalui Riwayat Pesanan.</p>
                                   

                                    <?php elseif($kategori->kode == "gopay"): ?>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <input class="form-control" placeholder="Masukkan Nomor HP" type="text"
                                                name="user_id" id="user_id" required>
                                        </div>
                                    </div>
                                    
                                    <?php elseif($kategori->kode == "ovo"): ?>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <input class="form-control" placeholder="Masukkan Nomor HP" type="text"
                                                name="user_id" id="user_id" required>
                                        </div>
                                    </div>
                                    <?php elseif($kategori->kode == "dana"): ?>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <input class="form-control" placeholder="Masukkan Nomor HP" type="text"
                                                name="user_id" id="user_id" required>
                                        </div>
                                    </div>
                                    <?php elseif($kategori->kode == "linkaja"): ?>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                           <input class="form-control" placeholder="Masukkan Nomor HP" type="text"
                                                name="user_id" id="user_id" required>
                                        </div>
                                    </div>
                                    <?php elseif($kategori->kode == "shopeepay"): ?>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <input class="form-control" placeholder="Masukkan Nomor HP" type="text"
                                                name="user_id" id="user_id" required>
                                        </div>
                                    </div>
                                    <?php elseif($kategori->kode == "isaku"): ?>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <input class="form-control" placeholder="Masukkan Nomor HP" type="text"
                                                name="user_id" id="user_id" required>
                                        </div>
                                    </div>

                                   

                                    <?php elseif($kategori->kode == "Jasa-Joki"): ?>
                                    <div>
                                        <div class="row row-cols row-cols-md">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3 text-black">
                                                    
                                                    <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukkan Email"
                                                        type="text" name="email_joki" id="email_joki"
                                                        />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3 text-black">
                                                    
                                                    <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukkan Password"
                                                        type="text" name="password_joki" id="password_joki" 
                                                       />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3 text-black">
                                                   
                                                    <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Minimal Request 3 Hero"
                                                        type="text" name="request_joki" id="request_joki" 
                                                         />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3 text-black">
                                                    
                                                    <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Catatan Untuk Penjoki"
                                                        type="text" name="catatan_joki" id="catatan_joki" 
                                                         />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3 text-black">
                                                   
                                                    <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="NickName"
                                                        type="text" name="nickname_joki" id="nickname_joki"
                                                         />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3 text-black">
                                                    
                                                     <select class="form-select form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Login Via" id="loginvia_joki" name="loginvia_joki">
    				                <option value="_">Login Via</option>
    				                <option value="moonton">Moonton (Rekomendasi)</option>
    				                <option value="vk">VK</option>
    				                <option value="tiktok">Tiktok</option>
    				                <option value="facebook">Facebook</option>
    				            </select>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                    
                                    
                                    <?php elseif($kategori->kode == "Joki-Paket"): ?>
                                    <div>
                                        <div class="row row-cols row-cols-md">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3 text-black">
                                                    
                                                    <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukkan Email"
                                                        type="text" name="email_joki" id="email_joki"
                                                        />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3 text-black">
                                                    
                                                    <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukkan Password"
                                                        type="text" name="password_joki" id="password_joki" 
                                                       />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3 text-black">
                                                   
                                                    <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Minimal Request 3 Hero"
                                                        type="text" name="request_joki" id="request_joki" 
                                                         />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3 text-black">
                                                    
                                                    <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Catatan Untuk Penjoki"
                                                        type="text" name="catatan_joki" id="catatan_joki" 
                                                         />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3 text-black">
                                                   
                                                    <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="NickName"
                                                        type="text" name="nickname_joki" id="nickname_joki"
                                                         />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3 text-black">
                                                    
                                                     <select class="form-select form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Login Via" id="loginvia_joki" name="loginvia_joki">
    				                <option value="_">Login Via</option>
    				                <option value="moonton">Moonton (Rekomendasi)</option>
    				                <option value="vk">VK</option>
    				                <option value="tiktok">Tiktok</option>
    				                <option value="facebook">Facebook</option>
    				            </select>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                    
                                    <?php elseif($kategori->tipe == "Joki-Gendong"): ?>
                                    <div>
                                        <div class="row row-cols row-cols-md">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3 text-black">
                                                    
                                                    <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukkan Email"
                                                        type="text" name="email_joki" id="email_joki"
                                                        />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3 text-black">
                                                    
                                                    <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Masukkan Password"
                                                        type="text" name="password_joki" id="password_joki" 
                                                       />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3 text-black">
                                                   
                                                    <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Minimal Request 3 Hero"
                                                        type="text" name="request_joki" id="request_joki" 
                                                         />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3 text-black">
                                                    
                                                    <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Catatan Untuk Penjoki"
                                                        type="text" name="catatan_joki" id="catatan_joki" 
                                                         />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3 text-black">
                                                   
                                                    <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="NickName"
                                                        type="text" name="nickname_joki" id="nickname_joki"
                                                         />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3 text-black">
                                                    
                                                     <select class="form-select form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Login Via" id="loginvia_joki" name="loginvia_joki">
    				                <option value="_">Login Via</option>
    				                <option value="moonton">Moonton (Rekomendasi)</option>
    				                <option value="vk">VK</option>
    				                <option value="tiktok">Tiktok</option>
    				                <option value="facebook">Facebook</option>
    				            </select>
                                                </div>
                                            </div>
                                       </div>
                                    </div>



                                    

                                    <?php else: ?>

                                    <div class="grid gap-2 grid-cols-1">

                                        <div class="w-full">

                                            <div class="relative rounded-md text-black shadow-sm">

                                                <input
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                    name="userId" id="user_id" placeholder="User ID" type="text"
                                                    value="" fdprocessedid="8qd1hx" />

                                            </div>

                                        </div>

                                    </div>

                                    <p class="mt-2 text-xs">Silahkan Masukkan User ID
                                        Anda.</p>

                                    <?php endif; ?>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>



                <div class="card rounded-xl ">
                    <div class="card border-0 mb-0 shadow-form">
                        <div class="pl-2 py-1">
                            <div class="card-header flex align-items-center">
                                <img alt="step-two" srcset="/assets/icons/step-two.svg 1x, /assets/icons/step-two.svg 2x"
                                    src="/assets/icons/step-two.svg" width="26" height="26" decoding="async" data-nimg="1"
                                    loading="lazy" style="color: transparent; margin-left:-15px;" />
                                <h4 class="card-title mt-2 ms-2 lex items-center  font-extrabold leading-6 md:text-xl"
                                    style="color: rgb(234 234 234);">Pilih Nominal</h4>
                            </div>
                        </div>
                    </div>
                    <div class="px-1">
                        <div class="card-body">
                            <?php $__currentLoopData = $pakets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div id="tempatNominal" class="mb-4">
                                <h3 class="font-semibold ms-1"><?php echo e($paket['nama']); ?>s</h3>
                                <div class="row row-cols-2 mt-1">
                                    <?php $__currentLoopData = $paket['layanan']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-4 px-2 mt-2">
                                        <div class="list-group shadow h-100 ">
                                            <input type="radio" name="nominal" id="<?php echo e($nom->id); ?>" value="<?php echo e($nom->id); ?>" data-type="diamond">
                                            <label for="<?php echo e($nom->id); ?>" class="list-group-item h-100 bg-gradient">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row" id="bayar">
                                                            <div class="col hayutopup-prod selected-order "><?php echo e($nom->layanan); ?></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col nominal-price text-white">
                                                                <?php if($nom->is_flash_sale == 1 && $nom->expired_flash_sale >= date('Y-m-d')): ?>
                                                                        <span class="sale-price text-white"><i>Rp <?php echo e(number_format($nom->harga_flash_salee)); ?></i></span>
                                                                        <br>
                                                                        <span class="regular-price ">Rp <?php echo e(number_format($nom->harga)); ?></span>
                                                                        <?php else: ?>
                                                                        <span class="sale-price text-warning">Rp <?php echo e(number_format($nom->harga)); ?></span>
                                                                        <?php endif; ?>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-1 m-auto">
                                                        <img src="<?php echo e($nom->product_logo); ?>" class="patihiconurl">
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <?php if($kategori->tipe == "joki"): ?>
                <div class="card rounded-xl ">
                    <div class="card border-0 mb-0 shadow-form">
                        <div class="pl-2 py-1">
                            <div class="card-header flex align-items-center">
                                <!-- <img alt="step-two" srcset="/assets/icons/step-two.svg 1x, /assets/icons/step-two.svg 2x"
                                    src="/assets/icons/step-two.svg" width="26" height="26" decoding="async" data-nimg="1"
                                    loading="lazy" style="color: transparent; margin-left:-15px;" /> -->
                                <h4 class="card-title mt-2 ms-2 lex items-center  font-extrabold leading-6 md:text-xl"
                                    style="color: rgb(234 234 234);">Pilih Jumlah Order</h4>
                            </div>
                        </div>
                    </div>
                    <div class="px-1">
                        <div class="card-body">
                            <div id="tempatNominal" class="mb-4">
                                <div class="col-lg-6">
                                    <div class="form-group mb-3 text-black">
                                        <input class="form-floating block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]" placeholder="Minimal Order 5" type="text" name="jumlah_joki" id="jumlah_joki" value="1" />
                                    </div>
                                </div>
                            </div>
                             <p class="mt-2 text-sm" style="font-size: 12px; color: rgb(203, 203, 203);">Minimal Order adalah 5, Jika Kurang Dari Minimal Order Maka Uang Akan Hangus</p>
                        </div>
                       
                    </div>
                    
                </div>
                <?php endif; ?>
                <!--pilih pembayaran-->

                <div class="card rounded-xl" id="bayar">

                    <div class="card border-0 mb-0 shadow-form">

                        <div class="pl-2 py-1">
                            <div class="card-header flex align-items-center">

                                <img alt="step-two" srcset="/assets/icons/step-three.svg 1x, /assets/icons/step-three.svg 2x"
                                    src="/assets/icons/step-three.svg" width="26" height="26" decoding="async" data-nimg="1"
                                    loading="lazy" style="color: transparent; margin-left:-15px;" />

                                <h4 class="card-title mt-2 ms-2 lex items-center  font-extrabold leading-6 md:text-xl"
                                    style="color: rgb(234 234 234);">

                                    Pilih Pembayaran</h4>

                            </div>

                        </div>

                    </div>



                    <div class="px-1">

                        <div class="card-body">

                            <div class="row ">

                                <div class="col">

                                    <div class="area-list-payment-method">
                                        <?php if(auth()->guard()->check()): ?>                                            
                                        <div class="child-box payment-drawwer shadow">

                                            <div class="header short-payment-support-info-head"
                                                onclick="openPaymentDrawer(this)">

                                                <div class="left">

                                                    <b><i class="fas fa-bolt"></i> Saldo Akun</b>

                                                </div>

                                                <?php $__currentLoopData = $pay_method->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <div class="right glowing-text <?php echo e($p->code); ?> "></div>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </div>

                                            <div class="button-action-payment"
                                                style="display: none; background-color: rgb(50, 50, 62);">

                                                <div class="row p-1">

                                                    <div class="col-lg-4 p-1">

                                                        <div class="list-group1 h-100">

                                                            <input type="radio" name="pembayaran" id="SALDO" value="SALDO">

                                                            <label for="SALDO" class="list-group-item h-100">

                                                                <div class="info-top">

                                                                    <div>

                                                                        <i class="fas fa-wallet"></i>

                                                                        <?php echo e(!$config ? '' : $config->web_title); ?> PAY

                                                                    </div>

                                                                    <b class="SALDO" style="font-size: 11px;"></b>

                                                                </div>

                                                                <div class="info-bottom text-dark selected-order">

                                                                    <span class="text-dark meltihhh" id="pembay">

                                                                        Saldo

                                                                        <div class="bangjeff-dicek">

                                                                            Dicek Otomatis

                                                                        </div>

                                                                    </span>

                                                                </div>

                                                            </label>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                         <div class="short-payment-support-info flex h-8 w-full items-center justify-end overflow-hidden border-t hover:cursor-pointer transition-all duration-300 transform gap-2"
                                                onclick="openPaymentDrawer(this)">
                                                <span class="fas fa-wallet text-muted" aria-hidden="true"></span>
                                                <a class="open-button-action-payment">

                                                    <i class="fas fa-chevron-down" aria-hidden="true"></i>

                                                </a>

                                            </div>

                                        </div>
                                        <?php endif; ?>
                                        
                                       <div class="child-box payment-drawwer shadow">

                                            <div class="header short-payment-support-info-head"
                                                onclick="openPaymentDrawer(this)">

                                                <div class="left">

                                                    <b><i class="fas fa-wallet" aria-hidden="true"></i>

                                                        QRIS</b>

                                                </div>

                                                <?php $__currentLoopData = $pay_method->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <div class="right glowing-text <?php echo e($p->code); ?> "></div>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </div>

                                            <div class="button-action-payment"
                                                style="display: none; background-color: rgb(50, 50, 62);">

                                                <div class="row row-cols-2 row-cols-md-3 p-1">



                                                    <?php $__currentLoopData = $pay_method; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>





                                                    <?php if($p->tipe == 'qris'): ?>

                                                    <div class="col-lg-4 p-1">

                                                        <div class="list-group1 h-100">


                                                            <input type="radio" name="pembayaran" id="<?php echo e($p->code); ?>"
                                                                value="<?php echo e($p->code); ?>">


                                                            <label for="<?php echo e($p->code); ?>" class="list-group-item h-100">

                                                                <div class="info-top">

                                                                    <div>

                                                                        <img src="<?php echo e($p->images); ?>" alt="" height="10px">

                                                                    </div>

                                                <div class="right <?php echo e($p->code); ?> "></div>

                                                                </div>

                                                                <div
                                                                    class="info-bottom text-sm-left text-dark selected-order">

                                                                    <span class="text-dark meltihhh " id="pembay">

                                                                        <?php echo e($p->name); ?>


                                                                        <div class="bangjeff-dicek">

                                                                            <?php echo e($p->keterangan); ?>


                                                                        </div>

                                                                    </span>

                                                                </div>

                                                            </label>

                                                        </div>

                                                    </div>



                                                    <?php endif; ?>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </div>

                                            </div>

                                            <div class="short-payment-support-info flex h-8 w-full items-center justify-end overflow-hidden border-t hover:cursor-pointer transition-all duration-300 transform gap-2"
                                                onclick="openPaymentDrawer(this)">

                                                <?php $__currentLoopData = $pay_method; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <?php if($p->tipe == 'qris'): ?>

                                                <img src="<?php echo e($p->images); ?>" class="m-1 bangjeff-pgimg" style="">

                                                <?php endif; ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <a class="open-button-action-payment">

                                                    <i class="fas fa-chevron-down" aria-hidden="true"></i>

                                                </a>

                                            </div>

                                        </div>
                                        <div class="child-box payment-drawwer">

                                            <div class="header short-payment-support-info-head"
                                                onclick="openPaymentDrawer(this)">

                                                <div class="left">

                                                    <b><i class="fas fa-wallet" aria-hidden="true"></i>

                                                        E-Wallet</b>

                                                </div>

                                                <?php $__currentLoopData = $pay_method->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <div class="right glowing-text <?php echo e($p->code); ?>"></div>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </div>

                                            <div class="button-action-payment"
                                                style="display: none; background-color: rgb(50, 50, 62);">

                                                <div class="row row-cols-2 row-cols-md-3 p-1">



                                                    <?php $__currentLoopData = $pay_method; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>





                                                    <?php if($p->tipe == 'e-walet'): ?>

                                                    <div class="col-lg-4 p-1">

                                                        <div class="list-group1 h-100">

                                                            <input type="radio" name="pembayaran" id="<?php echo e($p->code); ?>"
                                                                value="<?php echo e($p->code); ?>">

                                                            <label for="<?php echo e($p->code); ?>" class="list-group-item h-100">

                                                                <div class="info-top">

                                                                    <div>

                                                                        <img src="<?php echo e($p->images); ?>" alt="" height="10px">

                                                                    </div>

                                                                    <b class="<?php echo e($p->code); ?>"
                                                                        style="font-size: 11px;"></b>

                                                                </div>

                                                                <div
                                                                    class="info-bottom text-sm-left text-dark selected-order">

                                                                    <span class="text-dark meltihhh" id="pembay"
                                                                        data-name="<?php echo e($p->name); ?>"
                                                                        data-keterangan="<?php echo e($p->keterangan); ?>">

                                                                        <?php echo e($p->name); ?>


                                                                        <div class="bangjeff-dicek">

                                                                            <?php echo e($p->keterangan); ?>


                                                                        </div>

                                                                    </span>

                                                                </div>

                                                            </label>

                                                        </div>

                                                    </div>



                                                    <?php endif; ?>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </div>

                                            </div>

                                            <div class="short-payment-support-info flex h-8 w-full items-center justify-end overflow-hidden border-t hover:cursor-pointer transition-all duration-300 transform gap-2"
                                                onclick="openPaymentDrawer(this)">

                                                <?php $__currentLoopData = $pay_method; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <?php if($p->tipe == 'e-walet'): ?>

                                                <img src="<?php echo e($p->images); ?>" class="m-1 bangjeff-pgimg" style="">

                                                <?php endif; ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <a class="open-button-action-payment">

                                                    <i class="fas fa-chevron-down" aria-hidden="true"></i>

                                                </a>

                                            </div>

                                        </div>

                                        <div class="child-box payment-drawwer">

                                            <div class="header short-payment-support-info-head"
                                                onclick="openPaymentDrawer(this)">

                                                <div class="left">

                                                    <b><i class="fas fa-credit-card" aria-hidden="true"></i> Vitrual Account</b>

                                                </div>

                                                <?php $__currentLoopData = $pay_method->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <div class="right glowing-text <?php echo e($p->code); ?>"></div>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </div>

                                            <div class="button-action-payment"
                                                style="display: none; background-color: rgb(50, 50, 62);">

                                                <div class="row row-cols-2 row-cols-md-3 p-1">





                                                    <?php $__currentLoopData = $pay_method; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                                                    <?php if($p->tipe == 'virtual-account'): ?>



                                                    <div class="col-lg-4 p-1">

                                                        <div class="list-group1 h-100">

                                                            <input type="radio" name="pembayaran" id="<?php echo e($p->code); ?>"
                                                                value="<?php echo e($p->code); ?>">

                                                            <label for="<?php echo e($p->code); ?>" class="list-group-item h-100">

                                                                <div class="info-top">

                                                                    <div>

                                                                        <img src="<?php echo e($p->images); ?>" alt="" height="10px">

                                                                    </div>

                                                                    <b class="<?php echo e($p->code); ?>"
                                                                        style="font-size: 11px;"></b>

                                                                </div>

                                                                <div
                                                                    class="info-bottom text-sm-left text-dark selected-order">

                                                                    <span class="text-dark meltihhh " id="pembay">

                                                                        <?php echo e($p->name); ?>


                                                                        <div class="bangjeff-dicek">

                                                                            <?php echo e($p->keterangan); ?>


                                                                        </div>

                                                                    </span>

                                                                </div>

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <?php endif; ?>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </div>

                                            </div>
                                            <div class="short-payment-support-info flex h-8 w-full items-center justify-end overflow-x-auto border-t hover:cursor-pointer transition-all duration-300 transform gap-2"
                                                onclick="openPaymentDrawer(this)"
                                                style="border-radius: 0 0 6px 6px; overflow-y: hidden; scroll-snap-type: x mandatory;">
                                                <div class="flex" style="scroll-snap-type: x mandatory;">
                                                    <?php $__currentLoopData = $pay_method; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($p->tipe == 'virtual-account'): ?>
                                                    <div class="payment-method"
                                                        style="scroll-snap-align: start; display: flex; align-items: center;">
                                                        <img src="<?php echo e($p->images); ?>" class="m-1 bangjeff-pgimg" style="">
                                                    </div>
                                                    <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <a class="open-button-action-payment" style="margin-left: 5px;">
                                                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                     <div class="child-box payment-drawwer shadow">

                                            <div class="header short-payment-support-info-head"
                                                onclick="openPaymentDrawer(this)"
                                                data-cf-modified-02988ce5d5669a4190e81d4d-="">

                                                <div class="left">

                                                    <b>

                                                        <i class="fas fa-store" aria-hidden="true"></i>

                                                        Convenience Store

                                                    </b>

                                                </div>

                                                <?php $__currentLoopData = $pay_method->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <div class="right glowing-text <?php echo e($p->code); ?>"></div>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </div>

                                            <div class="button-action-payment"
                                                style="display: none; background-color: rgb(50, 50, 62);">

                                                <div class="row row-cols-2 row-cols-md-3 p-1">

                                                    <?php $__currentLoopData = $pay_method; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <?php if($p->tipe == 'convenience-store'): ?>

                                                    <div class="col-lg-4 p-1">

                                                        <div class="list-group1 h-100">

                                                            <input type="radio" name="pembayaran" id="<?php echo e($p->code); ?>"
                                                                value="<?php echo e($p->code); ?>">

                                                            <label for="<?php echo e($p->code); ?>" class="list-group-item h-100">

                                                                <div class="info-top">

                                                                    <div>

                                                                        <img src="<?php echo e($p->images); ?>" alt="" height="10px">

                                                                    </div>

                                                                    <b class="<?php echo e($p->code); ?>"
                                                                        style="font-size: 11px;"></b>

                                                                </div>

                                                                <div
                                                                    class="info-bottom text-sm-left text-dark selected-order">

                                                                    <span class="text-dark meltihhh" id="pembay"
                                                                        data-name="<?php echo e($p->name); ?>"
                                                                        data-keterangan="<?php echo e($p->keterangan); ?>">

                                                                        <?php echo e($p->name); ?>


                                                                        <div class="bangjeff-dicek">

                                                                            <?php echo e($p->keterangan); ?>


                                                                        </div>

                                                                    </span>

                                                                </div>

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <?php endif; ?>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </div>

                                            </div>

                                            <div class="short-payment-support-info flex h-8 w-full items-center justify-end overflow-hidden border-t hover:cursor-pointer transition-all duration-300 transform gap-2"
                                                onclick="openPaymentDrawer(this)">

                                                <?php $__currentLoopData = $pay_method; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <?php if($p->tipe == 'convenience-store'): ?>

                                                <img src="<?php echo e($p->images); ?>" class="m-1 bangjeff-pgimg" style="">

                                                <?php endif; ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <a class="open-button-action-payment">

                                                    <i class="fas fa-chevron-down" aria-hidden="true"></i>

                                                </a>

                                            </div>

                                        </div>

                                    </div> 

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <div class="card rounded-xl">

                    <div class="card border-0 mb-0 shadow-form">

                        <div class="pl-2 py-1">
                            <div class="card-header flex align-items-center">

                                <img alt="step-one" srcset="/assets/icons/step-four.svg 1x, /assets/icons/step-four.svg 2x"
                                    src="/assets/icons/step-four.svg" width="26" height="26" decoding="async" data-nimg="1"
                                    loading="lazy" style="color: transparent; margin-left:-15px;" />

                                <h4 class="card-title mt-2 ms-2 lex items-center  font-extrabold leading-6 md:text-xl"
                                    style="color: rgb(234 234 234);">

                                    Kode promo</h4>

                            </div>

                        </div>

                    </div>

                    <div class="px-2">

                        <div class="card-body">

                            <div class="form-group mb-2">

                                <div class="relative rounded-md shadow-sm">

                                    <div class="relative w-full rounded-full">

                                        <div class=" absolute inset-y-0 left-0 flex items-center pl-3">

                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                                class="h-5 w-5 text-gray-400">

                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">

                                                </path>

                                            </svg>

                                        </div>

                                        <input type="text"
                                            class="form-control text-dark z-20 block w-full rounded-full p-2.5 pl-10 text-sm uppercase text-black focus:outline-none focus:border-[#707feb] focus:ring-2 focus:ring-[#2D2EAD]"
                                            id="voucher" placeholder="Kode Voucher">

                                        <button type="button" id="check"
                                            class="absolute btn-voucher btn-primary relative top-0 -right-[3px] rounded-r-full py-2.5 px-3 text-sm font-medium"
                                            style="background: rgb(184 15 15); color: rgb(255, 255, 255); margin-top:-0px; height:42px;">

                                            Pakai Voucher

                                        </button>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <div class="card rounded-xl">

                    <div class="card border-0 mb-0 shadow-form">

                        <div class="pl-2 py-1">
                            <div class="card-header flex align-items-center">

                                <img alt="step-two" srcset="/assets/icons/step-five.svg 1x, /assets/icons/step-five.svg 2x"
                                    src="/assets/icons/step-five.svg" width="26" height="26" decoding="async" data-nimg="1"
                                    loading="lazy" style="color: transparent; margin-left:-15px;" />

                                <h4 class="card-title mt-2 ms-2 lex items-center  font-extrabold leading-6 md:text-xl"
                                    style="color: rgb(234 234 234);">

                                    Nomor WhatsApp</h4>

                            </div>

                        </div>

                    </div>

                    <div class="px-2">

                        <div class="card-body">

                            <div class="form-group mb-2">

                                <input class="form-control input-lg rounded-pill py-2 my-2" placeholder="628xxxxx"
                                    type="number" name="nomor" id="nomor" required>

                            </div>

                            <p class="text-xs">Bukti pembelianmu akan kami

                                kirimkan ke WhatsApp.</p>



                            <div class="mt-0 mr-3">
                              

                                <div class="g-recaptcha " id="g-recaptcha" name="grecaptcha"
                                    data-sitekey="<?php echo e(!$config ? '' : $config->captcha_sitekey); ?>"></div>

                              

                            </div>

                            <div class="row mt-0">

                                <div class="col-lg-12 clearfix">

                                    <input type="hidden" id="apikey" name="apikey" value="">

                                    <input type="hidden" name="product_name" id="product_name" value="Mobile Legends">

                                    <input type="hidden" name="product_id" id="product_id" value="1">
                                    <input type="hidden" name="ktg_tipe" id="ktg_tipe" value="<?php echo e($kategori->tipe); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    @media (max-width: 764px) {
                        .melll {
                            display: none;
                        }
                    }

                    @media (min-width: 764px) {
                        .melll {
                            display: block;

                        }
                    }
                </style>

               <button style="box-shadow: 0 .5rem 1rem rgba(255,255,255,.152)!important; background: rgb(184 15 15); color: rgb(255, 255, 255)"
                        class="melll btn-primary mt-4 items-center justify-center rounded-md bg-primary-500 px-4 py-2 text-sm font-medium text-white duration-300 hover:bg-primary-400 disabled:cursor-not-allowed disabled:opacity-75 btn-order relative flex w-full gap-2 overflow-hidden"
                        id="order" type="button" onclick="startLoadingg()">
                    <div class="containerrrr">
                        <div class="flex justify-content-center">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            <p id="orderText" class="ms-2">Order Now</p>
                        </div>
                        <div id="spinner" class="spinner">
                            <i class="fa fa-spinner fa-spin"></i>
                            <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                
                        </div>
                    </div>
                </button>
                <style>
                .containerrrr {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                
                .spinner {
                    display: none;
                }
                
                </style>
                <div class="sticky inset-x-0 bottom-0 z-10 -mx-4 !mt-0 w-screen bg-gray-300 d-md-none">
                    <div class="container space-y-0 py-3">
                        <div class="flex items-start justify-start space-x-4 py-2 md:hidden">
                            <div class="flex w-full flex-col space-y-1">
                                <div class="rounded-md border-l-4 border-yellow-400 bg-yellow-100 p-4">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                                class="h-5 w-5 text-yellow-500">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm text-yellow-700">Belum ada item produk yang dipilih.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-start justify-start space-x-4 py-1 md:hidden">
                            <div class="mb-2 aspect-square tihmel-5">
                                <img alt="icon" sizes="100vw" srcset="<?php echo e($kategori->thumbnail); ?>"
                                    src="<?php echo e($kategori->thumbnail); ?>" width="300" height="300" decoding="async"
                                    data-nimg="1" class="aspect-square tihmel-5 rounded-lg object-cover" loading="lazy"
                                    style="color: transparent" />
                            </div>
                            <div class="flex w-full flex-col space-y-1">
                                <div class="text-xs font-semibold cana select glowing-text"></div>
                                <div class="text-xs font-semibold selected-order"></div>
                                <p class="text-xs font-semibold text-warning selected-order"></p>
                                <div class="flex w-full items-center">
                                    <p class="text-xs italic select"></p>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <button
                                style="box-shadow: 0 .5rem 1rem rgba(255,255,255,.152)!important; background: rgb(184 15 15); color: rgb(255, 255, 255)"
                                class="btn-primary mt-4 inline-flex items-center justify-center rounded-md bg-primary-500 px-4 py-2 text-sm font-medium text-white duration-300 hover:bg-primary-400 disabled:cursor-not-allowed disabled:opacity-75 btn-order relative flex w-full gap-2 overflow-hidden"
                                id="orderr" onclick="startLoading()" type="button">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                Pesan Sekarang!
                                <div id="spinnerr" class="spinner"></div>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                
                            </button>
                        </div>
                    </div>
                </div>


                
            </ul>
        </div>
</div>


<section id="qa">
    <!--1-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto ">
                <div class="mt-3 overflow-hidden rounded-lg">
                    <div class="null bg-gradient-black">
                        <button
                            class="flex w-full justify-between rounded-lg px-4 py-3 text-left text-md font-semibold !border-b border-[#626274] rounded-[1rem]"
                            data-bs-toggle="collapse" data-bs-target="#meltih" aria-expanded="false"
                            aria-controls="CollapseThreee">
                            <small>Apa Itu <?php echo e(config('app.name')); ?> ?</small>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" class="rotate-180 transform h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5">
                                </path>
                            </svg>
                        </button>
                        <div class="px-3 pt-3 pb-3 text-sm collapse" id="meltih" class="collapse"
                            aria-labelledby="HeadingThreee" data-bs-parent="#Accordione">
                            <ul>
                                <li class="whitespace-pre-line">
                                    <?php echo e(config('app.name')); ?> adalah Platform website top up game termurah, tercepat, dan
                                    terpercaya di Indonesia.
                                    Proses cepat membuat Anda nyaman Top Up disini.
                                    Dengan Menyediakan berbagai macam pembayaran Transfer Bank, E-Wallet, Scan QR,
                                    Alfamart, & Indomart dan pasti memudahkan anda untuk Top Up akun games kalian.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--2-->
    <?php if($kategori->kode == "mobile-legends"): ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto ">
                <div class="mt-3 overflow-hidden rounded-lg">
                    <div class="null bg-gradient-black">
                        <button
                            class="flex w-full justify-between rounded-lg px-4 py-3 text-left text-md font-semibold !border-b border-[#626274] rounded-[1rem]"
                            data-bs-toggle="collapse" data-bs-target="#meltihh" aria-expanded="false"
                            aria-controls="CollapseThreee">
                            <small>Cara Top Up Diamond Mobile Legends?</small>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" class="rotate-180 transform h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5">
                                </path>
                            </svg>
                        </button>
                        <div class="px-3 pt-3 pb-3 text-sm collapse" id="meltihh" class="collapse"
                            aria-labelledby="HeadingThreee" data-bs-parent="#Accordione">
                            <ol>
                                <li>
                                    Kunjungi halaman “<a href="<?php echo e(route('home')); ?>/order/mobile-legends"
                                        rel="noopener noreferrer" target="_blank" style="color: #e75c5c;"><strong>Topup
                                            Mobile Legends Murah</strong></a>” di <?php echo e(config('app.name')); ?>

                                </li>
                                <li>
                                    Masukkan User ID dan Zone ID, klik “<a
                                        href="<?php echo e(route('home')); ?>/order/mobile-legends" rel="noopener noreferrer"
                                        target="_blank" style="color: #e75c5c;"><strong>Klik tanda
                                            tanya</strong></a><strong>”</strong>.
                                </li>
                                <li>Pilih jumlah diamond yang ingin dibeli.</li>
                                <li>Pilih metode pembayaran yang kamu inginkan,</li>
                                <li>Masukkan nomor Whatsapp, kemudian klik tombol <b>“Order Now”</b></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</section>
</main>



<div class="container">

    <div class="modal fade" id="petunjukModal" tabindex="-1" aria-labelledby="petunjukModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content " style="background: none; border: none;">

                <div class="modal-body" style="background: none; border: none;">

                    <img src="<?php echo e($kategori->petunjuk); ?>" alt="" class="img-fluid">

                </div>

                <div class="modal-footer" style="background: none; border: none;">

                    <button type="button" class="btn mx-auto w-25 text-white " data-bs-dismiss="modal"
                        style="background: none; border: none;">X</button>

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





<?php $__env->stopSection(); ?>



<?php $__env->startSection('js'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script async src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script>
    function showInitialElement() {
        var initialElement = document.querySelector('.flex.items-start.justify-start.space-x-4.py-2.md\\:hidden');
        var selectedElement = document.querySelector('.flex.items-start.justify-start.space-x-4.py-1.md\\:hidden');
        initialElement.style.display = 'flex';
        selectedElement.style.display = 'none';
    }

    function showSelectedElement() {
        var initialElement = document.querySelector('.flex.items-start.justify-start.space-x-4.py-2.md\\:hidden');
        var selectedElement = document.querySelector('.flex.items-start.justify-start.space-x-4.py-1.md\\:hidden');
        initialElement.style.display = 'none';
        selectedElement.style.display = 'flex';
    }

    function updateSelectedElement(name, price) {
        var selectedOrderElement = document.querySelector('.text-xs.font-semibold.selected-order');
        var energyYellowElement = document.querySelector('.text-xs.font-semibold.text-warning.selected-order');
        var viaElement = document.querySelector('.flex.w-full.items-center p.text-xs.italic');

        selectedOrderElement.textContent = name;
        energyYellowElement.textContent = price;
    }

    var listGroupItems = document.querySelectorAll('.list-group-item.h-100');

    listGroupItems.forEach(function (item) {
        item.addEventListener('click', function () {
            var name = this.querySelector('.hayutopup-prod').textContent;
            var price = this.querySelector('.sale-price') ? this.querySelector('.sale-price')
                .textContent : this.querySelector('.text-dark.meltih').textContent;
            updateSelectedElement(name, price);
            showSelectedElement();
        });
    });

    showInitialElement();
</script>


<script>
    var listGroupItems = document.querySelectorAll('.list-group1');
    listGroupItems.forEach(function (item) {
        item.addEventListener('click', function () {
            var name = this.querySelector('.text-dark.meltihhh').textContent.trim();
            var selectElement = document.querySelector('.text-xs.italic.select');
            selectElement.textContent = name;
        });
    });
</script>
<script>
    var listGroupItems = document.querySelectorAll('#tempatNominal');
    listGroupItems.forEach(function (item) {
        item.addEventListener('click', function () {
            var name = this.querySelector('.font-semibold.ms-1').textContent.trim();
            var selectElement = document.querySelector('.text-xs.font-semibold.cana.select.glowing-text');
            selectElement.textContent = name;
        });
    });
</script>







<script>
    function startLoading() {
  var button = document.getElementById("orderr");
  var spinner = document.getElementById("spinnerr");

  button.classList.add("button-loading");
  spinner.style.display = "inline-block";

  setTimeout(function () {
    button.classList.remove("button-loading");
    spinner.style.display = "none";
  }, 4000);
}

    function startLoadingg() {
  var button = document.getElementById("order");
  var spinner = document.getElementById("spinner");

  button.classList.add("button-loading");
  spinner.style.display = "inline-block";

  setTimeout(function () {
    button.classList.remove("button-loading");
    spinner.style.display = "none";
  }, 4000);
}

</script>



<script>
    function openPaymentDrawer(elem) {

        var $this = $(elem);

        if ($('input[type="radio"][name="nominal"]:checked').val() == null) {

            toastr.warning("Silahkan pilih Nominal terlebih dahulu");

            $('html,body').animate({
                scrollTop: $('#tempatNominal').offset().top - 300
            }, 400);

            return;

        }



        $('.payment-drawwer').not(this).each(function () {

            var $parents = $(this);

            $parents.find('.button-action-payment').slideUp(function () {

                $parents.removeClass('active');

            });



            $parents.find('.short-payment-support-info').find('img').slideDown();

            $parents.find('.short-payment-support-info').find('i').removeClass('fa-chevron-up').addClass(

                'fa-chevron-down');

        });



        var $parents = $this.parents('.child-box');



        if (!$parents.find('.button-action-payment').is(":hidden")) {

            $parents.find('.button-action-payment').slideUp(function () {

                $parents.removeClass('active');

            });



            $parents.find('.short-payment-support-info').find('img').slideDown();

            $parents.find('.short-payment-support-info').find('.fa-chevron-up').removeClass('fa-chevron-up').addClass(

                'fa-chevron-down');



        } else {

            $parents.find('.button-action-payment').slideDown(function () {

                $parents.addClass('active');

            });

            $parents.find('.short-payment-support-info').find('img').slideUp();

            $parents.find('.short-payment-support-info').find('.fa-chevron-down').addClass('fa-chevron-up').removeClass(

                'fa-chevron-down');



            $('html, body').animate({

                scrollTop: $('#openPaymentDrawer').offset().top - 500

            }, 400);



        }

    }
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $("input[type=radio][name=nominal]").change(function () {
            var nominal = $("input[name='nominal']:checked").val();
            var jumlah_joki = $("#jumlah_joki").val();
            var ktg_tipe = $("#ktg_tipe").val();
            if (nominal) {
                $.ajax({
                    url: "<?php echo route('ajax.price') ?>",
                    dataType: "json",
                    type: "POST",
                    data: {
                        "_token": "<?php echo csrf_token() ?>",
                        "nominal": nominal,
                        "jumlah_joki": jumlah_joki,
                        "ktg_tipe" : ktg_tipe
                    },
                    success: function (res) {
                        changeHarga(res.harga);
                    }
                })
            }
        });
        $("#jumlah_joki").on("keyup", function () {
            var nominal = $("input[name='nominal']:checked").val();
            var jumlah_joki = $("#jumlah_joki").val();
            var ktg_tipe = $("#ktg_tipe").val();
            if (nominal) {
                $.ajax({
                    url: "<?php echo route('ajax.price') ?>",
                    dataType: "json",
                    type: "POST",
                    data: {
                        "_token": "<?php echo csrf_token() ?>",
                        "nominal": nominal,
                        "jumlah_joki": jumlah_joki,
                        "ktg_tipe" : ktg_tipe
                    },
                    success: function (res) {
                        changeHarga(res.harga);
                    }
                })
            }
        });
        $("#orderr").on("click", function () {
            var uid = $("#user_id").val();
            var zone = $("#zone").val();
            var password_joki = $("#password_joki").val();
            var email_joki = $("#email_joki").val();
            var loginvia_joki = $("#loginvia_joki").val();
            var nickname_joki = $("#nickname_joki").val();
            var request_joki = $("#request_joki").val();
            var catatan_joki = $("#catatan_joki").val();
            var jumlah_joki = $("#jumlah_joki").val();
            var service = $("input[name='nominal']:checked").val();
            var pembayaran = $("input[name='pembayaran']:checked").val();
            var nomor = $("input[name='nomor']").val();
            var ktg_tipe = $("#ktg_tipe").val();
            var voucher = $("#voucher").val();
            $.ajax({
                url: "<?php echo route('ajax.confirm-data') ?>",
                dataType: "JSON",
                type: "POST",
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'uid': uid,
                    'zone': zone,
                    'service': service,
                    'payment_method': pembayaran,
                    'nomor': nomor,
                    'grecaptcha': grecaptcha.getResponse(),
                    'email_joki' : email_joki,
                    'password_joki' : password_joki,
                    'loginvia_joki' : loginvia_joki,
                    'nickname_joki' : nickname_joki,
                    'request_joki' : request_joki,
                    'catatan_joki' : catatan_joki,
                    'jumlah_joki' : jumlah_joki,
                    'ktg_tipe' : ktg_tipe,
                    'voucher': voucher
                },
                complete: function () {
                    grecaptcha.reset();
                },
                success: function (res) {
                    if (res.status == true) {
                        Swal.fire({
                            background: '#222831',
                            color: '#fff',
                            html: `${res.data}`,
                            showCancelButton: true,
                            confirmButtonText: 'Beli Sekarang',
                            cancelButtonText: 'Batal',
                            customClass: {
                                title: 'swal-title',
                                htmlContainer: 'swal-text'
                            }

                        }).then(resp => {
                            if (resp.isConfirmed) {
                                var nickname = $("#nick").text();
                                var nohp = $("input[name='nomor']").val();
                             //   var email = $("input[name='email']").val();
                                $.ajax({
                                    url: "<?php echo route('order') ?>",
                                    dataType: "JSON",
                                    type: "POST",
                                    data: {
                                        '_token': '<?php echo csrf_token() ?>',
                                        'nickname': nickname,
                                        'uid': uid,
                                        'zone': zone,
                                        'service': service,
                                        'payment_method': pembayaran,
                                        'nomor': nohp,
                                        'email_joki' : email_joki,
                                        'password_joki' : password_joki,
                                        'loginvia_joki' : loginvia_joki,
                                        'nickname_joki' : nickname_joki,
                                        'request_joki' : request_joki,
                                        'catatan_joki' : catatan_joki,
                                        'jumlah_joki' : jumlah_joki,
                                        'ktg_tipe' : ktg_tipe,
                                        'voucher': voucher
                                    },
                                    beforeSend: function () {
                                        Swal.fire({
                                            icon: "info",
                                            title: "Mohon Tunggu",
                                            background: '#222831',
                                            color: '#fff',
                                            showConfirmButton: false,
                                            allowOutsideClick: true,
                                        });
                                    },
                                    success: function (resOrder) {
                                        if (resOrder.status) {
                                            Swal.fire({
                                                title: 'Berhasil memesan!',
                                                text: `Order ID : ${resOrder.order_id}`,
                                                icon: 'success',
                                                background: '#222831',
                                                color: '#fff'
                                            });
                                            window.location =
                                                `/pembelian/invoice/${resOrder.order_id}`;
                                        } else {
                                            Swal.fire({
                                                title: 'Oops...',
                                                text: `${resOrder.data}`,
                                                icon: 'error',
                                                background: '#222831',
                                                color: '#fff'
                                            });
                                        }
                                    }
                                })
                            }
                        })
                    } else if (res.status == false) {
                        Swal.fire({
                            title: 'Oops...',
                            text: res.data,
                            icon: 'error',
                            background: '#222831',
                            color: '#fff'
                        });
                    } else {
                        Swal.fire({
                            title: 'Oops...',
                            text: 'User ID tidak ditemukan.',
                            icon: 'error',
                            background: '#222831',
                            color: '#fff'
                        });
                    }
                },
                error: function (e) {
                    if (e.status == 422) {
                        Swal.fire({
                            title: 'Oops...',
                            text: 'Pastikan anda sudah mengisi semua data yang diperlukan.',
                            icon: 'error',
                            background: '#222831',
                            color: '#fff'
                        });
                    }
                }
            })
        })
        $("#order").on("click", function () {
            var uid = $("#user_id").val();
            var zone = $("#zone").val();
            var password_joki = $("#password_joki").val();
            var loginvia_joki = $("#loginvia_joki").val();
            var nickname_joki = $("#nickname_joki").val();
            var request_joki = $("#request_joki").val();
            var catatan_joki = $("#catatan_joki").val();
            var jumlah_joki = $("#jumlah_joki").val();
            var email_joki = $("#email_joki").val();
            var ktg_tipe = $("#ktg_tipe").val();
            var service = $("input[name='nominal']:checked").val();
            var pembayaran = $("input[name='pembayaran']:checked").val();
            var nomor = $("input[name='nomor']").val();
            var voucher = $("#voucher").val();
            $.ajax({
                url: "<?php echo route('ajax.confirm-data') ?>",
                dataType: "JSON",
                type: "POST",
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'uid': uid,
                    'zone': zone,
                    'service': service,
                    'payment_method': pembayaran,
                    'nomor': nomor,
                    'grecaptcha': grecaptcha.getResponse(),
                    'email_joki' : email_joki,
                    'password_joki' : password_joki,
                    'loginvia_joki' : loginvia_joki,
                    'nickname_joki' : nickname_joki,
                    'request_joki' : request_joki,
                    'catatan_joki' : catatan_joki,
                    'jumlah_joki' : jumlah_joki,
                    'ktg_tipe' : ktg_tipe,
                    'voucher': voucher
                },
                complete: function () {
                    grecaptcha.reset();
                },
                success: function (res) {
                    if (res.status == true) {
                        Swal.fire({
                            background: '#222831',
                            color: '#fff',
                            html: `${res.data}`,
                            showCancelButton: true,
                            confirmButtonText: 'Lanjutkan Pembelian',
                            cancelButtonText: 'Batal',
                            customClass: {
                                title: 'swal-title',
                                htmlContainer: 'swal-text'
                            }

                        }).then(resp => {
                            if (resp.isConfirmed) {
                                var nickname = $("#nick").text();
                                var nohp = $("input[name='nomor']").val();
                             //   var email = $("input[name='email']").val();
                                $.ajax({
                                    url: "<?php echo route('order') ?>",
                                    dataType: "JSON",
                                    type: "POST",
                                    data: {
                                        '_token': '<?php echo csrf_token() ?>',
                                        'nickname': nickname,
                                        'uid': uid,
                                        'zone': zone,
                                        'service': service,
                                        'payment_method': pembayaran,
                                        'nomor': nohp,
                                        'email_joki' : email_joki,
                                        'password_joki' : password_joki,
                                        'loginvia_joki' : loginvia_joki,
                                        'nickname_joki' : nickname_joki,
                                        'request_joki' : request_joki,
                                        'catatan_joki' : catatan_joki,
                                        'jumlah_joki' : jumlah_joki,
                                        'ktg_tipe' : ktg_tipe,
                                        'voucher': voucher

                                    },
                                    beforeSend: function () {
                                        Swal.fire({
                                            icon: "info",
                                            title: "Mohon Tunggu",
                                            background: '#222831',
                                            color: '#fff',
                                            showConfirmButton: false,
                                            allowOutsideClick: true,
                                        });
                                    },
                                    success: function (resOrder) {
                                        if (resOrder.status) {
                                            Swal.fire({
                                                title: 'Berhasil memesan!',
                                                text: `Order ID : ${resOrder.order_id}`,
                                                icon: 'success',
                                                background: '#222831',
                                                color: '#fff'
                                            });
                                            window.location =
                                                `/pembelian/invoice/${resOrder.order_id}`;
                                        } else {
                                            Swal.fire({
                                                title: 'Oops...',
                                                text: `${resOrder.data}`,
                                                icon: 'error',
                                                background: '#222831',
                                                color: '#fff'
                                            });
                                        }
                                    }
                                })
                            }
                        })
                    } else if (res.status == false) {
                        Swal.fire({
                            title: 'Oops...',
                            text: res.data,
                            icon: 'error',
                            background: '#222831',
                            color: '#fff'
                        });
                    } else {
                        Swal.fire({
                            title: 'Oops...',
                            text: 'User ID tidak ditemukan.',
                            icon: 'error',
                            background: '#222831',
                            color: '#fff'
                        });
                    }
                },
                error: function (e) {
                    if (e.status == 422) {
                        Swal.fire({
                            title: 'Oops...',
                            text: 'Pastikan anda sudah mengisi semua data yang diperlukan.',
                            icon: 'error',
                            background: '#222831',
                            color: '#fff'
                        });
                    }
                }
            })
        })

        $("#check").on("click", function () {
            var voucher = $("#voucher").val();
            var service = $("input[name='nominal']:checked").val();
            $.ajax({
                url: "<?php echo route('check.voucher') ?>",
                dataType: "JSON",
                type: "POST",
                data: {
                    "_token": "<?php echo csrf_token(); ?>",
                    "voucher": voucher,
                    "service": service
                },
                beforeSend: function () {
                    Swal.fire({
                        icon: "info",
                        title: "Mohon Tunggu",
                        background: '#222831',
                        color: '#fff',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                    });
                },
                success: function (res) {
                    Swal.fire({
                        icon: "info",
                        title: res.message,
                        background: '#222831',
                        color: '#fff',
                        showConfirmButton: true,
                        allowOutsideClick: true,
                    });

                    if (res.harga) {
                        changeHarga(res.harga);
                    }
                },
                error: function (e) {
                    Swal.fire({
                        title: 'Oops...',
                        text: e.responseJSON.message,
                        icon: 'error',
                        background: '#222831',
                        color: '#fff'
                    });
                }
            })
        });

    });

    function changeHarga(harga) {
        $(".QRIS").html(harga);
        $(".QRISC").html(harga);
        $(".GOPAY").html(harga);
        $(".PERMATAVA").html(harga);
        $(".CIMBVA").html(harga);
        $(".CIMBVA").html(harga);
        $(".BSI").html(harga);
        $(".BMI").html(harga);
        $(".BSIVA").html(harga);
        $(".BNIVA").html(harga);
        $(".BRIVA").html(harga);
        $(".MANDIRIVA").html(harga);
        $(".BCAVA").html(harga);
        $(".ALFAMART").html(harga);
        $(".INDOMARET").html(harga);
        $(".ALFAMIDI").html(harga);
        $(".MANDIRIVA").html(harga);
        $(".OVOS").html(harga);
        $(".QRIS2").html(harga);
        $(".MYBVA").html(harga);
        $(".SMSVA").html(harga);
        $(".MUAMALATVA").html(harga);
        $(".OVO").html(harga);
        $(".SHOPEEPAY").html(harga);
        $(".BSS").html(harga);
        $(".LINKAJA").html(harga);
        $(".DANA").html(harga);
        $(".SALDO").html(harga);
        $(".QRISD").html(harga);
        $(".BCATF").html(harga);
        $(".MANDIRITF").html(harga);
    }
</script>

<?php echo $__env->make('../footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mysticpe/fast21.my.id/demo6.fast21.my.id/system/resources/views/components/order.blade.php ENDPATH**/ ?>