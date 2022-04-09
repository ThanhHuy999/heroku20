
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title> He thong quan ly sinh vien </title>
	</head>

	<body>
	<h1>Hệ thống quản lý sinh viên</h1>
	<?php
	$cn = pg_connect("host=ec2-18-214-134-226.compute-1.amazonaws.com port=5432 dbname=d5tmin00bciu1i user=zmqcfqvmpyljhr password=9f82098da86027af5990973f6e6f36ad470852bdd6b70a9bccd9cb6cb603495d");
	$result = pg_query($cn,"SELECT * FROM HTQL_QuanLySinhVien");
	while($row= pg_fetch_object($result))
	{
		echo "\n".$row->Mssv;
	}
	?>
	</body>
</html>

