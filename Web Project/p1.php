<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>سكك حديد مصر</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>

		<div>
			<form action="p2.php">
                
                <select name="leaveStation">
                    <option value="-1" selected>Leave Station</option>
                    <option value="sohag">Sohag</option>
                    <option value="cairo">Cairo</option>
                    <option value="assuit">Assuit</option>
                </select>
                
                <select name="arriveStation">
                    <option value="-1" selected>Arrive Station</option>
                    <option value="sohag">Sohag</option>
                    <option value="cairo">Cairo</option>
                    <option value="assuit">Assuit</option>
                </select>

				<select name="class">
					<option value="عرض جميع الدرجات ...">عرض جميع الدرجات ...</option>
					<option value="VIP">VIP</option>
					<option value="مكيف">مكيف</option>
					<option value="مميز">مميز</option>
				</select><br>

				<input type="submit" value="Show Trains">
			</form>
		</div>
	</body>
</html>
