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

                                <a class="btn btn-primary pull-right m-l-10 mb-3" onclick="newNote2(d.element('newNoteTitle').value, d.element('newNoteText').value)">Adauga notita</a>


                                <input class="form-control input-txt-bx mb-3" type="text" id="newNoteTitle" placeholder="Titlul .....">

                                <textarea class="form-control input-txt-bx mt-3" name="" id="newNoteText" cols="30" rows="10" placeholder="Textul ....."></textarea>




                            </div>
                            <div class="card-body">
                                <div class="sticky-note" id="board" data-custom-ID="board"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="pull-left m-l-10 mb-3">Alerte</h3>

                            </div>
                            <div class="card-body">
                                <div class="sticky-note" id="boardNone">
                                    <div class="note-none ui-draggable ui-draggable-handle" ondragstart="`function(){$(this).css(&quot;z-index&quot;," ++notezindex);}`="" style=""><a href="javascript:;" class="button remove" data-bs-original-title="" title="">X</a>
                                        <div class="note_cnt-none">
                                            <p class="title" placeholder="Enter note title">
                                                Meeting despre Digitalizare 2023
                                            </p>
                                            <textarea class="cnt-none" placeholder="Enter note description here" style="height: 200px;">Urmeaza sa ma conectez la apel:</textarea>
                                            <a href="#">https://meet.google.com/nkx-hkzx-fzy</a>

                                            <div class="row d-flex">
                                                <i class="icofont icofont-sand-clock" style="color:#db4444;width: 10%"></i>
                                                <p id="timerAlert" style="color:#db4444; width: 80%"></p>
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

        <?php include('partial/footer.php'); ?>
    </div>
</div>

<?php include('partial/scripts.php'); ?>
<script>
    // convert previous time to number and start timer
    let time = 20345;
    let timer = setInterval(() => {
        // increment time and format display
        time++;
        const hours = Math.floor(time / 3600);
        const minutes = Math.floor((time % 3600) / 60);
        const seconds = time % 60;
        const formattedTime = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        if (document.getElementById("timerAlert")) {
            document.getElementById("timerAlert").innerHTML = formattedTime;
        }
    }, 1000);
</script>
<script src="assets/js/jquery.ui.min.js"></script>
<script src="assets/js/sticky/sticky.js"></script>
<script src="assets/js/tooltip-init.js"></script>

<?php include('partial/footer-end.php'); ?>