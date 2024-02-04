<?php

class PayContr extends Pay{

    private $cardNumber;
    private  $cardHolder;
    private  $cvv;
    private $month;
    private   $year;

    public  function __construction( $cardNumber,$cardHolder, $cvv){
        $this->cardNumber =$cardNumber;
        $this->cardHolder = $cardHolder;
        $this->cvv = $cvv;
    }

    public function Payup(){
        if ($this->emptyInput() === false) {
            header("location:../php/pay.php?error=emptyinput");
            exit();
        }
        if ($this->invalidCardNumber() === false) {
            header("location:../index.php?error=CardNumber");
            exit();
        }

        if ($this->invalidCardHolder() === false) {
            header("location:../index.php?error=CardHolder");
            exit();
        }

        if ($this->invalidCvv() === false) {
            header("location:../index.php?error=Cvv");
            exit();
        }


        $this->setPayInto($this->cardNumber, $this->cardHolder, $this->cvv);
    }



    private function invalidCardNumber()
    {
        $result = "";

        if (!preg_match("/^[0-9]*$/", $this->cardNumber)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function invalidCvv()
    {
        $result = "";

        if (!preg_match("/^[0-9]*$/", $this->cvv)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }


    private function invalidCardHolder()
    {
        $result = "";

        if (!preg_match("/^[A-Z]*$/", $this->cardHolder)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }




    private function emptyInput()
    {
        $result = "";

        if (empty($this->cardNumber) || empty($this->cardHolder) || empty($this->cvv)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

}
