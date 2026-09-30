<?php
$config = require "config.php";
$db = new DataBase($config['database']);
$heading = "My Notes";
$notes = $db -> query('SELECT * FROM notes WHERE userID =2')->findOrAbort();
require 'views/notes.view.php';
