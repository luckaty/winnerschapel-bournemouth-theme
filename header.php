<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png">
<title>
 <?php
    $site_name = get_bloginfo('name');
    $page_title = get_the_title();
    $template = get_page_template_slug(); 
    $page_title = pathinfo($template, PATHINFO_FILENAME); 
    $page_title = str_replace(['-', '_'], ' ', ucfirst($page_title));

    if ( is_front_page() || is_home() ) {
      echo esc_html($site_name);
    } elseif ( !empty($page_title) ) {
      echo esc_html($page_title . ' – ' . $site_name);
    } else {
      echo esc_html($site_name);
    }
?>
</title>


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-res-from="1025">
  <div class="page-loader"></div>

  <?php
  // Load front-page or inner header based on page type
  if ( is_front_page() ) {
      get_template_part('/header', 'front');
  } else {
      get_template_part('/header', 'inner');
  }
  ?>
