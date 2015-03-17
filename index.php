<?php
<<<<<<< HEAD
phpinfo();
=======
$user_agent = $_SERVER['HTTP_USER_AGENT'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>사용자의 접속 브라우저 및 운영체제 및 기기(?)</title>
</head>
<body>
<p><?=$user_agent?></p>
<?php
## 브라우저 구별
$browser = '사용자님의 접속 브라우저는 ';
if( strpos($user_agent, 'MSIE') ) {
	## IE10 이하
	$browser .= 'Internet Explorer';
} else if( strpos($user_agent, 'Trident') ) {
	## IE11
	$browser .= 'Internet Explorer';
} else if( strpos($user_agent, 'Chrome') ) {
	## Chrome
	$browser .= 'Chrome';
} else if( strpos($user_agent, 'Firefox') ) {
	## Firefox
	$browser .= 'Firefox';
}
$browser .= ' 입니다.';
?>
<p><?=$browser?></p>

<?php
## 운영체제 구별
$os = '사용자님의 접속 운영체제는 ';
if( strpos($user_agent, 'Windows NT 6.1') ) {
	## Window7
	$os .= 'Windows 7';
} else if( strpos($user_agent, 'Android') ) {
	## Android
	$os .= '안드로이드';
}
$os .= ' 입니다.';
?>
<p><?=$os?></p>
</body>
</html>
>>>>>>> 16704f5e94bedda4240a53e72f4a740be8d0920a
