<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="classi.inc.css">
	<script type = "text/javascript" src = "jquery.js"></script>
	<script type="text/javascript" src="jquery.tablesorter.min.js"></script>
	<script type = "text/javascript">
		$(document).ready(function(){
			//tablesorter.com/
			$("table").tablesorter({});
		})
	</script>
</head>
<body>
<?php
	include("classi.inc.php");
	
	$tabella1 = new tabella('dati.json');
	
	$tabella1->visualizza("tre");
?>
</body>
<html>