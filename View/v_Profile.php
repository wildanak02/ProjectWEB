<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>
  <div class="container-fluid">
    <div class="row content">
      <div class="profilenav">
        <nav class="navbar navbar-default sidebar">
          <ul class="nav navbar-nav nav-pills">
            <?php foreach ($profiles as $post) {?>
            <li><img src="Images/UserPic/<?php echo $post->picture; ?>" alt="user"></li>
            <li><a class="pwd" href="?controller=Profile&action=klikPwd">Change your password here</a></li>
            <li></li>
            <li class="active" ><a data-toggle="tab" href="#profile"><span style="font-size:16px;" class="hidden-xs glyphicon glyphicon-home"></span> Profile</a></li>
            <li ><a data-toggle="tab" href="#editprofile"><span style="font-size:16px;" class="hidden-xs  glyphicon glyphicon-pencil"></span> Edit Profile</a></li>
            <li ><a data-toggle="tab" href="#myteam"><span style="font-size:16px;" class="hidden-xs  glyphicon glyphicon-briefcase"></span> My Teams</a></li>
            <li ><a data-toggle="tab" href="#myevent"><span style="font-size:16px;" class="hidden-xs  glyphicon glyphicon-calendar"></span> My Events</a></li>
          </ul><br>
        </nav>
      </div>
      <br>

      <div class="profiletab">
        <div class="tab-content">
          <!-- tab profile-->
          <div id="profile" class="tab-pane fade in active">
            <div class="col-md-8">
              <div class="well ">
                <form class="form-horizontal">

                  <div class="form-group">
                    <label class="control-label col-sm-2"  >Name:</label>
                    <div class="col-sm-10">
                      <span><?php echo $post->firstName; ?></span> <span><?php echo $post->lastName; ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2"  >Username:</label>
                    <div class="col-sm-10">
                      <span><?php echo $post->username; ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2"  >Email:</label>
                    <div class="col-sm-10">
                      <span><?php echo $post->email; ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2">Date Birth:</label>
                    <div class="col-sm-10">
                      <span><?php echo $post->dateBirth; ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2"  >Location:</label>
                    <div class="col-sm-10">
                      <span><?php echo $post->location; ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2"  >Picture:</label>
                    <div class="col-sm-10">
                  <img src="Images/UserPic/<?php echo $post->picture; ?>" alt="Belum Dimasukkan" height="60" width="60">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2"  >My Team Logo:</label>
                    <div class="col-sm-10">
                  <img src="Images/TeamLogo/<?php echo $post->teamLogo; ?>" alt="Belum Dimasukkan" height="60" width="60">
                    </div>
                  </div>
                  <div class="form-group">
                  </div>
                  <?php }?>
                </form>
              </div>
            </div>
          </div>

          <!-- tab editprofile-->
          <div id="editprofile" class="tab-pane fade">
            <div class="col-md-8">
              <div class="well ">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                  <input class="hidden" name="controller" value="Profile"></input>
                  <input class="hidden" name="action" value="edit"></input>
                    <?php foreach ($profiles as $post2) {?>
                  <div class="form-group form-inline">
                    <label class="control-label col-sm-2"  >First Name:</label>
                    <div class="col-sm-4">
                      <input type="text" name="firstName" value="<?php echo $post2->firstName; ?>" class="form-control">
                    </div>
                    <label class="control-label col-sm-2"  >Last Name:</label>
                    <div class="col-sm-4">
                      <input type="text" name="lastName" value="<?php echo $post2->lastName; ?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2"  >Username:</label>
                    <div class="col-sm-10">
                      <input type="text" name="username" value="<?php echo $post2->username; ?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2"  >Email:</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" value="<?php echo $post2->email; ?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2">Date Birth:</label>
                    <div class="col-sm-10">
                      <input type="date" name="dateBirth" value="<?php echo $post2->dateBirth; ?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2"  >Location:</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="location">
                        <option value="indonesia" <?php if($post2->location=='indonesia'){ echo 'selected';} ?>>Indonesia</option>
                        <option value="malaysia" <?php if($post2->location=='malaysia'){ echo 'selected';} ?>>Malaysia</option>
                        <option value="singapore" <?php if($post2->location=='singapore'){ echo 'selected';} ?>>Singapore</option>
                        <option value="thailand" <?php if($post2->location=='thailand'){ echo 'selected';} ?>>Thailand</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2"  >Picture:</label>
                    <div class="col-sm-10">
                      <img src="Images/UserPic/<?php echo $post2->picture; ?>" alt="" width="50px" height="50px">
                      <input type="file" value="<?php echo $post2->picture; ?>" name="picture" accept="image/*" id="picture">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2"  >My Team Logo:</label>
                    <div class="col-sm-10">
                        <img src="Images/TeamLogo/<?php echo $post2->teamLogo; ?>" alt="" width="50px" height="50px">
                      <input type="file" value="<?php echo $post2->teamLogo; ?>" name="teamLogo" accept="image/*" id="teamLogo">
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

<!-- tab myteam -->
          <div id="myteam" class="tab-pane fade">
            <div class="col-md-8">
              <div class="well ">
                <table class="table .table-condensed">
                  <a href="?controller=Profile&action=kliktambahTeam" role="button" class="btn btn-success">Add Team</a>
                  <thead>
                    <tr>
                      <th>Team Name</th>
                      <th>Team Member</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($teams as $post3) {?>
                    <tr>
                      <td><?php echo $post3->teamName; ?></td>
                      <td><?php echo $post3->teamMember; ?></td>
                      <td><a type="button" href="?controller=Profile&action=klikEditTeam&idTeam=<?php echo $post3->idTeam; ?>" class="btn btn-primary">Edit</a> </td>
                      <td><a type="button" href="?controller=Profile&action=hapusTeam&idTeam=<?php echo $post3->idTeam; ?>" class="btn btn-danger">Delete</a> </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- tab events -->
                    <div id="myevent" class="tab-pane fade">
                      <div class="col-md-8">
                        <div class="well ">
                          <table class="table .table-condensed">
                            <thead>
                              <tr>
                                <th>Team Name</th>
                                <th>Following Event</th>
                                <th>Event Date</th>
                                <th>Location</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($events as $n) { ?>
                              <tr>
                                <td><?php echo $n->teamName; ?></td>
                                <td><?php echo $n->eventName; ?></td>
                                <td><?php echo $n->date; ?></td>
                                <td><?php echo $n->location; ?></td>
                                <td><a type="button" href="?controller=Profile&action=cancelEvent&idPtcp=<?php echo $n->idPtcp; ?>" class="btn btn-danger">Cancel Event</a> </td>
                              </tr>
                            <?php } ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>

          <!-- addteam modal -->
          <div class="modal fade bs-modal-lg" data-backdrop="static" id="addteammodal">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="well">
                  <div class="modal-body">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label class="control-label col-sm-2"  >Team Name:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2"  >Team Member:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
