<section class="brief_tab_chart">
	<div class="card">
		<div class="card-body">
			<ul class="nav nav-pills row m-0 mb-3">
				<li class="nav-item col-xl-3 col-lg-4" role="presentation">
					<button class="nav-link" id="costTab-tab" data-bs-toggle="tab" aria-selected="false">
						<div class="panel panel-brief panel-brief-secondary">
							<div class="row m-0 g-0 flex-row-reverse justify-content-between">
								<div class="col-md-auto col-12">
									<div class="icon">
										<i class="fa-solid fa-wallet"></i>
									</div>
								</div>
								<div class="col-md-auto col-12">
									<p class="text-muted">TOTAL SELLERS</p>
									<h3>559.25k</h3>
								</div>
								<div class="col-12">
									<div class="text-muted">
										<small><span class="badge badge-success"> <i class="fa-solid fa-arrow-up"></i>&nbsp;+18.30&percnt;</span>&nbsp;than last month</small>
									</div>
								</div>
							</div>
						</div>
					</button>
				</li>
				<li class="nav-item col-xl-3 col-lg-4" role="presentation">
					<button class="nav-link" id="costTab-tab" data-bs-toggle="tab" aria-selected="false">
						<div class="panel panel-brief panel-brief-secondary">
							<div class="row m-0 g-0 flex-row-reverse justify-content-between">
								<div class="col-md-auto col-12">
									<div class="icon">
										<i class="fa-solid fa-wallet"></i>
									</div>
								</div>
								<div class="col-md-auto col-12">
									<p class="text-muted">TOTAL SELLERS</p>
									<h3>559.25k</h3>
								</div>
								<div class="col-12">
									<div class="text-muted">
										<small><span class="badge badge-success"> <i class="fa-solid fa-arrow-up"></i>&nbsp;+18.30&percnt;</span>&nbsp;than last month</small>
									</div>
								</div>
							</div>
						</div>
					</button>
				</li>
				<li class="nav-item col-xl-3 col-lg-4" role="presentation">
					<button class="nav-link" id="costTab-tab" data-bs-toggle="tab" aria-selected="false">
						<div class="panel panel-brief panel-brief-secondary">
							<div class="row m-0 g-0 flex-row-reverse justify-content-between">
								<div class="col-md-auto col-12">
									<div class="icon">
										<i class="fa-solid fa-wallet"></i>
									</div>
								</div>
								<div class="col-md-auto col-12">
									<p class="text-muted">TOTAL SELLERS</p>
									<h3>559.25k</h3>
								</div>
								<div class="col-12">
									<div class="text-muted">
										<small><span class="badge badge-success"> <i class="fa-solid fa-arrow-up"></i>&nbsp;+18.30&percnt;</span>&nbsp;than last month</small>
									</div>
								</div>
							</div>
						</div>
					</button>
				</li>
				<li class="nav-item col-xl-3 col-lg-4" role="presentation">
					<button class="nav-link" id="costTab-tab" data-bs-toggle="tab" aria-selected="false">
						<div class="panel panel-brief panel-brief-secondary">
							<div class="row m-0 g-0 flex-row-reverse justify-content-between">
								<div class="col-md-auto col-12">
									<div class="icon">
										<i class="fa-solid fa-wallet"></i>
									</div>
								</div>
								<div class="col-md-auto col-12">
									<p class="text-muted">TOTAL SELLERS</p>
									<h3>559.25k</h3>
								</div>
								<div class="col-12">
									<div class="text-muted">
										<small><span class="badge badge-success"> <i class="fa-solid fa-arrow-up"></i>&nbsp;+18.30&percnt;</span>&nbsp;than last month</small>
									</div>
								</div>
							</div>
						</div>
					</button>
				</li>
			</ul>
			<script>
				var revenueChartOptions = {
					grid: {
						left: 0,
						top: 0,
						right: 0,
						bottom: 0,
					},
					tooltip: {
						trigger: 'axis',
						position: function(pt) {
							return [pt[0], '10%'];
						}
					},
					xAxis: {
						type: 'category',
						data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
					},
					yAxis: {
						type: 'value'
					},
					series: [{
							data: [150, 230, 224, 218, 135, 147, 260, 150, 230, 224, 218, 135, 147, 260, 150, 230, 224, 218, 135, 147, 260, 150, 230, 224, 218, 135, 147, 260],
							type: 'line',
							smooth: 0.5,
							symbol: 'none',
							areaStyle: {
								color: '#eefeff'
							},
							lineStyle: {
								color: '#33b1e9',
								width: 3,
							},
							itemStyle: {
								color: '#33b1e9',
							}
						},
						{
							data: [47, 60, 50, 30, 24, 18, 35, 47, 60, 50, 30, 24, 18, 35, 50, 230, 224, 218, 135, 150, 230, 224, 218, 135],
							type: 'line',
							smooth: 0.5,
							symbol: 'none',
							lineStyle: {
								color: '#0a97d5',
								width: 1,
								type: 'dashed'
							},
							itemStyle: {
								color: '#0a97d5',
							}
						}
					]
				};
			</script>
			<div class="" id="">
				<div class="">
					<div id="revenue1" style="height: 150px;"></div>
					<script>
						apacheCharts = echarts.init(document.getElementById('revenue1'));
						apacheCharts.setOption(revenueChartOptions);
					</script>
				</div>
			</div>
		</div>
	</div>
</section>
