<?php
// Connect to MySQL
//$link = new mysqli( 'localhost', 'root', '', 'test' );
$link = new mysqli( 'localhost', 'root', '', 'shopping' );
if ( $link->connect_errno ) {
  die( "Failed to connect to MySQL: (" . $link->connect_errno . ") " . $link->connect_error );
}

// Fetch the data
/*$query = "
  SELECT category,value1
  FROM my_chart_data
  ORDER BY category ASC";
  */
  $query = "
  SELECT productName ,productPrice FROM products ORDER BY category ASC";

$result = $link->query( $query );

// All good?
if ( !$result ) {
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
echo json_encode( $data );

// Close the connection
mysqli_close($link);
?>