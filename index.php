
<?php 
include_once("php/topo.php");
include_once("php/menu.php"); 
?>

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap ss-home">


        <!-- # site header 
        ================================================== -->
        <?php
        include_once("php/carrosel.php"); ?>

            <section id="clients" class="s-clients">          

                <div class=" row s-clients__content-block width-sixteen-col">
                    <div class="column xl-12 grid-block grid-section-split">
                 
                        <div class="section-header grid-section-split__header">
                            <div class="text-pretitle">Quem é o...</div>                           
                            <h2 class="text-display-title">
                                GRUPO AION DO BRASIL
                            </h2>       
                            
                        </div>  
                        <div class="grid-section-split__primary">
                            <p class="lead linecorret">
                                <b>O GRUPO AION</b> é um conglomerado corporativo que tem como seu <b>CRIADOR / FUNDADOR o INSTITUTO AION DO BRASIL</b>, formado por grupos de empresas, instituições, produtos, serviços e negócios, que se movimentam nos 05 continentes e atuam nos segmentos: imobiliário, na saúde, commodities, ativos, seguros, nas industrias, tecnologias, consultorias e assessorias; e na comunicação com um único propósito, atender, as necessidades e anseios de seus <b>CLIENTES, PARCEIROS e do MERCADO,</b> como um todo.
                            </p>   
                    </div> <!-- end column -->
                </div> <!-- end row -->
            </div>


              
            </section> <!-- end s-clients -->   

            <section id="clients" class="temp">          

<div class=" row s-clients__content-block width-sixteen-col">
    <div class="column xl-12 grid-block grid-section-split">

    <div class="grid-full section-header text-center">
        <div class="text-pretitle"></div>                           
            <p class="lead linecorret text-aspas text-just pmnone" style="text-align: justify;">
            “ Há um <b class="amarelo-text">tempo</b> que está fora de nossa percepção do <b class="amarelo-text">tempo</b>. Um <b class="amarelo-text">tempo</b> para o qual não passamos. Um <b class="amarelo-text">tempo</b> onde o antes, o agora, e o depois, se fundem e confundem. Nossos parâmetros de percepção, no entanto, nos obrigam a estudarmos mais profundamente os tempos como os conhecemos — passado, presente e futuro — à luz de nosso fugidio discernimento de um <b class="amarelo-text">tempo</b> sempre. ”<br><br>
            <i>Nilton Bonder </i>                  
                    </p>  
                    </div> 
    </div> <!-- end column -->
</div> <!-- end row -->
</div>
</section>

            <section id="cta" class="s-cta">

            <div class="row2 row-x-center text-center">
                <div class="column xl-8 lg-12">

                    <div class="s-cta__content">
                        <p class="lead text-center ">
                        INSTITUIÇÃO fundadora e proprietária majoritária dos ativos integralizados dos fundos de investimento do GROUP AION;ACIONISTA, majoritária da HOLDING GROUP AION, está por sua vez é a acionista principal das empresas que integram o GROUP AION:
                        <a href="images/hierarchy.png" data-fancybox data-caption="">
                    <img   src="images/hierarchy.png" srcset="images/hierarchy.png 1000w, images/hierarchy.png 500w" sizes="(max-width: 1000px) 100vw, 1000px" alt="">
                </a>
                        </p>

                        <div class="s-expertise__content-main grid-section-split__primary">

<!-- <div class="grid-list-items list-items show-ctr">
    <div class="grid-list-items__item list-items__item">
        <div class="grid-list-items__title list-items__item-header">
            <h3 class="list-items__item-title">Responsável</h3>
        </div>
        <div class="grid-list-items__text list-items__item-text">
            <p class="lead">
            Pela aprovação das diretrizes econômicas, investimentos e planos diretores e todo o GROUP AION.
            </p>
        </div>
    </div>
    <div class="grid-list-items__item list-items__item">
        <div class="grid-list-items__title list-items__item-header">
            <h3 class="list-items__item-title">Detentora</h3>
        </div>
        <div class="grid-list-items__text list-items__item-text">
            <p class="lead">
            Da propriedade ou de participação ou parceira do GROUP AION.
            </p>
        </div>
    </div>
    <div class="grid-list-items__item list-items__item">
        <div class="grid-list-items__title list-items__item-header">
            <h3 class="list-items__item-title">Detentora</h3>
        </div>
        <div class="grid-list-items__text list-items__item-text">
            <p class="lead">
            Da Presidência do conselho de Administração e Gestão do GROUP AION (CONAG).
            </p>
        </div>
    </div>   -->
                    </div>

                </div>
            </div>

        </section>

        <section id="clients" class="s-clients">          

