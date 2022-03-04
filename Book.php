
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<!--book-->
<section class="book" id="book">
    <h1 class="heading"><span>book now</span></h1>
    <div class="row">
        <form action="insert-booking.php" method="post">
		<div class="inputBox">
            <h3>Name</h3>
            <input type="text" placeholder="Name" name="b_name">
            <h3>Email</h3>
            <input type="email" placeholder="email@gmail.com" name="b_email">
            <h3>from</h3>
            <input type="text" placeholder="From " name="from_place">
            <h3>Choose a place</h3>
            <input type="text" placeholder="place" name="choose_place">
            <h3>how many</h3>
            <input type="number" placeholder="number of people" name="members">
            <h3>Departure</h3>
            <input type="date" name="departure">
            <h3>arrivals</h3>
            <input type="date" name="arrivals">
            <h3>Mobile.No</h3>
            <input type="number" placeholder="Number" name="mobile_no">
            <h3>Guide</h3>
            <select class="select" name="guide">
		        <option value="none">None</option>
                <option value="Guide-Male">Guide-Male</option>
                <option value="Guide-Male">Guide-Female</option>
                <option value="Optional">Optional</option>
            </select>
        </div><br>
		<div class="inputBox">
            <h3 style="font-size:20px; color:#333">Check once again your details are correct before booking</h3><br> 
		</div>
        <input type="submit" class="btn">
        </form>
	    <div class="image">
            <img src="images/book-img5.jpg" alt="">
			<img src="images/book-img50.jpg" alt="">
        </div>
    </div>
</div>
</section>
</body>
</html>
