<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "performa1";

$conn = mysqli_connect($servername,$username,$password,$db);
if(!$conn){
  die("Connection not established".mysql_connect_error());
}



$query1 = "SELECT AVG(ser) AS average FROM co1";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
$average1= $row1['average'];

$query2 = "SELECT AVG(sea) AS average FROM co1";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$average2= $row2['average'];

$query3 = "SELECT AVG(seu) AS average FROM co1";
$result3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_assoc($result3);
$average3= $row3['average'];


$query4 = "SELECT AVG(ccr) AS average FROM co1";
$result4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_assoc($result4);
$average4= $row4['average'];


$query5 = "SELECT AVG(cca) AS average FROM co1";
$result5 = mysqli_query($conn,$query5);
$row5 = mysqli_fetch_assoc($result5);
$average5= $row5['average'];


$query6 = "SELECT AVG(ccu) AS average FROM co1";
$result6 = mysqli_query($conn,$query6);
$row6 = mysqli_fetch_assoc($result6);
$average6= $row6['average'];


$query7 = "SELECT AVG(pyr) AS average FROM co1";
$result7 = mysqli_query($conn,$query7);
$row7 = mysqli_fetch_assoc($result7);
$average7= $row7['average'];


$query8 = "SELECT AVG(pya) AS average FROM co1";
$result8 = mysqli_query($conn,$query8);
$row8 = mysqli_fetch_assoc($result8);
$average8= $row8['average'];


$query9 = "SELECT AVG(pyu) AS average FROM co1";
$result9 = mysqli_query($conn,$query9);
$row9 = mysqli_fetch_assoc($result9);
$average9= $row9['average'];


$query10 = "SELECT AVG(cnr) AS average FROM co1";
$result10 = mysqli_query($conn,$query10);
$row10 = mysqli_fetch_assoc($result10);
$average10= $row10['average'];


$query11 = "SELECT AVG(cna) AS average FROM co1";
$result11 = mysqli_query($conn,$query11);
$row11 = mysqli_fetch_assoc($result11);
$average11= $row11['average'];


$query12 = "SELECT AVG(cnu) AS average FROM co1";
$result12 = mysqli_query($conn,$query12);
$row12 = mysqli_fetch_assoc($result12);
$average12= $row12['average'];


$query13 = "SELECT AVG(phpr) AS average FROM co1";
$result13 = mysqli_query($conn,$query13);
$row13 = mysqli_fetch_assoc($result13);
$average13= $row13['average'];


$query14 = "SELECT AVG(phpa) AS average FROM co1";
$result14 = mysqli_query($conn,$query14);
$row14 = mysqli_fetch_assoc($result14);
$average14= $row14['average'];


$query15 = "SELECT AVG(phpu) AS average FROM co1";
$result15 = mysqli_query($conn,$query15);
$row15 = mysqli_fetch_assoc($result15);
$average15= $row15['average'];


	
echo"<center><h1>CO1<h1></center>";
	echo"<center>";
	echo"<table border = '2' width = '100%'>";
	echo" <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	echo"<tr><td>$average1	</td><td>$average2</td><td>$average3</td><td>$average4</td><td>$average5</td><td>$average6</td><td>$average7</td><td>$average8</td><td>$average9</td><td>$average10</td><td>$average11</td><td>$average12</td><td>$average13</td><td>$average14</td><td>$average15</td></tr>";
		
	
$query1 = "SELECT AVG(ser) AS average FROM co2";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
$average1= $row1['average'];

$query2 = "SELECT AVG(sea) AS average FROM co2";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$average2= $row2['average'];

$query3 = "SELECT AVG(seu) AS average FROM co2";
$result3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_assoc($result3);
$average3= $row3['average'];


$query4 = "SELECT AVG(ccr) AS average FROM co2";
$result4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_assoc($result4);
$average4= $row4['average'];


$query5 = "SELECT AVG(cca) AS average FROM co2";
$result5 = mysqli_query($conn,$query5);
$row5 = mysqli_fetch_assoc($result5);
$average5= $row5['average'];


$query6 = "SELECT AVG(ccu) AS average FROM co2";
$result6 = mysqli_query($conn,$query6);
$row6 = mysqli_fetch_assoc($result6);
$average6= $row6['average'];


$query7 = "SELECT AVG(pyr) AS average FROM co2";
$result7 = mysqli_query($conn,$query7);
$row7 = mysqli_fetch_assoc($result7);
$average7= $row7['average'];


$query8 = "SELECT AVG(pya) AS average FROM co2";
$result8 = mysqli_query($conn,$query8);
$row8 = mysqli_fetch_assoc($result8);
$average8= $row8['average'];


$query9 = "SELECT AVG(pyu) AS average FROM co2";
$result9 = mysqli_query($conn,$query9);
$row9 = mysqli_fetch_assoc($result9);
$average9= $row9['average'];


$query10 = "SELECT AVG(cnr) AS average FROM co2";
$result10 = mysqli_query($conn,$query10);
$row10 = mysqli_fetch_assoc($result10);
$average10= $row10['average'];


$query11 = "SELECT AVG(cna) AS average FROM co2";
$result11 = mysqli_query($conn,$query11);
$row11 = mysqli_fetch_assoc($result11);
$average11= $row11['average'];


$query12 = "SELECT AVG(cnu) AS average FROM co2";
$result12 = mysqli_query($conn,$query12);
$row12 = mysqli_fetch_assoc($result12);
$average12= $row12['average'];


