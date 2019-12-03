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

    setTimeout(function() {
        jQuery("#voiceover-support-prompt").modal('show');
    }, 500);

    jQuery("#vo-on").on('click', function() {
        jQuery("#voiceover-support-prompt").modal('hide');
        VoiceOver = true;

        if(VoiceOver === true) {
            speechSynthesis.speak(new SpeechSynthesisUtterance('Virtual Reality. A new chance for people with disabilities.'));
        } else {
            alert('Sorry, but your browser does not seem to work with voice support! Please use Google Chrome to be able to use text-to-speech buttons!');
        }
    });

    jQuery("#vo-off").on('click', function() {
        jQuery("#voiceover-support-prompt").modal('hide');
        speechSynthesisInstance.cancel();
        VoiceOver = false;
    });

    // speechSynthesis.speak(new SpeechSynthesisUtterance("Virtual Reality, a new chance for people with disability"));

    // Function to open accessibility menu by clicking on button
    jQuery("#vr-accessibility-menu-link").on('click', function() {
        let accessibilityMenu = jQuery("#vr-accessibility-menu");

        if (accessibilityMenuOn === false) {
            showAccessibilityMenu(accessibilityMenu);
        } else {
            hideAccessibilityMenu(accessibilityMenu);
        }
    });

    jQuery("#Link01").on('click', function() {
        if (vrMenu1On === false) {
            vrMenu1On = true;
        }
    });

    jQuery("#Link02").on('click', function() {
        if (vrMenu2On === false) {
            vrMenu2On = true;
        }
    });

    jQuery("#Link03").on('click', function() {
        if (vrMenu3On === false) {
            vrMenu3On = true;
        }
    });

    jQuery("#Link04").on('click', function() {
        if (vrMenu4On === false) {
            vrMenu4On = true;
        }
    });

    jQuery("#Link05").on('click', function() {
        if (vrMenu5On === false) {
            vrMenu5On = true;
        }
    });

    jQuery("#Link06").on('click', function() {
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

