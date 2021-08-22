<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :
?>
<!--Product-->
<section id="product" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product" class="img-fluid">
                    <div class="form-row pt-4 font-size-16 font-baloo">
                        <div class="col">
                            <a href="cart.php">
                           
                            <button type="submit" class="btn btn-danger form-control">Proceed to buy</button>
                            </a>
                        </div>
                        <div class="col">
                        <?php
                        if(in_array($item['item_id'],$Cart->getCartId($product->getData('cart'))??[])){
                          echo'<button type="submit" disabled class="btn btn-success font-size-16 form-control">In The CART</button>';
                        }else{
                          echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control">ADD TO CART</button>';
                        }
                        ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 py-5">
                    <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                    <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                    <div class="d-flex">
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <a href="#" class="px-2 font-rale font-size-14 text-dark">20,534 rating | 1000+ Answered questions</a>
                    </div>

                    <hr class="m-0">
                    <!--Product price-->
                    <table class="my-3">
                                <tr class="font-rale font-size-14">
                                <td>M.R.P.</td> 
                                <td><strike>$162.00</strike></td>
                                </tr>
                                <tr class="font-rale font-size-14">
                                    <td>Deal Price</td> 
                                    <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ?? 0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;inclusive of all taxes</small> </td>
                                </tr>
                                <tr class="font-rale font-size-14">
                                    <td>You Save:</td> 
                                    <td><span class="font-size-16 text-danger">$152.00</span></td>
                                </tr>
                    </table>
                    <!--Product price-->

                    <!--#policy-->
                    <div id="policy">
                        <div class="d-flex">
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-rale font-size-12">10 Days <br>Replacement</a>
                            </div>
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-truck border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-rale font-size-12">3 Day<br>deliverd</a>
                            </div>
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-rale font-size-12">1 Year<br>Warrenty</a>
                            </div>
                        </div>
                    </div>
                    <!--End policy-->
                    <hr>

                    <!--Order-details-->
                        <div id="order-details" class="font-rale d-flex flex-column text-dark">
                            <small>Delivery by:Mar 29 -Apr 1</small> 
                            <small>Sold by <a href="#">Hetangshi Mobile</a> (4.5 out of 5 | 18,198 ratings)</small>
                            <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer -42420</small>
                        </div>
                    <!--End Order-details-->

                    <div class="row">
                        <div class="col-6">
                        <!--Color-->
                            <div class="color my-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-baloo">Color:</h6>
                                    <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                    <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                    <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                </div>
                            </div>
                        <!-- End Color-->
                        </div>
                        <div class="col-6">
                        <!-- product qty section -->  
                            <div class="qty d-flex">
                                  <h6 class="font-baloo">Qty</h6>
                                  <div class="px-4 d-flex font-rale">
                                      <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                      <input type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                      <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                  </div>
                            </div>
                        <!-- !product qty section -->  
                        </div>
                    </div>

                    <!--size-->
                        <div class="size my-3">
                                    <h6 class="font-baloo">Size :</h6>
                                    <div class="d-flex justify-content-between w-75">
                                        <div class="font-rubik border p-2">
                                            <button class="btn p=0 font-size-14">4GB RAM</button>
                                        </div>
                                        <div class="font-rubik border p-2">
                                            <button class="btn p=0 font-size-14">6GB RAM</button>
                                        </div>
                                        <div class="font-rubik border p-2">
                                            <button class="btn p=0 font-size-14">8GB RAM</button>
                                        </div>
                                    </div>
                        </div>
                    <!--End size-->

                </div>

                <div class="col-12">
                    <h6 class="font-rubik">Product Description</h6>
                    <hr>
                    <p class="font-rale font-size-14">Redmi Note 4 uses a noise-eliminating CMOS sensor with backside illumination (BSI) and larger pixels to give you stunning images even in low light. It also comes with Phase Detection Autofocus (PDAF) for 0.1s ultra-fast focusing, which is especially useful for shooting moving objects. The 2.5D curved glass has an aesthetic edge over typical flat glass. It looks better and feels a lot smoother when you tap and swipe your fingers across the screen. Glossy CNC-finished separation lines made of anodised aluminium add a touch of class to Redmi Note 4</p>
                    <hr>
                    <p class="font-rale font-size-14"> 
                        <table>
                        <tr>
                        <td>Camera:</td>
                        <td>13 MP Rear camera with 5 Element lens, f/2.0 Aperture, PDAF supported | 5 MP front camera</td>
                        </tr>
                        <tr>
                        <td>Display:</td>
                        <td> 13.9 centimeters (5.5-inch) Full HD capacitive touchscreen display with 1920x1080 pixels</td>
                        </tr>
                        <tr>
                        <td>Memory, Storage & SIM:</td>
                        <td>4GB RAM | 64GB storage expandable up to 128GB | Dual SIM with dual standby (4G+4G)</td>
                        </tr>
                        <tr>
                            <td>Operating System and Processor:</td>
                            <td>Android Marshmallow 6.0.1 (Upgradable to Android v7.0 Nougat) operating system with 2.0GHz Qualcomm Snapdragon 625 octa core processor</td>
                        </tr>
                        <tr>
                            <td>Battery:</td>
                            <td> 4100 mAH lithium Polymer battery</td>
                        </tr>
                        <tr>
                            <td>Warranty:</td>
                            <td>1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase
Included in box: Adaptor, USB Cable</td>
                        </tr>
                    </table></p>

                </div>
            </div>
        </div>
</section>
<!--Not Product-->
<?php
endif;
endforeach;

?>