<?php
include('connection.php');
$db = new database();

$action = $_GET['action'];
if ($action == "store") {
    $db->store($_POST['nama'], $_POST['kelas'], $_POST['hobi']);
    header('location:main.php');
} elseif ($action == "update") {
    $db->update_db($_POST['nis'], $_POST['nama'], $_POST['kelas'], $_POST['hobi']);
    header('location:main.php');
} elseif ($action == "delete") {
    $db->delete($_GET['id']);
    header('location:main.php');
}
