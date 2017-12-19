<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <div class="login-form">
    <h1>Register</h1>
    <form  role="form" method="POST">
      <input class="hidden" name="controller" value="Register"></input>
      <input class="hidden" name="action" value="register"></input>
      <div class="control-group">
        <label class="control-label" for="Email">Email:</label>
        <div class="controls">
          <input id="Email" name="email" class="form-control" type="text" placeholder="input@email.com" class="input-large" required="">
        </div>
        <?php if (isset($errore)): ?>
          <span><?php echo $errore; ?></span>
        <?php endif ?>
      </div>
      <br>

      <!-- Text input-->
      <div class="control-group">
        <label class="control-label" for="userid">Username:</label>
        <div class="controls">
          <input id="userid" name="username" class="form-control" type="text" placeholder="username" class="input-large" required="">
          <?php if (isset($erroru)): ?>
            <span><?php echo $erroru; ?></span>
          <?php endif ?>
        </div>
      </div>
      <br>

      <!-- Password input-->
      <div class="control-group">
        <label class="control-label" for="password">Password:</label>
        <div class="controls">
          <input id="password" name="password" class="form-control" type="password" placeholder="********" class="input-large" required="">
          <em>1-8 Characters</em>
        </div>
      </div>
      <br>
      <button type="submit" class="btn btn-success btn-block" >Sign Up</button>
      <br>
      <span>Have an account? <a href="?controller=Login&action=login"><u>Sign In Here</u></a> </span>
    </form>
  </div>
</body>
</html>
