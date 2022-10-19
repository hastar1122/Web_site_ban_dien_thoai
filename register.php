<?php
    include 'inc/header.php';
?>
    
    <!-- login start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="register-area">
                        <div class="register-box">
                            <h1>Create account</h1>
                            <p>Please register below account detail</p>
                            <form>
                                <input type="text" name="name" placeholder="Firts name">
                                <input type="text" name="l-name" placeholder="Last name">
                                <input type="text" name="email" placeholder="Email">
                                <input type="text" name="password" placeholder="Password">
                                <a href="account.php" class="btn-style1">Create</a>
                            </form>
                        </div>
                        <div class="register-account">
                            <h4>Already an account holder?</h4>
                            <a href="login.php" class="ceate-a">Log in</a>
                            <div class="register-info">
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