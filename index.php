      <?php 
         session_start();
        include('head.php'); ?>
  <div class="sui-layout">
    <div class="sidebar">
    <?php include('left.php'); ?>
    </div>
    <div class="content">
   <p class="sui-text-xxlarge my-padd label-success">欢迎访问学生管理系统！</p >
            <div class="body-on" style="width:1000px;height:100%;margin-left:200px">
                <ul class="body-on"></ul>
            </div>
            <!-- <a href="">asda</a> -->
    </div>
  </div>  
 </div>
    <?php 
    $_SESSION["name"]="guoxiao";
    $_SESSION["password"]="123456";
    include('foot.php'); ?>
    <script>

window.onload = function(){
        $.ajax({
            "url":"api.php",
            "type":"post",
            "dataType":"json",
            "success":function(data){
            	console.log("ok")
                console.log( data );
                var str = "";
                $.each(data.data,function(i,item){
          str+='<li class="li"><h3>'+item.标题+'<div class="div"><a href="http://www.bjwlxy.org.cn/a/zoujinbeiwang/20190625/209.html"><img width="500px" height="300px" src="'+item.照片+'"></a><p>'+item.作者+'</p><p>'+item.发布时间+'</p></div></li><br>';
                });
        $(".body-on").html(str);
            },
        });
    }
    // <div class="innerBlock"><div class="img"><a href="">'+item.标题+'<img width="100%" height="100%" src="'+item.照片+'"></a></div><div class="dat"><span>'+item.发布时间+'</span> | <span>北网新闻</span></div><div class="tit"><h5><a href="" target="_self">'+item.标题+'</a></h5></di</div></div>
    </script>