<head>
  <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/favicon.png">


<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<!-- CSS Files -->
<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?=base_url()?>assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
</head>

<body>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table">
        <thead class=" text-primary">

<thead>
  <tbody >
  <tr>
    <td>No</td>
    <td>by</td>
    <td>to</td>
    <td>text</td>
    <td>date</td>
    <td>creaeted_by</td>
    <td>edited_by</td>
    <td>created date</td>
  </tbody>
  </tr>
</thead>
<?php
		$no = 1;

		foreach($result_pesan as $k => $row){
		?>
 <tr>
   <td><?php echo $no++ ?></td>
   <td><?php echo $row->pesan_by; ?></td>
   <td><?php echo $row->pesan_to; ?></td>
   <td><?php echo $row->deskripsi; ?></td>
   <td><?php echo $row->date; ?></td>
    <td><?php echo $row->created_by; ?></td>
    <td><?php echo $row->modified_by; ?></td>
    <td><?php echo $row->created_date; ?></td>
 </tr>
 <?php } ?>
</table>


<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>




</body>