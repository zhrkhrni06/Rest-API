<?php

// $mahasiswa = [
//     [
//         "nama" => "Zahara Khairani",
//         "nim" => "2217020057",
//         "email" => "zhrkhrni06@gmail.com"
//     ],
//     [
//         "nama" => "Alfares",
//         "nim" => "2217020000",
//         "email" => "alfares@gmail.com"
//     ]
// ];


$dbh = new PDO('mysql:host=localhost;dbname=mahasiswa', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);
$data = json_encode($mahasiswa, JSON_PRETTY_PRINT);
header('Content-Type: application/json');
echo $data;

?>
