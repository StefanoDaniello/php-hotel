<?php
include __DIR__ . "/Models/hotel.php";

if ((isset($_GET['parking']) && $_GET['parking'] !== '') || (isset($_GET['vote']) && $_GET['vote'] !== '')) {
    $parking = $_GET['parking'];
    $vote = $_GET['vote'];

    $hotels_foreach = array_filter($hotels, function ($hotel) use ($parking, $vote) {
        return ($hotel['parking'] == $parking || $parking == "all") && ($hotel['vote'] >= $vote || $vote == "all");
    });
} else {
    $hotels_foreach = $hotels;
}


include __DIR__ . "/Views/header.php";
?>
<main class="container">
  <?php
    include __DIR__ . "/Views/table.php";
  ?>
</main>