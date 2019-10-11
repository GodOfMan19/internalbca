<?php
    if($this->session->userdata('status') != 'login'){
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <hr />
        <div align="center"><h1 style="font-size:100px;">Null</h1><h1>Anda Belum Login</h1><hr />
            <a href="<?php echo base_url() ?>" class="btn btn-info btn-lg"><i class="fa fa-sign-in"></i>
            Klik Untuk Login Disini</a></div>
        <hr />
            </div>
        </div>
    </div>
<?php } ?>
<!-- Modal -->
<div id="modalotomatis" class="modal fade bs-example-modal-lg modalotomatis"  aria-labelledby="mySmallModalLabel" role="dialog">
    <div class="modal-dialog modal-sm">
        <form method="post" enctype="multipart/form-data">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><b>Halaman Login</b></h4>
            </div>
            <div class="modal-body">
                <label>
                    <b>Username</b>
                    <input type="text" class="form-control m-form-limit" name="username" required placeholder="Masukkan Username" style="width: 100%">
                </label>
                <label>
                    <b>Password</b>
                    <input type="password" class="form-control m-form-limit" name="password" required placeholder="Masukkan Password" style="width: 100%">
                </label>
                
            </div>
            <div class="modal-footer" style="text-align: left;">
                <label>
                    <button type="submit" class="btn btn-info">
                        <i class="fa fa-sign-in" aria-hidden="true"></i> 
                        LOGIN
                    </button>
                </label>
            </div>
        </div>
        </form>
    </div>
</div>

	<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/default.js') ?>"></script>

	<script src="<?php echo base_url('assets/js/date-picker.js') ?>" type="text/javascript"></script>

	<script type="text/javascript">
        $('#start').datepicker({
            uiLibrary: 'bootstrap'
        }); 
        $('#end').datepicker({
            uiLibrary: 'bootstrap'
        }); 

        <?php
            if($this->session->userdata('status') != 'login'){
                echo"$('#modalotomatis').modal('show');";
            }
        ?>

	</script>
</body>
</html>