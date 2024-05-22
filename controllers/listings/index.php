

<?php
$config = require basePath('config/db.php');
$db = new Database($config);

$listing = $db->query('SELECT * FROM listings')->fetchAll();

loadView('listings/index', ['listing' => $listing]);
?>


