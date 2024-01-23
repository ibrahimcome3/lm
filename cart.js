/* $(document).ready(function () { 
  

function load_cart_total(){
	 $(".cart-total-price").text(function(){
       $(this).load( "cart_total_cost.php");
     });  
  };
  
function load_cart_(){
	 $(".cart-count").text(function(){
       $(this).load( "cart_count.php"); 
     }); 
};  
  
load_cart_total();
load_cart_();
 
 $("a.submit-cart").click(function(e){
        var product_id = $(this).attr( "product-info" );
        $.ajax({
            method: "POST",
            url: "test3.php",
            data: { inventory_product_id: product_id, qty: 1 }
                })
                    .done(function( msg ) {
                        load_cart_total();
						load_cart_();
                        
                         $.ajax({
                          method: "POST",
                          url: "cart_ajax_response.php",
                          data: { arr: product_id }
                        })
                          .done(function( msg ) {
                          $("#card-drop-down").empty(); 
                          $("#card-drop-down").html(msg); 
                            load_cart_total();
							load_cart_();
                        });
                         
                    
                    });
                e.preventDefault();
            });
            
            $(".cart-dropdown").on( "click", ".btn-remove", function(e) {
               console.log($(this).attr("itemid")); 
               let elem = $(this);
               $.ajax({
                          method: "POST",
                          url: "delete_from_cart.php",
                          data: { itmid: $(this).attr("itemid") }
                }).done(function( msg ) {
                        alert(msg);
                        elem.parentsUntil(".dropdown-cart-products").css("background-color", "yellow").remove();
                        load_cart_total();
						load_cart_();
                });
               e.preventDefault();
            });
});
 */