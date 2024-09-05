<?php 
    function imageUnica($url,$legenda){

?>
        <a href="../images/<?php echo($url) ?>" data-fancybox data-caption="<?php echo($legenda)?>">
            <img class="flexImage"src="../images/<?php echo($url) ?>" />
        </a>

<?php
    }