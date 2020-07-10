<?php
session_start();
    //Variables//
    $lien="<a href='http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/connexion.php?page=connexion'>ici</a>";
    $accueil="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-routing.php?page=1";
    //Conditions//
    $sth = $dbh->prepare('SELECT , login, password 
    FROM utilisateurs 
    WHERE id');

$sth->execute(array(150, 'login')); 
$login = $sth->fetchAll();

$sth->execute(array(175, 'password')); 
$password = $sth->fetchAll()
?>