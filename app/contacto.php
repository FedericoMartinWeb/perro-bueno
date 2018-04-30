<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>PerroBueno | Guarderia de dia y adiestramiento canino</title>
  <meta name="keywords" content="Travel planning, travel bundles, travel escapes, affordable travel">
  <meta name="description" content="Your clarity. One trip away. We create soul restoring journeys that inspire you to be you.">
  
  <!-- Google Font -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
  <!--Google font End -->
  
  <!-- build:css /assets/styles/styles.css -->
  <link rel="stylesheet" href="../app/temp/styles/styles.css">
  <!-- endbuild -->
  
  <!-- build:js /assets/scripts/Vendor.js -->
  <script src="temp/scripts/Vendor.js"></script>
  <!-- endbuild -->
  
  <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
</head>
<body>
    <!-- Social Nav Start -->
        <div class="social">
            <a href="#" class="icon-facebook"></a>
            <a href="#" class="icon-twitter"></a>
            <a href="#" class="icon-instagrem"></a>
        </div>
    <!-- Social Nav End -->
    
    <!-- Start Header -->
    <header class="site-header">
        <div class="container">
            <div class="site-header__logo">
                <!--<div class="icon--clear-view-escapes site-header__logo__graphic">Clear View Escapes</div>-->
                <img src="assets/images/pb_logo.png" alt="" class="site-header__image">
            </div>

            <div class="site-header__menu-icon">
                <div class="site-header__menu-icon__middle"></div>
            </div>

            <div class="site-header__menu-content">
                <nav class="primary-nav primary-nav--pull-right">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="guarderia.php">Guarderia de día</a></li>
                        <li><a href="adiestramiento.php">Adiestramiento</a></li>
                        <li><a href="contacto.php" class="primary-nav__active">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </div>  
    </header>
    <!-- End Header -->
    
    <!-- Start Hero -->
    <div class="large-hero">
    <!-- <picture>
        <source srcset="assets/images/hero--medium.jpg 1380w" media="(min-width: 990px)">
        <source srcset="assets/images/hero--small.jpg 990w" media="(min-width: 640px)"> 
        <img srcset="assets/images/hero--smaller.jpg 640w" alt="main" class="large-hero__image">
    </picture> -->
        <div class="large-hero__img-wrapper large-hero__img-wrapper--internal">
            <img src="assets/images/perro_adiestra.jpg" alt="" class="large-hero__image large-hero__image--internal">
        </div>
        <div class="large-hero__text-content">
            <div class="container">
                <h1 class="large-hero__title">Contacto</h1>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    
    <!-- Start contacto -->
    <section class="contacto page-section">
        <div class="container">
           <h3 class="title">Ponte en contacto!</h3>
            <div class="row">
                    
                <div class="contacto__form--wrapper col-sm-6">
                    <form class="contacto__form">
                        <div class="form-group">
                            <input type="text" class="form-control contacto__form__input" aria-describedby="emailHelp" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control contacto__form__input" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control contacto__form__input" id="exampleTextarea" rows="6" placeholder="Mensaje"></textarea>
                        </div>
                        <input type="submit" value="Enviar" class="contacto__form__button">
                    </form>
                </div>

                <div class="contacto__aside col-sm-6">
                    <p>Todos los servicios de esta pagina web los puedes consultar por teléfono y concretar cita al 627 74 19 47 o también whatsapp.</p>
                    <p class="red">No dejes a tu perro solo en casa cuando sales a trabajar, nosotros nos encargamos de él y lo recogemos en tu casa!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End contacto -->
    
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer__hash col-12 col-md-4">
                    <a href="#">#tuperroalcole</a>
                    <a href="#">#mientrastutrabajas</a>
                    <a href="#">#perrobueno.es</a>
                </div>
                <div class="footer__phone col-12 col-md-4">
                    <span class="icon-phone">627 74 19 47</span>
                </div>
                <div class="footer__secondary-nav col-md-4">
                    <div class="footer__secondary-nav__wrapper">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="guarderia.php">Guarderia</a></li>
                        <li><a href="adiestramiento.php">Adiestramiento</a></li>
                        <li><a href="contacto.php" class="primary-nav__active">Contacto</a></li>
                    </div>
                </div>
            </div>
        </div>
            <div class="footer__date">
                <span class="section-footer__text">Copyright &copy; <?php echo date('Y'); ?> All rights reserved.</span>
            </div>
    </footer>
  
  <!-- build:js /assets/scripts/App.js -->
  <script src="temp/scripts/App.js"></script>
  <!-- endbuild -->
  <script src="temp/scripts/lightbox.js"></script>
</body>
</html>