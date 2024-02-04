<?php
session_start();
if ($_SESSION["userid"] === "11" || $_SESSION["useruid"] === "Axel886" || $_SESSION["useruid"] === "Axel886@gmail.com") {
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
              integrity="sha384-btj5xc9PdTkKaCwE5NfyaXqpgbrGxh8I4cY2DGelq/1I6bIfvl2zgR5lXM2CB8xB"
              crossorigin="anonymous">
        <link rel="stylesheet" href="../css/aboutUs-edit.css">
        <title>ABout Us Edit </title>
    </head>
    <body>
    <div class="container">
        <div class="aboutUsText">
            <form action="./admin-server/aboutUsEdit-server.php" method="POST">
                <textarea name="textArea" id="" class="textArea"></textarea>
                <button type="submit" name="submit">Save</button>
            </form>
        </div>
        <div class="aboutUsImg">
            <form action="./admin-server/aboutUsEdit-server.php" method="POST">
                <main class="page">
                    <h2>Upload ,Crop and save.</h2>
                    <div class="box">
                        <input type="file" id="file-input"/>
                    </div>
                    <div class="box-2">
                        <div class="result"></div>
                    </div>
                    <div class="box-2 img-result hide">
                        <img class="cropped" src="" alt="">
                    </div>
                    <div class="box">
                        <div class="options hide">
                            <label> Width</label>
                            <input type="number" class="img-w" value="300" min="100" max="1200"/>
                        </div>
                        <button type="submit" name="submit">Save</button>

                        <a href="" class="btn download hide">Download</a>
                    </div>
                </main>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    </body>
    </html>
    <?php
} else {
    header("location:../index.php?notFount");
}
?>