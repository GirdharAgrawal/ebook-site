<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="login.css">

</head>

<body>
    <div class="transtition">

        <!-- background Video -->
        <video autoplay loop muted play-inline src="Animated_background_2.mp4" type="video/mp4"
            class="back-video"></video>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid mx-1">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a href="/ebook-site/index.php" class="nav-link btn btn-outline-success text-light mx-2">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#About-us" class="nav-link btn btn-success text-light">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="#e-book" class="nav-link btn btn-success text-light mx-2">E-Books</a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link btn btn-outline-success text-light mx-2">Login</a>
                </li>
                <li class="nav-item">
                    <a href="signup.php" class="nav-link btn btn-outline-success text-light mx-2">Sign Up</a>
                </li>
        </div>
        <form class="d-flex col-lg-3">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light mx-3" type="submit">Search</button>
        </form>
        </ul>
    </nav>
    <div class="container-lg my-4 justify-content-center">
            <form method="POST" action="/ebook-site/php/conn-login.php">

            
                <!-- Card Code --> 
                <div class="card bg-light">

                    <!-- Card Head -->
                    <div class="card-header">
                        
                        <h2 class="text-center display-4 pb-2">Login Your Account</h2>
                        <?php if (isset($_GET['error'])){?>
                            <div class="alert alert-danger" role="alert">
    
                                <?=htmlspecialchars($_GET['error']);?>
                            </div>
                    <?php } ?>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="input-group container-sm my-0">
                            <label for="email" class="container m-1"><b>Username</b></label>
                            <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                            <input id="email" name="email" type="text" class="form-control" required>
                            <button class="btn" type="button" data-bs-target="#email_modal" data-bs-toggle="modal"><i
                                    class="bi bi-info-circle-fill"></i></button>
                            <label for="password" class="container mt-4"><b>Password</b></label>
                            <span class="input-group-text"><i class="bi bi-pass"></i></span>
                            <input id="password" name="password" type="text" class="form-control" required>
                        </div>

                        <!-- Card Foot -->
                        <div class="card-footer">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary col-12" id="login">Log in</button></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Sign Up Text --> 
            <div class="container m-5 d-flex justify-content-center text-dark">
                <h2>Don't Have an Account? <a href="signup.html" class="text-warning"
                        style="text-decoration: none;">Sign Up</a> </h2>
            </div>
        </div>
    </div>

    <!-- Modal Codes -->
    <div class="modal" id="email_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Email:- </h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Generally Username is your email id only.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>