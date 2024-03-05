<?php
	require_once('connexion.php');
		$resultat = $con->query("SELECT * FROM AUTEUR");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" /><title>Liste des Auteurs</title>
	</head>
	<body><div><div><div>
				<fieldset><legend><div><H1>Liste des Auteurs Enregistrés dans La Base de Données</H1></div></legend><br>
					<center><table border=2 cellspacing=2>
						<thead><tr>
								<th>ID AUTEUR</th>
								<th>NOM AUTEUR</th>
								<th>PRENOM AUTEUR</th>							
								<th>DATE NAISSANCE</th>											
								<th>ACTIONS</th>
							</tr></thead>
						<tbody>
							<?php while($VBLETABLE=$resultat->fetch()){?>
								<tr>
									<td align="center"><?php echo $VBLETABLE['IDAUTEUR'] ?></td>
									<td><?php echo $VBLETABLE['NOMAUTEUR'] ?></td>
									<td><?php echo $VBLETABLE['PRENOMAUTEUR'] ?></td>
									<td><?php echo $VBLETABLE['DATENAISSANCEAUTEUR'] ?></td>
									<td><!--  Action Editer un VBLETABLE -->
											<a href="LesLivres.php?IDAUTEUR=<?php echo $VBLETABLE['IDAUTEUR'] ?>">LesLivres
											</a><!--  Action Supprimer un VBLETABLE -->											
										<?php } ?>
									</td></tr>
						</tbody></table><br><br><a href="NouvelAuteur.php">Enregistrer Un Nouvel Auteur</a><br><br>
								<a href="index.php">Revenir Sur Le MENU</a>
					</center></fieldset><hr></div></div></div>
	</body>
</html>