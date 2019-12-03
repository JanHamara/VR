<?php
/*
    VR Theme | Voice Support Prompt
    Project  | VR for Disabled
	Copyright: 2019, Jan Hamara, 2184316h@student.gla.ac.uk
    Wordpress v5.3
*/
?>

    <div class="container-fluid">
        <div class="row">
            <!--      Indicate the purpose of the modal with assistive listening icon      -->
            <i aria-hidden="true" class="fas fa-assistive-listening-systems"  title="Assistive Listening Systems Icon"></i>
        </div>
        <div class="row">
            <h1>Hello, would you like to enable VoiceOver support?</h1>
        </div>
        <div class="row last-row">
            <div class="col-lg-6">
                <a href="javascript:void(0)" id="vo-on" class="vr-button vr-yes-button" aria-label="VoiceOver On Switch">
                    &nbsp;<i aria-hidden="true" class="fas fa-volume-up" title="VoiceOver Enabled Icon"></i>
                    &nbsp;&nbsp;
                    Yes, I want to use Voice Over&nbsp;
                </a>
            </div>
            <div class="col-lg-6">
                <a href="javascript:void(0)" id="vo-off" class="vr-button vr-no-button" aria-label="VoiceOver Off Switch">
                    &nbsp;<i aria-hidden="true" class="fas fa-volume-off" title="VoiceOver Disabled Icon"></i>
                    &nbsp;&nbsp;
                    No, I don't need Voice Over&nbsp;
                </a>
            </div>
        </div>
    </div>
