<?php
$page = "exercice1";
include '../header.php';

require_once 'parametre.php';
$dsn = 'mysql:dbname=' . DB . '; host=' . HOST . ';';
try{
    $db = new PDO($dsn, USER, PASSWD);
}catch (Exception $ex){
die('La connexion à la base de donnée à échoué');
}

$query = 'SELECT `lastName` , `firstName` FROM `clients`';
$clientQueryStat = $db->query($query);
$clientList = $clientQueryStat->fetchAll(PDO:: FETCH_ASSOC);
foreach ($clientList AS $client): ?>
<p><?= $client[ 'firstName'] . ' ' . $client['lastName'] ?></p>
<?php endforeach;?>

 <?php
 include '../footer.php';
  ?>