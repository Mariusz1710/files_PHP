<?php

//$array = new array();
$str = "";
$green = false;

for($i=0;$i<4;$i++)
{
	$str = "";

	for($j=0;$j<3;$j++)
	{
		for($k=0;$k<10;$k++)
		{
			$str = "";
			if($i==0) $str.= "ala_";
			else if($i==1) $str.= "ela_";
			else if($i==2) $str.= "ola_";
			else if($i==3) $str.= "stanislaw_";
		
			if($j==0) $str.= "red_";
			else if($j==1) $str.= "blue_";
			else if($j==2) 
			{
				$str2 = $str;
				$str.= "green_";
				$str2.= "GrEeN_";

				$str.= $k;
				$str2.= $k;

				echo $str."<br>";
				echo $str2."<br>";
				continue;

			}
	

			$str.= $k;

			echo $str."<br>";
		}

	}


}