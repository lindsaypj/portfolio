<!--
    Portfolio Project: Guestbook New Contact Form
    Author: Patrick Lindsay
    File: guestbook.html
    Date: 2/8/22
-->
<?php
    $title = "Guestbook";
    $pageHeader = "Patrick's Guestbook";
    $headerText = "Please fill out the contact form bellow so that we can stay in touch.
                   Upon submission, you will be added to my guestbook.";

    // Add Head to the page
    include("includes/guestbook-header.html");
?>

        <!-- Guestbook form -->
        <form id="newGuestForm" class="bg-dark bg-opacity-75 rounded-3 shadow p-5 text-white d-inline-block"
              action="thankyou.php" method="post">

            <!-- Contact Info -->
            <fieldset id="contactInfo" class="mb-5">

                <legend class="px-5 mb-3">Contact Info</legend>
                <div class="pb-3 mb-4 border-top border-2"></div>

                <!-- Name -->
                <div class="row mx-2 mb-3">
                    <!-- First Name -->
                    <div class="col-6">
                        <label class="form-label" for="fName" >First Name:</label>
                        <input type="text" name="fName" id="fName" class="form-control">
                    </div>
                    <!-- Last Name -->
                    <div class="col-6">
                        <label class="form-label" for="lName">Last Name: </label>
                        <input type="text" name="lName" id="lName" class="form-control">
                    </div>
                </div>

                <!-- Job Title -->
                <div class="row mx-2 mb-3">
                    <div class="col-12">
                        <label class="form-label" for="jobInput">Job Title:</label>
                        <input type="text" name="jobInput" id="jobInput" class="form-control">
                    </div>
                </div>

                <!-- LinkedIn -->
                <div class="row mx-2 mb-3">
                    <div class="col-12">
                        <label for="linkInInput" class="form-label">LinkedIn:</label>
                        <div class="input-group">
                            <input type="text" name="linkInInput" id="linkInInput" class="form-control">
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="row mx-2 mb-3">
                    <div class="col-12">
                        <label for="emailInput" class="form-label">Email: </label>
                        <input type="text" name="emailInput" id="emailInput" class="form-control">
                    </div>
                </div>
            </fieldset>


            <!-- How We Met -->
            <fieldset class="mb-5">

                <legend class="px-5 mb-3">How We Met</legend>
                <div class="pb-3 mb-4 border-top border-2"></div>

                <div class="row m-2">

                    <!-- How We Met -->
                    <div class="col-md-12 col-12 mb-3" id="howWeMetDiv">

                        <label class="form-label" for="howWeMetInput">How did we meet?</label>
                        <select name="howWeMet" id="howWeMetInput" class="form-control">
                            <option value="">Choose...</option>
                            <option value="meetup">Meetup</option>
                            <option value="jobFair">Job Fair</option>
                            <option value="other">Other</option>
                            <option value="notMet">We haven't met yet</option>
                        </select>
                    </div>

                    <!-- Other Specification -->
                    <div id="specify" class="col-md-6 col-12">
                        <div class="collapse collapsingDiv">
                            <label class="form-label" for="meetOtherInput">Please Specify: </label>
                            <input type="text" class="form-control" name="meetOtherInput" id="meetOtherInput">
                        </div>
                    </div>

                    <!-- Additional Message -->
                    <div class="col-12">
                        <label for="message" class="form-label d-block">Message</label>
                        <textarea name="messageInput" id="message" class="form-control w-100"></textarea>
                    </div>
                </div>

            </fieldset>


            <!-- Mailing List -->
            <fieldset id="mailingList" class="mb-5">

                <legend class="px-5 mb-3">Mailing List</legend>
                <div class="pb-3 mb-4 border-top border-2"></div>

                <!-- Add to mailing List -->
                <div class="row m-2">
                    <div class="col-12">
                        <input class="form-check-input" type="checkbox" name="addToMailList" id="addToMailList" value="checked">
                        <label class="form-label" for="addToMailList">Please add me to mailing list!</label>
                    </div>
                </div>

                <!-- Email Format -->
                <div class="row mx-2 collapse collapsingDiv" id="emailFormatDiv">
                    <div class="col-12">
                        <label class="d-block mb-1">Please choose an email format:</label>
                        <div class="form-check d-inline">
                            <label class="form-check-label me-4 ms-2">
                                <input class="form-check-input form-check-inline" type="radio" name="emailFormat" id="htmlFormat" value="htmlFormat">
                                HTML
                            </label>
                        </div>
                        <div class="form-check d-inline">
                            <label class="form-check-label">
                                <input class="form-check-input form-check-inline" type="radio" name="emailFormat" id="textFormat" value="textFormat">
                                Text
                            </label>
                        </div>
                    </div>
                </div>

            </fieldset>

            <div class="pb-3 mb-4 border-top border-2"></div>

            <footer>
                <div class="text-center">
                    <button id="submitBtn" type="submit" class="btn btn-lg border-white text-white">Submit</button>
                </div>
            </footer>
        </form>

<!-- Footer -->
<?php
    $page = "guestForm";
    include("includes/footer.php");
?>