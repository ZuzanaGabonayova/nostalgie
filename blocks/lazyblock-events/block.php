<header>
    <div class="container-fluid" id="events-hero-img"></div>
        <div class="heading">
            <h1><?php echo $attributes["site-heading"]?></h1>
        </div>
</header>


        <!-- <div class="main-background-color"> -->

            <section id="events-content">
                <div class="container-fluid events-all">
                        <div class="row">
                            
                                <div class="col-md-12 col-sm-12 events-item"
                                data-aos="fade-up"
                                data-aos-duration="1000">
                                    
                                        <span>
                                            <?php echo $attributes["text"]?>
                                        </span>
                                        
                                        <span>
                                            Fotografie z predošlých udalosti si môžete pozrieť v <a href="">galérii</a>.
                                        </span>
                                    
                                </div>                            
                            
                        </div>

                        <div class="row">
                            
                            <div class="col-md-12 col-sm-12 events-item invitation"
                            data-aos="fade-up"
                            data-aos-duration="1000">
                                
                                <a href="<?php echo $attributes["invitation-file"]['url']?>" target="_blank">
                                    <img src="<?php echo $attributes["invitation-image"]["url"]?>" alt="invitation">
                                </a>

                            </div>                            
                        
                    </div>


                </div>
            </section>