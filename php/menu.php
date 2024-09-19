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
<header>
      <div class="container">
        <nav class="navigation">
          <a href="<?php echo($urlSite) ?>/" class="logo">
            <img src="<?php echo($texto)?>img/icons/Prancheta 1@0.5x.png" alt="Logo" class="logo-img" />
          </a>
          <ul class="nav_menu">
            <li class="nav_list">
              <a href="<?php echo($urlSite) ?>/index.php" class="nav_link">
                <span>Home</span>
              </a>
            </li>

            <li class="nav_list nav_list_menu">
              <a class="nav_link">
                <span>Aion</span>
                <ion-icon name="chevron-down-outline"></ion-icon>
              </a>
              <div class="dropdown">
                <div class="dropdown-inner">
                  <div class="dropdown-item">
                    <h5 class="item-heading no-margin">Instituto</h5>

                    <a href="<?php echo($urlSite) ?>/aion/instituto/aion.php">
                      <div class="item-list">
                       
                        <div class="item-list-info">
                          <h6 class="no-margin">AION</h6>
                          <p class="no-margin">instituto</p>
                        </div>
                      </div>
                    </a>

                    <a href="<?php echo($urlSite) ?>/aion/instituto/pessoas.php">
                    <div class="item-list">
                      
                      <div class="item-list-info">
                        <h6 class="no-margin">PESSOAS</h6>
                        <p class="no-margin">O que acreditamos</p>
                      </div>
                    </div>
                    </a>

                    <a href="instituto/eesg.php">
                    <div class="item-list">
                      
                      <div class="item-list-info">
                        <h6 class="no-margin">EESG+</h6>
                        <p class="no-margin">Cuido, preservo e protejo. </p>
                      </div>
                    </div>
                    </a>


                    <a href="<?php echo($urlSite) ?>/aion/instituto/investimentos.php">
                    <div class="item-list">
                     
                      <div class="item-list-info">
                        <h6 class="no-margin">INVESTIMENTOS</h6>
                        <p class="no-margin">Porque investir no tempo?</p>
                      </div>
                    </div>
                  </a>
                  </div>

                  <div class="dropdown-item">
                    <h5 class="item-heading no-margin">Estrutura </h5>
                    <a href="<?php echo($urlSite) ?>/manutencao.php">
                    <div class="item-list">
                     
                      <div class="item-list-info">
                        <h6 class="no-margin">GRUPO AION</h6>
                        <p class="no-margin">Empresas e instituições</p>
                      </div>
                    </div>
                    </a>

                    <a href="<?php echo($urlSite) ?>/aion/estrutura/instituto-tempo.php">
                    <div class="item-list">
                      
                      <div class="item-list-info">
                        <h6 class="no-margin">INSTITUTO TEMPO</h6>
                        <p class="no-margin">Incentivar e Promover.</p>
                      </div>
                    </div>
                    </a>

                    <a href="<?php echo($urlSite) ?>/aion/estrutura/conag.php">
                    <div class="item-list">
                     
                      <div class="item-list-info">
                        <h6 class="no-margin">CONAG</h6>
                        <p class="no-margin">Administração e Gestão</p>
                      </div>
                    </div>
                    </a>


                    <a href="<?php echo($urlSite) ?>/aion/estrutura/operadores-e-gestores.php">
                    <div class="item-list">
                      
                      <div class="item-list-info">
                      <h6 class="no-margin">OPERADO.. E GESTOR..</h6> 
                      <p class="no-margin">Oper. e gest. financeiros</p>
                      </div>
                    </div>
                  </a>
                  </div>


                  
                  <div class="dropdown-item">
                    <h5 class="item-heading no-margin">Coorporativa</h5>
                    
                    <a href="<?php echo($urlSite) ?>/manutencao.php">
                    <div class="item-list">
                     
                      <div class="item-list-info">
                        <h6 class="no-margin">CORPSOCIAL</h6>
                        <p class="no-margin">Base e Projeto</p>
                      </div>
                    </div>
                    </a>

                    <a href="<?php echo($urlSite) ?>/manutencao.php">
                    <div class="item-list">
                     
                      <div class="item-list-info">
                        <h6 class="no-margin">HOLDING</h6>
                        <p class="no-margin">Controladora  </p>

                      </div>
                    </div>
                    </a>

                    <a href="<?php echo($urlSite) ?>/aion/coorporativa/filiadosEassociados.php">
                    <div class="item-list">
                     
                      <div class="item-list-info">
                        <h6 class="no-margin">FILIAD. E ASSO.</h6>
                        <p class="no-margin">Venha fazer parte!</p>
                      </div>
                    </div>
                    </a>

                    <a href="<?php echo($urlSite) ?>/manutencao.php">
                    <div class="item-list">
                     
                      <div class="item-list-info">
                        <h6 class="no-margin">PARCEIROS</h6>
                        <p class="no-margin">Nossa rede</p>
                      </div>
                    </div>
                  </a>

                  </div>


                  <div class="dropdown-item">
                    <h5 class="item-heading no-margin">Nossas Empresas</h5>


                    <a href="<?php echo($urlSite) ?>/aion/nossasEmpresas/pangeia.php">
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/iconesMenu/pangea.png" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">PANGEIA</h6>
                        <p class="no-margin">Distribuir vida</p>
                      </div>
                    </div>
                    </a>

                    <a href="<?php echo($urlSite) ?>/aion/nossasEmpresas/gaia.php">
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/iconesMenu/gaia.png" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">GAIA</h6>
                        <p class="no-margin">Criar vida</p>
                      </div>
                    </div>
                    </a>

                    <a href="<?php echo($urlSite) ?>/aion/nossasEmpresas/education.php">
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/iconesMenu/education.png" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">EDUCATION</h6>
                        <p class="no-margin">Educar</p>
                      </div>
                    </div>
                    </a>

                    <a href="<?php echo($urlSite) ?>/legislacao.php">
                    <div class="item-list">
                      <div class="item-img">
                      <i class="bi bi-file-pdf-fill"  style="font-size: 3rem;"></i>
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">Lesgilação</h6>
                        <p class="no-margin">Documentos</p>
                      </div>
                    </div>
                    </a>

                  </div>

                </div>
              </div>
            </li>

            <li class="nav_list nav_list_menu">
              <a href="#!" class="nav_link">
                <span>Produtos e Serviços</span>
                <ion-icon name="chevron-down-outline"></ion-icon>
              </a>
              <div class="dropdown">
                <div class="dropdown-inner">
                  <div class="dropdown-item">
                    <h5 class="item-heading no-margin">‎‎‎‎‎‎‎‎ㅤ</h5>


                    <a href="<?php echo($urlSite) ?>/prod_e_serv/paginas/saude.php">
                      <div class="item-list">
                        <div class="item-img">
                          <img src="<?php echo($texto)?>img/icons/icons8-clinic-48.png" alt="Icon" />
                        </div>
                        <div class="item-list-info">
                          <h6 class="no-margin">SAÚDE</h6>
                        </div>
                      </div>
                    </a>

                    <a href="<?php echo($urlSite) ?>/prod_e_serv/paginas/consultoria.php">
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/icons/icons8-rich-48.png" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">CONSULTORIA</h6>
                        <p class="no-margin">E assesoria.</p>
                      </div>
                    </div>
                    </a>

                    <a href="<?php echo($urlSite) ?>/prod_e_serv/paginas/estruturacao.php">
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/icons/icons8-puzzle-48.png" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">ESTRUTURAÇÃO</h6>
                        <p class="no-margin">E re-estruturação</p>
                      </div>
                    </div>
                    </a>
              
                    <a href="<?php echo($urlSite) ?>/prod_e_serv/paginas/ConstrCivilEImobi.php">
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/icons/icons8-bricklayer-48 (1).png" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">CONSTRUÇÃO </h6>
                      </div>
                    </div>
                    </a>


                  </div>





                  <div class="dropdown-item">
                    <h3 class="item-heading no-margin">‎‎‎‎‎‎‎‎ㅤ</h3>
                    
                    <a href="<?php echo($urlSite) ?>/prod_e_serv/paginas/educacao.php">
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/icons/icons8-graduation-cap-48.png" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">EDUCAÇÃO</h6>
                      </div>
                    </div>
                    </a>

                    <a href="<?php echo($urlSite) ?>/prod_e_serv/paginas/industrial.php">
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/icons/icons8-industrial-48.png" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">INDUSTRIAL</h6>
                      </div>
                    </div>
                    </a>

                    <a href="<?php echo($urlSite) ?>/prod_e_serv/paginas/mineracao.php">
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/icons/icons8-minecraft-pickaxe-48.png" style="width: 48px;" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">MINERAÇÃO</h6>
                      </div>
                    </div>
                    </a>


                    <a href="<?php echo($urlSite) ?>/prod_e_serv/paginas/commodities.php">
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/icons/icons8-corn-48.png" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">COMMODITIES</h6>
                      </div>
                    </div>
                  </a>
                  </div>

                  

                  <div class="dropdown-item">
                    <h3 class="item-heading no-margin">‎‎‎‎‎‎‎‎ㅤ</h3>
                    
                    <a href="<?php echo($urlSite) ?>/prod_e_serv/paginas/ativos.php">
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/icons/icons8-bank-48.png" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">ATIVOS</h6>
                      </div>
                    </div>
                    </a>

                    <a href="<?php echo($urlSite) ?>/prod_e_serv/paginas/seguros.php">
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/icons/icons8-equity-security-48.png" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">SEGUROS</h6>
                      </div>
                    </div>
                    </a>

                    <a href="<?php echo($urlSite) ?>/prod_e_serv/paginas/cieEtec.php">
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/icons/icons8-biotech-48.png" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">CIÊNCIA E TECNOLOGIA</h6>
                      </div>
                    </div>
                    </a>

                    <a href="<?php echo($urlSite) ?>/prod_e_serv/paginas/comercio.php">
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/icons/icons8-purchase-for-euro-48.png" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">COMÉRCIO</h6>
                      </div>
                    </div>
                    </a>


                  </div>

                  <div class="dropdown-item">
                    <h3 class="item-heading no-margin">‎‎‎‎‎‎‎‎ㅤ</h3>
                    
                    <a href="<?php echo($urlSite) ?>/prod_e_serv/paginas/profLiberais.php">
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/icons/icons8-person-48 (1).png" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">PROFISSIONAIS LIBERAIS</h6>
                      </div>
                    </div>
                    </a>

                    <a href="<?php echo($urlSite) ?>/prod_e_serv/paginas/entesPublicos.php">
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/icons/icons8-department-48.png" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">ENTES PÚBLICOS</h6>
                      </div>
                    </div>
                    </a>

                    <a href="<?php echo($urlSite) ?>/prod_e_serv/paginas/comunicacao.php">
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/icons/icons8-group-task-48.png" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">COMUNICAÇÃO</h6>
                      </div>
                    </div>
                    </a>

                    <a href="a">
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/icons/icons8-other-48.png" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">OUTROS...</h6>
                      </div>
                    </div>
                    </a>


                  </div>
                </div>
              </div>
            </li>

             <li class="nav_list nav_list_menu">
              <a href="#!" class="nav_link">
                <span>Projetos</span>
                <ion-icon name="chevron-down-outline"></ion-icon>
              </a>
              <div class="dropdown">
                <div class="dropdown-inner">
                  <div class="dropdown-item">
                    <h6 class="item-heading no-margin">Imobiliario</h6>

                    <a href="https://xclusive.institutochronos.com/" target="_blank">
                      <div class="item-list">
                        <div class="item-img">
                          <img src="<?php echo($texto)?>img/icons/Ativo 1@4x-152ff.svg" alt="Icon" />
                        </div>
                        <div class="item-list-info">
                          <h6 class="no-margin">XCLUSIVE</h6>
                          <p class="no-margin">Apart Hotel</p>
                        </div>
                      </div>
                    </a>

                    <a href="https://chronospalace.institutochronos.com/" target='_blank'>
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/icons/logo CPH.svg" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">CHRONOS</h6>
                        <p class="no-margin">Palace Hotel</p>
                      </div>
                    </div>
                    </a>

                    <a href="<?php echo($urlSite) ?>/projetos/paginas/condominioindustrial.php">
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/icons/icons8-jungle-48.png" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">CONDOMÍNIO</h6>
                        <p class="no-margin">Brasil Industria 4.0</p>
                      </div>
                    </div>
                    </a>
                    

                    <a href="<?php echo($urlSite) ?>/projetos/paginas/dunes.php">
                    <div class="item-list">
                      <div class="item-img">
                        <img src="<?php echo($texto)?>img/icons/icons8-time-48.png" alt="Icon" />
                      </div>
                      <div class="item-list-info">
                        <h6 class="no-margin">DUNES RESORT</h6>
                        <p class="no-margin">Residence premium</p>
                      </div>
                    </div>
                  </a>

                  </div>

                  <div class="dropdown-item">
                    <h6 class="item-heading no-margin">‎‎‎‎‎‎‎‎ㅤ</h6>

                    <a href="<?php echo($urlSite) ?>/projetos/paginas/landoftomorrow.php">
                      <div class="item-list">
                        <div class="item-img">
                          <img src="<?php echo($texto)?>img/icons/Ativo 1@4x-152ff.svg" alt="Icon" />
                        </div>
                        <div class="item-list-info">
                          <h6 class="no-margin">Land Of Tomorrow's Life</h6>
                          <p class="no-margin">The paradise exist</p>
                        </div>
                      </div>
                    </a>

                    <a href="https://xclusive.institutochronos.com/" target="_blank">
                      <div class="item-list">
                        <div class="item-img">
                          <img src="<?php echo($texto)?>img/icons/Ativo 1@4x-152ff.svg" alt="Icon" />
                        </div>
                        <div class="item-list-info">
                          <h6 class="no-margin">Education</h6>
                          <p class="no-margin">For the World</p>
                        </div>
                      </div>
                    </a>

           

                  </div>


                  
                 


                  

                </div>
              </div>

              
            </li>

            <li class="nav_list">
              <a href="<?php echo($urlSite) ?>/contato.php" class="nav_link">
                <span>Contato</span>
              </a>
            </li>

          </ul>

          <div class="nav_action">

            <div class="nav_toggle">
                <i class="bi bi-list" style="font-size: 3rem; color: #131313;"></i>
            </div>
          </div>
        </nav>
      </div>
    </header>