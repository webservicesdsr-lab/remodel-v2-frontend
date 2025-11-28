<?php
/*
 * Shortcode: [remodelingwp_next_project]
 */
function remodelingwp_next_project_section() {
  ob_start(); ?>
  
  <section class="next-project">
    <div class="container-3">
      <!-- Text Left -->
      <div class="hero-text">
        <h1>What is your next project?</h1>
        <p>
          From remodeling kitchens to upgrading bathrooms, we bring your ideas to life. 
          Let our expert team help you design and build your dream home improvement project.
        </p>
      </div>

      <!-- Image Right -->
      <img src="https://remodelwithsilva.com/wp-content/uploads/2025/09/family-photo-e1758670017837.webp" class="hero-image">
    </div>
  </section>

  <?php
  return ob_get_clean();
}
add_shortcode('remodelingwp_next_project', 'remodelingwp_next_project_section');
