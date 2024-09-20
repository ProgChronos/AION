<?php 
    function image($url,$legenda){
?>        
        <a href="<?php echo($url) ?>" data-fancybox data-caption="<?php echo($legenda)?>">
            <img src="<?php echo($url) ?>" />
        </a>      
<?php
    }