<?php
session_start();
include('config.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    $query = "INSERT INTO kategoriyalara (name) VALUES (:name)";
    $query_run = $conn->prepare($query);
    $data = [':name' => $name];
    $query_execute = $query_run->execute($data);

    if ($query_execute) {
        $_SESSION['message'] = "Elave olundu";
        header('Location:simple_page/index.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Ugursuz emeliyyat";
        header('Location:create.php');
        exit(0);
    }
}
