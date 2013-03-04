<?php
/*
    Template Name: Home
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="box">
    <div class="box-padding">
        <h1><a id="home-link" href="<?php bloginfo('url'); ?>">Breadbros Games</a></h1>
        Improving your life in a not-insignificant way with tasty games since 2004.
    </div>
</div>
<div class="box">
    <a href="<?php bloginfo('url'); ?>/sully" class="sully box-padding">
        <img class="animated" src="<?php echo bloginfo('template_directory') ?>/images/sully.png" alt="Sully: A Very Serious RPG" />
    </a>
</div>
<div class="box">
    <a class="press box-padding" href="<?php bloginfo('url'); ?>/press">
        <h1>Press</h1>
        Who we are, where we are, how to get in touch with us... you know the drill.
    </a>
</div>
<div class="box">
    <a class="breadman box-padding">
        <img class="animated" src="<?php echo bloginfo('template_directory') ?>/images/logo.png" alt="" />
    </a>
    <div id="text-bubble" class="animated">
        <span></span>
    </div>
</div>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/footer' ) ); ?>