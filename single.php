<!-- importer le header -->
<?php 
get_header();
?>
<!-- single div -->
<div class='single-post-container'>
    <?php while(have_post()){
        the_post();
     ?>
     }
    <h2><?php the_title(); ?></h2>

    <div class="post-content">
        <?php the_content(); ?>
    </div>
</div>
<?php endwhile ; ?>



<!-- importer footer -->
<?php 
get_footer();
?>