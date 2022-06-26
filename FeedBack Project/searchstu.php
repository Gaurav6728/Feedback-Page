<!DOCTYPE html>
<html>
<head>
	<title>SEARCH</title>
</head>
<body>

<form action = "searchstu.php" method = "POST">
<center><h1>Fetch Feedback Data By Students's Roll No. </h1></center>
<br>
<center><input type="number" name="roll_no" placeholder="Enter here">
<input type="submit" name="submit" value = "SEARCH" style="border:2px solid grey;border-radius: 10px; ">
</center>
</form>


<?php
if(isset($_POST['submit']))
{
$servername = "localhost";
$username = "root";
$password = "";
$db = "performa1";
$roll_no = $_POST['roll_no'];
$conn = mysqli_connect($servername,$username,$password,$db);
if(!$conn){
  die("Connection not established".mysql_connect_error());
}

$sql = "SELECT * FROM co1 where roll_no = '$roll_no'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	// printing the all details
	echo"<center><h1>CO1<h1></center>";
	echo"<center>";
	echo"<table border = '2' width = '100%'>";
	echo"<tr><th>Roll_No</th> <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td></td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr width = '100%'>";
		echo"<td >".$row['roll_no']."</td>";
		echo"<td >".$row['ser']."</td>";
		echo"<td >".$row['sea']."</td>";
		echo"<td >".$row['seu']."</td>";
		echo"<td >".$row['ccr']."</td>";
		echo"<td >".$row['cca']."</td>";
		echo"<td >".$row['ccu']."</td>";
		echo"<td >".$row['pyr']."</td>";
		echo"<td >".$row['pya']."</td>";
		echo"<td >".$row['pyu']."</td>";
		echo"<td >".$row['cnr']."</td>";
		echo"<td >".$row['cna']."</td>";
		echo"<td >".$row['cnu']."</td>";
		echo"<td >".$row['phpr']."</td>";
		echo"<td >".$row['phpa']."</td>";
		echo"<td >".$row['phpu']."</td>";
		echo"</tr>";
	}
echo"</table>";

}
echo"<br><br><br><hr>";
$sql = "SELECT * FROM co2 where roll_no = '$roll_no'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	// printing the all details
	echo"<center><h1>CO2<h1></center>";
	echo"<center>";
	echo"<table border = '2' width = '100%'>";
	echo"<tr><th>Roll_No</th> <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td></td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr width = '100%'>";
		echo"<td >".$row['roll_no']."</td>";
		echo"<td >".$row['ser']."</td>";
		echo"<td >".$row['sea']."</td>";
		echo"<td >".$row['seu']."</td>";
		echo"<td >".$row['ccr']."</td>";
		echo"<td >".$row['cca']."</td>";
		echo"<td >".$row['ccu']."</td>";
		echo"<td >".$row['pyr']."</td>";
		echo"<td >".$row['pya']."</td>";
		echo"<td >".$row['pyu']."</td>";
		echo"<td >".$row['cnr']."</td>";
		echo"<td >".$row['cna']."</td>";
		echo"<td >".$row['cnu']."</td>";
		echo"<td >".$row['phpr']."</td>";
		echo"<td >".$row['phpa']."</td>";
		echo"<td >".$row['phpu']."</td>";
		echo"</tr>";

		

	}
echo"</table>";
}
echo"<br><br><br><hr>";
$sql = "SELECT * FROM co3 where roll_no = '$roll_no'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	// printing the all details
	echo"<center><h1>CO3<h1></center>";
	echo"<center>";
	echo"<table border = '2' width = '100%'>";
	echo"<tr><th>Roll_No</th> <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td></td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr width = '100%'>";
		echo"<td >".$row['roll_no']."</td>";
		echo"<td >".$row['ser']."</td>";
		echo"<td >".$row['sea']."</td>";
		echo"<td >".$row['seu']."</td>";
		echo"<td >".$row['ccr']."</td>";
		echo"<td >".$row['cca']."</td>";
		echo"<td >".$row['ccu']."</td>";
		echo"<td >".$row['pyr']."</td>";
		echo"<td >".$row['pya']."</td>";
		echo"<td >".$row['pyu']."</td>";
		echo"<td >".$row['cnr']."</td>";
		echo"<td >".$row['cna']."</td>";
		echo"<td >".$row['cnu']."</td>";
		echo"<td >".$row['phpr']."</td>";
		echo"<td >".$row['phpa']."</td>";
		echo"<td >".$row['phpu']."</td>";
		echo"</tr>";

		

	}
