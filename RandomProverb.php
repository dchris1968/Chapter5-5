<!DOCTYPE HTML5>
<html>

<head>
	<title>Ancient Chinese Proverbs</title>
	<meta charset="utf-8" />
	<style>
		h1{
			text-align:center;
		}
		h2{
			text-align:center;
		}
	</style>
</head>

<body>

		<h1>Ancient Chinese Proverbs</h1>
		<h2>A randomly displayed Chinese proverb read from a text file</h2>
		
<?php
        $proverbs = "proverbs.txt";
		$proverbs = file($proverbs);
		$ranNum = rand(0, count($proverbs)-1);		
		echo "<p style='text-align: center;'>$proverbs[$ranNum]</p>";
?>

</body>
</html>