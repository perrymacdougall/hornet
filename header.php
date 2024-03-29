<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width" initial-scale="1.0">
  <title><?php bloginfo( 'name' ); ?></title>
  <?php wp_head(); ?>
</head>
<body>
    <nav>
        <?php if ( has_custom_logo() ) { ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
        <?php } else { ?>
            <div class="site-title"><?php bloginfo( 'name' ); ?></div>
        <?php } ?>

        <?php if ( has_nav_menu( 'Primary' ) ) :
            wp_nav_menu(
                array(
                    'theme_location' => 'Primary',
                    'menu_class'     => 'header-menu'
                )
            );
        endif; ?>
    </nav>

    <div class="custom-header">
        <?php the_custom_header_markup(); ?>
    </div>