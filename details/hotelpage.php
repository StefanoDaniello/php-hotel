<?php

include __DIR__ . "/../Models/hotel.php";
$hotel = getHotel($hotels);
include __DIR__ . "/../Views/header.php";
?>

<main class="container py-2">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Hotel Details</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <img src="../<?= $hotel['img'] ?>" class="card-img-top" alt="<?= $hotel['name'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $hotel['name'] ?></h5>
                    <p class="card-text"><?= $hotel['description'] ?></p>
                    <p class="card-text"><i class="fa-solid fa-location-dot"></i> <?= $hotel['distance_to_center'] ?> km</p>
                </div>
            </div>
        </div>
    </div>
</main>