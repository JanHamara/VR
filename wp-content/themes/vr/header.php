<?php
/*
    VR Theme | Header
    Project  | VR for Disabled
	Copyright: 2019, Jan Hamara, 2184316h@student.gla.ac.uk
    Wordpress v5.3
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--    Use core WP function to insert favicon    -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://use.typekit.net/bio8ehc.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="site-container">

    <div id="vr-accessibility-bar">
        <?php get_template_part( 'template-parts/header/page', 'accessibility-bar' ); ?>
    </div>

    <div id="vr-accessibility-menu">
        <?php get_template_part( 'template-parts/header/page', 'accessibility-menu' ); ?>
    </div>