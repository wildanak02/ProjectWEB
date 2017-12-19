<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>
  <div class="profiletab2">
    <div class="tab-content">
        <div class="well">
          <form method="POST" class="form-horizontal" enctype="multipart/form-data">
            <input class="hidden" name="controller" value="Profile"></input>
          <input class="hidden" name="action" value="changepwd"></input>
          <?php foreach ($posts as $post) {?>
            <div class="form-group">
              <label class="control-label col-sm-2"  >Your Currently Password: </label>
              <div class="col-sm-10">
                <br>
                <span><?php echo $post->password; ?></span>
              </div>
            </div>
          <?php } ?>
          <div class="form-group">
            <label class="control-label col-sm-2"  >New Password: </label>
            <div class="col-sm-10">
              <input type="text" name="password" class="form-control">
            </div>
          </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button href="?controller=Profile&action=home" class="btn btn-default">Cancel</button>
          </form>
        </div>
    </div>
  </div>
</body>
</html>
