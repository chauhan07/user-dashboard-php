<?php $page_title = 'Login | PHP'; ?>
<?php include 'inc/header.php'; ?>
<?php 
if (isset($_SESSION['logedin_user_email'])) {
    header('Location: ./');
    exit;
} else{
    include 'inc/login.php';
?>
<section class="container-fluid form-box">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-5">
                <?php if (isset($register_msg) && isset($className)) { ?>
                <div class="afterSubmitMsg alert alert-success text-center <?php echo $className; ?>">
                    <?php echo $register_msg; ?>
                </div>
                <?php } ?>
                <div class="inner">
                    <form class="row" action="" method="POST" id="ap_login_form">
                        <div class="col-12 col-sm-12 mb-3">
                            <h3 class="hdng">Login</h3>
                        </div>
                        <div class="col-12 col-sm-12 mb-3">
                            <label for="" class="ap_label">
                                Email Name
                                <input type="email" name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; }  ?>">
                            </label>
                        </div>
                        <div class="col-12 col-sm-12 mb-3">
                            <label for="" class="ap_label">
                                Password
                                <input type="password" name="password" value="<?php if(isset($_POST['password'])) { echo $_POST['password']; }  ?>">
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