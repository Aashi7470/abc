<?php
include("../admin/include/config.php");

$query = "SELECT DISTINCT * FROM varient WHERE product_id='".$_GET['product_id']."' and color_id='".$_GET['color_id']."'";
$result = mysqli_query($con, $query);


$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $size_query = "SELECT * FROM size WHERE id='".$row['size_id']."' limit 1";
$size_result = mysqli_query($con, $size_query);
$size_row = mysqli_fetch_assoc($size_result);


   $rows[$size_row['id']] = $size_row['name'];
  
   

}
// Print all rows
echo json_encode($rows);
// die();


?>