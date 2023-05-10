<div class="modal fade" id="oferta" tabindex="-1" aria-labelledby="oferta" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cere o oferta de pret pentru soft</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="email">Email</label>
                            <input id="oEmail" type="email" class="form-control" placeholder="example@gmail.com">
                        </div>
                        <div class="col-md-12">
                            <label for="phone">Telefon</label>
                            <input id="oTelefon" type="text" class="form-control" placeholder="+40700000000">
                        </div>
                        <div class="col-md-12">
                            <label for="buget">Buget orentativ</label>
                            <input id="oBuget" type="text" class="form-control" placeholder="50000 Euro">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Inchide</button>
                <button class="btn btn-primary" type="button" data-bs-original-title="" title="" onclick="sendTest()">Genereaza si trimite oferate</button>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright <?php echo date("Y"); ?> © AiPro, toate drepturile rezevate. </p>
            </div>
        </div>
    </div>
</footer>