<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body style="height:1000px">

  <section id="blog">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <?php foreach ($events as $event) {?>
            <div class="col-md-6">
              <div class="card" style="width:350px">
                <img class="card-img-top" src="Images/EventImg/<?php echo $event->image; ?>" alt="Event Image">
                <div class="card-body">
                  <h4 class="card-title"><?php echo $event->eventName; ?></h4>
                  <p class="card-text"><?php echo $event->description; ?></p>
                  <p>Start in : <?php echo $event->date; ?></p>
                  <a href="#" class="btn btn-success btn-block">Join</a>
                </div>
              </div>
            </div>
          <?php } ?>
          </div>
          </div>
          <div class="col-md-4">
            <div class="right-sidebar">
              <h2 class="title-sidebar">Recent Post</h2>
              <div class="content-widget-sidebar">
                <ul>

                  <li class="recent-post">
                    <img src="assets/images/event1.png" alt="event1">
                    <a href="#"><h5>Event 1</h5></a>
                    <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 09 November 2017</small></p>
                  </li>

                  <li class="recent-post">
                    <img src="assets/images/event2.png" alt="event1">
                    <a href="#"><h5>Event 2</h5></a>
                    <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 09 November 2017</small></p>
                  </li>

                  <li class="recent-post">
                    <img src="assets/images/event3.png" alt="event1">
                    <a href="#"><h5>Event 3</h5></a>
                    <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 09 November 2017</small></p>
                  </li>

                  <li class="recent-post">
                    <img src="assets/images/event4.jpg" alt="event1">
                    <a href="#"><h5>Event 4</h5></a>
                    <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 09 November 2017</small></p>
                  </li>

                </ul>
              </div>
            </div>
          </div>

      </div>
    </div>
</section>



</body>
</html>
