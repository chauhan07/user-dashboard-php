<?php 
    $page_title = 'Register | PHP';
    include 'inc/header.php'; 
?>
<?php 
if (isset($_SESSION['logedin_user_email'])) {
    header('Location: ./');
    exit;
} else{
    /** Insert into table **/
    include 'inc/register.php';
?>
<section class="container-fluid form-box">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-12 col-md-10 col-lg-7">
                <?php if (isset($register_msg) && isset($className)) { ?>
                <div class="afterSubmitMsg alert alert-success text-center <?php echo $className; ?>">
                    <?php 
                        echo $register_msg;
                    ?>
                </div>
                <?php } ?>
                <div class="inner">
                    <form class="row" action="" method="POST" id="ap_register_form" enctype="multipart/form-data">
                        <div class="col-12 col-sm-12 mb-3">
                            <h3 class="hdng">Register</h3>
                        </div>
                        <div class="col-12 col-sm-6 mb-3">
                            <label for="" class="ap_label">
                                First Name
                                <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) { echo $_POST['first_name']; }  ?>">
                            </label>
                        </div>
                        <div class="col-12 col-sm-6 mb-3">
                            <label for="" class="ap_label">
                                Last Name
                                <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) { echo $_POST['last_name']; }  ?>">
                            </label>
                        </div>
                        <div class="col-12 col-sm-6 mb-3">
                            <label for="" class="ap_label">
                                Email Name
                                <input type="email" name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; }  ?>">
                            </label>
                        </div>
                        <div class="col-12 col-sm-6 mb-3">
                            <label for="" class="ap_label">
                                Phone Name
                                <input type="tel" name="phone" value="<?php if(isset($_POST['phone'])) { echo $_POST['phone']; }  ?>">
                            </label>
                        </div>
                        <div class="col-12 col-sm-6 mb-3">
                            <label for="" class="ap_label">
                                Password
                                <input type="password" name="password" value="<?php if(isset($_POST['password'])) { echo $_POST['password']; }  ?>">
                            </label>
                        </div>
                        <div class="col-12 col-sm-6 mb-3">
                            <label for="" class="ap_label">
                                Confirm Password
                                <input type="password" name="confirm_password" value="<?php if(isset($_POST['confirm_password'])) { echo $_POST['confirm_password']; }  ?>">
                            </label>
                        </div>
                        <div class="col-12 col-sm-12 mb-3">
                            <label for="" class="ap_label">
                                Upload Image
                                <input type="file" name="user_image" value="<?php if(isset($_POST['user_image'])) { echo $_POST['user_image']; }  ?>">
                            </label>
                        </div>
                        <div class="col-12 col-sm-12 mb-3">
                            <input type="submit" class="ap_submitBtn" value="Submit" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'inc/footer.php';
}
?>