<?php
 include('db.php'); 


// Define variables and initialize with empty values
$name_error;
$ID_error;
$address_error;
$email_error;
$dependants_error;
$island_error;
$errors = array(); 



if (isset($_POST['submit'])) {
  $input_name = trim($_POST["Name"]);
  $input_id = trim($_POST["ID"]);
  $input_address = trim($_POST["Address"]);
  $input_email = trim($_POST["Email"]);
  $input_island = trim($_POST["select_island"]);
  $input_zakat = trim($_POST["zakat_rates"]);
/* 
  $input_dependents = trim($_POST["dependents"]); */
  $input_dependents = trim($_POST["dependents"]);
  $input_zakat_total = trim($_POST["zakat"]);
 
/*Validations for empty fields */
  if(empty($input_name)){$name_error = "Please enter  name.";} 
  if(empty($input_id)){$ID_error = "Please enter  ID Card number.";} 
  if(empty($input_address)){$address_error = "Please enter your address.";} 
  if(empty($input_email)){$email_error = "Please enter your email address.";} 
  if(empty($input_dependents)){$dependants_error = "Please enter number of dependants!.";} 

/*Validation for invalid name  */
elseif (!preg_match("/^([a-zA-Z' ]{4,30}+)$/", $input_name)) { 
   $name_error = 'Please enter full name without numbers!';
}


/*Validation for invalid email address format */
  elseif (!filter_var($input_email, FILTER_VALIDATE_EMAIL)) {
  $email_error = "Invalid email format";
  }
/*Validation for invalid address format */
elseif (!preg_match( '/^[a-z0-9 .\-]{4,25}+$/i', $input_address)) { 
   $address_error = 'Invalid address format!';
} 
/*Validation for invalid ID Card  format */
elseif (!preg_match('/A[0-9]{6}$/', $input_id)) { 
   $ID_error = 'Invalid ID Card format - Axxxxxx!';
}


     else{
            if(empty($errors)){
               $messages[] = "Sucessfully uploaded post!";
    }

  if (count($errors) == 0) {
  
  
    $sql = 'INSERT INTO form_data(name,id_card,address,email,island,zakat,dependents,zakat_total) 
    VALUES(:name, :id_card, :address, :email, :island, :zakat, :dependents,:zakat_total)';

    $statement = $pdo->prepare($sql);
    $statement->execute([
        ':name' =>$input_name,
        ':id_card' =>$input_id, 
        ':address' =>$input_address,  
        ':email' =>$input_email, 
        ':island' =>$input_island,  
        ':zakat' =>$input_zakat, 
        ':dependents' =>$input_dependents, 
        ':zakat_total' =>$input_zakat_total, 

    ]);


    $input_name = "";
    $input_id    = "";
    $input_address    = "";
    $input_email    = "";
    $input_island    = "";
    $input_zakat    = "";
    $input_dependents    = "";
    $input_zakat_total    = "";
  
      
      }
    }


    }


  

