<?php
//處理查詢資料的請求
$classroom=$_GET['classroom'];
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','',[]);

$sql="SELECT * FROM `students` WHERE classroom ='{$classroom}'";

$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

//重要 json_encode
echo json_encode($rows);
?>