<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();

try {
    $mysqli = new mysqli('localhost', 'root', 'root', 'ooplogin');

    if ($mysqli->connect_error) {
        throw new Exception('Connection failed: ' . $mysqli->connect_error);
    }

    $user_id = $_SESSION['userid'];
    $name = $_POST['name'];
    $new_email = $_POST['email'];

    if ($new_email !== $_SESSION['useremail']) {
        $email_verified = true;

        if ($email_verified) {
            $stmt = $mysqli->prepare("UPDATE `users` SET `users_uid`=?, `users_email`=? WHERE `users_id` = ?");

            $stmt->bind_param("ssi", $name, $new_email, $user_id);

            $stmt->execute();

            $_SESSION['useruid'] = $name;
            $_SESSION['useremail'] = $new_email;
            echo "Profile updated successfully.";

            header("location:./profile.php");

            $stmt->close();
        } else {
            echo "Email verification failed.";
        }
    } else {
        $stmt = $mysqli->prepare("UPDATE `users` SET `users_uid`=? WHERE `users_id` = ?");
        $stmt->bind_param("si", $name, $user_id);

        $stmt->execute();

        header("location:./profile.php");

        echo "Profile updated successfully.";
        $stmt->close();
    }

    $mysqli->close();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
