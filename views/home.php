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
      <div id="showNav" class="green darken-2 white-text" style="z-index:999;font-size:2rem;position: absolute;top: 20%;height: auto;padding: 10px;display: none;">
        <i class="fa fa-bars" aria-hidden="true"></i><br>
        <i class="fa fa-eye" aria-hidden="true"></i>      
      </div>

      <div class="container-primary">
        <div class="container" style="height: 100%;">
          
          <ul class="side-nav collection" id="mobile-demo">
            <li class="collection-item">
              <img src="assets/img/logo-policia.png" class="responsive-img">
            </li>
            <li class="collection-item grey lighten-4 green-text text-darken-2" style="height: 50px;font-size: 2rem;">
              <i id="hideNav" class="fa fa-eye-slash left" aria-hidden="true"></i>
              <i class="fa fa-th right" aria-hidden="true" id="home"></i>
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
            </div>
            <div id="container-info" style="display:none;opacity: 0;float:right;height: 100%;">
              <iframe src="" frameborder="0" allowfullscreen class="iframe-info"></iframe>
            </div>
        </div>  
      </div>      
      <footer class="z-depth-1 white">
          <div class="container">
            <div class="row">
              <div class="footer-block footer-block-titulo">
                <h5 class="center-align" style="font-weight: normal;font-size: 1.4rem;">Líneas de Emergencia</h5>
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
              <div class="footer-block footer-block-boton center-align">
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
            $(".iframe-info").attr("src", "");
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

          $("#hideNav").click(function(){
            $("#showNav").css("display","block");
            $("#container-info").css("width","100%");
            $('.button-collapse').sideNav({}, 'hide');
          });

          $("#showNav").click(function(){            
            $('.button-collapse').sideNav('show');
            $("#mobile-demo").css("width","20%");
            $("#container-info").css("width","80%");
          });
          

        });

        function hideOptions(){
          $("#container-options").addClass("animated zoomOutLeft");

          setTimeout(function(){
            $("#container-options").css("display","none");
          },1000);
        }

        function showOptions(){
          $("#showNav").css("display","none");
          $("#container-options").removeClass();
          $("#container-options").css("opacity","0");
          $("#container-options").css("display","block");
          
          setTimeout(function(){
            $("#container-options").addClass("animated fadeIn");
          },1000);
          
        }

        function showInfo(){
          $("#container-info").removeClass();          
          $("#mobile-demo").css("width","20%");
          $("#container-info").css("width","80%");
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
        