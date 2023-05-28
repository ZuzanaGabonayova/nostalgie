<header>
    <div class="container-fluid" id="gallery-hero-img"></div>
    <div class="heading">
        <h1><?php echo $attributes["site-heading"]?></h1>
    </div>
</header>

<section id="gallery-content">
    <div class="container-fluid gallery-all">
            <div class="row">
                
                <?php foreach($attributes["albums"] as $album): ?>

                    <div class="col-md-4 col-sm-12 gallery-item"
                        data-aos="fade-up"
                        data-aos-duration="1000">
                        
                        <div class="gallery-section">
                            <a class="gallery-item-img" href="#">
                                <div class="gallery-image">
                                    <img src="<?php echo $album["album-main-image"]["url"]?>">
                                </div>
                            </a>
                            <a href="#">
                                <div class="gallery-item-text">
                                    <h5><?php echo $album["album-name"]?></h5>
                                </div>
                            </a>
                        </div>
                    </div>  

                <?php endforeach ?> 
                
            </div>
            
    </div>
</section>