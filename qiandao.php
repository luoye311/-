<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>干冰块-签到</title>
</head>
<body>
    <h1>签到界面</h1>
    <?php
    session_start();
    if (empty($_SESSION['username'])){
        header ("Location: zhuce.php?needdenglu=need");
    }
    $username = $_POST['user'];
    $password = $_POST['password'];
    $host = "localhost";
    $userName = "";
    $dbpassword = "";
    $dbname = "luntanzhanghao";
    if ($connID = mysqli_connect($host, $userName, $dbpassword, $dbname)) { //连接数据库
        echo ("<br>");
    } else {
         echo ("数据库连接失败");
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
echo ("<div>您上次签到的日期:</div>".$row['上一次签到日期']);
echo ("碳元素：".$row1['签到积分']);
echo ("签到总次数:".$row2['签到次数']);
    ?>
    <form action="./qiandaochuli.php">
    <input type="submit" value="签到" name="submit">
    </form>
    <h3>碳元素的作用：</h3>
    <ul>
        <li>满3碳元素可兑换25瓶游戏内经验药水</li>
        <li>满10碳元素可兑换任意游戏内旗帜模板</li>
        <li>满5碳元素兑换任意生物头颅（除了玩家的）</li>
        <li>9碳元素兑换1组任意建筑方块18碳元素兑换3组任意建筑方块</li>
        <li>更多用法正在推出</li>
        <li>兑换请加管理员qq3356937811</li>
    </ul>
</body>
</html>