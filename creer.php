<?php

$bd=$_POST['bd'];
$table=$_POST['table'];
$compte=$_POST['compte'];
$mdp=$_POST['mdp'];
$rqt=$_POST['rqt'];

$conn=mysqli_connect("localhost",$compte,$mdp);
if (!$conn) {
    
    echo "ERROR <br>";
    
    echo "<a href='$a' >Retour en arriere <br></a>  ";
    
    
    exit();
}

$sql1 = "CREATE DATABASE $bd";

mysqli_select_db($conn,"$bd") or die (mysqli_error($conn));

$sql2 = "CREATE TABLE $table (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
    )";



$rs=mysqli_query($conn,$rqt) or die (mysqli_error($conn));

if($rs){
    echo "Succeful.";
} else{
    echo "ERROR: Could not able to execute $rqt. " . mysqli_error($conn);
}
?>