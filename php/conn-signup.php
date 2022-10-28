<?php
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost','root','','ebook-site');
     if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
     }else{
        $stmt = $conn->prepare("insert into registration(fullname, email, password)values(?,?,?)");
        $stmt->bind_param("sss",$fullName, $email, $password);
        $stmt->execute();
        // echo "";
        $em = "Registration Successfull...";
        header("Location: ../login/signup.php?succes=$em");
        $stmt->close();
        $conn->close();
     }
    