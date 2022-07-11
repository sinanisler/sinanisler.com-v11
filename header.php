<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name') ?> </title>
    <link rel="icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png?v2">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css?1.1<?php //echo rand(); ?>">
    <?php wp_head(); ?>
</head>
<body>


<div class="container header-menu-bar">
<div class="row header-menu-row">
<div class="col-12 header-menu-inner">

<?php 
wp_nav_menu(array(
    'menu' => 'header_menu',
    'container' => false 
));

?>


</div>
</div>
</div>