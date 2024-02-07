<?php
session_start();

if ($_SESSION["userid"] === "11" || $_SESSION["useruid"] === "Axel886" || $_SESSION["useruid"] === "Axel886@gmail.com") {

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/profile.css">
    <title>ID-<?php echo $_SESSION["userid"] ?>-<?php echo $_SESSION["useruid"] ?></title>
</head>
<body>


<header>
    <li>
        <a href="/Nous-Shop/index.php">Nous</a>
    </li>
    <li>
        <a href="/Nous-Shop/admin/women-edit.php">Women</a>
    </li>
    <li>
        <a href="/Nous-Shop/admin/men-edit.php">Men</a>
    </li>

    <li>
        <a href="/Nous-Shop/admin/userProfile-edit.php">User profiles</a>
    </li>
</header>


<div class="container1">

    <form class="boxForm" action="../admin/admin-server/boxIndexEdit-server.php" method="POST">
        <h1>For Website Box Text</h1>
        <div class="form-group">
            <label for="exampleInputEmail1"><h2>Title Box</h2></label>
            <input type="text" class="" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Title Box" name="titleBox">
        </div>
        <div class="">
            <label for="exampleInputPassword1"><h2>Text Box</h2></label>
            <input type="text" class="" id="exampleInputPassword1" placeholder="Text Box"
                   name="titleText">
        </div>
        <button type="submit" class="boxButton" name="submit">Submit</button>
    </form>
    <div>
        <div class="aboutUsText">
            <h1>About us edit</h1>
            <form action="../admin/admin-server/aboutUsEdit-server.php" method="POST">
                <textarea name="textArea" id="" class="textArea" placeholder=" Your text"></textarea>
                <button type="submit" name="submit">Save</button>
            </form>
        </div>
    </div>
</div>


<?php
include "./footer.php";

?>
<?php
} else {
    ?>

    <?php
    header("location: ./userProfile.php");
    ?>
    <?php
}
?>
</body>
</html>