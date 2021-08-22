<style>

.payhover {
    display: inline-block;
    color: #000;
    text-decoration: none;
}

.payhover::after {
    content: '';
    display: block;
    width: 0;
    height: 2px;
    background: #000;
    transition: width .3s;
}

.payhover:hover::after {
    width: 100%;
    transition: width .3s;
}
</style>
<div class="container" style="max-width: 1200px;">
    <div class="py-5 text-center">
        <!--<img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
--> <h2 class="payhover">Payment Way</h2>
    </div>
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Product name</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$12</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Second product</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$8</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Third item</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Promo code</h6>
                        <small>EXAMPLECODE</small>
                    </div>
                    <span class="text-success">-$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong>$20</strong>
                </li>
            </ul>
            <form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Promo code">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-8 order-md-1">
          <form class="needs-validation" novalidate="">
                <h3 class="mb-3 font-weight-bold ">Select Payment Method</h3>
                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod"  type="radio" class="custom-control-input"  required="" onclick="radiocreditCheck();">
                        <label class="custom-control-label font-weight-bold " for="credit">Add Debit/Credit card</label>
                        <div class="row pl-2 pr-2">
                        <span  class="pl-4 pt-2"><img src="./assets/visa.png" alt=""style="width: 50px;"></span>
                        <span  class="pl-2 pt-0"><img src="./assets/mastercard.png" alt="" style="width: 50px;"></span>
                        <span  class="pl-2"><img src="./assets/maestro.png" alt="" style="width: 50px;"></span>
                        <span  class="pl-2 pt-2"><img src="./assets/RuPay.png" alt="" style="width: 50px;"></span>  
                        </div>
                    </div>
                    <div class=" pb-2" id="creditcard" style="display:none;">
                        <div class="row pl-2 pr-2">
                            <p class="pl-4 text-muted">We’ll save this card for your convenience. Remove it by going to Your Account section</p>
                        </div>
                        <div class="row pl-2 pr-2">
                        <div class="col-sm-3 mb-3">
                            <label for="cc-name " class="font-weight-bold">Name on card</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="Name on card" required="">
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback"> Name on card is required </div>
                        </div>
                        <div class="col-sm-3 mb-3">
                            <label for="cc-number" class="font-weight-bold">card number</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                            <div class="invalid-feedback">card number is required </div>
                        </div>
                        <div class="col-sm-3 mb-3">
                        <label for="cc-expirydate" class="font-weight-bold">Expiry Date</label>
                        <input type="text" class="form-control" id="cc-expirymonth" placeholder="MM/YY" maxlength="2" required="">
                        <div class="invalid-feedback">Card Expiry date</div>
                        </div>
                        <div class="col-sm-3 mb-3">
                            <label for="cc-cvv" class="font-weight-bold">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="" maxlength="3">
                            <div class="invalid-feedback"> Security code required </div>
                        </div>
                        </div>
                        <button class="btn btn-info btn-lg btn-block" type="submit">Continue to checkout</button>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="net" name="paymentMethod" type="radio" class="custom-control-input" required="" onclick="netBankingCheck();">
                        <label class="custom-control-label font-weight-bold" for="net">Net Banking</label>
                        <div class=" pb-1" id="netbank" style="display:none;">
                            <div class="form-group">
                                <select class="form-control col-md-4" id="sel1">
                                    <option disabled value="" selected>Choose an Option</option>
                                    <option>Airtel Payments Bank</option>
                                    <option>Axis Bank</option>
                                    <option>HDFC Bank</option>
                                    <option>ICICI Bank</option>
                                    <option>Kotak Bank</option>
                                    <option>State Bank of India</option>
                                    <option>Allahabad Bank</option>
                                    <option>Andhra Bank</option>
                                    <option>Bank of Baroda</option>
                                    <option>Central Bank of India</option>
                                    <option>Dena Bank</option>
                                    <option>IDFC FIRST Bank</option>
                                    <option>Punjab National Bank</option>
                                </select>
                                <p class="text-muted"><i class="fas fa-exclamation"></i>&nbsp;For faster payment and instant refund, please use UPI </p>
                            </div>
                            <button class="btn btn-info btn-lg btn-block" type="submit">Continue to checkout</button>
                        </div>
                    </div>

                    <div class="custom-control custom-radio">
                        <input id="upi" name="paymentMethod" value="much" type="radio" class="custom-control-input" required="" onclick="radioUpiCheck();">
                        <label class="custom-control-label font-weight-bold" for="upi">Other UPI Apps</label>
                        <div class=" pb-1" id="upibank" style="display:none;">
                            <div class="form-group">
                            <div class="row pl-3"><p class="text-muted">Please Enter Your UPI ID</p></div>
                                <!--<div class="row">-->
                                <input class=" d-inline" type="text" placeholder="Ex.MobileNumber@upi">
                                <button class="btn btn-success ml-2 d-inline">Verify</button>
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                   <div class="custom-control custom-radio">
                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                        <label class="custom-control-label font-weight-bold" for="paypal">PayPal</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="cash" name="paymentMethod" type="radio" class="custom-control-input" required="" onclick="radioCashCheck();">
                        <label class="custom-control-label font-weight-bold" for="cash">Cash On Delivery</label>
                    </div>
                </div>
             
                <div class="border solid pb-2" id="creditcard" style="display:none;">
                    <div class="pt-2">
                    <h5 class=" pl-3">Add Credit Card</h5>
                   
                    </div>
                    <hr class="mb-2" >
                    <div class="row pl-2 pr-2">
                    <span  class="pl-4 pt-2"><img src="./assets/visa.png" alt=""style="width: 50px;"></span>
                    <span  class="pl-2 pt-0"><img src="./assets/mastercard.png" alt="" style="width: 50px;"></span>
                    <span  class="pl-2"><img src="./assets/maestro.png" alt="" style="width: 50px;"></span>
                    <span  class="pl-2 pt-2"><img src="./assets/RuPay.png" alt="" style="width: 50px;"></span>
                        

                    </div>
                    <div class="row pl-2 pr-2">
                        <p class="pl-4 text-muted">We’ll save this card for your convenience. Remove it by going to Your Account section</p>
                    </div>
                    <div class="row pl-2 pr-2">
                    <div class="col-sm-3 mb-3">
                        <label for="cc-name " class="font-weight-bold">Name on card</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="Name on card" required="">
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback"> Name on card is required </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label for="cc-number" class="font-weight-bold">card number</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                        <div class="invalid-feedback">card number is required </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                    <label for="cc-expirydate" class="font-weight-bold">Expiry Date</label>
                    <input type="text" class="form-control" id="cc-expirymonth" placeholder="MM/YY" maxlength="2" required="">
                    <div class="invalid-feedback">Card Expiry date</div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label for="cc-cvv" class="font-weight-bold">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required="" maxlength="3">
                        <div class="invalid-feedback"> Security code required </div>
                    </div>
                    </div>
                    <button class="btn btn-info btn-lg btn-block" type="submit">Continue to checkout</button>
                </div>

               <!-- <div class="border solid pb-2" id="debitcard" style="display:none;">
                    <div class="pt-2">
                    <h5 class=" pl-3">Add Debit Card</h5>
                   
                    </div>
                    <hr class="mb-2" >
                    <div class="row pl-2 pr-2">
                    <span  class="pl-4 pt-2"><img src="./assets/visa.png" alt=""style="width: 50px;"></span>
                        <span  class="pl-2 pt-0"><img src="./assets/mastercard.png" alt="" style="width: 50px;"></span>
                        <span  class="pl-2"><img src="./assets/maestro.png" alt="" style="width: 50px;"></span>
                        <span  class="pl-2 pt-2"><img src="./assets/RuPay.png" alt="" style="width: 50px;"></span>
                        

                    </div>
                    <div class="row pl-2 pr-2">
                        <p class="pl-4 text-muted">We’ll save this card for your convenience. Remove it by going to Your Account section</p>
                    </div>
                    <div class="row pl-2 pr-2">
                    <div class="col-sm-6 mb-3">
                        <label for="cc-name">Name on card</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback"> Name on card is required </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="cc-number">card number</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                        <div class="invalid-feedback">card number is required </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                    <label for="cc-expirydate">Expiry Date</label>
                    <input type="text" class="form-control" id="cc-expirydate" placeholder="" required="">
                    <div class="invalid-feedback">Card Expiry date</div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label for="cc-cvv">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                        <div class="invalid-feedback"> Security code required </div>
                    </div>
                    </div>
                    <button class="btn btn-info btn-lg btn-block" type="submit">Continue to checkout</button>
                </div>-->

                <div class="text-center pl-1 pr-1 " id="cashcard" style="display:none;">
                    <img src="./assets/homedelivery.png" class="img-fluid pb-2" alt="cash On Delivery">
                    <button class="btn btn-success btn-lg btn-block " type="submit">Continue to checkout</button>
                </div>

                
                
        </form>
        </div>
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2019-2020 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>
<!--radio button hide /show js-->
<script type="text/javascript">
      
  function radiocreditCheck() {
    if (document.getElementById('credit').checked) {
        document.getElementById('upibank').style.display = 'none';
        document.getElementById('netbank').style.display = 'none';
        document.getElementById('cashcard').style.display = 'none';
        document.getElementById('creditcard').style.display = 'block';
    } else {
        document.getElementById('creditcard').style.display = 'none';
    }
}
function netBankingCheck() {
    if (document.getElementById('net').checked) {
        document.getElementById('creditcard').style.display = 'none';
        document.getElementById('cashcard').style.display = 'none';
        document.getElementById('upibank').style.display = 'none';
        document.getElementById('netbank').style.display = 'block';
    } else {
        document.getElementById('netbank').style.display = 'none';
    }
}

function radioUpiCheck() {
    if (document.getElementById('upi').checked) {
        document.getElementById('creditcard').style.display = 'none';
        //document.getElementById('debitcard').style.display = 'block';
        document.getElementById('upibank').style.display = 'block';
    } else {
        document.getElementById('upibank').style.display = 'none';
    }
}

function radioCashCheck() {
    if (document.getElementById('cash').checked) {
        document.getElementById('creditcard').style.display = 'none';
        document.getElementById('netbank').style.display = 'none';
        document.getElementById('upibank').style.display = 'none';
        document.getElementById('cashcard').style.display = 'block';
    } else {
        document.getElementById('cashcard').style.display = 'none';
    }
}

</script>