$query13 = "SELECT AVG(phpr) AS average FROM co2";
$result13 = mysqli_query($conn,$query13);
$row13 = mysqli_fetch_assoc($result13);
$average13= $row13['average'];


$query14 = "SELECT AVG(phpa) AS average FROM co2";
$result14 = mysqli_query($conn,$query14);
$row14 = mysqli_fetch_assoc($result14);
$average14= $row14['average'];


$query15 = "SELECT AVG(phpu) AS average FROM co2";
$result15 = mysqli_query($conn,$query15);
$row15 = mysqli_fetch_assoc($result15);
$average15= $row15['average'];


	
	
	echo"<table border = '2' width = '100%'>";
	echo" <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	echo"<tr><td>$average1	</td><td>$average2</td><td>$average3</td><td>$average4</td><td>$average5</td><td>$average6</td><td>$average7</td><td>$average8</td><td>$average9</td><td>$average10</td><td>$average11</td><td>$average12</td><td>$average13</td><td>$average14</td><td>$average15</td></tr>";
echo"<br><br>";
echo"<center><h1>CO2<h1></center>";

$query1 = "SELECT AVG(ser) AS average FROM co3";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
$average1= $row1['average'];

$query2 = "SELECT AVG(sea) AS average FROM co3";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$average2= $row2['average'];

$query3 = "SELECT AVG(seu) AS average FROM co3";
$result3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_assoc($result3);
$average3= $row3['average'];


$query4 = "SELECT AVG(ccr) AS average FROM co3";
$result4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_assoc($result4);
$average4= $row4['average'];


$query5 = "SELECT AVG(cca) AS average FROM co3";
$result5 = mysqli_query($conn,$query5);
$row5 = mysqli_fetch_assoc($result5);
$average5= $row5['average'];


$query6 = "SELECT AVG(ccu) AS average FROM co3";
$result6 = mysqli_query($conn,$query6);
$row6 = mysqli_fetch_assoc($result6);
$average6= $row6['average'];


$query7 = "SELECT AVG(pyr) AS average FROM co3";
$result7 = mysqli_query($conn,$query7);
$row7 = mysqli_fetch_assoc($result7);
$average7= $row7['average'];


$query8 = "SELECT AVG(pya) AS average FROM co3";
$result8 = mysqli_query($conn,$query8);
$row8 = mysqli_fetch_assoc($result8);
$average8= $row8['average'];


$query9 = "SELECT AVG(pyu) AS average FROM co3";
$result9 = mysqli_query($conn,$query9);
$row9 = mysqli_fetch_assoc($result9);
$average9= $row9['average'];


$query10 = "SELECT AVG(cnr) AS average FROM co3";
$result10 = mysqli_query($conn,$query10);
$row10 = mysqli_fetch_assoc($result10);
$average10= $row10['average'];


$query11 = "SELECT AVG(cna) AS average FROM co3";
$result11 = mysqli_query($conn,$query11);
$row11 = mysqli_fetch_assoc($result11);
$average11= $row11['average'];


$query12 = "SELECT AVG(cnu) AS average FROM co3";
$result12 = mysqli_query($conn,$query12);
$row12 = mysqli_fetch_assoc($result12);
$average12= $row12['average'];


$query13 = "SELECT AVG(phpr) AS average FROM co3";
$result13 = mysqli_query($conn,$query13);
$row13 = mysqli_fetch_assoc($result13);
$average13= $row13['average'];


$query14 = "SELECT AVG(phpa) AS average FROM co3";
$result14 = mysqli_query($conn,$query14);
$row14 = mysqli_fetch_assoc($result14);
$average14= $row14['average'];


$query15 = "SELECT AVG(phpu) AS average FROM co3";
$result15 = mysqli_query($conn,$query15);
$row15 = mysqli_fetch_assoc($result15);
$average15= $row15['average'];

echo"<table border = '2' width = '100%'>";
	echo" <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	echo"<tr><td>$average1	</td><td>$average2</td><td>$average3</td><td>$average4</td><td>$average5</td><td>$average6</td><td>$average7</td><td>$average8</td><td>$average9</td><td>$average10</td><td>$average11</td><td>$average12</td><td>$average13</td><td>$average14</td><td>$average15</td></tr>";
echo"<br><br>";
echo"<center><h1>CO3<h1></center>";

$query1 = "SELECT AVG(ser) AS average FROM co4";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
$average1= $row1['average'];

$query2 = "SELECT AVG(sea) AS average FROM co4";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$average2= $row2['average'];

$query3 = "SELECT AVG(seu) AS average FROM co4";
$result3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_assoc($result3);
$average3= $row3['average'];


$query4 = "SELECT AVG(ccr) AS average FROM co4";
$result4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_assoc($result4);
$average4= $row4['average'];


$query5 = "SELECT AVG(cca) AS average FROM co4";
$result5 = mysqli_query($conn,$query5);
$row5 = mysqli_fetch_assoc($result5);
$average5= $row5['average'];


$query6 = "SELECT AVG(ccu) AS average FROM co4";
$result6 = mysqli_query($conn,$query6);
$row6 = mysqli_fetch_assoc($result6);
$average6= $row6['average'];


$query7 = "SELECT AVG(pyr) AS average FROM co4";
$result7 = mysqli_query($conn,$query7);
$row7 = mysqli_fetch_assoc($result7);
$average7= $row7['average'];


$query8 = "SELECT AVG(pya) AS average FROM co4";
$result8 = mysqli_query($conn,$query8);
$row8 = mysqli_fetch_assoc($result8);
$average8= $row8['average'];


