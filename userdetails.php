<?php

	$con = mysqli_connect('localhost','root');

	if($con){
      echo"Successful";

	}
else{

	echo "Failed";
}

mysqli_select_db($con, 'websiteforu');

$Username = $_POST[Username];
$EMail = $_POST[EMail];
$Phone = $_POST[Phone];
$Comments = $_POST[Comments];

$inquery =" insert into userdetails(User,Email,Mobile,Comments)
 values('$Username','$EMail', '$Phone','$Comments')";
//echo"$query";
 mysqli_query($con,$inquery);
 header('location:index.php');
?>