
<section class="m-bingkai-home"
<?php
    if($this->session->userdata('status') != 'login'){
        echo'style="display: none;';
    }
?>>
	<div class="container-fluid">
		<div class="m-bgcolor-home">
			<form method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 m-logo-bca">
					<img src="<?php echo base_url('assets/images/bca.png') ?>" class="img-responsive">
				</div>
				<div class="col-lg-9 col-md-9 col-xs-9 col-sm-9">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 m-tanggal-limit-text">
							Tanggal / Limit Data
						</div>
						<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
				            <input id="start" width="100%" name="start" placeholder="Start" readonly
				            class="m-input">
						</div>
						<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
				            <input id="end" width="100%" name="end" placeholder="End" readonly
				            class="m-input">
						</div>
						<div class="col-lg-2 col-md-2 col-xs-2 col-sm-2  m-tanggal-limit-text">
				            <input type="number" width="100%" min="10" max="100" name="limit" placeholder="Limit"
				            class="form-control m-form-limit">
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
						<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 m-tanggal-limit-text">
							Cek Mutasi
						</div>
						<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
				            <select class="form-control m-form-limit" name="limittime">
				            	<option value="10000">
				            		10 Detik
				            	</option>
				            	<option value="20000">
				            		20 Detik
				            	</option>
				            	<option value="30000">
				            		30 Detik
				            	</option>
				            </select>
						</div>
						<div class="col-lg-5 col-md-5 col-xs-5 col-sm-5">
							<label class="m-container">Auto Cek Mutasi
							  <input type="checkbox">
							  <span class="m-checkmark"></span>
							</label>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
						<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 m-tanggal-limit-text">
							Keterangan / Jumlah
						</div>
						<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
							<input type="text" name="keterangan" class="form-control m-form-limit" required placeholder="Keterangan">
						</div>
						<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
							<input type="text" name="jumlah" class="form-control m-form-limit" required
							 placeholder="Jumlah">
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
						<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 m-tanggal-limit-text">
							
						</div>
						<div class="col-lg-2 col-md-2 col-xs-2 col-sm-2">
							<label class="m-r-container">Semua
							  <input type="radio" checked="checked" name="dk">
							  <span class="m-r-checkmark"></span>
							</label>
						</div>
						<div class="col-lg-2 col-md-2 col-xs-2 col-sm-2">
							<label class="m-r-container">Kredit
							  <input type="radio" name="dk">
							  <span class="m-r-checkmark"></span>
							</label>
						</div>
						<div class="col-lg-2 col-md-2 col-xs-2 col-sm-2">
							<label class="m-r-container">Debit
							  <input type="radio" name="dk">
							  <span class="m-r-checkmark"></span>
							</label>
						</div>
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-xs-1 col-sm-1">
					<a href="<?php echo base_url('logout'); ?>" class="m-logout">
						<img src="<?php echo base_url('assets/images/logout.png') ?>" class="img-responsive">
					</a>
				</div>
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">&nbsp;</div>

				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

					<table class="fixed_header">
					  <thead>
					    <tr>
							<th>
								Kode
							</th>
							<th>
								tgl. Proses
							</th>
							<th>
								tgl. Bank
							</th>
							<th>
								Keterangan
							</th>
							<th>
								Jumlah
							</th>
							<th>
								D/K
							</th>
							<th>
								Saldo
							</th>
							<th>
								Bank
							</th>
							<th>
								Catatan
							</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr class="debet">
							<td>
								3008
							</td>
							<td>
								10/10/2019 09:05:30
							</td>
							<td>
								10/10/2019
							</td>
							<td>
								Transfer E-Bank DB 0305/FTSCY/WS95011
							</td>
							<td>
								1.000.814.00
							</td>
							<td>
								D
							</td>
							<td>
								1.000.814.00
							</td>
							<td>
								BCA
							</td>
							<td>
								-
							</td>
					    </tr>
					    <tr class="">
							<td>
								3007
							</td>
							<td>
								10/10/2019 09:05:30
							</td>
							<td>
								10/10/2019
							</td>
							<td>
								Transfer E-Bank DB 0305/FTSCY/WS95011
							</td>
							<td>
								1.000.814.0000.000
							</td>
							<td>
								K
							</td>
							<td>
								1.000.814.00
							</td>
							<td>
								BCA
							</td>
							<td>
								-
							</td>
					    </tr>
					  </tbody>
					</table>	

				</div>

				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">&nbsp;</div>

				<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
					Jumlah Data : 100
				</div>
				<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
					Total Kredit : Rp. 1.000.814,00
				</div>
				<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
					Total Debit : Rp. 1.000.814,00
				</div>
				<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
					<button type="submit">Simpan</button>
					<button type="reset">Reset</button>
					<a href="" style="text-decoration: none;color:#333333;">
						<button type="button">
							F5 - Refresh
						</button>
					</a>
				</div>
			</div>
			</form>
		</div>
	</div>
</section>