  <style>
  
  .opacity-100 {
    opacity: 1;
}
.pt-4 {
    padding-top: 1rem;
}
.pr-2 {
    padding-right: 0.5rem;
}
.flex {
    display: flex;
}
.-mr-10 {
    margin-right: -2.5rem;
}
.top-0 {
    top: 0;
}
.right-0 {
    right: 0;
}
.absolute {
    position: absolute;
}
      .css-1wpp9sf {
    color: rgb(255, 255, 255);
    background: rgb(245, 121, 30);
}
.duration-300 {
    transition-duration: .3s;
}
.transition {
    transition-property: color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;
    transition-property: color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;
    transition-property: color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;
    transition-timing-function: cubic-bezier(.4,0,.2,1);
    transition-duration: .15s;
}
.font-medium {
    font-weight: 500;
}
.text-sm {
    font-size: .875rem;
    line-height: 1.25rem;
}
.py-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}
.rounded-l-full {
    border-top-left-radius: 9999px;
    border-bottom-left-radius: 9999px;
}
.justify-center {
    justify-content: center;
}
.w-full {
    width: 100%;
}
.flex {
    display: flex;
}
a {
    color: inherit;
    text-decoration: inherit;
}
  </style>
  
  
  <!--Navbar -->
    <header class="mb-5">
    <nav class="fixed top-0 z-40 w-full" data-headlessui-state="open" style="background: rgb( 23, 23, 23);" data-aos="fade-down">
    <div class="mx-auto max-w-7xl px-3 sm:px-6 lg:px-[3.2rem]">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center">
                <button class="navbar-toggler border-0 " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="block h-6 w-6"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path></svg>
            </button>
            
            </div>

<!-- Show Daftar / Masuk -->
            <div class="flex flex-1 items-center sm:items-center sm:justify-start ml-12 gap-4">
                <div class="flex flex-shrink-0 items-center">
                    <a class="relative w-auto" href="<?php echo e(route('home')); ?>">
                        <img alt="logo" srcset="<?php echo e(isset($logoheader->path) ? $logoheader->path : ""); ?>" src="" width="50" height="50" decoding="async" data-nimg="1" class="block h-10 w-auto" loading="lazy" style="color: transparent;" />
                    </a>
                </div>
                <p class="hidden md:block text-sm text-ellipsis truncate md:w-[75%] lg:w-[100%] leading-normal italic " style="margin-top:5px;">Website top-up tercepat dan terpercaya di Indonesia.</p>
            </div>
           <div class="relative" data-headlessui-state="open">
      <div>
    
      
       </div>
       
        <div class="flex items-center space-x-5 ">
    <div class="h-7" style="margin-right:1rem;">
       

    </div>
    
     <button id="showSearchButton" type="button" onclick="toggleInput()">

  <div class="flex gap-2 pr-3 lg:pr-2">

    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-6 w-6" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">

      <g>

        <path fill="none" d="M0 0h24v24H0z"></path>

        <path d="M11 2c4.968 0 9 4.032 9 9s-4.032 9-9 9-9-4.032-9-9 4.032-9 9-9zm0 16c3.867 0 7-3.133 7-7 0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7zm8.485.071l2.829 2.828-1.415 1.415-2.828-2.829 1.414-1.414z"></path>

      </g>

    </svg>

  </div>

  <div class="flex gap-2 pr-0 lg:pr-2">

    

  </div>

</button>
    <?php if(auth()->guard()->guest()): ?>
      <button class="inline-flex d-block d-lg-block justify-center rounded-md py-2 text-sm font-medium hover:bg-opacity-30 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75" id="headlessui-menu-button-:R1qd6:" type="button" aria-haspopup="menu" aria-expanded="false" data-headlessui-state="closed" aria-controls="headlessui-menu-items-:r0:">
            <div class="flex gap-2 pr-0 lg:pr-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" width="24" height="24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9"></path>
                </svg>

            </div>
            <div class="flex gap-2 pr-0 lg:pr-2 ">
              
            </div>
        </button>
        <?php endif; ?>
        
        
