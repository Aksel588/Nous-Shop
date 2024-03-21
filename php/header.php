<header>
    <div class="menu-toggle" id="mobile-menu">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="logo">
        <div class="text">
            <a href="/Nous-Shop/index.php">Nous</a>
        </div>
        <div class="logoInput">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search...." class="search">
        </div>
    </div>

    <a href="/Nous-Shop/php/basket.php" class="basketMobile">
        <i class="fa-solid fa-basket-shopping"></i>
        <?php
        echo $_SESSION['countBasket'];
        ?>
    </a>


    <div class="menu1" id="menu-container">
        <ul class="menu">

            <?php
            if (isset($_SESSION["userid"])) {

                ?>
                <li>
                    <a href="/Nous-Shop/php/showAll.php">Show All</a>
                </li>

                <li>
                    <a href="/Nous-Shop/php/women-product.php">Women</a>
                </li>
                <li>
                    <a href="/Nous-Shop/php/men-product.php">Men</a>
                </li>

                <li>
                    <a href="/Nous-Shop/php/aboutUs.php">About</a>
                </li>
                <li>
                    <a href="/Nous-Shop/php/contact.php">Contact</a>
                </li>


                <li><a href="/Nous-Shop/php/profile.php" id="profile"><?php echo $_SESSION["useruid"] ?></a></li>
                <li><a href="/Nous-Shop/includes/logout.inc.php"> logout</a></li>
                <li class="basket">
                    <a href="/Nous-Shop/php/basket.php">
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
                    <a href="/Nous-Shop/php/showAll.php">Show All</a>
                </li>

                <li>
                    <a href="/Nous-Shop/php/women-product.php">Women</a>
                </li>
                <li>
                    <a href="/Nous-Shop/php/men-product.php">Men</a>
                </li>


                <li>
                    <a href="/Nous-Shop/php/aboutUs.php">About</a>
                </li>
                <li>
                    <a href="/Nous-Shop/php/contact.php">Contact</a>
                </li>

                <li>
                    <i class="fa-solid fa-user"></i>
                    <a href="/Nous-Shop/php/accountNew.php">Log in</a>
                </li>

                <?php
            }
            ?>
        </ul>
    </div>
</header>