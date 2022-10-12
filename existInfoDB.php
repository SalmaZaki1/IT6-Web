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
    $nom = mysqli_real_escape_string($conn,htmlspecialchars($_POST['firstname'])); 
    $prenom = mysqli_real_escape_string($conn,htmlspecialchars($_POST['lastname']));
    $mail = mysqli_real_escape_string($conn,htmlspecialchars($_POST['email']));
    $objet = mysqli_real_escape_string($conn,htmlspecialchars($_POST['objet']));
    $tele = mysqli_real_escape_string($conn,htmlspecialchars($_POST['telephone']));
    $message = mysqli_real_escape_string($conn,htmlspecialchars($_POST['message']));

        $sql = "SELECT * FROM infoContact where 
            nom= '".$nom."' and prenom= '".$prenom."' and mail= '".$mail."' and tele= '".$tele."' and message= '".$message."' and objet= '".$objet."'  ";
        $rlt=$conn->query($sql);
        if($rlt->num_rows >0){
          header('Location: contact.html');
          // dans se cas la , envoyer un parametre 7to fih matalan un msg d'erreur o testew 3lih f la page contact.html ida l9itoh 3amer affichiwh bach l'utilisateur y3rf bli matalan il existe deja ok.
        } else {
            $sql="insert into infoContact (nom,prenom,mail,objet,tele,message) values('".$nom."','".$prenom."','".$mail."','".$objet."','".$tele."','".$message."')";

                if(mysqli_query($conn,$sql)){
                echo "Message send";
                // la meme chose ici bach y3rf l user bli les infos sont enregistrer avc success .
                }else{
                 echo "Error: " . $sql . ":-" . mysqli_error($conn);
                }
        }
?>