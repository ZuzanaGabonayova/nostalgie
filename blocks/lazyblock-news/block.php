<header>
        <div class="container-fluid" id="news-hero-img"></div>
        <div class="heading">
            <h1><?php echo $attributes["site-heading"]?></h1>
        </div>
</header>


<section id="news-content">
    <div class="container-fluid news-all">
            <div class="row">
                
                <?php foreach($attributes["news"] as $new): ?>
                    <div class="col-md-12 col-sm-12 news-item"
                        data-aos="fade-up"
                        data-aos-duration="1000">
                        
                        <?php echo $new["iframe-tag"]?>
                        
                    </div>  
                <?php endforeach ?>
                
            </div>
    </div>
</section>