<?php
	
	
	$con = mysql_connect("localhost","root","root");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	mysql_select_db("blog", $con);

	//解决显示???

	mysql_query('set names utf8');
	
	$result = mysql_query("SELECT * FROM posts");

	//返回数组对象
	while($row = mysql_fetch_array($result,MYSQL_ASSOC))
	{
	      $arr[]=$row;
	}
	print_r(json_encode($arr));

	mysql_close($con);

?>

