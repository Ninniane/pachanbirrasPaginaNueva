<?php include('form_process.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Pachanbirras Ortiz</title>
    <meta name="description" content="Pachanbirras Restaurante Ortiz Tres Cantos"/>
    <meta name="keywords" content="Pachanbirras, Restaurante, Ortiz, Tres Cantos, fútbol sala, liga empresas" />
    <!-- end: Meta -->
    
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- end: Mobile Specific -->
    
    <!-- start: Facebook Open Graph -->
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:type" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:image" content=""/>
    <!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
    <link rel="shortcut icon" type="image/png" href="img/parallax-slider/pachanbirras-ortiz-azul.png" /> <!-- favicon -->
    <!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<script src="js/jquery-1.8.2.js"></script>


<style type="text/css">

@media only screen and (max-width: 1030px) {
     #googlemaps-container-top {
                margin-top: -15%;
        }
}

        @media only screen and (max-width: 500px) {

          #formularioContacto {
            margin-top: 25%;
          }

                  #copyright p {
                        margin: 0 auto;
                        width: 323px;
                        text-align: center;
                        color: #666;
                  }

                  #contenidoContacto {
                        margin-left: 28px;
                  }

                  #googlemaps-container-top {
                        margin-top: -29%;
                  }
          
        }

@media only screen and (max-width: 980px) {
        .navbar .nav > li > a {
            padding: 9px;
         }

        .navbar-inverse .navbar-inner {
                margin-top: 16% !important;
        }
       
 }

 .error {
    display: block;
    color: red;
    font-size: 13px;
    margin-bottom: 15px;
}

.success {
    color: green;
    text-align: center;
    font-weight: bold;
    font-size: 15px;
}

    </style>

</head>
<body>
    
    <!--start: Header -->
    <header>

        <!--start: Container -->
        <div class="container">

            <!--start: Row -->
            <div class="row">

                <!--start: Logo -->
                <div class="logo span3">

                    <a class="brand" href="index.html"><img src="img/parallax-slider/pachanbirras-ortiz-azul.png" alt="Logo"></a>

                </div>
                <!--end: Logo -->

                <!--start: Navigation -->
                <div class="span9">

                    <div class="navbar navbar-inverse">
                        <div class="navbar-inner">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <div class="nav-collapse collapse">
                                <ul class="nav">
                                    <li><a href="index.html">Clasificación</a></li>
                                    <li><a href="resultados.html">Resultados</a></li>
                                    <li><a href="calendario.html">Calendario</a></li>
                                    <li><a href="heroes.html">Héroes</a></li>
                                    <li class="active"><a href="contacto.php">Contacto</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PachanOcio <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="proximamente.html">Pachanrecidos Razonables</a></li>
                                            <li><a href="pachanbirreo.html">Pachanbirreo</a></li>
                                            <!-- <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li class="nav-header">Nav header</li>
                                            <li><a href="#">Separated link</a></li>
                                            <li><a href="#">One more separated link</a></li> -->
                                        </ul>
                                    </li>
                                </ul>
                              </div>
                          </div>
                      </div>

                  </div>    
                  <!--end: Navigation -->

                    
            </div>
            <!--end: Row -->
            
        </div>
        <!--end: Container-->           
            
    </header>
    <!--end: Header-->
<br /><br /><br /><br /><br /><br /><br />
    <!-- start: Map -->
    <div>

        <!-- starts: Google Maps -->
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeCTkLxl-emLX72hfIaq7wC8lQeImbeT8&libraries=places&callback=initService"></script>
        <div id="googlemaps-container-top"></div>
        <div id="googlemaps" class="google-map google-map-full"></div>
        <div id="googlemaps-container-bottom"></div>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/jquery.gmap.min.js"></script>
        <script type="text/javascript">
            $('#googlemaps').gMap({
                maptype: 'ROADMAP',
                scrollwheel: false,
                zoom: 15,
                markers: [
                    {
                        address: 'Espacio Enrique Mas, Tres Cantos, Madrid', // Your Adress Here
                        html: '',
                        popup: false,
                    },

                    {
                        address: 'Bar Restaurante Ortiz, Tres Cantos, Madrid', // Your Adress Here
                        html: '',
                        popup: false,
                    }

                ],

            });
        </script>
        <!-- end: Google Maps -->
    </div>
    <!-- end: Map -->   
    
    <!-- start: Wrapper --> 
    <div id="wrapper">      

        <!-- start: Container -->   
        <div class="container">
            
            <!-- start: Row -->
            <div class="row" id="contenidoContacto">
            
                <!-- start: Contact Info -->
                <div class="span3">
                    <div class="title"><h3>Dónde Encontrarnos</h3></div>
                    <p>
                        <b>Espacio Enrique Mas</b>
                    </p>
                    <p>
                        Avenida de los Labradores, 26
                    </p>
                    <p> 
                        Tres Cantos, Madrid
                    </p>    
                    <br/>
                    <p> 
                        <b>Bar Restaurante Ortiz</b>
                    </p>
                    <p> 
                        Sector Embarcaciones, 11
                    </p>
                    <p>
                        Tres Cantos, Madrid
                    </p>
                </div>
                <!-- end: Contact Info -->      

                <!-- start: Contact Form -->
                <div class="span4" id="formularioContacto">
                    <div class="title"><h3>Formulario de Contacto</h3></div>

                    <!-- start: Contact Form -->
                    <div id="contact-form">

                        <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>#formularioContacto" method="post">

                            <fieldset>
                                <div class="clearfix">
                                    <label for="name"><span>Nombre:</span></label>
                                    <div class="input">
                                        <input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
                                        <span class="error"><?= $name_error ?></span>
                                    </div>
                                </div>

                                <div class="clearfix">
                                    <label for="email"><span>Email:</span></label>
                                    <div class="input">
                                        <input placeholder="Your Email Address" type="text" size="25" class="input-xlarge" name="email" value="<?= $email ?>" tabindex="2">
                                        
                                    </div>
                                </div>

                                <div class="clearfix">
                                    <label for="message"><span>Mensaje:</span></label>
                                    <div class="input">
                                        <textarea placeholder="He encontrado un fallo en la página que hay que corregir..." rows="7" class="input-xlarge" value="<?= $message ?>" name="message" tabindex="3"></textarea>
                                        <span class="error"><?= $message_error ?></span>
                                    </div>
                                </div>

                                <div class="actions">
                                    <button name="submit" type="submit" id="contact-submit" class="btn btn-succes btn-large" tabindex="4" data-submit="...Enviando">Enviar</button>
                                </div>
                            </fieldset>
                            <div class="success"><?= $success ?></div>

                        </form>

                    </div>
                    <!-- end: Contact Form -->

                </div>
                <!-- end: Contact Form -->

                <!-- start: Social Sites -->
