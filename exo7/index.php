<?php
$page = "exercice7";
include '../header.php';

require_once '../exo1/parametre.php';
$dsn = 'mysql:dbname=' . DB . '; host=' . HOST . ';';
try{
    $db = new PDO($dsn, USER, PASSWD);
}catch (Exception $ex){
die('La connexion à la base de donnée à échoué');
}
$db->exec("SET CHARACTER SET utf8");
$query  = 'SELECT `lastName`, `firstName`, `birthDate`, `card`, `cardNumber` FROM `clients`ORDER BY `lastName`ASC';
$clientQueryStat = $db->query($query);
$clientList = $clientQueryStat->fetchAll(PDO:: FETCH_ASSOC);
foreach ($clientList AS $client): ?>
<p><?= $client[ 'lastName']. ' ' .$client['firstName']. ' ' .$client['birthDate']. ' ' .$client['card']. ' ' .$client['cardNumber'] ?></p>
<?php endforeach;?>

 <?php
 include '../footer.php';
  ?>
