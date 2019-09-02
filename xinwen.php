<?php include("head.php") ?>
<div class="sui-layout">
  <div class="sidebar">
    <?php include("left.php") ?>      
  </div>
  <div class="content">
    <p class="sui-text-xxlarge my-padd">添加候选人</p>
    <form enctype="multipart/form-data" class="sui-form form-horizontal sui-validate" action="xinwenluru.php" method="post">
      <input type="hidden" name="action" value="add">
      <div class="control-group">
          <label for="inputEmail" class="control-label">标题</label>
          <div class="controls">
            <input type="text" id="kcName" class="input-large input-fat" placeholder="输入姓名" name="names">
           </div>
      </div>
      <div class="control-group">
                <label class="control-label">照片：</label>
                <div class="controls">
                    <input type="file" class="input-mediom" data-rules="required" name="photo">
                </div>
            </div>
      <div class="control-group">
          <label for="inputEmail" class="control-label">肩题</label>
          <div class="controls">
            <input type="text" id="kcName" class="input-large input-fat" placeholder="输入职位：" name="position">
           </div>
      </div>
      <div class="control-group">
          <label for="inputEmail" class="control-label">栏目</label>
          <div class="controls">
            <input type="text" id="kcName" class="input-large input-fat" placeholder="输入个人简历" name="summary">
           </div>
      </div>
      <div class="control-group">
          <label for="inputEmail" class="control-label">内容</label>
          <div class="controls">
            <textarea id="kcName" class="input-large input-fat" placeholder="输入案例简介" name="caseshow"></textarea>
           </div>
      </div>
      <div class="control-group">
          <label for="inputEmail" class="control-label">作者</label>
          <div class="controls">
            <input type="text" id="kcName" class="input-large input-fat" placeholder="" name="url">
           </div>
      </div>
      <div class="control-group">
          <label for="inputEmail" class="control-label">发布时间</label>
          <div class="controls">
            <input type="text" id="kcName" class="input-large input-fat" placeholder="" name="votenum">
           </div>
      </div>
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