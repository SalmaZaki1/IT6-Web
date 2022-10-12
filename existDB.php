<?php
session_start();
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'it6';
    $db_host     = 'localhost';
    // Create connection
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $email = mysqli_real_escape_string($conn,htmlspecialchars($_POST['email'])); 
    $password = mysqli_real_escape_string($conn,htmlspecialchars($_POST['password']));

        $sql = "SELECT * FROM newClient where 
              email= '".$email."' and password = '".$password."' ";
        $rlt=$conn->query($sql);
        if($rlt->num_rows >0){
            if($email == 'admin@gmail.com'){
                 header('Location: Admin.html');
        }else{
  header('Location: accueilClient.html');
}}else{
            header('Location: signup.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    
$conn->close(); // fermer la connexion
?>