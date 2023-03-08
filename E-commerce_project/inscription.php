<?php
session_start();

require_once 'includes/membre_inc.php';
require_once 'includes/database_inc.php';

try {
    
    
    $db = new Database('localhost', 'site', 'root', '');
    $pdo = $db->connect();

    
    $membre=new Membre();
    $membre->setMembre($_POST,$pdo);

    $_SESSION['pseudo']=$membre->pseudo;

    header('Location: index_connecter.php');
   
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>