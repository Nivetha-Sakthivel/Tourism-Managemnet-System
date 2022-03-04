<?php
include 'config.php';
if(isset($_POST['submit'])){
    $p_place=$_POST['place'];
    $p_days=$_POST['days'];
    $p_amount=$_POST['amount'];
    $p_offers=$_POST['offers'];
    $p_rec_activities=$_POST['rec_activities'];

    $sql="INSERT INTO packages (place,days,amount,offers,rec_activities) values('$p_place', '$p_days', '$p_amount', '$p_offers', '$p_rec_activities') ";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:ad_package_display.php');
    }
    else{
        echo "Something went wrong";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ADMIN PACKAGE</title>
    <style>
        .package {
            display: flex;
            flex-wrap: wrap;
            gap:1.5rem;
            align-items: center;
            width:1200px;
            padding-left:300px;
            
        }
        .package .mb-3 .form-control{
            font-size:20px;
        }
        .package form {
            margin-top:100px;
            flex:1 1 40rem;
            padding:2rem;
            background:rgb(183, 212, 231);
            box-shadow: 1rem 1rem 1rem rgba(0,0,0,.3);
            font-size:20px;
            margin-top: 10px;
        }
        </style>
  </head>
  <body>
  <header>
<link rel="stylesheet" href="style.css">
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="#" class="logo" style="text-decoration:none;"><span>T</span>ravel <span>W</span>ith <span>U</span>s</a>
    <nav class="navbar">
        <a href="admin.php" style="text-decoration:none;">home</a>
</nav></header> 
<h1 class="heading" style="margin-top:15px;">
<h1 class="heading"><span>add packages +</span></h1>
      <div class="package">
              <form method="post">
  <div class="mb-3">
    <label >Enter Place</label>
    <input type="text" class="form-control" placeholder="place" name="place" autocomplete="off">
</div>
<div class="mb-3">
    <label >Enter Days</label>
    <input type="text" class="form-control" placeholder="days" name="days" autocomplete="off">
</div>
<div class="mb-3">
    <label >Enter Amount</label>
    <input type="text" class="form-control" placeholder="amount" name="amount" autocomplete="off">
</div>
<div class="mb-3">
    <label >Enter Offer</label>
    <input type="text" class="form-control" placeholder="offer" name="offers" autocomplete="off" >
</div>
<div class="mb-3">
    <label >Enter Activities</label>
    <input type="text" class="form-control" placeholder="recommeded activities" name="rec_activities" autocomplete="off" >
</div>
  <button type="submit" class="btn btn-primary"name= "submit" >Add</button>
  <button class="btn btn-primary">
          <a href = "ad_package_display.php" class="text-light"> Added Package </a>
        </button>
</div>
</form>
</div>

  </body>
</html>