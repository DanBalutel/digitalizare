<?php include('partial/header.php');?>

<link rel="stylesheet" type="text/css" href="assets/css/vendors/photoswipe.css">

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
                                              <div class="col-md-6">
                                                <label for="nume" class="form-label text-start">Nume Prenume</label>
                                                <input type="text" class="form-control" id="numeBuletin">
                                              </div>
                                              <div class="col-md-6">
                                                <label for="nume" class="form-label text-start">CNP</label>
                                                <input type="number" class="form-control" max="13">
                                              </div>
                                              <div class="col-md-4">
                                                <label for="nume" class="form-label text-start">Seria</label>
                                                <input type="text" class="form-control">
                                              </div>
                                              <div class="col-md-8">
                                                <label for="nume" class="form-label text-start">Numar</label>
                                                <input type="number" class="form-control">
                                              </div>
                                              <div class="col-md-6" class="form-label text-start">
                                                <label for="nume">Valabil Din</label>
                                                <input type="date" class="form-control" >
                                              </div>
                                              <div class="col-md-6" class="form-label text-start">
                                                <label for="nume">Valabil Pana La</label>
                                                <input type="date" class="form-control" >
                                              </div>
                                              <div class="col-md-12" class="form-label text-start">
                                                <label for="nume">Incarca Poza Buletin</label>
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
<script src="assets/js/counter/jquery.waypoints.min.js"></script>
<script src="assets/js/counter/jquery.counterup.min.js"></script>
<script src="assets/js/counter/counter-custom.js"></script>
<script src="assets/js/photoswipe/photoswipe.min.js"></script>
<script src="assets/js/photoswipe/photoswipe-ui-default.min.js"></script>
<script src="assets/js/photoswipe/photoswipe.js"></script>
<script src="assets/js/tooltip-init.js"></script>
<?php include('partial/footer-end.php'); ?>