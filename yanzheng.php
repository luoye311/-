<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>查询名称可用性</title>
</head>
<body>

    <?php
    $yonghuming=$_POST[用户名];
    if (empty($yonghuming)){
        header("Location: zhuce.php?error=username_taken");
        die;
    }
    $host = "localhost";
    $userName = "luoye1";
    $password = "cjK8DxhSPkWBwCrG";
    $dbname = "luntanzhanghao";
    if ($connID = mysqli_connect($host, $userName, $password, $dbname)) { //连接数据库
        echo ("连接数据库成功");
    } else {
         echo ("数据库连接失败");
    }
    $chaxun="SELECT * FROM zhanghao WHERE uname = '".$yonghuming."'"; //把sql命令赋值到$chaxun
    $result = mysqli_query($connID, $chaxun); //执行查询行数
    if (mysqli_num_rows($result) > 0){ //看行数是否大于0
        echo "对不起您的昵称被占用请换一个";
        header("Location: zhuce.php?error=username_taken"); //跳转并给一个error
        die;
    }else{
        echo "恭喜这个名称可用";
        header("Location: zhuce.php?yonghuming=".$yonghuming); //跳转并把用户名get过去
    }
    ?>
</body>
</html>