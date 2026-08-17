<?php

$navbarLabels = [];

$res = $conn->query("
    SELECT label_key, label_value
    FROM navbar_labels
");

if ($res) {

    while ($row = $res->fetch_assoc()) {

        $navbarLabels[$row['label_key']] =
            $row['label_value'];

    }

}
/* 🔥 WEBSITE BACKGROUND */

$homeBg =
    $navbarLabels['home_bg']
    ?? 'default-bg.jpg';
?>