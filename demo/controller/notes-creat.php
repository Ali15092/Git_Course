<?php
$heading = "creat note";

$config = require "config.php";
$db = new DataBase($config['database']);
if($_SERVER['REQUEST_METHOD']==="POST"){

$db -> query('INSERT INTO notes (body,userID) VALUES(:body,:userID)',[
    'body'=> $_POST['body'],
    'userID'=>2
])->find();
}

require('views/notes-creat.view.php');