<?php
/*
    VR Theme | Devices | Google Cardboard
    Project  | VR for Disabled
	Copyright: 2019, Jan Hamara, 2184316h@student.gla.ac.uk
    Wordpress v5.3
*/
?>

<div class="vr-devices-list-item">
    <div class="row">
        <div class="col-lg-6 col-first">
            <img src="<?php echo get_template_directory_uri(); ?>/images/devices/1.jpg" class="img-responsive" alt="VR Device Image">
        </div>
        <div class="col-lg-6 col-second">
            <!--     VR Headset Name     -->
            <h4 class="vr-device-name">Google Cardboard
                <span class="h4-by"> by </span>
                <!--     VR Headset Manufacturer     -->
                <span class="h4-manufacturer">Google</span>

                <!--    Video Switch    -->
                <a href="https://www.youtube.com/watch?v=SxAj2lyX4oU" class="modal-switch item-switch" aria-label="Video Content Switch" target="_blank">
                    <i aria-hidden="true" class="fa fa-video video-content-icon" title="Video Content Icon"></i>
                </a>

                <!--    Text-to-Speech Switch    -->
                <a id="vo-device-1" href="#" class="modal-switch item-switch" aria-label="Text-To-Speech Switch">
                    <i aria-hidden="true" class="fa fa-volume-up text-to-speech-icon" title="Text-to-Speech Icon"></i>
                </a>
            </h4>

            <!--     VR Headset Description     -->
            <!--     Source: https://arvr.google.com/cardboard/     -->
            <p class="vr-device-desc">
                Google Cardboard is the most basic and affordable virtual reality head-mounted display on the market.
                <!--                                           As its name suggests, it is made from simplest of materials - cardboard, therefore you can either order it from Google, or you can even build you own with instructions from Google.-->
                While it does not offer much comfort and realism during the experience, it is a great the entry point
                for those, who want to experience virtual reality for a first time, in a simple, fun and affordable way.
            </p>

            <hr/>

            <!--     VR Headset Specifications     -->
            <div class="vr-device-specs">
                <div class="vr-device-spec">
                    Price: <span class="green-mark">Very Cheap</span>
                </div>
                <div class="vr-device-spec right">
                    Remote Control: <span class="red-mark">No</span>
                </div>
                <div class="vr-device-spec">
                    Image Quality: <span class="red-mark">Low</span>
                </div>
                <div class="vr-device-spec right">
                    Motion sensors: <span class="red-mark">No</span>
                </div>
                <div class="vr-device-spec">
                    Wearing Comfort: <span class="red-mark">Low</span>
                </div>
                <div class="vr-device-spec right">
                    Works alone: <span class="red-mark">No</span>
                </div>
            </div>

            <hr/>

            <!--     Buy Headset Button     -->
            <div class="modal-close-parent">
                <a href="https://arvr.google.com/intl/en_uk/cardboard/get-cardboard/" class="modal-close-button vr-device-buy" target="_blank">
                    <div aria-label="Buy this headset">
                        <i aria-hidden="true" class="fas fa-coins" title="Buy icon"></i>
                        &nbsp;
                        Buy this headset
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
