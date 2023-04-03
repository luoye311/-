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
$username = $_POST['user'];
$password = $_POST['password'];
$host = "localhost";
$userName = "*";
$dbpassword = "G";
$dbname = "luntanzhanghao";
if ($connID = mysqli_connect($host, $userName, $dbpassword, $dbname)) { //连接数据库
    echo ("<br>");
} else {
     echo ("数据库连接失败");
}
if (empty($_SESSION['username'])){
    header ("Location: zhuce.php?needdenglu=need");
}
$query = "SELECT 上一次签到日期 FROM 签到 WHERE 用户名 = '$_SESSION[username]'";
$result = mysqli_query($connID, $query);
$row = mysqli_fetch_assoc($result);
$query1 = "SELECT 签到积分 FROM 签到 WHERE 用户名 = '$_SESSION[username]'";
$result1 = mysqli_query($connID, $query1);
$row1 = mysqli_fetch_assoc($result1);
$query2 = "SELECT 签到次数 FROM 签到 WHERE 用户名 = '$_SESSION[username]'";
$result2 = mysqli_query($connID, $query2);
$row2 = mysqli_fetch_assoc($result2);
if (!$result) {
    die("查询失败：" . mysqli_error($connID));
}
if ($row[上一次签到日期] == date("Y-m-d")) {
    echo ("您今天已经签过到了不可以再签到了哦<a href=\"./qiandao.php\">点击返回签到页面</a>");
    die;
}
$datenow = date("Y-m-d");
$username = $_SESSION['username'];
$qdcs = 1;
$qdjf = 1;
if (empty($row)) {
    $sql = "INSERT INTO 签到 (用户名, 上一次签到日期, 签到次数, 签到积分) VALUES ('$username', '$datenow', '$qdcs', '$qdjf')";
    mysqli_query($connID, $sql);
    mysqli_error($connID);
    echo ("您是第一次签到，签到完成！");
    die;
}
$sql = "UPDATE 签到 SET 上一次签到日期='$datenow' WHERE 用户名='$username'";
if (mysqli_query($connID, $sql)) {
    echo "签到成功";
} else {
    echo "签到失败:联系qq3356937811 " . mysqli_error($conn);
}
$row2new = $row2[签到次数] + 1;
$sql1 = "UPDATE 签到 SET 签到次数='$row2new' WHERE 用户名='$username'";
if (mysqli_query($connID, $sql1)) {
    
} else {
    echo "签到失败:联系qq3356937811 " . mysqli_error($connID);
}
$row1new = $row1[签到积分] + 1;
$sql2 = "UPDATE 签到 SET 签到积分='$row1new' WHERE 用户名='$username'";
if (mysqli_query($connID, $sql2)) {
    
} else {
    echo "签到失败:联系qq3356937811 " . mysqli_error($connID);
}
die;
?>
<a href="./qiandao.php">点击返回签到页面</a>
</body>
</html>