<?php
/*
    VR Theme | Accessibility Features Legend
    Project  | VR for Disabled
	Copyright: 2019, Jan Hamara, 2184316h@student.gla.ac.uk
    Wordpress v5.3
*/
?>

    <div class="container-fluid">

        <span class="modal-close-notice legend-close-notice">
            <a id="legend-close" href="javascript:void(0)" onclick="">
                Click here
            </a>
            or press&nbsp; <span class="vr-key-reverse">ESC</span> &nbsp;to close this dialog
        </span>

        <div class="row">
            <!--      Indicate the purpose of the modal with universal access icon      -->
            <i aria-hidden="true" class="fa fa-universal-access universal-access" title="Universal Access Icon"></i>
        </div>
        <div class="row">
            <h1>
                This website aims to follow all web accessibility principles and guidelines,
                in order to be fully operable by people with disabilities.
                <br/><br/>
                Please check out following instructions, in order to understand accessibility features of the website,
                so that you can consume content of this website with no barriers.
            </h1>

            <hr/>

            <div class="access-features-item">
                <a class="vr-accessibility-menu-link" href="javascript:void(0)">
                    <div aria-label="Open the accessibility settings menu" class="vr-accessibility-menu-button">
                        <i aria-hidden="true" class="fa fa-universal-access" title="Accessibility icon on accessibility menu button"></i>
                        &nbsp;Accessibility Menu
                    </div>
                </a>

                <span>In <strong>Accessibility Menu</strong>, you can customise accessibility features of the site to your own personal needs.</span>
            </div>

            <div class="clearfix"></div>

            <div class="access-features-item">
                <div id="legend2" aria-label="Text to Speech Icon" class="access-features-item-icon">
                    <i aria-hidden="true" class="fa fa-volume-up text-to-speech-icon" title="Text-to-Speech Icon"></i>
                </div>

                <span>Click sound icons to play a spoken version of the text.</span>
            </div>

            <div class="access-features-item">
                <div aria-label="Video Icon" class="access-features-item-icon">
                    <i aria-hidden="true" class="fa fa-video video-content-icon" title="Video Icon"></i>
                </div>

                <span>Click video icons to play a video version of the content.</span>
            </div>
        </div>
    </div>
