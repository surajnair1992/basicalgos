<html>
<head>
<meta name="txtweb-appkey" content="c5c5ee3f-d717-40d1-97c4-293f6a007bdd"/>;
</head>
<body>
<?php
$msg=$_GET['txtweb-message'];
$arrayno=explode(',',$msg);
if(isset ($arrayno[1]))
{
switch ($arrayno[1])
{
case 1: 
	$url="http://www.w3schools.com/php/php_intro.asp";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<h2>');
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	$first=strpos($cout,'<h2>',$last);
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h2>',$last);
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 2: 
	$url="http://www.w3schools.com/php/php_syntax.asp";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<h2>');
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	$first=strpos($cout,'<h2>',$last);
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h2>',$last);
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
	break;
case 3: $url="http://www.w3schools.com/php/php_variables.asp";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<h2>');
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h2>',$last);
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h2>',$last);
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 4: $url="http://www.w3schools.com/php/php_string.asp";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<h2>');
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h2>',$last);
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h2>',$last);
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h2>',$last);
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 5: $url="http://www.w3schools.com/php/php_operators.asp";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<h2>');
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 6: $url="http://www.w3schools.com/php/php_if_else.asp";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<h2>');
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	$first=strpos($cout,'<h2>',$last);
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	$first=strpos($cout,'<h2>',$last);
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 7: $url="http://www.w3schools.com/php/php_switch.asp";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<h2>');
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 8: $url="http://www.w3schools.com/php/php_arrays.asp";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<h2>');
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 9: $url="http://www.w3schools.com/php/php_looping.asp";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<h2>');
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	$first=strpos($cout,'<h2>',$last);
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 10: $url="http://www.w3schools.com/php/php_looping_for.asp";
	 $cout=file_get_contents("$url");
	$first=strpos($cout,'<h2>');
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	 break;
case 11: $url="http://www.w3schools.com/php/php_functions.asp";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<h2>');
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	$first=strpos($cout,'<h2>',$last);
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	$first=strpos($cout,'<h2>',$last);
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 12: $url="http://www.w3schools.com/php/php_forms.asp";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<h2>');
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 13: $url="http://www.w3schools.com/php/php_get.asp";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<h2>');
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 14: $url="http://www.w3schools.com/php/php_post.asp";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<h2>');
	$last=strpos($cout,'<h2>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
default : echo "invalid number";
}
}
else 
{
echo "PHPBASICS";
echo "<br>";
echo "1.intro";
echo "<br>";
echo "2.syntax";
echo "<br>";
echo "3.variables";
echo "<br>";
echo "4.string";
echo "<br>";
echo "5.operators";
echo "<br>";
echo "6.ifelse";
echo "<br>";
echo "7.switch";
echo "<br>";
echo "8.arrays";
echo "<br>";
echo "9.whileloops";
echo "<br>";
echo "10.forloops";
echo "<br>";
echo "11.functions";
echo "<br>";
echo "12.forms";
echo "<br>";
echo "13.get";
echo "<br>";
echo "14.post";
echo "<br>";
echo "<br>";
echo "reply php followed by comma with any number";
}
?>
</body>
</html>
