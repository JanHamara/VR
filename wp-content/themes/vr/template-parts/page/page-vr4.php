<?php
/*
    VR Theme | Page VR4
    Project  | VR for Disabled
	Copyright: 2019, Jan Hamara, 2184316h@student.gla.ac.uk
    Wordpress v5.3
*/
?>

<div id="top4" class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <!--      Do not be afraid to give disabled users instructions      -->
            <span class="modal-close-notice">Click outside this window or press&nbsp; <span class="vr-key">ESC</span> &nbsp;to close this dialog</span>
        </div>
        <div class="modal-body">
            <!--    Main Heading    -->
            <h3>
                <i aria-hidden="true" class="far fa-play-circle" title="Application icon"></i>
                &nbsp;
                VR Applications
            </h3>

            <!--    Video Switch    -->
            <a href="#" class="modal-switch" aria-label="Video Content Switch" target="_blank">
                <i aria-hidden="true" class="fa fa-video video-content-icon" title="Video Content Icon"></i>
            </a>

            <!--    Text-to-Speech Switch    -->
            <a id="vo-apps" href="#" class="modal-switch" aria-label="Text-To-Speech Switch">
                <i aria-hidden="true" class="fa fa-volume-up text-to-speech-icon" title="Text-to-Speech Icon"></i>
            </a>

            <hr/>

            <div class="vr-modal-content">
                <p class="pb2">
                    Do you want to know what virtual reality application are available for various devices at the moment?
                    Do you want to know if you can swim in the ocean in the virtual reality, drive a car on your favourite cirucit,
                    or if you can visit your dream destination?
                    <br/><br/>
                    Go ahead and check out this comprehensive list of Virtual Reality application, and find out ones you would like to try!
                </p>

                <hr/>

                <div id="vr-apps">
                    <ul id="vr-apps-list">
                        <!--          Google Expeditions          -->
                        <li>
                            <div class="vr-apps-list-item">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/apps/1.jpg" class="img-responsive" alt="application icon">
                                    </div>
                                    <div class="col-lg-10">
                                        <h4>Google Expeditions</h4>
                                        <p>
                                            An immersive learning and teaching tool that lets you go on VR trips or explore AR objects.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--          Ocean Rift          -->
                        <li>
                            <div class="vr-apps-list-item">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/apps/2.jpg" class="img-responsive" alt="application icon">
                                    </div>
                                    <div class="col-lg-10">
                                        <h4>Ocean Rift</h4>
                                        <p>
                                            Explore a vivid underwater world full of life including dolphins, sharks, turtles and even dinosaurs!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--          Arts & Culture          -->
                        <li>
                            <div class="vr-apps-list-item">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/apps/3.jpg" class="img-responsive" alt="application icon">
                                    </div>
                                    <div class="col-lg-10">
                                        <h4>Google Arts & Culture</h4>
                                        <p>
                                            Step inside a virtual gallery to see artworks by artists like Van Gogh, curated by museums from around the world.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--          Youtube VR          -->
                        <li>
                            <div class="vr-apps-list-item">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/apps/4.jpg" class="img-responsive" alt="application icon">
                                    </div>
                                    <div class="col-lg-10">
                                        <h4>Youtube VR</h4>
                                        <p>
                                            Experience your favorite YouTube channels, videos and creators in virtual reality.
                                        </p>
                                    </div>
                            </div>
                        </li>
                        <!--          National Geographic VR          -->
                        <li>
                            <div class="vr-apps-list-item">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/apps/5.jpg" class="img-responsive" alt="application icon">
                                    </div>
                                    <div class="col-lg-10">
                                        <h4>National Geographic VR</h4>
                                        <p>
                                            Immerse yourself in 360 adventure and experiences on land, air and sea with the National Geographic VR app.                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="modal-close-parent">
                    <a href="javascript:void(0)" class="modal-close-button">
                        <div aria-label="Load more items...">
                            <i aria-hidden="true" class="fas fa-spinner" title="Load icon"></i>
                            &nbsp;
                            Load More...&nbsp;
                        </div>
                    </a>
                </div>

                <div class="modal-close-parent">
                    <a href="#top4" class="modal-close-button">
                        <div aria-label="Go back to the top of the window">
                            <i aria-hidden="true" class="far fa-arrow-alt-circle-up" title="Arrow pointing up"></i>
                            &nbsp;
                            Return to Top
                        </div>
                    </a>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>