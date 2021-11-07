<?php 
require './class/db.php';
require './class/model.php';
require './class/tables.php';
require './class/system.php';
require './includes/header.php';
?>

<div class="container mt-3">

	<!-- start a link action -->
	<h5>a link action</h5>
	<a class='btn btn-primary action' url='system.php'
	data = '{"action":"link","id":"$id"}' href='#' >a link</a>
	<!-- end a link action -->

	<hr>

	<!-- start modal show -->
	<h5>Modal Show</h5>
	<a class='btn btn-primary' onclick="showModal('system.php',{action:'modal_show',id:'$id'})" href='#' >Modal Show</a>
	<!-- end modal show -->

	<hr>

	<!-- start a open json modal -->
	<h5>json Modal</h5>
	<a class='btn btn-primary action' url='system.php'
	data = '{"action":"json_modal","id":"$id"}' href='#' >json modal</a>
	<!-- end a open json modal -->

	<hr>

	<!-- start data table -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<!-- end data table -->
	
	<!-- start section -->
	<section class="py-5">
		<div class="container-fluid">
			<div class="row">

				<div class="col-md-12 text-right mb-3">
					<a href="#" class="btn btn-success float-right rounded" onclick="showModal('system.php',{action:'system_form', id:'0'})">
						<i class="fa fa-plus" aria-hidden="true"></i> Add Test
					</a>
				</div>

				<div class="col-md-12">
					<div class="border shadow rounded p-4">
						<h4 class="mb-4">Test</h4>
						<?php systemClass::test_table();?>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- end section -->
	<hr>
</div>


<?php require './includes/footer.php';?>

