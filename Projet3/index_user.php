<?php 
session_start();
$titre = "User";
include 'header.php'; ?>
Bonjour<h1> <?= $_SESSION["CURRENT_USER"]["prenom"]." " .$_SESSION["CURRENT_USER"]["nom"];?> user</h1>
<?php  include 'footer.php'; ?>