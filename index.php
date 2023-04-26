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
    <div class="page-body index">

      <?php
      $title = 'Dashboard';
      include('partial/breadcrumb.php')
      ?>
      <!-- Container-fluid starts-->
      <div class="container-fluid">
        <div class="row g-sm-3 height-equal-2 widget-charts">
          <h3 id="name"></h3>
          <hr style="height: 10px;border-radius: 1rem;}">
          <h4 style="color: #00CCFF">Situatii financiare 2021</h4>

          <div class="col-md-3">
            <div class="card small-widget mb-sm-0">
              <div id="card1" class="card-body primary min-h-7"> <span class="f-light">Cifra de afaceri</span>
                <div class="d-flex align-items-end gap-1">
                  <h4 id="cifra-de-afaceri"></h4><span class="font-primary f-12 f-w-500"><i class="icon-arrow-up"></i><span>+50%</span></span>
                </div>
                <div class="bg-gradient">
                  <svg class="stroke-icon svg-fill">
                    <use href="../assets/svg/icon-sprite.svg#fill-charts"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card small-widget mb-sm-0">
              <div id="card2" class="card-body success min-h-7"><span class="f-light">Profit</span>
                <div class="d-flex align-items-end gap-1">
                  <h4 id="profit-actual"></h4><span class="font-success f-12 f-w-500"><i class="icon-arrow-up"></i><span>+20%</span></span>
                </div>
                <div class="bg-gradient">
                  <svg class="stroke-icon svg-fill">
                    <use href="../assets/svg/icon-sprite.svg#profit"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card small-widget mb-sm-0">
              <div id="card3" class="card-body secondary min-h-7"><span class="f-light">Angajați</span>
                <div class="d-flex align-items-end gap-1">
                  <h4 id="locuri-munca"></h4><span class="font-secondary f-12 f-w-500"></span>
                </div>
                <div class="bg-gradient">
                  <svg class="stroke-icon svg-fill">
                    <use href="../assets/svg/icon-sprite.svg#fill-user"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card small-widget mb-sm-0">
              <div id="card4" class="card-body success min-h-7"><span class="f-light">Cod CAEN</span>
                <div class="flex-wrap d-flex align-items-end gap-1">
                  <h4 id="cod-caen"></h4><span class="font-success f-12 f-w-500"></span>
                  <div id="nume-caen" class="f-14 f-s-normal">denumire CAEN</div>
                  <span style="cursor: pointer">+ Adauga</span>
                </div>
                <div class="bg-gradient">
                  <svg class="stroke-icon svg-fill">
                    <use href="../assets/svg/icon-sprite.svg#fill-bookmark"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card small-widget mb-sm-0">
              <div id="card5" class="card-body secondary"> <span class="f-light">Active Totale</span>
                <div class="d-flex align-items-end gap-1">
                  <h4 id="active-totale"></h4><span class="font-secondary f-12 f-w-500"><i class="icon-arrow-up"></i><span>+50%</span></span>
                </div>
                <div class="bg-gradient">
                  <svg class="stroke-icon svg-fill">
                    <use href="../assets/svg/icon-sprite.svg#new-order"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card small-widget mb-sm-0">
              <div id="card6" class="card-body warning"><span class="f-light">Stocuri</span>
                <div class="d-flex align-items-end gap-1">
                  <h4 id="nr-stocuri"></h4><span class="font-warning f-12 f-w-500"><i class="icon-arrow-up"></i><span>+20%</span></span>
                </div>
                <div class="bg-gradient">
                  <svg class="stroke-icon svg-fill">
                    <use href="../assets/svg/icon-sprite.svg#tag"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card small-widget mb-sm-0">
              <div id="card7" class="card-body secondary"><span class="f-light">Casa si conturi in banci</span>
                <div class="d-flex align-items-end gap-1">
                  <h4 id="casa-conturi"></h4><span class="font-secondary f-12 f-w-500"><i class="icon-arrow-down"></i><span>-10%</span></span>
                </div>
                <div class="bg-gradient">
                  <svg class="stroke-icon svg-fill">
                    <use href="../assets/svg/icon-sprite.svg#sale"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card small-widget mb-sm-0">
              <div id="card8" class="card-body success"><span class="f-light">Capital total</span>
                <div class="d-flex align-items-end gap-1">
                  <h4 id="capital-total"></h4><span class="font-success f-12 f-w-500"><i class="icon-arrow-up"></i><span>+80%</span></span>
                </div>
                <div class="bg-gradient">
                  <svg class="stroke-icon svg-fill">
                    <use href="../assets/svg/icon-sprite.svg#orders"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>

          <!-- exemplu situatie financiara -->

          <div class="col-md-6 col-xs-12">
            <div class="card small-widget mb-sm-0">
              <div id="cardExemplu" class="card-body min-h-7"> <span style="font-size: 1.7rem;" class="f-w-700 f-light">
                  <div>
                    <span class="blink">🟡</span>
                    <u style="color: #00CCFF">Situație contabila in timp real</u>
                  </div>
                </span>

                <div class="row d-flex">
                  <div class="col-md-6">
                    <div class="f-w-700 col-md-6" style="font-size: 1.1rem;">
                      (Exemplu) Situație Martie 2023:
                    </div>


                    <div class="col-md-10 mb-1">
                      <div class="card small-widget mb-sm-0">
                        <div class="card-body primary"> <span class="f-light">Proforme</span>
                          <div class="d-flex align-items-end gap-1">
                            <h4>100,000 lei</h4><span class="font-primary f-12 f-w-500"><i class="icon-arrow-up"></i><span>+50%</span></span>
                          </div>
                          <div class="bg-gradient">
                            <svg class="stroke-icon svg-fill">
                              <use href="../assets/svg/icon-sprite.svg#fill-charts"></use>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-10 mb-1">
                      <div class="card small-widget mb-sm-0">
                        <div class="card-body success"><span class="f-light">Încasați</span>
                          <div class="d-flex align-items-end gap-1">
                            <h4>80,000 Lei</h4><span class="font-success f-12 f-w-500"><i class="icon-arrow-up"></i><span>+20%</span></span>
                          </div>
                          <div class="bg-gradient">
                            <svg class="stroke-icon svg-fill">
                              <use href="../assets/svg/icon-sprite.svg#profit"></use>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-10 mb-1">
                      <div class="card small-widget mb-sm-0">
                        <div class="card-body warning"><span class="f-light">Cheltuieli</span>
                          <div class="d-flex align-items-end gap-1">
                            <h4>40,000 Lei</h4><span class="font-warning f-12 f-w-500"><i class="icon-arrow-up"></i><span>+20%</span></span>
                          </div>
                          <div class="bg-gradient">
                            <svg class="stroke-icon svg-fill">
                              <use href="../assets/svg/icon-sprite.svg#tag"></use>
                            </svg>
                          </div>
                        </div>
                      </div>


                    </div>

                    <div class="col-md-10 mb-1">
                      <div class="card small-widget mb-sm-0">
                        <div id="card3" class="card-body secondary"><span class="f-light">Număr angajați</span>
                          <div class="d-flex align-items-end gap-1">
                            <h4>8</h4><span class="font-secondary f-12 f-w-500"></span>
                          </div>
                          <div class="bg-gradient">
                            <svg class="stroke-icon svg-fill">
                              <use href="../assets/svg/icon-sprite.svg#fill-user"></use>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="f-w-700 col-md-6 pt-3" style="font-size: 1.1rem;">
                    Tot ce lucrează persoana/ firma de contabilitate se va putea migra in timp real (migrare automata
                    din SAGA/ SmartBill/ orice soft de contabilitate)<br>
                    Astfel veți știi situația contabila in timp real.
                  </div>



                </div>
              </div>
            </div>

          </div>

          <!-- Date generale despre firma -->
          <div class="col-md-6 col-xs-12">
            <div class="card small-widget mb-sm-0">
              <div id="cardDateGenerale" class="card-body primary min-h-7"> <span style="font-size: 1.7rem;" class="f-w-700 f-light"></span>
                <div class="row d-flex">
                  <div class="col-md-12" id="dateGenerale">
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h2 style="color:#00CCFF">Asociați/acționari și persoane autorizate - conexiuni cu alte firme</h2>
                <h4 style="color:#00CCFF">Data ultimei actualizări: 02.03.2023</h4>

              </div>
              <div class="card-block row">
                <div class="col-sm-12 col-lg-12 col-xl-12">
                  <div class="table-responsive">
                    <table class="table table-responsive-sm">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nume</th>
                          <th scope="col">Functie</th>
                          <th scope="col">%</th>
                          <th scope="col">Firma</th>
                          <th scope="col">Judet</th>
                          <th scope="col">Localitate</th>

                        </tr>
                      </thead>
                      <tbody id="asociatiConexiuni">
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>


            </div>
          </div>



          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h2 style="color:#00CCFF">Dosare in instanta</h2>
                <h4 style="color:#00CCFF">Data ultimei actualizări: 04.04.2023</h4>

              </div>
              <div class="card-block row">
                <div class="col-sm-12 col-lg-12 col-xl-12">
                  <div class="table-responsive">
                    <table class="table table-responsive-sm">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nr. Dosar / Instanta</th>
                          <th scope="col">Data</th>
                          <th scope="col">Materie</th>
                          <th scope="col">Obiect / Stadiu</th>
                        </tr>
                      </thead>
                      <tbody id="dosareFirma">
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>


            </div>
          </div>






          <h4 style="color: #00CCFF">Afisare sold/debit cont bancar in timp real</h4>
          <!-- banca transilvania -->
          <div class="col-xl-4 col-md-6 col-sm-12 box-col-6">
            <div class="card balance-box">
              <div id="card-1" class="card-body d-flex justify-content-center">
                <div class="balance-profile">
                  <h6>Afisare sold/debit cont bancar in timp real</h5>
                    <div style="padding: 20px;background: aliceblue;border-radius: 20px;">
                      <img src="assets/images/banci/bt.png" style="width: 10rem" alt="user vector">
                    </div>
                    <span class="f-light d-block mt-2">Soldul </span>
                    <h5 class="mt-1">1,987,500.90 LEI</h5>
                    <ul>
                      <li>
                        <div class="balance-item danger">
                          <div class="balance-icon-wrap">
                            <div class="balance-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-right">
                                <line x1="7" y1="7" x2="17" y2="17"></line>
                                <polyline points="17 7 17 17 7 17"></polyline>
                              </svg></div>
                          </div>
                          <div> <span class="f-12 f-light">Cheltuieli </span>
                            <h5>78.8K</h5><span class="badge badge-light-danger rounded-pill">-11.67%</span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="balance-item success">
                          <div class="balance-icon-wrap">
                            <div class="balance-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right">
                                <line x1="7" y1="17" x2="17" y2="7"></line>
                                <polyline points="7 7 17 7 17 17"></polyline>
                              </svg></div>
                          </div>
                          <div> <span class="f-12 f-light">Venituri</span>
                            <h5>19.7K</h5><span class="badge badge-light-success rounded-pill">+10.67%</span>
                          </div>
                        </div>
                      </li>
                    </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- revolut -->
          <div class="col-xl-4 col-md-6 col-sm-12 box-col-6">
            <div class="card balance-box">
              <div id="card-2" class="card-body d-flex justify-content-center">
                <div class="balance-profile">
                  <h6>Afisare sold/debit cont bancar in timp real</h6>
                  <div style="padding: 20px;background: aliceblue;border-radius: 20px;">
                    <img src="assets/images/banci/revolut.png" style="width: 10rem" alt="user vector">
                  </div>
                  <span class="f-light d-block mt-2">Soldul </span>
                  <h5 class="mt-1">87,500.90 LEI</h5>
                  <ul>
                    <li>
                      <div class="balance-item danger">
                        <div class="balance-icon-wrap">
                          <div class="balance-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-right">
                              <line x1="7" y1="7" x2="17" y2="17"></line>
                              <polyline points="17 7 17 17 7 17"></polyline>
                            </svg></div>
                        </div>
                        <div> <span class="f-12 f-light">Cheltuieli </span>
                          <h5>78.8K</h5><span class="badge badge-light-danger rounded-pill">-11.67%</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="balance-item success">
                        <div class="balance-icon-wrap">
                          <div class="balance-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right">
                              <line x1="7" y1="17" x2="17" y2="7"></line>
                              <polyline points="7 7 17 7 17 17"></polyline>
                            </svg></div>
                        </div>
                        <div> <span class="f-12 f-light">Venituri</span>
                          <h5>19.7K</h5><span class="badge badge-light-success rounded-pill">+10.67%</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- curs valutar -->
          <div class="col-xl-4 col-md-6 col-sm-12 box-col-6">
            <div class="card balance-box">
              <div id="card-3" class="card-body df-flex justify-content-center">
                <h3>CURS VALUTAR - <br><span style="color: #00CCFF" id="curs-data"></span></h3>
                <hr>
                <img src="https://www.bancatransilvania.ro/themes/bancatransilvania/assets/images/curs-valutar/eur.svg" width="50" alt=""> EUR <b id="curs-valutar2"></b><br><br>

                <img src="https://www.bancatransilvania.ro/themes/bancatransilvania/assets/images/curs-valutar/usd.svg" width="50" alt=""> USD <b id="curs-valutar"></b><br><br>

                <img src="https://www.bancatransilvania.ro/themes/bancatransilvania/assets/images/curs-valutar/gbp.svg" width="50" alt=""> GBP <b id="curs-valutar3"></b><br><br>

                <img src="https://www.bancatransilvania.ro/themes/bancatransilvania/assets/images/curs-valutar/chf.svg" width="50" alt=""> CHF <b id="curs-valutar4"></b>
              </div>
            </div>
          </div>

          <div class="col-xl-12 col-md-12 col-sm-12 box-col-12">
            <div class="card balance-box">
              <div class="card-body df-flex align-items-center justify-content-center">
                <script>
                  (function(d, s, id) {
                    if (d.getElementById(id)) {
                      if (window.__TOMORROW__) {
                        window.__TOMORROW__.renderWidget();
                      }
                      return;
                    }
                    const fjs = d.getElementsByTagName(s)[0];
                    const js = d.createElement(s);
                    js.id = id;
                    js.src = "https://www.tomorrow.io/v1/widget/sdk/sdk.bundle.min.js";

                    fjs.parentNode.insertBefore(js, fjs);
                  })(document, 'script', 'tomorrow-sdk');
                </script>

                <div class="tomorrow" data-location-id="" data-language="RO" data-unit-system="METRIC" data-skin="dark" data-widget-type="upcoming" style="padding-bottom:22px;position:relative;">

                </div>
              </div>
            </div>
          </div>



          <!-- MAP -->
          <div class="col-md-6 col-xs-12">
            <div id="cardAF" class="card small-widget mb-sm-0">
              <div class="card-header">
                <h5>Adresa fiscala</h5>
              </div>
              <div id="mapAnaf"></div>
            </div>
          </div>


          <div class="col-sm-12 col-xl-6 box-col-6">
            <div id="cardAsoc" class="card min-h-30">
              <div class="card-header">
                <h5>Asociatii</h5>
              </div>
              <div class="card-body apex-chart">
                <div id="piechart"></div>
              </div>
              <ul id="listAsoc" class="p-3 f-s-15"></ul>
            </div>
          </div>


          <div class="col-sm-12 col-xl-6 box-col-6">
            <div id="cardRA" class="card">
              <div class="card-header">
                <h5>Rentabilitatea afacerii</h5>
              </div>
              <div class="card-body">
                <div id="basic-apex"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-sm-12 box-col-12">
            <div id="cardSF" class="card">
              <div class="card-header">
                <h5 id="grafic-situatie-financiara"></h5>
              </div>
              <div class="card-body chart-block">
                <div class="flot-chart-container">
                  <div class="flot-chart-placeholder" id="morris-simple-bar-chart"></div>
                </div>
              </div>
            </div>
          </div>




          <div class="row d-flex justify-content-center">
            <h2 class="mb-2 mt-2 text-center text-uppercase" style="color: #00CCFF">Organigrama Live</h2>
            <hr>
            <div class="col-md-3">
              <div class="card radius-15">
                <div class="card-body text-center">
                  Administrator
                </div>
              </div>
              <div class="card radius-15">
                <div class="card-body text-center">
                  <div class="p-4 border radius-15">
                    <img src="https://area4u.ro/wp-content/uploads/2023/02/Imagine-WhatsApp-2023-02-08-la-18.14.3812-300x300.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                    <h6 class="mt-3">Pagina: ERP</h6>
                    <h5 class="mt-2 mb-2"> Alexandru Irimescu <br>
                      <span class="blink">🟢</span> Lucreaza in ERP
                    </h5>

                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Trimite mesaj</a></div>
                    <div class="chat-tab-menu mt-3">
                      <div class="row">
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-phone f-24"></i><br>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-paper-plane f-24"></i><br>
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
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="col-md-3">
              <div class="card radius-15">
                <div class="card-body text-center">
                  Echipa Vanzari
                </div>
              </div>
              <div class="card radius-15">
                <div class="card-body text-center">
                  <div class="p-4 border radius-15">
                    <img src="https://area4u.ro/wp-content/uploads/2023/02/Imagine-WhatsApp-2023-02-08-la-18.26.313-300x300.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                    <h5 class="mt-2 mb-2">Alexandra G. <br>
                      <span class="blink">🟢</span> Lucreaza in Social Media
                    </h5>

                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Trimite mesaj</a></div>
                    <div class="chat-tab-menu mt-3">
                      <div class="row">
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-phone f-24"></i><br>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-paper-plane f-24"></i><br>
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
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card radius-15">
                <div class="card-body text-center">
                  <div class="p-4 border radius-15">
                    <img src="https://area4u.ro/wp-content/uploads/2023/02/Imagine-WhatsApp-2023-02-08-la-18.27.518-300x300.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                    <h5 class="mt-2 mb-2">🔴 Stefania H.</h5>


                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Trimite mesaj</a></div>
                    <div class="chat-tab-menu mt-3">
                      <div class="row">
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-phone f-24"></i><br>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-paper-plane f-24"></i><br>
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
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card radius-15">
                <div class="card-body text-center">
                  Finanate
                </div>
              </div>
              <div class="card radius-15">
                <div class="card-body text-center">
                  <div class="p-4 border radius-15">
                    <img src="https://area4u.ro/wp-content/uploads/2023/02/Imagine-WhatsApp-2023-02-08-la-18.26.314-300x300.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                    <h5 class="mt-2 mb-2"> Andra B. <br>
                      <span class="blink">🟢</span> Lucreaza in Contabilitate
                    </h5>

                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Trimite mesaj</a></div>
                    <div class="chat-tab-menu mt-3">
                      <div class="row">
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-phone f-24"></i><br>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-paper-plane f-24"></i><br>
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
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="card radius-15">
                <div class="card-body text-center">
                  <div class="p-4 border radius-15">
                    <img src="https://area4u.ro/wp-content/uploads/2023/02/Imagine-WhatsApp-2023-02-08-la-18.26.312-300x300.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                    <h5 class="mt-2 mb-2">🔴 Daniela Irimescu</h5>

                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Trimite mesaj</a></div>
                    <div class="chat-tab-menu mt-3">
                      <div class="row">
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-phone f-24"></i><br>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-paper-plane f-24"></i><br>
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
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card radius-15">
                <div class="card-body text-center">
                  IT
                </div>
              </div>
              <div class="card radius-15">
                <div class="card-body text-center">
                  <div class="p-4 border radius-15">
                    <img src="https://francizare.ro/storage/imagini/dan.webp" width="110" height="110" class="rounded-circle shadow" alt="">
                    <h5 class="mt-2 mb-2">🔴 Dan Balutel</h5>

                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Trimite mesaj</a></div>
                    <div class="chat-tab-menu mt-3">
                      <div class="row">
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-phone f-24"></i><br>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-paper-plane f-24"></i><br>
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
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
            <div class="col-md-3">
              <div class="card radius-15">
                <div class="card-body text-center">
                  Administrare
                </div>
              </div>
              <div class="card radius-15">
                <div class="card-body text-center">
                  <div class="p-4 border radius-15">
                    <img src="https://area4u.ro/wp-content/uploads/2023/02/Imagine-WhatsApp-2023-02-08-la-18.26.31-300x300.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                    <h5 class="mt-2 mb-2">Iordache Mihaela <br>
                      <span class="blink">🟢</span> Lucreaza in Contabilitate
                    </h5>

                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Trimite mesaj</a></div>
                    <div class="chat-tab-menu mt-3">
                      <div class="row">
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-phone f-24"></i><br>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-paper-plane f-24"></i><br>
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
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card radius-15">
                <div class="card-body text-center">
                  <div class="p-4 border radius-15">
                    <img src="https://area4u.ro/wp-content/uploads/2023/02/Imagine-WhatsApp-2023-02-08-la-18.26.315-300x300.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                    <h5 class="mt-2 mb-2">Ionut Rusu <br>
                      <span class="blink">🟢</span> Lucreaza in IOT
                    </h5>

                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Trimite mesaj</a></div>
                    <div class="chat-tab-menu mt-3">
                      <div class="row">
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-phone f-24"></i><br>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-paper-plane f-24"></i><br>
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
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <h3 class="text-center">CHATUL INTERN AL COMPANIE (TRIMITE DOCUMENTE IN CLOUD)</h3>

          <h3><img src="/assets/images/logo/logo.png" width="50" height="50" class="rounded-circle shadow" alt="experti"><b>ECHIPA DE VANZARI</b>
          </h3>
          <div class="w-100 m-b-20 d-grid"> <a href="#" class="btn btn-outline-primary radius-15" data-bs-original-title="" title="">Scrie mesaj la toata echipa de vanzari</a>
          </div>

          <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
            <div class="col-md-4">
              <div class="card radius-15">
                <div class="card-body text-center">
                  <div class="p-4 border radius-15">
                    <img src="https://area4u.ro/wp-content/uploads/2023/02/Imagine-WhatsApp-2023-02-08-la-18.26.312-300x300.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                    <h5 class="mb-0 mt-5">Daniela Irimescu</h5>
                    <p class="mb-3">Expert Fonduri Europene</p>
                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Trimite mesaj</a>
                    </div>
                    <div class="chat-tab-menu mt-3">
                      <div class="row">
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-phone f-24"></i><br>
                            <span class="f-s-15">Apel</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-paper-plane f-24"></i><br>
                            <span class="f-s-15">Mesaj</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-video-camera f-24"></i><br>
                            <span class="f-s-15">Zoom</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-inbox f-24"></i><br>
                            <span class="f-s-15">Email</span>
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
                    <img src="https://area4u.ro/wp-content/uploads/2023/02/Imagine-WhatsApp-2023-02-08-la-18.26.314-300x300.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                    <h5 class="mb-0 mt-5">Andra B.</h5>
                    <p class="mb-3">Expert Fonduri Europene</p>
                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Trimite mesaj</a>
                    </div>
                    <div class="chat-tab-menu mt-3">
                      <div class="row">
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-phone f-24"></i><br>
                            <span class="f-s-15">Apel</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-paper-plane f-24"></i><br>
                            <span class="f-s-15">Mesaj</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-video-camera f-24"></i><br>
                            <span class="f-s-15">Zoom</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-inbox f-24"></i><br>
                            <span class="f-s-15">Email</span>
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
                    <img src="https://area4u.ro/wp-content/uploads/2023/02/Imagine-WhatsApp-2023-02-08-la-18.27.518-300x300.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                    <h5 class="mb-0 mt-5">Stefania H.</h5>
                    <p class="mb-3">Expert Fonduri Europene</p>

                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Trimite mesaj</a></div>
                    <div class="chat-tab-menu mt-3">
                      <div class="row">
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-phone f-24"></i><br>
                            <span class="f-s-15">Apel</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-paper-plane f-24"></i><br>
                            <span class="f-s-15">Mesaj</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-video-camera f-24"></i><br>
                            <span class="f-s-15">Zoom</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-inbox f-24"></i><br>
                            <span class="f-s-15">Email</span>
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
                    <h5 class="mb-0 mt-5">Alexandra G.</h5>
                    <p class="mb-3">Expert Fonduri Europene</p>

                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Trimite mesaj</a></div>
                    <div class="chat-tab-menu mt-3">
                      <div class="row">
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-phone f-24"></i><br>
                            <span class="f-s-15">Apel</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-paper-plane f-24"></i><br>
                            <span class="f-s-15">Mesaj</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-video-camera f-24"></i><br>
                            <span class="f-s-15">Zoom</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-inbox f-24"></i><br>
                            <span class="f-s-15">Email</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



          </div>


          <h3><img src="/assets/images/logo/logo.png" width="50" height="50" class="rounded-circle shadow" alt="experti"><b>ECHIPA DE MANAGEMENT</b>
          </h3>
          <div class="w-100 m-b-20 d-grid"> <a href="#" class="btn btn-outline-primary radius-15" data-bs-original-title="" title="">Scrie mesaj la toata echipa de management</a>
          </div>

          <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
            <div class="col-md-4">
              <div class="card radius-15">
                <div class="card-body text-center">
                  <div class="p-4 border radius-15">
                    <img src="https://area4u.ro/wp-content/uploads/2023/02/Imagine-WhatsApp-2023-02-08-la-18.14.3812-300x300.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                    <h5 class="mb-0 mt-5">Alexandru Irimescu</h5>
                    <p class="mb-3">Expert Fonduri Europene</p>
                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Trimite mesaj</a>
                    </div>
                    <div class="chat-tab-menu mt-3">
                      <div class="row">
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-phone f-24"></i><br>
                            <span class="f-s-15">Apel</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-paper-plane f-24"></i><br>
                            <span class="f-s-15">Mesaj</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-video-camera f-24"></i><br>
                            <span class="f-s-15">Zoom</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-inbox f-24"></i><br>
                            <span class="f-s-15">Email</span>
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
                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Trimite mesaj</a>
                    </div>
                    <div class="chat-tab-menu mt-3">
                      <div class="row">
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-phone f-24"></i><br>
                            <span class="f-s-15">Apel</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-paper-plane f-24"></i><br>
                            <span class="f-s-15">Mesaj</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-video-camera f-24"></i><br>
                            <span class="f-s-15">Zoom</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-inbox f-24"></i><br>
                            <span class="f-s-15">Email</span>
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

                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Trimite mesaj</a></div>
                    <div class="chat-tab-menu mt-3">
                      <div class="row">
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-phone f-24"></i><br>
                            <span class="f-s-15">Apel</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-paper-plane f-24"></i><br>
                            <span class="f-s-15">Mesaj</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-video-camera f-24"></i><br>
                            <span class="f-s-15">Zoom</span>
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#">
                            <i class="fa fa-inbox f-24"></i><br>
                            <span class="f-s-15">Email</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



          </div>

          <div class="w-100 m-b-20 d-grid"> <a href="#" class="btn btn-outline-primary radius-15" data-bs-original-title="" title="">Scrie mesaj la toata compania</a>
          </div> -->

      </div>
      <!-- Container-fluid Ends-->



    </div>
    <!-- footer start-->
  </div>
  <?php include('partial/footer.php') ?>
