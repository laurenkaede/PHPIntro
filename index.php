<!-- Form Validations -->
<!-- // HTML entities adds security by only allowing HTML (and not scrips, eg). -->

<?php
    if( isset( $_POST['userName'] ) && isset( $_POST['userEmail'] ) ){
        $name = htmlentities( $_POST['userName']); // Super Global Variable
        $email = htmlentities( $_POST['userEmail']);
        echo "$name <br />";
        echo "$email <br />";
    }

    if(filter_input(INPUT_POST, 'userEmail', FILTER_VALIDATE_EMAIL)) { // FILTER_VALIDATE_EMAIL is a back end validation
        $email = filter_var($_POST['userEmail'], FILTER_SANITIZE_EMAIL); // FILTER_SANITIZE_EMAIL cleans malicious script
        // $email = $_POST['userEmail']; 
        echo $email;
    }
?>

<?php include './inc/navbar.php' ?>
    <div>
        <h1>Welcome to the Home Page</h1>

<form action="index.php" method="post">
    <label for="userName">User Name</label>
    <input type="text" name="userName"> <br />

    <label for="userEmail">User Email</label>
    <input type="email" name="userEmail"> <br />  <!-- type="email" is a front end validation -->

    <button type="submit">Submit</button>
</form>

    </div>
<?php include './inc/footer.php' ?>