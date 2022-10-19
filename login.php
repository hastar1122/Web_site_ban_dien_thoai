<?php
    include 'inc/header.php';
    include 'classes/userlogin.php'
?>
<?php
    $class = new userlogin();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $login_check = $class->login_user($username, $password);
   }
?>
    <!-- login start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="login-area">
                        <div class="login-box">
                            <h1>Login</h1>
                            <p>Please login below account detail</p>
                            <form action="login.php" method="POST">
                                <label>Username</label>
                                <input type="text" name="username" placeholder="Username">
                                <label>Password</label>
                                <input type="text" name="password" placeholder="Password">

                                <span> 
                                    <?php
                                        if (isset($login_check)) {
                                            echo $login_check;
                                        }
                                    ?>
                                </span>
                                <input type="submit" value="Sign in">
                                <a href="login.php" class="btn-style1">Sign in</a>
                                <a href="forgot-password.php" class="re-password">Forgot your password?</a>
                            </form>
                        </div>
                        <div class="login-account">
                            <h4>Don't have an account?</h4>
                            <a href="register.php" class="ceate-a">Create account</a>
                            <div class="login-info">
                                <a href="terms-conditions.php" class="terms-link"><span>*</span> Terms &
                                    conditions.</a>
                                <p>Your privacy and security are important to us. For more information on how we use
                                    your data read our <a href="privacy-policy.php">privacy policy</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login end -->

<?php
    include 'inc/footer.php';
?>