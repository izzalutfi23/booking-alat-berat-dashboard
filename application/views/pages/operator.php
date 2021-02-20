<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Data Operator</h3>
			<div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
				<button type="button" data-toggle="modal" data-target="#tambah"
					class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
					<i class="mdi mdi-plus-circle"></i> Operator</button>

				<!-- Tambah data -->
				<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Operator</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="<?=base_url('dashboard/operator_action')?>" method="POST">
									<div class="form-group">
										<label>Jenis Operator</label>
										<select name="kategori_id" class="form-control">
											<?php 
                                                foreach($kategori as $kat){
                                            ?>
											<option value="<?=$kat->id?>"><?=$kat->nama?></option>
											<?php } ?>
										</select>
									</div>
									<div class="form-group">
										<label>Nama Operator</label>
										<input type="text" name="nama" required class="form-control">
									</div>
									<div class="form-group">
										<label>No HP</label>
										<input type="text" name="no_hp" required class="form-control">
									</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary"
									style="padding: 7px 7px 7px 7px;">Simpan</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- End tambah data -->

			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Operator</h4>
						</p>
						<div class="table-responsive">
							<table class="table table-striped" id="example">
								<thead>
									<tr>
										<th>No</th>
										<th>Jenis Operator</th>
										<th>Nama Operator</th>
										<th>No HP</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no=1; 
									foreach($operator as $data){
								?>
									<tr>
										<td><?=$no++?></td>
										<td><?=$data->nama_kategori?></td>
										<td><?=$data->nama_operator?></td>
										<td><?=$data->no_hp?></td>
										<td width="11%">
											<button class="btn btn-primary btn-sm" data-toggle="modal"
												data-target="#edit<?=$data->id?>">Edit</button>
											<a onclick="return confirm('Data akan dihapus!')"
												href="<?=base_url('dashboard/deloperator/'.$data->id)?>"><button
													class="btn btn-danger btn-sm">Hapus</button></a>
										</td>
									</tr>
									<!-- Edit data -->
									<div class="modal fade" id="edit<?=$data->id?>" tabindex="-1" role="dialog"
										aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Edit Operator</h5>
													<button type="button" class="close" data-dismiss="modal"
														aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form action="<?=base_url('dashboard/operator_update')?>"
														method="POST">
														<div class="form-group">
															<label>Jenis Operator</label>
                                                            <input type="hidden" name="id" value="<?=$data->id?>">
															<select name="kategori_id" class="form-control">
																<?php 
                                                                    foreach($kategori as $kat){
                                                                ?>
																<option <?=($kat->id==$data->id_kat?'selected':'')?> value="<?=$kat->id?>"><?=$kat->nama?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Nama Operator</label>
															<input type="text" value="<?=$data->nama_operator?>" name="nama" required
																class="form-control">
														</div>
														<div class="form-group">
															<label>No HP</label>
															<input type="text" value="<?=$data->no_hp?>" name="no_hp" required
																class="form-control">
														</div>
												</div>
												<div class="modal-footer">
													<button type="submit" class="btn btn-primary"
														style="padding: 7px 7px 7px 7px;">Edit</button>
													</form>
												</div>
											</div>
										</div>
									</div>
									<!-- End edit data -->
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- content-wrapper ends -->

	<!-- partial:partials/_footer.html -->
	<footer class="footer">
		<div class="d-sm-flex justify-content-center justify-content-sm-between">
			<span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
				IJAB QOBUL 2021</span>
			<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
					href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a>
				from Bootstrapdash.com</span>
		</div>
	</footer>
	<!-- partial -->
</div>
<!-- main-panel ends -->

<!-- Datatable -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>

<script>
	$(document).ready(function () {
		$('#example').DataTable({
			dom: 'Bfrtip',
			buttons: [{
				extend: 'print',
				footer: true,
				exportOptions: {
					columns: [0, 1, 2, 3]
				}
			},
			{
				extend: 'pdf',
				footer: true,
				exportOptions: {
					columns: [0, 1, 2, 3]
				}
			},
			{
				extend: 'csv',
				footer: true,
				exportOptions: {
					columns: [0, 1, 2, 3]
				}
			},
			{
				extend: 'excel',
				footer: true,
				exportOptions: {
					columns: [0, 1, 2, 3]
				}
			}]
		});
	});
</script>