<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "php";

// Creating Database Connection
$conn = mysqli_connect($server , $username , $password , $database);


// Check Connection
if(!$conn){
    die("failed to connect".mysqli_connects_error());
}
else{
    echo "Connection Success fully";
}



$q = mysqli_query($conn , "INSERT INTO `users` (`name`, `age`, `salary`) VALUES ('haris', 6, 150)");

if($q){
    echo "Success";
}
else{
    echo "Error" . mysqli_error($conn);
}
?>