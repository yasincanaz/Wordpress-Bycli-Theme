<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title()?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <?php wp_head(); ?>
</head>
<body onload="yukle()"  <?php body_class();?>>
    <div class="loading-animation">
<lottie-player src="https://assets5.lottiefiles.com/packages/lf20_x62chJ.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player>
    </div>
    <div class="wrapper-menu">
        <i id="kapat" class="bi bi-x-circle-fill"></i>
            <ul>
                <a href=""><li>ABOUT</li></a>
                <a href=""><li>EVENT</li></a>
                <a href=""><li>AWARDS</li></a>
                <a href=""><li>CONTACT</li></a>
            </ul>
            <ul id="icon-social">
                <a href="">
                    <li><i class="bi bi-instagram"></i></li>
                </a>
                <a href="">
                    <li><i class="bi bi-linkedin"></i></li>
                </a>
                <a href="">
                    <li><i class="bi bi-facebook"></i></li>
                </a>
                <a href="">
                    <li><i class="bi bi-twitter"></i></li>
                </a>
            </ul>
    </div>
    <nav>
        <div class="row">
            <div class="main-menu">
                <ul id="menu">
                    <a href="<?php echo get_home_url();?>" id="logo"><img src="<?php bloginfo('template_url');?>/images/logo.png" alt=""></a>
                    <?php wp_nav_menu(
            array(
                "theme_location"=>"top-menu",
                "menu_class" => "navigation"
            ));
            ?>
                </ul>
            </div>
            <div class="social-menu">
                <ul>
                    <a href="">
                        <li>FALLOW ME</li>
                    </a>
                    <a href="">
                        <li><i class="bi bi-instagram"></i></li>
                    </a>
                    <a href="">
                        <li><i class="bi bi-linkedin"></i></li>
                    </a>
                    <a href="">
                        <li><i class="bi bi-facebook"></i></li>
                    </a>
                    <a href="">
                        <li><i class="bi bi-twitter"></i></li>
                    </a>
                </ul>   
                <i id="wrapper-menu" class="bi bi-list"></i>      
            </div>
        </div>
    </nav>
    <p>


    </p>