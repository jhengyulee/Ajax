<?php
//處理新增資料的請求
// print_r($_POST);
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','',[]);
$sql="INSERT INTO `students` (`classroom`,`seat_num`,`name`,`birthday`) 
VALUES ('{$_POST['classroom']}',
        '{$_POST['seatnum']}',
        '{$_POST['name']}',
        '{$_POST['birthday']}')";
echo $pdo->exec($sql);
?>