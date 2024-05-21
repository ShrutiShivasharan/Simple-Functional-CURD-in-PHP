<?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'functioncurd');

if($con){
	// echo 'DB Connected!';
}else{
	echo 'DB Not Connected!';
}

?>