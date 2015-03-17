<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>네이버 스마트 에디터</title>
<script type="text/javascript" src="/smartEditor/js/HuskyEZCreator.js"></script>
</head>
<body>
<form>
<textarea name="ir1" id="ir1" rows="10" cols="100"></textarea>
</form>

<script type="text/javascript">
var oEditors = [];
nhn.husky.EZCreator.createInIFrame({
	oAppRef: oEditors,
	elPlaceHolder: "ir1",
	sSkinURI: "/smartEditor/SmartEditor2Skin.html",
	fCreator: "createSEditor2"
});
</script>
</body>
</html>