<div class="row">
    <div class="menu">  
        <div class="col-md-7 col-sm-12 menu-img"
        data-aos="zoom-out"
        data-aos-duration="1000"
        >
            <img src="<?php echo $attributes["image"]["url"]?>" alt="james dean salat">
        </div>

        <div class="col-md-5 col-sm-12 menu-text"
        data-aos="zoom-in"
        data-aos-duration="1000"
        >
            <h1><?php echo $attributes["heading"]?></h1>
            <p><?php echo $attributes["text"]?></p>
                <button class="btn" onclick="location.href='<?php echo get_permalink( get_page_by_path( 'menu' ))?>';"><?php echo $attributes["button-text"]?></button>    
        </div>
    </div>
</div>