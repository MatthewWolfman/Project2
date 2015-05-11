<!DOCTYPE html>
<html lang = "en-US">
 <head>
 <meta charset = "UTF-8">
 <title>Project2.php</title>
 <style type = "text/css">
  table, th, td {border: 1px solid black};
 </style>
 </head>
 <body>
 <p>
 <?php
try {
	$conn= new PDO('mysql:host=localhost;port=3306;dbname=Project2','root', 'root');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$query1=SELECT HD2013A.UNITID, HD2013A.INSTNM, sum(EFTOTLW) FROM HD2013A LEFT JOIN EF2013A ON HD2013A.UNITID=EF2013A.UNITID GROUP BY INSTNM ORDER BY EFTOTLW DESC LIMIT 10;
	
	$query2=SELECT HD2013A.UNITID, HD2013A.INSTNM, sum(EFTOTLM) FROM HD2013A LEFT JOIN EF2013A ON HD2013A.UNITID=EF2013A.UNITID GROUP BY INSTNM ORDER BY EFTOTLM DESC LIMIT 10;
	
	$qury3=SELECT HD2013A.UNITID, HD2013A.INSTNM, F1213.F1H01 FROM HD2013A LEFT JOIN F1213 ON HD2013A.UNITID=EF2013A.UNITID ORDER BY F1H01 DESC LIMIT 10;
	
	$query4=SELECT HD2013A.UNITID, HD2013A.INSTNM, sum(EFALEVEL) FROM HD2013A LEFT JOIN EF2013A ON HD2013A.UNITID=EF2013A.UNITID ORDER GROUP BY UNITID ORDER BY EFALEVEL DESC LIMIT 10;
	
	$query5=SELECT HD2013A.UNITID, HD2013A.INSTNM, F1213.F1B01 FROM HD2013A LEFT JOIN F1213 ON HD2013A.UNITID=EF2013A.UNITID ORDER BY F1B01 DESC LIMIT 10;
	
	$query6=SELECT HD2013A.UNITID, HD2013A.INSTNM, F1213.F1B01 FROM HD2013A LEFT JOIN F1213 ON HD2013A.UNITID=EF2013A.UNITID WHERE F1B01 > 0ORDER BY F1B01 ASC LIMIT 10;
	
	$answer1 = $connect->query($query1);
	$answer2 = $connect->query($query2);
	$answer3 = $connect->query($query3);
	$answer4 = $connect->query($query4);
	$answer5 = $connect->query($query5);
	$answer6 = $connect->query($query6);	
	}
catch(PDOException $e) 
{
   echo 'ERROR: ' . $e->getMessage();
}
 ?>
 </p>
 </body>
</html>