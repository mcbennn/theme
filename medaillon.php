<?php
/**
 * Template pour afficher les médaillons sur la page d'accueil.
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<div class="col-lg-4" id="post-<?php the_ID(); ?>">
          <?php the_post_thumbnail( array(140, 140), array( 'class' => 'img-circle' ) ); ?>
          <h2><?php the_title(); ?></h2>
          <?php the_excerpt(); ?>
          <p><a href="<?php the_permalink(); ?>" rel="bookmark">Lire la suite »</a></p>
</div>
