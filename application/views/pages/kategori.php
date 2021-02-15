<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Data Kategori</h3>
			<div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
				<button type="button" data-toggle="modal" data-target="#tambah"
					class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
					<i class="mdi mdi-plus-circle"></i> Kategori</button>

				<!-- Tambah data -->
				<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="<?=base_url('dashboard/kategori_action')?>" method="POST">
									<div class="form-group">
										<label>Nama Kategori</label>
										<input type="text" name="nama" required class="form-control">
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
						<h4 class="card-title">Kategori</h4>
						</p>
						<div class="table-responsive">
							<table class="table table-striped" id="example">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Kategori</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no=1; 
									foreach($kategori as $data){
								?>
									<tr>
										<td><?=$no++?></td>
										<td><?=$data->nama?></td>
										<td width="11%">
											<button class="btn btn-primary btn-sm" data-toggle="modal"
												data-target="#edit<?=$data->id?>">Edit</button>
											<a onclick="return confirm('Data akan dihapus!')"
												href="<?=base_url('dashboard/delkategori/'.$data->id)?>"><button
													class="btn btn-danger btn-sm">Hapus</button></a>
										</td>
									</tr>
									<!-- Edit data -->
									<div class="modal fade" id="edit<?=$data->id?>" tabindex="-1" role="dialog"
										aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
													<button type="button" class="close" data-dismiss="modal"
														aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form action="<?=base_url('dashboard/kategori_update')?>"
														method="POST">
														<div class="form-group">
															<label>Nama Kategori</label>
                                                            <input type="hidden" name="id" value="<?=$data->id?>">
															<input type="text" name="nama" value="<?=$data->nama?>" class="form-control">
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
