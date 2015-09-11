<?php
$con = mysql_connect("[host]", "[username]","[password]");

if (!$con) {
	die("Error: ".mysql_error());
}

mysql_select_db("[databasename]", $con);
	
$result = mysql_query("SELECT * FROM [databasename].[tablename]");
?>
<html>
	<head>
		<title>[Your title]</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<script src="includes/media/js/jquery.js" type="text/javascript"></script>
		<script src="includes/media/js/jquery.dataTables.js" type="text/javascript"></script>
		<style type="text/css">
			<!--@import "includes/media/css/jquery.dataTables.css";-->
			@import "includes/media/css/dataTables.jqueryui.css";
		</style>
		
		<style>
		*{
			font-family: calibri;
		}
		</style>
		
		<script type="text/javascript" charset="utf-8">
		$(document).ready( function () {
		$('#[tableid]').dataTable({
			"sPaginationType":"full_numbers",
			"aaSorting":[[3, "desc"]],
			"bJQueryUI":true,
			"aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
			"iDisplayLength": 25,
			"autoWidth": false
		});
		} );
		</script>
	</head>
	<body>
		<div>
			<table id="[tableid]" class="display">
				<thead>
					<tr>
						<th align="left">Client</th>
						<th align="left">Application</th>
						<th align="left">Status</th>
						<th align="left">Date</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while ($row = mysql_fetch_array($result)){
						?>
					<tr>
						<td align="left"><?=$row['client']?></td>
						<td><?=$row['application']?></td>
						<td><?=$row['status']?></td>
						<td><?=$row['date']?></td>
					</tr>
					<?php 
					}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>
