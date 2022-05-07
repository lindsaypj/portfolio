// PORTFOLIO PROJECT: Collapsing option for Guestbook form
// Author: Patrick Lindsay
// File: collapse-email-format.js
// Date: 2/8/22

// Script to add collapse functionality to the "Mailing List" options
// Checking the "Add to mailing list" checkbox should display the email
// format radio buttons.


// Collapse object for meet method textbox
const emailCollapse = new bootstrap.Collapse(EMAIL_FORMAT_DIV, { // SOURCE: https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/bootstrap-collapse.php
    toggle: false
});

// Add listener to display radio buttons
MAIL_LIST_CHECK.onchange = function() {
    // Check if the mailing list checkbox is checked
    if (MAIL_LIST_CHECK.checked) {
        emailCollapse.show();
    }
    else {
        emailCollapse.hide();
    }
}