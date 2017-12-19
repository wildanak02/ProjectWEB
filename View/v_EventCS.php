<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body style="height:1000px">

  <section id="blog">
    <div class="container-fluid">
      <div class="row">
            <?php foreach ($events as $event) {?>
            <div class="col-md-4">
              <div class="card" style="width:350px">
                <img class="card-img-top" src="Images/EventImg/<?php echo $event->image; ?>" alt="Event Image">
                <div class="card-body">
                  <a href="?controller=Events&action=homeDetail&idEvent=<?php echo $event->idEvent; ?>" ><h4 class="card-title"><?php echo $event->eventName; ?></h4></a>
                  <p class="card-text"><?php echo $event->description; ?></p>
                  <p>Start in : <?php echo $event->date; ?></p>
                  <p>Slot Remaining : <?php echo $event->slot; ?></p>
                  <a href="?controller=Events&action=klikJoin&idEvent=<?php echo $event->idEvent; ?>" class="btn btn-success btn-block <?php if($event->slot<=0){echo 'disabled';} ?>">Join</a>
                </div>
              </div>
            </div>
          <?php } ?>

      </div>
    </div>
</section>



</body>
</html>
