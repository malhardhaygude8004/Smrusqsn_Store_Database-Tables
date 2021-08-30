<?php
$con=mysqli_connect('localhost','id17494817_print_shastra','_Vp0|hQ!w!ZoKtqe','id17494817_print_shastradb');
$sql="select * from product";
$res=mysqli_query($con,$sql);
$html='<style></style><Table border="2px">';
	$html='<style></style><Table border="2px">';
		$html.='<tr><td>product_id</td><td>product_name</td><td>product_image</td><td>brand_id</td><td>categories_id</td><td>quantity</td><td>rate</td><td>active</td><td>status</td><td>cost_price</td></tr>';
while($row=mysqli_fetch_assoc($res)){
$html.='<tr><td>'.$row['product_id'].'</td><td>'.$row['product_name'].'</td><td>'.$row['product_image'].'</td><td>'.$row['brand_id'].'</td><td>'.$row['categories_id'].'</td><td>'.$row['quantity'].'</td><td>'.$row['rate'].'</td><td>'.$row['active'].'</td><td>'.$row['status'].'</d><td>'.$row['cost_price'].'</d></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=product.xls');
echo $html;


?>