<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/bootstrap/css/dashboard.css" rel="stylesheet">
    <script src="/js/jquery.min.js"></script>  
</head>
<body>
<?php $this->beginBody() ?>
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/index.php/home">企业网站管理后台</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">超级管理员</a></li>
            <li><a href="/index.php/admin/Login/login_out">退出</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li  class="active">
            <a href="/index.php/home">首页 </a></li>
            <li >
            <a href="/index.php/admin/info/toupdate">网站设置</a></li>
            <li >
                <a href="<?= Url::to(["/admin/menu/index"])?>">菜单设置</a></li>
            <li >
            <a href="/index.php/admin/doc/index">文章</a></li>
            <li >
            <a href="/index.php/admin/supply/index">游戏</a></li>
            <li >
            <a href="/index.php/admin/one_page/index">单页管理</a></li>
            <li >
            <a href="/index.php/admin/links/index">友情链接</a></li>
            <li >
            <a href="/index.php/admin/example/index">成功案例</a></li>
          </ul>
          
          <ul class="nav nav-sidebar">
            <li >
            <a href="/index.php/admin/my_info/toupdate">我的信息</a></li>
            
          </ul>

        </div>
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          
        <?= $content ?>

</div>
      </div>
    </div>   
    <script src="/bootstrap/js/ie-emulation-modes-warning.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/bootstrap/js/holder.min.js"></script>
    <script src="/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
