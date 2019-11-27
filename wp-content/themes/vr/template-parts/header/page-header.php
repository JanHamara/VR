<?php
/*
    VR Theme | Page Header
    Project  | VR for Disabled
	Copyright: 2019, Jan Hamara, 2184316h@student.gla.ac.uk
    Wordpress v5.3
*/
?>

<!--<h1 id="header-title" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="300">-->
<!--    --><?php //bloginfo( 'name' ); ?>
<!--</h1>-->

    <h1 id="header-main-heading">Technology That Matters</h1>

    <?php
    $description = get_bloginfo( 'description', 'display' );
    if ( $description || is_customize_preview() ) :
        ?>
    <!--    I could load this text from WP database, with the PHP code surrounding this <h2> element    -->
    <!--    However, as I need to break lines to adjust it to the picture, I need to put it as plain text in code  -->
    <!--    Therefore, I leave this PHP code as a reference, how I could load it from database  -->
        <h2 id="header-tagline" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="600">
            A fully accessible website hub for <strong>disabled people</strong>, <br/>
            introducing them to Virtual Reality Technology and how to use it, <br/>
            to be able to enrich their lives despite their disability, <br/>
            and allow them to see the beauty of the world.
        </h2>
    <?php endif; ?>

    <a id="header-button-link" href="#vr-main-menu">
        <div aria-label="Go to the main menu" id="header-button">
            <i aria-hidden="true" class="far fa-arrow-alt-circle-down" title="Arrow pointing down to the main menu"></i>
            &nbsp;Go to Menu
        </div>
    </a>