<!--                <div class="span5">
                    <div class="title"><h3>Follow US!</h3></div>
                    <ul class="social-bookmarks">
                        <li class="aim"><a href="#">aim</a></li>
                        <li class="apple"><a href="#">apple</a></li>
                        <li class="behance"><a href="#">behance</a></li>
                        <li class="blogger"><a href="#">blogger</a></li>
                        <li class="cargo"><a href="#">cargo</a></li>
                        <li class="delicious"><a href="#">delicious</a></li>
                        <li class="deviantart"><a href="#">deviantart</a></li>
                        <li class="digg"><a href="#">digg</a></li>
                        <li class="dopplr"><a href="#">dopplr</a></li>
                        <li class="dribbble"><a href="#">dribbble</a></li>
                        <li class="ember"><a href="#">ember</a></li>
                        <li class="evernote"><a href="#">evernote</a></li>
                        <li class="facebook"><a href="https://www.facebook.com/brankic1979themes">facebook</a></li>
                        <li class="flickr"><a href="http://www.flickr.com/photos/brankic1979/">flickr</a></li>
                        <li class="forrst"><a href="#">forrst</a></li>
                        <li class="github"><a href="#">github</a></li>
                        <li class="google"><a href="#">google</a></li>
                        <li class="googleplus"><a href="#">googleplus</a></li>
                        <li class="gowalla"><a href="#">gowalla</a></li>
                        <li class="grooveshark"><a href="#">grooveshark</a></li>
                        <li class="html5"><a href="#">html5</a></li>
                        <li class="icloud"><a href="#">icloud</a></li>
                        <li class="lastfm"><a href="#">lastfm</a></li>
                        <li class="linkedin"><a href="#">linkedin</a></li>
                        <li class="metacafe"><a href="#">metacafe</a></li>
                        <li class="mixx"><a href="#">mixx</a></li>
                        <li class="myspace"><a href="#">myspace</a></li>
                        <li class="netvibes"><a href="#">netvibes</a></li>
                        <li class="newsvine"><a href="#">newsvine</a></li>
                        <li class="orkut"><a href="#">orkut</a></li>
                        <li class="paypal"><a href="#">paypal</a></li>
                        <li class="picasa"><a href="#">picasa</a></li>
                        <li class="pinterest"><a href="#">pinterest</a></li>
                        <li class="plurk"><a href="#">plurk</a></li>
                        <li class="posterous"><a href="#">posterous</a></li>
                        <li class="reddit"><a href="#">reddit</a></li>
                        <li class="rss"><a href="#">rss</a></li>
                        <li class="skype"><a href="#">skype</a></li>
                        <li class="stumbleupon"><a href="#">stumbleupon</a></li>
                        <li class="technorati"><a href="#">technorati</a></li>
                        <li class="tumblr"><a href="#">tumblr</a></li>
                        <li class="twitter"><a href="#">twitter</a></li>
                        <li class="vimeo"><a href="#">vimeo</a></li>
                        <li class="wordpress"><a href="#">wordpress</a></li>
                        <li class="yahoo"><a href="#">yahoo</a></li>
                        <li class="yelp"><a href="#">yelp</a></li>
                        <li class="youtube"><a href="#">youtube</a></li>
                        <li class="zerply"><a href="#">zerply</a></li>
                        <li class="zootool"><a href="#">zootool</a></li>
                    </ul>
                </div> -->
                <!-- end: Social Sites -->
            
            </div>
            <!-- end: Row -->

        </div>
        <!-- end: Container -->
                
    </div>
    <!-- end: Wrapper  -->          

    <!-- start: Footer Menu -->
    <div id="footer-menu" class="hidden-tablet hidden-phone">

        <!-- start: Container -->
        <div class="container">

            <!-- start: Row -->
            <div class="row">

                <!-- start: Footer Menu Logo -->
