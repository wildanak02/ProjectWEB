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
                  <img src="assets/images/event5.jpg" alt="event1" style="width:100%;">
                </div>

                <div class="item">
                  <img src="assets/images/event6.jpg" alt="event2" style="width:100%;">
                </div>

                <div class="item">
                  <img src="assets/images/event7.jpg" alt="event3" style="width:100%;">
                </div>

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

                  <li class="news-item">
                    <table cellpadding="4">
                      <tr>
                        <td><img src="assets/images/1.png" width="60" class="img-circle" /></td>
                        <td> News 1</td>
                      </tr>
                    </table>
                  </li>

                  <li class="news-item">
                    <table cellpadding="4">
                      <tr>
                        <td><img src="assets/images/2.png" width="60" class="img-circle" /></td>
                        <td> News 2</td>
                      </tr>
                    </table>
                  </li>

                  <li class="news-item">
                    <table cellpadding="4">
                      <tr>
                        <td><img src="assets/images/3.png" width="60" class="img-circle" /></td>
                        <td> News 3</td>
                      </tr>
                    </table>
                  </li>

                  <li class="news-item">
                    <table cellpadding="4">
                      <tr>
                        <td><img src="assets/images/4.png" width="60" class="img-circle" /></td>
                        <td> News 4</td>
                      </tr>
                    </table>
                  </li>

                  <li class="news-item">
                    <table cellpadding="4">
                      <tr>
                        <td><img src="assets/images/5.png" width="60" class="img-circle" /></td>
                        <td> News 5</td>
                      </tr>
                    </table>
                  </li>

                  <li class="news-item">
                    <table cellpadding="4">
                      <tr>
                        <td><img src="assets/images/6.png" width="60" class="img-circle" /></td>
                        <td> News 6</td>
                      </tr>
                    </table>
                  </li>

                  <li class="news-item">
                    <table cellpadding="7">
                      <tr>
                        <td><img src="assets/images/7.png" width="60" class="img-circle" /></td>
                        <td> News 7</td>
                      </tr>
                    </table>
                  </li>

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
