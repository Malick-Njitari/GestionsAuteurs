<?php
	$id=$_GET['IDAUTEUR'];
	require_once('connexion.php');
		$resultat = $con->query("SELECT AUT.NOMAUTEUR, AUT.PRENOMAUTEUR, LIV.TITRELIVRE, LIV.NBREPAGES, RED.NOMBRECHAP
									FROM AUTEUR AUT, LIVRE LIV, REDIGER RED
									WHERE AUT.IDAUTEUR = RED.IDAUTEUR
									AND RED.IDLIVRE = LIV.IDLIVRE
									AND AUT.IDAUTEUR=$id");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" /><title>Listing des Livres de L'Auteur Numéro</title>
	</head>
	<body><div><div><div>
				<fieldset><legend><div><H1>Liste des Informations Enregistrées dans La Base de Données</H1></div></legend><br>
					<center><H2><table border=2 cellspacing=2>
						<thead><tr>
								<th>NOM AUTEUR</th>
								<th>PRENOM AUTEUR</th>
								<th>TITRE LIVRE</th>
								<th>PAGES</th>																																																												
								<th>CHAPITRES</th>																																																												
							</tr></thead>
						<tbody>
							<?php while($VBLETABLE=$resultat->fetch()){?>
								<tr>
									<td align="center"><?php echo $VBLETABLE['NOMAUTEUR'] ?></td>
									<td align="center"><?php echo $VBLETABLE['PRENOMAUTEUR'] ?></td>
									<td align="center"><?php echo $VBLETABLE['TITRELIVRE'] ?></td>
									<td align="center"><?php echo $VBLETABLE['NBREPAGES'] ?></td>
									<td align="center"><?php echo $VBLETABLE['NOMBRECHAP'] ?></td>
									<?php } ?>
									
						</tbody></table></H2><br><br><a href="LesAuteurs.php">Revenir Sur Le Menu Principal</a>
					</center></fieldset><hr></div></div></div>
	</body>
</html>