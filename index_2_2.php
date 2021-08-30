<?php
$con=mysqli_connect('localhost','id17494817_print_shastra','_Vp0|hQ!w!ZoKtqe','id17494817_print_shastradb');
$sql="select * from orders";
$res=mysqli_query($con,$sql);
$html='<style></style><Table border="2px">';
		$html.='<tr><td>order_id</td><td>order_date</td><td>client_name</td><td>client_contact</td><td>sub_total</td><td>vat</td><td>total_amount</td><td>discount</td><td>grand_total</td><td>paid</td><td>due</td><td>payment_type</td><td>payment_status</td><td>payment_place</td><td>gstn</td><td>order_status</td><td>user_id</td></tr>';
while($row=mysqli_fetch_assoc($res)){
$html.='<tr><td>'.$row['order_id'].'</td><td>'.$row['order_date'].'</td><td>'.$row['client_name'].'</td><td>'.$row['client_contact'].'</td><td>'.$row['sub_total'].'</td><td>'.$row['vat'].'</td><td>'.$row['total_amount'].'</td><td>'.$row['discount'].'</td><td>'.$row['grand_total'].'</td><td>'.$row['paid'].'</td><td>'.$row['due'].'</td><td>'.$row['payment_type'].'</td><td>'.$row['payment_status'].'</td><td>'.$row['payment_place'].'</td><td>'.$row['gstn'].'</td><td>'.$row['order_status'].'</td><td>'.$row['user_id'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=orders.xls');
echo $html;

?>