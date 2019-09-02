<?php
	if ($_FILES["photo"]["error"]>0) {
      echo "上传不成功".$_FILES["photo"]["error"];
    }else{
      if (($_FILES["photo"]["type"]=="image/gif")||($_FILES["photo"]["type"]=="image/jpeg")||($_FILES["photo"]["type"]=="image/pjpeg")&& $_FILES["photo"]["size"]<2097152){
        $newname= "upload/".date("YmdHis").substr($_FILES["photo"]["name"],-4,4);
        $filename= __DIR__."/".$newname;
        move_uploaded_file($_FILES["photo"]["tmp_name"],$filename);
      }else{
        echo "上传的文件格式或大小不符合要求";
      }
    };
	$names=$_REQUEST["names"];
	$summary=$_REQUEST["summary"];
	$caseshow=$_REQUEST["caseshow"];
	$url=$_REQUEST["url"];
	$position=$_REQUEST["position"];
	$votenum=$_REQUEST["votenum"];
	$action=$_REQUEST["action"];

	include_once("conn.php");
	if ($action == "add") {
		$sql="insert into 新闻(标题,肩题,栏目,内容,作者,发布时间,照片)value('{$names}','{$position}','{$summary}','{$caseshow}','{$url}','{$votenum}','{$newname}')";
	}else if($action == "update"){
		$id=$_REQUEST["id"];
		$sql="update 新闻 set 标题='{$names}',肩题='{$position}',栏目='{$summary}',内容='{$caseshow}',照片='{$newname}',作者='{$url}',发布时间='{$votenum}' where id={$id}";
	}else{
		die("请正确输入参数");
	}
	$result=mysqli_query($conn,$sql);
	if ($result) {
		echo "<script>alert('数据插入成功')</script>";
		header("Refresh:1;url=xinwen.php");
	}else{
		echo "数据插入失败";
	}
	//4、关闭连接，释放资源
	mysqli_close($conn);
?>