<?php
require_once 'db_connect.php';
function clear($input){
    global $connect;

    $var = mysqli_escape_string($connect, $input);
	
	$var = htmlspecialchars($var);
	return $var;
}


$nome = clear($_POST['nome']);
$email = clear($_POST['email']);



$sql = "INSERT INTO leads (nome, email) VALUE ('$nome' , '$email')";



#echo $create;




if(mysqli_query($connect , $sql)){
 echo "<script>alert('Lead capturado!);</script>";

   header ("Location: index.php");
}else{
    
}





?>