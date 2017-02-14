<?php
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n",$string);
$newtableau = array();
	foreach ($dico as $motdico){
		if(substr($motdico,-1)== "q"){
			array_push($newtableau, $motdico);
		}
	}
	echo count($newtableau);

?>

<!-- - Combien de mots contient ce dictionnaire ? (Réponse + ligne de code)
Réponse:	$resultat = count($dico);
			echo($resultat);
			$resultat(336 532);
- Combien de mots font exactement 15 caractères ?
Réponse:	$newtableau = array();
				foreach ($dico as $motdico) {
					if (strlen($motdico)==15){
						array_push($newtableau, $motdico);
					}
				}
			echo count($newtableau);
			$newtableau(12 298);
- Combien de mots contiennent la lettre w ?
Réponse:	$lettre = "w";
			$newtableau = array();
				foreach ($dico as $motdico){
					if(strstr($motdico,$lettre)){
					array_push($newtableau, $motdico);
					}
				}
			echo count($newtableau);
			$newtableau(537);
- Combien de mots finissent par la lettre q ? 
Réponse:	$newtableau = array();
				foreach ($dico as $motdico){
					if(substr($motdico,-1)== "q"){
						array_push($newtableau, $motdico);
					}
				}
				echo count($newtableau);
				$newtableau(8);