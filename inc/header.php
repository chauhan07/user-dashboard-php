<?php 
  include 'connection.php'; 
  include 'get_logedin_user_details.php'; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    <?php if (isset($page_title)) { echo $page_title; } ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet" >
  </head>
  <body>

  <header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h1 class="logo">
                    Logo Here 
                </h1>
            </div>
            <div class="col-6">
                <?php if (isset($userEmail)) { ?>
                <form action="inc/logout.php" method="post">
                  <button type="submit" name="logout" class="hdr_btn">Logout</button>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
  </header>
