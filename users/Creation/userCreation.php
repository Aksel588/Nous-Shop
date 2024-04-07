<?php
// include "./users/connect.php";
$server = "localhost";
$name = "root";
$pass = "root";
$dbname = "arcada";

$conn = new mysqli($server,$name,$pass,$dbname);


$uid = trim($_POST['uid']);
$pwd = $_POST['pwd'];
$email = $_POST['email'];

$errors = [];

// Validate username
if (empty($uid)) {
    $errors[] = "Username is required.";
} elseif (preg_match('/\s/', $uid)) {
    $errors[] = "Your username cannot contain spaces.";
} elseif (!preg_match('/\d/', $uid)) {
    $errors[] = "Your username must contain at least one number.";
} elseif (preg_match('/[*#?]/', $uid)) {
    $errors[] = "Check your username! It must not contain special characters.";
}

// Validate password
if (empty($pwd)) {
    $errors[] = "Password is required.";
} elseif (preg_match('/\s/', $pwd)) {
    $errors[] = "Your password cannot contain spaces.";
} elseif (!preg_match('/\d/', $pwd)) {
    $errors[] = "Your password must contain at least one number.";
} elseif (preg_match('/[*#?]/', $pwd)) {
    $errors[] = "Check your password! It must not contain special characters.";
} else{
    $pwd = password_hash($pwd, PASSWORD_DEFAULT);
}

// Validate email
if (empty($email)) {
    $errors[] = "Email is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
}

if (empty($errors)) {
    // Insert into database
    $sql = "INSERT INTO `users` (`user_uid`, `user_pwd`, `user_email`) VALUES ('$uid', '$pwd', '$email')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header("Location: /Nous-Shop/index.php");
    } else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
} else {
    // Display validation errors
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
}
?>
