<?php
$page = "exercice2";
include '../header.php';

require_once '../exo1/parametre.php';
$dsn = 'mysql:dbname=' . DB . '; host=' . HOST . ';';
try{
    $db = new PDO($dsn, USER, PASSWD);
}catch (Exception $ex){
die('La connexion à la base de donnée à échoué');
}
$db->exec("SET CHARACTER SET utf8");
$query = 'SELECT * FROM `showTypes`';
$showTypesQueryStat = $db->query($query);
$showTypesList = $showTypesQueryStat->fetchAll(PDO:: FETCH_ASSOC);
foreach ($showTypesList AS $showTypes): ?>
<p><?= $showTypes[ 'type'] ?></p>
<?php endforeach;?>

 <?php
 include '../footer.php';
  ?>