<div class="row  width-sixteen-col">
    <div class="column xl-12 grid-block grid-section-split">
    
        <div class="section-header grid-section-split__header">
            <div class="text-pretitle"></div>                           
            <h2 class="text-display-title">
            Nossos Serviços
            </h2>       
        </div> <!-- end section-header -->
    
       
    
    </div> <!-- end column -->
</div> <!-- end row -->
       
<div class="row s-clients__content-block width-sixteen-col">
    <div class="column xl-12">
    
        <div class="swiper-container testimonials__slider home-slider">

            <div class="swiper-wrapper">

                <?php 
                    Servicos("Saúde","","","images/servicos/new/saude.jpg","");
                    Servicos("Consultoria e Assessoria","","","images/servicos/11082.jpg","");
                    Servicos("Estruturação e Re-Estruturação","","","images/servicos/new/Estruturacao.jpg","");
                    Servicos("Construção Civil & Imobiliária","","","images/servicos/new/construcao.jpg","");
                    Servicos("Educação","","","images/servicos/new/educacao.jpg","");
                    Servicos("Industrial","","","images/servicos/new/industrial.jpg","");
                    Servicos("Mineração","","","images/servicos/new/mineracao.jpg",""); //
                    Servicos("Commodities","","","images/servicos/new/commodits.jpg","");
                    Servicos("Ativos","","","images/servicos/new/ativos.jpg","");
                    Servicos("Seguros","","","images/servicos/new/seguros.jpg","");
                    Servicos("Ciência & Tecnologia","","","images/servicos/ciencia.jpg","");
                    Servicos("Comércio","","","images/servicos/64.jpg",""); //
                    Servicos("Profissionais Liberais","","","images/servicos/5638.jpg","");
                    Servicos("Entes Públicos","","","images/servicos/13345.jpg","");
                    Servicos("Comunicação","","","images/servicos/2148911819.jpg","");
                ?>

                </div> 

            <div class="swiper-pagination"></div>

        </div> <!--end testimonials__slider -->                    
    
    </div> <!-- end column -->
</div> <!-- end row -->


</section> 
<?php
include_once("php/projetos.php");


