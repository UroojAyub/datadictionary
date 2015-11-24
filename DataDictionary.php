<html>
<head>
<meta charset="utf-8" />
<style>
body{
text-align:center;
background-color:#C2D6F2;
}

</style>
</head>
<body>
<?php



//$str = file_get_contents('dictionary.json');
//$json = json_decode($str, true); // decode the JSON into an associative array
//print_r ($json);
//print $json["DEFIGURE"];



?>
<h1>DATA DICTIONARY</h1>
<form  type="submit" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="text" id="word" name="word">
<input type="submit" name="submit">
<br><br>
<textarea rows="10" cols="50">
		
<?php
if(isset($_POST['submit'])) 
{
$word = $_POST['word'];   
$word= strtoupper($word);

$str = file_get_contents('dictionary.json');
$json = json_decode($str, true); 

$iterator = new RecursiveArrayIterator($json);

    


while ($iterator->valid()) {

        
        foreach ($iterator as $key => $value) {
          if(0===strpos($key,$word))
		  
		  { 
		   echo $key . ' : ' . $value . "<br>";
			}
        }
    

    $iterator->next();
}
}
?>
</textarea>
</form>

</body>
</html>
