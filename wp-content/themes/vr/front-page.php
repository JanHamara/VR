<?php
/*
    VR Theme | Front Page
    Project  | VR for Disabled
	Copyright: 2019, Jan Hamara, 2184316h@student.gla.ac.uk
    Wordpress v5.3
*/
?>

<?php get_header(); ?>

<!--    Because Google doesn't allow autoplay of speech anymore     -->
<!--    Make the site pop out a speech enabler prompt     -->
<!--    If user wants text-to-speech to be available then run     -->
<!--    speechSynthesis.speak(new SpeechSynthesisUtterance('hello world'));     -->
<!--    Since then you can run all the other activators     -->



    <main id="vr-main">
        <header id="vr-header">
            <?php get_template_part( 'template-parts/header/page', 'header' ); ?>
        </header>

        <section id="vr-main-menu">
            <?php get_template_part( 'template-parts/page/page', 'menu' ); ?>
        </section>

        <!--    Main Menu Modals    -->
        <?php get_template_part( 'template-parts/page/page', 'modals' ); ?>

<?php get_footer(); ?>