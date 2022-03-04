<?php
include 'config.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM packages WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:ad_package_display.php');
    }
    else{
        die(mysqli_error($conn));
    }

}
?>