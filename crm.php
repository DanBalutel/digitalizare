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
            $title = 'Dashboard';
            include('partial/breadcrumb.php')
            ?>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row g-sm-3 height-equal-2 widget-charts">



                    <div class="col-sm-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="dt-ext table-responsive">
                                    <div id="multilevel-btn_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">


                                        <table class="display dataTable" id="multilevel-btn" role="grid" aria-describedby="multilevel-btn_info">
                                            <thead>
                                                <tr role="row">
                                                    <th rowspan="1" colspan="1" style="width: 80.4844px;">Id</th>
                                                    <th>Nume / Prenume</th>
                                                    <th>Telefon</th>
                                                    <th>Email</th>
                                                    <th>Trimisa oferta</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">#1</td>
                                                    <td>Gigi Popescu</td>
                                                    <td>0729 229 599</td>
                                                    <td>ai@area4u.ro</td>
                                                    <td>
                                                        <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Interesat</button>
                                                        <div class="dropdown-menu" style="">
                                                            <a class="dropdown-item btn btn-success" href="#">Interesat</a>
                                                            <a class="dropdown-item btn btn-danger" href="#">Neinteresat</a>
                                                            <a class="dropdown-item btn btn-warning" href="#">Nu stie</a>
                                                        </div>
                                                    </td>

                                                </tr>

                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">#1</td>
                                                    <td>Gigi Popescu</td>
                                                    <td>0729 229 599</td>
                                                    <td>ai@area4u.ro</td>
                                                    <td> <span class="badge badge-danger">Ne interesat</span></td>

                                                </tr>

                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">#1</td>
                                                    <td>Gigi Popescu</td>
                                                    <td>0729 229 599</td>
                                                    <td>ai@area4u.ro</td>
                                                    <td> <span class="badge badge-custom">Nu stie</span></td>

                                                </tr>

                                            </tbody>

                                        </table>
                                        <div class="dataTables_info" id="multilevel-btn_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                        <div class="dataTables_paginate paging_simple_numbers" id="multilevel-btn_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="multilevel-btn_previous"><a href="#" aria-controls="multilevel-btn" data-dt-idx="0" tabindex="0" class="page-link" data-bs-original-title="" title="">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="multilevel-btn" data-dt-idx="1" tabindex="0" class="page-link" data-bs-original-title="" title="">1</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="multilevel-btn" data-dt-idx="2" tabindex="0" class="page-link" data-bs-original-title="" title="">2</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="multilevel-btn" data-dt-idx="3" tabindex="0" class="page-link" data-bs-original-title="" title="">3</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="multilevel-btn" data-dt-idx="4" tabindex="0" class="page-link" data-bs-original-title="" title="">4</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="multilevel-btn" data-dt-idx="5" tabindex="0" class="page-link" data-bs-original-title="" title="">5</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="multilevel-btn" data-dt-idx="6" tabindex="0" class="page-link" data-bs-original-title="" title="">6</a></li>
                                                <li class="paginate_button page-item next" id="multilevel-btn_next"><a href="#" aria-controls="multilevel-btn" data-dt-idx="7" tabindex="0" class="page-link" data-bs-original-title="" title="">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






                    <!-- old tables -->
                    <div class="col-md-6 col-xs-12">
                        <div class="card small-widget mb-sm-0">
                            <div class="card-body primary min-h-9">

                                <h4>
                                    <img src="https://danbalutel.github.io/digitalizare/assets/images/icons/facebook.png" alt="" width="20">
                                    Leads Facebook (potentiali clienti)
                                </h4>

                                <div class="table-responsive">
                                    <table class="table table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nume/Prenume</th>
                                                <th scope="col">Telefon/Email</th>
                                                <th scope="col">Site</th>
                                                <th scope="col">Trimis oferta</th>
                                                <th scope="col">Actiuni</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>Interesat</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>Interesat</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>




                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>Refuzat</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>Nu am trimis</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>Nu am trimis</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>Acceptat</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>







                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>


                    </div>

                    <div class="col-md-6 col-xs-12">
                        <div class="card small-widget mb-sm-0">
                            <div class="card-body primary min-h-9">
                                <h4>
                                    <img src="https://danbalutel.github.io/digitalizare/assets/images/icons/facebook.png" alt="" width="20">
                                    Clienti Facebook
                                </h4>

                                <div class="table-responsive">
                                    <table class="table table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nume/Prenume</th>
                                                <th scope="col">Telefon/Email</th>
                                                <th scope="col">Site</th>
                                                <th scope="col">Servicii</th>
                                                <th scope="col">Actiuni</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>




                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>







                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>


                    </div>




                    <div class="col-md-6 col-xs-12">
                        <div class="card small-widget mb-sm-0">
                            <div class="card-body primary min-h-9">

                                <h4>
                                    <img src="https://danbalutel.github.io/digitalizare/assets/images/icons/ads.png" alt="" width="20">
                                    Leads Google Ads (potentiali clienti)
                                </h4>

                                <div class="table-responsive">
                                    <table class="table table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nume/Prenume</th>
                                                <th scope="col">Telefon/Email</th>
                                                <th scope="col">Site</th>
                                                <th scope="col">Servicii</th>
                                                <th scope="col">Actiuni</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>




                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>







                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>


                    </div>

                    <div class="col-md-6 col-xs-12">
                        <div class="card small-widget mb-sm-0">
                            <div class="card-body primary min-h-9">
                                <h4>
                                    <img src="https://danbalutel.github.io/digitalizare/assets/images/icons/ads.png" alt="" width="20">
                                    Clienti Google Ads
                                </h4>

                                <div class="table-responsive">
                                    <table class="table table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nume/Prenume</th>
                                                <th scope="col">Telefon/Email</th>
                                                <th scope="col">Site</th>
                                                <th scope="col">Servicii</th>
                                                <th scope="col">Actiuni</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>




                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>







                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>


                    </div>



                    <div class="col-md-6 col-xs-12">
                        <div class="card small-widget mb-sm-0">
                            <div class="card-body primary min-h-9">

                                <h4>
                                    Leads site
                                </h4>

                                <div class="table-responsive">
                                    <table class="table table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nume/Prenume</th>
                                                <th scope="col">Telefon/Email</th>
                                                <th scope="col">Site</th>
                                                <th scope="col">Servicii</th>
                                                <th scope="col">Actiuni</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>




                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>







                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>


                    </div>

                    <div class="col-md-6 col-xs-12">
                        <div class="card small-widget mb-sm-0">
                            <div class="card-body primary min-h-9">
                                <h4>
                                    Clienti site
                                </h4>

                                <div class="table-responsive">
                                    <table class="table table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nume/Prenume</th>
                                                <th scope="col">Telefon/Email</th>
                                                <th scope="col">Site</th>
                                                <th scope="col">Servicii</th>
                                                <th scope="col">Actiuni</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>




                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>


                    </div>




                    <div class="col-md-6 col-xs-12">
                        <div class="card small-widget mb-sm-0">
                            <div class="card-body primary min-h-9">

                                <h4>
                                    Leads total
                                </h4>

                                <div class="table-responsive">
                                    <table class="table table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nume/Prenume</th>
                                                <th scope="col">Telefon/Email</th>
                                                <th scope="col">Site</th>
                                                <th scope="col">Servicii</th>
                                                <th scope="col">Actiuni</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>




                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>







                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>


                    </div>

                    <div class="col-md-6 col-xs-12">
                        <div class="card small-widget mb-sm-0">
                            <div class="card-body primary min-h-9">
                                <h4>
                                    Clienti total
                                </h4>

                                <div class="table-responsive">
                                    <table class="table table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nume/Prenume</th>
                                                <th scope="col">Telefon/Email</th>
                                                <th scope="col">Site</th>
                                                <th scope="col">Servicii</th>
                                                <th scope="col">Actiuni</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>




                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Cristina Popescu</td>
                                                <td>07265555555 <br> email@gmail.com</td>
                                                <td>site.ro </td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>


                    </div>





                </div>
            </div>
        </div>
        <!-- footer start-->
        <?php include('partial/footer.php') ?>
    </div>
