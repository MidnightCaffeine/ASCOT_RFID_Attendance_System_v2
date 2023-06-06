<?php
require_once 'lib/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $page = 'Login';
    include_once 'assets/includes/header.php';
    ?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script>

    </script>
</head>

<body class="login">
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center pt-4">
                                        <a href="index.html" class="llogo d-flex align-items-center w-auto">
                                            <img src="assets/img/ascotLogo.png" alt="">
                                        </a>
                                    </div>
                                    <div class="form-floating pt-2 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Sign-In To</h5>
                                        <h5 class="text-center">ASCOT RFID Attendance System</h3>
                                    </div>
                                    <form class="row g-3 needs-validation" novalidate>
                                        <div class="form-floating mb-3 has-validation">
                                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                            <label for="floatingInput">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="floatingInput" placeholder="password" required>
                                            <label for="floatingInput">Password</label>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Don't have account?
                                                <a data-target="#staticBackdrop" data-bs-toggle="modal" href="#staticBackdrop">Create an account</a>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Sign-Up</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" novalidate>
                        <div class="row g-2">
                            <div class="col-sm-6">
                                <div class="form-floating mb-3 has-validation">
                                    <input type="text" class="form-control" id="register_firstname" name="register_firstname" placeholder="Firstname" required>
                                    <label for="register_firstname">Firstname</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-floating mb-3 has-validation">
                                    <input type="text" class="form-control" id="register_lastname" name="register_lastname" placeholder="Lastname" required>
                                    <label for="register_lastname">Lastname</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3 has-validation">
                                    <input type="text" class="form-control" id="register_middlename" name="register_middlename" placeholder="Middlename" required>
                                    <label for="register_middlename">Middlename</label>
                                </div>
                        <div class="form-floating mb-3 has-validation">
                            <input type="email" class="form-control" id="register_email" placeholder="name@example.com" required>
                            <label for="register_email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="privilege">
                                <option value="1">Student</option>
                                <option value="2">Instructor</option>
                            </select>
                            <label for="privilege">Position</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="register_password" placeholder="password" required>
                            <label for="register_password">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="confirm_password" placeholder="password" required>
                            <label for="confirm_password">Confirm Password</label>
                        </div>
                        <div class="col-md-12 text-center block">
                            <button type="submit" class="btn btn-secondary w-100">Sign-Up</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <?php
    require_once 'assets/includes/scripts.php';
    ?>
</body>

</html>