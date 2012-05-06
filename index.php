<?php
require_once('facebook.php');


// アプリごとのIDとsecretキー
$facebook = new Facebook(array(
    'appId' => '234783909887323',
    'secret' => '537f1cd6675876c16f543bf009ebbd29',
));

// ログイン状態を取得
$user = $facebook->getUser();

if ($user) {
    // メッセージが投稿されたときは Facebook に送信
    if(isset($_POST['message'])) {
        $facebook->api('/me/feed', 'POST', array(
            'message' => "【AKB48】私の推しメンは".$_POST['message']."です。"."あなたの推しメンは誰ですか？",
            'link' => "http://apps.facebook.com/akb-oshi/index.php",
            'name' => "照英",
            'picture' => 
        ) );
        header(sprintf('Location: http://%s%s', $_SERVER['HTTP_HOST'], $_SERVER['SCRIPT_NAME']));
        exit;
    }

    // ユーザーの情報を取得
    $user_profile = $facebook->api('/me');

    // ログインしている場合はログアウトページ
    $logoutUrl = $facebook->getLogoutUrl();
} else {
    // ログインしていない場合はログインページ
    // ウォールに投稿する権限を取得
    $loginUrl = $facebook->getLoginUrl(array(
        'scope' => 'publish_stream',
    ));
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta property="og:image" content="akb.jpg">
  <title>照英共有</title>
</head>
<body bgcolor="#ff66cc">
	<div align="center">
<?php if ($user): ?>
  <p><font size="6"><?php echo $user_profile['name'] ?> さんの今年一番の照英は？</font></p>

<p><a target="_blank" href="http://www.akb48.co.jp/members/">AKB48メンバー画像一覧</a></p>

  <form action="" method="post">
    <ul style="list-style:none">
      <li style="float:left"><input type="submit" name="message" value="　岩佐美咲　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　多田愛佳　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　大家志津香　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　片山陽加　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　倉持明日香　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　小嶋陽菜　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　指原莉乃　" /></li><br /><br />
      <li style="float:left"><input type="submit" name="message" value="　篠田麻里子　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　高城亜樹　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　高橋みなみ　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　仲川遥香　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　中田ちさと　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　仲谷明香　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　前田敦子　" /></li><br /><br />
      <li style="float:left"><input type="submit" name="message" value="　前田亜美　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　松原夏海　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　秋元才加　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　板野友美　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　内田眞由美　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　梅田彩佳　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　大島優子　" /></li><br /><br />
      <li style="float:left"><input type="submit" name="message" value="　菊地あやか　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　田名部生来　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　中塚智実　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　仁藤萌乃　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　野中美郷　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　藤江れいな　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　松井咲子　" /></li><br /><br />
      <li style="float:left"><input type="submit" name="message" value="　峯岸みなみ　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　宮澤佐江　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　横山由依　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　米沢瑠美　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　石田晴香　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　奥真奈美　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　河西智美　" /></li><br /><br />
      <li style="float:left"><input type="submit" name="message" value="　柏木由紀　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　北原里英　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　小林香菜　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　小森美果　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　佐藤亜美菜　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　佐藤すみれ　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　佐藤夏希　" /></li><br /><br />
      <li style="float:left"><input type="submit" name="message" value="　鈴木紫帆里　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　鈴木まりや　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　近野莉菜　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　平嶋夏海　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　増田有華　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　宮崎美穂　" /></li>
      <li style="float:left"><input type="submit" name="message" value="　渡辺麻友　" /></li><br /><br />
    </ul>
  </form>
<p>ボタンを押すとウォールに投稿します</p>
<?php else: ?>
  <p>アプリを使用するには<a target="_top" href="<?php echo $loginUrl ?>">ログイン</a>してください</p>
<?php endif ?>
</div>
</body>
</html>