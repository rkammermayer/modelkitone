<?php
// Einfache CORS-Header für lokale Entwicklung
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

// Autoloader / includes falls benötigt
require_once __DIR__ . '/../../core/router.php';

// Route bestimmen
$method = $_SERVER['REQUEST_METHOD'];
$path = $_GET['q'] ?? ''; // z. B. ?q=recipe/get

// Routing aufrufen
$response = route($method, $path);

// Antwort senden
echo json_encode($response);