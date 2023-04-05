<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册成功！</title>
</head>
<body>
    <?php
    if (empty($_POST['密码'])){
        header("Location: zhuce.php?pnull=p");
        die;
    }
    if (empty($_POST['qq'])){
        header("Location: zhuce.php?qnull=q");
        die;
    }
    if(isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response']))
    {
          $secret = '0xbC17aE9CFC573E169cDD7b01Fc67000204A3eF9C';
          $verifyResponse = file_get_contents('https://hcaptcha.com/siteverify?secret='.$secret.'&response='.$_POST['h-captcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR']);
          $responseData = json_decode($verifyResponse);
          if($responseData->success)
          {
              $succMsg = 'Your request have submitted successfully.';
          }
          else
          {
              $errMsg = 'Robot verification failed, please try again.';
          }
     }
  if (empty($succMsg)){
      echo "<h1>人机验证未通过您无法提交</h1>";
      die;
  }
    $host = "localhost";
    $userName = "luoye1";
    $password = "cjK8DxhSPkWBwCrG";
    $dbname = "luntanzhanghao";
    if ($connID = mysqli_connect($host, $userName, $password, $dbname)) { //谅解数据库
        echo ("连接数据库成功");
    } else {
         echo ("数据库连接失败");
    }
    $uname=$_POST['yonghuming'];
    $password=$_POST['密码'];
    $qq=$_POST['qq'];
    $chaxun="SELECT * FROM zhanghao WHERE uname = '".$uname."'"; //把sql命令赋值到$chaxun
    $result = mysqli_query($connID, $chaxun); //执行查询行数
    if (mysqli_num_rows($result) > 0){ //看行数是否大于0
        echo "对不起您的昵称被占用请换一个";
        header("Location: zhuce.php?error=username_taken"); //跳转并给一个error
        die;
    }
    echo ($uname.$password.$qq);
    $sql = "INSERT INTO zhanghao (uname, passward, qq) VALUES ('$uname', '$password', '$qq')";
mysqli_query($connID, $sql);
mysqli_error($connID);
    ?>
</body>
</html>