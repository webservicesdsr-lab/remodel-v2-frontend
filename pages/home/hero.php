<?php
/*
 * Shortcode: [remodelingwp_hero]
 */
function remodelingwp_hero_section() {
  ob_start();
  ?>
  
  <section id="home">
    <!-- NAVBAR MOBILE -->
    <div class="wrapper">
      <div class="desktop-navbar-mobile">
        <nav>
          <label class="menu-icon"><i class="fas fa-bars"></i></label>
        </nav>
      </div>
    </div>

    <!-- LOGO -->
    <a href="<?php echo home_url(); ?>">
      <img id="logo" src="https://remodelwithsilva.com/wp-content/uploads/2025/09/remodelwithsilvalogo-e1758836753322.webp" alt="Remodel with Silva Logo">
    </a>

    <!-- NAVBAR DESKTOP -->
    <div class="wrapper">
      <div class="desktop-navbar">
        <nav>
          <div class="content">
            <ul class="links">
              <li><a href="<?php echo home_url(); ?>">HOME</a></li>
              
              <!-- Services with dropdown -->
              <li class="has-submenu">
                <a href="<?php echo site_url('/services'); ?>">SERVICES</a>
                <ul class="submenu">
                  <li><a href="<?php echo site_url('/painting-services'); ?>">Profesional Painting</a></li>
                  <li><a href="<?php echo site_url('/bathroom-remodeling'); ?>">Bathroom Remodeling</a></li>
                  
                  <!--
                  <li><a href="<?php echo site_url('/kitchen-remodeling'); ?>">Kitchen Remodeling</a></li>
                  <li><a href="<?php echo site_url('/flooring'); ?>">Flooring</a></li>
                  <li><a href="<?php echo site_url('/tiling'); ?>">Tiling</a></li>
                  <li><a href="<?php echo site_url('/junk-removal'); ?>">Junk Removal</a></li>  -->
                  
                </ul>
              </li>

              <li><a href="<?php echo site_url('/portfolio'); ?>">PORTFOLIO</a></li>
              <li><a href="<?php echo site_url('/blog'); ?>">BLOG</a></li>
              <li><a href="<?php echo site_url('/contact'); ?>">CONTACT</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>

    <!-- SOCIAL ICONS -->
    <div class="social-icons">
      <a href="https://www.facebook.com/remodelwithsilva" target="_blank"><i class="fab fa-facebook"></i></a>
      <a href="https://www.instagram.com/remodelwithsilva/" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="https://www.tiktok.com/@buildingupthekingdom" target="_blank"><i class="fab fa-tiktok"></i></a>
    </div>

    <!-- CALL FOR ESTIMATE -->
    <div class="call-for-estimate">
      <i class="fas fa-phone-alt"></i>
      <span>
        <strong>Call for free estimate</strong>
        <a href="tel:+17082707794"><div class="phoneNumber">708-270-7794</div></a>
      </span>
    </div>

    <!-- MAIN TITLE -->
    <div class="mainTitle">
      <h2>Three Generations of Craftsmanship. Remodeling You Can Trust 
      <br>in Kankakee County IL & Collin County TX
      </h2>
    </div>

    <!-- BUTTONS -->
    <div class="call-now-btn">
      <a href="tel:+17082707794"><i class="fas fa-mobile-alt"></i> Call Now</a>
    </div>
    <div class="appointmentBtn">
      <a href="#contact"><i class="fas fa-calendar-alt"></i> Book An Appointment</a>
    </div>
  </section>

  <!-- ===== MOBILE OVERLAY & POPUP ===== -->
  <div class="mobile-overlay">
    <div class="mobile-popup">
      <span class="mobile-close">&times;</span>

      <!-- Main menu -->
      <div class="popup-page main-page active">
        <ul class="mobile-menu">
          <li><a href="<?php echo home_url(); ?>">Home</a></li>
          <li><a href="#" class="submenu-link" data-target="services-page">Services</a></li>
          <li><a href="<?php echo site_url('/portfolio'); ?>">Portfolio</a></li>
          <li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
          <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
        </ul>
      </div>

      <!-- Submenu Services -->
      <div class="popup-page" id="services-page">
        <ul class="mobile-menu">
          <li><button class="back-link">Back</button></li>
          <li><a href="<?php echo site_url('/painting-services'); ?>">Painting</a></li>
          <li><a href="<?php echo site_url('/kitchen-remodeling'); ?>">Kitchen Remodeling</a></li>
          <li><a href="<?php echo site_url('/bathroom-remodeling'); ?>">Bathroom Remodeling</a></li>
          <li><a href="<?php echo site_url('/flooring'); ?>">Flooring</a></li>
          <li><a href="<?php echo site_url('/tiling'); ?>">Tiling</a></li>
          <li><a href="<?php echo site_url('/junk-removal'); ?>">Junk Removal</a></li>
        </ul>
      </div>
    </div>
  </div>

  <?php
  return ob_get_clean();
}
add_shortcode('remodelingwp_hero', 'remodelingwp_hero_section');
?>
