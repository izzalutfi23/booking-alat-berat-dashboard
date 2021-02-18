<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper pb-0">
		<div class="page-header flex-wrap">
			<div class="header-left">
				<button class="btn btn-primary mb-2 mb-md-0 mr-2"> Create new document </button>
				<button class="btn btn-outline-primary bg-white mb-2 mb-md-0"> Import documents </button>
			</div>
			<div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
				<div class="d-flex align-items-center">
					<a href="#">
						<p class="m-0 pr-3">Dashboard</p>
					</a>
					<a class="pl-3 mr-4" href="#">
						<p class="m-0">ADE-00234</p>
					</a>
				</div>
				<a href="<?=base_url('dashboard/alatberat/5')?>"><button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
					<i class="mdi mdi-plus-circle"></i> Add Alat Berat </button></a>
			</div>
		</div>
		<!-- doughnut chart row starts -->
		<div class="row">
			<div class="col-sm-12 stretch-card grid-margin">
				<div class="card">
					<div class="row">
						<div class="col-md-4">
							<div class="card border-0">
								<div class="card-body">
									<div class="card-title">Alat Berat</div>
									<div class="d-flex flex-wrap">
										<div class="doughnut-wrapper w-50">
											<canvas id="alatberat" width="100" height="100"></canvas>
										</div>
										<div id="doughnut-chart-legend"
											class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card border-0">
								<div class="card-body">
									<div class="card-title">Transaksi</div>
									<div class="d-flex flex-wrap">
										<div class="doughnut-wrapper w-50">
											<canvas id="trx" width="100" height="100"></canvas>
										</div>
										<div id="doughnut-chart-legend2"
											class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card border-0">
								<div class="card-body">
									<div class="card-title">Operator</div>
									<div class="d-flex flex-wrap">
										<div class="doughnut-wrapper w-50">
											<canvas id="operator" width="100" height="100"></canvas>
										</div>
										<div id="doughnut-chart-legend3"
											class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- last row starts here -->
		<div class="row">
			<div class="col-sm-6 col-xl-4 stretch-card grid-margin">
				<div class="card">
					<div class="card-body">
						<div class="card-title mb-2">Transaksi Baru</div>
						<h3 class="mb-3"><?=date('d M Y')?></h3>
						<?php 
							foreach($trx as $dtrx){
						?>
						<div class="d-flex border-bottom border-top py-3">
							<div class="pl-2">
								<span class="font-12 text-muted"><?=date('D d M Y H:i:s', strtotime($dtrx->created_at))?></span>
								<p class="m-0 text-black"> <?=$dtrx->alamat_proyek?> </p>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xl-4 stretch-card grid-margin">
				<div class="card">
					<div class="card-body">
						<div class="d-flex border-bottom mb-4 pb-2">
							<div class="hexagon">
								<div class="hex-mid hexagon-warning">
									<i class="mdi mdi-apps"></i>
								</div>
							</div>
							<div class="pl-4">
								<h4 class="font-weight-bold text-warning mb-0"> <?=$allkat?> </h4>
								<h6 class="text-muted">Kategori</h6>
							</div>
						</div>
						<div class="d-flex border-bottom mb-4 pb-2">
							<div class="hexagon">
								<div class="hex-mid hexagon-danger">
									<i class="mdi mdi-account"></i>
								</div>
							</div>
							<div class="pl-4">
								<h4 class="font-weight-bold text-danger mb-0"><?=$allop?></h4>
								<h6 class="text-muted">Operator</h6>
							</div>
						</div>
						<div class="d-flex border-bottom mb-4 pb-2">
							<div class="hexagon">
								<div class="hex-mid hexagon-success">
									<i class="mdi mdi-truck"></i>
								</div>
							</div>
							<div class="pl-4">
								<h4 class="font-weight-bold text-success mb-0"> <?=$allalat?> </h4>
								<h6 class="text-muted">Alat Berat</h6>
							</div>
						</div>
						<div class="d-flex border-bottom mb-4 pb-2">
							<div class="hexagon">
								<div class="hex-mid hexagon-info">
									<i class="mdi mdi-swap-horizontal"></i>
								</div>
							</div>
							<div class="pl-4">
								<h4 class="font-weight-bold text-info mb-0"><?=$alltrx?></h4>
								<h6 class="text-muted">Transaksi</h6>
							</div>
						</div>
						<div class="d-flex">
							<div class="hexagon">
								<div class="hex-mid hexagon-primary">
									<i class="mdi mdi-account"></i>
								</div>
							</div>
							<div class="pl-4">
								<h4 class="font-weight-bold text-primary mb-0"> <?=$alluser?> </h4>
								<h6 class="text-muted mb-0">User</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xl-4 stretch-card grid-margin">
				<div class="card color-card-wrapper">
					<div class="card-body">
						<img class="img-fluid card-top-img w-100"
							src="<?=base_url('assets/images/dashboard/img_5.jpg')?>" alt="" />
						<div class="d-flex flex-wrap justify-content-around color-card-outer">
							<div class="col-6 p-0 mb-4">
								<div class="color-card primary m-auto">
									<i class="mdi mdi-clock-outline"></i>
									<p class="font-weight-semibold mb-0">Pending</p>
									<span class="small"><?=$pending?></span>
								</div>
							</div>
							<div class="col-6 p-0 mb-4">
								<div class="color-card bg-success m-auto">
									<i class="mdi mdi-tshirt-crew"></i>
									<p class="font-weight-semibold mb-0">Accepted</p>
									<span class="small"><?=$acc?></span>
								</div>
							</div>
							<div class="col-6 p-0">
								<div class="color-card bg-info m-auto">
									<i class="mdi mdi-trophy-outline"></i>
									<p class="font-weight-semibold mb-0">On Going</p>
									<span class="small"><?=$ongoing?></span>
								</div>
							</div>
							<div class="col-6 p-0">
								<div class="color-card bg-danger m-auto">
									<i class="mdi mdi-presentation"></i>
									<p class="font-weight-semibold mb-0">Done</p>
									<span class="small"><?=$done?></span>
								</div>
							</div>
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
<script>
	// doughnut chart starts here
	var ctx = document.getElementById('alatberat').getContext("2d");

	var Blue = '#5e6eed';

	var red = '#ff5730';

	var green = '#00cff4';

	var trafficChartData = {
		datasets: [{
			data: [<?=$jlnkecil?>, <?=$jlnbesar?>, <?=$tambang?>],
			backgroundColor: [
				Blue,
				green,
				red
			],
			hoverBackgroundColor: [
				Blue,
				green,
				red
			],
			borderColor: [
				Blue,
				green,
				red
			],
			legendColor: [
				Blue,
				green,
				red
			]
		}],

		// These labels appear in the legend and in the tooltips when hovering different arcs
		labels: [
			'Jalan Kecil',
			'Jalan Besar',
			'Tambang',
		]
	};
	var trafficChartOptions = {
		responsive: true,
		animation: {
			animateScale: true,
			animateRotate: true
		},
		legend: false,
		legendCallback: function (chart) {
			var text = [];
			text.push('<ul>');
			for (var i = 0; i < trafficChartData.datasets[0].data.length; i++) {
				text.push('<li><span class="legend-dots" style="background:' +
					trafficChartData.datasets[0].legendColor[i] +
					'"></span>');
				if (trafficChartData.labels[i]) {
					text.push(trafficChartData.labels[i]);
				}
				// text.push('<span class="float-right">' + trafficChartData.datasets[0].data[i] + "%" + '</span>')
				text.push('</li>');
			}
			text.push('</ul>');
			return text.join('');
		}
	};
	var trafficChartCanvas = $("#alatberat").get(0).getContext("2d");
	var trafficChart = new Chart(trafficChartCanvas, {
		type: 'doughnut',
		data: trafficChartData,
		options: trafficChartOptions
	});
	$("#doughnut-chart-legend").html(trafficChart.generateLegend());


	// Transaksi
	var ctx = document.getElementById('trx').getContext("2d");

      var blue1 = '#5e6eed';

      var red1 = '#ff0d59';

      var green1 = '#00d284';

	  var addcolor = '#355C7D';

      var trafficChartData = {
        datasets: [{
          data: [<?=$pending?>, <?=$acc?>, <?=$ongoing?>, <?=$done?>],
          backgroundColor: [
            blue1,
            green1,
            red1,
			addcolor
          ],
          hoverBackgroundColor: [
            blue1,
            green1,
            red1,
			addcolor
          ],
          borderColor: [
            blue1,
            green1,
            red1,
			addcolor
          ],
          legendColor: [
            blue1,
            green1,
            red1,
			addcolor
          ]
        }],

        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [
          'Pending',
          'Accepted',
          'On Going',
		  'Done',
        ]
      };
      var trafficChartOptions = {
        responsive: true,
        animation: {
          animateScale: true,
          animateRotate: true
        },
        legend: false,
        legendCallback: function (chart) {
          var text = [];
          text.push('<ul>');
          for (var i = 0; i < trafficChartData.datasets[0].data.length; i++) {
            text.push('<li><span class="legend-dots" style="background:' +
              trafficChartData.datasets[0].legendColor[i] +
              '"></span>');
            if (trafficChartData.labels[i]) {
              text.push(trafficChartData.labels[i]);
            }
            // text.push('<span class="float-right">' + trafficChartData.datasets[0].data[i] + "%" + '</span>')
            text.push('</li>');
          }
          text.push('</ul>');
          return text.join('');
        }
      };
      var trafficChartCanvas = $("#trx").get(0).getContext("2d");
      var trafficChart = new Chart(trafficChartCanvas, {
        type: 'doughnut',
        data: trafficChartData,
        options: trafficChartOptions
      });
      $("#doughnut-chart-legend2").html(trafficChart.generateLegend());

	// Operator
	var ctx = document.getElementById('operator').getContext("2d");

	var blue2 = '#00cff4';

	var red2 = '#ff0d59';

	var green2 = '#00d284';

	var trafficChartData = {
	datasets: [{
		data: [<?=$opjlnkecil?>, <?=$jlnbesar?>, <?=$optambang?>],
		backgroundColor: [
		blue2,
		green2,
		red2
		],
		hoverBackgroundColor: [
		blue2,
		green2,
		red2
		],
		borderColor: [
		blue2,
		green2,
		red2
		],
		legendColor: [
		blue2,
		green2,
		red2
		]
	}],

	// These labels appear in the legend and in the tooltips when hovering different arcs
	labels: [
		'Jalan Kecil',
		'Jalan Besar',
		'Tambang',
	]
	};
	var trafficChartOptions = {
	responsive: true,
	animation: {
		animateScale: true,
		animateRotate: true
	},
	legend: false,
	legendCallback: function (chart) {
		var text = [];
		text.push('<ul>');
		for (var i = 0; i < trafficChartData.datasets[0].data.length; i++) {
		text.push('<li><span class="legend-dots" style="background:' +
			trafficChartData.datasets[0].legendColor[i] +
			'"></span>');
		if (trafficChartData.labels[i]) {
			text.push(trafficChartData.labels[i]);
		}
		text.push('</li>');
		}
		text.push('</ul>');
		return text.join('');
	}
	};
	var trafficChartCanvas = $("#operator").get(0).getContext("2d");
	var trafficChart = new Chart(trafficChartCanvas, {
	type: 'doughnut',
	data: trafficChartData,
	options: trafficChartOptions
	});
	$("#doughnut-chart-legend3").html(trafficChart.generateLegend());
</script>
