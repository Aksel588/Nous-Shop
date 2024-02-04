<?php

function aboutUs() {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "arcada";
    $connection = new mysqli($servername, $username, $password, $dbname);

    $query = "SELECT `text`, `image` FROM aboutUs";
    $result = mysqli_query($connection, $query);

    if ($result) {
        $data = array();
        $texts = array();
        $images = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $texts[] = $row['text'];
            $images[] = $row['image'];
        }

        $data['texts'] = $texts;
        $data['images'] = $images;

        return $data;
    } else {
        return array();
    }
}


function webIndex(){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "arcada";
    $connection = new mysqli($servername, $username, $password, $dbname);

    $query = "SELECT  `titleBox`, `textBox` FROM `web` WHERE 1";
    $result = mysqli_query($connection, $query);

    if ($result) {
        $data = array();
        $title = array();
        $text1 = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $title[] = $row['titleBox'];
            $text1[] = $row['textBox'];
        }

        $data['titleBox'] = $title;
        $data['textBox'] = $text1;

        return $data;
    } else {
        return array();
    }
}
