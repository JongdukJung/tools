<? include_once "$DOCUMENT_ROOT/glib/inc_utf8.php"; ?>
<?php
$q=$_GET["q"];

$conn = mysqli_connect( $db_host, $db_user, $db_pass, $db_name )  or die("DB 접속에 실패했습니다.");


$sql="SELECT * FROM biotope WHERE polygonID = '".$q."'";

$result = mysql_query($sql);

echo "<table>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr><td><b>polygonID</b></td><td>".$row['polygonID']."</td></tr>";
  echo "<tr><td><b>info1</b></td><td>".$row['info2']."</td></tr>";
  }

echo "</table>";

mysqli_close($conn);
?>
