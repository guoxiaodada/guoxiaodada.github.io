<?php
	include("conn.php");
	//需要对id验证
	$id=empty($_GET["id"])?"null":$_GET["id"];
	if ($id=="null") {
		die("请输入正确的参数!");
	}
	//执行查询sql
	$sql="select * from 新闻 where id='{$id}'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		//转成关联数组，因为这里只有一条记录，所以不用while
		$arr=mysqli_fetch_assoc($result);
	}else{
		echo "找不到这条记录";
	}
 ?>
<?php include("head.php") ?>
<div class="sui-layout">
	<div class="sidebar">
		<?php include("left.php") ?>	  	
	</div>
	<div class="content">
		<p class="sui-text-xxlarge my-padd">添加候选人</p>
		<form enctype="multipart/form-data" class="sui-form form-horizontal sui-validate" action="xinwenluru.php" method="post">
			<input type="hidden" name="action" value="update">
			<input type="hidden" name="id" value="<?php echo $arr['id'] ?>">
			<div class="control-group">
	    		<label class="control-label">标题</label>
	    		<div class="controls">
	      			<input type="text" class="input-large" data-rules="required" name="names" value="<?php echo $arr['标题'] ?>">
	    		</div>
	  		</div>
			<div class="control-group">
	    		<label class="control-label">照片</label>
	    		<div class="controls">
	    			<img src="<?php echo $arr['照片'] ?>">
	      			<input type="file" class="input-mediom" data-rules="required" name="photo">
	      			<input  type="hidden" class="oldfile1" value="<?php echo $arr['照片'] ?>">
	    		</div>
	  		</div>
			<div class="control-group">
			    <label for="inputEmail" class="control-label">肩题</label>
			    <div class="controls">
			     	<input type="text" id="kcName" class="input-large input-fat" placeholder="" name="position" value="<?php echo $arr['肩题'] ?>">
			   	 </div>
			</div>
			<div class="control-group">
			    <label for="inputEmail" class="control-label">栏目</label>
			    <div class="controls">
			     	<input type="text" id="kcName" class="input-large input-fat" placeholder="" name="summary" value="<?php echo $arr['栏目'] ?>">
			   	 </div>
			</div>
			<div class="control-group">
			    <label for="inputEmail" class="control-label">内容</label>
			    <div class="controls">
			     	<textarea id="kcName" class="input-large input-fat" placeholder="" name="caseshow" value="<?php echo $arr['内容'] ?>"></textarea>
			   	 </div>
			</div>
			<div class="control-group">
			    <label for="inputEmail" class="control-label">作者</label>
			    <div class="controls">
			     	<input type="text" id="kcName" class="input-large input-fat" placeholder="" name="url" value="<?php echo $arr['作者'] ?>">
			   	 </div>
			</div>
			<div class="control-group">
			    <label for="inputEmail" class="control-label">发布时间</label>
			    <div class="controls">
			     	<input type="text" id="kcName" class="input-large input-fat" placeholder="" name="votenum" value="<?php echo $arr['发布时间'] ?>">
			   	 </div>
			</div>
	<!-- 		<div class="control-group">
			    <label for="inputEmail" class="control-label">姓名：</label>
			    <div class="controls">
			     	<input type="text" id="kcName" class="input-large input-fat" placeholder="输入教室号" data-rules="required|minlength=2|maxlength=10" name="">
			   	 </div>
			</div> -->
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
<?php include("foot.php") ?>