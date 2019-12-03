<?php
/*
    VR Theme | Page VR6
    Project  | VR for Disabled
	Copyright: 2019, Jan Hamara, 2184316h@student.gla.ac.uk
    Wordpress v5.3
*/
?>

<div id="top6" class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <!--      Do not be afraid to give disabled users instructions      -->
            <span class="modal-close-notice">Click outside this window or press&nbsp; <span class="vr-key">ESC</span> &nbsp;to close this dialog</span>
        </div>
        <div class="modal-body">
            <!--    Main Heading    -->
            <h3>
                <i aria-hidden="true" class="fas fa-envelope" title="Contact icon"></i>
                &nbsp;
                Have a question?
            </h3>

            <!--    Text-to-Speech Switch    -->
            <a id="vo-contact" href="#" class="modal-switch" aria-label="Text-To-Speech Switch">
                <i aria-hidden="true" class="fa fa-volume-up text-to-speech-icon" title="Text-to-Speech Icon"></i>
            </a>

            <hr/>

            <div class="vr-modal-content">
                <p>
                    If you have any questions, if you need help with buying or using VR equipment,
                    or if you want to simply provide feedback on the website,
                    <br/>
                    please use this form to contact me and I will get back to you as fast as possible.
                </p>

                <div id="vr-contact-form">
                    <!------------------------->
                    <!--    Contact Form     -->
                    <!------------------------->
                    <form id="vr-form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 first-input">
                                <input class="form-control" id="name" name="name" placeholder="Type your name..." required/>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <input class="form-control" id="email" name="email" placeholder="Type your email address..." required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                               <textarea id="message" name="message" form="vr-form" class="form-control" rows="5" placeholder="Type your message..."></textarea>
                            </div>
                        </div>
                    </form>

                    <!------------------------->
                    <!--    Submit Button    -->
                    <!------------------------->
                    <div class="modal-close-parent">
                        <a id="form-submit" href="javascript:void(0)" onclick="formSubmit()" class="modal-close-button">
                            <div aria-label="Send the message">
                                <i aria-hidden="true" class="fas fa-envelope" title="Contact icon"></i>
                                &nbsp;Send Message
                            </div>
                        </a>
                    </div>

                    <!-------------------------->
                    <!--   Success Message    -->
                    <!-------------------------->
                    <span class="form-submitted">Your message has been successfully sent! Thank you!</span>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>