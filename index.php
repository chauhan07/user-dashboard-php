<?php $page_title = 'User Dashboard | PHP'; ?>
<?php include 'inc/header.php'; ?>
<section class="container-fluid user-dashboard">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <div class="inner sideBar">
                    <div class="userInfo">
                        <ul>
                            <li>
                                <img src="./assets/uploads/profile-309149471-profile.png" alt="">
                                <h4>Hi, Aditya Chauhan</h4>
                            </li>
                        </ul>
                    </div>
                    <div class="menuItems">
                        <ul>
                            <li>
                                <a href="#" class="active">Dashboard</a>
                            </li>
                            <li>
                                <a href="#">Projects</a>
                            </li>
                            <li>
                                <a href="#">Task List</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <a href="#">Notification</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-9">
                <div class="inner">
                    <div class="profile-card">
                        <h4>
                            Profile Information
                            <a href="#">Edit Profile</a>
                        </h4>
                        <div class="userInfoTable">
                            <div class="repeat">
                                <div class="box">
                                    Name
                                </div>
                                
                                <div class="box">
                                    <?php echo $ap_user_data['first_name'].' '.$ap_user_data['lastName']; ?>
                                </div>
                            </div>
                            <div class="repeat">
                                <div class="box">
                                    Email
                                </div>
                                
                                <div class="box">
                                    <?php echo $ap_user_data['email']?>
                                </div>
                            </div>
                            <div class="repeat">
                                <div class="box">
                                    Phone
                                </div>
                                
                                <div class="box">
                                    <?php echo $ap_user_data['phone']?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'inc/footer.php';?>