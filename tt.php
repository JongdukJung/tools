<?php
	$polID = $_POST["polID"];
	$position_lat= $_POST["position_lat"];
	$position_long= $_POST["position_long"];
	$recDate= $_POST["recDate"];
		
	$conn = mysqli_connect( $db_host, $db_user, $db_pass, $db_name )  or die("DB 접속에 실패했습니다.");
		$query1 = "SELECT * FROM biotope WHERE polygonID = '$polID'";
		$query1= iconv('utf8', 'euckr', $query1);
        $result1 = mysqli_query( $conn, $query1 );
		
		$info1= iconv('euckr', 'utf8', $row1["info1"]);
		$info2= iconv('euckr', 'utf8', $row1["info2"]);
		$tree1= iconv('euckr', 'utf8', $row1["tree1"]);
		$tree2= iconv('euckr', 'utf8', $row1["tree2"]);
		$tree3= iconv('euckr', 'utf8', $row1["tree3"]);
		$ratio1= iconv('euckr', 'utf8', $row1["ratio1"]);
		$ratio2= iconv('euckr', 'utf8', $row1["ratio2"]);
		$ratio3= iconv('euckr', 'utf8', $row1["ratio3"]);
		


		while( $row1 = mysqli_fetch_array( $result1 ) ) {
			  
			  
		$info1= iconv('euckr', 'utf8', $row1["info1"]);
		$info2= iconv('euckr', 'utf8', $row1["info2"]);
		$tree1= iconv('euckr', 'utf8', $row1["tree1"]);
		$tree2= iconv('euckr', 'utf8', $row1["tree2"]);
		$tree3= iconv('euckr', 'utf8', $row1["tree3"]);
		$ratio1= iconv('euckr', 'utf8', $row1["ratio1"]);
		$ratio2= iconv('euckr', 'utf8', $row1["ratio2"]);
		$ratio3= iconv('euckr', 'utf8', $row1["ratio3"]);
			
			echo '<form method="post" action="record.php">
			<input type ="hidden" name="polID" value="'.$polID.'">
			<input type ="hidden" name="tree1" value="'.$tree1.'">
			<input type ="hidden" name="tree2" value="'.$tree2.'">
			<input type ="hidden" name="tree3" value="'.$tree3.'">			
			<input type ="hidden" name="ratio1" value="'.$ratio1.'">
			<input type ="hidden" name="ratio2" value="'.$ratio2.'">
			<input type ="hidden" name="ratio3" value="'.$ratio3.'">
			<input type ="hidden" name="position_lat" value="'.$position_lat.'">
			<input type ="hidden" name="position_long" value="'.$position_long.'">
			<input type ="hidden" name="recDate" value="'.$recDate.'">
			
			<tr><td style="text-align:right;"><b>Polygon ID : </b></td><td><b>'.$polID.'</b></td></tr>
			<tr><td style="text-align:right;"><b>임상도 : </b></td><td>'.$info1.'</td>
			    <td style="text-align:right;"><b>현존식생도 : </b></td><td>'.$info2.'</td></tr>
			<tr><td style="text-align:right;"><b>수종1 : </b></td><td><input type ="text" name="tree1" value="'.$tree1.'" list="treeList"></td>
				<td style="text-align:right;"><b>피도1 : </b></td><td><input type ="text" name="ratio1" value="'.$ratio1.'" list="ratioList1"></td></tr>
			<tr><td style="text-align:right;"><b>수종2 : </b></td><td><input type ="text" name="tree2" value="'.$tree2.'" list="treeList"></td>
				<td style="text-align:right;"><b>피도2 : </b></td><td><input type ="text" name="ratio2" value="'.$ratio2.'" list="ratioList2"></td></tr>
			<tr><td style="text-align:right;"><b>수종3 : </b></td><td><input type ="text" name="tree3" value="'.$tree3.'" list="treeList"></td>
				<td style="text-align:right;"><b>피도3 : </b></td><td><input type ="text" name="ratio3" value="'.$ratio3.'" list="ratioList3"></td></tr>
			<tr><td style="text-align:right;"><b>위도 : </b></td><td>'.$position_lat.'</td>
				<td style="text-align:right;"><b>경도 : </b></td><td>'.$position_long.'</td></tr>
			<tr><td style="text-align:right;"><b>기록시간 : </b></td><td>'.$recDate.'</td></tr>

<datalist id="treeList">
		<option value="갈참나무"></option>
 		<option value="고로쇠나무"></option>
		<option value="굴참나무"></option>
		<option value="낙엽송"></option>
		<option value="떡갈나무"></option>
		<option value="리기다소나무"></option>
		<option value="물푸레나무"></option>
		<option value="밤나무"></option>
 		<option value="백합나무"></option>
		<option value="상수리나무"></option>
		<option value="소나무"></option>
		<option value="신갈나무"></option>
		<option value="아까시나무"></option>
		<option value="은사시나무"></option>
		<option value="은행나무"></option>
 		<option value="자작나무"></option>
		<option value="잣나무"></option>
		<option value="졸참나무"></option>
		<option value="편백나무"></option>
		<option value="경작지"></option>
		<option value="관목덤불"></option>
		<option value="벌채지"></option>
		<option value="수체"></option>
		<option value="주거지"></option>
		<option value="초지"></option>
</datalist>
<datalist id="ratioList1">
    <option value="100"></option>
	<option value="90"></option>
	<option value="80"></option>
	<option value="70"></option>
	<option value="60"></option>
	<option value="50"></option>
	<option value="40"></option>
	<option value="30"></option>
</datalist>
<datalist id="ratioList2">
	<option value="50"></option>
	<option value="40"></option>
	<option value="30"></option>
	<option value="20"></option>
	<option value="10"></option>
</datalist>
<datalist id="ratioList3">
	<option value="30"></option>
	<option value="20"></option>
	<option value="10"></option>
</datalist>

			<tr><td><input type ="submit" value="저장"></td><td></td>
				<td><input type=button name="cancle" value="취소" onClick="<script>self.close();window.close();</script>"></td></tr>
			</form>';

	}

 ?>