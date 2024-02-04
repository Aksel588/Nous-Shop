<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/45ca86891d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/userProfile.css">
    <title>Profile <?php echo $_SESSION['useruid'] ?></title>
</head>
<body>
<?php
include "header.php";
?>

<div class="profile">
    <div class="profileInfoDiv">
        <div class="profileImageDiv">
            <div>
                <i class="fa-solid fa-user"></i>
            </div>
        </div>

        <div class="profileInfoTextDiv">
            <p>
                <?php echo $_SESSION['useruid']; ?>
            </p>

            <p>
                <?php echo $_SESSION['useremail']; ?>
            </p>

            <div class="icon">
                <a href="">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-square-x-twitter"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="profileInfoDivEdit">
        <div class="text">
            <p>Hi <span><?php echo $_SESSION['useruid'] ?></span></p>
        </div>
        <form action="./userProfile-edit-server.php" method="POST">
            <div class="edit">
                <div>
                    <input type="text" placeholder="<?php echo $_SESSION['useruid'] ?>" name="name">
                </div>

                <div>
                    <input type="text" placeholder="<?php echo $_SESSION['useremail'] ?>" name="email">
                </div>

                <a href="">
                    <button>
                        <p>Edit</p>
                    </button>
                </a>
            </div>
        </form>


        <div class="goHome">
            <div class="goHomeText">

                <a href="" class="goHomeText-a">
                    <button class="goHomeText-i" id="shopAllText-i">
                        <i class="fa-solid fa-arrow-left fa-lg"></i>
                    </button>
                </a>
                <a href="/myNewWebSite/index.php">
                    <button class="goHomeText-Bottom">
                        <p>Go Back</p>
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>

</body>
</html>