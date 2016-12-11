<?php get_header();
?>

<div id="contenedorindex">
        <div id=post>
         <?php 
        if (have_posts()) {
         while (have_posts()) {
            the_post(); ?>
            <h2 id="post-<?php the_ID(); ?>">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
            <?php the_title(); ?></a></h2>
            <small><?php the_time('F jS, Y') ?>  by <?php the_author() ?> </small>
            <?php the_content();
         }
        }
       ?>
    </div>
    
    <div  id="imagen">
        <img src="<?php echo get_template_directory_uri() ?>/images/fondo.png" ALT="imagen">
    </div>
    
    <div id="menu">
        <?php wp_nav_menu(
            array(
              'menu' => 'MenuGeneral'
            ));?> 
    </div>
</div>  


<div id="tamanosidebar">
        <h1>SIDEBAR</h1>
        <?php get_sidebar();?>   
</div>




<?php get_footer();
?>