$query9 = "SELECT AVG(pyu) AS average FROM co4";
$result9 = mysqli_query($conn,$query9);
$row9 = mysqli_fetch_assoc($result9);
$average9= $row9['average'];


$query10 = "SELECT AVG(cnr) AS average FROM co4";
$result10 = mysqli_query($conn,$query10);
$row10 = mysqli_fetch_assoc($result10);
$average10= $row10['average'];


$query11 = "SELECT AVG(cna) AS average FROM co4";
$result11 = mysqli_query($conn,$query11);
$row11 = mysqli_fetch_assoc($result11);
$average11= $row11['average'];


$query12 = "SELECT AVG(cnu) AS average FROM co4";
$result12 = mysqli_query($conn,$query12);
$row12 = mysqli_fetch_assoc($result12);
$average12= $row12['average'];


$query13 = "SELECT AVG(phpr) AS average FROM co4";
$result13 = mysqli_query($conn,$query13);
$row13 = mysqli_fetch_assoc($result13);
$average13= $row13['average'];


$query14 = "SELECT AVG(phpa) AS average FROM co4";
$result14 = mysqli_query($conn,$query14);
$row14 = mysqli_fetch_assoc($result14);
$average14= $row14['average'];


$query15 = "SELECT AVG(phpu) AS average FROM co4";
$result15 = mysqli_query($conn,$query15);
$row15 = mysqli_fetch_assoc($result15);
$average15= $row15['average'];

echo"<table border = '2' width = '100%'>";
	echo" <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	echo"<tr><td>$average1	</td><td>$average2</td><td>$average3</td><td>$average4</td><td>$average5</td><td>$average6</td><td>$average7</td><td>$average8</td><td>$average9</td><td>$average10</td><td>$average11</td><td>$average12</td><td>$average13</td><td>$average14</td><td>$average15</td></tr>";
echo"<br><br>";
echo"<center><h1>CO4<h1></center>";

$query1 = "SELECT AVG(ser) AS average FROM co5";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
$average1= $row1['average'];

$query2 = "SELECT AVG(sea) AS average FROM co5";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$average2= $row2['average'];

$query3 = "SELECT AVG(seu) AS average FROM co5";
$result3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_assoc($result3);
$average3= $row3['average'];


$query4 = "SELECT AVG(ccr) AS average FROM co5";
$result4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_assoc($result4);
$average4= $row4['average'];


$query5 = "SELECT AVG(cca) AS average FROM co5";
$result5 = mysqli_query($conn,$query5);
$row5 = mysqli_fetch_assoc($result5);
$average5= $row5['average'];


$query6 = "SELECT AVG(ccu) AS average FROM co5";
$result6 = mysqli_query($conn,$query6);
$row6 = mysqli_fetch_assoc($result6);
$average6= $row6['average'];


$query7 = "SELECT AVG(pyr) AS average FROM co5";
$result7 = mysqli_query($conn,$query7);
$row7 = mysqli_fetch_assoc($result7);
$average7= $row7['average'];


$query8 = "SELECT AVG(pya) AS average FROM co5";
$result8 = mysqli_query($conn,$query8);
$row8 = mysqli_fetch_assoc($result8);
$average8= $row8['average'];


$query9 = "SELECT AVG(pyu) AS average FROM co5";
$result9 = mysqli_query($conn,$query9);
$row9 = mysqli_fetch_assoc($result9);
$average9= $row9['average'];


$query10 = "SELECT AVG(cnr) AS average FROM co5";
$result10 = mysqli_query($conn,$query10);
$row10 = mysqli_fetch_assoc($result10);
$average10= $row10['average'];


$query11 = "SELECT AVG(cna) AS average FROM co5";
$result11 = mysqli_query($conn,$query11);
$row11 = mysqli_fetch_assoc($result11);
$average11= $row11['average'];


$query12 = "SELECT AVG(cnu) AS average FROM co5";
$result12 = mysqli_query($conn,$query12);
$row12 = mysqli_fetch_assoc($result12);
$average12= $row12['average'];


$query13 = "SELECT AVG(phpr) AS average FROM co5";
$result13 = mysqli_query($conn,$query13);
$row13 = mysqli_fetch_assoc($result13);
$average13= $row13['average'];


$query14 = "SELECT AVG(phpa) AS average FROM co5";
$result14 = mysqli_query($conn,$query14);
$row14 = mysqli_fetch_assoc($result14);
$average14= $row14['average'];


$query15 = "SELECT AVG(phpu) AS average FROM co5";
$result15 = mysqli_query($conn,$query15);
$row15 = mysqli_fetch_assoc($result15);
$average15= $row15['average'];

echo"<table border = '2' width = '100%'>";
	echo" <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	echo"<tr><td>$average1	</td><td>$average2</td><td>$average3</td><td>$average4</td><td>$average5</td><td>$average6</td><td>$average7</td><td>$average8</td><td>$average9</td><td>$average10</td><td>$average11</td><td>$average12</td><td>$average13</td><td>$average14</td><td>$average15</td></tr>";
echo"<br><br>";
echo"<center><h1>CO5<h1></center>";

$query1 = "SELECT AVG(ser) AS average FROM co6";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
$average1= $row1['average'];

$query2 = "SELECT AVG(sea) AS average FROM co6";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$average2= $row2['average'];

$query3 = "SELECT AVG(seu) AS average FROM co6";
$result3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_assoc($result3);
$average3= $row3['average'];


$query4 = "SELECT AVG(ccr) AS average FROM co6";
$result4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_assoc($result4);
$average4= $row4['average'];


