<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
$username = $_SESSION['username'];
$host = "localhost";
$userName = "luoye1";
$dbpassword = "cjK8DxhSPkWBwCrG";
$dbname = "luntanzhanghao";
if ($connID = mysqli_connect($host, $userName, $dbpassword, $dbname)) { //连接数据库
     echo ("<br>");
} else {
        echo ("数据库连接失败");
}
$query = "SELECT 日期数据 FROM 小工具日期查询 WHERE 用户名 = '$username'";
$result = mysqli_query($connID, $query);

// 获取所有行数据
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
if (!$result) {
    echo ("查询失败：可能是您没有保存过任何日期如果您确定您保存过请联系管理员qq3356937811");
}
$row = mysqli_fetch_assoc($result);
if ($rows) {
    foreach ($rows as $rowss) {
        echo "<br>";
        $date = $rowss['日期数据'];
        $date1 = date_create($date);
        $nowdate = date_create();
        $diff = date_diff($date1, $nowdate);
        $days = $diff->format('%a');
        $days1 = $days + 1;
        echo ("距离".$date."还剩".$days1."天");
        $daym = $diff->format('%m');
        $daym1 = $daym + 1;
        $daymd = $diff->format('%d');
        $daymd1 = $daymd + 1;
    }
} else {
    echo "查询失败：可能是您没有保存过任何日期";
}
?>
</body>
</html>