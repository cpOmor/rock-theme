<?php
/*
* This template is for the header
*/
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav>
            <a href="<?php echo home_url(); ?>">
                <img class="logo" src="<?php echo get_theme_mod('ri_theme_setting'); ?>" alt="Logo">
            </a>
            <ul class="d-flex justify-content-center align-items-center">
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><a href="<?php echo home_url(); ?>">Home 2</a></li>
            </ul>
        </nav>
    </header>
</body>
<?php wp_footer(); ?>
</html>