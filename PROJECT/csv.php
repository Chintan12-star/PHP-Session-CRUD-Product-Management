<?php

include "db.php";
header("Content-type:text/csv");
header("Content-disposition:attachment;filename=product.csv");
$output = fopen("php://output","w");
fputcsv($output,array("Product_ID","Product_name","Category","Price","Quantity","Brand","description"));
$result=$conn->query("select * from products");
while ($row =$result-> fetch_assoc()) {
    fputcsv($output,$row);
}
?>
