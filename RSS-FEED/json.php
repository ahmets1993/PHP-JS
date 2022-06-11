<?php include "header.php"; ?>

´<div class="table1 container">
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Uhrzeit</th>
			<th>Blutdruck Diastolisch</th>
			<th>Blutdruck Systolisch</th>
			<th>Puls</th>
			<th>B.D Maßeinheit</th>
			<th>P. Maßeinheit</th>
		</tr>
		<?php  
		$json = file_get_contents("http://localhost:8080/rest/items/vital_data/history");
		$json =json_decode($json);
		foreach ($json as $entry) {
			echo "<tr>";
			foreach ($entry as $attr) {
				echo "<td>$attr</td>";
			}
			echo "</tr>";
		}
		?>
	</table>
</div>
</body>
</html>

