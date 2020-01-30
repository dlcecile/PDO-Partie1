<?php
$page = "exercice5";
include '../header.php';

require_once '../exo1/parametre.php';
$dsn = 'mysql:dbname=' . DB . '; host=' . HOST . ';';
try{
    $db = new PDO($dsn, USER, PASSWD);
}catch (Exception $ex){
die('La connexion à la base de donnée à échoué');
}
$db->exec("SET CHARACTER SET utf8");
$query = 'SELECT `lastName`, `firstName` FROM `clients` WHERE `lastName`LIKE \'M%\' ORDER BY `lastName`ASC';
$clientQueryStat = $db->query($query);
$clientList = $clientQueryStat->fetchAll(PDO:: FETCH_ASSOC);
foreach ($clientList AS $client): ?>
<p><?= $client[ 'lastName']. ' ' .$client['firstName'] ?></p>
<?php endforeach;?>

 <?php
 include '../footer.php';
  ?>
