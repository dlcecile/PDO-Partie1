<?php
$page = "exercice6";
include '../header.php';

require_once '../exo1/parametre.php';
$dsn = 'mysql:dbname=' . DB . '; host=' . HOST . ';';
try{
    $db = new PDO($dsn, USER, PASSWD);
}catch (Exception $ex){
die('La connexion à la base de donnée à échoué');
}
$db->exec("SET CHARACTER SET utf8");
$query  = 'SELECT `title`,`performer`,`date`,`startTime` FROM `shows` ORDER BY `title` ASC';
$showQueryStat = $db->query($query);
$showList = $showQueryStat->fetchAll(PDO:: FETCH_ASSOC);
foreach ($showList AS $show): ?>
<p><?= $show[ 'title']. ' ' .$show['performer']. ' ' .$show['date']. ' ' .$show['startTime'] ?></p>
<?php endforeach;?>

 <?php
 include '../footer.php';
  ?>
