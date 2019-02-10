<?php
include("include/config.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  href="style.css">
</head>
<body>
<table>
<form method="post" action="lib/insert.php">
  <div class="container">
    <div class="row">
	<h2>Parents Registration</h2>
	<input type="text" placeholder="Student Name" name="student_name" required>
    
	<input type="text" placeholder="class" name="class" required>
    
	<input type="text" placeholder="Address" name="address" required>

	<input type="text" placeholder="State" name="state" required>
	<input type="text" placeholder="City" name="city" required>
	<input type="text" placeholder="Pin Code" name="pin_code" required>
    
	<input type="text" placeholder="Mobile No." name="mobile_no" required>
    
	<input type="text" placeholder="Father Name" name="father_name" required>
    
	<input type="text" placeholder="Mother Name" name="mother_name" required>
	<br/>
    <button type="submit" name="submit" class="submit">Submit</button>
    </div>
</form>
</table>
</body>
</html>