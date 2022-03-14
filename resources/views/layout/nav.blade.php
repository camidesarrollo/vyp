<?php
$route = Route::current()->getName();
?>
<style>
      /*
======================
Navigation
======================
*/
:root {
  --primaryColor: #f1f1f1;
  --black: #222;
  --black2: #555;
  --black3: #252525;
  --black4: #000;
  --black5: #212529;
  --orange: #eb0028;
  --white: #fff;
  --grey: #959595;
  --grey2: #666;
  --grey3: #ccc;
  --secondaryColor: #2b1f4d;
  --yellow: #ffcc00;
  --green: #59b210;
  --blue: rgb(56, 10, 223);
  --red: #ff5b5b;
}

.navigation {
  position: relative;
  height: 3,5rem;
  /* box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1); */
}

.nav {
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 100%;
  height: 3.5rem;
  padding: 0 0.5rem;
}

.fix__nav {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: var(--white);
  z-index: 600;
}
.nav__item .botones-redes{
    display:none;
  }
.nav__logo a {
  font-size: 1.25rem;
  color: var(--black);
  padding: 0.8rem;
  font-weight: 700;
}

.nav__hamburger {
  display: none;
  cursor: pointer;
}

.nav__hamburger svg {
  height: 1.15rem;
  width: 1.15rem;
}

.menu__top {
  display: none;
}

.scroll-link{
  display: none;
}

.nav__menu {
  width: 50%;
}

.nav__list {
  display: flex;
  align-items: center;
  height: 100%;
  width: 50%;
}

.nav__item:not(:last-child) {
  margin-right:2.188rem;
}


.nav__item a.active  {
    background-color: transparent;
    color: #f2c100;
}
.nav__list .nav__link:link,
.nav__list .nav__link:visited {
  display: inline-block;
  font-size: 0,7rem;
  text-transform: uppercase;
  color: var(--black);
  transition: color 0.3s ease-in-out;
}

.nav__list .nav__link:hover {
  color: var(--orange);
}

.nav__icons {
  display: flex;
  position: relative;
}

.nav__icons .icon__item svg {
  width: 0.8rem;
  height: 0.8rem;
}

.nav__icons .icon__item {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0.7rem;
  border: 1px solid var(--black);
  border-radius: 50%;
  transition: background-color 0.3s ease-in-out;
}

.nav__icons .icon__item:link,
.nav__icons .icon__item:visited {
  color: var(--black);
}

.nav__icons .icon__item:hover {
  /* background-color: var(--yellow); */
  border: 1px solid var(--black);
}

.nav__icons .icon__item:not(:last-child) {
  margin-right: 0.5rem;
}

.nav__icons #cart__total {
  font-size: 0.5rem;
  position: absolute;
  top: 2px;
  right: -6px;
  background-color: var(--red);
  padding: 0.2rem 0.4rem;
  border-radius: 100%;
  color: var(--primaryColor);
}

.page__title-area {
  background-color: var(--primaryColor);
}

.page__title-container {
  padding: 0.5rem;
}

.page__titles {
  display: flex;
  align-items: center;
  font-size: 1.2rem;
  color: var(--grey2);
}

.page__titles a {
  margin-right: 2rem;
}

.page__titles a svg {
  width: 1.8rem;
  height: 1.8rem;
  fill: var(--grey2);
}

.page__title {
  position: relative;
}

.page__title::before {
  position: absolute;
  content: "/";
  top: 0;
  left: -0.5rem;
}


.nav__item a:hover{
  background-color: transparent;
  color: #f2c100;
}

