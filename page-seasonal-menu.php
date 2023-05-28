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

        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post() ?>
                <?php the_content() ?>
            <?php endwhile; ?>
        <?php endif; ?>

            

    <?php wp_footer(); ?>

</body>

</html>