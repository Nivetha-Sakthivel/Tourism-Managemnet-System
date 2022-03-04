<?php
    session_start();
    include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER SITE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.1/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">    
    <link rel="stylesheet" href="style.css">
<style>
header{
  position: fixed;
  top:0; left: 0; right:0;
  background:linear-gradient(rgb(5, 168, 209),rgb(53, 25, 99));
  z-index: 1000;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding:.5rem 10%;
  padding-bottom:0px;
}
header .navbar a{
  color:rgba(255, 255, 255, 0.733);
  font-size: 23px;
  margin:0 .8rem;
}
.container{
    position: relative;
    left: 0; right:0; bottom:30px;
    padding-top: 18rem;
}
table {
    width:100%;
}
table,th,td {
    border:1px solid black;
    border-collapse: collapse;
}
th,td{
    padding:20px;    
}
th{
    background-color:rgb(80, 160, 222);
    font-weight:bold;
}
tr:nth-child(odd) {
    background-color:white;
}
.book {
    text-align:center;
    margin-bottom:20px;
}
</style>
</head>
<body>
<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="#" class="logo"><span>T</span>ravel <span>W</span>ith <span>U</span>s</a>
    <nav class="navbar">
        <a href="user.php">home</a>
    </nav>
</header>
    <div class="container">
        <table id="example" class="resp-table">
            <thead>
                <tr>
                    <th>PLACE</th>
                    <th>DAYS</th>
                    <th>AMOUNT</th>
                    <th>OFFERS</th>
                    <th>ACTIVITIES</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $query= " SELECT * FROM packages;";
                    $result=mysqli_query($conn,$query);
                    while($row = mysqli_fetch_array($result)){
                        echo '
                        <tr>
                        <td>'.$row["place"].'</td>
                        <td>'.$row["days"].'</td>
                        <td>'.$row["amount"].'</td>
                        <td>'.$row["offers"].'</td>
                        <td>'.$row["rec_activities"].'</td>
                        </tr>
                        ';
                    }
                ?> 
            </tbody>     
        </table>
    </div>
    <div class="book">
    <a href="book.php" class="btn">book now</a></div>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.2.1/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
        var table = $('#example').DataTable( {
        responsive: true
        } );
        new $.fn.dataTable.FixedHeader(table);
        } );
    </script>
   <?php include("footer.php"); ?>
    <script src="script.js"></script>
</body>
</html>
