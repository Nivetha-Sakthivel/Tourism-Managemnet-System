<?php 
session_start();

include("config.php");

if(count($_POST)>0)
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$dpass=mysqli_query($conn,"SELECT * FROM `login` WHERE `username` = '$username' AND `password` = PASSWORD('$password')");
	$result=mysqli_fetch_array($dpass);
	if(is_array($result))
	{
		$rolecheck= $result[4];
		if($rolecheck==1){
		echo "<script>
                    alert('Logged In Successfully');
                    window.location = 'admin.php';
            </script>";
		}
		else{
		echo "<script>
			alert('Logged In Successfully');
			window.location = 'user.php';
	        </script>";
		}
	}
	else
	{
		echo "<script>
					alert('Invalid Username or Password!');
					window.location = 'login.php';
				</script>";
	}
}

?>