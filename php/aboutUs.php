<?php
session_start();
include "../admin/admin-server/webSite-server.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/aboutUs.css">
    <script src="https://kit.fontawesome.com/45ca86891d.js" crossorigin="anonymous"></script>
    <title>About Us</title>
</head>


<body id="body">
<?php
include "./header.php";
?>
<div class="box">
    <div class="newArrivals">
        <div>
            <p>our story</p>
        </div>
    </div>

    <div class="aboutUs">
        <div class="aboutUsText">
            <?php
            $data = aboutUs();
            foreach ($data['texts'] as $text) {
                ?>
                <p><?php echo $text; ?>
                </p>
                <?php
            }
            ?>
        </div>
        <div class="aboutUsImg">
            <?php
            foreach ($data['images'] as $image) {
                ?>
                <img src="../Images/<?php echo $image; ?>" alt="">
                <?php
            }
            ?>
        </div>
    </div>


</div>
</div>
<?php
include "./footer.php";
?>


<?php
include "./botButton.php";
?>
<script src="../js/mobile.js"></script>
</body>

</html>