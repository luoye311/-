<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>干冰块小工具-日期倒计时</title>
</head>
<body>
    <form action="" method="post">
        <div>目标日期:</div><input type="date" name="date">
        <input type="submit" value="点击查询" name="submit">
        <div>名字/备注:</div><input type="text" name="name">
    </form>
    <?php $cunchu = $_POST['date']; 
    if (!empty($_GET[error])){
        echo "如果想保存备注和日期不可以不写哦！";
    } 
    if (!empty($_GET[done])){
        echo "提交完成！";
    } 
    ?>
    <?php $namebeizhu = $_POST['name'] ?>
    <form action="" method="get">
    <input type="hidden" name="baocun" value="baocun">
    <input type="hidden" name="date" value="<?php echo $cunchu; ?>">
    <input type="hidden" name="name" value="<?php echo $namebeizhu; ?>">
    <input type="submit" value="保存查询结果" name="submit">
    </form>
    <?php
     $date1 = date_create($_POST['date']);
     $nowdate = date_create();
     $diff = date_diff($date1, $nowdate);
     $days = $diff->format('%a');
     $days1 = $days + 1;
     echo ("距离".$_POST['date']."还剩".$days1."天");
     $daym = $diff->format('%m');
     $daym1 = $daym + 1;
     $daymd = $diff->format('%d');
     $daymd1 = $daymd + 1;
     if (empty($daym)){

     }else{
        echo ("<br>距离".$_POST['date']."还剩".$daymd1."天".$daym."月");
     }
     session_start();
     if (!empty($_GET[baocun])){
        if (empty($_GET['date'])){
            header("Location: shengyyday.php?error=noempty");
            die;
        }
        if (empty($_GET['name'])){
            header("Location: shengyyday.php?error=noempty");
            die;
        }
        if (empty($_SESSION['username'])){
            header("Location: denglu.php".$needdenglu);
            die;
        }
        $host = "localhost";
        $userName = "";
        $dbpassword = "";
        $dbname = "luntanzhanghao";
        if ($connID = mysqli_connect($host, $userName, $dbpassword, $dbname)) { //连接数据库
            echo ("<br>");
        } else {
             echo ("数据库连接失败");
        }
        $uname = $_SESSION['username'];
        $cunchudate = $_GET['date'];
        $beizhu = $_GET['name'];
        $sql = "INSERT INTO 小工具日期查询 (用户名, 日期数据, 备注) VALUES ('$uname', '$cunchudate', '$beizhu')";
        mysqli_query($connID, $sql);
        mysqli_error($connID);
        header("Location: shengyyday.php?done=d");
     }
     
    ?>
    <a href="./mydate.php">点击查看已经保存的日期</a>
</body>
</html>