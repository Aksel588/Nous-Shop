<header>
    <div class="logo">
        <div class="text">
            <a href="/myNewWebSite/index.php">Nous</a>
        </div>
        <div class="logoInput">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search...." class="search">
        </div>
    </div>


    <div>
        <ul class="menu">

            <?php
            if (isset($_SESSION["userid"])) {

                ?>
                <li>
                    <a href="/myNewWebSite/php/showAll.php">Show All</a>
                </li>

                <li>
                    <a href="/myNewWebSite/php/women-product.php">Women</a>
                </li>
                <li>
                    <a href="/myNewWebSite/php/men-product.php">Men</a>
                </li>

                <li>
                    <a href="/myNewWebSite/php/aboutUs.php">About</a>
                </li>

                <li>
                    <a href="/myNewWebSite/php/contact.php">Contact</a>
                </li>

                <li><a href="/myNewWebSite/php/profile.php" id="profile"><?php echo $_SESSION["useruid"] ?></a></li>
                <li><a href="/myNewWebSite/includes/logout.inc.php"> logout</a></li>
                <li>
                    <a href="/myNewWebSite/php/basket.php">
                        <i class="fa-solid fa-basket-shopping"></i>
                        <?php
                        echo $_SESSION['countBasket'];
                        ?>
                    </a>
                </li>
                <?php
            } else {
                ?>
                <li>
                    <a href="/myNewWebSite/php/showAll.php">Show All</a>
                </li>

                <li>
                    <a href="/myNewWebSite/php/women-product.php">Women</a>
                </li>
                <li>
                    <a href="/myNewWebSite/php/men-product.php">Men</a>
                </li>


                <li>
                    <a href="/myNewWebSite/php/aboutUs.php">About</a>
                </li>

                <li>
                    <a href="/myNewWebSite/php/contact.php">Contact</a>
                </li>

                <li>
                    <i class="fa-solid fa-user"></i>
                    <a href="/myNewWebSite/php/accountNew.php">Log in</a>
                </li>

                <?php
            }
            ?>
        </ul>
    </div>
</header>