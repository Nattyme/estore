<?php 

$db = new PDO('mysql:host=localhost;dbname=estore', 'root', '' );

$sql = "SELECT * FROM `products`";
$result = $db->query($sql);
$result->fetchAll(PDO::FETCH_ASSOC);

?>