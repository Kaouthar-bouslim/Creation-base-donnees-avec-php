<?php 

$bd=$_POST['bd'];
$table=$_POST['table'];
$compte=$_POST['compte'];
$mdp=$_POST['mdp'];
$rqt=$_POST['rqt'];
$a="init.html";
$c="creer.html";

$conn=mysqli_connect("localhost",$compte,$mdp);
if (!$conn) {

    echo "ERROR <br>";
    
    echo "<a href='$a' >Retour en arriere <br></a>  ";
    
    
    exit();
}
else{
$sel=mysqli_select_db($conn,$bd);
    if (!$sel) {
        echo "Unknow Database <br>";
        
        echo "<a href='$a' >Retour en arriere <br></a>  ";
    
        echo "<a href='$c' >Creer une base de donnees</a> ";
        exit();
}
    else{
        $rs=mysqli_query($conn,$rqt) or die (mysqli_error($conn));

            if($rs){
              echo "Succeful.";
}           else{
            echo "ERROR: Could not able to execute $rqt. " . mysqli_error($conn);
}
    }
}
?>