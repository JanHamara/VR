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
var accessibilityLegend = false;

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
            accessibilityLegend = true;
        }, 500);
    });

    // If they click NO, disable VoiceOver and close the prompt
    jQuery("#vo-off").on('click', function () {
        jQuery("#voiceover-support-prompt").modal('hide');
        VoiceOver = false;
        setTimeout(function () {
            jQuery("#vr-accessibility-legend").modal('show');
            accessibilityLegend = true;
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
                speechSynthesis.cancel();
            }
        }

        if (vrMenu2On === true) {
            if (testEsc()) {
                jQuery("#HistoryOfVR").modal('hide');
                vrMenu2On = false;
                speechSynthesis.cancel();
            }
        }

        if (vrMenu3On === true) {
            if (testEsc()) {
                jQuery("#DevicesVR").modal('hide');
                vrMenu3On = false;
                speechSynthesis.cancel();
            }
        }

        if (vrMenu4On === true) {
            if (testEsc()) {
                jQuery("#AppsVR").modal('hide');
                vrMenu4On = false;
                speechSynthesis.cancel();
            }
        }

        if (vrMenu5On === true) {
            if (testEsc()) {
                jQuery("#DonateVR").modal('hide');
                vrMenu5On = false;
                speechSynthesis.cancel();
            }
        }

        if (vrMenu6On === true) {
            if (testEsc()) {
                jQuery("#ContactVR").modal('hide');
                vrMenu6On = false;
                speechSynthesis.cancel();
            }
        }

        if (accessibilityLegend === true) {
            if (testEsc()) {
                jQuery("#vr-accessibility-legend").modal('hide');
                accessibilityLegend = false;
            }
        }

        function testEsc() {
            let keyCode = e.key;
            if (keyCode === "Escape") {
                return true;
            }
        }
    };

    jQuery("#legend-close").on('click', function() {
        jQuery("#vr-accessibility-legend").modal('hide');
    });

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

    //
    //
    // Menu Items Speech Activators
    //
    //

    jQuery("#vo-whatisvr").on('click', function () {
        speechSynthesis.speak(new SpeechSynthesisUtterance('What is Virtual Reality? Virtual Reality is a form of technology, that uses special devices and programs to create a digital world, separate from our real world, that can make you feel like you are in a real environment.\n' +
            '\n' +
            'This digital world is presented to you on a device worn on your head, that could be described as special kind of glasses. This device shows you a digital environment around you in such a way, that makes your eyes and brain believe it is real world.\n' +
            '\n' +
            'Picture of Virtual Reality Headset\n' +
            'Image 1 | Virtual Reality Headset\n' +
            'This device can work in some cases only by itself, or connected to a computer. In addition to the head device, you can also use two controllers that are held in your hands. These controllers can record movement of your hands and use this to reproduce movement of your hands inside the virtual world.'));
    });


    jQuery("#vo-history").on('click', function () {
        speechSynthesis.speak(new SpeechSynthesisUtterance('History of Virtual Reality. The origin of the concept of Virtual Reality is not totally clear. Some people consider it to come from Stanley Weinbaum\'s science fiction story Pygmalion\'s Spectacles. In this story, the main character wears a pair of goggles which transport him into a fictional world, which stimulates his senses and displays digital recordings.\n' +
            '\n' +
            'However, the first real developments of virtual reality technology started in 1830s, when Sir Charles Wheatstone used his research to construct the stereoscope. In 1956, a cinematographer Morton Heilig created Sensorama, the first virtual reality machine. This machine was a large booth, where the user could sit on a vibrating chair and enjoy six short films on three dimensional screen. The machine also added other factors to stimulate other senses, such as smell, audio or effects like wind.\n' +
            '\n' +
            'Then later in 1965, a computer scientist Ivan Sutherland, created a head mounted device that was said to replicate reality so well that the user would not be able to differentiate from actual reality. It was called Ultimate Display and it allowed user to interact with objects in virtual reality. His work on this device is widely considered as one of the most important steps in virtual reality technology development.'));
    });

    jQuery("#vo-devices").on('click', function () {
        speechSynthesis.speak(new SpeechSynthesisUtterance('Virtual Reality Devices. If you are interested in learning about various virtual reality devices, or if you want to compare their functionality\n' +
            'and find out which one is the best for you, feel free to use this simple list of various virtual reality devices available on the market.'));
    });

    jQuery("#vo-apps").on('click', function () {
        speechSynthesis.speak(new SpeechSynthesisUtterance('Virtual Reality Applications. Do you want to know what virtual reality application are available for various devices at the moment? Do you want to know if you can swim in the ocean in the virtual reality, drive a car on your favourite cirucit, or if you can visit your dream destination?\n' +
            '\n' +
            'Go ahead and check out this comprehensive list of Virtual Reality application, and find out ones you would like to try!'));
    });

    jQuery("#vo-donate").on('click', function () {
        speechSynthesis.speak(new SpeechSynthesisUtterance('Help disabled people see the beauty of our world.\n' +
            '\n' +
            'Many of us cannot imagine what life with a disability feels like, whether we talk about a movement impairment, learning disability, autism, dyslexia or any other, a disability always changes the life of the individual to a nightmare, compared to living a normal life.\n' +
            '\n' +
            'Some individuals cope with their disability amazingly well and are an inspiration to all of us, some of them are not so fortunate. Despite that, each and every one of these individuals deserve a chance for better life and if we can do anything to help them in this quest, we definitely should do so.\n' +
            '\n' +
            'As a very keen traveler myself and a student of Digital Media, I have created this website to be in accordance with the criteria of Web Accessibility, as defined by W3C Consortium. It is meant to be usable by all people with various disabilities and it\'s purpose is to explain to them what Virtual Reality technology is, how they can use it, how they can buy equipment for it, what applications there are available, and so on.\n' +
            '\n' +
            'However, even if I manage to reach a wider audience of disabled people with this website, VR equipment is currently still extremely expensive and thus I have decided to add a donation option to the website, where people who want to help the cause, could donate a voluntary amount of money towards VR equipment for disabled people. Please use button below, if you wish to donate.'));
    });

    jQuery("#vo-contact").on('click', function () {
        speechSynthesis.speak(new SpeechSynthesisUtterance('If you have any questions, if you need help with buying or using VR equipment, or if you want to simply provide feedback on the website,\n' +
            'please use this form to contact me and I will get back to you as fast as possible.'));
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

