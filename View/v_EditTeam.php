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
          <input class="hidden" name="action" value="editTeam"></input>
          <?php foreach ($teams as $post) {?>
          <input type="hidden" name="idTeam" value="<?php echo $post->idTeam; ?>">
          <div class="form-group">
            <label class="control-label col-sm-2"  >Team Name: </label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $post->teamName; ?>" name="teamName" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2"  >Team Member: </label>
            <div class="col-sm-10">
              <textarea class="form-control" name="teamMember" rows="5" cols="5"><?php echo $post->teamMember; ?></textarea>
            </div>
          </div>
        <?php } ?>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button href="?controller=Profile&action=home" class="btn btn-default">Cancel</button>
          </form>
        </div>
    </div>
  </div>
</body>
</html>
