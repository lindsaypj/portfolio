<!--
    Variables to declare for including this file:
    $activeNav  nav tab to display as active
-->

<nav class="navbar navbar-dark bg-dark bg-opacity-75 navbar-expand-sm container-fluid sticky-top">
    <div class="container-fluid px-5">
        <div class="navbar-nav">
            <a class="nav-item nav-link <?php if($activeNav === "resume") echo "active"; ?>"
               href="https://plindsay.greenriverdev.com/305/portfolio/resume/resume.php">Resume</a>
            <a class="nav-item nav-link <?php if($activeNav === "guestbook") echo "active"; ?>"
               href="//plindsay.greenriverdev.com/305/portfolio/guestbook/guestbook.php">Guestbook</a>
            <a class="nav-item nav-link <?php if($activeNav === "admin") echo "active"; ?>"
               href="//plindsay.greenriverdev.com/305/portfolio/guestbook/admin.php">Admin</a>
            <a class="nav-item nav-link <?php if($activeNav === "github") echo "active"; ?>"
               href="//github.com/lindsaypj/portfolio">GitHub</a>
        </div>
    </div>
</nav>