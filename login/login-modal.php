
<!-- LOGIN Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Admin Login</h5>
            </div>

            <form action="#" method="post" class="m-0 px-3 text-shadow-none w-100">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php if (isset($username)) { echo $username;} ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" >
                    </div>
                    <?php
                        if (!$validLogin) {
                            echo "<p class='error'>$errorMessage</p>";
                        }
                    ?>

                </div>
                <div class="modal-footer">
                    <a class="btn btn-secondary" href="<?php echo $cancelLink; ?>">Cancel</a>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>

            </form>
        </div>
    </div>
</div>
