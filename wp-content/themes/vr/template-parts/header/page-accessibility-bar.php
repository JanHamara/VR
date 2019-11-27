<?php
/*
    VR Theme | Page Accessibility Bar
    Project  | VR for Disabled
	Copyright: 2019, Jan Hamara, 2184316h@student.gla.ac.uk
    Wordpress v5.3
*/
?>

    <!--    Website Logo - acting as a link to home page    -->
    <a id="vr-site-logo" href="<?php echo get_home_url(); ?>" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"
             class="img-responsive" alt="site-logo">
    </a>

    <!--    Accessibility Button - acts as button to open accessibility settings    -->
    <div id="vr-accessibility-menu-button">
        <i aria-hidden="true" class="fas fa-universal-access" title="Accessibility icon on accessibility menu button"></i>
    </div>
