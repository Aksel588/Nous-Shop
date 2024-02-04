<?php
class Pay extends dbh {
    protected function setPayInto($cvv,$cardNumber,$month, $year,$cardHolder)
    {
        $stmt = $this->connectPay()->prepare('INSERT INTO `cards`(`customer_id`, `card_number`, `card_expiry_MM`, `card_expiry_YY`, `card_holder_name`) VALUES (?, ?, ?, ?, ?)');

        if (!$stmt->execute(array($cvv,$cardNumber,$month, $year,$cardHolder))) {
            $stmt = null;
            header("location:../index.php?error=payErrorNone");
            exit();
        }
        $stmt = null;
    }
}