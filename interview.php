

<?php
$json_data=array(); 

$data_first = file_get_contents("interview.json");
$data_first = json_decode($data_first, true);
foreach ($data_first as $row) {
	// echo "<span>".$row["district"]." ".$row["number"]."</span><br>";
	$json_array['home_district']=$row['district'];  
	$json_array['farmers']=$row["number"]; 

	array_push($json_data,$json_array);
}
echo $data = json_encode($json_data);
?>