<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>
  <div class="admintab">
    <div class="tab-content">
      <div class="col-md-9">
        <div class="well">
          <form class="form-horizontal" method="POST" enctype="multipart/form-data">
            <input class="hidden" name="controller" value="AdminPanel"></input>
            <input class="hidden" name="action" value="editEvent"></input>
            <?php foreach ($events as $event) {?>
              <input type="hidden" name="idEvent" value="<?php echo $event->idEvent; ?>">
              <div class="form-group">
                <label class="control-label col-sm-2"  >Event Name:</label>
                <div class="col-sm-10">
                  <input type="text" name="eventName" value="<?php echo $event->eventName; ?>" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2"  >Event Type:</label>
                <div class="col-sm-10">
                  <select class="form-control" name="type">
                    <option value="1" <?php if($event->type==1){ echo 'selected';} ?>>CS:GO</option>
                    <option value="2" <?php if($event->type==2){ echo 'selected';} ?>>Dota 2</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2"  >Organizer:</label>
                <div class="col-sm-10">
                  <input type="text" name="organizer" value="<?php echo $event->organizer; ?>" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">Date:</label>
                <div class="col-sm-10">
                  <input type="date" name="date" value="<?php echo $event->date; ?>" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2"  >Location:</label>
                <div class="col-sm-10">
                  <input type="text" name="location" value="<?php echo $event->location; ?>" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2"  >Description:</label>
                <div class="col-sm-10">
                  <input type="text" name="description" value="<?php echo $event->description; ?>" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2"  >Event Image:</label>
                <div class="col-sm-10">
                  <img src="Images/EventImg/<?php echo $event->image; ?>" alt="eventImage" width="50px" height="50px">
                  <input type="file" name="image" id="image" accept="image/*">
                </div>
              </div>
              <button href="?controller=AdminPanel&action=home" class="btn btn-default">Cancel</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            <?php } ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
