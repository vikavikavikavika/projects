<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request </title>
</head>
<body>
	<table style="border: 2px;">
	<tr>
		<th>ID</th><th>FIO</th><th>Organisation</th><th>Address</th><th>Telephone</th>
	</tr>
	<?php
	$link=mysql_connect("127.0.0.1","root","") or die("Could not connect"); 
	$LL=mysql_select_db("base",$link)  or die("Not dataBase");
	$result= mysql_query("SELECT  * FROM fio");

	while ($row= mysql_fetch_assoc($result))
		{echo "<tr>";
		echo "<td>".$row["ID"]."</td>,<td>".$row["FIO"]."</td>,<td>".$row["Org"]."</td>,<td>".$row["Adress"]."</td>, <td>".$row["Telephone"]."</td>";
		echo "</tr>";
		}
		mysql_free_result($result);
	?>
	</table>
</body>
</html>