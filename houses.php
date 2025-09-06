<?php
// houses.php
// Simple PHP "house list" demo for AgentFire

// Fake list of houses
$houses = [
    ["id" => 1, "city" => "Austin", "price" => 300000],
    ["id" => 2, "city" => "Dallas", "price" => 400000],
    ["id" => 3, "city" => "Austin", "price" => 500000],
];

// Function: find houses in a city cheaper than max price
function findHouses(array $houses, string $city, int $maxPrice): array {
    $result = [];
    foreach ($houses as $h) {
        if ($h["city"] === $city && $h["price"] <= $maxPrice) {
            $result[] = $h;
        }
    }
    return $result;
}

// Example use: get Austin houses under 400000
header("Content-Type: application/json");
echo json_encode(findHouses($houses, "Austin", 400000));