echo"</table>";

}

echo"<br><br><br><hr>";
$sql = "SELECT * FROM co4 where roll_no = '$roll_no'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	// printing the all details
	echo"<center><h1>CO4<h1></center>";
	echo"<center>";
	echo"<table border = '2' width = '100%'>";
	echo"<tr><th>Roll_No</th> <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td></td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr width = '100%'>";
		echo"<td >".$row['roll_no']."</td>";
		echo"<td >".$row['ser']."</td>";
		echo"<td >".$row['sea']."</td>";
		echo"<td >".$row['seu']."</td>";
		echo"<td >".$row['ccr']."</td>";
		echo"<td >".$row['cca']."</td>";
		echo"<td >".$row['ccu']."</td>";
		echo"<td >".$row['pyr']."</td>";
		echo"<td >".$row['pya']."</td>";
		echo"<td >".$row['pyu']."</td>";
		echo"<td >".$row['cnr']."</td>";
		echo"<td >".$row['cna']."</td>";
		echo"<td >".$row['cnu']."</td>";
		echo"<td >".$row['phpr']."</td>";
		echo"<td >".$row['phpa']."</td>";
		echo"<td >".$row['phpu']."</td>";
		echo"</tr>";

		

	}
echo"</table>";
}

echo"<br><br><br><hr>";
$sql = "SELECT * FROM co5 where roll_no = '$roll_no'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	// printing the all details
	echo"<center><h1>CO5<h1></center>";
	echo"<center>";
	echo"<table border = '2' width = '100%'>";
	echo"<tr><th>Roll_No</th> <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td></td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr width = '100%'>";
		echo"<td >".$row['roll_no']."</td>";
		echo"<td >".$row['ser']."</td>";
		echo"<td >".$row['sea']."</td>";
		echo"<td >".$row['seu']."</td>";
		echo"<td >".$row['ccr']."</td>";
		echo"<td >".$row['cca']."</td>";
		echo"<td >".$row['ccu']."</td>";
		echo"<td >".$row['pyr']."</td>";
		echo"<td >".$row['pya']."</td>";
		echo"<td >".$row['pyu']."</td>";
		echo"<td >".$row['cnr']."</td>";
		echo"<td >".$row['cna']."</td>";
		echo"<td >".$row['cnu']."</td>";
		echo"<td >".$row['phpr']."</td>";
		echo"<td >".$row['phpa']."</td>";
		echo"<td >".$row['phpu']."</td>";
		echo"</tr>";

		

	}
echo"</table>";
}
echo"<br><br><br><hr>";
$sql = "SELECT * FROM co6 where roll_no = '$roll_no'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	// printing the all details
	echo"<center><h1>CO6<h1></center>";
	echo"<center>";
	echo"<table border = '2' width = '100%'>";
	echo"<tr><th>Roll_No</th> <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td></td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr width = '100%'>";
		echo"<td >".$row['roll_no']."</td>";
		echo"<td >".$row['ser']."</td>";
		echo"<td >".$row['sea']."</td>";
		echo"<td >".$row['seu']."</td>";
		echo"<td >".$row['ccr']."</td>";
		echo"<td >".$row['cca']."</td>";
		echo"<td >".$row['ccu']."</td>";
		echo"<td >".$row['pyr']."</td>";
		echo"<td >".$row['pya']."</td>";
		echo"<td >".$row['pyu']."</td>";
		echo"<td >".$row['cnr']."</td>";
		echo"<td >".$row['cna']."</td>";
		echo"<td >".$row['cnu']."</td>";
		echo"<td >".$row['phpr']."</td>";
		echo"<td >".$row['phpa']."</td>";
		echo"<td >".$row['phpu']."</td>";
		echo"</tr>";

		

	}
