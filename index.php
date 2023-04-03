<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="./photo/icon.jpg">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8105709282351148"
     crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/indexcss.css">
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>干冰块工作室-服务器官网</title>
</head>
<body>
<div class="daohanglan">
<a href="./shengyyday.php" style="font-size:25px;">干冰块小工具-剩余天</a>
<a href="./aoyunhui.html" style="font-size:25px;">奥运会</a>
<a href="./chafu.php" style="font-size:25px;">查服</a>
<a href="./jianyi.html" style="font-size:25px;">提交建议</a>
<a href="./biaoge.html" style="font-size:25px;">国家报名</a>
<a href="./zanzhu.html" style="font-size:25px;">赞助 </a>
<?php
session_start();
if (empty($_SESSION['username'])){
  echo '<a href="./denglu.php" style="font-size:25px;">登录</a>';
  echo '<a href="./zhuce.php" style="font-size:25px;">注册</a>';
}
if (!empty($_SESSION['username'])){
  echo '<a href="./tuichudenglu.php" style="font-size:25px;">退出登录</a>';
  echo '<a href="./qiandao.php" style="font-size:25px;">点击签到</a>';
  echo '<a href="./geren.php" style="font-size:25px;">' . $_SESSION['username'] . '</a>';
}
?>
</div>
<?php
session_start();
?>
<?php
    session_start();
    ?>
    <div class="biaoti2"><img src="./css/icon.png" alt="" class="biaoti">干冰块-国战服务器 CO2STUDIO AVICII.SHOP avicii.shop 

    <div class="wenben">
        <img src="./photo/4.png" alt="" class="p">
        欢迎光临，如你所见，这里是一个叫做干冰块的服务器论坛，也是一个服务器的官方网站，我们很开心见到你，我希望这个服务器能被你发现闪光点并来这里分享，你作为服务器的一员，当让也可以提交建议或自愿赞助，腐竹和管理会十分感谢你
      </div>
      <a href="./indexold.html" class="j">点击进入旧版网页</a>
      <div class="gm">扩大您的规模！</div>
      <div class="wenben2"><img src="./photo/4.png" alt="" class="p2">独自一人可并不好玩和大家协同游玩才是充满乐趣的！请想好你的国家的名字并提交，以此创建自己的国家以参与服务器并且模拟现实中的外交政治等
      </div>
      <a href="./biaoge.html" class="j2">点击进行国家报名</a>
      <div class="container">
        <div class="mh">
          <div class="mh2">美化进行中.....</div>
          <div class="mh3">之前网页非常的丑？没问题！千万不要忘了我们无时无刻都在准备/进行官网美化并且官网大约1个月左右会有一次新功能我们只会把网站做的越来越好我们相信只有服务器的官网好看游玩服务器的人才会更加有游玩的动力</div>
        </div>
        <div class="ayh">令人佩服的奥运精神<div class="mh3">
            想在我的世界里面体验奥运会吗赶紧参加把！保证您能有一个公平公正的竞技环境*此活动正在准备中具体推出时间会在稍后公布
          </div>
          <a href="./aoyunhui.html" class="ayh2">点击进入奥运会专区！</a>
      </div>
</html>