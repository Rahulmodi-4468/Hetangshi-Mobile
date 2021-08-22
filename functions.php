<?php
//require Mysql connection
require('./Databse/DBController.php');

//require Product class
require('./Databse/Product.php');

//require Cart class
require('./Databse/Cart.php');

//DBController object
$db = new DBController();

//product object
$product=new Product($db);
$product_shuffle = $product->getData();

//cart object
$Cart=new Cart($db);


?>