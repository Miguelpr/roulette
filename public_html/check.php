<?php

Include('connect.php');


$idbet = $_GET['idbet'];

//in the last 10 sec
$id_spin = mysql_result(mysql_query("SELECT ID FROM SPIN WHERE TIME >= now() - interval 10 second LIMIT 1"),0);

if(!$id_spin){


		
		$result = mysql_query("SELECT * FROM BET WHERE ID_SPIN IS NULL"); 
		

		if (mysql_num_rows($result)>0){
			
		$numberWin=rand(0,36);
		mysql_query("INSERT INTO SPIN (RESULT) VALUES ($numberWin)"); 
		
		$id_spin=mysql_insert_id();
		
		
		while ($row = mysql_fetch_array($result)) {
			$totalwin=0;
			
			$id_bet= $row['ID'];  
			$id_user= $row['ID_USER'];  
			$win = $row["$numberWin"]*36; 
			if ($numberWin>0){

				if($numberWin<=12){
					$totalwin+=$row['1ST12']*3; 
				}
				if($numberWin>12 && $numberWin<=24){
					$totalwin+=$row['2ND12']*3; 
				}
				if($numberWin>24 && $numberWin<=36){
					$totalwin+=$row['3RD12']*3; 
				}
				if($numberWin==1 || $numberWin==4 ||$numberWin==7 ||$numberWin==10 ||$numberWin==13 ||$numberWin==16 ||$numberWin==19 ||$numberWin==22 ||$numberWin==25 ||$numberWin==28 ||$numberWin==31 || $numberWin==34){
					$totalwin+=$row['1STC']*3; 
				}
				if($numberWin==2 || $numberWin==5 ||$numberWin==8 ||$numberWin==11 ||$numberWin==14 ||$numberWin==17 ||$numberWin==20 ||$numberWin==23 ||$numberWin==26 ||$numberWin==29 ||$numberWin==32 || $numberWin==35){			
				$totalwin+=$row['2NDC']*3; 
				}
				if($numberWin==3 || $numberWin==6 ||$numberWin==9 ||$numberWin==12 ||$numberWin==15 ||$numberWin==18 ||$numberWin==21 ||$numberWin==24 ||$numberWin==27 ||$numberWin==30 ||$numberWin==33 || $numberWin==36){
				$totalwin+=$row['3RDC']*3; 
				}
				if($numberWin<=18){
				$totalwin+=$row['1STH']*2; 
				}
				if($numberWin>18 && $numberWin<=36){
				$totalwin+=$row['2NDH']*2; 
				}
				if ($numberWin % 2 == 0) {
					$totalwin+=$row['EVEN']*2; 
				}else{
					$totalwin+=$row['ODD']*2; 
				}
				if($numberWin==1 || $numberWin==3 ||$numberWin==5 ||$numberWin==7 ||$numberWin==9 ||$numberWin==12 ||$numberWin==14 ||$numberWin==16 ||$numberWin==18 ||$numberWin==19 ||$numberWin==21 || $numberWin==23 || $numberWin==25 ||$numberWin==27 ||$numberWin==30 || $numberWin==32 || $numberWin==34 || $numberWin==36){
					$totalwin+=$row['RED']*2; 
				}else{

					$totalwin+=$row['BLACK']*2; 
				}
			
			}
			if($win!=null){
				
				$totalwin+=$win;
			}
			
			
			mysql_query("UPDATE BET SET `WIN`=$totalwin,`ID_SPIN`=$id_spin WHERE ID=$id_bet") or die(mysql_error());


			mysql_query("UPDATE USER SET TOTAL=TOTAL+$totalwin WHERE `ID`=$id_user") or die(mysql_error());
			
			/*$total = mysql_result(mysql_query("SELECT TOTAL FROM USER WHERE `ID`=$id_user"),0);

			
			
			echo json_encode(array($numberWin, $totalwin, $total));*/
			
		} 
		
		}
		
		
		
		
		
		

		
	
}
		
		
		if ($arrayBet = mysql_fetch_array(mysql_query("SELECT ID_USER, ID_SPIN, WIN FROM BET WHERE ID=$idbet AND ID_SPIN IS NOT NULL"),0)){
			$idUserSelect=$arrayBet['ID_USER'];
			$idSpinSelect=$arrayBet['ID_SPIN'];
			$winSelect=$arrayBet['WIN'];
			
			if($totalSelect= mysql_result(mysql_query("SELECT TOTAL FROM USER WHERE ID=$idUserSelect"),0)){
				
				if($resultSelect= mysql_result(mysql_query("SELECT RESULT FROM SPIN WHERE ID=$idSpinSelect"),0)){
					echo json_encode(array($resultSelect, $winSelect, $totalSelect));
				
				
				}
				
			}
			
			
		}else{
			
			
			echo json_encode(array('no resuelto'));
		}
			

			
			






//$conn->close();
mysql_close($link);
?> 

