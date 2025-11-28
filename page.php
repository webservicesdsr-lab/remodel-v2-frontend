<?php
/**
 * Template for displaying pages
 * (Compatible with Elementor + Shortcodes)
 */

get_header();
?>

<main id="site-content" role="main">
  <?php
  while (have_posts()) :
    the_post();
    the_content(); // Aquí Elementor o shortcodes renderizan
  endwhile;
  ?>
</main>

<?php get_footer(); ?>
