// main.js

// Webpack
require('./bootstrap.min');
require('../css/bootstrap-theme.min.css');
require('../css/bootstrap.min.css');
require('../style.less');
require('../css/all.css');
require('./all');

var accessibilityMenuOn = false;

jQuery( document ).ready(function() {

    // Function to open accessibility menu by clicking on button
    jQuery("#vr-accessibility-menu-link").on('click', function() {
        let accessibilityMenu = jQuery("#vr-accessibility-menu");

        if (accessibilityMenuOn === false) {
            showAccessibilityMenu(accessibilityMenu);
        } else {
            hideAccessibilityMenu(accessibilityMenu);
        }
    });

    // Function to close accessibility menu by clicking on ESC button when the menu is open
    document.onkeydown = function (e) {
        let accessibilityMenu = jQuery("#vr-accessibility-menu");

        if (accessibilityMenuOn === true) {
            let keyCode = e.key;
            if (keyCode === "Escape") {
                hideAccessibilityMenu(accessibilityMenu);
            }
        } else {
            // do nothing if menu is closed
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

