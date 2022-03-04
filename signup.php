<?php

    session_start();

    include ('config.php');

    $username=$_POST['s_username'];
    $password=$_POST['s_password'];
    $rpassword=$_POST['s_rpassword'];
    $email=$_POST['s_email'];
    
    if($_POST['s_password']==$_POST['s_rpassword']){
        $log="INSERT INTO login (username, password, email) VALUES ('$username',PASSWORD('$password'),'$email');";
        mysqli_query($conn, $log);
        echo "<script>
        alert('Signed In Successfully');
        window.location = 'user.php';
        </script>";
    }
    else{
            echo "<script>
                  alert('Incorrect password');
                  window.location = 'login.php';
            </script>";
        
    }
?>
