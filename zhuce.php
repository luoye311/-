<!DOCTYPE html>
<html lang="en">
<head>
<script src='https://www.hCaptcha.com/1/api.js' async defer></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>欢迎来到注册页面</title>
</head>
<body>
    <h1>注册一个属于您的干冰块账户</h1>
<form action="yanzheng.php" method="post">
    用户名：<input type="text" name="用户名" value="<?php echo $yonghuname ?>">
    <input type="submit" value="验证用户名是否可用" name="submit">
</form>
<?php
if (empty($_GET[pnull])){

}else{
    echo "密码怎么可以为空呢？";
}
if (empty($_GET[qnull])){

}else{
    echo "QQ怎么可以为空呢？";
}
$yonghuname=$_GET[yonghuming];
if (empty($yonghuname)){
    echo ("对不起您所验证的用户名已经被占用试着换一个吧");
}else {
    echo ("您的用户名可用恭喜！您所验证的用户名是".$yonghuname."请注意在您看到这行字的时候您的名字会锁定为".$yonghuname."这就意味着您只有彻底退出重进网页的时候并且看不到这句话的时候您才可以更改用户名");
}
?>

<form action="./zhuces.php" method="post">
<input type="hidden" name="yonghuming" value="<?php echo $yonghuname; ?>">
    密码：<input type="password" name="密码">
    QQ号码：<input type="text" name="qq">
    <?php if (empty($_GET[yonghuming])) { ?>
        <input type="submit" value="注册" name="submit" disabled>
    <?php } else { ?>
        <div class="h-captcha" data-sitekey="a8708b1f-fa8c-4a86-9a38-4a8dba661cbf"></div>
        <input type="submit" value="注册" name="submit">
    <?php } ?>
</form>

</body>
</html>