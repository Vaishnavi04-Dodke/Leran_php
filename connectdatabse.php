<?php
echo "Connect to Database <br>";
// connecting to the databse
$servername="localhost";
$username="root";
$password="";
// $password=" ";
// create a connection
$conn=mysqli_connect($servername,$username,$password);
// die if connection was not succesfully
if(!$conn){
    die("sorry we failed to connect".mysqli_connect_error());
}
else{
echo "Connection was sucessfully";
}
// create batabase
$sql="CREATE DATABASE Student2";
// mysqli_query($conn,$sql);
$result=mysqli_query($conn,$sql);
echo "The result is ";
echo var_dump($result);
echo "<br>";
// check  for database creation  success
if($result){
    echo "Database was created successfully";
}
else{
echo "Database was not created sucessfully because ---->".mysqli_error($conn);
}
?>