/*
======================
Navigation Media Query
======================
*/
@media only screen and (max-width: 990px) {
  .nav__menu {
    position: fixed;
    top: 0;
    left: -30rem;
    width: 0;
    background-color: var(--white);
    z-index: 9990;
    height: 100%;
    transition: all 0.5s;
  }

  .nav-log{
    display:none
  }
  .nav__menu.open {
    left: 30rem;
    width: 30rem;
  }

  .nav__logo {
    width: 50%;
  }

  .nav__hamburger {
    display: block;
  }

  .menu__top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: var(--yellow);
    padding: 0.8rem 0.5rem;
  }

  .menu__top svg {
    height: 0.8rem;
    width: 0.8rem;
    fill: var(--primaryColor);
  }

  .nav__category {
    color: var(--white);
    font-size: 2.3rem;
    font-weight: 700;
  }

  .nav__list {
    flex-direction: column;
    align-items: start;
    padding: 0.8rem 0.5rem;
  }

  .nav__item:not(:last-child) {
    margin-right: 0;
  }

  .nav__item {
    width: 100%;
    margin: 15px;
  }

  .nav__item .botones-redes{
    display:block;
  }
  .nav__list .nav__link:link,
  .nav__list .nav__link:visited {
    padding: 0.8rem 0;
    width: 100%;
    color: var(--grey2);
  }

  body.active::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 110%;
    background: var(--black) none no-repeat 0 0;
    opacity: 0.7;
    /* z-index: 999; */
    transition: 0.8s;
  }
}

@media only screen and (max-width: 568px) {
  .nav__icons .icon__item svg {
    width: 0,7rem;
    height: 0,7rem;
  }

  .nav__icons .icon__item {
    padding: 0.4rem;
  }
}
  </style>
  <script>
    (function(){
 
 $("#cart").on("click", function() {
     console.log("entre aca");
     $(".shopping-cart").fadeToggle( "fast");
 });

})();

</script>
<style>
.container-shopping {
    margin: auto;
    width: 80%;
}

.shopping-cart {
    /* margin: 20px 0; */
    float: right;
    background: white;
    width: 320px;
    position: relative;
    border-radius: 3px;
    box-shadow: 0 5px 8px rgb(0 0 0 / 15%);
    padding: 10px 15px 5px;
    font-weight: 700;
    font-size: .8125rem;
    line-height: 1.5;
    border-radius: 0;
    z-index: 1;
}

.shopping-cart .shopping-cart-header {
    border-bottom: 1px solid #E8E8E8;
    padding-bottom: 15px;
}

.shopping-cart .shopping-cart-header .shopping-cart-total {
    float: right;
}

.shopping-cart .shopping-cart-items {
    padding-top: 20px;
}

.shopping-cart .shopping-cart-items li {
    margin-bottom: 18px;
}

.shopping-cart .shopping-cart-items img {
    float: left;
    margin-right: 12px;
}

.shopping-cart .shopping-cart-items .item-name {
    display: block;
    padding-top: 10px;
    font-size: 16px;
}

.shopping-cart .shopping-cart-items .item-price {
    color: #6394F8;
    margin-right: 8px;
}

.shopping-cart .shopping-cart-items .item-quantity {
    color: #ABB0BE;
}

.shopping-cart:after {
    bottom: 100%;
    left: 89%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: white;
    border-width: 8px;
    margin-left: -8px;
}

.cart-icon {
    color: #515783;
    font-size: 24px;
    margin-right: 7px;
    float: left;
}

.button {
    background: #6394F8;
    color: white;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    display: block;
    border-radius: 3px;
    font-size: 16px;
    margin: 25px 0 15px 0;
}

