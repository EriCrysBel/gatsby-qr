<?php
header('Cache-Control: no-cache, no-store, must-revalidate'); 
header('Pragma: no-cache'); 
header('Expires: 0');
require "../config/cors.php";
require '../vendor/autoload.php';
require "../config/database.php";


$sql = "SELECT * FROM qr_codes";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$qr_codes = $stmt->fetchAll();
header('Content-Type: application/json; charset=utf-8');
echo json_encode(['qr_codes' => $qr_codes]);


?>