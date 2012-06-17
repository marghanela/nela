<?php

function format_duit($a){
	return "Rp ".number_format("$a",2,",",".")."<br/>";
}
function FtoC($a){
	$c=($a-32)/1.8;
	return number_format($c,2)." °C"."<br/>";
}
$xml = simplexml_load_file("http://arif.staff.amikom.ac.id/service.php");

foreach($xml->children() as $child){
	if($child->attributes()=='weather'){
		$a=$child->attributes()->type;
		print "<table border ='1'>";
		print "<td>"."weather"."<td/>";
		print "<td>"."humidity"."<td/>";
		print "<td>"."wind_condition"."<td/>";
		print "<td>"."condition"."<td/>";
		print "<td>"."icon"."<td/>";
		print "<td>"."temp_c"."<td/>";
		foreach($child->children() as $child){
			
			print "<tr>";
			$b=$child->attributes()->name;
			print "<td>".$child->attributes()."<td/>";
			foreach($child->children() as $child){
				print "<td>";
				if($child->getName()=='icon'){ 
					echo '<img src="'."http://arif.staff.amikom.ac.id/".$child.'" height="60" width="60" /><br/>';
				}else if ($child->getName()=='temp_f'){
					echo FtoC($child);
				}else if ($child->getName()=='beli' or $child->getName()=='jual'){
					echo format_duit($child);
				}else {
					echo $child."<br/>";
				}
				print "<td/>";
			}
			print "<tr/>";
		} 
	}
	print "</table>";
}
?>