.button:hover {
    background: #729ef9;
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>
<header id="header" class="header">
<nav class="navbar navbar-light bg-light nav-log" style="box-shadow: none;">
    <div class="container container-logo">
        <a class="navbar-brand" href="#">
            <img src="{{asset('imagenes\Productos\icono-removebg-preview.png')}}" height="30" alt="" loading="lazy"
                style="width:20%" />
        </a>
        <div class="porto-sicon-header item-telefono">
                    <h3 class="porto-sicon-title"
                        style="font-weight:600;font-size:11px;line-height:11px;color:#777; margin-bottom: 2px !important;padding: 0px !important">
                        CONTÁCTANOS</h3>
                    <p style="font-weight:700;font-size:18px;line-height:18px;color:#222529; margin: 0px !important;">
                        +562 2892 1000</p>
                </div>
    </div>
</nav>
<div class="navigation" id="nav">
        <div class="container">
            <nav class="nav">
                <div class="nav__hamburger">
                    <svg>
                        <use xlink:href="./images/sprite.svg#icon-menu"></use>
                    </svg>
                </div>

                <div class="nav__logo">
                    <a href="/" class="scroll-link">
                        VYP
                    </a>
                </div>

                <div class="nav__menu">
                    <div class="menu__top">
                        <span class="nav__category">VYP</span>
                        <a class="close__toggle">
                            <svg>
                                <use xlink:href="./images/sprite.svg#icon-cross"></use>
                            </svg>
                        </a>
                    </div>
                    <ul class="nav__list">
                        <li class="nav__item">
                          
                        @if($route == 'inicio')
                            <a class="active" href="{{ route('inicio') }}" >INICIO</a>
                        @else
                        <a href="{{ route('inicio') }}" >INICIO</a>
                        @endif    
                        </li>
                        
                        <li class="nav__item">
                          @if($route == 'view_productos')
                            <a class="active" href="{{ route('view_productos') }}" >PRODUCTOS</a>
                            @else
                            <a href="{{ route('view_productos') }}" >PRODUCTOS</a>
                            @endif    
                        </li>
                        <li class="nav__item">
                        @if($route == 'nosotros')
                            <a  class="active" href="{{ route('nosotros') }}" >NOSOTROS</a>
                        @else
                        <a  href="{{ route('nosotros') }}" >NOSOTROS</a>
                        @endif
                        </li>
                        <li class="nav__item">
                        @if($route == 'contacto')
                            <a  class="active" href="{{ route('contacto') }}" >CONTACTO</a>
                            @else
                            <a href="{{ route('contacto') }}" >CONTACTO</a>
                            @endif
                        </li>
                        <li class="nav__item">
                          <a style="color: #222529!important; background: #FC0; padding: 10px!important;" href="{{ route('cotizacion') }}" >COTIZACIÓN</a>
                        </li>
                        <li class="nav__item">
                          <section class="mb-4 botones-redes">
                                <!-- Facebook -->
                                <a class="btn btn-outline-light btn-floating m-1 facebook" href="https://www.facebook.com/envases.vyp" role="button"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>

                                <!-- Twitter -->
                                <a class="btn btn-outline-light btn-floating m-1 twitter" href="#!" role="button"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            </section>
                        </li>
                    </ul>
                   
                </div>

                <div class="nav__icons">
                    <a href="#" class="icon__item" id="cart">
                        <i class="fas fa-shopping-bag"></i>
                        <!-- <svg class="icon__cart">
                             <use xlink:href="./images/sprite.svg#icon-shopping-basket"></use>
                         </svg> -->
                        <span id="cart__total">0</span>
                    </a>
                </div>
            </nav>


            <!--end container -->
        </div>
    </div>
    <div class="container-shopping">
        <div class="shopping-cart" style="display:none;">
            <!--end shopping-cart-header -->
            <div class="shopping-cart-header">
                
                <!-- <span class="badge" id="badge_cantidad">0</span> -->
                <div class="total-count text-v-dark clearfix">
                  <span id="badge_cantidad">0 ITEMS</span>
                  <a class="text-v-dark pull-right pull" href="{{route('cotizacion')}}">SOLICITUD DE COTIZACIÓN</a>
                </div>
                <!-- <i class="fas fa-shopping-bag cart-icon"></i> -->
                <!-- <div class="shopping-cart-total">
                     <span class="lighter-text">Total:</span>
                     <span class="main-color-text">$2,229.97</span>
                 </div> -->
            </div>
            <!--end shopping-cart-header -->
            <ul class="shopping-cart-items overflow-auto">

                <li class="clearfix">
                  <li class="woocommerce-mini-cart__empty-message empty">No hay productos en el carrito.		</li>
                </li>
            </ul>
            <div class="d-flex justify-content-center" >
            <a href="" class="btn btn-modern btn-md btn-dark boton_producto font-size-medium" style="display:none">Finalizar
                compra</a>
            </div>
            
        </div>
        <!--end shopping-cart -->
    </div>
</header>
<style>
.font-weight-semi-bold {
    font-weight: 600 !important
}

.text-product {
    font-size: 15px;
    line-height: 23px;
    color: #1e2022
}
</style>
@if($route == null)
<!-- Hero -->
<!-- <div class="hero">
    <div class="glide" id="glide_1">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <li class="glide__slide">
                    <div class="hero__center">
                        <div class="hero__left">
                            <span class="">New Inspiration 2020</span>
                            <h1 class="">PHONES MADE FOR YOU!</h1>
                            <p>Trending from mobile and headphone style collection</p>
                            <a href="#"><button class="hero__btn btn_side">SHOP NOW</button></a>
                        </div>
                        <div class="hero__right ">
                            <div class="hero__img-container">
                                <img class="banner_01" src="./images/banner_01.png" alt="banner2" />
                            </div>
                        </div>
                    </div>
                </li>
                <li class="glide__slide">
                    <div class="hero__center">
                        <div class="hero__left">
                            <span>New Inspiration 2020</span>
                            <h1>PHONES MADE FOR YOU!</h1>
                            <p>Trending from mobile and headphone style collection</p>
                            <a href="#"><button class="hero__btn btn_side">SHOP NOW</button></a>
                        </div>
                        <div class="hero__right">
                            <img class="banner_02" src="./images/banner_02.png" alt="banner2" />
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="glide__bullets" data-glide-el="controls[nav]">
            <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet" data-glide-dir="=1"></button>
        </div>

        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <svg>
                    <use xlink:href="./images/sprite.svg#icon-arrow-left2"></use>
                </svg>
            </button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <svg>
                    <use xlink:href="./images/sprite.svg#icon-arrow-right2"></use>
                </svg>
            </button>
        </div>
    </div>
</div> -->
@endif


<!-- class="nav__link scroll-link"
class="nav__link scroll-link"
class="nav__link scroll-link"
class="nav__link scroll-link" -->
  <script>
      /*
/*
=============
Navigation
=============
 */
const navOpen = document.querySelector(".nav__hamburger");
const navClose = document.querySelector(".close__toggle");
const menu = document.querySelector(".nav__menu");
const scrollLink = document.querySelectorAll(".scroll-link");
const navContainer = document.querySelector(".nav__menu");
let width = screen.width;

navOpen.addEventListener("click", () => {
  menu.classList.add("open");
  document.body.classList.add("active");
  navContainer.style.left = "0";
  navContainer.style.width = "15rem";
});

navClose.addEventListener("click", () => {
  menu.classList.remove("open");
  document.body.classList.remove("active");
  navContainer.style.left = "-15rem";
  navContainer.style.width = "0";
});

/*
=============
PopUp
=============
 */
const popup = document.querySelector(".popup");
const closePopup = document.querySelector(".popup__close");

if (popup) {
  closePopup.addEventListener("click", () => {
    popup.classList.add("hide__popup");
  });

  window.addEventListener("load", () => {
    setTimeout(() => {
      popup.classList.remove("hide__popup");
    }, 500);
  });
}

/*
=============
Fixed Navigation
=============
 */

const navBar = document.querySelector(".navigation");
const gotoTop = document.querySelector(".goto-top");

// Smooth Scroll
Array.from(scrollLink).map(link => {
  link.addEventListener("click", e => {
    // Prevent Default
    e.preventDefault();

    const id = e.currentTarget.getAttribute("href").slice(1);
    const element = document.getElementById(id);
    const navHeight = navBar.getBoundingClientRect().height;
    const fixNav = navBar.classList.contains("fix__nav");
    if (element != null){
      let position = element.offsetTop - navHeight;

      if (!fixNav) {
        position = position - navHeight;
      }

      window.scrollTo({
        left: 0,
        top: position,
      });
      navContainer.style.left = "-30rem";
      document.body.classList.remove("active"); 
    }
  });
});

// Fix NavBar

window.addEventListener("scroll", e => {
  const scrollHeight = window.pageYOffset;
  const navHeight = navBar.getBoundingClientRect().height;
  if (scrollHeight > navHeight) {
    navBar.classList.add("fix__nav");
  } else {
    navBar.classList.remove("fix__nav");
  }

  if (scrollHeight > 300) {
    if(gotoTop != null){
      gotoTop.classList.add("show-top");
    }
  } else {
    if(gotoTop != null){
      gotoTop.classList.remove("show-top");
    }
    
  }
});
window.onscroll = function() {
  if(width > 771){
    scrollFunction()  
  
  }
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("nav").style.top = "0";
    document.getElementById("nav").classList.remove("navigation");
    document.getElementById("nav").classList.add("navscroll");  
  } else {
    document.getElementById("nav").style.top = "0";
    document.getElementById("nav").classList.remove("navscroll");
    document.getElementById("nav").classList.add("navigation");
  }
}


</script>

