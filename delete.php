<?php

// / connecting to the databse
$servername="localhost";
$username="root";
$password="";
$database='emplyee';

// create a connection
$conn=mysqli_connect($servername,$username,$password,$database);
// die if connection was not succesfully
if(!$conn){
    die("sorry we failed to connect".mysqli_connect_error());
}
else{
echo "Connection was sucessfully";
echo "<br>";
}

$sql = "DELETE FROM `phptrip` WHERE `destination` = 'lonavala' LIMIT 1";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
$aff=mysqli_affected_rows($conn);
echo "no of records delete:".$aff."<br>";

if ($result) {
    echo "We delete the record successfully";
} else {
    echo 'We could not delete the record successfully';
}

?>