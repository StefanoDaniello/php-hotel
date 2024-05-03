<?php
session_start();
if(isset($_SESSION['userId'])) {
    $name = $_SESSION['name'];
    session_destroy();
}else{
    header('Location: login.php');
}

    include __DIR__ . "/Views/header.php";
?>

<main class="container my-4"></main>
    <div class="text-center">
        <h3 class="text-white"><?= "Arrivederci " . $name ?></h3>
    </div>
</main>

