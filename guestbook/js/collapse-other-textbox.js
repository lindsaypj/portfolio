// PORTFOLIO PROJECT: Collapsing textbox for Guestbook form
// Author: Patrick Lindsay
// File: collapse-other-textbox.js
// Date: 2/8/22

// Script to add collapse functionality to the "How We Met" select list
// Choosing the "Other" option should display the text box for "please specify"


// Collapse object for meet method textbox
const textBoxCollapse = new bootstrap.Collapse(OTHER_TEXT_BOX_DIV, { // SOURCE: https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/bootstrap-collapse.php
    toggle: false
});

// Function is called when an option is selected
MEET_METHOD_INPUT.onchange = function(event) {
    // Selected option
    const option = MEET_METHOD_INPUT.value;

    // If "Other" is selected, display text box for specification
    if (option === "other") {
        // Make space and then reveal other text box
        HOW_WE_MET_DIV.classList.replace("col-md-12", "col-md-6");

        // If screen is greater than 900px, wait for select width transition to complete
        if (window.matchMedia("(min-width: 768px)").matches) { // SOURCE: https://www.w3schools.com/howto/howto_js_media_queries.asp
            setTimeout( function() {
                textBoxCollapse.show()
                OTHER_TEXT_BOX_DIV.classList.add("mb-3");
            } , 1000);
        }
        else {
            textBoxCollapse.show()
            OTHER_TEXT_BOX_DIV.classList.add("mb-3");
        }

    }
    else {
        // hide text box then fill space
        textBoxCollapse.hide();

        // Wait to expand select list back to col-12
        setTimeout( function() {
            HOW_WE_MET_DIV.classList.replace("col-md-6", "col-md-12");
            } , 1000);
        OTHER_TEXT_BOX_DIV.classList.remove("mb-3");
    }
}
