<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
  <div class="login-form">
    <h1>Login</h1>
    <form method="GET">
      <input type="hidden" name="controller" value="Login">
            <input type="hidden" name="action" value="authentication">
          <div class="form-group">
            <input class="form-control" name="username" type="text"
                  value="<?=isset($_GET["username"]) ? $_GET["username"] : NULL?>" required autofocus>
          </div>

          <div class="form-group">
            <input class="form-control" name="password" type="password"
              value="<?=isset($_GET["password"]) ? $_GET["password"] : NULL?>" required>
          </div>

          <button value="Login" type="submit" class="btn btn-success btn-block" name="login" >Sign In</button><br>
          <span>don't have an account? <a href="?controller=Register&action=home"><u>Sign Up Here</u></a> </span>
        </form>
  </div>
  </body>
</html>
