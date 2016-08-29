<?php
	
	
	$con = mysql_connect("localhost","root","root");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	mysql_select_db("blog", $con);

	//解决显示???

	mysql_query('set names utf8');

	$md5Pwd = md5($_POST[passwordRel]);

	$result = mysql_query("insert into users(name, password) values ('$_POST[userName]','$md5Pwd')");

	//返回数组对象
	while($row = mysql_fetch_array($result,MYSQL_ASSOC))
	{
	      $arr[]=$row;
	}
	print_r(json_encode($arr));

	mysql_close($con);

?>
