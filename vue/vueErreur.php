<?php $titre = 'Gestion des élèves';?>
<?php ob_start();?>
<p>Une erreur est survennue : <?= $msgErreur ?></p>
<?php $contenu = ob_get_clean();?>
<?php require_once 'gabarit.php';?>