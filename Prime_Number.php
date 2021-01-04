# PHP

<?php

if(isset($_POST["iValue"]))
{
	$iValue=$_POST['iValue'];
class Demo{	

function Prime($iValue)
{
	$iAns=0;
	$i=0;
	$iCnt=0;
	for($i=1;$i<=$iValue;$i++)
	{
		$iAns=$iValue%$i;

		if($iAns==0)
		{
			$iCnt++;
		}
	}
	return $iCnt;
}
}

$obj=new Demo;
$iRet=$obj->Prime($iValue);

if($iRet==2)
{
	echo "Number is Prime."."</br>";
}
else
{
	echo "Number is not prime";
}
}
?>


<html>
<body>
	<form method="post">
		Enter number:<input type="textbox" name="iValue"/>
		<input type="submit"/>
	</form>
</body>
</html>
