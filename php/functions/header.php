<?php
function headerTop($img,$nome,$text){
    ?>
        <section id="clients" class="headerTop" style='padding: 10%; background-image: url("<?php echo($img) ?>"),linear-gradient(to bottom, rgba(23, 36, 51, 0.8), rgba(23, 36, 51, 0.5));'>          
            <div class=" row s-clients__content-block width-sixteen-col">
                <div class="column xl-12 grid-block grid-section-split">
                    <div class="grid-full section-header text-center">
                        <div class="text-pretitle2"><?php echo($nome) ?> </div>                           
                            <i class="text-display-title-02">
                            <?php echo($text) ?>                    
                            </i>  
                        </div> 
                    </div> 
                </div> 
            </div>
        </section>
    <?php    
}