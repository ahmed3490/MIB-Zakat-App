<?php
       include 'includes/header.php';
       include 'connection.php';
       include 'success.php'; 

$name_error   = "";
$errors = array(); 

    




if (isset($_POST['submit'])) {
  $input_name = trim($_POST["Name"]);
 if(empty($input_name)){$name_error = "Please enter  name.";} 



else{
        if(empty($errors)){
               $messages[] = "Sucessfully uploaded post!";
    }
}

if (count($errors) == 0) {


$sql = "INSERT INTO form_data(name)
        VALUES(?)";

$stmt =  mysqli_stmt_init($con);

if ( ! mysqli_stmt_prepare($stmt,$sql)){
   die(mysqli_error($con));
}




mysqli_stmt_bind_param($stmt,"s",
                       $name,
                         
                    );

mysqli_stmt_execute($stmt);




echo "Record has been saved!";
header('location: zakatpay.php');


}


}