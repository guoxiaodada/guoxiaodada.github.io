<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- <link rel="stylesheet" type="text/css" href="mycss.css"> -->
	<link href="http://g.alicdn.com/sj/dpl/1.5.1/css/sui.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://g.alicdn.com/sj/dpl/1.5.1/css/sui-append.min.css">
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<div class="my_head">
		<h1>北京网络职业学院管理系统V1.0</h1>
	</div>
</body>
</html>
<script type="text/javascript" src="http://g.alicdn.com/sj/lib/jquery.min.js"></script>
<script type="text/javascript" src="http://g.alicdn.com/sj/dpl/1.5.1/js/sui.min.js"></script>
<script>
//使用jquery实现tab切换效果
$(function(){
	$(".box .level1 > a").on("click", function(){
		//console.log("ok");
		//给当前元素添加"current"样式
		$(this).addClass("current") 
		//下一个元素显示
		.next().show()
		//父元素的兄弟元素的子元素<a>
		.parent().siblings().children("a").
		//移除上面找到的所有<a>的current 样式
		removeClass("current")
		//上面所有<a>的下一个元素隐藏
		.next().hide();

		return false;
	})
});
</script>