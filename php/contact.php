<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contact.css">
    <script src="https://kit.fontawesome.com/45ca86891d.js" crossorigin="anonymous"></script>
    <title>Contact</title>
</head>
<body id="body">

<?php
include "./header.php";
?>

<div>
    <div class="newArrivals">
        <div>
            <p> CONTACT US</p>
        </div>
    </div>


    <div class="container">
        <div class="divOne">
            <div class="flagshipShop">
                <p>Flagship Store</p>
                <table>
                    <tr>
                        <td>
                            500 Terry Francine St.
                            San Francisco, CA 94158
                            123-456-7890
                        </td>
                    </tr>
                </table>
            </div>
            <div class="openingHours">
                <p>
                    Opening Hours
                </p>
                <table>
                    <tr>
                        <td>Mon - Fri: 7am - 10pm</td>
                        <td>Saturday: 8am - 10pm</td>
                        <td>​Sunday: 8am - 11pm</td>
                    </tr>
                </table>
            </div>
            <div class="customerService">
                <p> Customer Service </p>
                <table>
                    <tr>
                        <td>1-800-000-000</td>
                        <td>123-456-7890</td>
                        <td>info@my-domain.com</td>
                    </tr>
                </table>
            </div>
        </div>


        <div class="squareDiv">
            <div></div>
        </div>


        <div class="divTwo">
            <div class="textStockists">
                <p>Stockists</p>
            </div>
            <div class="streetDiv">
                <div class="divTwoTex">
                    <p>500 Terry Francine St.
                        San Francisco, CA 94158
                        123-456-7890</p>
                </div>
                <div class="divTwoTex">
                    <p>500 Terry Francine St.
                        San Francisco, CA 94158
                        123-456-7890</p>
                </div>
                <div class="divTwoTex">
                    <p>500 Terry Francine St.
                        San Francisco, CA 94158
                        123-456-7890</p>
                </div>
            </div>

            <div class="streetDiv">
                <div class="divTwoTex">
                    <p>500 Terry Francine St.
                        San Francisco, CA 94158
                        123-456-7890</p>
                </div>
                <div class="divTwoTex">
                    <p>500 Terry Francine St.
                        San Francisco, CA 94158
                        123-456-7890</p>
                </div>
                <div class="divTwoTex">
                    <p>500 Terry Francine St.
                        San Francisco, CA 94158
                        123-456-7890</p>
                </div>
            </div>
        </div>

        <div class="squareDiv">
            <div></div>
        </div>

        <div class="divThree">
            <div class="divThree_text">
                <p>For inquiries regarding an order, please include your order number and the date your order was
                    placed</p>
            </div>
            <div class="mailer">
                <div>
                    <input type="text" placeholder="Name">
                    <input type="text" placeholder="Email">
                    <input type="text" placeholder="How Can We Help?">
                    <button>
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "./footer.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="../js/mobile.js"></script>

</body>

</html>