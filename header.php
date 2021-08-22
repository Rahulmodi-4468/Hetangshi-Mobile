<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hetangshi Mobile</title>
   <!-- <link rel="stylesheet" href="./style.css">
--><!--Boostrap CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--Owl-Carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <!--Font awasome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  
    <?php
     //require functions.php file 
     require('./functions.php');    
    ?>
    <style>

     .spro:hover{  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
     .cartmy{background-color: #003859;}
      /* ============ only desktop view ============ */
@media all and (min-width: 992px) {
	.navbar .nav-item .dropdown-menu{  display:block; opacity: 0;  visibility: hidden; transition:.3s; margin-top:0;  }
	.navbar .nav-item:hover .nav-link{ color: #003859;;  }
	.navbar .dropdown-menu.fade-down{ top:80%; transform: rotateX(-75deg); transform-origin: 0% 0%; }
	.navbar .dropdown-menu.fade-up{ top:180%;  }
	.navbar .nav-item:hover .dropdown-menu{ transition: .3s; opacity:1; visibility:visible; top:100%; transform: rotateX(0deg); }
}		
/* ============ desktop view .end// ============ */
    </style>

</head>
<body style=" padding-top: 100px;">
<!--Start #header-->
    
<header id="header" class=" fixed-top ">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale font-size-12 text-black-50 m-0">Hetangshi Mobile ,Opp.Safal-4,Amdupura,Ahmedabad-380016</p>
            <div class="font-rale font-size-14">
                <a href="" class="px-3 border-right border-left text-dark">Login</a>
                <a href="" class="px-3 border-right text-dark">Wishlist(0)</a>
            </div>
    </div>

        <!--Primary Navgation-->
        <nav  class="navbar navbar-expand-lg navbar-light bg-light shadow" >
            <a class="navbar-brand" href="index.php" style="color:#003859;font-weight:bolder;">Hetangshi Mobile</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">On Sale</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Category</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown" data-toggle="dropdown" href="#">Product <i class="fas fa-chevron-down"></i></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">product1</a>
                    <a class="dropdown-item" href="#">product2</a>
                    <a class="dropdown-item" href="#">product3</a>
                  </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="oldphones.php">Old Phones</a>
                  </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown" data-toggle="dropdown" href="#">Category<i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="checkout.php">checkout</a>
                    <a class="dropdown-item" href="payment.php">payment</a>
                    <a class="dropdown-item" href="#">Apple</a>
                  </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Comming</a>
                </li>
                </ul>
                <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="cartmy py-2 rounded-pill color-primary-bg  shadow">
                  <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                  <span class="px-3 py-2 rounded-pill text-dark bg-light"><b><?php echo count($product->getData('cart')); ?></b></span>
                </a>
                </form>
            </div>
        </nav>
        <!--End Primary Navgation-->
</header>
<!--End #header-->

<!--Start Main site-->
<main id="main-site">
    
