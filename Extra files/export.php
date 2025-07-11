  <?php
      $conn = new mysqli('localhost', 'root', '', 'try');
$sql = 'SELECT * FROM examp ORDER BY userid ASC';
$result = mysqli_query($conn, $sql);

$html= '<table><tr><td>userid</td><td>username</td><td>Department</td><td>Phone</td><td>Email</td></tr>';
  while ($row = mysqli_fetch_assoc($result)) { 
$html .='<tr><td>'. $row['userid'].'</td><td>'. $row['username'].'</td><td>'. $row['Department'].'</td><td>'.$row['Phone'].'</td><td>'.$row['email'].'</td><tr>';
  }
$html .='</table>';
header('Content-Type: application/xls');
header('Content-Disposition: attachment; filename=report.xls');

echo $html;

?>