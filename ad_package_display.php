<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PACKAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<style>
  body {
    background:linear-gradient(-70deg, #bae8e8 20%,#e3f6f5 40%);
  }
  </style>

  </head>
<body>
    <div class="container">
      <button class="btn btn-primary my-5">
          <a href = "admin-packages.php" class="text-light"> Add Package </a>
        </button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">SI.NO</th>
      <th scope="col">PLACE</th>
      <th scope="col">DAYS</th>
      <th scope="col">AMOUNT</th>
      <th scope="col">OFFERS</th>
      <th scope="col">ACTIVITIES</th>
      <th scope="col">OPERATIONS</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $sql="SELECT * FROM packages";
      $result=mysqli_query($conn,$sql);
      if($result){
          while($row=mysqli_fetch_assoc($result)){
              $id=$row['id'];
              $place=$row['place'];
              $days=$row['days'];
              $amount=$row['amount'];
              $offers=$row['offers'];
              $rec_activities=$row['rec_activities'];
              echo '<tr>
              <th scope="row">'.$id.'</th>
              <td>'.$place.'</td>
              <td>'.$days.'</td>
              <td>'.$amount.'</td>
              <td>'.$offers.'</td>
              <td>'.$rec_activities.'</td>
              <td>
              <button class="btn btn-primary"><a href="ad_update_package.php?updateid='.$id.'" class="text-light">Update</a></button>
              <button class="btn btn-danger"><a href="ad_delete_package.php?deleteid='.$id.'" class="text-light">Delete</a></button>
          </td>
            </tr>';
          }
      }
      ?>
   
  </tbody>
</table>
    </div>
</body>
</html>