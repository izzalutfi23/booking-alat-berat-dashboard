<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Data Alat Berat</h3>
			<div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
				<button type="button" data-toggle="modal" data-target="#tambah"
					class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
					<i class="mdi mdi-plus-circle"></i> Alat Berat</button>

				<!-- Tambah data -->
				<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Alat Berat</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="<?=base_url('dashboard/alat_action')?>" method="POST"
									enctype="multipart/form-data">
									<div class="form-group">
										<label>Kategori Alat Berat</label>
										<select name="kategori_id" class="form-control">
											<?php 
                                                foreach($kategori as $kat){
                                            ?>
											<option value="<?=$kat->id?>"><?=$kat->nama?></option>
											<?php } ?>
										</select>
									</div>
									<div class="form-group">
										<label>Nama Alat Berat</label>
										<input type="text" name="nama" required class="form-control">
									</div>
									<div class="form-group">
										<label>Deskripsi</label>
										<textarea name="deskripsi" rows="3" class="form-control"></textarea>
									</div>
									<div class="form-group">
										<label>Foto</label>
										<input type="file" name="foto" required class="form-control">
									</div>
									<div class="form-group">
										<label>Tahun</label>
										<input type="number" name="tahun" required class="form-control">
									</div>
									<div class="form-group">
										<label>Harga Sewa</label>
										<input type="number" name="harga" required class="form-control">
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
										<th>Nama</th>
										<th>Deskripsi</th>
										<th>Foto</th>
										<th>Tahun</th>
										<th>Harga Sewa</th>
										<th>Status</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no=1; 
									foreach($alat as $data){
								?>
									<tr>
										<td><?=$no++?></td>
										<td><?=$data->nama_kategori?></td>
										<td><?=$data->nama_alat?></td>
										<td><?=$data->deskripsi?></td>
										<td><img src="<?=$data->foto?>" style="height: 80px; width: 80px;"></td>
										<td><?=$data->tahun?></td>
										<td>Rp <?=number_format($data->harga)?></td>
										<td><?=$data->status?></td>
										<td width="11%">
											<button class="btn btn-primary btn-sm" data-toggle="modal"
												data-target="#edit<?=$data->id?>">Edit</button>
											<a onclick="return confirm('Data akan dihapus!')"
												href="<?=base_url('dashboard/delalat/'.$data->id.'/'.$this->uri->segment('3'))?>"><button
													class="btn btn-danger btn-sm">Hapus</button></a>
										</td>
									</tr>
									<!-- Edit data -->
									<div class="modal fade" id="edit<?=$data->id?>" tabindex="-1" role="dialog"
										aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Edit Alat Berat</h5>
													<button type="button" class="close" data-dismiss="modal"
														aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form action="<?=base_url('dashboard/alat_update')?>" method="POST"
														enctype="multipart/form-data">
														<div class="form-group">
															<label>Kategori Alat Berat</label>
															<input type="hidden" name="id" value="<?=$data->id?>">
															<select name="kategori_id" class="form-control">
																<?php 
                                                                    foreach($kategori as $kat){
                                                                ?>
																<option <?=($kat->id==$data->id_kat?'selected':'')?>
																	value="<?=$kat->id?>"><?=$kat->nama?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Nama Alat Berat</label>
															<input type="text" value="<?=$data->nama_alat?>" name="nama"
																required class="form-control">
														</div>
														<div class="form-group">
															<label>Deskripsi</label>
															<textarea name="deskripsi" rows="3"
																class="form-control"><?=$data->deskripsi?></textarea>
														</div>
														<div class="form-group">
															<label>Foto</label>
															<input type="file" name="foto" class="form-control">
														</div>
														<div class="form-group">
															<label>Tahun</label>
															<input type="number" value="<?=$data->tahun?>" name="tahun"
																required class="form-control">
														</div>
														<div class="form-group">
															<label>Harga Sewa</label>
															<input type="number" value="<?=$data->harga?>" name="harga"
																required class="form-control">
														</div>
														<div class="form-group">
															<label>Status</label>
															<select name="status" class="form-control">
																<option value="0" <?=($data->status==0?'selected':'')?>>
																	Tersedia</option>
																<option value="1" <?=($data->status==1?'selected':'')?>>
																	Disewa</option>
															</select>
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
