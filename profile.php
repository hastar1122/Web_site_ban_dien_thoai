
<?php
    include 'inc/header.php';
?>
    <!-- order history start -->
    <section class="order-histry-area section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="order-history">
                        <div class="profile">
                            <div class="order-pro">
                                <div class="pro-img">
                                    <a href="javascript:void(0)"><img src="image/user-ava.jpg" alt="img"
                                            class="img-fluid"></a>
                                </div>
                                <div class="order-name">
                                    <h4>Andrew louise</h4>
                                    <span>Joined April 06, 2021</span>
                                </div>
                            </div>
                            <div class="order-his-page">
                                <ul class="profile-ul">
                                    <li class="profile-li"><a href="order-history.php"><span>Orders</span> <span
                                                class="pro-count">5</span></a></li>
                                    <li class="profile-li"><a href="profile.php" class="active">Profile</a></li>
                                    <li class="profile-li"><a href="pro-wishlist.php"><span>Wishlist</span> <span
                                                class="pro-count">3</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="profile-form">
                            <form>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>First name</label>
                                        <input type="text" name="name" placeholder="First name">
                                    </li>
                                    <li>
                                        <label>Last name</label>
                                        <input type="text" name="name" placeholder="Last name">
                                    </li>
                                </ul>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>E-mail address</label>
                                        <input type="text" name="name" placeholder="E-mail address" required>
                                    </li>
                                    <li>
                                        <label>Phone number</label>
                                        <input type="text" name="name" placeholder="Phone number">
                                    </li>
                                </ul>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>New password</label>
                                        <input type="text" name="name" placeholder="New password">
                                    </li>
                                    <li>
                                        <label>Confirm password</label>
                                        <input type="text" name="name" placeholder="Confirm password">
                                    </li>
                                </ul>
                                <ul class="pro-submit">
                                    <li>
                                        <input type="checkbox" name="name">
                                        <label>Subscribe me to newsletter</label>
                                    </li>
                                    <li>
                                        <a href="profile.php" class="btn btn-style1">Update profile</a>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- order history end -->

<?php
    include 'inc/footer.php';
?>