<?php if(auth()->guard()->check()): ?>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
    <div class="relative">
        <div>
            <button id="headlessui-menu-button-:R1qd6:" type="button" aria-haspopup="menu" aria-expanded="false" data-headlessui-state="closed" aria-controls="headlessui-menu-items-:r0:"
                class="inline-flex w-full justify-center rounded-md py-2 text-sm font-medium hover:bg-opacity-30 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75"
                id="headlessui-menu-button-:R1qd6:"
              
            >
                <div class="relative h-8 w-8">
                    <img
                        alt=""
                        sizes="100vw"
                        srcset="/assets/logo/logo-user.png"
                        src=""
                        decoding="async"
                        data-nimg="fill"
                        class="rounded-full ring-1 ring-white"
                        loading="lazy"
                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                    />
                </div>
            </button>
        </div>
       <div class="absolute right-0 mt-2 w-72 origin-top-right divide-y divide-gray-100 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-non css-18exuzb transform opacity-0 scale-95 hidden" aria-labelledby="headlessui-menu-button-:R1qd6:" id="headlessui-menu-items-:r0:" role="menu" tabindex="0" data-headlessui-state="closed">
                <div class="" role="none">
            
            <div class="px-1 py-1" role="none" id="headlessui-menu-item-:r1:" role="menuitem" tabindex="-1" data-headlessui-state="1">
                 <?php if(auth()->guard()->check()): ?>
                          <?php if(Auth::user()->role == "Admin"): ?>
                             <a class="group flex w-full items-center rounded-md px-2 py-2 text-sm transition duration btn-patih" id="headlessui-menu-item-:rf:" role="menuitem" tabindex="-1" data-headlessui-state="" href="<?php echo e(route('dashboard')); ?>"><i class="fa-sharp fa-solid fa-screwdriver-wrench"></i>&nbsp;MyAdmin</a>
                          <?php endif; ?>
                        <?php endif; ?>
                        
                
                      	<?php if(auth()->guard()->check()): ?>
                      	 <?php if(Auth::user()->role !== "Admin"): ?>
                <a class="group flex w-full items-center rounded-md px-2 py-2 text-sm transition duration hover:bg-murky-700" id="headlessui-menu-item-:rf:" role="menuitem" tabindex="-1" data-headlessui-state="" href="<?php echo e(url('/user/dashboard')); ?>" ><i class="fas fa-home"></i>&nbsp;Dashboard</a>
                  <?php endif; ?>
                <a class="group flex w-full items-center rounded-md px-2 py-2 text-sm transition duration hover:bg-murky-700" id="headlessui-menu-item-:rg:" role="menuitem" tabindex="-1" data-headlessui-state="" href="/deposit">
                   <i class="fas fa-wallet"></i>&nbsp;IDR  <?php echo e(number_format(Auth::user()->balance, 0, ',', '.')); ?>

                </a>
                  <form action="<?php echo e(route('logout')); ?>" method="POST">
                      <?php echo csrf_field(); ?>
                <button class="group flex w-full items-center rounded-md px-2 py-2 text-sm transition duration hover:bg-murky-700" href="/logout" id="headlessui-menu-item-:ri:" role="menuitem" tabindex="-1" data-headlessui-state=""><i class="fa-sharp fa-solid fa-right-from-bracket"></i>&nbsp;Keluar</button>
                </form>
            </div>
        </div>
    </div>
</div>
        <?php endif; ?>

</div>

                             <?php endif; ?>
            <div class="absolute right-0 mtman w-72 origin-top-right divide-y divide-gray-100 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-non css-18exuzb transform opacity-0 scale-95 hidden" aria-labelledby="headlessui-menu-button-:R1qd6:" id="headlessui-menu-items-:r0:" role="menu" tabindex="0" data-headlessui-state="closed">
                <div class="px-1 py-1" role="none"><style>
                                        .mtman {
                        margin-top: 14rem;
                    }
                </style>
                    <div id="headlessui-menu-item-:r1:" role="menuitem" tabindex="-1" data-headlessui-state="1">
                        <div class="text-center mt-4">
                            <img alt="mbgs-logo-" srcset="<?php echo e(isset($logoheader->path) ? $logoheader->path : ""); ?>" src="<?php echo e(isset($logoheader->path) ? $logoheader->path : ""); ?>" width="150" height="120" decoding="async" data-nimg="1" class="mx-auto" loading="lazy" style="color: transparent;"/>
                            <p class="text-md font-normal mt-2">Selamat datang di <strong><?php echo e(config('app.name')); ?></strong></p>
                        </div>
                            <div class="flex w-full p-3">
                             
                              <?php if(auth()->guard()->guest()): ?>
                                <a class="btn-voucher btn btn-light btn-primary w-full flex justify-center rounded-l-full py-2 text-sm font-medium md:inline-flex transition duration-300 css-1wpp9sf" href="<?php echo e(route('login')); ?>">Masuk</a>
                                <?php endif; ?>
                                <a class="btn-voucher btn-light w-full flex justify-center rounded-r-full py-2 text-sm font-medium md:inline-flex transition duration-300 css-mxl5am" href="<?php echo e(route('register')); ?>">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
       
            </div>
        </div>
    </div>
    
