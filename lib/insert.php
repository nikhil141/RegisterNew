<?php
include("../include/config.php");
if(isset($_POST['submit']))
{
	$sname  = $_POST['student_name'];
	$clas      = $_POST['class'];
	$add      = $_POST['address'];
	$stat      =$_POST['state'];
	$ci         =$_POST['city'];
	$pcode   =$_POST['pin_code'];
	$mno     =$_POST['mobile_no'];
	$fname   =$_POST['father_name'];
	$mname =$_POST['mother_name'];
	$sql= mysqli_query($con,"INSERT INTO `tbleparents` (`student_name`, `class`, `address`, `state`, `city` , `pin_code`, `mobile_no`, `father_name` ,`mother_name`) VALUES ('$sname', '$clas', '$add', '$stat', '$ci' ,'$pcode' , '$mno' ,'$fname','$mname')");
   if($sql)
   {
	   ?>
		<script>
	alert(" Submitted Successfully.....");
	window.location="../show.php";
	</script>
	<?php
	}	
else
{
	echo "error ".mysqli_errno($con);
}	   
   
}
?>