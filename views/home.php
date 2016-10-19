  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <base href="<?=URL_SITIO?>">

      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Import Font Awesome-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>

      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/font-awesome.min.css"  media="screen,projection"/>

      <link rel="stylesheet" type="text/css" href="assets/css/style.css">

      <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <style type="text/css">
        body, html{
          height: 100%;
        }
      </style>
    </head>

    <body>    
      <div class="container-primary">
        <div class="container" style="height: 100%;">
          <ul class="side-nav collection" id="mobile-demo">
            <li class="collection-item">
              <img src="assets/img/logo-policia.png" class="responsive-img">
            </li>
            <li class="collection-item grey lighten-4 green-text right-align">
              <i class="fa fa-th" aria-hidden="true" id="home"></i>
            </li>
            <?php 
              foreach ($opciones as $key => $opcion) {
            ?>
              <li class="collection-item avatar green-text text-darken-3 valign-wrapper option-navbar" href="<?=$opcion["url"]?>">
                <?=$opcion["icono"]?>
                <span class="title"><?=$opcion["nombre"]?></span>
                <!--<p></p>-->
              </li>  
            <?php
              }
            ?>
          </ul>
            <div id="container-options">
              <div class="row" style="margin-bottom: 0;">
              <?php

                $count = 0;

                foreach ($row1 as $key => $block) {
                  $icono = str_replace("icons-custom-nav","icons-custom",$opciones[$count]["icono"]);
              ?>  
                <div class="<?=$block?>">
                  <div class="card horizontal card-custom option-menu" href="<?=$opciones[$count]["url"]?>">
                    <div class="card-image">
                      <?=$icono?>
                    </div>
                    <div class="card-stacked">
                      <div class="card-content text-white valign-wrapper">
                        <p class="valign"><?=$opciones[$count]["nombre"]?></p>
                      </div>                      
                    </div>
                  </div>
                </div>
              <?php
                $count++;
                }
              ?>
                <div class="col s6 m2 offset-m1">
                  <div class="card horizontal  card-custom text-white button-collapse" data-activates="mobile-demo">
                      <i class="fa fa-arrow-left" id="arrow-menu" aria-hidden="true" style="position:absolute;bottom:15px;left:15px;font-size: 50px;"></i>
                      <i class="material-icons" style="position: absolute;font-size: 50px;top: 15px;right: 15px;">menu</i>
                  </div>
                </div>
              </div>

              <div class="row" style="margin-bottom: 0;">
              <?php                

                foreach ($row2 as $key => $block) {
                  $icono = str_replace("icons-custom-nav","icons-custom",$opciones[$count]["icono"]);
              ?>  
                <div class="<?=$block?>">
                  <div class="card horizontal  card-custom option-menu" href="<?=$opciones[$count]["url"]?>">
                    <div class="card-image">
                      <?=$icono?>
                    </div>
                    <div class="card-stacked">
                      <div class="card-content text-white valign-wrapper">
                        <p class="valign"><?=$opciones[$count]["nombre"]?></p>
                      </div>                      
                    </div>
                  </div>
                </div>
              <?php
                $count++;
                }
              ?>
              </div>

              <div class="row" style="margin-bottom: 0;">
              <?php

                foreach ($row3 as $key => $block) {
                  $icono = str_replace("icons-custom-nav","icons-custom",$opciones[$count]["icono"]);
              ?>  
                <div class="<?=$block?>">
                  <div class="card horizontal  card-custom option-menu" href="<?=$opciones[$count]["url"]?>">
                    <div class="card-image">
                      <?=$icono?>
                    </div>
                    <div class="card-stacked">
                      <div class="card-content text-white valign-wrapper">
                        <p class="valign"><?=$opciones[$count]["nombre"]?></p>
                      </div>                      
                    </div>
                  </div>
                </div>
              <?php
                $count++;
                }
              ?>
              </div>
              <div class="row" style="margin-bottom: 0;">
              <?php

                foreach ($row4 as $key => $block) {
                  $icono = str_replace("icons-custom-nav","icons-custom",$opciones[$count]["icono"]);
              ?>  
                <div class="<?=$block?>">
                  <div class="card horizontal  card-custom option-menu" href="<?=$opciones[$count]["url"]?>">
                    <div class="card-image">
                      <?=$icono?>
                    </div>
                    <div class="card-stacked">
                      <div class="card-content text-white valign-wrapper">
                        <p class="valign"><?=$opciones[$count]["nombre"]?></p>
                      </div>                      
                    </div>
                  </div>
                </div>
              <?php
                $count++;
                }
              ?>
              </div>
              
              <!--<div class="row" style="margin-bottom: 0;">
                
                <div class="col s12 m5">
                  <div class="card horizontal  card-custom">
                    <div class="card-image">
                      <i class="fa fa-exclamation-circle icons-custom" aria-hidden="true"></i>
                    </div>
                    <div class="card-stacked">
                      <div class="card-content text-white valign-wrapper">
                        <p class="valign">Petición, Quejas, Reclamos y Sugerencias.</p>
                      </div>                      
                    </div>
                  </div>
                </div>
                <div class="col s6 m3 offset-m1">
                  <div class="card horizontal  card-custom">
                    <div class="card-image">
                      <i class="material-icons icons-custom">phonelink_setup</i>        
                    </div>
                    <div class="card-stacked">
                      <div class="card-content text-white valign-wrapper">
                        <p class="valign">APP POLIS</p>
                      </div>                      
                    </div>
                  </div>
                </div>
                <div class="col s6 m2 offset-m1">
                  <div class="card horizontal  card-custom text-white button-collapse" data-activates="mobile-demo">
                      <i class="fa fa-arrow-left" id="arrow-menu" aria-hidden="true" style="position:absolute;bottom:15px;left:15px;font-size: 50px;"></i>
                      <i class="material-icons" style="position: absolute;font-size: 50px;top: 15px;right: 15px;">menu</i>
                  </div>
                </div>
              </div>-->
              <!---
              <div class="row" style="margin-bottom: 0;">
                <div class="col s6 m3">
                  <div class="card horizontal  card-custom">
                    <div class="card-image">
                      <i class="material-icons  icons-custom">supervisor_account</i>               
                    </div>
                    <div class="card-stacked">
                      <div class="card-content text-white valign-wrapper">
                        <p class="valign">Violencia Intrafamiliar</p>
                      </div>                      
                    </div>
                  </div>
                </div>
                <div class="col s6 m3">
                  <div class="card horizontal  card-custom">
                    <div class="card-image">
                      <i class="fa fa-gavel  icons-custom" aria-hidden="true"></i>
                    </div>
                    <div class="card-stacked">
                      <div class="card-content text-white valign-wrapper">
                        <p class="valign">Antecedentes Judiciales</p>
                      </div>                      
                    </div>
                  </div>
                </div>
                <div class="col s6 m3">
                  <div class="card horizontal  card-custom">
                    <div class="card-image">
                      <i class="material-icons  icons-custom">phonelink_lock</i>
                    </div>
                    <div class="card-stacked">
                      <div class="card-content text-white valign-wrapper">
                        <p class="valign">Celulares Recuperados</p>
                      </div>                      
                    </div>
                  </div>
                </div>
                <div class="col s6 m3">
                  <div class="card horizontal  card-custom">
                    <div class="card-image">
                      <i class="fa fa-building  icons-custom" aria-hidden="true"></i>
                    </div>
                    <div class="card-stacked">
                      <div class="card-content text-white valign-wrapper">
                        <p class="valign">Acceso a Información Pública</p>
                      </div>                      
                    </div>
                  </div>
                </div>

              </div>-->
              <!--
              <div class="row" style="margin-bottom: 0;">
                <div class="col s6 m3">
                  <div class="card horizontal  card-custom">
                    <div class="card-image">
                      <i class="fa fa-flask icons-custom" aria-hidden="true"></i>                  
                    </div>
                    <div class="card-stacked">
                      <div class="card-content text-white valign-wrapper">
                        <p class="valign">Petición, Quejas, Reclamos y Sugerencias.</p>
                      </div>                      
                    </div>
                  </div>
                </div>
                <div class="col s6 m3">
                  <div class="card horizontal  card-custom">
                    <div class="card-image">
                      <i class="fa fa-file-text icons-custom" aria-hidden="true"></i>
                    </div>
                    <div class="card-stacked">
                      <div class="card-content text-white valign-wrapper">
                        <p class="valign">Petición, Quejas, Reclamos y Sugerencias.</p>
                      </div>                      
                    </div>
                  </div>
                </div>
                <div class="col s6 m3">
                  <div class="card horizontal  card-custom">
                    <div class="card-image">
                      <i class="fa fa-graduation-cap icons-custom" aria-hidden="true"></i>
                    </div>
                    <div class="card-stacked">
                      <div class="card-content text-white valign-wrapper">
                        <p class="valign">Petición, Quejas, Reclamos y Sugerencias.</p>
                      </div>                      
                    </div>
                  </div>
                </div>
                <div class="col s6 m3">
                  <div class="card horizontal  card-custom">
                    <div class="card-image">
                      <i class="fa fa-car icons-custom" aria-hidden="true" style="font-size: 100px;margin-left:5px;margin-top: 30px;"></i>
                    </div>
                    <div class="card-stacked">
                      <div class="card-content text-white valign-wrapper">
                        <p class="valign">Petición, Quejas, Reclamos y Sugerencias.</p>
                      </div>                      
                    </div>
                  </div>
                </div>

              </div>-->
              <!--
              <div class="row">
                <div class="col s6 m3">
                  <div class="card horizontal  card-custom">
                    <div class="card-image">
                      <i class="fa fa-female icons-custom" aria-hidden="true"></i>             
                    </div>
                    <div class="card-stacked">
                      <div class="card-content text-white valign-wrapper">
                        <p class="valign">Atención a Mujeres</p>
                      </div>                      
                    </div>
                  </div>
                </div>
                <div class="col s6 m2">
                  <div class="card horizontal  card-custom">
                    <div class="card-image">
                      <i class="fa fa-paw icons-custom" aria-hidden="true"></i>
                    </div>
                    <div class="card-stacked">
                      <div class="card-content text-white valign-wrapper">
                        <p class="valign">Maltrato Animal.</p>
                      </div>                      
                    </div>
                  </div>
                </div>
                <div class="col s6 m4">              

                  <div class="card horizontal card-custom" style="background-color: #fff !important;">
                    <div class="card-stacked">
                      <div class="carousel carousel-slider center" data-indicators="true">
                        <div class="carousel-fixed-item center">                      
                          <a class="btn waves-effect white grey-text darken-text-2">button</a>
                        </div>
                        <div class="carousel-item red white-text" href="#one!">
                          
                          <p class="white-text">This is your first panel</p>
                        </div>
                        <div class="carousel-item amber white-text" href="#two!">
                          <h2>Second Panel</h2>
                          <p class="white-text">This is your second panel</p>
                        </div>
                      </div>                  
                    </div>
                  </div>
                </div>
                <div class="col s6 m3">
                  <div class="card horizontal  card-custom">
                    <div class="card-image">
                      <i class="fa fa-car icons-custom" aria-hidden="true" style="font-size: 100px;margin-left:5px;margin-top: 30px;"></i>
                    </div>
                    <div class="card-stacked">
                      <div class="card-content text-white valign-wrapper">
                        <p class="valign">Petición, Quejas, Reclamos y Sugerencias.</p>
                      </div>                      
                    </div>
                  </div>
                </div>

              </div>-->
            </div>
            <div id="container-info" style="display:none;opacity: 0;height: 100%;">
              <iframe src="http://www.policia.gov.co/portal/page/portal/CONTACTENOS/Escribale_al_director" frameborder="0" allowfullscreen class="iframe-info"></iframe>
            </div>
        </div>  
      </div>    
      <!--<footer class="page-footer white z-depth-1">-->
      <footer class="z-depth-1 white">
          <div class="container">
            <div class="row">
              <div class="footer-block footer-block-titulo">
                <h5 style="font-weight: normal;font-size: 1.4rem;">Líneas de Emergencia</h5>
              </div>
              <div class="footer-block">
                <div class="left" style="width: 30%;">
                  <div class="red lighten-2 circle icons-custom-footer center-align">
                    <i class="material-icons circle">call</i>
                  </div>
                </div>
                <div class="right center-align" style="width: 70%;">
                  <h5>123</h5>
                  <p>Atención y Emergencias</p>
                </div>
              </div>
              <div class="footer-block">
                <div class="left" style="width: 30%;">
                  <div class="purple lighten-2 circle icons-custom-footer center-align">
                    <i class="fa fa-universal-access" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="right center-align" style="width: 70%;">
                  <h5>165</h5>
                  <p>Antisecuestro y Antiextorsión</p>
                </div>
              </div>
              <div class="footer-block">
                <div class="left" style="width: 30%;">
                  <div class="green darken-3 circle icons-custom-footer center-align">
                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="right center-align" style="width: 70%;">
                  <h5>166</h5>
                  <p>Transparencia Institucional</p>
                </div>
              </div>
              <div class="footer-block">
                <div class="left" style="width: 30%;">
                  <div class="blue lighten-1 circle icons-custom-footer center-align">
                    <i class="fa fa-female" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="right center-align" style="width: 70%;">
                  <h5>155</h5>
                  <p>Atención a Mujeres</p>
                </div>
              </div>
              <div class="footer-block">
                <div class="left" style="width: 30%;">
                  <div class="orange lighten-2 circle icons-custom-footer center-align">
                    <i class="fa fa-car" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="right center-align" style="width: 70%;">
                  <h5>#767</h5>
                  <p>Seguridad Víal</p>
                </div>
              </div>
              <div class="footer-block">
                <div class="left" style="width: 30%;">
                  <div class="purple lighten-1 circle icons-custom-footer center-align">
                    <i class="fa fa-user-secret" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="right center-align" style="width: 70%;">
                  <h6>018000-919621</h6>
                  <p>Antiterrorismo</p>
                </div>
              </div>
              <div class="footer-block footer-block-boton">
                <a class="waves-effect waves-light btn-large modal-trigger" href="#modal1" style="font-size: 12px;padding: 0 1rem;">Información Legal</a>
              </div>
            </div>            
          </div>
          <!--<div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-1 right" href="#!">More Links</a>
            </div>
          </div>-->
        </footer>

      <!-- Modal Structure -->
      <div id="modal1" class="modal">
        <div class="modal-content">
          <h4>Lorem Ipsum</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis tortor scelerisque, gravida ipsum quis, lobortis purus. Vestibulum sollicitudin turpis sed magna pulvinar viverra. Proin id ante felis. Fusce posuere odio vel lorem tempor facilisis. Nunc sodales, arcu id scelerisque blandit, lacus risus tristique lorem, eget consectetur augue tellus vel mauris. Etiam sit amet dapibus leo. In ac velit vel sapien sagittis laoreet nec et risus. Praesent eu mi libero. Ut posuere viverra faucibus. Vestibulum condimentum, odio sit amet tincidunt varius, nisl turpis eleifend felis, non pharetra lorem libero id arcu. Vivamus scelerisque sem nec rutrum gravida. Proin ultrices, ante sit amet tempor vehicula, lectus tellus consequat sapien, id semper metus turpis ut odio. Donec tempus facilisis justo ut vulputate. Integer sit amet scelerisque augue.

