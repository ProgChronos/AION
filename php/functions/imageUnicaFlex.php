<?php 
    function imageUnicaFlex($url,$legenda){

?>        
    <figure class="flexFigure">
        <a href="<?php echo($url) ?>" data-fancybox data-caption="<?php echo($legenda)?>">
            <img class="flexImage"src="<?php echo($url) ?>" />
        </a>
    </figure>
<?php
    }