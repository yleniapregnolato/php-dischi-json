<?php 
// prelevo i dati
$dischi_json = file_get_contents("dischi.json"); // string
// trasformo la stringa in un array
$dischi_array = json_decode($dischi_json, true); // array
// var_dump($dischi_json);

// gestione della risposta:
$response = [
    "result" => $dischi_array,
    "success" => true
];

$response_json = json_encode($response);

header("Content-Type: application/json");
echo $response_json;

?>