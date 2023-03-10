<?php

$username='root';
$servername='localhost';
$password='';
$database='user_db';
$errors = array();

$conn = new mysqli($servername, $username, $password, $database);


$conn = mysqli_connect($servername, $username, $password, $database);
echo('connect');

// REGISTER USER
if(isset($_POST['submit'])){
    
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password2']);

    if (empty($username)) { array_push($errors, "name is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
    }

    $user_check_query = "SELECT * FROM sign_up WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { 
        if ($user['username'] === $username) {
            array_push($errors, "name already exists");
            }
    
        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
            }
        }

        if (count($errors) == 0) {
            $password = md5($password_1);
            
            $query = "INSERT INTO sign_up (username, email, password) VALUES('$username', '$email', '$password')";
            mysqli_query($conn, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }


};

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM sign_up WHERE username ='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
?>