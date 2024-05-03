<?php
//    Essendo che  mandiamo i dati sempre a questa pagina e abbiamo il $_POST 
//    in auth.php includiamo in questa pagina auth che utilizza il $_POST email e password
  include __DIR__."/Controllers/auth.php";
  include __DIR__ . "/Views/header.php";
?>


<main class="py-5">
    <div class="container py-5 bg-body-tertiary rounded-4 form-width">
        <?php
        if (!empty($_GET['error']) ) {
            echo "<div class='alert alert-danger'>Email o password errati</div>";
        }
        ?>
        <div class="d-flex justify-content-center align-items-center">
            <form id="loginform" action="login.php" method="POST" class="text-center ">
                <img class="mb-4" src="./images/user.png" alt="logo" width="100">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                <div class="form-floating mb-4">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    <label for="password">Password</label>
                </div>
                <button id="submit" class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            </form>
        </div>
    </div>
   

</main>