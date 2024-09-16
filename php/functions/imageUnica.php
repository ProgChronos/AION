<?php 
    function imageUnica($url,$legenda){

?>        <figure class="flexFigure">

        <a href="../images/<?php echo($url) ?>" data-fancybox data-caption="<?php echo($legenda)?>">
            <img class="flexImage"src="../images/<?php echo($url) ?>" />
        </a>
        </figure>

      
<?php
    }