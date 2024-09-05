<?php

function Servicos($Nome,$Subtitulo,$texto,$imagem,$link){
?>

    <div class="testimonials__slide swiper-slide">
        <div class="testimonials__author">
        <a href='<?php echo($link) ?>'><img src="<?php echo($imagem)?>" alt="Author image" class="testimonials__avatar"></a>
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

