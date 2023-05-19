<?php include('partial/header.php'); ?>
<link rel="stylesheet" type="text/css" href="assets/css/vendors/sticky.css">
<?php include('partial/header.php'); ?>

<div class="page-wrapper compact-wrapper" id="pageWrapper">
  <!-- Page Header Start-->
  <?php include('partial/topbar.php'); ?>
  <!-- Page Header Ends -->
  <!-- Page Body Start-->
  <div class="page-body-wrapper">
    <!-- Page Sidebar Start-->
    <?php include('partial/sidebar.php'); ?>
    <!-- Page Sidebar Ends-->
    <div class="page-body">
      <?php include('partial/breadcrumb.php'); ?>
      <!-- Container-fluid starts                    -->
      <div class="container-fluid">
        <div class="row sticky-header-main">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <a href="sticky-home.php" class="btn btn-primary pull-left m-l-10 mb-3">Meniu</a>
                <a class="btn btn-primary pull-right m-l-10 mb-3" onclick="newNote2(d.element('newNoteText').value)">Adauga notita</a>

                <textarea class="form-control input-txt-bx mt-3" name="" id="newNoteText" cols="30" rows="10" placeholder="Textul ....."></textarea>



              </div>
              <div class="card-body">
                <div class="sticky-note" id="board" data-custom-ID="board"></div>
              </div>
            </div>
          </div>

          <!-- Card Joi -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">

                <div class="sticky-note w-100" id="boardHard1" data-custom-ID="boardHard1">
                  <h3>Joi - 20.04.2023</h3>
                  <!-- hardcoded card -->
                  <div class="noteCustom" ondragstart="`function(){$(this).css(&quot;z-index&quot;," ++notezindex);}`="" style=""><input type="checkbox" class="remove" data-bs-original-title="" title=""><a href="javascript:;" class="button remove" data-bs-original-title="" title="">X</a>
                    <div class="note_cnt"><textarea class="cnt" rows="10" placeholder="Scrie textul aici" oninput="saveCards()">
                      Evaluarea performanței departamentului de vânzări și stabilirea obiectivelor pentru trimestrul următor
                    </textarea>
                      <div class="d-flex pers"><img src="assets/images/custom-persons/5.jpg" width="30" height="30" class="rounded-circle shadow m-1" alt=""></div>
                      <div class="d-flex">
                        <div onclick="makeThemeBlue(this)" class="cardWithGrayBorder m-1 f-s-10">Azi</div>
                        <div onclick="makeThemeBlue(this)" class="cardWithGrayBorder m-1 f-s-10">Important</div>
                        <div onclick="makeThemeBlue(this)" class="cardWithGrayBorder m-1 f-s-10">Alerta</div>
                        <div onclick="assignNote(this)" class="cardWithGrayBorder m-1 f-s-10"><i class="icofont icofont-business-man"></i></div>
                      </div>
                    </div>
                  </div>
                  <!-- END hardcoded card -->

                  <!-- hardcoded card -->
                  <div class="noteCustom" ondragstart="`function(){$(this).css(&quot;z-index&quot;," ++notezindex);}`="" style=""><input type="checkbox" class="remove" data-bs-original-title="" title=""><a href="javascript:;" class="button remove" data-bs-original-title="" title="">X</a>
                    <div class="note_cnt"><textarea class="cnt" rows="10" placeholder="Scrie textul aici" oninput="saveCards()">
                      Revizuirea strategiei de marketing și planificarea campaniilor publicitare pentru lansarea unui nou produs
                    </textarea>
                      <div class="d-flex pers"><img src="assets/images/custom-persons/5.jpg" width="30" height="30" class="rounded-circle shadow m-1" alt=""><img src="assets/images/custom-persons/7.jpg" width="30" height="30" class="rounded-circle shadow m-1" alt=""><img src="assets/images/custom-persons/9.jpg" width="30" height="30" class="rounded-circle shadow m-1" alt=""><img src="assets/images/custom-persons/8.jpg" width="30" height="30" class="rounded-circle shadow m-1" alt=""></div>
                      <div class="d-flex">
                        <div onclick="makeThemeBlue(this)" class="cardWithGrayBorder m-1 f-s-10">Azi</div>
                        <div onclick="makeThemeBlue(this)" class="cardWithGrayBorder m-1 f-s-10">Important</div>
                        <div onclick="makeThemeBlue(this)" class="cardWithGrayBorder m-1 f-s-10">Alerta</div>
                        <div onclick="assignNote(this)" class="cardWithGrayBorder m-1 f-s-10"><i class="icofont icofont-business-man"></i></div>
                      </div>
                    </div>
                  </div>
                  <!-- END hardcoded card -->
                </div>
              </div>
            </div>
          </div>
          <!-- END Card Joi -->


          <!-- Card Vineri -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">

                <div class="sticky-note w-100" id="boardHard1" data-custom-ID="boardHard1">
                  <h3>Vineri - 21.04.2023</h3>
                  <!-- hardcoded card -->
                  <div class="noteCustom" ondragstart="`function(){$(this).css(&quot;z-index&quot;," ++notezindex);}`="" style=""><input type="checkbox" class="remove" data-bs-original-title="" title=""><a href="javascript:;" class="button remove" data-bs-original-title="" title="">X</a>
                    <div class="note_cnt">
                      <textarea class="cnt" rows="10" placeholder="Scrie textul aici" oninput="saveCards()">
                      Revizuirea raportului financiar trimestrial - întâlnire cu echipa financiară pentru a revizui raportul financiar trimestrial al companiei. Analizam tendințele și luam decizii strategice pentru a optimiza performanța financiară a companiei.
                      </textarea>
                      <div class="d-flex pers"><img src="assets/images/custom-persons/4.jpg" width="30" height="30" class="rounded-circle shadow m-1" alt=""><img src="assets/images/custom-persons/8.jpg" width="30" height="30" class="rounded-circle shadow m-1" alt=""></div>
                      <div class="d-flex">
                        <div onclick="makeThemeBlue(this)" class="cardWithGrayBorder m-1 f-s-10">Azi</div>
                        <div onclick="makeThemeBlue(this)" class="cardWithGrayBorder m-1 f-s-10">Important</div>
                        <div onclick="makeThemeBlue(this)" class="cardWithGrayBorder m-1 f-s-10">Alerta</div>
                        <div onclick="assignNote(this)" class="cardWithGrayBorder m-1 f-s-10"><i class="icofont icofont-business-man"></i></div>
                      </div>
                    </div>
                  </div>
                  <!-- END hardcoded card -->

                  <!-- hardcoded card -->
                  <div class="noteCustom" ondragstart="`function(){$(this).css(&quot;z-index&quot;," ++notezindex);}`="" style=""><input type="checkbox" class="remove" data-bs-original-title="" title=""><a href="javascript:;" class="button remove" data-bs-original-title="" title="">X</a>
                    <div class="note_cnt">
                      <textarea class="cnt" rows="10" placeholder="Scrie textul aici" oninput="saveCards()">
                      Planificarea întâlnirii cu echipa de proiect - întâlnire cu echipa de proiect pentru a discuta despre stadiul actual al proiectelor și pentru a verifica dacă se respectă termenele limită.
                      </textarea>
                      <div class="d-flex pers"><img src="assets/images/custom-persons/8.jpg" width="30" height="30" class="rounded-circle shadow m-1" alt=""><img src="assets/images/custom-persons/11.jpg" width="30" height="30" class="rounded-circle shadow m-1" alt=""><img src="assets/images/custom-persons/13.jpg" width="30" height="30" class="rounded-circle shadow m-1" alt=""></div>
                      <div class="d-flex">
                        <div onclick="makeThemeBlue(this)" class="cardWithGrayBorder m-1 f-s-10">Azi</div>
                        <div onclick="makeThemeBlue(this)" class="cardWithGrayBorder m-1 f-s-10">Important</div>
                        <div onclick="makeThemeBlue(this)" class="cardWithGrayBorder m-1 f-s-10">Alerta</div>
                        <div onclick="assignNote(this)" class="cardWithGrayBorder m-1 f-s-10"><i class="icofont icofont-business-man"></i></div>
                      </div>
                    </div>
                  </div>
                  <!-- END hardcoded card -->
                </div>
              </div>
            </div>
          </div>
          <!-- END Card Vineri -->




        </div>
      </div>
      <!-- Container-fluid Ends-->
    </div>

    <?php include('partial/footer.php'); ?>
  </div>
</div>

<?php include('partial/scripts.php'); ?>

<script src="assets/js/jquery.ui.min.js"></script>
<script src="assets/js/sticky/sticky.js"></script>
<script src="assets/js/tooltip-init.js"></script>

<?php include('partial/footer-end.php'); ?>