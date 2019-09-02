<?php 
	include("conn.php");
	//执行删除sql语句
	$sql="delete from 新闻 where id={$_GET['id']}";
	$result=mysqli_query($conn,$sql);
	if ($result) {
		echo "<script>alert('数据删除成功')</script>";
		header("Refresh:1;url=xinwenchaxun.php");
	}else{
		echo "数据删除失败".mysqli_error($conn);
	}
	//关闭数据连接
	mysqli_close($conn);
 ?>