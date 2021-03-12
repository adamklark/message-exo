<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=minitchate;charset=utf8', 'adam', 'azerty');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO  messages (User, Messages) VALUES(:User, :Messages)');
$req->execute(array($_POST['User'], $_POST['Messages']));
// Redirection du visiteur vers la page du minichat
header('Location: message.php');
?>