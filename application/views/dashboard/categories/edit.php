<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('components/_head') ?>
	<?php $this->load->view('components/_common_css') ?>
	<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

	<title><?= $page['title'] . " • " . APP_NAME ?></title>
</head>

<body>
	<header>
		<?php $this->load->view('components/dashboard/_nav') ?>
	</header>
	<main>
		<section class="my-4">
			<?= form_open_multipart("", ['id' => 'fileDrop']) ?>
			<div class="container">
				<?php
				$data = [
					'property' => [
						'class' => 'sticky'
					],
				];
				$this->load->view('components/dashboard/_page_title', $data)
				?>
				<div class="row m-0">
					<div class="col-xl-8 col-lg-7 col-12">
						<div class="card panel mb-3">
							<div class="card-header"><b>Category Information</b></div>
							<div class="card-body">
								<div class="mb-3">
									<label for="exampleInputPassword1" class="form-label">Title</label>
									<input type="text" class="form-control" id="exampleInputPassword1">
								</div>
								<div class="mb-3">
									<label for="summernote" class="form-label">Description</label>
									<textarea class="form-control" rows="10" id="summernote"></textarea>
									<script>
										$(document).ready(function() {
											$('#summernote').summernote();
										});
									</script>
								</div>
							</div>

						</div>
					</div>
					<div class="col-xl-4 col-lg-5 col-12">
						<div class="card panel mb-3">
							<div class="card-header">
								<b>Publish Status & Visibility</b>
							</div>
							<div class="card-body">
								<div class="mb-3">
									<label for="exampleInputPassword1" class="form-label">Parent Category</label>
									<select name="" class="form-control" id="">
										<option value="Active" selected>Active</option>
										<option value="Draft">Draft</option>
									</select>
								</div>
								<div class="mb-3">
									<label for="exampleInputPassword1" class="form-label">Status</label>
									<select name="" class="form-control" id="">
										<option value="Active" selected>Active</option>
										<option value="Draft">Draft</option>
									</select>
								</div>
								<div class="mb-3">
									<label for="exampleInputPassword1" class="form-label">Visibility</label>
									<select name="" class="form-control" id="">
										<option value="Active" selected>Public</option>
										<option value="Draft">Hidden</option>
									</select>
								</div>
							</div>
						</div>

						<!--                         
                        <div class="card panel mb-3">
                            <div class="card-header"></div>
                            <div class="card-body"></div>

                        </div> -->
					</div>
					<div class="col-12">
						<button type="reset" class="btn btn-secondary">Discard</button>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</div>
			</div>
			</form>
		</section>
	</main>
	<footer>
		<?php $this->load->view('components/dashboard/_footer') ?>
	</footer>
	<?php $this->load->view('components/_common_js') ?>
	<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
	<script>
		Dropzone.options.fileDrop = { // camelized version of the `id`
			paramName: "file", // The name that will be used to transfer the file
			maxFilesize: 2, // MB
			accept: function(file, done) {
				if (file.name == "justinbieber.jpg") {
					done("Naha, you don't.");
				} else {
					done();
				}
			}
		};
	</script>
</body>

</html>
