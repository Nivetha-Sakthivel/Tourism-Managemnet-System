<?php
    session_start();
    include 'config.php';
    error_reporting(0);
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $review = $_POST['review'];

        $sql="INSERT INTO review (name,email,review) VALUES('$name','$email','$review');";
        $result=mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('review posted successfully.')</script>";
        } else {
            echo "<script>alert('review does not add.')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER SITE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
<style>
    .single-item {
         background:rgb(203, 214, 216);
         box-shadow:1rem 1rem 2rem rgba(0,0,0,.3);
         padding:15px 20px;
         text-align: left;
         margin-bottom:10px;
    }
    .single-item h4 {
        font-size:20px;
        font-weight:800;
        color:#40356f;
        margin:8px 0 0;
    }
    .single-item a {
        margin:8px 0;
        font-size: 15px;
        color:blue;
        text-decoration:none;
        display: inline-block;
    }
    .single-item p {
        font-size: 20px;
        color:#333;
    }
    </style>
</head>
<body>
<header>
<link rel="stylesheet" href="style.css">
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="#" class="logo"><span>T</span>ravel <span>W</span>ith <span>U</span>s</a>
    <nav class="navbar">
        <a href="user.php">home</a>
</nav>
</header>
<section class="contact" id="contact">
<h1 class="heading"></h1>
    <h1 class="heading"><span>review</span></h1>
    <div class="row" style="margin-bottom:25px;">
        <form action="" method="post">
            <div class="inputBox">
                <input type="text" placeholder="Name" name="name" value="<?php echo $name; ?>" required>
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <textarea placeholder="Write your reviews" name="review" id="" cols="30" rows="10" required><?php echo $review; ?></textarea>
            <input name="submit" type="submit" class="btn" value="Post">
    </div>
    </form>
    <?php
    $sql = "SELECT * FROM review";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0) {
        while($row = mysqli_fetch_assoc($result)) {        
    ?>
    <div class="single-item">
         <h4><?php echo $row['name']; ?></h4>
         <a href=""><?php echo $row['email'];?></a>     
          <p><b><?php echo $row['review']; ?></b></p>
        </div>
        <?php
        }
    }
    ?>   
    </div>      
    </section>
    <?php include("footer.php"); ?>
</body>
</html>    