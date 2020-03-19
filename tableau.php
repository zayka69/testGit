<!DOCTYPE html>
<html lang="fr">
<head>
<title>Exercice pays</title>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8" />
</head>
<body>
<h2>Veuillez sélectionner un pays</h2>
<form action="tableau.php" method="POST">
<?php
$pays = array('France','Italie','Allemagne','Russie');
$villes['France'][0] = "Paris";
$villes['France'][1] = "Lyon";
$villes['France'][2] = "Marseille";
$villes['Italie'][0] = "Rome";
$villes['Italie'][1] = "Milan";
$villes['Italie'][2] = "Naples";
$villes['Allemagne'][0] = "Berlin";
$villes['Allemagne'][1] = "Munich";
$villes['Allemagne'][2] = "Francfort";
$villes['Russie'][0] = "Moscou";
$villes['Russie'][1] = "Saint-Pétersbourg";
$villes['Russie'][2] = "Nizhny-Novgorod";
?>
pays:<select name="pays" >
<?php
if (isset($_POST['pays'])) {
	$pays_selectionne = $_POST['pays'];
}
else {
	$pays_selectionne = $pays[0];
}
foreach ($pays as $valeur) {
	if ($valeur == $pays_selectionne) {
		echo "<option value='".$valeur."' selected='selected'
		>".$valeur."</option>";
	}
	else {
		echo "<option value='".$valeur."'>".$valeur."</option>";
	}
}
?>
</select>
<br />
<div>
<?php
foreach ($villes as $cle => $valeur) {
	if ($cle == $pays_selectionne) {
		foreach ($valeur as $valeur_selectionnee) {
			echo $valeur_selectionnee."<br />";
		}
	}
}
?>
</div>
<br />
<input type="submit" name="envoyer" value="valider"/>
</form>
</body>
</html>