<?php
//test
//branchtest
//bendimerge
//masterchange
define('test',100);
$tiredqty=$_POST['tireqty'];
$oilqty=$_POST['oilqty'];
$sparkqty=$_POST['sparkqty'];
$find=$_POST['find'];
?>
<html>
	<head>
		<title>Bobisdfdsf's Auto Parts </title>
	</head>
	<body>
		<h1>Bob's  Auto Parts</h1>
		<h2>Order Results</h2>
		<?php
			echo $tiredqty. "tires";
			echo "<p>Order Processed at ". date('H:i, jS F Y'). "</p>";	
			echo <<<ENDD
				wo shi    zhon
				wo df
ENDD;
			echo test;
			echo "<pre>".`ls -l`."</pre>";
			if($find=="a")
				echo "you select a";
			elseif($find=="b")
				echo "you select b";
			elseif($find=="c")
				echo "you select c";
			else
				echo "no  you are wrong!!";
			var_dump($_SERVER);
		?>
	</body>
</html>
