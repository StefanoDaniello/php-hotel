<?php
    $selectedVote = isset($_GET['vote']) && $_GET['vote'] !== '' ? $_GET['vote'] : 'all';
    $selectedParking = isset($_GET['parking']) && $_GET['parking'] !== '' ? $_GET['parking'] : 'all';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>php-hotel</title>

</head>

<body>
    <header  <?php 
    if(!isset($_SESSION['userId'])) echo 'style="display: none;"'; ?>>
        <div class="container  d-flex justify-content-between p-3">
            <h1 class="text-white">
                Hotels
            </h1>
            <div class="d-flex">
            <form action="index.php" method="GET" class="d-flex">
                    <select class="form-control me-2" name="vote">
                        <option value="all" <?php if($selectedVote === 'all') echo 'selected'; ?>>vote</option>
                        <option value="1" <?php if($selectedVote === '1') echo 'selected'; ?>>1</option>
                        <option value="2" <?php if($selectedVote === '2') echo 'selected'; ?>>2</option>
                        <option value="3" <?php if($selectedVote === '3') echo 'selected'; ?>>3</option>
                        <option value="4" <?php if($selectedVote === '4') echo 'selected'; ?>>4</option>
                        <option value="5" <?php if($selectedVote === '5') echo 'selected'; ?>>5</option>
                    </select>
                    <select class="form-control me-2" name="parking">
                        <option value="all" <?php if($selectedParking === 'all') echo 'selected'; ?>>All</option>
                        <option value="0" <?php if($selectedParking === '0') echo 'selected'; ?>>No Parking</option>
                        <option value="1" <?php if($selectedParking === '1') echo 'selected'; ?>>Parking</option>
                    </select>
                    <button type="submit" class="btn btn-outline-success">Search</button>
                </form>
            </div>
        </div>
    </header>