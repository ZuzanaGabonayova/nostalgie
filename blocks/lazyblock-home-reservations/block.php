<div class="row">
    <div class="reservations"> 
        <div class="col-md-8 col-sm-12 reservations-img"
        data-aos="zoom-in-down"
        data-aos-duration="1000"
        >
            <img src="<?php echo $attributes["image"]["url"]?>" alt="table">
        </div>
        <div class="col-md-4 col-sm-12 reservations-text"
        data-aos="fade-left"
        data-aos-duration="1000"
        >
            <h1><?php echo $attributes["heading"]?></h1>
            <p><?php echo $attributes["text"]?></p>
                <button class="btn" onclick="location.href='<?php echo get_permalink( get_page_by_path( 'rezervacie' ))?>';"><?php echo $attributes["button-text"]?></button>    
        </div>
    </div>
</div>