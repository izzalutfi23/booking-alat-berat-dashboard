<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Data Transaksi</h3>
		</div>
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Transaksi</h4>
						</p>
						<div class="table-responsive">
							<table class="table table-striped" id="example">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Alat</th>
										<th>Dari Tgl</th>
										<th>Sampai Tgl</th>
										<th>Penyewa</th>
										<th>Alamat Proyek</th>
										<th>Total</th>
										<th>Status</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no=1; 
									foreach($transaksi as $data){
									if($data->status=='pending'){
										$status = '<button class="btn btn-sm btn-danger">Pending</button>';
									}
									else if($data->status=='accepted'){
										$status = '<button class="btn btn-sm btn-warning">Accepted</button>';
									}
                                    else if($data->status=='ongoing'){
                                        $status = '<button class="btn btn-sm btn-secondary">On Going</button>';
                                    }
                                    else if($data->status=='done'){
                                        $status = '<button class="btn btn-sm btn-success">Done</button>';
                                    }
								?>
									<tr>
										<td><?=$no++?></td>
										<td><?=$data->nama_alat?></td>
										<td><?=date('d M Y', strtotime($data->start_date))?></td>
										<td><?=date('d M Y', strtotime($data->end_date))?></td>
										<td><?=$data->nama_penyewa?></td>
										<td><?=$data->alamat_proyek?></td>
										<td>Rp <?=number_format($data->total)?></td>
										<td><?=$status?></td>
										<td width="11%">
											<button class="btn btn-primary btn-sm" data-toggle="modal"
												data-target="#edit<?=$data->id?>">Ubah Status</button>
											<a onclick="return confirm('Data akan dihapus!')"
												href="<?=base_url('dashboard/deltrx/'.$data->id.'/'.$this->uri->segment('3'))?>"><button
													class="btn btn-danger btn-sm">Hapus</button></a>
										</td>
									</tr>
									<!-- Edit data -->
									<div class="modal fade" id="edit<?=$data->id?>" tabindex="-1" role="dialog"
										aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Ubah Status</h5>
													<button type="button" class="close" data-dismiss="modal"
														aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
												<div class="template-demo mb-4 text-center">
													<a href="<?=base_url('dashboard/changestatus/pending/'.$data->id)?>"><button type="button" class="btn btn-danger"> Pending </button></a>
													<a href="<?=base_url('dashboard/changestatus/accepted/'.$data->id)?>"><button type="button" class="btn btn-warning"> Accepted </button></a>
													<a href="<?=base_url('dashboard/changestatus/ongoing/'.$data->id)?>"><button type="button" class="btn btn-secondary"> On Going </button></a>
													<a href="<?=base_url('dashboard/changestatus/done/'.$data->id)?>"><button type="button" class="btn btn-success"> Done </button></a>
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
