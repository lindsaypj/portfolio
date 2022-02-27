// PORTFOLIO PROJECT: Guestbook form validation
// Author: Patrick Lindsay
// File: validation.js
// Date: 2/8/22

// This is a JavaScript file to store all the Form elements to be accessed from
// the various scripts

// FORM INPUTS                                                               // USES
const MEET_METHOD_INPUT = document.getElementById("howWeMetInput"); // validation.js, collapse-other-textbox.js
const MEET_OTHER_INPUT = document.getElementById("meetOtherInput"); // validation.js
const FIRST_NAME_INPUT = document.getElementById("fName");          // validation.js
const LAST_NAME_INPUT = document.getElementById("lName");           // validation.js
const LINKEDIN_INPUT = document.getElementById("linkInInput");      // validation.js
const EMAIL_INPUT = document.getElementById("emailInput");          // validation.js
const MAIL_LIST_CHECK = document.getElementById("addToMailList");   // validation.js, collapse-email-format.js
const HTML_FORMAT = document.getElementById("htmlFormat");          // validation.js
const TEXT_FORMAT = document.getElementById("textFormat");          // validation.js
                                                                             //
// FORM ELEMENT                                                              //
const GUEST_FORM = document.getElementById("newGuestForm");         // validation.js
                                                                             //
// CONTAINERS                                                                //
const HOW_WE_MET_DIV = MEET_METHOD_INPUT.parentElement;                      // collapse-other-textbox.js
const OTHER_TEXT_BOX_DIV = MEET_OTHER_INPUT.parentElement;                   // collapse-other-textbox.js
const EMAIL_FORMAT_DIV = document.getElementById("emailFormatDiv"); // validation.js, collapse-email-format.js