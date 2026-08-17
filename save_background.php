<?php

session_start();
include 'db.php';

if (($_SESSION['role'] ?? '') !== 'admin') {
    die("Access Denied");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    /* 🔥 RESET DEFAULT BACKGROUND */

if (
    isset($_POST['reset_default']) &&
    $_POST['reset_default'] == "1"
) {

    $defaultBg = 'default-bg.jpg';

    $stmt = $conn->prepare("
        UPDATE navbar_labels
        SET label_value = ?
        WHERE label_key = 'home_bg'
    ");

    $stmt->bind_param("s", $defaultBg);

    $stmt->execute();

    header("Location: home.php");
    exit;
}

    if (isset($_FILES['background_image'])) {

        $file = $_FILES['background_image'];

        $name = time() . '_' . basename($file['name']);

        move_uploaded_file(
            $file['tmp_name'],
            'uploads/' . $name
        );

        $stmt = $conn->prepare("
            UPDATE navbar_labels
            SET label_value = ?
            WHERE label_key = 'home_bg'
        ");

        $stmt->bind_param("s", $name);

        $stmt->execute();

    }

}

header("Location: home.php");
exit;
?>