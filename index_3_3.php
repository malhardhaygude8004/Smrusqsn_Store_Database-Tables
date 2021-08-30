<?php
$con=mysqli_connect('localhost','id17494817_print_shastra','_Vp0|hQ!w!ZoKtqe','id17494817_print_shastradb');
$sql="select * from order_item";
$res=mysqli_query($con,$sql);
$html='<style></style><Table border="2px">';
	$html='<style></style><Table border="2px">';
		$html.='<tr><td>order_item_id</td><td>order_id</td><td>product_id</td><td>quantity</td><td>rate</td><td>total</td><td>order_item_status</td><td>product_wise_discount</td><td>product_wise_discount_amount</td></tr>';
while($row=mysqli_fetch_assoc($res)){
$html.='<tr><td>'.$row['order_item_id'].'</td><td>'.$row['order_id'].'</td><td>'.$row['product_id'].'</td><td>'.$row['quantity'].'</td><td>'.$row['rate'].'</td><td>'.$row['total'].'</td><td>'.$row['order_item_status'].'</td><td>'.$row['product_wise_discount'].'</td><td>'.$row['product_wise_discount_amount'].'</tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=order-item.xls');
echo $html;


?>