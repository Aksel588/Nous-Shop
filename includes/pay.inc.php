<?php

if(isset($_POST["submit"])) {
    $cardNumber = $_POST["cardNumber"];
    $cardHolder = $_POST["cardHolder"];
    $cvv = $_POST["cvv"];
    $month = $_POST["month"];
    $year = $_POST["year"];

    include "../classes/dbh.classes.php";
    include "../classes/pay.classes.php";
    include "../classes/pay.contr.classes.php";

    $pay = new PayContr($cvv,$cardNumber,$month, $year,$cardHolder);
    $pay->Payup();
    header("location: ../index.php?error=none");
}