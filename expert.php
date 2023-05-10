<?php include('partial/header.php') ?>
<?php include('partial/loader.php') ?>
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php include('partial/topbar.php') ?>
    <!-- Page Header Ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php include('partial/sidebar.php') ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">

            <?php
            $title = 'Experti';
            include('partial/breadcrumb.php')
            ?>
            <!-- Container-fluid starts-->
            <div class="container-fluid">

                <div class="chat-message clearfix mb-5">
                    <div class="row">
                        <div class="col-xl-12 d-flex">
                            <div class="input-group text-box">
                                <input style="border: 2px solid var(--theme-deafult);" class="form-control input-txt-bx" id="askGPT" type="text" name="message-to-send" placeholder="Cauta un expert ...">
                                <button class="input-group-text btn btn-primary text-white fw-bold" id="trimite" type="button">Cauta</button>
                            </div>
                        </div>
                    </div>
                </div>


                <h3><img src="/assets/images/logo/logo.png" width="50" height="50" class="rounded-circle shadow" alt="experti"><b>AVOCATI</b></h3><br>
                <p><img src="/assets/images/logo/logo.png" width="20" height="20" class="rounded-circle shadow" alt="experti"><b>SPECIALIZATI DREPT PENAL</b></p>

                <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-4">

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQNaKSnBhPL2gOjhgAgpdn_uqoXByl_aoB3zU0Poy3pXrUGSRdyQHKaTqzDxC6PeAB2Fw&usqp=CAU" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Doina Lupu</h5>
                                    <p class="mb-3">Avocat</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="http://mirsanu.ro/wp-content/uploads/2015/09/noerr-fernbach.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Cristina Radulescu</h5>
                                    <p class="mb-3">Avocat</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://cautavocat.ro/images/avocati/407.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Ana Petculescu</h5>
                                    <p class="mb-3">Avocat</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <h3><img src="/assets/images/logo/logo.png" width="50" height="50" class="rounded-circle shadow" alt="experti"><b>AVOCATI</b></h3><br>
                <p><img src="/assets/images/logo/logo.png" width="20" height="20" class="rounded-circle shadow" alt="experti"><b>SPECIALIZATI DREPT COMERCIAL</b></p>

                <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-4">

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://www.avocatura.com/imagini/avocati/avocat-gabriel-paraschiv_1843.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Marcel Muresan</h5>
                                    <p class="mb-3">Avocat</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>


                <h3><img src="/assets/images/logo/logo.png" width="50" height="50" class="rounded-circle shadow" alt="experti"><b>EXPERTI FRANCIZARE AFACERE</b></h3><br>
                <p><img src="/assets/images/logo/logo.png" width="20" height="20" class="rounded-circle shadow" alt="experti"><b>Experti Internationali si Interni</b></p>

                <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-4">

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://francizare.ro/storage/imagini/constantin-anton-1.webp" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Constantin Anton</h5>
                                    <p class="mb-3">Expert International Franchise Development</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://francizare.ro/storage/imagini/ariana-anton-1.webp" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Ariana Anton</h5>
                                    <p class="mb-3">Expert Francizare afacere</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <h3><img src="/assets/images/logo/logo.png" width="50" height="50" class="rounded-circle shadow" alt="experti"><b>CADASTRU SI EVALUATORI ENERGETICI</b></h3><br>
                <p><img src="/assets/images/logo/logo.png" width="20" height="20" class="rounded-circle shadow" alt="experti"><b>Cadastru și intabulare / Ridicări topografice / Certificat energetic / Audit energetici </b></p>

                <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-4">

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">

                                    <img src="https://www.avocatura.com/imagini/avocati/avocat--7686.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Claudiu Badea</h5>
                                    <p class="mb-3">Cadastru si intabulare</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://www.avocatura.com/imagini/avocati/avocat-marcu-andrei-alexandru-9317.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Andrei Popescu</h5>
                                    <p class="mb-3">Cadastru si intabulare</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">

                                <div class="p-4 border radius-15">
                                    <img src="https://www.avocatura.com/imagini/avocati/avocat-moise-m-dorin-valentin.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Razvan Badea</h5>
                                    <p class="mb-3">Ridicări topografice</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://www.avocatura.com/imagini/avocati/avocat-onuta-igor.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Mihai Stamulea</h5>
                                    <p class="mb-3">Certificat energetic - Audit energetic</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a></div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <h3><img src="/assets/images/logo/logo.png" width="50" height="50" class="rounded-circle shadow" alt="experti"><b>EXPERTI DOMENIU IT</b></h3><br>
                <p><img src="/assets/images/logo/logo.png" width="20" height="20" class="rounded-circle shadow" alt="experti"><b>Audit și consultanță / Instalări, service și mentenanță / Configurări și instalări (sisteme de operare, rețele, servere, periferice) / Soluții de productivitate (CRM, ERP, Office365)</b></p>

                <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-4">

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://www.barou-alba.ro/wp-content/uploads/2020/12/BICA-HORATIU-TRAIAN.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Dragos Barbulescu</h5>
                                    <p class="mb-3">Audit și consultanță </p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvRUi5B64t8AnVTstJMir-GMrtom0Ewsrr8nmhIMLzsAqu6cV4BnldxQ8z_s2_kXexjAg&usqp=CAU" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Aurelian Matei</h5>
                                    <p class="mb-3">Configurări și instalări (sisteme de operare, rețele, servere, periferice)</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">

                                <div class="p-4 border radius-15">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWo6Ws8uKfC7E9k8wPJ8LMVS4DjvOY7877DZjLFM1PWzg7csj0_LIvt9-cJ4KKBIIA4yo&usqp=CAU" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Aurelian Morcovescu</h5>
                                    <p class="mb-3">Configurări și instalări (sisteme de operare, rețele, servere, periferice)</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTA-HuX8iZBjgExKSMxWMDr8d0781HZ5X-BkyD5fjvZj9lOPD7V1AbsXzg5mDX-QcM1gcU&usqp=CAU" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Iordache Sorin</h5>
                                    <p class="mb-3">Soluții de productivitate (CRM, ERP, Office365)</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a></div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <h3><img src="/assets/images/logo/logo.png" width="50" height="50" class="rounded-circle shadow" alt="experti"><b>SERVICE SI REPARATII PENTRU AUTOVEHICULE</b></h3><br>
                <p><img src="/assets/images/logo/logo.png" width="20" height="20" class="rounded-circle shadow" alt="experti"><b>Reparații autovehicule / Revizii și întreținere autovehicule / Piese și accesorii pentru autovehicule / Tuning</b></p>

                <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-4">

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-M77S5nMDTKHQn4fS2EzIqg-rDP6ht36NI9HISl5yIkIWcS8-in5uWvlU16JAqNkvTCI&usqp=CAU" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Vasilescu Ionut</h5>
                                    <p class="mb-3">Reparații autovehicule / Revizii și întreținere autovehicule</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://www.barou-alba.ro/wp-content/uploads/2020/12/DORIANI-CELLINI-SEBASTIAN.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Daniel Simulescu</h5>
                                    <p class="mb-3">Piese și accesorii pentru autovehicule</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">

                                <div class="p-4 border radius-15">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaOfe266Ut8YnInbsZC-C-DNEpQxgyYfKBPSJSMO7ZJ9lqdxSwQ3u2j4GHbtR7PwQX0kY&usqp=CAU" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Adrian Nachiu</h5>
                                    <p class="mb-3">Tuning</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdtnA-rZT7d3lB_NGyqNkVGBoNOh9QSTrm6ou3gbNxOvFhZ2kg1FctQDwiP8VE5ZtZa5w&usqp=CAU" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Gheoghe Sorin</h5>
                                    <p class="mb-3">Reparații autovehicule / Revizii și întreținere autovehicule</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a></div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <h3><img src="/assets/images/logo/logo.png" width="50" height="50" class="rounded-circle shadow" alt="experti"><b>SERVICII PENTRU AFACERI</b></h3><br>
                <p><img src="/assets/images/logo/logo.png" width="20" height="20" class="rounded-circle shadow" alt="experti"><b>Contabilitate / Consultanță fiscală / Audit și controale fiscale / Consultanță în afaceri</b></p>

                <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-4">

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://francizare.ro/storage/imagini/constantin-anton-1.webp" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Constantin Anton</h5>
                                    <p class="mb-3">Expert Audit și controale fiscale ANAF</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRToBjgS8WUhmLYFGpBPtMrJqY90jBfJUBO1Z0lXKHD-fZAPGED_BNbWf0KWTZbvYgmOqQ&usqp=CAU" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Popescu Viorel</h5>
                                    <p class="mb-3">Consultant fiscal</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">

                                <div class="p-4 border radius-15">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkrDc261mzJDizc0Xu-u3_GdGXl2v198Pm3dNz1e1rFxLHHzuTd1lqAjc96q4RJtSH8Ck&usqp=CAU" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Razvan Dragomir</h5>
                                    <p class="mb-3">Expert Contabil</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6o_ux9YvJdyomS4mB8Za453Df1TNVvOncOf66gRH9L6YM7V9xB6xLOEjnBEfHCGbwIaM&usqp=CAU" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Mihaela Orbisor</h5>
                                    <p class="mb-3">Consultant în afaceri</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a></div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <h3><img src="/assets/images/logo/logo.png" width="50" height="50" class="rounded-circle shadow" alt="experti"><b>EXPERTI FONDURI EUROPENE</b></h3>
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://area4u.ro/wp-content/uploads/2023/02/Imagine-WhatsApp-2023-02-08-la-18.14.3812-300x300.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Alexandru Irimescu</h5>
                                    <p class="mb-3">Expert Fonduri Europene</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">

                                <div class="p-4 border radius-15">
                                    <img src="https://area4u.ro/wp-content/uploads/2023/02/Imagine-WhatsApp-2023-02-08-la-18.26.315-300x300.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Ionut Rusu</h5>
                                    <p class="mb-3">Expert Fonduri Europene</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://area4u.ro/wp-content/uploads/2023/02/Imagine-WhatsApp-2023-02-08-la-18.26.31-300x300.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Iordache Mihaela</h5>
                                    <p class="mb-3">Expert Fonduri Europene</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a></div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

                <h3><img src="/assets/images/logo/logo.png" width="50" height="50" class="rounded-circle shadow" alt="experti"><b>EXPERTI FONDURI EUROPENE AFIR, ACHIZITI</b></h3>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-4">
                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://area4u.ro/wp-content/uploads/2023/02/Imagine-WhatsApp-2023-02-08-la-18.27.518-300x300.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Stefania H.</h5>
                                    <p class="mb-3">Expert fonduri europene AFIR</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a></div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://area4u.ro/wp-content/uploads/2023/02/Imagine-WhatsApp-2023-02-08-la-18.26.313-300x300.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Alexandra Ghibu</h5>
                                    <p class="mb-3">Expert fonduri europene AFIR</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://area4u.ro/wp-content/uploads/2023/02/Imagine-WhatsApp-2023-02-08-la-18.26.312-300x300.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Daniela Irimescu</h5>
                                    <p class="mb-3">Expert fonduri europene AFIR</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src="https://francizare.ro/storage/imagini/dan.webp" width="110" height="110" class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">Dan Baluțel</h5>
                                    <p class="mb-3">Expert fonduri europene AFIR</p>
                                    <div class="list-inline contacts-social mt-3 mb-3">
                                        <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-google text-white border-0"><i class="fa fa-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contactează</a>
                                    </div>
                                    <div class="chat-tab-menu mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-wechat f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-video-camera f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a href="#">
                                                    <i class="fa fa-inbox f-24"></i><br>
                                                </a>
                                            </div>
                                            <div class="col-3 p-0">
                                                <a href="#">
                                                    <i class="fa fa-bell f-24"></i><br>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <?php include('partial/footer.php') ?>
    </div>
</div>
<?php include('partial/scripts.php') ?>
<!-- Plugins JS start-->
<script src="assets/js/notify/index.js"></script>
<script src="assets/js/typeahead/handlebars.js"></script>
<script src="assets/js/typeahead/typeahead.bundle.js"></script>
<script src="assets/js/typeahead/typeahead.custom.js"></script>
<script src="assets/js/typeahead-search/handlebars.js"></script>
<script src="assets/js/typeahead-search/typeahead-custom.js"></script>
<script src="assets/js/height-equal.js"></script>
<script src="assets/js/animation/wow/wow.min.js"></script>
<!-- Plugins JS Ends-->
<script>
    new WOW().init();
</script>
<?php include('partial/footer-end.php') ?>