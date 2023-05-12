<?php include('partial/header.php');?>

<link rel="stylesheet" type="text/css" href="assets/css/vendors/photoswipe.css">
<link rel="stylesheet" type="text/css" href="assets/css/vendors/calendar.css">

<?php include('partial/loader.php'); ?>

<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php include('partial/topbar.php'); ?>
    <!-- Page Header Ends -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php include('partial/sidebar.php');?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <?php include('partial/breadcrumb.php'); ?>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
            <div class="user-profile">
              <div class="row">
                <!-- user profile first-style start-->
                <div class="col-sm-12">
                  <div class="card hovercard text-center">
                    <div class="cardheader"></div>
                    <div class="user-image">
                      <div class="avatar"><img alt="" src="assets/images/user-card/personCustom.jpeg"></div>
                      <div class="icon-wrapper"><i class="icofont icofont-pencil-alt-5"></i></div>
                    </div>
                    <div class="info">
                      <div class="row">
                        <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                          <div class="row text-center">
                            <div class="col-md-12">
                              <div class="ttl-info text-center">
                                <h6><i class="fa fa-calendar"></i>Data Nasterii</h6><span id="dataNastere"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                          <div class="user-designation">
                            <div class="title"><a target="_blank" href="" ><span id="loggedNameProfile"></span></a></div>
                            <div class="desc" id="loggedPositionProfile"></div>
                            <br>
                            <button class="btn btn-info" type="button" data-bs-toggle="modal" data-bs-target="#tooltipmodal" data-bs-original-title="" title="">Adauga Buletin</button>
                                  <div class="modal fade" id="tooltipmodal" tabindex="-1" aria-labelledby="tooltipmodal" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title">Introdu Datele Din Buletin</h5>
                                          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                                        </div>
                                        <div class="modal-body">
                                          <form action="#">
                                            <div class="row">
                                              <div class="col-md-6 mb-2">
                                                <label for="nume" class="form-label text-start">Nume Prenume</label>
                                                <input type="text" class="form-control" id="numeBuletin">
                                              </div>
                                              <div class="col-md-6 mb-2">
                                                <label for="nume" class="form-label text-start">CNP</label>
                                                <input type="number" class="form-control" max="13">
                                              </div>
                                              <div class="col-md-4 mb-2">
                                                <label for="nume" class="form-label text-start">Seria</label>
                                                <input type="text" class="form-control">
                                              </div>
                                              <div class="col-md-8 mb-2">
                                                <label for="nume" class="form-label text-start">Numar</label>
                                                <input type="number" class="form-control">
                                              </div>
                                              <div class="col-md-6 mb-2">
                                                <label for="nume" class="form-label text-start">Valabil Din</label>
                                                <input type="date" class="form-control" >
                                              </div>
                                              <div class="col-md-6 mb-2">
                                                <label for="nume" class="form-label text-start">Valabil Pana La</label>
                                                <input type="date" class="form-control" >
                                              </div>
                                              <div class="col-md-12 mt-2">
                                                <label for="nume" class="form-label text-start">Incarca Poza Buletin</label>
                                                <input type="file" class="form-control">
                                              </div>
                                            </div>
                                          </form>
                                        </div>
                                        <div class="modal-footer">
                                          <button class="btn btn-primary" type="button" data-bs-original-title="" title="">Salveaza</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                          <div class="row text-center">
                            <div class="col-md-12">
                              <div class="ttl-info text-center">
                                <h6><i class="fa fa-location-arrow"></i>Adresa</h6><span id="adresa"></span>
                                  
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="social-media">
                        <ul class="list-inline">
                          <li class="list-inline-item"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                          <li class="list-inline-item"><a href="https://accounts.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                          <li class="list-inline-item"><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                          <li class="list-inline-item"><a href="https://rss.app/" target="_blank"><i class="fa fa-rss"></i></a></li>
                        </ul>
                      </div>
                      <div class="follow">
                        <div class="row">
                          <div class="col-6 text-md-end border-right">
                            <div class="follow-num counter">25869</div><span>Follower</span>
                          </div>
                          <div class="col-6 text-md-start">
                            <div class="follow-num counter">659887</div><span>Following</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card hovercard  height-equal-2">
                      <div class="card-body">
                        <h2>Activitatea pe aplicatie - <i data-feather="clock"></i> 5h 10m</h2>
                        <hr>

                        <div class="flot-chart-container">
                          <div class="row">
                            <div class="col-4">
                              <img src="assets/images/custom-persons/9.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                              <h5 class="mt-2 mb-2">Ionut Rusu <br>
                                <span class="blink">🟢</span> Lucreaza in IOT
                                <br>
                                60 minute
                              </h5>
                            </div>
                            <div class="col-4">
                              <img src="assets/images/custom-persons/7.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                              <h5 class="mt-2 mb-2">Dan Balutel <br>
                                <span class="blink">🟢</span> Lucreaza in CRM
                                <br>
                                20 minute
                              </h5>
                            </div>
                            <div class="col-4">
                              <img src="assets/images/custom-persons/8.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                              <h5 class="mt-2 mb-2">Andra Bunu <br>
                                <span class="blink">🟢</span> Lucreaza in Social Media
                                <br>
                                40 minute
                              </h5>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6 mb-2">
                            <h4>Google</h4>
                            <p>10 minute</p>
                          </div>
                          <div class="col-sm-6 mb-2">
                            <h4>Facebook</h4>
                            <p>20 minute</p>
                          </div>
                          <div class="col-sm-6 mb-2">
                            <h4>CRM</h4>
                            <p>50 minute</p>
                          </div>
                          <div class="col-sm-6 mb-2">
                            <h4>ERP</h4>
                            <p>20 minute</p>
                          </div>
                          <div class="col-sm-6 mb-2">
                            <h4>Mony AI</h4>
                            <p>34 minute</p>
                          </div>
                          <div class="col-sm-6 mb-2">
                            <h4>Mail</h4>
                            <p>46 minute</p>
                          </div> 
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                <div class="card height-equal-2"> 
                  <div class="card-body">
                    <h2>Taskuri</h2>
                    <hr>
                    <div id="calendar"></div>
                  </div>
                </div>
                </div>
                <!-- user profile fifth-style end-->
                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="pswp__bg"></div>
                  <div class="pswp__scroll-wrap">
                    <div class="pswp__container">
                      <div class="pswp__item"></div>
                      <div class="pswp__item"></div>
                      <div class="pswp__item"></div>
                    </div>
                    <div class="pswp__ui pswp__ui--hidden">
                      <div class="pswp__top-bar">
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <div class="pswp__preloader">
                          <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                              <div class="pswp__preloader__donut"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                      </div>
                      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                      <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <!-- Container-fluid Ends-->
        </div>
        
        <?php include('partial/footer.php');?>
    </div>
