<?php
header("Content-Type: application/json");

// URL API yang ingin disembunyikan
$url = "https://panel.khfy-store.com/api/api-xl-v7/cek_stock_akrab";

// Menggunakan cURL untuk mengambil data dari API
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/x-www-form-urlencoded",
    "Accept: application/json"
]);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
