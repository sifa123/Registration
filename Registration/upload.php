<?php

include 'dbcon.php';
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$file = $_FILES['photo'];

//print_r($file);

	$filename = $file['name'];
	$filepath = $file['tmp_name'];
	$fileerror = $file['error'];

	if($fileerror == 0){
		$destfile = 'upload/'.$filename;
		//echo "$destfile";

		move_uploaded_file($filepath, $destfile);
		$insertquery = "insert into registration(name,email,number,pic
) values('$name','$email','$number','$destfile')";

$query = mysqli_query($con,$insertquery);

if($query){
	echo "";
	}else{
		echo "Not Inserted";
	}
}

}else{
	echo "No button has been clicked";
}




?>