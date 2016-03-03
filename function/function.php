<?php

include_once 'connexion.php';


define('ROOT_PATH', dirname(__FILE__) . '/../');
@defined('DOMAIN', $_SERVER['HTTP_HOST']);
define('DS', DIRECTORY_SEPARATOR);

//echo '<pre>';
//print_r($_SERVER);

function add($fileName) {

    include_once ROOT_PATH . 'inc' . DS . $fileName . '.php';
}

function template($fileName) {

    include_once ROOT_PATH . 'inc' . DS . 'template' . DS . $fileName . '.php';
}

function querys($req) {
    global $pdo;
    $resultat = $pdo->query($req);
    if (!$resultat) {
        die("Erreur sur la requête SQL.<br />Message : " . $mysqli->error . "<br />Code : " . $req);
    }
    return $resultat;
}

function Article(){
    $art = querys('SELECT * FROM article WHERE public = 1 ORDER by id DESC');
    
    $art = $art->fetchAll();
    return $art;
}

function ArticleLast(){
    $art = querys('SELECT * FROM article WHERE public = 1 ORDER by id DESC LIMIT 0,1');
    
    $art = $art->fetchAll();
    return $art;
}

function Category(){
    $art = querys('SELECT * FROM category ORDER by id DESC');
    
    $art = $art->fetchAll();
    return $art;
}