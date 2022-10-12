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
       .polaroid {
      width: 23%;
      margin-left: 7%;
      background-color: white;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      margin-bottom: 25px;
    }

    .container {
     padding: 10px 20px;
   }
   .text {
     padding: 10px 20px;
     font-size: 84%;
   }
   .polaroid_text {
      width: 60%;
      size: 50%;
      margin-left: 36%;
      background-color: white;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      margin-bottom: 25px;
      padding: 20px 20px;
    }  
    .img{
      max-width:180px;

     }

    .input[type=file]{
      padding:10px;
      background:#2d2d2d;
      margin-top: 10%;
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
        <b><a class="nav-link" href="AdminContact.html">Contact</a></b>
      </li>
     <li class="nav-item"> 
         <b><a class="nav-link" href="AdminUsers.php">Users</a></b>
      </li>
  </ul>
  </div>  
</nav>


<?php 
  echo $_POST[''];
 
?>



<br>
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
<li><a href="AdminContact.html" style="color: white;">Contact</a></li>
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