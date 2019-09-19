<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" initial-scale="1.0">
  <title><?php bloginfo( 'name' ); ?></title>
  <?php wp_head() ?>
</head>
<body>
    <?php if ( has_custom_logo() ) { ?>
        <div class="site-logo"><?php the_custom_logo(); ?></div>
    <?php } else { ?>
        <div class="site-title"><?php bloginfo( 'name'); ?></div>
    <?php } ?>