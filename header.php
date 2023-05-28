<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo( "encoding" ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="This is official website of Nostalgie, Restaurant - Cafe" />
    <title><?php bloginfo("name") ?></title>

    <?php wp_head(); ?>

</head>

<body>

    <!-- Navigation navbar -->
    
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top not-scrolled">
            <a class="navbar-brand logo-phone" href="<?php echo get_permalink( get_page_by_path( 'domov' ))?>">
                <img src="<?php echo get_stylesheet_directory_uri() . "/assets/img/nostalgie-logo.png" ?>" alt="NOSTALGIE">
            </a>
                

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                
                <div class="nav-item-icon">
                    <a href="https://www.facebook.com/nostalgie.sk" target="_blank">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="https://www.instagram.com/nostalgierestaurant/" target="_blank">
                        <i class="fab fa-instagram-square"></i>
                    </a>
                </div>
    
                <div class="orange-line">
                    <hr class="line">
                </div>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink( get_page_by_path( 'udalosti' ))?>">Udalosti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink( get_page_by_path( 'galeria' ))?>">Galéria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink( get_page_by_path( 'aktuality' ))?>">Aktuality</a>
                    </li>
                </ul>

                <a class="navbar-brand logo-laptop" href="<?php echo get_permalink( get_page_by_path( 'domov' ))?>">
                    <img class="logo-not-scrolled" src="<?php echo get_stylesheet_directory_uri() . "/assets/img/nostalgie-logo.png" ?>" alt="NOSTALGIE">
                    <img class="logo-scrolled" src="<?php echo get_stylesheet_directory_uri() . "/assets/img/logo.png" ?>" alt="NOSTALGIE">
                </a>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink( get_page_by_path( 'menu' ))?>">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink( get_page_by_path( 'rezervacie' ))?>">Rezervácie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink( get_page_by_path( 'kontakt' ))?>">Kontakt</a>
                    </li>
                </ul>

                <div class="nav-item-icon-img-phone">
                    <a href="https://www.facebook.com/nostalgie.sk" target="_blank">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="https://www.instagram.com/nostalgierestaurant/" target="_blank">
                        <i class="fab fa-instagram-square"></i>
                    </a>
                    <img src="<?php echo get_stylesheet_directory_uri() . "/assets/svg/slovakia-flag-round.svg" ?>" alt="slovak"></img>
                    <img src="<?php echo get_stylesheet_directory_uri() . "/assets/svg/united-kingdom-flag-round.svg" ?>" alt="english"></img>
                </div>

                

                <div class="orange-line">
                    <hr class="line">
                </div>
    
                <div class="nav-item-img">
                    <img src="<?php echo get_stylesheet_directory_uri() . "/assets/svg/slovakia-flag-round.svg" ?>" alt="slovak"></img>
                    <img src="<?php echo get_stylesheet_directory_uri() . "/assets/svg/united-kingdom-flag-round.svg" ?>" alt="english"></img>
                </div>


            </div>

        </nav>
        