<!--                <div class="span2">
                    <div id="footer-menu-logo">
                        <a href="#"><img src="img/logo-footer-menu.png" alt="logo" /></a>
                    </div>
                </div> -->
                <!-- end: Footer Menu Logo -->

                <!-- start: Footer Menu Links-->
<!--                <div class="span9">

                    <div id="footer-menu-links">

                        <ul id="footer-nav">

                            <li><a href="index.html">Start</a></li>

                            <li><a href="about.html">About</a></li>

                            <li><a href="services.html">Services</a></li>

                            <li><a href="pricing.html">Pricing</a></li>

                            <li><a href="contact.html">Contact</a></li>

                        </ul>

                    </div>

                </div> -->
                <!-- end: Footer Menu Links-->

                <!-- start: Footer Menu Back To Top -->
                <div class="span1">

                    <div id="footer-menu-back-to-top">
                        <a href="#"></a>
                    </div>

                </div>
                <!-- end: Footer Menu Back To Top -->

            </div>
            <!-- end: Row -->

        </div>
        <!-- end: Container  -->    

    </div>  
    <!-- end: Footer Menu -->

    <!-- start: Footer -->
    <div id="footer">

        <!-- start: Container -->
        <div class="container">

            <!-- start: Row -->
            <div class="row">

                <!-- start: Photo Stream -->
<!--                <div class="span3">

                    <h3>Photo Stream</h3>
                    <div class="flickr-widget">
                            <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&display=latest&size=s&layout=x&source=user&user=29609591@N08"></script>
                        <div class="clear"></div>
                    </div>

                </div> -->
                <!-- end: Photo Stream -->

                <div class="span6">

                    <!-- start: Follow Us -->
                    <h3>Síguenos!</h3>
                    <ul class="social-grid">
                        <li>
                            <div class="social-item">               
                                <div class="social-info-wrap">
                                    <div class="social-info">
                                        <div class="social-info-front social-twitter">
                                            <a href="https://twitter.com/pachanbirras_FC" target="_blank"></a>
                                        </div>
                                        <div class="social-info-back social-twitter-hover">
                                            <a href="https://twitter.com/pachanbirras_FC" target="_blank"></a>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="social-item">               
                                <div class="social-info-wrap">
                                    <div class="social-info">
                                        <div class="social-info-front social-facebook">
                                            <a href="https://www.facebook.com/Pachanbirras/" target="_blank"></a>
                                        </div>
                                        <div class="social-info-back social-facebook-hover">
                                            <a href="https://www.facebook.com/Pachanbirras/" target="_blank"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="social-item">               
                                <div class="social-info-wrap">
                                    <div class="social-info">
                                        <div class="social-info-front social-youtube">
                                            <a href="https://www.youtube.com/channel/UCSyMmu8KdXxc46lImxGk_6A" target="_blank"></a>
                                        </div>
                                        <div class="social-info-back social-youtube-hover">
                                            <a href="https://www.youtube.com/channel/UCSyMmu8KdXxc46lImxGk_6A" target="_blank"></a>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- <li>
                            <div class="social-item">               
                                <div class="social-info-wrap">
                                    <div class="social-info">
                                        <div class="social-info-front social-flickr">
                                            <a href="http://flickr.com"></a>
                                        </div>
                                        <div class="social-info-back social-flickr-hover">
                                            <a href="http://flickr.com"></a>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </li> -->
                    </ul>
                    <!-- end: Follow Us -->

                    <!-- start: Newsletter -->
<!--                    <form id="newsletter">
                        <h3>Suscríbete</h3>
                        <p>Déjanos tu email</p>
                        <label for="newsletter_input">@:</label>
                        <input type="text" id="newsletter_input"/>
                        <input type="submit" id="newsletter_submit" value="submit">
                    </form> -->
                    <!-- end: Newsletter -->

                </div>

            </div>
            <!-- end: Row -->   

        </div>
        <!-- end: Container  -->

    </div>
    <!-- end: Footer -->

    <!-- start: Copyright -->
    <div id="copyright">
    
        <!-- start: Container -->
        <div class="container">
        
            <p>
                &copy; 2017, creada por <a href="https://es.linkedin.com/in/patriciacalleja" alt="Linkedin" target="_blank">Patricia</a>, <br /> imágenes originales de <a href="https://es.linkedin.com/in/jorge-garcía-ab81bb21/" alt="Linkedin" target="_blank">Jorge García</a>
            </p>
    
        </div>
        <!-- end: Container  -->
        
    </div>  
    <!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>

<script type="text/javascript">
$( document ).ready(function() {
    setTimeout(function(){$(".success").hide();},7000);
});
</script>

<!-- end: Java Script -->

</body>
</html>