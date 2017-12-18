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
            <input class="hidden" name="action" value="editUser"></input>
              <?php foreach ($users as $user) {?>
                <input type="hidden" name="idUser" value="<?php echo $user->idUser; ?>">
            <div class="form-group form-inline">
              <label class="control-label col-sm-2"  >First Name:</label>
              <div class="col-sm-4">
                <input type="text" name="firstName" value="<?php echo $user->firstName; ?>" class="form-control">
              </div>
              <label class="control-label col-sm-2"  >Last Name:</label>
              <div class="col-sm-4">
                <input type="text" name="lastName" value="<?php echo $user->lastName; ?>" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2"  >Username:</label>
              <div class="col-sm-10">
                <input type="text" name="username" value="<?php echo $user->username; ?>" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2"  >Email:</label>
              <div class="col-sm-10">
                <input type="email" name="email" value="<?php echo $user->email; ?>" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Date Birth:</label>
              <div class="col-sm-10">
                <input type="date" name="dateBirth" value="<?php echo $user->dateBirth; ?>" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2"  >Location:</label>
              <div class="col-sm-10">
                <select class="form-control" name="location">
                  <option value="indonesia">Indonesia</option>
                  <option value="malaysia">Malaysia</option>
                  <option value="singapore">Singapore</option>
                  <option value="thailand">Thailand</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2"  >Picture:</label>
              <div class="col-sm-10">
                <img src="Images/UserPic/<?php echo $user->picture; ?>" alt="" width="50px" height="50px">
                <input type="file" name="picture" accept="image/*" id="picture">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2"  >My Team Logo:</label>
              <div class="col-sm-10">
                  <img src="Images/TeamLogo/<?php echo $user->teamLogo; ?>" alt="" width="50px" height="50px">
                <input type="file" name="teamLogo" accept="image/*" id="teamLogo">
              </div>
            </div>
          <?php } ?>
            <div class="form-group">
              <div class="col-sm-offset-10">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
