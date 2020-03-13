<?php

if(isset($_POST['register'])) {
    require('./config/db.php');
    $name = $_POST['userName'];
    echo "Name: $name <br />";

    $email = $_POST['userEmail'];
    echo "Email: $email <br />";

    // Encrypts password. password_default is *10 rounds of hashing.
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    echo "Password: $password <br />"; 


    // Stops email addresses being registered more than once.
    $stmt = $pdo -> prepare('SELECT * from users WHERE userEmail = ?'); 
    $stmt->execute([$email]);
    $totalUsers = $stmt->rowCount();
    echo "$totalUsers emails exist in the Database <br />";

    if ($totalUsers > 0) {
        echo "Email already taken <br />";
    } else {

        $sql = 'INSERT into users(userName, userEmail, userPassword) VALUES(?, ?, ?)'; 
        // ??? positional parameters, helps with security.

        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $email, $password]);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
<div class="container">


    <form action="register.php" method="POST">

        <div class="form-group">
            <label for="userName">User Name</label>
            <input required name="userName" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="userEmail">User Email</label>
            <input name="userEmail" type="text" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="form-group">
            <label for="password" class="form-check-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleCheck1">
        </div>

        <button name="register" type="submit" class="btn btn-primary">Register</button>

    </form>
</div>
</body>

</html>