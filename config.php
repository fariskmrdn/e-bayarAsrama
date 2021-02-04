<?php
	$MYSERVER = '127.0.0.1';
	$MYID = 'root';
	$MYPSWD = '';
	$MYDATABASE = 'sistemasrama';
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$connect = mysqli_connect($MYSERVER,$MYID,$MYPSWD,$MYDATABASE) or die ("DATABASE SERVER DOWN!");
	
