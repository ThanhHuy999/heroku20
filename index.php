
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> He thong quan ly sinh vien </title>
	</head>

	<body background="giay-dan-tuong-tre-em-1317.jpg">
		<h1 style "font-family:Brush Script MT;color:red;">Hệ thống quản lý sinh viên</h1>
			<hr>
			 <h2 style "font-family:Brush Script MT;color=green;">Thêm sinh viên</h2>
				<form name="add" method="POST" action="them.php"
				      <pre>
						Mã số sinh viên: <input type="text" name="uname">
						<br>
						Họ và tên: <input type="text" name="pword">
						<br>
						<input type="submit" name="them" value="THÊM">
					</pre>
				  </form>
			<hr>
			<h2 style "font-family:Brush Script MT;color:green;">Sửa sinh viên</h2>
				<form name="update" method="POST" action="sua.php"
				      <pre>
						Mã số sinh viên cần sửa thông tin: <input type="text" name="uname">
						<br>
						Họ và tên: <input type="text" name="pword">
						<br>
						<input type="submit" name="sua" value="SỬA">
					</pre>
				  </form>
			<hr>
			<h2 style "font-family:Brush Script MT;color:green;">Xóa sinh viên viên</h2>
				<form name="delete" method="POST" action="xoa.php"
				      <pre>
						Mã số sinh viên cần XÓA: <input type="text" name="uname">
						<br>
						<input type="submit" name="xoa" value="XÓA">
						<hr>
					</pre>
				  </form>
			<h2 style="color: blue;">DANH SÁCH SINH VIÊN HIỆN TẠI</h2>

		<?php
			$cn = pg_connect("host=ec2-18-214-134-226.compute-1.amazonaws.com port=5432 dbname=d5tmin00bciu1i user=zmqcfqvmpyljhr password=9f82098da86027af5990973f6e6f36ad470852bdd6b70a9bccd9cb6cb603495d");
			$result = pg_query($cn,"SELECT * FROM HTQL_QuanLySinhVien");
			while($row= pg_fetch_row($result))
			{
				echo "MSSV: $row[0] Ho va ten: $row[1]";
				echo "<br>";
			}
			pg_close($cn);
		?>
	</body>
</html>

