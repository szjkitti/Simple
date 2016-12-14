<?
				
	function query($querySTR){
		$conID = mysqli_connect('localhost', 'root', '', 'zsolt_site');
		 if (!isset($conID))
		 {
		  echo "Hiba a kapcsolódás során. Hibaüzenet:".mysqli_error($conID);
		 }	 
		 mysqli_query($conID, "SET NAMES 'utf8'");
		 
		 $temp_result = mysqli_query($conID, $querySTR) or die ("Hiba a végrehajtás során...<BR>".$querySTR); 
		 //print_r($result);
		 mysqli_close($conID);
		 return $temp_result;
	}
				
		
?>
