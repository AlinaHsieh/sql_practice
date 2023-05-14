<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=student"; //資料庫設定

$pdo=new PDO($dsn,'root','');

$sql="select * from students limit 1,1";

$row=$pdo->query($sul)->fetch();
echo "<pre>";
print_r($row);
echo "</pre>";

echo "<br>";
//限制取回的資料型態 FETCH_ASSOC
$row=$pdo->query($sul)->fetch(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($row);
echo "</pre>";

echo "<br>";

echo $row['name'];
echo $row[3];
echo "<br>";
//限制取回的資料型態 FETCH_NUM，拿到的資料料是數字（數字是欄位順序，撈資料時不會有id重複的問題）
$row=$pdo->query($sul)->fetch(PDO::FETCH_NUM);
echo "<pre>";
print_r($row);
echo "</pre>";

echo "<br>";

echo $row['name'];
echo $row[3];

