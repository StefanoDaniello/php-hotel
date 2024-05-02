<?php
include __DIR__ . "/Models/hotel.php";

if (!empty($_GET['parking']) || (isset($_GET['parking']) && $_GET['parking'] == 0)) {
    $parking = $_GET['parking'];
    $hotels_foreach = array_filter($hotels, function ($hotel) use ($parking) {
      return $hotel['parking'] == $parking || $parking == "all";
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