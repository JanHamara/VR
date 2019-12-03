<?php
/*
    VR Theme | Page VR3
    Project  | VR for Disabled
	Copyright: 2019, Jan Hamara, 2184316h@student.gla.ac.uk
    Wordpress v5.3
*/
?>

<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <!--      Do not be afraid to give disabled users instructions      -->
            <span class="modal-close-notice">Click outside this window or press&nbsp; <span class="vr-key">ESC</span> &nbsp;to close this dialog</span>
        </div>
        <div class="modal-body">
            <!--    Main Heading    -->
            <h3>
                <i aria-hidden="true" class="fas fa-vr-cardboard" title="Store icon"></i>
                &nbsp;
                Virtual Reality Devices
            </h3>

            <!--    Video Switch    -->
            <a href="https://www.youtube.com/watch?v=vz0UUVDt2ps" class="modal-switch" aria-label="Video Content Switch" target="_blank">
                <i aria-hidden="true" class="fa fa-video video-content-icon" title="Video Content Icon"></i>
            </a>

            <!--    Text-to-Speech Switch    -->
            <a id="vo-devices" href="#" class="modal-switch" aria-label="Text-To-Speech Switch">
                <i aria-hidden="true" class="fa fa-volume-up text-to-speech-icon" title="Text-to-Speech Icon"></i>
            </a>

            <hr/>

            <div class="vr-modal-content">
                <p class="pb2">
                    If you are interested in learning about various virtual reality devices,
                    or if you want to compare their functionality <br/>and find out which one is the best for you,
                    feel free to use this simple list of various virtual reality devices available on the market.
                </p>

                <hr/>

                <div id="vr-devices">
                    <ul id="vr-devices-list">
                        <!--          Google Cardboard          -->
                        <li>
                            <?php get_template_part( 'template-parts/devices/device', '1' ); ?>
                        </li>

                        <!--          Google DayDream VR         -->
                        <li>
                            <?php get_template_part( 'template-parts/devices/device', '2' ); ?>
                        </li>

                        <!--          Oculus Rift         -->
                        <li>
                            <?php get_template_part( 'template-parts/devices/device', '3' ); ?>
                        </li>

                        <!--          HTC Vive Pro         -->
                        <li>
                            <?php get_template_part( 'template-parts/devices/device', '4' ); ?>
                        </li>
                    </ul>
                </div>

                <div class="modal-close-parent">
                    <a href="javascript:void(0)" class="modal-close-button">
                        <div aria-label="Load more items...">
                            <i aria-hidden="true" class="fas fa-spinner" title="Load icon"></i>
                            &nbsp;
                            Load More. . .
                        </div>
                    </a>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>