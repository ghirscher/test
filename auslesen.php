<?php

$xml3 = simplexml_load_file('test3.xml');

var_dump($xml3);

print "<br><br>";

print "<br>Einzeln Artikel auslesen: ".$xml3->Preis[0]["Artikel"];
print "<br>Einzeln Artikel auslesen: ".$xml3->Preis[1]["Artikel"];
print "<br>Einzeln Artikel auslesen: ".$xml3->Preis[2]["Artikel"];
print "<br>Einzeln Artikel auslesen: ".$xml3->Preis[0]["Artikel"];

foreach ($xml3->Preis AS $artikel) {
	print "<br>Mein Artikel: ".$artikel["Artikel"]." mit Preisen: ".$artikel["Preis"]." und";
	print " - Status ".$artikel["Status"];
}

print "<br><br>------------------------<br><br>";


$xml2 = simplexml_load_file('test2.xml');

var_dump($xml2);

print "<br>STATUS: ".$xml2["Status"];

print "<br><br>------------------------<br><br>";

if (file_exists('test.xml')) {
	
	$xml = simplexml_load_file('test.xml');

	foreach($xml->product AS $product) print "<br>Productnumbers: ".$product->belboonproductnumber;

}
else exit('Konnte Datei nicht laden.');

?>