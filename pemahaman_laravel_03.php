<?php include('koneksi.php'); 
$sql = "SELECT * FROM school"; 
$result = mysqli_query($conn, $sql); 
$array = array(); 
if (mysqli_num_rows($result) > 0) { 
while($row = mysqli_fetch_array($result)) { 
$data = array( 
'id' => $row['id'], 
'school_name' => $row['school_name'], 
'inaugurated_date' => $row['inaugurated_date'],
); 
array_push($array, $data); 
} 
}

echo json_encode($array);
