<?php
session_start();
include("conn.php");

//查询数据库中是否已存在该邮件
$sql="select * from `新闻`";
$msg = array(
    "code"=>200,
    "msg"=>"获取所有评论成功",
    "data"=>array()
);
  $result = mysqli_query($conn,$sql);
  if( mysqli_num_rows($result)>0 ){
   while($arr=mysqli_fetch_object($result)){
        $msg['data'][]=$arr;
      }
  }else{
    $msg['code'] = 204;
    $msg['msg'] = "没有找到新闻";
  }
  die( json_encode($msg));
  mysqli_close($conn);
?>