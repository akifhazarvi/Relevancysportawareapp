<?php
$servername = "sql204.base.pk";
$username = "basep_15870271";
$password = "Ptcl@123";
$dbname = "basep_15870271_nfl_standings";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM afc_table";
$result = $conn->query($sql);
$result_Team= array();
$result_id= array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      $recipes[] = array('post'=>$row);
       
  }

}
else {
    echo "0 results";
}
$output = json_encode(array('posts' => $recipes));
echo $output;
$conn->close();
?>