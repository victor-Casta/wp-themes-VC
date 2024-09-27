<?php
  get_header();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>
  <?php get_template_part("/template-parts/content", "list") ?>
  <?php wp_footer(); ?>
</body>
</html>
