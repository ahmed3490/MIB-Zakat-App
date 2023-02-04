

<?php
$server="localhost";
$userid ="root";
$Password = "";
$myDB = "zakat2";
$con = mysqli_connect($server,$userid,$Password,$myDB);


$sql = "SELECT * FROM `islands`";
    $all_islands = mysqli_query($con,$sql);




if (mysqli_connect_errno()) {
# code...
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}












 
?>