</div>
</div>
<?php include('partial/scripts.php') ?>
<!-- Plugins JS start-->
<script defer>
  const eur = 'https://api.raport.ai/exchange/eur';

  fetch(eur)
    .then(response => response.json())
    .then(data => {
      if (data) {
        const cursValutar2 = document.getElementById('curs-valutar2').innerText = `${data.toFixed(4)}`;
      } else {
        console.error('Eroare:', data['error-type']);
      }
    })
    .catch(error => console.error('Eroare:', error));

  const usd = 'https://api.raport.ai/exchange/usd';

  fetch(usd)
    .then(response => response.json())
    .then(data => {
      if (data) {
        const rates = data.conversion_rates;
        const cursValutar = document.getElementById('curs-valutar').innerText = `${data.toFixed(4)}`;
      } else {
        console.error('Eroare:', data['error-type']);
      }
    })
    .catch(error => console.error('Eroare:', error));
  const GBP = 'https://api.raport.ai/exchange/gbp';

  fetch(GBP)
    .then(response => response.json())
    .then(data => {
      if (data) {
        const rates = data.conversion_rates;
        const cursValutar = document.getElementById('curs-valutar3').innerText = `${data.toFixed(4)}`;
      } else {
        console.error('Eroare:', data['error-type']);
      }
    })
    .catch(error => console.error('Eroare:', error));
  const CHF = 'https://api.raport.ai/exchange/chf';

  fetch(CHF)
    .then(response => response.json())
    .then(data => {
      if (data) {
        const rates = data.conversion_rates;
        const cursValutar = document.getElementById('curs-valutar4').innerText = `${data.toFixed(4)}`;
        var date = new Date(data.time_last_update_utc);
        var formattedDate = new Date().toLocaleDateString("ro-RO", {
          day: 'numeric',
          month: 'short',
          year: 'numeric'
        });
        console.log(data)
        document.getElementById('curs-data').innerText = formattedDate


      } else {
        console.error('Eroare:', data['error-type']);
      }
    })
    .catch(error => console.error('Eroare:', error));
</script>

<script>
  // define Moni steps fideo ID
  const moniVideoSteps = 'z4OL-mVRcd0';
</script>
<script src="https://www.youtube.com/iframe_api"></script>
<script src="assets/js/moniSteps.js"></script>


<script src="assets/js/chart/apex-chart/apex-chart.js"></script>
<script src="assets/js/chart/apex-chart/stock-prices.js"></script>
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