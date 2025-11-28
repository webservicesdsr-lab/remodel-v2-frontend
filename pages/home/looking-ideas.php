<?php
/*
 * Shortcode: [remodelingwp_looking_ideas]
 */
function remodelingwp_looking_ideas_section() {
  ob_start();
  ?>
  
<section class="looking-ideas">
  <div class="overlay">
    <div class="ideas-box">
      <!-- Corners -->
      <span class="corner corner-tl"></span>
      <span class="corner corner-tr"></span>
      <span class="corner corner-bl"></span>
      <span class="corner corner-br"></span>

      <!-- Content -->
      <div class="ideas-content">
        <p class="subtitle">We are licensed, insured and bonded</p>
        <h2>Looking for ideas?</h2>
        <a href="<?php echo site_url('/portfolio'); ?>" class="cta-btn">Tap to see our portfolio</a>
      </div>
    </div>
  </div>
</section>


  <?php
  return ob_get_clean();
}
add_shortcode('remodelingwp_looking_ideas', 'remodelingwp_looking_ideas_section');
?>
