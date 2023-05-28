<div class="row">
    <div class="events">  
        <div class="col-md-6 col-sm-12 events-text"
        data-aos="fade-up"
        data-aos-duration="1000"
        >
            <h1><?php echo $attributes["heading"]?></h1>
            <p><?php echo $attributes["text"]?></p>
                <button class="btn" onclick="location.href='<?php echo get_permalink( get_page_by_path( 'udalosti' ))?>';"><?php echo $attributes["button-text"]?></button>    
        </div>
        <div class="col-md-6 col-sm-12 events-img"
        data-aos="zoom-in-up"
        data-aos-duration="1000"
        >
            <img src="<?php echo $attributes["image"]["url"]?>" alt="chef">
        </div>
    </div>
</div>