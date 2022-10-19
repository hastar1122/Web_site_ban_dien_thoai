<?php
    include 'inc/header.php';
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
                            /*đây là chỗ đăng nhập*/
                            <form>
                                <label>Email</label>
                                <input type="text" name="email" placeholder="Email">
                                <label>Password</label>
                                <input type="text" name="password" placeholder="Password">
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