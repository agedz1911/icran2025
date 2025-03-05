<div class="bg-secondary sticky top-0 z-50 mx-auto w-full">
  <header class="site-header py-2 px-3" id="sticky-menu">
    <div class="container-default">
      <div class="flex items-center justify-between gap-x-8">
        <!-- Header Logo -->
        <div class="">
          <a href="/">
            <img src="images/logo/logo-light-n.png" class="h-12 md:h-14 w-full" alt="ICRAN" />
          </a>
        </div>
        <!-- Header Logo -->

        <!-- Header Navigation -->
        <div class="menu-block-wrapper">
          <div class="menu-overlay"></div>
          <nav class="menu-block" id="append-menu-header">
            <div class="mobile-menu-head">
              <div class="go-back">
                <i class="fa-solid fa-angle-left"></i>
              </div>
              <div class="current-menu-title"></div>
              <div class="mobile-menu-close">&times;</div>
            </div>
            <ul class="site-menu-main">
              <li class="nav-item {{ request()->is('/') ? 'text-primary' : '' }}">
                <a href="/" class="nav-link-item">{{__('menu.home')}}</a>
              </li>
              <li
                class="nav-item nav-item-has-children {{ request()->is('congress-information*') ? 'text-primary' : '' }}">
                <a href="javascript:void(0)" class="nav-link-item drop-trigger ">{{__('menu.congress-info')}} <i
                    class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-1">
                  <li class="sub-menu--item">
                    <a href="/congress-information#welcome-remarks">{{__('menu.remarks')}}</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/congress-information#organizing-committee">{{__('menu.committee')}}</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/congress-information#faculties">{{__('menu.faculty')}}</a>
                  </li>
                </ul>
              </li>

              <li
                class="nav-item nav-item-has-children {{ request()->is('scientific-program*') ? 'text-primary' : '' }}">
                <a href="javascript:void(0)" class="nav-link-item drop-trigger">{{__('menu.program')}}
                  <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-2">
                  <li class="sub-menu--item">
                    <a href="javascript:void(0)">{{__('menu.atglance')}}</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="javascript:void(0)">{{__('menu.schedule')}}</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item {{ request()->is('registration*') ? 'text-primary' : '' }}">
                <a href="/registration" class="nav-link-item">{{__('menu.registration')}}
                  <i class="fa-solid fa-angle-down"></i>
                </a>
              </li>
              <li class="nav-item nav-item-has-children {{ request()->is('submission*') ? 'text-primary' : '' }}">
                <a href="javascript:void(0)" class="nav-link-item drop-trigger">{{__('menu.submission')}}
                  <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-11">
                  <li class="sub-menu--item">
                    <a href="/submission#guideline">{{__('menu.guide-abstract')}}</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/submission#abstract">{{__('menu.abstract')}}</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item nav-item-has-children {{ request()->is('venue*') ? 'text-primary' : '' }}">
                <a href="javascript:void(0)" class="nav-link-item drop-trigger">{{__('menu.visit')}}
                  <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-11">
                  <li class="sub-menu--item">
                    <a href="/venue#surabaya">Surabaya</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/venue#venue">{{__('menu.venue')}}</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/venue#visa-regulation">{{__('menu.visa')}}</a>
                  </li>
                </ul>
              </li>


            </ul>
          </nav>
        </div>
        <!-- Header Navigation -->

        <!-- Header User Event -->
        <div class="flex items-center ">
          
        <button onclick="contact.showModal()" class="btn btn-primary px-4 btn-sm md:mr-0 -mr-6">Contact us</button>
        <!-- Responsive Offcanvas Menu Button -->
        <div class="block lg:hidden">
          <button id="openBtn" class="hamburger-menu mobile-menu-trigger ">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- Header User Event -->
    </div>
</div>
</header>

<dialog id="contact" class="modal">
  <div class="modal-box w-11/12 max-w-3xl">
    <div class="modal-action absolute right-2 top-2">
      <form method="dialog">
        <!-- if there is a button in form, it will close the modal -->
        <button class="btn btn-ghost">X</button>
      </form>
    </div>
    <div class="flex-row flex">
      <img src="images/logo/logo-light-n.png" class="w-40" />
      <img src="images/logo/logo-icon.png" class="w-40" />
    </div>
    <h1 class="text-xl text-primary mt-5 font-bold">Secretariat </h1>
    <div class="flex flex-col md:flex-row md:gap-6 gap-3 mt-5">
      <div class="flex flex-row items-center gap-3">
        <i class="fa-brands fa-whatsapp text-lg text-green-500"></i>
        <div class="flex flex-col gap-1">
          <a href="https://wa.me/+6281317857586" target="_blank" class="text-xs hover:underline hover:text-secondary">Ms. Sari : +62 813 1913 5153</a>
          <a href="https://wa.me/+6281317857586" target="_blank" class="text-xs hover:underline hover:text-secondary ">Ms. Tiolan : +62 813 1785 7586</a>
        </div>
      </div>
      <div class="flex flex-row items-center gap-3">
        <i class="fa-solid fa-envelope text-lg"></i>
        <div class="flex flex-col">
          <a href="mailto:icran2025@pharma-pro.com" target="_blank" class="text-xs hover:underline hover:text-secondary">icran2025@pharma-pro.com</a>
        </div>
      </div>
      <div class="flex flex-row items-center gap-3">
        <i class="fa-solid fa-location-dot text-secondary text-lg"></i>
        <div class="flex flex-col">
          <p class="text-xs">Komplek Perkantoran Duta Merlin Blok C/35 <br>
            Jl. Gajah Mada 3-5, Jakarta 10130</p>
        </div>
      </div>
    </div>


  </div>
</dialog>

</div>