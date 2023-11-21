<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('components/_head') ?>
	<?php $this->load->view('components/_common_css') ?>
	<?php $this->load->view('components/_datatables_css') ?>
	<title><?= $page['title'] . " • " . APP_NAME ?></title>
</head>

<body>
	<header>
		<?php $this->load->view('components/dashboard/_nav') ?>
	</header>
	<main>
		<section class="my-4">
			<div class="container">
				<div class="row m-0 align-items-end mb-3">
					<div class="col-12">
						<?php
						$data = [
							'property' => [
								'class' => 'sticky'
							],
						];
						$this->load->view('components/dashboard/_page_title', $data) ?>
					</div>
					<div class="col-12">
						<a href="<?= base_url('categories/new') ?>" class="btn btn-primary my-2">Add New Category</a>
					</div>
				</div>
				<div class="row m-0">
					<div class="col-12">
						<div class="card panel mb-3">
							<div class="card-header">
								All Categories
							</div>
							<div class="card-body">
								<table id="stock_report" class="display">
									<thead>
										<tr>
											<th>Category ID</th>
											<th>Category Name</th>
											<th>Category Slug</th>
											<th>Parent Category</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($page['categories'] as $category) : ?>
											<tr>
												<td>
													<a href="<?= base_url('/category/' . $category['uid'] . "/edit") ?>">#<?= $category['uid'] ?></a>
												</td>
												<td>
													<?= $category['name'] ?>
												</td>
												<td>
													<?= $category['slug'] ?>
												</td>
												<td>
													<?= $category['parent'] ?>
												</td>
											</tr>
										<?php endforeach ?>
									</tbody>
								</table>
							</div>
						</div>
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
			$('#stock_report').DataTable();
		});
	</script>
</body>

</html>
