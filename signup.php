<?php
	$nickname = $_REQUEST["nickname"];	
	$youxiang = $_REQUEST["youxiang"];	
	// $action = $_REQUEST["action"];	
	$mima = $_REQUEST["mima"];	
	$question = $_REQUEST["question"];	
	$answer = $_REQUEST["answer"];

	include_once("conn.php");

	//3、运行SQL语句，执行增、删、改、查
	$sql1 = "insert into admin(nickname,email,password,question,answer)value('{$nickname}','{$youxiang}','{$mima}','{$question}','{$answer}')";

		$result = mysqli_query($conn,$sql1);	
		if($result){
			echo "<script>alert('数据插入成功!')</script>";
			header("Refresh:1;url=logins.php");
		}else{
			echo "数据插入失败";
		}
	//4、关闭连接，释放资源
		mysqli_close($conn);
?>