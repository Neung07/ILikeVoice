<?
//============= connect database
		$conn = Ora_Logon("funvoice@ivrdb","funvoice123");
		$curs = Ora_open($conn);		
		Ora_commitoff($conn);
		//echo "<BR>DEBUG OK";
?>