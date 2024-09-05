

<?php
function projeto($linkImage,$Tituto,$ViewLink){
    ?>
    <div style="background-image:linear-gradient(rgba(48,48,48,.5),rgba(48,48,48,.5)), url('<?php echo($linkImage) ?>');">
        <div class="title-bgbk">
            <a href="<?php echo($ViewLink) ?>">
                <h2 class="center slide-txt ttu"><?php echo($Tituto) ?></h2>
            </a>
        </div>
    </div>
    <?php
}