<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $title; ?></title>

	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script>
		$( function() {
		    $( "#date" ).datepicker({
		    	dateFormat: "dd-mm-yyyy"
		    });
		} );
	</script>

	<style>
		.container-fluid
		{
			padding: 15px;
		}

		.control-label
		{
			text-align: left !important;
		}

		.form-input
		{
			max-width: 700px;
			margin: 0 auto;
		}

		.btn-form
		{
			text-align: right;
		}
	</style>
</head>
<body>
	
