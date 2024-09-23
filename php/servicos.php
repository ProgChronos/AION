

<?php

function Servicos($Nome,$Subtitulo,$texto,$imagem,$link){
?>
<?php 
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
    <div class="testimonials__slide swiper-slide">
        <div class="testimonials__author">
        <a href='<?php echo($urlSite . $link) ?>'><img src="<?php echo($imagem)?>" alt="Author image" class="testimonials__avatar"></a>
            <cite class="testimonials__cite">
                <strong><?php echo($Nome) ?></strong>
                <span><?php echo($Subtitulo)?></span>
            </cite>
        </div>
        <p>
        <?php echo($texto)?>
        </p>
    </div>

<?php
}
?>

