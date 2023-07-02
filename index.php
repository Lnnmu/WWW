<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="shortcut icon" href="img/guangzhu.png">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <style>
        body {
            min-width: 400px;
            background-size: 100% 100%;
            background-attachment: fixed;
            background-image: linear-gradient(to right, #889eff 0%, #ffbbd1 100%);
        }
        #iframe{
            width: 100%;
            height: 100%;
            border: none;
        }
        .iframe{
            height: 600px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 5px;
            box-shadow: rgb(255, 255, 255) 0px 0px 5px 1px;
        }
    </style>
</head>

<body>
    <div id="menu">
        <div class="row">
            <h2><img src="img/dianzan.png" alt="" id="dianzan">Welcome to Lnnmu's website.</h2>
        </div>
    </div>
    <div id="main">
        <div class="container">
            <div class="row">
                <div class="head col-md-12 col-lg-4">
                    <a href="login.php"><img src="img/touxiang.jpg" alt="" id="img-main"></a>
                    <h3>林木(Lnnmu)</h3>
                    <h6>Games/Music/Computers</h6>
                    <h6>QQ：2452139719</h6>
                    <p>zyy9kru502d</p>
                </div>
                <div class="content col-md-12 col-lg-8">
                    <h3>Content</h3>
                    <div class="container">
                        <div class="row" id="minibox">
                            <!-- <div class="minibox col-6 col-lg-4">
                                <a href="" target="_blank">
                                    <div class="minibox-content">
                                        <img src="img/tiantianquan.png"><h6>你好</h6>
                                    </div>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- <div class="iframe col-12">
                    <iframe src="chat.php" id="iframe" rameborder="0" scrolling="no" name="mainShow"></iframe>
                </div> -->
            </div>
        </div>
    </div>
    <div id="footer">
        <h6>欢迎大家来到我的网页</h6>
        <h6>图片图标皆来自网络,如有侵权请告删之</h6>
    </div>
    <script type="text/javascript" src="js/addminibox.js"></script>
    <script type="text/javascript" src="js/onclik_img_change.js"></script>
    <script type="text/javascript">
        onclick_img_change("dianzan", "img/dianzan.png", "img/dianzan-red.png");
        addminibox("https://github.com/Lnnmu","_blank","kafei.png","Github");
        addminibox("/chat.php","","tiantianquan.png","ChatGPT");
        addminibox("https://www.zhiyinidc.com/","_blank","kele.png","织音云");
        addminibox("https://dns.liusui.ga/","_blank","pijiu.png","灵空二级域名");
        addminibox("https://api.pearktrue.cn/","_blank","shoushi.png","PearAPI");
        addminibox("https://www.cmd5.com/","_blank","youyu.png","MD5在线爆破");
        addminibox("https://xn--4gq62f52gdss.com/","_blank","niunai.png","一元机场");
        addminibox("https://c.runoob.com/","_blank","bangbangtang.png","菜鸟工具");
    </script>
</body>

</html>