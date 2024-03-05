<?php
	require_once('connexion.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Auteur - Formulaire Ajouter</title>
		<link rel="stylesheet" type="text/css" href="monstyle.css"></head>
	<body><center><div><br><div>
				<fieldset><legend><div><H1>Enregistrement Nouvelle Ligne de Données</H1></div></legend><br>
				<div><form method="post" action="InsertAuteur.php" enctype="multipart/form-data">
						<div>
							<label for="NOMAUTEUR" class="control-label">NOM AUTEUR</label>
							<input type="text" name="NOMAUTEUR" id="NOMAUTEUR"/><br><br>
						</div>
						<div>
							<label for="PRENOMAUTEUR" class="control-label">PRENOM AUTEUR</label>
							<input type="text" name="PRENOMAUTEUR" id="PRENOMAUTEUR"/><br><br>
						</div>
						<div>
							<label for="DATENAISSANCEAUTEUR" class="control-label">DATE NAISSANCE</label>
							<input type="date" name="DATENAISSANCEAUTEUR" id="DATENAISSANCEAUTEUR"/><br><br>
						</div>
						
						<button type="submit">Enregistrer</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<button type="reset">Rétablir</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<br><br><br>
						<a href="LesAuteurs.php">Retour Sur Le Listing</a>
					</form></div></fieldset></div></div></center></body>
</html>