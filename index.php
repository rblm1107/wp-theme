<?php
// on a deplacé tte la partie head et la nav dans un fichier header.php et les remplacer par cette fonction dans l'index
get_header();
get_template_part('templates/banner');
get_template_part('templates/about');
get_template_part('templates/contact');

?>
  <!-- Header -->


  <!-- Portfolio Grid Section -->
  <?php
  // on peut ajouter cette fonction en dessous get pour banner
  get_template_part('templates/portfolio');
  ?>

  <!-- About Section -->
  

  <!-- Contact Section -->
 

  <?php
  get_footer();
  ?>
