<?php
/*
    VR Theme | Devices | Oculus Rift
    Project  | VR for Disabled
	Copyright: 2019, Jan Hamara, 2184316h@student.gla.ac.uk
    Wordpress v5.3
*/
?>

<div class="vr-devices-list-item">
    <div class="row">
        <div class="col-lg-6 col-first">
            <img src="<?php echo get_template_directory_uri(); ?>/images/devices/3.jpg" class="img-responsive" alt="VR Device Image">
        </div>
        <div class="col-lg-6 col-second">
            <!--     VR Headset Name     -->
            <h4 class="vr-device-name">Oculus Rift
                <span class="h4-by"> by </span>
                <!--     VR Headset Manufacturer     -->
                <span class="h4-manufacturer">Facebook</span>

                <!--    Video Switch    -->
                <a href="https://www.youtube.com/watch?v=tm_IDqHskcs" class="modal-switch item-switch" aria-label="Video Content Switch" target="_blank">
                    <i aria-hidden="true" class="fa fa-video video-content-icon" title="Video Content Icon"></i>
                </a>

                <!--    Text-to-Speech Switch    -->
                <a id="vo-device-3" href="#" class="modal-switch item-switch" aria-label="Text-To-Speech Switch">
                    <i aria-hidden="true" class="fa fa-volume-up text-to-speech-icon" title="Text-to-Speech Icon"></i>
                </a>
            </h4>

            <!--     VR Headset Description     -->
            <!--     Source: https://en.wikipedia.org/wiki/Oculus_VR     -->
            <p class="vr-device-desc">
                Oculus Rift is a virtual reality headset, specially designed for gaming,
                that pushes the boundaries of Virtual Reality with the biggest development team on the market.
                It offers an incredible quality of virtual content and works with two handheld controllers to give user full control over the virtual world.
            </p>

            <hr/>

            <!--     VR Headset Specifications     -->
            <div class="vr-device-specs">
                <div class="vr-device-spec">
                    Price: <span class="red-mark">Expensive</span>
                </div>
                <div class="vr-device-spec right">
                    Remote Control: <span class="green-mark">Yes</span>
                </div>
                <div class="vr-device-spec">
                    Image Quality: <span class="green-mark">High</span>
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
                <a href="https://www.oculus.com/rift" class="modal-close-button vr-device-buy" target="_blank">
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
