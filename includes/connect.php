<?php
    $user = "root";
    $pw = "root";

    try {
        $conn = new PDO('mysql:host=localhost;dbname=vue_video_2', $user, $pw);
        //var_dump($conn);
    } catch(PDOException $exception) {
        echo 'connect error!' . $exception->getMessage();
    }
?>