$query5 = "SELECT AVG(cca) AS average FROM co6";
$result5 = mysqli_query($conn,$query5);
$row5 = mysqli_fetch_assoc($result5);
$average5= $row5['average'];


$query6 = "SELECT AVG(ccu) AS average FROM co6";
$result6 = mysqli_query($conn,$query6);
$row6 = mysqli_fetch_assoc($result6);
$average6= $row6['average'];


$query7 = "SELECT AVG(pyr) AS average FROM co6";
$result7 = mysqli_query($conn,$query7);
$row7 = mysqli_fetch_assoc($result7);
$average7= $row7['average'];


$query8 = "SELECT AVG(pya) AS average FROM co6";
$result8 = mysqli_query($conn,$query8);
$row8 = mysqli_fetch_assoc($result8);
$average8= $row8['average'];


$query9 = "SELECT AVG(pyu) AS average FROM co6";
$result9 = mysqli_query($conn,$query9);
$row9 = mysqli_fetch_assoc($result9);
$average9= $row9['average'];


$query10 = "SELECT AVG(cnr) AS average FROM co6";
$result10 = mysqli_query($conn,$query10);
$row10 = mysqli_fetch_assoc($result10);
$average10= $row10['average'];


$query11 = "SELECT AVG(cna) AS average FROM co6";
$result11 = mysqli_query($conn,$query11);
$row11 = mysqli_fetch_assoc($result11);
$average11= $row11['average'];


$query12 = "SELECT AVG(cnu) AS average FROM co6";
$result12 = mysqli_query($conn,$query12);
$row12 = mysqli_fetch_assoc($result12);
$average12= $row12['average'];


$query13 = "SELECT AVG(phpr) AS average FROM co6";
$result13 = mysqli_query($conn,$query13);
$row13 = mysqli_fetch_assoc($result13);
$average13= $row13['average'];


$query14 = "SELECT AVG(phpa) AS average FROM co6";
$result14 = mysqli_query($conn,$query14);
$row14 = mysqli_fetch_assoc($result14);
$average14= $row14['average'];


$query15 = "SELECT AVG(phpu) AS average FROM co6";
$result15 = mysqli_query($conn,$query15);
$row15 = mysqli_fetch_assoc($result15);
$average15= $row15['average'];

echo"<table border = '2' width = '100%'>";
	echo" <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	echo"<tr><td>$average1	</td><td>$average2</td><td>$average3</td><td>$average4</td><td>$average5</td><td>$average6</td><td>$average7</td><td>$average8</td><td>$average9</td><td>$average10</td><td>$average11</td><td>$average12</td><td>$average13</td><td>$average14</td><td>$average15</td></tr>";
echo"<br><br>";
echo"<center><h1>CO6<h1></center>";
$query1 = "SELECT AVG(ser) AS average FROM co7";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
$average1= $row1['average'];

$query2 = "SELECT AVG(sea) AS average FROM co7";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$average2= $row2['average'];

$query3 = "SELECT AVG(seu) AS average FROM co7";
$result3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_assoc($result3);
$average3= $row3['average'];


$query4 = "SELECT AVG(ccr) AS average FROM co7";
$result4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_assoc($result4);
$average4= $row4['average'];


$query5 = "SELECT AVG(cca) AS average FROM co7";
$result5 = mysqli_query($conn,$query5);
$row5 = mysqli_fetch_assoc($result5);
$average5= $row5['average'];


$query6 = "SELECT AVG(ccu) AS average FROM co7";
$result6 = mysqli_query($conn,$query6);
$row6 = mysqli_fetch_assoc($result6);
$average6= $row6['average'];


$query7 = "SELECT AVG(pyr) AS average FROM co7";
$result7 = mysqli_query($conn,$query7);
$row7 = mysqli_fetch_assoc($result7);
$average7= $row7['average'];


$query8 = "SELECT AVG(pya) AS average FROM co7";
$result8 = mysqli_query($conn,$query8);
$row8 = mysqli_fetch_assoc($result8);
$average8= $row8['average'];


$query9 = "SELECT AVG(pyu) AS average FROM co7";
$result9 = mysqli_query($conn,$query9);
$row9 = mysqli_fetch_assoc($result9);
$average9= $row9['average'];


$query10 = "SELECT AVG(cnr) AS average FROM co7";
$result10 = mysqli_query($conn,$query10);
$row10 = mysqli_fetch_assoc($result10);
$average10= $row10['average'];


$query11 = "SELECT AVG(cna) AS average FROM co7";
$result11 = mysqli_query($conn,$query11);
$row11 = mysqli_fetch_assoc($result11);
$average11= $row11['average'];


$query12 = "SELECT AVG(cnu) AS average FROM co7";
$result12 = mysqli_query($conn,$query12);
$row12 = mysqli_fetch_assoc($result12);
$average12= $row12['average'];


$query13 = "SELECT AVG(phpr) AS average FROM co7";
$result13 = mysqli_query($conn,$query13);
$row13 = mysqli_fetch_assoc($result13);
$average13= $row13['average'];


$query14 = "SELECT AVG(phpa) AS average FROM co7";
$result14 = mysqli_query($conn,$query14);
$row14 = mysqli_fetch_assoc($result14);
$average14= $row14['average'];


$query15 = "SELECT AVG(phpu) AS average FROM co7";
$result15 = mysqli_query($conn,$query15);
$row15 = mysqli_fetch_assoc($result15);
$average15= $row15['average'];

