// PORTFOLIO PROJECT: Guestbook form validation
// Author: Patrick Lindsay
// File: validation.js
// Date: 2/8/22

// This is the script validates the New Contact form inputs on submission

// Regex Email validation // SOURCE: https://stackoverflow.com/questions/201323/how-can-i-validate-an-email-address-using-a-regular-expression?page=1&tab=votes#tab-top
const EMAIL_REGEX = new RegExp("(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|\"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\\\[\x01-\x09\x0b\x0c\x0e-\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\\])");


// If form passes validation, submit to thank you page
GUEST_FORM.onsubmit = validateForm;

// Function to validate the Guestbook form inputs
function validateForm() {
    // Clear all Errors
    clearErrors();

    // Validation Tracker
    let isValid = true;

    // Validate first Name
    if (!validateEmpty(FIRST_NAME_INPUT, FIRST_NAME_INPUT.parentElement, "First Name")){
        isValid = false;
    }
    // Validate last name
    if (!validateEmpty(LAST_NAME_INPUT, LAST_NAME_INPUT.parentElement, "Last Name")){
        isValid = false;
    }


    // Validate LinkedIn web address
    if (LINKEDIN_INPUT.value !== "") {
        if (!(LINKEDIN_INPUT.value.startsWith("https://www.linkedin.com/"))) {
            createNewError(LINKEDIN_INPUT.parentElement.parentElement,
                `LinkedIn Address must start with "https://www.linkedin.com/in/"`);

            isValid = false;
        }
    }

    // Validate Email (if applicable)
    if (EMAIL_INPUT.value !== "") {
        if (!EMAIL_REGEX.test(EMAIL_INPUT.value)) {
            createNewError(EMAIL_INPUT.parentElement, 'Invalid email address');
            EMAIL_INPUT.classList.add("inputError");

            isValid = false;
        }
    }
    else if (MAIL_LIST_CHECK.checked) {
        createNewError(EMAIL_INPUT.parentElement, 'Email is required to be added to the mailing list');
        EMAIL_INPUT.classList.add("inputError");
        isValid = false;
    }
    if (MAIL_LIST_CHECK.checked) {
        // Validate email format
        if ((!(HTML_FORMAT.checked)) && (!(TEXT_FORMAT.checked))) {
            createNewError(EMAIL_FORMAT_DIV, "Email format is required to be added to the mailing list");
            isValid = false;
        }
    }

    // Validate "How we met"
    if (!validateEmpty(MEET_METHOD_INPUT, HOW_WE_MET_DIV, "How we met")) {
        isValid = false;
    }
    else {
        // if "Other" is selected, then the "specify" is also required
        if (MEET_METHOD_INPUT.value === "other") {
            console.log("Other is selected")
            if (!validateEmpty(MEET_OTHER_INPUT, MEET_OTHER_INPUT.parentElement, "How we met")) {
                isValid = false;
            }
        }
    }

    return isValid;
}


// Function to validate if an input has an assigned value
function validateEmpty(input, errorParentDiv, label) {
    if (input.value === "") {
        createNewError(errorParentDiv, emptyErrorMsg(label));
        input.classList.add("inputError");
        return false;
    }
    else {
        return true;
    }
}


// Function to generate empty field error message
function emptyErrorMsg(label) {
    // Construct message and create error
    return `${label} is a Required Field`;
}


// Function to create an error
function createNewError(container, errorText) {
    // Create error elements
    let errorDiv = document.createElement("div");
    let error = document.createElement("span");

    // Add error Text:
    error.textContent = errorText;

    // Add error styling
    errorDiv.classList.add("error");

    //Combine Error elements
    errorDiv.appendChild(error);

    // Place error on page
    container.appendChild(errorDiv);
}


// Function to remove all the errors on the page
function clearErrors() {
    // Get a list of errors
    let errors = document.getElementsByClassName("error");

    // Remove all errors
    for (let i = errors.length - 1; i >= 0; i--) {
        errors[i].remove();
    }

    // Remove all inputError classes
    let inputErrors = document.getElementsByClassName("inputError");

    for (let i = inputErrors.length - 1; i >= 0; i--) {
        inputErrors[i].classList.remove("inputError");
    }
}