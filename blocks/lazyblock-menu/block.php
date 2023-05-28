<header>
    <div class="container-fluid" id="menu-hero-img"></div>
        <div class="heading">
            <h1><?php echo $attributes["site-heading"]?></h1>
        </div>
</header>


        <!-- <div class="main-background-color"> -->

            <section id="menu-content">
                <div class="container-fluid menu-all">
                        <div class="row">
                            
                            <?php foreach($attributes["menus"] as $menu): ?>

                                <div class="col-md-4 col-sm-12 menu-item"
                                    data-aos="fade-up"
                                    data-aos-duration="1000">
                                    
                                        <a class="menu-item-img" href="<?php echo get_permalink( get_page_by_path("menu/" . $menu["menu-subpage-slug"] ))?>">
                                            <div class="menu-image">
                                                <img src="<?php echo $menu["menu-background-image"]["url"]?>">
                                            </div>

                                            <div class="menu-item-text">
                                                <h3><?php echo $menu["menu-name"]?></h3>
                                            </div>
                                        </a>
                                </div>

                             <?php endforeach ?>
                            
                        </div>
                </div>
            </section>