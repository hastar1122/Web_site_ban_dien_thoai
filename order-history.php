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
                                    <li class="profile-li"><a href="order-history.php"
                                            class="active"><span>Orders</span> <span class="pro-count">5</span></a></li>
                                    <li class="profile-li"><a href="profile.php">Profile</a></li>                                    
                                    <li class="profile-li"><a href="pro-wishlist.php"><span>Wishlist</span> <span
                                                class="pro-count">3</span></a></li>                                    
                                </ul>
                            </div>
                        </div>
                        <div class="order-info">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Order #</th>
                                        <th>Date purchased</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>78A643CD409</td>
                                        <td>April 08, 2021</td>
                                        <td class="canceled">Canceled</td>
                                        <td>$760.50</td>
                                    </tr>
                                    <tr>
                                        <td>34VB5540K83</td>
                                        <td>April 11, 2021</td>
                                        <td class="process">In progress</td>
                                        <td>$760.50</td>
                                    </tr>
                                    <tr>
                                        <td>78A643CD409</td>
                                        <td>April 15, 2021</td>
                                        <td class="delayed">Delayed</td>
                                        <td>$760.50</td>
                                    </tr>
                                    <tr>
                                        <td>78A643CD409</td>
                                        <td>April 18, 2021</td>
                                        <td class="delivered">Delivered</td>
                                        <td>$760.50</td>
                                    </tr>
                                    <tr>
                                        <td>78A643CD409</td>
                                        <td>April 21, 2021</td>
                                        <td class="delivered">Delivered</td>
                                        <td>$760.50</td>
                                    </tr>
                                </tbody>
                            </table>
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