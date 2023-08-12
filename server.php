<?php
    $username1=$_POST['username1'];
    $email1=$_POST['email1'];
    $password_11=$_POST['password_11'];
    $password_22=$_POST['password_22'];
    //Database connection
    $conn=mysqli_connect('localhost','root','','users');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into users(username1,email1,password_11,password_22)
            values(?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username1, $email1, $password_11, $password_22);
        $stmt->execute();
        echo "registration successfull!!";
        $stmt->close();
        $conn->close();
    }
?>

