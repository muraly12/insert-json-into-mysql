<?php
$string = file_get_contents("results.json");
$data = json_decode($string,true);
//print_r($data);
$con = mysqli_connect('localhost','root','','test');
//echo $data[0]['sno'];
foreach ($data as $key => $val)
{
    $sno = $val['sno'];
	$name = $val['name'];
	$course = $val['course'];
	$sql = "insert into students2(sno,name,course) values('".$sno."','".$name."','".$course."')";
	$result = mysqli_query($con,$sql);
	if($result)
		echo "Inserted";
	else 
		echo "Not Inserted";
}
?>