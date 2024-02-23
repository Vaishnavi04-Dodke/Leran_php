<?php
echo "Connect to Database <br>";
// connecting to the databse
$servername="localhost";
$username="root";
$password="";
$database="emplyee";

// create a connection
$conn=mysqli_connect($servername,$username,$password,$database);
// die if connection was not succesfully
if(!$conn){
    die("sorry we failed to connect".mysqli_connect_error());
}
else{
echo "Connection was sucessfully";
}
echo "<br>";
// create table 
$sql="CREATE TABLE `phptrip` (`sr no` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `destination` VARCHAR(11) NOT NULL , PRIMARY KEY (`sr no`)) ";
$result=mysqli_query($conn,$sql);
if($result){
        echo "table was created successfully";
    }
    else{
    echo "table was not created sucessfully because ---->".mysqli_error($conn);
    }
?>