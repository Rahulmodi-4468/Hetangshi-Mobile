<?php
   ob_start();
    //include header.php file
    include('./header.php');
?>

<?php
//include _banner-area.php
include('./Template/_banner-area.php');

//include _top-sale.php
include('./Template/_top-sale.php');

//include _special-price.php
include('./Template/_special-price.php');

//include _banner-adds.php
include('./Template/_banner-adds.php');

//include _new-phones.php
include('./Template/_new-phones.php');

//include _blogs.php
//include('./Template/_blogs.php');
?>

<?php
//include footer.php file
include('./footer.php');
?>