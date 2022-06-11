<?php include "header.php"; ?>

	<h2 class="titel1" align="center">FACHHOCHSCHULE TECHNIKUM WIEN STUDENTEN DATABASE</h2>	
	<div class="infoform container">
		<form action="index.php" method="post">
			<td>MATRIKELNUMMER<input type="text" name="Matrikelnummer" required></td><br/>
			<td>KURZEL<input type="text" name="Kürzel"  required></td><br/>
			<td>VORNAME<input type="text" name="Vorname"  required></td><br/>
			<td>NACHNAME<input type="text" name="Nachname"  required></td><br/>
			<label for="Studiengang">STUDIENGANG</label>
			<select id="Studiengang" name="Studiengang"  required>
				<option></option>
				<option>INFORMATIK</option>
				<option>MECHATRONIK/ROBOTIK</option>
				<option>MASCHINENBAU</option>
			</select>
			<td>SEMESTER<input type="text" name="Semester"  required></td><br/>
			<td>BESUCH<input type="text" name="Besuch"  required></td><br/>
			<input type="submit" name="ADD" value="SEND"  required>
		</form>
	</div>
</div>
</body>
</html>

<?php
//Daten von formular zum XML speichern

if(isset($_REQUEST['ADD'])){
	$xml = new DOMDocument("1.0","UTF-8");
	$xml->load("studenten.xml");

	$rootTag = $xml->getElementsByTagName("document")->item(0);

	$dataTag = $xml->createElement("student");
	$MatrikelnummerTag = $xml->createElement("Matrikelnummer",$_REQUEST['Matrikelnummer']);
	$KürzelTag = $xml->createElement("Kürzel",$_REQUEST['Kürzel']);
	$VornameTag = $xml->createElement("Vorname",$_REQUEST['Vorname']);
	$NachnameTag = $xml->createElement("Nachname",$_REQUEST['Nachname']);
	$StudiengangTag = $xml->createElement("Studiengang",$_REQUEST['Studiengang']);
	$SemesterTag = $xml->createElement("Semester",$_REQUEST['Semester']);
	$BesuchTag = $xml->createElement("Besuch",$_REQUEST['Besuch']);

	$dataTag->appendChild($MatrikelnummerTag);
	$dataTag->appendChild($KürzelTag);
	$dataTag->appendChild($VornameTag);
	$dataTag->appendChild($NachnameTag);
	$dataTag->appendChild($StudiengangTag);
	$dataTag->appendChild($SemesterTag);
	$dataTag->appendChild($BesuchTag);
	$rootTag->appendChild($dataTag);
	$xml->save("studenten.xml");

// XML daten load

	$file = simplexml_load_file("studenten.xml");
	foreach ($file as $key => $value) {
		$Matrikelnummer = $value->Matrikelnummer;
		$Kürzel = $value->Kürzel;
		$Vorname = $value->Vorname;
		$Nachname = $value->Nachname;
		$Studiengang = $value->Studiengang;
		$Semester = $value->Semester;
		$Besuch = $value->Besuch;
	}
}
?>