echo"<table border = '2' width = '100%'>";
	echo" <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	echo"<tr><td>$average1	</td><td>$average2</td><td>$average3</td><td>$average4</td><td>$average5</td><td>$average6</td><td>$average7</td><td>$average8</td><td>$average9</td><td>$average10</td><td>$average11</td><td>$average12</td><td>$average13</td><td>$average14</td><td>$average15</td></tr>";
echo"<br><br>";
echo"<center><h1>CO7<h1></center>";
$query1 = "SELECT AVG(ser) AS average FROM co8";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
$average1= $row1['average'];

$query2 = "SELECT AVG(sea) AS average FROM co8";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$average2= $row2['average'];

$query3 = "SELECT AVG(seu) AS average FROM co8";
$result3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_assoc($result3);
$average3= $row3['average'];


$query4 = "SELECT AVG(ccr) AS average FROM co8";
$result4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_assoc($result4);
$average4= $row4['average'];


$query5 = "SELECT AVG(cca) AS average FROM co8";
$result5 = mysqli_query($conn,$query5);
$row5 = mysqli_fetch_assoc($result5);
$average5= $row5['average'];


$query6 = "SELECT AVG(ccu) AS average FROM co8";
$result6 = mysqli_query($conn,$query6);
$row6 = mysqli_fetch_assoc($result6);
$average6= $row6['average'];


$query7 = "SELECT AVG(pyr) AS average FROM co8";
$result7 = mysqli_query($conn,$query7);
$row7 = mysqli_fetch_assoc($result7);
$average7= $row7['average'];


$query8 = "SELECT AVG(pya) AS average FROM co8";
$result8 = mysqli_query($conn,$query8);
$row8 = mysqli_fetch_assoc($result8);
$average8= $row8['average'];


$query9 = "SELECT AVG(pyu) AS average FROM co8";
$result9 = mysqli_query($conn,$query9);
$row9 = mysqli_fetch_assoc($result9);
$average9= $row9['average'];


$query10 = "SELECT AVG(cnr) AS average FROM co8";
$result10 = mysqli_query($conn,$query10);
$row10 = mysqli_fetch_assoc($result10);
$average10= $row10['average'];


$query11 = "SELECT AVG(cna) AS average FROM co8";
$result11 = mysqli_query($conn,$query11);
$row11 = mysqli_fetch_assoc($result11);
$average11= $row11['average'];


$query12 = "SELECT AVG(cnu) AS average FROM co8";
$result12 = mysqli_query($conn,$query12);
$row12 = mysqli_fetch_assoc($result12);
$average12= $row12['average'];


$query13 = "SELECT AVG(phpr) AS average FROM co8";
$result13 = mysqli_query($conn,$query13);
$row13 = mysqli_fetch_assoc($result13);
$average13= $row13['average'];


$query14 = "SELECT AVG(phpa) AS average FROM co8";
$result14 = mysqli_query($conn,$query14);
$row14 = mysqli_fetch_assoc($result14);
$average14= $row14['average'];


$query15 = "SELECT AVG(phpu) AS average FROM co8";
$result15 = mysqli_query($conn,$query15);
$row15 = mysqli_fetch_assoc($result15);
$average15= $row15['average'];

echo"<table border = '2' width = '100%'>";
	echo" <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	echo"<tr><td>$average1	</td><td>$average2</td><td>$average3</td><td>$average4</td><td>$average5</td><td>$average6</td><td>$average7</td><td>$average8</td><td>$average9</td><td>$average10</td><td>$average11</td><td>$average12</td><td>$average13</td><td>$average14</td><td>$average15</td></tr>";
echo"<br><br>";
echo"<center><h1>CO8<h1></center>";
$query1 = "SELECT AVG(ser) AS average FROM co9";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
$average1= $row1['average'];

$query2 = "SELECT AVG(sea) AS average FROM co9";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$average2= $row2['average'];

$query3 = "SELECT AVG(seu) AS average FROM co9";
$result3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_assoc($result3);
$average3= $row3['average'];


$query4 = "SELECT AVG(ccr) AS average FROM co9";
$result4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_assoc($result4);
$average4= $row4['average'];


$query5 = "SELECT AVG(cca) AS average FROM co9";
$result5 = mysqli_query($conn,$query5);
$row5 = mysqli_fetch_assoc($result5);
$average5= $row5['average'];


$query6 = "SELECT AVG(ccu) AS average FROM co9";
$result6 = mysqli_query($conn,$query6);
$row6 = mysqli_fetch_assoc($result6);
$average6= $row6['average'];


$query7 = "SELECT AVG(pyr) AS average FROM co9";
$result7 = mysqli_query($conn,$query7);
$row7 = mysqli_fetch_assoc($result7);
$average7= $row7['average'];


$query8 = "SELECT AVG(pya) AS average FROM co9";
$result8 = mysqli_query($conn,$query8);
$row8 = mysqli_fetch_assoc($result8);
$average8= $row8['average'];


$query9 = "SELECT AVG(pyu) AS average FROM co9";
$result9 = mysqli_query($conn,$query9);
$row9 = mysqli_fetch_assoc($result9);
$average9= $row9['average'];


$query10 = "SELECT AVG(cnr) AS average FROM co9";
$result10 = mysqli_query($conn,$query10);
$row10 = mysqli_fetch_assoc($result10);
$average10= $row10['average'];


$query11 = "SELECT AVG(cna) AS average FROM co9";
$result11 = mysqli_query($conn,$query11);
$row11 = mysqli_fetch_assoc($result11);
$average11= $row11['average'];


$query12 = "SELECT AVG(cnu) AS average FROM co9";
$result12 = mysqli_query($conn,$query12);
$row12 = mysqli_fetch_assoc($result12);
$average12= $row12['average'];


