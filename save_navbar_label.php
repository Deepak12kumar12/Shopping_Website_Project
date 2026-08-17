<?php

session_start();
include 'db.php';

if (($_SESSION['role'] ?? '') !== 'admin') {
    die("Access Denied");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $key = $_POST['label_key'];
    $value = trim($_POST['label_value']);

    $stmt = $conn->prepare("
        UPDATE navbar_labels
        SET label_value = ?
        WHERE label_key = ?
    ");

    $stmt->bind_param("ss", $value, $key);

    $stmt->execute();

}

header("Location: home.php");
exit;