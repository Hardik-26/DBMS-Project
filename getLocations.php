<?php
$locations = [
    [
        "title" => "Test Location 1",
        "address1" => "123 Main Street",
        "address2" => "City, Country",
        "coords" => ["lat" => 40.7128, "lng" => -74.0060],
        "placeId" => "test_place_id_1"
    ],
    [
        "title" => "Test Location 2",
        "address1" => "456 Oak Avenue",
        "address2" => "Town, Country",
        "coords" => ["lat" => 34.0522, "lng" => -118.2437],
        "placeId" => "test_place_id_2"
    ],
[
    "title" => "Test Location 3",
    "address1" => "Sanderheinrichtsleitenweg 20",
    "address2" => "Würzburg, Germany",
    "coords" => ["lat" => 49.7777, "lng" => 9.9630],
    "placeId" => "test_place_id_3"
]

];

// Output as JSON
header('Content-Type: application/json');
echo json_encode($locations);
?>
