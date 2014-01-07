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
		
        <form align="center" action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="post">
                <textarea id="commentbox" name="proverbs" ></textarea></br>
                <input type="submit" name="submit"  value="Add Proverb" />
        </form>
		
		
<?php
        if (isset($_POST['submit']))
        {
				$file = 'proverbs.txt';
				$current = file_get_contents($file);
				$current .= $_POST['proverbs'];
				file_put_contents($file, $current."\n");
        }
?>


		<h2>A randomly displayed Chinese proverb read from a text file</h2>
<?php
        $proverbs = "proverbs.txt";
		$proverbs = file($proverbs);
		$ranNum = rand(0, count($proverbs)-1);		
		echo "<p style='text-align: center;'>$proverbs[$ranNum]</p>";
?>
</body>
</html>