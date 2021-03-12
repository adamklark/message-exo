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
$req = $bdd->prepare('INSERT INTO  messages (user, messages) VALUES(:user, :messages)');
$req->execute(array($_POST['user'], $_POST['messages']));
// Redirection du visiteur vers la page du minichat
header('Location: message.php');
?>