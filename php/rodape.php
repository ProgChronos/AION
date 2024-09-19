 <!-- # footer 
        ================================================== -->
        <footer class="s-footer">
            <div class="row s-footer__content">
            <div class="column xl-9 lg-6 md-12 s-footer__block s-footer__about">                    
                    <h3>Sobre o Instituto</h3>
                    <p>
                    “Há um tempo que está fora de nossa percepção do tempo. Um tempo para o qual não passamos. Um tempo onde o antes, o agora, e o depois, se fundem e confundem. Nossos parâmetros de percepção, no entanto, nos obrigam a estudarmos mais profundamente os tempos como os conhecemos — passado, presente e futuro — à luz de nosso fugidio discernimento de um tempo sempre.”
                    <i> ——— Nilton Bonder                    </i>
                    </p>     
                    <p class="ss-copyright">
                        <span>© Copyright Instituto Aion Brasil <?php echo(date("Y"))?></span> 
                    </p>          
                    
                </div>    
            <div class="column xl-3 lg-6 md-12 s-footer__block s-footer__site-links">
                    <h3>Aion</h3>
                    <ul class="link-list">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="index.html">Instituto</a></li>
                        <li><a href="about.html">Pessoas</a></li>
                        <li><a href="contact.html">Conag</a></li>
                        <li><a href="https://www.dreamhost.com/r.cgi?287326">Fiiados e Associados</a></li>
                        <li><a href="blog.html">Contato</a></li>
                    </ul>
                </div>
                      

                
            <div class="row s-footer__bottom">
                <div class="column xl-6 lg-12">
                   
                </div>
                <div class="column xl-6 lg-12">
               
                </div>


            </div>
            
        </footer> <!-- end s-footer -->

    </div> <!-- end page-wrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src='https://codepen.io/fancyapps/pen/ygyzop.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js'></script>
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.js'></script>

    <!-- Java Script
    ================================================== -->
    <script src="<?php echo($sairDaPasta)?>js/plugins.js"></script>
    <script src="<?php echo($sairDaPasta)?>js/main.js"></script>
    <script src="<?php echo($sairDaPasta)?>js/slider.js"></script>
    <script src="<?php echo($sairDaPasta)?>js/globe.js"></script>

    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js'></script>
<script src='https://cdn.rawgit.com/chieffancypants/angular-hotkeys/master/build/hotkeys.min.js'></script>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
      Fancybox.bind('[data-fancybox="gallery"]', {
        //
      });    

      $(document).ready(function() {
    $("#single_1").fancybox({
          helpers: {
              title : {
                  type : 'float'
              }
          }
      });

    $("#single_2").fancybox({
    	openEffect	: 'elastic',
    	closeEffect	: 'elastic',

    	helpers : {
    		title : {
    			type : 'inside'
    		}
    	}
    });

    $("#single_3").fancybox({
    	openEffect : 'none',
    	closeEffect	: 'none',
    	helpers : {
    		title : {
    			type : 'outside'
    		}
    	}
    });

    $("#single_4").fancybox({
    	helpers : {
    		title : {
    			type : 'over'
    		}
    	}
    });
});
    </script>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>


<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

<script>
      Fancybox.bind('[data-fancybox]', {
        // Your custom options
      });    
    </script>


</body>
</html>