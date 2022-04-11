
<!DOCTYPE html>
<html>
  
	<head>
	  <meta charset="utf-8">
	  <title>He thong quan ly sinh vien</title>
	</head>

	<body>
		<h1 style="color: orange;">Hệ thống quản lý sinh viên</h1>
		<h2 style="color: red;">Thêm sinh viên</h2>
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
			<hr>
			<h2 style="color: red;">Sửa sinh viên</h2>
				<form name="update" method="POST" action="sua.php"
				      <pre>
						Mã số sinh viên cần sửa thông tin: <input type="text" name="uname">
						<br>
						Họ và tên: <input type="text" name="pword">
						<br>
						<input type="submit" name="sua" value="SỬA">
						<hr>
					</pre>
				  </form>
			<hr>
			<h2 style="color: red;">Xóa sinh viên viên</h2>
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
			$uname = $_POST['uname'];
			$pword = $_POST['pword'];
			$query1 = "INSERT INTO HTQL_QuanLySinhVien VALUES ('$uname','$pword')";
			$result = pg_query($cn, $query1);
			$result1 = pg_query($cn,"SELECT * FROM HTQL_QuanLySinhVien");
			while($row= pg_fetch_row($result1))
			{
				echo "MSSV: $row[0] Ho va ten: $row[1]";
				echo "<br>"
			}
			pg_close($cn);
			?>  
	</body>
</html>
