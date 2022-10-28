<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    
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
                    <a href="/ebook-site/login/login.php"
                        class="nav-link btn btn-outline-success text-light mx-2">Login</a>
                </li>
                <li class="nav-item">
                    <a href="/ebook-site/login/signup.php" class="nav-link btn btn-outline-success text-light mx-2">Sign
                        Up</a>
                </li>
        </div>
        <form class="d-flex col-lg-3">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light mx-3" type="submit">Search</button>
        </form>
        </ul>
    </nav>
    
    <form class="d-flex justify-content-center" method="POST" action="/ebook-site/php/conn-signup.php">
        <div class="container m-5">
            <div class="card">
                <div class="card-header">
                    <h4>SIGN UP YOUR ACCOUNT</h4>
                </div>
                <div class="card-body">
                    <div class="input-group container-sm mt-2">
                    <label for="fname" class="container mt-4"><b>Full Name</b></label>
                        <input type="text" name="fullName" class="form-control">    
                    <label for="email" class="container my-2"><b>Username</b></label>
                        <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                        <input id="email" name="email" type="text" class="form-control">
                        <label for="password" class="container mt-4"><b>Password</b></label>
                        <span class="input-group-text"><i class="bi bi-pass"></i></span>
                        <input id="password" name="password" type="password" class="form-control">
                        <label for="password" class="container mt-4"><b>Confirm Password</b></label>
                        <span class="input-group-text"><i class="bi bi-pass"></i></span>
                        <input type="text" name="password" id="password" class="form-control">
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Submit" class="btn btn-success col-12">
                </div>
            </div>
        </div>
      
                        <?php if (isset($_GET['succes'])){?>
                            <div class="alert alert-danger" role="alert">
    
                                <?=htmlspecialchars($_GET['succes']);?>
                            </div>
                    <?php } ?>
    </form>
</body>

</html>