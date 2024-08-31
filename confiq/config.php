<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "exercise";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch(PDOException $e) {

    echo "Connection Failed" .$e->getMessage();
}


$query_kategoriya = "SELECT * FROM kategoriyalara";
$statement_kategoriya = $conn->prepare($query_kategoriya);
$statement_kategoriya->execute();
$statement_kategoriya->setFetchMode(PDO::FETCH_OBJ);
$result_kategoriya = $statement_kategoriya->fetchAll();
// 

$query_kategoriya_detail = "SELECT * FROM kategoriya_detail";
$statement_kategoriya_detail = $conn->prepare($query_kategoriya_detail);
$statement_kategoriya_detail->execute();
$statement_kategoriya_detail->setFetchMode(PDO::FETCH_OBJ);
$result_kategoriya_detail = $statement_kategoriya_detail->fetchAll();
?>