?>
            
            <section id="about" class=" s-about target-section">

                <div class=" row s-about__content width-sixteen-col">
                    <div class="column grid-block grid-section-split">
                           
                        <img src="images/geometric_shape.svg" alt="" class="s-about__content-imgbg">

                        <div class="section-header grid-section-split__header">
                            <div class="text-pretitle">Quem Somos?</div>                           
                            <h2 class="text-display-title">
                                Grupo Aion do Brasil

                            </h2>                           
                        </div> <!-- end section-header -->

                        <div class=" s-about__content-main grid-section-split__primary">
                            <p class="attention-getter ">
                                <div class="row">
                                <div class="column xl-3 lg-4 md-12 u-flexitem-center">
                                    <div class="text-pretitle text-center">
                                        <i class="bi bi-bullseye" style="font-size: 4rem;" ></i> 
                                        <p class="text-center">Nossa Missão</p>
                                    </div>                           
                                </div>
                                <div class="column xl-9 lg-8 md-12 text-just">                    

                            <h5 class="no-margin linecorret text-aspas ">
                            Despertar a consciência do sempre, para além do agora.
                            </h5>
                        </div></div>
                        <p class="attention-getter ">
                            <div class="row">
                            <div class="column xl-3 lg-4 md-12 u-flexitem-center">
                                <div class="text-pretitle text-center">
                                <i class="bi bi-eye" style="font-size: 4rem;"></i> 
                                <p class="text-center">Nossa Visão</p>
                            </div>                           
                            </div>
                            <div class="text-just column xl-9 lg-8 md-12 ">                    

                        <h5 class="linecorret text-aspas no-margin">
                        A eternidade concebe a todos que despertam:<br>
                        a criatividade, o amor e os sonhos, pois na presença destes, não existem impossibilidades.


                        </h5>
                    </div></div>
                    <p class="attention-getter ">
                        <div class="row">
                        <div class="column xl-3 lg-4 md-12 u-flexitem-center">
                            <div class="text-pretitle text-center">
                                <i class="bi bi-graph-up" style="font-size: 4rem;"></i> 
                                <p class="text-center">Nossos Valores</p>
                            </div>                           
                        </div>
                        <div class="text-just column xl-9 lg-8 md-12 ">                    

                        <h5 class="linecorret text-aspas no-margin">
                    <ul>



                        <i class="bi bi-arrow-return-right"></i> CONHECIMENTO <br>
                        <i class="bi bi-arrow-return-right"></i> SENTIMENTO <br>
                        <i class="bi bi-arrow-return-right"></i> PENSAMENTO <br>
                        <i class="bi bi-arrow-return-right"></i> MOVIMENTO <br>
                        <i class="bi bi-arrow-return-right"></i> INTUIÇÃO <br>


                    </ul>
                    </h5>
                    
                </div></div></p>

                        </div> <!-- end s-about__content-main -->

                        <div class="s-about__content-btn grid-section-split__bottom">
                            <a href="about.html" class="btn btn--stroke u-fullwidth">Mais sobre</a>

                           
                    
                    </div> <!-- content-inner -->
                </div>
                
            </section> <!-- end s-about -->

            <!-- expertise
            ----------------------------------------------- -->
            <section id="expertise" class="s-expertise">

                <div class="row s-expertise__content width-sixteen-col">
                    <div class="column xl-12 grid-block grid-section-split">

                        <div class="section-header grid-section-split__header white-text">
                            <div class="text-pretitle">EESG</div>                           
                            <h2 class="text-display-title white-text">
                            Saiba mais do EESG do Aion
                            </h2>     
                            
                            <p class="lead">
                            É a própria sustentabilidade empresarial, ela indica que as empresas que a praticam, mostram a sua solidez, custos mais baixos, melhor reputação e maior resiliência em meio às incertezas e vulnerabilidades.
                            </p>
                        </div> <!-- end section-header -->

                        <div class="s-expertise__content-main grid-section-split__primary white-text">

                            <div class="grid-list-items list-items show-ctr">
                                <div class="grid-list-items__item list-items__item">
                                    <div class="grid-list-items__title list-items__item-header">
                                        <h3 class="list-items__item-title">Porque um "E" a mais?</h3>
                                    </div>
                                    <div class="grid-list-items__text list-items__item-text">
                                        <p>
                                        Ao acrescentarmos mais um E na sigla, estamos reafirmando o compromisso com a economia em todos nossos projetos, negócios, produtos e serviços, além de acrescentarmos o símbolo "+", pois sabemos que o ESG é apenas uma pequena parte do que pode ser feito para mudar o mundo.
                                        </p>
                                    </div>
                                </div> <!-- list-item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="grid-list-items__title list-items__item-header">
                                        <h3 class="list-items__item-title">Educação</h3>
                                    </div>
                                    <div class="grid-list-items__text list-items__item-text">
                                        <p>
                                        Torna-se o principal método de uma gestão estruturada de recursos, para geração de oportunidades e mudanças efetivas na sociedade. Considerando, que nossos pensamentos são sementes e nossas ações são frutos, investir na educação é plantar hoje, para colher novas oportunidades amanhã. 
                                        </p>
                                    </div>
                                </div> <!-- list-expertise__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="grid-list-items__title list-items__item-header">
                                        <h3 class="list-items__item-title">Compliance</h3>
                                    </div>
                                    <div class="grid-list-items__text list-items__item-text">
                                        <p>
                                        O INSTITUTO, através das suas especialidades e atribuições, consegue realizar um COMPLIANCE completo, assim, analisando de forma técnica e eficaz os lados positivos e negativos dos nossos negócios, parceiros e clientes, buscando minimizar os lados negativos e maximizar o lado positivo. 
                                        </p>
                                    </div>
                                </div> <!-- list-expertise__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="grid-list-items__title list-items__item-header">
                                        <h3 class="list-items__item-title">Empreendedorismo </h3>
                                    </div>
                                    <div class="grid-list-items__text list-items__item-text">
                                        <p>
                                        Por acreditarmos no empreendedorismo, entendemos que o empresário, acima de tudo, é um ser realizador, que produz novas ideias por meio da congruência entre conhecimento e criatividade. Logo, o empreendedorismo funciona como um acelerador no crescimento de novas iniciativas.
                                        </p>
                                    </div>
                                </div> <!-- list-expertise__item -->

                            </div> <!-- grid-list-items -->
                        </div> <!-- end s-expertise__content-main -->

                        <div class="s-expertise__content-btn grid-section-split__bottom">
                            <a href="<?php echo($urlSite) ?>/aion/instituto/eesg.php" class="btn btn--primary u-fullwidth">Saiba Mais Sobre</a>
                        </div> <!-- end s-about__content-btn -->

                    </div> <!-- end grid-block-->
                </div> <!-- end s-expertise__content -->

            </section> <!-- end s-expertise -->

            <!-- clients
            ----------------------------------------------- -->
      
        </section> <!-- s-content-->


        <h2 class="pt5 text-center text-display-title" style="
    background: var(--color-3); margin: 0;
