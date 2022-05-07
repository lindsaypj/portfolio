

<div class="main-block bg-dark bg-opacity-75 rounded-3 shadow p-5 text-white d-inline-block">

    <h2 class="px-5 mb-3">Summary</h2>
    <div class="pb-3 mb-4 border-top border-2"></div>

    <?php
    // Print summary info
    echo "<h4 class='px-5 mb-3'>Contact Info</h4>";
    echo "<h5>".$first." ".$last."</h5>";
    // JOB TITLE
    if ($job != 'NULL') {
        echo "<h5>".substr($job, 1, strlen($job) -2)."</h5>";
    }
    // LINKEDIN
    if ($linkedin != 'NULL') {
        echo "<h5>".substr($linkedin, 1, strlen($linkedin) -2)."</h5>";
    }
    // EMAIL
    if ($email != 'NULL') {
        echo "<h5>".substr($email, 1, strlen($email) -2)."</h5>";
    }
    echo "<h4 class='px-5 mb-3 mt-4'>How did we meet?</h4>";

    // HOW WE MET
    if ($howWeMet != 'NULL') {
        echo "<h5>".formatHowWeMet($howWeMet)."</h5>";
    }
    // MESSAGE
    $message = $_POST['messageInput'];
    if ($message != '') {
        echo "<h5>".$message."</h5>";
    }
    echo "<h4 class='px-5 mb-3 mt-4'>Mailing List</h4>";
    // MAILING LIST
    if ($mailList === "true") {
        echo "<h5 class='font-weight-normal'>Added to mailing list!</h5>";
    }
    else {
        echo "<h5>Not on mailing list!</h5>";
    }
    // EMAIL FORMAT
    if ($emailFormat != 'NULL') {
        echo "<h5>Format: ".substr($emailFormat, 1, strlen($emailFormat) -2)."</h5>";
    }


    ?>
</div>