$query13 = "SELECT AVG(phpr) AS average FROM co9";
$result13 = mysqli_query($conn,$query13);
$row13 = mysqli_fetch_assoc($result13);
$average13= $row13['average'];


$query14 = "SELECT AVG(phpa) AS average FROM co9";
$result14 = mysqli_query($conn,$query14);
$row14 = mysqli_fetch_assoc($result14);
$average14= $row14['average'];


$query15 = "SELECT AVG(phpu) AS average FROM co9";
$result15 = mysqli_query($conn,$query15);
$row15 = mysqli_fetch_assoc($result15);
$average15= $row15['average'];

echo"<table border = '2' width = '100%'>";
	echo" <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	echo"<tr><td>$average1	</td><td>$average2</td><td>$average3</td><td>$average4</td><td>$average5</td><td>$average6</td><td>$average7</td><td>$average8</td><td>$average9</td><td>$average10</td><td>$average11</td><td>$average12</td><td>$average13</td><td>$average14</td><td>$average15</td></tr>";
echo"<br><br>";
echo"<center><h1>CO9<h1></center>";
$query1 = "SELECT AVG(ser) AS average FROM co10";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
$average1= $row1['average'];

$query2 = "SELECT AVG(sea) AS average FROM co10";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$average2= $row2['average'];

$query3 = "SELECT AVG(seu) AS average FROM co10";
$result3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_assoc($result3);
$average3= $row3['average'];


$query4 = "SELECT AVG(ccr) AS average FROM co10";
$result4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_assoc($result4);
$average4= $row4['average'];


$query5 = "SELECT AVG(cca) AS average FROM co10";
$result5 = mysqli_query($conn,$query5);
$row5 = mysqli_fetch_assoc($result5);
$average5= $row5['average'];


$query6 = "SELECT AVG(ccu) AS average FROM co10";
$result6 = mysqli_query($conn,$query6);
$row6 = mysqli_fetch_assoc($result6);
$average6= $row6['average'];


$query7 = "SELECT AVG(pyr) AS average FROM co10";
$result7 = mysqli_query($conn,$query7);
$row7 = mysqli_fetch_assoc($result7);
$average7= $row7['average'];


$query8 = "SELECT AVG(pya) AS average FROM co10";
$result8 = mysqli_query($conn,$query8);
$row8 = mysqli_fetch_assoc($result8);
$average8= $row8['average'];


$query9 = "SELECT AVG(pyu) AS average FROM co10";
$result9 = mysqli_query($conn,$query9);
$row9 = mysqli_fetch_assoc($result9);
$average9= $row9['average'];


$query10 = "SELECT AVG(cnr) AS average FROM co10";
$result10 = mysqli_query($conn,$query10);
$row10 = mysqli_fetch_assoc($result10);
$average10= $row10['average'];


$query11 = "SELECT AVG(cna) AS average FROM co10";
$result11 = mysqli_query($conn,$query11);
$row11 = mysqli_fetch_assoc($result11);
$average11= $row11['average'];


$query12 = "SELECT AVG(cnu) AS average FROM co10";
$result12 = mysqli_query($conn,$query12);
$row12 = mysqli_fetch_assoc($result12);
$average12= $row12['average'];


$query13 = "SELECT AVG(phpr) AS average FROM co10";
$result13 = mysqli_query($conn,$query13);
$row13 = mysqli_fetch_assoc($result13);
$average13= $row13['average'];


$query14 = "SELECT AVG(phpa) AS average FROM co10";
$result14 = mysqli_query($conn,$query14);
$row14 = mysqli_fetch_assoc($result14);
$average14= $row14['average'];


$query15 = "SELECT AVG(phpu) AS average FROM co10";
$result15 = mysqli_query($conn,$query15);
$row15 = mysqli_fetch_assoc($result15);
$average15= $row15['average'];

echo"<table border = '2' width = '100%'>";
	echo" <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	echo"<tr><td>$average1	</td><td>$average2</td><td>$average3</td><td>$average4</td><td>$average5</td><td>$average6</td><td>$average7</td><td>$average8</td><td>$average9</td><td>$average10</td><td>$average11</td><td>$average12</td><td>$average13</td><td>$average14</td><td>$average15</td></tr>";
echo"<br><br>";
echo"<center><h1>CO10<h1></center>";



$query1 = "SELECT AVG(ser) AS average FROM curr";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
$average1= $row1['average'];

$query2 = "SELECT AVG(sea) AS average FROM curr";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$average2= $row2['average'];

$query3 = "SELECT AVG(seu) AS average FROM curr";
$result3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_assoc($result3);
$average3= $row3['average'];


$query4 = "SELECT AVG(ccr) AS average FROM curr";
$result4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_assoc($result4);
$average4= $row4['average'];


$query5 = "SELECT AVG(cca) AS average FROM curr";
$result5 = mysqli_query($conn,$query5);
$row5 = mysqli_fetch_assoc($result5);
$average5= $row5['average'];


$query6 = "SELECT AVG(ccu) AS average FROM curr";
$result6 = mysqli_query($conn,$query6);
$row6 = mysqli_fetch_assoc($result6);
$average6= $row6['average'];

	
$query7 = "SELECT AVG(pyr) AS average FROM curr";
$result7 = mysqli_query($conn,$query7);
$row7 = mysqli_fetch_assoc($result7);
$average7= $row7['average'];


$query8 = "SELECT AVG(pya) AS average FROM curr";
$result8 = mysqli_query($conn,$query8);
$row8 = mysqli_fetch_assoc($result8);
$average8= $row8['average'];


