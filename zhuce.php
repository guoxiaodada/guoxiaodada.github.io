<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <!-- <link rel="stylesheet" type="text/css" href="mycss.css"> -->
  <link href="http://g.alicdn.com/sj/dpl/1.5.1/css/sui.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="http://g.alicdn.com/sj/dpl/1.5.1/css/sui-append.min.css">
  <link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>
    <div class="sui-row">
        <div class="span2">
        </div>
        <div class="span8">
          <div class="sui-msg msg-large msg-block msg-info">
            <div class="msg-con">注册账号</div>
        <form enctype="multipart/form-data" class="sui-form form-horizontal sui-validate" action="signup.php"  method="post" style="margin: 100px 200px;">
          <input type="hidden" name="action" value="add">
            <div class="control-group">
              <label class="control-label">账号</label>
              <div class="controls">
                  <input type="text" class="input-large" data-rules="required" name="nickname">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">邮箱</label>
              <div class="controls">
                  <input type="text" class="input-large" data-rules="required" name="youxiang">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">密码</label>
              <div class="controls">
                  <input type="text" class="input-large" data-rules="required" name="mima">
              </div>
            </div>
            <select name="question" id="" style="margin: 0  0 25px 100px;">
              <option value="1">你的小学在哪里上的？</option>
              <option value="2">你的名字是什么？</option>
              <option value="3">你是男是女？</option>
            </select><br>
            <label style="margin-left: 15px;">请填写答案：</label>
             <input type="text" class="input-large" data-rules="required" name="answer">
            <div class="control-group">
              <label class="control-label"></label>
              <div class="controls">
                  <button type="submit" class="sui-btn btn-primary">确定</button>
                  <button type="reset" class="sui-btn">重置</button>
              </div>
            </div>
        </form>
        </div>
        </div>
      </div>
<?php   include("foot.php") ?>