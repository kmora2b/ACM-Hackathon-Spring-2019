<?php
    include("base.php"); 
?>


<table class='log'>
	<tr class='log-header'>
		
		<th>TITLE</th>
		<th>DATE</th>
		<th>LOCATION</th>
		<th># OF HOURS</th>
	</tr>
	

	<?php
		$l = array("Franklin Mountains", "2018-05-20", "Trans Mountains","23");
		echo"<tr>
			<th>".$l[0]."</th>
			<th>".$l[1]."</th>
			<th>".$l[2]."</th>
			<th>".$l[3]."</th>
		
		</tr>";
	?>
	
</table>


