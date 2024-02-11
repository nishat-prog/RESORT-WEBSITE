<?php
$prices=array('Single sized'=>12000,'Double sized'=>13000,'Twin Room'=>14000,'Quad Room'=>15000,'King/Queen Sized Room'=>16000,'Executive Suite'=>17000,'Mini Suite'=>18000,'Presidential Suite'=>19000);
$option=$_GET['rooms'];
foreach($prices as $key=>$value){
	if($key==$option)
		 echo "The price for ".$key ." is ".$value;
}

?>