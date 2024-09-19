<?php
    $dentroDePasta = true;
    include_once("../../php/topo.php");
    include_once("../../php/menu.php");
    include_once("../../php/functions/functionsAll.php");

    headerTop('images/header/aionHeader.jpg','O tempo é o único verdadeiro capital de qualquer ser humano.<br> E é a única coisa que ele pode perder sem ter.','Thomas Edison');

?>

<div class="row s-clients__content-block width-sixteen-col">
    <div class="column xl-12">
    
        <div class="swiper-container testimonials__slider home-slider">

            <div class="swiper-wrapper">

                <?php 
                    Servicos("Saúde","","","images/parceiros/chronos.png","");
                    Servicos("Saúde","","","images/parceiros/earth dourada.png","");
                    Servicos("Saúde","","","images/parceiros/STRATEGY.png","");
                    Servicos("Saúde","","","images/parceiros/chronos.png","");
                    Servicos("Saúde","","","images/parceiros/chronos.png","");
                    Servicos("Saúde","","","images/parceiros/chronos.png","");
                    Servicos("Saúde","","","images/parceiros/chronos.png","");
                    Servicos("Saúde","","","images/parceiros/chronos.png","");
                    Servicos("Saúde","","","images/parceiros/chronos.png","");
                    Servicos("Saúde","","","images/parceiros/chronos.png","");

                ?>

                </div> 

            <div class="swiper-pagination"></div>

        </div> <!--end testimonials__slider -->                    
    
    </div> <!-- end column -->
</div> <!-- end row -->



<?php
    include_once("../../php/rodape.php");