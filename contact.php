<?php
    include ('config.php');
    $c_name=$_POST['name'];
    $c_email=$_POST['email'];
    $c_mobile_no=$_POST['number'];
    $c_subject=$_POST['subject'];
    $c_message=$_POST['message'];
    $itemValues=0;
    
    {
    $sql="INSERT INTO contact (c_name,c_email,c_mobile_no,c_subject,c_message)VALUES('$c_name','$c_email','$c_mobile_no','$c_subject','$c_message');";			
	mysqli_query($conn, $sql);
    $itemValues++;
    }
    
    echo $sql;
    if($itemValues!=0) {
        echo "<script>
        alert('Handler will contact you Shortly');
        window.location = 'index.html';
        </script>";
    }
    
    else {
    echo "<script>
            alert('Error while recording! Please try again.');
            window.location = 'index.html';
        </script>";
    }

?>