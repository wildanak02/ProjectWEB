<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>

  <!--sidebar-->
  <div class="container-fluid">
    <div class="row content">
      <div class="loginnav">
        <nav class="navbar navbar-default sidebar">
          <ul class="nav navbar-nav nav-pills">
            <li ><a data-toggle="tab" href="#users">Users<span style="font-size:16px;" class="pull-right hidden-xs  glyphicon glyphicon-user"></span></a></li>
            <li ><a data-toggle="tab" href="#events">Events<span style="font-size:16px;" class="pull-right hidden-xs  glyphicon glyphicon-list-alt"></span></a></li>
            <li ><a data-toggle="tab" href="#ptcp">Participant<span style="font-size:16px;" class="pull-right hidden-xs  glyphicon glyphicon-tower"></span></a></li>
          </ul><br>
        </nav>
      </div>
      <br>

      <div class="admintab">
        <div class="tab-content">

          <!--users content-->
          <div id="users" class="tab-pane fade">
            <div class="col-md-9">
              <div class="well ">
                <table class="table table-striped">
                  <thead>
                    <?php foreach ($users as $user) {?>
                      <tr>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Birth Date</th>
                        <th>Location</th>
                        <th>Picture</th>
                        <th>Team Logo</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php echo $user->username; ?></td>
                        <td><?php echo $user->firstName; ?> <?php echo $user->lastName; ?></td>
                        <td><?php echo $user->email; ?></td>
                        <td><?php echo $user->dateBirth; ?></td>
                        <td><?php echo $user->location; ?></td>
                        <td><img src="Images/UserPic/<?php echo $user->picture; ?>" alt="picture" width="40px" height="40px"></img></td>
                        <td class="logo_img"><img src="Images/TeamLogo/<?php echo $user->teamLogo; ?>" alt="teamLogo" width="40px" height="40px"></img></td>
                        <td><a type="button" href="?controller=AdminPanel&action=klikUserEdit&idUser=<?php echo $user->idUser; ?>" class="btn btn-primary">Edit</a> </td>
                        <td><a type="button" href="?controller=AdminPanel&action=hapusUser&idUser=<?php echo $user->idUser; ?>" class="btn btn-danger">Delete</a> </td>
                      </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!--events content-->
          <div id="events" class="tabcontent tab-pane fade">
            <div class="col-md-9">
              <div class="well ">
                <table class="table table-striped">
                  <a href="?controller=AdminPanel&action=klikEventTambah" class="btn btn-success">Add Data </a>
                  <thead>
                    <tr>
                      <th>Event Name</th>
                      <th>Event Type</th>
                      <th>Organizer</th>
                      <th>Date</th>
                      <th>Location</th>
                      <th>Description</th>
                      <th>Event Image</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($events as $event) {
                      if($event->type==1){
                        $event->type='CS:GO';
                      }
                      elseif ($event->type==2){
                        $event->type='Dota 2';
                      }
                      ?>
                    <tr>
                      <td><?php echo $event->eventName; ?></td>
                      <td><?php echo $event->type; ?></td>
                      <td><?php echo $event->organizer; ?></td>
                      <td><?php echo $event->date; ?></td>
                      <td><?php echo $event->location; ?></td>
                      <td><?php echo $event->description; ?></td>
                      <td class="logo_img"><img alt="Event Image" src="Images/EventImg/<?php echo $event->image; ?>" width="40px" height="40px"></td>
                      <td><a type="button" href="?controller=AdminPanel&action=klikEventEdit&idEvent=<?php echo $event->idEvent; ?>" class="btn btn-primary">Edit</a> </td>
                      <td><a type="button" href="?controller=AdminPanel&action=hapusEvent&idEvent=<?php echo $event->idEvent; ?>" class="btn btn-danger">Delete</a> </td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!--teams content-->
          <div id="ptcp" class="tabcontent tab-pane fade">
            <div class="col-md-9">
              <div class="well ">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Team Name</th>
                      <th>Team Logo</th>
                      <th>Team Member</th>
                      <th>Following Event</th>
                      <th>Joined at</th>
                      <th>Event Date</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Navi</td>
                      <td class="logo_img"><img src="assets/images/teamlogo7.png"></td>
                      <td>Winny, putri, lubis</td>
                      <td>ESL One</td>
                      <td>2017-01-02</td>
                      <td>2018-02-03</td>
                      <td><a type="a" class="btn btn-danger">Delete</a> </td>
                    </tr>
                    <tr>
                      <td>OG</td>
                      <td class="logo_img"><img src="assets/images/teamlogo3.png"></td>
                      <td>Anya,Geraldine</td>
                      <td>Major LEague</td>
                      <td>2017-01-02</td>
                      <td>2018-03-02</td>
                      <td><a type="a" class="btn btn-danger">Delete</a> </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!--edit team modal-->
          <div class="modal fade bs-modal-lg" data-backdrop="static" id="editteammodal">
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
                        <label class="control-label col-sm-2"  >Team Logo:</label>
                        <div class="col-sm-10">
                          <input type="file" name="pic" accept="image/*">
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
</div>
</body>
</html>
