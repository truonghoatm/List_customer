<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF">
    <title>Document</title>
</head>
<style>
table{
    border-collapse: collapse;
    width: 100%;
}
    td, th{
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>
<body>
<table>
    <caption><h1>Danh Sach Khach Hang</h1></caption>
    <tr>
        <th>STT</th>
        <th>Ten</th>
        <th>Ngay sinh</th>
        <th>Dia chi</th>
        <th>Anh</th>
    </tr>
<?php
$customerlist= array(
    "1"=> array("ten"=>"Nguyen Van A",
        "ngaysinh"=>"1990-09-19",
        "diachi"=>"Ha Noi",
        "anh"=>"img1.jpg"),
    "2"=> array("ten"=>"Nguyen Van B",
        "ngaysinh"=>"1990-09-19",
        "diachi"=>"Ha Noi",
        "anh"=>"img2.jpg"),
);
?>
<?php
foreach ($customerlist as $key => $values){
    echo "<tr>";
    echo "<td>" .$key. "</td>";
    echo "<td>". $values['ten']."</td>";
    echo "<td>". $values['ngaysinh']."</td>";
    echo "<td>". $values['diachi']."</td>";
    echo "<td><img src='".$values['anh']."' width = '60px' height = '60px'/></td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>
