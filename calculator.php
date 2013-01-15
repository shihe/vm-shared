<html>
<head><title>Calculator</title></head>
<body>
<h1>Calculator</h1>
<form action="./calculator.php" method="get">
Input: <input type="text" name="in">
<input type="submit">
</form>

<?php
function calculator($in)
{
	// Check if input string is valid
	$pat = "/^[+\-]?([0-9.]+[+\-*\/]([+\-]?))*([0-9.]+)$/";
	$x = preg_match($pat, $in, $p_in);
	if($x == 0) 
	{
		echo "Invalid input " . $in . "<br>";
		return;
	}
	$proc_in = $p_in[0];
	$x = @eval('$res = '.$proc_in.';');
	if($in != "")
		echo $in . " = " . $res . "<br>";
}
if($_GET["in"])
	calculator($_GET["in"]);

/*$isDigit = true;
$pos = 0;
$ops_pos = 0;
for($i=0;$i<strlen($in);$i++)
{
if($isDigit == true)
{
if($in[$i] < '0')
{
	echo $in[$i] . " is a char. SWITCH! ";
	$ops[$ops_pos] = substr($in, $pos, $i-$pos);
	if($ops_pos == 0 && $ops[$ops_pos] == "") $ops[$ops_pos] = 0;
	echo $ops[$ops_pos] . "<br>";
	$isDigit = false;
	$pos = $i;
	$ops_pos++;
}
else
	echo $in[$i] . " is a digit.<br>";
}
else
{
if($in[$i] < '0')
	echo $in[$i] . " is a char.<br>";
else
{
	echo $in[$i] . " is a digit. SWITCH! ";
	$ops[$ops_pos] = substr($in, $pos, $i-$pos);
	echo $ops[$ops_pos] . "<br>";
	$isDigit = true;
	$pos = $i;
	$ops_pos++;
}
}
}
$ops[$ops_pos] = substr($in, $pos);


if($ops[$i] == '*')
{
echo $ops[$i-1]*$ops[$i+1];
}

echo($in). "<br>";
print_r($ops);

// Process 3 times; decimals, mult/div, add/sub
$pos = 0;
$p_pos = 0;
while($pos < sizeof($ops))
{
if($ops[$pos] != '.')
{
	$proc_ops[$p_pos] = $ops[$pos];
	$p_pos++;
	$pos++;
}
else
{
	$proc_ops[$p_pos-1] = $ops[$pos-1].".".$ops[$pos+1];	
	echo $proc_ops[$p_pos-1] . " is a decimal <br>";
	$pos+=2;
}

}

print_r($proc_ops);

*/

/*$dcount = 0;
	for(int $i=0;$i<strlen($proc_in), $i++)
	{
		if($proc_in[$i] == '.')
		{
			if($dcount > 0)
			{
				echo "Invalid input " . $in . "<br>";
				return;			
			}
			$dcount++;
		}
		else if($proc_in[$i] == '+')
		{
			if(!((is_numeric($proc_in[$i-1]) || $proc_in[$i-1] && is_numeric($proc_in[$i+1]) ))
			$dcount = 0;
		}
		else if($proc_in[$i] == '-')
		{
			$dcount = 0;
		}
		else if($proc_in[$i] == '*')
		{
			$dcount = 0;
		}
		else if($proc_in[$i] == '/')
		{
			$dcount = 0;
		}
		else
		{
			continue;
		}
	}*/

?>

</body>
</html>