</div>

<?php include('partial/scripts.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.9.1/lang-all.js"></script>
<script>
  
  document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        
        var calendar = new FullCalendar.Calendar(calendarEl, {
          locale: 'ro',
          initialView: 'dayGridMonth',
          headerToolbar: {
              left: "prev,next today",
              center: "title",
              right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth"
          },
          events: [
          {
            title: 'Task IT',
            start: '2023-03-12T10:30:00',
            end: '2023-03-21T11:30:00',
            extendedProps: {
              department: 'IT'
            },
            description: 'Lecture'
          },
          
          {
            title: 'Task Consulanti',
            start: '2023-03-16T10:30:00',
            end: '2023-03-22T11:30:00',
            backgroundColor: '#0000ff',
            extendedProps: {
              department: 'Consultanti'
            },
            description: 'Lecture'
          }
          // more events ...
        ],
        eventDidMount: function(info) {
          console.log(info.event.extendedProps);
          // {description: "Lecture", department: "IT"}
        }
        });
        calendar.render();
      });
</script>
  <script src="assets/js/notify/index.js"></script>
<script src="assets/js/counter/jquery.waypoints.min.js"></script>
<script src="assets/js/counter/jquery.counterup.min.js"></script>
<script src="assets/js/counter/counter-custom.js"></script>
<script src="assets/js/calendar/fullcalendar.min.js"></script>
<script src="assets/js/photoswipe/photoswipe.min.js"></script>
<script src="assets/js/photoswipe/photoswipe-ui-default.min.js"></script>
<script src="assets/js/photoswipe/photoswipe.js"></script>
<script src="assets/js/tooltip-init.js"></script>

<script src="assets/js/height-equal.js"></script>
<script src="assets/js/chart/morris-chart/raphael.js"></script>
  <script src="assets/js/chart/morris-chart/morris.js"> </script>
  <script src="assets/js/chart/morris-chart/morris-script.js"></script>
<?php include('partial/footer-end.php'); ?>