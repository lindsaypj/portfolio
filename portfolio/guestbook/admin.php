<?php
$title = "Admin";
$pageHeader = "Guestbook Admin Panel";
$headerText = "View guestbook entries.";
$activeNav = "admin";

// Add Head to the page
include("includes/guestbook-header.html");
?>

        <!-- Guests table -->
        <div id="adminTableDiv" class="bg-dark bg-opacity-75 rounded-3 shadow px-5 py-4">
            <table id="guestTable" class="datatable cell-border">
                <thead class="text-white">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Job Title</th>
                        <th>LinkedIn</th>
                        <th>Email</th>
                        <th>How We Met</th>
                        <th>Message</th>
                        <th>Mail List</th>
                        <th>Email Format</th>
                        <th>Entry Date</th>
                    </tr>
                </thead>
                <tbody class="text-dark text-shadow-none">
                    <?php
                        // Connect to database
                        include("/home/plindsay/connect.php");
                        if (!$connection) {
                            die("Error connecting to database");
                        }

                        // Get date from database
                        $getDataQuery = 'SELECT * FROM guestbook';

                        $rawData = @mysqli_query($connection, $getDataQuery);

                        if ($rawData) {
                            // Construct each row and add to table
                            foreach ($rawData as $row) {
                                // Assign data to variables
                                $guestID = $row['guest_id'];
                                $fname = $row['first_name'];
                                $lname = $row['last_name'];
                                $jobTitle = $row['job_title'];
                                $linkedIn = $row['linkedin'];
                                $email = $row['email'];
                                $howWeMet = $row['meet'];
                                $message = $row['message'];
                                if ($row['on_mail_list']) $mailList = 'true';
                                else $mailList = 'false';
                                $emailFormat = $row['email_format'];
                                $formDate = $row['entry_date'];

                                // Print the row into the table
                                echo "<tr>
                                    <td>$guestID</td>      
                                    <td>$fname</td>
                                    <td>$lname</td>      
                                    <td>$jobTitle</td>      
                                    <td>$linkedIn</td>      
                                    <td>$email</td>      
                                    <td>$howWeMet</td>      
                                    <td>$message</td>      
                                    <td>$mailList</td>
                                    <td>$emailFormat</td>
                                    <td>$formDate</td> 
                                </tr>";
                            }
                        }

                    ?>
                </tbody>
            </table>
        </div>


    <!-- Footer -->
<?php
    $page = "admin";
    include("includes/footer.php");
?>
