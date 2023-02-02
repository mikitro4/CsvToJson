
<html>


<head>
 <title> Lettura scrittura file CSV</title>
</head>



<body>

<form action="leggiScriviFileCSV.php" method="post">
	<label> leggi </label>
	<input type="radio" value="leggi" name="s">
	<br/>
	<label> scrivi </label>
	<input type="radio" value="scrivi" name="s">
	<br/>
	<input type="submit" value="seleziona" name="scegli">

</form>

<?php

if (isset($_POST['scegli']))
{
	if ($_POST['s']=='leggi')
	{
		if (($fp = fopen("doc.csv", "r")) == null) 
			die("errore apertura file in lettura");
			
		while (($rowArr = fgetcsv($fp)) !== FALSE) {
        
		
      
	/*	while (($rowStr=fgets($fp))!== FALSE	)
		{
			
			$rowArr=explode(',',$rowStr);*/
			echo "<br/>";
      
			for ($i=0; $i < count($rowArr); $i++) {
				echo $rowArr[$i] . "<br/>";
				}
		}
	
    
	}
	
	if ($_POST['s']=='scrivi')
	{
		$testArr2D= [
						["andreas","vincis",18],
						["franco","\\pischedda",12],
						["lino","banfi",64]
					];
		
		if (($fp = fopen("doc.csv", "w")) == null) 
			die("errore apertura file in scrittura");
			
		foreach($testArr2D as $row)
			fputcsv($fp,$row);
      
		
      
	
		/*foreach($testArr2D as $row)
			{
				$rowStr=implode(",",$row);
				echo $rowStr."<br />";
				fputs($fp,$rowStr."\r\n");	
			} */
    fclose($fp);
	}
}
?>

</body>


</html>

