<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/accountNew.css">
    <script src="https://kit.fontawesome.com/45ca86891d.js" crossorigin="anonymous"></script>
    <title>Account New </title>
</head>

<body>
<div class="materialContainer">


    <form method="POST" action="../users/Signup/userSignup.php" class="box">

        <div class="title">LOGIN</div>

        <div class="input">
            <label for="emailH">Username</label>
            <input type="text" name="uid" id="emailH">
            <span class="spin"></span>
        </div>

        <div class="input">
            <label for="pass">Password</label>
            <input type="password" name="pwd" id="pass">
            <span class="spin"></span>
        </div>

        <div class="input">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <span class="spin"></span>
        </div>

        <div class="button login">
            <button class="go" name="submit" type="submit"><span>GO</span> <i class="fa fa-check"></i></button>
        </div>

        <a href="" class="pass-forgot">Forgot your password?</a>

    </form>


    <form method="POST" action="../users/Creation/userCreation.php" class="overbox">
        <div class="material-button alt-2"><span class="shape"></span></div>

        <div class="title">REGISTER</div>

        <div class="input">
            <label for="regname">Username</label>
            <input type="text" name="uid" id="regname" class="uid">
            <span class="spin"></span>
        </div>

        <div class="input">
            <label for="regpass">Password</label>
            <input type="password" name="pwd" id="regpass" class="pwd">
            <span class="spin"></span>
        </div>

        <div class="input">
            <label for="reregpass">Email</label>
            <input type="text" name="email" id="reregpass" class="email">
            <span class="spin"></span>
        </div>

        <div class="button">
            <button class="next" name="submit" type="submit"><span>NEXT</span></button>
        </div>
    </form>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="../js/accountNew.js"></script>
<script src="../js/users/userCreation.js"></script>
</body>

</html>