</div>
<?php include('partial/scripts.php') ?>
<!-- Plugins JS start-->
<script src="assets/js/clock.js"></script>
<script src="assets/js/chart/apex-chart/moment.min.js"></script>
<script src="assets/js/notify/bootstrap-notify.min.js"></script>
<script src="assets/js/dashboard/default.js"></script>
<script src="assets/js/notify/index.js"></script>
<script src="assets/js/typeahead/handlebars.js"></script>
<script src="assets/js/typeahead/typeahead.bundle.js"></script>
<script src="assets/js/typeahead/typeahead.custom.js"></script>
<script src="assets/js/typeahead-search/handlebars.js"></script>
<script src="assets/js/typeahead-search/typeahead-custom.js"></script>
<script src="assets/js/height-equal.js"></script>
<script src="assets/js/animation/wow/wow.min.js"></script>
<script src="assets/js/chart/morris-chart/raphael.js"></script>
<script src="assets/js/chart/morris-chart/morris.js"> </script>
<script src="assets/js/chart/morris-chart/prettify.min.js"></script>
<script src="assets/js/chart/morris-chart/morris-script.js"></script>
<script src="assets/js/tooltip-init.js"></script>
<!-- Plugins JS Ends-->
<script>
    new WOW().init();
</script>
<?php include('partial/footer-end.php') ?>