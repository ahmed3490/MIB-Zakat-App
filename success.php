
  

<?php

include 'bootstrap.php';
if(!empty($messages)){
    echo "<div class='alert alert-success'>";
    foreach ($messages as $message) {
        echo "<span class='glyphicon glyphicon-ok'></span>&nbsp;".$message."<br>";
    }
    echo "</div>";
}



