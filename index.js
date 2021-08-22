$(document).ready(function(){
    $("#banner-area .owl-carousel").owlCarousel({
        dots:true,
        items:1
    });
    //top sale owl carousel
    $(".top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });
     // isotope filter
     var $grid = $(".grid").isotope({
        itemSelector : '.grid-item',
        layoutMode : 'fitRows'
    });

    // filter items on button click
    $(".button-group").on("click", "button", function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue});
    });

     //new phones owl carousel
     $("#new-phones .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    //Blogs owl carousel
    $("#blogs .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            }
        }
    });

    // product qty section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price=$("#deal-price");
    // let $input = $(".qty .qty_input");

    // click on qty up button
    $qty_up.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price=$(`.product_price[data-id='${$(this).data("id")}']`);
        //change product price using ajax call
        $.ajax({url:"template/ajax.php",type:'post',data:{itemid:$(this).data("id")},success:function(result){
            let obj=JSON.parse(result);
            let item_price=obj[0]['item_price'];
        
            if($input.val() >= 1 && $input.val() <= 9){
                $input.val(function(i, oldval){
                    return ++oldval;
                });
            //increase price of product
            $price.text(parseInt(item_price*$input.val()).toFixed(2));
            
            //subtotal price
            let subtotal=parseInt($deal_price.text())+parseInt(item_price);
            $deal_price.text(subtotal.toFixed(2));
            
            }
            
        }});//closing ajax request
        
    });

    // click on qty down button
    $qty_down.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price=$(`.product_price[data-id='${$(this).data("id")}']`);

         //change product price using ajax call
         $.ajax({url:"template/ajax.php",type:'post',data:{itemid:$(this).data("id")},success:function(result){
            let obj=JSON.parse(result);
            let item_price=obj[0]['item_price'];
        
            if($input.val() > 1 && $input.val() <= 10){
                $input.val(function(i, oldval){
                    return --oldval;
                });
            //increase price of product
            $price.text(parseInt(item_price*$input.val()).toFixed(2));
            
            //subtotal price
            let subtotal=parseInt($deal_price.text())-parseInt(item_price);
            $deal_price.text(subtotal.toFixed(2));
            }
           
        }});//closing ajax request
        
    });

});

//checkout js
   // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
  
    window.addEventListener('load', function () {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation')
  
      // Loop over them and prevent submission
      Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
    }, false)
  }())


//
