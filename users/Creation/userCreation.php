<?php
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];

$users = [];




// Password verifaing
$pwd = $_POST['pwd'];

if ($_POST["pwd"]) {
    if (strlen($pwd) >= 12) {
        header("Location: ../../index.php?error=PasswordLength");
        exit();
    }

    if (strlen($pwd) <= 6) {
        header("Location: ../../index.php?error=PasswordLength");
        exit();
    } 

    if (!preg_match('/[0-9]/', $pwd)) {
        header("Location: ../../../index.php?error=NoDigits");
        exit();
    } 

    if (preg_match('/[\/\?\'\"\\\]/', $pwd)) {
        header("Location: ../../../index.php?error=InvalidCharacters");
        exit();
    } 
}





$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);


$userDetails = array(
    'uid' => $uid,
    'pwd' => $hashedPwd,
    'email' => $email
);

$_SESSION = $userDetails;
// var_dump($_SESSION);
echo "Aksel";
