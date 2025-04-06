<?php
$link=mysqli_connect('localhost','root','', 'user_base2');
// Recuperer les donnees du formulaire
// $id = $_POST['id'];
$nom= $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$adresse_email = $_POST['adresse_email'];
$mdp = $_POST['mdp'];
$phone = $_POST['phone'];
$marque = $_POST['marque'];
$date = $_POST['date'];
$message = $_POST['message'];
// Requete d insertion des donnees dans la table Etudiant
 $sql = "INSERT INTO user2(nom, prenom,adresse, adresse_email, mdp, phone,marque,date,message) VALUES ( '$nom', '$prenom','$adresse','$adresse_email', '$mdp', '$phone','$marque','$date', '$message' )";
 mysqli_query($link, $sql);
$sql4="SELECT * FROM user2";
 $resultat=mysqli_query($link, $sql4);
 echo 
 '<p class= message> <i>Nous vous remercions d\'avoir choisi Autocar notre service de location de voitures.
 Nous confirmons que votre reservation a bien éte enregistré avec succès. Veuillez noter qu\'un permis de conduire valide est requis
  pour la location de notre voiture. Merci d\'en disposer lors de la prise en charge du véhicule </i> </p>';
?>
<style>
 body {
     text-align: center;
     background:whitesmoke;
 }
 .message {
      background:orangered;
     color: white;
     font-size: 50px;
     margin: 90px;
 }
 </style>




