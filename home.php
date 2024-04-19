<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School-Time</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .landing {
            background-image: url('homebg1.jpg');
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .dark-overlay {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            width: 40%;
        }
        .header {
    font-family: Verdana, sans-serif;
    padding: 20px; 
    height:100px;
        }

        body {
    margin: 10;
    padding: 10;
    font-family: Arial, sans-serif;
}

nav {
    background-color: #333;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 13px 25px;
}

.logo {
    font-size: 1.5rem;
}

.nav-links {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.nav-links li {
    margin: 0 10px;
}

.nav-links li a {
    color: #fff;
    text-decoration:none;
}

.nav-links li a:hover {
    text-decoration: underline;
}


    </style>
</head>
<body>
    <nav>
        <div class="logo">SchoolSync</div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <div class="landing">
        <div class="dark-overlay landing-inner text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="header" style="Verdana, sans-serif;">
                        SchoolSync
                        </h1>
                        <p class="lead">
                            Education is the passport to the future, 
                        </p>
                        <p class="lead">
                            for tomorrow belongs to those who prepare for it today!!
                        </p>
                        <hr>
                        <a href="register.php" class="btn btn-lg btn-info mr-2">
                            Register
                        </a>
                        <br>
                        <br>
                        <a href="sl.php" class="btn btn-lg btn-light">
                            StudentLogin
                        </a>
                        <a href="tl.php" class="btn btn-lg btn-light">
                           TeacherLogin
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>