">
        Presença Global
        </h2>
        <?php include_once("mapaMundiSvg.php");?> 
      
 <p  style="background: var(--color-3); margin: 0;" class="lead px5">Nossa missão é ser muito mais do que um instituto de investimentos, queremos ser um agente de mudança e inspiração, 
    iluminando caminhos e criando um legado de prosperidade para as gerações futuras.<br>
    Estamos presente ao redor do mundo: <br>   
</p>
<p class="text-center px5 " style="background: var(--color-3); margin: 0; padding-bottom: 60px;" >Salvador - Brasil | São paulo - Brasil | Montevidéu - Uruguai | Miami - Estados Unidos | Hong Kong - China | Madrid - Espanha | Londres - Reino Unido </p>



<section class="temp">          
<div class=" row s-clients__content-block width-sixteen-col">
    <div class="column xl-12 grid-block grid-section-split">
    <div class="grid-full section-header text-center">
        <div class="text-pretitle amarelo-text">São Paulo, 28 de outubro de 2022.</div>    
        <i class="white-text">Prezados Senhores</i>                       
            <p class="lead linecorret text-aspas  textjust px5">
            <br> Escrevo estas linhas para expressar meus sinceros agradecimentos, em nome da 
            nossa equipe, pela atenção dispensada a este breve relato sobre o <b class="amarelo-text">
                GRUPO AION
                 DO BRASIL
            </b>, o qual tenho o orgulho de presidir.<br><br>
             
             Este grupo representa, em
              minha visão, um ponto de partida e um porto seguro para milhares de  famílias, 
              onde, através de bons empresários, realizamos projetos, negócios, produtos e 
              serviços com excelência, auferindo recursos para investirmos em  ações sociais em vários  pontos do mundo.  <br><br>

Fazer parte da família do <b class="amarelo-text">GRUPO AION DO BRASIL </b>é ter a  certeza de que a vida vale a pena e que para cada desafio neste mundo há uma solução certa e segura. Acreditamos que a esperança e o amor não morrem, mas se multiplicam exponencialmente em todos os corações.     <br>  <br>       

"Feliz é a nação cujo Deus é o Senhor, cujo povo Ele escolheu para si mesmo. O Senhor olha desde os céus e vê toda a humanidade. Da Sua morada, observa todas as pessoas."
<br>
Mais uma vez, muito obrigada!
<br><br>
Atenciosamente,<br>
<b class="white-text">ROSILIANE A. M. PINTO</b><br>
Diretora Presidente<br>
<b class="white-text">GRUPO AION DO BRASIL</b>




                
                    </p>  
                    </div> 
    </div> <!-- end column -->
</div> <!-- end row -->
</div>
</section>

                </div>  
            </div> 

        </section> 



<?php
include_once("php/rodape.php") ?>