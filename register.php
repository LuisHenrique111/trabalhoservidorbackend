<?php 
require_once 'connect.php'; #uses

$name = $_GET['name'];
$email = $_GET['email'];
$pwd = $_GET['pwd'];

$sql = "INSERT INTO player ( name, email, pwd) VALUES ('$name', '$email', '$pwd')";


$db = new Mydb();
if($db->query($sql)== TRUE){
    echo "usuario cadastrado";
}else{
     echo "error";
}


?>