echo"</table>";
}
echo"<br><br><br><hr>";
$sql = "SELECT * FROM co7 where roll_no = '$roll_no'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	// printing the all details
	echo"<center><h1>CO7<h1></center>";
	echo"<center>";
	echo"<table border = '2' width = '100%'>";
	echo"<tr><th>Roll_No</th> <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td></td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr width = '100%'>";
		echo"<td >".$row['roll_no']."</td>";
		echo"<td >".$row['ser']."</td>";
		echo"<td >".$row['sea']."</td>";
		echo"<td >".$row['seu']."</td>";
		echo"<td >".$row['ccr']."</td>";
		echo"<td >".$row['cca']."</td>";
		echo"<td >".$row['ccu']."</td>";
		echo"<td >".$row['pyr']."</td>";
		echo"<td >".$row['pya']."</td>";
		echo"<td >".$row['pyu']."</td>";
		echo"<td >".$row['cnr']."</td>";
		echo"<td >".$row['cna']."</td>";
		echo"<td >".$row['cnu']."</td>";
		echo"<td >".$row['phpr']."</td>";
		echo"<td >".$row['phpa']."</td>";
		echo"<td >".$row['phpu']."</td>";
		echo"</tr>";

		

	}
echo"</table>";
}
echo"<br><br><br><hr>";
$sql = "SELECT * FROM co8 where roll_no = '$roll_no'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	// printing the all details
	echo"<center><h1>CO8<h1></center>";
	echo"<center>";
	echo"<table border = '2' width = '100%'>";
	echo"<tr><th>Roll_No</th> <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td></td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr width = '100%'>";
		echo"<td >".$row['roll_no']."</td>";
		echo"<td >".$row['ser']."</td>";
		echo"<td >".$row['sea']."</td>";
		echo"<td >".$row['seu']."</td>";
		echo"<td >".$row['ccr']."</td>";
		echo"<td >".$row['cca']."</td>";
		echo"<td >".$row['ccu']."</td>";
		echo"<td >".$row['pyr']."</td>";
		echo"<td >".$row['pya']."</td>";
		echo"<td >".$row['pyu']."</td>";
		echo"<td >".$row['cnr']."</td>";
		echo"<td >".$row['cna']."</td>";
		echo"<td >".$row['cnu']."</td>";
		echo"<td >".$row['phpr']."</td>";
		echo"<td >".$row['phpa']."</td>";
		echo"<td >".$row['phpu']."</td>";
		echo"</tr>";

		

	}
echo"</table>";
}
echo"<br><br><br><hr>";
$sql = "SELECT * FROM co9 where roll_no = '$roll_no'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	// printing the all details
	echo"<center><h1>CO9<h1></center>";
	echo"<center>";
	echo"<table border = '2' width = '100%'>";
	echo"<tr><th>Roll_No</th> <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td></td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr width = '100%'>";
		echo"<td >".$row['roll_no']."</td>";
		echo"<td >".$row['ser']."</td>";
		echo"<td >".$row['sea']."</td>";
		echo"<td >".$row['seu']."</td>";
		echo"<td >".$row['ccr']."</td>";
		echo"<td >".$row['cca']."</td>";
		echo"<td >".$row['ccu']."</td>";
		echo"<td >".$row['pyr']."</td>";
		echo"<td >".$row['pya']."</td>";
		echo"<td >".$row['pyu']."</td>";
		echo"<td >".$row['cnr']."</td>";
		echo"<td >".$row['cna']."</td>";
		echo"<td >".$row['cnu']."</td>";
		echo"<td >".$row['phpr']."</td>";
		echo"<td >".$row['phpa']."</td>";
		echo"<td >".$row['phpu']."</td>";
		echo"</tr>";

		

	}
