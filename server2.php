<?php
session_start();
include "connect.php"; 

if(isset($_POST['username1']) && isset($_POST['password_11'])) {
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $username1= validate($_POST['username1']);
    $password_11= validate($_POST['password_11']);
    if(empty($username1)){
        header("Location: login page.php?error=User name is required");
        exit();
    }
    else if(empty($password_11)){
        header("Location: login page.php?error=Password is required");
        exit();
    }
    else{
        $sql ="SELECT *FROM users WHERE username1='$username1' AND password_11='$password_11'";
        $reslut=mysqli_query($conn,$sql);
        if(mysqli_num_rows($reslut)===1){
            $row=mysqli_fetch_assoc($reslut);
            if($row['username1'] === $username1 && $row['password_11'] === $password_11){
                $SESSION['username1']=$row['username1'];
                $SESSION['password_11']=$row['password_11'];
                header("Location: index.php");
                exit();
            }else{
                header("Location: login page.php?error=incorrect username or password");
                exit();
            }
        }else{
            header("Location: login page.php?error=incorrect username or password");
            exit();
        }
    }
}
else{
    header("Location:login page.php");
}
exit();

?>