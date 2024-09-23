<?php
function headerTop($img,$nome,$text){
    ?>
        <section id="clients" class="headerTop" style='background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgb(0 0 0 / 80%)), url("<?php echo($img) ?>");'>          
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