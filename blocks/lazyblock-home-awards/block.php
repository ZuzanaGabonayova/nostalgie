        <div class="row">
            <div class="awards"
                data-aos="fade-up"
                data-aos-duration="1000"
                > 
                <h1><?php echo $attributes["heading"]?></h1>
                <div class="row awards-row">

                    <?php foreach($attributes["awards"] as $award): ?>
                        <div class="col-md-4 col-sm-12 awards-sections">
                            <img src="<?php echo $award["award-image"]["url"]?>" alt="<?php echo $award["award-name"]?>">
                            <div class="awards-sections-text">
                                <h3><?php echo $award["award-name"]?></h3>
                                <p><?php echo $award["award-subtitle"]?></p>
                            </div>
                        </div>
                    <?php endforeach ?>
                    
                </div>
            </div>
        </div>
    </div>

</section>