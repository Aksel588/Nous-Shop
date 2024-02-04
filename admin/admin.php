<?php
session_start();
if ($_SESSION["userid"] === "11" || $_SESSION["useruid"] === "Axel886" || $_SESSION["useruid"] === "Axel886@gmail.com") {
    ?>
    <header>
        <div class="logo">
            <div class="text">
                <a href="/myNewWebSite/admin/admin.php">Admin</a>
            </div>
            <div class="logoInput">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search...." class="search">
            </div>
        </div>


        <div>
            <ul class="menu">
                <li>
                    <a href="/myNewWebSite/admin/women-edit.php">Women-edit</a>
                </li>
                <li>
                    <a href="/myNewWebSite/admin/men-edit.php">Men-edit</a>
                </li>
            </ul>
        </div>

    </header>
    <?php
} else {
    header("location:../index.php?notFount");
}
?>