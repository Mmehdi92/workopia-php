<?php
$config = require basePath('config/db.php');
$db = new Database($config);

$listing = $db->query('SELECT * FROM listings limit 6')->fetchAll();

loadView('home', ['listing' => $listing]);
