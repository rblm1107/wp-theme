<!-- importer le header -->
<?php 
get_header();
?>
<!-- single div -->
<div class='single-post-container'>
    <?php while(have_post()) : the_post(); ?>
    <h2><?php the_title(); ?></h2>

    <div class="post-content">
        <?php the_content(); ?>
    </div>
</div>
<?php endwhile ; ?>

<!-- featured image se met pas par default il faut specifier 'thumbnails' pas comme 'custom-backgroung'-->
<div class="thumbnails-image"><?php the_post_thumbnail('large') ?></div>

<!-- importer footer -->
<?php 
get_footer();
?>