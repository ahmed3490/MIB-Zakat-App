<?php
include "connection.php";

$atollid = 0;

if(isset($_POST['atoll'])){
   $atollid = mysqli_real_escape_string($con,$_POST['atoll']); // atoll id
}

$island_array = array();

if($atollid > 0){
    $sql = "SELECT id,name FROM island WHERE atoll_id=".$atollid;

    $result = mysqli_query($con,$sql);
    
    while( $row = mysqli_fetch_array($result) ){
        $islandid = $row['id'];
        $name = $row['name'];
    
        $island_array[] = array("id" => $islandid, "name" => $name);
    }
}

// encoding array to json format
echo json_encode($island_array);