<?php
	
	
	$pdo = new PDO("mysql:host=localhost",'root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));

	// create database 'railway'

	$q = "create database if not exists railway collate utf8_general_ci;";
	$pdo->exec($q);

	

	// create table 'trains'
	$pdo = new PDO("mysql:host=localhost;dbname=railway",'root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));

	$q = "create table if not exists trains(
		trainNum int not null,
		leaveStation varchar(30) not null,
		arriveStation varchar(30) not null,
        leaveTime time not null,
		arriveTime time not null,
		period time not null,
		stand int not null,
        class varchar(40) not null
	);";
	$pdo->exec($q);

	// insert data into 'details' table

	$q = "insert into `trains` (`trainNum`, `leaveStation`, `arriveStation`, `leaveTime`, `arriveTime`, `period`, `class`, `stand`) VALUES 
	      ('12', 'sohag', 'assuit', '01:00:00', '03:00:00', '02:00:00', 'مكيف', '2'),
	      ('15', 'cairo', 'assuit', '01:00:00', '08:00:00', '07:00:00', 'مميز', '7'),
          ('90', 'assuit', 'cairo', '12:30:00', '18:45:00', '07:45:00', 'VIP', '7'),
          ('64', 'sohag', 'assuit', '21:00:00', '24:00:00', '03:00:00', 'مميز', '2'),
          ('778', 'assuit', 'sohag', '14:00:00', '16:30:00', '02:30:00', 'مميز', '2')
	      ;";
	$pdo->exec($q);
