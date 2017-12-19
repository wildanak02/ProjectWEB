<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body style="height:1000px">

  <section id="blog">
    <div class="container-fluid">

          <div class="row">
            <div class="col-md-6">
              <div class="well">
                <div class="widget">
                  <?php foreach ($events as $event) {?>
                  <div class="widget-header">
                  <h3><?php echo $event->eventName; ?></h3>
                  </div>
                  <div class="widget-content">
                    <img src="Images/EventImg/<?php echo $event->image; ?>" alt="">
                    <br>
                    <br>
                    <p><?php echo $event->description; ?></p>
                    <p>Event Date : <?php echo $event->date; ?></p>
                    <p>Slot Remaining : <?php echo $event->slot; ?></p>
                    <a href="?controller=Events&action=klikJoin&idEvent=<?php echo $event->idEvent; ?>" class="btn btn-success btn-block <?php if($event->slot<=0){echo 'disabled';} ?>">Join</a>
                  </div>
                <?php } ?>
                </div>
              </div>
          </div>
          <div class="col-md-4">
            <div class="right-sidebar sidebar">
              <h2 class="title-sidebar">Recent Added Events</h2>
              <div class="content-widget-sidebar">
                <ul>
                  <?php foreach ($recent as $re) {?>
                  <li class="recent-post">
                    <img src="Images/EventImg/<?php echo $re->image; ?>" alt="event1">
                    <a href="?controller=Events&action=homeDetail&idEvent=<?php echo $re->idEvent; ?>"><h5><?php echo $re->eventName; ?></h5></a>
                    <p><small>slot : <?php echo $re->slot; ?></small></p>
                    <p><small><?php echo $re->date; ?></small></p>
                  </li>
                <?php } ?>
                </ul>
              </div>
            </div>
          </div>


</section>



</body>
</html>
