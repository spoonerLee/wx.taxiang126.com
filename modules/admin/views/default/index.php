<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>登录</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/bootstrap/css/signin.css" rel="stylesheet">
    <script src="/bootstrap/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <div class="container">

        <form class="form-signin" action="<?= yii\helpers\Url::to("/admin/default/login")?>" method="post">
            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->csrfToken?>" />
        <h2 class="form-signin-heading">公众号管理后台</h2>
        <label for="inputEmail" class="sr-only">用户名</label>
        <input type="text" class="form-control" placeholder="用户名"  name="LoginForm[username]" required autofocus>        
        <label for="inputPassword" class="sr-only">密码</label>
        <input type="password" id="inputPassword" class="form-control" name="LoginForm[password]" placeholder="密码" required>
        <label for="inputPassword" class="sr-only"></label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
      </form>

    </div> <!-- /container -->

    <script src="/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

