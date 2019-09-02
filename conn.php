<?php
    $host = "localhost";
    $user = "root";
    $password = "168168";
    $db = "student_dbs";
    $conn = mysqli_connect($host,$user,$password);
    // if($conn){
    //     echo "连接数据库成功！";
    // }else{
    //     echo "连接失败";
    // }
    //第二步：选择要操作的数据库
    mysqli_select_db($conn,$db);
    //设置读取数据库的字符编码，防止乱码
    mysqli_query($conn,"set names utf8");
    
?>