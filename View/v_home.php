<!DOCTYPE html>
<html lang="en">
<head>

</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="head">

          <!--carousel-->
          <div class="carosel">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000" style="width" >

              <!-- Wrapper for slides -->

              <div class="carousel-inner">
                <div class="item active">
                  <img src="assets/images/homepage.jpg" alt="Events" style="width:100%;">
                  </div>
                <?php foreach ($events as $event) { ?>
                <div class="item">
                  <img src="Images/EventImg/<?php echo $event->image; ?>" alt="Events" style="width:100%;">
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>News</b></div>
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-12">
                  <ul class="news">
                    <?php foreach ($news as $n) { ?>
                    <li class="news-item">
                      <table cellpadding="4">
                        <tr>
                          <td><img src="Images/TeamLogo/<?php echo $n->teamLogo; ?>" width="60" class="img-circle" /></td>
                          <td>&nbsp;<?php echo $n->teamName; ?> <strong>has Joined</strong> <?php echo $n->eventName; ?> </td>
                        </tr>
                      </table>
                    </li>
<?php } ?>

                  </ul>
                </div>
              </div>
            </div>
            <div class="panel-footer"> </div>
          </div>
        </div>
      </div>
    </div>

  </body>


  <!-- news setting -->
  <script type="text/javascript">
  $(function () {
    $(".news").bootstrapNews({
      newsPerPage: 7,
      navigation: true,
      autoplay: true,
      direction:'up', // up or down
      animationSpeed: 'normal',
      newsTickerInterval: 4000, //4 secs
      pauseOnHover: true,
      onStop: null,
      onPause: null,
      onReset: null,
      onPrev: null,
      onNext: null,
      onToDo: null
    });
  });
</script>
</html>
