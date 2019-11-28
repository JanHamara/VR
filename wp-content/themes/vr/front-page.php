<?php
/*
    VR Theme | Front Page
    Project  | VR for Disabled
	Copyright: 2019, Jan Hamara, 2184316h@student.gla.ac.uk
    Wordpress v5.3
*/
?>

<?php get_header(); ?>

    <main id="vr-main">
        <header id="vr-header">
            <?php get_template_part( 'template-parts/header/page', 'header' ); ?>
        </header>

        <section id="vr-main-menu">
            <?php get_template_part( 'template-parts/page/page', 'menu' ); ?>
        </section>

        <!-- Modal 1 | What is VR -->
        <div class="modal fade" id="WhatIsVR" tabindex="-1" role="dialog" aria-labelledby="WhatIsVRMenu" aria-hidden="true">
            <?php get_template_part( 'template-parts/page/page', 'vr1' ); ?>
        </div>
    </main>

<?php get_footer(); ?>