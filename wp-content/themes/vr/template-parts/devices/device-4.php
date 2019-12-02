<?php
/*
    VR Theme | Devices | HTC Vive Pro
    Project  | VR for Disabled
	Copyright: 2019, Jan Hamara, 2184316h@student.gla.ac.uk
    Wordpress v5.3
*/
?>

<div class="vr-devices-list-item">
    <div class="row">
        <div class="col-lg-6 col-first">
            <img src="<?php echo get_template_directory_uri(); ?>/images/devices/4.jpg" class="img-responsive" alt="VR Device Image">
        </div>
        <div class="col-lg-6 col-second">
            <!--     VR Headset Name     -->
            <h4 class="vr-device-name">HTC Vive Pro
                <span class="h4-by"> by </span>
                <!--     VR Headset Manufacturer     -->
                <span class="h4-manufacturer">Vive</span>

                <!--    Video Switch    -->
                <a href="https://www.youtube.com/watch?v=HHM-8I3EfTE" class="modal-switch item-switch" aria-label="Video Content Switch" target="_blank">
                    <i aria-hidden="true" class="fa fa-video video-content-icon" title="Video Content Icon"></i>
                </a>
            </h4>

            <!--     VR Headset Description     -->
            <p class="vr-device-desc">
                HTC Vive Pro is a professional virtual reality system, that is considered to be the most immersive virtual reality
                system on the market at the moment. It is very expensive and requires a powerful computer to run, but it offers a breathtaking image quality,
                two controllers, one for each hand, and a truly realistic VR experience.

            </p>

            <hr/>

            <!--     VR Headset Specifications     -->
            <div class="vr-device-specs">
                <div class="vr-device-spec">
                    Price: <span class="red-mark">Very expensive</span>
                </div>
                <div class="vr-device-spec right">
                    Remote Control: <span class="green-mark">Yes</span>
                </div>
                <div class="vr-device-spec">
                    Image Quality: <span class="green-mark">Very High</span>
                </div>
                <div class="vr-device-spec right">
                    Motion sensors: <span class="green-mark">Yes</span>
                </div>
                <div class="vr-device-spec">
                    Wearing Comfort: <span class="green-mark">High</span>
                </div>
                <div class="vr-device-spec right">
                    Works alone: <span class="red-mark">No</span>
                </div>
            </div>

            <hr/>

            <!--     Buy Headset Button     -->
            <div class="modal-close-parent">
                <a href="https://www.vive.com/uk/product/vive-pro/" class="modal-close-button vr-device-buy" target="_blank">
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
