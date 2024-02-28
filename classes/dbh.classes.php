<?php

class Dbh
{
    protected function connect()
    {
        try {
            $username = "root";
            $password = "root";
            $hostname = "localhost";
            $port = 8888;
            $dbname = "ooplogin";

            $dbh = new PDO("mysql:host=$hostname;port=$port;dbname=$dbname", $username, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $dbh;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }


    protected function connectPay()
    {
        try {
            $username = "root";
            $password = "root";
            $hostname = "localhost";
            $port = 8888;
            $dbname = "arcada";

            $DbhPay = new PDO("mysql:host=$hostname;port=$port;dbname=$dbname", $username, $password);
            $DbhPay->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $DbhPay;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }
}



