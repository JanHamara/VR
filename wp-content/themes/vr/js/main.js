// main.js

// Webpack
require('./bootstrap.min');
require('../css/bootstrap-theme.min.css');
require('../css/bootstrap.min.css');
require('../css/all.css');
require('./all');
// require('./responsivevoice');
require('../style.less');

var accessibilityMenuOn = false;
var vrMenu1On = false;
var vrMenu2On = false;
var vrMenu3On = false;
var vrMenu4On = false;
var vrMenu5On = false;
var vrMenu6On = false;
var VoiceOver = false;

jQuery( document ).ready(function() {

    // Show a VoiceOver Prompt
    setTimeout(function () {
        jQuery("#voiceover-support-prompt").modal('show');
    }, 500);

    // Let blind people select, that they want to use VoiceOver
    speechSynthesis.speak(new SpeechSynthesisUtterance('Hello, would you like to enable VoiceOver support? You can click tab button, to select between yes or no, and press ENTER to confirm your selection.'));

    jQuery("#vo-on").on('focus', function() {
        speechSynthesis.speak(new SpeechSynthesisUtterance('Yes, I want to use VoiceOver'));
    });

    jQuery("#vo-off").on('focus', function() {
        speechSynthesis.speak(new SpeechSynthesisUtterance("No, I don't need VoiceOver"));
    });

    // If they click YES, turn on VoiceOver, close the prompt and play welcome message
    jQuery("#vo-on").on('click', function () {
        jQuery("#voiceover-support-prompt").modal('hide');
        VoiceOver = true;

        if (VoiceOver === true) {
            speechSynthesis.speak(new SpeechSynthesisUtterance('Virtual Reality. A new chance for people with disability.'));
        } else {
            alert('Sorry, but your browser does not seem to work with voice support! Please use Google Chrome to be able to use text-to-speech buttons!');
        }

        setTimeout(function () {
            jQuery("#vr-accessibility-legend").modal('show');
        }, 500);
    });

    // If they click NO, disable VoiceOver and close the prompt
    jQuery("#vo-off").on('click', function () {
        jQuery("#voiceover-support-prompt").modal('hide');
        VoiceOver = false;
        setTimeout(function () {
            jQuery("#vr-accessibility-legend").modal('show');
        }, 500);
    });

    // If they clink on sound button in Accessibility Legend modal play the text
    jQuery("#legend2").on('click', function () {
        speechSynthesis.speak(new SpeechSynthesisUtterance('Click these icons to play a spoken version of the text.'));
    });

    // Function to open accessibility menu by clicking on button
    jQuery("#vr-accessibility-menu-link").on('click', function () {
        let accessibilityMenu = jQuery("#vr-accessibility-menu");

        if (accessibilityMenuOn === false) {
            showAccessibilityMenu(accessibilityMenu);
        } else {
            hideAccessibilityMenu(accessibilityMenu);
        }
    });

    //
    //  Opening Menu Items Functionality
    //

    jQuery("#Link01").on('click', function () {
        if (vrMenu1On === false) {
            vrMenu1On = true;
        }
    });

    jQuery("#Link02").on('click', function () {
        if (vrMenu2On === false) {
            vrMenu2On = true;
        }
    });

    jQuery("#Link03").on('click', function () {
        if (vrMenu3On === false) {
            vrMenu3On = true;
        }
    });

    jQuery("#Link04").on('click', function () {
        if (vrMenu4On === false) {
            vrMenu4On = true;
        }
    });

    jQuery("#Link05").on('click', function () {
        if (vrMenu5On === false) {
            vrMenu5On = true;
        }
    });

    jQuery("#Link06").on('click', function () {
        if (vrMenu6On === false) {
            vrMenu6On = true;
        }
    });

    // Function to close any open menu by clicking on ESC button when the menu is open
    document.onkeydown = function (e) {
        let accessibilityMenu = jQuery("#vr-accessibility-menu");

        if (accessibilityMenuOn === true) {
            let keyCode = e.key;
            if (keyCode === "Escape") {
                hideAccessibilityMenu(accessibilityMenu);
            }
        } else {
            // do nothing
        }

        if (vrMenu1On === true) {
            if (testEsc()) {
                jQuery("#WhatIsVR").modal('hide');
                vrMenu1On = false;
            }
        }

        if (vrMenu2On === true) {
            if (testEsc()) {
                jQuery("#HistoryOfVR").modal('hide');
                vrMenu2On = false;
            }
        }

        if (vrMenu3On === true) {
            if (testEsc()) {
                jQuery("#DevicesVR").modal('hide');
                vrMenu3On = false;
            }
        }

        if (vrMenu4On === true) {
            if (testEsc()) {
                jQuery("#AppsVR").modal('hide');
                vrMenu4On = false;
            }
        }

        if (vrMenu5On === true) {
            if (testEsc()) {
                jQuery("#DonateVR").modal('hide');
                vrMenu5On = false;
            }
        }

        if (vrMenu6On === true) {
            if (testEsc()) {
                jQuery("#ContactVR").modal('hide');
                vrMenu6On = false;
            }
        }

        function testEsc() {
            let keyCode = e.key;
            if (keyCode === "Escape") {
                return true;
            }
        }
    };

    //
    //  Text-to-Speech Button Activators
    //

    jQuery("#vo-link01").on('click', function () {
        speechSynthesis.speak(new SpeechSynthesisUtterance('What is Virtual Reality?'));
        speechSynthesis.speak(new SpeechSynthesisUtterance('Click to learn about virtual reality technology and how you can use it.'));
    });

    jQuery("#vo-link02").on('click', function () {
        speechSynthesis.speak(new SpeechSynthesisUtterance('History of Virtual Reality'));
        speechSynthesis.speak(new SpeechSynthesisUtterance('Click to learn about history of virtual reality technology.'));
    });

    jQuery("#vo-link03").on('click', function () {
        speechSynthesis.speak(new SpeechSynthesisUtterance('Virtual Reality Devices'));
        speechSynthesis.speak(new SpeechSynthesisUtterance('Click to browse or buy various virtual reality devices.'));
    });

    jQuery("#vo-link04").on('click', function () {
        speechSynthesis.speak(new SpeechSynthesisUtterance('Virtual Reality Applications'));
        speechSynthesis.speak(new SpeechSynthesisUtterance('Click to browse a list of applications, you can play in virtual reality.'));
    });

    jQuery("#vo-link05").on('click', function () {
        speechSynthesis.speak(new SpeechSynthesisUtterance('Make a donation'));
        speechSynthesis.speak(new SpeechSynthesisUtterance('Click if you want to donate money or buy VR device for disabled people.'));
    });

    jQuery("#vo-link06").on('click', function () {
        speechSynthesis.speak(new SpeechSynthesisUtterance('Have a question?'));
        speechSynthesis.speak(new SpeechSynthesisUtterance('Click if you want to ask a question, or if you require any help.'));
    });
});

function showAccessibilityMenu(accessibilityMenu) {
    accessibilityMenu.css({'display': 'block'});
    setTimeout(function() {
        accessibilityMenu.css({'opacity':1});
    }, 100);
    accessibilityMenuOn = true;
}

function hideAccessibilityMenu(accessibilityMenu) {
    accessibilityMenu.css({'opacity':0});
    setTimeout(function() {
        accessibilityMenu.css({'display': 'none'});
    }, 500);
    accessibilityMenuOn = false;
}

