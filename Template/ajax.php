<?php
//require Product class
require('../Databse/DBController.php');

//require Product class
require('../Databse/Product.php');

//DBController object
$db = new DBController();

//product object
$product=new Product($db);

if(isset($_POST['itemid'])){
    $result=$product->getProduct($_POST['itemid']);
    echo json_encode($result);
}
?>