<?php
/*
    VR Theme | Page Accessibility Menu
    Project  | VR for Disabled
	Copyright: 2019, Jan Hamara, 2184316h@student.gla.ac.uk
    Wordpress v5.3
*/
?>

    <!--  In here users can change a variety of accessibility settings such as font color, contrast, sound, etc.  -->

    <div aria-label="Accessibility Menu Heading">
        <i aria-hidden="true" class="fa fa-universal-access" title="Accessibility icon on accessibility menu heading"></i>
        &nbsp;<h4>Accessibility Menu</h4>
        <span id="vr-accessibility-menu-close">Click the button again or press&nbsp; <span class="vr-key-reverse">ESC</span> &nbsp;to close this menu</span>
    </div>

    <hr/>

    <div id="vr-accessibility-menu-options">
        Use this menu to personalise visual settings of the website to your needs.
        You can change the main color of the text and background, increase or decrease the contrast between colors,
        turn on dictation of text and many other options.

        <hr/>

        <!--        Speech VoiceOver Switch         -->
        <div class="vr-accessibility-menu-item">
            <i aria-hidden="true" class="fas fa-assistive-listening-systems"  title="Assistive Listening Systems Icon"></i>
            &nbsp;&nbsp;VoiceOver
            <div class="vr-accessibility-menu-item-switch indent-2">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>

        <!--        Font Color         -->
        <div class="vr-accessibility-menu-item">
            <i aria-hidden="true" class="fas fa-font" title="Font Color Icon"></i>
            &nbsp;&nbsp;&nbsp;Font Color
            <div class="vr-accessibility-menu-item-switch indent-3">
                <label class="color">
                    <input type="color" id="vr-font-color" value="#101350">
                </label>
            </div>
        </div>

        <!--        Background Color         -->
        <div class="vr-accessibility-menu-item">
            <i aria-hidden="true" class="fas fa-fill-drip" title="Background Color Icon"></i>
            &nbsp;&nbsp;Background Color
            <div class="vr-accessibility-menu-item-switch">
                <label class="color">
                    <input type="color" id="vr-bg-color" value="#F8F8FF">
                </label>
            </div>
        </div>

    </div>