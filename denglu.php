<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="./css/denglucss.css">
<script src='https://www.hCaptcha.com/1/api.js' async defer></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录您的干冰块账户</title>
</head>
<body>
    
    <?php
    $needdenglu = $_GET[needdenglu];
     if (!empty($needdenglu)){
        echo "<h1>您需要先登录再继续登陆完后请返回刚才页面重新操作！";
    }  ?>
    <div class="denglu">
    <div class="wenzi">
    <div class="daxiao">登录您的干冰块账户<br>LOGIN</div>
    <form action="./dengluyanzheng.php" method="POST">
        <input  type="text" name="user" placeholder="用户名" class="shuru">
        <br>
        <input  type="password" name="password" placeholder="密码" class="shuru2"><br></div>
        <input  type="submit" value="登录" name="submit" class="anniu"><br>
    </form>
    <a href="./zhuce.php">还没有干冰块账户？点击注册！</a>
    </div>
    </div>
</body>
</html>