<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "emplyee"; // Corrected the database name
$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    echo "Connection was not successful";
} else {
    echo "Connection was successful";
    echo '<br>';
}

$sql = "SELECT * FROM `phptrip` WHERE `destination` = 'latur'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

echo $num . " Records are available in latur destination";
echo "<br>";

$sno = 1;
if ($num > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $sno . ' Hello ' . $row['name'] . ' Welcome to ' . $row['destination'];
        $sno = $sno + 1;
        echo "<br>";
    }
} else {
    echo "No records found.";
}
// $sql = "UPDATE `phptrip` SET `name` = 'poonam' WHERE `phptrip`.`sr no` = 4";
// $sql = "UPDATE `phptrip` SET `name` = 'poonam' WHERE `phptrip`.`destination` = 'latur' ";
$sql = "UPDATE `phptrip` SET `name` = 'poonam' WHERE `phptrip`.`destination` = 'lonavala' ";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
$aff=mysqli_affected_rows($conn);
echo "no of records updated:".$aff."<br>";

if ($result) {
    echo "We updated the record successfully";
} else {
    echo 'We could not update the record successfully';
}

?>
