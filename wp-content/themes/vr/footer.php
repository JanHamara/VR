<?php
/*
    VR Theme | Footer
    Project  | VR for Disabled
	Copyright: 2019, Jan Hamara, 2184316h@student.gla.ac.uk
    Wordpress v5.3
*/
?>

</main>

</div>

<div class="clearfix"></div>

<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="footer-content">
                Website made with &nbsp;
                <i aria-hidden="true" class="fas fa-heart" title="Heart icon"></i>
                &nbsp;by <a href="https://github.com/JanHamara" target="_blank">Jan Hamara</a> &nbsp;|&nbsp; © Copyright 2019
            </div>

            <a href="#site-container" class="footer-link right">
                <div aria-label="Go back to the top of the window">
                    <i aria-hidden="true" class="far fa-arrow-alt-circle-up" title="Arrow pointing up"></i>
                    &nbsp;
                    Return to Top
                </div>
            </a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<!-- This is a script that validates data in contact form -->
<!-- and sends the form if all values are correct -->
<script>
    function isNotEmpty(values, valueNames) {
        var isNotEmpty = true;
        for (x in values) {
            if (values[x] === "") {
                var errorInput = jQuery('#' + valueNames[x]);
                var errorMsg = jQuery("<div class='errorMessage'></div>").text('* Please fill out the information above!');
                errorInput.after(errorMsg);
                isNotEmpty = false;
            }
        }
        return isNotEmpty;
    }
    function validateForm() {
        var name = jQuery('#name').val();
        var email =  jQuery('#email').val();
        var message = jQuery('#message').val();
        var formValues = [name, email, message];
        var formValuesNames = ["name", "email", "message"];
        if (isNotEmpty(formValues, formValuesNames)) {
            return true;
        } else {
            return false;
        }
    }
    function validateMail() {
        var email =  jQuery('#email');
        // This is a Regex expression to test for email address format
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(email.val().match(mailformat)) {
            return true;
        } else {
            var errorMsg = jQuery("<div class='errorMessage'></div>").text('* The email address above is not correct!');
            email.after(errorMsg);
            email.focus();
            return false;
        }
    }
    function formSubmit(value) {
        (jQuery('.errorMessage')).remove();
        // Check if all fields are filled
        if (validateForm()) {
            // Check for validity of email address
            if (validateMail()) {
                var dataString = jQuery('#vr-form').serialize();
                jQuery('.form-submitted').css({"opacity": 1, "transform": "scale(1.1)"});
                jQuery('#vr-form').trigger("reset");
                setTimeout(function () {
                    jQuery('.form-submitted').css({"opacity": 0, "transform": "scale(0.8)"});
                }, 3000);
                jQuery.ajax({
                    type: "POST",
                    url: "send_form.php",
                    data: dataString,
                    success: function() {
                        jQuery('.form-submitted').css({"opacity": 1, "transform": "scale(1.1)"});
                        jQuery('#vr-form').trigger("reset");
                        setTimeout(function () {
                            jQuery('.form-submitted').css({"opacity": 0, "transform": "scale(0.8)"});
                        }, 3000);
                    }
                });
            }
        }
    }
</script>


</body>
</html>