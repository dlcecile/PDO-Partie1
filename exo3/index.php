<?php
$page = "exercice3";
include '../header.php';

require_once '../exo1/parametre.php';
$dsn = 'mysql:dbname=' . DB . '; host=' . HOST . ';';
try{
    $db = new PDO($dsn, USER, PASSWD);
}catch (Exception $ex){
die('La connexion à la base de donnée à échoué');
}
$db->exec("SET CHARACTER SET utf8");
$query = 'SELECT  `firstName`, `lastName` FROM `clients` LIMIT 20';
$clientQueryStat = $db->query($query);
$clientList = $clientQueryStat->fetchAll(PDO:: FETCH_ASSOC);
foreach ($clientList AS $client): ?>
<p><?= $client[ 'firstName'] . ' ' .$client['lastName'] ?></p>
<?php endforeach;?>

 <?php
 include '../footer.php';
  ?>