<?php include('connect.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <!-- Header -->
    <header>
        <img src="img/logo.png" class="logo" alt="Logo" href />
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">About</a></li>
            <li><a href="index.php">Portfolio</a></li>
            <li><a href="index.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </header>
    <!-- //Header -->

    <!-- Sign -->
    <section id="login">
        <div class="form">
            <h3>Login</h3>
            <?php include('errors.php'); ?>
            <form action="login.php" method="post">
                <div class="user">
                    <input type="text" name="username" required>
                    <span></span>
                    <label style="left: 40px;">Username</label>
                </div>
                <div class="user">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <div class="pass">Forgot Password?</div>
                <button class="btn" name="login_user" type="submit">Login</button>
                <div class="sign-up">
                    Not a member? <a href="signup.php">Signup Now</a>
                </div>
            </form>
        </div>
        <!-- Footer -->
        <section class="footer" id="foot">
            <p>Copyright By Team © 2022</p>
        </section>
        <!-- //Footer -->

    </section>
    <!-- //Sign -->

    

    <!-- Script -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="Js.js"></script>
    <!-- //Script -->
</body>

</html>