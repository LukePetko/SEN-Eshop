<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>iShop</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
</head>
<body>

    <!-- Main PHP -->

    <?php
        function hello()
        {
            echo "hello";
        }

        $product_name = "Mac Pro";
        $product_text = "Nový Mac Pro podáva vo všetkých kategóriách špičkový výkon. Dva grafické procesory triedy pracovných staníc dopĺňa flashové úložisko, Xeon procesory novej generácie, ultrarýchla pamäť a podpora 4K videa...";
        $product_image = "img/mac_pro/01.png";

    ?>

    
    <!-- JavaScript -->

    <script>
        var product_name = "<?php echo $product_name?>"
        var product_text = "<?php echo $product_text?>"
        var image_location = "<?php echo $product_image?>"
    </script>

    <!-- knižnice -->
    <script src="js/lib/jQuery.min.js"></script>
    <!-- ostatné skripty -->
    <script src="js/main.js"></script>
    <script src="js/popups.js"></script>



<!-- pop-upy -->


<!-- pop-up pre produkty -->

    <div class = "popup">
        <div class = "popup-bg"></div>
        <div class = "popup-fg">
            <div class = "popup-image-section">
                <img src="" alt="Produxt Image" id = "product-image">
            </div>
            <div class = "popup-text-section">
                <div class = "popup-content">
                    <h3></h3>
                    <p></p>                    
                </div>
                <div class = "cena">
                    <h4>1000€</h4>
                    <img src="img/ui/cart.png" alt="Cart">
                </div>
            </div>            
            <img src="img/ui/cross.png" class = "cross" alt="Cross">
        </div>
    </div>


<!-- pop-up pre kontakt -->

    <div class = "contact-popup">
        <div class = "popup-bg"></div>
        <div class = "popup-fg">
            <img src="img/ui/cross.png" class = "cross" alt="Cross">
        </div>
    </div>


<!-- Menu -->

    <nav id = "side-nav">
        <a href="">Meno</a>
        <a href="">Prihlásiť sa</a>
        <a href="">Výpredaj</a>
        <a class = "contact-a">Kontakt</a>
        <a href="">Košík</a>
    </nav>
    <nav id = "top-nav">
        <a href="#top">Top</a>
        <a href="#macbook">Macbook</a>
        <a href="#mac">Mac</a>
        <a href="#ipad">iPad</a>
        <a href="">iPhone</a>
        <a href="">Apple Watch</a>
        <a href="">Apple TV</a>
        <a href="">Príslušenstvo</a>
    </nav>




<!-- CONTENT -->

    <div id = "content">


<!-- "Top" sekcia -->

        <div id = "top" class = "body">
            <div>
                <div class = "name">
                    <h2>iShop</h2>
                    <img src="img/bg/logo.png" class = "logo" alt="Logo">
                </div>
                <div class = "product-long">
                    <a class = "pop"  class = "normal">
                        <div class = "product-long-image-section">
                            <img src="/img/iphone_xs/01.png" alt="iPhone XS">                   
                        </div>
                        <div class = "product-long-section">
                            <h3>iPhone XS</h3>
                            <p>Super Retina, špeciálne navrhnutá obrazovka iPhonu XS má HDR, dokonale temnú čiernu a najvernejšie podanie farieb na trhu OLED displejov. iPhone XS je skonštruovaný z mimoriadnych materiálov...</p>                    
                        </div>
                    </a>
                </div>
            </div>

            <div>
                <div class = "product-long">
                    <a class = "pop"  class = "reverse">
                        <div class = "product-long-image-section">
                            <img src="/img/ipad_pro/01.png" alt="iPad Pro">                   
                        </div>
                        <div class = "product-long-section">
                            <h3>iPad Pro</h3>
                            <p>iPad Pro s obrazovkou cez celú plochu je ako čarovné sklo, na ktorom urobíš všetko,čo potrebuješ. Nech ho držíš akokoľvek a ovládanie novými intuitívnymi gestami je tak jednoduché...</p>                    
                        </div>
                    </a>
                </div>
                <div class = "product-short">
                    <a class = "pop">
                        <div class = "product-short-section">
                            <h3>Apple Watch Series 4</h3>
                        </div>
                        <div class = "product-short-image-section">                 
                            <img src="/img/apple_watch_4/01.png" class = "product-image" alt="Apple Watch Series 4">
                        </div>
                    </a>
                </div>
            </div>
        </div>


<!-- MacBook sekcia -->

        <div id = "macbook" class = "body">

            <h2>MacBook</h2>

            <div>
                <div class = "product-long">
                    <a class = "pop"  class = "reverse">
                        <div class = "product-long-image-section">
                            <img src="/img/macbook_pro_13_1/01.png" alt="MacBook Pro 13''">                   
                        </div>
                        <div class = "product-long-section">
                            <h3>MacBook Pro</h3>
                            <p>Silnejší, výkonejší a profesionálnejší. Nový MacBook Pro vychádza z prevratných nápadov. A čaká len na tie tvoje. MacBook Pro s procesom Intel Core ôsmej generácie dostáva výpočtový výkon úplne inam...</p>                    
                        </div>
                    </a>
                </div>
                
                <div class = "name">

                    <img src="img/bg/macbook.png" alt="MacBook Background">
                </div>
            </div>
            
            <div>
                <div class = "product-short">
                    <a class = "pop">
                        <div class = "product-short-section">
                            <h3>MacBook</h3>
                        </div>
                        <div class = "product-short-image-section">                 
                            <img src="/img/macbook/01.png" class = "product-image" alt="MacBook">
                        </div>
                    </a>
                </div>
                
                <div class = "product-short">
                    <a class = "pop">
                        <div class = "product-short-section">
                            <h3>New MacBook Air</h3>
                        </div>
                        <div class = "product-short-image-section">                 
                            <img src="/img/macbook_air_new/01.png" class = "product-image" alt="New MacBook Air">
                        </div>
                    </a>
                </div>


                <div class = "product-short">
                    <a class = "pop">
                        <div class = "product-short-section">
                            <h3>MacBook Air</h3>
                        </div>
                        <div class = "product-short-image-section">                 
                            <img src="/img/macbook_air_old/01.png" class = "product-image" alt="Old MacBook Air">
                        </div>
                    </a>
                </div>
            </div>
        </div>


