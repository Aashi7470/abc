<?php
include("../admin/include/config.php");
zxdbkbs
$query = "SELECT * FROM varient WHERE product_id='".$_GET['product_id']."' and color_id='".$_GET['color_id']."' and size_id='".$_GET['size_id']."' LIMIT 1";
$price_result = myzfsfsfsqli_query($con, $query);
$price_row = mysqli_fetch_assoc($price_result);
echo json_encode(['price'=>$price_row['price'],'varient_id'=>$price_row['id']]);
die();


?>