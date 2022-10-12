<?php
include("existDB.php");
if(isset($_POST['submit'])){
$F=$_POST['name'];
$E=$_POST['email'];
$P=$_POST['password'];
// connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'it6';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
$sql="insert into newClient (name,email,password) values('".$F."','".$E."','".$P."')";
   if(mysqli_query($db,$sql)){
echo "New account created successfully";

}
  else{
 echo "Error: " . $sql . ":-" . mysqli_error($db);
}
mysqli_close($db);}
 ?>
