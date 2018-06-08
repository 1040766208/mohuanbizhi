<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>每日壁纸</title>
    <!DOCTYPE html>
    <style>
        *{
            margin: 0;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 15%;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        li a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
        }

        li a.active {
            background-color: #4CAF50;
            color: white;
        }

        li a:hover:not(.active) {
            background-color: #555;
            color: white;
        }
    </style>

</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/8
 * Time: 1:00
 */
//项目名称，利用curl实现php实现百变壁纸
$random = rand(1,1944);
$url = "https://www.prohui.com/b" . $random.".html";
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,"$url");
curl_setopt($curl, CURLOPT_HEADER, 1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE); // https请求 不验证证书和hosts
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
$results = curl_exec($curl);
curl_close($curl);
preg_match("/<[^>]*?wallpaper_content[^>]*?(http[^\\)]*)\\)/","$results",$get);
$url_get = $get[1];

$screenX = "<script>document.write(window.screen.height);</script>";
$screenY = "<script>document.write(window.screen.width);</script>";
$screen = $screenX." x ".$screenY;
//获取当前电脑的分辨率;
?>
</body>
<ul>
    <li><a class="" href="index.php">百变bing壁纸</a></li>
    <li><a href="zip.php">图片无损压缩站</a></li>
    <li><a href="xyw.php">这是一个彩蛋</a></li>
</ul>
<img style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo $url_get;?>" width="100%"height="100%">
</html>