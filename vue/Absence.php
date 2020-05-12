<?php 
if (isset($_POST['oui'])) {
require_once('../modele.php');
$bdd=getBdd();
$cne=$_POST['cne'];
$nb=(int)$_POST['nb'] + 1;
$bdd->query("UPDATE eleves SET absence='$nb' WHERE CNE='$cne'"); 
header('location:../index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title style="color: blue"><center> Ajouter des absences?</center></title>
</head>
<body><div align="center" style="color: gold">
<?php echo '<h2 style="background-color: blue">vous voulez vraiment Ajouter une absance a eleve '.$_GET['cne'].' ?</h2>';
 ?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"><input type="hidden" name="cne" value="<?php echo  $_GET['cne'];?>"><input type="hidden" name="nb" value="<?php echo  $_GET['nb'];?>"><input type="submit" name="oui" value="oui"></form><a href="../index.php"><button>non</button></a>
</div>
</body>
</html>