echo"</table>";
}
echo"<br><br><br><hr>";
$sql = "SELECT * FROM co10 where roll_no = '$roll_no'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	// printing the all details
	echo"<center><h1>CO10<h1></center>";
	echo"<center>";
	echo"<table border = '2' width = '100%'>";
	echo"<tr><th>Roll_No</th> <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td></td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr width = '100%'>";
		echo"<td >".$row['roll_no']."</td>";
		echo"<td >".$row['ser']."</td>";
		echo"<td >".$row['sea']."</td>";
		echo"<td >".$row['seu']."</td>";
		echo"<td >".$row['ccr']."</td>";
		echo"<td >".$row['cca']."</td>";
		echo"<td >".$row['ccu']."</td>";
		echo"<td >".$row['pyr']."</td>";
		echo"<td >".$row['pya']."</td>";
		echo"<td >".$row['pyu']."</td>";
		echo"<td >".$row['cnr']."</td>";
		echo"<td >".$row['cna']."</td>";
		echo"<td >".$row['cnu']."</td>";
		echo"<td >".$row['phpr']."</td>";
		echo"<td >".$row['phpa']."</td>";
		echo"<td >".$row['phpu']."</td>";
		echo"</tr>";


	}
echo"</table>";
}

echo"<br><br><br><hr>";
$sql = "SELECT * FROM curr where roll_no = '$roll_no'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	// printing the all details
	echo"<center><h1>Curriculum<h1></center>";
	echo"<center>";
	echo"<table border = '2' width = '100%'>";
	echo"<tr><th>Roll_No</th> <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td></td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr width = '100%'>";
		echo"<td >".$row['roll_no']."</td>";
		echo"<td >".$row['ser']."</td>";
		echo"<td >".$row['sea']."</td>";
		echo"<td >".$row['seu']."</td>";
		echo"<td >".$row['ccr']."</td>";
		echo"<td >".$row['cca']."</td>";
		echo"<td >".$row['ccu']."</td>";
		echo"<td >".$row['pyr']."</td>";
		echo"<td >".$row['pya']."</td>";
		echo"<td >".$row['pyu']."</td>";
		echo"<td >".$row['cnr']."</td>";
		echo"<td >".$row['cna']."</td>";
		echo"<td >".$row['cnu']."</td>";
		echo"<td >".$row['phpr']."</td>";
		echo"<td >".$row['phpa']."</td>";
		echo"<td >".$row['phpu']."</td>";
		echo"</tr>";
		

	}
echo"</table>";
}

echo"<br><br><br><hr>";
$sql = "SELECT * FROM class_th where roll_no = '$roll_no'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	// printing the all details
	echo"<center><h1>Classes Engaged(Theory)<h1></center>";
	echo"<center>";
	echo"<table border = '2' width = '70%'>";
	echo"<tr><th>Roll_No</th> <th>SE</th> <th>CC</th><th>Python</th><th>CN</th><th>PHP</th>  </tr>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr width = '100%'>";
		echo"<td >".$row['roll_no']."</td>";
		echo"<td >".$row['se']."</td>";
		echo"<td >".$row['cc']."</td>";
		echo"<td >".$row['py']."</td>";
		echo"<td >".$row['cn']."</td>";
		echo"<td >".$row['php']."</td>";
			echo"</tr>";

		

	}
echo"</table>";
}

echo"<br><br><br><hr>";
$sql = "SELECT * FROM class_pr where roll_no = '$roll_no'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	// printing the all details
	echo"<center><h1>Classes Engaged(Practical)<h1></center>";
	echo"<center>";
	echo"<table border = '2' width = '70%'>";
	echo"<tr><th>Roll_No</th> <th>SE</th> <th>CC</th><th>Python</th><th>CN</th><th>PHP</th>  </tr>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr width = '100%'>";
		echo"<td >".$row['roll_no']."</td>";
		echo"<td >".$row['se']."</td>";
		echo"<td >".$row['cc']."</td>";
		echo"<td >".$row['py']."</td>";
		echo"<td >".$row['cn']."</td>";
		echo"<td >".$row['php']."</td>";
			echo"</tr>";

		

	}
echo"</table>";
}

echo"<br><br><br><hr>";
$sql = "SELECT * FROM ins where roll_no = '$roll_no'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	// printing the all details
	echo"<center><h1>Instructions Methods And Media<h1></center>";
	echo"<center>";
	echo"<table border = '2' width = '70%'>";
	echo"<tr><th>Roll_No</th> <th>SE</th> <th>CC</th><th>Python</th><th>CN</th><th>PHP</th>  </tr>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr width = '100%'>";
		echo"<td >".$row['roll_no']."</td>";
		echo"<td >".$row['se']."</td>";
		echo"<td >".$row['cc']."</td>";
		echo"<td >".$row['py']."</td>";
		echo"<td >".$row['cn']."</td>";
		echo"<td >".$row['php']."</td>";
			echo"</tr>";

		

	}
