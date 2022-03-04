<?php
    session_start();
    include ('config.php');

    $b_name=$_POST['b_name'];
    $b_email=$_POST['b_email'];
    $from_place=$_POST['from_place'];
    $choose_place=$_POST['choose_place'];
    $members=$_POST['members'];
    $departure=$_POST['departure'];
    $arrivals=$_POST['arrivals'];
    $mobile_no=$_POST['mobile_no'];
    $guide=$_POST['guide'];
    $itemValues=0;

    {
    $itemValues++;
    $sql="INSERT INTO booking (b_name,b_email,from_place,choose_place,members,departure,arrivals,mobile_no,guide) VALUES('$b_name','$b_email','$from_place','$choose_place','$members','$departure','$arrivals','$mobile_no','$guide');";			
	mysqli_query($conn, $sql);
    $itemValues++;
    }

    if($itemValues!=0) {
        echo "<script>
        alert('Handler will contact you Shortly');
        window.location = 'Book.php';
        </script>";
    }
    
    else {
    echo "<script>
            alert('Error while recording! Please try again.');
            window.location ='Book.php';
        </script>";
    }




?>