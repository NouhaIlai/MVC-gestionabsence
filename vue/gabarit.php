<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="Vue/style.css" />
        <title><?= $titre ?></title>
    </head>
<body>          
<div id="global">
<h1 style="color: red; "><center >LISTE DES ELEVES</center></h1>
<center><table border="1" >
    <tr style="color: blue;">
        <th>CNE</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Adresse</th>
        <th>Ville</th>
        <th>Email</th>
        <th>Photo</th>
        <th>etat</th>
        <th>absence</th>
        <th> ajouter une absence </th>
    </tr>
<?= $contenu ?>
</table>    
</div>
</body>
</html>