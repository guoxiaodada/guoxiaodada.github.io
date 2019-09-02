<?php include("head.php") ?>
		<div class="sui-row">
		    <div class="span2">
				<?php include("left.php") ?>
		    </div>
		    <div class="span8">
		    	<div class="sui-msg msg-large msg-block msg-info">
				  	<div class="msg-con">新闻查询</div>
				  	<!-- 所有课程的列表 -->
				  	<table class="sui-table table-primary">
				  		<tr>
				  			<th>id</th>
				  			<th>标题</th>
				  			<th>肩题</th>
				  			<th>栏目</th>
				  			<th>发布时间</th>
				  			<th>作者</th>
				  			<th>操作</th>
				  		</tr>
				  		<?php 
				  		include("conn.php");
				  		$sql="select * from 新闻";
				  		$result=mysqli_query($conn,$sql);
				  		if(mysqli_num_rows($result)>0){
							while($arr=mysqli_fetch_assoc($result)){
								echo "<tr><td>{$arr['id']}</td>
								<td>{$arr['标题']}</td>
								<td>{$arr['肩题']}</td>
								<td>{$arr['栏目']}</td>
								<td>{$arr['发布时间']}</td>
								<td>{$arr['作者']}</td>
								<td>
									<a class='sui-btn btn-small btn-warning' href='xinwen-edit.php?id={$arr['id']}'>修改</a>
									<a class='sui-btn btn-small btn-warning' href='xinwen-del.php?id={$arr['id']}'>删除</a>
								</td>
								</tr>";
							}
				  		}else{
							echo "暂时没有记录";
				  		}
				  		?>
				  	</table>
					<!-- <div class="xxxx" class="sui-pagination pagination-large">
					  <ul>
					    <li class="prev disabled"><a href="#">«上一页</a></li>
					    <li class="active"><a href="#">1</a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li class="dotted"><span>...</span></li>
					    <li class="next"><a href="#">下一页»</a></li>
					  </ul>
					  <div><span>共10页&nbsp;</span><span>
					      到
					      <input type="text" class="page-num"><button class="page-confirm" onclick="alert(1)">确定</button>
					      页</span></div>
					</div> -->
		 	 	</div>
			</div>		
		</div>
<?php include("foot.php"); ?>
<script>