$query9 = "SELECT AVG(pyu) AS average FROM curr";
$result9 = mysqli_query($conn,$query9);
$row9 = mysqli_fetch_assoc($result9);
$average9= $row9['average'];


$query10 = "SELECT AVG(cnr) AS average FROM curr";
$result10 = mysqli_query($conn,$query10);
$row10 = mysqli_fetch_assoc($result10);
$average10= $row10['average'];


$query11 = "SELECT AVG(cna) AS average FROM curr";
$result11 = mysqli_query($conn,$query11);
$row11 = mysqli_fetch_assoc($result11);
$average11= $row11['average'];


$query12 = "SELECT AVG(cnu) AS average FROM curr";
$result12 = mysqli_query($conn,$query12);
$row12 = mysqli_fetch_assoc($result12);
$average12= $row12['average'];


$query13 = "SELECT AVG(phpr) AS average FROM curr";
$result13 = mysqli_query($conn,$query13);
$row13 = mysqli_fetch_assoc($result13);
$average13= $row13['average'];


$query14 = "SELECT AVG(phpa) AS average FROM curr";
$result14 = mysqli_query($conn,$query14);
$row14 = mysqli_fetch_assoc($result14);
$average14= $row14['average'];


$query15 = "SELECT AVG(phpu) AS average FROM curr";
$result15 = mysqli_query($conn,$query15);
$row15 = mysqli_fetch_assoc($result15);
$average15= $row15['average'];

echo"<table border = '2' width = '100%'>";
	echo" <th colspan = '3'>SE</th> <th colspan = '3'>CC</th><th colspan = '3'>Python</th><th colspan = '3'>CN</th><th colspan = '3'>PHP</th>  </tr>";
	echo"<td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td><td>Relevance</td><td>Attainment</td><td>Usefulness</td>";
	echo"<tr><td>$average1	</td><td>$average2</td><td>$average3</td><td>$average4</td><td>$average5</td><td>$average6</td><td>$average7</td><td>$average8</td><td>$average9</td><td>$average10</td><td>$average11</td><td>$average12</td><td>$average13</td><td>$average14</td><td>$average15</td></tr>";
echo"<br><br>";
echo"<center><h1>Curriculum<h1></center>";
echo"<br>";

$query1 = "SELECT AVG(se) AS average FROM class_th";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
$average1= $row1['average'];


$query2 = "SELECT AVG(cc) AS average FROM class_th";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$average2= $row2['average'];

$query3 = "SELECT AVG(py) AS average FROM class_th";
$result3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_assoc($result3);
$average3= $row3['average'];


$query4 = "SELECT AVG(cn) AS average FROM class_th";
$result4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_assoc($result4);
$average4= $row4['average'];


$query5 = "SELECT AVG(php) AS average FROM class_th";
$result5 = mysqli_query($conn,$query5);
$row5 = mysqli_fetch_assoc($result5);
$average5= $row5['average'];



	echo"<center>";
	echo"<table border = '2' width = '70%'>";
	echo"<tr> <th>SE</th> <th>CC</th><th>Python</th><th>CN</th><th>PHP</th>  </tr>";
	echo"<tr><td>$average1	</td><td>$average2</td><td>$average3</td><td>$average4</td><td>$average5</td>";
	echo"<br>";
echo"<center><h1>Classes Engaged(Theory)<h1></center>";
	
$query1 = "SELECT AVG(se) AS average FROM class_pr";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
$average1= $row1['average'];


$query2 = "SELECT AVG(cc) AS average FROM class_pr";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$average2= $row2['average'];

$query3 = "SELECT AVG(py) AS average FROM class_pr";
$result3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_assoc($result3);
$average3= $row3['average'];


$query4 = "SELECT AVG(cn) AS average FROM class_pr";
$result4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_assoc($result4);
$average4= $row4['average'];


$query5 = "SELECT AVG(php) AS average FROM class_pr";
$result5 = mysqli_query($conn,$query5);
$row5 = mysqli_fetch_assoc($result5);
$average5= $row5['average'];



	echo"<center>";
	echo"<table border = '2' width = '70%'>";
	echo"<tr> <th>SE</th> <th>CC</th><th>Python</th><th>CN</th><th>PHP</th>  </tr>";
	echo"<tr><td>$average1	</td><td>$average2</td><td>$average3</td><td>$average4</td><td>$average5</td>";
	echo"<br>";
echo"<center><h1>Classes Engaged(Practical)<h1></center>";

$query1 = "SELECT AVG(se) AS average FROM class_pr";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
$average1= $row1['average'];


$query2 = "SELECT AVG(cc) AS average FROM class_pr";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$average2= $row2['average'];

$query3 = "SELECT AVG(py) AS average FROM class_pr";
$result3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_assoc($result3);
$average3= $row3['average'];


$query4 = "SELECT AVG(cn) AS average FROM class_pr";
$result4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_assoc($result4);
$average4= $row4['average'];


$query5 = "SELECT AVG(php) AS average FROM class_pr";
$result5 = mysqli_query($conn,$query5);
$row5 = mysqli_fetch_assoc($result5);
$average5= $row5['average'];



	echo"<center>";
	echo"<table border = '2' width = '70%'>";
	echo"<tr> <th>SE</th> <th>CC</th><th>Python</th><th>CN</th><th>PHP</th>  </tr>";
	echo"<tr><td>$average1	</td><td>$average2</td><td>$average3</td><td>$average4</td><td>$average5</td>";
	echo"<br>";
echo"<center><h1>Classes Engaged(Practical)<h1></center>";

