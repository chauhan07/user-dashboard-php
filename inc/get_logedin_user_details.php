<?php session_start(); // start the session
    if (isset($_SESSION['logedin_user_email'])) {
        $userEmail = $_SESSION['logedin_user_email'];
        $sql = "SELECT * FROM userdata where email = '$userEmail'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {

            if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                $row = mysqli_fetch_assoc($result);
                //echo "<pre>"; print_r($row); echo "</pre>";
                $GLOBALS['ap_user_data'] = $row;
            }

        } else {
            $register_msg = "No results found";
        }
    }
?>