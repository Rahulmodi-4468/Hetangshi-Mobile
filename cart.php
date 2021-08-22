<?php
    ob_start();
    //include header.php file
    include('./header.php');
?>

<?php

//include cart items it is not empty
count($product->getData('cart')) ? include('./Template/_shopping-cart.php'):include('./Template/notFound/_cart_notFound.php');
//include('./Template/_new_cart.php');
//include Shopping cart
count($product->getData('wishlist')) ? include('./Template/_wishlist_template.php'):include('./Template/notFound/_wishlist_notFound.php');

//include new phones
include('./Template/_new-phones.php');
//popup
include('./Template/popup.php');
?>



<?php
//include footer.php file
include('./footer.php');
?>