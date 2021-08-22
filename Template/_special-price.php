<?php
    $brand = array_map(function($pro){ return $pro['item_brand'];},$product_shuffle);
    $unique= array_unique($brand);
    sort($unique);
    shuffle($product_shuffle);
     // request method post
     if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['special_price_submit'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }

    $in_cart=$Cart->getCartId($product->getData('cart'));
?>


<!--Special price-->
<section id="special-price">
        <div class="container">
                <h4 class="font-rubik font-size-20">Special Price</h4>
                <div id="filters" class="button-group text-right font-baloo font-size-16 mb-2">
                    <button class="btn btn-warning  is-checked" data-filter="*">All brands</button>
                    <?php
                    array_map(function($brand){
                        printf('<button class="btn btn-warning  mr-1" data-filter=".%s">%s</button>',$brand,$brand);
                    },$unique);
                    ?>
                </div>
            <div class="grid">
            <?php array_map(function($item) use ($in_cart){?>
                <div class="grid-item  col-md-3 col-sm-12 mb-2  <?php echo $item['item_brand'] ?? "Brand"; ?>">
                    <div class="item p-0 py-2 border spro" >
                        <div class="product font-rale">
                        <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                            <span>$<?php echo $item['item_price'] ?? 0; ?></span>
                            </div>
                            <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <?php
                                if(in_array($item['item_id'],$in_cart??[])){
                                echo'<button type="submit" disabled class="btn btn-success font-size-12">In The CART</button>';
                                }else{
                                echo '<button type="submit" name="special_price_submit" class="btn btn-warning font-size-12">ADD TO CART</button>';
                                }
                            ?>
                            </form>               
                        </div>
                        </div>
                    </div>
                </div>
            <?php }, $product_shuffle);  ?>
            </div>
        </div>
        </section>  
    <!--End Special price-->