<?php

	session_start();
	$dbHost='localhost';
	$dbName = 'artzone';
	$dbUsername = 'root';
	$dbPassword = '';
	$dbc = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
