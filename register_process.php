<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $birthday = $_POST["birthday"];
    $gender = $_POST["gender"];
    $course = $_POST["course"];

    if ($password != $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    $pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])[A-Za-z0-9]{5,20}$/";

    if (!preg_match($pattern, $password)) {
        echo "Invalid password. Please follow the password requirements.";
        exit;
    }

    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Registration Successful</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

    <div class="container result">

        <h1>Registration Successful!</h1>

        <p><b>First Name:</b> <?php echo $first_name; ?></p>
        <p><b>Last Name:</b> <?php echo $last_name; ?></p>
        <p><b>Email:</b> <?php echo $email; ?></p>
        <p><b>Birthday:</b> <?php echo $birthday; ?></p>
        <p><b>Gender:</b> <?php echo $gender; ?></p>
        <p><b>Course:</b> <?php echo $course; ?></p>

        <a href="register.php">Register Again</a>

    </div>

    </body>
    </html>

    <?php
}
?>