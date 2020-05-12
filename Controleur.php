<?php
require_once 'Modele.php';
function accueil(){
	$eleves=getEleves();
	require_once 'Vue/vueAccueil.php';
}
function erreur($msgErreur){
	require_once 'Vue/vueErreur.php';
}