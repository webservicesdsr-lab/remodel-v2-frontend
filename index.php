<?php
/**
 * Fallback Template (index.php)
 * Used if no other template applies.
 */

get_header();
?>

<main id="site-content" role="main">
  <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
      the_content();
    endwhile;
  else :
    echo '<p>No content found.</p>';
  endif;
  ?>
</main>

<?php get_footer(); ?>
