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

	$result = mysql_query("select * from  users where  name=$_POST[userName] and  password=$md5Pwd");

	print_r($result);

	mysql_close($con);

?>