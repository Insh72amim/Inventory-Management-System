<?php
$conn = new mysqli("db","user","test","myDb");
session_start();
if(isset($_SESSION['username'])){
	$id=$_SESSION['admin_id'];
	$user=$_SESSION['username'];
}else{
	header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
	exit();
}
$id=$_GET['manager_id'];
$sql="delete from manager where manager_id='$id'";
if ($conn->query($sql) === TRUE) {
	echo "Manager deleted successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "<SCRIPT type='text/javascript'>
window.location.replace('admin_manager.php');
</SCRIPT>";
?>