echo"</table>";
}

echo"<br><br><br><hr>";
$sql = "SELECT * FROM eva where roll_no = '$roll_no'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	// printing the all details
	echo"<center><h1>Evaluation of Seminar,Assignments,Viva etc.<h1></center>";
	echo"<center>";
	echo"<table border = '2' width = '70%'>";
	echo"<tr><th>Roll_No</th> <th>SE</th> <th>CC</th><th>Python</th><th>CN</th><th>PHP</th>  </tr>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr width = '100%'>";
		echo"<td >".$row['roll_no']."</td>";
		echo"<td >".$row['se']."</td>";
		echo"<td >".$row['cc']."</td>";
		echo"<td >".$row['py']."</td>";
		echo"<td >".$row['cn']."</td>";
		echo"<td >".$row['php']."</td>";
			echo"</tr>";

		

	}
echo"</table>";
}
echo"<br><br><br><hr>";
$sql = "SELECT * FROM syll_th where roll_no = '$roll_no'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	// printing the all details
	echo"<center><h1>Syllabus Covered(Theory)<h1></center>";
	echo"<center>";
	echo"<table border = '2' width = '70%'>";
	echo"<tr><th>Roll_No</th> <th>SE</th> <th>CC</th><th>Python</th><th>CN</th><th>PHP</th>  </tr>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr width = '100%'>";
		echo"<td >".$row['roll_no']."</td>";
		echo"<td >".$row['se']."</td>";
		echo"<td >".$row['cc']."</td>";
		echo"<td >".$row['py']."</td>";
		echo"<td >".$row['cn']."</td>";
		echo"<td >".$row['php']."</td>";
			echo"</tr>";

		

	}
echo"</table>";
}
echo"<br><br><br><hr>";
$sql = "SELECT * FROM syll_pr where roll_no = '$roll_no'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	// printing the all details
	echo"<center><h1>Syllabus Covered(Practical)<h1></center>";
	echo"<center>";
	echo"<table border = '2' width = '70%'>";
	echo"<tr><th>Roll_No</th> <th>SE</th> <th>CC</th><th>Python</th><th>CN</th><th>PHP</th>  </tr>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr width = '100%'>";
		echo"<td >".$row['roll_no']."</td>";
		echo"<td >".$row['se']."</td>";
		echo"<td >".$row['cc']."</td>";
		echo"<td >".$row['py']."</td>";
		echo"<td >".$row['cn']."</td>";
		echo"<td >".$row['php']."</td>";
			echo"</tr>";

		

	}
echo"</table>";
}
echo"<br><br><br><hr>";
$sql = "SELECT * FROM fac where roll_no = '$roll_no'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	// printing the all details
	echo"<center><h1>Facilities And Infrastructure <h1></center>";
	echo"<center>";
	echo"<table border = '2' width = '70%'>";
	echo"<tr><th>Roll_No</th> <th>SE</th> <th>CC</th><th>Python</th><th>CN</th><th>PHP</th>  </tr>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr width = '100%'>";
		echo"<td >".$row['roll_no']."</td>";
		echo"<td >".$row['se']."</td>";
		echo"<td >".$row['cc']."</td>";
		echo"<td >".$row['py']."</td>";
		echo"<td >".$row['cn']."</td>";
		echo"<td >".$row['php']."</td>";
			echo"</tr>";

		

	}
echo"</table>";
}

echo"<br><br><br><hr>";
$sql = "SELECT * FROM comments where roll_no = '$roll_no'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	// printing the all details
	echo"<center><h1>Comments<h1></center>";
	echo"<center>";
	echo"<table border = '2' width = '70%'>";
	echo"<tr><th>Roll_No</th> <th>Comments</th>  </tr>";
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr width = '100%'>";
		echo"<td >".$row['roll_no']."</td>";
		echo"<td >".$row['comment']."</td>";
			echo"</tr>";

		

	}
echo"</table>";
}

else{
	print("0 results");
}
	mysqli_close($conn);

}
else
{
	echo"Enter roll no to see results";
}
?>
</body>
</html>
