<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$pdo = new PDO('mysql:host=db613230787.db.1and1.com; dbname=db613230787', 'dbo613230787','caracas212', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));