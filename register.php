<!DOCTYPE html>
    <html>
    <head>
        <title>Registration</title>
        <style>
            body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f3f3f3;
      }
      .login-container {
        width: 450px;
        margin: 100px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.2);
      }

      .img{
background-image: url('homebg.jpg');
background-size: cover;
height: 100vh;
display: flex;
justify-content: center;
align-items: center;
}
      h1 {
        margin: 0 0 20px;
        text-align: center;
      }
      .form-group {
        margin-bottom: 10px;
      }
      /* Input styles */
      input[type="text"],
      input[type="email"],
      input[type="password"] {
        width: 90%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        -webkit-transition: border-color 0.2s;
        transition: border-color 0.2s;
      }
      input[type="email"]:focus,
      input[type="password"]:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0px 0px 2px 1px rgba(0,0,0,0.1);
      }
      /* Button styles */
      .btn {
        width: 95%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        color:black:
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        text-transform: uppercase;
        -webkit-transition: background-color 0.2s;
        transition: background-color 0.2s;
      }
      .btn:hover {
        background-color: #0069d9;
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
    padding: 15px 25px;
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
        <div class="logo">MyWebsite</div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <div class="img">
    <div class="login-container">
        <h1 class="text-center">Register</h1>
        <br>
          <br>
        <form method="post" action="process2.php">
        <div class="form-group">
        <label for="name">Name</label>
        <br>
          <br>
        <input type="text" id="name"  name="name"  placeholder="Enter name" required autofocus />
        </div>
        <br>
        <div class="form-group">
        <label for="dept">Dept</label>
        <br>
          <br>
        <input type="text" id="dept"  name="dept"  placeholder="Enter dept" required  />
        </div>
        <br>
        <div class="form-group">
        <label for="email">Email</label>
        <br>
          <br>
        <input type="email" id="email" name="email"  placeholder="Enter email" required  />
        </div>
        <br>
        <div class="form-group">
        <label for="password">Password</label>
        <br>
          <br>
        <input type="password" id="pass" name="pass" placeholder="Enter Password" required />
        </div>
        <br>
        <input class="btn" type="submit" name="save" value="submit">
        </form>
    </div>
    </body>
    </html>

