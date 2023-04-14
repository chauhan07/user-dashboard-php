<?php /** Getting from table **/
    // SQL query to fetch email and password columns
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $encryptedPassword = md5($password);

        $sql = "SELECT password FROM userdata where email = '$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            if($row['password'] ===  $encryptedPassword){
                $_SESSION['logedin_user_email'] = $email; // set the session value
                header('Location: ./');
                exit;
            } else{
                $register_msg = "Password Not Matched";
                $className = 'alert-danger';

            }

        } else {
            $register_msg = "No results found";
            $className = 'alert-warning';
        }
        // Close connection
        mysqli_close($conn);
    }
?>