Aliquam erat volutpat. Aliquam varius porta aliquet. Morbi imperdiet sapien eu nisi venenatis, vitae pharetra neque pretium. Integer eu semper est. Vestibulum aliquet, dolor pharetra luctus accumsan, tortor nunc varius tellus, sed venenatis felis neque vel nisi. Aenean fermentum orci nec massa hendrerit, ut pretium mi placerat. Maecenas ultrices libero eu purus aliquet, eu sodales tellus vestibulum. Quisque justo turpis, fermentum eget porta at, pulvinar at erat. Nulla et tellus non enim congue consequat. Suspendisse eros nisl, aliquam ut tincidunt eu, tristique tincidunt purus. Aenean blandit lacus non lorem porttitor cursus. Sed non ante a ligula venenatis dignissim.

Nulla ut dolor accumsan, placerat arcu at, molestie mi. Ut non dui gravida, dignissim velit eget, vestibulum risus. Vestibulum ut justo sed enim porttitor ultrices at ut nulla. Donec consequat leo magna, ut ultrices sem hendrerit quis. Phasellus ac laoreet justo. Sed in elit porttitor, sagittis diam eget, tristique arcu. Aenean dolor mauris, dictum nec turpis sit amet, venenatis convallis erat. Sed at velit libero. Nam consequat faucibus mi, sit amet porta ex vehicula eget. Curabitur fringilla dui in arcu ullamcorper venenatis. Nulla sit amet sagittis dui, et tempus ipsum. Praesent nec massa tincidunt, vehicula lectus nec, ultricies diam.</p>
        </div>
        <div class="modal-footer">
          <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
      </div>
              

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
      <script type="text/javascript">
        
        $(document).ready(function(){     
          
          setInterval(function(){ 
            $("#arrow-menu").addClass("animated bounceInRight");
          }, 3000);
            
          setTimeout(function(){
             setInterval(function(){
              $("#arrow-menu").removeClass("animated bounceInRight");
             },3000);            
          }, 4000);

          $(".button-collapse").sideNav({
            menuWidth: 300,
            edge: 'left'
          }, 'show');
          
          $('.modal-trigger').leanModal();
          
          $('.carousel.carousel-slider').carousel({full_width: true});
        
          //$('.button-collapse').sideNav('show');

          $(".button-collapse").click(function(){
              hideOptions();              
              setTimeout(function(){

                $("#sidenav-overlay, .drag-target").remove();

                showInfo(); 
              },1500);              
          });

          $("#home").click(function(){
            $('.button-collapse').sideNav({}, 'hide');
            hideInfo();
            showOptions();
          });

          $(".option-navbar").click(function(){
            var url = $(this).attr("href");
            $(".iframe-info").attr("src", url);            
          });

          $(".option-menu").click(function(){
            var url = $(this).attr("href");
            $(".iframe-info").attr("src", url);

            hideOptions();
            showInfo();
            $('.button-collapse').sideNav('show');
          });
          

        });

        function hideOptions(){
          $("#container-options").addClass("animated zoomOutLeft");

          setTimeout(function(){
            $("#container-options").css("display","none");
          },1000);
        }

        function showOptions(){
          
          $("#container-options").removeClass();
          $("#container-options").css("opacity","0");
          $("#container-options").css("display","block");
          
          setTimeout(function(){
            $("#container-options").addClass("animated fadeIn");
          },1000);
          
        }

        function showInfo(){
          $("#container-info").removeClass();
          $("#container-info").css("display","block");
          $("#container-info").addClass("animated bounceIn"); 
        }

        function hideInfo(){          
          $("#container-info").addClass("animated zoomOutLeft");  
          setTimeout(function(){
            $("#container-info").css("display","none");
          },1000);          
        }
      </script>
    </body>
  </html>
        