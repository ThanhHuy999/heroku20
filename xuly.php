
<!DOCTYPE html>
<html>
  
<head>
  <meta charset="utf-8">
  <title>He thong quan ly sinh vien</title>
</head>
  
<body>
<h1>Hệ thống quản lý sinh viên</h1>
	<form name="flogin" method="POST" action="xuly.php"
	      <pre>
		Mã số sinh viên: <input type="text" name="uname">
		<br>
		Họ và tên: <input type="text" name="pword">
		<br>
		<input type="submit" name="them" value="THÊM">
		<input type="button" name="sua" value="SỬA">
		<input type="button" name="xoa" value="XÓA">
		<hr>
		</pre>
	      </form>
	<?php

	$cn = pg_connect("host=ec2-18-214-134-226.compute-1.amazonaws.com port=5432 dbname=d5tmin00bciu1i user=zmqcfqvmpyljhr password=9f82098da86027af5990973f6e6f36ad470852bdd6b70a9bccd9cb6cb603495d");
	$uname = $_POST['uname'];
	$pword = $_POST['pword']
	$query1 = "INSERT INTO HTQL_QuanLySinhVien VALUES ('$uname','$pword')";
	$result = pg_query($cn, $query1);
	pg_close($cn);

	$cn = pg_connect("host=ec2-18-214-134-226.compute-1.amazonaws.com port=5432 dbname=d5tmin00bciu1i user=zmqcfqvmpyljhr password=9f82098da86027af5990973f6e6f36ad470852bdd6b70a9bccd9cb6cb603495d");
	$result = pg_query($cn,"SELECT * FROM HTQL_QuanLySinhVien");
	while($row= pg_fetch_row($result))
	{
		echo "MSSV: $row[0] Email: $row[1]";
		echo "\n";
	}
	pg_close($cn);
	?>  
</body>
</html>
