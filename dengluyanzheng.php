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
if(empty($_POST['user'])) {
    die("用户名不能为空");
}

if(empty($_POST['password'])) {
    die("密码不能为空");
}
session_start();
$username = $_POST['user'];
$password = $_POST['password'];
$host = "localhost";
$userName = "luoye1";
$dbpassword = "cjK8DxhSPkWBwCrG";
$dbname = "luntanzhanghao";
if ($connID = mysqli_connect($host, $userName, $dbpassword, $dbname)) { //连接数据库
    echo ("<br>");
} else {
     echo ("数据库连接失败");
}
$query = "SELECT passward FROM zhanghao WHERE uname = '$username'";
$result = mysqli_query($connID, $query);
if (!$result) {
    die("查询失败：" . mysqli_error($connID));
}
$row = mysqli_fetch_assoc($result);
if ($row) {
    $dbpassward = $row['passward'];
    // 检查密码是否匹配
    if ($dbpassward === $password) {
        // 设置会话变量，重定向到主页
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    } else {
        echo "密码错误";
        mysqli_connect_error($connID);
        mysqli_error($connID);
    }
} else {
    echo "用户名不存在";
}
?>

</body>
</html>