</nav>
</header>
<!-- End Show Daftar / Masuk -->
 <div id="searchContainer"  class="col-lg-11 mx-auto w-full max-w-7xl p-4 sm:p-8">

  <div class="flex w-full items-center md:mx-auto lg:mx-0 xl:px-0">

    <form class="relative w-full">

      <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-2">

      

      </div>

      <input id="searchInput" class="hidden block w-full rounded-full border-none py-2 pl-5 gap-3 pr-3 text-sm text-dark focus:outline-none focus:ring-1 fsm:text-sm md:py-3 ms-" placeholder="Cari ..." type="search" autocomplete="off" />
    </form>

  </div>
  <ul class="p-2 px-3 bg-white rounded-4 mt-3 text-dark d-none" id="live_search_ul" style="list-style: none; max-height: 600px; overflow-x:scroll">
    </ul>
</div>

</div>



<style>

    /* Definisikan animasi untuk kontainer pencarian */

@keyframes  slideDown {

  0% {

    transform: translateY(-100%);

  }

  100% {

    transform: translateY(0);

  }

}



/* Tambahkan gaya untuk kontainer yang terlihat */

#searchContainer.visible {

  animation: slideDown 0.1s ease-in-out;

}





</style>
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    <!--Show Navbar menu-->
    
    <div class="flex shrink-0 items-center px-4 ">
        <div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel" style="background: rgb(23, 23, 23);  visibility: visible;" aria-modal="true" role="dialog">
            <div class="offcanvas-header " >
                <h5 class="offcanvas-title " id="offcanvasDarkNavbarLabel">
                    <img src="" alt="" width="100">
                </h5>
                <button type="button" class="rounded-full text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white" data-bs-dismiss="offcanvas" aria-label="Close">
                    <span class="sr-only">Close panel</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg></button>
                </div>
                 <div class="flex shrink-0 items-center px-4" style="margin-top:-1rem;">
            <a class="relative h-[5.7rem] w-50" href="<?php echo e(route('home')); ?>">
            <img alt="logo" srcset="<?php echo e(isset($logoheader->path) ? $logoheader->path : ""); ?>" src="<?php echo e(isset($logoheader->path) ? $logoheader->path : ""); ?>" decoding="async" data-nimg="fill" loading="lazy" style="position: absolute;   inset: 0px; color: transparent;"/>
        </a>
     </div>
        <nav class="space-y-1 px-3 mt-4">
            <a class="group flex items-center rounded-md p-2 text-base font-medium css-1tq05rq hover:bg-murky-700" href="<?php echo e(route('home')); ?>">
                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <desc></desc>
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                </svg>
                Beranda
            </a>
            <a class="group flex items-center rounded-md p-2 text-base font-medium css-1tq05rq hover:bg-murky-700" href="<?php echo e(route('cari')); ?>">
                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <desc></desc>
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="10" cy="10" r="7"></circle>
                    <line x1="21" y1="21" x2="15" y2="15"></line>
                </svg>
                Lacak Pesanan
            </a>
            
           <div class="dropdown">
  <a class="group flex items-center rounded-md p-2 w-90 text-base font-medium css-1tq05rq dropdown-toggle hover:bg-murky-700"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer;">
    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><desc></desc><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="3" width="16" height="18" rx="2"></rect><rect x="8" y="7" width="8" height="3" rx="1"></rect><line x1="8" y1="14" x2="8" y2="14.01"></line><line x1="12" y1="14" x2="12" y2="14.01"></line><line x1="16" y1="14" x2="16" y2="14.01"></line><line x1="8" y1="17" x2="8" y2="17.01"></line><line x1="12" y1="17" x2="12" y2="17.01"></line><line x1="16" y1="17" x2="16" y2="17.01"></line></svg>
    Calculator ML
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="<?php echo e(route('hitungwr')); ?>">Winrate</a>
    <a class="dropdown-item" href="<?php echo e(route('hitungpointmw')); ?>">Magic Wheel</a>
    <a class="dropdown-item" href="<?php echo e(route('hitungpointzodiac')); ?>">Zodiac</a>
  </div>
</div>
            
           <div class="dropdown">
  <a class="group flex items-center rounded-md p-2 w-90 text-base font-medium css-1tq05rq dropdown-toggle hover:bg-murky-700"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer;">
    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
      <desc></desc>
      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
      <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
      <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
      <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
    </svg>
    Join Us
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="https://wa.me/62277113307">Join Reseller</a>
    <a class="dropdown-item" href="https://t.me/">Join Komunitas</a>
  </div>
</div>
           <div class="dropdown">
  <a class="group flex items-center rounded-md p-2 w-90 text-base font-medium css-1tq05rq dropdown-toggle hover:bg-murky-700"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer;">
    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
      <desc></desc>
      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
      <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
      <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
      <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
    </svg>
    Lainnya
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    
    <a class="dropdown-item" href="<?php echo e(route('topten')); ?>">Top Ranking</a>
  </div>
</div>
</div>

        </nav>
    </div>
 </div>

 
 
<!-- End Show Navbar--><?php /**PATH /home/nvdstor2/v2.nvdstoreindonesia.com/system/resources/views////navbar.blade.php ENDPATH**/ ?>