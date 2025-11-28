<?php
/*
 * Shortcode: [remodelingwp_services]
 */
function remodelingwp_services_section() {
  ob_start(); 
  ?>

  <section class="services" id="services">
    <h2 class="services-title">Our Services</h2>
    <div class="services-grid">

      <?php
      // Services array
      $services = [
        "painting" => [
          "title" => "Painting",
          "image" => "painting.png",
          "alt"   => "Interior and exterior painting in Kankakee, Bourbonnais, Bradley, Manteno IL and McKinney, Frisco, Allen, Celina, Plano TX",
          "desc"  => "Transform your space with expert painting services. From mood-enhancing interiors to weather-resistant exteriors, we deliver craftsmanship that reflects your personality and protects your home. Serving Illinois and Texas with premium paints and meticulous preparation.",
          "estimator" => "Estimate Your Painting Costs with BuildWise™",
          "portfolio" => "View Painting Portfolio"
        ],
        "flooring" => [
          "title" => "Flooring",
          "image" => "flooring.png",
          "alt"   => "Hardwood, laminate, and tile flooring installation in Kankakee IL and McKinney TX",
          "desc"  => "Step into luxury with flooring that combines style, durability, and value. From timeless hardwood to versatile vinyl and elegant tile, our expert installers create floors that stand the test of time across Illinois and Texas.",
          "estimator" => "BuildWise™ Flooring Estimator (Coming Soon)",
          "portfolio" => "Flooring Project Gallery"
        ],
        "bathroom" => [
          "title" => "Bathroom Remodeling",
          "image" => "bathroom.png",
          "alt"   => "Luxury bathroom remodeling in Bourbonnais, Bradley, Manteno IL and Frisco, Plano TX",
          "desc"  => "Create your personal spa retreat with bathroom remodeling that blends comfort and functionality. From vanities to spa-like showers, we enhance bathrooms to improve daily living and add home value.",
          "estimator" => "BuildWise™ Bathroom Estimator (Coming Soon)",
          "portfolio" => "Bathroom Remodeling Gallery"
        ],
        "kitchen" => [
          "title" => "Kitchen Remodeling",
          "image" => "kitchen.png",
          "alt"   => "Custom kitchen remodeling in Kankakee IL and Allen, Celina, McKinney TX",
          "desc"  => "Design the heart of your home with kitchen remodeling services that bring families together. We provide cabinet installation, countertops, backsplash, and modern layouts to maximize efficiency and beauty.",
          "estimator" => "BuildWise™ Kitchen Estimator (Coming Soon)",
          "portfolio" => "Kitchen Remodeling Portfolio"
        ],
        "exterior" => [
          "title" => "Exterior Projects",
          "image" => "exterior.png",
          "alt"   => "Exterior siding, trim, and curb appeal upgrades in Bradley, Manteno IL and Plano, McKinney TX",
          "desc"  => "Boost curb appeal and protect your home with exterior upgrades. From siding and trim to doors and lighting, we enhance beauty, efficiency, and long-term durability for Illinois and Texas homes.",
          "estimator" => "BuildWise™ Exterior Estimator (Coming Soon)",
          "portfolio" => "Exterior Projects Gallery"
        ],
        "tinyhomes" => [
          "title" => "Tiny Homes",
          "image" => "tinyhomes.jpg",
          "alt"   => "Custom tiny home builders in Kankakee County IL and Collin County TX",
          "desc"  => "Discover minimalist living with our custom tiny homes. We maximize every square foot with smart design, eco-friendly materials, and efficient layouts—perfect for downsizing or creating unique rental opportunities.",
          "estimator" => "BuildWise™ Estimator (Coming Soon)",
          "portfolio" => "Tiny Homes Blueprint Models (Coming Soon)"
        ],
        "customhomes" => [
          "title" => "Custom Homes",
          "image" => "customhomes.png",
          "alt"   => "Custom home construction in Bourbonnais, Bradley IL and McKinney, Frisco TX",
          "desc"  => "Build the home of your dreams with our custom construction services. From concept to completion, we deliver personalized designs, premium finishes, and craftsmanship that reflects your family’s story.",
          "estimator" => "BuildWise™ Estimator (Coming Soon)",
          "portfolio" => "Request Blueprint Quote"
        ],
        "demolition" => [
          "title" => "Demolition",
          "image" => "demolition.png",
          "alt"   => "Safe residential demolition services in Kankakee County IL and Collin County TX",
          "desc"  => "Clear the way for your vision with safe and efficient demolition services. From selective interior removal to full structure teardown, we prepare sites for the next chapter with care and responsibility.",
          "estimator" => "BuildWise™ Demolition Estimator (Coming Soon)",
          "portfolio" => "Demolition Project Gallery (Coming Soon)"
        ]
      ];

      foreach ($services as $key => $s) : ?>
        <!-- Service Card -->
        <div class="service-card" data-service="<?php echo esc_attr($key); ?>">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/services/' . $s['image']); ?>" 
               alt="<?php echo !empty($s['alt']) ? esc_attr($s['alt']) : esc_attr($s['title']); ?>">
          <h3><?php echo esc_html($s['title']); ?></h3>
          <p class="service-desc"><?php echo esc_html($s['desc']); ?></p>
        </div>
      <?php endforeach; ?>

    </div>
  </section>

  <!-- ===== MODALS ===== -->
  <div class="service-modal-overlay"></div>

  <?php foreach ($services as $key => $s) : ?>
    <div class="service-modal" id="modal-<?php echo esc_attr($key); ?>">
      <div class="modal-content">
        <span class="modal-close">&times;</span>
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/services/' . $s['image']); ?>" 
             alt="<?php echo !empty($s['alt']) ? esc_attr($s['alt']) : esc_attr($s['title']); ?>">
        <h3><?php echo esc_html($s['title']); ?></h3>
        <p><?php echo esc_html($s['desc']); ?></p>
        <div class="modal-buttons">
          <a href="<?php echo esc_url(site_url('/estimator-tool')); ?>" class="btn btn-brown"><?php echo esc_html($s['estimator']); ?></a>
          <a href="<?php echo esc_url(site_url('/portfolio')); ?>" class="btn btn-lightbrown"><?php echo esc_html($s['portfolio']); ?></a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

  <?php
  return ob_get_clean();
}
add_shortcode('remodelingwp_services', 'remodelingwp_services_section');
?>
