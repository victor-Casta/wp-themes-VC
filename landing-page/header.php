<!DOCTYPE html>
<html <?php language_attributes() ?> data-theme="emerald">

<head>
  <meta charset="<?php bloginfo("charset") ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>

<body>
  <?php wp_body_open() ?>
  <header>
    <section>
      <picture class="logo">
        <?php the_custom_logo() ?>
      </picture>
    </section>
    <section>
      <?php wp_nav_menu(); ?>
      <a href="/" class="button__header">request a quote</a>
    </section>
    <section class="mobile-menu__header">
        <img class="menu-mobile-icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/burguerMenu.svg" alt="burguer menu icon">
      <nav class="mobile-menu inactive">
        <img src="<?php echo get_template_directory_uri() ?>/assets/icons/close.svg" class="close-icon" alt="close icon">
        <?php wp_nav_menu(); ?>
        <a href="/" class="button__header">request a quote</a>
      </nav>
    </section>
  </header>