<?php
    header('Content-Type: application/json');
    list($title, $description,$id) = [
        $_POST['title'],
        $_POST['description'],
        $_POST['id']
    ];

    if (!$title || !$description || !$id) {
        echo json_encode(-2);
        return;
    }

    $server = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "hoteldb";

    $conn = new mysqli($server, $username, $password, $dbname);
    if ($conn-> connect_errno) {
        echo json_encode(-1);
        return;
    }
    
    $sql = "
        UPDATE configurazioni
        SET title = ? , description = ?
        WHERE id = ?
    ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $title, $description, $id);
    $res = $stmt->execute();
    echo json_encode($res);