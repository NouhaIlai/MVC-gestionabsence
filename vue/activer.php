<?php 
if (isset($_POST['oui'])) {
require_once('../Modele.php');
$bdd=getBdd();
$cne=$_POST['cne'];
$etat=$_POST['etat'];
$bdd->query("UPDATE eleves SET etat='$etat' WHERE CNE='$cne'"); 
header('location:../index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo ($_GET['etat']==1?'ACTIVE':'DESACTIVE'); ?></title>
</head>
<body>
<?php echo '<h2><center>vous voulez vraiment '.($_GET['etat']==1?'active':'desactive').' eleve '.$_GET['cne'].' ?</h2>';
 ?>
 <center><form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"><input type="hidden" name="cne" value="<?php echo  $_GET['cne'];?>"><input type="hidden" name="etat" value="<?php echo  $_GET['etat'];?>"><input type="submit" name="oui" value="oui"></form><a href="../index.php"><button>non</button></a>
</body>
</html>