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

    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="vr-accessibility-bar">
        <?php get_template_part( 'template-parts/header/page', 'accessibility-bar' ); ?>
    </div>

    <!--    This links to page-navigation template, which contains the navigation bar   -->
    <?php get_template_part( 'template-parts/header/page', 'navigation' ); ?>