<!-- Mac sekcia -->

        <div id = "mac" class = "body">
            <h2>Mac</h2>

            <div>
                <div class = "name">

                    <img src="img/bg/imac.png" class = "imac-category" alt="Mac Background">
                </div>
                <div class = "product-long">
                    <a class = "pop"  class = "normal">
                        <div class = "product-long-image-section">
                            <img src="img/imac_pro/01.png" alt="iMac Pro">                   
                        </div>
                        <div class = "product-long-section">
                            <h3>iMac Pro</h3>
                            <p>Profesionáli iMac milujú. iMac Pro je najbrutálnejšou zostavou grafiky pracovných staníc, procesora, úložiska,  pamäte a rozhraní na všetkých počítačoch Mac...</p>                    
                        </div>
                    </a>
                </div>
            </div>
            
            <div>
                <div class = "product-long">
                    <a class = "pop"  class = "normal">
                        <div class = "product-long-image-section">
                            <img src="img/imac_27/01.png" alt="iMac 27">                   
                        </div>
                        <div class = "product-long-section">
                            <h3>iMac 27"</h3>
                            <p>Najlepší displej v kombinácii s vysoko výkonným procesorom v neskutočne tenkom prevedení. Úplne nový 27 palcový iMac s Retina 5K displejom predvedie ostrú a jasnú kvalitu obrazu, že všetko ostatné bledne...</p>                    
                        </div>
                    </a>
                </div>
                <div class = "product-short">
                    <a class = "pop">
                        <div class = "product-short-section">
                            <h3>iMac 21"</h3>
                        </div>
                        <div class = "product-short-image-section">                 
                            <img src="img/imac_21/01.png" class = "product-image" alt="iMac 21">
                        </div>
                    </a>
                </div>
            </div>
            
            <div>
                <div class = "product-short">
                    <a class = "pop">
                        <div class = "product-short-section">
                            <h3>Mac Mini</h3>
                        </div>
                        <div class = "product-short-image-section">                 
                            <img src="img/mac_mini/01.png" class = "product-image" alt="Mac Mini">
                        </div>
                    </a>
                </div>
                <div class = "product-long">
                    <a class = "pop"  class = "normal">
                        <div class = "product-long-image-section">
                            <img src="img/mac_pro/01.png" alt="Mac Pro">                   
                        </div>
                        <div class = "product-long-section">
                            <h3>Mac Pro</h3>
                            <p>Nový Mac Pro podáva vo všetkých kategóriách špičkový výkon. Dva grafické procesory triedy pracovných staníc dopĺňa flashové úložisko, Xeon procesory novej generácie, ultrarýchla pamäť a podpora 4K videa...</p>                    
                        </div>
                    </a>
                </div>
            </div>
        </div>
        

<!-- iPad sekcia -->

        <div id = "ipad" class = "body">
            <h2>iPad</h2>

            <div>
                <div class = "product-long">
                    <a class = "pop"  class = "reverse">
                        <div class = "product-long-image-section">
                            <img src="/img/ipad_pro/01.png" alt="iPad Pro">                   
                        </div>
                        <div class = "product-long-section">
                            <h3>iPad Pro</h3>
                            <p>iPad Pro s obrazovkou cez celú plochu je ako čarovné sklo, na ktorom urobíš všetko,čo potrebuješ. Nech ho držíš akokoľvek a ovládanie novými intuitívnymi gestami je tak jednoduché...</p>                    
                        </div>
                    </a>
                </div>
                
                <div class = "name">
                    <img src="img/bg/ipad.png" class = "ipad-category" alt="MacBook Background">
                </div>
            </div>
            
            <div>
                
                <div class = "product-short">
                    <a class = "pop">
                        <div class = "product-short-section">
                            <h3>iPad Mini</h3>
                        </div>
                        <div class = "product-short-image-section">                 
                            <img src="/img/ipad_mini/01.png" class = "product-image" alt="iPad mini">
                        </div>
                    </a>
                </div>

                <div class = "product-long">
                    <a class = "pop"  class = "reverse">
                        <div class = "product-long-image-section">
                            <img src="/img/ipad/01.png" alt="iPad">                   
                        </div>
                        <div class = "product-long-section">
                            <h3>iPad</h3>
                            <p>Vyrovná sa počítaču, no jemu sa nič nevyrovná. Nový 9.7" iPad teraz prichádza s podporou Apple Pencil. Nový iPad má skvelý retina displej, suverénný výkon a aplikácie s ktorými môžeš robiť všetko, čo ťa baví...</p>                    
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>

<!-- KONIEC CONTENTU -->

    <!--<footer>
        <p>
            Toto nie je pravý eshop. pre viac informácií klinki <a>sem.</a>
        </p>
    </footer> -->



</body>
</html>