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
$sql='SELECT * FROM `phptrip`';
$result=mysqli_query($conn,$sql);
// find the number of rows
$row=mysqli_num_rows($result);
echo $row;
echo "<br>";
// display the rows
// if($row >0){
//     $num=mysqli_fetch_assoc($result);
//     echo var_dump($num);
//     echo "<br>";
//     $num=mysqli_fetch_assoc($result);
//     echo var_dump($num);
//     echo "<br>";
//     $num=mysqli_fetch_assoc($result);
//     echo var_dump($num);
//     echo "<br>";
//     $num=mysqli_fetch_assoc($result);
//     echo var_dump($num);
//     echo "<br>";
//     $num=mysqli_fetch_assoc($result);
//     echo var_dump($num);
//     echo "<br>";
//     $num=mysqli_fetch_assoc($result);
//     echo var_dump($num);
//     echo "<br>";
//     $num=mysqli_fetch_assoc($result);
//     echo var_dump($num);
//     echo "<br>";
//     $num=mysqli_fetch_assoc($result);
//     echo var_dump($num);
//     echo "<br>";
// }

while ($row = mysqli_fetch_assoc($result)) {
    // var_dump($row);
    echo $row['sr no'] . ' Hello ' . $row['name'] . ' Welcome to ' . $row['destination'];
    echo "<br>";
}


?>