    <?php
    // $page name to refer to the page loading footer
    ?>

    </div>
</main>



<!-- JQuery, Popper, AND Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<!-- JavaScript -->
<?php
    // include collapsing functionality and validation for form
    if ($page === "guestForm") {
        echo '<script src="js/form-element-constants.js"></script>
              <script src="js/collapse-other-textbox.js"></script>
              <script src="js/collapse-email-format.js"></script>
              <script src="js/validation.js"></script>';
    }
    if ($page === "admin") {
        echo '<script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
              <script src="js/datatable-setup.js"></script>';
    }
?>
</body>
</html>