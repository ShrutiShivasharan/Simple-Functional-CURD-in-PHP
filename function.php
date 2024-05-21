<?php 
include 'connection.php';

//add 
if(isset($_POST['addFormsubmit'])){
	$name = $_POST['username'];
	$email = $_POST['useremail'];
	$address = $_POST['useraddress'];

	$sql = "INSERT INTO `curd`(`name`, `email`, `address`) VALUES ('$name', '$email', '$address')";
	$result = mysqli_query($con,$sql);
	if($result){
		// echo "data inserted!";
		header('location:TableDisplay.php');
	}else{
		echo "error!!";
	}
}

//edit
if(isset($_POST['editFormsubmit'])){
	$id = $_GET['editId'];
	$name = $_POST['username'];
	$email = $_POST['useremail'];
	$address = $_POST['useraddress'];
	$sql = "UPDATE `curd` SET `id`='$id',`name`='$name',`email`='$email',`address`='$address' WHERE id=$id";
	$result=mysqli_query($con,$sql);
	if($result){
		header('location:TableDisplay.php');
	}else{
		echo "error!!";
	}
}

//delete
if(isset($_GET['deleteId'])){
 $id = $_GET['deleteId'];
 $sql="DELETE FROM `curd` WHERE id=$id";
 $result=mysqli_query($con,$sql);
 if($result){
		header('location:TableDisplay.php');
	}else{
		echo "error!!";
	}
}
?>