<?php
// Connect to MySQL
$link = new mysqli('localhost','root','','bilal' );

if ( $link->connect_errno ) {
  die( "Failed to connect to MySQL: (" . $link->connect_errno . ") " . $link->connect_error );
}

// Fetch the data
$result = mysqli_query($link,"select count(*) as totalstudent from students  ");
$count_students = mysqli_num_rows($result);

$result2 = mysqli_query($link,"select count(*) as totalclass from class");
								$count_class = mysqli_num_rows($result2);

// All good?
if ( !$result || !$result2) {
  // Nope
  $message  = 'Invalid query: ' . $link->error . "n";
  $message .= 'Whole query: ' . $query;
  die( $message );
}

// Set proper HTTP response headers
header( 'Content-Type: application/json' );



// Print out rows
$data = array();
while ( $row = $result->fetch_assoc() ) {
  $data[] = $row;
}
// Print out rows

while ( $row = $result2->fetch_assoc() ) {
  $data[] = $row;
}
//$data[]= $count_students;
//$data[]= $count_class;
echo json_encode( $data );

// Close the connection
mysqli_close($link);
?>