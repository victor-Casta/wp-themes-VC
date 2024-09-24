<?php
function plz_assets() {
    wp_register_style("martial-font", "https://fonts.googleapis.com/css2?family=Martian+Mono:wght@100..800&display=swap", array(), null, "all");
    wp_register_style("grotesk-font", "https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap", array(), null, "all");
    wp_register_style("daisy-ui", "https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css", array(), "4.12.10", "all");
    wp_register_style("tailwind", "https://cdn.jsdelivr.net/npm/tailwindcss@3.4.12/dist/tailwind.min.css", array(), "3.4.12", "all");

    wp_enqueue_style("martial-font");
    wp_enqueue_style("grotesk-font");
    wp_enqueue_style("daisy-ui");
    wp_enqueue_style("tailwind");

    wp_enqueue_style("styles-principal", get_template_directory_uri() . "/style.css", array("martial-font", "grotesk-font", "tailwind", "daisy-ui"), null, "all");
    wp_enqueue_style("styles-responsive", get_template_directory_uri() . "/css/responsive.css", array("styles-principal"), null, "all");
    wp_enqueue_style("styles-main", get_template_directory_uri() . "/css/main_content.css", array("styles-principal"), null, "all");

    // Registrar y enqueue de GSAP script
    wp_register_script("gsap", "https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js", array(), "3.12.5", true);
    wp_enqueue_script("gsap");
    wp_enqueue_script('menu', get_template_directory_uri() . '/js/menu.js', array(), null, true);
    wp_enqueue_script('slide-animation', get_template_directory_uri() . '/js/slide-animation.js', array(), null, true);
}

  // Acción para cargar los assets
  add_action('wp_enqueue_scripts', 'plz_assets');

  function plz_analitycs() {
    ?>
      <!-- Google Analytics -->
    <?php
  }
  add_action('wp_body_open','plz_analitycs');
?>