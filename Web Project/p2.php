<!DOCTYPE html5>
<html>
	<head>
		<meta charset="utf-8">
		<title>سكك حديد مصر</title>
		<link rel="stylesheet" href="style2.css">
	</head>
	<body>

		<section>
			<h2>
				<?php
					include_once "pdoDB.php";

					if($_GET['class'] === "عرض جميع الدرجات ...")
					{
						$q = "select trainNum from trains where leaveStation=? and arriveStation=?;";
						$num = $db->getCount($q,array($_GET['leaveStation'],$_GET['arriveStation']));
					}
					else
					{
						$q = "select trainNum from trains where leaveStation=? and arriveStation=? and class=?;";
						$num = $db->getCount($q,array($_GET['leaveStation'],$_GET['arriveStation'],$_GET['class']));
					}					
					
					echo "There are $num trains from $_GET[leaveStation] to $_GET[arriveStation]";
				?>
			</h2>

		</section>

		<div class="trains">
			<table>
				<tr>
					<th>Train Num</th>
					<th>Leave</th>
					<th>Arrive</th>
					<th>Duration</th>
					<th>Class</th>
					<th>Stand</th>
				</tr>

				<?php

					$leave = $_GET['leaveStation'];
					$arrive = $_GET['arriveStation'];
					$class = $_GET['class'];

					include_once "pdoDB.php";

					if($class === "عرض جميع الدرجات ...")
					{
						$q = "select trainNum,leaveTime,arriveTime, period, class,class,stand from trains where leaveStation=? and arriveStation=?;";
						$rows = $db->getRows($q,array($leave,$arrive));
					}
					else
					{
						$q = "select trainNum,leaveTime,arriveTime, period, class,class,stand from trains where leaveStation=? and arriveStation=? and class=?;";
						$rows = $db->getRows($q,array($leave,$arrive,$class));
					}					

					foreach($rows as $key => $row)
					{
						echo 
						"<tr>
							<td>$row[trainNum]</td>
							<td>$row[leaveTime]</td>
							<td>$row[arriveTime]</td>
							<td>$row[period]</td>
							<td>$row[class]</td>
							<td>$row[stand]</td>
						 </tr>";
					}
				?>

			</table>
		</div>
	</body>
</html>
