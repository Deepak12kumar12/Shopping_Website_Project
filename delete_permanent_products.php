<?php
include 'auth_admin.php';
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $selected = explode(',', $_POST['selected_ids']);

    foreach ($selected as $item) {

        list($table, $id) = explode(':', $item);

        $table = mysqli_real_escape_string($conn, $table);
        $id = (int)$id;

        $allowed_tables = [
            'home_products',
            'apple_products',
            'sum_products',
            'xiaomi_products',
            'oneplus_products',
            'hp_products',
            'dell_products',
            'macbook_products',
            'boat_products',
            'oneplusbud_products',
            'boult_products'
        ];

        if (in_array($table, $allowed_tables)) {

            $query = "DELETE FROM $table WHERE id = $id";
            $conn->query($query);
        }
    }

    header("Location: restore_products.php?deleted=1");
    exit;
}
?>