<?php
/*
    Variables to declare for including this file:
    $activeNav  nav tab to display as active
*/
?>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark bg-opacity-90 navbar-expand-sm container-fluid sticky-top shadow">
    <div class="container-fluid px-sm-5">
        <div class="navbar-nav w-100 d-flex">
            <!-- Menu Icon -->
            <label class="nav-item text-white mb-1 mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 16 16" class="d-sm-none" id="navMenuButton">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </label>
            <!-- Nav Options -->
            <ul id="navMenu" class="nav d-none d-sm-flex flex-column flex-sm-row navbar-expand-sm">
                <li>
                    <!-- Home -->
                    <a class="nav-item nav-link <?php if($activeNav === "home") echo "active"; ?>"
                       href="//plindsay.greenriverdev.com/portfolio/index.php">Home</a>
                </li>
                <li>
                    <!-- Guestbook Form -->
                    <a class="nav-item nav-link <?php if($activeNav === "guestbook") echo "active"; ?>"
                       href="//plindsay.greenriverdev.com/portfolio/guestbook/guestbook.php">Guestbook</a>
                </li>
                <li>
                    <!-- My Links Dropdown -->
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="myLinksAnchor" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            My Links
                        </a>
                        <ul class="dropdown-menu bg-dark bg-opacity-90 px-2 mt-2 shadow" aria-labelledby="myLinksAnchor">
                            <!-- GitHub -->
                            <li><a class="nav-item nav-link" href="//github.com/lindsaypj" target="_blank">GitHub
                                    <!-- Source: https://github.com/ -->
                                    <svg height="25" aria-hidden="true" viewBox="0 0 16 16" version="1.1" width="35" data-view-component="true">
                                        <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                                    </svg>
                                </a></li>

                            <!-- LinkedIn -->
                            <li><a class="nav-item nav-link" href="//www.linkedin.com/in/lindsaypj/" target="_blank">LinkedIn
                                    <!-- Source: https://www.linkedin.com/ -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="25" viewBox="0 0 34 34">
                                        <path d="M34,2.5v29A2.5,2.5,0,0,1,31.5,34H2.5A2.5,2.5,0,0,1,0,31.5V2.5A2.5,2.5,0,0,1,2.5,0h29A2.5,2.5,0,0,1,34,2.5ZM10,13H5V29h5Zm.45-5.5A2.88,2.88,0,0,0,7.59,4.6H7.5a2.9,2.9,0,0,0,0,5.8h0a2.88,2.88,0,0,0,2.95-2.81ZM29,19.28c0-4.81-3.06-6.68-6.1-6.68a5.7,5.7,0,0,0-5.06,2.58H17.7V13H13V29h5V20.49a3.32,3.32,0,0,1,3-3.58h.19c1.59,0,2.77,1,2.77,3.52V29h5Z"></path>
                                    </svg>
                                </a></li>

                            <!-- Resume -->
                            <li><a class="nav-item nav-link" href="https://plindsay.greenriverdev.com/portfolio/resume/resume.php" target="_blank">Resume</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <!-- Admin -->
                    <?php if (empty($_SESSION['username'])) {
                        // NOT LOGGED IN
                        echo "<a class='nav-item nav-link' data-bs-toggle='modal' data-bs-target='#loginModal'
                    data-bs-keyboard='false' aria-labelledby='loginModalLabel' aria-hidden='true' href='#'>Admin</a>";
                    } else {
                        // LOGGED IN
                        $activeClass = "";
                        if ($activeNav === "admin") $activeClass = "active";
                        echo "<a class='nav-item nav-link $activeClass'
                    href='//plindsay.greenriverdev.com/portfolio/guestbook/admin.php'>Admin</a>";
                    }?>
                </li>
                <li class="nav-item float-end">
                    <!-- Logout -->
                    <?php
                    if (!empty($_SESSION['username'])) {
                        echo "<a id='logoutLink' class='nav-link float-start'
                    href='//plindsay.greenriverdev.com/portfolio/redirects/logout.php'>Logout</a>";
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
