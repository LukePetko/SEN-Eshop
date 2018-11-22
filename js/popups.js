$(document).ready(function () {
    $(".pop").click(function(){
        $(".popup").show();
        document.getElementById("product-image").src = image_location;
        $(".popup-content h3").html(product_name);
        $(".popup-content p").html(product_text);
    })

    $(".popup .cross").click(function(){
        $(".popup").hide();
        document.getElementById("product-image").src = "";
        $(".popup-text-section h3").html();
        $(".popup-text-section p").html();
       
    })

    $(".contact-a").click(function(){
        $(".contact-popup").show();
    })

    $(".contact-popup .cross").click(function(){
        $(".contact-popup").hide();       
    })
})