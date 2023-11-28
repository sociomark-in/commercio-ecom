<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('components/_head') ?>
	<?php $this->load->view('components/_charts_js') ?>

	<?php $this->load->view('components/_datatables_css') ?>
	<?php $this->load->view('components/_common_css') ?>
	<title><?= $page['title'] . " • " . APP_NAME ?></title>
</head>

<body class="bg-body-tertiary">
	<?php $this->load->view('components/dashboard/_nav') ?>
	<main>
		<section class="py-3">
			<div class="container">
				<div class="row m-0">
					<div class="col-12">
						<?php $this->load->view('theme/widgets/charts/revenue_tab_view'); ?>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<?php $this->load->view('components/dashboard/_footer') ?>
	</footer>
	<?php $this->load->view('components/_common_js') ?>
	<?php $this->load->view('components/_datatables_js') ?>
	<script>
		$(document).ready(function() {
			$('#products_table').DataTable();
			$('#stock_report').DataTable();
		});
	</script>
</body>

</html>
