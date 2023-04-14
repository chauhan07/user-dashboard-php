<?php 
    if(isset($_POST['submit'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $encryptedPassword = md5($password);

        if (isset($_FILES['user_image'])) {
            $file = $_FILES['user_image'];
            // Get the file name
            $userImageName = 'profile-'.rand().'-'.$file['name'];
            // Get the file tmp name
            $tmpname = $file['tmp_name'];
            // Move the uploaded file to a new location
            move_uploaded_file($tmpname, "assets/uploads/" . $userImageName);
        }

        $sql = "SELECT email FROM userdata where email = '$email'";
        $result = mysqli_query($conn, $sql);
        // if (mysqli_num_rows($result) > 0) {

        //     $row = mysqli_fetch_assoc($result);
        //     if($row['email'] ===  $email){
        //         $register_msg = "Email is Already Existed";
        //     } else {
        //         // SQL query to insert data
        //         $sql = "INSERT INTO userdata (first_name, lastName, email, phone, password) VALUES ('$first_name','$last_name','$email','$phone','$encryptedPassword')";
        //         if (mysqli_query($conn, $sql)) {
        //             $register_msg = "Data inserted successfully";
        //             header('Location: ../login.php');
        //         } else {
        //             $register_msg = "Error";
        //         }
        //     }
        // } 


        if (mysqli_num_rows($result) > 0) {
            $register_msg = "Email is Already Existed";
            $className = 'alert-danger';
        } else {

            // SQL query to insert data
            $sql = "INSERT INTO userdata (first_name, lastName, email, phone, password, image_path) VALUES ('$first_name','$last_name','$email','$phone','$encryptedPassword','$userImageName')";

            if (mysqli_query($conn, $sql)) {
                $register_msg = "Data inserted successfully";
                $className = 'alert-success';
                header('Location: ./login.php');
            } else {
                $register_msg = "Error";
                $className = 'alert-success';
            }
        }
    }
?>