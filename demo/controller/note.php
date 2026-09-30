<?php 

$config = require "config.php";
$db = new DataBase($config['database']);
$heading = "Note";
$id = $_GET['id'];
$note = $db -> query('SELECT * FROM notes WHERE id =?',[$id])->find();
$currentUserID=3;

authorize($note['userID']=== $currentUserID);


require 'views/note.view.php';