$query1 = "SELECT AVG(se) AS average FROM ins";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
$average1= $row1['average'];


$query2 = "SELECT AVG(cc) AS average FROM ins";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$average2= $row2['average'];

$query3 = "SELECT AVG(py) AS average FROM ins";
$result3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_assoc($result3);
$average3= $row3['average'];


$query4 = "SELECT AVG(cn) AS average FROM ins";
$result4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_assoc($result4);
$average4= $row4['average'];


$query5 = "SELECT AVG(php) AS average FROM ins";
$result5 = mysqli_query($conn,$query5);
$row5 = mysqli_fetch_assoc($result5);
$average5= $row5['average'];



	echo"<center>";
	echo"<table border = '2' width = '70%'>";
	echo"<tr> <th>SE</th> <th>CC</th><th>Python</th><th>CN</th><th>PHP</th>  </tr>";
	echo"<tr><td>$average1	</td><td>$average2</td><td>$average3</td><td>$average4</td><td>$average5</td>";
	echo"<br>";
echo"<center><h1>Instructions Methods And Media<h1></center>";

$query1 = "SELECT AVG(se) AS average FROM eva";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
$average1= $row1['average'];


$query2 = "SELECT AVG(cc) AS average FROM eva";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$average2= $row2['average'];

$query3 = "SELECT AVG(py) AS average FROM eva";
$result3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_assoc($result3);
$average3= $row3['average'];


$query4 = "SELECT AVG(cn) AS average FROM eva";
$result4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_assoc($result4);
$average4= $row4['average'];


$query5 = "SELECT AVG(php) AS average FROM eva";
$result5 = mysqli_query($conn,$query5);
$row5 = mysqli_fetch_assoc($result5);
$average5= $row5['average'];



	echo"<center>";
	echo"<table border = '2' width = '70%'>";
	echo"<tr> <th>SE</th> <th>CC</th><th>Python</th><th>CN</th><th>PHP</th>  </tr>";
	echo"<tr><td>$average1	</td><td>$average2</td><td>$average3</td><td>$average4</td><td>$average5</td>";
	echo"<br>";
echo"<center><h1>Evaluation of Seminar,Assignments,Viva etc.<h1></center>";

$query1 = "SELECT AVG(se) AS average FROM syll_th";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
$average1= $row1['average'];


$query2 = "SELECT AVG(cc) AS average FROM syll_th";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$average2= $row2['average'];

$query3 = "SELECT AVG(py) AS average FROM syll_th";
$result3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_assoc($result3);
$average3= $row3['average'];


$query4 = "SELECT AVG(cn) AS average FROM syll_th";
$result4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_assoc($result4);
$average4= $row4['average'];


$query5 = "SELECT AVG(php) AS average FROM syll_th";
$result5 = mysqli_query($conn,$query5);
$row5 = mysqli_fetch_assoc($result5);
$average5= $row5['average'];



	echo"<center>";
	echo"<table border = '2' width = '70%'>";
	echo"<tr> <th>SE</th> <th>CC</th><th>Python</th><th>CN</th><th>PHP</th>  </tr>";
	echo"<tr><td>$average1	</td><td>$average2</td><td>$average3</td><td>$average4</td><td>$average5</td>";
	echo"<br>";
echo"<center><h1>Syllabus Covered(Theory)<h1></center>";


$query1 = "SELECT AVG(se) AS average FROM syll_pr";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
$average1= $row1['average'];


$query2 = "SELECT AVG(cc) AS average FROM syll_pr";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$average2= $row2['average'];

$query3 = "SELECT AVG(py) AS average FROM syll_pr";
$result3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_assoc($result3);
$average3= $row3['average'];


$query4 = "SELECT AVG(cn) AS average FROM syll_pr";
$result4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_assoc($result4);
$average4= $row4['average'];


$query5 = "SELECT AVG(php) AS average FROM syll_pr";
$result5 = mysqli_query($conn,$query5);
$row5 = mysqli_fetch_assoc($result5);
$average5= $row5['average'];



	echo"<center>";
	echo"<table border = '2' width = '70%'>";
	echo"<th>SE</th> <th>CC</th><th>Python</th><th>CN</th><th>PHP</th>  </tr>";
	echo"<tr><td>$average1	</td><td>$average2</td><td>$average3</td><td>$average4</td><td>$average5</td>";
	echo"<br>";
echo"<center><h1>Syllabus Covered(Practical)<h1></center>";

$query1 = "SELECT AVG(se) AS average FROM syll_pr";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
$average1= $row1['average'];


$query2 = "SELECT AVG(cc) AS average FROM fac";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($result2);
$average2= $row2['average'];

$query3 = "SELECT AVG(py) AS average FROM fac";
$result3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_assoc($result3);
$average3= $row3['average'];


$query4 = "SELECT AVG(cn) AS average FROM fac";
$result4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_assoc($result4);
$average4= $row4['average'];


$query5 = "SELECT AVG(php) AS average FROM fac";
$result5 = mysqli_query($conn,$query5);
$row5 = mysqli_fetch_assoc($result5);
$average5= $row5['average'];



	echo"<center>";
	echo"<table border = '2' width = '70%'>";
	echo" <th>SE</th> <th>CC</th><th>Python</th><th>CN</th><th>PHP</th>  </tr>";
	echo"<tr><td>$average1	</td><td>$average2</td><td>$average3</td><td>$average4</td><td>$average5</td>";
	echo"<br>";
echo"<center><h1>Facilities And Infrastructure<h1></center>";

?>
</body>
</html>	