 <?php
	$file = fopen("data.csv","r");
	while(! feof($file))
	  {
		$everything = fgetcsv($file);
		print_r($everything);
	  }
	fclose($file);
?> 