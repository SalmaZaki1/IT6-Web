<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=it6;charset=utf8', 'root', '');
if(isset($_GET['type']) AND $_GET['type'] == 'infoContact') {
   if(isset($_GET['approuve']) AND !empty($_GET['approuve'])) {
      $approuve = (int) $_GET['approuve'];
      $req = $bdd->prepare('UPDATE infoContact SET approuve = 1 WHERE id = ?');
      $req->execute(array($approuve));
   }
   if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
      $supprime = (int) $_GET['supprime'];
      $req = $bdd->prepare('DELETE FROM infoContact WHERE id = ?');
      $req->execute(array($supprime));
   }
}

$infoContact = $bdd->query('SELECT * FROM infoContact ORDER BY id DESC LIMIT 0,5');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Accueil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital@1&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
</head>
   <style >
      .jumbotron{
    background-color: #961C1A;
   }
   

     .nav-link{
      color: #961C1A;
    }
    .navbar-nav{
      margin-left: 30%;
      column-count: 6;
      column-gap: 5%;
    }

    * {
  box-sizing: border-box;
}



.container {
  border-radius: 5px;
  background-color:#ECF0F1 ;
  padding: 20px;
  width: 1000px;
}

.col-25 {
  width: 25%;
  margin-top: 6px;
  margin-left: 4%;
}

.col-75 {
 
  width: 500px;
  margin-top: 6px;
  margin-right: 5%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  margin-right: 50%;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 3px solid black;
  text-align: left;
  padding: 8px;
}


   </style>

  <body>

  
  
  <nav class="navbar navbar-expand-sm bg-light">
  <a class="navbar-brand" href="accueil.html"><img src="it6.png" width="20%" qty></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
       <li class="nav-item">
       <b> <a class="nav-link" href="Admin.html">Accueil</a> </b>
      </li>
      <li class="nav-item">
       <b> <a class="nav-link" href="AdminApropos.html">APropos</a></b>
      </li>
      <li class="nav-item">
        <b><a class="nav-link" href="AdminService.html">Service</a></b>
      </li>  
      <li class="nav-item"> 
        <b><a class="nav-link" href="AdminEvent.html">Evenements</a></b>
      </li>
       <li class="nav-item"> 
        <b><a class="nav-link" href="AdminArticle.html">Articles</a></b>
      </li>
       <li class="nav-item"> 
        <b><a class="nav-link" href="AdminContact.php">Contact</a></b>
      </li>
      <li class="nav-item"> 
       <b><a class="nav-link" href="AdminUsers.php">Users</a></b>
      </li>
  </ul>
  </div>  
</nav>
<img src="contact1.jpg" style="width:100%;height:500px;">

<h1 style="font-family: 'Prompt', sans-serif;margin-left: 5%;color: #961C1A;">Contact</h1> 
<hr style="width:82%;margin-left:17%;size:40%;color:blue;"><br><br><br>

<div class="container">
  <form action="">
  <table>
    <tr>
    <th>Nom</th>
    <th>Prenom</th>
    <th>E-Mail</th>
    <th>Objet</th>
    <th>Num Telephone</th>
    <th>Message</th>
    <th>Approuvation</th>
    <th>Suppression</th>
    </tr>
   
      
      <?php while($c = $infoContact->fetch()) { ?>
         <tr>
      <td><?= $c['nom'] ?></td>  <td><?= $c['prenom'] ?></td>  <td><?= $c['mail'] ?></td>  <td><?= $c['objet'] ?></td> <td> <?= $c['tele'] ?></td> <td> <?= $c['message'] ?></td>
      <?php if($c['approuve'] == 0) { ?> 
       <td><a href="AdminContact.php?type=infoContact&approuve=<?= $c['id'] ?>">Approuver</a></td>
      <?php } ?> 
      <td><a href="AdminContact.php?type=infoContact&supprime=<?= $c['id'] ?>">Supprimer</a></td>
         </tr>
      <?php } ?>
    
   

  </table>
  </form>
</div>

<BR><BR>



<div class="jumbotron " style="margin-bottom:0;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13231.537524459998!2d-6.8479564!3d33.9955034!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x33daca805e37835e!2sIT6%20SARL!5e0!3m2!1sfr!2sma!4v1626684248903!5m2!1sfr!2sma" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<h4 style="font-family: serif;margin-left: 45%;margin-top: -28%;color: white;">Lien Utiles</h4>
<br>
<ol style="margin-left: 45%;color: white;">
<li><a href="Admin.html" style="color: white;">Accueil</a></li>
<li><a href="AdminApropos.html" style="color: white;">A propos</a></li>
<li><a href="AdminService.html" style="color: white;">Service</a></li>
<li><a href="AdminEvent.html" style="color: white;">Evenements</a></li>
<li><a href="AdminArticle.html" style="color: white;">Articles</a></li>
<li><a href="AdminContact.php" style="color: white;">Contact</a></li>
</ol>
<h4 style="font-family: serif;margin-left: 70%;margin-top:-17.6% ; color: white;">Contact</h4>
<br>
<div style="margin-left: 70%;color: white;">
<img src="ma.png"style="width: 6.5%;"> 37, Angle Avenue Fal ould Oumeir et rue Oukeimeden Appt 4, Agdal - Rabat<br>
<img src="phone.png" style="width: 6%;"> Téléphone :+212 5 37 67 03 32<br>
<img src="phone.png" style="width: 6%;"> Fax :+212 5 37 67 00 96<br>
<img src="mail.png" style="width: 6%;"> contact@it6.ma<br>
<img src="mail.png" style="width: 6%;"> seminaire@it6.ma<br>
<a href="https://www.facebook.com/IT6IT6/"><img src="fb.png" style="width: 9%; margin-top: 8%;"></a>
<a href="https://twitter.com/It6Group"><img src="tw.png" style="width: 9%; margin-top: 8%;"></a>
<a href="https://fr.linkedin.com/company/it6-consulting"><img src="in.png" style="width: 9%; margin-top: 8%;"></a>
<a href=""><img src="tube.png" style="width: 9%; margin-top: 8%;"></a>
<a href="https://www.instagram.com/it6/"><img src="ig.png" style=" width: 9%; margin-top: 8%;"></a>
</div>
</body>
</html>