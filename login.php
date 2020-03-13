<?php

if(isset($_POST['login'])) {
    require('./config/db.php');

    $email = $_POST['userEmail'];
    echo "Name: $email <br />";

    $password = $_POST['password'];
    echo "Password: $password <br />";

    $stmt = $pdo -> prepare('SELECT * from users WHERE userEmail = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    // Verifies given password with encrypted password.
    if(password_verify($password, $user->userPassword)){
        echo "Login successful";
    } else {
        echo "Your password is incorrect";
    // print_r($user);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - php</title>
</head>

<body>

    <nav>
        <h1>Navigation Bar</h1>
        <ul>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>

    <form action="login.php" method="POST">

        <div class="form-group">
            <label for="userEmail">User Email</label>
            <input name="userEmail" type="text" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="form-group">
            <label for="password" class="form-check-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleCheck1">
        </div>

        <button name="login" type="submit" class="btn btn-primary">Login</button>

    </form>

</body>

</html>