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
          <input class="hidden" name="action" value="tambahEvent"></input>
            <div class="form-group">
              <label class="control-label col-sm-2"  >Event Name:</label>
              <div class="col-sm-10">
                <input type="text" name="eventName" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2"  >Event Type:</label>
              <div class="col-sm-10">
                <select class="form-control" name="type">
                  <option value="1">CS:GO</option>
                  <option value="2">Dota 2</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2"  >Organizer:</label>
              <div class="col-sm-10">
                <input type="text" name="organizer" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Date:</label>
              <div class="col-sm-10">
                <input type="date" name="date" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2"  >Location:</label>
              <div class="col-sm-10">
                <input type="text" name="location" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2"  >Description:</label>
              <div class="col-sm-10">
                <input type="text" name="description" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2"  >Event Image:</label>
              <div class="col-sm-10">
                <input type="file" name="image" accept="image/*">
              </div>
            </div>
            <button href="?controller=AdminPanel&action=home" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
