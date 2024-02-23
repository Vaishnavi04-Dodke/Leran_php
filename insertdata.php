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
$name="vaishu";
$destination="lonavala";
$sql="INSERT INTO `phptrip` (`sr no`, `name`, `destination`) VALUES (NULL, '$name', '$destination')";
$result=mysqli_query($conn,$sql);
if($result){
        echo "the record  was inserted successfully";
    }
    else{
    echo "the record was not inserted sucessfully because ---->".mysqli_error($conn);
    }
?>