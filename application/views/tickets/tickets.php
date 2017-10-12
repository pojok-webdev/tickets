<!DOCTYPE html>
<html lang="en">
<link rel='stylesheet' href='/assets/css/padi.autocomplete.css' />
<?php $this->load->view("commons/header");?>
<body>
	<?php $this->load->view('commons/menuheader');?>
	<div class="container-fluid-full">
	<div class="row-fluid">
		<?php $this->load->view('commons/sidemenu');?>
		<!-- start: Content -->
		<div id="content" class="span10">
			<?php $this->load->view('commons/breadcrumb');?>
		<div class="row-fluid sortable">		
			<div class="box span12">
				<div class="box-header" data-original-title>
					<h2><i class="halflings-icon user"></i><span class="break"></span><?php echo $title;?></h2>
					<div class="box-icon">
						<a class="btn-close" id="btn-add"><i class="halflings-icon plus"></i></a>
					</div>
				</div>
				<div class="box-content">
					<table class="table table-striped table-bordered bootstrap-datatable datatable" id="tickets">
						<thead>
							<tr>
								<th width='5%'>Kode</th>
								<th width='35%'>Nama</th>
								<th width='5%'>Layanan</th>
								<th width='5%'>Status</th>
								<th>Start</th>
								<th width='5%'>Durasi</th>
								<th width='5%'>Tanggal Request</th>
								<th width='5%'>Pelapor</th>
								<th width='5%'>TS</th>
								<th width='30%'>Actions</th>
							</tr>
						</thead>   
						<tbody>
							<?php foreach($objs as $obj){?>
						<tr>
							<td><?php echo $obj->kdticket;?></td>
							<td class="center clientname"><?php echo $obj->clientname;?></td>
							<td class="center"><?php echo $obj->service;?></td>
							<td class="center">
								<span class="label label-success <?php echo $obj->statuscolor;?>"><?php echo $obj->status;?></span>
							</td>
							<td class='start'><?php echo $obj->ticketstart;?></td>
							<td class='duration' start='<?php echo $obj->ticketstart;?>'></td>
							<td class="center"><?php echo $obj->create_date;?></td>
							<td class="center"><?php echo $obj->reporter;?></td>
							<td class="center">
								<span><?php echo $obj->createuser;?></span>
							</td>
							<td class="center">
								<a class="btn btn-success" href="#">
									<i class="halflings-icon white zoom-in"></i>  
								</a>
								<a class="btn btn-info" href="#">
									<i class="halflings-icon white edit"></i>  
								</a>
								<a class="btn btn-danger" href="#">
									<i class="halflings-icon white trash"></i> 
								</a>
							</td>
						</tr>
							<?php }?>
						</tbody>
					</table>            
				</div>
			</div><!--/span-->
		</div><!--/row-->
	</div><!--/.fluid-container-->
		<!-- end: Content -->
	</div><!--/#content.span10-->
	</div><!--/fluid-row-->
	<?php $this->load->view('tickets/modals');?>
	<?php $this->load->view('commons/footer');?>
	<?php $this->load->view("commons/js.php");?>
	<script type='text/javascript' src='/assets/js/padi.autocomplete.js' ></script>
	<script type='text/javascript' src='/js/padi.commons.js'></script>
	<script type='text/javascript' src='/js/tickets/tickets.js'></script>
</body>
</html>
