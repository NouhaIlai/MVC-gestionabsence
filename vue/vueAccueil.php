<?php $titre = 'Gestion des élèves';?>
<?php ob_start();?>
<?php foreach ($eleves as $eleve):
$et="";
	$lien="";
	if($eleve["etat"]==1)
	{
		$et="active";
		$lien="Vue/activer.php?cne=".$eleve["CNE"]."&etat=0";
	}
	else
	{
		$et="desactive";
		$lien="Vue/activer.php?cne=".$eleve["CNE"]."&etat=1";
	}
	?>
		<tr>
		<td><?= $eleve["CNE"]; ?></td>
		<td><?= $eleve["Nom"]; ?></td>
		<td><?= $eleve["Prenom"]; ?></td>
        <td><?= $eleve["Adresse"]; ?></td>
        <td><?= $eleve["Ville"]; ?></td>
        <td><?= $eleve["email"]; ?></td>
        <td><img src="<?= $eleve["Photo"]; ?>" height="50px"></td>
		<td><a href="<?= $lien; ?>"><?= $et; ?></a></td>
		<td><?= $eleve["absence"]; ?></td>
        <td><a href="Vue/absence.php?nb=<?php echo $eleve['absence']; ?>&cne=<?php echo $eleve['CNE']; ?>">ajouter une absence</a></td>
	</tr>
<?php endforeach;?>
<?php $contenu = ob_get_clean();?>
<?php require_once 'gabarit.php';?>
    