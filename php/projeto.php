
<?php 

?>



<?php
function projeto($linkImage,$Tituto,$ViewLink){
    $texto = null;
    $urlSite  = 'http://' . $_SERVER['HTTP_HOST'];
  
    //RETIRAR NA SITE FORA DA PRODUÇÃO
    if($urlSite == "http://localhost"){
      $urlSite = 'http://' . $_SERVER['HTTP_HOST'] . "/AION";
    }else{
      $urlSite  = 'http://' . $_SERVER['HTTP_HOST'];
    }
  
    if(isset($dentroDePasta)){
      $texto = "../../";
    }
    
    ?>
    <div style="background-image:linear-gradient(rgba(48,48,48,.5),rgba(48,48,48,.5)), url('<?php echo($linkImage) ?>');">
        <div class="title-bgbk">
            <a href="<?php echo($urlSite . $ViewLink) ?>">
                <h2 class="center slide-txt ttu"><?php echo($Tituto) ?></h2>
            </a>
        </div>
    </div>
    <?php
}