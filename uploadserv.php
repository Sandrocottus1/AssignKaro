<?php
include 'connect.php';  
if(isset($_POST['btn'])){
    $file=$_FILES['file'];
    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error']; 
    $fileType=$_FILES['file']['type'];
    $fileExt=explode('.',$fileName);
    $fileActualExt= strtolower(end($fileExt));
    $allowed=array('jpg','jpeg','png','pdf');
    if(in_array($fileActualExt,$allowed)) {
        if($fileError === 0){
            if($fileSize<1000000){
                
            $fileDestination='documents/'.$fileNameNew;
            move_uploaded_file($fileTmpName,$fileDestination);
            header("Location:upload.php?uploadsuccess");
            $sql="INSERT INTO 'documents' ('document')VALUES('$fileDestination')";
            $result=mysqli_query($con,$sql);
            if($result){
                echo"uploaded";
            }
            }else{
                echo "Your file is too big!";
            }
        }else{
            echo "There was an error uploading your file";
        }
    }
        else{
            "you cannot upload files of this type!";
        }
    }

?>