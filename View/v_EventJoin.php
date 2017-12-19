<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>
  <div class="profiletab2">
    <div class="tab-content">
        <div class="well">
          <form method="POST" class="form-horizontal" enctype="multipart/form-data">
            <input class="hidden" name="controller" value="Events"></input>
          <input class="hidden" name="action" value="join"></input>
          <?php foreach ($events as $event) {?>
            <input class="hidden" name="idEvent" value="<?php echo $event->idEvent; ?>"></input>
            <div class="form-group">
              <label class="control-label col-sm-2"  >Event Name: </label>
              <div class="col-sm-10">
                <br>
                <span><?php echo $event->eventName; ?></span>
              </div>
            </div>
          <?php } ?>
          <div class="form-group">
            <label class="control-label col-sm-2"  >Select your Team: </label>
            <div class="col-sm-10">
              <select class="form-control" name="idTeam">
                <?php foreach ($teams as $team) {?>
                        <option value="<?php echo $team->idTeam; ?>"><?php echo $team->teamName; ?></option>
                                <?php } ?>
                      </select>
            </div>
          </div>
            <button type="submit" class="btn btn-success btn-block">JOIN</button>
          </form>
        </div>
    </div>
  </div>
</body>
</html>
