<?php
session_start();
include('confiq/config.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    $query = "INSERT INTO kategoriyalara (name) VALUES (:name)";
    $query_run = $conn->prepare($query);
    $data = [':name' => $name];
    $query_execute = $query_run->execute($data);

    if ($query_execute) {
        $_SESSION['message'] = "Elave olundu";
        header('Location:index.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Ugursuz emeliyyat";
        header('Location:create.php');
        exit(0);
    }
};


if (isset($_POST['update_kat'])) {
    $name = $_POST['name'];
    $kategory_id = $_POST['kategory_id'];

    $query = "UPDATE kategoriyalara SET name=:name WHERE id=:kat_id LIMIT 1";
    $statement = $conn->prepare($query);
    $data = [
        ':name' => $name,
        ':kat_id' => $kategory_id
    ];
    $query_exec = $statement->execute($data);
    if ($query_exec) {
        $_SESSION['message'] = "Yenilendi";
        header('Location:index.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Ugursuz emeliyyat";
        header('Location:create.php');
        exit(0);
    }
};

if (isset($_POST['del_kat'])) {
    $kat_id = $_POST['del_kat'];
    try {
        $query = "DELETE from kategoriyalara WHERE id=:kat_id";
        $statement = $conn->prepare($query);
        $data = [':kat_id' => $kat_id];
        $query_exec = $statement->execute($data);

        if ($query_exec) {
            $_SESSION['message'] = "Silindi";
            header('Location:index.php');
            exit(0);
        } else {
            $_SESSION['message'] = "Ugursuz emeliyyat";
            header('Location:create.php');
            exit(0);
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
};
