<?php

    include("connect.php");

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $role = $_POST['role'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $photo = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    

    
    if ($password==$cpassword) {
        if($mobile)
        $hash = password_hash($password, PASSWORD_DEFAULT);
        move_uploaded_file($tmp_name, "../uploads/$photo");
        $insert = mysqli_query($connect, "INSERT INTO users (name, contact, address, dob, role, gender, photo, status, password, votes) 
        VALUES ('$name','$mobile','$address','$dob','$role','$gender','$photo',0,'$hash',0)");

        if ($insert) {
            echo '
            <script>
                alert("Registration Succesful!");
                window.location = "../login.html";
            </script>
            ';
        }
    }

?>