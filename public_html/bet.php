<?php

Include('connect.php');

//$loggin_user = mysql_real_escape_string($_COOKIE['username']);


//$ip=$_SERVER['REMOTE_ADDR'];
//INET_ATON('127.0.0.1');

//echo 'total'.$totalAccount ;





// luigibrain.epizy.com/bet.php?bet=15:1|100:2|20:2,3,5,6|15:1|100:3,6|25:16,17,19,20|21:RED|19:2NDC&user=1

//luigibrain.epizy.com/bet.php?bet=15:1|100:2|20:2,3,5,6|15:1|100:3,6|25:16,17,19,20|21:RED|19:2NDC&user=1
/*
1ST12
2ND12
3RD12
1STC
2NDC
3RDC 
1STH
2NDH 
EVEN
ODD
RED
BLACK
TOTAL*/


try {
	
$bet = $_GET['bet'];


if (isset($bet) && $bet!='') {


$id_user= $_GET['user'];



if ($result = mysqli_query($mysqli, "SELECT TOTAL FROM USER WHERE ID=$id_user LIMIT 1")) {
  // Fetch one and one row
  $row = mysqli_fetch_row($result);
  
  
  $totalAccount = $row[0];
  
  mysqli_free_result($result);
}else{
	
	printf ("ERROR NO RESULTS ACCOUNT");
}

$totalAmount=0;
$columnsString ='';
$columnsStringSpecial='';

$valuesBets='';
$valuesBetsSpecial='';

$columns = array_fill(0, 36, 0);
if ($totalAccount>0){

	
	
	
	$betArray=explode("|",$bet,200);


	
	
	foreach ($betArray as $value) {
   
		$amountLine=explode(":",$value,2);


        if (count($amountLine)==2){		
		$amount=$amountLine[0];
		
		

		//echo "===" . $amountLine[0] . "/".  $amountLine[1];
		$position = $amountLine[1];
		//$line=explode(',', $amountLine[1], 2);
		
		//$numbets=count($line);
		$totalAmount+=(int)$amount;
		//$amount=$amount/$numbets;
		
		
	
	
		//foreach ($line as $position) {
			
			if (!empty($position)) {
				if (is_numeric($position)) {
					$columns[$position]+=$amount;
				} else {

					$columnsStringSpecial.="`$position`,";
					$valuesBetsSpecial.=$amount.',';
				}
			}
					
		//}
		}

	}
	
	
	
	foreach ($columns as $key=>$valueColumn) {
			$columnsString.="`$key`,";
			$valuesBets	.=$valueColumn.',';
			
		}

	if ($totalAccount>=$totalAmount){

		mysqli_query($mysqli,"UPDATE USER SET TOTAL = TOTAL - $totalAmount WHERE ID=$id_user") or die(mysqli_error());
	
	
	    $aquery="INSERT INTO BET (ID_USER, $columnsString $columnsStringSpecial TOTAL) VALUES ($id_user,$valuesBets $valuesBetsSpecial $totalAmount)";
        //echo $aquery;
		mysqli_query($mysqli,$aquery); 

		
		echo json_encode(array('ok',mysqli_insert_id($mysqli)));
		
	}else{
		echo json_encode(array('No enough credit',$totalAccount));

	}


}else{
	echo json_encode(array('No enough credit',0));
}
	
}else{

	echo json_encode(array('No bet placed'));
}





} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}



$mysqli -> close();
?> 

